<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.11.2016
 * Time: 20:58
 */

namespace app;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $table = 'roles';
    protected $fillable = ['name', 'display_name', 'description'];
}
