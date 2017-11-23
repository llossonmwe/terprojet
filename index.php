<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
  <!-- title and meta -->
  <meta charset="utf-8">
  <meta content="width=device-width,initial-scale=1.0" name="viewport">
  <meta content="description" name="In this tutorial, we take a look at a beautiful parallax scrolling effect in the simplest of ways, with stationary backgrounds and scrolling content.">

  <title>2048</title>

  <!-- css -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.2.1.min.js"></script>

  <!-- js -->
  <script src="js/modernizr.js"></script>
</head>

<body>

<div class="wrapper">

  <div class="info-bar">
    <div class="container">
      <a class="icon cmn-tut" data-title="Back To Tutorial" href="http://callmenick.com/?p=718"></a>
      <a class="icon cmn-prev" data-title="Pevious Demo - Revealing Content Overlays With CSS3 Transitions" href="http://callmenick.com/tutorial-demos/revealing-content-overlays/"></a>
      <!-- <a class="icon cmn-next" data-title="Next Demo - " href="http://callmenick.com/tutorial-demos/..."></a> -->
      <a class="icon cmn-download" data-title="Download Source" href="http://callmenick.com/tutorial-demos/simple-parallax-effect/simple-parallax-effect-source.zip"></a>
      <a class="icon cmn-archive" data-title="Tutorial Archives" href="http://callmenick.com/category/tutorials/"></a>
    </div>
  </div>

  <main>

      <section class="module parallax parallax-1">
        <div class="container">
          <h1>Paris, 2048. Les individus exercent un métier défini par leurs gênes et inscrit dans leur ADN. La société Aureus est à l’origine de cette innovation appelée le patch.</h1>
          <img src="chapters/Paris.jpeg" alt="Image de Paris">
        </div>
      </section>

      <section class="module content">
        <div class="container">
          <p>Il est 5 heures. Encore une nuit à dormir dans le froid, l’humidité, la peur et l’estomac vide. Il est 5 heures. C’est le jour qui l’affiche. Encore une journée qui se lève. Il est résolument 5 heures. Je suis encore toute engourdie par l’inconfort des pavés. J’ai encore mal au dos. J’ai encore la bouche pâteuse. Pendant que j’y pense, je ne me rappelle même plus de ma dernière douche. Les odeurs, je ne les sens plus. Que ce soit les miennes ou celles des autres. Un peu comme mes doigts, le bout de mon nez, mes oreilles. Il fait beau pourtant. Le soleil nous chauffe doucement et le vent caresse mon visage. Il fait beau pourtant, là-haut. Au-dessus du pont. Je me demande ce que ça fait de traverser la Seine, pour aller d’un bâtiment à un autre, d’un chez-soi à un travail rémunérateur. Je ne sais même plus ce que ça fait d’avoir son nid. Haussmann est aussi passé de l’autre côté de la Seine. C’est comme si toutes les maisons se ressemblaient, et en même temps c’est comme si elles étaient toutes différentes. Les plafonds semblent toujours très haut, vus d’en bas, mais je n’ai pas le temps de les regarder trop longtemps : je risque l’agression. Cela m’est déjà arrivé plus d’une fois, alors maintenant, je prête attention. Quand ce n’est pas l’agression, c’est la mort qui me guette.</p>
<p>Le Samu social est passé pour Gérard hier. Il n’avait jamais voulu se couvrir. Il a refusé tout ce qu’on lui a proposé. J’essaie de le réveiller, en vain. Gérard ne se réveillera plus. Katia est en larme. Il faut dire que c’est le troisième de la bande. Un type bien. Avant, il avait un travail, une famille, une maison. Mais ça, c’était avant sa maladie. Cette salope de maladie. Celle qui ne l’aura pas emporté, mais qui lui a tout volé. Celle qui lui a enlevé sa femme et sa vie. Et le voilà, passé d’un poste d’assistant de direction à une mort minable d’assisté dans le froid. Il n’avait rien fait pourtant, pour que cela lui arrive. Je ne veux plus jamais voir ça, ressentir ça. Mais je sais que cela reviendra, sans aucun doute. La mort fait désormais partie intégrante de ma vie. Je m’y confronte tous les jours. Il faut s’y habituer. Nejamais baisser les bras et toujours voir le positif dans ce qu’il nous arrive. Elle emporte tout sur son passage. Mais pas la peur que demain, ce soit moi. Ou qui d’autre encore, d’ailleurs ? </p>

