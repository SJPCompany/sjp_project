<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 6-4-2017
 * Time: 10:01
 */

namespace Mini\Model;

use Mini\Core\Model;

class Account extends Model
{
    public function getUsers($username, $password, $role, $email)
    {
        $sql = "SELECT * FROM account WHERE username = :username";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // Check if the user already exists
        $count = $query->rowCount();
        if ($count == 0) {
            echo "Nothing has been found";
            $user = new Account();
            $user->registerUser($username, $password, $role, $email);
        } elseif ($count == 1) {
            $this->checkRole();
        } else {
            echo "You already exists";
        }

    }

    public function registerUser($username, $password, $role, $email) {
        $sql = "INSERT INTO account (username, password, role, email) VALUES (:username, :password, :role, :email)";
        $query = $this->db->prepare($sql);
        // encrypt the password
        $password = password_hash($password, PASSWORD_BCRYPT);
        $parameters = array(':username' => $username, ':password' => $password, ':role' => $role, ':email' => $email);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    public function checkRole() {
        $sql = "SELECT * FROM account";
        $query = $this->db->prepare($sql);

        $query->execute();
        $role = $query->fetch()->role;

        if (isset($role)) {
            if($role == 'Admin') {
                $_SESSION['admin'] = true;
            }
        }
        /*
         * $page = new HomeController();
         * $page->StartPage();
         */
        //  header("Location:" . URL . "home/start");
        header('location: ' . URL . 'home/startpage');
        return $role;
    }
}

