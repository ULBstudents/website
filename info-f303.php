<h1>INFO-F303 - Réseaux, information et communications</h1>
<h2>Examen</h2>
Les réponses proviennent (ou par l'intermédiaire de résumé) de Denis Steckelmacher, Pierre Dagnely, Christophe Dumeunter, Julien Vanbergen, David Fishel et Rodrigue Van Brande. Merci à eux.
<h3>Théorie</h3>



<h4 class="question">Expliquez la différence entre une paire de cuivre torsadée de catégorie 3 et une paire de catégorie 5. Laquelle permet un débit plus élevé et pourquoi ?</h4>
<div class="answer">On utilise des paires de cuivre torsadées car en effet deux fils de cuivres parallèle crée un champ magnétique proportionnelle à leur distance, ce qui induit un grand courant et donc beaucoup de bruit. Or lorsqu'ils sont torsadés, les torsades créent chacune leur champs magnétique et courant induit et les flux induits s'inversent dans chaque boucle adjacente. Les effets sont donc atténués. Plus les torsades sont petites, plus l'effet est efficace. Les fils de catégorie 5 sont plus torsadé que ceux de catégorie 3 et donc plus efface (100 Mbps contre 10 Mbps)
	<figure>
		<img src="images/cable-torsade.svg" alt="Cable torsadé" />
		<figcaption>Cable torsadé</figcaption>
	</figure>
</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez la différence entre une fibre optique monomode et une fibre multimode.</li><li>Laquelle permet un débit plus élevé et pourquoi ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>La fibre optique est une émission d'un nuage de photon dans un câble en verre. Composé d’un câble en fibre optique inclus dans un autre, les deux ayant des indices de réfractions différents. Ceci permettant de piéger les signaux par réfraction. les photons ne peuvent plus quitter le câble et se retrouve bloqué dans le câble du centre. On utilise deux types de fibre : Le monomode et multimode.
<figure>
	<img src="images/multimode-monomode.svg" alt="Fibres monomode et multimode" />
	<figcaption>Fibres monomode et multimode</figcaption>
</figure>
<ul>
	<li><b>Multimode</b> : Le problème de la fibre optique est que les photons émis dans un même nuage prennent des trajectoires différentes (en fonctions des angles de réflexions au sein du câble), les photons du signal n’arrivent donc pas en même temps au bout du câble (ni dans la même partie). Or plus la distance est longues plus cet effet grandit et plus l’écart entre les photons de tête et de queue s’agrandit, on a donc un étalement puis un chevauchement des flux. Pour éviter les chevauchement on est donc obligé d’espacer les émissions en fonction des distances et capacités de réceptions.</li>
	<li><b>Monomode</b> : Ici on utilise un verre plus étroit ( 2.4 µ ) avec un seul mode de propagation, les photons vont donc en ligne droite, sans étalement. C’est efficace pour les grandes distances, mais plus chère.</li>
</ul>
</li>
<li>La fible multimode possède donc un débit plus élevé car il est moins étroit que la fibre monomode.Cependant elle est moins optimale à cause des chevauchement possible et n'est du coup utilisé que pour de courte distances</li>
</ol></div>


<h4 class="question"><ol class="alphabet"><li>Expliquez la dispersion de délai dans une fibre optique.</li><li>Quelle en est la conséquence ?</li><li>Dans quel type de fibre la rencontre-t-on ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>La dispersion du délai se produit lorsque les rayons lumineux sont réfractés ou réfléchis par la couche périphérique de l'âme de la fibre, et que ces rayons ont des trajectoires différentes. Ces trajectoires ayant des longueur différentes, le temps que mettra la lumière à les parcourir différera, et une impulsion lumineuse très courte pourrait être reçue en plusieurs fragments de l'autre côté.</li>
<li>La détection des bits formés par ces impulsions lumineuses devient plus difficile, voire impossible, à moins d'espacer les impulsions lumineuses par un délai d'attente. Cependant, ce délai pénalise énormément le débit de la fibre puisque c'est du temps qui pourrait être utilisé pour transférer des données.</li>
<li>On rencontre ce phénomène dans les fibres multimodes.</li>
</ol></div>


<h4 class="question">Pourquoi utilise-t-on un modem pour transmettre de l'information numérique sur une ligne téléphonique ? Comment module-t-on le signal dans les modems « dial-up » les plus courants ?</h4>
<div class="answer">C'est une forme d'accès à internet qui utilise le réseau téléphonique pour établir une connexion à un ISP. La vitesse maximale est de 56 Kbps et on ne peut téléphoner en même temps. Modulateur/DéModulateur. Le But d'un modem est de transformer des informations binaires (numériques) en un signal analogique (et vice-versa). Le plus souvent on modifie à la fois l'amplitude du signal et sa phase. On ne passe donc pas 1 bit à la fois, mais au moins 2 (1 grâce à l'amplitude et 1 à la phase).</div>



<h4 class="question">Expliquez l'utilité du <b>ACK</b> et <b>NAK</b>.</h4>
<div class="answer">Le service de transfert fiable des données doit détecter les erreurs via checksum et utiliser des accusés de réceptions : le récepteur doit dire explicitement à l'envoyeur s'il a reçu avec ou sans erreur le paquet. Un accusé de réception peut être un <b>ACK</b> (packet reçu) ou un <b>NAK</b> (packet reçu mais corrompu). Les accusés de réception pouvant aussi être corrompu, on leur ajoute aussi un checksum. On indique dans le <b>ACK</b> ou le <b>NAK</b> de quel paquet il est l'accusé de réception sinon on peut déstabiliser le système.
<figure>
	<img src="images/ack-not-nominative.svg" alt="Erreur possible lors d'un <b>ACK</b> non nominatif" />
	<figcaption>Erreur possible lors d'un <b>ACK</b> non nominatif</figcaption>
</figure>
</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez le principe du protocole <b>stop & wait</b>.</li><li>Est-il toujours performant ?</li></h4>
<div class="answer"><ol class="alphabet">
<li>On utilise une boucle simple : send &rarr; wait positive response &rarr; send &rarr; ... . Le <b>NAK</b> n'est pas utilisé car recevoir un packet corrompu est similaire à ne rien recevoir ; on ne renvoie donc rien et on attend le renvoie automatique à la fin du timer. Le problème est de choisir un bon timer car un timer trop petit peut déclencher la retransmission d'un message alors que le <b>ACK</b> est en chemin et peut donc surcharger le système. À l'inverse un timer trop grand et le système réagit trop lentement.</li>
<li>Ce protocole a été mis au point dans les années 70 pour des réseau peu étendu et peu performant, aujourd'hui il n'est plus performant car les <b>RTT</b> (temps de propagation) sont devenus important, et avec ce protocole ils sont du temps mort.
<figure>
	<img src="images/stopandwait-too-old.svg" alt="Le protocole <b>stop & wait</b> donne du temps mort" />
	<figcaption>Le protocole <b>stop & wait</b> donne du temps mort</figcaption>
</figure></li>
</ol></div>



<h4 class="question">Expliquez le principe du parallélisme (pipelining).</h4>
<div class="answer">Au lieu d'envoyer les packets un à un comme le protocole <b>stop & wait</b>, on envoie une rafale de packet avec les différents accusés de réceptions séparés. Ici on reste donc actif pendant une partie du <b>RTT</b>. Il existe deux stratégies possible : le protocole à fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>) et protocole à fenêtre glissante <b>SR</b> (<b>Selective Repeat</b>).
<figure>
	<img src="images/pipelining.svg" alt="Le principe du parallélisme" />
	<figcaption>Le principe du parallélisme</figcaption>
</figure>
</div>



<h4 class="question">Expliquez le principe d’un protocole à fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>).</h4>
<div class="answer">Le sender est autorisé à transmettre de multiples packets (si disponible) sans attendre d'<b>ACK</b>s, mais est contraint de ne pas avoir plus de N packets sans <b>ACK</b> dans le pipeline. En résumé l'émetteur envoie N paquets d'un coup et le récepteur envoie N accusés de reception. De plus un <b>ACK</b> correspond aussi à la réception de tous les paquets précédents. Si on reçoit <b>ACK</b>(6), c'est que les 5 autres paquets ont été reçu. En effet le système est plus robuste car si <b>ACK</b>(5) se perd, on ne renverra quand même pas ce paquet. Mais en contre-partie on n'accepte les paquets que dans l'ordre ; si on recoit 6 avant 5, on détruit 6 (car à l'époque la mémoire était chère) et il faudra le renvoyer. Ce qui est problématique car le réseau est utilisé inutilement.
</div>



<h4 class="question">Quelle est la taille maximale de la fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>), si les trames sont numérotées modulo k ? Pourquoi ?</h4>
<div class="answer">On voit que le récepteur considère que le deuxième paquet qu’il reçoit la deuxième fois est le même que le premier qu’il a déjà reçu et non le troisième packet. Ainsi il le supprime et envoie un <b>ACK</b> pensant que le premier <b>ACK</b> s’est perdu, on perd donc le paquet et perturbe toute la chaîne.
<figure>
	<img src="images/size-window-gbn.svg" alt="Taille maximale de la fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>)" />
	<figcaption>Taille maximale de la fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>)</figcaption>
</figure>
La taille maximale de la fenêtre est donc le nombre de numéro de séquence-1.
</div>



<h4 class="question">Expliquez le principe d’un protocole à fenêtre glissante <b>SR</b> (<b>Selective Repeat</b>).</h4>
<div class="answer"><b>GBN</b> (<b>Go-Back N</b>) souffre malgré ses améliorations encore quelques problèmes de performances. En effet, la moindre erreur dans un paquet peut entraîner la retransmission superflue d'une grande quantité de paquets pourtant déjà arrivés intègres. Le protocole à fenêtre glissante <b>SR</b> (<b>Selective Repeat</b>) évite les retransmissions inutiles et demandent à l'expéditeur de ne retransmettre que les paquets susceptibles d'avoir été perdus ou corrompus lors de la transmission. Cela implique que le destinataire envoie un <b>ACK</b> pour chaque paquet correctement reçu. Comme dans <b>GBN</b> (<b>Go-Back N</b>), une fenêtre permet de limiter le nombre de paquets en attente de confirmation. En revanche certains paquets de cette fenêtre auront déjà fait l’objet d’un accusé de réception. Le destinataire renvoie un accusé pour chaque paquet valide qu’il reçoit, qu’il soit dans l’ordre ou non, et stocke dans un tampon ceux qui sont encore temporairement hors séquence (notons que ce tampon ne dépassera jamais la taille de la fenêtre d’envoi de l’expéditeur). Afin d’éviter les problèmes de confusions avec les numéros de séquence, la quantité de numéros disponible doit être au moins deux fois plus grande que la taille de la fenêtre.</div>



<h4 class="question">Quelle est la taille maximale de la fenêtre glissante <b>SR</b> (<b>Selective Repeat</b>), si les trames sont numérotées modulo k ? Pourquoi ?</h4>
<div class="answer">On ne peut pas utiliser une fenêtre aussi grande que pour le <b>GBN</b> (<b>Go-Back N</b>). 
<p>$\text{taille}_{\text{max}} = \dfrac{\text{nombre de numéro de paquets}}{2}$</p>
Car il ne faut pas qu'un nombre de la fenêtre de l'émetteur corresponde à un nombre de la fenêtre du récepteur, mais d'un autre rang. Exemple:
<p>émetteur |0 1 2| 3 0 1 2 &rarr; récepteur 0 1 2 |3 0 1| 2</p>
Le récepteur a reçu les paquets (0 1 2) et attend donc les paquets (3 0 1), mais l'émetteur n'a pas reçu les <b>ACK</b>, il considère donc que les paquets (0 1 2) n'ont pas été reçu, et lors du time-out, il les renverra. Mais le récepteur prendra le paquet 0 qu'il va recevoir pour celui qu'il attend, et non pour celui qu'il a déjà reçu.
<p>Remarque : le débit était lié à la taille de la fenêtre, il faut alors choisir un grand nombre de numéro de paquets.</p></div>



<h4 class="question">Dans les protocoles à fenêtre glissante de type « <b>Selective Repeat</b> », quelles sont les relations qui sont satisfaites à tout instant entre les quatre valeurs suivantes : les bords inférieurs et supérieurs des fenêtres de l’émetteur et du récepteur ? Justifiez.</h4>
<div class="answer">Taille maximale de la fenêtre de l'envoyeur(Ns) + Taille maximale de la fenêtre du receveur(Nr) $\leq$  K. Quelque soit le protocole. Pour le selective repeat, Nr = Ns $\leq$ K/2</div>

