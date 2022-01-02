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
                <h2 class="first-content-header">Galeria 1</h2>
                <p>Galeria przedstawia różne ujęcia świątyni oraz budynków plebanii i&nbsp;centrum edukacji
                    Parafii p.w. Podwyższenia Krzyża Świętego w&nbsp;Sandomierzu.</p><br/>

                <ul id='gallery'></ul>
                <script>
                    var l = 34,
                        gallery_number = "1",
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

                    // var videos_list = [{}];
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
