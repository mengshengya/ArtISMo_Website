<?php

return [
    [
        'id' => 'context',
        'title_key' => 'abstract.section_1',
        'blocks' => [
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.context_1',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.context_2',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.context_3',
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/artismo-abstract-connected-platoon.webp',
                'alt' => [
                    'en' => 'ArtISMo connected autonomous vehicle platoon with V2X communication, sensing, neural observer, and resilience elements',
                    'fr' => 'Peloton de véhicules autonomes connectés ArtISMo avec communication V2X, perception, observateur neuronal et éléments de résilience',
                ],
                'caption' => [
                    'en' => 'ArtISMo context: connected autonomous vehicles combine V2X communication, onboard sensing, physics-based models, and learning-based observers to improve resilient platooning.',
                    'fr' => 'Contexte ArtISMo : les véhicules autonomes connectés combinent communication V2X, perception embarquée, modèles physiques et observateurs basés sur l’apprentissage pour améliorer la résilience du peloton.',
                ],
            ],
        ],
    ],
    [
        'id' => 'objectives',
        'title_key' => 'abstract.section_2',
        'blocks' => [
            [
                'type' => 'heading',
                'text_key' => 'abstract.objectives_title_1',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.objectives_1',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.objectives_2',
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/neuro_obs_v2.png',
                'alt' => [
                    'en' => 'Hybrid vehicle dynamics model combining physics-based equations with adaptive neural networks and online parameter estimation.',
                    'fr' => 'Modèle hybride de dynamique véhicule combinant équations physiques, réseaux neuronaux adaptatifs et estimation en ligne des paramètres.',
                ],
                'caption' => [
                    'en' => 'A hybrid vehicle dynamics model that combines physics-based equations with adaptive neural networks. Analytical models describe the fundamental vehicle motions and road-related effects, while neural networks capture complex nonlinear behaviors. With online parameter adaptation, the model continuously improves accuracy during real-world vehicle operation.',
                    'fr' => 'Un modèle hybride de dynamique véhicule combinant équations physiques et réseaux neuronaux adaptatifs. Les modèles analytiques décrivent les mouvements fondamentaux et les effets liés à la route, tandis que les réseaux neuronaux capturent les comportements non linéaires complexes.',
                ],
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.objectives_3',
            ],
            [
                'type' => 'heading',
                'text_key' => 'abstract.objectives_title_2',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.objectives_4',
            ],
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.objectives_5',
            ],
            [
                'type' => 'heading',
                'text_key' => 'abstract.objectives_title_3',
            ],
            [
                'type' => 'html',
                'text_key' => 'abstract.objectives_6',
            ],
        ],
    ],
    [
        'id' => 'workpackages',
        'title_key' => 'abstract.section_3',
        'blocks' => [
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.workpackages_intro',
            ],
            [
                'type' => 'html',
                'text_key' => 'abstract.workpackages_list_html',
            ],
        ],
    ],
    [
        'id' => 'partners',
        'title_key' => 'abstract.section_4',
        'blocks' => [
            [
                'type' => 'paragraph',
                'text_key' => 'abstract.partners_intro',
            ],
            [
                'type' => 'html',
                'text_key' => 'abstract.partners_list_html',
            ],
        ],
    ],
];
