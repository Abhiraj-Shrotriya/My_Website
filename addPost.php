<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>

</head>
<body>
    <?php

        if($_POST['cancel']){
            header("Location: blog.php", true);
        }
        elseif ($_POST['preview']){
            header("Location: preview.html", true);
        }
        elseif($_POST['edit']){
            header("Location: addEntry.php", true);
        }
        else{
            $title = $_POST["title"];
            $content = $_POST["content"];
            $datetime = date('Y-m-d H:i:s');

            $servername = "127.0.0.1";
            $username = "root";
            $password = "root";
            $dbname = "myWebsite";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $sql = "INSERT INTO POSTS VALUES ('$title', '$content', '$datetime')";
                echo $sql;
            }

            $ret = $conn->query($sql);

            if($ret == true){
                echo "Post added successfully";
                header("Location: blog.php");
            }
            else{
                echo "Error adding post";
                echo date('Y-m-d H:i:s');
            }
            
            $conn->close();
        }
    ?>
</body>
</html>