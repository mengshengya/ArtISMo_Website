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
];