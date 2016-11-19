<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.11.2016
 * Time: 21:01
 */
namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';
    protected $fillable = ['name', 'display_name', 'description'];
}