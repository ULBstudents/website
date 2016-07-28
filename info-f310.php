<h1>INFO-F310 - Algorithmique et recherche opérationnelle</h1>
<h2>Méthode</h2>





<h3>Simplexe</h3>
<h3>Problème de transport</h3>





<h4 class="question">Une fabrique de conserve expédie des caisses ver des dépôts. Nous voulons
que le programme d’expédition des caisses minimise le cot de transport
total des usines ver les dépôts. Pour simplifier, nous supposerons qu’il y a
deux usine I et II et trois dépôts A, B, C. Les disponibilité en caisse sont
respectivement 350 et 550 pour l’usine I et II et le besoin des trois dépôts
est 300. Le coût d’expedition, par caisse, entre chaque usine et chaque
dépôt est dans le tableau ci-dessous:

<ul>
	<li>Une firme automobile a trois usines à Los Angeles, Detroit et New Orleans, et deux centres de distribution à Denver et Miami.</li>
	<li>Les capacités des trois usines sont de 1000, 1500 et 1200 respectivement, et les demandes aux centres de distribution sont de 2300 et 1400 voitures.</li>
	<li>Coûts :
	<table>
		<thead>
			<tr>
				<th></th>
				<th>A</th>
				<th>B</th>
				<th>C</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>I</th>
				<td>25</td>
				<td>17</td>
				<td>16</td>
			</tr>
			<tr>
				<th>II</th>
				<td>24</td>
				<td>18</td>
				<td>14</td>
			</tr>
		</tbody>
		<tfoot>
		</tfoot>
	</table></li>
</li>
</ul></h4>
<div class="answer">
On peut représenter le tableau de la manière suivante :
<table>
	<thead>
		<tr>
			<th></th>
			<th>A</th>
			<th>B</th>
			<th>C</th>
			<th>Offre</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>I</th>
			<td>25</td>
			<td>17</td>
			<td>16</td>
			<td>350</td>
		</tr>
		<tr>
			<th>II</th>
			<td>24</td>
			<td>18</td>
			<td>14</td>
			<td>550</td>
		</tr>
		<tr>
			<th>Demande</th>
			<td>300</td>
			<td>300</td>
			<td>300</td>
			<td>900</td>
		</tr>
	</tbody>
	<tfoot>
	</tfoot>
</table>

On commence à distribuer les offres en faisant attention de ne pas dépasser la demande. Si l'offre n'est pas égale à la demande, on obtient un modèle non balancé et on introduit une source ou destination artificielle ; ce n'est pas le cas ici car la demande = offre à 900.
<table>
	<thead>
		<tr>
			<th></th>
			<th>A</th>
			<th>B</th>
			<th>C</th>
			<th>Offre</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>I</th>
			<td>25<br><b>300</b></td>
			<td>17<br><b>50</b></td>
			<td>16</td>
			<td>350</td>
		</tr>
		<tr>
			<th>II</th>
			<td>24</td>
			<td>18<br><b>250</b></td>
			<td>14<br><b>300</b></td>
			<td>550</td>
		</tr>
		<tr>
			<th>Demande</th>
			<td>300</td>
			<td>300</td>
			<td>300</td>
			<td>900</td>
		</tr>
	</tbody>
	<tfoot>
	</tfoot>
</table>
Ce n'est pas la meilleur optimisation. Pour optimiser, on résout récursivement le système (Attention aux erreurs d'inattention).
$$o_i+d_j-c_{ij}=0 \text{ pour tout } x_{ij} > 0$$
$$init \Rightarrow o_1 = 0$$
$$o_1 + d_1 = 25\Rightarrow d_1 = 25$$
$$o_1 + d_2 = 17\Rightarrow d_2 = 17$$
$$o_2 + d_2 = 18\Rightarrow o_2 = 1$$
$$o_2 + d_3 = 14\Rightarrow d_3 = 13$$
<table>
	<thead>
		<tr>
			<th></th>
			<th>A<b>25</b></th>
			<th>B<b>17</b></th>
			<th>C<b>13</b></th>
			<th>Offre</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>I<br><b>0</b></th>
			<td>25<br><b>300</b></td>
			<td>17<br><b>50</b></td>
			<td>16</td>
			<td>350</td>
		</tr>
		<tr>
			<th>II<br><b>1</b></th>
			<td>24</td>
			<td>18<br><b>250</b></td>
			<td>14<br><b>300</b></td>
			<td>550</td>
		</tr>
		<tr>
			<th>Demande</th>
			<td>300</td>
			<td>300</td>
			<td>300</td>
			<td>900</td>
		</tr>
	</tbody>
	<tfoot>
	</tfoot>
</table>
</div>

