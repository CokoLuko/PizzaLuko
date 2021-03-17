<?php include "../include/header.php" ?>

<!-- Pizze -->
<section class="pizze" id="denneMenu">
    <div class="container">
        <h1 class="text-center pt-5">Denné menu</h1>
        <p class="text-center">Z bohatej ponuky našich pizz Vám na dnešný deň aktuálne ponúkame tieto položky, Prajeme vám dobrú chuť.</p>
    </div>
    <div class="container-fluid">
        <div class="row cierna" id="ponukaPizz">
            <div class="col-lg-4 px-0" v-for="piz in pizze">
                <div class="col-6 float-left bg-stol">
                    <img :src="'../img/' + piz.obrazok + '.png'" alt="pizza" class="img-fluid px-0">
                </div>
                <div class="col-6 px-0 mx-0 float-left">
                    <h2 class="text-center mt-2 px-2">{{ piz.nazov }}</h2>
                    <p class="text-center px-2">{{ piz.cesto }}</p>
                    <p class="float-right cena mb-0 pr-3">{{ piz.cena }} €</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="../data/ponukaPizz.js"></script>

<?php include "../include/footer.php" ?>