<p>Et maintenant. Que vais-je donc encore bien pouvoir faire de cette journée ? Si ce n’est broyer du noir. La rue, c’est violent. C’est tout ce que je retiens de cette expérience. Toutes les agressions, la fois où quelqu’un a mis le feu à nos duvets, la fois ou quelqu’un d’autre nous a arrosé au milieu de la nuit, alors que nous sommes en plein hiver. Cette société est-elle donc aussi terrible, lorsqu’on est de l’autre côté du pont ? D’un côté, cela doit être pénible de devoir toujours faire le même métier, sans pouvoir le choisir. C’est comme si quelqu’un gouvernait notre vie. Ils sont pourtant nombreux à passer au-dessus de ce pont. Des dizaines de milliers ? Des centaines de milliers ? Je ne saurai dire. Il y a un tel mouvement de foule au-dessus. En tous cas, une chose est sûre : ce sont autant de pantins, autant de marionnettes, menées à la baguette par une haute autorité. Et nous, sous ce pont, nous assistons tous les jours aux mêmes scènes. Les jeunes qui vont au lycée sur leur portable. Cet homme pressé, en retard peut-être, mangeant en courant dans son trois-pièces. Nous, nous nous sentons libre, mais nous ne le sommes pas vraiment. Je ne me sens pas destinée à un travail, mais je ne sais pas pourquoi j’y serais moins que d’autres. </p>

<p>Je m’extrais enfin de mon duvet. Il était à Jeanne. Elle me l’a donné. Il est plus chaud que ceux des autres ; j’ai à peine besoin d’une couverture supplémentaire. De toute façon, qu’est-ce qu’elle en ferait maintenant ? Elle aussi, elle a essayé de se donner sa chance. Je pense encore à elle, et je ne suis pas bien. Je suis moins bien que d’habitude. Cette nuit, j’ai encore fait un cauchemar. Toujours les mêmes cauchemars. Toutes les nuits. Des enfants innocents, par millions, enlevés à leurs parents un court instant et rendus comme métamorphosés. Comme un rite de passage. S’ils n’accomplissaient pas ce rite, ils seraient marginalisés. Aussi les parents le font-ils pour protéger leur progéniture. Ou bien peut-être sont-ils assez fous pour accepter pareille manipulation. </p>
<p><i>Ce cauchemar, ça me rappelle ce qu’avait dit Jeanne à propos de ces gens, qui ont un métier. Je n’ai pas voulu la croire, et pourtant, depuis, cela me hante. En même temps, qui l’aurait cru ? Injecter un code dans les individus dans le but de leur imposer une vie, cela n’est-il pas digne des pires dictatures? Manipulés, puis robotisés, puis manipulé de nouveau,en faisant un seul et unique métier toute sa vie, cela paraîtrait inenvisageable. Jeanne, elle, elle y a cru.</i></p>

<p>Ces personnes, qui passent sur le pont, seraient donc tous manipulés et robotisés par la société elle-même. Comment cela a-t-il pu arriver ? J’ai mal au crâne tout d’un coup. Je me sens bizarre. Moi qui vient de me lever, je préfère me rassoir. Je me revois pourtant heureuse, dans des bureaux, habillés chaudement et rentrer chez moi le soir. Un chez-moi. Qu’est-ce que c’était bien. Si seulement cela pouvait arriver de nouveau. Et avoir à manger tous les jours, à tous les repas, sans se soucier de demain. De ne pas se coucher en se disant qu’il s’agit probablement de la dernière nuit de notre existence. Katia me demande si ça va, toujours choquée de la mort de Gérard. Je lui réponds que oui, mais je suis dubitative. </p>

<p>Tout d’un coup, elle entre elle-même dans une grande fureur, m’accusant de ne jamais rien vouloir lui raconter de moi, et que Gérard, lui, n’avait pas de secret pour elle. Me disant qu’elle aimerait bien que je lui partage plus de choses de ma vie. Je trouve sa réaction excessive et bizarre. Katia, ancienne mannequin, a été mise à l’écart de la société par le travail. A cause de la drogue et de l’alcool, dans lesquels elle souhaitait oublier son passé, elle ne tenait plus le rythme que lui imposait la société. Elle ne cesse de me répéter que j’ai de la chance d’avoir oublier mon passé. Si elle savait… Elle est persuadée que moi aussi, c’est le travail qui m’a mise à l’écart de la société. Pour elle, c’est le cas de tous ceux qui sont en marge de la société.  Aujourd’hui, je me sens comme une étrangère dans cette obscure société. Pourtant, il faut bien y aller. Il est temps de rejoindre la Villette pour faire la manche. Nous changeons régulièrement d’endroits pour ne pas lasser les travailleurs. Lorsque je pars mendier, je tâche de me cacher dans la rue, comme je peux. J’ai honte de ce qui m’arrive. D’être obligée de demander aux gens pour avoir un peu de monnaie, pour pouvoir me nourrir. Pourtant, lorsque je fais la manche, je parviens à faire table rase de mes pensées, à oublier ma condition et juste leur demander ne serait-ce qu’un euro ou même moins. Les pompiers n’ont rien pu faire pour Gérard. C’est fini. Je n’en peux plus de cette situation. Je suis en train de sombrer, il faut faire quelque chose. Tandis que Katia et les autres le pleurent auprès des pompiers, je range doucement mes affaires, et prétextant une envie pressante, je prends congé de toute la bande. Ils ne se doutent pas de ce que je m'apprête à faire. </p>

