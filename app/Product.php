<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function index()
    {
        $user_permissions_group = 1;
        $groups = DB::table('groups')
            ->where('permissions_group', $user_permissions_group)
            ->get();

        //return view('user.index', ['users' => $users]);
    }

    public function get_user_data()
    {
        $user = DB::table('users');
    }
}
