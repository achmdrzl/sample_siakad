<?php 

class Matkul_model{

    private $table = 'matkul';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatkul()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMatkulById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMatkul($data)
    {
        $query = "INSERT INTO matkul
                    VALUES
                  (null, :nama_matkul, :kuota)";
        
        $this->db->query($query);
        $this->db->bind('nama_matkul', $data['nama_matkul']);
        $this->db->bind('kuota', $data['kuota']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMatkul($id)
    {
        $query = "DELETE FROM matkul WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}