<?php
include_once './libraries/Database.php';
class User {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllUsers()
    {
        $this->db->query('SELECT * FROM users');
        $results = $this->db->resultSet();
        return $results;
    }

    public function addUser($data)
    {
        $this->db->query('INSERT INTO users (firstname, lastname, email, phone) VALUES (:firstname, :lastname, :email, :phone)');

        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);

        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }

    public function findUserById($id)
    {
        $this->db->query('SELECT * from users WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function updateUser($data)
    {
        $this->db->query('UPDATE users set firstname = :firstname, lastname = :lastname, email = :email, phone = :phone WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);

        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }

    public function deleteUser($id)
    {
        $this->db->query('DELETE FROM users where id = :id');
        $this->db->bind('id', $id);

        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }
}