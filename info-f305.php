<h1>INFO-F305 - Modélisation et simulation</h1>
<h2>Examen</h2>



<h3>Théorie</h3>

<h4 class="question">Considérons le système non linéaire d'ordre 2. $$\left \{\begin{array}{r c l}\dot{x}_1  & = & (a-bx_1)^2\\\dot{x}_2  & = & (c-dx_1)^2\end{array}\right.$$ où $a, b, c$ et $d$ sont quatre constantes réelles L'étudiant devra<ol><li>calculer analytiquement le lieu des points tel que $\dot{x}_1 = \dot{x}_2$.</li><li>calculer analytiquement le(s) point(s) d'équilibre</li></ol>Pour les valeurs <ol class="alphabet"><li>$a=2$, $b=8$, $c=6$, $d=4$</li><li>$a=9$, $b=3$, $c=6$, $d=2$</li></ol><ol><li>étudier la stabilité du(des) point(s) d'équilibre (du système non linéaire) par linéarisation</li><li>tracer sur du papier millimétré<ol class="alphabet"><li>le portrait de phase avec les iscoclines du système</li><li>le comportement qualitatif des trois trajectoires dont les points initiaux sont: $(-2,2)$, $(0,2)$, $(3,2)$ et $(4,1)$.</li></ol><li>déterminer lesquelles parmi les trois évolutions temporelles suivantes sont compatibles avec le système pour les conditions initiales et les constantes $a,b,c$ et $d$ données (motivez la réponse).<figure><img src="images/info-f305/3evolutionstempo.svg" alt="Trois évolutions temporelles" /></figure></li></li></ol></h4>
<div class="answer">
<ol>
	<li>
		$\left( \frac{a-c}{b-d},k\right)$ ou $\left( \frac{a+c}{b+d},k\right)$ avec $k\in \mathbb{R}$
	</li>
	<li>
		$\bar{x}=\left(\frac{a}{b}=\frac{c}{d},k\right)$ avec $k\in \mathbb{R}$
	</li>
</ol>
<ol>
	<li>
		La matrice ne contiendra que des zéros
	</li>
	<li>
		<figure>
		<img src="images/info-f305/a9b3c6d2.svg" alt="a9b3c6d2" />
		</figure>
		<figure>
		<img src="images/info-f305/a2b8c6d4.svg" alt="a2b8c6d4" />
		</figure>
	</li>
	<li>
		Les trois sont faux car
		<ul><li>Pour (a), $x_2$ ne converge pas alors que $\frac{a}{b}=\frac{c}{d}$ ;</li>
		<li>Pour (b), $x_2$ converge alors que $\frac{a}{b}\neq\frac{c}{d}$ ;</li>
		<li>Pour (c), $x_2$ croit plus vite que $x_1$ alors que $\dot{x}_1 = a^2<\dot{x}_2=c^2$.</li>
	</li>
</ol>
</div>




<h3>Orale</h3>

<h4>Définition de système dynamique</h4>
<h5 class="question">Énoncer les propriétés de la fonction de transition</h5>
<h5 class="question">Énoncer les définitions de accessibilité et observabilité.</h5>
<h5 class="question">Discuter les notions de stabilité.</h5>
<h5 class="question">Formuler les critères de stabilité de Liapounov.</h5>

<h4>Systèmes linéaires continus</h4>
<h5 class="question">Énoncer les propriétés des systèmes linéaires continus.</h5>
<h5 class="question">Discuter la relation entre stabilité et le critère de Hurwitz.</h5>
<h5 class="question">Discuter le principe de superpositions des effets dans le cas d'un système linéaire de second ordre.</h5>
<h5 class="question">Classifier la stabilité des systèmes autonome de seconde ordre par rapport à la trace et au déterminant de la matrice des coefficients.</h5>

<h4>Systèmes non linéaires continus</h4>
<h5 class="question">Discuter le lien entre linéarisation et stabilité.</h5>
<h5 class="question">Discuter la notion de diagramme de bifurcation.</h5>
<h5 class="question">Notion de cycle limite.</h5>
<h5 class="question">Dimensionnalité d'un ensemble fractal.</h5>
<h5 class="question">Définition de système chaotique.</h5>

<h4>Systèmes linéaires à temps discret</h4>
<h5 class="question">Equation caractéristique et solutions.</h5>
<h5 class="question">Etude graphique d'une équation linéaire affine à un pas.</h5>

<h4>Systèmes non linéaires à temps discret</h4>
<h5 class="question">Discuter le lien entre linéarisation et stabilité.</h5>
<h5 class="question">Diagramme de bifurcation de la fonction logistique.</h5>

<h4>Simulation Montecarlo</h4>
<h5 class="question">Composantes d'un algorithme Monte Carlo.</h5>
<h5 class="question">Propriétés d'un générateur de nombres pseudo-aleatoires uniformes.</h5>
<h5 class="question">Justifier théoriquement la méthode de la transformation inverse</h5>