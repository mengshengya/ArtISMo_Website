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
    
    'results.phd_results_title' => 'Performances de Validation Observées',
    
    'results.phd_table_html' => '
    <div class="table-container">
        <table class="results-table">
            <thead>
                <tr>
                    <th>Point de contrôle / Phase</th>
                    <th>Erreur de Validation Saine</th>
                    <th>Erreur de Validation Attaquée</th>
                    <th>Erreur de Sélection Combinée</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Époque 1 (Référence)</strong></td>
                    <td class="numeric-val">0.00668</td>
                    <td class="numeric-val">1.10951</td>
                    <td class="numeric-val">0.66838</td>
                </tr>
                <tr class="highlight-row">
                    <td><strong>Époque 15 (Meilleure Robustesse)</strong></td>
                    <td class="numeric-val highlight-row">0.01751</td>
                    <td class="numeric-val highlight-row">0.40279</td>
                    <td class="numeric-val highlight-row">0.24868</td>
                </tr>
                <tr>
                    <td><strong>Époque 20 (Phase C Finale)</strong></td>
                    <td class="numeric-val">0.02408</td>
                    <td class="numeric-val">0.43457</td>
                    <td class="numeric-val">0.27037</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="results-interpretation">
        <strong>Interprétation :</strong> L\'erreur sur données saines augmente légèrement après l\'introduction d\'attaques agressives lors de l\'apprentissage (compromis classique). Cependant, l\'erreur de validation sous attaque est réduite de <strong>plus de 63%</strong> (de 1.109 à 0.402). Cela prouve que le mécanisme de masquage de confiance parvient à isoler efficacement les capteurs défaillants.
    </p>',
    
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
];