<!--Question : Selon vous, quelle décision va prendre le personnage principal?
	1 : se venger de son ami décédé en comettant un crime
	2 : s'enfuir loin de tout
	3 : Monter une révolte pour dénoncer des conditiions de vie inacceptables des marginaux.!-->
        </div>
      </section>

      <section class="module parallax parallax-2">
        <div class="container">
          <h1>Rise</h1>
          <img src="chapters/paris-1768702_1920.jpeg" alt="Image d'un pont">
        </div>
      </section>

      <section class="module content">
        <div class="container">
          <p>Je marche là où mes pas me mènent. Surtout, ne pas se retourner. Ne pas se retourner. Plus jamais je ne compte revenir parmi les marginaux. Face à moi, le Louvre est toujours aussi rayonnant et prestigieux. Sa gloire nous rappelle qu’il a été construit pour un roi. Et au pied, les prolétaires dorment. Ça grouille déjà, alors qu’il doit être approximativement 6 heures du matin. Peut-être 7, je ne sais pas. J’ai perdu la notion du temps. Place Vendôme, je nous sens comme autant de fantômes, victimes de cette société de consommation. Puis ce sont les Halles, où la foule se presse. Elles ont été rénovées récemment et attirent, depuis, deux fois plus de monde. Y passer est toujours un peu l’enfer. Il faut y affronter le regard des gens, toujours dégoûtés. Je ne sais pas si cela n’a pas été inscrit dans leurs gènes. Place de la République, un monument est érigé en souvenir de dessinateurs disparus. Ils faisaient ce qu’ils voulaient, eux. Je passe ensuite à Belleville, un quartier malfamé où nous avions l’habitude de nous méfier de tout le monde. Le boulevard Haussmannien est rempli de voitures et de passants, et je me surprends à rêver en regardant les oiseaux. Eux, au moins, n’ont pas de question à se poser quant à leur vie. On les laisse tranquille. </p>
<p>Tout à coup, je sens quelqu’un me bousculer. L’inconnu se confond en excuses. Mon regard passe furtivement sur son bras : il a cette fameuse cicatrice, comme une entaille.</p>
 
<p><i>Je connais cette entaille. La voir me rassure, presque. Je me souviens de l’engouement que ça a suscité dans le passé. Je me remémore parfois cette phrase de Voltaire qui dit que le travail éloigne de nous l’ennui, le vice et le besoin. Sans ces trois grands maux, l’idée d’une société heureuse n’était plus une utopie. Le travail pouvait changer notre quotidien.</i></p>
<p>Le son de la rue m’extirpe de ma torpeur. Gênée par la lumière du jour, je tourne instinctivement mon regard vers les façades sombres des immeubles. L’une d’entre elle est placardée d’affiches. Parmi cette collection de publicités vieillies par le temps, l’une d’entre elles, aux reflets dorés, semble éclairer la ruelle dès lors qu’un rayon de soleil vient s’y perdre. Les aléas de la météo n’ont pas eu raison du slogan en lettres capitales qui surplombel’image : « Le futur que vous méritez ». Je ne peux m’empêcher de sourire. Dans le coin inférieur gauche de l’illustration se trouve un logo dont la forme et la couleur font immédiatement penser à une pièce de monnaie. À un denier d’or romain, précisément. Le nom de la société vient immédiatement confirmer cette théorie : « Aureus ». Pour la première fois depuis longtemps, le sol mouillé et froid me rend envieuse de la chaleur des appartements au-dessus de ma tête. Il est temps pour moi de me poser des questions. Comme une aveugle en quête de lumière, j’entame une nouvelle marche vers la civilisation. Celle de l’autre côté du pont.</p>
<p>Confucius disait qu’un homme qui choisit un travail qu’il aime n’aura pas à travailler un seul jour de sa vie. Et s’il était possible d’évaluer génétiquement les capacités physiques et mentales d’un nouveau-né ? De lui attribuer un métier pour lequel il s’éduquera avec passion ? À l’époque, des couples se formaient déjà grâce à des systèmes de correspondances d’ADN beaucoup moins fiables. C’est le Québec qui avait eu l’idée délirante de jumeler les sciences du comportement à des filtres génétiques pour mesurer la compatibilité des amants.
Les scientifiques de l’époque savaient déjà modifier des séquences d’ADN grâce à une enzyme spéciale.</p>
 
