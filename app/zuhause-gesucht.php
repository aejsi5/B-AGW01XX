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
            <div class='content-wrapper'>
                <?php
                    if(isset($_GET["type"]) && trim($_GET["type"]) == 'dogs'){
                        $query = "SELECT * FROM Hunde ORDER BY sort;";
                        $res = mysqli_query($con, $query);
                        while($result = mysqli_fetch_array($res)){
                            echo("
                                <div class='dog-table-div'>
                                    <table class='dog_tbl'>
                                        <tbody>
                                            <tr class=''>
                                                <td class='col_f border_tbl'>Name:</td>
                                                <td class='tbl_val border_tbl'><span>" . $result['Name'] ."</span><span data-emergency='". $result['Notfall'] ."'></span></td>
                                                <td class='pics' rowspan=9 ><div><img src='../static/img/". $result['Bild'] . "' alt=''><img src='../static/img/". $result['Bild2'] . "' alt=''></div><span>" . $result['video'] . "</span></td>
                                            </tr>
                                            <tr class=''>
                                                <td class='col_f border_tbl'>Rasse:</td>
                                                <td class='tbl_val border_tbl'>" . $result['Rasse'] . "</td>
                                            </tr>
                                            <tr class=''>
                                                <td class='col_f border_tbl'>Geschlecht:</td>
                                                <td class='tbl_val border_tbl'>" . $result['Geschlecht'] . "</td>
                                            </tr>
                                            <tr class=''>
                                                <td class='col_f border_tbl'>Im TH seit:</td>
                                                <td class='tbl_val border_tbl'>" . $result['im_TH_seit'] . "</td>
                                            </tr>
                                            <tr class=''>
                                                <td class='col_f border_tbl'>Alter:</td>
                                                <td class='tbl_val border_tbl'>" . $result['Alter'] . "</td>
                                            </tr>
                                            <tr class=''>
                                                <td class='col_f border_tbl'>Abgabegrund:</td>
                                                <td class='tbl_val border_tbl'>" . $result['Abgabegrund'] . "</td>
                                            </tr>
                                            <tr class=''>
                                                <td class='col_f border_tbl'>So bin ich:</td>
                                                <td class='tbl_val border_tbl'>" . $result['So_bin_ich'] . "</td>
                                            </tr>
                                            <tr class=''>
                                                <td class='col_f border_tbl'>Besonderheiten:</td>
                                                <td class='tbl_val border_tbl'>" . $result['Besonderheiten'] . "</td>
                                            </tr>
                                            <tr>
                                                <td class='col_f'>Beschreibung:</td>
                                                <td class='tbl_val'>" . $result['Beschreibung'] . "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>");
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