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

                <h2 class="first-content-header"><i class="fa fa-users"></i> Grupy parafialne</h2>

                <div class="card">
                    <div class="card-header">
                        Liturgiczna Służba Ołtarza (ministranci i&nbsp;lektorzy):
                    </div>
                    <div class="col">
                        <p>
                            Zbiórki odbywają się w&nbsp;soboty o&nbsp;godz.&nbsp;10.00.
                        </p>
                    </div>
                </div>
                <br/>

                <div class="card">
                    <div class="card-header">
                        Róże różańcowe:
                    </div>
                    <div class="col">
                        <p>
                            Zmiana tajemnic różańcowych następuje w&nbsp;pierwszą niedzielę miesiąca
                            po&nbsp;Mszy świętej o&nbsp;godz.&nbsp;11.15.
                        </p>
                    </div>
                </div>
                <br/>

                <div class="card">
                    <div class="card-header">
                        Domowy Kościół:
                    </div>
                    <div class="col">
                        <p>
                            Spotkania formacyjne w&nbsp;Kręgach Rodzin odbywają się co&nbsp;miesiąc.
                            Zachęcamy odważne małżeństwa do&nbsp;wejścia na&nbsp;drogę Ruchu Światło-Życie.
                        </p>
                    </div>
                </div>
                <br/>

                <div class="card">
                    <div class="card-header">
                        Legion Maryi:
                    </div>
                    <div class="col">
                        <p>
                            Spotkania odbywają się w&nbsp;środy po&nbsp;Mszy świętej odprawianej
                            o&nbsp;godz.&nbsp;18.00.
                        </p>
                    </div>
                </div>
                <br/>

                <div class="card">
                    <div class="card-header">
                        Parafialny zespół Caritas
                    </div>
                    <div class="col">
                        <p></p>
                    </div>
                </div>
                <br/>

                <div class="card">
                    <div class="card-header">
                        KCPR
                    </div>
                    <div class="col">
                        <p>
                            <a href="http://www.pomocrodzinie.eu/">Strona WWW Katolickiego Centrum Pomocy Rodzinie</a>
                        </p>
                    </div>
                </div>
                <br/>
            </div>
            <?php
            include 'right_pane.php';
            ?>
            <!-- koniec treści głównej -->
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
