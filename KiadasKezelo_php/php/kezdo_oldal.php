<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/kezdo_oldal.css">
    <title>Document</title>
</head>

<body>

    <!--
Into this file, we create a layout for welcome page.
-->

    <?php
    require_once('connection.php');

    $id = $_SESSION['id'];
    $nev = $email = $password = '';
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $nev = $row["nev"];
            $email = $row["email"];
            $password = $row["jelszo"];
        }
    }

    ?>
    <div class="koszones">

        <h1>
             <?php echo 'Üdvözöllek'. $nev ?>
        </h1>

    </div>

    <a href="logout.php">Logout</a>

</body>

</html>