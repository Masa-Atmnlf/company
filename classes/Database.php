<?php
class Database
{
    private $server_name = 'localhost';
    private $user_name = 'root';
    private $password = 'root';
    private $db_name = 'the_company';
    protected $conn;

    public function __construct()
    {
      $this->conn = new mysqli($this->server_name, $this->user_name, $this->password, $this->db_name);
      // mysql represents connection between pfp and a MySQL Database
      // $this->conn is now on object the class mysqli
      // $this->conn has now a connection to our database 'the_company'

      if($this->conn->connect_error){
        die('Unable to connect to the database: ' . $this->conn->connect_error);
        // die() will help us display the error message of connect_error property
      }
    }
}

?>