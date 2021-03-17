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