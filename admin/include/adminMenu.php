<section class="container-fluid telo mb-5">
	<div class="row">
		<div class="col-sm-2">
			<div class="admin">
				<div class="pt-4">
					<div class="profilovka">
						<img src="../profilovky/<?php echo $_SESSION['obrazok']; ?>" alt="profilová fotka">
					</div>
				</div>
				<div class="text-center mt-2 admin-meno">
					<?php echo $_SESSION['meno'] . ' ' . $_SESSION['priezvisko']; ?>
				</div>
				<div class="text-center">
					<?php echo $_SESSION['prezyvka']; ?>
				</div>
				<div class="text-center pb-3">
					<?php
						if ($_SESSION['pravomoci'] == "0") {
							echo "administrátor";
						}
					?>
				</div>
			</div>
			<div class="mt-4 menu-bok" id="menuBok">
				<ul class="nav flex-column">
				  <li class="nav-item" v-for="web in menu">
				    <a class="nav-link" :class="[aktivna == web.url ? 'aktivna' : '']" href="#"><span v-html="web.ikona"></span> <span>{{ web.nazov }}</span></a>
				  </li>
				  <li class="nav-item">
				    <button class="nav-link text-left" v-on:click="odhlasenie()"><span>
				    	<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-door-closed' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
				    		<path fill-rule='evenodd' d='M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z'/>
				    		<path d='M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z'/>
				    	</svg>
				    </span> <span>Odhlásenie</span></button>
				  </li>
				</ul>
			</div>
		</div>


<script type="text/javascript">
    var menuBok = new Vue({
    
      el: "#menuBok",
      data: {
        menu: [],
        aktivna: '',
        odh: '0'
      },
      created: async function () {
        fetch("../data/menuBok.json")
            .then(odpoved => odpoved.json())
            .then(data => this.menu = data);
        pomocAktivity = window.location.pathname;
        pomocAktivity = pomocAktivity.replace(/\/$/, '');
        this.aktivna = pomocAktivity.replace(/.*\//, '');
      },
      methods: {
      	odhlasenie: async function () {
      		fetch("../include/odhlasenie.php")
	            .then(odpoved => odpoved.json())
	            .then(data => this.odh = data);
	        if (this.odh == "1") {
	      		window.location.assign("../prihlasenie");
	        }
      	}
      }
    
    })
</script>