<h4 class="question"><ol class="alphabet"><li>Donnez 4 éléments majeurs des protocoles " Go-Back-N " et " <b>Selective Repeat</b> " qui permettent de les différencier.</li><li>Pour chacun de ces éléments pris indépendamment, indiquez si <b>TCP</b> s’apparente davantage à l’un d’eux. Expliquez.</li><li>Quelle optimisation supplémentaire, liée au contrôle d'erreur, <b>TCP</b> y apporte-t-il ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>
	<table>
		<thead>
			<tr>
				<th>
					<b>GBN</b> (<b>Go-Back N</b>) 
				</th>
				<th>
					<b>SR</b> (<b>Selective Repeat</b>) 
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					Un seul <b>ACK</b>
				</td>
				<td>
					<b>ACK</b> individuels pour chaque packet
				</td>
			</tr>
			<tr>
				<td>
					Détruit les packet "en avance" et demande une reception "dans l'ordre"
				</td>
				<td>
					Il existe un buffer du côté récepteur, on ne détruit donc pas les paquets arrivés "en avance"
				</td>
			</tr>
			<tr>
				<td>
					Un seul timer correspondant au dernier packet
				</td>
				<td>
					Timer individuels pour chaque packet
				</td>
			</tr>
			<tr>
				<td>
					??? On renvoie que les packets sans <b>ACK</b> ???
				</td>
				<td>
					??? On renvoie tout les paquets à partir de celui sans <b>ACK</b> ???
				</td>
			</tr>
		</tbody>
	</table>
</li>
<li>
La technique de fiabilité de <b>TCP</b> est un mixte entre la technique <b>GBN</b> (<b>Go-Back N</b>)  et la technique <b>SR</b> (<b>Selective Repeat</b>). Dans la première technique, on reprends la méthode d'un seul timer (associé au dernier paquet) ainsi que les <b>ACK</b> cumulatif (<b>ACK</b>(6) signifie qu'on aussi <b>ACK</b>(5) et les autres précédents). Cependant dans le <b>GBN</b> (<b>Go-Back N</b>) on renvoyait toute la fenêtre après le <b>ACK</b> de retour, mais ici on reprend, dans la deuximème technique, le revoie seulement du dernier segment manquant et on verra avec les <b>ACK</b> futurs si il en manquait d'autres. Ainsi l'optimisation " Fast retransmit " peut être mis en place, elle permet à <b>TCP</b> de détecter avant le timer qu'un segment est perdu. En effet, si on envoie les paquets par rafale, et qu'on recoit en retour plusieurs fois un même <b>ACK</b>, cela veut dire que plusieurs segments postérieurs sont arrivé avant le segment lié à cet <b>ACK</b>. Ce segment est donc soit perdu, corrompu ou en retard.
Par conventation, on considère que le segment est perdu après qu'on ai reçu trois <b>ACK</b> identiques.
</li>
<li>Voir (b)</li>
</ol>
</div>



<h4 class="question"><ol class="alphabet"><li>En première approximation, quels sont les 3 paramètres qui influencent le débit d’une connexion <b>TCP</b> ? Expliquez.</li><li><b>TCP</b> garantit-il un partage équitable des ressources du réseau par les différentes connexions ? Pourquoi ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>
	Il y a 3 paramètres qui peuvent entraîner des pertes et ainsi une baisse momentané du débit :
	<ul>
		<li><b>p</b> ( <b>Taux d'erreur</b> ) ;</li>
		<li><b>W</b> ( <b>Fenêtre de congestion</b> ) mesuré en <b>MSS</b> ( <b>Max Segment Size</b> ) ;</li>
		<li><b>RTT</b> ( <b>Round-Trip Time</b> ).</li>
	</ul>
	Car la formule de l'efficacité est $\sqrt{\frac{3}{2}}\frac{MSS}{RTT}$ et donc est meilleure avec des MSS plus gros et des petits RTT. Des packets plus gros dont "l'aller-retour" est rapide.
</li>
<li>Quand <b>TCP</b> est en concurrence avec <b>UDP</b>, <b>TCP</b> va ralentir mais <b>UDP</b> ne va pas réduire son trafic. <b>TCP</b> va donc être désavantagé par rapport à <b>UDP</b>. On remarque également avec <b>TCP</b> que aux goulets d’étranglement, si on a 2 connections <b>TCP</b> concurrentes avec les même <b>RTT</b> et qu’une a commencé avant l’autre, elles vont se partager la bande passante de manière de plus en plus équitable au fur et à mesure que le temps avance. Si par contre elles n’ont pas le même <b>RTT</b>, celle qui aura le plus petit <b>RTT</b> sera avantagée. C’est à la fois une bonne chose et une mauvaise chose. En effet, si on regarde au niveau locale, les ressources ne sont pas réparties équitablement (mauvaise chose) mais au niveau globale, la connexion avec un <b>RTT</b> plus grand sera passée par plus de noeuds puisqu’elle vient de plus loin et donc aura consommé plus de ressources sur d’autres noeuds que la connexion avec un petit <b>RTT</b>.</li>
</div>



<h4 class="question">10 processus clients communiquent simultanément avec un processus serveur attaché au <b>port</b> 8000.<ol class="alphabet"><li>Combien de sockets vont être ouverts par le serveur si les processus communiquent par <b>UDP</b> ? Pourquoi ?</li><li>Même question s’ils communiquent par <b>TCP</b>.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><b>UDP</b> ne crée pas de connexion persistante. L'emetteur ne fait que créer un packet en y attachant l'<b>IP</b> ciblé, le <b>port</b> ciblé ainsi que ses propres coordonnées puis l'envoie. Il ne se soucie pas si il atteint le recepteur ou non. Ainsi le processus serveur attaché au <b>port</b> 8000 recevra (si il n'y a aucune perte) les 10 messages envoyé par les processus clients. Du coup 1 seul socket sera ouvert.</li>
<li><b>TCP</b> crée une connexion persistante, du coup il faut ouvrir et réserver un socket pour chaque processus client. Du coup 10 sockets seront ouverts. Mais il ne faut pas oublier le socket qui sert à écouter et à accepter les nouvelles connexions. Donc c'est un total de 11 sockets qui seront ouverts.</li>
</ol></div>

