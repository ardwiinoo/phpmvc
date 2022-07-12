<?php

class Connection
{

    public function connect()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc_tuts';

        try {
            return new PDO($dsn, 'root', ''); // username, pass
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
