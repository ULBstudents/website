<h1>INFO-F305 - Modélisation et simulation</h1>
<h2>Examen</h2>



<h3>Écrit</h3>

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




<h4 class="question">Considérons le système $S$ à temps continu décrit par la connexion de deux sous-systèmes $S_1$ et $S_2$ illustrée ci-dessous.<figure><img src="images/info-f305/systemes1s2.svg" alt="Système S" /></figure>Soit le sous-système $S_1$ décrit par le modèle $$\left \{\begin{array}{r c l}\dot{x}_1  & = & -(a-1)^2x_1+u\\\dot{y}_1  & = & x_1\end{array}\right.$$ et le sous-système $S_2$ décrit par le modèle $$\left \{\begin{array}{r c l}\dot{x}_2&=&x_3\\\dot{x}_3 &=& -bx_3 - 2cx_2 + 3u\\y_2 &=& x_2\end{array}\right.$$ où $a\in\mathbb{R},b\in\mathbb{R},c\in\mathbb{R}$.<ol><li>Déterminer pour quelles valeurs de $a$, $b$, $c$, le système résultant est asymptotiquement
stable.</li><li> Est-ce que pour ces valeurs le système serait asymptotiquement stable en
cas de connexion en série ($S_1 \rightarrow S_2$ ou $S_2 \rightarrow S_1$) aussi ?</li></ol>
</h4>
<div class="answer">
	Un système linéaire composé par la parallélisation de deux sous-systèmes linéaires est asymptotiquement stable si et seulement si les deux sous-systèmes sont asymptotiquement stables. Pour que $S_1$ soit asymptotiquement stable il suffit que $a \neq 1$. Pour que $S_2$ soit asymptotiquement stable il suffit que $b > 0$, $c > 0$.
</div>





<h4 class="question">Considérons le système linéaire d’ordre 2 $$\dot{x} = \left[ \begin{array}{rr}0&1\\-4&-5\end{array}\right]x$$ Calculer les valeurs de $x$ pour $t = 1$ et $t \rightarrow \infty$ pour les deux conditions
initiales.
</h4>
<div class="answer">
	$$x(0)=\left[\begin{array}{r}3\\3\end{array}\right]$$ $$x(0)=\left[\begin{array}{r}2\\0\end{array}\right]$$
</div>



<h4 class="question">Considérons le système non linéaire à temps discret décrit par l’itération $$x(k+1)=f(x(k))$$ où $x(k)\in[0,100]$ et la fonction $f$ est $$f(x)=\dfrac{1}{25}x(100-x)$$ L'étudiant devra<ol><li>calculer analytiquement $f^2(x)$ et tracer les graphiques respectifs de $f(x)$ et de $f^2(x)$ ;</li><li>trouver les points d’équilibre ;</li><li>étudier la stabilité des points d’équilibre ;</li><li>pour chaque point d’équilibre, simuler graphiquement et numériquement une trajectoire qui soit compatible avec l’analyse de stabilité ;</li><li>sur la base du graphique de $f^2(x)$ estimer les points du cycle d’ordre 2.</li></ol>
</h4>
<div class="answer">
	<ol>
		<li>
			Le graphique de $f(x)$ est
			<figure><img src="images/info-f305/answerfx.svg" alt="f(x)" /></figure>
			alors que celui de $f^2(x)$ est
			<figure><img src="images/info-f305/answerf2x.svg" alt="f^2(x)" /></figure>
		</li>
		<li>
			Les points d’équilibre du système sont $\bar{x}^{(1)} = 0$ et $\bar{x}^{(2)} = 75$.
		</li>
		<li>
			Puisque $f'(x)=\dfrac{1}{25}(100-2x)$ avec $f'(x_1)=4$ et $f'(x_2)=-2$ les deux points sont instables.
		</li>
		<li>
			Il existe un cycle d’ordre 2 qui passe par les points d’équilibre de $f^2$ qui ne sont pas points d'équilibre de $f$, c.-à-d. les valeurs $\bar{x}^{(3)} \approx 35$ et $\bar{x}^{(4)} \approx 91$.
		</li>
	</ol>
</div>




<h4 class="question">Considérons le système non linéaire continu d'ordre 2 $$\left \{\begin{array}{r c l}\dot{x}_1  & = & x^2_1+x^2_2-4\\\dot{x}_2  & = & x^2_1-x_2-2\end{array}\right.$$ L'étudiant devra <ol><li>trouver analytiquement le(s) point(s) d’équilibre ;</li><li>étudier la stabilité du(des) point(s) d’équilibre (du système non linéaire) par linéarisation ;</li><li>tracer sur du papier millimétré<ol class="alphabet"><li>les iscoclines du système ;</li><li> le comportement qualitatif des trois trajectoires dont les points initiaux sont: $(1.5, 1.5)$,$(−1, −2)$ et $(0, −2)$.</li></ol></li><li>déterminer lesquelles parmi les quatre évolutions temporelles suivantes
sont compatibles avec le système et motiver la réponse.<figure><img src="images/info-f305/4evolutionstemporelles.svg" alt="4 évolutions temporelles" /></figure></li></ol><h4>
<div class="answer">
	<ol>
		<li>
			Le système a trois points d’équilibre: $\bar{x}^{(1)} = ( \sqrt{3},1)$, $\bar{x}^{(2)} = (-\sqrt{3},1)$ et $\bar{x}^{(3)} = (0,-2)$
		</li>
		<li>
			La matrice de Jacobi est : $$\left \{\begin{array}{rr}2x_1&2x_2\\2x_1&-1\end{array}\right]$$
			La matrice en $\bar{x}^{(1)}$ est $\left[\begin{array}{rr}2\sqrt{3}&2\\2\sqrt{3}&-1\end{array}\right]$. Le point $\bar{x}^{(1)}$ est une selle pour le système linéarisé, donc le point d'équilibre $\bar{x}^{(1)}$ est instable pour le système original.<br>
			La matrice en $\bar{x}^{(2)}$ est $\left[\begin{array}{rr}-2\sqrt{3}&2\\-2\sqrt{3}&-1\end{array}\right]$. Le point $\bar{x}^{(2)}$ est un foyer asymptomatiquement stable pour le système linéarisé. Donc le point d'équilibre $\bar{x}^{(2)}$ est asymptotiquement stable pour le système original.<br>
			La matrice en $\bar{x}^{(3)}$ est $\left[\begin{array}{rr}0&-4\\0&-1\end{array}\right]$. Ce système est non simple puisqu une valeur propre est égale à 0. Nous ne pouvons rien déduire sur la stabilité du point $\bar{x}^{(3)}$ dans le système originale.
		</li>
		<li>
			Le portrait de phase du système est affiché sur la figure : <figure><img src="images/info-f305/portaitdephase.svg" alt="Portrait de phase" /></figure>
		</li>
		<li>
			Les évolutions temporelles a) et c).
		</li>
	</ol>
