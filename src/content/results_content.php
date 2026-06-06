<?php

return [
    [
        'id' => 'phd-research',
        'category_key' => 'results.cat_phd',
        'date' => [
            'en' => 'May 2025',
            'fr' => 'Mai 2025',
        ],
        'summary_key' => 'results.phd_summary',
        'preview_image' => 'assets/img/work/Apdapt_obs_shema_2_uio.png',
        'title_key' => 'results.section_phd',
        'blocks' => [
            [
                'type' => 'paragraph',
                'text_key' => 'results.phd_intro_1',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'results.phd_intro_2',
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/Apdapt_obs_shema_2_uio.png',
                'alt' => [
                    'en' => 'Robust KalmaNet block diagram with kinematic prediction and neural trust update',
                    'fr' => 'Schéma bloc Robust KalmaNet avec prédiction cinématique et mise à jour de confiance neuronale',
                ],
                'caption' => [
                    'en' => 'Robust KalmaNet architecture: concentrates neural learning on estimating measurement trust (gain K and mask m) while keeping physics-based prediction.',
                    'fr' => 'Architecture Robust KalmaNet : concentre l\'apprentissage neuronal sur l\'estimation de la confiance de mesure (gain K et masque m) tout en conservant la prédiction physique.',
                ],
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.phd_val_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.phd_val_table_html',
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.phd_runtime_title',
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/doctorant/Huy/robust_kalma/report_figures/kalmarobust_result-12.png',
                'alt' => [
                    'en' => 'Validation result comparing EKF, ordinary EKF under attacks, and robust KalmaNet',
                    'fr' => 'Résultat de validation comparant l\'EKF, l\'EKF ordinaire sous attaques et Robust KalmaNet',
                ],
                'caption' => [
                    'en' => 'The robust estimator follows the clean-reference EKF while the ordinary EKF shows larger spikes during attack intervals.',
                    'fr' => 'L\'estimateur robuste suit l\'EKF de référence sain tandis que l\'EKF ordinaire montre des pics plus importants lors des intervalles d\'attaque.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/doctorant/Huy/robust_kalma/report_figures/kalmarobust_result-13.png',
                'alt' => [
                    'en' => 'Learned trust mask and gain behavior under sensor attack intervals',
                    'fr' => 'Comportement du masque de confiance appris et du gain lors des intervalles d\'attaque capteurs',
                ],
                'caption' => [
                    'en' => 'Gain and measurement-mask behavior: The learned mask and effective gain decrease during GPS jump and wheel-bias intervals, reducing dependence on corrupted measurements.',
                    'fr' => 'Comportement du gain et du masque de mesure : Le masque appris et le gain effectif diminuent pendant les intervalles de saut GPS et de biais de roue, réduisant la dépendance aux mesures corrompues.',
                ],
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.phd_downloads_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.phd_downloads_html',
            ],
        ],
    ],
    [
        'id' => 'internship-ros2',
        'category_key' => 'results.cat_internship',
        'date' => [
            'en' => 'June 2025',
            'fr' => 'Juin 2025',
        ],
        'summary_key' => 'results.viet_summary',
        'preview_image' => 'assets/img/work/intership/Rapport_de_Stage_CRAN_Viet/resume_rapport_preview.png',
        'title_key' => 'results.section_viet',
        'blocks' => [
            [
                'type' => 'paragraph',
                'text_key' => 'results.viet_intro_1',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'results.viet_intro_2',
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Rapport_de_Stage_CRAN_Viet/resume_rapport_preview.png',
                'alt' => [
                    'en' => 'Overview of the web supervision interface dashboard and control nodes',
                    'fr' => 'Aperçu du tableau de bord de l\'interface web de supervision et des nœuds de contrôle',
                ],
                'caption' => [
                    'en' => 'Xuan Viet Cong\'s project structure: Web supervision UI connected via rosbridge to ROS2 nodes running in Docker control loops for QCar2.',
                    'fr' => 'Structure du projet de Xuan Viet Cong : Interface web de supervision connectée via rosbridge aux nœuds ROS2 s\'exécutant sous Docker pour le QCar2.',
                ],
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.viet_downloads_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.viet_downloads_html',
            ],
        ],
    ],
    [
        'id' => 'internship-pinns',
        'category_key' => 'results.cat_internship',
        'date' => [
            'en' => 'July 2025',
            'fr' => 'Juillet 2025',
        ],
        'summary_key' => 'results.melissa_summary',
        'preview_image' => 'assets/img/work/intership/rapport_de_stage_melissa/resume_preview-1.png',
        'title_key' => 'results.section_melissa',
        'blocks' => [
            [
                'type' => 'paragraph',
                'text_key' => 'results.melissa_intro_1',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'results.melissa_intro_2',
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/rapport_de_stage_melissa/resume_preview-1.png',
                'alt' => [
                    'en' => 'Physics-Informed GRU block diagram predicting vehicle states',
                    'fr' => 'Schéma bloc du GRU informé par la physique prédisant les états du véhicule',
                ],
                'caption' => [
                    'en' => 'Melissa Benabdelaziz\'s project: Recurrent Neural Network (GRU) modeling vehicle dynamics with physical residual constraint.',
                    'fr' => 'Projet de Melissa Benabdelaziz : Réseau de neurones récurrent (GRU) modélisant la dynamique du véhicule avec contrainte de résidu physique.',
                ],
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.melissa_results_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.melissa_table_html',
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.melissa_downloads_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.melissa_downloads_html',
            ],
        ],
    ],
    [
        'id' => 'internship-siyu',
        'category_key' => 'results.cat_internship',
        'date' => [
            'en' => 'September 2025',
            'fr' => 'Septembre 2025',
        ],
        'summary_key' => 'results.siyu_summary',
        'preview_image' => 'assets/img/work/intership/Siyu/figures/siyu_fig-067.png',
        'title_key' => 'results.section_siyu',
        'blocks' => [
            [
                'type' => 'paragraph',
                'text_key' => 'results.siyu_intro_1',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'results.siyu_intro_2',
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Siyu/figures/siyu_fig-067.png',
                'alt' => [
                    'en' => 'Two virtual cars in QLabs scenario.',
                    'fr' => 'Deux véhicules virtuels dans le scénario QLabs.',
                ],
                'caption' => [
                    'en' => 'Siyu\'s project QLabs Scenario: Two virtual QCars (leader and follower) on a closed-loop track.',
                    'fr' => 'Scénario QLabs de Siyu : Deux véhicules QCar2 virtuels (leader et follower) sur une piste fermée.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Siyu/figures/siyu_fig-060.png',
                'alt' => [
                    'en' => 'Docker-based Quanser simulation workflow.',
                    'fr' => 'Flux de travail de simulation Quanser sous Docker.',
                ],
                'caption' => [
                    'en' => 'Virtual Environment: Connection schematic between the Quanser container, QLabs, and developer container.',
                    'fr' => 'Environnement virtuel : Schéma de connexion entre le conteneur Quanser, QLabs et le conteneur développeur.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Siyu/figures/siyu_fig-073.png',
                'alt' => [
                    'en' => 'LiDAR-Camera fusion sensor readings.',
                    'fr' => 'Lectures de capteurs par fusion LiDAR-caméra.',
                ],
                'caption' => [
                    'en' => 'Perception: Vehicle detection and relative distance tracking using camera-LiDAR fusion.',
                    'fr' => 'Perception : Détection du véhicule et suivi de distance par fusion caméra-LiDAR.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Siyu/figures/siyu_fig-079.png',
                'alt' => [
                    'en' => 'Lateral ELC look-ahead point.',
                    'fr' => 'Point d\'anticipation de contrôle latéral ELC.',
                ],
                'caption' => [
                    'en' => 'ELC Lateral Control: Visual tracking point layout used to minimize corner-cutting in curves.',
                    'fr' => 'Contrôle latéral ELC : Tracé du point virtuel utilisé pour limiter les coupures de virage.',
                ],
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.siyu_results_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.siyu_table_html',
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.siyu_downloads_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.siyu_downloads_html',
            ],
        ],
    ],
    [
        'id' => 'internship-tanush',
        'category_key' => 'results.cat_internship',
        'date' => [
            'en' => 'August 2025',
            'fr' => 'Août 2025',
        ],
        'summary_key' => 'results.tanush_summary',
        'preview_image' => 'assets/img/work/intership/Tanush/figures/tanush_fig-034.png',
        'title_key' => 'results.section_tanush',
        'blocks' => [
            [
                'type' => 'paragraph',
                'text_key' => 'results.tanush_intro_1',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'results.tanush_intro_2',
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Tanush/figures/tanush_fig-018.png',
                'alt' => [
                    'en' => 'Quanser QCar autonomous vehicle model.',
                    'fr' => 'Modèle de véhicule autonome Quanser QCar.',
                ],
                'caption' => [
                    'en' => 'Experimental Context: The 1/10-scale physical QCar vehicle.',
                    'fr' => 'Contexte expérimental : Véhicule physique QCar à l\'échelle 1/10.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Tanush/figures/tanush_fig-024.png',
                'alt' => [
                    'en' => 'Hardware layout of the board.',
                    'fr' => 'Schéma bloc matériel de la carte.',
                ],
                'caption' => [
                    'en' => 'Hardware Architecture: Connection blocks for dual MCU (navigation and communication), sensors, storage, and Wi-Fi.',
                    'fr' => 'Architecture matérielle : Blocs d\'interconnexion du double MCU, des capteurs, du stockage et du Wi-Fi.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Tanush/figures/tanush_fig-032.png',
                'alt' => [
                    'en' => 'KiCad dense routing tracks.',
                    'fr' => 'Pistes de routage denses sous KiCad.',
                ],
                'caption' => [
                    'en' => 'Conception PCB: Dense multi-layer board routing and power constraints layout in KiCad.',
                    'fr' => 'Conception PCB : Routage multicouche dense et contraintes d\'alimentation sous KiCad.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/intership/Tanush/figures/tanush_fig-034.png',
                'alt' => [
                    'en' => '3D model of the electronic card.',
                    'fr' => 'Modèle 3D de la carte électronique.',
                ],
                'caption' => [
                    'en' => '3D PCB model: Assembled board representation with connectors, modules, and USB ports.',
                    'fr' => 'Modèle 3D du PCB : Représentation de la carte assemblée avec connecteurs, modules et ports USB.',
                ],
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.tanush_results_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.tanush_table_html',
            ],
            [
                'type' => 'heading',
                'text_key' => 'results.tanush_downloads_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.tanush_downloads_html',
            ],
        ],
    ],
    [
        'id' => 'vehicle-modeling',
        'category_key' => 'results.cat_milestone',
        'date' => [
            'en' => 'May 2025',
            'fr' => 'Mai 2025',
        ],
        'summary' => [
            'en' => 'Research on vehicle physical models, kinematic models, parameter estimation, and multi-sensor fusion algorithms.',
            'fr' => 'Recherche sur les modèles physiques de véhicules, les modèles cinématiques, l\'estimation des paramètres et les algorithmes de fusion multi-capteurs.',
        ],
        'preview_image' => 'assets/img/neuro_obs_v2.png',
        'title' => [
            'en' => 'Vehicle Modeling & Perception',
            'fr' => 'Modélisation dynamique du véhicule et perception',
        ],
        'blocks' => [
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'This milestone focuses on modeling vehicle lateral and longitudinal dynamics and designing robust perception systems to support intelligent state estimation and control for autonomous cars.',
                    'fr' => 'Ce jalon se concentre sur la modélisation de la dynamique latérale et longitudinale des véhicules et sur la conception de systèmes de perception robustes pour soutenir l\'estimation intelligente de l\'état et la commande des voitures autonomes.',
                ],
            ]
        ],
    ],
    [
        'id' => 'estimation-algorithms',
        'category_key' => 'results.cat_phd',
        'date' => [
            'en' => 'October 2025',
            'fr' => 'Octobre 2025',
        ],
        'summary' => [
            'en' => 'Designing trust-aware distributed observers for connected vehicle platoons under sensor and communication anomalies.',
            'fr' => 'Conception d\'observateurs distribués sensibles à la confiance pour les pelotons de véhicules connectés soumis à des anomalies de capteurs et de communication.',
        ],
        'preview_image' => 'assets/img/work/doctorant/Huy/global_system_scheme_ieee_simple.png',
        'title' => [
            'en' => 'Resilient Trust-Aware Distributed Observer Design for Connected Vehicle Platoons',
            'fr' => 'Conception d\'observateurs distribués résilients et sensibles à la confiance pour les pelotons de véhicules connectés',
        ],
        'blocks' => [
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'We design trust-aware distributed observers for resilient state estimation in vehicle platoons under cyberattacks. A behavioral divergence metric scores shared data and builds a dynamic trusted-neighbor set for online weight adaptation. Sufficient Input-to-State Stability (ISS) conditions are provided. The observers allow each vehicle to estimate the states of the entire platoon using local measurements and V2V communication, detecting and isolating malicious data, sensor faults, or communication anomalies (such as bogus data, replay, and DoS attacks).',
                    'fr' => 'Nous concevons des observateurs distribués sensibles à la confiance pour l\'estimation d\'état résiliente dans les pelotons de véhicules connectés face aux cyberattaques. Une métrique de divergence comportementale évalue les données partagées et construit un ensemble dynamique de voisins de confiance pour l\'adaptation en ligne des poids. Des conditions suffisantes de stabilité ISS (Input-to-State Stability) sont formulées. Les observateurs permettent à chaque véhicule d\'estimer les états de l\'ensemble du peloton en utilisant des mesures locales et des communications V2V, tout en détectant et isolant les données corrompues, les pannes de capteurs ou les anomalies de communication (telles que les attaques de données fallacieuses, de rejeu et de déni de service DoS).',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/work/doctorant/Huy/global_system_scheme_ieee_simple.png',
                'alt' => [
                    'en' => 'Trust-aware resilient distributed observer framework for connected vehicle platoons',
                    'fr' => 'Cadre d\'observateur distribué résilient et sensible à la confiance pour les pelotons de véhicules connectés',
                ],
                'caption' => [
                    'en' => 'Trust-based estimation framework: compares reported data with physics-based predictions to adapt consensus weights and isolate compromised vehicles.',
                    'fr' => 'Cadre d\'estimation basé sur la confiance : compare les données reçues avec les prédictions physiques pour adapter les poids de consensus et isoler les véhicules compromis.',
                ],
            ],
            [
                'type' => 'youtube',
                'url' => 'https://youtu.be/t6-soznp6ks',
                'title' => [
                    'en' => 'Trust-Aware Resilient Distributed Observer Design',
                    'fr' => 'Conception d\'observateurs distribués résilients et sensibles à la confiance',
                ],
                'caption' => [
                    'en' => 'Demo video of the trust-aware resilient distributed observer design for connected vehicle platoons.',
                    'fr' => 'Vidéo de démonstration de la conception de l\'observateur distribué résilient et sensible à la confiance pour les pelotons de véhicules.',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Publications & Reports',
                    'fr' => 'Publications & Rapports',
                ],
            ],
            [
                'type' => 'html',
                'text' => [
                    'en' => '
                    <div class="download-container">
                        <a href="assets/img/work/doctorant/Huy/trust_based/ifac/Trust_ifac.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
                            <span class="btn-icon">📄</span> Download IFAC Paper (PDF)
                        </a>
                    </div>',
                    'fr' => '
                    <div class="download-container">
                        <a href="assets/img/work/doctorant/Huy/trust_based/ifac/Trust_ifac.pdf" class="download-btn" target="_blank" rel="noopener noreferrer">
                            <span class="btn-icon">📄</span> Télécharger l\'article IFAC (PDF)
                        </a>
                    </div>',
                ],
            ],
        ],
    ],
    [
        'id' => 'platoon-applications-platform-testing',
        'category_key' => 'results.cat_milestone',
        'date' => [
            'en' => 'November 2025',
            'fr' => 'Novembre 2025',
        ],
        'summary' => [
            'en' => 'Co-design framework for distributed observers and controllers, integrated vehicle platforms (LIMO ROS2 and QCar2), and web-based remote supervision for real-vehicle testing.',
            'fr' => 'Cadre de co-conception pour observateurs et contrôleurs distribués, plateformes de véhicules intégrées (LIMO ROS2 et QCar2), et supervision web à distance pour essais réels.',
        ],
        'preview_image' => 'assets/img/Milestones/vehicle_platform/platoon_limo_qcar.jpg',
        'title' => [
            'en' => 'Resilient Platoon Applications, Experimental Platform, and Real-Vehicle Testing & Evaluation',
            'fr' => 'Applications de peloton résilient, plateforme expérimentale et essais sur véhicule réel & évaluation',
        ],
        'blocks' => [
            // --- SECTION 1: RESILIENT PLATOON APPLICATIONS ---
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Resilient Platoon Applications & Control Co-Design',
                    'fr' => 'Applications de peloton résilient & Co-conception du contrôle',
                ],
            ],
            [
                'type' => 'html',
                'text' => [
                    'en' => '<p>This <a href="https://doi.org/10.1016/j.conengprac.2026.107008" target="_blank" rel="noopener noreferrer">work</a> presents a co-design framework for distributed observers and controllers that preserves the string stability of vehicle platoons under external disturbances.</p>',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'Instead of requiring each distributed controller to know the desired inter-vehicle spacing, each vehicle is equipped with a distributed observer that provides a broader perception of the platoon state. Using locally measurable outputs and inter-vehicle communication, the observers estimate the tracking errors of all vehicles relative to a global desired trajectory. These estimates are then used directly to generate the control signals.',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'The observer design also avoids requiring access to the private control inputs of all vehicles. Each vehicle estimates the inputs of the other vehicles from its own estimated states. To coordinate observer and controller performance, string stability and observer robustness are combined into a single weighted performance index, while the coupling terms are decoupled with Young’s inequality to enable simultaneous design.',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'The approach is validated in Quanser Interactive Labs (QLabs) using four 1/10-scale QCar2 vehicles. The validation scenarios include constant-speed cruising on smooth and wavy roads, as well as start-stop maneuvers. The results show that the platoon maintains string stability and avoids collisions despite uneven terrain and rapid velocity changes.',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Wave-road disturbance test',
                    'fr' => 'Test de perturbation sur route ondulée',
                ],
            ],
            [
                'type' => 'youtube',
                'url' => 'https://youtu.be/n3M1J4P6dlQ?si=q5tv1sALv1Eirxkx',
                'title' => [
                    'en' => 'QCar performance on a wavy road',
                    'fr' => 'Vidéo sur les applications robustes au pelotonnage',
                ],
                'caption' => [
                    'en' => 'QCar platoon response on a wavy road.',
                    'fr' => 'Démonstration des applications robustes au pelotonnage.',
                ],
            ],
            [
                'type' => 'html',
                'text' => [
                    'en' => '<p>The wave road introduces external disturbances that create visible fluctuations in the observer estimates. During the traversal, the position-related estimation error remains within &plusmn;0.1 m, the velocity error within &plusmn;0.05 m/s, and the acceleration error within &plusmn;0.05 m/s<sup>2</sup>. At the beginning and end of the wavy section, the estimates quickly converge back to the true values once the leader leaves the wave road, even while some followers are still on it. This is because the distributed observer also uses information from neighboring vehicles that are less affected by the disturbance, helping the platoon reach consensus faster.</p>',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'The true vehicle states show that the wave road inevitably induces oscillations in the vehicle dynamics. With the help of the distributed observers, the platoon rapidly restores equilibrium when entering and leaving the undulating section. The velocity and acceleration profiles also show that the oscillation amplitudes progressively attenuate from the leading vehicle to the trailing vehicle, confirming that string stability is preserved under road-induced disturbances.',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Start-stop maneuver test',
                    'fr' => 'Test de manœuvre de démarrage et d\'arrêt',
                ],
            ],
            [
                'type' => 'youtube',
                'url' => 'https://youtu.be/6kKLBh-5lrU',
                'title' => [
                    'en' => 'QCar performance under start-stop maneuvers',
                    'fr' => 'Démonstration supplémentaire des applications robustes au pelotonnage',
                ],
                'caption' => [
                    'en' => 'QCar platoon response under start-stop maneuvers.',
                    'fr' => 'Démonstration supplémentaire des applications robustes au pelotonnage.',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'During the start-stop phase, the distributed observer shows larger estimation errors because the design assumes zero leader acceleration. A larger leader acceleration leads to a larger mismatch. Even under this condition, the controller maintains weak string stability of the platoon: the acceleration oscillations decrease from the first follower to the last follower, which supports the effectiveness and robustness of the proposed method.',
                ],
            ],

            // --- SECTION 2: EXPERIMENTAL PLATFORM LAYOUT ---
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Experimental Platform Setup',
                    'fr' => 'Configuration de la plateforme expérimentale',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'This project is supported by an integrated experimental platform that combines two physical autonomous vehicle systems, LIMO ROS2 and QCar 2, with the Quanser Interactive Labs (QLabs) virtual environment. Together, these platforms provide a complete workflow for algorithm development, simulation-based verification, and real-world experimental validation in intelligent and connected vehicle research.',
                    'fr' => 'Ce projet s\'appuie sur une plateforme expérimentale intégrée qui combine deux systèmes physiques de véhicules autonomes, LIMO ROS2 et QCar 2, avec l\'environnement virtuel Quanser Interactive Labs (QLabs). Ensemble, ces plateformes fournissent un flux de travail complet pour le développement d\'algorithmes, la vérification par simulation et la validation expérimentale en conditions réelles.',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'LIMO ROS2',
                    'fr' => 'LIMO ROS2',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'A compact ROS2-enabled mobile robot platform equipped with onboard computing, LiDAR, and a depth camera, LIMO ROS2 is well suited for autonomous navigation, perception, mapping, localization, and motion-control studies. Its open development environment makes it a flexible testbed for rapid prototyping of vehicle intelligence algorithms.',
                    'fr' => 'Plateforme robotique mobile compacte compatible ROS2, équipée d\'un calculateur embarqué, d\'un LiDAR et d\'une caméra de profondeur, LIMO ROS2 est bien adaptée aux études de navigation autonome, perception, cartographie, localisation et commande du mouvement.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/Milestones/vehicle_platform/limo.png',
                'alt' => [
                    'en' => 'LIMO ROS2 platform',
                    'fr' => 'Plateforme LIMO ROS2',
                ],
                'caption' => [
                    'en' => 'LIMO ROS2 platform',
                    'fr' => 'Plateforme LIMO ROS2',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'QCar 2',
                    'fr' => 'QCar 2',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'QCar 2 is a sensor-rich, open-architecture 1/10-scale autonomous vehicle developed for self-driving research and education. As the feature vehicle of Quanser\'s Self-Driving Car Studio, it provides a realistic experimental platform for studying autonomous driving, estimation, control, and multi-sensor integration.',
                    'fr' => 'QCar 2 est un véhicule autonome à l\'échelle 1/10, riche en capteurs et d\'architecture ouverte, développé pour la recherche et l\'enseignement sur la conduite autonome. Il fournit une plateforme expérimentale réaliste pour étudier la conduite autonome, l\'estimation, la commande et l\'intégration multi-capteurs.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/Milestones/vehicle_platform/Phycial_Qcar.png',
                'alt' => [
                    'en' => 'QCar 2 platform',
                    'fr' => 'Plateforme QCar 2',
                ],
                'caption' => [
                    'en' => 'QCar 2 platform',
                    'fr' => 'Plateforme QCar 2',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'QLabs Virtual Environment',
                    'fr' => 'Environnement virtuel QLabs',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'QLabs is a virtual twin environment for Quanser hardware products, offering open worlds and dynamically accurate digital twins for simulation and testing. It enables safe, repeatable, and scalable experimentation, allowing algorithms to be validated in complex traffic scenarios before deployment on physical vehicles.',
                    'fr' => 'QLabs est un environnement de jumeau virtuel pour les produits matériels Quanser. Il offre des mondes ouverts et des jumeaux numériques dynamiquement cohérents pour la simulation et les essais, permettant de valider les algorithmes dans des scénarios de trafic complexes avant leur déploiement sur véhicules physiques.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/Milestones/vehicle_platform/Qcar4.png',
                'alt' => [
                    'en' => 'QLabs Virtual Environment',
                    'fr' => 'Environnement virtuel QLabs',
                ],
                'caption' => [
                    'en' => 'QLabs Virtual Environment',
                    'fr' => 'Environnement virtuel QLabs',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'This platform provides a complete framework for research on vehicle modeling, intelligent observation, sensor fusion, and autonomous driving validation. The combination of physical vehicles and virtual environments supports both simulation and real-world experiments. A platoon composed of two QCars and one LIMO further demonstrates the project\'s application to connected autonomous vehicles, including cooperative driving, distributed estimation, and multi-vehicle coordination.',
                    'fr' => 'Cette plateforme fournit un cadre complet pour la recherche sur la modélisation des véhicules, l\'observation intelligente, la fusion de capteurs et la validation de la conduite autonome. La combinaison de véhicules physiques et d\'environnements virtuels soutient à la fois la simulation et les expérimentations réelles.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/Milestones/vehicle_platform/platoon_limo_qcar.jpg',
                'alt' => [
                    'en' => 'Two QCars and one LIMO forming a connected autonomous vehicle platoon for intelligent transportation research.',
                    'fr' => 'Deux QCars et un LIMO formant un peloton de véhicules autonomes connectés pour la recherche en transport intelligent.',
                ],
                'caption' => [
                    'en' => 'Two QCars and one LIMO forming a connected autonomous vehicle platoon for intelligent transportation research.',
                    'fr' => 'Deux QCars et un LIMO formant un peloton de véhicules autonomes connectés pour la recherche en transport intelligent.',
                ],
            ],
            [
                'type' => 'youtube',
                'url' => 'https://youtu.be/amur0EEShJE',
                'title' => [
                    'en' => 'V2V Connected Vehicle Platoon Demo (LIMO + QCar)',
                    'fr' => 'Démo Peloton de Véhicules Connectés V2V (LIMO + QCar)',
                ],
                'caption' => [
                    'en' => 'Real-world V2V platoon validation using physical QCar and LIMO vehicles in the laboratory.',
                    'fr' => 'Validation réelle du peloton V2V à l\'aide de véhicules physiques QCar et LIMO dans le laboratoire.',
                ],
            ],

            // --- SECTION 3: REAL-VEHICLE TESTING & EVALUATION ---
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Real-Vehicle Testing & Remote Web Supervision',
                    'fr' => 'Essais sur véhicule réel et supervision web à distance',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'A web-based remote monitoring and control platform has been developed for real-vehicle experiments with QCar 2. It enables real-time observation of vehicle states and trajectories, as well as remote switching between control modes during physical testing.',
                    'fr' => 'Une plateforme web de supervision et de commande à distance a été développée pour les expérimentations sur véhicule réel avec QCar 2. Elle permet l\'observation en temps réel des états et trajectoires du véhicule, ainsi que le changement à distance des modes de commande pendant les essais physiques.',
                ],
            ],
            [
                'type' => 'youtube',
                'url' => 'https://youtube.com/shorts/asIicSg48Fg?feature=share',
                'title' => [
                    'en' => 'Web-based remote monitoring and control of physical QCar 2',
                    'fr' => 'Supervision et commande web à distance du QCar 2 physique',
                ],
                'caption' => [
                    'en' => 'Web-based remote monitoring and control of physical QCar 2.',
                    'fr' => 'Supervision et commande web à distance du QCar 2 physique.',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'Development for additional vehicles is currently ongoing, aiming to support broader real-world validation of connected and autonomous vehicle algorithms.',
                    'fr' => 'Le développement pour d\'autres véhicules est en cours afin de soutenir une validation expérimentale plus large des algorithmes pour véhicules connectés et autonomes.',
                ],
            ],
        ],
    ],
    [
        'id' => 'simulation-environment',
        'category_key' => 'results.cat_milestone',
        'date' => [
            'en' => 'December 2025',
            'fr' => 'Décembre 2025',
        ],
        'summary' => [
            'en' => 'A modular V2V autonomous-driving testbed that connects numerical simulation, Quanser QLabs, CARLA, Quanser QCar, and AgileX LIMO through a common experiment pipeline. The system supports testing cooperative perception, state estimation, control, and robustness under noisy or corrupted sensor measurements from simulation to real small-scale vehicles.',
            'fr' => 'Un banc d\'essai modulaire de conduite autonome V2V connectant la simulation numérique, Quanser QLabs, CARLA, Quanser QCar et AgileX LIMO via un pipeline expérimental commun. Le système permet de tester la perception coopérative, l\'estimation d\'état, le contrôle et la robustesse sous mesures capteurs bruitées ou corrompues.',
        ],
        'preview_image' => 'assets/img/Milestones/vehicle_platform/Cycle Development Test Deployment.png',
        'title' => [
            'en' => 'Multi-Platform V2V CAV Testbed for Robust Cooperative State Estimation and Control',
            'fr' => 'Banc d\'essai V2V CAV multi-plateforme pour l\'estimation d\'état coopérative et le contrôle robustes',
        ],
        'blocks' => [
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'A modular V2V autonomous-driving testbed that connects numerical simulation, Quanser QLabs, CARLA, Quanser QCar, and AgileX LIMO through a common experiment pipeline. The system supports testing cooperative perception, state estimation, control, and robustness under noisy or corrupted sensor measurements from simulation to real small-scale vehicles.',
                    'fr' => 'Un banc d\'essai modulaire de conduite autonome V2V connectant la simulation numérique, Quanser QLabs, CARLA, Quanser QCar et AgileX LIMO via un pipeline expérimental commun. Le système permet de tester la perception coopérative, l\'estimation d\'état, le contrôle et la robustesse sous mesures capteurs bruitées ou corrompues.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/Milestones/vehicle_platform/Cycle Development Test Deployment.png',
                'alt' => [
                    'en' => 'V2V CAV Testbed Development and Deployment Cycle',
                    'fr' => 'Cycle de développement et déploiement du banc d\'essai V2V CAV',
                ],
                'caption' => [
                    'en' => 'The development cycle connects numerical simulation, virtual twins in QLabs, high-fidelity CARLA simulator, physical miniature vehicles (QCar and LIMO) through a common experiment pipeline.',
                    'fr' => 'Le cycle connecte la simulation numérique, les jumeaux virtuels dans QLabs, le simulateur haute fidélité CARLA et les véhicules physiques miniatures (QCar et LIMO) via un pipeline expérimental commun.',
                ],
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/Milestones/vehicle_platform/Carla.jpg',
                'alt' => [
                    'en' => 'CARLA multi-vehicle V2V simulation environment',
                    'fr' => 'Environnement de simulation multi-véhicules V2V CARLA',
                ],
                'caption' => [
                    'en' => 'High-fidelity multi-vehicle simulation in CARLA showing autonomous cars running cooperative estimation and control.',
                    'fr' => 'Simulation multi-véhicules haute fidélité sous CARLA montrant des voitures autonomes exécutant l\'estimation et le contrôle coopératifs.',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Key Contributions',
                    'fr' => 'Contributions Clés',
                ],
            ],
            [
                'type' => 'html',
                'text' => [
                    'en' => '
                    <ul class="contributions-list">
                        <li><strong>Built a V2V autonomous-driving stack</strong> across numerical simulation, QLabs, CARLA, QCar, and LIMO.</li>
                        <li><strong>Created a common experiment pipeline</strong> for simulation-to-real validation.</li>
                        <li><strong>Integrated multi-vehicle state estimation</strong>, control, and V2V communication.</li>
                        <li><strong>Developed robust observer modules</strong>, including EKF, trust-based estimation, and RKNet, for noisy or attacked GPS and velocity signals.</li>
                        <li><strong>Enabled repeatable comparison</strong> across virtual and physical platforms using shared scenarios, logs, and metrics.</li>
                    </ul>',
                    'fr' => '
                    <ul class="contributions-list">
                        <li><strong>Développement d\'une pile de conduite autonome V2V</strong> sur simulation numérique, QLabs, CARLA, QCar et LIMO.</li>
                        <li><strong>Création d\'un pipeline expérimental commun</strong> pour la validation de la simulation au réel (sim-to-real).</li>
                        <li><strong>Intégration de l\'estimation d\'état multi-véhicules</strong>, du contrôle et de la communication V2V.</li>
                        <li><strong>Développement de modules d\'observation robustes</strong>, incluant EKF, estimation basée sur la confiance et RKNet, face aux signaux GPS et de vitesse bruités ou attaqués.</li>
                        <li><strong>Comparaison répétable</strong> entre plateformes virtuelles et physiques via des scénarios, des journaux et des métriques partagés.</li>
                    </ul>',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Testbed Specifications (Survey Entry)',
                    'fr' => 'Spécifications du Banc d\'Essai (Entrée d\'Enquête)',
                ],
            ],
            [
                'type' => 'html',
                'text' => [
                    'en' => '
                    <div class="table-container">
                        <table class="results-table">
                            <thead>
                                <tr>
                                    <th>Feature / Metric</th>
                                    <th>Specification Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Number of Vehicles</strong></td>
                                    <td>Up to 4 virtual vehicles in simulation, 3 physical vehicles in platoon (2x QCars, 1x LIMO)</td>
                                </tr>
                                <tr>
                                    <td><strong>Vehicle Scale</strong></td>
                                    <td>1/10-scale (Quanser QCar), desktop-scale (AgileX LIMO)</td>
                                </tr>
                                <tr>
                                    <td><strong>Sensors</strong></td>
                                    <td>LiDAR, depth camera, 360° CSI cameras, IMU, wheel encoders, virtual GNSS/GPS, magnetometer</td>
                                </tr>
                                <tr>
                                    <td><strong>Compute Hardware</strong></td>
                                    <td>NVIDIA Jetson TX2 (QCar), NVIDIA Jetson Nano / Raspberry Pi (LIMO), STM32 MCUs, simulation host PCs</td>
                                </tr>
                                <tr>
                                    <td><strong>Communication Method</strong></td>
                                    <td>UDP-based V2V communication protocol over local Wi-Fi network (with ACKs and heartbeat checks)</td>
                                </tr>
                                <tr>
                                    <td><strong>Software Stack</strong></td>
                                    <td>ROS2 (Humble/Foxy), Docker, Python 3, MATLAB/Simulink (optional), C++</td>
                                </tr>
                                <tr>
                                    <td><strong>Simulator Support</strong></td>
                                    <td>Quanser Interactive Labs (QLabs) virtual twins, CARLA simulator, numerical Python/MATLAB models</td>
                                </tr>
                                <tr>
                                    <td><strong>Open-Source Link</strong></td>
                                    <td><a href="https://github.com/kslhuy/QCar2_Cran" target="_blank" rel="noopener noreferrer">github.com/kslhuy/QCar2_Cran</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Documentation Link</strong></td>
                                    <td>Included in the repository README and developmental folders</td>
                                </tr>
                                <tr>
                                    <td><strong>Access & Reproducibility</strong></td>
                                    <td>Fully reproducible using public Docker images, Python scripts, open-source repositories, and documented scenarios. Accessible to other researchers for cooperative CAV testing.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>',
                    'fr' => '
                    <div class="table-container">
                        <table class="results-table">
                            <thead>
                                <tr>
                                    <th>Caractéristique / Métrique</th>
                                    <th>Détails des Spécifications</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Nombre de véhicules</strong></td>
                                    <td>Jusqu\'à 4 véhicules virtuels en simulation, 3 véhicules physiques en peloton (2x QCars, 1x LIMO)</td>
                                </tr>
                                <tr>
                                    <td><strong>Échelle des véhicules</strong></td>
                                    <td>Échelle 1/10 (Quanser QCar), échelle bureau (AgileX LIMO)</td>
                                </tr>
                                <tr>
                                    <td><strong>Capteurs</strong></td>
                                    <td>LiDAR, caméra de profondeur, caméras CSI 360°, IMU, encodeurs de roue, GNSS/GPS virtuel, magnétomètre</td>
                                </tr>
                                <tr>
                                    <td><strong>Matériel de calcul</strong></td>
                                    <td>NVIDIA Jetson TX2 (QCar), NVIDIA Jetson Nano / Raspberry Pi (LIMO), microcontrôleurs STM32, PC hôtes de simulation</td>
                                </tr>
                                <tr>
                                    <td><strong>Méthode de communication</strong></td>
                                    <td>Protocole de communication V2V basé sur UDP via réseau Wi-Fi local (avec ACK et vérifications de pulsation)</td>
                                </tr>
                                <tr>
                                    <td><strong>Pile logicielle</strong></td>
                                    <td>ROS2 (Humble/Foxy), Docker, Python 3, MATLAB/Simulink (optionnel), C++</td>
                                </tr>
                                <tr>
                                    <td><strong>Simulateurs supportés</strong></td>
                                    <td>Jumeaux virtuels Quanser Interactive Labs (QLabs), simulateur CARLA, modèles numériques Python/MATLAB</td>
                                </tr>
                                <tr>
                                    <td><strong>Lien open-source</strong></td>
                                    <td><a href="https://github.com/kslhuy/QCar2_Cran" target="_blank" rel="noopener noreferrer">github.com/kslhuy/QCar2_Cran</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Lien de documentation</strong></td>
                                    <td>Inclus dans le README du dépôt et les dossiers de développement</td>
                                </tr>
                                <tr>
                                    <td><strong>Accès & Reproductibilité</strong></td>
                                    <td>Entièrement reproductible à l\'aide d\'images Docker publiques, scripts Python, dépôts open-source et scénarios documentés. Accessible aux autres chercheurs pour les tests CAV coopératifs.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>',
                ],
            ],
        ],
    ],
];
