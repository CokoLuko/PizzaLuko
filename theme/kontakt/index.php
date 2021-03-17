<?php include "../include/header.php" ?>

<!-- Kontakt -->
<section id="kontakt">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h6><span class="icon-phone"></span> +421 905 123 456</h6>
                <p>Rozvoz jedla zdarma</p>
            </div>
            <div class="col-3">
                <h6><span class="icon-location2"></span> Košečká 839/43</h6>
                <p>026 31 Trenčín</p>
                <p>GPS: 48.9995, 18.23656</p>
            </div>
            <div class="col-3">
                <h6><span class="icon-clock"></span> Otváracia doba</h6>
                <p>Pondelok - Piatok</p>
                <p>9:00 - 23:00</p>
            </div>
            <div class="col-3">
                <div class="float-left h-100 mr-3">
                    <img id="weather_icon" class="img-fluid">
                </div>
                <div>
                    <p id="mesto"></p>
                    <p id="krajina"></p>
                    <p id="teplota"></p>
                    <p id="vlhkost"></p>
                    <p id="popis"></p>
                    <p id="cas"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "../include/footer.php" ?>
