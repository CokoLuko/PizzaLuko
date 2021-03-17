<?php include '../include/vrchU.php'; ?>
<?php //print_r($_SESSION); ?><br>
<?php //var_dump($_COOKIE); ?>
<section class="container-fluid prihlasenie mt-5" id="prih">
    <div class="container">
        <div class="flex-row">
            <div class="d-flex justify-content-center bd-highlight mb-3">
              <div class="p-2 bd-highlight">
                <div class="card" id="card-prihlasenie">
                  <div class="card-header text-center" :class="okClass">
                    <span class="prihlasenie-zahlavie">Prihlásienie</span>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="vstup1">Meno</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" :class="chybaClass1" id="validatedInputGroupPrepend">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                </span>
                            </div>
                            <input type="text" class="form-control" :class="chybaClass1" aria-describedby="validatedInputGroupPrepend" required id="vstup1" v-on:keydown="pisanie()" placeholder="tu zadajte meno">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="vstup2">Heslo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" :class="chybaClass2" id="validatedInputGroupPrepend">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                                      <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                                    </svg>
                                </span>
                            </div>
                            <input type="password" class="form-control" :class="chybaClass2" aria-describedby="validatedInputGroupPrepend" required id="vstup2" v-on:keydown="pisanie()" v-on:keydown.enter="prihlasenie()" placeholder="tu zadaj heslo">
                        </div>
                        <small id="emailHelp" class="form-text text-muted text-right">
                            <span id="prih-chyba-heslo" class="chyba-hlaska mr-2">{{ chybaText }}</span>
                        </small>
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="vstup3">
                        <label class="form-check-label" for="vstup3">Pamatať si prihlásenie</label>
                      </div>
                    </form>
                    <button type="submit" class="btn btn-sirka-100" v-on:click="prihlasenie()">Prihlásiť sa</button>
                    <div class="ine-linky mt-3 text-center">
                      <a href="">Zaregistruj sa</a><br>
                      <a href="">Zabudol som heslo</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    var prih = new Vue({
      el: "#prih",
      data: {
        chybaText: '',
        chybaClass1: '',
        chybaClass2: '',
        okClass: '',
        stav: ''
      },
      methods: {
        prihlasenie: async function () {
            meno = document.getElementById("vstup1").value;
            heslo = document.getElementById("vstup2").value;
            zostat = document.getElementById("vstup3").checked;

            await fetch("../include/prihlasenie.php?prezyvka=" + meno + "&heslo=" + heslo + "&zostat=" + zostat, {
                method: "POST"
            })
                .then(odpoved => odpoved.json())
                .then(data => this.stav = data);

            if (this.stav == 0) {
                this.okClass = "ok-pozadie";
                this.chybaText = "";
                this.chybaClass1 = "";
                this.chybaClass2 = "";
                setTimeout(presun("../domov"), 3000);
            } else if (this.stav == 2) {
                this.okClass = "";
                this.chybaText = "Zlé meno alebo heslo";
                this.chybaClass1 = "chyba-border chyba-pozadie";
                this.chybaClass2 = "chyba-border chyba-pozadie";
            } else if (this.stav == 3) {
                this.okClass = "";
                this.chybaText = "Zlé heslo";
                this.chybaClass1 = "";
                this.chybaClass2 = "chyba-border chyba-pozadie";
            } else {
                this.okClass = "";
                this.chybaText = "Neznáma chyba";
                this.chybaClass1 = "chyba-border chyba-pozadie";
                this.chybaClass2 = "chyba-border chyba-pozadie";
            }
        },

        pisanie: function () {
          this.chybaText = "";
          this.chybaClass1 = "";
          this.chybaClass2 = "";
        }
      }
    });
    function presun(kde) {
        window.location.assign(kde);
    }
</script>

<?php include '../include/spod.php'; ?>