<?php
  
  class AuthModel {
    private $users = [];
    public function addUser($usersname, $password){
        $this->users[$usersname] = password_hash($password, PASSWORD_DEFAULT);
    }
    public function getUser($usersname) : null | string{
        return $this->users[$usersname] ?? null;

    }
  }