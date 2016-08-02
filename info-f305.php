<h1>INFO-F305 - Modélisation et simulation</h1>
<h2>Examen</h2>



<h3>Écrit</h3>

<h4 class="question">Considérons le système non linéaire d'ordre 2. $$\left \{\begin{array}{r c l}\dot{x}_1  & = & (a-bx_1)^2\\\dot{x}_2  & = & (c-dx_1)^2\end{array}\right.$$ où $a, b, c$ et $d$ sont quatre constantes réelles L'étudiant devra<ol><li>calculer analytiquement le lieu des points tel que $\dot{x}_1 = \dot{x}_2$.</li><li>calculer analytiquement le(s) point(s) d'équilibre</li></ol>Pour les valeurs <ol class="alphabet"><li>$a=2$, $b=8$, $c=6$, $d=4$</li><li>$a=9$, $b=3$, $c=6$, $d=2$</li></ol><ol><li>étudier la stabilité du(des) point(s) d'équilibre (du système non linéaire) par linéarisation</li><li>tracer sur du papier millimétré<ol class="alphabet"><li>le portrait de phase avec les iscoclines du système</li><li>le comportement qualitatif des trois trajectoires dont les points initiaux sont: $(-2,2)$, $(0,2)$, $(3,2)$ et $(4,1)$.</li></ol></li><li>déterminer lesquelles parmi les trois évolutions temporelles suivantes sont compatibles avec le système pour les conditions initiales et les constantes $a,b,c$ et $d$ données (motivez la réponse).<figure><img src="images/info-f305/3evolutionstempo.svg" alt="Trois évolutions temporelles" /></figure></li></li></ol></h4>
<div class="answer">
<ol>
	<li>
		Donc $\left( \frac{a-c}{b-d},k\right)$ ou $\left( \frac{a+c}{b+d},k\right)$ avec $k\in \mathbb{R}$
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



