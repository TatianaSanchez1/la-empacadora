<?php
class Connection
{

    protected $isConn;
    protected $datab;
    protected $transaction;

    public function __construct(
        $username = "root",
        $password = "",
        $host = "localhost",
        $dbname = "la_empacadora",
        $options = []
    ) {

        $this->isConn = TRUE;
        try {
            $this->datab = new PDO("mysql:host={$host};  dbname={$dbname}; charset=utf8", $username, $password, $options);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->transaction = $this->datab;
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //echo 'Connected Successfully!!!';

        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    } //Fin del Constructor 


    //Desconectar de la base de datos
    public function Disconnect()
    {
        $this->datab = NULL; //Cerrar conexion en PDO
        $this->isConn = FALSE;
    }
}
