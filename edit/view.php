 <?php
        include "connection.php";
        $q = "Select * from category";
        $result = mysqli_query($conn, $q);
        if($result){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='edit.php?id=".$row['id']."'>edit </a>".$row['name'];
                echo "<br>";
            }
        }
        else{
            echo "Can not connect to database";
        }
        ?>
