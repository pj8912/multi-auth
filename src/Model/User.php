<?php

namespace jp\MultiAuth\Model;

use jp\MultiAuth\Crendentials;

class User
{
    private $conn;
    private $table = "users";
    public $columns = [];
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    

    public function checkIfUserExists($cred)
    {
        $sql = "SELECT * FROM {$this->table} WHERE user_uname= :usercred or user_email = :usercred";
        $stmt = $this->conn($sql);
        $stmt->bindParam(':usercred', $cred);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch the first result row

        if ($user) {
            return true; // User exists
        } else {
            return false; // User doesn't exist
        }
    }
}
