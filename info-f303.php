<!-- 
    Il faudrait mettre ceci dans un fichier CSS 
    /!\ Ce code est redondant avec le cours d'AdminSys
-->
<style>
/* A changer dans le css existant pour plus de clarté */
section .question {
    margin-bottom: 10px;
}


code {
    padding: 2px 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 3px;
    font-family: "Menlo", "Liberation Mono", "Consolas", "DejaVu Sans Mono", "Ubuntu Mono", 
        "Courier New", "andale mono", "lucida console", monospace;
    word-wrap: normal;
}
pre {
    border: 1px solid #e5e5e5;
    display: block;
    padding: 10px;
    margin: 5px 0px;
}
pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
}

sub, sup {
    font-size: smaller;
}

</style>


<h1>INFO-F303 - Réseaux, information et communications</h1>
<h2>Examen</h2>
Les réponses proviennent (ou par l'intermédiaire de résumé) de Denis Steckelmacher, 
Pierre Dagnely, Christophe Dumeunter, Julien Vanbergen, David Fishel et Rodrigue Van Brande. 
Merci à eux.
<h3>Théorie</h3>



<h4 class="question">
    Expliquez la différence entre une paire de cuivre torsadée de catégorie 3 et une paire de 
    catégorie 5. Laquelle permet un débit plus élevé et pourquoi ?
</h4>
<div class="answer">
    On utilise des paires de cuivre torsadées car deux fils de cuivres parallèles créent chacun un 
    champ magnétique proportionnelle à leur distance, ce qui induit un grand courant et donc 
    beaucoup de bruit. Or lorsqu'ils sont torsadés, les torsades créent chacune leur champs 
    magnétique ainsi qu'un courant induit.  Ces flux induits s'inversent dans chaque boucle 
    adjacente. Les effets sont donc atténués. Plus les torsades sont petites, plus l'effet est 
    efficace. Les fils de catégorie 5 sont plus torsadés que ceux de catégorie 3 et donc plus efface 
    (100 Mbps contre 10 Mbps).
    <figure>
        <img src="images/info-f303/cable-torsade" alt="Cable torsadé" />
        <figcaption>Cable torsadé</figcaption>
    </figure>
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>Expliquez la différence entre une fibre optique monomode et une fibre multimode.</li>
        <li>Laquelle permet un débit plus élevé et pourquoi ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            La fibre optique est une émission d'un nuage de photon dans un câble en verre. 
            Composé d'un câble en fibre optique inclus dans un autre, les deux ayant des indices de 
            réfractions différents. Ceci permettant de piéger les signaux par réfraction. les 
            photons ne peuvent plus quitter le câble et se retrouvent bloqués dans le câble du 
            centre. On utilise deux types de fibre: le monomode et multimode.
            <figure>
                <img src="images/info-f303/multimode-monomode" alt="Deux modes de fibres optique" />
                <figcaption>Deux modes de fibres optique</figcaption>
            </figure>
            <ul>
                <li>
                    <b>Multimode</b>: Le problème de la fibre optique est que les photons émis dans 
                    un même nuage prennent des trajectoires différentes (en fonctions des angles de 
                    réflexions au sein du câble), les photons du signal n'arrivent donc pas en même 
                    temps au bout du câble (ni dans la même partie). Or plus la distance est longue 
                    plus cet effet grandit et plus l'écart entre les photons de tête et de queue 
                    s'agrandit, on a donc un étalement puis un chevauchement des flux. Pour éviter 
                    les chevauchement on est donc obligé d'espacer les émissions en fonction des 
                    distances et capacités de réceptions.<br />
                </li>
                <li>
                    <b>Monomode</b>: Ici on utilise un verre plus étroit (2.4 µ) avec un seul mode 
                    de propagation, les photons vont donc en ligne droite, sans étalement. C'est 
                    efficace pour les grandes distances, mais plus chère.
                </li>
            </ul><br />
        </li>
        <li>
            La fible monomode possède donc un débit bien plus élevé car il n'y a pas de dispersion 
            de délai ; on ne doit pas attendre entre les symboles. Elle est cependant bien plus 
            chère. La fibre multimode est moins optimale à cause des chevauchement possible et 
            n'est du coup utilisé que pour de courte distances.
        </li>
    </ol>
</div>






<h4 class="question">
    <ol class="alphabet">
        <li>
            Expliquez le principe du multiplexage en longueur d'onde (WDM). Quel est son intérêt ?
        </li>
        <li>
            Comparez WDM aux techniques classiques de multiplexage TDM et FDM.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            La technique <b>WDM</b> est utilisée pour la fibre optique. On peut remarquer que la 
            longueur d'onde étant l'inverse de la fréquence, cette technique utilise donc le même 
            principe que la <b>FDM</b>. En fait, on envoie des photons avec des longueurs d'onde 
            différentes selon l'utilisateur dans la fibre. Ces photons passent dans un prisme pour 
            combiner toutes les lumières à l'entrée de la fibre puis sont à nouveau séparés à la 
            sortie de la fibre à l'aide d'un autre prisme.<br />
            <br />
            Le protocole gère 3 classes de trafic:
            <ul>
                <li>
                    Un trafic à débit <b>constant</b> en mode connecté, tel celui d'une <em>vidéo 
                    compressée</em>.
                </li>
                <li>
                    Un trafic à débit <b>variable</b> en mode connecté, tel celui d'un <em>transfert 
                    de fichier</em>.
                </li>
                <li>
                    Un trafic <b>constitué de datagrammes</b> en mode non connecté, tels <em>des 
                    paquets <b>UDP</b></em>.</li>
            </ul>
            <br />
        </li>
        <li>
            Pour les deux protocoles orientés connexion, l'idée de base est qu'une station A 
            souhaitant communiquer avec une station B doit au préalable insérer une trame de demande
             de connexion dans un slot libre sur le canal de signalisation de B. Si B accepte, la 
             communication peut avoir lieu par l'intermédiaire du canal de données de A.
            <ul>
                <li>
                    <b>FDM</b> (<b>Frequency Division Multiplexing</b>):<br />
                    Utilisé en radio et en télévision. On attribue un sous-canal de fréquences à 
                    chaque personne qui veut recevoir des informations. Par exemple, le premier 
                    usager à la bande de fréquence de 0 à 1KHz, le 2 à la bande de 1 à 2KHz,... 
                    Tout le monde peut donc communiquer de manière continue à l'aide de son sous-canal.
                    <br />
                </li>
                <li>
                    <b>TDM</b> (<b>Time Division Multiplexing</b>):<br />
                    Tout le monde peut utiliser le même canal de communication mais seulement pour 
                    un temps donné. Par exemple, toutes les secondes, on change d'utilisateur et 
                    chacun à son tour peut utiliser le canal comme il le veut. On doit donc savoir 
                    qui peut utiliser le canal quand et il faut avoir une bonne synchronisation.
                    <br />
                </li>
                <li>
                    <b>WDM</b> (<b>Wavelength Division Multiplexing</b>):<br />
                    Principe similaire à <b>FDM</b>, chaque utilisateur possède sa propre longueur 
                    d'ondes.
                </li>
            </ul>
            <br />
            <figure>
                <img src="images/info-f303/fdm-tdm-wdm" alt="FDM TDM WDM" />
                <figcaption>FDM TDM WDM</figcaption>
            </figure>
        </li>
    </ol>
</div>





<h4 class="question">
    <ol class="alphabet">
        <li>
            Expliquez le principe des codes polynomiaux (CRC) pour la détection d'erreurs.
        </li>
        <li>
            Pour un polynôme donné, citez un exemple d'erreur que le code CRC associé ne pourra 
            pas détecter.
        </li>
        <li>
            Quelle est l'importance du degré du polynôme utilisé ? Pourquoi ?
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Un <b>contrôle de redondance cyclique</b> ou <b>CRC</b> (Cyclic Redundancy Check) est 
            un outil logiciel permettant de détecter les erreurs de transmission ou de transfert 
            par <b>ajout, combinaison et comparaison</b> de <b>données redondantes</b>, obtenues 
            grâce à une procédure de hachage. Les CRC sont évalués (échantillonnés) avant et après 
            la transmission ou le transfert, puis comparés pour s'assurer que les données sont 
            strictement identiques.<br />
            Le codage binaire est très pratique pour une utilisation dans des appareils électroniques 
            tels qu'un ordinateur, dans lesquels l'information peut être codée grâce à la présence 
            ou non d'un signal électrique. Cependant le signal électrique peut subir des perturbations 
            (distortion, présence de bruit), notamment lors du transport des données sur un long 
            trajets. Ainsi, le contrôle de la validité des données est nécessaire pour certaines 
            applications (professionelles, bancaires, industrielles, confidentielles, relatives à 
            la sécurité, ...).<br />
            <br />
            C'est pourquoi il existe des mécanismes permettant de garantir un certain niveau 
            d'intégrité des données, c'est-à-dire de fournir au destinataire une assurance que les 
            données reçues sont bien similaires aux données émises.<br />
            La protection contre les erreurs peut se faire en mettant en place des mécanismes 
            logiques de détection et de correction des erreurs. La plupart des systèmes de contrôle 
            d'erreur au niveau logique sont basés sur un ajout d'information (on parle de 
            «redondance») permettant de vérifier la validité des données.<br />
            <br />
            Le contrôle de redondance cyclique (noté CRC, ou en anglais Cyclic Redundancy Check) est 
            un moyen de contrôle d'intégrité des données <b>puissant et facile</b> à mettre en oeuvre. 
            Il représente la <b>principale méthode</b> de détection d'erreurs utilisée dans les 
            télécommunications. Le contrôle de redondance cyclique consiste à protéger des blocs de 
            données, appelés trames ("frames" en anglais). A chaque trame est associé un bloc de 
            données, appelé code de contrôle. Le code CRC contient des éléments redondants vis-à-vis 
            de la trame, permettant de détecter les erreurs, mais aussi de les réparer.<br />
            <br />
            Le principe du CRC consiste à traiter les séquences binaires comme des <b>polynômes 
            binaires</b>, c'est-à-dire des polynômes dont les coefficients correspondent à la 
            séquence binaire. Ainsi la séquence binaire <code>0110101001</code> peut être 
            représentée sous la forme polynomiale suivante: 
            $$0*X^9 + 1*X^8 + 1*X^7 + 0*X^6 + 1*X^5 + 0*X^4 + 1*X^3 + 0*X^2 + 0*X^1 + 1*X^0
            $$
            De cette façon, le bit de poids faible de la séquence (le bit le plus à droite) 
            représente le degré 0 du polynôme (<code>X^0 = 1</code>), le 4ème bit en partant de 
            la droite représente le degré 3 du polynôme (<code>X^3</code>)... Une séquence de n bits 
            constitue donc un polynôme de degré maximal <code>n-1</code>. Toutes les expressions 
            polynomiales sont manipulées par la suite avec une arithmétique modulo 2. Dans ce 
            mécanisme de détection d'erreur, un polynôme prédéfini (appelé polynôme générateur et 
            noté <code>G(X)</code>) est connu de l'émetteur et du récepteur. La détection d'erreur 
            consiste pour l'émetteur à effectuer un algorithme sur les bits de la trame afin de 
            générer un CRC, et de transmettre ces deux éléments  au récepteur. Il suffit alors au 
            récepteur d'effectuer le même calcul afin de vérifier que le CRC est valide. <br />
            <br />
        </li>
        <li>
            Le cas où CRC valide un faux positif est extrèmement faible et pourrait survenir 
            uniquement dans le cas d'une double erreur. À la fois dans le message et à la fois 
            dans la valeur du CRC.<br />
            <br />
        </li>
        <li>
            Au plus le degré u polynome est grand, au moins d'erreur il y a. Mais au plus long est 
            le calcul et il y a aussi plus d'information à transmettre. Il est donc très important 
            de choisir un bon degré, ni trop grand ni trop petit.
        </li>
    </ol>
</div>







<h4 class="question">
    <ol class="alphabet">
        <li>
            Expliquez la différence entre un baud et un bps (bit par seconde).
        </li>
        <li>
            Qu'est-ce qui limite le nombre de bauds sur un canal de communication ?
        </li>
        <li>
            Qu'est-ce qui limite le nombre de bps sur un canal de communication ?
        </li>
        <li>
            Comment module-t-on le signal dans les modems « dial-up » les plus courants ? Expliquez 
            sommairement.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <ul>
                <li>
                    Un <b>bps</b>: bit per seconde
                </li>
                <li>
                    Un <b>Baud</b>: est un symbole ("n'importe quoi") par seconde, en gros le baud 
                    peut s'apliquer à autre chose que des bits.
                </li>
            </ul><br />
        </li>
        <li>
            Nyquist impose une borne maximale au débit de symboles. Cette fréquence maximale est de 
            <code>2H</code>, avec <code>H</code> la bande de fréquence disponible en Hertz du 
            canal de transmission. Quand on transmet une émission radio, on a un canal, et on 
            doit tenir dedans. H vient du cable et 2 vient du bruit. Sur un réseau de téléphone, la 
            bande passante est d'environ 4000 Hz la fréquence maximale de la voix humaine.<br />
            <br />
        </li>
        <li>
            Le bruit, selon la loi de <b>Shannon</b> qui dit que le débit en bits est égal à 
            <code>H*log_2(1+S/N)</code> avec <code>S/N</code> étant le rapport du signal sur le 
            bruit. S'il n'y avait pas de bruit, on aurait eu un log de l'infini. L'important est 
            bien le rapport du signal par le bruit: si on a beaucoup de bruit mais qu'on sait 
            augmenter le signal, c'est bon. Généralement le rapport signal/bruit sur un réseau 
            téléphonique est de 1000.<br />
            <br />
        </li>
        <li>
            C'est une forme d'accès à internet qui utilise le réseau téléphonique pour établir une 
            connexion à un ISP. La vitesse maximale est de 56 Kbps et on ne peut pas téléphoner en 
            même temps. Le modem contient un modulateur/Démodulateur. Le but d'un modem est de 
            transformer des informations binaires (numériques) en un signal analogique (et 
            vice-versa). Le plus souvent on modifie à la fois l'amplitude du signal et sa phase.<br />
            On ne passe donc pas 1 bit à la fois, mais au moins 2 (1 grâce à l'amplitude et 1 à la phase).
        </li>
    </ol>
</div>




<h4 class="question">
    Pourquoi utilise-t-on un modem pour transmettre de l'information numérique sur une ligne 
    téléphonique ? Comment module-t-on le signal dans les modems « dial-up » les plus courants ?
</h4>
<div class="answer">
    <em>Voir ci-dessus</em><br />
    C'est une forme d'accès à internet qui utilise le réseau téléphonique pour établir une 
    connexion à un ISP. La vitesse maximale est de 56 Kbps et on ne peut pas téléphoner en même temps. 
    Modulateur/DéModulateur. Le But d'un modem est de transformer des informations binaires 
    (numériques) en un signal analogique (et vice-versa). Le plus souvent on modifie à la fois 
    l'amplitude du signal et sa phase. On ne passe donc pas 1 bit à la fois, mais au moins 2 
    (1 grâce à l'amplitude et 1 à la phase).
</div>



<h4 class="question">Expliquez l'utilité du <b>ACK</b> et <b>NAK</b>.</h4>
<div class="answer">
    Le service de transfert fiable des données doit détecter les erreurs via un checksum et utiliser 
    des accusés de réceptions: le récepteur doit dire explicitement à l'envoyeur s'il a reçu avec ou 
    sans erreur le paquet. Un accusé de réception peut être un <b>ACK</b> (packet reçu) ou un 
    <b>NAK</b> (packet reçu mais corrompu). Les accusés de réception pouvant aussi être corrompu, 
    on leur ajoute aussi un checksum. On indique dans le <b>ACK</b> ou le <b>NAK</b> de quel paquet 
    il est l'accusé de réception sinon on peut déstabiliser le système.<br />
    <figure>
        <img src="images/info-f303/ack-not-nominative" alt="Erreur possible lors d'un <b>ACK</b> 
            non nominatif" />
        <figcaption>Erreur possible lors d'un <b>ACK</b> non nominatif</figcaption>
    </figure>
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            Citez et expliquez sommairement les 4 mécanismes de base permettant d'assurer la 
            fiabilité d'un transfert d'information au travers un réseau non fiable. Justifiez 
            leur nécessité.
        </li>
        <li>
            Décrivez dans les grandes lignes un protocole élémentaire qui les met tous en oeuvre.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <ul>
                <li>ACK / NACK</li>
                <li>Checksum (Error detection)</li>
                <li>Sequence number</li>
                <li>Timeout</li>
            </ul>
            <br />
        </li>
        <li>
            <ul>
                <li><b>Stop & wait</b>: utilise le ACK/NACK, le timer</li>
                <li><b>Go-Back-N</b>: utilise le timer, le ACK, le sequence number</li>
                <li><b>Selective Repeat</b>: utilise le timer, le ACK/NACK, le sequence number</li>
            </ul>
        </li>
    </ol>
</div>

<h4 class="question">
    <ol class="alphabet">
        <li>Expliquez le principe du protocole <b>stop & wait</b>.</li>
        <li>Est-il toujours performant ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            On utilise une boucle simple:<br />
            <pre>send &rarr; wait positive response &rarr; send &rarr; ...</pre>
            Le <b>NAK</b> n'est pas utilisé car recevoir un packet corrompu est similaire à ne rien 
            recevoir; on ne renvoie donc rien et on attend le renvoie automatique à la fin du timer. 
            Le problème est de choisir un bon timer car un timer trop petit peut déclencher la 
            retransmission d'un message alors que le <b>ACK</b> est en chemin et peut donc 
            surcharger le système. À l'inverse un timer trop grand et le système réagit trop 
            lentement.<br />
            <br />
        </li>
        <li>
            Ce protocole a été mis au point dans les années 70 pour des réseaux peu étendu et peu 
            performant, aujourd'hui il n'est plus performant car les <b>RTT</b> (temps de 
            propagation) sont devenus important, et avec ce protocole ils laissent beaucoup de 
            temps mort.
            <figure>
                <img src="images/info-f303/stopandwait-too-old" alt="Le protocole <b>stop & wait</b> 
                    induit un temps mort" />
                <figcaption>Le protocole <b>stop & wait</b> induit un temps mort</figcaption>
            </figure>
        </li>
    </ol>
</div>



<h4 class="question">Expliquez le principe du parallélisme (pipelining).</h4>
<div class="answer">
    Au lieu d'envoyer les packets un à un comme le protocole <b>stop & wait</b>, on envoie une 
    rafale de packet avec les différents accusés de réceptions séparés. Ici on reste donc actif 
    pendant une partie du <b>RTT</b>.<br />
    Il existe deux stratégies possible:
    <ul>
        <li>le protocole à fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>)</li>
        <li>protocole à fenêtre glissante <b>SR</b> (<b>Selective Repeat</b>)</li>
    </ul>
    <figure>
        <img src="images/info-f303/pipelining" alt="Le principe du parallélisme" />
        <figcaption>Le principe du parallélisme</figcaption>
    </figure>
</div>



<h4 class="question">
    Expliquez le principe d'un protocole à fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>).
</h4>
<div class="answer">
    Le sender est autorisé à transmettre de multiples packets (si disponible) sans attendre 
    d'<b>ACK</b>s, mais est contraint de ne pas avoir plus de N packets sans <b>ACK</b> dans le 
    pipeline.<br />
    En résumé l'émetteur envoie N paquets d'un coup et le récepteur envoie N accusés de reception. 
    De plus un <b>ACK</b> correspond aussi à la réception de tous les paquets précédents. 
    Si on reçoit <b>ACK</b>(6), c'est que les 5 autres paquets ont été reçu.<br />
    Le système est donc plus robuste car si <b>ACK</b>(5) se perd, on ne renverra quand même pas ce 
    paquet. Mais en contre-partie on n'accepte les paquets que dans l'ordre; si on recoit 6 avant 5, 
    on détruit 6 (car à l'époque la mémoire était chère) et il faudra le renvoyer. Ce qui est 
    problématique car le réseau est utilisé inutilement.
</div>



<h4 class="question">
    Quelle est la taille maximale de la fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>), si les 
    trames sont numérotées modulo k ? Pourquoi ?
</h4>
<div class="answer">
    On voit que le récepteur considère que le deuxième paquet qu'il reçoit la deuxième fois est 
    le même que le premier qu'il a déjà reçu et non le troisième packet. Ainsi il le supprime et 
    envoie un <b>ACK</b> pensant que le premier <b>ACK</b> s'est perdu, on perd donc le paquet et 
    perturbe toute la chaîne.
    <figure>
        <img src="images/info-f303/size-window-gbn" alt="Taille maximale de la fenêtre glissante 
            <b>GBN</b> (<b>Go-Back N</b>)" />
        <figcaption>Taille maximale de la fenêtre glissante <b>GBN</b> (<b>Go-Back N</b>)</figcaption>
    </figure>
    La taille maximale de la fenêtre est donc le nombre de numéro de <code>séquence-1</code>.
</div>



<h4 class="question">
    Expliquez le principe d'un protocole à fenêtre glissante <b>SR</b> (<b>Selective Repeat</b>).
</h4>
<div class="answer">
    <b>GBN</b> (<b>Go-Back N</b>) souffre, malgré ses améliorations, encore de quelques problèmes de 
    performances. En effet, la moindre erreur dans un paquet peut entraîner la retransmission 
    superflue d'<b>une grande quantité de paquets</b> pourtant <b>déjà arrivés</b> intègres.<br />
    Le protocole à <b>fenêtre glissante</b> <em>SR</em> (<b>Selective Repeat</b>) évite les 
    retransmissions inutiles et demandent à l'expéditeur de ne retransmettre <b>que</b> les paquets 
    susceptibles d'avoir été perdus ou corrompus lors de la transmission. Cela implique que le 
    destinataire envoie un <b>ACK</b> pour <b>chaque paquet</b> correctement reçu.<br />
    <br />
    Comme dans <b>GBN</b> (<b>Go-Back N</b>), une fenêtre permet de limiter le nombre de paquets en 
    attente de confirmation. En revanche certains paquets de cette fenêtre auront <b>déjà</b> fait 
    l'objet d'un accusé de réception. Le destinataire renvoie un accusé pour chaque paquet valide 
    qu'il reçoit, qu'il soit dans l'ordre ou non, et stocke dans un tampon ceux qui sont encore 
    temporairement hors séquence (notons que ce tampon ne dépassera jamais la taille de la fenêtre 
    d'envoi de l'expéditeur).<br />
    Afin d'éviter les problèmes de confusions avec les numéros de séquence, la quantité de numéros 
    disponible doit être <b>au moins deux fois plus grande</b> que la taille de la fenêtre 
    (<code>K/2 = taille maximale</code>).
</div>



<h4 class="question">
    Quelle est la taille maximale de la fenêtre glissante <b>SR</b> (<b>Selective Repeat</b>), si 
    les trames sont numérotées modulo k ? Pourquoi ?
</h4>
<div class="answer">
    On ne peut pas utiliser une fenêtre aussi grande que pour le <b>GBN</b> (<b>Go-Back N</b>). 
    $$Taille_{max} = \frac{\text{Nbr de numéro de packets}}{2} = \frac{K}{2}$$
    Car il ne faut pas qu'un nombre de la fenêtre de l'émetteur corresponde à un nombre de la 
    fenêtre du récepteur, mais d'un autre rang.<br />
    Exemple (fenêtre de taille 3 avec une numérotation de 4 chiffres):<br />
    <pre>Èmetteur |0 1 2| 3 0 1 2 &rarr; récepteur 0 1 2 |3 0 1| 2</pre>
    Le récepteur a reçu les paquets <b>(0, 1, 2)</b> et attend donc les paquets <b>(3, 0, 1)</b>, 
    mais l'émetteur n'a pas reçu les <b>ACK</b>, il considère donc que les paquets <b>(0, 1, 2)</b> 
    n'ont pas été reçu, et lors du time-out, il les renverra.<br />
    Mais le récepteur prendra le paquet 0 qu'il va recevoir pour celui qu'il attend, et non pour 
    celui qu'il a déjà reçu.<br />
    <br />
    <p> <!-- C'est pas plutôt le buffer qui est lié à la taille de la fenêtre... -->
        <u>Remarque:</u> le débit étant lié à la taille de la fenêtre, il faut alors choisir un 
        grand nombre de numéro de paquets.
    </p>
</div>



<h4 class="question">
    Dans les protocoles à fenêtre glissante de type « <b>Selective Repeat</b> », quelles sont les 
    relations qui sont satisfaites à tout instant entre les quatre valeurs suivantes: les bords 
    inférieurs et supérieurs des fenêtres de l'émetteur et du récepteur ? Justifiez.
</h4>
<div class="answer">
    Quelque soit le protocole:<br />
    <pre>Taille maximale de la fenêtre de l'envoyeur(Ns) + Taille maximale de la fenêtre du receveur(Nr) ≤ K</pre>
    Pour le selective repeat, <code>Nr = Ns ≤ K/2</code>.<br />
    <br />
    On peut donc conclure que le bord inférieurs du récepteur aura au maximum une valeur en plus 
    que le bord suppérieur de la fenêtre émetrice.  On peut également conclure que le bord inférieur
    du récepteur ne pourra jamais être avant le bord inférieur de l'envoyeur.<br />
    Cas limite avec une fenêtre de taille 3:<br />
    <pre><code>
                                      Envoyeur                        Récepteur
    Initial:                    |<b>0  1  2</b>| 3  4  5  6     &rarr;      |<b>0  1  2</b>| 3  4  5  6

    Récepteur le plus avancé:   |<b>0  1  2</b>| 3  4  5  6     &rarr;       0  1  2 |<b>3  4  5</b>| 6

    Cas impossible:              0  1  2 |<b>3  4  5</b>| 6     &rarr;       0  1 |<b>2  3  4</b>| 5  6</code></pre>
    
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            Donnez 4 éléments majeurs des protocoles "<b>Go-Back-N</b>" et "<b>Selective Repeat</b>" 
            qui permettent de les différencier.
        </li>
        <li>
            Pour chacun de ces éléments pris indépendamment, indiquez si <b>TCP</b> s'apparente 
            d'avantage à l'un d'eux. Expliquez.
        </li>
        <li>Quelle optimisation supplémentaire, liée 
            au contrôle d'erreur, <b>TCP</b> y apporte-t-il ?
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
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
                        Il existe un buffer du côté récepteur, on ne détruit donc pas les paquets 
                        arrivés "en avance"
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
                        On renvoie tout les paquets à partir de celui sans <b>ACK</b>
                    </td>
                    <td>
                        On renvoie que les packets sans <b>ACK</b>
                    </td>
                </tr>
            </tbody>
        </table>
        <br />
    </li>
    <li>
        La technique de fiabilité de <b>TCP</b> est un mixte entre la technique <b>GBN</b> 
        (<b>Go-Back N</b>) et la technique <b>SR</b> (<b>Selective Repeat</b>).<br />
        Dans la première technique, on reprends la méthode d'un seul timer (associé au dernier 
        paquet) ainsi que les <b>ACK</b> cumulatif (ACK(6) signifie qu'on ACK aussi 5 et les autres 
        précédents).<br />
        Cependant dans le <b>GBN</b> (<b>Go-Back N</b>) on renvoyait toute la fenêtre après le 
        <b>ACK</b> de retour, ici on reprend, dans la deuximème technique, le revoie seulement du 
        dernier segment manquant et on verra avec les <b>ACK</b> futurs si il en manquait d'autres.<br />
        <br />
    </li>
    <li>
        L'optimisation "Fast retransmit" peut être mis en place, elle permet à <b>TCP</b> de 
        détecter avant le timer qu'un segment est perdu. En effet, si on envoie les paquets par 
        rafale, et qu'on recoit en retour plusieurs fois un même <b>ACK</b>, cela veut dire que 
        plusieurs segments postérieurs sont arrivé avant le segment lié à cet <b>ACK</b>. Ce 
        segment est donc soit perdu, corrompu ou en retard.<br />
        Par conventation, on considère que le segment est perdu après qu'on ai reçu trois 
        <b>ACK</b> identiques.
    </li>
