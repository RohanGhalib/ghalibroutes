<?php
class Database {
  private $host = 'localhost';
  private $db_name = 'introtapsv2';
  private $username = 'root';
  private $password = '';
  private $conn;

  // Connect to the database
  public function connect() {
    $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

    if ($this->conn->connect_error) {
      die('Connection Error: ' . $this->conn->connect_error);
    }

    return $this->conn;
  }

  // Prepare an SQL statement
  public function prepare($sql) {
    $conn = $this->connect();
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
      die('Prepare Error: ' . $conn->error);
    }

    return $stmt;
  }
}
$db = new Database();
?>
