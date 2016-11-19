<?php
use App\Role;
use App\Permission;
use App\User;

Route::get('/', function () {
    return view('welcome');
});
// Route для страниц администратора
Route::group(['prefix' => 'admin','middleware' => ['role:admin']], function() {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/settings', function () {
        return "this page requires that you be logged in and an Admin ang URI = /admin/settings";
    });
    Route::get('/manage', ['middleware' => ['permission:create-post'], 'uses' => 'Admin\AdminController@manageAdmins']);
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();
/*  для остальных авторизованных пользователей
/   route кроме /home - который обрабатывается в AdminLTE пакете
*/
    Route::get('/settings', function(){
        return "эта страница для авторизованных пользователей URI = /settings";
    });
});


Route::get('/tttttttttttttest', function () {
    $admin = new Role();
    $admin->name         = 'admin';
    $admin->display_name = 'User Administrator'; // optional
    $admin->description  = 'User is allowed to manage and edit other users'; // optional
    $admin->save();

    $owner = new Role();
    $owner->name         = 'owner';
    $owner->display_name = 'Project Owner'; // optional
    $owner->description  = 'User is the owner of a given project'; // optional
    $owner->save();

    $user = User::where('name', '=', 'Alex Birukov')->first();;
    // role attach alias
    $user->attachRole($admin); // parameter can be an Role object, array, or id
    $createPost = new Permission();
    $createPost->name         = 'create-post';
    $createPost->display_name = 'Create Posts'; // optional
// Allow a user to...
    $createPost->description  = 'create new blog posts'; // optional
    $createPost->save();

    $editUser = new Permission();
    $editUser->name         = 'edit-user';
    $editUser->display_name = 'Edit Users'; // optional
// Allow a user to...
    $editUser->description  = 'edit existing users'; // optional
    $editUser->save();

    $admin->attachPermission($createPost);
// equivalent to $admin->perms()->sync(array($createPost->id));

    $owner->attachPermissions(array($createPost, $editUser));

    return 'Ok назначены роли !!!';
});