<h4 class="question"><ol class="alphabet"><li>Comment l’émetteur <b>TCP</b> détecte-t-il une congestion ?</li><li>Décrivez le mécanisme de contrôle de congestion de <b>TCP</b>.</li><li>Quelle distinction <b>TCP</b> fait-il entre congestion légère et congestion sévère ? Comment réagit-il dans chaque cas ?</li><li>Si on néglige les effets du contrôle de flux, ce contrôle de congestion détermine largement le débit moyen d’une connexion <b>TCP</b>. Quand plusieurs connexions <b>TCP</b> sont en compétition, se partagent-elles la bande passante disponible de façon équitable ? Expliquez.</li></ol></h4>
<div class="answer"><ol class="alphabet">
	<li><b>TCP</b> peut distinguer 2 types de <b>congestions</b>: soit il reçoit 3 <b>ACK</b>s consécutifs pour le même numéro de séquence (donc un des paquets intermédiaire a été perdus, mais les suivants sont passés: <b>faible congestion</b>), soit un <b>ACK</b> n'arrive pas dans le temps imparti (timeout, beaucoup de paquets perdus: <b>congestion sévère</b>).</li>
	<li>Au démarage de la transmission, <b>TCP</b> envoie les données avec une fenêtre de taille 1 <b>MSS</b> (<b>Maximum Segment Size</b>), correspondant au nombre de paquets qui peuvent être en parcourt simultanément. La taille de la fenêtre est doublée à chaque itération (en incrémentant la taille à chaque <b>ACK</b> reçu), de sorte qu'elle a une <b>croissance exponentielle</b>. S'il détecte une <b>faible congestion</b>, il divise la taille de la fenêtre par deux et change de mode pour incrémenter la taille de la fenêtre à chaque itération (+1 pour chaque fenêtre totalement envoyée) pour adopter une <b>croissance linéaire</b>. Il approche ainsi <b>dichotomiquement</b> la taille moyenne de fenêtre optimale (càd le nombre de paquets en parcourt, et donc la vitesse d'envoi). S'il détecte une <b>congestion sévère</b>, il réduit la taille de fenêtre à 1 et recommence en mode de <b>croissance exponentiel</b>. Il peut éventuellement repasser en mode de <b>croissance linéaire</b> lorsqu'il a atteint la moitié de la taille de fenêtre qui a provoqué un timeout (puisque doubler sa taille provoquera probablement de nouveau un timeout).</li>
	<li>Voir (a) et (b).</li>
	<li>Sachant que le timeout est calculé à partir du <b>RTT</b>, deux sessions <b>TCP</b> en compétition pour la même connexion approcheront toujours la vitesse optimale pour leurs <b>RTT</b>. <b>TCP</b> répartira la connexion de façon équitable en ce sens que chaque session utilisera une bande passante inversément proportionelle à son <b>RTT</b>, évitant la retransmission en bloc de paquets inutiles sur des connexions trop lentes.</li>
</ol>
</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez l’établissement de connexion « 3-way handshake » utilisé dans le protocole de transport <b>TCP</b>, en indiquant les paramètres importants présents dans les échanges et leurs rôles.</li><li>Expliquez avec l’aide d’un exemple pourquoi un « 2-way handshake » ne serait pas suffisant.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>
	Comme son nom l'indique, le <b>3-way handshake</b> se déroule en trois étapes:
	<ul>
		<li><b>SYN</b> (<b>synchronized</b>) : Le client qui désire établir une connexion avec un serveur va envoyer un premier paquet <b>SYN</b> au serveur. Le numéro de séquence de ce paquet est un nombre aléatoire A.</li>
		<li><b>SYN-<b>ACK</b></b> (<b>synchronize-acknowledge</b>) : Le serveur va répondre au client à l'aide d'un paquet <b>SYN-<b>ACK</b></b>. Le numéro du <b>ACK</b> est égal au numéro de séquence du paquet précédent (<b>SYN</b>) incrémenté de un (A + 1) tandis que le numéro de séquence du paquet <b>SYN-<b>ACK</b></b> est un nombre aléatoire B.</li>
		<li><b>ACK</b> (<b>acknowledge</b>): Pour terminer, le client va envoyer un paquet <b>ACK</b> au serveur qui va servir d'accusé de réception. Le numéro de séquence de ce paquet est défini selon la valeur de l'acquittement reçu précédemment p.e. A + 1 et le numéro du <b>ACK</b> est égal au numéro de séquence du paquet précédent (<b>SYN-<b>ACK</b></b>) incrémenté de un (B + 1).</li>
	</ul>
Une fois le <b>3-way handshake</b> effectué, le client et le serveur ont reçu un acquittement de la connexion. Les étapes 1 et 2 définissent le numéro de séquence pour la communication du client au serveur et les étapes 2 et 3 définissent le numéro de séquence pour la communication dans l'autre sens. Une communication full-duplex est maintenant établie entre le client et le serveur.
</li>
<li>
Le <b>2-way handshake</b> n'est pas suffisant car on saute l'etape 2 du <b>3-way handshake</b>. Si par exemple, un Client A veut parler avec un serveur B, il faut que B sache que A peut entendre ce qu'il dit. Car dans le <b>2-way handshake</b>, A envoi à B et B répond à A. Mais B ne sait pas si son message est reçu par A.
</li>
</ol>
</div>


<h4 class="question"><ol class="alphabet"><li>Décrivez l’architecture générique d’un routeur et le rôle de chaque composant.</li><li>Comment peut-on perdre des paquets dans les <b>ports</b> d’entrée ?</li><li>Comment peut-on perdre des paquets dans les <b>ports</b> de sortie ?</li><li>Qu’est-ce que le blocage HOL ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Quatre éléments principaux peuvent être identifiés dans l’architecture d’un routeur :
<ul>
	<li><b>Port d’entrée</b> : Prend en charge les fonctionnalités de la couche physique et de la couche liaison. Il assure une fonction de consultation et d’acheminement des paquets entrant dans la matrice de commutation vers le <b>port</b> de sortie approprié.</li>
	<li><b>Matrice de commutation</b> : Relie les <b>ports</b> d’entrée et les <b>ports</b> de sortie.</li>
	<li><b>Port de sortie</b> : Emmagasine les paquets qu’il reçoit de la part de la matrice de commutation. Assure les fonctionnalités inverses de la couche liaison et de la couche physique.</li>
	<li><b>Processeur de routage</b> : Chargé de l’exécution des protocoles de routage, de la mise à jour des informations et des tables.</li>
</ul>
</li>
<li>
Le point le plus problématique est le fait que les routeurs doivent opérer à des vitesses élevées, impliquant des millions de consultations par seconde ; on souhaite en effet que l'opération de consultation soit plus rapide que le temps qu'il faut au routeur pour recevoir un nouveau paquet. Dès que le <b>port</b> de sortie a été identifié, le paquet peut entrer dans la matrice de commutation. Cependant un paquet peut se voir refuser temporairement l'accès si elle est occupée à traiter des paquets qui ont été reçus sur d'autres liaisons d'entrée. Il est alors placé en file d'attente sur son <b>port</b>. Si la matrice de commutation n'est pas assez rapide, et du coup à mesure de l'augmentation de ces files, le risque de perte de paquets augmente.
</li>
<li>
Si aucun ou peu de phénomène de mise en attente ne se produit à l'entrée, mais que tous les paquets venaient à être dirigés vers le même <b>port</b> de sortie, il serait très rapidement saturé. Un gestionnaire de paquets doit déterminer quel paquet de la file doit être transmis. Cette règle est généralement la règle <b>FIFO</b> (<b>First In First Out</b>).
</li>
<li>
<b>HOL</b> (<b>Head Of the Line blocking</b>) : Le routeur n’a pas de vue globale des buffer input, il ne prend donc en compte que le premier paquet du buffer. Si deux paquets doivent doivent aller au même <b>port</b> de sortie, un des paquets se retrouve en attente avec tous ceux qui le suivent, même si ceux ci doivent aller à un <b>port</b> actuellement libre.
</li>
</ol></div>



<h4 class="question">
	<ol class="alphabet">
		<li>
			Décrivez le protocole <b>CSMA</b>.
		</li>
		<li>
			Pourquoi et comment a-t-il été amélioré ?
		</li>
		<li>
			Citez les paramètres qui caractérisent un réseau <b>CSMA</b>. Quelle relation entre ces paramètres faut-il viser pour que le réseau <b>CSMA</b> ait des performances acceptables ? Expliquez.
		</li>
	</ol>
</h4>
<div class="answer">
	<ol class="alphabet">
	<li>
		La technologie <b>CSMA</b> (<b>Carrier Sense Multiple Access</b>) est un ensemble de protocoles qui permet à plusieurs machines d'utiliser un même média de communication. Celle-ci vérifie que le support est disponible avant de commencer l'envoi d'une trame. Dans la version simple de <b>CSMA</b>, une machine ne peut pas transmettre si elle détecte de l'activité sur le média, elle attend la fin de la transmission. Cependant, en raison du temps de propagation, surtout sur des longues distances, deux machines pourraient considérer le bus comme libre et commencer à écrire en même temps, pour se retrouver en collision quelques instants après. Il est à noter qu'il est pas possible d'éliminer les collisions sur un bus mais il est possible de développper une méthode pour les limiter et réussir à partager le bus entre plusieurs machines.
		<figure>
			<img src="images/collision.svg" alt="Illustation d'une collision" />
			<figcaption>Illustation d'une collision</figcaption>
		</figure>
	</li>
	<li>
		La technologie <b>CSMA</b> a été amélioré par différents modes d'accès: 
		<ul>
			<li><b>CSMA</b> <b>persistant</b>: consiste à toujours écouter le canal, et on émet dedans dès qu'il est libre.</li>
			<li><b>CSMA</b> <b>p-persistant</b>: si une station souhaite émettre et que le canal est libre, elle émet avec une probabilité p. Sinon, elle attend un intervalle de temps avant de retenter avec la même probabilité p. En cas de collision, la station attend un temps aléatoire avant de recommencer la procédure. Cela permet d'éviter que deux stations se jettent sur le canal en même temps. La difficulté est d'avoir un bon p : trop bas et le délai augmente, trop haut et on a plein de collisions.</li>
			<li><b>CSMA</b> <b>non-persistant</b>: dans ce modes chaque station vérifie régulièrement que le média soit disponible. Si ce n'est pas le cas, elle attend un temps aléatoire pour revérifier si le média est enfin libre. Enfin, lorsque le média n'est pas occupé, la station transmet ses informations immédiatement. Cette approche réduit les collisions mais le temps d'attente initial peut être très long.</li>
		</ul>
	</li>
	<li>
		Pour que <b>CSMA</b> ait des performances acceptables, il faut prendre en compte:
		<ul>
			<li>$B$ (la capacité en bits/s du canal)</li>
			<li>$F$ (la taille des trames)</li>
			<li>$L$ (la taille du canal)</li>
			<li>$c$ (la vitesse de propagation)</li>
			<li>$tau = L/c$ (délai de propagation)</li>
			<li>$T = F/B$ (délai de transmission)</li>
		</ul>
		$tau$ est équivalent à la durée pendant laquelle une collision peut survenir. Après un temps $tau$, le canal est réservé implicitement pendant $T-tau$ secondes, car s'il n'y a pas eu de collision après un temps $tau$, tout le monde est au courant que le canal est pris et il n'y a plus de collision possible. Les performances du réseau sont donc meilleures quand $$a = tau/T = BL/cF$$ est très petit, donc quand la période dangereuse pendant lesquelles des collisions peuvent survenir est très petite par rapport au temps total d'une trame. Il faut donc travailler avec de grandes trames, réduire la taille du réseau ou réduire le débit.
	</li>
	</ol>
</div>



<h4 class="question">
	<ol class="alphabet">
		<li>
			Qu'est-ce que le <b>CSMA/CD</b> ? En quoi améliore-t-il le <b>CSMA</b> ?
		</li>
		<li>
			Quelle contrainte le <b>CSMA/CD</b> introduit-il par rapport au <b>CSMA</b> ? Pourquoi ?
		</li>
		<li>
			IEEE 802.3 (plus communément appelé <b>Ethernet</b>) est un protocole de type <b>CSMA/CD</b> dont la méthode d'accès a été améliorée. Quelle est cette amélioration ?
		</li>
		<li>
			Expliquez pourquoi, si l'on veut garder le même format de trame, la méthode <b>CSMA/CD</b> exige de raccourcir le réseau pour atteindre des débits plus élevés. Il est toutefois possible de ne pas respecter cette longueur maximale du réseau, qui devient très contraignante à haut débit. Dans quelles conditions ?
		</li>
	</ol>
</h4>
<div class="answer">
	<ol class="alphabet">
	<li>
		La technologie <b>CSMA</b> (<b>Carrier Sense Multiple Access</b>) est un ensemble de protocoles d'accès à un média. Elle permet à plusieurs machines d'utiliser un même média de communication. Celle-ci vérifie que le support est disponible avant de commencer l'envoi d'une trame. Dans la version simple de <b>CSMA</b>, une machine ne peut pas transmettre si elle détecte de l'activité sur le média, elle attend la fin de la transmission. Cependant, en raison du temps de propagation, surtout sur des longues distances, deux machines pourraient considérer le bus comme libre et commencer à écrire en même temps, pour se retrouver en collision quelques instants après. Il est à noter qu'il est pas possible d'éliminer les collisions sur un bus mais il est possible de développper une méthode pour les limiter et réussir à partager le bus entre plusieurs machines.
		<figure>
			<img src="images/collision.svg" alt="Illustation d'une collision" />
			<figcaption>Illustation d'une collision</figcaption>
		</figure>
		Le <b>CSMA/CD</b> rajoute la contrainte <b>Collision Detection</b>: si lorsqu'un bit a été écrit, l'état mesuré est différent, la machine considère qu'il y a collision et arrête immédiatement d'écrire sur le bus. Elle attend ensuite pour un temps déterminé aléatoirement afin que deux machines en collision ne recommencent pas à émettre en même temps. Son objectif est de limiter le nombre de collisions en organisant le droit à la parole. L'idée est de mettre en place une règle qui permettrait de n'avoir presque plus de collisions.
	</li>
	<li>
		Le <b>CSMA/CD</b> rajoute la contrainte <b>Collision Detection</b> car il est possible qu'en raison du temps de propagation, surtout sur des longues distances, deux machines pourraient considérer le bus comme libre et commencer à écrire en même temps.
	</li>
	<li>
		<b>Ethernet</b> repose sur un algorithme d’accès multiple <b>CSMA/CD</b> dont la méthode d'accès a été améliorée. Pour que l'émetteur détecte une collision, il doit être en train d'émettre. Il faut donc que la trame soit suffisament longue pour que le délai soit suffisament long et que l'emetteur entend la collision. Sinon l'émetteur transmet tout puis n'entend pas qu'il a eu de collision. Sur un réseau de 10 Mbps et 2.5 km, il faut qu'une trame fasse au moins 250 bits. Ethernet a choisi 512 bits minimum. Pour encore améliorer les choses, l'émetteur attend de manière exponentielle (entre $0$ et $2^{collisions-1}$ temps de transmission de 512 bits) quand il détecte une collision. Ainsi, si les collisions sont rares, on n'attend pas trop. S'il y en a plein, on attend plus longtemps pour augmenter l'efficacité. Quand une collision survient, l'émeteur envoie un <b>jam</b> : un signal fort histoire que tout le monde sur la ligne soit au courant de la collision.
	</li>
	<li>
		?
	</li>
	</ol>
</div>



<h4 class="question">On ne peut pas dire que les commutateurs <b>Ethernet</b> exécutent un protocole de routage (au sens de la couche 3), mais ils construisent toutefois des tables d’acheminement comme si un protocole de routage était à l’oeuvre. Expliquez comment ces tables sont construites, y compris quand plusieurs commutateurs sont inter-connectés.</h4>
<div class="answer">Le commutateur construit donc dynamiquement une table qui associe des adresses <b>MAC</b> avec les ports correspondant. Lorsqu'il reçoit une trame destinée à une adresse dans cette table, le commutateur renvoie la trame sur le port correspondant. Si port destination = port émetteur, la trame n'est pas transmise. Si l'adresse du destination est inconnue dans la table, alors la trame est traitée comme un broadcast, c'est-à-dire qu'elle est transmise à tous les ports du commutateur sauf celui de réception.</div>



<h4 class="question">Un chercheur connecte son ordinateur portable à un commutateur <b>Ethernet</b> de son département. Il démarre son browser pour afficher la page web de www.google.com.<ol class="alphabet"><li>Identifiez les protocoles mis en oeuvre, et dans l’ordre chronologique, entre le moment où l’ordinateur se connecte et le moment où la page d’accueil de Google s’affiche.</li><li>Précisez au passage le rôle de chaque protocole et décrivez-les succinctement.</li></ol></h4>
<div class="answer">
<ol class="alphabet">
<li>Une topologie d'exemple compreant des switches et des routeurs est utilisée. On suppose que le routeur dispose d'un serveur <b>DHCP</b>
<ol>
	<li>On connecte le laptop, avec un navigateur web ouvert ;</li>
	<li>Il forge une demande <b>DHCP</b>, à destination de ff:ff:ff:ff:ff ;</li>
	<li>Le switch recoit la trame et la broadcast partout ;</li>
	<li>La trame arrive au routeur, qui reconnait la demande <b>DHCP</b> et répond ;</li>
	<li>Le laptop apprend son adresse <b>IP</b>, l'<b>IP</b> du routeur, son serveur <b>DNS</b>, etc ;</li>
	<li>Le laptop forge une requête <b>DNS</b> ;</li>
	<li>Le laptop envoie un <b>WHO IS</b> <b>ARP</b> pour trouver l'adresse <b>MAC</b> du routeur ;</li>
	<li>Le laptop recoit cette adresse <b>MAC</b> et le switch retient quelle est l'adresse <b>MAC</b> du laptop ;</li>
	<li>La requête <b>DNS</b> est envoyée sur le réseau et arrive au routeur ;</li>
	<li>Le routeur décapsule la trame, reconnait le paquet <b>IP</b> qu'elle contient, et voit que l'<b>IP</b> de destination est hors du subnet. Il envoie donc ce paquet sur Internet ;</li>
	<li>Le serveur <b>DNS</b> de Google finit par recevoir le paquet, et répond ;</li>
	<li>Le laptop obtient l'<b>IP</b> du serveur de Google ;</li>
	<li>Un message <b>TCP</b> SYN est envoyé à cette <b>IP</b> ;</li>
	<li>Le serveur ouvre un socket et renvoie un ACK ;</li>
	<li>Le laptop envoie alors sa requête HTTP ;</li>
	<li>Le serveur renvoie les réponses ;</li>
	<li>La page web apparait dans le navigateur web.</li>
</ol><b>DHCP</b> (aves tous les protocoles des couches inférieurs) pour récupérer une adresse <b>IP</b> pour se connecter. Ensuite une requète <b>DNS</b> pour savoir quelle est l'adresse <b>IP</b> de Google. Mais on a besoins d'une requète <b>ARP</b> pour connaitre la bonne adresse <b>MAC</b> du serveur <b>DNS</b>. Des protocoles de routages (<b>RIP</b>,<b>OSPF</b>,..). On établi une connexion <b>TCP</b> avec le serveur de Google. On peut finalement faire notre requête <b>HTTP</b>. On se rend compte qu'au démarrage, tout un tas de protocoles sont utilisés. Les paquets sont emboités les uns dans les autres, il y a plein de couches et plein d'acteurs qui intéragissent. On a également vu qu'un lien est compliqué et qu'il cache plein de choses. Un lien est en fait un assemblage d'élément qui se présente à <b>IP</b> comme si c'était un lien physique, ne touchant pas à la couche 3 du réseau.
</li>
<li><ul>
<li><b>DHCP</b> (<b>Dynamic Host Configuration Protocol</b>) : utilisé pour l'attribution dynamique d'adresse <b>IP</b>.</li>
<li><b>DNS</b> (<b>Domain Name System</b>) : faire la correspondance entre les noms de domaines et les adresses <b>IP</b>.</li>
<li><b>ARP</b> (<b>Adress Resolution Protocol</b>) : pour connaitre l'adresse <b>MAC</b></li>
<li><b>Routage</b> permet de trouver le chemin adéquat à partir de notre machine vers celle avec laquelle on veut communiquer.</li>
<li><b>TCP</b> (<b>Transmission Control Protocol</b>) : Protocole de transfert des données fiables orienté connexion</li>
<li><b>HTTP</b> (<b>Hypertext Transfer Protocol</b>) : pour récupérer des pages web, protocole de la couche d'application.</li>
</ul></li></ol>
</div>



<h4 class="question"><ol class="alphabet"><li>Définissez les différents types de « Resource Records (RR)» utilisés par le protocole <b>DNS</b> et expliquez leur rôle.</li><li>Donnez le scénario d’échange de messages <b>DNS</b>, par la méthode itérative, permettant à un client de trouver l’adresse <b>IP</b> d’un serveur web dont l’URL est <b>www.company.com</b>, <i>en indiquant les RR présents dans ces messages</i>. On supposera que les caches <b>DNS</b> sont vides.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>
	Les enregistrements sur <b>DNS</b> sont sous le format : (name, value, type, tt1). On a plusieurs types possibles, entre autre :
	<ul>
		<li><b>A</b> : <i>name</i> est hostname et <i>value</i> est l'<b>IP</b> de l'hostname. A fournit le mapping standard hostname-to-<b>IP</b> ;</li>
		<li><b>NS</b> : <i>name</i> est un domaine et <i>value</i> est le hostname d'un serveur <b>DNS</b> autoritaire qui connait l'adresse <b>IP</b> du domaine. Il permet à un client de connaître le serveur à contacter pour ce domaine ;</li>
		<li><b>CNAME</b> : <i>name</i> est un alias pour le hostname présent dans <i>value</i> ;</li>
		<li><b>MX</b> : nom du serveur mail associé à <i>name</i>.</li>
	</ul>
</li>
<li>
	Le scénario est :
	<ul>
		<li>Le client émet une requête <b>www.company.com in A</b> à son serveur <b>DNS</b> local. </li>
		<li>Le serveur local, n'ayant pas l'adresse requise en cache, contacte un des root servers (défini dans sa configuration), avec la même requête.</li>
		<li>Le serveur root contacté lui renvoie alors le nom et l'adresse authoritaire (champs <b>NS</b> et <b>A</b> du serveur principal pour le <b>TLD</b> <b>.com</b>)</li>
		<li>Le serveur local réémet à nouveau la même requête vers le serveur du <b>TLD</b> <b>.com</b>. Ce serveur <b>TLD</b> renvoie lui aussi les champs <b>NS</b> et <b>A</b> pour le serveur faisant authorité sur le domaine <b>www.company.com</b> (par exemple <i>ns110.ovh.net</i>).</li>
		<li>Le serveur local contacte alors le serveur authoritaire, qui lui renvoie la zone pour le domaine <b>company.com</b>, qui contient un champ <b>CNAME</b> pour <b>www.company.com</b>. Si cet champ pointe vers le domaine contenu dans l'enregistrement <b>A</b> de la zone, la recherche s'arrête, le client a obtenu l'ip désirée.</li>
		<li>Sinon, tant qu'un enregistrement <b>A</b> n'a pas été trouvé, le serveur recommence les mêmes étapes à partir du domaine obtenu dans le champ <b>CNAME</b>.</li>
	</ul>
</li></ol></div>



<h4 class="question">Le protocole de routage inter-domaine BGP est plus apparenté à la famille des protocoles de routage intra-domaine à vecteur de distances (DV) qu’à celle des protocoles à état de lien (LS).<ol class="alphabet"><li>Expliquez deux ressemblances importantes entre BGP et un protocole DV.</li><li>Expliquez deux différences importantes entre BGP et un protocole DV, et leur raison d’être.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><ol><li>Obtention de la connaissance des voisins</li>
<li>Propage les informations dans tout le réseau.</li></ol>
<li><ol><li>BGP mémorise toutes les routes vers toutes les destination : récupération rapide lorsqu'une destination devient inaccessible via la route initialement choisie.</li>
<li>BGP construit des routes sans boucles : - Le chemin suivi est décrit explicitement à l'aide des AS traversés.</li>
<li>détection facile des boucles</li></ol></div>



<h4 class="question"><ol class="alphabet"><li>Nommez et expliquez succinctement les 2 grandes familles de protocoles de routage intra-domaine (IGP) en insistant sur leurs différences.</li><li>Expliquez en quoi et pourquoi le protocole de routage inter-domaine de l’Internet (BGP) est différent des protocoles de routage intra-domaine (IGP) déployés dans les divers systèmes autonomes (AS) qui composent l’Internet.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><ul>
<li><b><b>RIP</b></b> (<b>Routing Information Protocol</b>) : utilise un algorithme de vecteurs de distance qui se limite à 25 noeuds par paquet. Au-delà, il faudra plusieurs paquets. 0 représente l'infini. Les vecteurs de distance sont envoyés toutes les 30 secondes à ses voisins. <b>RIP</b> possède un mécanisme pour détecter les pannes, si un router n'a pas reçu de message d'un voisin depuis 180 secondes, il le déclare mort. <b>RIP</b> est un protocole de la couche d'application (PAS de la couche réseau), les messages sont envoyés dans des paquets <b>UDP</b>.</li>
<li><b><b>OSPF</b></b> (<b>Open Shortest Path First</b>) : utilise un algorithme d'état des lien. Chaque message est envoyé seulement à ses voisins qui le renvoient à leurs voisins,.. jusqu'à ce que l'entièreté du système autonome ai reçu le message. Les messages sont directement envoyés depuis la couche de transport (PAS partie de la couche d'application).</li>
</ul></li>
<li>IGP sert au routage interne alors que BGP sert au routage externe. De plus, BGP ne communique qu'avec leurs voisins directs.</li>
</div>


