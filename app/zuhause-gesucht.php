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
        include 'db_con.php'

        if(isset($_GET['type'])){
            if($_GET['type']=='dogs'){
                $query = "SELECT * FROM 'hunde' ORDER BY 'sort';"
                $res = mysql_query($query);
                echo $res;
            }
        }
    ?>

    <div class="navbar-wra">
        <div class="logo-wrapper">
            <div class="logo">
                <img src="../static/img/Banner1.gif" alt="Logo Tierheim Gelnhausen">
            </div>
            <div class="oh-div">
                <img src="../static/img/oh.png" alt="Öffnungszeiten">
            </div>
        </div>
        <div class="main-nav-wrapper">
            <ul class="main-nav">
                <li class="mnav-li" id="link-h">
                    <span class="mnav-span">Home</span>
                </li>
                <li class="mnav-li link-zs">
                    <span class="mnav-span li-active">Zuhause gesucht</span>
                    <ul class="subnav collapse">
                        <li class="subnav-li link-zs-h">Hunde</li>
                        <li class="subnav-li link-zs-k">Katzen</li>
                        <li class="subnav-li link-zs-a">Andere Tiere</li>
                        <li class="subnav-li link-zs-w">Weiße Schnauzen</li>
                        <li class="subnav-li link-zs-v">Vermisste Tiere</li>
                    </ul>
                </li>
                <li class="mnav-li link-zf">
                    <span class="mnav-span">Zuhause gefunden</span>
                    <ul class="subnav collapse">
                        <li class="subnav-li link-demo">Hunde</li>
                        <li class="subnav-li link-demo">Katzen</li>
                        <li class="subnav-li link-demo">Andere Tiere</li>
                        <li class="subnav-li link-demo">Weiße Schnauzen</li>
                        <li class="subnav-li link-demo">Vermisste Tiere</li>
                    </ul>
                </li>
                <li class="mnav-li link-g">
                    <span class="mnav-span">Galerie/Archiv</span>
                    <ul class="subnav collapse">
                        <li class="subnav-li link-demo">Lorem Ipsum</li>
                        <li class="subnav-li link-demo">Dolorem Est</li>
                    </ul>
                </li>
                <li class="mnav-li link-k">
                    <span class="mnav-span">Kontakt/Impressum</span>
                    <ul class="subnav collapse">
                        <li class="subnav-li link-demo">Lorem Ipsum</li>
                        <li class="subnav-li link-demo">Dolorem Est</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <main>
        <div class="sidebar">
            <ul class="sidebar">
                <li class="sidebar-li link-zs-h">Hunde</li>
                <li class="sidebar-li link-zs-k">Katzen</li>
                <li class="sidebar-li link-zs-a">Andere Tiere</li>
                <li class="sidebar-li link-zs-w">Weiße Schnauze</li>
                <li class="sidebar-li link-zs-v">Vermisste Tiere</li>
            </ul>
        </div>
        <div class="content">
            <div class="content-wrapper">
                <div id="schutzabgabevertrag">
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
                    <img src="../static/img/SAVE0002.jfif" alt="" id="schutzabgabevertrag_p1" class="imgsav">
                    <img src="../static/img/SAVE0003.jpg" alt="" id="schutzabgabevertrag_p2" class="imgsav">
                </div>
            </div>
        </div>
    </main>


    <script src="../static/js/jquery-3.5.1.js"></script>
    <script src="../static/DataTables/datatables.js"></script>
    <script src="../static/js/bootstrap.js"></script>
    <script src="../static/js/app.js"></script>
</body>
</html>