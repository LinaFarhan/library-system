<!-- git checkout feature/users-class
 -->
 
<?php
namespace LibrarySystem\Users;

abstract class User {
    protected $name;
    protected $email;
    protected $role;

    abstract public function getPermissions();
}