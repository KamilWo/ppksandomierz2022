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
                <h2  class="first-content-header">NAWRACAJCIE SIĘ I&nbsp;WIERZCIE W&nbsp;EWANGELIĘ<br/> Rekolekcje
                    Wielkopostne 2016</h2>

                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wielki Post rozpoczęliśmy parafialnymi
                    rekolekcjami, które trwały od&nbsp;środy popielcowej do&nbsp;niedzieli.
                    Poprowadził je&nbsp;ks.&nbsp;Jan Brzozowski ze&nbsp;zgromadzenia Kanoników Regularnych.</p><br/>

                <ul id='gallery'></ul>
                <script>
                    var l = 17,
                        gallery_number = "12",
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
