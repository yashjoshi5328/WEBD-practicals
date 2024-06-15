<!DOCTYPE html>
<html>
    <head>
        <title>crud app</title>
    </head>
    <body>
        <div class="form-container">
            <form action=<?php echo $_SERVER['PHP_SELF']?> method="POST">
                <label for="">rollno:</label><input type="number" name="rollno"><br><br>
                <input type="submit" value="delete">
            </form>
        </div>
        <?php
            include('config.php');
            if($_SERVER['REQUEST_METHOD']==='POST'){
                $rollno=$_POST['rollno'];

                $sql="delete from students where rollno='$rollno'";
                if($conn->query($sql)){
                    echo "<p>DELETED SUCCESSFULLY</P>";
                }

            }
        ?>
    </body>
</html>