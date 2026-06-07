<?php

return [
    'results.title' => 'Résultats de Recherche',
    'results.cat_phd' => 'Recherche Doctorale',
    'results.cat_internship' => 'Stage de Master',
    'results.cat_milestone' => 'Jalon de Projet',
    'results.phd_summary' => 'Un estimateur Robust KalmaNet développé pour la plateforme Quanser QCar. Il associe un modèle cinématique de bicyclette à un réseau neuronal estimant la confiance des mesures capteurs.',
    'results.viet_summary' => 'Supervision web sous ROS2 et boucle de commande autonome pour véhicules miniatures. Déploiement de conteneurs Docker, planificateur Stanley et évitement d\'obstacles LiDAR sur QCar2.',
    'results.melissa_summary' => 'Modélisation de la dynamique du véhicule par réseau de neurones récurrent (GRU) informé par la physique. Réduction des incohérences mécaniques de 58% tout en préservant la précision.',
    'results.back_link' => '← Retour aux Résultats',
    'results.read_more' => 'En savoir plus',
    'results.no_image_alt' => 'Aucun aperçu disponible',
    'results.view_project' => 'Voir les détails du projet',
    'results.section_phd' => 'Recherche Doctorale : Robust KalmaNet (Dr. Quang Huy Nguyen)',
    
    'results.phd_intro_1' => 'Ces travaux de recherche présentent un estimateur de type Robust KalmaNet développé pour la plateforme de véhicule autonome miniature Quanser QCar. L\'estimateur conserve un modèle de prédiction basé sur la physique (modèle de bicyclette cinématique) tout en apprenant un mécanisme de confiance adaptatif pour l\'étape de mise à jour des mesures.',
    
    'results.phd_intro_2' => 'Ce mécanisme de confiance est composé d\'un masque de mesure appris (généré par un perceptron multicouche - MLP) et d\'un gain de type Kalman appris (généré par une unité récurrente GRU et un MLP). En apprenant à prédire la confiance par canal de capteur, le système atténue l\'impact des mesures corrompues de position GPS, de cap et de vitesse (par exemple lors de sauts brusques, de pertes de paquets ou de cyber-attaques) tout en préservant les performances du filtre de Kalman étendu (EKF) sur des données saines.',
    
    'results.phd_image_caption' => 'Schéma du système d\'estimation de confiance Robust KalmaNet, combinant cinématique analytique et mise à jour de confiance apprise.',
    

    'results.phd_downloads_title' => 'Rapports & Supports de Présentation',
    
    'results.phd_downloads_html' => '
    <div class="download-container">
        <a href="assets/img/work/doctorant/robust_kalma/robust_kalmannet_trust_report.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📄</span> Télécharger le Rapport Court (PDF)
        </a>
        <a href="assets/img/work/doctorant/robust_kalma/rknet_presentation_slides.pdf" class="download-btn secondary-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📊</span> Télécharger les Diapositives (PDF)
        </a>
    </div>',

    'results.phd_val_title' => 'Performances de Validation Hors-Ligne',
    'results.phd_val_table_html' => '
    <div class="table-container">
        <table class="results-table">
            <thead>
                <tr>
                    <th>Méthode / Estimateur</th>
                    <th>$x$ [m]</th>
                    <th>$y$ [m]</th>
                    <th>$\psi$ [rad]</th>
                    <th>$v$ [m/s]</th>
                    <th>Moyenne (4 états)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Référence Cinématique</strong></td>
                    <td class="numeric-val">0.0663</td>
                    <td class="numeric-val">0.0574</td>
                    <td class="numeric-val">0.1151</td>
                    <td class="numeric-val">0.0134</td>
                    <td class="numeric-val">0.0631</td>
                </tr>
                <tr class="highlight-row">
                    <td><strong>RKNet Appris</strong></td>
                    <td class="numeric-val highlight-row">0.0076</td>
                    <td class="numeric-val highlight-row">0.0168</td>
                    <td class="numeric-val highlight-row">0.1096</td>
                    <td class="numeric-val highlight-row">0.0124</td>
                    <td class="numeric-val highlight-row">0.0366</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="results-interpretation">
        <strong>Interprétation :</strong> L\'estimateur appris améliore considérablement la précision du suivi, réduisant la RMSE moyenne de <strong>plus de 41%</strong> par rapport au modèle de référence de prédiction cinématique.
    </p>',
    'results.phd_runtime_title' => 'Performances en Temps Réel sous Attaques Capteurs',
    'results.phd_fig12_alt' => 'Courbe de validation comparant l\'EKF de référence et Robust KalmaNet',
    'results.phd_fig12_caption' => 'L\'estimateur robuste suit l\'EKF de référence sain tandis que l\'EKF ordinaire montre des pics plus importants lors des intervalles d\'attaque.',
    'results.phd_fig13_alt' => 'Comportement du masque de confiance appris et du gain lors des intervalles d\'attaque capteurs',
    'results.phd_fig13_caption' => 'Comportement du gain et du masque de mesure : Le masque appris et le gain effectif diminuent pendant les intervalles de saut GPS et de biais de roue, réduisant la dépendance aux mesures corrompues.',

    'results.section_viet' => 'Stage M2 : Supervision Web sous ROS2 (Xuan Viet Cong)',
    
    'results.viet_intro_1' => 'Ce stage avait pour objectif de rapprocher des théories d\'observation d\'état (comme les observateurs grand gain - HGO et les observateurs LPV rapides - FLPV) d\'un environnement expérimental exploitable. Le projet a évolué d\'une simulation sous CARLA vers le simulateur Quanser QLabs et le véhicule physique QCar2.',
    
    'results.viet_intro_2' => 'Les contributions majeures incluent : le développement d\'un environnement ROS2 conteneurisé sous Docker, l\'intégration de nœuds de contrôle autonomes (localisation par EKF, suivi de trajectoire Stanley, évitement d\'obstacles par grille d\'occupation LiDAR) et la conception d\'une application web de supervision. Développée avec Express.js et rosbridge, cette interface permet de surveiller les connexions des nœuds ROS2, de s\'abonner aux topics capteurs et d\'ajuster les paramètres en temps réel.',
    
    'results.viet_image_caption' => 'Architecture logicielle connectant Quanser QLabs / QCar2 à ROS2 et à l\'interface web de supervision.',
    
    'results.viet_downloads_title' => 'Livrables du Stage',
    
    'results.viet_downloads_html' => '
    <div class="download-container">
        <a href="assets/img/work/intership/Rapport_de_Stage_CRAN_Viet/resume_rapport.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📄</span> Télécharger le Résumé du Rapport (PDF)
        </a>
        <a href="assets/img/work/intership/Rapport_de_Stage_CRAN_Viet/main.pdf" class="download-btn secondary-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📘</span> Télécharger le Rapport Complet (PDF)
        </a>
    </div>',

    'results.section_melissa' => 'Stage M2 : Réseaux Récurrents Informés par la Physique (Melissa Benabdelaziz)',
    
    'results.melissa_intro_1' => 'Ce travail portait sur la modélisation des dynamiques latérales et longitudinales du véhicule autonome miniature QCar à l\'aide de réseaux de neurones récurrents (GRU). Afin de garantir que les mouvements prédits respectent la cohérence physique, une structure d\'apprentissage hybride informée par la physique a été développée.',
    
    'results.melissa_intro_2' => 'Le modèle récurrent prend en entrée les commandes d\'accélération et de direction pour prédire les vitesses et accélérations. Grâce à l\'intégration d\'un terme de perte informée par la physique représentant les lois de Newton et les contraintes de glissement, le modèle réduit fortement les violations physiques (résidu physique) lors de la validation.',
    
    'results.melissa_image_caption' => 'Structure du réseau de neurones utilisant des cellules GRU pour apprendre les dépendances temporelles de l\'état du véhicule.',
    
    'results.melissa_results_title' => 'Performances de la Modélisation Informée par la Physique',
    
    'results.melissa_table_html' => '
    <div class="table-container">
        <table class="results-table">
            <thead>
                <tr>
                    <th>Métrique</th>
                    <th>GRU Standard (Sans contraintes)</th>
                    <th>GRU Informé (Avec contraintes)</th>
                    <th>Amélioration / Impact</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Erreur Quadratique Moyenne (MSE)</strong></td>
                    <td class="numeric-val">0.0023</td>
                    <td class="numeric-val">0.0026</td>
                    <td>Léger compromis statistique (+13%)</td>
                </tr>
                <tr>
                    <td><strong>Erreur Absolue Moyenne (MAE)</strong></td>
                    <td class="numeric-val">0.0380</td>
                    <td class="numeric-val">0.0410</td>
                    <td>Augmentation d\'erreur minimale</td>
                </tr>
                <tr>
                    <td><strong>Coefficient de Détermination ($R^2$)</strong></td>
                    <td class="numeric-val">0.989</td>
                    <td class="numeric-val">0.987</td>
                    <td>Reste très précis (>98%)</td>
                </tr>
                <tr class="highlight-row">
                    <td><strong>Résidu Mécanique</strong></td>
                    <td class="numeric-val highlight-row">1.000</td>
                    <td class="numeric-val highlight-row">0.420</td>
                    <td class="highlight-row"><strong>Réduit de 58%</strong> (Plus grande plausibilité mécanique)</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="results-interpretation">
        <strong>Interprétation :</strong> La contrainte physique réduit l\'incohérence mécanique des prédictions de 58%, tout en maintenant une excellente précision statistique ($R^2 > 98\%$). Cela rend le modèle hautement crédible pour une intégration future dans des lois de commande en boucle fermée.
    </p>',
    
    'results.melissa_downloads_title' => 'Livrables du Stage',
    
    'results.melissa_downloads_html' => '
    <div class="download-container">
        <a href="assets/img/work/intership/rapport_de_stage_melissa/resume_report.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📄</span> Télécharger le Résumé du Rapport (PDF)
        </a>
    </div>',

    // Siyu Results
    'results.siyu_summary' => 'Plateforme de simulation pour régulateur de vitesse adaptatif coopératif (CACC) et suivi virtuel (ELC). Intégration de la communication V2V avec Quanser QLabs, Docker et Python.',
    'results.section_siyu' => 'Stage de Master : Communication V2V et Contrôle Coopératif (Siyu)',
    'results.siyu_intro_1' => 'Ce stage, réalisé dans le cadre du projet VEHALSECU en collaboration avec SEGULA Technologies et le CRAN, porte sur la simulation, la communication inter-véhicules et le contrôle coopératif de pelotons de véhicules autonomes connectés. L\'objectif était de construire un environnement de simulation QLabs et QCar2 reproductible sous Python pour valider des lois de contrôle coopératif en conditions réalistes.',
    'results.siyu_intro_2' => 'Les développements majeurs comprennent : le déploiement d\'un conteneur de développement standardisé Ubuntu/Docker pour l\'environnement virtuel Quanser, le développement d\'un module de communication inter-véhicules (V2V) robuste en UDP avec acquittements (ACK) et heartbeats, et l\'intégration de boucles de contrôle longitudinal coopératif (CACC) et latéral (ELC) par point de poursuite virtuel pour limiter les coupures de virage.',
    'results.siyu_img_scenario' => 'Scénario QLabs : Deux véhicules QCar2 virtuels (leader et follower) circulant sur une piste fermée avec signalisation et passage piéton.',
    'results.siyu_img_env' => 'Environnement virtuel : Connexion logicielle entre le conteneur Quanser, QLabs et le conteneur de développement pour piloter le QCar2.',
    'results.siyu_img_fusion' => 'Fusion caméra-LiDAR : Réseau de perception multimodal estimant la distance relative et la différence de vitesse entre véhicules.',
    'results.siyu_img_elc' => 'Contrôle latéral ELC : Algorithme utilisant un point de poursuite virtuel pour limiter le phénomène de corner-cutting en virage.',
    'results.siyu_results_title' => 'Livrables et Modules Techniques',
    'results.siyu_table_html' => '
    <div class="table-container">
        <table class="results-table">
            <thead>
                <tr>
                    <th>Bloc / Module</th>
                    <th>Résultat / Contribution</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Simulation</strong></td>
                    <td>Environnement QLabs/QCar2 configuré dans un conteneur Docker unifié</td>
                </tr>
                <tr>
                    <td><strong>Portage</strong></td>
                    <td>Réimplémentation des lois de contrôle MATLAB en Python modulaire</td>
                </tr>
                <tr>
                    <td><strong>Communication V2V</strong></td>
                    <td>Module UDP robuste avec accusés de réception (ACK), heartbeats et synchronisation GPS</td>
                </tr>
                <tr>
                    <td><strong>Contrôle Longitudinal</strong></td>
                    <td>Régulateur de vitesse adaptatif coopératif (CACC) pour réguler la distance et la vitesse</td>
                </tr>
                <tr>
                    <td><strong>Contrôle Latéral</strong></td>
                    <td>Algorithme ELC de suivi de trajectoire évitant les coupures de virage</td>
                </tr>
                <tr>
                    <td><strong>Perception</strong></td>
                    <td>Fusion caméra-LiDAR pour estimer la distance ($d$) et l\'écart de vitesse ($\Delta v$)</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="results-interpretation">
        <strong>Mesures Capteurs Disponibles :</strong> La simulation du véhicule donne accès à de nombreuses mesures utiles au contrôle : 
        <em>GPS virtuel</em> (coordonnées, temps, trajectoire), 
        <em>IMU</em> (accélérations longitudinale/latérale et vitesse de lacet), 
        <em>Codeurs</em> (vitesse des roues et angle de braquage), 
        <em>LiDAR/Caméra</em> (perception des obstacles et nuages de points), et 
        <em>Télémétrie V2V</em> (états des voisins et qualité de la communication).
    </p>',
    'results.siyu_downloads_title' => 'Livrables du Stage',
    'results.siyu_downloads_html' => '
    <div class="download-container">
        <a href="assets/img/work/intership/Siyu/resume_report_siyu.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📄</span> Télécharger le Rapport Synthétique (PDF)
        </a>
    </div>',

    // Tanush Results
    'results.tanush_summary' => 'Conception d\'une carte PCB 4 couches sous KiCad pour l\'estimation d\'état des véhicules autonomes. Architecture double MCU STM32 avec Wi-Fi 6, GNSS et stockage SD local.',
    'results.section_tanush' => 'Stage de Master : Conception de Carte Électronique Embarquée pour la Détection de Cyberattaques (Tanush)',
    'results.tanush_intro_1' => 'Ce stage, réalisé au CRAN / IUT de Longwy, s\'inscrit dans le cadre d\'une thèse CIFRE sur la sécurité et la résilience des véhicules autonomes et connectés. L\'objectif principal était de concevoir une carte électronique embarquée capable d\'acquérir en temps réel les données dynamiques et environnementales du véhicule pour alimenter des algorithmes avancés d\'estimation d\'état et de diagnostic de cyberattaques.',
    'results.tanush_intro_2' => 'Le travail a couvert l\'analyse des besoins, le choix de l\'architecture matérielle, la saisie de schémas et le routage sous KiCad, la préparation de la fabrication d\'un PCB 4 couches avec Eurocircuits, et le développement de la structure de base du firmware STM32 sous RTOS.',
    'results.tanush_img_qcar' => 'Plateforme Quanser QCar : Véhicule miniature à l\'échelle 1/10 utilisé comme contexte expérimental pour les futurs tests de validation.',
    'results.tanush_img_arch' => 'Architecture de la carte : Schéma bloc montrant les capteurs, l\'alimentation, la carte SD, le Wi-Fi, le MCU de navigation et le MCU de communication.',
    'results.tanush_img_kicad' => 'Routage KiCad : Vue détaillée du PCB à 4 couches montrant le placement des composants, les plans de masse et les contraintes RF.',
    'results.tanush_img_3d' => 'Modèle 3D du PCB : Rendu tridimensionnel de la carte assemblée avec ses ports USB-C, modules et connecteurs principaux.',
    'results.tanush_results_title' => 'Spécifications Matérielles et Livraison',
    'results.tanush_table_html' => '
    <div class="table-container">
        <table class="results-table">
            <thead>
                <tr>
                    <th>Composant Matériel</th>
                    <th>Spécification / Choix technique</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Architecture</strong></td>
                    <td>Conception bi-MCU (MCU de navigation principal et MCU de communication secondaire)</td>
                </tr>
                <tr>
                    <td><strong>Capteurs</strong></td>
                    <td>IMU embarquée, récepteur GNSS et magnétomètre numérique</td>
                </tr>
                <tr>
                    <td><strong>Connectivité</strong></td>
                    <td>Wi-Fi 6, interface USB-C et bus de communication SPI/I2C/UART</td>
                </tr>
                <tr>
                    <td><strong>Stockage local</strong></td>
                    <td>Lecteur de carte MicroSD (jusqu\'à 64 Go), EEPROM et mémoire Flash</td>
                </tr>
                <tr>
                    <td><strong>Fabricant du PCB</strong></td>
                    <td>Eurocircuits (routage et fabrication de circuits imprimés multicouches)</td>
                </tr>
                <tr>
                    <td><strong>Coût de fabrication</strong></td>
                    <td>Coût total de la commande de fabrication : 2 010,14 €</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="table-container" style="margin-top: 20px;">
        <table class="results-table">
            <thead>
                <tr>
                    <th>Domaine de Validation</th>
                    <th>Statut / Calendrier</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Alimentation électrique</strong></td>
                    <td>Protocole de test défini et prêt pour exécution</td>
                </tr>
                <tr>
                    <td><strong>Protocoles de communication (UART/SPI/I2C)</strong></td>
                    <td>Scénarios de test écrits et intégrés dans l\'IDE de débogage</td>
                </tr>
                <tr>
                    <td><strong>Liaisons RF (GNSS/Wi-Fi)</strong></td>
                    <td>Routage d\'antenne validé ; protocole de test défini</td>
                </tr>
                <tr>
                    <td><strong>Firmware STM32</strong></td>
                    <td>Structure de base initialisée sous RTOS avec couches d\'abstraction matérielle</td>
                </tr>
                <tr>
                    <td><strong>Date de livraison du PCB</strong></td>
                    <td>Livré le 19 août 2025</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="results-interpretation">
        <strong>Interprétation :</strong> La contribution centrale réside dans la création d\'un socle matériel complet et industrialisable. Bien que les délais de fabrication aient déplacé les tests en boucle fermée au-delà du stage, les schémas détaillés, les bases du firmware et les plans de tests posent les jalons indispensables pour détecter les cyberattaques en temps réel.
    </p>',
    'results.tanush_downloads_title' => 'Livrables du Stage',
    'results.tanush_downloads_html' => '
    <div class="download-container">
        <a href="assets/img/work/intership/Tanush/resume_report_tanush.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📄</span> Télécharger le Rapport Synthétique (PDF)
        </a>
    </div>',

    // Hichem Results
    'results.hichem_summary' => 'Modèles d\'observateurs grand gain (HGO) multi-sorties et cadres de fusion de capteurs pour la localisation de véhicules. Validés expérimentalement et en simulations CARLA haute fidélité.',
    'results.section_hichem' => 'Recherche Doctorale : Observateurs Grand Gain Multi-Sorties et Fusion Sensorielle (Dr. Hichem Bessafa)',
    'results.hichem_intro_1' => 'Ces travaux de recherche présentent une nouvelle conception d\'observateur grand gain (HGO) multi-sorties généralisé pour l\'estimation d\'état robuste de systèmes non linéaires. Les observateurs grand gain traditionnels souffrent d\'une forte sensibilité au bruit de mesure. Pour surmonter cette limitation, la méthode proposée exploite plusieurs mesures indépendantes pour optimiser les gains de l\'observateur. Le choix des gains est formulé via des inégalités matricielles linéaires (LMI), garantissant mathématiquement une dynamique d\'erreur stable et offrant un compromis rigoureux entre la vitesse de convergence et la sensibilité au bruit.',
    'results.hichem_intro_2' => 'Le cadre d\'estimation est appliqué et validé dans deux domaines majeurs : <br>1. **Validation expérimentale sur Quanser QCar** : Estimation de la position, des vitesses et de l\'orientation (lacet) du véhicule en fusionnant les mesures de l\'IMU et de l\'angle de braquage sur des trajectoires rectilignes et en virage à gauche, démontrant une convergence rapide et une résilience face à des pertes de données GPS simulées.<br>2. **Fusion de données d\'odométrie visuelle et HGO** : Intégration de l\'odométrie visuelle (VO) monoculaire avec un EKF et l\'HGO, fusionnant les données inertielles, satellites et visuelles pour une localisation continue du véhicule sous perte totale du signal satellite dans des simulations de rond-point CARLA.',
    'results.hichem_img_traj' => 'Performances de suivi de trajectoire : Comparaison de la trajectoire réelle et estimée sous l\'HGO multi-sorties démontrant une haute précision et une convergence rapide.',
    'results.hichem_img_carla' => 'Odométrie visuelle & fusion de capteurs : Aperçu fonctionnel de l\'architecture de fusion proposée combinant l\'odométrie visuelle (VO), l\'HGO et un filtre de Kalman étendu (EKF).',
    'results.hichem_img_results' => 'Performances sous simulation CARLA : Comparaison de la trajectoire réelle et de l\'estimation sous perte totale du signal satellite (RTK-GNSS) dans un scénario de rond-point.',
    'results.hichem_img_error' => 'Performances d\'erreur d\'estimation : Courbes d\'erreur pour la position, la vitesse et l\'orientation sous anomalies sensorielles dans la simulation de rond-point CARLA.',
    'results.hichem_video_caption' => 'Vidéo de validation expérimentale : Démonstration en temps réel du bouclage de l\'odométrie visuelle et du suivi de localisation.',
    'results.hichem_downloads_title' => 'Articles de Recherche & Profils',
    'results.hichem_downloads_html' => '
    <div class="download-container">
        <a href="assets/img/work/doctorant/Hichem/Automatica_Bessafa_Paper-3.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📄</span> Télécharger l\'article Automatica (PDF)
        </a>
        <a href="assets/img/work/doctorant/Hichem/Sensor_Fusion_of_Visual_Odometry_and_High_Gain_Observer_Paper-10.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
            <span class="btn-icon">📄</span> Télécharger l\'article Sensor Fusion (PDF)
        </a>
        <a href="https://github.com/hichem-bessa/" class="download-btn secondary-btn" target="_blank" rel="noopener noreferrer" style="background-color: #24292e; color: #fff; border-color: #24292e;">
            <span class="btn-icon">💻</span> Profil GitHub
        </a>
        <a href="https://scholar.google.com/citations?view_op=list_works&hl=en&user=2XIpzbcAAAAJ&sortby=pubdate" class="download-btn secondary-btn" target="_blank" rel="noopener noreferrer" style="background-color: #4285f4; color: #fff; border-color: #4285f4;">
            <span class="btn-icon">🎓</span> Google Scholar
        </a>
    </div>',
];