</div>



<h4 class="question">Considerons le système à temps discret décrit par l’équation $$x(k+2)-5x(k+1)+6x(k)=3(4^k)$$ L'étudiant devra <ol><li>Determiner la solution pour $x(0) = 0$, $x(1) = 0$.</li><li>Vérifier de manière numérique pour $k = 0, . . . , 7$ que la solution est correcte.</li><li>Determiner pour le système homogène, s’il existe, le point d’équilibre et, en cas d’existence, analyser sa stabilité.</li></ol></h4>
<div class="answer">
	<ol>
		<li>
			Une solution particulière est $x^{(p)}=\dfrac{3}{2}4^k$. Le polynome caractéristique de l'équation homogène est $$\lambda^2-5\lambda+6=0$$ qui a comme racines $\lambda_1=2$,$\lambda_2=3$. La forme paramétrique de la solution est donc $$x(k)=c_12^k+c_23^k+\dfrac{3}{2}4^k$$ En imposant les conditions initiales nous obtenons $$c_1=\dfrac{3}{2}, c_2=-3$$
		</li>
		<li>
			La solution numérique pour $k = 0, . . . , 7$ est $[0,0,3,27,165,855,4053,18207]$
		</li>
		<li>
			Le système homogène a l'origine comme point d'équilibre unstable.
		</li>
	</ol>
</div>




<h4 class="question">Soit l’équation différentielle suivante $$\dot{x}=rx-x^3,\ x\in\mathbb{R},\ r\in\mathbb{R}<ol><li>Trouver les points d’équilibre du système et étudier leur stabilité en fonction de $r$ ;</li><li>Tracer le diagramme de bifurcation associé. Notez les points d’équilibres instables en pointillé ;</li><li>Etudier la nature des points d’équilibres de manière graphique pour $r = 1$ et $r = 36$ ;</li><li>Vérifier par linéarisation les résultats du point précédent ;</li><li>Tracer qualitativement l’évolution temporelle ($t \in [0, 10]$) de $x$ pour<ol class="alphabet"><li>$r = 1$, $x(0) = 8$</li><li>$r = 1/4$, $x(0) = 8$</li><li>$r = −1$, $x(0) = 8$
</li></ol>en tenant en considération la constante de temps.</li><li>Comparer les vitesses de convergence des trajectoires a), b) et c) et expliquer leur différence.</li></ol></h4>
<div class="answer"><ol class="alphabet">
	<li>
		$\bar{x}=0$,$\bar{x}=\sqrt{r}$ et $\bar{x}=-\sqrt{r}$
	</li>
	<li>
	</li>
	<li>
	</li>
	<li>
	</li>
	<li>
	</li>
	<li>
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