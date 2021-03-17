var peceniePizze = new Vue({

  el: "#zoznamPizz",
  data: {
    pizze: [],
    tlacitka: [],
    modal: {}
  },
  created: async function () {
    fetch("../data/pecenie.php")
        .then(odpoved => odpoved.json())
        .then(data => this.pizze = data);
    fetch("../data/pizzeTlacitka.json")
        .then(odkaz => odkaz.json())
        .then(daata => this.tlacitka = daata);
  },
  methods: {
    zhabat: function (piz) {
      this.modal = piz;
    }
  }

})