<h4 class="question"><ol class="alphabet"><li>Décrivez les principes du protocole de routage inter-domaine BGP.</li><li>Expliquez comment BGP permet à un réseau périphérique (« stub ») multi-connecté (« multihomed ») de ne pas accepter du trafic de transit.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Permet à chaque AS d'obtenir:
	<ul>
		<li>Des informations sur la manière d'attendre un autre AS.</li>
		<li>De propager ces informations aux routeurs internes.</li>
		<li>De trouver des bons chemins basés sur non-seulement les informations obtenues dans les points précédents mais en plus sur des polices.</li>
	</ul>
2 protocoles BGP: l'interne (iBGP) et l'externe (eBGP). eBGP crée un connexion <b>TCP</b> permanente entre les autres AS qu'il peut atteindre, afin de se mettre à jour et d'envoyer des "promesses" (dire qu'il peut atteindre). Quand un routeur de la frontière utilisant eBGP reçoit ces mises à jour, il utilise iBGP pour communiquer ce qu'il a reçu aux routeur internes.</li>
<li>Les noeuds peuvent retenir de l'information, tel qu'un chemin qu'il connait qui ne lui rapporte rien.</li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Enoncez les différents types de matrice de commutation (« switch fabric ») rencontrées dans les routeurs, ainsi que leurs avantages/inconvénients respectifs.</li><li>Expliquez la raison d’être et l’inconvénient potentiel d’une bufferisation au niveau des <b>ports</b> d’entrées.</li><li>Expliquez la raison d’être d’une bufferisation au niveau des <b>ports</b> de sortie.</li></ol></h4>
<div class="answer">
<ol class="alphabet">
<li>
	<ul>
		<li><b>Commutation par action sur la mémoire</b> : Les plus simples, les premiers routeurs étaient de simples ordinateurs. Le switch entre les <b>ports</b> d'entrée et sortie étaient fait via le CPU. Lorsqu'un paquet arrive au <b>port</b> d'entrée, le processus de routing l'identifiera via une interruption.Il copiera ensuite les paquets arrivant du buffer d'entrée sur le processeur mémoire. Le processeur extrait ensuite l'adresse de destination, recherche la table appropriée et copie le paquet sur le buffer du <b>port</b> de sortie. Dans les routeurs modernes, la recherche de l'adresse de destination et le stockage du paquet dans la mémoire appropriée est exécuté par les cartes de ligne d'entrée des processeurs.<br>
		<b>Avantages</b> : L'architecture logicielle est la manière la plus simple d'orienter les paquets ; on prend un paquet, on lit son port de sortie, et on l'écrit dessus.<br>
		<b>Inconvénients</b> : Traite un seul paquet à la fois, lent. Les architectures matérielles sont plus efficaces, comme un bus ou un crossbar.</li>
		<li><b>Commutation par bus</b> : Le <b>port</b> d'entrée transfert les paquets directement sur le <b>port</b> de sortie via un bus partagé sans l'intervention d'un processus de routage. Comme le bus est partagé, seul un paquet est transféré à la fois via le bus. Si le bus est occupé, le paquet arrivant doit attendre dans une file. La bande passante du routeur est limitée par le bus comme chaque paquet doit traverser le bus seul. Exemple :  Bus switching CISCO-1900, 3-COM’s care builder5.<br>
		<b>Avantages</b> : C'est le délit du bus qui détermine la vitesse de commutation du routeur.<br>
		<b>Inconvénients</b> : C'est qu'un seul paquet est transféré à la fois, du coup il y a un risque d'attente.</li>
		<li><b>Commutation par réseau d'interconnexions</b> : Pour surmonter le problème de la bande passante d'un bus partagé, les commutateurs réseaux en croix sont utilisés. Les <b>port</b> entrées et sorties sont connectés par des bus horizontaux et verticaux. Si nous avons $N$ <b>ports</b> d'entrés et $N$ <b>ports</b> de sorties, on a besoin de $2N$ bus pour les connecter. Pour transférer un paquet du <b>port</b> d'entrée au <b>port</b> de sortie correspondant, le paquet traverse le bus horizontal jusqu'à une intersection avec un bus vertical qui le conduit à son <b>port</b> de destination. Si le vertical est libre, le paquet est transféré. Mais si le bus vertical est occupé à cause d'une autre entrée, la ligne doit transférer des paquets au même <b>port</b> de destination. Les paquets sont bloqués et font la file sur le même <b>port</b> d'entrée.<br>
		<b>Avantages</b> : Ce système peut s'implémenter en hardware, et c'est super rapide (60 Gbps). Améliore la limite de débit associé à un bus commun. <br>
		<b>Inconvénients</b> : Le seul problème est que les paquets ont des tailles différentes. Si les paquets avaient tous la même durée, tout aurait été synchrone, on change la matrice de routage à chaque paquet, toutes les connexions en même temps. Quand les paquets ont des tailles variables, le chef d'orchestre doit être plus compliqué. On peut également découper les paquets en petits blocs de taille fixe (complétés par des zéros par exemple). Comme ça, on retrouve le comportement synchrone. Vu de l'extérieur, cette fragmentation est invisible.</li>
	</ul>
	<figure>
		<img src="images/commutation.svg" alt="Matrice de commutation" />
		<figcaption>Matrice de commutation</figcaption>
	</figure>
</li>
<li>Le point le plus problématique est le fait que les routeurs doivent opérer à des vitesses élevées, impliquant des millions de consultations par seconde; on souhaite en effet que l'opération de consultation soit plus rapide que le temps qu'il faut au routeur pour recevoir un nouveau paquet. Dès que le <b>port</b> de sortie a été identifié, le paquet peut entrer dans la matrice de commutation. Cependant un paquet peut se voir refuser temporairement l'accès si elle est occupée à traiter des paquets qui ont été reçus sur d'autres liaisons d'entrée. Il est alors placé en file d'attente sur son <b>port</b>. Si la matrice de commutation n'est pas assez rapide, et du coup à mesure de l'augmentation de ces files, le risque de perte de paquets augmente.
</li>
<li>Si aucun ou peu de phénomène de mise en attente ne se produit à l'entrée, mais que tous les paquets venaient à être dirigés vers le même <b>port</b> de sortie, il serait très rapidement saturé. Un gestionnaire de paquets doit déterminer quel paquet de la file doit être transmis. Cette règle est généralement la règle <b>FIFO</b> ( <b>First In First Out</b> ).
</li>
</ol>
</div>


<h4 class="question"><ol class="alphabet"><li>Expliquez le principe du « Longest Prefix Match » lors de l’acheminement de paquets <b>IP</b>.</li><li>Quel est son intérêt ?</li></ol></h4>
<div class="answer">
<ol class="alphabet"><li>Quand on cherche à envoyer une table d'entrée pour une adresse de destination donnéee, on utilise le préfixe de la plus longue adresse qui correspond à l'adresse de destination.</li>
<li>Ca sert à détecter le cas où une table donne un sous-réseau.</li></ol></div>






<h4 class="question"><ol class="alphabet"><li>Expliquez le rôle et le principe général des codes détecteurs d’erreur.</li><li>Pourquoi ne peuvent-ils être efficaces à 100% ?</li><li>Donnez un exemple de code détecteur d’erreur plus élaboré que le bit de parité, et expliquez son principe.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Il s'agit de détecter si il y a une erreur dans le paquet transmis. Pour cela, on introduit un ou plusieurs bits de contrôle dans le paquet afin de savoir si le code a été changé ou pas.</li>
<li>Car si il y a un seul bit de parité, on ne peut détecter que des erreurs impaires. Il faut mettre plusieurs bits de parités mais cela limite quand même toutefois le nombre d'erreurs détectables. De plus, rien ne dit qu'une erreur ne peut pas se produire sur un de ces bits.</li>
<li><ul><li><b>Bit de parité</b> : Soit D des informations à transmettre de d bits. L’expéditeur ajoute aux données un unique bit tel que la somme des d + 1 bits soit paire (ou impaire selon ce qui est convenu par le modèle). Cette méthode est un peu faible, car si un nombre pair d’erreurs s’est glissé dans les données, elles ne seront pas détectées ; elle ne peut donc être appliquée que sur des systèmes pour lesquels les erreurs n’arrivent pas en rafale et dont la probabilité est extrêmement faible.</li>
<li><b>Checksum</b> : les codes <b>CRC</b> (<b>Code de Redondance cyclique</b>) sont une technique de détection d'erreur très fréquente et opère de la manière suivante : Lors de l’envoi, l’émetteur ajoute un nombre sur 16 bits à la fin des données (D), de manière à ce que ces données D et ce nombre CRC forment un nombre exactement divisible par G (modulo 2). En pratique l’émetteur divise D par G et met dans CRC le reste de cette division. Le destinataire, connaissant G, n’a qu’a diviser le paquet par G, s’il n’obtient pas zéro c’est qu’il y a eu des erreurs. Le point cruciale est le choix de G(x), puisqu’il ne faut pas que les données entachées d’erreur soient divisible par lui. Plus le polynôme est grand, plus on détece d'erreurs, il faut donc choisir entre la taille et la performance.</li></ul></li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Expliquez le principe du multiplexage en longueur d’onde (WDM). Quel est son intérêt ?</li><li>Comparez WDM aux techniques classiques de multiplexage TDM et FDM.</li></ol></h4>
<div class="answer"><ol class="alphabet"><li>Dans WMD, chaque station reçoit deux canaux. Un canal de faible bande passante pour la signalisation de la station et un canal d'une bande passante plus large pour envoyer et recevoir des trames. Chaque canal est divisé en groupes de slots. Appelons m le nombre de slots du canal de signalisation. L'expression n+1 indique le nombre de slots du canal de données : n slots de données utiles et un slot supplémentaire pour que la station renseigne sur son état, principalement pour indiquer les slots libres sur chacun de ses deux canaux. Sur ces deux canaux, la séquence de slots se répète continuellement, avec un marquage particulier pour le slot 0, afin que les stations arrivant plus tard puissent le repérer. Toutes les stations sont synchronisées au moyen d'une seule horloge pilote.
Le protocole gère 3 classes de trafic :
<ul>
	<li>Un trafic à débit constant en mode connecté, tel celui d'une vidéo compressée.</li>
	<li>Un trafic à débit variable en mode connecté, tel celui d'un transfert de fichier.</li>
	<li>Un trafic constitué de datagrammes en mode non connecté, tels des paquets <b>UDP</b>.</li>
</ul></li>
<li>Pour les deux protocoles orientés connexion, l'idée de base est qu'une station A souhaitant communiquer avec une station B doit au préalable insérer une trame de demande de connexion dans un slot libre sur le canal de signalisation de B. Si B accepte, la communication peut avoir lieu par l'intermédiaire du canal de données de A.</li></ol></div>



<h4 class="question">Vous créez votre entreprise « MeMyself&I » et vous obtenez le nom de domaine « memyselfandi.com ». Vous souhaitez déployer votre propre serveur <b>DNS</b> pour ce domaine (dns.memyselfandi.com, 111.111.111.111), ainsi qu’un serveur Web  www.memyselfandi.com, 111.111.111.112).<ol class="alphabet"><li>Quelles informations doivent être ajoutées dans la hiérarchie <b>DNS</b> et à quel niveau ? Soyez précis.</li><li>Donnez un scénario typique d’échange de messages <b>DNS</b> permettant à un client de trouver l’adresse <b>IP</b> de votre serveur web, en précisant bien les éléments importants des messages <b>DNS</b>. On supposera que les caches <b>DNS</b> sont vides.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Il faut créer les sous-domaines sur le serveur <b>DNS</b> local. Il faut faire un enregistrement de type A avec l'adresse <b>IP</b> aurprès du serveur <b>DNS</b> avec les 2 adresses web ainsi qu'unCNAME pour l'alias?</li>
<li>
<figure>
	<img src="images/call.svg" alt="computer network schema" />
	<figcaption>Computer Network Schema</figcaption>
