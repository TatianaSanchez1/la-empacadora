<?php
require_once('../database/Database.php');
require_once('../interface/iUser.php');
class User extends Database implements iUser
{

    public function user_login($id, $password)
    {
        $sql = "SELECT *
				FROM users 
				WHERE id = ?
				AND password = ?
		";
        return $this->getRow($sql, [$id, $password]);
    } //end login_user

} //en class User

$user = new User();
