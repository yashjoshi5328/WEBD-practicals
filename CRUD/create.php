<!DOCTYPE html>
<html>
    <head>
        <title>crud app</title>
    </head>
    <body>
        <div class="form-container">
            <form action=<?php echo $_SERVER['PHP_SELF']?> method="POST">
                <label for="">rollno:</label><input type="number" name="rollno"><br><br>
                <label for="">name:</label><input type="text" name="name"><br><br>
                <label for="">email</label><input type="email" name="email"><br><br>
                <input type="submit" value="create">
            </form>
        </div>
        <?php
            include('config.php');
            if($_SERVER['REQUEST_METHOD']==='POST'){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $rollno=$_POST['rollno'];

                $sql="insert into students(rollno,name,email) values('$rollno','$name','$email')";
                if($conn->query($sql)){
                    echo "<p>CREATED SUCCESSFULLY</P>";
                }

            }
        ?>
    </body>
</html>