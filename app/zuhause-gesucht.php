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
        include 'db_con.php';            
    ?>

    <?php
        include 'navbar.php';
    ?>
    <main>
        <div class="sidebar">
            <ul class="sidebar">
                <a href='zuhause-gesucht.php?type=dogs'><li class="sidebar-li link-zs-h">Hunde</li></a>
                <a href='zuhause-gesucht.php?type=cats'><li class="sidebar-li link-zs-k">Katzen</li></a>
                <a href='zuhause-gesucht.php?type=other'><li class="sidebar-li link-zs-a">Andere Tiere</li></a>
                <a href='zuhause-gesucht.php?type=white'><li class="sidebar-li link-zs-w">Weiße Schnauze</li></a>
                <a href='zuhause-gesucht.php?type=missed'><li class="sidebar-li link-zs-v">Vermisste Tiere</li></a>
            </ul>
        </div>
        <div class="content">
            <div class="content-wrapper">
                <div class="dog-table-div">
                    <table class="dog_tbl">
                        <tbody>
                            <tr>
                                <td class="col_f">Name:</td>
                                <td class="tbl_val">$result['Name']</td>
                                <td class="emergency">$result['Notfall']</td>
                                <td class="pic_one">$result['Bild'] $result['video']</td>
                                <td class="pic_two">$result['Bild2']</td>
                            </tr>
                            <tr>
                                <td class="col_f">Rasse:</td>
                                <td class="tbl_val">$result['Rasse']</td>
                            </tr>
                            <tr>
                                <td class="col_f">Geschlecht:</td>
                                <td class="tbl_val">$result['Geschlecht']</td>
                            </tr>
                            <tr>
                                <td class="col_f">Im TH seit:</td>
                                <td class="tbl_val">$result['im_TH_seit']</td>
                            </tr>
                            <tr>
                                <td class="col_f">Alter:</td>
                                <td class="tbl_val">$result['Alter']</td>
                            </tr>
                            <tr>
                                <td class="col_f">Abgabegrund:</td>
                                <td class="tbl_val">$result['Abgabegrund']</td>
                            </tr>
                            <tr>
                                <td class="col_f">So bin ich:</td>
                                <td class="tbl_val">$result['So_bin_ich']</td>
                            </tr>
                            <tr>
                                <td class="col_f">Besonderheiten:</td>
                                <td class="tbl_val">$result['Besonderheiten']</td>
                            </tr>
                            <tr>
                                <td class="col_f">Beschreibung:</td>
                                <td class="tbl_val">$result['Beschreibung']</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php
                    if(isset($_GET["type"]) && trim($_GET["type"]) == 'dogs'){
                        $query = "SELECT * FROM Hunde ORDER BY sort;";
                        $res = mysqli_query($con, $query);
                        while($result = mysqli_fetch_array($res)){
                            echo($result['Name']);
                        };
                    }
                    else {
                        echo("
                        <div id='schutzabgabevertrag'>
                            <h1>Schutz- und Abgabevertrag</h1>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet.</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
                            <img src='../static/img/SAVE0002.jfif' alt='' id='schutzabgabevertrag_p1' class='imgsav'>
                            <img src='../static/img/SAVE0003.jpg' alt='' id='schutzabgabevertrag_p2' class='imgsav'>
                        </div>
                        ");
                    };
                ?>
                
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