<p>« Le pont ». En réalité, il en existe plusieurs. Ils ont pour but de relier des quartiers différents entre eux. En effet, les grandes villes bénéficient d’un découpage en secteur d’activités. Il n’aura fallu que quelques années pour que Paris soit complètement réinventée. Tous les centres commerciaux sont réunis en un seul lieu, toutes les écoles sont à proximité les unes des autres. Il est ainsi beaucoup plus difficile de se perdre dans la capitale.</p>

<p>Il est temps pour moi d’en apprendre davantage sur cette société où les métiers sont définis à l’avance. C’est sous une nouvelle apparence totalement neutre, que je décide de me fondre dans la masse et d’aller à la rencontre de ceux qui vivent avec cette modification génétique. Il faut que je comprenne ce que cela leur apporte au quotidien. Sont-ils vraiment heureux ? Ils vivent certainement dans de meilleures conditions que les marginaux, mais n’est ce pas qu’une mascarade ?</p>
<p>Je me dirige donc instinctivement vers les quartiers destinés à l’éducation. Après tout, c’est ici que naît et grandit notre futur. L’école d’aujourd’hui ne semble rien avoir à envier à son ancêtre dont l’enseignement était pluridisciplinaire. D’ailleurs, celle-ci l’est restée pendant longtemps même après la mise en place des patchs. Le ministère de l’éducation considère que le « conditionnement » doit se faire de manière progressive. Désormais, les classes du primaire sont divisées en groupes d’activités générales en lien avec les futurs métiers. Ce n’est qu’à partir du collège que les élèves se spécialisent et mettent en pratique ce qu’ils ont appris.</p>
 
<p>Après de longues minutes de marche et quelques correspondances dans le métro parisien, j’arrive finalement devant l’école de mon enfance. Plaqué contre l’imposante porte d’entrée se trouvait un écriteau en bronze sur lequel on pouvait y lire un fier « Ecole privée Notre-Dame de Paris ». J’accède au bâtiment par la cour principale. Cette dernière est fermée par de simples barrières juste assez hautes pour empêcher les enfants de s’enfuir. Derrière l’aire de jeux se trouvait le gymnase. Aussi étonnant que cela puisse paraître, le sport est l’une des seules disciplines encore pratiquées par tous les élèves. Je me souviens alors des premières campagnes de sensibilisation au patch. L’une d’entre elle avait eu lieu dans ce gymnase. Tout avait été aménagé pour que la découverte soit ludique. Les enfants pouvaient effectuer une simulation et recevoir un « métier temporaire ». Équipés d’un badge et déguisés, ils devaient alors se comporter selon les règles de leur emploi fictif jusqu’à la fin de la journée. Je me dirige alors vers les bureaux.</p>
 
<p><i>Un emploi pour tout le monde ? Voilà que la réponse à l’un des plus gros problèmes de notre société avait été trouvée. Quelques manipulations ADN, un patch placé à la naissance et le tour est joué. Vous voici alors avec un être fonctionnel dès son premier jour sur terre. On  fait également d’une pierre deux coups : puisque les individus sont immédiatement formés pour effectuer le travail qui leur convient le mieux, il n’y a plus aucune question à se poser. Après tout, les gènes s’expriment bien mieux que cet orchestre caché qu’est l’âme.</i></p>
 
