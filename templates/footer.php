


<footer class="container-fluid sticky-bottom footer py-3 grau text-black">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-2">
                <ul>
                    <li>
                        <a href="/" class="text-black" style="text-decoration:none">> Start</a>
                    </li>
                    <li>
                        <a href="/termine.php" class="text-black" style="text-decoration:none">> Termine</a>
                    </li>
                    <li>
                        <a href="/angebote.php" class="text-black" style="text-decoration:none">> Angebote</a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li>
                        <a href="/about_us.php" class="text-black" style="text-decoration:none">> Über uns</a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li>
                        <a href="/datenschutz.php" class="text-black" style="text-decoration:none">> Datenschutz</a>
                    </li>
                    <li>
                        <a href="/impressum.php" class="text-black" style="text-decoration:none">> Impressum</a>
                    </li>
                    <li>
                        <a href="/kontakt.php" class="text-black" style="text-decoration:none">> Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-4 text-center light">&copy; 2020 Kolpingfamilie Schorndorf e.V.</div>
        <div class="col-4 d-flex justify-content-end">
                <input onchange="toggleStyle()" class="styleswitcher" type="checkbox" name="switch" id="style_switch" <?php if (check_style() == "dark") {print("checked");}?>>
                <label class="styleswitcherlabel" for="style_switch"></label>
            </div>
    </div>
</footer>



<!-- Bootstrap JS Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>