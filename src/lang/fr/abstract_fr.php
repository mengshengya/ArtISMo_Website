<?php
return [
    'abstract.section_1' => 'Contexte',
    'abstract.section_2' => 'Objectifs',

    'abstract.context_1' =>
        'Le développement de contrôleurs haute performance et fiables pour les véhicules autonomes et connectés '
        . 'nécessitera des mesures ou des estimations en temps réel de nombreuses variables sur chaque véhicule. '
        . 'Parmi les variables nécessaires pour la rétroaction, on peut citer : les distances longitudinales, les '
        . 'vitesses et accélérations des autres véhicules à proximité ; la position latérale du véhicule dans sa voie ; '
        . 'l\'angle de lacet du véhicule ; l\'angle de glissement ; la vitesse de lacet ; l\'angle de braquage ; '
        . 'l\'accélération latérale et l\'angle de roulis. Il y a aussi des variables environnementales qui doivent être '
        . 'mesurées comme le coefficient de friction pneu-route, la couverture de neige sur la route et la présence '
        . 'd\'obstacles inattendus.',

    'abstract.context_2' =>
        'La mesure de toutes les variables mentionnées ci-dessus entraîne des coûts importants. En effet, certains '
        . 'capteurs, comme le capteur d\'angle de glissement et l\'angle de roulis, peuvent être extrêmement coûteux à '
        . 'mesurer, nécessitant des capteurs qui coûtent des milliers de dollars. Par exemple, le capteur optique Datron '
        . 'pour la mesure de l\'angle de glissement coûte plus de 10 000 euros. De plus, plusieurs variables ne peuvent '
        . 'pas être mesurées en raison de l\'indisponibilité des capteurs (à tout prix). Par exemple, les positions et '
        . 'accélérations des véhicules en amont du véhicule de tête du peloton. Seule la position du véhicule '
        . 'immédiatement devant peut actuellement être mesurée.',

    'abstract.context_3' =>
        'De plus, les véhicules autonomes et connectés exigent des capteurs et des actionneurs hautement fiables. '
        . 'L\'défaillance d\'un capteur ou d\'un actionneur, due à des défauts, des cyberattaques ou une attaque par '
        . 'déni de service, peut causer un accident catastrophique. Par conséquent, des systèmes de diagnostic fiables '
        . 'et de gestion des défauts sont également nécessaires. De tels systèmes ne peuvent pas être basés sur la '
        . 'redondance matérielle qui nécessite de nombreuses copies supplémentaires des mêmes capteurs. Au lieu de cela, '
        . 'ils doivent s\'appuyer sur des algorithmes d\'estimation et une redondance analytique. Pour les raisons '
        . 'précédentes, le développement d\'algorithmes d\'estimation intelligents est très important pour les véhicules '
        . 'autonomes.',

    'abstract.text_1' =>
        'L\'idée que nous explorerons dans ce projet est le développement et l\'utilisation d\'observateurs nonlinéaires '
        . 'basés sur l\'apprentissage. Plusieurs composants d\'un véhicule ont des modèles très complexes dont les '
        . 'paramètres sont difficiles à obtenir et varient également considérablement avec le temps.',

    'abstract.objectives_title_1' => 'Observateurs neuro-adaptatifs basés sur l\'apprentissage pour le suivi des véhicules',
    'abstract.objectives_title_2' => 'Vers des algorithmes d\'estimation intelligents',
    'abstract.objectives_title_3' => 'Améliorer la résilience, la robustesse et la fiabilité des véhicules automatisés en peloton',

    'abstract.objectives_1' =>
        'L\'objectif principal de ce projet est de développer un cadre complet pour la conception et la mise en œuvre '
        . 'd\'observateurs nonlinéaires basés sur l\'apprentissage pour les véhicules autonomes et connectés.',

    'abstract.objectives_2' =>
        'Cette proposition utilisera donc une approche de modélisation combinée comprenant des équations différentielles '
        . 'physiquement significatives et des réseaux de neurones adaptatifs basés sur l\'apprentissage en ligne pour '
        . 'représenter la dynamique du véhicule. En particulier, les phénomènes bien compris comme les équilibres de '
        . 'forces, le mouvement mécanique selon les lois de Newton, la traînée aérodynamique, la résistance au roulement, '
        . 'la pente de la route, les termes d\'accélération combinés pour les accélérations latérales et de roulis et '
        . 'l\'influence de l\'angle de pente de la route seront modélisés en utilisant des équations différentielles '
        . 'analytiques. Les modèles de pneus pour les forces latérales et longitudinales, le cercle de friction, les '
        . 'cartes moteur et les caractéristiques de rigidité et d\'amortissement de la suspension seront modélisés '
        . 'en utilisant des réseaux de neurones dont les poids peuvent être initialement obtenus par un entraînement via '
        . 'rétropropagation. En plus de l\'entraînement initial, les paramètres du modèle pour les réseaux de neurones '
        . 'et un sous-ensemble de paramètres pour les équations différentielles physiquement significatives seront '
        . 'également mis à jour automatiquement en ligne pendant l\'utilisation régulière du véhicule.',

    'abstract.objectives_3' =>
        'L\'objectif global de cette partie est de développer l\'architecture de l\'approche de modélisation combinée, '
        . 'de développer des algorithmes d\'estimation rigoureux pour l\'estimation des paramètres et de l\'état, '
        . 'de permettre des changements dynamiques dans la structure de l\'observateur en fonction de la manœuvre du '
        . 'véhicule en temps réel et de la disponibilité des mesures, et de valider le modèle complet et le système '
        . 'd\'estimation en utilisant les données de CARSIM et les mesures expérimentales de véhicules réels fournies '
        . 'par les partenaires du projet.',

    'abstract.objectives_4' =>
        'Un autre objectif de cette proposition est de proposer un nouveau système complet d\'algorithmes d\'estimation '
        . 'activés par logiciel à inclure dans de nombreuses stratégies de contrôle et schémas de diagnostic pour '
        . 'améliorer la stabilité, la fiabilité et la sécurité des véhicules connectés. À cette fin, comme le montre '
        . 'la figure suivante, l\'objectif est de combiner les propriétés intéressantes des prédicteurs statistiques, '
        . 'des méthodes basées sur les modèles, des observateurs neuro-adaptatifs et des techniques basées sur '
        . 'l\'apprentissage comme l\'algorithme de recherche d\'extrémum pour améliorer l\'estimation et augmenter la '
        . 'résilience, les performances et la robustesse de toute stratégie de contrôle liée aux véhicules connectés.',

    'abstract.objectives_5' =>
        'Le défi est de développer un protocole de connexion intelligent entre l\'ensemble des observateurs/estimateurs/'
        . 'prédicteurs permettant l\'estimation la plus précise et la plus fiable. La combinaison de toutes ces techniques '
        . 'd\'estimation est amplement intéressante pour les modèles avec des entrées inconnues et/ou des paramètres '
        . 'inconnus. Parmi les problématiques des véhicules autonomes et connectés (en plus du problème de suivi '
        . 'mentionné ci-dessus) où de tels algorithmes d\'estimation intelligents sont cruciaux, on peut citer le '
        . 'problème de la détection des attaques cyberphysiques ou du déni de service, le rejet des perturbations et '
        . 'des défauts, et la perte de données. Par conséquent, l\'estimation de toutes les variables liées à ces '
        . 'facteurs pourrait considérablement augmenter la résilience et la fiabilité des véhicules interconnectés. En '
        . 'raison de la grande sensibilité des véhicules autonomes à ces facteurs non désirés, le développement de '
        . 'schémas d\'estimation intelligents est crucial et essentiel.',

    'abstract.objectives_6' =>
        '<p>Dans le fonctionnement des véhicules interconnectés, l\'environnement basé sur le réseau offre de nombreux '
        . 'avantages tels que l\'installation facile, la maintenance à faible coût et l\'efficacité élevée. Combiné avec '
        . 'la technologie de communication avancée récente, les futurs véhicules contrôlés et connectés fonctionnent dans '
        . 'un environnement basé sur le réseau qui cause également plusieurs facteurs non désirables. Ces facteurs peuvent '
        . 'être les suivants :</p>'
        . '<ul>'
        . '<li><u><em>Perturbations et défauts : </em></u> les pannes des appareils numériques causent des problèmes '
        . 'graves comme la dégradation des performances du système et même la perte de vies humaines. Par conséquent, le '
        . 'diagnostic des défauts est nécessaire en tenant compte de plusieurs concepts d\'ingénierie comme la tolérance '
        . 'aux défauts et le diagnostic des défauts.</li><br>'
        . '<li><u><em>Cyberattaques : </em></u> il est essentiel de développer certains critères pour que les systèmes '
        . 'des véhicules détectent et contrent les cyberattaques. Nous visons à considérer plusieurs architectures '
        . 'd\'attaque informatique impliquant des dynamiques nonlinéaires.</li><br>'
        . '<li><u><em>Perte de données : </em></u> l\'influence de la perte de paquets sera forte quand la perte de '
        . 'paquets et l\'échantillonnage se produisent simultanément car, si la perte de paquets se produit à un instant '
        . 'd\'échantillonnage, les données seront manquantes pendant une période d\'échantillonnage. Par conséquent, nous '
        . 'préparons des solutions pour cette situation complexe. Spécifiquement pour ce problème, l\'utilisation et le '
        . 'développement de nouveaux prédicteurs statistiques seront très intéressants.</li><br>'
        . '</ul>'
        . '<p>Jusqu\'à présent, de nombreux travaux existants ont résolu les problèmes mentionnés ci-dessus individuellement. '
        . 'Dans ce projet, nous travaillerons sur une solution unifiée contrant tous les facteurs causés par la présence '
        . 'd\'environnements basés sur le réseau. Nous étudierons la stabilité des systèmes de véhicules interconnectés '
        . 'soumis à ces facteurs basés sur le réseau. L\'objectif est de développer une théorie complète du point de vue '
        . 'de l\'estimation pour améliorer la résilience, la robustesse et la fiabilité d\'une large classe de dynamiques '
        . 'de véhicules nonlinéaires (inter)connectés. L\'étude des algorithmes d\'estimation basés sur l\'apprentissage '
        . 'ou basés sur les données et la combinaison d\'observateurs d\'entrée inconnue (UIO) avec des approximations '
        . 'nonlinéaires seront soulevées dans cette proposition. En effet, en raison de l\'intelligence des nouvelles '
        . 'technologies intégrées, l\'utilisation d\'algorithmes basés sur l\'intelligence artificielle peut aider à '
        . 'améliorer l\'estimation et donc la résilience et la fiabilité des systèmes de contrôle dans la mobilité '
        . 'intelligente. La combinaison de techniques analytiques basées sur les modèles avec des algorithmes basés sur '
        . 'l\'apprentissage et des prédicteurs statistiques améliorera considérablement la qualité de l\'estimation.</p>',

    'abstract.section_3' => 'Lots de Travaux (WPs)',
    'abstract.section_4' => 'Partenaires & Consortium',

    'abstract.workpackages_intro' =>
        'Pour atteindre les objectifs du projet, la recherche est organisée en cinq lots de travaux (Work Packages - WPs) étroitement intégrés :',

    'abstract.workpackages_list_html' =>
        '<div class="wp-grid">'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp1">WP1</span></div>'
        . '<h4 class="wp-card-title">Gestion de Projet et Communication</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Responsable : Ali Zemouche (CRAN)</div>'
        . '<p class="wp-card-desc">Ce lot est dédié à la gestion globale du projet, au suivi des plannings (Gantt), aux livrables, à l\'analyse des risques et à l\'organisation des réunions de lancement (Kick-Off) et des workshops annuels. Il coordonne également les transferts de connaissances académiques et industriels.</p>'
        . '</div>'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp2">WP2</span></div>'
        . '<h4 class="wp-card-title">Modélisation Véhicule, Perception de l\'Environnement & Deep-Learning</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Responsable : Sofiane Ahmed Ali (IRSEEM)</div>'
        . '<p class="wp-card-desc">Ce lot fournit des modèles physiques et cinématiques du véhicule et intègre des techniques de vision par ordinateur et de deep-learning pour estimer les états et vérifier la cohérence des mesures fournies par les capteurs embarqués (ex. LiDAR, Caméra).</p>'
        . '</div>'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp3">WP3</span></div>'
        . '<h4 class="wp-card-title">Capteurs Logiciels Intelligents pour le Suivi de Véhicules</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Responsable : Ali Zemouche (CRAN)</div>'
        . '<p class="wp-card-desc">Ce lot se concentre sur le suivi de véhicules individuels en concevant des architectures d\'estimateurs et d\'observateurs neuro-adaptatifs basés sur les données. Il traite des défis mathématiques liés aux fonctions d\'activation non linéaires, au rejet du bruit et à l\'apprentissage en ligne.</p>'
        . '</div>'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp4">WP4</span></div>'
        . '<h4 class="wp-card-title">Capteurs Logiciels R³ pour le Suivi de Véhicules en Peloton</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Responsable : Dalil Ichalal (IBISC)</div>'
        . '<p class="wp-card-desc">Ce lot développe des capteurs logiciels coopératifs et distribués pour garantir un pelotonnage résilient, robuste et fiable (R³). Il cible le diagnostic de défauts, la détection des cyberattaques et l\'atténuation des délais ou pertes de paquets de communication.</p>'
        . '</div>'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp5">WP5</span></div>'
        . '<h4 class="wp-card-title">Validation, Tests et Intégration des Algorithmes</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Responsable : Randolph Toom (FAAR)</div>'
        . '<p class="wp-card-desc">Ce lot intègre les capteurs logiciels et les lois de contrôle développés sur des robots mobiles (AgileX LIMO), des véhicules à l\'échelle (Quanser QCar) et des véhicules d\'essais industriels réels fournis par FAAR Industry, validant ainsi les résultats théoriques dans des conditions réelles.</p>'
        . '</div>'
        . '</div>',

    'abstract.partners_intro' =>
        'Le projet ArtISMo rassemble un consortium multidisciplinaire composé d’instituts de recherche français de premier plan, '
        . 'd’un partenaire industriel et d’une collaboration académique internationale :',

    'abstract.partners_list_html' =>
        '<div class="partners-grid">'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-cran"><img src="assets/img/logo_cran.png" alt="Logo CRAN" class="partner-logo-img">CRAN</div>'
        . '<h4 class="partner-title">CRAN</h4>'
        . '<div class="partner-subtitle">Centre de Recherche en Automatique de Nancy — Université de Lorraine & CNRS</div>'
        . '<span class="partner-role-tag">Coordinateur du Projet</span>'
        . '<p class="partner-desc">Le CRAN est spécialisé en automatique, observateurs non linéaires, analyse de stabilité et communication réseau.</p>'
        . '</div>'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-ibisc"><img src="assets/img/logo_evry.png" alt="Logo IBISC" class="partner-logo-img">IBISC</div>'
        . '<h4 class="partner-title">IBISC</h4>'
        . '<div class="partner-subtitle">Informatique, Biologie Synthétique et Systèmes Complexes — Université d\'Évry & Université Paris-Saclay</div>'
        . '<span class="partner-role-tag">Responsable WP4</span>'
        . '<p class="partner-desc">IBISC apporte son expertise en dynamique des véhicules, systèmes cyber-physiques, observateurs et commande tolérante aux défauts.</p>'
        . '</div>'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-irseem"><img src="assets/img/logo_esigelec.jpg" alt="Logo IRSEEM" class="partner-logo-img">IRSEEM</div>'
        . '<h4 class="partner-title">IRSEEM</h4>'
        . '<div class="partner-subtitle">Institut de Recherche en Systèmes Électroniques Embarqués — ESIGELEC</div>'
        . '<span class="partner-role-tag">Responsable WP2</span>'
        . '<p class="partner-desc">L\'IRSEEM apporte ses compétences dans les systèmes mécatroniques, le deep-learning, la vision par ordinateur, la perception et les systèmes multi-agents V2X.</p>'
        . '</div>'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-faar">FAAR</div>'
        . '<h4 class="partner-title">FAAR Industry</h4>'
        . '<div class="partner-subtitle">Partenaire Industriel</div>'
        . '<span class="partner-role-tag">Responsable WP5 & Validation</span>'
        . '<p class="partner-desc">FAAR fournit le support ingénierie, les ressources d\'instrumentation et les installations automobiles pour déployer et valider les algorithmes sur des véhicules réels et expérimentaux.</p>'
        . '</div>'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-lisec"><img src="assets/img/logo_umn.svg" alt="Logo LISEC" class="partner-logo-img">LISEC</div>'
        . '<h4 class="partner-title">LISEC</h4>'
        . '<div class="partner-subtitle">Laboratory of Intelligent Systems and Experimental Control — University of Minnesota</div>'
        . '<span class="partner-role-tag">Conseiller Académique</span>'
        . '<p class="partner-desc">Collabore sur l\'ensemble des lots de travaux, apportant des conseils scientifiques avancés sur les observateurs intelligents, le pelotonnage de véhicules et les systèmes de contrôle de stabilité.</p>'
        . '</div>'
        . '</div>',
];