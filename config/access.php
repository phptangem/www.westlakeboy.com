<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/27
 * Time: 13:30
 */
return [
    'users'=>[
        /*
         * 用户注册注册是否需要邮箱验证
         */
        'confirm_email'=>true,
    ],
    /*
     *Uses table used to store users
     */
    'users_table' => 'users',
    /*
     * Roles table used by Access to save roles to the database
     */
    'roles_table' => 'roles',
    /*
     * Assigned_roles table used by Access to save assigned roles to the database.
     */
    'assigned_roles_table' => 'assigned_roles',
    /*
     * Permissions used by access to save permissions to the database
     */
    'permissions_table' => 'permissions',
    /*
     *  permission_role used by access to save relationship between permissions and roles to the database.
     */
    'permission_role_table' => 'permission_role',
    /*
     * permission_group used by access to save permission group to the database.
     */
    'permission_group_table' => 'permission_groups',
    /*
     * Table that specifies if one permission is dependent on another
     */
    'permission_dependencies_table' => 'permission_dependencies',
    /*
     * permission user table used by Access to save relationship between permission and users to the database
     * this table is only for permissions that belong directly to a specific user and not a role
     */
    'permission_user_table' => 'permission_user'
];