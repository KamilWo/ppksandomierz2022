<?php
include_once('/include/start.php');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<?php
include 'head_gallery.php';
?>
<body>
<main role="main">
    <?php
    include 'menu.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- treść główna -->
            <div class="col">
                <h2 class="first-content-header">Odpust parafialny 2013</h2>
                <p class="text-indent">W czasie dorocznych uroczystości odpustowych
                    młodzież parafii Podwyższenia Krzyża Świętego w Sandomierzu, 14 września 2013 r. zainaugurowała cykl
                    przygotowań do sakramentu bierzmowania. W trwającym Roku Wiary uczniowie II klas gimnazjum złożyli
                    swoje wyznanie wiary.
                </p>
                <p class="text-indent">W homilii ks. Andrzej Bąk zachęcał
                    młodych oraz ich rodziców do odważnego dawania świadectwa przywiązania do Chrystusa. Potwierdzeniem
                    wypowiedzianego Credo była adoracja krzyża. Parafialne świętowanie zakończyła adoracja Najświętszego
                    Sakramentu.
                </p>
                <p class="text-indent">Przygotowanie do Bierzmowania oprócz
                    lekcji religii obejmuje katechezy parafialne prowadzone przez kapłanów i katechetów oraz aktywny
                    udział w życiu wspólnot kościelnych.
                </p><br/>

                <ul id='gallery'></ul>
                <script>
                    var l = 28,
                        gallery_number = "10",
                        images_data = [];

                    for (var i = 1; i < l + 1; i++) {
                        images_data.push({
                            title: "Zdjecie " + i,
                            url: "static/gallery/"
                                + gallery_number
                                + "/"
                                + ('0' + i).slice(-2)
                                + "_b.jpg",
                            thumb: "static/gallery/"
                                + gallery_number
                                + "/"
                                + ('0' + i).slice(-2)
                                + "_t.jpg",
                        });
                    }

                    // var videos = [{}];
                </script>
                <script src="static/src/js/gallery.js"></script>

                <p>&nbsp;</p>
            </div>
        </div>
        <!-- koniec treści głównej -->
    </div>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
