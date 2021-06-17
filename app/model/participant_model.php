<?php

class participant_model{
    
    private $db;

    public function __construct()
    {
        
        $this->db = new Database;

    }

    public function getParticipant(){
        $this->db->query("SELECT * FROM sumbangan ");
        return $this->db->resultSet();
    }

    public function insertDonation($data){
        $query = "INSERT INTO sumbangan
                    VALUES 
                    ('', :nama, :email, :rekening, :donasi)";
        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('email', htmlspecialchars($data['email']));
        $this->db->bind('rekening', htmlspecialchars($data['rekening']));
        $this->db->bind('donasi', htmlspecialchars($data['donasi']));

        $this->db->execute();
        
        return $this->db->rowCount();
    }
}