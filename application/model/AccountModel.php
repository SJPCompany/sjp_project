<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 4-4-2017
 * Time: 15:13
 */
class AccountModel {
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    function Checker($username, $password, $role, $email) {
        $sql = "SELECT * FROM account WHERE password=:password";
        $querySelect = $this->db->prepare($sql);
        $parameters = array(':password' => $password);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $querySelect->execute($parameters);

        // Check if the user already exists
        $count = $querySelect->rowCount();
        if ($count < 0) {
            echo "Nothing has been found";
            Register($username, $password, $role, $email);
        } elseif ($count == 1) {

        } else {
            echo "You already exists";
        }
    }

    function Register($username, $password, $role, $email) {
        $sql = "INSERT INTO song (username, password, role, email) VALUES (:username, :password, :role, :email)";
        // Make the password encrypted
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':password' => $password, ':role' => $role, ':email' => $email);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
}