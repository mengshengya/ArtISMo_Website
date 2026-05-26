<?php

return [
    [
        'id' => 'vehicle-modeling',
        'title' => [
            'en' => 'Vehicle Modeling & Perception',
            'fr' => 'Modélisation dynamique du véhicule et perception',
        ],
        'blocks' => [],
    ],
    [
        'id' => 'estimation-algorithms',
        'title' => [
            'en' => 'Intelligent Estimation Algorithms',
            'fr' => 'Algorithmes avancés d\'estimation intelligente',
        ],
        'blocks' => [],
    ],
    [
        'id' => 'platoon-applications',
        'title' => [
            'en' => 'Resilient Platoon Applications',
            'fr' => 'Applications robustes au pelotonnage de véhicules',
        ],
        'blocks' => [
            [
                'type' => 'youtube',
                'url' => 'https://youtu.be/n3M1J4P6dlQ?si=q5tv1sALv1Eirxkx',
                'title' => [
                    'en' => 'Resilient Platoon Applications video',
                    'fr' => 'Vidéo sur les applications robustes au pelotonnage',
                ],
                'caption' => [
                    'en' => 'Resilient Platoon Applications demo.',
                    'fr' => 'Démonstration des applications robustes au pelotonnage.',
                ],
            ],
        ],
    ],
    [
        'id' => 'validation-integration',
        'title' => [
            'en' => 'Validation & System Integration',
            'fr' => 'Validation expérimentale et intégration système',
        ],
        'blocks' => [],
    ],
    [
        'id' => 'experimental-platform',
        'title' => [
            'en' => 'Experimental Platform',
            'fr' => 'Développement de la plateforme expérimentale',
        ],
        'blocks' => [
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
        ],
    ],
    [
        'id' => 'simulation-environment',
        'title' => [
            'en' => 'Simulation Environment',
            'fr' => 'Conception de l\'environnement de simulation',
        ],
        'blocks' => [
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'We developed an enhanced QLabs-based simulation environment to support real-time monitoring, control, and validation of connected autonomous vehicle systems. This upgraded environment bridges algorithm development, web-based interaction, and virtual experimentation for intelligent transportation research.',
                    'fr' => 'Nous avons développé un environnement de simulation amélioré basé sur QLabs afin de soutenir la supervision, la commande et la validation en temps réel des systèmes de véhicules autonomes connectés. Cet environnement relie le développement d\'algorithmes, l\'interaction web et l\'expérimentation virtuelle pour la recherche en transport intelligent.',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Web-based real-time monitoring and control interface for connected autonomous vehicle simulation.',
                    'fr' => 'Interface web de supervision et de commande en temps réel pour la simulation de véhicules autonomes connectés.',
                ],
            ],
            [
                'type' => 'paragraph',
                'text' => [
                    'en' => 'A web-based remote monitoring and control platform has been developed for the QLabs simulation environment. This platform allows users to observe vehicle states, trajectories, and sensor data in real time through an intuitive online interface. It also enables remote switching between control modes during simulation, facilitating interactive experimentation and algorithm testing.',
                    'fr' => 'Une plateforme web de supervision et de commande à distance a été développée pour l\'environnement de simulation QLabs. Elle permet d\'observer en temps réel les états des véhicules, les trajectoires et les données capteurs via une interface en ligne intuitive.',
                ],
            ],
            [
                'type' => 'youtube',
                'url' => 'https://youtu.be/A0KsCnvjmfI?si=Gm6_9qTzkTo0drTY',
                'title' => [
                    'en' => 'Web-based QLabs simulation environment demo',
                    'fr' => 'Démonstration de l\'environnement de simulation QLabs via le web',
                ],
                'caption' => [
                    'en' => 'Web-based QLabs simulation environment demo',
                    'fr' => 'Démonstration de l\'environnement de simulation QLabs via le web',
                ],
            ],
            [
                'type' => 'heading',
                'text' => [
                    'en' => 'Python-based local monitoring and management platform to support flexible simulation setup and algorithm evaluation for connected autonomous vehicles',
                    'fr' => 'Plateforme locale de supervision et de gestion basée sur Python pour soutenir la configuration flexible des simulations et l\'évaluation des algorithmes',
                ],
            ],
            [
                'type' => 'html',
                'text' => [
                    'en' => '<p>The platform enables custom communication network design, sensor activation/deactivation for robustness and fault testing, custom route selection for diverse driving scenarios, and multiple control modes for controller comparison. By providing a unified and open-source experimental tool, publicly released on <a href="https://github.com/kslhuy/QCar2_Cran" target="_blank" rel="noopener noreferrer">GitHub</a>, this platform improves the efficiency, reproducibility, and extensibility of simulation-based connected vehicle research.</p>',
                    'fr' => '<p>La plateforme permet la conception de réseaux de communication personnalisés, l\'activation ou la désactivation de capteurs pour les tests de robustesse et de défauts, la sélection d\'itinéraires variés et plusieurs modes de commande pour comparer les contrôleurs. En fournissant un outil expérimental unifié et open source, publié sur <a href="https://github.com/kslhuy/QCar2_Cran" target="_blank" rel="noopener noreferrer">GitHub</a>, elle améliore l\'efficacité, la reproductibilité et l\'extensibilité de la recherche sur les véhicules connectés par simulation.</p>',
                ],
            ],
            [
                'type' => 'youtube',
                'url' => 'https://youtu.be/SraIErZ5QTg?si=3rbx-DJPYJrunefU',
                'title' => [
                    'en' => 'Python-based local monitoring and management platform demo',
                    'fr' => 'Démonstration de la plateforme locale de supervision et de gestion basée sur Python',
                ],
                'caption' => [
                    'en' => 'Python-based local monitoring and management platform demo.',
                    'fr' => 'Démonstration de la plateforme locale de supervision et de gestion basée sur Python.',
                ],
            ],
        ],
    ],
    [
        'id' => 'real-vehicle-testing',
        'title' => [
            'en' => 'Real-Vehicle Testing & Evaluation',
            'fr' => 'Essais sur véhicule réel et évaluation des performances',
        ],
        'blocks' => [
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
];
