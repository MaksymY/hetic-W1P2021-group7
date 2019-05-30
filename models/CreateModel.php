<?php
namespace Model;

class CreateModel{
    public function send($city, $description, $image, $isSuccess, $isUploadSuccess){
        if($isSuccess && $isUploadSuccess){
        $req = Database::$pdo->prepare('INSERT INTO categories (city,description,image) value(?,?,?)');
        $res = $req->execute(array($city,$description,$image));
        }
    }
}