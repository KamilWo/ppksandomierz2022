<?php
include_once('/include/start.php');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<?php
include 'head.php';
?>
<body>
<?php
include 'facebook.php';
?>
<div id="outer">
    <main role="main">
        <?php
        include 'menu.php';
        ?>
        <div class="container-fluid">
            <div class="row">
                <!-- treść główna -->
                <div class="col-xs-12 col-md-8">

                    <h2 class="first-content-header text-center">Witamy na&nbsp;oficjalnej stronie Parafii!</h2>
                    <br/>
                    <img class="swiatynia rounded mx-auto d-block" src="static/src/images/swiatynia.jpg"
                         alt="swiatynia.jpg" title="Kościół parafialny"/><br/>
                    <p class="text-center">Zdjęcie: Kościół parafialny</p><br/>
                    <p><strong>Zapraszamy Cię Gościu drogi</strong> do zapoznania się z treścią tej strony internetowej.
                        Znajdziesz tu wszystkie potrzebne informacje oraz kontakt do księży.</p>

                    <h3>Kancelaria parafialna czynna:</h3>

                    <p>codziennie, <strong>od&nbsp;poniedziałku do&nbsp;piątku</strong>,
                        po&nbsp;Mszy Świętej odprawianej o&nbsp;godzinie 18.00.</p>

                    <h3>Strona internetowa Diecezji Sandomierskiej:</h3>

                    <a href="https://www.diecezjasandomierska.pl/">https://www.diecezjasandomierska.pl/</a><br/><br/>

                    <h3>Parafia Podwyższenia Krzyża Świętego na Facebooku:</h3>

                    <div class="fb-page"
                         data-href="https://www.facebook.com/Parafia-Podwy%C5%BCszenia-Krzy%C5%BCa-w-Sandomierzu-186369124901474/"
                         data-tabs="timeline" data-width="500" data-height="700" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote
                                cite="https://www.facebook.com/Parafia-Podwy%C5%BCszenia-Krzy%C5%BCa-w-Sandomierzu-186369124901474/"
                                class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/Parafia-Podwy%C5%BCszenia-Krzy%C5%BCa-w-Sandomierzu-186369124901474/">Parafia
                                Podwyższenia Krzyża w Sandomierzu</a></blockquote>
                    </div>
                </div>
                <?php
                include 'right_pane.php';
                ?>
                <!-- koniec treści głównej -->
            </div>
            <?php
            include '/include/counter.php';
            ?>
        </div>
    </main>
    <?php
    include 'footer.php';
    ?>
</div>
</body>
</html>
