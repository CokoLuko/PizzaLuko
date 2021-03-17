var peceniePizze = new Vue({

  el: "#ponukaPizz",
  data: {
    pizze: []
  },
  created: async function () {
    fetch("../data/pecenie.php")
        .then(odpoved => odpoved.json())
        .then(data => this.pizze = data);
  }

})