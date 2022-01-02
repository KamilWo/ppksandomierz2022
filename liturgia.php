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

                <h2 class="first-content-header"><i class="fa fa-book-reader"></i> Liturgia i nabożeństwa</h2>

                <div class="card">
                    <div class="card-header">
                        Msze święte w&nbsp;niedziele i&nbsp;święta:
                    </div>
                    <div class="col">
                        <p>07:30&nbsp;&nbsp;&nbsp;09:30&nbsp;&nbsp;&nbsp;11:15&nbsp;&nbsp;&nbsp;12:30&nbsp;&nbsp;&nbsp;18:00</p>
                    </div>
                </div>
                <hr/>
                <div class="card">
                    <div class="card-header">
                        Msze święte w dni powszednie:
                    </div>
                    <div class="col">
                        <p>06:30&nbsp;&nbsp;&nbsp;18:00</p>
                    </div>
                </div>
                <hr/>
                <div class="card">
                    <div class="card-header">
                        Nabożeństwa w&nbsp;niedziele:
                    </div>
                    <div class="col">
                        <p>
                            17:30 Nieszpory, nabożeństwa majowe i&nbsp;październikowe
                        </p>
                    </div>
                </div>
                <hr/>
                <div class="card">
                    <div class="card-header">
                        Nabożeństwa w&nbsp;dni powszednie:
                    </div>
                    <div class="col">
                        <p>17:30 (Nabożeństwa majowe, różaniec)<br/>
                            Po Mszy świętej:<br/>
                            <strong>wtorki</strong> - Koronka do&nbsp;Miłosierdzia Bożego<br/>
                            <strong>środy</strong> - Nowenna do&nbsp;Matki Bożej Nieustającej Pomocy<br />
                            <strong>czwartki</strong> - Adoracja Najświętszego Sakramentu od&nbsp;godz.&nbsp;17:30</p>
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