<p>L’un des bureaux est ouvert. Je frappe à la porte avec hésitation avant de glisser ma tête à l’intérieur de la salle. Une femme d’âge moyen griffonne au stylo rouge sur des feuilles doubles. Je n’ai pas besoin du patch pour savoir qu’elle est professeure. Elle se lève lentement de son siège et m’évalue pendant quelques instants avec circonspection. J’expliquai alors que je menais une enquête de satisfaction afin de savoir si le patch convenait toujours à ses utilisateurs. Elle me sourit avec inquiétude avant de me demander si j’étais la parente de l’un ou l’une de ses élèves. Quand elle apprend que je fréquentais moi-même cette école dans le passé, elle s’excuse de sa méfiance et me tend la main. Je prend place face à elle. Elle est la première institutrice que je rencontre depuis longtemps. Prise au dépourvu, je me fabrique donc une liste de questions banales avant de commencer mon entretien improvisé. Depuis combien de temps exerce-elle son métier ? Quelle note lui attribut-elle ? Elle se penche quelques instants sur sa pile de copies non corrigées puis relève la tête, un large sourire aux lèvres. Cela faisait bientôt dix ans qu’elle a quitté son emploi de cadre au profit du professorat grâce au patch. Jamais elle n’a été aussi heureuse et elle donne facilement la note maximale à son travail. Ne s’est-elle jamais demandé si le patch aurait pu se tromper ? Bien sûr, évidemment qu’elle y a pensé. Seulement, il n’y a pas une seule personne de son entourage qui regrette d’avoir utilisé cette invention géniale. Je la remercie de m’avoir accordé un peu de son temps.</p>
<p><i>La transition ne s’est pas faite en une journée. En revanche, la diffusion du patch n’a connu que très peu de résistance. Des études préalables ont montré que de nombreuses personnes n’étaient pas satisfaites de leur métier. Pour d’autres, c’était l’occasion parfaite de virer de bord et de s’aventurer dans l’inconnu. La mise en place du patch incluait un programme de « réorientation ». Si le métier jugé idéal n’avait aucun point commun avec le métier pratiqué, une formation rémunérée était proposée au sujet.</i></p>
<p>De tous les secteurs de concentration d’activité, la zone industrielle est certainement la plus bruyante. Les gigantesques tuyaux de ferraille semblent se disputer les cieux comme des navires de guerre dont on ne verrait que les mâts. Un épais nuage de pollution couronne les lieux et assombrit les usines, si bien que l’on dirait que la zone possède son propre écosystème. Je me fraye difficilement un chemin au milieu de ce vacarme incessant.</p>
<p>J’arrive alors devant une vieille bâtisse abandonnée. Celle-ci est couverte de graffitis et de vieilles banderoles en lambeaux. L’entreprise, telle qu’elle fut, a échoué. J’en avais d’ailleurs entendu parler à la télévision. À l’époque, de nombreux ouvriers mécontents s’étaient soulevés pour protester contre la centralisation des usines et la mise en place du patch. Ils étaient certainement effrayés à l’idée que leurs enfants soient destinés au même métier qu’eux. Ironiquement, la sélection du métier via l’ADN possède bien une part d’hérédité. Ça, on ne le savait pas encore. Ce qu’on savait, c’est que les forces de l’ordre étaient parvenues à éteindre le feu de la résistance sans faire de blessés. Des policiers raisonnés et attentifs dans toutes les conditions ? Voilà ce que le patch avait à offrir dans ce domaine.</p>
<p><i>Le patch ne coûte rien, évidemment. A ses débuts, il fallait prendre rendez-vous à l’hôpital car les procédés d’installation n’étaient pas optimisés. Bientôt, une simple visite chez le médecin suffirait. Depuis le dernier référendum, tous les enfants reçoivent un patch dès la naissance. Une fois les tests effectués, une minuscule puce est introduite sous le poignet. Elle permet entre autre à son utilisateur de s’identifier à l’entrée de son lieu de travail et de recevoir sa paye.</i></p>
<p>J’ai toujours eu beaucoup de considération pour les ouvriers. Pour une raison que j’ignore, les travaux manuels m’ont toujours semblé plus laborieux que les autres. J’approche de la centrale fumante, mon regard balayant les lieux à la recherche d’une âme disponible à sonder. L’un des travailleurs attire mon attention, tant il frappe le fer d’un geste calculé et régulier. Pas de doute, celui-là aurait rendu jaloux la meilleure main d’œuvre fordiste. N’ayant pas annoncé ma présence, il se passe quelques secondes avant que le laborieux ne me repère. Il me dévisage un instant et me lance que l’inspection du travail n’est plus ce qu’elle était avant de s’esclaffer. J’essaye alors de résumer les raisons de ma venue avec des mots simples. Lorsqu’il approuve finalement ma petite investigation personnelle, j’entame mes questions habituelles.  Que pense-t-il de son travail ? Est-il aussi passionné qu’au premier jour ? Il se passe une demi-seconde avant que celui-ci ne me réponde. La tâche est difficile, surtout pendant l’hiver. Il ne sait pas s’il aime ce qu’il fait. Il n’a appris à travailler que pour ce métier, après tout. Changerait-il d’activité s’il le pouvait ? L’homme sourit un instant et, par un bref mouvement de tête me fait comprendre qu’il n’en a ni l’envie, ni la possibilité. Je l’interroge alors sur les conditions de travail. Il hausse les épaules et ajoute qu’il n’a pas à se plaindre. Il se retourne alors vers son plan de travail et adresse un nouveau coup de marteau à un clou qui traînait. Je le salue brièvement et m’en vais en sachant qu’il ne me répondra pas.</p>
<p>J’erre depuis quelques heures, traversant les quartiers sans prêter attention à ce qu’il se passe autour de moi. Soudain, j’arrive à l’endroit que je connais le mieux. Celui qui m’est le plus familier. Au centre d’un immense parking se dresse un édifice d’une vingtaine d’étages. Un « A » doré trône au-dessus du porche d’entrée. Le bâtiment en lui-même ressemble à l’image qu’on se fait de l’ADN. Franck Ghéry, qui l’a réalisé, s’est inspiré de Ludwig Mies Van Der Rohe et joue avec les fenêtres pour créer cette forme, entre les verres à reflets et les verres complètement transparents. Certains sont même colorés, notamment sur la structure de l’image. La grande porte d’entrée était également tout de verre à reflet doré. </p>
<p>Devant le bâtiment se trouve un jeune homme fort élégant. À en juger par la cigarette dans le coin de ses lèvres et sa posture lasse, j’estime qu’il est aux alentours de 16h et que celui-ci prend sa dernière pause de la journée. Avant que je ne puisse le réaliser, l’inconnu se trouve à quelques centimètres de moi. Son air concerné et sa main sur mon épaule me firent reculer un instant. Il me souhaite la bienvenue; je lui explique que je suis simplement venue mener une enquête de satisfaction à la suite de la mise en place du patch. Il arque un sourcil puis étouffe un rire. Je me trouve bien devant Aureus, la firme qui produit ces patchs. Soudain, une jeune femme aux cheveux soigneusement coiffés sort de l’entreprise les bras chargés de dossiers. Elle s’arrête quelques secondes avant de me dévisager d’un air enjoué. “Bonjour Louise. Comment se sont déroulées vos vacances ?”</p>



 
<!--Pourquoi la jeune femme semblent-elle reconnaître le personnage principal?
		1 : c'est une simple connaissance qu'elle retrouve un peu par hasard
		2 : elle l'a simplement confondu avec quelqu'un d'autre
		3 : Louise est l'une de ses collègues qui travaille chez Auréus!-->




          </div>
      </section>

      <section class="module parallax parallax-3">
        <div class="container">
          <h1>Kapitel Drei</h1>
          <img src="chapters/architecture.jpeg">
        </div>
      </section>

      <section class="module content">
      	Et vous, quel bilan auriez-vous tiré d'une telle expérience de terrain?
          <button class="button1 button">afficher la fin 1 "Il est injuste que les marginaux restent sans emploi, il est nécessaire de leur offrir une réinsertion professionnelle</button>
          <button class="button2 button">afficher la fin 2 "Le patch n'a pas rempli toutes ses promesses de prosperité économiques, les gens devraient être maîtres de leur propre vie."</button>
          <div class="container sansafficher">
          	<p>Des vacances ? Un peu prise au dépourvu par cette question, je me souviens alors de cette histoire de congés en plein mois de décembre, inventée pour faire diversion. Malgré le contexte tendu dans l’entreprise, personne n’avait osé me faire part de sa désapprobation. Après tout, qui pourrait interdir quelque chose à la cheffe d’Aureus ? D’une voix ferme, sans même prendre le temps de répondre à sa question, j'explique à ma collègue qu’une réunion d’urgence doit avoir lieu à la tête de l’entreprise dans l’heure qui suit. En traversant le hall d’entrée j’ai le sentiment de retrouver mes repères. Je me sens de nouveau chez moi. Vêtus de leur blouses blanches, les scientifiques défilent d’un pas pressé. A l’accueil Paul, mon fidèle bras droit, m’adresse un large sourire de bienvenue. Sans m’attarder, je lui demande de réunir l’ensemble des dirigeants de l’entreprise au plus vite. C’est au dernier étage du bâtiment que se trouvent mon bureau ainsi que  la salle de réunion. En trois semaines rien n’a bougé, mon nom “Louise Claudel” est toujours inscrit en lettres dorées sur la porte. Juste en dessous, on peut lire “présidente directrice général d’Aureus”. Meublé dans un style contemporain, mon bureau est mon espace de réflexion préféré ; je m’y sens bien et il m’est arrivé de dormir à plusieurs reprises sur le canapé suédois situé près de l’immense bibliothèque. Aux murs, mes diplômes de biochimiste trônent à côté d’un tableau de Jackson Pollock. Sur le bureau en bois d'acajou hérité de mon grand-père, une photo de moi et mes amis devenus collaborateurs  me replonge dans des souvenirs lointains.</p> 
