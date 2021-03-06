<?php if (!isMobile()): ?>
    <footer class="container-fluid sticky-bottom footer py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-2 text-center">
                    <ul class="px-0">
                        <li>
                            <a href="/" class="hoverlink ctext">Start</a>
                        </li>
                        <li>
                            <a href="/termine.php" class="hoverlink ctext">Termine</a>
                        </li>
                        <li>
                            <a href="/angebote.php" class="hoverlink ctext">Angebote</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 text-center">
                    <ul class="px-0">
                        <li>
                            <a href="/kontakt.php" class="hoverlink ctext text-center">Kontakt</a>
                        </li>
                        <li>
                            <a href="/impressum.php" class="hoverlink ctext">Impressum</a>
                        </li>
                        <li>
                            <a href="/datenschutz.php" class="hoverlink ctext">Datenschutz</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-end align-items-center">
            <div class="col-4 text-center ctext light">&copy; 2020 Kolpingfamilie Schorndorf e.V.</div>
            <div class="col-4 d-flex justify-content-end">
                <input onchange="toggleStyle()" class="styleswitcher" type="checkbox" name="switch" id="style_switch">
                <label class="styleswitcherlabel" for="style_switch"></label>
            </div>
        </div>
    </footer>
<?php else: ?>
    <footer class="container-fluid sticky-bottom footer py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center px-0">
                    <ul class="px-0">
                        <li>
                            <a href="/" class="hoverlink ctext">Start</a>
                        </li>
                        <li>
                            <a href="/termine.php" class="hoverlink ctext">Termine</a>
                        </li>
                        <li>
                            <a href="/angebote.php" class="hoverlink ctext">Angebote</a>
                        </li>
                        <li>
                            <a href="/datenschutz.php" class="hoverlink ctext">Datenschutz</a>
                        </li>
                        <li>
                            <a href="/impressum.php" class="hoverlink ctext">Impressum</a>
                        </li>
                        <li>
                            <a href="/kontakt.php" class="hoverlink ctext">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-end align-items-center">
            <div class="col-4 text-center ctext light">&copy; 2020<br>Kolpingfamilie<br>Schorndorf e.V.</div>
            <div class="col-4 d-flex justify-content-end">
                <input onchange="toggleStyle()" class="styleswitcher" type="checkbox" name="switch" id="style_switch">
                <label class="styleswitcherlabel" for="style_switch"></label>
            </div>
        </div>
    </footer>
<?php endif; ?>



<!-- Bootstrap JS Script -->
<script src="/js/custom.js"></script>
</body>
</html>