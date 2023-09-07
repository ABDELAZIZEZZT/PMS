<?php

class DB
{
    public $con;
    public function __construct()
    {
        try {
            $this->con = new PDO('mysql:host=localhost;dbname=pms', 'root', '');
            $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Throwable $e) {
            echo "zezo";
            die($e->getMessage());
        }
    }

    public function getData($table, $columns = "*", $condition = true,$asArray=true)
    {
        $query = "SELECT $columns FROM $table WHERE $condition";
       
        $data = $this->con->query($query);
        if($asArray)
        return $data->fetchAll();
        else{
            return $data->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function insertData($table,  $col, $data)
    {
       
        $query = "INSERT INTO $table ($col) VALUES ($data) ";
       

        $sql = $this->con->prepare($query);
        return $sql->execute();
    }

    public function updateData($table, $data, $condition)
    {
        foreach ($data as $key => $val) {
            $d[] = "`$key` = '$val'";
        }
        $info = implode(', ', $d);
        $query = "UPDATE $table SET $info WHERE $condition";
        $sql = $this->con->prepare($query);
        return $sql->execute();
    }

    public  function deleteData($table, $condition = true)
    {
        $query = "DELETE FROM $table WHERE $condition";
        $sql = $this->con->prepare($query);
        return $sql->execute();
    }
}