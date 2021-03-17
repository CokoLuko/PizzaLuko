<!-- Nav -->
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="../domov/index.php"><span class="flaticon-pizza-1"></span> Zdenka<br><small>Delikatesy</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto" id="menuNavigacia">
                <li class="nav-item" v-for="web in menu">
                    <a class="nav-link" :class="[aktivna == web.url ? 'active' : '']" :href="'../' + web.url">{{ web.nazov }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript">
    var menuNavigacia = new Vue({
    
      el: "#menuNavigacia",
      data: {
        menu: [],
        aktivna: ''
      },
      created: async function () {
        fetch("../include/menu.json")
            .then(odpoved => odpoved.json())
            .then(data => this.menu = data);
        pomocAktivity = window.location.pathname;
        pomocAktivity = pomocAktivity.replace(/\/$/, '');
        this.aktivna = pomocAktivity.replace(/.*\//, '');
      }
    
    })
</script>