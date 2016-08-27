<h1>INFO-F-302 - Informatique Fondamentale</h1>
<h2>Examen</h2>
<h3>Théorie</h3>






<h4 class="question">Logique - Considérons le raisonnement suivant : "i la rivière est polluée alors les poissons meurent. Les poissons meurent, donc la rivière est polluée." Ce raisonnement est-il correct ? Formaliser ce raisonnement en logique propositionnelle et démonrer sa correction ou son incorrection avec la méthode de votre choix. Même question avec le raisonnement suivant : "Si la rivière déborde, alors il y a des inondations. Donc s'il n'y a pas d'inondations, alors la rivière ne déborde pas.</h4>
<div class="answer">
	<ul>
		<li>
			r : "La rivière est polluée"<br>
			m : "Les poissons sont morts"<br>
			$r \rightarrow m$ : "La rivière est polluée donc les poissons sont morts"<br>
			$m \rightarrow r$ : "Les poissons sont morts donc la rivière est polluée"
			$$\begin{array}{c|c|c|c|c|c}
			m&r&r\rightarrow m&m\rightarrow r\\
			0&0&1&1\\
			0&1&0&1\\
			1&1&1&1\\
			1&0&1&0
			\end{array}$$
			Les deux implications ne sont pas les mêmes pour toutes les valeurs possibles, donc le raisonnement est faux.
		</li>
		<li>
			r : "La rivière déborde"<br>
			i : "Il y'a des inondations"<br>
			$r \rightarrow i$ : "La rivière déborde donc il y a des inondations"<br>
			$\neg i \rightarrow \neg r$ : "Il n'y a pas d'inondation, donc la rivière ne déborde pas."
			$$\begin{array}{c|c|c|c|c|c}
			i&r&\neg i&\neg r&r\rightarrow i&\neg i\rightarrow\neg r\\
			0&0&1&1&1&1\\
			0&1&1&0&0&0\\
			1&1&0&0&1&1\\
			1&0&0&1&1&1
			\end{array}$$
			Les deux implications sont les mêmes pour toutes les valeurs possibles, donc le raisonnement est vrai.
		</li>
	</ul>
</div>




<h4 class="question">
	Réductions - Dire des affirmations suivantes si elles sont vraies ou fausses, justifier :
	<ol>
		<li>Si le problème SAT se réduit en temps polynomial vers un problème décidable en temps polynomial, alors $P=NP$</li>
		<li>Si un problème $A$ se réduit en temps polynomial vers le problème du test du vide d'automates, alors $A$ peut être résolu en temps polynomial</li>
	</ol>
