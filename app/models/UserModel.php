<?php
    class UserModel extends Model {
        public function add($name, $email){
            try {
                $query = "INSERT INTO users (name, email) VALUES (:name, :email)";
                $this->db->prepare($query);
                $this->db->bindValue(':name', $name);
                $this->db->bindValue(':email', $email);
                $result = $this->db->execute();
                return $result;
            } catch (PDOException $e) {
                // Optionally log the error
                return false;
            }
        }
    }
?>