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
		<li>Si le problème SAT se réduit en temps polynomial vers un problème dcidable en temps polynomial, alors $P=NP$</li>
		<li>Si un problème $A$ se réduit en temps polynomial vers le problème du test du vide d'automates, alors $A$ peut être résolu en temps polynomial</li>
	</ol>
</h4>
<div class="answer">
<ol>
	<li>?</li>
	<li>?</li>
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