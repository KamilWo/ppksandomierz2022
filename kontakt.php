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

                <h2 class="first-content-header"><i class="fa fa-address-book"></i> Strona kontaktowa</h2>

                <div class="card">
                    <div class="card-header">
                        Adres i telefon:
                    </div>
                    <div class="col">
                        <p>Parafia Podwyższenia Krzyża Świętego<br/>
                            ul. Ożarowska 1<br/>
                            27-600 SANDOMIERZ<br/><br/>
                            Tel.: (+48) 15 832 72 52</p>
                    </div>
                </div>
                <hr/>

                <div class="card">
                    <div class="card-header">
                        Nr konta:
                    </div>
                    <div class="col">
                        <p style="font-weight: bold;">Bank Pekao SA&nbsp;&nbsp;&nbsp;56 1240 2786 1111 0000 3683 8828</p>
                    </div>
                </div>
                <hr/>

                <div class="card">
                    <div class="card-header">
                        E-mail:
                    </div>
                    <div class="col">
                        <a href="mailto:ppksandomierz@onet.pl">ppksandomierz@onet.pl</a>
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
