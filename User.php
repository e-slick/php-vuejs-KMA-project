<?php
    include 'MockDB.php';

class User
{
    private $postAmount;
    private $username;

    public function __construct($uname, $pass)
    {
        $this->postAmount = 0;
        $this->username = $uname;
        $uarray[$uname] = $pass;
    }

    public function getUsername(){
        return $this->username;
    }

    public function resetUsername($uname){
        $this->username = $uname;
    }

    public function getAmtPosts(){
        return $this->postAmount;
    }
}