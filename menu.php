<!-- nagłówek treści strony i jej tytuł -->
<header role="header">
    <h1>
        <a href="index.php">Sandomierska Rzymsko-katolicka Parafia <br/>
            PODWYŻSZENIA KRZYŻA ŚWIĘTEGO</a>
    </h1>
    <h2>Patron: św. Brat Albert Chmielowski</h2>
</header>
<!-- koniec nagłówka treści strony -->
<!-- menu nawigacyjne strony -->
<nav class="navbar navbar-expand-lg navbar-light" role="navigation">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
        $active = '';
        $request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
        switch ($request_uri[0]) {
            case '/parafia.php':
                $active = 'parafia';
                break;
            case '/aktualnosci.php':
                $active = 'aktualnosci';
                break;
            case '/intencje_mszalne.php':
                $active = 'intencje_mszalne';
                break;
            case '/liturgia.php':
                $active = 'liturgia';
                break;
            case '/galeria.php':
            case '/galeria1.php':
            case '/galeria2.php':
            case '/galeria3.php':
            case '/galeria4.php':
            case '/galeria5.php':
            case '/galeria5a.php':
            case '/galeria6.php':
            case '/galeria6a.php':
            case '/galeria6b.php':
            case '/galeria7.php':
            case '/galeria7a.php':
            case '/galeria8.php':
            case '/galeria9.php':
            case '/galeria10.php':
            case '/galeria11.php':
            case '/galeria12.php':
                $active = 'galeria';
                break;
            case '/grupy.php':
                $active = 'grupy';
                break;
            case '/kontakt.php':
                $active = 'kontakt';
                break;
            case '/archiwum.php':
            case '/archiwum1.php':
            case '/archiwum2.php':
            case '/archiwum3.php':
            case '/archiwum4.php':
            case '/archiwum5.php':
            case '/archiwum6.php':
            case '/archiwum7.php':
            case '/archiwum8.php':
                $active = 'archiwum';
                break;
            default:
                $active = 'index';
                break;
        }
    ?>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="/index.php" class="nav-link<?php if ($active == 'index') {echo ' active';} ?>"
                    accesskey="1" title="Strona główna">
                    <i class="fa fa-home"></i> Strona Główna</a>
            </li>
            <li class="nav-item">
                <a href="/parafia.php" class="nav-link<?php if ($active == 'parafia') {echo ' active';} ?>"
                    accesskey="2" title="Strona o Parafii">
                    <i class="fa fa-church"></i> O&nbsp;Parafii</a>
            </li>
            <li class="nav-item">
                <a href="/aktualnosci.php" class="nav-link<?php if ($active == 'aktualnosci') {echo ' active';} ?>"
                    accesskey="3" title="Aktualności">
                    <i class="fa fa-newspaper"></i> Aktualności</a>
            </li>
            <li class="nav-item">
                <a href="/intencje_mszalne.php" class="nav-link<?php if ($active == 'intencje_mszalne') {echo ' active';} ?>"
                    accesskey="4" title="Intencje mszalne">
                    <i class="fa fa-newspaper"></i> Intencje mszalne</a>
            </li>
            <li class="nav-item">
                <a href="/liturgia.php" class="nav-link<?php if ($active == 'liturgia') {echo ' active';} ?>"
                    accesskey="5" title="Msze święte">
                    <i class="fa fa-book-reader"></i> Liturgia</a>
            </li>
            <li class="nav-item">
                <a href="/galeria.php" class="nav-link<?php if ($active == 'galeria') {echo ' active';} ?>"
                    accesskey="6" title="Galeria zdjęć">
                    <i class="fa fa-images"></i> Galeria</a>
            </li>
            <li class="nav-item">
                <a href="/grupy.php" class="nav-link<?php if ($active == 'grupy') {echo ' active';} ?>"
                    accesskey="7" title="Grupy parafialne">
                    <i class="fa fa-users"></i> Grupy parafialne</a>
            </li>
            <li class="nav-item">
                <a href="/kontakt.php" class="nav-link<?php if ($active == 'kontakt') {echo ' active';} ?>"
                    accesskey="8" title="Strona kontaktowa">
                    <i class="fa fa-address-book"></i> Kontakt</a>
            </li>
            <li class="nav-item">
                <a href="/archiwum.php" class="nav-link<?php if ($active == 'archiwum') {echo ' active';} ?>"
                    accesskey="9" title="Archiwalne wpisy">
                    <i class="fa fa-archive"></i> Archiwum</a>
            </li>
        </ul>
    </div>
</nav>
<!-- koniec menu nawigacyjnego strony -->
