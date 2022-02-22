<?php


namespace App\classes;


class Auth
{
    protected $email;
    protected $authEmail;
    protected $password;
    protected $authPassword;
    public function __construct($post=null)
    {
        if($post)
        {
            $this->email =$post['mail'];
            $this->password = $post['pass'];
        }
    }

    public function login()
    {
        $this->authEmail = 'hera@gmail.com';
        $this->authPassword = '1234';
        if($this->email == $this->authEmail && $this->password == $this->authPassword)
        {
            session_start();
            $_SESSION['id']=rand(10,1000);
            header('Location: action.php?pages=file-upload');
        }
        else
        {
            return 'Invalid Input, Try again';
        }

    }

    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?pages=login');
    }

}