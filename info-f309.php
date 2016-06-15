<h1>INFO-F309 - Administration des Systèmes</h1>
<h2>Examen</h2>





<h3>Théorie</h3>





<h4 class="question">(Unix) Fichiers passwd ou shadow ou group (feuille papier imprimée) : savoir reconnaitre et dire ce que c’est et ce que ça contient. Pourquoi on a autant d’utilisateurs (services) ? Mots de passe ? Pourquoi est-ce qu’on a shadow ? (permissions)</h4>
<div class="answer">
<ul>
	<li>/etc/passwd : contient la liste des utilisateurs (file: smithj:x:561:561:Joe Smith:/home/smithj:/bin/bash )</li>
	<li>/etc/shadow : contient le mot de passe crypté et des attributs étendus (file: smithj:Ep6mckrOLChF.:10063:0:99999:7::: )</li>
	<li>/etc/group : liste de groupes (file: cdrom:x:24:vivek,student13,raj )</li>
	<li>/etc/crontab : action à lancer tous les x temps</li>
</ul>
Ce sont tous de simples fichiers textes. 

Les informations liées aux utilisateurs de votre système se trouvent dans le fichier
/etc/passwd. Ce fichier liste les utilisateurs, ainsi que leurs propriétés. Sur certains systèmes,
et en particulier sous Linux, les mots de passe ne sont pas (ou plus) contenus dans ce fichier
mais plutôt dans le fichier /etc/shadow qui n’est accessible que par l’utilisateur root. Les
utilisateurs sont regroupés dans des groupes, ce qui permet de donner par exemple en une
seule ligne de commande accès à un répertoire particulier pour un groupe donné. Cela se
trouve dans le fichier /etc/group.

Remarque: On a créé shadow car ce fichier, contrairement à passwd, n'est accessible que par root, ainsi les mots de passes sont cryptés et non accessibles aux users lambda,
créant une double sécurité. Certains programmes ont des comptes utilisateurs pour des raisons d'administration système. Cela permet de restreindre ce que peut faire le programme


<div>
</div>

</div>




<h4 class="question">SLA 99.99%, pourquoi 99.99% et pas 100% ou 95% ?</h4>
<div class="answer">
	Service-Level Agreement (SLA) c'est le temps de fonctionnement assuré. Ton systeme doit fonctionné au moins 99.99% du temps.
	C'est impossible de viser 100% car comme tu dépend d'autres services qui eux proposent 99.99%.
	Par exemple, on a un hébergeur web comme OVH, tu promet à tes clients que leur site sera en ligne 99.99% du temps (maintenance, mise à jours, etc ...) ou comme proximus qui promet que tu auras la connexion 9999% du temps.
</div>



<h4 class="question">(Courrier) MIME: qu’est-ce que c’est et à quoi ça sert ? Quels formats? Pourquoi on ne peut pas garder l’ancient unique format? (slides email MIME)</h4>
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
	C'est une des principales nouveautés de Windows 2000 (NT5).  C'est un grand avantage pour l'administreur système. Ca définit qui a le droit de faire quoi avec son ordinateur dans l'entreprise.
	Différence entre droits et permissions :
	<ul>
		<li>Droit permet d'effectuer une tache (changer le fond d'écran, installer logiciel) (sudo sur unix)</li>
		<li>Permission: acces ressource : lire repertoire (acces lecture ecrire habituel)</li>
	</ul>
	Très développé pour les droits et permissions. L'idée est d'assigner des gens à des groupes. On peut avoir des
	<ul>
		<li>groupes globales ( utilisable partout mais membre d'un seul domaine),</li>
		<li>groupe local au domaine (n'importe qui peut participer du moment qu'il est dans le domaine),</li>
		<li>groupe universel ( mélangé membres de differents domaine)</li>
	</ul>
	NT4 groupe globale d'un meme domaine mais jamais de différent domaine (mais pouvait aller sur n'importe quel machien avec trust).</p>
	<ul>
		<li>Groupe de sécurité - Permissions sur les fichiers</li>
		<li>Groupe de ditribution - Echanger des messages, notifications des utilisateurs.</li>
	</ul>
	GPO : politique d'application des machines. Ca peut être impliqué à n'importe quel norme de l'arbre (tout le domaine ou OU ou sous OU ou user spécifique). Donc on peut dire : ne peut pas utiliser tel ou tel application sur un noeud, c'est vrai pour tous les noeud en dessous.
	
	<p>Attention Profil != GPO</p>
	Profil : ensemble des réglages et paramètres users. Sur unix, fichiers qui commence par un . et qui se trouve dans home, paramètres des applications. Sur windows, le profil c'est un repertoire à part qui est pas dans home et qui contient tout les réglages paramètres applications. Par exemple quel page de démarrage d'un navigateur etc etc...
	Par contre GPO est tout les régles, les droits d'user : Si vous pouvez ou pas modifier le fond d'écran. tandis que profil votre choix de fond d'écran (les données en temps que tel).
	
	Catégoiries GBO flexible et complet
	<ul>
		<li>installation logiciel</li>
		<li>Sécurité</li>
		<li>Script de démarrage</li>
		<li>Template</li>
	</ul>
</div>


