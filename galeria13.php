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
                <h2  class="first-content-header">I Komunia Święta 2020</h2>

                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23&nbsp;sierpnia
                przeżywaliśmy w&nbsp;naszej Parafii uroczystość I&nbsp;Komunii Świętej.
                Do&nbsp;tego ważnego dnia dzieci wraz z&nbsp;rodzicami przygotowały się
                poprzez uczestnictwo w&nbsp;katechezach parafialnych i&nbsp;spowiedź
                świętą.</p><br/>

                <ul id='gallery'></ul>
                <script>
                    var l = 17,
                        gallery_number = "13",
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
