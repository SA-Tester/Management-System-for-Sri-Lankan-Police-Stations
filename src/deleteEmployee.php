<?php
require './classes/class-db-connector.php';

use classes\DBConnector;
$dbcon = new DBConnector();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $empID=$_GET["empID"];
        try {
                $con = $dbcon->getConnection();
                $query = "DELETE FROM employee WHERE `employee`.`empID` = ?";
                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $empID);
                $pstmt->execute();
                if($pstmt->rowCount() > 0){
                    header("Location: new-employee.php");
                    
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }

        ?>
    </body>
</html>
