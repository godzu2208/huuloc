
<?php
    include "../model/pdo.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `san-pham` WHERE id='$id'";
    $edit=pdo_query_one($sql);
    
?>