<p>C’était il y a presque vingt ans ; un projet un peu fou qui avait vu le jour sur le banc de l’université s’est transformé en une société reconnue par l’Etat, qui porte le nom d’Aureus. Alors que le chômage de masse frappait violemment le pays, le gouvernement français a décidé de mettre fin à la robotisation de l’emploi et tout miser sur l’humain. Afin que chacun trouve sa place dans cette nouvelle organisation du travail, un métier pouvait être implanté directement dans les gènes des individus. L’idée était que leurs compétences soient totalement adaptées aux enjeux actuels et évitent le recours systématique à la formation professionnelle. A l’époque, le projet avait été très bien accueilli par ceux qui en avaient le plus besoin. Le transhumanisme avait déjà fait ses preuves dans le milieu de la santé alors l’utiliser pour créer de l’emploi ne faisait plus vraiment peur. Ce qui, au départ, était une solution temporaire s’est généralisé de telle sorte que les modifications génétiques avaient lieu dès le plus jeune âge. Aureus a ainsi pris une importance considérable dans le parcours professionnel des gens. En  tant que scientifiques à l’origine du projet, nous n’avions jamais questionné nos pratiques au fil des ans. La baisse du chômage nous montrait uniquement ce qu’il y avait de positif dans ce dispositif. Mais avec les années, de nombreuses interrogations  me tourmentaient et il était nécessaire d’aller voir comment les gens vivent avec ou sans cette modification génétique. 
La voix de Paul me ramène brutalement à la réalité : il est plus que temps de faire part de cette expérience hors du commun à mes collègues.</p>
        </div>
        <div class="container afficher1">
          <h2>Kapitel Drei</h2>

        <p>Rassemblés dans la grande salle de réunion, les employés à la tête d’Aureus me fixent d’un regard interrogateur.  Aucun d’entre eux ne se doute un instant de ce que je vais leur révéler. En prenant une grande inspiration, je commence par leur expliquer ma décision de m’infiltrer au coeur de la société, dans la rue, pour rencontrer ceux qui n’ont pas eu de modification génétique. Ce sont ceux qu’on nomme les marginaux. Au fil de mon récit, je peux lire sur le visage de mes collègues l’étonnement face aux scènes  dont j’ai été témoin. Certains ont même du mal à croire que ces conditions de vie existent vraiment. C’est en toute sincérité que je leur fait part des conclusions auxquelles cette enquête m’a conduite.</p>