</figure></li>
</ol></div>


<h4 class="question"><ol class="alphabet"><li>Pourquoi la couche de transport (<b>UDP</b> et <b>TCP</b>) comporte-t-elle une fonction de <b>démultiplexage</b> ?</li><li>Décrivez les techniques de <b>démultiplexage</b> effectuées par <b>UDP</b> et <b>TCP</b> en mettant bien en évidence leurs différences ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Toutes les couches de transport effectuent un rôle de <b>démultiplexage</b>. C'est la couche de transport qui oriente les données entrantes vers les bons sockets. En effet, les couches de réseau et en-dessous ne gèrent que des paquets, qui contiennent des données et qui passent d'une machine à l'autre. C'est la couche de transport, sur une machine, qui reçoit les paquets et qui les redirige vers le bon processus. De même, quand des processus écrivent sur le réseau, c'est la couche de transport qui les multiplexe et les écrit tous sur le même réseau.</li>
<li>Un <segment> <b>UDP</b> et <b>TCP</b> commence dans les deux cas par un numéro de port source (2 octets) puis un port de destination (2 octets aussi). C'est cela qui permet d'effectuer le <b>démultiplexage</b>. Les adresses <b>IP</b> sont inutiles car la couche de réseau s'est déjà occupée d'acheminer le paquet vers la bonne machine, on est donc déjà sur la bonne machine. De plus, les adresses <b>IP</b> source et destination sont contenues dans le paquet (couche réseau) et ne doivent pas être répétés dans le segment <b>TCP</b> ou <b>UDP</b>.
<ul>
	<li>Pour <b>UDP</b>, un socket cible est choisi en regardant l'<b>IP</b> et le port de destination d'un segment. La source n'est pas regardée. Plusieurs segments de plusieurs sources sont donc envoyés sur le même socket de destination.</li>
	<li><b>TCP</b> est un peu plus compliqué qu'<b>UDP</b> pour le <b>démultiplexage</b>. En effet, avec <b>UDP</b>, l'application fournit les adresses <b>IP</b> et numéros de port quand nécessaire. De plus, avec <b>UDP</b>, les paquets de toutes les origines sont envoyés sur le même socket de destination. Avec <b>TCP</b>, il y a une connexion par origine. Il faut donc regarder les <b>IP</b> et ports source et destination de chaque segment pour trouver le socket qui doit le recevoir. Ce <b>démultiplexage</b> par la source est ce qui permet à <b>TCP</b> d'autoriser plusieurs sockets par port. Si 3 clients sont connectés à un serveur web, les 3 clients vont envoyer leurs données à l'adresse <b>IP</b> du serveur, port 80. C'est donc la source qui permet de différencier les connexions utilisées.</li>
</ol>
</li>
</ol></div>




<h4 class="question">Expliquez le principe de NAT et la structure d’une table NAT.</h4>
<div class="answer">Lorsqu'un paquet est envoyé vers l'extérieur, il passe par un dispositif <b>NAT</b> qui converti l'adresse <b>IP</b> interne en adresse <b>IP</b> officielle de l'entreprise. Le dispositif <b>NAT</b> et un pare-feu sont souvent combinés dans le même équipement, offrant ainsi une certaine sécurité en contrôlant précisément ce qui entre sur le réseau et en sort. Structure d'une table <b>NAT</b>:
<table><tbody><tr><th><b>IP</b> interne</th><th><b>IP</b> externe</th><th>Durée (s)</th><th>Réutilisable?</th></tr></tbody></table>
</div>



<h4 class="question">Quand des flux <b>TCP</b> et <b>UDP</b> partagent un même lien congestionné, comment réagissent ces deux types de flux et quelles en sont les conséquences ?</h4>
<div class="answer">
<ul>
	<li><b>TCP</b> peut distinguer 2 types de congestions: soit il reçoit 3 <b>ACK</b>s consécutifs pour le même numéro de séquence (donc un des paquets intermédiaire a été perdus, mais les suivants sont passés: <b>faible congestion</b>), soit un <b>ACK</b> n'arrive pas dans le temps imparti (timeout, beaucoup de paquets perdus: <b>congestion sévère</b>). Au démarage de la transmission, <b>TCP</b> envoie les données avec une fenêtre de taille 1 <b>MSS</b> (<b>Maximum Segment Size</b>), correspondant au nombre de paquets qui peuvent être en parcourt simultanément. La taille de la fenêtre est doublée à chaque itération (en incrémentant la taille à chaque <b>ACK</b> reçu), de sorte qu'elle a une <b>croissance exponentielle</b>. S'il détecte une <b>faible congestion</b>, il divise la taille de la fenêtre par deux et change de mode pour incrémenter la taille de la fenêtre à chaque itération (+1 pour chaque fenêtre totalement envoyée) pour adopter une <b>croissance linéaire</b>. Il approche ainsi <b>dichotomiquement</b> la taille moyenne de fenêtre optimale (càd le nombre de paquets en parcourt, et donc la vitesse d'envoi). S'il détecte une <b>congestion sévère</b>, il réduit la taille de fenêtre à 1 et recommence en mode de <b>croissance exponentiel</b>. Il peut éventuellement repasser en mode de <b>croissance linéaire</b> lorsqu'il a atteint la moitié de la taille de fenêtre qui a provoqué un timeout (puisque doubler sa taille provoquera probablement de nouveau un timeout).</li>
	<li><b>UDP</b> quant à lui est un processus de transport extrêmement simple et léger, doté d’un modèle de service minimum. Il ne nécessite aucun échange préalable entre deux processus, de plus les échanges de données sont non-fiables, ce qui signifie que lorsqu’un processus expédie un message, il ne se soucie pas de son arrivée.</li>
</ul>
</div>





<h4 class="question">Expliquez comment un routeur construit les entrées de sa table d’acheminement pour les préfixes <b>IP</b> extérieurs à son domaine.</h4>
<div class="answer">Il utilise des masques, Interface et passerelle afin de diriger correctement les paquets. Les tables contiennent les adresses de destination, le manque, les adresses des passerelles (routeurs intermédiaires) permettant d'atteindre la destination, l'adresse de la carte réseau (interface) par laquelle le paquet doit sortir du routeur.</div>



<h4 class="question">Considérez 3 réseaux <b>Ethernet</b> ($N_1$, $N_2$ et $N_3$), un commutateur <b>Ethernet</b> ($C$) et un routeur ($R$) interconnectés selon une topologie en ligne $N_1$-$C$-$N_2$-$R$-$N_3$. Une station $H_A$ (d’adresse $IP_A$) est attachée au réseau $N_1$ (par l’adresse $MAC_A$) et une station $H_B$ (d’adresse $IP_B$) est attachée au réseau $N_3$ (par l’adresse $MAC_B$). $C$ a deux adresses $MAC$ : $MAC_{11}$ sur $N_1$ et $MAC_{12}$ sur $N_2$. $R$ a deux adresses $MAC$ et deux adresses $IP$ : $MAC_{22}$ et $IP_2$ sur $N_2$ et $MAC_{23}$ et $IP_3$ sur $N_3$.
<ol class="alphabet"><li>Dessinez la configuration. $H_A$ envoie un paquet $IP$ à $H_B$. Si l’on suppose que les correspondances entre adresses $IP$ et $MAC$ sont connues de tous, décrivez les trois trames qui circulent respectivement sur les réseaux $N_1$, $N_2$ et $N_3$ en vous limitant aux champs d’adresses des trames et aux champs d’adresses et de $TTL$ ($T$ime $T$o $L$ive) du paquet $IP$ contenu dans la trame. Justifiez.</li><li>Par quel protocole les correspondances entre adresses $IP$ et $MAC$ ont-elles été découvertes ? Décrivez les échanges de ce protocole qui réalisent les mises en correspondance nécessaires lorsque $H_A$ envoie son paquet $IP$ à $H_B$. Mentionnez toutes les adresses présentes dans les messages échangés.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>?</li>
<li>?</li>
</div>



