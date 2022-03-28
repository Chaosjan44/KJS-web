<?php require_once("templates/header.php"); ?>
<script src="/js/slider.js"></script>

<div class="container-fluid px-0 pt-0 pb-3">
    <div class="mb-3">
        <div id="carouselExampleFade" class="carousel <?php if (check_style() == "dark") { print("carousel-dark "); }?>slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/media/wirn.jpg" class="d-block w-100" style="height: 450px; object-fit: cover; object-position: 50% 40%;" data-bs-interval="5000">
                </div>
                <div class="carousel-item">
                    <img src="/media/Vorgarten.jpg" class="d-block w-100" style="height: 450px; object-fit: cover; object-position: 50% 38%;" data-bs-interval="5000">
                </div>
                <div class="carousel-item">
                    <img src="/media/jummysoup.jpg" class="d-block w-100" style="height: 450px; object-fit: cover; object-position: 50% 48%;" data-bs-interval="5000">
                </div>
                <div class="carousel-item">
                    <img src="/media/karten1.jpg" class="d-block w-100" style="height: 450px; object-fit: cover; object-position: 50% 22%;" data-bs-interval="5000">
                </div>
                <div class="carousel-item">
                    <img src="/media/karten2.jpg" class="d-block w-100" style="height: 450px; object-fit: cover; object-position: 50% 65%;" data-bs-interval="5000">
                </div>
            </div>
            <button class="carousel-control-prev justify-content-start px-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="width: 60px; height: 60px" aria-hidden="true"></span>
            <span class="visually-hidden">Letztes</span>
            </button>
            <button class="carousel-control-next justify-content-end px-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="width: 60px; height: 60px" aria-hidden="true"></span>
            <span class="visually-hidden">Nächstes</span>
            </button>
        </div>
    </div>
    <div class="container-xxl">
        <div class="row ctext">
            <h1 class="display-4 text-center">Kolpingjugend Schorndorf</h1>
            <span class="text-center text-size-larger">Die Kolpingjugend Schorndorf ist eine Gruppierung der <a href="https://kolping-schorndorf.de/" class="hoverlink text-size-larger ctext">Kolpingsfamilie Schorndorf</a>,<br>wir treffen uns jeden 2. Samstag zu Gruppenstunden</span>
        </div>
        <div class="row gx-5 pt-3">
            <div class="col d-flex justify-content-center">
                <h2 class="display-6 ctext text-center">Termine</h2>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="row row-cols-1">
                    <h2 class="col display-6 ctext text-center">Nachrichten</h2>
                    <div class="d-flex justify-content-center">
                        <?php ?>
                        <div class="col card cbg2">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/media/Verbandsspiellogo_mit_KJunterbunt_2021_transparent.png" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body ctext">
                                        <h3 class="card-title text-center">Verbandsspiel 2021/2022</h3>
                                        <p>
                                            Wir machen beim Verbandsspiel 2021/2022 mit.<br>
                                            Aktuell sind wir Platz 2. das Ziel ist natürlich der 1. Platz
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php require_once("templates/footer.php"); ?>