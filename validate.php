<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <form action=<?php echo $_SERVER['PHP_SELF'];?> method="POST">
            <label>Name:</label><input type="text" name="name"><br><br>
            <label>Email:</label><input type="email" name="email"><br><br>
            <label>Password:</label><input type="password" name="pwd"><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $name=trim($_POST['name']);
            $email=trim($_POST['email']);
            $pwd=trim($_POST['pwd']);
            if(empty($name)){
                echo "name is empty";
            }
            elseif(strlen($name)<6){
                echo "bada chota name hai";
            }
            elseif(!preg_match('/^[a-zA-Z\s]/',$name)){
                echo "elon musk ki aulaad alphabet use krle";
            }
            elseif(empty($email)){
                echo "email is empty";
            }
            elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "abe kya daal ra hai sahi se daal email";
            }
            elseif(strlen($email)<6){
                echo "hadd se jyada chota hoya ni email";
            }
            elseif(empty($pwd)){
                echo "password is empty";
            }
            elseif(strlen($pwd)<6){
                echo "kabtak chota lekr ghumoge (password)";
            }
            else{
                echo "submited successfully";
            }
        }
    ?>
</body>
</html>