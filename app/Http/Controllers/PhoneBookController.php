<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumbers;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    public function store()
    {
        $request = request()->all();
        $user = User::create($request);
        unset($request['full_name']);
        $request['user_id'] = $user->id;
        $count = count($request['phone_number']);
        for ($eee = 0; $eee < $count; $eee++) {
            PhoneNumbers::create([
                'user_id' => $user->id,
                'phone_number' => $request['phone_number'][$eee],
            ]);
        }

        return redirect('/')->with([
            'alert.message' => 'Phone contact created',
        ]);
    }

    public function createPage()
    {
        return view('users.create');
    }

    public function index()
    {
        $users = PhoneNumbers::with('users')->get();
        return view('index')->with('users', $users);
    }


    public function editPage($id)
    {
        $users = PhoneNumbers::with('users')->where('id', $id)->get();
        return view('users.edit')->with('users', $users);
    }

    public function edit($id)
    {
        $request = request()->all();
        PhoneNumbers::where('id', $id)->update([
            'phone_number' => $request['phone_number'],
        ]);
        User::where('id', $request['id'])->update([
            'full_name' => $request['full_name'],
        ]);
        
        return redirect('/')->with([
            'alert.message' => 'Phone contact edited successfully',
        ]);
    }

    public function deleteConfirmation($id)
    {
        return view('users.delete_confirmation')->with('id', $id);
    }

    public function delete($id)
    {
        PhoneNumbers::where('id', $id)->delete();

        return redirect('/')->with([
            'alert.message' => 'Phone Number deleted successfully',
        ]);
    }
}
