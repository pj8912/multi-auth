<?php

namespace jp\MultiAuth;
class Crendentials{

    private $fullname;
    private $email;
    private $username;
    private $password;
    private $first_name;
    private $last_name;

    private $OAuthProvider;
    private $OAuthId;

    // set user fullname
    public function setFullName(string $name)
    {
        $this->fullname = $name;
    }

    // set user email
    public function setEmail($email)
    {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new \Exception("Not valid email");
      }
      else{$this->email = $email;}
    }

    // set user Username
    public function setUserName(string $username)
    {
        $this->username =  $username;
    }

    // set user firstname
    public function setFirstName($fname)
    {
        $this->first_name = $fname;
    }


    // set user lastname
    public function setLastName($lname)
    {
        $this->last_name = $lname;
    }

    // set user password
    public function setPassword($pwd)
    {
        $this->password = $pwd;
    }

    // set OAuth Provider
    public function setOauthProvider(string $provider)
    {
        $this->OAuthProvider = $provider;
    }

    // set OAuth Id
    public function setOauthId(int $id)
    {
        $this->OAuthId = $id;
    }


    // get user fullname
    public function getFullName(): string
    {
        return $this->fullname;
    }

    // get user email
    public function getEmail()
    {
        return  $this->email;
    }

    // g useter Username
    public function getUserName()
    {
        return $this->username;
    }

    // get user firstname
    public function getFirstName():string
    {
        return $this->first_name;
    }


    // get user lastname
    public function getLastName():string
    {
        return $this->last_name;
    }

    // get user password
    public function getPassword()
    {
        return $this->password ;
    }

    // get OAuth Provider
    public function getOauthProvider()
    {
        return $this->OAuthProvider;
    }

    // get OAuth Id
    public function getOauthId()
    {
        return $this->OAuthId ;
    }


}
