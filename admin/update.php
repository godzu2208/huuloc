<?php 
    include "../model/pdo.php";
    
    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
        echo "<pre>";
        print_r($_POST);


        $id = $_POST['id']; 
        $namesp = $_POST['namesp'];
        $motasp = $_POST['motasp'];
        $giasp = $_POST['giasp'];
        $img = $_POST['anhsp'];
        $sql = "UPDATE `san-pham` 
        SET `name`='$namesp', `mota`='$motasp', `price`='$giasp', `img`='$img' 
        WHERE id=".$id;
        pdo_execute($sql);
        
    }
    
    $sql = "SELECT * FROM `san-pham`  ";
    $listsp = pdo_query($sql);
    header('location:quan-ly-san-pham.php');
?>