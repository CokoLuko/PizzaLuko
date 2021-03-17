<?php include '../include/vrch.php'; ?>

			<?php //var_dump($_SESSION); ?>
			<?php //var_dump($_COOKIE); ?>
			<h4 class="mt-2">Denné menu</h4>
			<table class="table table-striped denneMenu-pizze" id="zoznamPizz">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Názov ponuky</th>
			      <th scope="col">Cena/Váha</th>
			      <th scope="col">Status/Úprava</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr v-for="(piz,cis) in pizze">
			      <th scope="row" style="font-weight: normal;" v-html="cis+1"></th>
			      <td class="p-nazov-popis">
			      	<div class="n">
			      		<img :src="'../img/' + piz.obrazok + '.png'">
			      	</div>
			      	<div class="n">
			      		<div>
				      		{{ piz.nazov }}
			      		</div>
			      		<div class="p-popis">
			      			{{ piz.cesto }}
			      		</div>
			      	</div>
		      	  </td>
			      <td class="p-nazov-popis text-center">
			      	<div class="n">
			      		<div>
				      		{{ piz.cena }} €
			      		</div>
			      		<div class="p-popis">
			      			{{ piz.gramy }} g
			      		</div>
			      	</div>
		      	  </td>
		      	  <td>
		      	  	<button>
		      	  		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
						  <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
						</svg>
						Publikované
		      	  	</button>
		      	  	<button>
		      	  		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
						  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
						</svg>
						Náhľad
		      	  	</button>
		      	  	<button>
		      	  		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
						</svg>
						Upraviť
		      	  	</button>
		      	  	<button>
		      	  		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
						</svg>
						Zmazať
		      	  	</button>
		      	  </td>
			    </tr>
			    <tr>
			  </tbody>
			</table>

<?php include '../include/spod.php'; ?>