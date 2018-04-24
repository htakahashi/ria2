<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Role extends \Spatie\Permission\Models\Role
{
	$admin = Role::create(['name' => 'admin']);


	$customer = Role::create(['name' => 'customer']);

}
