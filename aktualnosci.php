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
            <div class="col">
                <h2 class="first-content-header"><i class="fa fa-newspaper"></i> Aktualności, poczynając od najnowszych</h2>
                <?php
                include 'last_post.php';
                include 'last_post_other.php';
                ?>
                <h4 class="mt-2">Poprzednie wpisy przeniesiono do <a href="archiwum.php">archiwum</a>.</h4>
                <?php
                include '/include/counter.php';
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
