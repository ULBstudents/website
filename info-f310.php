<h1>INFO-F310 - Algorithmique et recherche opérationnelle</h1>
<h2>Méthode</h2>





<h3>Simplexe</h3>
<h3>Problème de transport</h3>





<h4 class="question">Une fabrique de conserve exp´edie des caisses ver des d´epˆots. Nous voulons
que le programme d’exp´edition des caisses minimise le cot de transport
total des usines ver les d´epˆots. Pour simplifier, nous supposerons qu’il y a
deux usine I et II et trois d´epˆots A, B, C. Les disponibilit´e en caisse sont
respectivement 350 et 550 pour l’usine I et II et le besoin des trois d´epˆots
est 300. Le coˆut d’expedition, par caisse, entre chaque usine et chaque
d´epˆot est dans le tableau ci-dessous:

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
				<td>I</td>
				<td>25</td>
				<td>17</td>
				<td>16</td>
			</tr>
			<tr>
				<td>II</td>
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

On commence à distribuer les offres en faisant attention de ne pas dépasser la demande :
$$
	\begin{tabular}{c|c|c|c||c}
		&\text{A}&\text{B}&\text{C}&\text{Offre}\\\hline
		\text{I}&25&17&16&350\\
		&\textcolor{red}{300}&\textcolor{red}{50}&&\\
		\text{II}&24&18&14&550\\
		&&\textcolor{red}{250&\textcolor{red}{300}&\\
		\hline\hline
		Demande&300&300&300&900\\
	\end{tabular}
$$

</div>