</ol>
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            En première approximation, quels sont les 3 paramètres qui influencent le débit d'une 
            connexion <b>TCP</b> ? Expliquez.
        </li>
        <li>
            <b>TCP</b> garantit-il un partage équitable des ressources du réseau par les différentes
             connexions ? Pourquoi ?
         </li>
     </ol>
 </h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Il y a 3 paramètres qui peuvent entraîner des pertes et ainsi une baisse momentané du débit :
            <ul>
                <li>
                    <b>p</b>: <em>Taux d'erreur</em>;
                </li>
                <li>
                    <b>W</b>: <em>Fenêtre de congestion</em> (mesuré en <b>MSS</b> 
                    (<em>Max Segment Size</em>));
                </li>
                <li>
                    <b>RTT</b>: <em>Round-Trip Time</em>.
                </li>
            </ul><br />
            La formule de l'efficacité est $\sqrt{\frac{3}{2}}\frac{MSS}{RTT}$ et donc est meilleure 
            avec des MSS plus gros et des petits RTT. Des packets plus gros dont "l'aller-retour" 
            est rapide.<br />
            <br />
        </li>
        <li>
            Quand <b>TCP</b> est en concurrence avec <b>UDP</b>, <b>TCP</b> va ralentir mais 
            <b>UDP</b> ne va pas réduire son trafic. <b>TCP</b> va donc être désavantagé par rapport 
            à <b>UDP</b>.<br />
            On remarque également avec <b>TCP</b> qu'aux goulets d'étranglement, si on a 2 
            connections <b>TCP</b> concurrentes avec les même <b>RTT</b> et qu'une a commencée avant 
            l'autre, elles vont se partager la bande passante de manière de plus en plus équitable 
            au fur et à mesure que le temps avance. Si par contre elles n'ont pas le même <b>RTT</b>, 
            celle qui aura le plus petit <b>RTT</b> sera avantagée. C'est à la fois une bonne chose 
            et une mauvaise chose. En effet, si on regarde au niveau locale, les ressources ne sont 
            pas réparties équitablement (mauvaise chose) mais au niveau globale, la connexion avec 
            un <b>RTT</b> plus grand sera passée par plus de noeuds puisqu'elle vient de plus loin 
            et donc aura consommé plus de ressources sur d'autres noeuds que la connexion avec 
            un petit <b>RTT</b>.
        </li>
    </ol>
</div>