<h4 class="question">Citez une fonction majeure de chacune des 5 couches de la pile de protocoles Internet.</h4>
<div class="answer">
<table>
	<thead>
		<tr><th>Couche</th><th>Description</th><th>Noeud</th><th>Protocoles</th></tr>
	</thead>
	<tbody>
		<tr><th>Application</th><td>supporte les applications</td><td>Processus</td><td>HTTP, FTP</td></tr>
		<tr><th>Transport</th><td>le transfert des données entre processus</td><td>Processus Socket</td><td>TCP, UDP</td></tr>
		<tr><th>Réseau</th><td>routage des données d'une source à une destination</td><td>Hôtes</td><td>IP, protocoles de routages</td></tr>
		<tr><th>Lien</th><td>transfert des données entre 2 noeuds voisins du réseau</td><td>Noeuds</td><td>Ethernet, WiFi</td></tr>
	</tbody>
	<tfoot>
	</tfoot>
</table>
</div>



<h4 class="question"><ol class="alphabet"><li>Pourquoi est-il plus difficile de fixer la durée du timer de retransmission de <b>TCP</b> que celle du timer de retransmission d’un protocole de liaison de donnée ?</li><li>Comment fixe-t-on la durée du timer de retransmission de <b>TCP</b> ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><b>TCP</b> n’utilise qu’un seul timer, comme le Go-Back-N. Le problème est que <b>TCP</b> doit à la fois s’adapter aux réseaux locaux (ou les timeouts peuvent être très cours) qu’à l’internet (ou le chemin utilisé par un paquet et peut-être très long et donc les délais aussi).</li>
<li>Pour estimer le <b>RTT</b>, on va avoir un échantillon <b>RTT</b> qui va stocker le temps entre le moment ou le byte est transmis et le moment où on reçoit l’<b>ACK</b>. Comme on va avoir une grosse fluctuation des valeurs avec cette technique, il faut essayer de « lisser » ces valeurs. On va donc avoir besoin de la moyenne et la variance.

$$estimation = (1-a)*estimationPrécédente + a*nouvelEchantillon$$
avec $a = 0.125$
$$marge \text{ (de sureté)} = (1-b)*margePrécédente + b*|echantillon-estimation|$$
avec $b = 0.25$
$$Timeout = estimation + 4 marge$$
<i>'$4$'</i> parce qu'avec cette valeur, seulement $1\%$ des paquets étaient renvoyés trop tôt.</li>
</ol></div>



<h4 class="question">Expliquez la raison d’être des protocoles <b>DHCP</b> et NAT, et expliquez leur fonctionnement à l’aide de scénarios typiques.</h4>
<div class="answer">De nos jours on utilise surtout des adresses <b>IP</b> dynamique. Le <b>DHCP</b> (<b>Dynamic Host Configuration Protocol</b>) s'occupe d'attribuer une adresse <b>IP</b> à un ordinateur qui se connecte. <b>DHCP</b> est un protocole de la couche application qui utilise <b>UDP</b> et <b>IP</b>.Quand un ordinateur se connecte à un subnet, il broadcast pour voir si un serveur <b>DHCP</b> se trouve dans ce subnet. Il lui répond en envoyant une adresse <b>IP</b>, en broadcast vu que le client n'a pas encore d'adresse. Le client répond pour dire que l'adresse l'intéresse, toujours en broadcast au cas où il y aurait d'autre serveur <b>DHCP</b> dans la zone, afin de les prévenir. Le <b>DHCP</b> envoie ensuite un <b>ACK</b> pour lui dire que l'adresse a bien été réservée. <b>NAT</b> (<b>Network Access Translation</b>), de nos jours on a presque plus d'adresses <b>IP</b> disponibles. Les NATs permettent de se servir de l'adresse <b>IP</b> d'une seule machine pour envoyer des données à tout le réseau. Il bidouille avec les numéros de <b>port</b>, le routeur fait une table avec d'un côté les adresses <b>IP</b> privées et l'adresse <b>IP</b> extérieure ainsi que le <b>port</b>.</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez comment les commutateurs <b>Ethernet</b> apprennent où se trouvent les stations et par quel type d’adresse ils les identifient.</li><li>Comment les pannes de stations ou leur mobilité sont-elles prises en compte ?</li><li>En quelques mots, quelle contrainte topologique doit être respectée pour que cet apprentissage fonctionne, et comment la réalise-t-on ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Le protocole Ethernet utilise les adresses MAC. Pour connaître l'adresse, le commutateur va lancer une trame sur le broadcast (ff:ff:ff:ff:ff:ff) et mettre à jour sa table ARP.</li>
<li>Les pannes sont prises en compte à l'aide d'un TTL, quand on n'a pas de nouvelles d'une machine depuis un moment, elle sort de la table. Les données sont mises à jour avec les data les plus récentes. </li>
<li>La topologie était historiquement en bus, mais ça pose des problèmes si le câble est abîmé à un endroit; de plus il y avait des risques de collision. Actuellement, on utilise une structure en étoile avec un switch au centre. </li>
</ol></div>



<h4 class="question">Citez et définissez les différentes sources de délai que subit un paquet dans un réseau datagramme.</h4>
<div class="answer">Application du longest prefix match rule pour trouver le réseau qui correspond le mieux à qui envoyer le paquet. Il peut suivre un mauvais chemin car les tables ne sont pas tout le temps à jour et donc arriver en retard.
</div>



<h4 class="question"><ol class="alphabet"><li>Décrivez sommairement le fonctionnement du système <b>DNS</b>.</li><li>Comparez les deux modes de fonctionnement du protocole (avantages et inconvénients).</li></ol></h4>
<div class="answer"><ol class="alphabet"><li>Le système <b>DNS</b> (<b>Domain Name System</b>) est le service d'annuaire d'Internet. Lorsqu'on recherche une adresse <b>URL</b> tel que http://google.com ou http://facebook.com, le système d'<b>DNS</b> traduit l'adresse <b>URL</b> en une adresse <b>IP</b> ( entre $0.0.0.0$ et $255.255.255.255$ pour <b>IP</b>v4 ). Ce système est fréquemment utilisé par d'autres protocoles tels que <b>HTTP</b>, <b>SMTP</b> et <b>FTP</b> pour délivrer les adresses <b>IP</b> correspondant aux noms de serveurs demandés. Par exemple pour http://ulb.be, le système <b>DNS</b> formule une requête auprès d'un serveur de nom, à laquelle il reçoit une réponse concernant l'adresse <b>IP</b> correspondante et ensuite le navigateur établit une connexion <b>TCP</b> avec le processus serveur répondant à cette adresse.</li>
<li><ol>
<li>Une version simplifiée du <b>DNS</b> consisterait en un serveur de noms unique contenant toutes les correspondances existantes. Ce système a l’air simple, mais impossible à mettre en oeuvre, pour causes : fragilité d’un site central unique, volume de trafic trop important, base de données centralisée trop éloignée de certains utilisateurs, problèmes de maintenance dus au volume énorme des données à stocker. <b>DNS</b> se doit donc d’être un système distribué.</li>
<li><b>DNS</b> utilise un grand nombre de serveurs de noms, organisé de manière hiérarchique et distribué dans le monde entier. Il existe trois types de serveurs de noms : les <b>serveurs de noms locaux</b>, les <b>serveurs de nom racine</b> et les <b>serveurs de nom de source autorisée</b>. Chaque fournisseur d’accès possède un <b>serveur de noms local</b>, vers lequel vont toutes les recherches <b>DNS</b> formulées au sein de ce réseau local. Un <b>serveur de noms local</b> est forcément proche du client. Lorsqu’un serveur local de noms n’est pas en mesure de répondre à une demande il se transforme en client <b>DNS</b> et interroge un <b>serveur de nom racine</b>, si celui-ci a une réponse il l’envoie au serveur de noms <b>DNS</b>, qui la transmet alors à l’auteur de la demande ; si le <b>serveur de nom racine</b> ne peut lui non plus satisfaire la demande directement, il répond en donnant l’adresse <b>IP</b> d’un <b>serveur de nom de source autorisée</b> qui connaîtra certainement la correspondance recherchée. Tout serveur est enregistré auprès d’au moins deux <b>serveurs de noms de source autorisée</b>, en général il s’agit tout simplement du fournisseur d’accès. Un <b>serveur de nom est qualifié</b> de source autorisée pour un serveur donné, s’il dispose en permanence d’archives <b>DNS</b> permettant d’établir la conversion pour ce serveur. 
<figure>
	<img src="images/dns.svg" alt="Système <b>DNS</b>" />
	<figcaption>Système <b>DNS</b></figcaption>
</figure>
Toutes ces recherches que nous venons de voir étaient du type récursives, mais <b>DNS</b> autorise également des recherches itératives à n’importe quel moment du processus de recherche : si un serveur n’est pas en mesure de répondre favorablement à la demande, il renvoie directement l’adresse <b>IP</b> du prochain serveur de nom de la chaîne. En général, toutes les demandes d’une même recherche <b>DNS</b> sont récursives, mis à part celle émanant du serveur local de nom adressée au serveur racine qui est de nature itérative. Cette démarche est préférable, les serveurs racines traitant généralement de grands volumes de
demandes.</li>
</ol>
</li></ol></div>



<h4 class="question"><ol class="alphabet"><li>Expliquer les principes de la programmation socket donnant accès aux services <b>TCP</b> et <b>UDP</b>.</li><li>Quelles sont les différences importantes entre ces deux <b>API</b> ?</li><li>Dans une entité de transport, comment les sockets <b>TCP</b> et <b>UDP</b> sont-ils identifiés ? Pourquoi ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Le socket est une prise associée à un port permettant l'accès aux couches réseaux. Cela permet d'envoyer et recevoir des données via des services comme <b>UDP</b> et <b>TCP</b>.</lI>
<li><b>UDP</b> est un service non-connecté (non-fiable) qui envoie les données sans se socier de leur bonne réception par le destinataire. Tandis que <b>TCP</b> est un service orienté connexion qui permet de s'assurer que les messages atteignent leur destination. Ceci est fait au moyen d'une connexion établie préalablement entre le client et le serveur qui s'envoie des accusés de réception. Si un accusé de réception n'est pas reçu après l'envoi d'un message, le message est considéré comme perdu et renvoyé au destinataire.</lI>
<li>Le socket est identifié via le numérod e port sur lequel il se trouve. Il faut donc l'<b>IP</b> ainsi qu'un numéro de port pour envoyer un message. Cela permet à l'ordinateur de répartir le message qu'il reçoit au bon endroit.</lI>
</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez les circonstances dans lesquelles l’émetteur <b>TCP</b> peut recevoir trois doublons d’acquits venant du récepteur <b>TCP</b>.</li><li>Décrivez deux actions importantes de l’émetteur <b>TCP</b> lorsque cela se produit et expliquez-en les raisons.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Quand il reçoit 3 doublons du même <b>ACK</b> d'affilé, il va comprendre qu'il y a un segment qui n'a pas été reçu.</li>
<li>L'émetteur ne doit donc pas attendre la fin du timeout pour renvoyer le segment.</li></ol>
</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez le principe général du contrôle de <i>flux</i> de <b>TCP</b>.</li><li>Expliquez deux mécanismes associés ayant pour but de permettre à <b>TCP</b> de s’adapter aux spécificités des applications ou de se protéger vis-à-vis de celles-ci.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Cela permet de réguler la vitesse sur le réseau afin d'éviter la congestion. Pour se faire, l'expéditeur a une variable "receive window" pour qu'il sache combien de place disponible se trouve dans le buffer du receveur. Comme <b>TCP</b> ne peut pas surcharger les buffer : LastByteRcvd - LastByteRead <= RcvBuffer.
Le receiver window (rwnd) se définit comme suit : 
$$rwnd = RcvBuffer - (LastByteRcvd - LastByteRead)$$</li>
<li>Nagle Algorithm : Quand les données viennent du socket un byte à la fois, on envoie le premier byte et on buffer le reste jusqu'à ce que le premier byte soit reçu. On envoie alors le reste par RTT en 1 fois. Silly Window Problem - Clark' solution : Le receveur envoi une mise à jour de la fenêtre si et seulement si le buffer est à moitié vide ou si un segment entier peut être reçu.</li></ol>
</div>



<h4 class="question">Combien d’adresses <b>IP</b> doit-on attribuer à un routeur ? Pourquoi ?</h4>
<div class="answer">Une seule car cela représente le routeur au sein du réseau. L'adresse <b>IP</b> est unique et fait donc référence à un objet bien précis.</div>



