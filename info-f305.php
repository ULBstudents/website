<h1>INFO-F305 - Modélisation et simulation</h1>


$\newcommand\ulbmatrix[1]{\left(\begin{matrix}#1\end{matrix}\right)}
\newcommand\ulbvector[1]{\left[\begin{matrix}#1\end{matrix}\right]}$


<h2>Résumé</h2>



<h3>Récapitulatif des différents cas</h3>

<style type="text/css">

div.centre {
	text-align: center;
}

div.recap {
	display: inline-block;
	border: 0.005em rgba(60,60,60,0.2) solid;
	width: 25em;
	vertical-align: top;
	margin: 0.2em;
	padding: 0em 1em;
}

div.recap img {
	max-width: 20em;
}

</style>
<div class="centre">
<div class="recap">
	<div>Valeurs propres réelles et distinctes négatives</div>
	<div><b>Système linéarisé</b> : noeud stable</div>
	<div><b>Système original</b> : ?</div>
	<figure>
		<img src="images/info-f305/recap_cas_noeud_stable.svg" alt="noeud stable" />
	</figure>
</div>



<div class="recap">
	<div>Valeurs propres réelles et distinctes positives</div>
	<div><b>Système linéarisé</b> : noeud instable</div>
	<div><b>Système original</b> : ?</div>
	<figure>
		<img src="images/info-f305/recap_cas_noeud_instable.svg" alt="noeud instable" />
	</figure>
</div>



<div class="recap">
	<div>Valeurs propres réelles et distinctes positive et négative</div>
	<div><b>Système linéarisé</b> : selle</div>
	<div><b>Système original</b> : instable</div>
	<figure>
		<img src="images/info-f305/recap_cas_selle.svg" alt="selle" />
	</figure>
</div>



<div class="recap">
	<div>Une valeur propre nulle et une réelle négative</div>
	<div><b>Système linéarisé</b> : non-simple stable</div>
	<div><b>Système original</b> : impossible de déduire la stabilité</div>
	<figure>
		<img src="images/info-f305/recap_cas_sys_nonsimple_stable.svg" alt="système non-simple stable" />
	</figure>
</div>



<div class="recap">
	<div>Une valeur propre nulle et une réelle positive</div>
	<div><b>Système linéarisé</b> : non-simple instable</div>
	<div><b>Système original</b> : ?</div>
	<figure>
		<img src="images/info-f305/recap_cas_sys_nonsimple_instable.svg" alt="système non-simple instable" />
	</figure>
</div>




<div class="recap">
	<div>Valeurs propres réelles et non-distinctes avec matrice $A$ diagonalisable</div>
	<div><b>Système linéarisé</b> : noeud singulier</div>
	<div><b>Système original</b> : ?</div>
	<figure>
		<img src="images/info-f305/recap_cas_noeud_singulier.svg" alt="noeud singulier" />
	</figure>
</div>



<div class="recap">
	<div>Valeurs propres réelles et non-distinctes avec matrice $A$ non diagonalisable (un seul vecteur propre et une valeur propre négative)</div>
	<div><b>Système linéarisé</b> : noeud dégénéré stable</div>
	<div><b>Système original</b> : ?</div>
	<figure>
		<img src="images/info-f305/recap_cas_noeud_degenere_stable.svg" alt="noeud dégénéré stable" />
	</figure>
</div>



<div class="recap">
	<div>Valeurs propres réelles et non-distinctes avec matrice $A$ non diagonalisable (un seul vecteur propre et une valeur propre positive)</div>
	<div><b>Système linéarisé</b> : noeud dégénéré instable</div>
	<div><b>Système original</b> : ?</div>
	<figure>
		<img src="images/info-f305/recap_cas_noeud_degenere_instable.svg" alt="noeud dégénéré instable" />
	</figure>
</div>



<div class="recap">
	<div>Valeurs propres complexes conjuguées avec partie réelle nulle</div>
	<div><b>Système linéarisé</b> : centre</div>
	<div><b>Système original</b> : ?</div>
	<figure>
		<img src="images/info-f305/recap_cas_centre.svg" alt="centre" />
	</figure>
</div>



<div class="recap">
	<div>Valeurs propres complexes conjuguées avec partie réelle négative</div>
	<div><b>Système linéarisé</b> : foyer stable</div>
	<div><b>Système original</b> : asymptotiquement stable</div>
	<figure>
		<img src="images/info-f305/recap_cas_foyer_stable.svg" alt="foyer stable" />
	</figure>
</div>



<div class="recap">
	<div>Valeurs propres complexes conjuguées avec partie réelle positive</div>
	<div><b>Système linéarisé</b> : foyer instable</div>
	<div><b>Système original</b> : ?</div>
	<figure>
		<img src="images/info-f305/recap_cas_foyer_instable.svg" alt="foyer instable" />
	</figure>
</div>
</div>










<h2>Examen</h2>



<h3>Écrit</h3>

<h4 class="question">Considérons le système non linéaire d'ordre 2. $$\left \{\begin{array}{r c l}\dot{x}_1  & = & (a-bx_1)^2\\\dot{x}_2  & = & (c-dx_1)^2\end{array}\right.$$ où $a, b, c$ et $d$ sont quatre constantes réelles L'étudiant devra<ol><li>calculer analytiquement le lieu des points tel que $\dot{x}_1 = \dot{x}_2$.</li><li>calculer analytiquement le(s) point(s) d'équilibre</li></ol>Pour les valeurs <ol class="alphabet"><li>$a=2$, $b=8$, $c=6$, $d=4$</li><li>$a=9$, $b=3$, $c=6$, $d=2$</li></ol><ol><li>étudier la stabilité du(des) point(s) d'équilibre (du système non linéaire) par linéarisation</li><li>tracer sur du papier millimétré<ol class="alphabet"><li>le portrait de phase avec les iscoclines du système</li><li>le comportement qualitatif des trois trajectoires dont les points initiaux sont: $(-2,2)$, $(0,2)$, $(3,2)$ et $(4,1)$.</li></ol></li><li>déterminer lesquelles parmi les trois évolutions temporelles suivantes sont compatibles avec le système pour les conditions initiales et les constantes $a,b,c$ et $d$ données (motivez la réponse).<figure><img src="images/info-f305/3evolutionstempo.svg" alt="Trois évolutions temporelles" /></figure></li></li></ol></h4>
<div class="answer">
<ol>
	<li>
		$$
		\begin{array}{ccc}
		\dot{x_1} &=& \dot{x_2}\\
		(a-bx_1)^2 &=& (c-dx_1)^2\\
		\pm (a-bx_1) &=& \pm(c-dx_1)
		\end{array}
		$$
		$$
		\begin{array}{c|c}
		\begin{array}{ccc}
		a-bx_1&=&c-dx_1\\
		a-c&=&bx_1-dx_x\\
		\dfrac{a-c}{b-d}&=&x_1
		\end{array}&
		\begin{array}{ccc}
		a-bx_1&=&dx_1-c\\
		a+c&=&dx_1+bx_1\\
		\dfrac{a+c}{b+d}&=&x_1
		\end{array}
		\end{array}
		$$
		Donc $\left( \frac{a-c}{b-d},k\right)$ ou $\left( \frac{a+c}{b+d},k\right)$ avec $k\in \mathbb{R}$
	</li>
	<li>
		$\bar{x}=\left(\frac{a}{b}=\frac{c}{d},k\right)$ avec $k\in \mathbb{R}$
	</li>
</ol>
<ol>
	<li>
		<ol class="alphabet">
			<li>
				La matrice ne contiendra que des zéros &rarr;
			
				On cherche la jacobienne pour $$\left \{\begin{array}{r c l c l}\dot{x}_1  & = & (2-8x_1)^2 &=& 64x_1^2-32x_1+4\\\dot{x}_2  & = & (6-4x_1)^2&=&16x_1^2-48x_1+36\end{array}\right.$$
				$$\begin{array}{ccccc}
				J&=&\left(
				\begin{array}{cc}
				\dfrac{\partial f_1}{\delta x_1}&\dfrac{\delta f_1}{\delta x_2}\\\dfrac{\partial f_2}{\delta x_1}&\dfrac{\delta f_2}{\delta x_2}
				\end{array}\right)&=&
				\left(
				\begin{array}{cc}
				\dfrac{(64x_1^2-32x_1+4)'}{\delta x_1}&\dfrac{(64x_1^2-32x_1+4)'}{\delta x_2}\\\dfrac{(16x_1^2-48x_1+36)'}{\delta x_1}&\dfrac{(16x_1^2-48x_1+36)'}{\delta x_2}
				\end{array}\right)\\\\
				&&&=&\left(\begin{array}{cc}128x_1-32&0\\32x_1-48&0
				\end{array}\right)\\\\
				&&&=&\left(\begin{array}{cc}128\dfrac{2}{8}-32&0\\32\dfrac{6}{4}-48&0
				\end{array}\right)\\\\
				&&&=&\left(\begin{array}{cc}0&0\\0&0
				\end{array}\right)
				\end{array}
				$$
			</li>
			<li>
				La matrice ne contiendra que des zéros &rarr;
				
				On cherche la jacobienne pour 
				$$\begin{array}{ccccc}
				J&=&\left(
				\begin{array}{cc}
				\dfrac{\partial f_1}{\delta x_1}&\dfrac{\delta f_1}{\delta x_2}\\\dfrac{\partial f_2}{\delta x_1}&\dfrac{\delta f_2}{\delta x_2}
				\end{array}\right)&=&
				\left(\begin{array}{cc}\dfrac{(9x_1^2-54x_1+81)'}{\delta x_1}&\dfrac{(9x_1^2-54x_1+81)'}{\delta x_2}\\\dfrac{(4x_1^2-24x_1+36)'}{\delta x_1}&\dfrac{(4x_1^2-24x_1+36)'}{\delta x_2}\end{array}\right)\\\\
				&&&=&\left(\begin{array}{cc}18x_1-54&0\\8x_1-24&0
				\end{array}\right)\\\\
				&&&=&\left(\begin{array}{cc}18\frac{9}{3}-54&0\\8\frac{6}{2}-24&0
				\end{array}\right)\\\\
				&&&=&\left(\begin{array}{cc}0&0\\0&0
				\end{array}\right)
				\end{array}
				$$
			</li>
		</ol>
	</li>
	<li>
		<figure>
			<img src="images/info-f305/a2b8c6d4.svg" alt="a2b8c6d4" />
			<figcaption>$a=2$, $b=8$, $c=6$, $d=4$</figcaption>
		</figure>
		<figure>
			<img src="images/info-f305/a9b3c6d2.svg" alt="a9b3c6d2" />
			<figcaption>$a=9$, $b=3$, $c=6$, $d=2$</figcaption>
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



<h4 class="question">
	Considérons le système non linéaire continu suivant $$\left \{\begin{array}{r c l}\dot{x}_1  & = & x_2^2+x_1\\\dot{x}_2  & = & x_2^3+1\end{array}\right.$$ où $x_1\in[-6,6]$ et $x_2\in[-6,6]$. L'étudiant devra
	<ol>
		<li>calculer analytiquement le(s) point(s) d'équilibre</li>
		<li>étudier la stabilité du(des) point(s) d'équilibre (du système non linéaire) par linéarisation</li><li>tracer sur du papier millimétré
			<ol class="alphabet">
				<li>le portrait de phase avec les iscoclines du système</li>
				<li>le comportement qualitatif des trois trajectoires dont les points initiaux sont: $(0,0)$, $(3,5)$, $(-3,-2)$ et $(-3,1)$.</li>
			</ol>
		</li>
	</ol>
</h4>
<div class="answer">
	<ol>
		<li>On part des équations de l'énoncé :
			$$\begin{array}{ll}
			&\left\{\begin{array}{rcl}x_2^2 +x_1& = & 0\\x_2^3+1 & = & 0\end{array}\right.\\
			\Leftrightarrow&\left\{\begin{array}{rcl}x_2^2& = & -x_1\\x_2^3 & = & -1\end{array}\right.\\
			\Leftrightarrow&\left\{\begin{array}{rcl}(-1)^2& = & -x_1\\x_2 & = & -1\end{array}\right.\\
			\Leftrightarrow&\left\{\begin{array}{rcl}x_1& = & -1\\x_2 & = & -1\end{array}\right.\\
			\end{array}$$
			Solution: $[-1;-1]$
		</li>
		<li>On cherche la jacobienne :
			$$J=\left(\begin{array}{cc}\dfrac{\partial f_1}{\delta x_1}&\dfrac{\delta f_1}{\delta x_2}\\\dfrac{\partial f_2}{\delta x_1}&\dfrac{\delta f_2}{\delta x_2}\end{array}\right)=\left(\begin{array}{cc}\dfrac{(x_2^2+x_1)'}{\delta x_1}&\dfrac{(x_2^2+x_1)'}{\delta x_2}\\\dfrac{(x_2^3+1)'}{\delta x_1}&\dfrac{(x_2^3+1)'}{\delta x_2}\end{array}\right)=\left(\begin{array}{cc}1&2x_2\\0&3x^2_2\end{array}\right)$$
			Autour du point $[-1;-1]$
			$$J=\left(\begin{array}{cc}1&2(-1)\\0&3(-1)^2\end{array}\right)=\left(\begin{array}{cc}1&-2\\0&3\end{array}\right)$$
			Valeurs propres:
			$$
			\begin{array}{rcl}
			0 &=& det(J-\lambda I)\\
			  &=& \left|\begin{array}{rr}1-\lambda&-2\\0&3-\lambda\end{array}\right|\\
			  &=& -(1-\lambda).-(3-\lambda)-(-2).0\\
			  &=& (-1+\lambda).(-3+\lambda)\\
			  &=& \lambda^2-4\lambda+3
			\end{array}
			$$
			$$\Delta=16-4.1.3=16-12=4$$
			Solution: $\left(\begin{array}{c}\dfrac{4+\sqrt{4}}{2}\\\dfrac{4-\sqrt{4}}{2}\end{array}\right)=\left(\begin{array}{c}3\\1\end{array}\right)$
			 &rarr; Les valeurs propres $ > 0$ &rarr; noeud instable!
		</li>
		<li>
			
			<ol class="alphabet">
				<li>$$\left\{\begin{array}{rcl}\dot{x}_1& = & 0\\\dot{x}_2 & = & 0\end{array}\right.\Leftrightarrow\left\{\begin{array}{rcl}x_2^2+x_1& = & 0\\x_2^3+1 & = & 0\end{array}\right.\Leftrightarrow\left\{\begin{array}{rcl}x_1& = & -x_2^2\\x_2^3 & = & -1\end{array}\right.\Leftrightarrow\left\{\begin{array}{rcl}x_1& = & -1\\x_2 & = & -1\end{array}\right.$$</li>
				<li>?</li>
			</ol>
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





<h4 class="question">Considérons le système linéaire d'ordre 2 $$\dot{x} = \left[ \begin{array}{rr}0&1\\-4&-5\end{array}\right]x$$ Calculer les valeurs de $x$ pour $t = 1$ et $t \rightarrow \infty$ pour les deux conditions initiales. $$x(0)=\left[\begin{array}{r}3\\3\end{array}\right]\ , \ x(0)=\left[\begin{array}{r}2\\0\end{array}\right]$$
</h4>
<div class="answer">
Les $\lambda_i$ sont les solutions de l'équation caractéristique :
$$det\left(\left[\begin{array}{rr}
0&1\\-4&-5
\end{array}\right]-\lambda I\right) = 0$$
$$\Leftrightarrow \lambda^2 + 5\lambda + 4 = 0$$
Valeurs propres :
$$ (\lambda_1, \lambda_2 )  = ( -4, -1 )$$
Calcul de $v_1 = -4$ :
$$\begin{array}{cccc}
\Leftrightarrow & (A - \lambda_1 I )v_1 &=& 0\\
\Leftrightarrow & (A + 4I )v_1 &=& 0\\
\Leftrightarrow & \ulbvector{4&1\\-4&-1}\ulbvector{x\\y} &=& \ulbvector{0\\0}\\
\Leftrightarrow & \ulbvector{x\\y} &=& k\ulbvector{1\\-4} \forall k\\
\Leftrightarrow & v_1 &=& \ulbvector{1\\-4}
\end{array}
$$
Calcul de $v_2 = -1$ :
$$\begin{array}{cccc}
\Leftrightarrow & (A - \lambda_2 I )v_2 &=& 0\\
\Leftrightarrow & (A + 1I )v_2 &=& 0\\
\Leftrightarrow & \ulbvector{-1&1\\-4&-4}\ulbvector{x\\y} &=& \ulbvector{0\\0}\\
\Leftrightarrow & \ulbvector{x\\y} &=& k\ulbvector{1\\1} \forall k\\
\Leftrightarrow & v_2 &=& \ulbvector{1\\1}
\end{array}
$$
Valeurs propres et vecteurs propres :
$$ (\lambda_1, \lambda_2 )  = ( -4, -1 )$$
$$ (v_1, v_2 )  = \left( \ulbvector{1\\-4},\ulbvector{1\\1} \right)$$
Solution générale :
$$x(t) = c_1e^{\lambda_1 t} v_1+ c_2e^{\lambda_2 t} v_2$$
$$x(t) = c_1e^{-4t}\ulbvector{1\\-4} + c_2e^{-t}\ulbvector{1\\1}= \left\{\begin{array}{lcr}x_1(t) &=& c_1e^{-4t} + c_2e^{-t} \\ x_2(t) &=& -c_1e^{-4t} + c_2e^{-t} \end{array}\right.$$
Une fois fixée la condition initiale $x(0)$, $c_1$ et $c_2$ doivent satisfaire :
$$c_1\ulbvector{1\\-4} + c_2 \ulbvector{1\\1} = x(0) = \ulbvector{x_1(0)\\x_2(0)}$$
Donc pour $x(0) = \ulbvector{3\\3}$
$$ \left\{\begin{array}{rcr}
c_1+c_2&=&3\\
-4c_1+c_2&=&3\end{array}\right.$$
$$ \left\{\begin{array}{rcr}
c_1&=&0\\
c_2&=&3\end{array}\right.$$
Donc 
$$x(t) = 0 e^{-4t}\ulbvector{1\\-4} + 3 e^{-t} \ulbvector{1\\1}$$
d'où
$$ \left\{\begin{array}{lcr}
x_1(t) &=& 0 e^{-4t} + 3 e^{-t}\\
x_2(t) &=& -4*0 e^{-4t} + 3 e^{-t}
\end{array}\right.$$
Donc les valeurs de $x$ pour $t = 1$ et $t \rightarrow \infty$ avec la condition initiale $x(0)=\ulbvector{3\\3}$ sont $$x(1) = \ulbvector{3 e^{-1}\\3 e^{-1}}\ ,\ x(\infty) = \ulbvector{\infty\\\infty}$$
Et pour $x(0) = \ulbvector{2\\0}$
$$ \left\{\begin{array}{rcr}
c_1+c_2&=&2\\
-4c_1+c_2&=&0\end{array}\right.$$
$$ \left\{\begin{array}{rcr}
c_1&=&\dfrac{2}{5}\\
c_2&=&\dfrac{8}{5}
\end{array}\right.$$
Donc 
$$x(t) = \dfrac{2}{5} e^{-4t}\ulbvector{1\\-4} + \dfrac{8}{5} e^{-t} \ulbvector{1\\1}$$
d'où
$$ \left\{\begin{array}{lcc}
x_1(t) &=& \dfrac{2}{5} e^{-4t} + \dfrac{8}{5} e^{-t}\\
x_2(t) &=& -4*\dfrac{2}{5} e^{-4t} + \dfrac{8}{5} e^{-t}
\end{array}\right.$$
Donc les valeurs de $x$ pour $t = 1$ et $t \rightarrow \infty$ avec la condition initiale $x(0)=\ulbvector{2\\0}$ sont $$x(1) = \ulbvector{0.595933\\0.559302}\ ,\ x(\infty) = \ulbvector{\infty\\\infty}$$
</div>


<h4 class="question">Considérons le système linéaire d'ordre 2 $$\dot{x} = \left[ \begin{array}{rr}1&3\\3&1\end{array}\right]x$$ Calculer les valeurs de $x$ pour la condition initiale $$x(0)=\left[\begin{array}{r}0.5\\0\end{array}\right]$$
</h4>
<div class="answer">
Les $\lambda_i$ sont les solutions de l'équation caractéristique :
$$det\left(\left[\begin{array}{rr}
1&3\\3&1
\end{array}\right]-\lambda I\right) = 0$$
$$\Leftrightarrow \lambda^2 - 2\lambda - 8 = 0$$
Valeurs propres :
$$ (\lambda_1, \lambda_2 )  = ( -2, 4 )$$
Calcul de $v_1 = -2$ :
$$\begin{array}{cccc}
\Leftrightarrow & (A - \lambda_1 I )v_1 &=& 0\\
\Leftrightarrow & (A + 2I )v_1 &=& 0\\
\Leftrightarrow & \ulbvector{3&3\\3&3}\ulbvector{x\\y} &=& \ulbvector{0\\0}\\
\Leftrightarrow & \ulbvector{x\\y} &=& k\ulbvector{1\\-1} \forall k\\
\Leftrightarrow & v_1 &=& \ulbvector{1\\-1}
\end{array}
$$
Calcul de $v_2 = 4$ :
$$\begin{array}{cccc}
\Leftrightarrow & (A - \lambda_2 I )v_2 &=& 0\\
\Leftrightarrow & (A - 4I )v_2 &=& 0\\
\Leftrightarrow & \ulbvector{-3&3\\3&-3}\ulbvector{x\\y} &=& \ulbvector{0\\0}\\
\Leftrightarrow & \ulbvector{x\\y} &=& k\ulbvector{1\\1} \forall k\\
\Leftrightarrow & v_2 &=& \ulbvector{1\\1}
\end{array}
$$
Valeurs propres et vecteurs propres :
$$ (\lambda_1, \lambda_2 )  = ( -2, 4 )$$
$$ (v_1, v_2 ) = \left( \ulbvector{1\\-1},\ulbvector{1\\1} \right)$$
Solution générale :
$$x(t) = c_1e^{\lambda_1 t} v_1+ c_2e^{\lambda_2 t} v_2$$
$$x(t) = c_1e^{-2t}\ulbvector{1\\-1} + c_2e^{4t}\ulbvector{1\\1}= \left\{\begin{array}{lcr}x_1(t) &=& c_1e^{-2t} + c_2e^{4t} \\ x_2(t) &=& -c_1e^{-2t} + c_2e^{4t} \end{array}\right.$$
Une fois fixée la condition initiale $x(0)$, $c_1$ et $c_2$ doivent satisfaire :
$$c_1\ulbvector{1\\-1} + c_2 \ulbvector{1\\1} = x(0) = \ulbvector{x_1(0)\\x_2(0)}$$
$$ \left\{\begin{array}{rcr} c_1+c_2&=&0.5\\-c_1+c_2&=&0\end{array}\right.\ \Leftrightarrow c_1=c_2=0.25$$
Donc 
$$x(t) = 0.25 e^{-2t}\ulbvector{1\\-1} + 0.25 e^{4t} \ulbvector{1\\1}$$
d'où
$$ \left\{\begin{array}{lcr}
x_1(t) &=& 0.25 e^{-2t} + 0.25 e^{4t}\\
x_2(t) &=& -0.25 e^{-2t} + 0.25 e^{4t}
\end{array}\right.$$
</div>


<h4 class="question">Considérons le système non linéaire à temps discret décrit par l'itération $$x(k+1)=f(x(k))$$ où $x(k)\in[0,100]$ et la fonction $f$ est $$f(x)=\dfrac{1}{25}x(100-x)$$ L'étudiant devra<ol><li>calculer analytiquement $f^2(x)$ et tracer les graphiques respectifs de $f(x)$ et de $f^2(x)$ ;</li><li>trouver les points d'équilibre ;</li><li>étudier la stabilité des points d'équilibre ;</li><li>pour chaque point d'équilibre, simuler graphiquement et numériquement une trajectoire qui soit compatible avec l'analyse de stabilité ;</li><li>sur la base du graphique de $f^2(x)$ estimer les points du cycle d'ordre 2.</li></ol>
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
			Les points d'équilibre du système sont $\bar{x}^{(1)} = 0$ et $\bar{x}^{(2)} = 75$.
		</li>
		<li>
			Puisque $f'(x)=\dfrac{1}{25}(100-2x)$ avec $f'(x_1)=4$ et $f'(x_2)=-2$ les deux points sont instables.
		</li>
		<li>
			Il existe un cycle d'ordre 2 qui passe par les points d'équilibre de $f^2$ qui ne sont pas points d'équilibre de $f$, c.-à-d. les valeurs $\bar{x}^{(3)} \approx 35$ et $\bar{x}^{(4)} \approx 91$.
		</li>
	</ol>
</div>




<h4 class="question">Considérons le système non linéaire continu d'ordre 2 $$\left \{\begin{array}{r c l}\dot{x}_1  & = & x^2_1+x^2_2-4\\\dot{x}_2  & = & x^2_1-x_2-2\end{array}\right.$$ L'étudiant devra <ol><li>trouver analytiquement le(s) point(s) d'équilibre ;</li><li>étudier la stabilité du(des) point(s) d'équilibre (du système non linéaire) par linéarisation ;</li><li>tracer sur du papier millimétré<ol class="alphabet"><li>les iscoclines du système ;</li><li> le comportement qualitatif des trois trajectoires dont les points initiaux sont: $(1.5, 1.5)$,$(−1, −2)$ et $(0, −2)$.</li></ol></li><li>déterminer lesquelles parmi les quatre évolutions temporelles suivantes
sont compatibles avec le système et motiver la réponse.<figure><img src="images/info-f305/4evolutionstemporelles.svg" alt="4 évolutions temporelles" /></figure></li></ol></h4>
<div class="answer">
	<ol>
		<li>On recherche les points d'équilibres :
			$$\begin{array}{ll}
						   &\left\{\begin{array}{rcl}x_1^2 +x_2^2-4& = & 0\\x_1^2-x_2 -2 & = & 0\end{array}\right.\\
			\Leftrightarrow&\left\{\begin{array}{rcl}(x_2+2)+x_2^2-4& = & 0\\x_1^2 & = & x_2+2\end{array}\right.
			\end{array}$$
			On calcule le delta et on trouve deux points : $-2$ et $1$
			$$\left\{\begin{array}{rcl}x_2& = & -2\\x_1 & = & 0\end{array}\right.$$
			$$\left\{\begin{array}{rcl}x_2& = & 1\\x_1 & = &\pm\sqrt{3}\end{array}\right.$$
			
			Le système a donc trois points d'équilibre: $\bar{x}^{(1)} = ( \sqrt{3},1)$, $\bar{x}^{(2)} = (-\sqrt{3},1)$ et $\bar{x}^{(3)} = (0,-2)$
		</li>
		<li>On utilise la jacobienne :
			$$J=\left(\begin{array}{cc}\dfrac{\partial f_1}{\delta x_1}&\dfrac{\delta f_1}{\delta x_2}\\\dfrac{\partial f_2}{\delta x_1}&\dfrac{\delta f_2}{\delta x_2}\end{array}\right)=
			\left(\begin{array}{cc}\dfrac{(x_1^2+x_2^2-4)'}{\delta x_1}&\dfrac{(x_1^2+x_2^2-4)'}{\delta x_2}\\\dfrac{(x_1^2-x_2-2)'}{\delta x_1}&\dfrac{(x_1^2-x_2-2)'}{\delta x_2}\end{array}\right)=
			\left(\begin{array}{cc}2x_1&2x_2\\2x_1&-1\end{array}\right)$$
			<ul>
			<li>
				La matrice en $\bar{x}^{(1)}$ est $\left(\begin{array}{rr}2\sqrt{3}&2\\2\sqrt{3}&-1\end{array}\right)$.
				$$
				\begin{array}{rcl}
				0 &=& det(J-\lambda I)\\
				&=& \left|\begin{array}{rr}2\sqrt{3}-\lambda&2\\2\sqrt{3}&-1-\lambda\end{array}\right|\\
				&=& (2\sqrt{3}-\lambda).(-1-\lambda)-2.2\sqrt{3}\\
				&=& -2\sqrt{3}+\lambda-2\sqrt{3}\lambda+\lambda^2-4\sqrt{3}\\
				&=& \lambda^2+(1-2\sqrt{3})\lambda-6\sqrt{3}
				\end{array}
				$$
				$$\Delta = (1-2\sqrt{3})^2-4.1.(-6\sqrt{3}) = 13+20\sqrt{3}$$
				$$\lambda_{1,2} = \dfrac{-(1-2\sqrt{3}) \pm \sqrt{13+20\sqrt{3}}}{2} = \{4.683174;-2.219087\}$$
				Le point $\bar{x}^{(1)}$ est une selle pour le système linéarisé car on a des valeurs propres positif et négatif, donc le point d'équilibre $\bar{x}^{(1)}$ est instable pour le système original.</li>
			<li>
				La matrice en $\bar{x}^{(2)}$ est $\left(\begin{array}{rr}-2\sqrt{3}&2\\-2\sqrt{3}&-1\end{array}\right)$.
				$$
				\begin{array}{rcl}
				0 &=& det(J-\lambda I)\\
				&=& \left|\begin{array}{rr}-2\sqrt{3}-\lambda&2\\-2\sqrt{3}&-1-\lambda\end{array}\right|\\
				&=& (-2\sqrt{3}-\lambda).(-1-\lambda)-2.(-2\sqrt{3})\\
				&=& 2\sqrt{3}+\lambda+2\sqrt{3}\lambda+\lambda^2+4\sqrt{3}\\
				&=& \lambda^2+(1+2\sqrt{3})\lambda+6\sqrt{3}
				\end{array}
				$$
				$$\Delta = (1+2\sqrt{3})^2-4.1.(6\sqrt{3}) = 13-20\sqrt{3}$$
				$$\lambda_{1,2} = \dfrac{-(1+2\sqrt{3}) \pm \sqrt{13-20\sqrt{3}}}{2} = \{-reelle+imaginaire;-reelle-imaginaire\}$$
				Le point $\bar{x}^{(2)}$ est un foyer asymptomatiquement stable pour le système linéarisé car les valeurs propres sont des nombres imaginaires dont la partie réelle est négative. Donc le point d'équilibre $\bar{x}^{(2)}$ est asymptotiquement stable pour le système original.
			</li>
			<li>
				La matrice en $\bar{x}^{(3)}$ est $\left(\begin{array}{rr}0&-4\\0&-1\end{array}\right)$.
				$$
				\begin{array}{rcl}
				0 &=& det(J-\lambda I)\\
				&=& \left|\begin{array}{rr}0-\lambda&-4\\0&-1-\lambda\end{array}\right|\\
				&=& (-\lambda).(-1-\lambda)-(-4.0)\\
				&=& \lambda^2+\lambda
				\end{array}
				$$
				$$\Delta = 1^2-4.1.0 = 1$$
				$$\lambda_{1,2} = \dfrac{-1 \pm \sqrt{1}}{2} = \{0;-1\}$$
				Système non-simple stable car une valeur propre nulle et valeur propre réelle négative. Nous ne pouvons rien déduire sur la stabilité du point $\bar{x}^{(3)}$ dans le système originale.
			</li>
			</ul>
		</li>
		<li>
			<ol class="alphabet">
				<li>Si on part de la première équation, on obtient une équation d'un cercle de rayon 4 :
					$$\begin{array}{rrrr}
					&x_1^2+x_2^2-4 &=& 0 \\
					\Leftrightarrow &x_2^2 &=& -x_1^2+4\\
					\Leftrightarrow &x_2   &=& \pm\sqrt{-x_1^2+4}
					\end{array}$$
					Si on part de la deuxième équation, on obtient une équation d'une parabole
					$$\begin{array}{rrrr}
					&x_1^2-x_2-2 &=& 0 \\
					\Leftrightarrow &x_2   &=& -x_1^2-2
					\end{array}$$
					Le portrait de phase du système est affiché sur la figure :
					<figure><img src="images/info-f305/portaitdephase.svg" alt="Portrait de phase" /></figure>
				</li>
				<li>Heuu help</li>
			</ol>
		</li>
		<li>
			Les évolutions temporelles a) et c).
		</li>
	</ol>
</div>



<h4 class="question">
	Considerons le système à temps discret décrit par l'équation $$x(k+2)-5x(k+1)+6x(k)=3(4^k)$$ L'étudiant devra
	<ol>
		<li>Determiner la solution pour $x(0) = 0$, $x(1) = 0$.</li>
		<li>Vérifier de manière numérique pour $k = 0, . . . , 7$ que la solution est correcte.</li>
		<li>Determiner pour le système homogène, s'il existe, le point d'équilibre et, en cas d'existence, analyser sa stabilité.</li>
	</ol>
</h4>
<div class="answer">
	<ol>
		<li>
			Le polynome caractéristique de l'équation homogène est $$\lambda^2-5\lambda+6=0$$ qui a comme racines $\lambda_1=2$,$\lambda_2=3$. L'équation homogène est $$x^h(k)=c_12^k+c_23^k$$ La solution particulière aura une forme $c3(4^k)$, il suffit d'injecter cela dans l'équation de départ et on a
			$$\begin{array}{crcl}&c3(4^{k+2})-5c3(4^{k+1})+6c3(4^k)&=&3(4^k)\\
			\Leftrightarrow&c3(4^k)(4^2-5.4+6)&=&3(4^k)\\
			\Leftrightarrow&c(16-20+6)&=&1\\
			\Leftrightarrow&c&=&\dfrac{1}{2}\\
			\Leftrightarrow&x^p(k)&=&\dfrac{3}{2}4^k
			\end{array}$$
			La solution générale est $$\begin{array}{crcl}&x(k)&=&x^h(k)+x^p(k)\\\Leftrightarrow&x(k)&=&c_12^k+c_23^k+\dfrac{3}{2}4^k\end{array}$$
			Pour trouver solution particulière pour $x(0)=0$ et $x(1)=0$, il faut résoudre le système suivant afin de trouver $c_1$ et $c_2$ :
			$$\left\{\begin{array}{rcl}c_1+c_2+\dfrac{3}{2}&=&0\\2c_1+3c_2+\dfrac{3}{2}4&=&0\end{array}\right.$$
			Et l'on trouve $c_1=\dfrac{3}{2}$ et $c_2=-3$. La solution particulière est donc
			$$x(k)=\dfrac{3}{2}2^k+(-3)3^k+\dfrac{3}{2}4^k$$
		</li>
		<li>
			La solution numérique pour $k = 0, 1, 2, 3, 4, 5, 6, 7$ est $[0,0,3,27,165,855,4053,18207]$
		</li> 
		<li>
			Le système homogène a l'origine comme point d'équilibre unstable.
		</li>
	</ol>
</div>




<h4 class="question">
	Considerons le système à temps discret décrit par l'équation $$x(k+3)-4x(k+2)+8x(k)=\dfrac{3^k}{k+1}$$ L'étudiant devra
	<ol>
		<li>Determiner la solution générale de l'équation homogène (en justifiant votre réponse).</li>
		<li>Donnez une solution particulière de l'équation de départ</li>
		<li>Trouvez l'ensemble des constantes de la solution générale avec comme condition initiale : $x(0) = 1$, $x(1)=2$, $x(2)=3$</li>
	</ol>
</h4>
<div class="answer">
	<ol>
		<li>
			Le polynome caractéristique de l'équation homogène est
			$$\lambda^3-4\lambda^2+8=0$$
			qui a comme racines 
			$$\begin{array}{ccc}
			0&=&\lambda^3-4\lambda^2+8\\
			&=& (\lambda-2)(\lambda^2-2\lambda-4)
			\end{array}$$
			$\lambda_1=2$, $\lambda_2=1+\sqrt{5}$, $\lambda_3=1-\sqrt{5}$.\\
			L'équation homogène est donc 
			$$x^h(k) = c_1 2^k + c_2 (1+\sqrt{5})^k + c_3 (1-\sqrt{5})^k$$
		</li>
		<li>
			La solution particulière aura une forme $\dfrac{c3^k}{k + 1}$, il suffit d'injecter cela dans l'équation de départ et on a
			$$\begin{array}{crcl}
			&\dfrac{c3^k+3}{k + 3 + 1}+4\dfrac{c3^k+2}{k + 2+ 1}+8\dfrac{c3^k}{k + 1}&=&\dfrac{3^k}{k + 1}\\
			\Leftrightarrow&\dfrac{c3^k+3}{k + 4} + 4\dfrac{c3^k+2}{k + 3} + 8\dfrac{c3^k}{k + 1}&=&\dfrac{3^k}{k + 1}\\
			\Leftrightarrow& ???&ta&maman\\
			\end{array}$$
			La solution générale est $$\begin{array}{crcl}&x(k)&=&x^h(k)+x^p(k)\\\Leftrightarrow&x(k)&=& ? + ?\end{array}$$
		</li>
		<li>
		</li>
	</ol>
</div>





<h4 class="question">Considerons le système à temps discret décrit par l'équation $$x(k+4)+8x(k+2)=8(2^k)$$
<ol>
	<li>Determiner la solution générale de l'équation homogène</li>
	<li>Donnez une solution particulière de l'équation de départ</li>
	<li>Donnez la solution générale de l'équation non-homogène sachant que $x(0)=\sin(a)$ et $x(1)=\sin(b)$ où $a\in\mathbb{R}$ et $b\in\mathbb{R}$</li>
	<li>Sachant que $a=\pi$ et $b=0$, calculez la valeur de $x(k)$ pour $k\in\{0,1,2,3,4\}$.</li>
</ol>
</h4>
<div class="answer">
<ol>
	<li>
		$$\begin{array}{rrrrrr}
		&x(k+4) &+& 8x(k+2) &=& 8(2^k)\\
		\Leftrightarrow&\lambda^4 &+& 8\lambda^2 &=& 0
		\end{array}$$
		est le polynome caractéristique de l'équation homogène est qui a comme unique racine $\lambda=0$
		L'équation homogène ($x^h(k)$) est alors
		$$x^h(k)=c_10^k$$
	</li>
	<li>
		La solution particulière ($x^p(k)$) aura la forme $c8(2^k)$, il suffit d'injecter cela dans l'équation de départ et on a
		$$\begin{array}{rrrrrr}
		&c8(2^{k+4}) &+& 8c8(2^{k+2}) &=& 8(2^k)\\
		\Leftrightarrow&8(2^k) (c2^4 &+& 8c2^2) &=& 8(2^k)\\
		\Leftrightarrow&c2^4 &+& 8c2^2 &=& 1\\
		\Leftrightarrow&&&48c&=&1\\
		\Leftrightarrow&&&c&=&\dfrac{1}{48}\\
		\Leftrightarrow&&&x^p(k)&=&\dfrac{8}{48}2^k\\
		\Leftrightarrow&&&x^p(k)&=&\dfrac{1}{16}2^k
		\end{array}$$
	</li>
	<li>
		La solution générale ($x(k)$) est
		$$\begin{array}{rrrrr}
		x(k) &=& x^h(k) &+& x^p(k)\\
		&=& c_10^k&+&\dfrac{1}{16}2^k
		\end{array}$$
		Pour trouver solution particulière pour $x(0)=\sin(a)$ et $x(1)=\sin(b)$, il faut résoudre le système suivant afin de trouver $c_1$ :
		$$\left\{\begin{array}{rrr}
		c_10^k + \dfrac{1}{16}2^0 &=& \sin(a)\\
		c_10^k + \dfrac{1}{16}2^1 &=& \sin(b)
		\end{array}\right.
		\Leftrightarrow
		\left\{\begin{array}{rrc}
		0&=&\sin(a)-\dfrac{1}{16}\\
		0&=&\sin(b)-\dfrac{1}{8}
		\end{array}\right.
		$$
	</li>
	<li>
		Mais donc au final on trouve $c_1=\mathbb{R}$. La solution particulière est donc
		$$x(k) = \dfrac{1}{16}2^k$$
		La solution numérique pour $k = 0, 1, 2, 3, 4$ est $[ \dfrac{1}{16} , \dfrac{1}{8} , \dfrac{1}{4} , \dfrac{1}{2} , 1 ]$
	</li>
</ol>
</div>






<h4 class="question">Soit l'équation différentielle suivante $$\dot{x}=rx-x^3,\ x\in\mathbb{R},\ r\in\mathbb{R}$$<ol><li>Trouver les points d'équilibre du système et étudier leur stabilité en fonction de $r$ ;</li><li>Tracer le diagramme de bifurcation associé. Notez les points d'équilibres instables en pointillé ;</li><li>Etudier la nature des points d'équilibres de manière graphique pour $r = 1$ et $r = 36$ ;</li><li>Vérifier par linéarisation les résultats du point précédent ;</li><li>Tracer qualitativement l'évolution temporelle ($t \in [0, 10]$) de $x$ pour<ol class="alphabet"><li>$r = 1$, $x(0) = 8$</li><li>$r = 1/4$, $x(0) = 8$</li><li>$r = −1$, $x(0) = 8$
</li></ol>en tenant en considération la constante de temps.</li><li>Comparer les vitesses de convergence des trajectoires a), b) et c) et expliquer leur différence.</li></ol></h4>
<div class="answer">
	<ol>
		<li>
			On cherche les points d'équilibre :
			$$\begin{array}{ccc}
			rx - x^3 &=& 0 \\
			x^3 &=& rx\\
			x^2 &=& r\\
			x   &=& \pm \sqrt{r}
			\end{array}$$
			$\bar{x}=0$,$\bar{x}=\sqrt{r}$ et $\bar{x}=-\sqrt{r}$
			<ul>
				<li>Si $r \leq 0$, il y a un équilibre stable $\bar{x}=0$</li>
				<li>Si $r > 0$, il y a un équilibre instable $\bar{x}=0$ et deux équilibres stables $\bar{x}=\sqrt{r}$ et $\bar{x}=-\sqrt{r}$</li>
			</ul>
		</li>
		<li>
			?
		</li>
		<li>
			Voici les diagrammes $( x, \dot{x} )$
			<figure>
				<img src="images/info-f305/diagrammespointequilibre.svg" alt="diagrammes point equilibre" />
			</figure>
			<ul>
				<li>$r = 1 \Rightarrow \bar{x}^{(1)} = 1$, $\bar{x}^{(2)} = -1$, $\bar{x}^{(3)} = 0$. Les deux points $\bar{x}^{(1)}$ et $ \bar{x}^{(2)}$ sont stable</li>
				<li>$r = 36 \Rightarrow \bar{x}^{(1)} = 6$, $\bar{x}^{(2)} = -1$, $\bar{x}^{(3)} = 0$. Les deux points $\bar{x}^{(1)}$ et $ \bar{x}^{(2)}$ sont stable</li>
			</ul>
		</li>
		<li>
			On utilise la jacobienne
			$$J=\left(
			\dfrac{\partial f}{\delta x}
			\right)=\left(
			\dfrac{ (rx-x^3)' }{\delta x}
			\right)=r-3x^2$$
			<ul>
				<li>$\bar{x}^{(1)}$ et $\bar{x}^{(2)}$ ( $ = \pm \sqrt{r} \Rightarrow J = r-3r = -2r$ ) : Le système linéalisé autour de $\bar{x}^{(1)}$ et $\bar{x}^{(2)}$ est $\dot{x} = -2rx$. Négatif donc stable si $r$ est positif. Ceci confirme la stabilité pour $r$ positif.</li>
				<li>$\bar{x}^{(3)}$ ( $ = 0 \Rightarrow J = r-3.0 = r$ ) : Le système linéalisé autour de $\bar{x}^{(3)}$ est $\dot{x} = rx$. Positif donc instable si $r$ est positif. Ceci confirme la stabilité pour $r$ positif.</li>
			</ul>
		</li>
		<li>
			Les trajectoires sont 
			<figure>
				<img src="images/info-f305/trajectoire0.svg" alt="Trajectoire" />
			</figure>
		</li>
		<li>
			La constante de temps est $\dfrac{1}{2r}$ pour $r > 0$ et $\dfrac{-1}{r}$ pour $r < 0$.
		</li>
	</ol>
</div>







<h4 class="question">
	Considérons le système non linéaire à temps discret décrit par l'itération $$x(k+1)=min\left(5,\dfrac{2^{x(k)}}{x(k)}\right)$$ où $x(k)\in[1,5]$. L'étudiant devra
	<ol>
		<li>tracer le graphique de $f(x)$</li>
		<li>trouver la forme analytique et tracer le graphique de $f^2(x)$</li>
		<li>trouver les points d'équilibre</li>
		<li>étudier la stabilité des points d'équilibre</li>
		<li>pour chaque point d'équilibre, simuler graphiquement et numériquement une trajectoire de 5 étapes qui soit compatible avec l'analyse de stabilité</li>
		<li> trouver, s'il existe, un cycle d'ordre 2, donner les valeurs de ses composantes et montrer numériquement qu'il s'agit d'un cycle</li>
	</ol>
</h4>
<div class="answer">
<ol>
	<li>
		Sur la figure 2, on voit le graphique de $f(x)$ (en rouge), de $f^2(x)$ (en bleu) et $y = x$ (en noir)
		<figure><img src="images/info-f305/graphfx.svg" alt="answer" /></figure>
	</li>
	<li>$f^2(x) = min\left(5, 2^{\left(\dfrac{2^x}{x}-x\right)}x\right)$</li>
	<li>Il y a 3 points d'équilibres $\bar{x}_1=2$, $\bar{x}_2=4$ et $\bar{x}_3=5$</li>
	<li>
		Nous avons $$f'(x)=-\dfrac{2^x(x\ln(2)-1)}{x^2}$$Le point d'équilibre $\bar{x}_1 = 2$ est localement asymptotiquement stable car $|f'(\bar{x}_2)|= 0.3863 < 1$ et le point $\bar{x}_2=4$ est instable car $|f'(\bar{x}_2)| = 1.7726 > 1$
	</li>
	<li>?</li>
	<li>Il n'y a pas de cycles</li>
</ol>
</div>





<h4 class="question">
	Considérons le système dynamique $x(k+1) = f(x(k))$ où
	$$f(x) = 4x(1-x)$$
	L'étudiant devra établir si le syst§me est chaotique dans le voisinage des points d'équilibre en utilisant les exposants de Lyapunov.
</h4>
<div class="answer">
	Syllabus 7.6.2 Exposant de Liapounov (p. 158)
</div>




<h4 class="question">
	Considérons les systèmes dynamique à temps continu d'ordre 1 $$\dot{x} = -3x, \ x \in \mathbb{R}$$
	dont la condition x(0) à l'instant $t = 0$ est distrbuée selon la densité de probabilité sur la figure :
	<figure><img src="images/info-f305/traj5etapes.svg" alt="answer" /></figure>
	
	Soit $U = [\ 0.51\ ;\ 0.46\ ;\ 0.35\ ;\ 0.1\ ;\ 0.43\ ;\ 0.71\ ;\ 0.12\ ;\ 0.08\ ;\ 0.37\ ;\ 0.03\ ]$ une séquence de 10 nombres aleatoires tirées à partir d'une distribution uniforme entre 0 et 1. L'étudiant devra estimer en utilisant la séquence $U$ par Monte Carlo.
	<ul>
		<li>La moyenne de la solution $x(1)$</li>
		<li>La probabilité que $x(1) > 0.3$</li>
	</ul>
</h4>
<div class="answer">

	<figure><img src="images/info-f305/distributionuniforme.svg" alt="Distribution uniforme" /></figure>
	On cherche les $x(0)$ en fonction du graphique ( $e = 2.71$ )
	$$\begin{array}{llllllll}
	U = & 0.51 &\rightarrow& x(0) &= 5.05 &\rightarrow& x(1) = x(0).e^{-3} & = 0.253\\
	& 0.46 &\rightarrow&&= 4.95 &\rightarrow&& = 0.248\\
	& 0.35 &\rightarrow&&= 4.70 &\rightarrow&& = 0.234\\
	& 0.10 &\rightarrow&&= 4.15 &\rightarrow&& = 0.207\\
	& 0.43 &\rightarrow&&= 4.85 &\rightarrow&& = 0.241\\
	& 0.71 &\rightarrow&&= 5.15 &\rightarrow&& = 0.256\\
	& 0.12 &\rightarrow&&= 4.25 &\rightarrow&& = 0.212\\
	& 0.08 &\rightarrow&&= 4.10 &\rightarrow&& = 0.204\\
	& 0.37 &\rightarrow&&= 4.75 &\rightarrow&& = 0.236\\
	& 0.03 &\rightarrow&&= 4.05 &\rightarrow&& = 0.202\\
	\end{array}$$
	<ul>
		<li>On fait la moyenne des 10 nombres pour $x(1) = \dfrac{\sum_{i=0}^{10} x_i(1)}{10} = \dfrac{2.293}{10} = 0.2293$</li>
		<li>On regarde la probabilité combien de nombre $ x(1) > 0.3 \rightarrow 0$</li>
	</ul>
</div>








<h4 class="question">
	Considérons l'équation aux différences non homogène suivante
	$$x(k+2) + ax(k+1) + 2x(k) = 1$$
	Déterminez et vérifiez numériquement (en effectuant trois étapes) la solution pour
	<ul>
		<li>$a=3,\ x(0) = 1/6,\ x(1) = 7/6$</li>
		<li>$a=2,\ x(0) = 1/5,\ x(1) = 6/5$</li>
		<li>$a=-3,\ x(0) = 0,\ x(1) = 0$</li>
	</ul>
</h4>
<div class="answer">
	<ul>
		<li>
			$a = 3$ : $\lambda_1 = -2$, $\lambda_2 = -1$. Puisque $x = 1/6$ est une solution particulière, la solution générale de l'équation est
			$$x(k) = A(-1)^k + B(-2)^k + 1/6$$
			En posant les conditions initiales nous trouvons $A=1$ et $B=-1$
		</li>
		<li>
			$a=2$ : $\lambda_1 = -1+i$, $\lambda_2 = -1 -i$. Puisque $p=\sqrt{2}$ et $\delta = \dfrac{3\pi}{4}$ et $x=1/5$ est une solution particulière, la solution générale de l'équation est
			$$x(k) = \sqrt{2^k}\left(A\cos\dfrac{3\pi k}{4} + B\sin\dfrac{3\pi k}{4}\right)+1/5$$
			En posant les conditions initiales nous trouvons $A=1$ et $B=-1$
		</li>
		<li>
			$a=-3$ : $\lambda_1 = 2$, $\lambda_2 = 1$. Puisque $x=-k$ est une solution particulière, la solution générale de l'équation est 
			$$x(k) = A2^k + B-k$$
			En posant les conditions initiales nous trouvons $A=0$ et $B=1$.
		</li>
	</ul>
</div>








<h4 class="question">
	Tracer le diagramme de bifurcation du système $$\dot{x} = x (4-x) -k$$ en fonction de $k\in\mathbb{R}$
</h4>
<div class="answer">
	Pour $k \leq 4$, le système à comme points d'équilibre
	
	$$ x^{(1)} = 2 - \sqrt{4-k}$$
	et
	$$ x^{(2)} = 2 + \sqrt{4-k}$$
	Puisque $f'(x) = -2x +4$ il s'ensuit que pour $k \leq 4$, $x^{(1)}$ est instable alors que $x^{(2)}$ est asymptomatiquement stable. Le diagramme de bifurcation est donc
	<figure><img src="images/info-f305/diagrammedebifurcation.svg" alt="answer" /></figure>
</div>












<h4 class="question">
	Considérons les systèmes $$\dot{x} = -x^3$,\ \ \dot{x} = x^3$$
	Pour chacun des deux systèmes, l'étudiant devra
	<ul>
		<li>Trouver le point d'équilibre et étudier la stabilité</li>
		<li>Définir une fonction Lyapunov qui confirme le résultat précèdent</li>
	</ul>
</h4>
<div class="answer">
	Le seul point d'équilibre est l'origine (asymptomatiquement stable pour le premier système et instable pour le deuxième). Si nous considérons la fonction définie positive $V(x) = kx^2, \ \ k > 0 $ il s'ensuit que pour le premier système
	
	$$\dot{V}(x) = -2kxx^3 = -2 k x^4$$et pour le deuxième $$\dot{V}(x) = 2kxx^3 = 2kx^4$$
	
	<ul>
		<li>Premier système : puisque la foncion est définie négative pour tout $x$ il s'ensuit que l'origine est asymptotiquement stable.</li>
		<li>Deuxième système : puisque la fonction est définie positive pour tout $x$ il s'ensuit que l'origine est instable.</li>
	</ul>
</div>












<h3>Orale</h3>










<h4>Définition de système dynamique</h4>





<h5 class="question">Énoncer les propriétés de la fonction de transition</h5>
<div class="answer">
	La <fonction de transition> permet de passer d'un état au suivant. C'est généralement un calcul sur un intervalle de temps. Une fois qu'on a calculé l'état dont on a besoin, on s'en sert pour trouver la solution y du problème. La fonction de transition possède quelques propriétés :
	<ol>
		<li><b>Consistance</b> : Une même série d'entrées doit toujours donner la même solution (pas d'aléatoire) ;</li>
		<li><b>Causalité</b> : Si on applique deux entrées $u_1$ et $u_2$ ( avec $u_1 = u_2$ ), la sortie doit être la même.</li>
	</ol>
</div>




<h5 class="question">Définir un état d'équilibre.</h5>
<div class="answer">
	Un <b>état d'équilibre</b> est un état vers lequel tend le système. S'il existe une fonction d'entrée qui ramène le système à un endroit de départ, cet état est un état d'équilibre, et la sortie y correspondante est la sortie d'équilibre. Dans le cas du réservoir, pour toutes les fonctions où le débit de sortie est supérieur au débit d'entrée, le réservoir se videra et restera vide, ce sera un état d'équilibre. Il y a d'autres états d'équilibres, comme celui où le débit d'entrée est égal au débit de sortie. N'importe quel niveau est alors un état d'équilibre.
</div>




<h5 class="question">Énoncer les définitions de accessibilité et observabilité.</h5>
<div class="answer">
	<ol>
		<li>Un état est <b>accessible</b> à partir d'un autre quand il existe $t_1$ et $t_2$, avec $t_1 \neq t_2$, tel que l'état de départ est l'état du système en $t_1$, et l'état "accessible" est l'état du système en $t_2$. Par exemple, si la température de la pièce ne peut qu'augmenter, l'état 25° n'est pas accessible par l'état 35°. Par contre, 35° peut être atteint après 25°. Un système est <b>connexe</b> s'il existe un chemin entre toute paire d'états dans le système. Où qu'on soit, on peut aller ailleurs en suivant un temps croissant ;</li>
		<li>Un système <b>observarble</b> est un système dont on peut reconstuire le passé. S'il y a une équivalence entre deux états, on a un problème car il y aura plusieurs chemins menant au même endroit.</li>
	</ol>
</div>



<h5 class="question">Discuter les notions de stabilité.</h5>
<div class="answer">
La notion centrale de ces systèmes est la stabilité. Il faut essayer de trouver les
endroits stables et les points d'équilibre. Si on perturbe l'équilibre, est-ce
qu'on obtient un chaos ou est-ce qu'on revient à l'équilibre ? Un état d'équilibre
s'exprime en disant qu'un mouvement est stable quand une perturbation epsilon de
l'entrée produit une perturbation de sortie delta du même ordre qu'epsilon
(préférablement plus petite). Si Roméo casse un verre et que Juliette romp pour ça,
c'est que le système est instable. Dans un système stable, Roméo peut être un salot
que Juliette l'aimera toujours.<br>

Le fait qu'on reste proche d'un état d'équilibre n'est pas le plus intéressant. La
<b>stabilité asymptotique</b> permet de dire si un système va retomber sur l'état
d'équilibre. Un système perturbé peut s'éloigner très fort de l'état d'équilibre,
mais pourrait toujours y revenir. Dans ce cas, le système n'est pas stable, mais
<b>asymptotiquement stable</b>. On dit que la limite pour t tendant vers l'infini du
système perturbé doit valoir l'état stable. Cette stabilité asymptotique est ce qui
est le plus souvent désiré : quand on règle une température et qu'on ouvre la
fenêtre, on ne veut pas que la température change juste un peu, on veut qu'au bout
d'un certain temps on revienne à la température idéale.

</div>





<h5 class="question">Formuler les critères de stabilité de Liapounov.</h5>
<div class="answer">La plupart du temps, les équations différentielles sont complexes et on ne sait pas
étudier la stabilité en regardant un schéma. Il faudrait pouvoir étudier la
stabilité sans devoir résoudre les équations. Les techniques qu'on va utiliser sont
les <b>critères de Liapounov</b>.<br>

L'idée de base est que si on trouve une fonction V continue (ainsi que ses dérivées
partielles), définie positive autour de son état d'équilibre. Si la dérivée de
cette fonction est semi-définie négative, alors le système est stable en son état
d'équilibre. Si la dérivée est définie négative, le système est asymptotiquement
stable. L'idée de base est que V est souvent l'énergie du système, et si cette
énergie se dissipe, le système va converger vers son état d'équilibre. Il faut donc
trouver une fonction d'énergie telle que la système atteint son état stable. De
manière générale, on veut trouver une fonction qui se dissipe.<br>

Une fonction est <b>définie positive</b> en un point si autour de ce point la fonction
est strictement positive. Une fonction est <b>semi-définie positive</b> si elle respecte
la même condition, mais elle peut passer par zéro (jamais en-dessous) en certain
points. La même chose pour <b>définie négative</b> et <b>semi-définie négative</b>. Les
fonctions quadratiques sont un bon exemple de fonctions définies positives.
Note: Une matrice est <b>définie positive</b> si tous les mineurs de la matrice sont
positifs. On regarde donc a11, puis le déterminant a11 a21 a12 a22, et ainsi de
suite.<br>

Le plus compliqué est de trouver la fonction V, puis ensuite il suffit de la
dériver. Dans un système physique, l'énergie peut être utilisée. Si on ne trouve
pas de fonction V, on ne sait pas dire si le système est stable ou pas, il faut
utiliser d'autres méthodes.<br>

La dérivée de V est considérée comme étant V' = dV/dx1*f1 + dV/dx2*f2 (pour V avec
deux variables, chaque variable étant définie par f1 et f2, voir slide 60). Une
fois la dérivée obtenue, il suffit d'étudier son signe. La slide 62 montre une
modélisation 3D de la fonction avec son gradient.<br>

Le <b>critère d'instabilité de Liapounov</b> se trouve de la même manière : si V est
définie positive et V' définie positive aussi, alors le système est instable, il a
tendance à s'emballer, la perturbation s'amplifie.<br>

Le système du pendule peut s'étudier de cette manière. V(x1, x2) = mgl(1 - cos(x1))
+ 1/2 * ml²x2². C'est la somme de l'énergie potentielle et de l'énergie cinétique.
Cette fonction est définie positive, et quand on dérive la fonction, on trouve
(slide 67) V' = -kl²x2², une fonction toujours négative pour des k > 0, donc avec
une dissipation d'énergie supérieure à zéro. Si k est négatif, le pendule va de
plus en plus vite, mais ça n'arrive jamais dans le monde réel.




</div>





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