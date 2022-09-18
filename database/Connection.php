<?php

class Connection
{
    protected $isConn;
    protected $database;
    protected $transaction;

    //Constructor para realizar la conexion
    public function __construct(
        $username = "root",
        $password = "",
        $host = "localhost",
        $dbname = "la_empacadora",
        $options = []
    ) {

        $this->isConn = TRUE;

        try {
            $this->database = new PDO("mysql:host={$host};dbname={$dbname}; charset=utf8", $username, $password, $options);

            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->transaction = $this->datab;
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //Desconectar la base de datos
    public function Disconnect()
    {
        $this->database = NULL;
        $this->isConn = FALSE;
    }
}
