我
# Speech Manuscript for the Report

## Title: Application of Intelligent Estimation Algorithms for Autonomous and Connected Vehicles

## Beginning

### Topic

Hello everyone, today I will give a presentation on the topic called **Application of Intelligent Estimation Algorithms for Autonomous and Connected Vehicles**.
My name is Qi LI, a master's student from Northeastern University in China, and this work is still ongoing at the IUT of Longwy and the Center of Research on Control in Nancy.

## Section 1: Task Setting

The report is divided into three sections: task settings, ongoing tasks, and future plans. Let's start with the first topic: task settings.


### Background

First, we start with the **Car Fleet Control** presented in the figure, which is the simplest example in the field of autonomous and connected vehicles.

It can be easily seen that the scheme is built with N vehicles, and all of them are autonomous since the fleet is autonomous.

The control of the fleet can be divided into two processes: one is the **following process**, and the other is the **navigation process**. For the desired path, we can construct a virtual leader vehicle to find the optimized path and speed.
The following algorithm is applied to all cars, including both the follower car and the leader car.

Thus, there are two main questions that need to be considered in the following algorithm:

* Question 1: How to obtain self-data despite modeling errors and measurement noise?
* Question 2: For the follower car, how to obtain real-time data of the object car?

These are the main tasks we will handle during the internship.

### Task Setting

Here are the two main tasks in this internship for solving the proposed two problems.

To solve the self-data obtaining problem, I try to use the **HG/LPV-based observer** and **Neural Network-based observer** to obtain and filter the data gathered by the vehicle.
The NN here mainly focuses on the **Radial Basis Function Network**.

To obtain data on the object car, we use the **distributed observer scheme**, which has been widely used in multi-agent systems.

Some references to existing methods have been listed here.

### Internship Plan

The **Internship Plan Table** is listed here for carrying out the internship step by step.

The main idea is to use the distributed observer scheme to test different observer design methods on the **UGV platform**.

## Section 2: Ongoing Tasks

Next, I want to talk about my recent work.

### Simple Multi-Car Fleet

In the current project, the car fleet is mainly constructed using two files: `follower.py` and `vehicle_control.py`.

However, the problem is that the structure is hard to modify and does not offer an API for reading/writing data. So, it's hard to extend the code to other environments.

### To the General Case

Now, I am developing the structure presented in this figure, which includes three modules: the **carfleet module**, **control module**, and **distributed observer module**.

The **CarFleet class** will create the fleet and offer APIs for controlling and observing. It will also create threads for the control module and observer module.

The control module is based on two classes: **LeaderControl Class** and **FollowerControl Class**. They will use the data generated from the distributed observer threads to update the control input for each vehicle.

There are N local observer threads to calculate the local states in the distributed observer module by receiving data transformed from **QcarInfoAPI** offered by the CarFleet Module.

Meanwhile, the purpose of redesigning these modules is to make them easily transferable to other simulation environments.

Currently, I am still coding the CarFleet Class and getting familiar with the **QLab/Qcar APIs**. My goal is to test the developed distributed observer method on a **1-dimensional CarFleet** in about two weeks.

### Car Fleet Class

This figure shows some methods and their classification. There are three main tasks here:

1. Initialize the environment and fleet
2. Connect the vehicle and control the leader
3. Offer APIs for reading/writing the data of the fleet (including the vehicle)

For now, I am still working on it.

## Section3: Future Plan

Now I will talk about my future plan.

### Future Plan

Firstly, I will finish the structure and ensure the code can be reused and is easy to maintain.

Secondly, I will try to implement both **HG/LMI-based observers** and **NN-based observers** to build the **Distributed Observer Scheme**, and test this scheme in the **Qcar environment**.

Lastly, I will try to test the proposed architecture in the **real plant**.

### Ending

That's all. Thank you for your listening.
