<?php
include 'function.php';

if(isset($_POST["addCar"])){
    $profile = $_FILES['profile']['name'];
    $name = $_POST["name"];
    $color = $_POST["color"];
    $power = $_POST["power"];
    $tire = $_POST["tire"];
    $seat = $_POST["seat"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $rate = $_POST["rate"];
    $display = $_POST["verify"];
    $desc = $_POST["desc"];

    $obj = new dashboard();
    $obj->car($name, $profile,$color, $power, $tire, $seat, $brand, $model, $rate, $display, $desc);
}

if(isset($_POST["menu"])){
    $name = $_POST["name"];
    $link = $_POST["link"];
    $active = $_POST["active"];    

    $obj = new dashboard();
    $obj->menu($name, $link,$active);
}


if(isset($_POST["edit_menu"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $link = $_POST["link"];
    $active = $_POST["active"];    

    $obj = new dashboard();
    $obj->edit_menu($id, $name, $link,$active);
}
?>