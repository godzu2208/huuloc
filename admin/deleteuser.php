<?php 
    include "../model/pdo.php";
    $id = $_GET['id'];
    // Xoa 
    $sql = "DELETE FROM `res-user` WHERE id=$id ;";
    pdo_execute($sql);

    // Tra ve 

    $sql = "SELECT * FROM `res-user`";
    $listuser = pdo_query($sql);
    header("location:quan-ly-user.php");

?>