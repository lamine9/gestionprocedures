<?php
include "Database.php";
class DemandeDAO extends Database{
    public function __construct(){
        parent:: __construct();
    }

    public function findAll(){
        $sql = "SELECT * FROM DEMANDES";
        $statement = $this->getConnection()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function add($data){
        $sql = "INSERT INTO DEMANDES(title, description) VALUES (:title, :description)";
        $statement = $this->getConnection()->prepare($sql);
        $statement->execute([
            'title' => $data['title'],
            'description' => $data['description']
        ]);
    }

    public function findById($id){

    }

    public function update($demandes){

    }

    public function delete($id){

    }

    private function getStatement($sql){
        //return statement
    }
}