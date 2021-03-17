<?php include "../include/header.php" ?>

<!-- Ceny -->
<section class="container text-center">
    <h1 class="mt-5">Naše ceny za menu</h1>
    <p class="mb-0">Naša kompletná ponuka pizz. Vyberte si z bohatej ponuky našho jedálneho lístka. Prajeme vám dobrú chuť.</p>
    <p class="mt-0">Prajeme Vám dobrú chuť</p>
    <div class="row" id="ponukaPizz">
            <div class="col-6" v-for="piz in pizze">
                <div class="col-3 float-left">
                    <img :src="'../img/' + piz.obrazok + '.png'" class="img-fluid px-0">
                </div>
                <div class="col-9 float-left">
                    <h5 class="cena float-left">{{ piz.nazov }}</h5>
                    <p class="float-right">{{ piz.gramy }}g<strong class="cena pl-3">{{ piz.cena }} €</strong></p>
                    <p class="float-left text-left">{{ piz.cesto }}</p>
                </div>
            </div>
    </div>
</section>

<script type="text/javascript" src="../data/ponukaPizz.js"></script>

<?php include "../include/footer.php" ?>