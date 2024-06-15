<!DOCTYPE html>
<html>
    <head>crud app</head>
    <style>
        table,th,tr,td{
            border: 2px solid black;
        }
    </style>
    <body>
        <?php
            include('config.php')
        ?>
        <div class="form-container">
            <form action=<?php echo $_SERVER['PHP_SELF']?> method="POST">
                <input type="radio" name="task" value="create"><label for="create">create</label><br><br>
                <input type="radio" name="task" value="read"><label for="read">read</label><br><br>
                <input type="radio" name="task" value="update"><label for="update">update</label><br><br>
                <input type="radio" name="task" value="delete"><label for="delete">delete</label><br><br>
                <input type="submit" value="Go">
            </form>
        </div>
        <?php 
            function display(){
                global $conn;
                $sql="select * from students";
                $res=$conn->query($sql);
                echo "<table>";
                echo "<tr>";
                echo "<td>rollno</td>";
                echo "<td>name</td>";
                echo "<td>email</td>";
                echo "</tr>";
                while($row=$res->fetch_array()){
                    echo "<tr>";
                    echo "<td>".$row['rollno']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['task'])){
                    $task=$_POST['task'];
                    
                    if($task==='create'){
                        header('location: create.php');
                        die();
                    }
                    if($task==='update'){
                        header('location: update.php');
                        die();
                    }
                    if($task==='delete'){
                        header('location: delete.php');
                        die();
                    }
                    if($task==='read'){
                        display();
                    }
                }
            }
        ?>
    </body>
</html>