<?php
class User_model {
    private $table = 'users';
    private $db;

    private $name = 'Tarisa';
    public function getUser() {
        return $this->name;
    }

    public function __construct() {
        $this->db = new database;
    }

    public function getAllUser() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultAll();
    }

    public function getUserById($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE
        id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function addUser ($data = []) {
        $this->db->query("INSERT INTO {$this->table} (email, username, first_name, last_name, password) VALUES (:email, :username, :first_name, :last_name, :password)");
    
        foreach ($data as $column => $value) {
            $this->db->bind(":$column", $value);
        }

        return $this->db->execute();
    }

    public function getUserByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username");

        $this->db->bind(':username', $username);

        return $this->db->resultSingle();
    }
}