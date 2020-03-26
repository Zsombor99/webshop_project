<?php
class Loadup extends Controller
{
    public static $Title = "Loadup";
    public static function GetCountOfCategory() {
        return self::Query("SELECT COUNT(`Id`) FROM `Category`")[0][0];
    }
    public static function GetNameOfCategoryById($Id) {
         return self::Query("SELECT `Name` FROM `Category` WHERE `Id` = ?", [$Id])[0][0];
    }
    public static function _Loadup() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Msg = "";
            $ImageTarget = "./assets/pictures/" . basename($_FILES['Image']['name']); 
            $ProductImage = $_FILES['ProductImage']['name'];
            $ProductCategory = $_POST['ProductCategory'];
            $ProductName = $_POST['ProductName'];
            $ProductPrice = $_POST['ProductPrice'];
            $ProductQuantity = $_POST['ProductQuantity'];
            $ProductDescription = $_POST['ProductDescription'];
            $CategoryId = self::Query("SELECT `Id` FROM `Category` WHERE `Name` = ?", [$ProductCategory]);
            self::Query("INSERT INTO `Product` (`Name`,`Image`,`Quantity`, `Description`, `Price`, `CategoryId`)
                                VALUES(?,?,?,?,?,?)",
                                [
                                    $ProductName,
                                    $ProductImage,
                                    $ProductQuantity,
                                    $ProductDescription,
                                    $ProductPrice,
                                    $CategoryId
                                ]
                        );

            if(move_uploaded_file($_FILES['tmp_name']['name'], $ImageTarget)) {
                $Msg = "Image uploaded succesfully";
            } else {
                $Msg = "There was a problem uploading image";
            }      
            header("Location: loadup");
        }     
    }
}