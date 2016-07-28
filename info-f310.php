<style type="text/css">

table.moindrecout b {
    color: red;
}

table.moindrecout i {
    color: green;
    float: right;
}

table.moindrecout u {
    float: right;
    text-decoration: none;
    color: blue;
}

table.moindrecout td {
    min-width: 3.5em;
    vertical-align: top;
}
</style>

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
	<table class="moindrecout">
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
<table class="moindrecout">
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
<table class="moindrecout">
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
<table class="moindrecout">
	<thead>
		<tr>
			<th></th>
			<th>A<br><b>25</b></th>
			<th>B<br><b>17</b></th>
			<th>C<br><b>13</b></th>
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
On calcule maintenant les variable entrante avec le critère d'optimisation $$o_i+d_j-c_{ij} \le 0$$
<table class="moindrecout">
	<thead>
		<tr>
			<th></th>
			<th>A<br><b>25</b></th>
			<th>B<br><b>17</b></th>
			<th>C<br><b>13</b></th>
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
			<td>24<br><u>2</u></td>
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
On en déduit les variables sortantes ( $\theta$ ) ; on doit mettre toutes les variables à 0 ou négatif. On part de A.II (2) car il y a pas assez de quantité donc on rajoute $\theta$ quantité et on retire $\theta$ quantité là où il y en a.
<table class="moindrecout">
	<thead>
		<tr>
			<th></th>
			<th>A<br><b>25</b></th>
			<th>B<br><b>17</b></th>
			<th>C<br><b>13</b></th>
			<th>Offre</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>I<br><b>0</b></th>
			<td>25<i>$-\theta$</i><br><b>300</b></td>
			<td>17<i>$+\theta$</i><br><b>50</b></td>
			<td>16</td>
			<td>350</td>
		</tr>
		<tr>
			<th>II<br><b>1</b></th>
			<td>24<i>$+\theta$</i><br><u>2</u></td>
			<td>18<i>$-\theta$</i><br><b>250</b></td>
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
On obtient au final ceci car les variables entrantes sont négatives
<table class="moindrecout">
	<thead>
		<tr>
			<th></th>
			<th>A<br><b>25</b></th>
			<th>B<br><b>17</b></th>
			<th>C<br><b>13</b></th>
			<th>Offre</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>I<br><b>0</b></th>
			<td>25<br><b>50</b></td>
			<td>17<br><b>300</b></td>
			<td>16<br><u>-1</u></td>
			<td>350</td>
		</tr>
		<tr>
			<th>II<br><b>1</b></th>
			<td>24<br><b>250</b></td>
			<td>18<br><u>-2</u></td>
			<td>14<br><b>300</b></td>
			<td>550</td>
		</tr>
		
	</tbody>
	<tfoot>
		<tr>
			<th>Demande</th>
			<td>300</td>
			<td>300</td>
			<td>300</td>
			<td>900</td>
		</tr>
	</tfoot>
</table>
</div>












<h4 class="question">Des voitures sont transportées depuis trois centres de distribution vers cinq revendeurs. Le coût
de transport dépend de la distance entre les sources et les destinations ainsi que du fait que
le camion est plein ou seulement à moitié rempli. La table ci-dessous reprend les distances (en
km) entre les centres de distribution et les revendeurs ainsi que les capacités d’approvisionnement
mensuelles des centres de distribution et les demandes, mensuelles aussi, des revendeurs,
exprimées en nombres de voitures. Un camion plein peut transporter jusqu’à 18 voitures. Le
coût de transport est de $25 par camion par km.
<table class="moindrecout">
	<thead>
		<tr>
			<th></th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>Offre</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>I</th>
			<td>100</td>
			<td>150</td>
			<td>200</td>
			<td>140</td>
			<td>35</td>
			<td>23</td>
		</tr>
		<tr>
			<th>II</th>
			<td>50</td>
			<td>70</td>
			<td>60</td>
			<td>65</td>
			<td>80</td>
			<td>12</td>
		</tr>
		<tr>
			<th>III</th>
			<td>40</td>
			<td>90</td>
			<td>100</td>
			<td>150</td>
			<td>130</td>
			<td>8</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th>Demande</th>
			<td>6</td>
			<td>12</td>
			<td>9</td>
			<td>9</td>
			<td>8</td>
		</tr>
	</tfoot>
</table>
Formuler et résoudre le problème comme un modèle de transport.</h4>
<div class="answer">
On recherche une première solution admissible
<table class="moindrecout">
	<thead>
		<tr>
			<th></th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>Offre</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>I</th>
			<td>100<br><b>6</b></td>
			<td>150<br><b>12</b></td>
			<td>200<br><b>5</b></td>
			<td>140</td>
			<td>35</td>
			<td>23</td>
		</tr>
		<tr>
			<th>II</th>
			<td>50</td>
			<td>70</td>
			<td>60<br><b>4</b></td>
			<td>65<br><b>8</b></td>
			<td>80</td>
			<td>12</td>
		</tr>
		<tr>
			<th>III</th>
			<td>40</td>
			<td>90</td>
			<td>100</td>
			<td>150<br><b>1</b></td>
			<td>130<br><b>7</b></td>
			<td>8</td>
		</tr>
		<tr>
			<th>fictive</th>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>0<br><b>1</b></td>
			<td>1</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th>Demande</th>
			<td>6</td>
			<td>12</td>
			<td>9</td>
			<td>9</td>
			<td>8</td>
		</tr>
	</tfoot>
</table>
</div>