<h4 class="question">Considérons le système non linéaire continu suivant $$\left \{\begin{array}{r c l}\dot{x}_1  & = & x_2^2+x_1\\\dot{x}_2  & = & x_2^3+1\end{array}\right.$$ où $x_1\in[-6,6]$ et $x_2\in[-6,6]$. L'étudiant devra <ol><li>calculer analytiquement le(s) point(s) d'équilibre</li><li>étudier la stabilité du(des) point(s) d'équilibre (du système non linéaire) par linéarisation</li><li>tracer sur du papier millimétré<ol class="alphabet"><li>le portrait de phase avec les iscoclines du système</li><li>le comportement qualitatif des trois trajectoires dont les points initiaux sont: $(0,0)$, $(3,5)$, $(-3,-2)$ et $(-3,1)$.</li></ol></li></ol></h4>
<div class="answer">
	<ol>
		<li>
			$$\begin{array}{ll}
			&\left\{\begin{array}{rcl}x_2^2 +x_1& = & 0\\x_2^3+1 & = & 0\end{array}\right.\\
			\Leftrightarrow&\left\{\begin{array}{rcl}x_2^2& = & -x_1\\x_2^3 & = & -1\end{array}\right.\\
			\Leftrightarrow&\left\{\begin{array}{rcl}(-1)^2& = & -x_1\\x_2 & = & -1\end{array}\right.\\
			\Leftrightarrow&\left\{\begin{array}{rcl}x_1& = & -1\\x_2 & = & -1\end{array}\right.\\
			\end{array}$$
			Solution: $[-1;-1]$
		</li>
		<li>
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
			$$\left\{\begin{array}{rcl}\dot{x}_1& = & 0\\\dot{x}_2 & = & 0\end{array}\right.\Leftrightarrow\left\{\begin{array}{rcl}x_2^2+x_1& = & 0\\x_2^3+1 & = & 0\end{array}\right.\Leftrightarrow\left\{\begin{array}{rcl}x_1& = & -x_2^2\\x_2^3 & = & -1\end{array}\right.\Leftrightarrow\left\{\begin{array}{rcl}x_1& = & -1\\x_2 & = & -1\end{array}\right.$$
			<ol class="alphabet">
				<li></li>
				<li></li>
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
			
			Le système a donc trois points d’équilibre: $\bar{x}^{(1)} = ( \sqrt{3},1)$, $\bar{x}^{(2)} = (-\sqrt{3},1)$ et $\bar{x}^{(3)} = (0,-2)$
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
				&=& -(2\sqrt{3}-\lambda).-(-1-\lambda)-2.2\sqrt{3}\\
				&=& (-2\sqrt{3}+\lambda).(1+\lambda)-4\sqrt{3}\\
				&=& -2\sqrt{3}+\lambda-2\sqrt{3}\lambda+\lambda^2-4\sqrt{3}\\
				&=& \lambda^2+(1-2\sqrt{3})\lambda-6\sqrt{3}
				\end{array}
				$$
				Le point $\bar{x}^{(1)}$ est une selle pour le système linéarisé, donc le point d'équilibre $\bar{x}^{(1)}$ est instable pour le système original.</li>
			<li>
				La matrice en $\bar{x}^{(2)}$ est $\left(\begin{array}{rr}-2\sqrt{3}&2\\-2\sqrt{3}&-1\end{array}\right)$.
				$$
				\begin{array}{rcl}
				0 &=& det(J-\lambda I)\\
				&=& \left|\begin{array}{rr}-2\sqrt{3}-\lambda&2\\-2\sqrt{3}&-1-\lambda\end{array}\right|\\
				&=& -(-2\sqrt{3}-\lambda).-(-1-\lambda)-2.(-2\sqrt{3})\\
				&=& (2\sqrt{3}+\lambda).(1+\lambda)+4\sqrt{3}\\
				&=& 2\sqrt{3}+\lambda+2\sqrt{3}\lambda+\lambda^2-4\sqrt{3}\\
				&=& \lambda^2+(1+2\sqrt{3})\lambda-2\sqrt{3}
				\end{array}
$$
				Le point $\bar{x}^{(2)}$ est un foyer asymptomatiquement stable pour le système linéarisé. Donc le point d'équilibre $\bar{x}^{(2)}$ est asymptotiquement stable pour le système original.
			</li>
			<li>
				La matrice en $\bar{x}^{(3)}$ est $\left(\begin{array}{rr}0&-4\\0&-1\end{array}\right)$.
				$$
				\begin{array}{rcl}
				0 &=& det(J-\lambda I)\\
				&=& \left|\begin{array}{rr}0-\lambda&-4\\0&-1-\lambda\end{array}\right|\\
				&=& -(-\lambda).-(-1-\lambda)-(-4).0\\
				&=& (\lambda).(1+\lambda)\\
				&=& \lambda^2+\lambda
				\end{array}
				$$
				Ce système est non simple puisqu une valeur propre est égale à 0. Nous ne pouvons rien déduire sur la stabilité du point $\bar{x}^{(3)}$ dans le système originale.
			</li>
			</ul>
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
			Le polynome caractéristique de l'équation homogène est $$\lambda^2-5\lambda+6=0$$ qui a comme racines $\lambda_1=2$,$\lambda_2=3$. L'équation homogène est $$x^h(k)=c_12^k+c_23^k$$ La solution particulière aura une forme $c3(4^k)$, il suffit d'injecter cela dans l'équation de départ et on a
			$$\begin{array}{crcl}&c3(4^{k+2})-5c3(4^{k+1})+6c3(4^k)&=&c3(4^k)\\
			\Leftrightarrow&3(4^k)(c4^2-5c4+6c)&=&3(4^k)\\
			\Leftrightarrow&c4^2-5c4+6c&=&1\\
			\Leftrightarrow&c&=&\dfrac{1}{2}\\
			\Leftrightarrow&x^p(k)&=&\dfrac{3}{2}4^k
			\end{array}$$
			La solution générale est $$\begin{array}{crcl}&x(k)&=&x^h(k)+x^p(k)\\\Leftrightarrow&x(k)&=&c_12^k+c_23^k+\dfrac{3}{2}4^k\end{array}$$
			Pour trouver solution particulière pour $x(0)=0$ et $x(1)=1$, il faut résoudre le système suivant afin de trouver $c_1$ et $c_2$ :
			$$\left\{\begin{array}{rcl}c_1+c_2+\dfrac{3}{2}&=&0\\2c_1+3c_2+\dfrac{3}{2}4&=&0\end{array}\right.$$
			Et l'on trouve $c_1=\dfrac{3}{2}$ et $c_2=-3$. La solution particulière est donc
			$$x(k)=c_12^k+c_23^k+\dfrac{3}{2}4^k$$
		</li>
		<li>
			La solution numérique pour $k = 0, . . . , 7$ est $[0,0,3,27,165,855,4053,18207]$
		</li>
		<li>
			Le système homogène a l'origine comme point d'équilibre unstable.
		</li>
	</ol>
</div>




<h4 class="question">Soit l’équation différentielle suivante $$\dot{x}=rx-x^3,\ x\in\mathbb{R},\ r\in\mathbb{R}$$<ol><li>Trouver les points d’équilibre du système et étudier leur stabilité en fonction de $r$ ;</li><li>Tracer le diagramme de bifurcation associé. Notez les points d’équilibres instables en pointillé ;</li><li>Etudier la nature des points d’équilibres de manière graphique pour $r = 1$ et $r = 36$ ;</li><li>Vérifier par linéarisation les résultats du point précédent ;</li><li>Tracer qualitativement l’évolution temporelle ($t \in [0, 10]$) de $x$ pour<ol class="alphabet"><li>$r = 1$, $x(0) = 8$</li><li>$r = 1/4$, $x(0) = 8$</li><li>$r = −1$, $x(0) = 8$
</li></ol>en tenant en considération la constante de temps.</li><li>Comparer les vitesses de convergence des trajectoires a), b) et c) et expliquer leur différence.</li></ol></h4>
<div class="answer"><ol class="alphabet">
	<li>
		$\bar{x}=0$,$\bar{x}=\sqrt{r}$ et $\bar{x}=-\sqrt{r}$
	</li>
	<li>
		...
	</li>
	<li>
		...
	</li>
	<li>
		...
	</li>
	<li>
		...
	</li>
	<li>
		...
	</li>
</ol>
</div>





<h3>Orale</h3>



<h4>Définition de système dynamique</h4>




<h5 class="question">Énoncer les propriétés de la fonction de transition</h5>
<div class="answer">
	La <fonction de transition> permet de passer d'un état au suivant. C'est généralement un calcul sur un intervalle de temps. Une fois qu'on a calculé l'état dont on a besoin, on s'en sert pour trouver la solution y du problème. La fonction de transition possède quelques propriétés :
	<ol>
		<li><b>Consistance</b> : Une même série d’entrées doit toujours donner la même solution (pas d'aléatoire) ;</li>
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