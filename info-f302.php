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



<h4 class="question">Donner quatre méthodes vues en cours pour tester si une formule de la logique propositionnelle est valide ou non. Pour chaque méthode, expliquer la en une ligne ou deux.</h4>
<div class="answer">
	<ol>
		<li>?</li>
		<li>?</li>
		<li>?</li>
		<li>?</li>
	</ol>
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
			Les conséquences de $P = NP$ pourraient être considérables dans de nombreux domaines : cryptologie, informatique, mathématiques, ingénierie, économie. On pourrait même imaginer que celui qui prouverait $P = NP$ ressortirait de l'Institut de mathématiques Clay avec 6 millions de dollars, les implications de la solution pouvant rendre la résolution des autres problèmes du millénaire triviale. S'il était au contraire avéré que $P \neq NP$, cela signifierait qu'une large classe de problèmes seraient presque sûrement définitivement hors d'atteinte du calcul dans un temps raisonnable (ou nécessiteraient le développement d'architectures différentes de celles des machines de Turing).
		</li>
		<li>
			
		</li>
	</ol>
</div>




<h4 class="question">Soient $P$ et $P'$ deux problèmes de décision. Que signifie l'expression " $P$ se réduit à $P'$ en temps polynomial" ? (indication : 5 lignes max )</h4>
<div class="answer">
	?
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
	?
</div>






<h4 class="question">Donner les règles à utiliser pour mettre une formule de la logique premier
ordre sous forme prénexe. Peut-on le faire en temps polynomial (dans le nombre de symboles de
la formule) ? Justifier.</h4>
<div class="answer">
	?
</div>





<h4 class="question">
	Indécidabilité - Expliquer ce qu'est un problème indécidable et donner deux exemples (max 10 lignes)
</h4>
<div class="answer">
	L’<b>indécidabilité</b> est la négation de la décidabilité. Dans les deux cas, il s'agit de formaliser l'idée qu'on ne peut pas toujours conclure lorsque l'on se pose une question, même si celle-ci est sous forme logique. Un problème de décision est dit <b>décidable</b> s'il existe un algorithme, une procédure mécanique qui termine en un nombre fini d'étapes, qui le décide, c'est-à-dire qui réponde par oui ou par non à la question posée par le problème. S'il n'existe pas de tels algorithmes, le problème est dit <b>indécidable</b>. Par exemple, le problème de l'arrêt est <b>indécidable</b>.
	<fieldset class="citation">
		<legend>Turing, 1936</legend>
		Le problème de l'arrêt est <b>indécidable</b>
	</fieldset>
	<fieldset class="code"><legend>Exemple simple d'un programme qui ne s'arrête pas</legend>while(true)
		print "bonjour" ;</fieldset>
	Attention : dire qu'un problème est <b>indécidable</b> ne veut pas dire que la question posée n'a pas et n'aura jamais de solution mais seulement qu'il n'existe pas de méthode unique et bien définie, applicable d'une façon mécanique, pour répondre à la question.
	<br><br><b>Preuve de l'indécidabilité du problème de l'arrêt</b><br>
	On procède par l'absurde, en supposant qu'il existe un programme $HALT(c_p,x)$ qui décide le problème de l'arrêt, pour tout programme $P$ donné par son code $c_p$, et toute chaîne de caracètre $x$. A partir de $HALT$, on définit le programme $PARADOX$ suivant :
	<fieldset class="code"><legend>Le programme $PARADOX$</legend>$PARADOX(c : string)$
		$if HALT(c,c) then loop forever$
		$else stop$</fieldset>
	On appelle $PARADOX(c_{PARADOX})$, où $c_{PARADOX}$ est le code source du programme $PARADOX$... que se passe-t-il ?<br>
	Deux cas :
	<ol>
		<li>Si $PARADOX(c_{PARADOX})$ s'arrête, alors c'est que $HALT(c_{PARADOX}, (c_{PARADOX})) = 0$, autrement dit $PARADOX(c_{PARADOX})$ ne s'arrête pas.</li>
		<li>Si $PARADOX(c_{PARADOX})$ ne s'arrête pas, alors c'est que $HALT(c_{PARADOX}, (c_{PARADOX}) = 1$, autrement dit $PARADOX(c_{PARADOX})$ s'arrête.</li>
	</ol>
	Dans les deux cas on obtient une contradiction, c'est donc que le programme $HALT$ n'existe pas.
	<div class="TEMP">Deuxième exemple ?</div>
</div>






<h4 class="question">
	Forme normale conjonctive  - Expliquer de manière précise comment on peut mettre une formule sous forme normale conjonctive (donner toutes les règles qu'on devra potentiellement utiliser). Illustrer sur la formule suivante vue en cours (i.e. la mettre sous forme normale conjonctive) :
	$$\neg(p \leftrightarrow (q \rightarrow r))$$
</h4>
<div class="answer">
	?
</div>




<h4 class="question">Mise sous forme clausale - Donner les différentes étapes de transformations qui permettent de mettre une formule de la logique du premier ordre sous forme clausale (donner un ordre dans lequel les appliquer).
Expliquer brièvement en quoi consiste chaque étape (une phrase par étape).
Illustrer par un exemple de votre choix.
Est-ce que chaque étape de transformation produit nécessairement une formule équivalente à la formule qu'on transforme ?</h4>
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
		<li>$L_1$ est l'ensemble des mots (sur $\sum$), tel qu'entre toute paire de $a$, il existe au moins un $b$. Exemples: $bababbabb$ et $bab$, mais pas $baaba$.</li>
		<li>$L_2$ est l'ensemble des mots tel qu'entre toute paire de $a$, il existe un nombre pair de $b$. Exemples: $abbab$, $baabbab$, mais pas $ababba$</li>
		<li>$L_3 = L_1 \cap L_2$</li>
	</ol>
</h4>
<div class="answer">
	<ol>
		<li><figure><img src="images/info-f302/L_1.svg" alt="answer" /></figure></li>
		<li><figure><img src="images/info-f302/L_2.svg" alt="answer" /></figure></li>
		<li><figure><img src="images/info-f302/L_3.svg" alt="answer" /></figure></li>
	</ol>
</div>



<h4 class="question">
	Réduction entre problèmes : Ordonnancement. Dans ce problème, il vous est demandé de justifier soigneusement vos réponses et d'expliquer votre modélisation. Dans cette partie, nous allons nous intéresser à un problème d'ordonnancement de tâches à réaliser en parallèle sur un ensemble de processeurs. Les contraintes sont des contraintes de durée et de dépendances entre tâches. On suppose que l'on dispose de $k$ processeurs pour une durée maximale $M$, sur lequels ont veut exécuter, possiblement en parallèle, un ensemble $T = {1,2,...,n}$ de $n$ tâches ayant chacune une durée $d_i\in \mathbb{N} \\ {0}$, pour $i\in T$. Certaines tâches pouvant avoir besoin du résultat d'autres tâches, on se donne aussi, pour chaque tâche $i\in T$, un ensemble $G_i \subseteq T$ dont elle dépend. On supposera que le temps est discret, et que chaque tâche doit commencer au temps 0,1,etc. jusque $M-1$. La question est de savoir s'il existe une manière d'ordonnancer les tâches sur les $k$ processeurs en resptectant les contraintes de durée $d_i$, la durée maximale $M$, et les dépendances $G_i$. Bien sûr, deux t^^aches ne peuvent s'exécuter au même moment sur le même processeur.<br>
	Par exemple, considérons les cinqs tâches suivant :
	<table>
		<thead>
			<tr><td>Tâches</td><td>Durée</td><td>Dépendances</td></tr>
		</thead>
		<tbody>
			<tr><td>1</td><td>2</td><td>{2}</td></tr>
			<tr><td>2</td><td>3</td><td>null</td></tr>
			<tr><td>3</td><td>5</td><td>{4,5}</td></tr>
			<tr><td>4</td><td>1</td><td>null</td></tr>
			<tr><td>5</td><td>1</td><td>null</td></tr>
		</tbody>
	</table>
	Pour $k = 1$ et $M = 12$, on peut ordonnancer les tâches comme suit (les dépendances sont représentées par des flèches) :
	<figure><img src="images/info-f302/ordonnancement_1.svg" alt="ordonnancement" /></figure>
	Pour $k = 1$ et $M = 11$, il n’y a pas de solution puisque la durée totale des tâches est $12$. Pour $k = 2$ et $M = 6$, il existe la solution suivante :
	<figure><img src="images/info-f302/ordonnancement_2.svg" alt="ordonnancement" /></figure>
	Si on ajoute la dépendance G4 = {5}, alors il n’y a plus de solution avec M = 6 mais une solution avec M = 7 :
	<figure><img src="images/info-f302/ordonnancement_3.svg" alt="ordonnancement" /></figure>
	Remarquez que dans cette dernière solution le processeur 1 est inactif pendant deux unités de temps.
	<ol>
		<li>
			Considérons les données suivantes :
			<table>
				<thead>
					<tr><td>Tâches</td><td>Durée</td><td>Dépendances</td></tr>
				</thead>
				<tbody>
					<tr><td>1</td><td>1</td><td>null</td></tr>
					<tr><td>2</td><td>1</td><td>null</td></tr>
					<tr><td>3</td><td>1</td><td>null</td></tr>
					<tr><td>4</td><td>2</td><td>{1,2,3}</td></tr>
					<tr><td>5</td><td>3</td><td>{1}</td></tr>
				</tbody>
			</table>
			Pour les cas suivants, dire s’il existe ou pas une solution, et la donner le cas échéant :
			<ol>
				<li>$k = 1,\ M = 8$</li>
				<li>$k = 2,\ M = 4$</li>
				<li>$k = 3,\ M = 3$</li>
			</ol>
			Si on prend maintenant la dépendance $G_5 = {1, 2}$ au lieu de $G_5 = {1}$, quelle est la durée minimale M pour laquelle il existe une solution avec deux processeurs ?
		</li>
		<li>
			Nous vous rappelons le problème 2-Partition. Étant donnés $m$ entiers $a_1, ..., a_m \in \mathbb{N}$ tel que $\sum_{i=1}^m a_i$ est paire, on voudrait savoir s'il existe un ensemble $I \subseteq {1, ...,m}$ tel que : $$\sum_{i\in I} a_i = \sum_{i\notin I} a_i$$
			Démontrer que le problème 2-Partition se réduit en temps polynomial au problème d’ordonnancement. Que peut-on en déduire sur la complexité du problème d’ordonnancement ?
		</li>
		<li>
			Etant donnée une instance I du problème d’ordonnancement, expliquer
			comment construire une formule de la logique propositionnelle φI en forme normale conjonctive
			telle que I a une solution si et seulement si φI est satisfaisable. Note : les données k et M sont
			données dans l’instance I.
		</li>
		<li>
			On considère maintenant que M n’est pas donné dans l’instance du problème,
			et on s’intéresse à trouver le plus petit M pour lequel il existe une solution. Expliquer comment
			utiliser un solveur SAT, ainsi que la réponse à la question précédente, pour répondre au problème
			de minimisation.
		</li>
		<li>
			On voudrait maintenant que les processeurs soient libérés le plus tˆot possible, c’est-à-dire qu’ils n’aient p ...
		</li>
	</ol>
</h4>
<div class="answer">
	<ol>
		<li>
			<ol>
				<li><figure><img src="images/info-f302/ordonnancement_answer_1.svg" alt="answer" /></figure></li>
				<li><figure><img src="images/info-f302/ordonnancement_answer_2.svg" alt="answer" /></figure></li>
				<li>Impossible car $M=3$ et $T_4$ est de longueur $3$ aussi et il possède des dépendances.</li>
			</ol>
		</li>
		<li>
			?
		</li>
		<li>
			?
		</li>
	</ol>
</div>