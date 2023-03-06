<?php
        
        include "../php/db_conn.php";
        if( isset($_GET['id']))
        {
            $id = $_GET['id'];
        }
        echo $id;
        $sql = "UPDATE carinfo SET status='1' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . $conn->error;
        }

        header("Location: carinfo.php");
?>