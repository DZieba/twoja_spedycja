<header id="header">
    <div class="container">
        <nav class="main-nav">

            <div id="branding" <?php if($current=='main' ) {echo 'class="current"';} ?>>
                <a href="index.php">
                    <img src="resources/img/logo_correct.png">
                </a>
            </div>


            <ul class="navbar">
                <li <?php if($current=='about' ) {echo 'class="current"';} ?>>
                    <a href="about.php">O nas</a>
                </li>
                <li <?php if($current=='offer' ) {echo 'class="current"';} ?>>
                    <a href="offer.php">Oferta</a>
                </li>
                <li <?php if($current=='stock' ) {echo 'class="current"';} ?>>
                    <a href="stock.php">Tabor</a>
                </li>
                <li <?php if($current=='docs' ) {echo 'class="current"';} ?>>
                    <a href="docs.php">Dokumenty</a>
                </li>
                <li <?php if($current=='workshop' ) {echo 'class="current"';} ?>>
                    <a href="workshop.php">Serwis</a>
                </li>
                <li <?php if($current=='contact' ) {echo 'class="current"';} ?>>
                    <a href="contact.php">Kontakt</a>
                </li>
                <li>

                    <A HREF="https://www.facebook.com/Movido-1050558795014704/">
                        <img class="fb_icon" src="resources/img/fblogo.png">
                    </a>
                </li>

            </ul>
            <div id="menuToggle">
                <input type="checkbox" id='myCheck' />
                <span></span>
                <span></span>
                <span></span>
            </div>

        </nav>


    </div>
</header>