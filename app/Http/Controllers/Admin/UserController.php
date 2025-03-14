<?php

namespace App\Http\Controllers\Admin;

use App\Enum\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function list($role)
    {
        $role = Role::roleByName($role);
        if($role === null)
        {
            return redirect()->back()->with('error', 'Invalid role selected.');
        }

        $users = User::where('role', $role)->paginate(5);
        return view('admin.users.list', compact('users'));
    }

    public function insert($role, Request $request)
    {
        $role = Role::roleByName($role);
        if($role === null)
        {
            return redirect()->back()->with('error', 'Invalid role selected.');
        }

        if($request->method() === "POST")
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'cofirmation' => 'required|confirmed:password',
            ]);

            if($validator->fails())
            {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()->all()
                ]);
            }

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = Role::from($role->value);
            $user->profile = '';
            $user->save();

            $role = strtolower($role->name);

            return response()->json([
                'status' => true,
                'data' => [
                    'redirectUrl' => route('admin.user.list', strtolower($role)),
                    'message' => "New {$role} recorded successfully."
                ]
            ]);
        }
        else
        {
            return view('admin.users.insert');
        }
    }

    public function update($role, Request $request)
    {
        $role = Role::roleByName($role);
        if($role === null)
        {
            return redirect()->back()->with('error', 'Invalid role selected.');
        }

        $user = User::find($request->id);
        if($user !== null)
        {
            if($request->method() === "POST")
            {
                $validator = Validator::make($request->all(), [
                    'name' => "required",
                    'email' => "required|email|unique:users,email,$request->id,id",
                ]);

                if($request->password !== null)
                {
                    $validator->addRules([
                        'password' => 'required',
                        'password_confirmation' => 'required|confirmed:password',
                    ]);
                }

                if($validator->fails())
                {
                    return response()->json([
                        'status' => false,
                        'errors' => $validator->errors()->all()
                    ]);
                }

                $user->name = $request->name;
                $user->email = $request->email;
                if($request->password !== null)
                {
                    $user->password = Hash::make($request->password);
                }
                $user->save();

                return response()->json([
                    'status' => true,
                    'data' => [
                        'redirectUrl' => route('admin.user.list', request('role')),
                        'message' => 'User updated successfully.'
                    ]
                ]);
            }
            else
            {
                return view('admin.users.update', compact('user'));
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Selected user not found.');
        }
    }

    public function delete($role, $id)
    {
        $role = Role::roleByName($role);
        if($role === null)
        {
            return redirect()->back()->with('error', 'Invalid role selected.');
        }

        User::find($id)->delete();
        return response()->json([
            'status' => true,
            'data' => [
                'message' => 'User deleted successfully.'
            ]
        ]);
    }
}
