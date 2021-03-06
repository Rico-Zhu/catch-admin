<?php
// 角色
$router->resource('roles', '\catchAdmin\permissions\controller\Role');
// 角色列表
$router->get('/role/get/permissions', '\catchAdmin\permissions\controller\Role@getPermissions');
// 权限
$router->resource('permissions', '\catchAdmin\permissions\controller\Permission');
$router->put('permissions/show/<id>', '\catchAdmin\permissions\controller\Permission@show');

// 部门
$router->resource('departments', '\catchAdmin\permissions\controller\Department');
// 岗位
$router->resource('jobs', '\catchAdmin\permissions\controller\Job');

$router->get('jobs/all', '\catchAdmin\permissions\controller\Job@getAll');

// 用户
$router->resource('users', '\catchAdmin\permissions\controller\User');
// 切换状态
$router->put('users/switch/status/<id>', '\catchAdmin\permissions\controller\User@switchStatus');
$router->put('users/recover/<id>', '\catchAdmin\permissions\controller\User@recover');
$router->get('users/get/roles', '\catchAdmin\permissions\controller\User@getRoles');
$router->get('user/info', '\catchAdmin\permissions\controller\User@info');