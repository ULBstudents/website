
<h1>INFO-F309 - Administration des Systèmes</h1>
<h2>Examen</h2>

<!-- Il faudrait mettre ceci dans un fichier CSS -->
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
    font-family: "Menlo", "Liberation Mono", "Consolas", "DejaVu Sans Mono", "Ubuntu Mono", "Courier New", "andale mono", "lucida console", monospace;
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

</style>



<h3>Théorie</h3>



<h4 class="question">
    (Unix) Fichiers passwd ou shadow ou group (feuille papier imprimée): savoir reconnaitre et dire 
    ce que c’est et ce que ça contient. Pourquoi on a autant d’utilisateurs (services) ? 
    Mots de passe ? Pourquoi est-ce qu’on a shadow ? (permissions)
</h4>
<div class="answer">
    <ul>
        <li>
            <b>/etc/passwd</b><br />
            Contient la liste des utilisateurs
            <pre><code>smithj:x:561:561:Joe Smith:/home/smithj:/bin/bash</code></pre><br />
        </li>
        <li><b>/etc/shadow</b><br />
            Contient le mot de passe crypté et des attributs étendus
            <pre><code>smithj:Ep6mckrOLChF.:10063:0:99999:7:::</code></pre><br />
        </li>
        <li><b>/etc/group</b><br />
            Liste de groupes
            <pre><code>cdrom:x:24:vivek,student13,raj</code></pre><br />
        </li>
        <li><b>/etc/crontab</b><br />
            Action à lancer tous les x temps
        </li>
    </ul><br />
    Ce sont tous de simples fichiers textes. 
    <br />
    Les informations liées aux utilisateurs de votre système se trouvent dans le fichier 
    <code>/etc/passwd</code>. Ce fichier liste les utilisateurs, ainsi que leurs propriétés. Sur 
    certains systèmes, et en particulier sous Linux, les mots de passe ne sont pas (ou plus) contenus 
    dans ce fichier mais plutôt dans le fichier <code>/etc/shadow</code> qui n’est accessible que par 
    l’utilisateur root. Les utilisateurs sont regroupés dans des groupes, ce qui permet de donner par 
    exemple en une seule ligne de commande accès à un répertoire particulier pour un groupe donné. 
    Cela se trouve dans le fichier <code>/etc/group</code>.<br />
    <br />
    <b>Remarque:</b> On a créé shadow car ce fichier, contrairement à passwd, n'est accessible que par 
    root, ainsi les mots de passe sont cryptés et non accessibles aux users lambda, créant une double 
    sécurité. <br />
    Certains programmes ont des comptes utilisateurs pour des raisons d'administration système. Cela 
    permet de restreindre ce que peut faire le programme.
</div>



<h4 class="question">SLA 99.99%, pourquoi 99.99% et pas 100% ou 95% ?</h4>
<div class="answer">
    <b>Service-Level Agreement (SLA)</b> est le temps de fonctionnement assuré d'un service définit. 
    Le systeme doit fonctionner au moins 99.99% du temps.<br />
    Il est impossible d'arriver à 100% lorsque l'on dépend d'autres services car ceux-ci proposent 
    en général une disponibilité de 99.99%.<br />
    Outre la dépendance d'autres services, il faut également que notre service soit mis à jour ou 
    redémarrer de temps en temps.  Il faut donc prendre également cela en compte.<br />
    Pourquoi dans ce cas la ne pas mettre "95%" ? Tout simplement car on veut garantir la plus grand 
    disponibilité possible aux clients.  99.99% est presque devenu une norme pour tous les services, 
    il est donc logique de voiloir faire de même.<br />
    (Par exemple, lorsque l'on a un hébergeur web comme OVH, tu promet à tes clients que leur site 
    sera en ligne 99.99% du temps (maintenance, mise à jours, etc ...) ou comme proximus qui promet 
    que tu auras la connexion 99.99% du temps.)
</div>



<h4 class="question">
    (Courrier) MIME: qu’est-ce que c’est et à quoi ça sert ? Quels formats? Pourquoi on ne peut pas 
    garder l’ancient unique format? (slides email MIME)
