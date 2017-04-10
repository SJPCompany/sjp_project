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
        //die("HomeController.doLogin()");
        if ($_POST['username'] == '' || $_POST['password'] == ''|| $_POST['email'] == '') {
            die("Some fields has been left empty");
        }

        if(isset($_POST)) {
            if(isset($_POST['submit'])) {
                echo "I WORK FINALY"; echo "<br />";
                $username = $_POST['username'];
                $password = $_POST['password'];
                $role = $_POST['role'];
                $email = $_POST['email'];
                $user = new Account();
                $user->getUsers($username, $password, $role, $email);
            } else {
                die("Submit is not working sorry");
            }
        } else {
            die("POST is not working sorry");
        }
    }

    public function StartPage()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/startpage.php';
        require APP . 'view/_templates/footer.php';
    }
}
