
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form and validate</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name</label>echo 
        <input type="name" name="name" placeholder="Name"><br><br>

        <label for="email">email</label>
        <input type="email" name="email" placeholder="Name"><br><br>

        <label for="website">email</label>
        <input type="website" name="website" placeholder="website"><br><br>
 
    <label for="name">'password</label>
        <input type="password" name="password" placeholder="password"><br><br>
   
        <input type="submit"  value="Submit">
   
    </form>

    <?php

function test_input($data){
    $data=trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }
   
    $name = $email= $password = '';
    $nameErr = $emailErr = $passwordErr = '';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST['name'])){
            $nameErr = "Name is required";
        }else{
            $name = test_input($_POST['name']);
        }

        if(empty($_POST['email'])){
            $emailErr = "email is required";
        }else{
            $email = test_input($_POST['email']);
        }
    
        $password = test_input($_POST['password']);

    }

    
    echo test_input($name);
    echo test_input($email);

?>
</body>
</html>