</h4>
<div class="answer">
    Problèmes avec les mails ASCII (RFC 822):
    <ul>
        <li><b>Langues avec accents ?</b><br />
            Français, allemand
        </li>
        <li><b>Alphabets non latins ?</b><br />
            Arabe, hébreux, russe)
        </li>
        <li><b>Langues sans alphabet ?</b><br />
            Chinois, japonais
        </li>
        <li><b>Messages avec autre chose que du texte ?</b><br />
            Images, sons, vidéos, fichiers attachés...
        </li>
    </ul><br />
    Ces différents problèmes peuvent être résolu avec MIME (Multipurpose Internet Mail Extensions), 
    un encodage un peu plus récent.<br />
    <br />
    <b>Comment ca fonctionne ?</b><br/>
    L'idée de MIME est de permettre d'encoder du contenu en respectant le standard RGC 822; on va 
    donc toujours envoyer des messages en ASCII 7 bits et sans accents.<br />
    Cependant, ces messages seront convertir pour permettre d'écrire dans à peu près n'importe quel 
    format.  L'avantage de MINE est de concerver le modèle SMTP. <br />
    La seule obligation se trouva aux niveaux des utilisateurs périphériques finaux qui doivent 
    utiliser des MUA compatibles MIME. Ainsi tous les serveurs SMTP qui se trouve sur l'entierté 
    du réseau internet n'ont pas du être changé. MIME utilise toujours un header en ASCII 7 bits, 
    mais en définit <b>cinq nouveaux</b>:
    <ul>
        <li>Version</li>
        <li>Description; qu'est-ce qui est encrypté</li>
        <li>ID</li>
        <li>Quel encodage</li>
        <li>La nature, le type du message; est-ce que c'est de l'audio, un pdf, un word, etc</li>
    </ul><br />

    MIME défnit églements 5 nouveaux schémas d'encodages:<br />
    <ul>
        <li>
            <b>ASCII (7 bits)</b> de l'époque (max 1000 caractère) - Autorisé<br/>
            <em>Pourquoi 1000 caractères ?</em><br />
            Car on avait pas assez de mémoire, on trouvait déjà que 1000 c'était beaucoup à 
            l'époque et donc ca transmet 1000 par 1000.<br /><br />
        </li>
        <li><b>ASCII étendu (8 bits)</b> - Interdit<br />
            Viole le protocole définit dans la RFC 821. malheureusement, il y a une chance qu'un 
            serveur sur le chemin ne comprends pas le 8 bits (encore de nos jours)<br /><br />
        </li>
        <li><b>Encodage binaire</b> - Interdit<br />
            Aucune garantie, pareil, des serveurs SMTP qui ne comprendront pas. A été utilisé par 
            certains MUA: Microsoft exchange<br /><br />
        </li>
        <li><b>Encodage base64</b> - Autorisé<br />
            Le plus utilisé pour faire de l'encodage MIME. Gaspille de la place, contraintes qui 
            augmente 20% en plus qu'un message normal.<br /><br />
        </li>
        <li><b>Quoted printable encoding</b><br />
            On conserve le mail, mais on remplace tous les caractères non supportés par une 
            définition texte. A la lecture on fait l'inverse et on remet le caractère d'origine. 
            C'est de moins en moins utilisé.<br />
        </li>
    </ul><br />
    <div><!-- Répétition non ? :/ -->
    Multipurpose Internet Mail Extensions (MIME) ou Extensions multifonctions du courrier Internet 
    est un standard internet qui étend le format de données des courriels pour supporter des textes 
    en différents codage de caractères autres que l'ASCII, des contenus non textuels, des contenus 
    multiples, et des informations d'en-tête en d'autres codages que l'ASCII. Les courriels étant 
    généralement envoyés via le protocole SMTP au format MIME, ces courriels sont souvent appelés 
    courriels SMTP/MIME.<br />
    À l'origine, SMTP avait été prévu pour ne transférer que des fichiers textes (codés en ASCII). 
    Avec l'apparition du multimédia et l'utilisation croissante des applications bureautiques, le 
    besoin s'est fait sentir d'échanger, en plus des fichiers textes, des fichiers binaires (format 
    des applications bureautiques, images, sons, fichiers compressés).
    </div>
</div>


