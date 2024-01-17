<?php

namespace App\controllers;
use App\models\CategoryModel;

require_once '../../vendor/autoload.php';


class CategoryController
{

    public static function addCategory(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addcatg'])) {
            $category = $_POST['category'];

            CategoryModel::addCategory($category);
            header("Location: category");
            exit();
        }
    }


    public static function updateCategory(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
        $categoryId = base64_decode($_GET['id']);
        $newCategoryName = $_POST['newCategory'];

        CategoryModel::updateCategory($categoryId, $newCategoryName);
        header("Location: category");
        exit();
    }
}

   
}
