<?php
namespace App;
use PDO;

class koneksi{
    protected object $db;
    public function __construct()
    {
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=dbalbum", "root", "");
        } catch (\Exception $e){
            die ("Error : " . $e->getMessage());
        }
    }
}