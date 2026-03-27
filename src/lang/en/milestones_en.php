<?php
return [
    'milestones.title' => 'Milestones',
    'milestones.section_1' => 'Vehicle Modeling & Perception',
    'milestones.section_2' => 'Intelligent Estimation Algorithms',
    'milestones.section_3' => 'Resilient Platoon Applications',
    'milestones.section_4' => 'Validation & System Integration',
    'milestones.section_5' => 'Experimental Platform',
    'milestones.section_6' => 'Simulation Environment',
    'milestones.section_7' => 'Real-Vehicle Testing & Evaluation',


    'milestones.content_1' => '',
    'milestones.content_2' => '',
    'milestones.content_3' => '',
    'milestones.content_4' => '',
    'milestones.content_5' => '<p>This project is supported by an integrated experimental platform that combines two physical autonomous vehicle systems—LIMO ROS2 and QCar 2—with the Quanser Interactive Labs (QLabs) virtual environment. Together, these platforms provide a complete workflow for algorithm development, simulation-based verification, and real-world experimental validation in intelligent and connected vehicle research.</p>'
        . '<p><strong>LIMO ROS2</strong><br>'
        . 'A compact ROS2-enabled mobile robot platform equipped with onboard computing, LiDAR, and a depth camera, LIMO ROS2 is well suited for autonomous navigation, perception, mapping, localization, and motion-control studies. Its open development environment makes it a flexible testbed for rapid prototyping of vehicle intelligence algorithms.</p>'
        . '<div class="page-image"><img src="assets/img/Milestones/vehicle_platform/limo.png" alt="LIMO ROS2 platform"><p class="image-caption">LIMO ROS2 platform</p></div>'
        . '<p><strong>QCar 2</strong><br>'
        . 'QCar 2 is a sensor-rich, open-architecture 1/10-scale autonomous vehicle developed for self-driving research and education. As the feature vehicle of Quanser\'s Self-Driving Car Studio, it provides a realistic experimental platform for studying autonomous driving, estimation, control, and multi-sensor integration.</p>'
        . '<div class="page-image"><img src="assets/img/Milestones/vehicle_platform/Phycial_Qcar.png" alt="QCar 2 platform"><p class="image-caption">QCar 2 platform</p></div>'
        . '<p><strong>QLabs Virtual Environment</strong><br>'
        . 'QLabs is a virtual twin environment for Quanser hardware products, offering open worlds and dynamically accurate digital twins for simulation and testing. It enables safe, repeatable, and scalable experimentation, allowing algorithms to be validated in complex traffic scenarios before deployment on physical vehicles.</p>'
        . '<div class="page-image"><img src="assets/img/Milestones/vehicle_platform/Qcar4.png" alt="QLabs Virtual Environment"><p class="image-caption">QLabs Virtual Environment</p></div>'
        . '<p>This platform provides a complete framework for research on vehicle modeling, intelligent observation, sensor fusion, and autonomous driving validation. The combination of physical vehicles and virtual environments supports both simulation and real-world experiments. A platoon composed of two QCars and one LIMO further demonstrates the project\'s application to connected autonomous vehicles, including cooperative driving, distributed estimation, and multi-vehicle coordination.</p>'
        . '<div class="page-image"><img src="assets/img/Milestones/vehicle_platform/platoon_limo_qcar.jpg" alt="Two QCars and one LIMO forming a connected autonomous vehicle platoon for intelligent transportation research."><p class="image-caption">Two QCars and one LIMO forming a connected autonomous vehicle platoon for intelligent transportation research.</p></div>',

    'milestones.simulation_0' => '<p>We developed an enhanced QLabs-based simulation environment to support real-time monitoring, control, and validation of connected autonomous vehicle systems. This upgraded environment bridges algorithm development, web-based interaction, and virtual experimentation for intelligent transportation research.</p>',

    'milestones.simulation_1_title' => 'Web-based real-time monitoring and control interface for connected autonomous vehicle simulation.',

    'milestones.simulation_1' => '<p>A web-based remote monitoring and control platform has been developed for the QLabs simulation environment. This platform allows users to observe vehicle states, trajectories, and sensor data in real time through an intuitive online interface. It also enables remote switching between control modes during simulation, facilitating interactive experimentation and algorithm testing.</p>',

    'milestones.simulation_2_title' => 'Python-based local monitoring and management platform to support flexible simulation setup and algorithm evaluation for connected autonomous vehicles',

    'milestones.simulation_2' =>  '<p>The platform enables custom communication network design, sensor activation/deactivation for robustness and fault testing, custom route selection for diverse driving scenarios, and multiple control modes for controller comparison. By providing a unified and open-source experimental tool, publicly released on <a href="https://github.com/kslhuy/QCar2_Cran" target="_blank">GitHub</a>, this platform improves the efficiency, reproducibility, and extensibility of simulation-based connected vehicle research.</p>',

    'milestones.real_vehicle_text_1' => '<p>A web-based remote monitoring and control platform has been developed for real-vehicle experiments with QCar 2. It enables real-time observation of vehicle states and trajectories, as well as remote switching between control modes during physical testing.</p>',

    'milestones.real_vehicle_text_2' => '<p>Development for additional vehicles is currently ongoing, aiming to support broader real-world validation of connected and autonomous vehicle algorithms.</p>',

];