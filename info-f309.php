<h1>INFO-F309 - Administration des Systèmes</h1>
<h2>Examen</h2>





<h3>Théorie</h3>





<h4 class="question">(Unix) Fichiers passwd ou shadow ou group (feuille papier imprimée) : savoir reconnaitre et dire ce que c’est et ce que ça contient. Pourquoi on a autant d’utilisateurs (services) ? Mots de passe ? Pourquoi est-ce qu’on a shadow ? (permissions)</h4>
<div class="answer">
<ul>
	<li>/etc/passwd : contient la liste des utilisateurs</li>
	<li>/etc/group : liste de groupes</li>
	<li>/etc/crontab : action à lancer tous les x temps</li>
	<li>/etc/shadow : contient le mot de passe crypté et des attributs étendus</li>
</ul>
Ce sont tous de simples fichiers textes
On a créé shadow car ce fichier, contrairement à passwd, n'est accessible que par root, ainsi les mots de passes sont cryptés et non accessibles aux users lambda, créant une double sécurité. Rem : Certains programmes ont des comptes utilisateurs pour des raisons d'administration système. Cela permet de restreindre ce que peut faire le programme
</div>




<h4 class="question">SLA 99.99%, pourquoi 99.99% et pas 100% ou 95% ?</h4>
<div class="answer">
	Service-Level Agreement (SLA) c'est le temps de fonctionnement assuré. Ton systeme doit fonctionné au moins 99.99% du temps.
	C'est impossible de viser 100% car comme tu dépend d'autres services qui eux proposent 99.99%.
	Par exemple, on a un hébergeur web comme OVH, tu promet à tes clients que leur site sera en ligne 99.99% du temps (maintenance, mise à jours, etc ...) ou comme proximus qui promet que tu auras la connexion 9999% du temps.
</div>



<h4 class="question">(Courrier) MIME: qu’est-ce que c’est et à quoi ça sert? Quels formats? Pourquoi on ne peut pas garder l’ancient unique format? (slides email MIME)</h4>
<div class="answer">
	Problèmes avec les mails ASCII (RFC 822) :
	<ul>
		<li>langues avec accents ? (français, allemand)</li>
		<li>alphabets non latins ? (arabe, hébreux, russe)</li>
		<li>langues sans alphabet ? (chinois, japonais)</li>
		<li>messages avec autre chose que du texte (images, sons, vidéos, fichiers attachés...)</li>
	</ul>
	Résolu avec MIME (Multipurpose Internet Mail Extensions), un encodage un peu plus récent. Comment ca fonctionne ? L'idée de MIME est de permettre d'encoder du contenu en respectant le standard RGC 822 ; on va toujours envoyer des messages en ASCII 7 bits et sans accents. On va convertir le message de facon à ce que peu importe ce qu'on écrit, ca convertit. L'avantage c'est qu'on a pas du changer tout le modèle SMTP. On a juste du imposer aux utilisateurs des périphériques finaux d'utiliser des MUA compatibles MIME. Ainsi tous les serveurs SMTP qui se trouve sur l'entierté du réseau internet n'ont pas du être changé. MIME utilise toujours un header en ASCII 7bits, mais en définit cinq nouveaux :
	<ul>
		<li>Version</li>
		<li>Description ; Qu'est-ce qui est encrypté</li>
		<li>ID</li>
		<li>Quel encodage</li>
		<li>La nature, le type du message ; Est-ce que c'est de l'audio, un pdf, un word, etc</li>
	</ul>
	MIME défnit 5 nouveaux schémas d'encodages :
	<ul>
		<li>ASCII (7 bits) de l'époque (max 1000 caractère) - Autorisé
			<ul><li>Pourquoi 1000 caractères ? Car on avait pas assez de mémoire, on trouvait déjà que 1000 c'était bcp à l'époque et donc ca transmet 1000 par 1000</li></ul></li>
		<li>ASCII étendu (8 bits) - Interdit
			<ul><li>Viole le protocole définit dans la RFC 821. malheureusement, il y a une chance qu'un serveur sur le chemin ne comprends pas le 8 bits (encore de nos jours)</li></ul></li>
		<li>Encodage binaire - Interdit
			<ul><li>Aucune garantie, pareil, des serveurs SMTP qui comprendront pas. A été utilisé par certains MUA : Microsoft exchange</li></ul></li>
		<li>Encodage base64 - Autorisé
			<ul><li>Le plus utilisé pour faire de l'encodage MIME. Gaspille de la place, contraintes qui augmente 20% en plus qu'un message normal.</li></ul></li>
		<li>Quoted printable encoding :
			<ul><li>On conserve le mail, mais on remplace tous les caractères non supportés par une définition texte. A la lecture on fait l'inverse et on remet le caractère d'origine. C'est de moins en moins utilisé.</li></ul></li>
	</ul>
