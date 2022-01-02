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
                <h2 class="first-content-header">Odpust parafialny 2012</h2>
                <p class="text-indent">14 września 2012. w naszej Parafii odbył się
                    doroczny odpust tytułu kościoła Podwyższenia Krzyża Świętego. Uroczystej Sumie o godzinie 18.00
                    przewodniczył oraz wygłosił kazanie administrator Parafii Opatrzności Bożej w Stalowej Woli ksiądz
                    doktorant Krzysztof Sibiga.</p><br/>

                <ul id='gallery'></ul>
                <script>
                    var l = 100,
                        gallery_number = "9",
                        images_data = [];

                    for (var i = 1; i < l + 1; i++) {
                        images_data.push({
                            title: "Zdjecie " + i,
                            url: "static/gallery/"
                                + gallery_number
                                + "/"
                                + ('00' + i).slice(-3)
                                + "_b.jpg",
                            thumb: "static/gallery/"
                                + gallery_number
                                + "/"
                                + ('00' + i).slice(-3)
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
