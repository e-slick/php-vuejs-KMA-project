<?php


class MockDB
{
    private $usersArray = array();

    public function addUsersArray($user){
        $this->usersArray[] = $user;
    }

    public function searchUsersArray($user){
        foreach($this->usersArray as $username){
            if($user == $username->getUsername()){
                return true;
            }
        }
    }

    public function displayUsersArray(){
        foreach($this->usersArray as $user){
            echo $user->getUsername();
        }
    }

}