<h4 class="question">
    10 processus clients communiquent simultanément avec un processus serveur attaché au 
    <b>port</b> 8000.
    <ol class="alphabet">
        <li>
            Combien de sockets vont être ouverts par le serveur si les processus communiquent par 
            <b>UDP</b> ?  Pourquoi ?
        </li>
        <li>
            Même question s'ils communiquent par <b>TCP</b>.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <b>UDP</b> ne crée pas de connexion persistante. L'emetteur ne fait que créer un packet 
            en y attachant l'<b>IP</b> ciblé, le <b>port</b> ciblé ainsi que ses propres coordonnées 
            puis l'envoie. Il ne se soucie pas si il atteint le recepteur ou non.<br />
            Ainsi le processus serveur attaché au <b>port</b> 8000 recevra (si il n'y a aucune perte) 
            les 10 messages envoyés par les processus clients. Du coup 1 seul socket sera ouvert.<br />
            <br />
        </li>
        <li>
            <b>TCP</b> crée une connexion persistante, du coup il faut ouvrir et réserver un socket 
            pour chaque processus client.<br />
            Du coup <b>10 sockets</b> seront ouverts. Mais il ne faut pas oublier le socket qui sert 
            à écouter et à accepter les nouvelles connexions. Donc c'est un total de <b>11 sockets</b> 
            qui seront ouverts.
        </li>
    </ol>
</div>

<h4 class="question">
    <ol class="alphabet">
        <li>
            Comment l'émetteur <b>TCP</b> détecte-t-il une congestion ?
        </li>
        <li>
            Décrivez le mécanisme de contrôle de congestion de <b>TCP</b>.
        </li>
        <li>
            Quelle distinction <b>TCP</b> fait-il entre congestion légère et congestion sévère ?  
            Comment réagit-il dans chaque cas ?
        </li>
        <li>
            Si on néglige les effets du contrôle de flux, ce contrôle de congestion détermine 
            largement le débit moyen d'une connexion <b>TCP</b>. Quand plusieurs connexions 
            <b>TCP</b> sont en compétition, se partagent-elles la bande passante disponible de 
            façon équitable ? Expliquez.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <b>TCP</b> peut distinguer 2 types de <b>congestions</b>:
            <ul>
                <li>
                    Soit il reçoit 3 <b>ACK</b>s consécutifs pour le même numéro de séquence (donc 
                    un des paquets intermédiaire a été perdus, mais les suivants sont passés: 
                    <b>faible congestion</b>)
                </li>
                <li>
                    Soit un <b>ACK</b> n'arrive pas dans le temps imparti (timeout, beaucoup de 
                    paquets perdus: <b>congestion sévère</b>).
                </li>
            </ul>
            <br />
        </li>
        <li>
            Au démarage de la transmission, <b>TCP</b> envoie les données avec une fenêtre de 
            taille 1 <b>MSS</b> (<b>Maximum Segment Size</b>), correspondant au nombre de paquets 
            qui peuvent être en parcourt simultanément. La taille de la fenêtre est doublée à chaque 
            itération (en incrémentant la taille à chaque <b>ACK</b> reçu), de sorte qu'elle a une 
            <b>croissance exponentielle</b>.<br />
            <ul>
                <li>
                    S'il détecte une <b>faible congestion</b>, il divise la taille de la fenêtre par 
                    deux et change de mode pour incrémenter la taille de la fenêtre à chaque 
                    itération (+1 pour chaque fenêtre totalement envoyée) pour adopter une 
                    <b>croissance linéaire</b>. Il approche ainsi <b>dichotomiquement</b> la taille 
                    moyenne de fenêtre optimale (c'est à dire le nombre de paquets en parcourt, et 
                    donc la vitesse d'envoi).<br />
                </li>
                <li>
                    S'il détecte une <b>congestion sévère</b>, il réduit la taille de fenêtre à 1 et 
                    recommence en mode de <b>croissance exponentiel</b>. Il peut éventuellement 
                    repasser en mode de <b>croissance linéaire</b> lorsqu'il a atteint la moitié de 
                    la taille de fenêtre qui a provoqué un timeout (puisque doubler sa taille 
                    provoquera probablement de nouveau un timeout).
                </li>
            </ul>
            <br />
        </li>
        <li>
            Voir (a) et (b).<br /><br />
        </li>
        <li>
            Sachant que le timeout est calculé à partir du <b>RTT</b>, deux sessions <b>TCP</b> en 
            compétition pour la même connexion approcheront toujours la vitesse optimale pour leurs 
            <b>RTT</b>.<br />
            <b>TCP</b> répartira la connexion de façon équitable en ce sens que chaque session 
            utilisera une bande passante inversément proportionelle à son <b>RTT</b>, évitant la 
            retransmission en bloc de paquets inutiles sur des connexions trop lentes.
        </li>
    </ol>
</div>




<h4 class="question">
    <ol class="alphabet">
        <li>Expliquez la différence entre un simple ordinateur et un routeur</li>
        <li>Expliquez le principe d'une table de routage</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Un <b>routeur</b> est un matériel de la <b>couche 3</b> qui relie plusieurs réseaux. 
            Sachant qu'une carte réseau ne peut être relié qu'à un seul réseau; il doit donc avoir 
            une interface dans chacun des réseaux auquel il est connecté. C'est donc simplement une 
            machine avec plusieurs interfaces (plusieurs cartes réseau), chacune reliée à un réseau. 
            Son rôle va être d'<b>aiguiller les paquets reçus</b> entre les diférents réseaux.<br />
            Il y a enfaite peu de chose qui différencie un simple ordinateur d'un routeur. La 
            principale différence est qu'un routeur <b>accepte de relayer</b> des paquets qui ne lui 
            sont <b>pas destiné</b> alors qu'une simple machine les jettera à la poubelle.<br />
            <br />
        <li>
            Imaginons que nous sommes un routeur ayant comme adresse MAC l'adresse 
            <code>00:11:22:33:44:55</code> et comme adresse IP <code>192.168.0.1/24</code>. Nous 
            recevons la trame suivante (dans laquelle nous indiquons aussi l'en-tête de couche 3) 
            sur une de nos interfaces:
            <table>
                <thead>
                    <tr>
                        <th>MAC <sub>Next</sub></th>
                        <th>MAC <sub>Prev</sub></th>
                        <th></th>
                        <th></th>
                        <th>IP <sub>SRC</sub></th>
                        <th>IP <sub>DST</sub></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00:11:22:33:44:55</td>
                        <td>01:2B:45:56:78:ED</td>
                        <td>IP</td>
                        <td>???</td>
                        <td>10.0.0.1</td>
                        <td>136.42.0.28</td>
                        <td>Données à envoyer</td>
                        <td>CRC</td>
                    </tr>
                </tbody>
            </table>
                
            Une adresse MAC est propre à un réseau local (règle couche 2), on ne connait donc pas 
            l'adresse mac source (<code>MAC<sub>SRC</sub></code>) ni l'adresse mac de destination 
            (<code>MAC<sub>DEST</sub></code>). Ici, la trame arrive sur l'interface de notre 
            machine ayant pour adresse IP <code>192.168.0.1/24</code>. Son réseau ne contient pas 
            d'adresse UP <code>10.0.0.1</code> = la machine <code>10.0.0.1</code> ne fait pas partie 
            du réseau. L'adresse <code>MAC<sub>SRC</sub></code> que nous voyons ici est celle du 
            dernier routeur qui nous a envoyé la trame.<br />
            <br />
            <u>Que se passe-t-il quand notre machine reçoit cette trame ?</u><br />
            La carte réseau recoit la trame et lit l'adresse MAC <code>00:11:22:33:44:55</code>. 
            C'est la sienne. Il lit la suite pour voir qui l'envoie et à quel protocole de couche 3 
            que la couche 2 doit l'envoyer. Il est inscrit IP, donc il envoie la trame en enlevant 
            l'en-tête Ethernet, ce qui donne le datagramme IP, à la couche 3 et plus précisément au 
            protocole IP.<br />
            La couche 3, donc le protocole IP, lit l'ensemble des informations de l'en-tête IP, 
            puisqu'il sait maintenant que ce datagramme lui est destiné. Et là, l'adresse IP de 
            destination n'est pas la sienne. Ce qui est souvent normal pour un routeur de recevoir 
            un message qui ne lui est pas destiné.<br />
            Son role va maintenant être d'aiguiller le datagramme vers sa destination. Il possède 
            une table de routage dans laquelle est indiqué le prochain routeur auquel il doit 
            envoyer le datagramme pour que celui-ci arrive à sa destination. La table de routage va 
            donc lister les routeurs auxquels il peut envoyer son datagramme pour joindre une 
            destination donnée. La destination donnée ne va pas être une machine, mais un réseau.<br />
            <br />
            Le principe est d'avoir d'un côté la liste des réseaux que l'on veut joindre, et de 
            l'autre la liste des routeurs à qui nous devons envoyer le datagramme pour joindre les 
            réseaux. On appelle aussi ce routeur une passerelle.<br />
            <table>
                <thead>
                    <tr>
                        <th>Destination</th><th>Gateway</th><th>Masque</th><th>Flags</th><th>Iface</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td>
                    </tr>
                    <tr>
                        <td>124.178.240.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth1</td>
                    </tr>
                    <tr>
                        <td>124.178.48.0</td><td>*</td><td>255.255.240.0</td><td>U</td><td>eth0</td>
                    </tr>
                    <tr>
                        <td>124.178.64.0</td><td>*</td><td>255.255.224.0</td><td>U</td><td>eth2</td>
                    </tr>
                    <tr>
                        <td>124.178.96.0</td><td>124.178.64.2</td><td>255.255.224.0</td><td>UG</td><td>eth2</td>
                    </tr>
                    <tr>
                        <td>default</td><td>124.178.240.3</td><td>0.0.0.0</td><td>UG</td><td>eth1</td>
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            Il est important de bien comprendre et retenir ce qui précède, car le routage est la 
            base du fonctionnement d'Internet. Attention, toute machine connectée à un réseau possède 
            une table de routage, même une imprimante, un téléphone, ou un PC,...
        </li>
    </ol>
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            Expliquez l'établissement de connexion « 3-way handshake » utilisé dans le protocole de 
            transport <b>TCP</b>, en indiquant les paramètres importants présents dans les échanges 
            et leurs rôles.
        </li>
        <li>
            Expliquez avec l'aide d'un exemple pourquoi un « 2-way handshake » ne serait pas suffisant.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Comme son nom l'indique, le <b>3-way handshake</b> se déroule en trois étapes:
            <ol>
                <li>
                    <b>SYN</b> (<em>synchronized</em>):<br />
                    Le client qui désire établir une connexion avec un serveur va envoyer un premier 
                    paquet <b>SYN</b> au serveur. Le numéro de séquence de ce paquet est un nombre 
                    aléatoire A.<br />
                    <br />
                </li>
                <li>
                    <b>SYN-ACK</b> (<em>synchronize-acknowledge</em>):<br />
                    Le serveur va répondre au client à l'aide d'un paquet <b>SYN-ACK</b>. Le numéro 
                    du <b>ACK</b> est égal au numéro de séquence du paquet précédent (<b>SYN</b>) 
                    incrémenté de un (A + 1) tandis que le numéro de séquence du paquet 
                    <b>SYN-ACK</b> est un nombre aléatoire B.<br />
                    <br />
                </li>
                <li>
                    <b>ACK</b> (<em>acknowledge</em>):<br />
                    Pour terminer, le client va envoyer un paquet <b>ACK</b> au serveur qui va 
                    servir d'accusé de réception. Le numéro de séquence de ce paquet est défini 
                    selon la valeur de l'acquittement reçu précédemment par exemple A + 1 et le 
                    numéro du <b>ACK</b> est égal au numéro de séquence du paquet précédent 
                    (<b>SYN-ACK</b>) incrémenté de un (B + 1).
                </li>
            </ol>
            <br />
            Une fois le <b>3-way handshake</b> effectué, le client et le serveur ont reçu un 
            acquittement de la connexion.  Les étapes 1 et 2 définissent le numéro de séquence pour 
            la communication du client au serveur et les étapes 2 et 3 définissent le numéro de 
            séquence pour la communication dans l'autre sens.<br />
            Une communication full-duplex est maintenant établie entre le client et le serveur.<br />
            <br />
        </li>
        <li>
            Le <b>2-way handshake</b> n'est pas suffisant car on saute l'etape 2 du 
            <b>3-way handshake</b>. Si par exemple, un Client A veut parler avec un serveur B, il 
            faut que B sache que A peut entendre ce qu'il dit. Car dans le <b>2-way handshake</b>, 
            A envoi à B et B répond à A. Mais B ne sait pas si son message est reçu par A.<br />
            Il n'y a donc également aucune confirmation que le client A ai bien pris le bon numéro
            de packet pour le serveur B.
        </li>
    </ol>
</div>


<h4 class="question">
    <ol class="alphabet">
        <li>Décrivez l'architecture générique d'un routeur et le rôle de chaque composant.</li>
        <li>Comment peut-on perdre des paquets dans les <b>ports</b> d'entrée ?</li>
        <li>Comment peut-on perdre des paquets dans les <b>ports</b> de sortie ?</li>
        <li>Qu'est-ce que le blocage HOL ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>Quatre éléments principaux peuvent être identifiés dans l'architecture d'un routeur :
            <ul>
                <li>
                    <b>Buffer d'entrée</b>:<br />
                    Prend en charge les fonctionnalités de la couche physique et de la couche 
                    liaison. Il assure une fonction de consultation et d'acheminement des paquets 
                    entrant dans la matrice de commutation vers le <b>port</b> de sortie approprié.<br />
                    <br />
                </li>
                <li>
                    <b>Buffer de sortie</b>:<br />
                    Emmagasine les paquets qu'il reçoit de la part de la matrice de commutation. 
                    Assure les fonctionnalités inverses de la couche liaison et de la couche physique.<br />
                    <br />
                </li>
                <li>
                    <b>Matrice de commutation</b>:<br />
                    Relie les <b>ports</b> d'entrée et les <b>ports</b> de sortie.<br />
                    <br />
                </li>
                <li>
                    <b>Processeur de routage</b>:<br />
                    Chargé de l'exécution des protocoles de routage, de la mise à jour des 
                    informations et des tables.
                </li>
            </ul>
            <br />
        </li>
        <li>
            Le point le plus problématique est le fait que les routeurs doivent opérer à des 
            vitesses élevées, impliquant des millions de consultations par seconde; on souhaite en 
            effet que l'opération de consultation soit plus rapide que le temps qu'il faut au 
            routeur pour recevoir un nouveau paquet. Dès que le <b>port</b> de sortie a été 
            identifié, le paquet peut entrer dans la matrice de commutation. Cependant un paquet 
            peut se voir refuser temporairement l'accès si elle est occupée à traiter des paquets 
            qui ont été reçus sur d'autres liaisons d'entrée. Il est alors placé en file d'attente 
            sur son <b>port</b>. Si la matrice de commutation n'est pas assez rapide, et du coup à 
            mesure de l'augmentation de ces files, le risque de perte de paquets augmente.<br />
            <br />
        </li>
        <li>
            Si aucun ou peu de phénomène de mise en attente ne se produit à l'entrée, mais que tous 
            les paquets venaient à être dirigés vers le même <b>port</b> de sortie, il serait très 
            rapidement saturé. Un gestionnaire de paquets doit déterminer quel paquet de la file 
            doit être transmis. Cette règle est généralement la règle <b>FIFO</b> 
            (<b>First In First Out</b>).<br />
            <br />
        </li>
        <li>
            <b>HOL</b> (<b>Head Of the Line blocking</b>) signifie que le routeur n'a pas de vue 
            globale des buffer input, il ne prend donc en compte que le premier paquet du buffer. 
            Si deux paquets doivent aller au même <b>port</b> de sortie, un des paquets se retrouve 
            en attente avec tous ceux qui le suivent, même si ceux-ci doivent aller à un <b>port</b> 
            actuellement libre.
        </li>
    </ol>
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            Décrivez le protocole <b>CSMA</b>.
        </li>
        <li>
            Pourquoi et comment a-t-il été amélioré ?
        </li>
        <li>
            Citez les paramètres qui caractérisent un réseau <b>CSMA</b>. Quelle relation entre ces 
            paramètres faut-il viser pour que le réseau <b>CSMA</b> ait des performances 
            acceptables ? Expliquez.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            La technologie <b>CSMA</b> (<b>Carrier Sense Multiple Access</b>) est un ensemble de 
            protocoles qui permet à plusieurs machines d'utiliser un même média de communication. 
            Celle-ci vérifie que le support est disponible avant de commencer l'envoi d'une trame.<br />
            Dans la version simple de <b>CSMA</b>, une machine ne peut pas transmettre si elle 
            détecte de l'activité sur le média, elle attend la fin de la transmission. Cependant, 
            en raison du temps de propagation, surtout sur des longues distances, deux machines 
            pourraient considérer le bus comme libre et commencer à écrire en même temps, pour se 
            retrouver en collision quelques instants après. Il est à noter qu'il est pas possible 
            d'éliminer les collisions sur un bus mais il est possible de développper une méthode 
            pour les limiter et réussir à partager le bus entre plusieurs machines.
            <figure>
                <img src="images/info-f303/collision" alt="Illustation d'une collision" />
                <figcaption>Illustation d'une collision</figcaption>
            </figure>
            <br />
        </li>
        <li>
            La technologie <b>CSMA</b> a été amélioré par différents modes d'accès: 
            <ul>
                <li>
                    <b>CSMA persistant</b>:<br />
                    Consiste à toujours écouter le canal, et on émet dedans dès qu'il est libre.<br />
                    <br />
                </li>
                <li>
                    <b>CSMA non-persistant</b>:<br />
                    Dans ce mode chaque station vérifie régulièrement que le média soit disponible. 
                    Si ce n'est pas le cas, elle attend un temps <b>aléatoire</b> pour revérifier si 
                    le média est enfin libre. Enfin, lorsque le média n'est pas occupé, la station 
                    transmet ses informations immédiatement. Cette approche réduit les collisions 
                    mais le temps d'attente initial peut être très long.<br />
                    <br />
                </li>
                <li>
                    <b>CSMA p-persistant</b>:<br />
                    Si une station souhaite émettre et que le canal est libre, elle émet avec une 
                    probabilité <code>p</code>. Sinon, elle attend un intervalle de temps avant de 
                    retenter avec la même probabilité <code>p</code>.<br />
                    En cas de collision, la station attend un temps aléatoire avant de recommencer 
                    la procédure.  Cela permet d'éviter que deux stations se jettent sur le canal 
                    en même temps.<br />
                    La difficulté est d'avoir un bon <code>p</code>: trop bas et le délai augmente, 
                    trop haut et on a plein de collisions.
                </li>
            </ul>
            <br />
        </li>
        <li>
            Pour que <b>CSMA</b> ait des performances acceptables, il faut prendre en compte:
            <ul>
                <li>$B$ (la capacité en bits/s du canal)</li>
                <li>$F$ (la taille des trames)</li>
                <li>$L$ (la taille du canal)</li>
                <li>$c$ (la vitesse de propagation)</li>
                <li>$tau = \frac{L}{c}$ (délai de propagation)</li>
                <li>$T = \frac{F}{B}$ (délai de transmission)</li>
            </ul>
            <code>tau</code> est équivalent à la durée pendant laquelle une collision peut survenir. 
            Après un temps <code>tau</code>, le canal est réservé implicitement pendant 
            <code>T-tau</code> secondes, car s'il n'y a pas eu de collision après un temps 
            <code>tau</code>, tout le monde est au courant que le canal est pris et il n'y a plus de 
            collision possible. Les performances du réseau sont donc meilleures quand 
            $$a = \frac{tau}{T} = \frac{BL}{cF}$$
            est très petit, donc quand la période dangereuse pendant lesquelles des collisions 
            peuvent survenir est très petite par rapport au temps total d'une trame. Il faut donc 
            travailler avec de grandes trames, réduire la taille du réseau ou réduire le débit.
        </li>
    </ol>
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            Qu'est-ce que le <b>CSMA/CD</b> ?  En quoi améliore-t-il le <b>CSMA</b> ?
        </li>
        <li>
            Quelle contrainte le <b>CSMA/CD</b> introduit-il par rapport au <b>CSMA</b> ? Pourquoi ?
        </li>
        <li>
            IEEE 802.3 (plus communément appelé <b>Ethernet</b>) est un protocole de type 
            <b>CSMA/CD</b> dont la méthode d'accès a été améliorée. Quelle est cette amélioration ?
        </li>
        <li>
            Expliquez pourquoi, si l'on veut garder le même format de trame, la méthode 
            <b>CSMA/CD</b> exige de raccourcir le réseau pour atteindre des débits plus élevés. 
            Il est toutefois possible de ne pas respecter cette longueur maximale du réseau, qui 
            devient très contraignante à haut débit. Dans quelles conditions ?
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            La technologie <b>CSMA</b> (<b>Carrier Sense Multiple Access</b>) est un ensemble de 
            protocoles qui permet à plusieurs machines d'utiliser un même média de communication. 
            Celle-ci vérifie que le support est disponible avant de commencer l'envoi d'une trame.<br />
            Dans la version simple de <b>CSMA</b>, une machine ne peut pas transmettre si elle 
            détecte de l'activité sur le média, elle attend la fin de la transmission. Cependant, 
            en raison du temps de propagation, surtout sur des longues distances, deux machines 
            pourraient considérer le bus comme libre et commencer à écrire en même temps, pour se 
            retrouver en collision quelques instants après. Il est à noter qu'il est pas possible 
            d'éliminer les collisions sur un bus mais il est possible de développper une méthode 
            pour les limiter et réussir à partager le bus entre plusieurs machines.
            <figure>
                <img src="images/info-f303/collision" alt="Illustation d'une collision" />
                <figcaption>Illustation d'une collision</figcaption>
            </figure>
            Le <b>CSMA/CD</b> rajoute la contrainte <b>Collision Detection</b>: si, lorsqu'un bit a 
            été écrit, l'état mesuré est différent, la machine considère qu'il y a collision et 
            arrête immédiatement d'écrire sur le bus.  Elle attend ensuite pour un temps déterminé 
            aléatoirement afin que deux machines en collision ne recommencent pas à émettre en même 
            temps.<br />
            Son objectif est de limiter le nombre de collisions en organisant le droit à la parole. 
            L'idée est de mettre en place une règle qui permettrait de n'avoir presque plus de 
            collisions.<br />
            <br />
        </li>
        <li>
            Le <b>CSMA/CD</b> rajoute la contrainte <b>Collision Detection</b> car il est possible 
            qu'en raison du temps de propagation, surtout sur des longues distances, deux machines 
            pourraient considérer le bus comme libre et commencer à écrire en même temps.<br />
            <br />
        </li>
        <li>
            <b>Ethernet</b> repose sur un algorithme d'accès multiple <b>CSMA/CD</b> dont la méthode 
            d'accès a été améliorée. Pour que l'émetteur détecte une collision, il doit être en train 
            d'émettre. Il faut donc que la trame soit suffisament longue pour que le délai soit 
            suffisament long et que l'emetteur entend la collision. Sinon l'émetteur transmet tout 
            puis n'entend pas qu'il a eu de collision. Sur un réseau de 10 Mbps et 2.5 km, il faut 
            qu'une trame fasse au moins 250 bits. Ethernet a choisi 512 bits minimum. Pour encore 
            améliorer les choses, l'émetteur attend de manière exponentielle (entre <code>0</code> 
            et <code>2<sup>collisions-1</sup></code> temps de transmission de 512 bits) quand il détecte 
            une collision. Ainsi, si les collisions sont rares, on n'attend pas trop. S'il y en a 
            plein, on attend plus longtemps pour augmenter l'efficacité. Quand une collision survient, 
            l'émeteur envoie un <b>jam</b>: un signal fort histoire que tout le monde sur la ligne 
            soit au courant de la collision.<br />
            <br />
        </li>
        <li>
            $F$ : Frame Size<br />
            $B$ : Bandwidth<br />
            $L$ : lngueur du canal<br />
            $F_{min} : \dfrac{2BL}{C} = \pm BL * 10^{-8}$ bits<br />
            <br />
            Si <code>F</code> est plus petit, le délai de transmission est plus court et donc on 
            peut envoyer plus de trames et éviter des collisions. <br />
            Pour éviter cela, efficacité du réseau = $\dfrac{1}{1+2BL+\dfrac{e}{CF}}$<br />
            <br />
            On doit donc augmenter la bande passante ou la distance.
        </li>
    </ol>
</div>



<h4 class="question">
    On ne peut pas dire que les commutateurs <b>Ethernet</b> exécutent un protocole de routage (au 
    sens de la couche 3), mais ils construisent toutefois des tables d'acheminement comme si un 
    protocole de routage était à l'oeuvre. Expliquez comment ces tables sont construites, y compris 
    quand plusieurs commutateurs sont inter-connectés.
</h4>
<div class="answer">
    Le commutateur <b>construit donc dynamiquement</b> une table qui associe des adresses <b>MAC</b> 
    avec les ports correspondant. Lorsqu'il reçoit une trame destinée à une adresse dans cette 
    table, le commutateur renvoie la trame sur le port correspondant. Si port destination = port 
    émetteur, la trame n'est pas transmise. Si l'<b>adresse du destination est inconnue</b> dans la 
    table, alors la trame est traitée comme un <b>broadcast</b>, c'est-à-dire qu'elle est transmise 
    à tous les ports du commutateur sauf celui de réception.
</div>


<h4 class="question">
    <ol class="alphabet">
        <li>Décrivez le protocole ARP.</li>
        <li>Expliquez pourquoi la table ARP est necessaire.</li>
        <li>Décrivez le déroulement de A à Z d'une requête ARP.</li>
        <li>A quel couche appartient ce protocole ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            La machine A veut communiquer avec la machine B. S'il regarde sa table de routage, il 
            sait qu'il doit passer son message par la passerelle par défault pour joindre B. Donc 
            pour lui envoyer la trame, il doit connaître son adresse MAC. Or, il ne la connait pas.<br />
            Il faudrait pouvoir lui demander son adresse MAC mais pour lui demander il faudrait 
            connaître son adresse MAC. C'est pour cela que le protocole ARP a été mis en place. Il 
            peut envoyer un message à l'adresse de broadcast en demandant "est-ce que <code>IP</code> 
            peut m'envoyer son adresse MAC ?"  Grâce à l'adresse de broadcast ce message sera envoyé 
            à tout le monde, et donc la cible le recevra et pourra lui renvoyer son adresse MAC.<br />
            ARP est donc un protocole qui permet d'associer une adresse MAC de couche 2 à une 
            adresse IP de couche 3.<br />
            <br />
        </li>
        <li>
            Les broadcasts risquent de saturer le réseau à chaque fois que l'on veut envoyer une 
            information. C'est pour cela qu'on a mis aussi en place la table ARP. Pour éviter 
            d'avoir à renvoyer en permanence des broadcasts ARP à chaque fois que l'on veut 
            envoyer une information à une machine, nous allons utiliser une table qui va garder les 
            associations adresses IP <-> Adresses MAC pendant un court moment.<br />
            Ainsi, si j'envoie un paquet à ma passerelle, je noterai son adresse MAC dans ma table 
            ARP et la prochaine fois que je voudrai lui parler, je n'aurai plus à envoyer de 
            broadcast sur le réseau.<br />
            <br />
            La table ARP va donc associer adresse <b>IP et adresse MAC</b> correspondante. Les 
            informations contenues dans la table ARP ont une durée de vie limitée. En gros, une 
            valeur va rester environ deux minutes dans la table avant d'être effacée s'il n'y a pas 
            eu de dialogue avec cette adresse entre-temps. C'est pour cela que l'on dit que la table 
            ARP est <b>dynamique</b>. Elle évolue au cours du temps en fonction des machines avec 
            lesquelles il dialogue.<br />
            <br />
        </li>
        <li>
            Exemple: nous sommes la machine <code>192.168.0.1</code> et voulons envoyer un message 
            à la machine <code>192.168.1.2</code>.<br />
            Nous savons que nous voulons joindre d'abord le routeur <code>192.168.0.254</code>, mais 
            ne connaissons pas son adresse MAC.<br />
            <br />
            C'est là que le protocole ARP entre en jeu:
            <ul>
                <li>
                    On regarde d'abord dans la table ARP locale si on possède l'association entre 
                    l'adresse IP <code>192.168.0.254</code> et son adresse MAC;
                </li>
                <li>
                    Si on la possède, on envoie l'information et c'est terminé;
                </li>
                <li>
                    Sinon, on envoie un broadcast ARP sur le réseau;
                </li>
                <li>
                    La machine <code>192.168.0.254</code> va nous répondre avec son adresse MAC;
                </li>
                <li>
                    Nous allons noter cette adresse MAC dans notre table ARP;
                </li>
                <li>
                    Nous allons enfin pouvoir envoyer notre information.
                </li>
            </ul>
            Voilà comment font les machines pour passer d'une adresse IP à joindre à l'adresse MAC 
            correspondante: grâce au protocole ARP !<br />
            <br />
        </li>
        <li>
            Le protocole ARP est un protocole de couche 2 <b>et</b> 3 !  Il manipule des 
            informations de couche 2: les adresses MAC, et des informations de couche 3: les 
            adresses IP.<br />
            Ainsi, on dit que ce protocole est "à cheval" entre ces deux couches.
        </li>
    </ol>
</div>




<h4 class="question">
    Un chercheur connecte son ordinateur portable à un commutateur <b>Ethernet</b> de son 
    département. Il démarre son browser pour afficher la page web de <code>www.google.com</code>.
    <ol class="alphabet">
        <li>
            Identifiez les protocoles mis en oeuvre, et dans l'ordre chronologique, entre le 
            moment où l'ordinateur se connecte et le moment où la page d'accueil de Google s'affiche.
        </li>
        <li>
            Précisez au passage le rôle de chaque protocole et décrivez-les succinctement.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Une topologie d'exemple compreant des switches et des routeurs est utilisée. On suppose 
            que le routeur dispose d'un serveur <b>DHCP</b>
            <ol>
                <li>
                    On connecte le laptop, avec un navigateur web ouvert;
                </li>
                <li>
                    Le laptop cherche un serveur <b>DHCP</b> sur le réseau et envoie une trame 
                    <code>DHCPDISCOVER</code> comme un broadcast à l'adresse MAC 
                    <code>ff:ff:ff:ff:ff:ff</code>;
                </li>
                <li>
                    Le switch recoit la trame et la relaye en la broadcast partout;
                </li>
                <li>
                    La trame arrive au routeur, qui reconnait la demande <b>DHCPDISCOVER</b> et 
                    répond avec un <b>DHCPOFFER</b>. Il va alors proposer une adresse <b>IP</b>, 
                    un masque, une passerelle par défaut ainsi qu'un serveur <b>DNS</b>;
                </li>
                <li>
                    Le laptop apprend son adresse <b>IP</b>, l'<b>IP</b> du routeur, son serveur 
                    <b>DNS</b>, etc;
                </li>
                <li>
                    Le laptop répond par un <b>DHCPREQUEST</b>. Celui-ci est aussi envoyé en 
                    broadcast et sert à prévenir quelle offre est accepté.
                </li>
                <li>
                    Le serveur DHCP dont l'offre a été acceptée valide la demande et envoie un 
                    <code>DHCPACK</code> qui valide l'allocation du bail (on parle en effet de 
                    "bail", car cette attribution d'adresse IP a une durée limitée. Une fois expiré, 
                    il faut redemander une adresse IP);
                </li>
                <li>
                    Le laptop forge une requête <b>DNS</b>;
                </li>
                <li>
                    Le laptop envoie un <b>WHO IS</b> <b>ARP</b> pour trouver l'adresse <b>MAC</b> 
                    du routeur;
                </li>
                <li>
                    Le laptop recoit cette adresse <b>MAC</b> et le switch retient quelle est 
                    l'adresse <b>MAC</b> du laptop;
                </li>
                <li>
                    La requête <b>DNS</b> est envoyée sur le réseau et arrive au routeur;
                </li>
                <li>
                    Le routeur décapsule la trame, reconnait le paquet <b>IP</b> qu'elle contient, 
                    et voit que l'<b>IP</b> de destination est hors du subnet. Il envoie donc ce 
                    paquet sur Internet;
                </li>
                <li>
                    Le serveur <b>DNS</b> de Google finit par recevoir le paquet, et répond;
                </li>
                <li>
                    Le laptop obtient l'<b>IP</b> du serveur de Google;
                </li>
                <li>
                    Un message <b>TCP</b> SYN est envoyé à cette <b>IP</b>;
                </li>
                <li>
                    Le serveur ouvre un socket et renvoie un ACK;
                </li>
                <li>
                    Le laptop envoie alors sa requête HTTP;
                </li>
                <li>
                    Le serveur renvoie les réponses;
                </li>
                <li>
                    La page web apparait dans le navigateur web.
                </li>
            </ol>
            <br />
            <b>DHCP</b> (aves tous les protocoles des couches inférieurs) pour récupérer une 
            adresse <b>IP</b> pour se connecter. Ensuite une requète <b>DNS</b> pour savoir 
            quelle est l'adresse <b>IP</b> de Google. Mais on a besoins d'une requète <b>ARP</b> 
            pour connaitre la bonne adresse <b>MAC</b> du serveur <b>DNS</b>. Des protocoles de 
            routages (<b>RIP</b>,<b>OSPF</b>,..). On établi une connexion <b>TCP</b> avec le serveur 
            de Google. On peut finalement faire notre requête <b>HTTP</b>. On se rend compte qu'au 
            démarrage, tout un tas de protocoles sont utilisés. Les paquets sont emboités les uns 
            dans les autres, il y a plein de couches et plein d'acteurs qui intéragissent. On a 
            également vu qu'un lien est compliqué et qu'il cache plein de choses. Un lien est en 
            fait un assemblage d'élément qui se présente à <b>IP</b> comme si c'était un lien 
            physique, ne touchant pas à la couche 3 du réseau.<br />
            <br />
        </li>
        <li>
            <ul>
                <li>
                    <b>DHCP</b> (<em>Dynamic Host Configuration Protocol</em>):<br />
                    Utilisé pour l'attribution dynamique d'adresse <b>IP</b>.<br />
                    <br />
                </li>
                <li>
                    <b>DNS</b> (<em>Domain Name System</em>):<br />
                    Faire la correspondance entre les noms de domaines et les adresses <b>IP</b>.<br />
                    <br />
                </li>
                <li>
                    <b>ARP</b> (<em>Adress Resolution Protocol</em>):<br />
                    Pour connaitre l'adresse <b>MAC</b>.<br />
                    <br />
                </li>
                <li>
                    <b>Routage</b><br />
                    Permet de trouver le chemin adéquat à partir de notre machine vers celle 
                    avec laquelle on veut communiquer.<br />
                    <br />
                </li>
                <li>
                    <b>TCP</b> (<em>Transmission Control Protocol</em>):<br />
                    Protocole de transfert des données fiables orienté connexion.<br />
                    <br />
                </li>
                <li>
                    <b>HTTP</b> (<em>Hypertext Transfer Protocol</em>):<br />
                    Pour récupérer des pages web, protocole de la couche d'application.
                </li>
            </ul>
        </li>
    </ol>
</div>







