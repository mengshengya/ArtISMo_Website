<?php
return [
    'abstract.section_1' => 'Context',
    'abstract.section_2' => 'Objectives',

    'abstract.context_1' =>
        'The development of controllers with high performance and reliability for autonomous and connected vehicles '
        . 'will require real-time measurements or estimates of many variables on each vehicle. Examples of variables '
        . 'that are needed for feedback include: longitudinal distances, velocities and accelerations of other nearby '
        . 'vehicles; lateral position of the vehicle in its own lane; vehicle yaw angle; slip angle; yaw rate; '
        . 'steering angle; lateral acceleration; and roll angle. There are also environmental variables which need '
        . 'to be measured such as tire-road friction coefficient, snow cover on road, and the presence of unexpected '
        . 'obstacles.',

    'abstract.context_2' =>
        'Measurement of all of the above variables requires significant expense. Indeed, some of the sensors above, '
        . 'such as slip angle and roll angle, can be extremely expensive to measure, requiring sensors that cost '
        . 'thousands of dollars. For example the Datron optical sensor for measurement of slip angle has a price '
        . 'over 10k Euros. In addition, several variables cannot be measured due to unavailability of sensors '
        . '(at any cost). Examples include positions, and accelerations of cars which are further upstream lead car '
        . 'of a platoon). Only the position of the immediately preceding car ahead can currently be measured.',

    'abstract.context_3' =>
        'Furthermore, autonomous and connected vehicle requires highly reliable sensors and actuators. Failure of any '
        . 'one sensor or actuator, due to faults, cyber-attacks or denial of service, can cause a disastrous accident. '
        . 'Hence reliable fault diagnostic and fault handling systems are also needed. Such systems cannot be based on '
        . 'hardware redundancy which requires many extra copies of the same sensors. Instead, they need to rely on '
        . 'estimation algorithms and analytical redundancy. For all the above reasons, the development of intelligent '
        . 'estimation algorithms is highly important for autonomous vehicles.',

    'abstract.text_1' =>
        'The idea we will explore in this project is the development and use of learning-based nonlinear observers. '
        . 'Several components on a vehicle have highly complex models whose parameters are difficult to obtain and also '
        . 'vary significantly with time.',



    'abstract.objectives_title_1' => 'Learning-based neuro-adaptive observers for vehicle tracking',
    'abstract.objectives_title_2' => 'Towards intelligent estimation algorithms',
    'abstract.objectives_title_3' => 'Improving Resilience, Robustness, and Reliability of automated vehicles in a platoon',

    'abstract.objectives_1' =>
        'The primary objective of this project is to develop a comprehensive framework for the design and implementation '
        . 'of learning-based nonlinear observers for autonomous and connected vehicles.',

    'abstract.objectives_2' =>
        'This proposal will therefore use a modeling approach consisting of a combination of physically meaningful '
        . 'differential equations and adaptive online-learning-based neural networks to represent the vehicle dynamics. '
        . 'In particular, well understood phenomena such as force balances, mechanical motion per Newton\'s laws, '
        . 'aerodynamic drag, rolling resistance, road grade, combined acceleration terms for lateral and roll '
        . 'accelerations and road bank angle influence will be modeled using analytical differential equations. '
        . 'Tire models for both lateral and longitudinal forces, the friction circle, engine maps, and suspension '
        . 'stiffness and damping characteristics will be modeled using neural networks whose weights can be initially '
        . 'obtained using training via back-propagation. In addition to initial training, model parameters for the '
        . 'neural networks and a subset of parameters for the physically meaningful differential equations will also be '
        . 'updated automatically online during regular vehicle use.',

    'abstract.objectives_3' =>
        'The overall objective of this part is to develop the architecture for the combined modeling approach, to '
        . 'develop rigorous estimation algorithms for both parameter and state estimation}, to enable dynamic changes '
        . 'in observer structure based on real-time vehicle maneuver and measurement availability and to validate the '
        . 'complete model and estimation system using data from CARSIM and from real vehicle experimental measurements '
        . 'provided by partners of the project.',

    'abstract.objectives_4' =>
        'Another objective of this proposal consists in proposing a new and full system of software-enabled '
        . 'estimation algorithms to be included in many control strategies and diagnosis schemes to improve stability, '
        . 'reliability, and safety of connected vehicles. To this end, as depicted in the following figure, the aim '
        . 'is to combine the nice properties of statistical predictors, model-based methods, neuro-adaptive observers, '
        . 'and learning-based techniques like the extremum seeking algorithm to enhance the estimation and increase '
        . 'resilience, performances, and robustness of any control strategy related to connected vehicles.',

    'abstract.objectives_5' =>
        'The challenge is to develop a smart connection protocol between the set of observers/estimators/predictors '
        . 'allowing the most accurate and reliable estimation. The combination of all these estimation techniques is '
        . 'worthily interesting for models with unknown inputs and/or unknown parameters. Among the problematic of '
        . 'autonomous and connected vehicles~(in addition to the tracking problem mentioned above) where such '
        . 'intelligent estimation algorithms are crucial, we can cite the problem of cyber physical attacks or denial '
        . 'of service detection, disturbance and fault rejection, and data loss. Hence, estimating all the variables '
        . 'related to those factors may considerably increase resilience and reliability of interconnected vehicles. '
        . 'Due to the high sensitivity of autonomous vehicles to the above undesired factors, the development of smart '
        . 'estimation schemes is crucial and essential.',

    'abstract.objectives_6' =>
        '<p>In the operation of interconnected vehicles, the network-based environment provides many advantages such as '
        . 'easy installation, maintenance with low cost, and high efficiency, so, combined with recent advanced '
        . 'communication technology, future controlled, connected vehicles are under network-based environment which '
        . 'also causes several undesired factors. These factors may be as follows:</p>'
        . '<ul>'
        . '<li><u><em>Disturbances and fault: </em></u> faults of digital devices cause serious problems like degradation '
        . 'of system performance and even loss of human life. Therefore, the diagnosis of faults is needed by '
        . 'considering several engineering concepts like fault tolerant and fault diagnosis.</li><br>'
        . '<li><u><em>Cyber-attacks: </em></u> it is essential to develop some criteria for the vehicle systems to '
        . 'detect and counter cyber-attacks. We aim to consider several cyber-attack architectures involving nonlinear '
        . 'dynamics.</li><br>'
        . '<li><u><em>Data loss: </em></u> the influence of packet dropout will be strong when packet dropout and '
        . 'sampling are simultaneously occurred because, if packet dropout is occurred at a sampling instant, data will '
        . 'be missing during a sampling period. Therefore, we prepare some solutions for this complex situation. '
        . 'Specifically for this issue, the use and development of new statistical predictors will be of great '
        . 'interest.</li><br>'
        . '</ul>'
        . '<p>Until now, many existing works solved the above stated problems individually. In this project, we will '
        . 'work on a unified solution counteracting all factors caused by the presence of network-based environments. '
        . 'We will investigate stability of the interconnected vehicle systems subject to those network-based factors. '
        . 'The objective is to develop a comprehensive theory from estimation viewpoint to improve resilience, '
        . 'robustness, and reliability of a large class of (inter)-connected nonlinear vehicle dynamics. The '
        . 'investigation of learning-based or data-driven based estimation algorithms and combining Unknown Input '
        . 'Observers (UIO) with nonlinear approximates will be raised in this proposal. Indeed, due to the smartness '
        . 'of new integrated technologies, the use of artificial intelligence-based algorithms may help to improve '
        . 'estimation and thus resilience and reliability of control systems in smart mobility. Combining analytical '
        . 'model-based techniques with learning-based algorithms and statistical predictors '
        . 'will enhance significantly the estimation quality.</p>',

    'abstract.section_3' => 'Work Packages',
    'abstract.section_4' => 'Consortium Partners',

    'abstract.workpackages_intro' =>
        'To achieve the project objectives, the research is organized into five tightly integrated Work Packages (WPs):',

    'abstract.workpackages_list_html' =>
        '<div class="wp-grid">'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp1">WP1</span></div>'
        . '<h4 class="wp-card-title">Project Management and Communication</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Leader: Ali Zemouche (CRAN)</div>'
        . '<p class="wp-card-desc">This work package is dedicated to the overall management of the project, daily tracking of Gantt schedules, and organizing deliverables, risk assessment, kick-off meetings, and annual workshops. It also coordinates academic and company knowledge transfer.</p>'
        . '</div>'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp2">WP2</span></div>'
        . '<h4 class="wp-card-title">Vehicle Modeling, Environment Perception & Deep-Learning</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Leader: Sofiane Ahmed Ali (IRSEEM)</div>'
        . '<p class="wp-card-desc">This WP provides physical and kinematic vehicle models and integrates computer vision and deep learning techniques to estimate vehicle states and verify raw measurements from physical sensors (e.g., LiDAR, Camera).</p>'
        . '</div>'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp3">WP3</span></div>'
        . '<h4 class="wp-card-title">Intelligent Software Sensors for Vehicle Tracking</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Leader: Ali Zemouche (CRAN)</div>'
        . '<p class="wp-card-desc">This WP focuses on single-vehicle tracking by designing learning-based neuro-adaptive observers and estimator architectures. It addresses mathematical challenges with nonlinear activation functions, noise rejection, and online learning.</p>'
        . '</div>'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp4">WP4</span></div>'
        . '<h4 class="wp-card-title">R³ Software Sensors for Vehicle Tracking in a Platoon</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Leader: Dalil Ichalal (IBISC)</div>'
        . '<p class="wp-card-desc">This WP builds cooperative and distributed software sensors to guarantee resilient, robust, and reliable (R³) platooning. It targets fault diagnostics, cyber-attack detection, and mitigation of communication delay or packet dropouts.</p>'
        . '</div>'
        . '<div class="wp-card">'
        . '<div class="wp-card-header"><span class="wp-badge wp5">WP5</span></div>'
        . '<h4 class="wp-card-title">Validation, Tests, and Integration of Algorithms</h4>'
        . '<div class="wp-leader-tag"><span class="wp-leader-icon">👤</span> Leader: Randolph Toom (FAAR)</div>'
        . '<p class="wp-card-desc">This WP integrates the developed software sensors and control algorithms into Quanser QCars, AgileX LIMOs, and real-world industrial testing vehicles provided by FAAR Industry, validating the theoretical models in real-world scenarios.</p>'
        . '</div>'
        . '</div>',

    'abstract.partners_intro' =>
        'The ArtISMo project brings together a multidisciplinary consortium of leading French research institutions, '
        . 'an industrial leader, and international academic collaboration:',

    'abstract.partners_list_html' =>
        '<div class="partners-grid">'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-cran"><img src="assets/img/logo_cran.png" alt="CRAN Logo" class="partner-logo-img">CRAN</div>'
        . '<h4 class="partner-title">CRAN</h4>'
        . '<div class="partner-subtitle">Centre de Recherche en Automatique de Nancy — Université de Lorraine & CNRS</div>'
        . '<span class="partner-role-tag">Project Coordinator</span>'
        . '<p class="partner-desc">CRAN specializes in control design, nonlinear observers, stability analysis, and network communication.</p>'
        . '</div>'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-ibisc"><img src="assets/img/logo_evry.png" alt="IBISC Logo" class="partner-logo-img">IBISC</div>'
        . '<h4 class="partner-title">IBISC</h4>'
        . '<div class="partner-subtitle">Informatique, Biologie Synthétique et Systèmes Complexes — Université d\'Évry & Université Paris-Saclay</div>'
        . '<span class="partner-role-tag">WP4 Leader</span>'
        . '<p class="partner-desc">IBISC provides deep expertise in vehicle dynamics, cyber-physical systems, observers, and fault-tolerant control strategies.</p>'
        . '</div>'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-irseem"><img src="assets/img/logo_esigelec.jpg" alt="IRSEEM Logo" class="partner-logo-img">IRSEEM</div>'
        . '<h4 class="partner-title">IRSEEM</h4>'
        . '<div class="partner-subtitle">Institut de Recherche en Systèmes Électroniques Embarqués — ESIGELEC</div>'
        . '<span class="partner-role-tag">WP2 Leader</span>'
        . '<p class="partner-desc">IRSEEM brings expertise in mechatronics systems, deep-learning, computer vision, perception, and V2X multi-agent systems.</p>'
        . '</div>'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-faar">FAAR</div>'
        . '<h4 class="partner-title">FAAR Industry</h4>'
        . '<div class="partner-subtitle">Industrial Partner</div>'
        . '<span class="partner-role-tag">WP5 Leader & Validation</span>'
        . '<p class="partner-desc">FAAR provides engineering support, instrumentation resources, and automotive facilities to deploy and validate algorithms on experimental and industrial vehicles.</p>'
        . '</div>'
        . '<div class="partner-card">'
        . '<div class="partner-logo-wrapper gradient-lisec"><img src="assets/img/logo_umn.svg" alt="LISEC Logo" class="partner-logo-img">LISEC</div>'
        . '<h4 class="partner-title">LISEC</h4>'
        . '<div class="partner-subtitle">Laboratory of Intelligent Systems and Experimental Control — University of Minnesota</div>'
        . '<span class="partner-role-tag">Academic Advisor</span>'
        . '<p class="partner-desc">Collaborates on all work packages, providing advanced scientific advising on intelligent observers, vehicle platooning, and stability control systems.</p>'
        . '</div>'
        . '</div>',
];