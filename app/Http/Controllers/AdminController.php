<?php

namespace App\Http\Controllers;

use App\Departments;
use App\Dispatch;
use App\Incoming;
use App\Offices;
use App\Roles;
use App\Routes;
use App\User;
use App\UserRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{


    public function Dashboard()
    {
        $value = Auth::user();
        if ($value->user_role_id != null) {
            $role_ids = json_decode('[' . Auth::user()->userroles->role_id . ']', true);
            for ($x = 0; $x <= sizeof($role_ids[0]) - 1; $x++) {
                $links[] = Routes::whereId($role_ids[0][$x])->first();
            }
        } else {
            $links = null;
        }
      
        Session::put('routes', $links);
        $incomingCount = Incoming::orderByDesc('id')->where('user_id', Auth::user()->id)->count();
        $countDispatch = Dispatch::orderByDesc('id')->where('user_id', Auth::user()->id)->count();
        return view('dashboard', compact('incomingCount', 'countDispatch'));
    }

    public function RoleIndex()
    {
        $roles = Roles::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function AddRole(Request $request)
    {
        Roles::create(['role' => $request->role]);
        return back()->with('msg', 'Role added successfully');
    }

    public function EditRole(Request $request)
    {
        Roles::whereId($request->id)->update(['role' => $request->role]);
        return back()->with('msg', 'Role Updated successfully');
    }

    public function DepartmentIndex()
    {
        $departments = Departments::all();
        return view('admin.department.index', compact('departments'));
    }

    public function AddDepartment(Request $request)
    {
        Departments::create(['long_name' => $request->long_name, 'short_name' => $request->short_name]);
        return back()->with('msg', 'Department added successfully');
    }

    public function EditDepartment(Request $request)
    {
        Departments::whereId($request->id)->update(['long_name' => $request->long_name, 'short_name' => $request->short_name]);
        return back()->with('msg', 'Department Updated successfully');
    }


    public function AssignPrivilegeIndex()
    {

        return view('admin.privilege.index');
    }

    public function AssignPrivilegeForm()
    {
           
        $privileges = Routes::all();
        $users = User::get()->all();
        if (Session::get('user_id') == null) {
            $data = null;
            $userRoles = null;

        } else {
        
            $data = $this->getSelectedRolesLogic();
            $userRoles = $data[0];

        }

        $me = Session::get('id');
        return view('admin.privilege.form', compact('privileges', 'users', 'data', 'me', 'userRoles'));
    }

    public function getUserRoles(Request $request)
    {
        Session::put('id', $request->user_id);
        $result = UserRoles::where('user_id', $request->user_id)->first();
        Session::put('user_id', $result);
        return back();
    }


    public function getSelectedRolesLogic()
    {
        $data = Session::get('user_id');
        $data = json_decode('[' . $data->role_id . ']', true);
        return $data;
    }

    public function AssignPrivilege(Request $request)
    {
        $user_id = Session::get('id');
        $user_role_exist = UserRoles::where('user_id', $user_id)->get()->first();
        if ($user_role_exist == null) {
            $data = implode(',', $request->role_id);
            $value = "[" . "" . $data . "" . "]";
            $result = UserRoles::create(['user_id' => $user_id, 'role_id' => $value]);
            $this->setUserRole($user_id, $result->id);
        } else {
            UserRoles::whereId($user_role_exist->id)->update(['role_id' => $request->role_id]);
        }

        return back()->with('msg', 'Privileges granted  to user successfully');

    }

    public function UserAccountsIndex()
    {
        $users = User::all();
        $department = Departments::all();
        $offices = Offices::all();
        return view('admin.user_account.index', compact('users', 'department', 'offices'));
    }

    public function RegisterUser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return back()->with('msg', 'User Account Created successfully');
    }

    public function setUserRole($user_id, $user_role_id)
    {
        User::whereId($user_id)->update(['user_role_id' => $user_role_id]);
    }

    public function OfficesIndex()
    {
        $departments = Departments::all();
        $offices = Offices::all();
        return view('admin.offices.index', compact('departments', 'offices'));
    }

    public function AddOffice(Request $request)
    {
        Offices::create($request->all());
        return back()->with('msg', 'Office Added Successfully');
    }

    public function IncomingIndex()
    {
        $offices = Offices::all();
        $incoming = Incoming::orderByDesc('id')->where('user_id', Auth::user()->id)->get()->all();
        $getOfficeMembers = User::where('office_id', Auth::user()->office_id)->get()->all();

        return view('incoming.index', compact('offices', 'incoming', 'getOfficeMembers'));
    }

    public function SaveIncoming(Request $request)
    {
        $data = $request->all() + array('user_id' => Auth::user()->id);
        Incoming::create($data);
        return back()->with('msg', 'Incoming indexed Successfully');
    }

    public function DispatchIndex()
    {
        $offices = Offices::all();
        $incoming = Dispatch::orderByDesc('id')->where('user_id', Auth::user()->id)->get()->all();
        $getOfficeMembers = User::where('office_id', Auth::user()->office_id)->get()->all();

        return view('dispatch.index', compact('offices', 'incoming', 'getOfficeMembers'));
    }

    public function SaveDispatch(Request $request)
    {

        $data = $request->all() + array('user_id' => Auth::user()->id);
        Dispatch::create($data);
        return redirect('dispatch-index')->with('msg', 'Dispatch indexed Successfully');
    }

    public function tackingIndex()
    {
        $offices = Offices::all();
        $result = Dispatch::orderByDesc('id')->where('user_id', Auth::user()->id)->get()->all();
        return view('tracking.index', compact('result', 'offices'));
    }

    public function searchFile(Request $request)
    {
        $arg = $request->reg_no;
        $offices = Offices::all();
        $file_incoming = Incoming::where('reg_no', $arg)->get()->all();
        $file_dispatch = Dispatch::where('reg_no', $arg)->get()->all();
        return view('tracking.results', compact('file_dispatch', 'file_incoming', 'arg', 'offices'));

    }

    public function resetPasswordIndex(Request $request)
    {
        $users = User::all();
        return view('admin.reset_password', compact('users'));
    }

    public function resetPassword(Request $request)
    {
        User::whereId($request->user_id)->update(['password' => Hash::make('password')]);
        return back()->with('msg', 'User Password Reset Successfully');
    }

    public function changePasswordIndex()
    {
        return view('change_password');
    }

    public function changePassword(Request $request)
    {
        User::whereId(Auth::user()->id)->update(['password' => Hash::make($request->password)]);
        return back()->with('msg', 'User Password Changed Successfully');
    }

    public function DecisionBoard()
    {
        return view('dispatch.decision');
    }

    public function checkMemoAvailability(Request $request)
    {
        $arg = $request->reg_no;
        $file_incoming = Incoming::where('reg_no', $arg)->get()->all();
        $file_dispatch = Dispatch::where('reg_no', $arg)->get()->all();
        if (($file_incoming && $file_dispatch) == null) {
            return redirect('/dispatch-form');
        } else {
            if ($file_incoming !== null) {
                $data = Incoming::where('reg_no', $arg)->get()->first();
            } else {
                $data = Dispatch::where('reg_no', $arg)->get()->first();
            }
        }
        $getOfficeMembers = User::where('office_id', Auth::user()->office_id)->get()->all();
        $offices = Offices::all();
        return view('dispatch.dispatch_form', compact('data', 'getOfficeMembers', 'offices'));
    }

    public function dispatchForm()
    {
        $getOfficeMembers = User::where('office_id', Auth::user()->office_id)->get()->all();
        $offices = Offices::all();
        return view('dispatch.form',compact('getOfficeMembers','offices'));
    }
}