<h4 class="question">
    <ol class="alphabet">
        <li>Décrivez le protocole de vecteur de distance (DV).</li>
        <li>Décrivez le protocole d'états de liens (LS).</li>
        <li>Expliquez les différences fondamentales entre ces deux protocoles.</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Le protocole de ce type ont un fonctionnement assez simple :
            <ul>
                <li>
                    Tous les routeurs du réseau transmettent à interval régulier des mises à jours 
                    sur tous leurs ports. Ces updates sont des paquets IP mit en broadcast 
                    (<code>ff:ff:ff:ff:ff:ff</code>) et contenant la quasi totalité de leur table 
                    de routage.
                </li>
                <li>
                    Tous les routeurs recoivent ces updates en comparant le contenu avec les entrées 
                    de leur table de routage.
                </li>
                <li>
                    Chaque routeur a donc l'impression d'être le centre du réseau, il ne voit qu'un 
                    chemin à empreinter vers un routeur pour atteindre un autre routeur.
                </li>
            </ul><br />
            Les vecteurs de distance présentent au moins deux inconveinients majeurs:
            <ul>
                <li>
                    La charge réseau induite par les updates est conséquent, chaque routeur met 
                    régulièrement sur le réseau l'ensemble de sa table de routage. Ce trafic est 
                    non négligeable surtout dans le cas de grands réseaux.
                </li>
                <li>
                    Le protocole n'est aussi pas très réactif avec le cas de <b>RIP</b>.
                </li>
            </ul><br />
            Les protocoles à vecteur de distances s'appuient sur l'algorithme de Ford-Bellman.<br />
            <br />
        </li>
        <li>
            Suite aux inconvéinients produits par le protocole de vecteur de distance (DV), le 
            protocole d'<b>état de lien</b> (LS) a été inventé. À l'inverse de ces protocoles de 
            vecteurs, les protocoles dits à états de lien comme <b>OSPF</b> s'appuient sur 
            l'algorithme de Dijkstra et chaque routeur connait l'<b>entièreté de la topologie du 
            réseau</b>:
            <ul>
                <li>
                    Chaque routeur transmet, comme précédemment, des updates à ses voisins mais 
                    uniquement lors d'un changemant d'état (coûts, indisponibilité, etc, ...)
                </li>
                <li>
                    Avec un algorithme implémenté, le routeur construit le réseau et le maintient 
                    à jour à chaque update.
                </li>
            </ul><br />
            Malheureusement, il y a au moins quelques inconvénients:
            <ul>
                <li>
                    Les routeurs nécéssitent des performances CPU et des capacités mémoires 
                    supérieures que pour les vecteurs de distance (plus cher!)
                </li>
                <li>
                    Ce type de protocole très réactif nécessite des réglages précis des timers de 
                    transmission car sa réactivité peut justement nuire à la stabilité du routage 
                    (dans le cas de micro-coupure de liens, on risque de changer toutes les tables 
                    et ca peut nuire au réseau).
                </li>
            </ul>
        </li>
        <li>
            <table>
                <thead>
                    <tr>
                        <th>Vecteur de distance (DV)</th>
                        <th>État de lien (LS)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Tous les routeurs du réseau transmettent à interval régulier des updates 
                            sur tous leurs ports.
                        </td>
                        <td>
                            Les routeurs n'émettent des updates que lorsque des liens changent 
                            d'état (coûts, indisponibilité, etc, ...)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            les updates émis contiennent la quasi totalité de leur table de routage
                        </td>
                        <td>
                            Les updates émis ne contiennent que des descriptions de liens ayant 
                            changé d'état, ils sont donc moins volumineux.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Les routeurs doivent attendre l'interval d'update pour recevoir 
                            l'information.
                        </td>
                        <td>
                            Les routeurs retransmettent immédiatement les mises à jour à leurs 
                            voisins, ils compilent leur table de routage après, le protocole est 
                            donc beaucoup plus réactif !
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
    </ol>
</div>

<h4 class="question">
    Décrivez le protocole RIP.
</h4>
<div class="answer">
    Routing Information Protocol (RIP, protocole d'information de routage) est un protocole de 
    <b>routage IP</b> de type Vector Distance (à vecteur de distances) s'appuyant sur l'algorithme 
    de détermination des routes décentralisé Bellman-Ford. Il permet à chaque routeur de communiquer 
    aux routeurs voisins la métrique, c'est-à-dire la distance qui les sépare d'un réseau IP 
    déterminé quant au nombre de sauts ou « hops » en anglais.<br />
    Pour chaque réseau IP connu, chaque routeur conserve l'adresse du routeur voisin dont la 
    métrique est la plus petite. Ces meilleures routes sont diffusées toutes les 30 secondes.<br />
    <br />
    <u>Les limitation de RIP:</u>
    <ul>
        <li>
            Pour éviter les boucles de routage, le nombre de sauts est limité à 15. Au-delà, 
            les paquets sont supprimés.
        </li>
        <li>
            RIP ne prend en compte que la distance entre deux machines en ce qui concerne le saut, 
            mais il ne considère pas l'état de la liaison afin de choisir la meilleure bande 
            passante possible. Si l'on considère un réseau composé de trois routeurs A, B et C, 
            reliés en triangle, RIP préférera passer par la liaison directe A-B même si la bande 
            passante n'est que de 56 kbit/s alors qu'elle est de 20 Mbit/s entre A et C et C et B.
        </li>
    </ul><br />
    Ces limitations sont corrigées dans le protocole OSPF.
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            Dans quelle(s) situation(s) le protocole de routage à vecteur de distances (DV) 
            risque-t-il de ne pas converger ?</li>
        <li>
            Décrivez un comportement pathologique possible à l'aide d'un exemple simple.
        </li>
        <li>
            Comment peut-on atténuer ce phénomène ? Expliquez.
        </li>
        <!-- Il manque une partie de la consigne ? :/
        <li>
            Dé
        </li>-->
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <ul>
                <li>Des boucles de routage.</li>
                <li>Le trafic est acheminé de façon incohérente.</li>
                <li>Des entrées de table de routage incohérentes.</li>
            </ul>
        </li>
        <li>
            Pour constater la rapidité avec laquelle les bonnes nouvelles se propagent, considérez 
            le sous-réseau illustré à la figure et sur lequel la métrique utilisée est le nombre de 
            sauts. Supposons que A soit inactif au départ et que tous les autres routeurs le sachent.<br />
            En d'autres termes, ils ont tous enregistré un délai infini vers A.
            <figure>
                <img src="images/info-f303/comportement-pathologique" alt="Comportement pathologique" />
                <figcaption>Comportement pathologique</figcaption>
            </figure>
        </li>
        <li>
            <u>Solution:</u> définir un nombre maximum de sauts, comme via le <b>Route poisoning</b>: 
            lorsqu'une route vers un réseau tombe, le réseau est immédiatement averti d'une métrique 
            de distance infinie (le maximum de sauts +1), plus aucune incrémentation n'est possible.<br />
            <br />
            Si <code>Z</code> passe par <code>Y</code> pour aller à <code>X</code>, <code>Z</code> 
            peut faire croire à <code>Y</code> qu'il se trouve à une distance infinie de 
            <code>X</code>. Y étant persuadé que Z ne peut atteindre X, il opte pour une autre route.<br />
            Cette méthode n'est bonne qu'avec des triplets, elle ne marche pas lorsqu'il y a des 
            boucles de plus de trois noeuds.<br />
            <br />
            Le poison reverse (Route poisoning) est une méthode pour prévenir qu'une route... 
            <!-- manque la suite non ? -->
        </li>
    </ol>
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            Considérez un protocole de routage à états de liens (link state). Décrivez le 
            contenu des paquets de routage, expliquez le rôle de chaque champ, et décrivez la 
            méthode de diffusion des paquets.
        </li>
        <li>
            En quelques mots, en quoi est-ce fondamentalement différent des protocoles à vecteur 
            de distances ?
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <ol>
                <li>
                    Le nom de la source.
                </li>
                <li>
                    Un numéro de séquence: il permet de savoir à quel paquet le routeur en est 
                    (pour ne pas mettre à jour avec un vieux paquet).
                </li>
                <li>
                    Un âge
                </li>
                <li>
                    Le nom de ses voisins et les coûts associés (qui ne sont pas obligatoirement 
                    identiques pour les 2 sens d'une arête.
                </li>
                <li>
                    Des <b>ACK</b> flags et des Send flags pour savoir. Le send flag permet de 
                    savoir qui a déjà reçu le paquet et à qui le paquet n'a pas encore été envoyé, 
                    tandis que l'<b>ACK</b> flag sert juste à savoir si on a renvoyé l'<b>ACK</b> 
                    de ce paquet à un certain nœud.
                </li>
            </ol>
            Chaque noeud reçoit les mêmes infos. Tous les noeuds envoient toutes les infos à tous 
            ses voisins qui n'ont pas encore reçu l'info. Ensuite ils doivent chacun effectuer un 
            Dijkstra pour chaque destination. Pour les protocoles à vecteur de distances, on utilise 
            la programmation dynamique. Chaque noeud envoi périodiquement son vecteur de distance à 
            ses voisins de manière asynchrone. Quand un noeud reçoit un vecteur de distance, il met 
            à jour le sien et si un chemin change il avertit ses autres voisins. Les algorithmes à 
            vecteur de distance sont moins robustes mais beaucoup plus rapides.<br />
            <br />
        </li>
        <li>
            Contrairement au DV, la distance vers une destination n'est pas calculée au fur et à 
            mesure en sommant le prochain coût estimé par le prochain saut et le coût pour 
            atteindre ce prochain routeur. On calcule la distance directement via un arbre 
            (spanning tree).
        </li>
    </ol>
</div>





<h4 class="question">
    Expliquez se qu'est un <b>Autonomous System</b> (<b>AS</b>)
</h4>
<div class="answer">
    <figure>
        <img src="images/info-f303/as" alt="Autonomous System" />
        <figcaption><b>Autonomous System</b> (<b>AS</b>)</figcaption>
    </figure>
    Un <b>AS</b> est un ensemble de réseaux informatiques IP intégrés à Internet et dont la politique 
    de routage interne est cohérente. Un AS est généralement sous le contrôle d'une entité ou 
    organisation unique, typiquement un fournisseur d'accès à Internet. Au sein d'un AS, le protocole 
    de routage est qualifié d'« interne » (par exemple, <b>Open shortest path first</b>, 
    abrégé en <b>OSPF</b>). Entre deux systèmes autonomes, le routage est «externe» (par exemple 
    Border Gateway Protocol, abrégé en <b>BGP</b>).<br />
    <br />
    <ul>
        <li>
            Au sein de chaque AS on implémente des protocoles de routage qui permettent aux routeurs 
            internes à l'AS et aux routeurs de bordure de l'AS de construire leurs tables de routage. 
            Ces tables, bien sûr, ne connaissent que les réseaux IP internes à l'AS. Ces protocoles 
            sont appelés des IGP: Interior Gateway Protocol.
        </li>
        <li>
            les routeurs de bordures des différentes AS sont interconnectés entre eux et échangent 
            des informations sur le contenu des AS grâce à un protocole de routage. Ce protocole 
            permet de contrôler parfaitement les informations transmises. Un AS n'aura donc pas 
            forcément connaissance de tous les réseaux existants dans un AS voisin. Ces protocoles 
            de routage sont appelés des EGP: Exterior Gateway Protocol.
        </li>
    </ul>
    
</div>



<h4 class="question">
    Le protocole de routage inter-domaine <b>BGP</b> est plus apparenté à la famille des 
    protocoles de routage intra-domaine à vecteur de distances (DV) qu'à celle des protocoles à 
    état de lien (LS).
    <ol class="alphabet">
        <li>
            Expliquez deux ressemblances importantes entre <b>BGP</b> et un protocole DV.
        </li>
        <li>
            Expliquez deux différences importantes entre <b>BGP</b> et un protocole DV, et leur 
            raison d'être.
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <ol>
                <li>
                    Obtention de la connaissance des voisins
                </li>
                <li>
                    Propage les informations dans tout le réseau.
                </li>
            </ol><br />
        </li>
        <li>
            <ol>
                <li>
                    <b>BGP</b> mémorise toutes les routes vers toutes les destination: récupération 
                    rapide lorsqu'une destination devient inaccessible via la route initialement 
                    choisie.
                </li>
                <li>
                    <b>BGP</b> construit des routes sans boucles: le chemin suivi est décrit 
                    explicitement à l'aide des <b>Autonomous System</b> (<b>AS</b>) traversés.
                </li>
                <li>
                    Détection facile des boucles
                </li>
            </ol>
        </li>
    </ol>
</div>







<h4 class="question">
    <ol class="alphabet">
        <li>Nommez et expliquez succinctement les 2 grandes familles de protocoles de routage intra-domaine (IGP) en insistant sur leurs différences.</li>
        <li>Expliquez en quoi et pourquoi le protocole de routage inter-domaine de l'Internet (<b>BGP</b>) est différent des protocoles de routage intra-domaine (IGP) déployés dans les divers systèmes autonomes (<b>AS</b>) qui composent l'Internet.</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <ul>
                <li>
                    <b>RIP</b> ( <b>Routing Information Protocol</b> ) : utilise un algorithme de vecteurs de distance qui se limite à 25 noeuds par paquet. Au-delà, il faudra plusieurs paquets. 0 représente l'infini. Les vecteurs de distance sont envoyés toutes les 30 secondes à ses voisins. <b>RIP</b> possède un mécanisme pour détecter les pannes, si un router n'a pas reçu de message d'un voisin depuis 180 secondes, il le déclare mort. <b>RIP</b> est un protocole de la couche d'application (PAS de la couche réseau), les messages sont envoyés dans des paquets <b>UDP</b>.
                </li>
                <li>
                    <b>OSPF</b> ( <b>Open Shortest Path First</b> ) : utilise un algorithme d'état des lien. Chaque message est envoyé seulement à ses voisins qui le renvoient à leurs voisins,.. jusqu'à ce que l'entièreté du système autonome ai reçu le message. Les messages sont directement envoyés depuis la couche de transport (PAS partie de la couche d'application).
                </li>
            </ul>
        </li>
        <li>
            <figure>
                <img src="images/info-f303/as" alt="Autonomous System" />
                <figcaption><b>Autonomous System</b> (<b>AS</b>)</figcaption>
            </figure>
            Les connexions entre deux voisins <b>BGP</b> (neighbors ou peers) sont configurées explicitement entre deux routeurs. Ils communiquent alors entre eux via une session TCP sur le port 179 initiée par l'un des deux routeurs. <b>BGP</b> est le seul protocole de routage à utiliser TCP comme protocole de transport.
            <br>
            Il existe deux versions de <b>BGP</b> : Interior <b>BGP</b> (<b>iBGP</b>) et Exterior <b>BGP</b> (<b>eBGP</b>). <b>iBGP</b> est utilisé à l'intérieur d'un Autonomous System alors que <b>eBGP</b> est utilisé entre deux AS.
            <br>
            En général, les connexions <b>eBGP</b> sont établies sur des connexions point-à-point ou sur des réseaux locaux (un Internet Exchange Point par exemple), le <b>TTL</b> des paquets de la session <b>BGP</b> est alors fixé à 1. Si la liaison physique est rompue, la session <b>eBGP</b> l'est également, et tous les préfixes appris par celle-ci sont annoncés comme supprimés et retirés de la table de routage.
            <br>
            À l'inverse, les connexions <b>iBGP</b> sont généralement établies entre des adresses logiques, non associées à une interface physique particulière. Ceci permet, en cas de rupture d'un lien physique, de conserver la session <b>iBGP</b> active si un lien alternatif existe et si un protocole de routage interne dynamique (<b>IGP</b>) est employé (par exemple <b>OSPF</b>).
            <br>
            En conclusion, <b>IGP</b> sert au routage interne alors que <b>BGP</b> sert au routage externe. De plus, <b>BGP</b> ne communique qu'avec leurs voisins directs avec un <b>TTL</b> de 1.
        </li>
    </ol>
</div>





