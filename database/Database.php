<?php

include_once('Connection.php');

class Database extends Connection
{
    public function __construct()
    {
        parent::__construct();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function getRow($query, $params = [])
    {
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getRows($query, $params = [])
    {
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //Agregar filas
    public function insertRow($query, $params = [])
    {
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return TRUE;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //Actualizar filas
    public function updateRow($query, $params = [])
    {
        $this->insertRow($query, $params);
        return true;
    }

    //Eliminar filas
    public function deleteRow($query, $params = [])
    {
        $this->insertRow($query, $params);
        return true;
    }

    //get ultimo id
    public function lastID()
    {
        $lastID = $this->datab->lastInsertId();
        return $lastID;
    }
}
