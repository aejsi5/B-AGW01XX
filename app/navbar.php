<?php
    echo("
    <div class='navbar-wra'>
        <div class='logo-wrapper'>
            <div class='logo'>
                <img src='../static/img/Banner1.gif' alt='Logo Tierheim Gelnhausen'>
            </div>
            <div class='oh-div'>
                <img src='../static/img/oh.png' alt='Öffnungszeiten'>
            </div>
        </div>
        <div class='main-nav-wrapper'>
            <ul class='main-nav'>
                <li class='mnav-li' id='link-h'>
                    <span class='mnav-span'>Home</span>
                </li>
                <li class='mnav-li link-zs'>
                    <span class='mnav-span'>Zuhause gesucht</span>
                    <ul class='subnav collapse'>
                        <div class='hover-space'></div>
                        <i class='fas fa-caret-up'></i>
                        <a href='zuhause-gesucht.php?type=dogs'><li class='subnav-li link-zs-h'>Hunde</li></a>
                        <a href='zuhause-gesucht.php?type=cats'><li class='subnav-li link-zs-k'>Katzen</li></a>
                        <a href='zuhause-gesucht.php?type=other'><li class='subnav-li link-zs-a'>Andere Tiere</li></a>
                        <a href='zuhause-gesucht.php?type=white'><li class='subnav-li link-zs-w'>Weiße Schnauzen</li></a>
                        <a href='zuhause-gesucht.php?type=missed'><li class='subnav-li link-zs-v'>Vermisste Tiere</li></a>
                    </ul>
                </li>
                <li class='mnav-li link-zf'>
                    <span class='mnav-span'>Zuhause gefunden</span>
                    <ul class='subnav collapse'>
                        <div class='hover-space'></div>
                        <i class='fas fa-caret-up'></i>
                        <a href='demo.php'><li class='subnav-li link-demo'>Hunde</li></a>
                        <a href='demo.php'><li class='subnav-li link-demo'>Katzen</li></a>
                        <a href='demo.php'><li class='subnav-li link-demo'>Andere Tiere</li></a>
                        <a href='demo.php'><li class='subnav-li link-demo'>Weiße Schnauzen</li></a>
                        <a href='demo.php'><li class='subnav-li link-demo'>Vermisste Tiere</li></a>
                    </ul>
                </li>
                <li class='mnav-li link-g'>
                    <span class='mnav-span'>Galerie/Archiv</span>
                    <ul class='subnav collapse'>
                        <div class='hover-space'></div>
                        <i class='fas fa-caret-up'></i>
                        <a href='demo.php'><a href=''><li class='subnav-li link-demo'>Lorem Ipsum</li></a>
                        <a href='demo.php'><a href=''><li class='subnav-li link-demo'>Dolorem Est</li></a>
                    </ul>
                </li>
                <li class='mnav-li link-k'>
                    <span class='mnav-span'>Kontakt/Impressum</span>
                    <ul class='subnav collapse'>
                        <div class='hover-space'></div>
                        <i class='fas fa-caret-up'></i>
                        <a href='demo.php'><li class='subnav-li link-demo'>Lorem Ipsum</li></a>
                        <a href='demo.php'><li class='subnav-li link-demo'>Dolorem Est</li></a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class='mobile-nav collapse'>
        <span class='btn btn-info btn-mobile-nav'>Menü</span>
        <div class='mobile-nav-container'>
            <div class='navbar-wra navbar-wra-mobile-hide'>
                <div class='logo-wrapper'>
                    <div class='logo'>
                        <img src='../static/img/Banner1.gif' alt='Logo Tierheim Gelnhausen'>
                    </div>
                    <div class='oh-div'>
                        <img src='../static/img/oh.png' alt='Öffnungszeiten'>
                    </div>
                </div>
                <div class='main-nav-wrapper'>
                    <ul class='main-nav'>
                        <li class='mnav-li mnav-li-mobile' id='link-h'>
                            <span class='mnav-span mnav-span-mobile'>Home</span>
                        </li>
                        <li class='mnav-li mnav-li-mobile link-zs'>
                            <span class='mnav-span mnav-span-mobile'>Zuhause gesucht</span>
                            <ul class='subnav subnav-mobile collapse'>
                                <div class='hover-space'></div>
                                <i class='fas fa-caret-up'></i>
                                <a href='zuhause-gesucht.php?type=dogs'><li class='subnav-li subnav-li-mobile link-zs-h'>Hunde</li></a>
                                <a href='zuhause-gesucht.php?type=cats'><li class='subnav-li subnav-li-mobile link-zs-k'>Katzen</li></a>
                                <a href='zuhause-gesucht.php?type=other'><li class='subnav-li subnav-li-mobile link-zs-a'>Andere Tiere</li></a>
                                <a href='zuhause-gesucht.php?type=white'><li class='subnav-li subnav-li-mobile link-zs-w'>Weiße Schnauzen</li></a>
                                <a href='zuhause-gesucht.php?type=missed'><li class='subnav-li subnav-li-mobile link-zs-v'>Vermisste Tiere</li></a>
                            </ul>
                        </li>
                        <li class='mnav-li mnav-li-mobile link-zf'>
                            <span class='mnav-span mnav-span-mobile'>Zuhause gefunden</span>
                            <ul class='subnav subnav-mobile collapse'>
                                <div class='hover-space'></div>
                                <i class='fas fa-caret-up'></i>
                                <a href='demo.php'><li class='subnav-li subnav-li-mobile link-demo'>Hunde</li></a>
                                <a href='demo.php'><li class='subnav-li subnav-li-mobile link-demo'>Katzen</li></a>
                                <a href='demo.php'><li class='subnav-li subnav-li-mobile link-demo'>Andere Tiere</li></a>
                                <a href='demo.php'><li class='subnav-li subnav-li-mobile link-demo'>Weiße Schnauzen</li></a>
                                <a href='demo.php'><li class='subnav-li subnav-li-mobile link-demo'>Vermisste Tiere</li></a>
                            </ul>
                        </li>
                        <li class='mnav-li mnav-li-mobile link-g'>
                            <span class='mnav-span mnav-span-mobile'>Galerie/Archiv</span>
                            <ul class='subnav subnav-mobile collapse'>
                                <div class='hover-space'></div>
                                <i class='fas fa-caret-up'></i>
                                <a href='demo.php'><a href=''><li class='subnav-li subnav-li-mobile link-demo'>Lorem Ipsum</li></a>
                                <a href='demo.php'><a href=''><li class='subnav-li subnav-li-mobile link-demo'>Dolorem Est</li></a>
                            </ul>
                        </li>
                        <li class='mnav-li mnav-li-mobile link-k'>
                            <span class='mnav-span mnav-span-mobile'>Kontakt/Impressum</span>
                            <ul class='subnav subnav-mobile collapse'>
                                <div class='hover-space'></div>
                                <i class='fas fa-caret-up'></i>
                                <a href='demo.php'><li class='subnav-li subnav-li-mobile link-demo'>Lorem Ipsum</li></a>
                                <a href='demo.php'><li class='subnav-li subnav-li-mobile link-demo'>Dolorem Est</li></a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>");
?>