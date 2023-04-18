<?php

class UserDAO {

    private $connection;

    public function __construct() {
        $this -> connection = new Connection();
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM medtec_devs WHERE usernameDev = '$username' AND passwordDev = '$password'";

        $execute = mysqli_query($this -> connection -> getConn(), $sql);
        
        if (mysqli_num_rows($execute) > 0) {
            return true;
        }
        else {
            return false;
        }
    }

    public function logout() {
        session_start();

        session_destroy();
        header('location:index.php?success=logout');
        exit();
    }
}