<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bejelentkezes.css">
    <title>Document</title>
</head>

<body>

    <?php

    require_once('connection.php');
    $email = $name = $password = $pwd = '';

    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);
    $sql = "SELECT * FROM user WHERE email = '$email' AND jelszo='$password' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $id = $row["id"];
            $email = $row["email"];
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
        }
        header("Location: kezdo_oldal.php");
    } else { ?>

        
        <br>
       
        <div id="hiba_uzenet">

            <h1>
            <?php echo "Helytelen email vagy jelszó!" ?>
            </h1>

        </div>


    <?
    }
    ?>

</body>

</html>