</div>




<h4 class="question">Windows GPO (Group Policies Object): c’est quoi ?</h4>
<div class="answer">
	C'est une des principales nouveautés de Windows 2000 (NT5). Ca définit qui a le droit de faire quoi avec son ordinateur.
</div>





<h4 class="question">sudo: à quoi ça sert? Pourquoi on en a besoin au lieu de juste se connecter en admin, au niveau sécurité, au niveau des mots de passe, recommandations d’utilisation.</h4>
<div class="answer">
	L'accès root est toujours présent sur unix mais est fort critiqué car on se demande vraiment si il est necessaire d'avoir quelqu'un qui puisse lire tous les fichiers de tous les utilisateurs. Certaines distributions arrivent à faire sans. L'avantage de sudo est qu'elle ne donne qu'un accès temporaire pour les opérations souhaitées et toutes les actions sont enregistrés dans un fichier log ; on peut donc utiliser ce fichier pour savoir quels actions root ont été effectuées et par qui. Le problème est que le root peut supprimer ce fichier.
</div>






<h3>Abréviation</h3>
<ul>
<li>Virtualisation
<li>Unix
	<ul>
		<li>root</li>
		<li>/etc/passwd : liste utilisateurs</li>
		<li>/etc/shadow : mots de passe cryptés et attributs étendus</li>
		<li>/etc/group : liste de groupes</li>
		<li>/etc/crontab : action à lancer tous les x temps</li>
		<li>sudo</li>
		<li>log</li>
		<li>daemon</li>
	</ul></li>
<li>Réseau
	<ul>
		<li>/etc/hosts : DNS du pauvre // clients</li>
		<li>/etc/hostname // serveur</li>
		<li>/etc/resolv.conf : liste des serveurs DNS</li>
		<li>/etc/services : utilisé et par qui</li>
		<li>/etc/network/interfaces : interface réseau, IP statique</li>
		<li>DHCP : gère les connections sur le réseau locale_get_default</li>
	</ul></li>
<li>DNS
	<ul>
		<li>BIND : le serveur DNS le plus utilisé</li>
		<li>TLD : top level domain, les enfants de la racine (.com, ... ) 7 à l'origine géré par ICANN</li>
		<li>RR : ressources records informations associées à un domaine name
			<ul>
				<li>A : hostname -> IP</li>
				<li>MX : mail</li>
				<li>PTR : IP -> hostname</li>
				<li>CNAME : alias -> hostname</li>
				<li>MAPPING : IP -> domain name</li>
				<li>...</li>
			</ul></li>
	</ul></li>
<li>Annuaire
	<ul>
		<li>LDAP : systeme d'annuaire le plus utilisé (!= bdd)</li>
		<li>LDIF Format d'échange de fichier</li>
		<li>NIS : ajout virtuel à passwd (nul mais très utilisé)</li>
		<li>NFS ; Sys de partage de fichier</li>
	</ul></li>
<li>Administration décentralisée
	<ul>
		<li>SNMP : minitor tout le parc et préviens en cas de probleme</li>
		<li>MIB management information bases</li>
		<li>get_request</li>
		<li>get_next_request</li>
		<li>set_request</li>
		<li>get_reponse</li>
		<li>trap</li>
		<li>Time tricks : message tout les x temps pour dire ok</li>
	</ul></li>
<li>Courriel
	<ul>
		<li>SMTP protocole le plus utilisé</li>
		<li>POP utilisé entre provider et user</li>
		<li>IMAP4 pareil</li>
		<li>DNS aux serveur MX</li>
		<li>RFC 822</li>
		<li>MTA mail transport agent</li>
		<li>MDA delivery</li>
		<li>MUA user</li>
		<li>MSA submission</li>
		<li>MIME
			<ul>
				<li>ASCII</li>
				<li>Binaire</li>
				<li>Base 64</li>
				<li>Quoted printable encoding</li>
			</ul></li>
		<li>POP3</li>
		<li>IMAP4 plus complet et plus complexe, peut recupérer les info MIME, gere acces simultané et pluseirus boites mails</li>
	</ul></li>
<li>Windows
	<ul>
		<li>NT</li>
		<li>NT4
			<ul>
				<li>SAM</li>
				<li>PDC</li>
				<li>BDC</li>
				<li>Trust</li>
			</ul></li>
		<li>2000 (NT5)
			<ul>
				<li>Active directory</li>
			</ul></li>
	</ul></li>
</ul>

