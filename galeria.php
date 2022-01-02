<?php
include_once('/include/start.php');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<?php
include 'head.php';
?>
<body>
<main role="main">
    <?php
    include 'menu.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- treść główna -->
            <div class="col-md-8 col-sm-12">

                <h2 class="first-content-header"><i class="fa fa-images"></i> Albumy zdjęć</h2>

                <div class="card">
                    <div class="card-header">
                        Najnowsze galerie
                    </div>
                    <ol class="list-group">
                        <li class="list-group-item">
                            <a href="galeria13.php"><i class="fa fa-images"></i> I Komunia Święta 2020</a>
                        </li>
                    </ol>
                </div>
                <hr/>

                <div class="card">
                    <div class="card-header">
                        Galerie o świątyni
                    </div>
                    <ol class="list-group">
                        <li class="list-group-item">
                            <a href="galeria1.php"><i class="fa fa-images"></i> Świątynia i otoczenie</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria2.php"><i class="fa fa-images"></i> Prace brukarskie wokół kościoła</a>
                        </li>
                    </ol>
                </div>
                <hr/>

                <div class="card">
                    <div class="card-header">
                        Galerie Jubileuszowe
                    </div>
                    <ol class="list-group">
                        <li class="list-group-item">
                            <a href="galeria5.php"><i class="fa fa-images"></i> Galeria 1</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria5a.php"><i class="fa fa-images"></i> Galeria 2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria6.php"><i class="fa fa-images"></i> Galeria 3</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria6a.php"><i class="fa fa-images"></i> Galeria 4</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria6b.php"><i class="fa fa-images"></i> Galeria 5</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria7.php"><i class="fa fa-images"></i> Galeria 6</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria7a.php"><i class="fa fa-images"></i> Galeria 7</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria8.php"><i class="fa fa-images"></i> Galeria 8</a>
                        </li>
                    </ol>
                </div>
                <hr/>

                <div class="card">
                    <div class="card-header">
                        Pozostałe galerie
                    </div>
                    <ol class="list-group">
                        <li class="list-group-item">
                            <a href="galeria3.php"><i class="fa fa-images"></i> Marsz dla Życia 2012</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria4.php"><i class="fa fa-images"></i> Boże Ciało 2012</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria9.php"><i class="fa fa-images"></i> Odpust parafialny 2012</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria10.php"><i class="fa fa-images"></i> Odpust tytułu Parafii i kościoła 2013</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria11.php"><i class="fa fa-images"></i> Uroczystość Bierzmowania 1 maja 2014 r.</a>
                        </li>
                        <li class="list-group-item">
                            <a href="galeria12.php"><i class="fa fa-images"></i> Rekolekcje Wielkopostne 2016 r.</a>
                        </li>
                    </ol>
                </div>
                <br/>
            </div>
            <?php
            include 'right_pane.php';
            ?>
        </div>
        <!-- koniec treści głównej -->
    </div>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