<p>“Comme vous le savez chers collègues, Aureus a toujours eu le soucis de rendre aux gens la vie meilleure. En dix ans d’expérience dans cette entreprise, nous n’avions jamais pris le temps d’aller sur le terrain pour voir comment les gens vivent avec ces métiers implantés dans leurs gênes. Encore pire, nous ne nous sommes jamais interrogés sur la vie de ceux qui n’ont pas eu recours à la modification génétique, ceux qui restent sans emploi. Ce que j’ai vécu l’espace de quelques semaines, je ne le souhaite à personne. C’est pourquoi il est indispensable que nous prenions nos responsabilités et que nous offrions à ces gens mis de côté une possibilité de se réinsérer dans le monde du travail. L’enseignante et l’ouvrier que j’ai rencontré ne m’ont exprimé aucun regret quant à la modification génétique, ils se disent heureux d’avoir une situation confortable. Notre dispositif a permi de mettre fin à une grande partie de la misère sociale, il est désormais temps de se tourner vers ceux qui restent exclus à l’heure actuelle. Qu’ils le souhaitent ou non, les marginaux doivent se mettre en phase avec la société et suivre le processus de modification génétique. Pour les plus fragiles d’entre-eux, il sera toujours possible de leur fournir une substance qui leur fasse oublier leur passé douloureux. C’est une nouvelle page qui se tourne pour Aureus : cette expérience humaine m’a fait réalisé à quel point notre découverte scientifique a fait évoluer le monde en bien. Il est nécessaire pour nous de poursuivre cette mission en mettant fin à la société parallèle que représentent les sans-abris. Nous devons agir vite et sans plus attendre.</p>

          </div>
        <div class="container afficher2">
          

<p>Rassemblés dans la grande salle de réunion, les employés à la tête d’Aureus me fixent d’un regard interrogateur.  Aucun d’entre eux ne se doute un instant de ce que je vais leur révéler. En prenant une grande inspiration, je commence mon récit comme si je savais depuis toujours ce que j’avais à dire.</p>