<h4 class="question">
    <ol class="alphabet">
        <li>Décrivez les principes du protocole de routage inter-domaine <b>BGP</b>.</li>
        <li>Expliquez comment <b>BGP</b> permet à un réseau périphérique (« stub ») multi-connecté (« multihomed ») de ne pas accepter du trafic de transit.</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <figure>
                <img src="images/info-f303/as" alt="Autonomous System" />
                <figcaption><b>Autonomous System</b> (<b>AS</b>)</figcaption>
            </figure>
            Le protocole inter-domaine <b>BGP</b> est la version Exterior <b>BGP</b> (<b><b>eBGP</b></b>) qui est utilisé est l'extérieur et entre deux <b>Autonomous System</b> (<b>AS</b>) alors que Interior <b>BGP</b> (<b>iBGP</b>) est utilisé à l'intérieur d'un <b>Autonomous System</b> (<b>AS</b>).
            <b><b>eBGP</b></b> crée un connexion <b>TCP</b> permanente entre les autres <b>Autonomous System</b> (<b>AS</b>) qu'il peut atteindre, afin de se mettre à jour et d'envoyer des "promesses" (dire qu'il peut atteindre). Quand un routeur de la frontière utilisant <b><b>eBGP</b></b> reçoit ces mises à jour, il utilise <b>iBGP</b> pour communiquer ce qu'il a reçu aux routeur internes.</li>
            
            <br>Le protocole <b>BGP</b> permet donc à chaque <b>Autonomous System</b> (<b>AS</b>) d'obtenir:
            <ul>
                <li>Des informations sur la manière d'attendre un autre <b>Autonomous System</b> (<b>AS</b>) via <b><b>eBGP</b></b>.</li>
                <li>De propager ces informations aux routeurs internes via <b>iBGP</b>.</li>
            </ul>
        <li>
            ???? De trouver des bons chemins basés sur non-seulement les informations obtenues dans les points précédents mais en plus sur des polices. ?? 
            ???? Les noeuds peuvent retenir de l'information, tel qu'un chemin qu'il connait qui ne lui rapporte rien. ????
        </li>
    </ol>
</div>



<h4 class="question">
    <ol class="alphabet">
        <li>Décrivez la règle de routage « Hot potato » et sa raison d'être</li>
        <li>Par quel protocole de routage est-elle utilisée ? Le décrire en quelques mots.</li>
        <li>Quelles autres règles de routage ce protocole utilise-t-il ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>Les grands opérateurs suivent souvent la politique dite de la patate chaude (hot potato) qui consiste à router un paquet le plus rapidement possible sans la garder (d'où le terme). Le but étant de transmettre l'information le plus rapidement possible sans forcément chercher le chemin le plus court ou le plus optimisé. La raison d'être est d'éviter le congestion entre deux AS ; les packets n'empreintent pas tous le même chemin.</li>
        <li>Elle est utilisée par le protocole de routage BGP.</li>
        <li>Heu.. Mettez tous se que vous savez sur BGP..</li>
    </ol>
</div>








<h4 class="question"><ol class="alphabet"><li>Déterminez analytiquement l'expression de l'efficacité du protocole ALOHA discrétisé (slotted ALOHA) en fonction de la charge du réseau pour un grand nombre de stations actives. On supposera que chaque station émet dans un slot avec une probabilité p.</li><li>Représentez l'efficacité graphiquement (avec définition des axes), et expliquez la forme de la courbe.</li><li>La suppression des slots (Cf. ALOHA pur) améliore-t-elle les performances ? Pourquoi ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Si on suppose qu'on a N nœuds qui ont beaucoup de trames à envoyer. Chacun transmet sur un slot avec une certaine probabilité p. Un nœud à $p(1-p)^{N-1}$ chances d'envoyer un paquet parce qu'il faut qu'il envoie un paquet (<code>p</code>) <i>et</i> qu'aucun des $N-1$ autres nœuds n'envoient un paquet ($1-p$) en même temps. La probabilité que n'importe quel nœud envoient un paquet avec succès est de 
$$Np(1-p)^{N-1}$$
 Pour une efficacité maximale, il faut donc trouver un p tel que $Np(1-p)^{N-1}$ soit maximale. On trouve (en dérivant) que L'efficacité est maximale quand $p=\dfrac{1}{N}$. Si on imagine que N tend vers l'infini, on sait que <code></code>\lim\limits_{n-\infty}\left(1+\left(\dfrac{G}{n}\right)\right)^{n} = e^{-G}<code></code> Et donc pour $G=1$ <code></code>e^{-1} = \dfrac{1}{e} = 0.37 = 37\% \text{ d'efficacité}<code></code></li>
<li>(Slide 5-28) ?</li>
<li>Non, la probabilité de collision augmente. On obtient une efficacité de 18%.</li>
</ol></div>






<h4 class="question"><ol class="alphabet"><li>Enoncez les différents types de matrice de commutation (« switch fabric ») rencontrées dans les routeurs, ainsi que leurs avantages/inconvénients respectifs.</li><li>Expliquez la raison d'être et l'inconvénient potentiel d'une bufferisation au niveau des <b>ports</b> d'entrées.</li><li>Expliquez la raison d'être d'une bufferisation au niveau des <b>ports</b> de sortie.</li></ol></h4>
<div class="answer"><ol class="alphabet">
    <li>
        <ul>
            <li><b>Commutation par action sur la mémoire</b> : Les plus simples, les premiers routeurs étaient de simples ordinateurs. Le switch entre les <b>ports</b> d'entrée et sortie étaient fait via le CPU. Lorsqu'un paquet arrive au <b>port</b> d'entrée, le processus de routing l'identifiera via une interruption.Il copiera ensuite les paquets arrivant du buffer d'entrée sur le processeur mémoire. Le processeur extrait ensuite l'adresse de destination, recherche la table appropriée et copie le paquet sur le buffer du <b>port</b> de sortie. Dans les routeurs modernes, la recherche de l'adresse de destination et le stockage du paquet dans la mémoire appropriée est exécuté par les cartes de ligne d'entrée des processeurs.<br>
            <b>Avantages</b> : L'architecture logicielle est la manière la plus simple d'orienter les paquets ; on prend un paquet, on lit son port de sortie, et on l'écrit dessus.<br>
            <b>Inconvénients</b> : Traite un seul paquet à la fois, lent. Les architectures matérielles sont plus efficaces, comme un bus ou un crossbar.</li>
            <li><b>Commutation par bus</b> : Le <b>port</b> d'entrée transfert les paquets directement sur le <b>port</b> de sortie via un bus partagé sans l'intervention d'un processus de routage. Comme le bus est partagé, seul un paquet est transféré à la fois via le bus. Si le bus est occupé, le paquet arrivant doit attendre dans une file. La bande passante du routeur est limitée par le bus comme chaque paquet doit traverser le bus seul. Exemple :  Bus switching CISCO-1900, 3-COM's care builder5.<br>
            <b>Avantages</b> : C'est le délit du bus qui détermine la vitesse de commutation du routeur.<br>
            <b>Inconvénients</b> : C'est qu'un seul paquet est transféré à la fois, du coup il y a un risque d'attente.</li>
            <li><b>Commutation par réseau d'interconnexions</b> : Pour surmonter le problème de la bande passante d'un bus partagé, les commutateurs réseaux en croix sont utilisés. Les <b>port</b> entrées et sorties sont connectés par des bus horizontaux et verticaux. Si nous avons <code>N</code> <b>ports</b> d'entrés et <code>N</code> <b>ports</b> de sorties, on a besoin de <code>2N</code> bus pour les connecter. Pour transférer un paquet du <b>port</b> d'entrée au <b>port</b> de sortie correspondant, le paquet traverse le bus horizontal jusqu'à une intersection avec un bus vertical qui le conduit à son <b>port</b> de destination. Si le vertical est libre, le paquet est transféré. Mais si le bus vertical est occupé à cause d'une autre entrée, la ligne doit transférer des paquets au même <b>port</b> de destination. Les paquets sont bloqués et font la file sur le même <b>port</b> d'entrée.<br>
            <b>Avantages</b> : Ce système peut s'implémenter en hardware, et c'est super rapide (60 Gbps). Améliore la limite de débit associé à un bus commun. <br>
            <b>Inconvénients</b> : Le seul problème est que les paquets ont des tailles différentes. Si les paquets avaient tous la même durée, tout aurait été synchrone, on change la matrice de routage à chaque paquet, toutes les connexions en même temps. Quand les paquets ont des tailles variables, le chef d'orchestre doit être plus compliqué. On peut également découper les paquets en petits blocs de taille fixe (complétés par des zéros par exemple). Comme ça, on retrouve le comportement synchrone. Vu de l'extérieur, cette fragmentation est invisible.</li>
        </ul>
        <figure>
            <img src="images/info-f303/commutation" alt="Matrice de commutation" />
            <figcaption>Matrice de commutation</figcaption>
        </figure>
    </li>
    <li>
        Le point le plus problématique est le fait que les routeurs doivent opérer à des vitesses élevées, impliquant des millions de consultations par seconde; on souhaite en effet que l'opération de consultation soit plus rapide que le temps qu'il faut au routeur pour recevoir un nouveau paquet. Dès que le <b>port</b> de sortie a été identifié, le paquet peut entrer dans la matrice de commutation. Cependant un paquet peut se voir refuser temporairement l'accès si elle est occupée à traiter des paquets qui ont été reçus sur d'autres liaisons d'entrée. Il est alors placé en file d'attente sur son <b>port</b>. Si la matrice de commutation n'est pas assez rapide, et du coup à mesure de l'augmentation de ces files, le risque de perte de paquets augmente.
    </li>
    <li>
        Si aucun ou peu de phénomène de mise en attente ne se produit à l'entrée, mais que tous les paquets venaient à être dirigés vers le même <b>port</b> de sortie, il serait très rapidement saturé. Un gestionnaire de paquets doit déterminer quel paquet de la file doit être transmis. Cette règle est généralement la règle <b>FIFO</b> ( <b>First In First Out</b> ).
    </li>
</ol></div>


<h4 class="question">
    <ol class="alphabet">
        <li>Expliquez le principe du « Longest Prefix Match » lors de l'acheminement de paquets <b>IP</b>.</li>
        <li>Quel est son intérêt ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Dans une table d'acheminement d'un routeur, lorsqu'il y a plusieurs matchs, le routeur utilise la règle du Longest Prefix Match, il trouve le longest matching entry dans la table et envoie le paquet à l'interface lien associé.<br>
            Exemple d'IPv4 firwadubg tabke :<br>
            192.168.20.16/28<br>
            192.168.0.0/16<br>
            L'adresse 192.168.20.19 est donné, seulement ces 2 entrées sont matchés. Le routeur prendra le Longest Prefix Match, c-a-d 192.168.20.16/28 car le masque 28 (255.255.255.240) est plus grand que le masque 16 (255.255.0.0)
        </li>
        <li>
            Cela rends la route du packet beaucoup plus spécifique. Ca sert aussi détecter le cas où une table donne un sous-réseau. Car par exemple, la majorité des routeur ont souvent une entrée default, celui-ci est le seul avec un masque 0 (0.0.0.0) donc la dernière possibilité dans le Longest Prefix Match.
        </li>
    </ol>
</div>






<h4 class="question">
    <ol class="alphabet">
        <li>Expliquez le rôle et le principe général des codes détecteurs d'erreur.</li>
        <li>Pourquoi ne peuvent-ils être efficaces à 100% ?</li>
        <li>Donnez un exemple de code détecteur d'erreur plus élaboré que le bit de parité, et expliquez son principe.</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Il s'agit de détecter si il y a une erreur dans le paquet transmis. Pour cela, on introduit un ou plusieurs bits de contrôle dans le paquet afin de savoir si le code a été changé ou pas.
        </li>
        <li>
            Car si il y a un seul bit de parité, on ne peut détecter que des erreurs impaires. Il faut mettre plusieurs bits de parités mais cela limite quand même toutefois le nombre d'erreurs détectables. De plus, rien ne dit qu'une erreur ne peut pas se produire sur un de ces bits.
        </li>
        <li>
            <ul>
                <li>
                    <b>Bit de parité</b> : Soit D des informations à transmettre de d bits. L'expéditeur ajoute aux données un unique bit tel que la somme des d + 1 bits soit paire (ou impaire selon ce qui est convenu par le modèle). Cette méthode est un peu faible, car si un nombre pair d'erreurs s'est glissé dans les données, elles ne seront pas détectées ; elle ne peut donc être appliquée que sur des systèmes pour lesquels les erreurs n'arrivent pas en rafale et dont la probabilité est extrêmement faible.
                </li>
                <li>
                    <b>Checksum</b> : les codes <b>CRC</b> (<b>Code de Redondance cyclique</b>) sont une technique de détection d'erreur très fréquente et opère de la manière suivante : Lors de l'envoi, l'émetteur ajoute un nombre sur 16 bits à la fin des données (D), de manière à ce que ces données D et ce nombre CRC forment un nombre exactement divisible par G (modulo 2). En pratique l'émetteur divise D par G et met dans CRC le reste de cette division. Le destinataire, connaissant G, n'a qu'a diviser le paquet par G, s'il n'obtient pas zéro c'est qu'il y a eu des erreurs. Le point cruciale est le choix de G(x), puisqu'il ne faut pas que les données entachées d'erreur soient divisible par lui. Plus le polynôme est grand, plus on détece d'erreurs, il faut donc choisir entre la taille et la performance.
                </li>
            </ul>
        </li>
    </ol>
</div>









<h4 class="question"><ol class="alphabet"><li>Définissez les différents types de « Resource Records (RR)» utilisés par le protocole <b>DNS</b> et expliquez leur rôle.</li><li>Donnez le scénario d'échange de messages <b>DNS</b>, par la méthode itérative, permettant à un client de trouver l'adresse <b>IP</b> d'un serveur web dont l'URL est <b>www.company.com</b>, <i>en indiquant les RR présents dans ces messages</i>. On supposera que les caches <b>DNS</b> sont vides.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>
    Les enregistrements sur <b>DNS</b> sont sous le format : (<i>name</i>, <i>value</i>, <i>type</i>, <i>tt1</i>). On a plusieurs types possibles, entre autre :
    <ul>
        <li>
            <b>A</b> : <i>name</i> est hostname et <i>value</i> est l'<b>IP</b> de l'hostname. <b>A</b> fournit le mapping standard <b>hostname-to-IP</b> ( <b>A</b> <b>IPv4</b>, <b>AAAA</b> <b>IPv6</b> ) ;
        </li>
        <li>
            <b>NS</b> : <i>name</i> est un domaine name is domain (exemple: google.be) et <i>value</i> est le hostname d'un serveur <b>DNS</b> autoritaire qui connait l'adresse <b>IP</b> du domaine. Il permet à un client de connaître le serveur à contacter pour ce domaine ;
        </li>
        <li>
            <b>CNAME</b> : <i>name</i> est un alias pour le hostname présent dans <i>value</i> ;
        </li>
        <li>
            <b>MX</b> : nom du serveur mail associé à <i>name</i>.
        </li>
    </ul>
</li>
<li>
    Le scénario de la méthode itérative est :
    <ul>
        <li>Le client émet une requête <b>www.company.com in A</b> à son serveur <b>DNS</b> local. </li>
        <li>Le serveur local, n'ayant pas l'adresse requise en cache, contacte un des root servers (défini dans sa configuration), avec la même requête.</li>
        <li>Le serveur root contacté lui renvoie alors le nom et l'adresse authoritaire (champs <b>NS</b> et <b>A</b> du serveur principal pour le <b>TLD</b> <b>.com</b>)</li>
        <li>Le serveur local réémet à nouveau la même requête vers le serveur du <b>TLD</b> <b>.com</b>. Ce serveur <b>TLD</b> renvoie lui aussi les champs <b>NS</b> et <b>A</b> pour le serveur faisant authorité sur le domaine <b>www.company.com</b> (par exemple <i>ns110.ovh.net</i>).</li>
        <li>Le serveur local contacte alors le serveur authoritaire, qui lui renvoie la zone pour le domaine <b>company.com</b>, qui contient un champ <b>CNAME</b> pour <b>www.company.com</b>. Si ce champ pointe vers le domaine contenu dans l'enregistrement <b>A</b> de la zone, la recherche s'arrête, le client a obtenu l'ip désirée.</li>
        <li>Sinon, tant qu'un enregistrement <b>A</b> n'a pas été trouvé, le serveur recommence les mêmes étapes à partir du domaine obtenu dans le champ <b>CNAME</b>.</li>
    </ul>
    <figure>
        <img src="images/info-f303/dns-name-resolution" alt="DNS name resolution ( recursive and iterated method )" />
        <figcaption>DNS name resolution ( recursive and iterated method )</figcaption>
    </figure>
</li>
</ol></div>

<h4 class="question">Vous créez votre entreprise « MeMyself&I » et vous obtenez le nom de domaine « memyselfandi.com ». Vous souhaitez déployer votre propre serveur <b>DNS</b> pour ce domaine (dns.memyselfandi.com, 111.111.111.111), ainsi qu'un serveur Web  www.memyselfandi.com, 111.111.111.112).<ol class="alphabet"><li>Quelles informations doivent être ajoutées dans la hiérarchie <b>DNS</b> et à quel niveau ? Soyez précis.</li><li>Donnez un scénario typique d'échange de messages <b>DNS</b> permettant à un client de trouver l'adresse <b>IP</b> de votre serveur web, en précisant bien les éléments importants des messages <b>DNS</b>. On supposera que les caches <b>DNS</b> sont vides.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>
    Pour rendre le serveur web www.memyselfandi.com accessible, on indique d'abord 2 informations dans le serveur DNS TLD (Top-Level Domain) (.com dans ce cas) :
    <ul>
        <li>Le nom du serveur DNS privé qui fait autorité pour notre serveur Web, ce qui sera décrit par le RR suivant : (memyselfandi.com, dns.memyselfandi.com, NS)</li>
        <li>L'adresse de ce même serveur autoritaire : (dns.memyselfandi.com, 111.111.111.111, A)</li>
    </ul>
    Ensuite il faudra rajouter les informations appropriées dans le serveur DNS privé:
    <ul>
        <li>L'adresse du serveur web : (www.memyselfandi.com, 111.111.111.112, A)</li>
        <li>Un RR de type MX pour nom de domaine memyselfandi.com</li>
        <li>(Si www.memyselfandi.com est un alias, un RR de type CNAME pour connaitre son vrai hostname)</li>
    </ul>
</li>
<li>
    <figure>
        <img src="images/info-f303/dns-name-resolution" alt="DNS name resolution ( recursive and iterated method )" />
        <figcaption>DNS name resolution ( recursive and iterated method )</figcaption>
    </figure>
</li>
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




<h4 class="question">
    Expliquez le principe de NAT et la structure d'une table NAT.
</h4>
<div class="answer">
    La NAT vient résoudre deux problème problème majeurs :
    <ul>
        <li>Tout d'abord la pénurie d'adresse IP sur Internet, résolu par la mise en place de plages d'adresses IP pour une utilisation privée</li>
        <li>Et du coup le second qui est de pouvoir accéder à Internet en utilisant ces adresses IP privées.</li>
    </ul>
    En fait, si on reprends le principe de la couche 3, il y a bien un facteur limitant au nombre de machines possibles sur Internet, c'est le nombre d'adresses IP disponibles. Rappel: Une adresse IP est codée sur 4 octets, soit 32 bits. Elle peut donc prendre $2^32$ valeurs, soit environ 4 294 967 296. Ca peut paraitre beaucoup mais avec le nombre d'appareil connectés ne cesse d'augmenter et on approche très rapidement au quota.
    La transition de IPv4 à IPv6 est en place mais il faut une solution temporaire pour ne pas priver les machines actuels du réseau du jour au lendemain. 
    <br><br>
    Vu que certains réseaux étaient privés et que les machines sur ces réseaux n'avaient pas besoin d'être jointes depuis Internet (elles étaient de simples clients, mais pas des serveurs), il n'était pas nécessaire de leur fournir une adresse IP publique à chacune d'entre elles. Ainsi, on s'est dit qu'on pourrait donner des adresses IP privées à ces machines. Cette plage d'adresses privée n'est donc pas utilisée sur Internet, elle est réservée pour tous les réseaux du monde entier qui n'ont pas besoin d'être joints depuis Internet ( par exemple 192.168.x.x ou 10.x.x.x ou 172.16.x.x ).
    <br><br>
    Donc, la NAT associe <code>n</code> adresses privées à une seule adresse publique. Ainsi, on peut connecter <code>n</code> machines en n'utilisant qu'une seule adresse publique. On économise donc des adresses. Lorsqu'un paquet est envoyé vers l'extérieur, il passe par le dispositif <b>NAT</b> qui converti l'adresse <b>IP</b> interne en adresse <b>IP</b> officielle du routeur. Le dispositif <b>NAT</b> et un pare-feu sont souvent combinés dans le même équipement, offrant ainsi une certaine sécurité en contrôlant précisément ce qui entre sur le réseau et en sort.
    <table>
        <thead>
            <tr><th colspan="8">Structure d'une table <b>NAT</b></th></tr>
            <tr><th colspan="4">réseau privé</th><th colspan="4">box</th></tr>
        </thead>
        <tbody>
            <tr><th>IP SRC</th><th>IP DST</th><th>PORT SRC</th><th>PORT DST</th><th>IP SRC</th><th>IP DST</th><th>PORT SRC</th><th>PORT DST</th></tr>
            <tr><td>192.168.0.1</td><td>217.70.184.38</td><td>10277</td><td>80</td><td>82.238.22.47</td><td>217.70.184.38</td><td>2356</td><td>80</td></tr>
            <tr><td>192.168.0.2</td><td>217.70.184.38</td><td>10277</td><td>80</td><td>82.238.22.47</td><td>217.70.184.38</td><td>2357</td><td>80</td></tr>
        </tbody>
    </table>
    On voit maintenant que lorsqu'un paquet reviendra avec comme port destination 2356, la box saura qu'il s'agit d'un paquet à destination de 192.168.0.1 et que, lorsqu'il reviendra avec comme port destination 2357, ce sera pour la machine 192.168.0.2. Vu que c'est la box elle-même qui choisit le port source, on est sûrs qu'on n'aura jamais deux fois le même port.
</div>



<h4 class="question">Quand des flux <b>TCP</b> et <b>UDP</b> partagent un même lien congestionné, comment réagissent ces deux types de flux et quelles en sont les conséquences ?</h4>
<div class="answer">
    <ul>
        <li>
            <b>TCP</b> peut distinguer 2 types de congestions:
            <ul>
                <li>
                    soit il reçoit 3 <b>ACK</b>s consécutifs pour le même numéro de séquence (donc 
                    un des paquets intermédiaire a été perdus, mais les suivants sont passés: 
                    <b>faible congestion</b>)
                </li>
                <li>
                    soit un <b>ACK</b> n'arrive pas dans le temps imparti (timeout, beaucoup de 
                    paquets perdus: <b>congestion sévère</b>).
                </li>
            </ul>
            Au démarage de la transmission, <b>TCP</b> envoie les données avec une fenêtre de taille 
            1 <b>MSS</b> (<b>Maximum Segment Size</b>), correspondant au nombre de paquets qui 
            peuvent être en parcourt simultanément. La taille de la fenêtre est doublée à chaque 
            itération (en incrémentant la taille à chaque <b>ACK</b> reçu), de sorte qu'elle a 
            une <b>croissance exponentielle</b>. S'il détecte une <b>faible congestion</b>, il 
            divise la taille de la fenêtre par deux et change de mode pour incrémenter la taille de 
            la fenêtre à chaque itération (+1 pour chaque fenêtre totalement envoyée) pour adopter 
            une <b>croissance linéaire</b>. Il approche ainsi <b>dichotomiquement</b> la taille 
            moyenne de fenêtre optimale (càd le nombre de paquets en parcourt, et donc la vitesse 
            d'envoi). S'il détecte une <b>congestion sévère</b>, il réduit la taille de fenêtre à 1 
            et recommence en mode de <b>croissance exponentiel</b>. Il peut éventuellement repasser 
            en mode de <b>croissance linéaire</b> lorsqu'il a atteint la moitié de la taille de 
            fenêtre qui a provoqué un timeout (puisque doubler sa taille provoquera probablement 
            de nouveau un timeout).
        </li>
        <li>
            <b>UDP</b> quant à lui est un processus de transport extrêmement simple et léger, doté 
            d'un modèle de service minimum. Il ne nécessite aucun échange préalable entre deux 
            processus, de plus les échanges de données sont non-fiables, ce qui signifie que 
            lorsqu'un processus expédie un message, il ne se soucie pas de son arrivée.
        </li>
    </ul>
</div>




<h4 class="question">
    <ol class="alphabet">
        <li>Expliquez la technique de fragmentation de paquets IP en justifiant le rôle des différents champs pertinents de l'en-tête des paquets.</li>
        <li>Quelle méthode est utilisée pour éviter la fragmentation des paquets IP ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>?</li>
        <li>?</li>
    </ol>
</div>











<h4 class="question">Expliquez comment un routeur construit les entrées de sa table d'acheminement pour les préfixes <b>IP</b> extérieurs à son domaine.</h4>
<div class="answer">
    Il utilise des masques, Interface et passerelle afin de diriger correctement les paquets. Les tables contiennent les adresses de destination, le manque, les adresses des passerelles (routeurs intermédiaires) permettant d'atteindre la destination, l'adresse de la carte réseau (interface) par laquelle le paquet doit sortir du routeur.
</div>



<h4 class="question">
    Considérez 3 réseaux <b>Ethernet</b> (<code>N_1</code>, <code>N_2</code> et <code>N_3</code>), un commutateur <b>Ethernet</b> (<code>C</code>) et un routeur (<code>R</code>) interconnectés selon une topologie en ligne <code>N_1</code>-<code>C</code>-<code>N_2</code>-<code>R</code>-<code>N_3</code>. Une station <code>H_A</code> (d'adresse <code>IP_A</code>) est attachée au réseau <code>N_1</code> (par l'adresse <code>MAC_A</code>) et une station <code>H_B</code> (d'adresse <code>IP_B</code>) est attachée au réseau <code>N_3</code> (par l'adresse <code>MAC_B</code>). <code>C</code> a deux adresses <code>MAC</code> : $MAC_{11}$ sur <code>N_1</code> et $MAC_{12}$ sur <code>N_2</code>. <code>R</code> a deux adresses <code>MAC</code> et deux adresses <code>IP</code> : $MAC_{22}$ et <code>IP_2</code> sur <code>N_2</code> et $MAC_{23}$ et <code>IP_3</code> sur <code>N_3</code>.
    <ol class="alphabet">
        <li>Dessinez la configuration. <code>H_A</code> envoie un paquet <code>IP</code> à <code>H_B</code>. Si l'on suppose que les correspondances entre adresses <code>IP</code> et <code>MAC</code> sont connues de tous, décrivez les trois trames qui circulent respectivement sur les réseaux <code>N_1</code>, <code>N_2</code> et <code>N_3</code> en vous limitant aux champs d'adresses des trames et aux champs d'adresses et de <code>TTL</code> (<code>T</code>ime <code>T</code>o <code>L</code>ive) du paquet <code>IP</code> contenu dans la trame. Justifiez.</li>
        <li>Par quel protocole les correspondances entre adresses <code>IP</code> et <code>MAC</code> ont-elles été découvertes ? Décrivez les échanges de ce protocole qui réalisent les mises en correspondance nécessaires lorsque <code>H_A</code> envoie son paquet <code>IP</code> à <code>H_B</code>. Mentionnez toutes les adresses présentes dans les messages échangés.</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>?</li>
        <li>?</li>
    </ol>
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
        <tr><th>Physique</th><td>transfert des données via un cable</td><td>?</td><td>?</td></tr>
    </tbody>
    <tfoot>
    </tfoot>
</table>
</div>



<h4 class="question"><ol class="alphabet"><li>Pourquoi est-il plus difficile de fixer la durée du timer de retransmission de <b>TCP</b> que celle du timer de retransmission d'un protocole de liaison de donnée ?</li><li>Comment fixe-t-on la durée du timer de retransmission de <b>TCP</b> ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><b>TCP</b> n'utilise qu'un seul timer, comme le Go-Back-N. Le problème est que <b>TCP</b> doit à la fois s'adapter aux réseaux locaux (ou les timeouts peuvent être très cours) qu'à l'internet (ou le chemin utilisé par un paquet et peut-être très long et donc les délais aussi).</li>
<li>Pour estimer le <b>RTT</b>, on va avoir un échantillon <b>RTT</b> qui va stocker le temps entre le moment ou le byte est transmis et le moment où on reçoit l'<b>ACK</b>. Comme on va avoir une grosse fluctuation des valeurs avec cette technique, il faut essayer de « lisser » ces valeurs. On va donc avoir besoin de la moyenne et la variance.


$$estimation = (1-a)*estimationPrécédente + a*nouvelEchantillon$$

avec $a = 0.125$

$$marge \text{ (de sureté)} = (1-b)*margePrécédente + b*|echantillon-estimation|$$

avec $b = 0.25$

$$Timeout = estimation + 4 marge$$

<i>'<code>4</code>'</i> parce qu'avec cette valeur, seulement $1\%$ des paquets étaient renvoyés trop tôt.</li>
</ol></div>



<h4 class="question">Expliquez la raison d'être des protocoles <b>DHCP</b> et NAT, et expliquez leur fonctionnement à l'aide de scénarios typiques.</h4>
<div class="answer">De nos jours on utilise surtout des adresses <b>IP</b> dynamique. Le <b>DHCP</b> (<b>Dynamic Host Configuration Protocol</b>) s'occupe d'attribuer une adresse <b>IP</b> à un ordinateur qui se connecte. <b>DHCP</b> est un protocole de la couche application qui utilise <b>UDP</b> et <b>IP</b>.Quand un ordinateur se connecte à un subnet, il broadcast pour voir si un serveur <b>DHCP</b> se trouve dans ce subnet. Il lui répond en envoyant une adresse <b>IP</b>, en broadcast vu que le client n'a pas encore d'adresse. Le client répond pour dire que l'adresse l'intéresse, toujours en broadcast au cas où il y aurait d'autre serveur <b>DHCP</b> dans la zone, afin de les prévenir. Le <b>DHCP</b> envoie ensuite un <b>ACK</b> pour lui dire que l'adresse a bien été réservée. <b>NAT</b> (<b>Network Access Translation</b>), de nos jours on a presque plus d'adresses <b>IP</b> disponibles. Les NATs permettent de se servir de l'adresse <b>IP</b> d'une seule machine pour envoyer des données à tout le réseau. Il bidouille avec les numéros de <b>port</b>, le routeur fait une table avec d'un côté les adresses <b>IP</b> privées et l'adresse <b>IP</b> extérieure ainsi que le <b>port</b>.</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez comment les commutateurs <b>Ethernet</b> apprennent où se trouvent les stations et par quel type d'adresse ils les identifient.</li><li>Comment les pannes de stations ou leur mobilité sont-elles prises en compte ?</li><li>En quelques mots, quelle contrainte topologique doit être respectée pour que cet apprentissage fonctionne, et comment la réalise-t-on ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Le protocole Ethernet utilise les adresses MAC. Pour connaître l'adresse, le commutateur va lancer une trame sur le broadcast (ff:ff:ff:ff:ff:ff) et mettre à jour sa table ARP.</li>
<li>Les pannes sont prises en compte à l'aide d'un TTL, quand on n'a pas de nouvelles d'une machine depuis un moment, elle sort de la table. Les données sont mises à jour avec les data les plus récentes. </li>
<li>La topologie était historiquement en bus, mais ça pose des problèmes si le câble est abîmé à un endroit; de plus il y avait des risques de collision. Actuellement, on utilise une structure en étoile avec un switch au centre. </li>
</ol></div>



<h4 class="question">Citez et définissez les différentes sources de délai que subit un paquet dans un réseau datagramme.</h4>
<div class="answer">
    
$$d(noeud) = d(processing) + d(queueing) + d(transmission) + d(propagation)$$

</div>



<h4 class="question">
    <ol class="alphabet">
        <li>
            Décrivez sommairement le fonctionnement du système <b>DNS</b>.
        </li>
        <li>
            Comparez les deux modes de fonctionnement du protocole (avantages et inconvénients).
        </li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Le système <b>DNS</b> (<b>Domain Name System</b>) est le service d'annuaire d'Internet. 
            Lorsqu'on recherche une adresse <b>URL</b> tel que <code>http://google.com</code> ou 
            <code>http://facebook.com</code>, le système d'<b>DNS</b> traduit l'adresse <b>URL</b> 
            en une adresse <b>IP</b> (entre <code>0.0.0.0</code> et <code>255.255.255.255</code> 
            pour <b>IPv4</b>). Ce système est fréquemment utilisé par d'autres protocoles tels que 
            <b>HTTP</b>, <b>SMTP</b> et <b>FTP</b> pour délivrer les adresses <b>IP</b> 
            correspondant aux noms de serveurs demandés. Par exemple pour <code>http://ulb.be</code>, 
            le système <b>DNS</b> formule une requête auprès d'un serveur de nom, à laquelle il 
            reçoit une réponse concernant l'adresse <b>IP</b> correspondante et ensuite le navigateur 
            établit une connexion <b>TCP</b> avec le processus serveur répondant à cette adresse.
        </li>
        <li>
            <ol>
                <li>
                    Une version simplifiée du <b>DNS</b> consisterait en un serveur de noms unique 
                    contenant toutes les correspondances existantes. Ce système a l'air simple, 
                    mais impossible à mettre en oeuvre, pour causes : fragilité d'un site central 
                    unique, volume de trafic trop important, base de données centralisée trop 
                    éloignée de certains utilisateurs, problèmes de maintenance dus au volume énorme 
                    des données à stocker. <b>DNS</b> se doit donc d'être un système distribué.
                </li>
                <li><b>DNS</b> utilise un grand nombre de serveurs de noms, organisé de manière 
                    hiérarchique et distribué dans le monde entier. Il existe trois types de 
                    serveurs de noms: les <b>serveurs de noms locaux</b>, les <b>serveurs de nom 
                    racine</b> et les <b>serveurs de nom de source autorisée</b>.<br />
                    Chaque fournisseur d'accès possède un <b>serveur de noms local</b>, vers lequel 
                    vont toutes les recherches <b>DNS</b> formulées au sein de ce réseau local. Un 
                    <b>serveur de noms local</b> est forcément proche du client. Lorsqu'un serveur 
                    local de noms n'est pas en mesure de répondre à une demande il se transforme en 
                    client <b>DNS</b> et interroge un <b>serveur de nom racine</b>, si celui-ci a 
                    une réponse il l'envoie au serveur de noms <b>DNS</b>, qui la transmet alors à 
                    l'auteur de la demande; si le <b>serveur de nom racine</b> ne peut lui non plus 
                    satisfaire la demande directement, il répond en donnant l'adresse <b>IP</b> 
                    d'un <b>serveur de nom de source autorisée</b> qui connaîtra certainement la 
                    correspondance recherchée. Tout serveur est enregistré auprès d'au moins deux 
                    <b>serveurs de noms de source autorisée</b>, en général il s'agit tout 
                    simplement du fournisseur d'accès.<br />
                    Un <b>serveur de nom est qualifié</b> de source autorisée pour un serveur donné, 
                    s'il dispose en permanence d'archives <b>DNS</b> permettant d'établir la 
                    conversion pour ce serveur. 
                    <figure>
                        <img src="images/info-f303/dns-name-resolution" alt="DNS name resolution 
                            (recursive and iterated method)" />
                        <figcaption>DNS name resolution ( recursive and iterated method )</figcaption>
                    </figure>
                    Toutes ces recherches que nous venons de voir étaient du type récursives, 
                    mais <b>DNS</b> autorise également des recherches itératives à n'importe quel 
                    moment du processus de recherche : si un serveur n'est pas en mesure de répondre 
                    favorablement à la demande, il renvoie directement l'adresse <b>IP</b> du 
                    prochain serveur de nom de la chaîne. En général, toutes les demandes d'une même 
                    recherche <b>DNS</b> sont récursives, mis à part celle émanant du serveur local 
                    de nom adressée au serveur racine qui est de nature itérative. Cette démarche 
                    est préférable, les serveurs racines traitant généralement de grands volumes de
                    demandes.
                </li>
            </ol>
        </li>
    </ol>
</div>



<h4 class="question"><ol class="alphabet"><li>Expliquer les principes de la programmation socket donnant accès aux services <b>TCP</b> et <b>UDP</b>.</li><li>Quelles sont les différences importantes entre ces deux <b>API</b> ?</li><li>Dans une entité de transport, comment les sockets <b>TCP</b> et <b>UDP</b> sont-ils identifiés ? Pourquoi ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Le socket est une prise associée à un port permettant l'accès aux couches réseaux. Cela permet d'envoyer et recevoir des données via des services comme <b>UDP</b> et <b>TCP</b>.</lI>
<li><b>UDP</b> est un service non-connecté (non-fiable) qui envoie les données sans se socier de leur bonne réception par le destinataire. Tandis que <b>TCP</b> est un service orienté connexion qui permet de s'assurer que les messages atteignent leur destination. Ceci est fait au moyen d'une connexion établie préalablement entre le client et le serveur qui s'envoie des accusés de réception. Si un accusé de réception n'est pas reçu après l'envoi d'un message, le message est considéré comme perdu et renvoyé au destinataire.</lI>
<li>Le socket est identifié via le numérod e port sur lequel il se trouve. Il faut donc l'<b>IP</b> ainsi qu'un numéro de port pour envoyer un message. Cela permet à l'ordinateur de répartir le message qu'il reçoit au bon endroit.</lI>
</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez les circonstances dans lesquelles l'émetteur <b>TCP</b> peut recevoir trois doublons d'acquits venant du récepteur <b>TCP</b>.</li><li>Décrivez deux actions importantes de l'émetteur <b>TCP</b> lorsque cela se produit et expliquez-en les raisons.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Quand il reçoit 3 doublons du même <b>ACK</b> d'affilé, il va comprendre qu'il y a un segment qui n'a pas été reçu.</li>
<li>L'émetteur ne doit donc pas attendre la fin du timeout pour renvoyer le segment.</li></ol>
</div>



<h4 class="question"><ol class="alphabet"><li>Expliquez le principe général du contrôle de <i>flux</i> de <b>TCP</b>.</li><li>Expliquez deux mécanismes associés ayant pour but de permettre à <b>TCP</b> de s'adapter aux spécificités des applications ou de se protéger vis-à-vis de celles-ci.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Cela permet de réguler la vitesse sur le réseau afin d'éviter de surcharger le receveur. Pour se faire, l'expéditeur a une variable "receive window" pour qu'il sache combien de place disponible se trouve dans le buffer du receveur. Comme <b>TCP</b> ne peut pas surcharger les buffer : $LastByteRcvd - LastByteRead <= RcvBuffer$.
Le receiver window (rwnd) se définit comme suit : 

$$rwnd = RcvBuffer - (LastByteRcvd - LastByteRead)$$
</li>
<li>Nagle Algorithm : Quand les données viennent du socket un byte à la fois, on envoie le premier byte et on buffer le reste jusqu'à ce que le premier byte soit reçu. On envoie alors le reste par RTT en 1 fois. Silly Window Problem - Clark' solution : Le receveur envoi une mise à jour de la fenêtre si et seulement si le buffer est à moitié vide ou si un segment entier peut être reçu.</li></ol>
</div>



<h4 class="question">Combien d'adresses <b>IP</b> doit-on attribuer à un routeur ? Pourquoi ?</h4>
<div class="answer">
    Une seule car cela représente le routeur au sein du réseau. L'adresse <b>IP</b> est unique et fait donc référence à un objet bien précis. (C'est pas plutôt une adresse par interface ?)
</div>







<h4 class="question">Sachant que la couche de transport est équipée de mécanismes (Cf. <b>TCP</b>) pour récupérer les erreurs de bout-en-bout, pourquoi la couche de liaison de données implémente-t-elle aussi toute une série de fonctions de ce type, comme la détection d'erreurs, voire même la retransmission de trames erronées dans certains cas.</h4>
<div class="answer"><b>TCP</b> permet seulement de vérifier que le paquet soit bien reçu mais ne vérifie pas son contenu. Lors du transport, il pourrait y avoir une modification des données. La vérification du contenu est effectuée après afin de ne pas ralentir le débit.</div>



<h4 class="question"><ol class="alphabet"><li>Dans un réseau local composé de plusieurs segments <b>Ethernet</b> interconnectés par des commutateurs <b>Ethernet</b>, un ordinateur peut-il conserver son adresse <b>IP</b> si on le change de segment ? Pourquoi ?</li><li>En est-il de même si les segments sont interconnectés par des routeurs ? Pourquoi ?</li><li>Pourquoi est-il plus intéressant d'interconnecter des segments <b>Ethernet</b> par des commutateurs <b>Ethernet</b> plutôt que par des hubs ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>Oui car ils sont identifiés par leurs adresses <b>MAC</b>, l'adresse <b>IP</b> n'est pas très importante.</li>
<li>Non, car ici, le protocole <b>DHCP</b> attribuera une nouvelle adresse à l'ordinateur.</li>
<li>Car on ne peut mettre que maximum 4 hubs interconnectés par des cables de 100m maximum alors que les commutateurs n'ont pas de limites.</li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Quel mécanisme est utilisé par un serveur Web pour conserver de l'état relatif aux usagers ? Expliquez le principe en l'illustrant sur un scénario.</li><li>Expliquer le fonctionnement de HTTP avec <b>proxy</b>-cache à partir d'un scénario impliquant le client, le serveur et le <b>proxy</b>. Expliquez le gain d'efficacité lorsque l'objet est en cache.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>
    Les <b>cookies</b> sont définis par le <b>protocole de communication HTTP</b> comme étant une suite d'informations envoyée par un <b>serveur HTTP</b> à un <b>client HTTP</b>, que ce dernier renvoie à ce même <b>serveur HTTP</b> lorsqu'il lui pose la question. 

    Le <b>cookie</b> est l'équivalent d'un petit fichier texte stocké sur le terminal de l'internaute. Existants depuis plus de 20 ans, ils permettent aux développeurs de sites internet de conserver des données utilisateur afin de faciliter leur navigation et de permettre certaines fonctionnalités. Les cookies ont toujours été plus ou moins controversés car contenant des informations personnelles résiduelles pouvant potentiellement être exploitées par des tiers.

    Il est envoyé en tant qu'en-tête <b>HTTP</b> par le serveur web au navigateur web qui le renvoie inchangé à chaque fois qu'il accède au serveur. Un <b>cookie</b> peut être utilisé pour une authentification, une session (maintenance d'état), et pour stocker une information spécifique sur l'utilisateur, comme les préférences d'un site ou le contenu d'un panier d'achat électronique.

    Par exemple de scénario, lorsqu'on se connecte sur un site, un <b>cookie</b> peut être créé pour se connecter directement sur le compte sans devoir retaper le login/password. Ou encore garder en mémoire le panier d'achat sur un site e-commerce pour un achat ultérieur. Ce n'est donc principalement qu'une question de facilité pour l'utilisateur.
</li>
<li>
    Quand on utilise un <b>proxy</b>, c'est avec le <b>proxy</b> qu'on établit la connexion <b>TCP</b>, pas avec le vrai serveur. Après, le <b>proxy</b> se sert de l'info dans le header de la requête http pour rediriger la requête. Le <b>proxy</b> permet aussi de retenir des infos en cache. Si le serveur est down et que l'inforomation est en cache sur le <b>proxy</b>, on peut encore obtenir l'inforomation. Les <b>proxy</b>s permettent également de réduire les délais de réponse et le trafic vers le site, car s'il a déjà l'inforomation, on ne doit pas la demander au serveur. Il permet aussi de filtrer les connexions et de répartir les charges. On gagne donc en efficacité quand l'objet est en cache.
</li>
</ol></div>



<h4 class="question"><ol class="alphabet"><li>Dans un protocole de transport, si l'on numérote les segments modulo 2, montrez par un contre exemple qu'il est également nécessaire de numéroter les acquits pour assurer la fiabilité du transfert.</li><li>Dans quelle(s) situation(s) le protocole à bit alterné est-il quasiment aussi efficace qu'un protocole à grande fenêtre glissante ? Expliquez.</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li>
    Un paquet sur 2 contiendra donc la valeur 0 et l'autre, la valeur 1. Grâce à ça, si l'<b>ACK</b> est corrompu, le receveur va s'apercevoir que le nouveau paquet reçu est celui qu'il avait déjà reçu et va donc le jeter. Il va ensuite envoyer un <b>ACK</b> à nouveau pour passer au paquet suivant.
</li>
<li>
    Lorsqu'il y a qu'un seul paquet à envoyer. Sinon le stop & wait fait perdre beaucoup de temps et empêche la ligne d'avoir un débit correct.
</li>
</ol></div>




<h4 class="question"><ol class="alphabet"><li>Dans <b>TCP</b>, comment fixe-t-on les numéros des premiers segments transmis dans chaque sens d'une connexion ?</li><li>Si l'on attribuait systématiquement la valeur 0 (par exemple) à ces premiers numéros, quel serait le risque et comment pourrait-on l'éviter en conservant toutefois cette numérotation ? Quel serait l'inconvénient ?</li></ol></h4>
<div class="answer"><ol class="alphabet">
<li><b>TCP</b> utilise le <b>3-way handshake</b> et comme son nom l'indique, il se déroule en trois étapes:
    <ul>
        <li><b>SYN</b> (<b>synchronized</b>) : Le client qui désire établir une connexion avec un serveur va envoyer un premier paquet <b>SYN</b> au serveur. Le numéro de segment de ce paquet est un nombre aléatoire A.</li>
        <li><b>SYN-ACK</b> (<b>synchronize-acknowledge</b>) : Le serveur va répondre au client à l'aide d'un paquet <b>SYN-ACK</b>. Le numéro du <b>ACK</b> est égal au numéro de segment du paquet précédent (<b>SYN</b>) incrémenté de un (A + 1) tandis que le numéro de segment du paquet <b>SYN-ACK</b> est un nombre aléatoire B.</li>
        <li><b>ACK</b> (<b>acknowledge</b>): Pour terminer, le client va envoyer un paquet <b>ACK</b> au serveur qui va servir d'accusé de réception. Le numéro de segment de ce paquet est défini selon la valeur de l'acquittement reçu précédemment p.e. A + 1 et le numéro du <b>ACK</b> est égal au numéro de segment du paquet précédent (<b>SYN-ACK</b>) incrémenté de un (B + 1).</li>
    </ul>
Une fois le <b>3-way handshake</b> effectué, le client et le serveur ont reçu un acquittement de la connexion. Les étapes 1 et 2 définissent le numéro de segment pour la communication du client au serveur et les étapes 2 et 3 définissent le numéro de segment pour la communication dans l'autre sens. Une communication full-duplex est maintenant établie entre le client et le serveur.
</li>
<li>En effet, on repère une connexion avec les 2 adresses <b>IP</b> et les 2 numéros de <b>port</b>. Si cette connexion arrive à son terme et que juste après avoir fermé cette connexion, on rétabli une connexion avec les même <b>IP</b> et <b>ports</b> comment peut-on distinguer les 2 connexions (il pourrait y avoir un vieux paquet de la première connexion qui s'était baladé sur le réseau et qui est arrivé beaucoup plus tard)?</li>
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
        <legend>Temps de transmission <code>T_t</code></legend>
        $\begin{array}{rcl}
            T_t & = & \dfrac{\text{Nbre <code>N</code> de bits transmis}}{\text{débit de la source (en bps)}}\\
                & = & \text{ Temps entre l'envoi des bits 1 et <code>N</code>}
        \end{array}$
    </fieldset>
    <fieldset class="formula">
        <legend>Temps de transmission <code>T_p</code></legend>
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
        <img src="images/info-f303/simple-send" alt="Simple envoi" />
    </fieldset>
    <fieldset class="formula">
        <legend>Transformations</legend>
        $\begin{array}{lll}
            x \text{ octets} &=& 8x \text{ bits}\\
            x \text{ Kbps} &=& x10^{3} \text{ bps}\\
            x \text{ ms}   &=& x10^{-3} \text{ s}
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
        $T_{acquit} = \dfrac{octets_{en-tête}}{canal}$
    </fieldset>
</div>








<h4 class="question">
    Soit A et B deux machines située sur un même réseaux de 1Mbps ($10^6$). A envoie des données à B (la taille maximale des segments a été négociée à 512 bytes de données), les en-têtes <b>TCP</b> et <b>IP</b> forment un total de 40 bytes. B envoie un acquit (segment <b>TCP</b> vide) à A à la réception d'un segment, après le temps de traitement de celui-ci fixé à 100ms. La station B a une fenêtre de réception de 36 MSS. Le seuil initial pour l'algorithme de slow-start est de 16 MSS. Le temps de propagation est négligeable.
    <ol class="alphabet">
        <li>Que vaut le RTT ?</li>
        <li>Combien de temps faudra-t-il à A pour arriver à une fenêtre de congestion de taille maximale ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Étape par étape :
            <ol>
                <li>Temps de A vers B : $\dfrac{(512+40)8}{10^6} = 0.004416 $ s</li>
                <li>Temps de traitement de A : $0.1 $ s</li>
                <li>Temps de B vers A : $\dfrac{(40)8}{10^6} = 0.00032 $ s</li>
            </ol>
            Donc <code>1</code> RTT $ = 0.00416 + 0.1 + 0.00032 = 0.10448$ s
        </li>
        <li>
            <table>
                <thead>
                    <tr><th>RTT</th><th>ACK</th><th>CWND (MSS)</th><th>Envoyé (MSS)</th></tr>
                </thead>
                <tbody>
                    <tr><td>0</td><td>0</td><td>1</td><td>1</td></tr>
                    <tr><td>1</td><td>1</td><td>2</td><td>2</td></tr>
                    <tr><td>2</td><td>2</td><td>4</td><td>4</td></tr>
                    <tr><td>3</td><td>4</td><td>8</td><td>8</td></tr>
                    <tr><td>4</td><td>8</td><td>16</td><td>16</td></tr>
                    <tr><td>5</td><td>16</td><td>17</td><td>17</td></tr>
                    <tr><td>...</td><td>...</td><td>...</td><td>...</td></tr>
                    <tr><td>24</td><td>35</td><td>36</td><td>36</td></tr>
                </thead>
            </table>
            Donc <code>24</code> RTT $ = 24 * 0.10448 = 2,50752$ s
        </li>
    </ol>
</div>









<h4 class="question">
    Soit A et B deux machines située sur un même réseaux de 1Mbps ($10^6$). A envoie des données à B (la taille maximale des segments à été négociée à 256 bytes de données), les en-têtes <b>TCP</b> et <b>IP</b> forment un total de 40 bytes. B envoi un acquit (segment <b>TCP</b> vide) à A à la réception d'un segment, après le temps de traitement de celui-ci fixé à 20ms. La station B a une fenêtre de réception de 12 MSS. Le seuil initial pour l'algorithme de slow-start est de 8 MSS.
    <ol class="alphabet">
        <li>Que vaut le RTT ?</li>
        <li>Combien de temps faudra-t-il à A pour arriver à une fenêtre de congestion de taille maximale ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            Étape par étape :
            <ol>
                <li>Temps de A vers B : $\dfrac{(256+40)8}{10^6} = 0.002368 $ s</li>
                <li>Temps de traitement de A : $0.02 $ s</li>
                <li>Temps de B vers A : $\dfrac{(40)8}{10^6} = 0.00032 $ s</li>
            </ol>
            Donc <code>1</code> RTT $ = 0.002368 + 0.1 + 0.00032 = 0.102688$ s
        </li>
        <li>
            <table>
                <thead>
                    <tr><th>RTT</th><th>ACK</th><th>CWND (MSS)</th><th>Envoyé (MSS)</th></tr>
                </thead>
                <tbody>
                    <tr><td>0</td><td>0</td><td>1</td><td>1</td></tr>
                    <tr><td>1</td><td>1</td><td>2</td><td>2</td></tr>
                    <tr><td>2</td><td>2</td><td>4</td><td>4</td></tr>
                    <tr><td>3</td><td>4</td><td>8</td><td>8</td></tr>
                    <tr><td>4</td><td>16</td><td>9</td><td>9</td></tr>
                    <tr><td>...</td><td>...</td><td>...</td><td>...</td></tr>
                    <tr><td>7</td><td>11</td><td>12</td><td>12</td></tr>
                </thead>
            </table>
            Donc <code>7</code> RTT $ = 7 * 0.102688 = 0.718816$ s
        </li>
    </ol>
</div>


<h4 class="question">
    Un émetteur envoie des paquets à un récepteur à l'aide d'un protocole de transport <i>stop and wait</i>. Le débit brut du réseau est de 1 Mbps. Chacun de ces paquets contient 1000 bits de données utiles. L'émetteur retransmet un paquet s'il ne reçoit pas d'acquit (24 bytes) avant l'expiration de son timer, fixé à 1 s. Sachant qu'en moyenne un paquet (données ou acquit) sur 100 n'arrive pas à bon port, calculez l'efficacité moyenne de la connexion. On supposera négligeable les délais de propagations et les overheads introduits par l'encapsulation des données.</h4>
<div class="answer">
Débit utile $= \dfrac{bits}{T_{t} + T_{ACK} + T_p} = \dfrac{1000}{\dfrac{1000}{10.10^6}+\dfrac{24.8}{10.10^6}+0}$<br>

Efficacité $= \dfrac{\text{débit utile}}{\text{vitesse}} = \dfrac{1000}{1000+24.8}=0.839=83,9\%$<br>


Timer?
</div>

<h4 class="question">
    Deux entités A et B ont établi une connexion <b>TCP</b> passant par deux routeurs <code>R</code> et <code>S</code>. Les liaisons $A \leftrightarrow R$, $R \leftrightarrow S$ et $S \leftrightarrow B$ ont un débit de respectivement 10 Mbps, 1 Mbps, et 1 Mbps. Chacune de ces liaisons a un temps de propagation de 10 ms. <code>A</code> souhaite envoyer des données à <code>B</code> le plus rapidement possible. La fenêtre de réception de <code>B</code> est de 18 MSS, le MSS ayant été négocié à 10 Kb, en-tête compris. Le seuil de l'algorithme de <i>slow-start</i> est initialement fixé à 12 MSS. A chaque réception d'un segment, <code>B</code> répond par un acquit de 24 octets, en-tête compis. Un timer de retransmission de 1 s est enclenché à chaque début d'envoi d'une rafale. Combien de temps faut-il à <code>A</code> pour arrive à un fenetre de congestion de taille maximale, sachant que la troisième rafale sera entièrement perdue et qu'il n'y aura pas d'autres pertes ?
</h4>
<div class="answer">
$T_{MSS|10Mbps} = \dfrac{10000}{10.10^7} = 0.0001$ s<br>
$T_{MSS|1Mbps} = \dfrac{10000}{10.10^6} = 0.001$ s<br>
$T_{propagation} = 10$ ms$ = 0.01$ s<br>
$T_{ACK|10Mbps} = \dfrac{24.8}{10.10^7} = 0.00000192$ s<br>
$T_{ACK|1Mbps} = \dfrac{24.8}{10.10^6} = 0.0000192$ s<br>
$\begin{array}{lll}
RTT &=& T_{MSS|10Mbps} + 2 T_{MSS|1MBps} + 2 T_{propagation} + T_{ACK} + 2T_{ACK|1Mbps}\\
&=& 0.0001 + 2*0.001 + 2*0.01 + 0.00000192 + 2*0.0000192\\
&=& 0.02214032 s
\end{array}$<br>
$\dfrac{rwnd(10000)}{RTT}=\dfrac{12(10000)}{0.02214032} = 5419975.863 = 5419975$ bps<br>
$cwnd = \dfrac{1000000*0.02214032}{10000} = 2.214032 = 2$
<table>
    <thead>
        <tr><th>RTT</th><th>ACK</th><th>CWND (MSS)</th><th>Envoyé (MSS)</th><th>Seuil (MSS)</th></tr>
    </thead>
    <tbody>
        <tr><td>0</td><td>-</td><td>1</td><td>1</td><td>12</td></tr>
        <tr><td>1</td><td>1</td><td>2</td><td>2</td><td>12</td></tr>
        <tr><td>2</td><td>2</td><td>4</td><td>4</td><td>12</td></tr>
        <tr><td>3</td><td>-</td><td>1</td><td>1</td><td>6</td></tr>
        <tr><td>4</td><td>1</td><td>2</td><td>2</td><td>6</td></tr>
        <tr><td>5</td><td>2</td><td>4</td><td>4</td><td>6</td></tr>
        <tr><td>6</td><td>4</td><td>6</td><td>6</td><td>6</td></tr>
        <tr><td>7</td><td>6</td><td>7</td><td>7</td><td>6</td></tr>
        <tr><td>8</td><td>7</td><td>8</td><td>8</td><td>6</td></tr>
        <tr><td>...</td><td>...</td><td>...</td><td>...</td><td>6</td></tr>
        <tr><td>18</td><td>17</td><td>18</td><td>18</td><td>6</td></tr>
    </thead>
</table>
Il faut donc Timeout + 18 RTT : $1 + 18*0.02214032 = 1.39852576 s$
</div>











<h4 class="question">
    Trois stations <code>S_1</code>, <code>S_2</code> et <code>S_3</code> se partagent un segment de réseau de type 802.3 (CSMA/CD, 10Mbps). La première station désire émettre une trame de 1000 bits alors que les deux autres stations souhaitent émettre chacune deux trames de 1000 bits. La durée d'un slot de contention a été fixée à $2\tau = 2.10^{-6}$ s. Lorsque plusieurs stations veulent accéder au réseau, on supposera que la probabilité de retransmission dans un slot est constante et égale à $p = \dfrac{1}{2}$. Calculez :
    <ol class="alphabet">
        <li>la durée moyenne d'envoi des 2 premières trames,</li>
        <li>la durée moyenne d'envoi des 5 trames.</li>
    </ol>
    Sachant que les stations commencent à émettre leur première trame en même temps.
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            La probabilité qu'une des 3 stations acquiert le canal dans un slot(libre) est : $A_3 = kp(1-p)^{k-1} = 3\dfrac{1}{2}(1-\frac{1}{2})^{3-1} = 0.375$<br>
            La probabilité qu'une des 2 stations acquiert le canal dans un slot(libre) est : $A_2 = kp(1-p)^{k-1} = 2\dfrac{1}{2}(1-\frac{1}{2})^{2-1} = 0.5$<br>
            $C_3 = \frac{2\tau}{A_3} = \dfrac{2*10^{-6}}{0.375} = 0.000 005 33$<br>
            $C_2 = \frac{2\tau}{A_2} = \dfrac{2*10^{-6}}{0.5} = 0.000 004$<br>
            $T = \dfrac{1000}{10*10^6} = 0.0001s$
            <figure>
                <img src="images/info-f303/csma_0" alt="CSMA" />
                <figcaption>CSMA</figcaption>
            </figure>
            $\dfrac{5}{3}C_3+\dfrac{1}{3}C_2+2T=0.0002102$
        </li>
        <li>
            <figure>
                <img src="images/info-f303/csma_1" alt="CSMA" />
                <figcaption>CSMA</figcaption>
            </figure>
            $arbre1 = \dfrac{1}{3}C_3+\dfrac{5}{6}C_2+\dfrac{20}{12}T$<br>
            $arbre2 = arbre3 = \dfrac{7}{9}*C_3+\dfrac{4}{9} C_2 + \dfrac{20}{12} T$<br>
            $\dfrac{arbre1}{3}+\dfrac{arbre2}{3}+\dfrac{arbre3}{3}=\dfrac{17}{9}C_3+\dfrac{31}{18}C_2+5T=0.0005169$
        </li>
    </ol>
</div>

<h4 class="question">
    Trois stations <code>S_1</code>, <code>S_2</code> et <code>S_3</code> se partagent un segment de réseau de type 802.3 (CSMA/CD, 10Mbps). La première station désire émettre une trame de 1000 bits alors que les deux autres stations souhaitent émettre chacune deux trames de 1250 bits alors que les deux autres stations souhaitent émettre chacune deux trames de 1000 bits. La station <code>S_3</code> doit attendre l'envoi de la première trame de <code>S_2</code> avant de commencer à émettre sur le réseau. La durée d'un slot de contention a été fixée à $2\tau = 4.10^{-6}$ s. Considérez les temps de réaction des différentes stations comme nul. Lorsque plusieurs stations veulent accéder au réseau, on supposera que la probabilité de retransmission dans un slot est constante et égale à $p = \dfrac{1}{4}$. Calculez la durée moyenne d'envoi des 2 premières trames. Sachant que les stations commencent à émettre leur première trame en même temps, sous les contraintes déjà évoquées précédemment.
</h4>
<div class="answer">
    La probabilité qu'une des 2 stations acquiert le canal dans un slot(libre) est :
    $A_2 = kp(1-p)^{k-1} = \dfrac{2}{4}\left(1-\dfrac{1}{4}\right)^{2-1} = 0.375$<br>

    La probabilité qu'une des 3 stations acquiert le canal dans un slot(libre) est : 
    $A_3 = kp(1-p)^{k-1} = \dfrac{3}{4}\left(1-\dfrac{1}{4}\right)^{3-1} = 0.421875$<br>



    $C_2 = \dfrac{2\tau}{A_2} = \dfrac{4*10^{-6}}{0.5} = 0.000 010 67$<br>
    $C_3 = \dfrac{2\tau}{A_3} = \dfrac{4*10^{-6}}{0.421875} = 0.000 009 48$<br>
    $T_1 = \dfrac{1250}{10*10^6} = 0.000125s$<br>
    $T_{2,3} = \dfrac{1000}{10*10^6} = 0.0001s$
    <figure>
        <img src="images/info-f303/csma_2" alt="CSMA" />
        <figcaption>CSMA</figcaption>
    </figure>
    $C_2+\dfrac{1}{2}(T_1+T_2)+\dfrac{1}{2}(T_2+C_3+\dfrac{T_1}{3}+\dfrac{T_2}{3}+\dfrac{T_3}{3}) = 0.000232$
</div>

<h4 class="question">
    Quatre stations <code>S_1</code>, <code>S_2</code> et <code>S_3</code> et <code>S_4</code> se partagent un segment de réseau de type 802.3 (CSMA/CD, 10Mbps). La première station désire émettre une trame de 1000 bits, la deuxième une trame de 1250 bits et les deux autres stations souhaitent émettre chacune deux trames de 1500 bits. La durée d'un slot de contention a été fixée à $2\tau = 2.10^{-6}$ s. Lorsque plusieurs stations veulent accéder au réseau, on supposera que la probabilité de retransmission dans un slot est constante et égale à $p = \dfrac{1}{3}$. Calculez la durée moyenne d'envoi des 3 premières trames. Sachant que les stations commencent à émettre leur première trame en même temps.
</h4>
<div class="answer">
    La probabilité qu'une des 2 stations acquiert le canal dans un slot(libre) est :
    $A_2 = kp(1-p)^{k-1} = \dfrac{2}{3}\left(1-\dfrac{1}{3}\right)^{2-1} = 0.444$<br>

    La probabilité qu'une des 3 stations acquiert le canal dans un slot(libre) est : 
    $A_3 = kp(1-p)^{k-1} = \dfrac{3}{3}\left(1-\dfrac{2}{3}\right)^{3-1} = 0.444$<br>

    La probabilité qu'une des 4 stations acquiert le canal dans un slot(libre) est : 
    $A_4 = kp(1-p)^{k-1} = \dfrac{4}{3}\left(1-\dfrac{4}{3}\right)^{4-1} = 0.395$<br>


    $C_2 = \dfrac{2\tau}{A_2} = \dfrac{2*10^{-6}}{0.444} = 0.0000045$<br>
    $C_3 = \dfrac{2\tau}{A_3} = \dfrac{2*10^{-6}}{0.444} = 0.0000045$<br>
    $C_4 = \dfrac{2\tau}{A_4} = \dfrac{2*10^{-6}}{0.395} = 0.0000050625$<br>

    $T_1 = \dfrac{1000}{10*10^6} = 0.0001s$<br>
    $T_2 = \dfrac{1250}{10*10^6} = 0.000125s$<br>
    $T_3 = T_4 = \dfrac{1500}{10*10^6} = 0.00015s$
    <figure>
        <img src="images/info-f303/csma_3" alt="CSMA" />
        <figcaption>CSMA</figcaption>
    </figure>
    $arbre1 = C_4 + \dfrac{5}{3}C_3 + \dfrac{1}{3}C_2 + T_1 + \dfrac{5}{9}T_2 + \dfrac{13}{9}T_{3,4} = 0.0003952$<br>
    $arbre2 = C_4 + \dfrac{5}{3}C_3 + \dfrac{1}{3}C_2 + T_2 + \dfrac{5}{9}T_1 + \dfrac{13}{9}T_{3,4} = 0.0004063$<br>
    $arbre3 = \dfrac{9}{4}C_4 + \dfrac{3}{4}C_3 + \dfrac{23}{48}T_1 + \dfrac{23}{48}T_2 + \dfrac{98}{48}T_{3,4} = 0.0004288$<br>
    $\dfrac{arbre1}{4} + \dfrac{arbre2}{4} + \dfrac{2 arbre3}{4} = 0.0004148$
</div>
























<h4 class="question">
    Soit le réseau représenté sur la figure. Nous supposons que l'algorithme de <i>spanning tree</i> est stabilisé et que toutes les tables d'acheminement des ponts sont initialement vides.
    <figure>
        <img src="images/info-f303/topologie" alt="Topologie" />
        <figcaption>Topologie</figcaption>
    </figure>
    <ol class="alphabet">
        <li>Donnez les tables relatives au <i>spanning tree</i> de chaque pont.</li>
        <li>La station B envoie une trame à la station A dont elle connaît l'adresse <b>MAC</b>, celle-ci lui répond en lui envoyant à son tour une trame. Décrivez l'évolution des tables d'acheminement des ponts ainsi que les différentes trames qui circulent sur chaque LAN.</li>
        <li>Le pont 4 tombe en panne. Décrivez un scénario possible d'échange des BPDU entre les ponts et l'évolution des tables relatives au <i>spanning tree</i> jusqu'à stabilité.</li>
    </ol>
</h4>
<div class="answer">
<ol class="alphabet">
    <li>
        <table>
            <thead>
                <tr><th>1</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>0</td><td>1</td><td>FP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>0</td><td>1</td><td>FP</td></tr>
                <tr><th></th><td>3</td><td>1</td><td>0</td><td>1</td><td>FP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>2</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>1</td><td>5</td><td>BP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>1</td><td>4</td><td>RP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>3</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>0</td><td>1</td><td>BP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>4</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>1</td><td>4</td><td>FP</td></tr>
                <tr><th></th><td>3</td><td>1</td><td>1</td><td>4</td><td>FP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>5</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>1</td><td>5</td><td>FP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>1</td><td>4</td><td>BP</td></tr>
                <tr><th></th><td>3</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>6</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>1</td><td>5</td><td>BP</td></tr>
                <tr><th></th><td>3</td><td>1</td><td>1</td><td>4</td><td>BP</td></tr>
            </tbody>
        </table>
    </li>
    <li>
        <ul>
            <li>IP Source = IP de B</li>
            <li>IP Destination = IP de A</li>
        </ul>
        <table>
            <thead>
                <tr><th>Etape</th><th>1</th><th>2</th><th>3</th></tr>
            </thead>
            <tbody>
                <tr><th>Mac source</th><td>B</td><td>4(eth1)</td><td>1(eth3)</td></tr>
                <tr><th>Mac Destination</th><td>4(eth3)</td><td>1(eth2)</td><td>A</td></tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </li>
    <li>
        Le pont 4 tombe en panne, le pont 6, 5 et 2 ne recoivent plus de BPDU(1,1,4) de la part du pont 4 et l'entrée le concernant arrive à expiration ; ils vont donc commencer à émettre (BP &rarr; FP).
        Le pont 2 va recevoir BPDU(1,1,5) sur son port 2 et va mettre sa table à jour au profit du port 1 qui passe de (BP &rarr; RP) mais le port 2 devient BP.
        <table>
            <thead>
                <tr><th>1</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>0</td><td>1</td><td>FP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>0</td><td>1</td><td>FP</td></tr>
                <tr><th></th><td>3</td><td>1</td><td>0</td><td>1</td><td>FP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>2</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>1</td><td>5</td><td>RP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>1</td><td>5</td><td>BP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>3</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>0</td><td>1</td><td>BP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>5</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>1</td><td>5</td><td>FP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>1</td><td>5</td><td>FP</td></tr>
                <tr><th></th><td>3</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr><th>6</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                
                <tr><th></th><td>1</td><td>1</td><td>0</td><td>1</td><td>RP</td></tr>
                <tr><th></th><td>2</td><td>1</td><td>1</td><td>5</td><td>BP</td></tr>
                <tr><th></th><td>3</td><td>1</td><td>2</td><td>6</td><td>FP</td></tr>
            </tbody>
        </table>
    </li>
</ol>
</div>









<h4 class="question">Considérons le réseau de la figure. La table contient diverses informations sur les routeurs.
<figure>
    <img src="images/info-f303/topologie3" alt="Topologie" />
    <figcaption>Topologie</figcaption>
</figure>
<figure>
    <table>
        <thead>
            <tr><th>Routeur</th><th>Interface</th><th>Netmask</th><th>Host ID</th></tr>
        </thead>
        <tbody>
            
            <tr><td>R</td><td>eth0</td><td>255.255.255.0</td><td>1</td></tr>
            <tr><td></td><td>eth1</td><td>255.255.255.0</td><td>1</td></tr>
            <tr><td>S</td> <td>eth0</td><td>255.255.240.0</td><td>2</td></tr>
            <tr><td></td><td>eth1</td><td>255.255.255.0</td><td>2</td></tr>
            <tr><td></td><td>eth2</td><td>255.255.224.0</td><td>2</td></tr>
            <tr><td>T</td><td>eth0</td><td>255.255.224.0</td><td>3</td></tr>
            <tr><td></td><td>eth1</td><td>255.255.224.0</td><td>3</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    <figcaption>Information sur les routeurs</figcaption>
</figure>
<ol class="alphabet">
    <li>Donnez la table de routage de S.</li>
    <li>La station C dont l'adresse <b>IP</b> est 165.128.76.193 est ajoutée au réseau. Où la station C sera-t-elle connectée ? Quel sera son ID ?</li>
    <li>Donnez l'adresse <b>IP</b> de l'interface eth0 du routeur S.</li>
    <li>Combien d'adresses <b>IP</b> différentes pourraient être attribuées à A?</li>
</ol></h4>
<div class="answer">
<ol class="alphabet">
    <li>
        <table>
            <thead>
                <tr><th>Destination</th><th>Gateway</th><th>Masque</th><th>Flags</th><th>Iface</th></tr>
            </thead>
            <tbody>
                <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
                <tr><td>165.128.48.0</td><td>*</td><td>255.255.240.0</td><td>U</td><td>eth0</td></tr>
                <tr><td>165.128.240.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth1</td></tr>
                <tr><td>165.128.64.0</td><td>*</td><td>255.255.224.0</td><td>U</td><td>eth2</td></tr>
                <tr><td>165.128.96.0</td><td>165.128.64.2</td><td>255.255.224.0</td><td>UG</td><td>eth2</td></tr>
                <tr><td>default</td><td>165.128.240.2</td><td>0.0.0.0</td><td>UG</td><td>eth1</td></tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </li>
    <li>
        <table>
            <tbody>
                <tr><th>x.x.76.193</th><td>x.x.0100 1100.1100 0001</td></tr>
                <tr><th>x.x.240.0</th><td>x.x.1111 0000.0000 0000</td></tr>
                <tr><th>x.x.255.0</th><td>x.x.1111 1111.0000 0000</td></tr>
                <tr><th>x.x.224.0</th><td>x.x.1110 0000.0000 0000</td></tr>
            </tbody>
        </table>
        Seul possible 255.0 pour le 1100 du 76. Le masque 255.0 est celui du 124.128.240.0 et son host ID sera simplement 193.
    </li>
    <li>
        165.128.48.0
    </li>
    <li>
        $255.255.224.0 = 255.255.1110 0000.0000 0000$ donc nb de 0 : $2^{13} = 8192$
    </li>
</ol>
</div>












<h4 class="question">Considérons le réseau de la figure. La table 1 contient diverses informations sur les routeurs.
<figure>
    <img src="images/info-f303/topologie2" alt="Topologie" />
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
    <li>Donnez la table d'acheminement de R.</li>
    <li>Combien d'adresses <b>IP</b> reste-t-il de disponibles dans le réseau ?</li>
    <li>La station B envoie un paquet <b>IP</b> à la station A. Décrivez les trames et paquets circulant sur l'intranet, ainsi que l'évolution des différentes tables des routeurs et des stations.</li>
</ol></h4>
<div class="answer"><ol class="alphabet">
<li>
    <table>
        <thead>
            <tr><th>Destination</th><th>Gateway</th><th>Masque</th><th>Flags</th><th>Iface</th></tr>
        </thead>
        <tbody>
            <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
            <tr><td>124.178.240.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth1</td></tr>
            <tr><td>124.178.48.0</td><td>*</td><td>255.255.240.0</td><td>U</td><td>eth0</td></tr>
            <tr><td>124.178.64.0</td><td>*</td><td>255.255.224.0</td><td>U</td><td>eth2</td></tr>
            <tr><td>124.178.96.0</td><td>124.178.64.2</td><td>255.255.224.0</td><td>UG</td><td>eth2</td></tr>
            <tr><td>default</td><td>124.178.240.3</td><td>0.0.0.0</td><td>UG</td><td>eth1</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</li>
<li>
    <table>
        <thead>
            <tr><th>Destination</th><th>Masque</th><th># IP libres</th></tr>
        </thead>
        <tbody>
            <tr><td>124.178.240.0</td><td>255.255.255.0</td><td>$2^8 - R(eth1) - T(eth1) - 2 = 252$</td></tr>
            <tr><td>124.178.48.0</td><td>255.255.11110000.00000000</td><td>$2^{12} - R(eth0) - A - 2 = 4092$</td></tr>
            <tr><td>124.178.64.0</td><td>255.255.11100000.00000000</td><td>$2^{13} - R(eth0) - S(eth1) - 2 = 8188$</td></tr>
            <tr><td>124.178.96.0</td><td>255.255.11100000.00000000</td><td>$2^{13} - S(eth0) - B - 2 = 8188$</td></tr>
            <tr><td></td><td></td><td>$Total = 20720$</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</li>
<li>
    <ul>
        <li>IP Source = IP de B = 124.178.96.X</li>
        <li>IP Destination = IP de A = 124.178.62.53</li>
    </ul>
    <table>
        <thead>
            <tr><th>Etape</th><th>1</th><th>2</th><th>3</th></tr>
        </thead>
        <tbody>
            <tr><th>Mac source</th><td>B</td><td>S(eth1)</td><td>R(eth0)</td></tr>
            <tr><th>Mac Destination</th><td>S(eth0)</td><td>R(eth2)</td><td>A</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</li>
</ol></div>











<h4 class="question">
    Considérons le réseau de la figure. Les tables contient diverses informations sur les routeurs.
    <figure>
        <img src="images/info-f303/topologie4" alt="Topologie" />
        <figcaption>Topologie</figcaption>
    </figure>
    <figure>
        <table>
            <thead>
                <tr><th>LAN</th><th>Address</th></tr>
            </thead>
            <tbody>
                <tr><td>1</td> <td>192.200.36.0</td></tr>
                <tr><td>2</td><td>192.200.34.0</td></tr>
                <tr><td>3</td><td>200.14.208.0</td></tr>
                <tr><td>4</td><td>200.14.2.0</td></tr>
                <tr><td>5</td><td>128.128.128.0</td></tr>
                <tr><td>6</td><td>129.129.129.0</td></tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        <figcaption>Information sur les routeurs</figcaption>
    </figure>
    <figure>
        <table>
            <thead>
                <tr><th>LAN</th><th>Address</th></tr>
            </thead>
            <tbody>
                <tr><td>A</td> <td>13</td></tr>
                <tr><td>B</td><td>125</td></tr>
                <tr><td>C</td><td>234</td></tr>
                <tr><td>D</td><td>50</td></tr>
                <tr><td>E</td><td>79</td></tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        <figcaption>Information sur les routeurs</figcaption>
    </figure>
    <figure>
        <table>
            <thead>
                <tr><th>Routeur</th><th>Interface</th><th>Netmask</th><th>Host ID</th></tr>
            </thead>
            <tbody>
                <tr><td>R</td><td>eth0</td><td>255.255.255.0</td><td>1</td></tr>
                <tr><td></td><td>eth1</td><td>255.255.255.0</td><td>1</td></tr>
                <tr><td>S</td><td>eth0</td><td>255.255.255.0</td><td>2</td></tr>
                <tr><td></td><td>eth1</td><td>255.255.224.0</td><td>2</td></tr>
                <tr><td>T</td><td>eth0</td><td>255.255.224.0</td><td>3</td></tr>
                <tr><td></td><td>eth1</td><td>255.255.255.0</td><td>3</td></tr>
                <tr><td>U</td><td>eth0</td><td>255.255.255.0</td><td>4</td></tr>
                <tr><td></td><td>eth1</td><td>255.255.255.0</td><td>4</td></tr>
                <tr><td>V</td><td>eth0</td><td>255.255.255.0</td><td>5</td></tr>
                <tr><td></td><td>eth1</td><td>255.255.255.0</td><td>5</td></tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        <figcaption>Information sur les routeurs</figcaption>
    </figure>
    <ol class="alphabet">
        <li>Donnez la table d'acheminement de R.</li>
        <li>La station A envoie un paquet IP à la station B. Décrivez les trames et paquets circulant sur l'intranet, ainsi que l'évolution des différentes tables des routeurs et des stations</li>
        <li>Oublions les informations données dans les tables et ne regardons que les LAN 5 et 6 ainsi que les routeurs R, U et V. L'adresse du LAN 6 devient : 124.178.16.0 et l'adresse du LAN 5 devient 124.178.24.0. De plus, la station A aura pour host ID 517 et la station C aura pour host ID 517. Le routeur R pourra-t-il fusionner les entrées de sa table d'acheminement sachant que A et C ont le même host ID ? Que se passera-t-il losque C recevra un paquet où le host ID est de 517 ?</li>
    </ol>
</h4>
<div class="answer">
    <ol class="alphabet">
        <li>
            <table>
                <thead>
                    <tr><th>Destination</th><th>Gateway</th><th>Masque</th><th>Flags</th><th>Iface</th></tr>
                </thead>
                <tbody>
                    <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
                    <tr><td>192.200.36.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth0</td></tr>
                    <tr><td>192.200.34.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth1</td></tr>
                    <tr><td>200.14.208.0</td><td>192.200.34.2</td><td>255.255.224.0</td><td>UG</td><td>eth1</td></tr>
                    <tr><td>200.14.2.0</td><td>192.200.34.2</td><td>255.255.255.0</td><td>UG</td><td>eth1</td></tr>
                    <tr><td>128.128.128.0</td><td>192.200.34.4</td><td>255.255.255.0</td><td>UG</td><td>eth1</td></tr>
                    <tr><td>129.129.129.0</td><td>192.200.34.4</td><td>255.255.255.0</td><td>UG</td><td>eth1</td></tr>
                    <tr><td>default</td><td>192.200.34.2</td><td>0.0.0.0</td><td>UG</td><td>eth1</td></tr>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            Fusion de default, LAN3 et LAN4
            <table>
                <thead>
                    <tr><th>Destination</th><th>Gateway</th><th>Masque</th><th>Flags</th><th>Iface</th></tr>
                </thead>
                <tbody>
                    <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
                    <tr><td>192.200.36.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth0</td></tr>
                    <tr><td>192.200.34.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth1</td></tr>
                    <tr><td>128.128.128.0</td><td>192.200.34.4</td><td>255.255.255.0</td><td>UG</td><td>eth1</td></tr>
                    <tr><td>129.129.129.0</td><td>192.200.34.4</td><td>255.255.255.0</td><td>UG</td><td>eth1</td></tr>
                    <tr><td>default</td><td>192.200.34.2</td><td>0.0.0.0</td><td>UG</td><td>eth1</td></tr>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </li>
        <li>
            <ul>
                <li>IP Source = IP de A = 129.129.129.13</li>
                <li>IP Destination = IP de B = 200.14.2.125</li>
            </ul>
            <table>
                <thead>
                    <tr><th>Etape</th><th>1</th><th>2</th><th>3</th><th>4</th></tr>
                </thead>
                <tbody>
                    <tr><th>Mac source</th><td>A</td><td>U(eth1)</td><td>S(eth1)</td><td>T (eth1)</td></tr>
                    <tr><th>Mac Destination</th><td>U(eth0)</td><td>S(eth0)</td><td>T (eth0)</td><td>B</td></tr>
                </tbody>
            </table>
        </li>
        <li>
            Oui, sans aucun problème car ...
        </li>
    </ol>
</div>




<h4 class="question">
    Considérons le réseau de la figure. Les tables contient diverses informations sur les routeurs.
    <figure>
        <img src="images/info-f303/topologie5" alt="Topologie" />
        <figcaption>Topologie</figcaption>
    </figure>
    <figure>
        <table>
            <thead>
                <tr><th>Routeur</th><th>Interface</th><th>Host ID</th></tr>
            </thead>
            <tbody>
                <tr><td>R</td><td>eth0</td><td>2</td></tr>
                <tr><td></td><td>eth1</td><td>2</td></tr>
                <tr><td>T</td><td>eth0</td><td>3</td></tr>
                <tr><td></td><td>eth1</td><td>3</td></tr>
                <tr><td>V</td><td>eth0</td><td>4</td></tr>
                <tr><td></td><td>eth1</td><td>4</td></tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        <figcaption>Information sur les routeurs</figcaption>
    </figure>
    <figure>
        <table>
            <thead>
                <tr><th>Station</th><th>Interface</th><th>IP</th><th>Netmask</th></tr>
            </thead>
            <tbody>
                <tr><td>A</td><td>eth0</td><td>140.140.140.1</td><td>0xffff0000</td></tr>
                <tr><td>B</td><td>eth0</td><td>150.150.150.1</td><td>0xffffff00</td></tr>
                <tr><td>C</td><td>eth0</td><td>160.160.160.1</td><td>0xffffff00</td></tr>
                <tr><td>D</td><td>eth0</td><td>?</td><td>?</td></tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        <figcaption>Information sur les routeurs</figcaption>
    </figure>
    <ol class="alphabet">
        <li>Donnez l'adresse IP de D sachant que son host ID est 513.</li>
        <li>2 Donnez les tables d'acheminement de R, V, A et B.</li>
        <li>3 Considérons un transfert unidirectionnel de données entre A et B. Donnez les adresses IP qui sont utilisées dans les datagrammes qui circulent sur le réseau.</li>
    </ol>
</h4>
<div class="answer">
<ol class="alphabet">
<li>
    Pour déterminer l'adresse IP de D, il nous manque son netmask et son network ID. Ces valeurs sont identiques pour toutes les adresses IP se trouvant sur le même sous-réseau que D. Nous pourrions donc utiliser
    $IP_{R_{eth0}}$ , $IP_{T_{eth0}}$ ou <code>IP_A</code>. Nous avons :
    <code></code>\begin{array}{rcl}
    IP_A &=& 10001100.10001100.10001100.00000001\\
    Netmask &=& 11111111.11111111.00000000.00000000\\
    IP_A\ AND\ Netmask &=& 10001100.10001100.00000000.00000000\\
    \end{array}<code></code>
    Car $IP_A = 140.140.140.1$ L'adresse IP de D est de la forme :
    
$$10001100.10001100.xxxxxxxx.xxxxxxxx$$

    où la partie non définie est complétée avec le hostID. Le hostID de D est
    513. L'encodage de $513 = 512 + 1 = 2^9 + 2^0$ sur 16 bits est
    00000010.00000001. L'adresse du terminal D est donc :
    <code></code>\begin{array}{rcl}
    IP_{D} &=& 10001100.10001100.00000010.00000001\\
    &=& 140.140.2.1
    \end{array}<code></code>
</li>
<li>
    La table d'acheminement la plus probable pour R est :
    <table>
        <thead>
            <tr><th>Destination</th><th>Gateway</th><th>Genmask</th><th>Flags</th><th>Iface</th></tr>
        </thead>
        <tbody>
            <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
            <tr><td>140.140.0.0</td><td>*</td><td>255.255.0.0</td><td>U</td><td>eth0</td></tr>
            <tr><td>150.150.150.0</td><td>160.160.160.4</td><td>255.255.255.0</td><td>UG</td><td>eth1</td></tr>
            <tr><td>160.160.160.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth1</td></tr>
            <tr><td>default</td><td>140.140.0.3</td><td>0.0.0.0</td><td>UG</td><td>eth0</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    Une table d'acheminement possible pour V est :
    <table>
        <thead>
            <tr><th>Destination</th><th>Gateway</th><th>Genmask</th><th>Flags</th><th>Iface</th></tr>
        </thead>
        <tbody>
            <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
            <tr><td>150.150.150.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth0</td></tr>
            <tr><td>160.160.160.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth1</td></tr>
            <tr><td>140.140.0.0</td><td>160.160.160.2</td><td>255.255.0.0</td><td>UG</td><td>eth1</td></tr>
            <tr><td>default</td><td>160.160.160.2</td><td>0.0.0.0</td><td>UG</td><td>eth1</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    Le comportement du routeur pour les entrées $140.140.0.0$ et default est le même (envoi du paquet à Reth1) et on peut regrouper ces entrées. La table d'acheminement la plus probable pour V est :
    <table>
        <thead>
            <tr><th>Destination</th><th>Gateway</th><th>Genmask</th><th>Flags</th><th>Iface</th></tr>
        </thead>
        <tbody>
            <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
            <tr><td>150.150.150.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth0</td></tr>
            <tr><td>160.160.160.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth1</td></tr>
            <tr><td>default</td><td>160.160.160.2</td><td>0.0.0.0</td><td>UG</td><td>eth1</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    La table d'acheminement la plus probable pour A est :
    <table>
        <thead>
            <tr><th>Destination</th><th>Gateway</th><th>Genmask</th><th>Flags</th><th>Iface</th></tr>
        </thead>
        <tbody>
            <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
            <tr><td>140.140.0.0</td><td>*</td><td>255.255.0.0</td><td>U</td><td>eth0</td></tr>
            <tr><td>160.160.160.0</td><td>140.140.0.2</td><td>255.255.255.0</td><td>UG</td><td>eth0</td></tr>
            <tr><td>150.150.150.0</td><td>140.140.0.2</td><td>255.255.255.0</td><td>UG</td><td>eth0</td></tr>
            <tr><td>default</td><td>140.140.0.3</td><td>0.0.0.0</td><td>UG</td><td>eth0</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    Le comportement du routeur pour les entrées 160.160.160.0 et 150.150.150.0 est le même mais regrouper ces entrées est impossible. Le plus petit groupe contenant toutes les adresses de ces sous-réseaux est 128.0.0.0/2 et la table de A ne peut pas contenir l'entrée :
    <table>
        <thead>
            <tr><th>Destination</th><th>Gateway</th><th>Genmask</th><th>Flags</th><th>Iface</th></tr>
        </thead>
        <tbody>
            <tr><td>128.0.0.0</td><td>140.140.0.2</td><td>192.0.0.0</td><td>UG</td><td>eth0</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    Prenons, par exemple, l'adresse 128.1.1.1. Les entrées valides pour cetteadresse seraient 128.0.0.0 et default. Comme le masque de 128.0.0.0 estplus long, c'est cette entrée qui sera choisie ⇒ Erreur : cette adressedevrait être routée vers “Internet”.
    <br>
    Une table d'acheminement possible pour B est :
    <table>
        <thead>
            <tr><th>Destination</th><th>Gateway</th><th>Genmask</th><th>Flags</th><th>Iface</th></tr>
        </thead>
        <tbody>
            <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
            <tr><td>150.150.150.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth0</td></tr>
            <tr><td>160.160.160.0</td><td>150.150.150.4</td><td>255.255.255.0</td><td>UG</td><td>eth0</td></tr>
            <tr><td>140.140.0.0</td><td>150.150.150.4</td><td>255.255.0.0</td><td>UG</td><td>eth0</td></tr>
            <tr><td>default</td><td>150.150.150.4</td><td>0.0.0.0</td><td>UG</td><td>eth0</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    Le comportement du routeur pour les entrées 160.160.160.0, 140.140.0.0 et default est le même et on peut regrouper ces entrées. La table d'acheminement la plus probable pour B est :
    <table>
        <thead>
            <tr><th>Destination</th><th>Gateway</th><th>Genmask</th><th>Flags</th><th>Iface</th></tr>
        </thead>
        <tbody>
            <tr><td>localhost</td><td>*</td><td>255.255.255.255</td><td>UH</td><td>lo0</td></tr>
            <tr><td>150.150.150.0</td><td>*</td><td>255.255.255.0</td><td>U</td><td>eth0</td></tr>
            <tr><td>default</td><td>150.150.150.4</td><td>0.0.0.0</td><td>UG</td><td>eth0</td></tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</li>
<li>
    Le paquet doit transiter par R. Les adresses IP source et destination du paquet sont respectivement 140.140.140.1 et 150.150.150.1.
    <br><b>Important</b> : Lors de l'envoi d'un paquet IP de A vers B l'adresse source du paquet sera <code>IP_A</code> et l'adresse de destination du paquet sera IPB depuis l'émission du paquet par A jusqu'à la réception de celui-ci par B : <b>on ne modifie pas les adresses source et destination d'un paquet IP en cours de route</b>.
</li>
</ol></div>




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
    </table>
    <figcaption>tables du spanning tree</figcaption>
</figure>
<ol class="alphabet">
    <li>Dessinez un réseau possible, respectant les tables relatives au spanning tree données à la table 1.</li>
    <li>La station A envoie une trame à la station B dont elle connaît l'adresse <b>MAC</b>, celle-ci lui répond en lui envoyant à son tour une trame. Décrivez l'évolution des tables d'acheminement des ponts, sachant que celles-ci sont initialement vides, ainsi que les différentes trames qui circulent sur chaque LAN. Pour arriver à destination, cette trame devra traverser deux ponts.</li>
    <li>Le pont 1 tombe en panne. Décrivez un scénario possible d'échange des BPDU entre les ponts et l'évolution des tables relatives au spanning tree jusqu'à stabilité.</li>
</ol></h4>
<div class="answer">
<ol class="alphabet">
    <li>
        <figure>
            <img src="images/info-f303/spanningtree" alt="Réseau possible" />
            <figcaption>Réseau possible</figcaption>
        </figure>
    </li>
    <li>
        Voir (a).
        <table>
            <thead>
                <tr><th>Etape</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th></tr>
            </thead>
            <tbody>
                <tr><th>Mac source</th>     <td>A</td>      <td>2(eth1)</td><td>1(eth1)</td><td>B</td>      <td>1(eth2)</td><td>2(eth2)</td></tr>
                <tr><th>Mac Destination</th><td>2(eth2)</td><td>1(eth2)</td><td>B</td>      <td>1(eth1)</td><td>2(eth1)</td><td>A</td></tr>
            </tbody>
        </table>
        <ol>
            <li>A envoie une trame $MAC_{source}=MAC_A$ et $MAC_{dest}=MAC_B$ sur <code>LAN3</code> et le pont 2 port 2 recoit la trame. Il associe aussi <code>MAC_A</code> à son port 2.</li>
            <li>Le pont 2 renvoie sur le <code>LAN2</code> via le port 1. Le pont 1 recoit la trame sur le port 2, il associe <code>MAC_A</code> sur son port 2 et renvoie la trame sur le <code>LAN1</code> via son port 1.</li>
            <li>Le pont 4 et le port 3 recoivent la trame, ils associent <code>MAC_A</code> sur leur port 1. B reçoit la trame.</li>
            <li>B envoie une trame $MAC_{source}=MAC_B$ et $MAC_{dest}=MAC_A$ sur <code>LAN1</code> et le pont 1,3,4 recoivent la trame sur leur port 1. Ils associe aussi <code>MAC_B</code> à leur port 1.</li>
            <li>Le pont 1 renvoie sur son port 2 sachant sa table et le pont 2 recoit sur son port 1.</li>
            <li>Le pont 2 renvoie sur son port 2 sachant sa table et A recoit.</li>
        </ol>
    </li>
    <li>
        Le pont 1 tombe en panne, il n'emet plus son BPDU et l'entrée qui lui est associé au pont 2,3 et 4 arrivent à expiration, ils commencent donc à emettre par default sur leurs ports. Le pont 3 recevant un meilleur BPDU sur son port 2 va mettre à jour sa table avec un $rootID=2$ et mettre son port 1 à FP et son port 2 à RP. Le port 4 recoit 3 BPDU ; BPDU(2,0,2) sur le port 2 (devient RP) et BPDU(2,1,3) sur les port 1,3 (tous les deux BP car le port 2 est meilleur).
        <table>
            <thead>
                <tr><th>pont</th><th>port</th><th>root ID</th><th>cost</th><th>sender ID</th><th>type</th></tr>
            </thead>
            <tbody>
                <tr><th>pont 2</th><td>1</td><td>2</td><td>0</td><td>2</td><td>FP</td></tr>
                <tr><td></td>      <td>2</td><td>2</td><td>0</td><td>2</td><td>FP</td></tr>
            </tbody>
            <tbody>
                <tr><th>pont 3</th><td>1</td><td>2</td><td>0</td><td>2</td><td>RP</td></tr>
                <tr><td></td>      <td>2</td><td>2</td><td>1</td><td>3</td><td>FP</td></tr>
            </tbody>
            <tbody>
                <tr><th>pont 4</th><td>1</td><td>2</td><td>1</td><td>3</td><td>BP</td></tr>
                <tr><td></td>      <td>2</td><td>2</td><td>0</td><td>2</td><td>RP</td></tr>
                <tr><td></td>      <td>3</td><td>2</td><td>1</td><td>3</td><td>BP</td></tr>
            </tbody>
        </table>
        <figure>
            <img src="images/info-f303/spanningtree_2" alt="Réseau possible" />
            <figcaption>Réseau possible</figcaption>
        </figure>
    </li>
</ol>
</div>


