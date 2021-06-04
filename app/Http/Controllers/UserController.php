<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getCustomers()
    {
        $user = DB::table('users')->select('full_name', 'email')->get();
        return [
            'details' => $user,
        ];
    }

    public function customerById($id)
    {
        $user = DB::table('users')->select('full_name', 'email', 'username', 'gender', 'country', 'city', 'phone')->where('id', $id)->get();
        return [
            'details' => $user,
        ];
    }
}
