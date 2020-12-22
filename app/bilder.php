<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../static/DataTables/datatables.css" media="screen">
    <link rel="stylesheet" href="../static/css/app.css" media="screen">
    <title>Zuhause Gesucht</title>
</head>
<body>

    <?php
        session_start();
        include 'db_con.php';            
    ?>

    <?php
        include 'navbar.php';
    ?>
    <main>
        <div class="content" style="background-color: #FFF;">
            <div class='content-wrapper'>
                <?php
                    if(isset($_GET["id"])){
                        $id = $_GET['id'];
                        $query = "SELECT id, Name, Bild, Bild2 FROM Hunde WHERE id = '".$id."';";
                        $res = mysqli_query($con, $query);
                        while($result = mysqli_fetch_array($res)){
                            echo("<h1>Unser(e) ".$result['Name']."</h1>");
                            echo("<div class='dog_pics_div_big'>
                                    <img class='dog_pic_big' src='../static/img/". $result['Bild'] . "' alt=''>
                                    <img class='dog_pic_big' src='../static/img/". $result['Bild2'] . "' alt=''>
                                </div>");
                        };
                    };
                ?>
                <a href="<?php echo($_SERVER['HTTP_REFERER']) ?>"><span class="btn back_to_table btn-outline-info">Zurück</span></a>
            </div>
        </div>
    </main>


    <script src="../static/js/jquery-3.5.1.js"></script>
    <script src="../static/DataTables/datatables.js"></script>
    <script src="../static/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/9b040eb53d.js" crossorigin="anonymous"></script>
    <script src="../static/js/app.js"></script>
</body>
</html>