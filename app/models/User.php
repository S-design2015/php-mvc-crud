<?php
class User {
    private $conn;
    // private $table = "users";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        // $stmt = $this->conn->prepare("SELECT * FROM " . $this->table);
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt;
    }

    public function create($name, $email) {
        $stmt = $this->conn->prepare("INSERT INTO users(name, email) VALUES(:name, :email)");
        return $stmt->execute(['name' => $name, 'email' => $email]);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        // return $stmt->fetch(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public function update($id, $name, $email) {
        $stmt = $this->conn->prepare("UPDATE users SET name=:name, email=:email WHERE id=:id");
        return $stmt->execute(['id'=>$id,'name'=>$name,'email'=>$email]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id=:id");
        return $stmt->execute(['id'=>$id]);
    }
}
?>