<p>“Comme vous le savez chers collègues, Aureus a toujours eu le souci de rendre aux gens la vie meilleure. Nous avons lancé ce projet il y a bientôt dix ans, afin de répondre aux problématiques qui se sont posées avec la crise de l’emploi. Le principe vous le connaissez, nous codons un métier dans l’ADN de tous, métier qui est lui-même défini par les gênes et aptitudes des individus. Ainsi tout le monde peut exercer le même métier toute sa vie puisqu’il lui correspond parfaitement. Nos objectifs étaient précis, premièrement réduire le chômage. En assignant à chacun un métier nous offrions aux institutions la possibilité d’adapter le marché du travail grâce à la connaissance exacte du nombre de travailleurs par métier. Nous devions permettre aux individus de ne plus perdre de temps dans une branche qui ne leur conviendrait pas. Le patch devait aussi être un moyen d'accroître la productivité. En effet, il devait garantir la motivation des travailleurs puisqu’il leur permettrait d’effectuer un métier  génétiquement fait pour eux.</p>
<p>En dix ans d’expérience dans cette entreprise, nous n’avions jamais pris le temps d’aller sur le terrain pour voir comment les gens vivent avec ces métiers implantés dans leurs gênes. Je l’ai fait. Pendant ces trois semaines d’absence, je me suis immiscée au cœur de la société, je suis allée vivre avec les marginaux, j’ai rencontré des travailleurs et j’ai essayé de comprendre leur rapport à ce qui détermine leur vie. J’ai compris alors que j’aurais dû m’interroger depuis bien longtemps. Je vais être claire avec vous : le patch est une erreur et nous devons y mettre un terme. »</p>
<p>Les murmures qui se font entendre depuis le début de mon discours se transforment soudain en graves vociférations. Je poursuis mon exposé sans me laisser perturber, comme si plus rien ne m’importait.</p>
<p>« Nous avons échoué. Nous n’avons pas rendu la vie des gens meilleure, nous leur avons mis des œillères et assigné un rôle de force. Je voyais le patch comme une chance, une solution, mais il n’est pas moins qu’une servitude de plus. Contrairement à ce que nous fait croire le gouvernement et à ce que nous publions nous même dans nos rapports, les objectifs de départ n’ont jamais été remplis. Le patch n’a pas enrayé le chômage de masse, les autorités ont simplement cessé de recenser les chômeurs. Certains d’entre vous ne connaissent même pas la loi du 7 janvier 2042 qui dispose que tous les individus non patché ne seront plus considérés comme citoyens français. Le gouvernement a décidé que le patch était la solution à tous les maux et que ceux qui s’y refusaient érigeaient eux-mêmes leur perte. Cependant, ces exclus de la société, ceux qu’on appelle les marginaux, sont trop nombreux cachés sous les ponts. Je les ai vu dehors, dans la rue, dans le froid, et leur situation n’a jamais été aussi terrible. On est loin de ce que vivaient les sans domicile fixe avant Aureus. Je vous parle aujourd’hui d’une véritable société parallèle à la nôtre qui s’est construite sous nos pieds. Cette situation, nous, notre entreprise, notre projet, en sommes les premiers responsables.</p>
<p>Bien sûr, j’ai également rencontré des cadres et des fonctionnaires très satisfaits de leur situation. Les ouvriers quant à eux sont toujours ceux qui souffrent le plus. Ils ne peuvent encore moins qu’avant aspirer à une ascension professionnelle puisque c’est le patch qui décide et les contraint. En cela, la situation n’est pas différente de celle d’il y a dix ans, les fractures sociales sont les mêmes et les progrès au travail n’ont jamais été avérés. »</p>
<p>Mon cœur s’emballe à mesure que j’arrive au terme de mon discours, et je réalise alors ce qu’il me reste à faire.</p>
<p>« Aujourd’hui, je vous annonce ma démission du poste de Présidente Directrice Générale d’Aureus. J’ai créé le patch en pensant offrir un rôle à chacun dans notre société. Je comprends à présent que je n’ai fait que contribuer à une immense fracture. Il est temps désormais de redonner un sens au travail. Je vais publier le journal de bord que j’ai tenu pendant ces trois semaines d’infiltration. Même si cela doit conduire à des révoltes, à la destruction d’Aureus, ce sont des risques que je suis prête à prendre pour mettre un terme à l’utilisation du patch. Le futur que vous méritez est celui que vous choisissez.»</p>
        </div>
      </section>

  </main><!-- /main -->

  <footer>
    <div class="container">
      <div class="asides clearfix">
        <aside>
          <nav>
            <ul>
              <li><a href="http://callmenick.com/">Welcome</a></li>
              <li><a href="http://callmenick.com/category/tutorials">Tutorials</a></li>
              <li><a href="http://callmenick.com/category/snippets">Snippets</a></li>
              <li><a href="http://callmenick.com/category/articles">Articles</a></li>
              <li><a href="http://callmenick.com/category/resources">Resources</a></li>
            </ul>
          </nav>
        </aside>
        <aside>
          <nav>
            <ul>
              <li><a href="http://callmenick.com/archive/">Archive</a></li>
              <li><a href="http://callmenick.com/about">About</a></li>
              <li><a href="http://callmenick.com/contact">Contact</a></li>
              <li><a href="http://callmenick.com/subscribe">Subscribe</a></li>
            </ul>
          </nav>
        </aside>
        <aside class="logo">
          <a href="http://callmenick.com/"><img alt="Tutorials, Snippets, Resources, and Articles for Web Design and Web Development" onerror="this.src=logo.png" src="img/core/logo.svg"></a>
        </aside>
      </div>
      <div class="copyright">
        <small>
          &copy; 2014, Nick Salloum<br><a href="http://callmenick.com">callmenick.com</a>
        </small>
      </div>
    </div>
  </footer><!-- /footer -->

</div><!-- /#wrapper -->

<!-- script class -->
<script type="text/javascript">
$(document).ready(function(){
    $(".afficher1").hide();
    $(".afficher2").hide();

    $(".button1").click(function(){
        $(".afficher1").show();
    });
    $(".button2").click(function(){
        $(".afficher2").show();
    });
});
</script>


<!-- analytics -->


</body>
</html>