</h4>
<div class="answer">
	<ol>
		<li>
			Faux : La grande <b>conjecture</b> de l'informatique fondamentale est : $$P \neq NP$$
			Autrement dit, le problème $P=NP$ est un problème non résolu, on ne sait pas encore démontrer cette formule. Il est considéré par de nombreux chercheurs comme un des plus importants problèmes du domaine, et même des mathématiques en général.<br>
			L'Institut de mathématiques Clay a inclus ce problème dans sa liste des sept problèmes du prix du millénaire, et offre à ce titre un million de dollars à quiconque sera en mesure de prouver $P = NP$ ou $P \leq NP$.<br><br>
			Plus précisément, il s'agit de savoir si la classe de complexité $P$ des problèmes de décision admettant un algorithme de résolution s'exécutant en temps polynomial sur une machine de Turing est équivalente à la classe de complexité $NP$ des problèmes de décision dont la vérification du résultat, une fois celui-ci connu, demande un temps polynomial. Un algorithme qui demande un temps d'exécution polynomial est généralement considéré comme « rapide » (par rapport à un temps d'exécution exponentiel par exemple).<br>
			Les conséquences de $P = NP$ pourraient être considérables dans de nombreux domaines : cryptologie, informatique, mathématiques, ingénierie, économie. On pourrait même imaginer que celui qui prouverait $P = NP$ ressortirait de l'Institut de mathématiques Clay avec 6 millions de dollars, les implications de la solution pouvant rendre la résolution des autres problèmes du millénaire triviale. S'il était au contraire avéré que $P \eq NP$, cela signifierait qu'une large classe de problèmes seraient presque sûrement définitivement hors d'atteinte du calcul dans un temps raisonnable (ou nécessiteraient le développement d'architectures différentes de celles des machines de Turing).
		</li>
		<li>
			
		</li>
	</ol>
</div>





<h4 class="question">
	Indécidabilité - Expliquer ce qu'est un problème indécidable et donner deux exemples (max 10 lignes)
</h4>
<div class="answer">
</div>




<h4 class="question">Donner quatre méthodes vues en cours pour tester si une formule de la logique propositionnelle est valide ou non. Pour chaque méthode, expliquer la en une ligne ou deux.</h4>
<div class="answer">
	<ol>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ol>
</div>






<h4 class="question">Forme normale conjonctive  - Expliquer de manière précise comment on peut mettre une formule sous forme normale conjonctive (donner toutes les règles qu'on devra potentiellement utiliser). Illustrer sur la formule suivante vue en cours (i.e. la mettre sous forme normale conjonctive) :
$$\neg(p \leftrightarrow (q \rightarrow r))$$</h4>
<div class="answer">
</div>




<h4 class="question">Mise sous forme clausale - Donner les différentes étapes de transformations qui permettent de mettre une formule de la logique du premier ordre sous forme clausale (donner un ordre dans lequel les appliquer).
Expliquer brièvement en quoi consiste chaque étape (une phrase par étape).
Illustrer par un exemple de votre choix.
Est-ce que chaque étape de transformation produit nécessairement une formule équivalente à la formule qu'on transforme ?</h4>
<div class="answer">
</div>




<h4 class="question">Soient Pet P' deux problèmes de décision. Que signifie l'expression " P se réduit à P' en temps polynomial" ? (indication : 5 lignes max</h4>
<div class="answer">
</div>





<h4 class="question">Dire des affirmations suivantes si elles sont vraies ou fausses.
<ol>
	<li>toute formule de la logique propositionnelle est équivalente à une formule qui n'utilise que
	les connecteurs ! et :. Justifer votre réponse.</li>
	<li>il existe des problèmes NP-complets qui sont indécidables. Justifer votre réponse.</li>
	<li>il existe des problèmes de la classe NP qu'on peut résoudre en temps polynomial. Justifier votre réponse.</li>
</ol>
</h4>
<div class="answer">
</div>






<h4 class="question">Question 2 (2 points) Donner les règles à utiliser pour mettre une formule de la logique premier
ordre sous forme prénexe. Peut-on le faire en temps polynomial (dans le nombre de symboles de
la formule) ? Justifier.</h4>
<div class="answer">
</div>









<h3>Pratique</h3>


<h4 class="question">
	Logique du premier ordre - On se donne un langage du premier ordre $S=\{f,p,c\}$ où $f$ est un symbole de fonction unaire, $p$ un symbole de prédicat binaire, et $c$ un symbole de constante. On supose aussi qu'on a l'égalité $=$. Exprimer les propriétés suivantes en logique du premier ordre :
	<ol>
		<li>Tout élément et son image par $f$ sont en relation par $p$.</li>
		<li>La fonction $f$ coincide avec la relation $p$. Autrement dit, si on voit $f$ comme une relation binaire, alors elle est égale à $p$</li>
		<li>$c$ est le seul élément dont l'image par $f$ est égale à lui-même.</li>
		<li>Si on suppose que $p$ est une relation d'ordre, exprimer que $f$ est monotone (soit croissante soit décroissante).</li>
	</ol>
</h4>
<div class="answer">
<ol>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ol>
</div>


<h4 class="question">
	Soit $\sum=\{a,b\}$ un alphabet à deux symboles. Pour chacun des langages suivants, construire un automate qui l'accepte :
	<ol>
		<li>$L_1$ est l'ensemble des mots (sur $\sum$), tel 
		qu'entre toute paire de $a$, il existe au moins un $b$. Exemples: $bababbabb$ et $bab$, mais pas $baaba$.</li>
		<li>$L_2$ est l'ensemble des mots tel qu'entre toute paire de $a$, il existe un nombre pair de $b$. Exemples: $abbab$, $baabbab$, mais pas $ababba$</li>
		<li>$L_3=L_1\cap L_2</li>
	</ol>
</h4>
<div class="answer">
	<ol>
		<li>ca arrive</li>
		<li></li>
		<li></li>
	</ol>
</div>