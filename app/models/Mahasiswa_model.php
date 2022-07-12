<?php

require_once '../app/core/Connection.php';

class Mahasiswa_model extends Connection
{
    private $dbh; // database handler (using PDO)
    private $stmt; // statement

    public function __construct()
    {
        $con       = new Connection();
        $this->dbh = $con->connect();
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare("SELECT name, nim, prodi, email  FROM mahasiswa");
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