<h4 class="question">Windows GPO (Group Policies Object): c’est quoi ?</h4>
<div class="answer">
    C'est une des principales nouveautés de Windows 2000 (NT5).  C'est un grand avantage pour 
    l'administreur système. Ca définit qui a le droit de faire quoi avec son ordinateur dans 
    l'entreprise.<br />
    <br />
    <b>Différence entre droits et permissions:</b>
    <ul>
        <li>Droit permet d'<b>effectuer une tache</b><br />
            Changer le fond d'écran, installer logiciel (<code>sudo</code> sur unix)
        </li>
        <li>Permission: <b>acces ressource</b><br />
            Lire un repertoire (acces lecture ecrire habituel)
        </li>
    </ul><br />
    Très développé pour les droits et permissions. L'idée est d'assigner des gens à des groupes.<br />
    On peut avoir différents groupes:
    <ul>
        <li><b>Groupes globales</b><br />
            Utilisable partout mais membre d'un seul domaine,
        </li>
        <li><b>Groupe local au domaine</b><br />
            N'importe qui peut participer du moment qu'il est dans le domaine,
        </li>
        <li><b>Groupe universel</b><br />
            Mélange des membres de differents domaines.
        </li>
    </ul><br />
    NT4 groupe globale d'un même domaine mais jamais de différent domaine (mais pouvait aller sur 
    n'importe quel machien avec trust).
    <ul>
        <li>Groupe de sécurité - Permissions sur les fichiers</li>
        <li>Groupe de ditribution - Echanger des messages, notifications des utilisateurs.</li>
    </ul><br />
    <b>GPO:</b> politique d'application des machines. Cela peut être impliqué à n'importe quel 
    norme de l'arbre (tout le domaine ou OU ou sous OU ou user spécifique). Donc on peut dire: ne 
    peut pas utiliser tel ou tel application sur un noeud et cette restriction est vrai pour tous 
    les noeuds en dessous.<br />
    <br />
    <p><b>Attention:</b> Profil != GPO</p><br />
    <b>Profil:</b> ensemble des réglages et paramètres utilisateur. Sur unix, il s'agit d'un 
    fichiers qui commence par un <code>.</code> et qui se trouve dans home, il paramètre des 
    applications. Sur windows, le profil est un repertoire à part qui n'est pas dans home et qui 
    contient tous les réglages des paramètres d'applications. Par exemple quelle est la page de 
    démarrage d'un navigateur etc...<br />
    Par contre GPO définit toutes les régles, les droits des utilisateurs: si vous pouvez ou pas 
    modifier le fond d'écran par exemple. Tandis que profil va sauvegarder votre choix de fond d
    'écran (les données en temps que tel).<br />
    <br />
    Catégoiries GBO flexible et complet
    <ul>
        <li>Installation logiciel</li>
        <li>Sécurité</li>
        <li>Script de démarrage</li>
        <li>Template</li>
    </ul>
</div>

<h4 class="question">
    <code>sudo</code> à quoi ça sert ? Pourquoi on en a besoin au lieu de juste se connecter en 
    admin, au niveau sécurité, au niveau des mots de passe, recommandations d’utilisation ?
