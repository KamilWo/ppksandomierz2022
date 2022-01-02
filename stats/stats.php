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
            <div class="col-xs-12 col-md-8">
                <?php
                include '/include/stats.php';
                ?>
            </div>
            <!-- koniec treści głównej -->
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
