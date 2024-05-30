<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password_recived = $_POST['password'];

        $servername = "127.0.0.1";
        $username = "root";
        $password = "root";
        $dbname = "myWebsite";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM USERS WHERE email = '$email' AND password = '$password_recived'";
        echo $sql;

        $ret = $conn->query($sql);

        echo $ret->num_rows;

        if($ret->num_rows == 0){
            echo "User not found";
            session_start();
            $_SESSION['incorrect_email'] = true;
            header("Location: loginForm.php");
        }
        else{

            session_start();
            $_SESSION['incorrect_email'] = false;
            $fetched = $ret->fetch_assoc();

            $_SESSION['firstName'] = $fetched['firstName'];
            $_SESSION['lastName'] = $fetched['lastName'];
            header("Location: addEntry.php");
        }
        
        $conn->close();
    }
    else{
        session_start();
        if(isset($_SESSION['firstName']) == false){
            header("Location: loginForm.php");
        }
    }
    ?>
</body>
</html>