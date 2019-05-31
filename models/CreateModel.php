<?php

namespace Model;

class CreateModel{
    public function creat($city, $description, $image, $isSuccess, $isUploadSuccess){
        if($isSuccess && $isUploadSuccess){
        $creating = Database::$pdo->prepare('INSERT INTO categories (city,description,image) value(?,?,?)');
        $creating = $creating->execute(array($city,$description,$image));
        }
    }
}