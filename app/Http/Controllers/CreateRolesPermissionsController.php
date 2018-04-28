<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class CreateRolesPermissionsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function createAdminRole()
    {
    	//create the role of admin
    	$role = Role::create(['name' => 'admin']);
    	//create the permission to view sales
        $permission = Permission::create(['name' => 'view sales']);
        //assign the permission to the role
        $role->givePermissionTo($permission);
    }

    public function createCustomerRole()
    {
    	//create the role of customer
    	$role = Role::create(['name' => 'customer']);
    	//create the buy stuff permission
        $permission = Permission::create(['name' => 'buy stuff']);
        //assign the permission to the role
        $role->givePermissionTo($permission);
    }

    public function assignRole() {
    	//get the current user id
    	$currentUserId = \Auth::user()->id;
    	//get the current user role
  		$currentUserRole = \Auth::user()->role;
  		//if the current role is admin assign the admin role
  		if($currentUserRole == 'Admin'){
  			$user = User::find($currentUserId);
        	$user->assignRole('admin');
        	return view('admin');
  		}
  		//if the current role is customer assign the role of customer
  		if($currentUserRole == 'customer'){
  			$user = User::find($currentUserId);
        	$user->assignRole('customer');
        	return view('customer');
  		}
    }
}
