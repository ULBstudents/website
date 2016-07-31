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






<h4 class="question">Une usine fabrique deux produits: $X$ et $Y$. Leur production nécessite un
certain nombre de jours de travail, d’heures-machine ainsi qu’une certaine
quantité de matériaux $A$ et $B$. Ces différentes ressources sont limitées
mensuellement conformément aux données qui figurent dans le tableau
ci-dessous. Une analyse de marché a démontré que toute la production
sera vendue si l’on produit au maximum 30 unités de plus du produit $Y$
que du produit $X$. Déterminer, graphiquement, la production mensuelle
qui assure un bénéfice maximum.
<table class="moindrecout">
	<thead>
		<tr>
			<th></th>
			<th>Par unité X</th>
			<th>Par unité Y</th>
			<th>Ressources</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Journées de travail</th>
			<td>1</td>
			<td>5</td>
			<td>300</td>
		</tr>
			<th>Heures-machines</th>
			<td>1</td>
			<td>2</td>
			<td>200</td>
		</tr>
			<th>Matériau A ($m^2$)</th>
			<td>2</td>
			<td>1</td>
			<td>170</td>
		</tr>
			<th>Matériau B ($m^2$)</th>
			<td>5</td>
			<td>2</td>
			<td>420</td>
		</tr>
			<th>Bénéfice Net</th>
			<td>20</td>
			<td>30</td>
			<td></td>
		</tr>
	</tbody>
	<tfoot>
	</tfoot>
</table>
</h4>
<div class="answer">
On définit les contraintes
max $$20x+30y$$
s.c. :
$$
\begin{array}{ccccc}
	x &+& 5y  & \leq & 300 \\
   2x &+& 2y  & \leq & 200 \\
   2x &+&  y  & \leq & 170 \\
   5x &+& 2y  & \leq & 420 \\
   -x &+&  y  & \leq & 30 \\
    x &+&     & \geq & 0 \\
      & &  y  & \geq & 0 \\
\end{array}
$$
On change les inégalités par des égalités
$$
\begin{array}{cccccccccccc}
	 x &+& 5y &+&t_1&&&&& = & 300 \\
	2x &+& 2y &&+&t_2&&&& = & 200 \\
	2x &+&  y &&&+&t_3&&& = & 170 \\
	5x &+& 2y &&&&+&t_4&& = & 420 \\
	-x &+&  y &&&&&+&t_5& = & 30 \\
	 x & &    &&&&&&& \geq & 0 \\
	   & &  y &&&&&&& \geq & 0 \\
	   & &    &&&&&&t_i& \geq & 0 & \forall i\\
\end{array}
$$
On isole simplement les $t_i$. Ensuite on choisi soit $20x$ soit $30y$ ; le but étant de mettre les deux négatifs, on choisit le plus haut : $30y$. Puis on choisit un $t_i$ en prennant le plus grand parmi $\dfrac{300}{-5}, \dfrac{200}{-2}, \dfrac{170}{-1}, \dfrac{420}{-2} et \dfrac{30}{-1}$. Donc $t_5$.
$$
\begin{array}{rrrrrrr}
	t_1 &=& 300  &-&x&-&5y\\
	t_2 &=& 200  &-&2x&-&2y\\
	t_3 &=& 170  &-&2x&-&y\\
	t_4 &=& 420  &-&5x&-&2y\\
	\textcolor{red}{t_5} &=& 30   &+&x&-&y\\
	\hline
	Z_0 &=&   0 &+&20x&+&30\textcolor{red}{y}
\end{array}
$$
On refait la même chose, ici on a choisi d'abord les $x$ et $t_1$ car c'est le plus grand parmi $\dfrac{150}{-6}, \dfrac{140}{-4}, \dfrac{140}{-3} et \dfrac{360}{-7}$.
$$
\begin{array}{rrrrrrr}
	\textcolor{red}{t_1} &=& 150  &-&6x&-&5t_5\\
	t_2 &=& 140  &-&4x&-&2t_5\\
	t_3 &=& 140  &-&3x&-&t_5\\
	t_4 &=& 360  &-&7x&-&2t_5\\
	y   &=& 30   &+&x&-&t_5\\
	\hline
	Z_0 &=&   900 &+&50\textcolor{red}{x}&-&30t_5
