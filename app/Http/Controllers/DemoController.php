<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\User;


class DemoController extends Controller
{
    
    protected $guard_name = 'web';
    
    function process() {
        return redirect('/users');
    }

    function assignUsers() {
      $users = User::where('permission_id', 2)->get();
    //   dd($users);
      if(!empty($users)){
      foreach($users as $user){
        $user->assignRole('admin');

        $user->permission_id = 1;
        $user->save();
         
      }
      return redirect('/orders');
    }// end of if statement

   
   
    }
    
    function createWriter () {
        //dd('createWriter');
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'change shipping status']);

        $role->givePermissionTo($permission);
        // $permission->assignRole($role);

    }

    function assignPermission () {
        $user = User::find(6);
        dd($user);
        $user->givePermissionTo('edit articles');
        dd($user);
    }

    function assignRole () {
        $user = User::find(6);
        $user->assignRole('writer');
    }

    function demo () {
        $user = User::find(18);
        dd($user);

        if( $user->hasPermissionTo('edit articles') ) {
            dump('user has permission to edit articles');
        } else {
            dump('user does not have permission to edit articles');
        }

        dump( $user->can('edit articles') );

        if ( $user->can('edit articles') ) {
            dump('user can edit articles');
        } else {
            dump('user cannot edit articles');
        }

        if ( $user->hasRole('writer') ) {
            dump('user has the role of writer');
        } else {
            dump('user role is not writer');
        }

        


    }
}