<h4 class="question"><ol class="alphabet"><li>Considérez un protocole de routage à états de liens (link state). Décrivez le contenu des paquets de routage, expliquez le rôle de chaque champ, et décrivez la méthode de diffusion des paquets.</li><li>En quelques mots, en quoi est-ce fondamentalement différent des protocoles à vecteur de distances ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><ol>
	<li>Le nom de la source.</li>
	<li>Un numéro de séquence : Il permet de savoir à quel paquet le routeur en est (pour ne pas mettre à jour avec un vieux paquet).</li>
	<li>Un âge</li>
	<li>Le nom de ses voisins et les coûts associés (qui ne sont pas obligatoirement identiques pour les 2 sens	d’une arête.</li>
	<li>Des <b>ACK</b> flags et des Send flags pour savoir. Le send flag permet de savoir qui a déjà reçu le paquet et à qui le paquet n’a pas encore été envoyé, tandis que l’<b>ACK</b> flag sert juste à savoir si on a renvoyé l’<b>ACK</b> de ce paquet à un certain nœud</li>
</ol>
Chaque noeud reçoit les mêmes infos. Tous les noeuds envoient toutes les infos à tous ses voisins qui n'ont pas encore reçu l'info. Ensuite ils doivent chacun effectuer un Dijkstra pour chaque destination. Pour les protocoles à vecteur de distances, on utilise la programmation dynamique. Chaque noeud envoi périodiquement son vecteur de distance à ses voisins de manière asynchrone. Quand un noeud reçoit un vecteur de distance, il met à jour le sien et si un chemin change il avertit ses autres voisins. Les algorithmes à vecteur de distance sont moins robustes mais beaucoup plus rapides.</li>
<li>Contrairement au DV, la distance vers une destination n'est pas calculée au fur et à mesure en sommant le prochain coût estimé par le prochain saut et le coût pour atteindre ce prochain routeur. On calcule la distance directement via un arbre (spanning tree).</li>
</ol>
</div>



<h4 class="question">Sachant que la couche de transport est équipée de mécanismes (Cf. <b>TCP</b>) pour récupérer les erreurs de bout-en-bout, pourquoi la couche de liaison de données implémente-t-elle aussi toute une série de fonctions de ce type, comme la détection d’erreurs, voire même la retransmission de trames erronées dans certains cas.</h4>
<div class="answer"><b>TCP</b> permet seulement de vérifier que le paquet soit bien reçu mais ne vérifie pas son contenu. Lors du transport, il pourrait y avoir une modification des données. La vérification du contenu est effectuée après afin de ne pas ralentir le débit.</div>



<h4 class="question"><ol class="alphabet"><li>Dans un réseau local composé de plusieurs segments <b>Ethernet</b> interconnectés par des commutateurs <b>Ethernet</b>, un ordinateur peut-il conserver son adresse <b>IP</b> si on le change de segment ? Pourquoi ?</li><li>En est-il de même si les segments sont interconnectés par des routeurs ? Pourquoi ?</li><li>Pourquoi est-il plus intéressant d’interconnecter des segments <b>Ethernet</b> par des commutateurs <b>Ethernet</b> plutôt que par des hubs ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Oui car ils sont identifiés par leurs adresses <b>MAC</b>, l'adresse <b>IP</b> n'est pas très importante.</li>
<li>Non, car ici, le protocole <b>DHCP</b> attribuera une nouvelle adresse à l'ordinateur.</li>
<li>Car on ne peut mettre que maximum 4 hubs interconnectés par des cables de 100m maximum alors que les commutateurs n'ont pas de limites.</li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Expliquez la différence entre une fibre optique multimode et une fibre monomode.</li><li>Laquelle permet un débit plus élevé ? Pourquoi ?</li><li>Expliquez le multiplexage en longueur d’onde (WDM). Quel est son intérêt ?</li><li>Comparez TDM, FDM et WDM.<</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Ce sont tous les deux des câbles composés de 2 couches de verre et d'une couche protrectrice en plastique. La première couche de verre transporte les photons et la 2eme sert à les obliger à rester dans la première couche en les réfléchissant. Dans les fibres multimodes on laisse passer plusieur photons à la fois, ceux-ci n'auront pas nécessairement le même chemin, dû à l'épaisseur de la couche centrale (64$\mu$) qui permet plus de "collisions"/refractions. Dans les fibres monomodes, la couche centrale est tellement plus petite (2,4$\mu$) qu'on ne peut laisser qu'un seule photon à la fois.</li>
<li>La fibre optique monomode permet un débit plus élevé. La couche centrale de taille plus petite ne peut laisser passer qu'un seul photon à la fois. Ceux-ci partent en ligne droite, donc moins de "collisions" à l'intérieur, c'est plus efficace et on ne doit pas attendre que le symbole aie été entièrement reçu par le récepteur.</li>
<li>Cette technique est donc utilisée pour la fibre optique. On peut remarquer que la longueur d’onde étant l’inverse de la fréquence, cette technique utilise donc le même principe que la FDM. En fait, on envoie des photons avec des longueurs d’onde différentes selon l’utilisateur dans la fibre. Ces photons passent dans un prisme pour combiner toutes les lumières à l’entrée de la fibre puis sont à nouveau séparés à la sortie de la fibre à l’aide d’un autre prisme.</li>
<li><ul>
	<li><b>TDM</b> (<b>La division par le temps</b>) : Tout le monde peut utiliser le même canal de communication mais seulement pour un temps donné. Par exemple, toutes les secondes, on change d’utilisateur et chacun à son tour peut utiliser le canal comme il le veut. On doit donc savoir qui peut utiliser le canal quand et il faut avoir une bonne synchronisation.</li>
	<li><b>FDM</b> (<b>La division en fréquences</b>) : C’est utilisé en radio et en télévision. On attribue un sous-canal de fréquences à chaque personne qui veut recevoir des informations. Par exemple, le premier usager à la bande de fréquence de 0 à 1KHz, le 2 à la bande de 1 à 2KHz,... Tout le monde peut donc communiquer de manière continue à l’aide de son sous-canal.</li>
</ul></li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Quel mécanisme est utilisé par un serveur Web pour conserver de l’état relatif aux usagers ? Expliquez le principe en l’illustrant sur un scénario.</li><li>Expliquer le fonctionnement de HTTP avec <b>proxy</b>-cache à partir d’un scénario impliquant le client, le serveur et le <b>proxy</b>. Expliquez le gain d’efficacité lorsque l’objet est en cache.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Les Cookies sont des informations qui se trouvent tout aussi bien du côté client que du côté serveur et qui représentent des états. Les utilisateurs préfèreraient avoir des facilitées (ne pas devoir rentrer à chaque fois son mot de passe quand on va sur un site par exemple).</li>
<li>Quand on utilise un <b>proxy</b>, c’est avec le <b>proxy</b> qu’on établit la connexion <b>TCP</b>, pas avec le vrai serveur. Après, le <b>proxy</b> se sert de l’info dans le header de la requête http pour rediriger la requête. Le <b>proxy</b> permet aussi de retenir des infos en cache. Si le serveur est down et que l’info est en cache sur le <b>proxy</b>, on peut encore obtenir l’info. Les <b>proxy</b>s permettent également de réduire les délais de réponse et le trafic vers le site, car s’il a déjà l’info, on ne doit pas la demander au serveur. Il permet aussi de filtrer les connexions et de répartir les charges s’il y a plusieurs serveurs derrière.</li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Dans un protocole de transport, si l’on numérote les segments modulo 2, montrez par un contre exemple qu’il est également nécessaire de numéroter les acquits pour assurer la fiabilité du transfert.</li><li>Dans quelle(s) situation(s) le protocole à bit alterné est-il quasiment aussi efficace qu’un protocole à grande fenêtre glissante ? Expliquez.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Un paquet sur 2 contiendra donc la valeur 0 et l'autre, la valeur 1. Grâce à ça, si l'<b>ACK</b> est corrompu, le receveur va s'apercevoir que le nouveau paquet reçu est celui qu'il avait déjà reçu et va donc le jeter. Il va ensuite envoyer un <b>ACK</b> à nouveau pour passer au paquet suivant.</li>
<li>Lorsqu'il y a qu'un seul paquet à envoyer. Sinon le stop & wait fait perdre beaucoup de temps et empêche la ligne d'avoir un débit correct.</li>
</ol></div>




<h4 class="question"><ol class="alphabet"><li>Dans <b>TCP</b>, comment fixe-t-on les numéros des premiers segments transmis dans chaque sens d’une connexion ?</li><li>Si l’on attribuait systématiquement la valeur 0 (par exemple) à ces premiers numéros, quel serait le risque et comment pourrait-on l’éviter en conservant toutefois cette numérotation ? Quel serait l’inconvénient ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><b>TCP</b> utilise le <b>3-way handshake</b> et comme son nom l'indique, il se déroule en trois étapes:
	<ul>
		<li><b>SYN</b> (<b>synchronized</b>) : Le client qui désire établir une connexion avec un serveur va envoyer un premier paquet <b>SYN</b> au serveur. Le numéro de segment de ce paquet est un nombre aléatoire A.</li>
		<li><b>SYN-<b>ACK</b></b> (<b>synchronize-acknowledge</b>) : Le serveur va répondre au client à l'aide d'un paquet <b>SYN-<b>ACK</b></b>. Le numéro du <b>ACK</b> est égal au numéro de segment du paquet précédent (<b>SYN</b>) incrémenté de un (A + 1) tandis que le numéro de segment du paquet <b>SYN-<b>ACK</b></b> est un nombre aléatoire B.</li>
		<li><b>ACK</b> (<b>acknowledge</b>): Pour terminer, le client va envoyer un paquet <b>ACK</b> au serveur qui va servir d'accusé de réception. Le numéro de segment de ce paquet est défini selon la valeur de l'acquittement reçu précédemment p.e. A + 1 et le numéro du <b>ACK</b> est égal au numéro de segment du paquet précédent (<b>SYN-<b>ACK</b></b>) incrémenté de un (B + 1).</li>
	</ul>
Une fois le <b>3-way handshake</b> effectué, le client et le serveur ont reçu un acquittement de la connexion. Les étapes 1 et 2 définissent le numéro de segment pour la communication du client au serveur et les étapes 2 et 3 définissent le numéro de segment pour la communication dans l'autre sens. Une communication full-duplex est maintenant établie entre le client et le serveur.
</li>
<li>En effet, on repère une connexion avec les 2 adresses <b>IP</b> et les 2 numéros de <b>port</b>. Si cette connexion arrive à son terme et que juste après avoir fermé cette connexion, on rétabli une connexion avec les même <b>IP</b> et <b>ports</b> comment peut-on distinguer les 2 connexions (il pourrait y avoir un vieux paquet de la première connexion qui s’était baladé sur le réseau et qui est arrivé beaucoup plus tard)?</li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Dans quelle(s) situation(s) le protocole de routage à vecteur de distances (DV) risque-t-il de ne pas converger ?</li><li>Décrivez un comportement pathologique possible à l’aide d’un exemple simple.</li><li>Comment peut-on atténuer ce phénomène ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><ul>
	<li>Des boucles de routage.</li>
	<li>Le trafic est acheminé de façon incohérente.</li>
	<li>Des entrées de table de routage incohérentes.</li>
</ul></li>
<li>Pour constater la rapidité avec laquelle les bonnes nouvelles se propagent, considérez le sous-réseau illustré à la figure et sur lequel la métrique utilisée est le nombre de sauts. Supposons que A soit inactif au départ et que tous les autres routeurs le sachent. En d'autres termes, ils ont tous enregistré un délai infini vers A.<figure>
	<img src="images/comportement-pathologique.svg" alt="Comportement pathologique" />
	<figcaption>Comportement pathologique</figcaption>
</figure></li>
<li>Via l'lhorizon éclaté (poison reverse). Si Z passe par Y pour aller à X, Z peut faire croire à Y qu'il se trouve à une distance infinie de X. Y étant persuadé que Z ne peut atteindre X, il opte pour une autre route.  Cette méthode n'est bonne qu'avec des triplets, elle ne marche pas lorsqu'il y a des boucles de plus de trois noeuds.</li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Déterminez analytiquement l’expression de l’efficacité du protocole ALOHA discrétisé (slotted ALOHA) en fonction de la charge du réseau pour un grand nombre de stations actives. On supposera que chaque station émet dans un slot avec une probabilité p.</li><li>Représentez l’efficacité graphiquement (avec définition des axes), et expliquez la forme de la courbe.</li><li>La suppression des slots (Cf. ALOHA pur) améliore-t-elle les performances ? Pourquoi ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Si on suppose qu’on a N nœuds qui ont beaucoup de trames à envoyer. Chacun transmet sur un slot avec une certaine probabilité p. Un nœud à $p(1-p)^{N-1}$ chances d’envoyer un paquet parce qu’il faut qu’il envoie un paquet ($p$) <i>et</i> qu’aucun des $N-1$ autres nœuds n’envoient un paquet ($1-p$) en même temps. La probabilité que n’importe quel nœud envoient un paquet avec succès est de $$Np(1-p)^{N-1}$$ Pour une efficacité maximale, il faut donc trouver un p tel que $Np(1-p)^{N-1}$ soit maximale. On trouve (en dérivant) que L’efficacité est maximale quand $p=\dfrac{1}{N}$. Si on imagine que N tend vers l’infini, on sait que $$\lim\limits_{n-\infty}\left(1+\left(\dfrac{G}{n}\right)\right)^{n} = e^{-G}$$ Et donc pour $G=1$ $$e^{-1} = \dfrac{1}{e} = 0.37 = 37\% \text{ d'efficacité}$$</li>
<li>(Slide 5-28) ?</li>
<li>Non, la probabilité de collision augmente. On obtient une efficacité de 18%.</li>
</ol></div>

