\end{array}
$$
$$
\begin{array}{rrrrrrr}
	\textcolor{red}{t_1} &=& 150  &-&6x&-&5t_5\\
	t_2 &=& 140  &-&4x&-&2t_5\\
	t_3 &=& 140  &-&3x&-&t_5\\
	t_4 &=& 360  &-&7x&-&2t_5\\
	y   &=& 30   &+&x&-&t_5\\
	\hline
	Z_0 &=&   900 &+&50\textcolor{red}{x}&-&30t_5
\end{array}
$$
$$
\begin{array}{rrrrrrr}
	x &=& 25    &-& \dfrac{1}{6}t_1  &+&  \dfrac{1}{6}t_5\\
	\textcolor{red}{t_2} &=& 40  &+& \dfrac{2}{3}t_1  &-&  \dfrac{4}{3}t_5\\
	t_3 &=& 65  &+& \dfrac{1}{2}t_1  &-&  \dfrac{3}{2}t_5\\
	t_4 &=& 185 &+& \dfrac{7}{6}t_1  &-&  \dfrac{23}{6}t_5\\
	y   &=& 55  &-& \dfrac{1}{6}t_1  &-&  \dfrac{1}{6}t_5\\
	\hline
	Z_0 &=&   2150  &-&  \dfrac{25}{3}t_1  &+&  \dfrac{35}{3}\textcolor{red}{t_5}
\end{array}
$$
$$
\begin{array}{rrrrrrr}
	x   &=& 50    &+& \dfrac{1}{4}t_1  &-&  \dfrac{5}{8}t_2\\
	t_5 &=& 30    &+& \dfrac{1}{2}t_1  &-&  \dfrac{3}{4}t_2\\
	t_3 &=& 20    &-& \dfrac{1}{4}t_1  &+&  \dfrac{9}{8}t_2\\
	t_4 &=& 70    &-& \dfrac{3}{4}t_1  &+&  \dfrac{23}{8}t_2\\
	y   &=& 50    &-& \dfrac{1}{4}t_1  &+&  \dfrac{1}{8}t_2\\
	\hline
	Z_0 &=&   2500  &-&  \dfrac{5}{2}t_1  &-&  \dfrac{35}{4}t_5
\end{array}
$$

La réponse est donc $x=50$, $y=50$ et Le maximum possible est $2500$
</div>
















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
Ensuite on procède de la facon habituelle...
</div>




<h3>Le Flot Maximum</h3>

<h4 class="question">
	<img src="http://ulb.rodriguevb.be/images/info-f310/flotmax.svg" alt="Flot maximum" />
</h4>
<div class="answer">
Le calcul de flot maximum est très facile. Il suffit de commencer à prendre un chemin au hasard et prendre le nombre le plus petit. Ici Entre 4,7 et 3 ; le 3 est plus petit. Cela veut dire qu'il n'y peut y avoir qu'un flot maximum de 3 qui passe par ce chemin.
<figure>
	<img src="http://ulb.rodriguevb.be/images/info-f310/flotmax_sol1.svg" alt="Flot maximum" />
</figure>
On procède de manière récursive pour trouver toutes les solutions.
<figure><img src="http://ulb.rodriguevb.be/images/info-f310/flotmax_sol2.svg" alt="Flot maximum" /></figure>
<figure><img src="http://ulb.rodriguevb.be/images/info-f310/flotmax_sol3.svg" alt="Flot maximum" /></figure>
<figure><img src="http://ulb.rodriguevb.be/images/info-f310/flotmax_sol4.svg" alt="Flot maximum" /></figure>
Pour vérifier si vous avez obtenu un bon résultat, il suffit de faire la comparaison entre le flux sortant de la source et le flux entrant dans la terminaison. Ici 4+3 = 3+4. Du coup si vous savez faire une addition comme un gosse de 8 ans, vous avez le bon résultat.
<figure><img src="http://ulb.rodriguevb.be/images/info-f310/flotmax_sol5.svg" alt="Flot maximum" /></figure>
</div>