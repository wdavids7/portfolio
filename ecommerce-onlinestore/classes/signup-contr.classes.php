<?php

// Creating properties and methods for the sign up controller class
class SignupContr extends Signup
{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    // Creating a separate method inside the signup controller class for error handlers

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if ($this->invalidUid() == false) {
            // echo "Invalid username!";
            header("location: ../index.php?error=invalidusername");
            exit();
        }

        if ($this->invalidEmail() == false) {
            // echo "Invalid email!";
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        if ($this->pwdMatch() == false) {
            // echo "Password don't match";
            header("location: ../index.php?error=passworddontmatch");
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            // echo "Username or email taken!";
            header("location: ../index.php?error=usernameoremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    // Checking for any empty input fields
    private function emptyInput()
    {
        $result;
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Checking if the username is a valid username type
    private function invalidUid()
    {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Checking for a valid email address using a built in php filter
    private function invalidEmail()
    {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Checking that the password is the same for password repeat
    private function pwdMatch()
    {
        $result;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Checking if the user id has been taken
    private function uidTakenCheck()
    {
        $result;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