<h3>Pratique</h3>


<div class="multi-formula">
	<fieldset class="formula">
		<legend>Efficacité</legend>
		$\begin{array}{rcl}
			\eta & = & \dfrac{\text{débit utile}}{\text{débit brut}}\\
			     & = & \dfrac{\text{temps de transmission des données}}{\text{temps total d'un échange}}\\
			     & = & \dfrac{\text{nombre de bits de données transmis}}{\text{nombre total de bits transmis }+\left(V\times T_{\text{délais}}\right)}
		\end{array}$
	</fieldset>
	<fieldset class="formula">
		<legend>Temps de transmission $T_t$</legend>
		$\begin{array}{rcl}
			T_t & = & \dfrac{\text{Nbre $N$ de bits transmis}}{\text{débit de la source (en bps)}}\\
			    & = & \text{ Temps entre l'envoi des bits 1 et $N$}
		\end{array}$
	</fieldset>
	<fieldset class="formula">
		<legend>Temps de transmission $T_p$</legend>
		$T_p = \dfrac{\text{Distance (en m)}}{\text{Vitesse de propagation (en m/s)}}$
	</fieldset>
	<fieldset class="formula">
		<legend>Ligne terrestre</legend>
		$\text{Vitesse de propagation} = 2\times 10^8 \text{m/s}$
	</fieldset>
	<fieldset class="formula">
		<legend>Ligne satellite</legend>
		$\text{Vitesse de propagation} = 250-300 \text{ms}$
	</fieldset>
	<fieldset class="formula">
		<legend>Simple envoi</legend>
		<img src="images/simple-send.svg" alt="Simple envoi" />
	</fieldset>
	<fieldset class="formula">
		<legend>Transformations</legend>
		$\begin{array}{lll}
			x \text{ octets} &=& 8x \text{ bits}\\
			x \text{ Kbps} &=& x10^{3} \text{ bits}\\
			x \text{ ms}   &=& x10^{-3} \text{ bps}
		\end{array}$
	</fieldset>
	<fieldset class="formula">
		<legend>Débit utile</legend>
		$\text{Débit utile} = \dfrac{N}{T_{paquet}+T_{acquit}+2T_p}$
	</fieldset>
	<fieldset class="formula">
		<legend>Temps paquet</legend>
		$T_{paquet} = \dfrac{N+octets_{en-tête}}{canal}$
	</fieldset>
	<fieldset class="formula">
		<legend>Temps acquit</legend>
		$T_{paquet} = \dfrac{octets_{en-tête}}{canal}$
	</fieldset>
</div>





<h4 class="question">Soit le réseau représenté sur la figure. Nous supposons que l’algorithme de <i>spanning tree</i> est stabilisé et que toutes les tables d’acheminement des ponts sont initialement vides.
<figure>
	<img src="images/topologie.svg" alt="Topologie" />
	<figcaption>Topologie</figcaption>
</figure>
<ol class="alphabet">
	<li>Donnez les tables relatives au <i>spanning tree</i> de chaque pont.</li>
	<li>La station B envoie une trame à la station A dont elle connaît l’adresse <b>MAC</b>, celle-ci lui répond en lui envoyant à son tour une trame. Décrivez l’évolution des tables d’acheminement des ponts ainsi que les différentes trames qui circulent sur chaque LAN.</li>
	<li>Le pont 4 tombe en panne. Décrivez un scénario possible d’échange des BPDU entre les ponts et l’évolution des tables relatives au <i>spanning tree</i> jusqu’à stabilité.</li>
</ol></h4>




<h4 class="question">Soit A et B deux machines située sur un même réseaux de 1Mbps ($10^6$). A envoie des données à B (la taille maximale des segments a été négociée à 512 bytes de données), les en-têtes <b>TCP</b> et <b>IP</b> forment un total de 40 bytes. B envoie un acquit (segment <b>TCP</b> vide) à A à la réception d’un segment, après le temps de traitement de celui-ci fixé à 100ms. La station B a une fenêtre de réception de 36 MSS. Le seuil initial pour l’algorithme de slow-start est de 16 MSS. Le temps de propagation est négligeable.
<ol class="alphabet">
	<li>Que vaut le RTT ?</li>
	<li>Combien de temps faudra-t-il à A pour arriver à une fenêtre de congestion de taille maximale ?</li>
</ol></h4>




<h4 class="question">Soit A et B deux machines située sur un même réseaux de 1Mbps ($10^6$). A envoie des données à B (la taille maximale des segments à été négociée à 256 bytes de données), les en-têtes <b>TCP</b> et <b>IP</b> forment un total de 40 bytes. B envoi un acquit (segment <b>TCP</b> vide) à A à la réception d’un segment, après le temps de traitement de celui-ci fixé à 20ms. La station B a une fenêtre de réception de 12 MSS. Le seuil initial pour l’algorithme de slow-start est de 8 MSS.
<ol class="alphabet">
	<li>Que vaut le RTT ?</li>
	<li>Combien de temps faudra-t-il à A pour arriver à une fenêtre de congestion de taille maximale ?</li>
</ol></h4>



<h4 class="question">Considérons le réseau de la figure. La table contient diverses informations sur les routeurs.
<figure>
	<img src="images/topologie3.svg" alt="Topologie" />
	<figcaption>Topologie</figcaption>
</figure>
<figure>
	<table>
		<thead>
			<tr><th>Routeur</th><th>Interface</th><th>Netmask</th><th>Host ID</th></tr>
		</thead>
		<tbody>
			<tr><td>R</td> <td>eth0</td><td>255.255.240.0</td><td>1</td></tr>
			<tr><td></td><td>eth1</td><td>255.255.255.0</td><td>1</td></tr>
			<tr><td></td><td>eth2</td><td>255.255.224.0</td><td>1</td></tr>
			<tr><td>S</td><td>eth0</td><td>255.255.224.0</td><td>2</td></tr>
			<tr><td></td><td>eth1</td><td>255.255.224.0</td><td>2</td></tr>
			<tr><td>T</td><td>eth0</td><td>255.255.255.0</td><td>3</td></tr>
			<tr><td></td><td>eth1</td><td>255.255.255.0</td><td>3</td></tr>
		</tbody>
		<tfoot>
		</tfoot>
	</table>
	<figcaption>Information sur les routeurs</figcaption>
</figure>
<ol class="alphabet">
	<li>Donnez la table de routage de S.</li>
	<li>La station C dont l’adresse <b>IP</b> est 165.128.76.193 est ajoutée au réseau. Où la station C sera-t-elle connectée ? Quel sera son ID ?</li>
	<li>Donnez l’adresse <b>IP</b> de l’interface eth0 du routeur S.</li>
	<li>Combien d’adresses <b>IP</b> différentes pourraient être attribuées à A?</li>
</ol></h4>




<h4 class="question">Considérons le réseau de la figure. La table 1 contient diverses informations sur les routeurs.
<figure>
	<img src="images/topologie2.svg" alt="Topologie" />
	<figcaption>Topologie</figcaption>
</figure>
<figure>
	<table>
		<thead>
			<tr><th>Routeur</th><th>Interface</th><th>Netmask</th><th>Host ID</th></tr>
		</thead>
		<tbody>
			<tr><td>R</td> <td>eth0</td><td>255.255.240.0</td><td>1</td></tr>
			<tr><td></td><td>eth1</td><td>255.255.255.0</td><td>1</td></tr>
			<tr><td></td><td>eth2</td><td>255.255.224.0</td><td>1</td></tr>
			<tr><td>S</td><td>eth0</td><td>255.255.224.0</td><td>2</td></tr>
			<tr><td></td><td>eth1</td><td>255.255.224.0</td><td>2</td></tr>
			<tr><td>T</td><td>eth0</td><td>255.255.255.0</td><td>3</td></tr>
			<tr><td></td><td>eth1</td><td>255.255.255.0</td><td>3</td></tr>
		</tbody>
		<tfoot>
		</tfoot>
	</table>
	<figcaption>Information sur les routeurs</figcaption>
</figure>
<ol class="alphabet">
	<li>Donnez la table d’acheminement de R.</li>
	<li>Combien d’adresses <b>IP</b> reste-t-il de disponibles dans le réseau ?</li>
	<li>La station B envoie un paquet <b>IP</b> à la station A. Décrivez les trames et paquets circulant sur l’intranet, ainsi que l’évolution des différentes tables des routeurs et des stations.</li>
</ol></h4>



<h4 class="question">Soit les tables suivantes :
<figure>
	<table>
		<thead>
			<tr><th>pont</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
		</thead>
		<tbody>
			<tr><td>pont 1</td><td>1</td><td>1</td><td>0</td><td>1</td><td>FP</td></tr>
			<tr><td></td><td>2</td><td>1</td><td>0</td><td>1</td><td>FP</td></tr>
		</tbody>
		<tbody>
			<tr><td>pont 2</td><td>1</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
			<tr><td></td><td>2</td><td>1</td><td>1</td><td>2</td><td>FP</td></tr>
		</tbody>
		<tbody>
			<tr><td>pont 3</td><td>1</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
			<tr><td></td><td>2</td><td>1</td><td>1</td><td>2</td><td>BP</td></tr>
		</tbody>
		<tbody>
			<tr><td>pont 4</td><td>1</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
			<tr><td></td><td>2</td><td>1</td><td>1</td><td>2</td><td>BP</td></tr>
			<tr><td></td><td>3</td><td>1</td><td>0</td><td>1</td><td>BP</td></tr>
		</tbody>
		<tfoot>
		</tfoot>
	</table>
	<figcaption>tables du spanning tree</figcaption>
</figure>
<ol class="alphabet">
	<li>Dessinez un réseau possible, respectant les tables relatives au spanning tree données à la table 1.</li>
	<li>La station A envoie une trame à la station B dont elle connaît l’adresse <b>MAC</b>, celle-ci lui répond en lui envoyant à son tour une trame. Décrivez l’évolution des tables d’acheminement des ponts, sachant que celles-ci sont initialement vides, ainsi que les différentes trames qui circulent sur chaque LAN. Pour arriver à destination, cette trame devra traverser deux ponts.</li>
	<li>Le pont 1 tombe en panne. Décrivez un scénario possible d’échange des BPDU entre les ponts et l’évolution des tables relatives au spanning tree jusqu’à stabilité.</li>
</ol></h4>





<h4 class="question">Trois stations $S_1$, $S_2$ et $S_3$ se partagent un segment de réseau de type 802.3 (CSMA/CD, 10Mbps). La première station désire émettre une trame de 1000 bits alors que les deux autres stations souhaitent émettre chacune deux trames de 1000 bits. La durée d’un slot de contention a été fixée à $2T = 2:10^{-6}$ s. Lorsque plusieurs stations veulent accéder au réseau, on supposera que la probabilité de retransmission dans un slot est constante et égale à $p = \dfrac{1}{2}$. Calculez :
<ol class="alphabet">
	<li>la durée moyenne d’envoi des 2 premières trames,</li>
	<li>la durée moyenne d’envoi des 5 trames.</li>
</ol>
Sachant que les stations commencent à émettre leur première trame en même temps.</h4>



<h4 class="question">Un émetteur envoie des paquets à un récepteur à l'aide d'un protocole de transport <i>stop and wait</i>. Le débit brut du réseau est de 1 Mbps. Chacun de ces paquets contient 1000 bits de données utiles. L'émetteur retransmet un paquet s'il ne reçoit pas q'acquit (24 bytes) avant l'expiration de son timer, fixé à 1 s. Sachant qu'en moyenne un paquet (données ou acquit) sur 100 n'arrive pas à bon port, alculez l'efficacité moyenne de la connexion. On supposera négligeable les délais de propagations et les overheads introduits par l'encapsulation des données.</h4>



<h4 class="question">Deux entités A et B ont établi une connexion <b>TCP</b> passant par deux routeurs $R$ et $S$. Les liaisons $A \leftrightarrow R$, $R \leftrightarrow S$ et $S \leftrightarrow B$ ont un débit de respectivement 10 Mbps, 1 Mbps, et 1 Mbps. Chacune de ces liaisons a un temps de propagation de 10 ms. $A$ souhaite envoyer des données à $B$ le plus rapidement possible. La fenêtre de réception de $B$ est de 18 MSS, le MSS ayant été négocié à 10 Kb, en-tête compris. Le seuil de l'algorithme de <i>slow-start</i> est initialement fixé à 12 MSS. A chaque réception d'un segment, $B$ répond par un acquit de 24 octets, en-tête compis. Un timer de retransmission de 1 s est enclenché à chaque début d'envoi d'une rafale. Combien de temps faut-il à $A$ pour arrive à un fenetre de congestion de taille maximale, sachant que la troisième rafale sera entièrement perdue et qu'il n'y aura pas d'autres pertes ?</h4>