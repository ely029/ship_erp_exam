<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function loginPage()
    {
        return view('index');
    }
    public function index()
    {
        $users = User::where('role_id', '<>', 1)->get();
        return view('users.index')
            ->with('users', $users);
    }

    public function login()
    {
        $request = request()->all();
        if (Auth::attempt(array('email' => $request['email'], 'password' => $request['password']))){
            return redirect('/dashboard');
        } else {
            return redirect('/')
                ->withErrors('email and password not match')
                ->withInput();
        }
    }

    public function createPage()
    {
        return view('users.create');
    }

    public function create()
    {
        $request = request()->all();
        $request['password'] = '';
        $request['role_id'] = 0;
        User::create($request);
        return redirect('/dashboard')->with('success', 'User created successfully');
    }

    public function editPage($user)
    {
        $users = User::where('id', $user)->get();
        return view('users.edit')->with('users', $users);
    }

    public function edit()
    {
        $request = request()->all();
        User::where('id', $request['id'])->update([
            'name' => $request['name'],
            'phone_number' => $request['phone_number'],
            'gender' => $request['gender'],
            'address' => $request['address'] ?? '',
            'email' => $request['email'],
            'nationality' => $request['nationality'] ?? '',
        ]);
        return redirect('/dashboard')->with('success', 'User updated successfully');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect('/dashboard')->with('success', 'User deleted successfully');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
