<?php

return [
    [
        'id' => 'phd-research',
        'category_key' => 'results.cat_phd',
        'summary_key' => 'results.phd_summary',
        'preview_image' => 'assets/img/work/doctorant/global_system_scheme_ieee_simple.png',
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
                'src' => 'assets/img/work/doctorant/global_system_scheme_ieee_simple.png',
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
                'text_key' => 'results.phd_results_title',
            ],
            [
                'type' => 'html',
                'text_key' => 'results.phd_table_html',
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
];