</h4>
<div class="answer">
    L'accès root est toujours présent sur unix mais est fort critiqué car on se demande vraiment 
    s'il est necessaire d'avoir quelqu'un qui puisse lire tous les fichiers de tous les utilisateurs. 
    Certaines distributions arrivent d'ailleurs déjà à s'en passer. L'avantage à la commande 
    <code>sudo</code> est qu'elle ne donne qu'un accès temporaire pour les opérations souhaitées et 
    toutes les actions sont enregistrés dans un fichier log; on peut donc utiliser ce fichier pour 
    savoir quels actions root ont été effectuées et par qui. Le problème est que le root peut 
    modifier, voir supprimer ce fichier.<br />
    <br />
    Sudo est un logiciel permettant à un utilisateur lambda d'exécuter des commandes nécessitant 
    les droits Administrateur (root). Sudo = Substitute User DO !<br />
    Concrètement, pour exécuter une commande avec les droits de root, il faut taper cette commande: 
    <code>sudo commande</code> puis taper votre mot de passe utilisateur.<br />
    <br />
    Pourquoi ?  La raison est simple: dans un système Unix, il est impossible de se connecter avec 
    un utilisateur qui ne possède pas de mot de passe. Il est donc impossible, sous Ubuntu de se 
    loguer directement en tant que root.  Pour faire un petit test, tapez la commande <code>su</code> 
    dans un terminal (c'est la commande qui permet de passer en root sous Debian), il vous faudra 
    ensuite renseigner un mot de passe... qui n'existe pas. La connexion sera donc impossible.
</div>



<h4 class="question">Différence entre <code>sudo</code> et <code>su</code></h4>
<div class="answer">
    <code>sudo</code> est habituellement utilisé pour exécuter une commande unique, alors que 
    <code>su root</code> est souvent utilisé pour exécuter un terminal root et exécuter des 
    multiples commandes. L'approche de sudo réduit la possibilité qu'un terminal root soit laissé 
    ouvert indéfiniment sur le poste de travail et encourage l'utilisateur à minimiser son 
    utilisation des privilèges d'administration.<br />
    <br />
    <code>su</code> permet d'utiliser le terminal en étant le "root" mais cette commande permet
    également d'utiliser le terminal en se faisant passé pour n'importe quel utilisateur.  On 
    pourra par exemple tapper: <code>su bob</code> pour exécuter des commandes en tant que "bob".
</div>




<h4 class="question">VLAN: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
    C'est un réseau virtuel. Il se rapproche de l'idée du SAN, c'est à dire de regrouper plusieurs 
    disques dures et d'en faire une seule partition.  Lorsque l'on doit créé plusieurs réseaux 
    différents, la première approche est de tirer des cables que l'on branche uniquement aux 
    machines faisant partie de ce réseau.  Cela faisait donc une grand quantité de cable à 
    branché/débrancher et obligeait même parfois à faire passer plusieurs cables aux mêmes endroits 
    pour simplement rendre les réseaux indépendant.  Avec VLAN on cable tout sur le même réseau 
    de base de l'entreprise, et on met là-dessus des VLAN.  Donc des réseaux virtuels pour différencier 
    les appareils.<br />
    <br />
    Donc tout le monde est connecté au même switch mais on peut définir quel machine sera branché 
    avec quel autre machine et ainsi créer différents réseaux indépendants.  Un apparail faisant
    partie d'un réseau ne vera pas les autres appareils pourtant connecté physiquement au même cable.
    Donc quand on déménage des postes ou autres on peut garder la même disposition physique mais 
    changer virtuellement les dispositions.<br />
    <br />
    De chez lui le développeur peut utiliser un VPN qui va simuler un cable jusqu'au VLAN et donc 
    il aura la vision comme si il était au bureau. 
</div>



<h4 class="question">Samba: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
    Samba est un logiciel d'<b>interopérabilité</b> qui permet à des ordinateurs <b>Unix</b> de mettre 
    à disposition des imprimantes et des fichiers dans des <b>réseaux Windows</b>, en mettant en oeuvre 
    le protocole SMB/CIFS de Microsoft Windows. Samba donne la possibilité aux ordinateurs Windows 
    d'accéder aux imprimantes et aux fichiers des ordinateurs Unix en permettant aux serveurs Unix 
    de se substituer à des serveurs Windows.<br />
    <br />
    Il utilise TCP/IP. Lorsque les deux systèmes de partage de fichiers (NFS, Samba) sont installés 
    pour comparaison, Samba se révèle moins performant que NFS au niveau des taux de transferts.
</div>


<h4 class="question">NFS: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
    NCF permet d’accéder aux fichiers d’un serveur distant en montant un(e partie de) file system 
    distant dans la structure du filesystem local de manière transparente pour les applications. 
    Ce système est souvent utilisé avec NIS. Il simule une partition UNIX et préserve donc les 
    droits des fichiers.<br />
    Il y a cependant un problème dû au fait que le "root client" peut modifier des fichiers normalement 
    protégés car le serveur ne peut pas faire de différent entre un root "client" et un root 
    "serveur". Il faudrait une option pour différencier les deux roots (root_squash). En pratique ce 
    que fait NFS c'est partager/"exporter" un répertoire du serveur vers les clients qui le montent 
    dans leurs files systeme. Coté client et serveur le système fonctionne via des daemons.
</div>


<h4 class="question">NIS - Yellowpages: Qu'est-ce que c'est ?  À quoi ça sert ?</h4>
<div class="answer">
    Le plus vieux et le pire de ce qu'on peut faire, mais tout le monde l'utilise, il faut donc le 
    connaître. Il est basé sur UNIX et utilise les fichiers UNIX avec un partage de ces fichiers de 
    configurations, on ajoute virtuellement les informations à <code>/etc/passwd</code> 
    (Ca c'est cool, mais en contrepartie on perd la portabilité). Il utilise un système 
    client/serveur et une intégration via PAM.
</div>

<h4 class="question">LDIF: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
    Il s'agit d'un format d'échange de fichier. On crée un script pour écrire un fichier LDIF à 
    partir des fichiers excel, ... contenant les informations et LDAP peut charger ce fichier pour 
    créer/mettre à jour l'annuaire (via <code>ldapmodify</code>).  On peut y rajouter des commandes 
    et en faire un pseudo script (pseudo car on ne peut pas faire de boucle).
</div>


<h4 class="question">SNMP: Qu'est-ce que c'est ? À quoi ça sert ?</h4>
<div class="answer">
    Le protocole SNMP permet d’<b>interroger à distance des périphériques réseaux</b> (managed devices) 
    afin d’en connaître l’état, et d’en extraire des statistiques. L’administrateur réseau, au
    travers d’une console de management, envoie des requêtes aux différents périphériques afin
    d’obtenir les informations.<br />
    <br />
    Il est également possible d’interragir avec les périphériques en leurs envoyant des informations,
    ou encore d’être averti (SNMP traps) quant le système est dans un état d’erreur ou nécessitant 
    une intervention technique.<br />
    Les données sont structurées sous forme de managed objects, qui sont des ensembles "clé-
    données" identifiés par un OID (Object Identifier), le tout étant structuré dans une base de
    données intitulée MIB (Management Information Base).<br />
    De nombreux périphériques sont directement équipés d’un service SNMP (routeurs, switchs, 
    firewalls, disques réseau, ...) avec un ensemble de managed objects prédéfinis (nombre de 
    machines connectées par exemple, bande passante utilisée, ...).
</div>



<h4 class="question">SMTP: Qu'est-ce que c'est ?  À quoi ça sert ?</h4>
<div class="answer">
    <b>Simple Mail Transfer Protocol</b> est un protocole de communication utilisé pour <b>transférer 
    le courrier électronique</b> vers les serveurs de messagerie électronique.<br />
    On commence par spécifier l'expéditeur du message, puis le ou les destinataires d'un message.  
    Ensuite, en général après avoir vérifié leurs existences, le corps du message est transféré.
</div>



<h4 class="question">Virtualisation: C’est quoi?  Pourquoi s’en servir?</h4>
<div class="answer">
    Pour résumer la virtualisation dans les grandes lignes: la virtualisation est utilisé pour 
    répondre à des contraintes matérielles et logicielles.<br />
    <br />
    Il existe 3 types de virtualisations: totale, para et partielle.<br />
    <br />
    Si on veut <em>aller dans le détail</em>:  <b>Comment ça marche, qu’est-ce qui se passe, etc.  
    Quels sont les avantages ?</b><br />
    Cela résout le problème de <em>downtime</em> des serveurs et du dédoublement du matériel. Par 
    ailleurs, on peut faire des snapshots/checkpoints (et donc faire des tests), mettre en pause en 
    pleine exécution etc (voir slides). Il est également possible de “cloner” la machine virtuel 
    même si ce n’est pas vraiment spécifique aux VM (on peut faire la même chose avec un disque 
    mais ce sera moins rapide qu'avec une VM).<br />
    <br />
    Notons également quelques points:
    <ul>
        <li>Les multiples instances d’un OS invité sur une seule machine hôte.</li>
        <li>Les outils associés aux VM. Ex.: Copier+Coller depuis/vers l’hôte vers/depuis l’invité.</li>
        <li>Les machines “diskless” et leur “OS téléchargé”.</li>
        <li>Il est également possible de choisir quel VM prendra en charge quel périférique</li>
    </ul>
    <br />
</div>

<br />
<hr />
<br />

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
