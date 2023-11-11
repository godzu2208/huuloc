<?php
    include "../model/pdo.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `res-user` WHERE id='$id'";
    $edituser = pdo_query_one($sql);
?>