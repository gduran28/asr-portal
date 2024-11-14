<?php 
  class connection {
    private $servername = "localhost";
    private $username = "root";
    private $password = "admin123";
    private $db = "grupo_griffin";

    public $conn;

    private function connect() {
      $this->conn = mysqli_connect($this->servername, $this->username, $this->password,$this->db);
      if(!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    }

    private function disconnect() {
      $this->conn->close();
    }

    public function executeQuery($query) {
      try {
        $this->connect();
        $results = $this->conn->query($query);
        return $results;
      } catch (Exception $e) {
        echo "something went wrong ".$e;
      } finally {
        $this->disconnect();
      }
    }
  }
?>