<h4 class="question">sudo: à quoi ça sert ? Pourquoi on en a besoin au lieu de juste se connecter en admin, au niveau sécurité, au niveau des mots de passe, recommandations d’utilisation.</h4>
<div class="answer">
	L'accès root est toujours présent sur unix mais est fort critiqué car on se demande vraiment si il est necessaire d'avoir quelqu'un qui puisse lire tous les fichiers de tous les utilisateurs. Certaines distributions arrivent à faire sans. L'avantage de sudo est qu'elle ne donne qu'un accès temporaire pour les opérations souhaitées et toutes les actions sont enregistrés dans un fichier log ; on peut donc utiliser ce fichier pour savoir quels actions root ont été effectuées et par qui. Le problème est que le root peut supprimer ce fichier.
	
	Sudo est un logiciel permettant à un utilisateur lambda d'exécuter des commandes nécessitant les droits Administrateur (root). Sudo = Substitute User DO !
	Concrètement, pour exécuter une commande avec les droits de root, il faut taper cette commande : sudo commande puis taper votre mot de passe utilisateur.
	
	
	Pourquoi ? La raison est simple : Dans un système Unix, il est impossible de se connecter avec un utilisateur qui ne possède pas de mot de passe. Il est donc impossible, sous Ubuntu de se loguer directement en tant que root. Pour faire un petit test, tapez la commande su dans un terminal (c'est la commande qui permet de passer en root sous Debian), il vous faudra ensuite renseigner un mot de passe...qui n'existe pas. La connexion sera donc impossible.
</div>




<h4 class="question">Différence entre sudo et su</h4>
<div class="answer">
	sudo est habituellement utilisé pour exécuter une commande unique, alors que su root est souvent utilisé pour exécuter un terminal root et exécuter des multiples commandes. L'approche de sudo réduit la possibilité qu'un terminal root soit laissé ouvert indéfiniment sur le poste de travail et encourage l'utilisateur à minimiser son utilisation des privilèges d'administration.
</div>




<h4 class="question">VLAN: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
	C'est un réseau virtuel. Ca se rapproche de l'idée du SAN, c-a-d regrouper plusieurs disque dure et faire une seule partition qu'on a besoin. Il y avait un temps où il fallait mettre des cable pour créer des réseaux et parfois fallait changer, donc on débranchait et on rebranchait pour par exemple faire plusieurs réseaux différents. Avec VLAN on cable tout sur le même réseau de base de l'entreprise, et on met là dessus des VLAN donc des réseau virtuels pour différencier les appareils.
	
	Donc tlm est connecté au meme switch mais on peut définir tel ou tel appareil comme si on avait seulement branché certaines machines et cache les autres réseaux indépendants. Donc quand on déménage des postes ou autres on peut garder la même disposition physique mais changer virtuellement les dispositions.
	
	De chez lui le développeur peut utiliser un VPN qui va simuler un cable jusqu'au VLAN et donc il aura la vision comme si il était au bureau. 
</div>



<h4 class="question">Samba: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
	Samba est un logiciel d'interopérabilité qui permet à des ordinateurs Unix de mettre à disposition des imprimantes et des fichiers dans des réseaux Windows, en mettant en oeuvre le protocole SMB/CIFS de Microsoft Windows. Samba donne la possibilité aux ordinateurs Windows d'accéder aux imprimantes et aux fichiers des ordinateurs Unix en permettant aux serveurs Unix de se substituer à des serveurs Windows.
	Il utilise TCP/IP. Lorsque les deux systèmes de partage de fichiers (NFS, Samba) sont installés pour comparaison, Samba se révèle moins performant que NFS au niveau des taux de transferts.
</div>


<h4 class="question">NFS: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
	Permet d’accéder aux fichiers d’un serveur distant en montant un(e partie de) file system distant dans la structure du filesystem local de manière transparente pour les applications. Souvent utilisé avec NIS. Il simule une partition UNIX et donc préserve les droits des fichiers mais le problème est que le root client peut modifier les fichiers car ca ne fait pas de différence entre le root client et serveur. Il faudrait une option pour différencier les deux roots (root_squash). En pratique ce que fait NFS c'est partager 'exporter) un répertoire du serveur vers les clients qui le montent dans leurs files systeme. Coté client et serveur ont des daemons
</div>


<h4 class="question">NIS - Yellowpages: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
	Le plus vieux et le pire de ce qu'on peut faire, mais tout le monde l'utilise, il faut donc le connaître. Il est basé sur UNIX et utilise les fichiers UNIX avec un partage de ces fichiers de configurations, on ajoute virtuellement les informations à "/etc/passwd" (Ca c'est cool, mais en contrepartie on perd la portabilité). Il utilise un système client-serveur et une intégration via PAM.
</div>

<h4 class="question">LDIF: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
	Format d'échange de fichier. On crée un script pour écrire un fichier LDIF à partir des fichiers excel, ... contenant les informations. Et LDAP peut charger ce fichier pour créer/mettre à jour l'annuaire (via "ldapmodify") On peut y rajouter des commandes et en faire un pseudo script (pseudo car on ne peut pas faire de boucle).
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
<li>Divers
	<ul>
		<li>DAS, NAS, SAN (Direct Attached Storage, Network Attached Storage, Storage Area Network)</li>
	</ul></li>
</ul>

