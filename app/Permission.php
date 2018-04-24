<?php

namespace App;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    $viewOrders = Permission::create(['name' => 'view orders']);

   	$viewCustomerPage = Permission::create(['name' => 'view customer page']);
}
