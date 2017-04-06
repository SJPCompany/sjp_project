<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Model\Account;

class HomeController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/headerstart.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';

    }

    public function doLogin() {
        echo "I got here";
        //die("HomeController.doLogin()");
        // if whe have post data add song
        var_dump($_POST);
        if(isset($_POST)) {
            if(isset($_POST['submit'])) {
                echo "I WORK FINALY";
            } else {
                die("Submit is not working sorry");
            }
        } else {
            die("POST is not working sorry");
        }
        /* This wont work on the way we send it to the model
        if (isset($submit)) {
            print_r($_POST);
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $email = $_POST['email'];
            $user = new Account();
            $user->getUser($username, $password, $role, $email);
        }
            if (isset($_POST["submit"])) {
            // Instance new Model (Account)
            $user = new Account();
            // do getUser() in model/Account.php
            $user->getUser($_POST['username'], $_POST['password'], $_POST['role'], $_POST['email']);
        }

        */
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function StartPage()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/startpage.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function exampleTwo()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_two.php';
        require APP . 'view/_templates/footer.php';
    }
}
