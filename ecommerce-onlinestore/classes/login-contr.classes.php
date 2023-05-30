<?php

// Creating properties and methods for the sign up controller class
class LoginContr extends Login
{

    private $uid;
    private $pwd;

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    // Creating a separate method inside the signup controller class for error handlers

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->pwd);
    }

    // Checking for any empty input fields
    private function emptyInput()
    {
        $result;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
