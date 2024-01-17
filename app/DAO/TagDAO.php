<?php

namespace App\DAO;

use App\database\Database;

require '../../vendor/autoload.php';

class TagDAO
{
    public static function getTagIdByName($tagName)
    {
        try {
            $conn = Database::getInstance()->getConnection();
            $sql = "SELECT id FROM `tag` WHERE name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tagName]);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result ? $result['id'] : null;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getTagId($tagid)
    {
        try {
            $conn = Database::getInstance()->getConnection();
            $sql = "SELECT id FROM `tag` WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tagid]);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result ? $result['id'] : null;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
    

    public static function addTag($tag){
        try{
            $conn = Database::getInstance()->getConnection();

            $sql = "INSERT INTO `tag` (`name`) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tag]);
    
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function getAllTags(){
        try{
            $conn = Database::getInstance()->getConnection();
            $sql = "SELECT * FROM `tag`";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
}
