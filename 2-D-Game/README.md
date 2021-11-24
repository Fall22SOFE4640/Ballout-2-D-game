# SOFE2720-group-30-Ball-Out-2

## Introduction:

Ball out 2 is a 2-D game web application that is user-friendly that is easily playable by all users. 
Our website allows easy access to the 2-D game after any user signs up and logins with the correct credentials. 

# Table of Contents
1. [**Project Information**](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#project-information)
   1. [Vision Statement](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#vision-statement)
   2. [Major Features](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#major-features)
   3. [Scope](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#scope)
   4. [Target Markets](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#target-markets)
   5. [Product Assumptions and Constraints](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#product-assumptions-and-constraints)



   
2. [**Requirements**](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#requirements)
   1. [Requirements Page](https://github.com/SOFE2720/Ballout2-Group30-/tree/main/Requirements)
   2. [Requirements Diagram](/Requirements/Requirement%20Diagram.jpg)
   3. [List of Requirements](/Requirements/List-of-Requirements.pdf)
   4. [Review Report of the Requirements](/Requirements/Review-Report-of-the-Requirements.pdf)
   

3. [**Use Cases**](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#use-cases)
   1. [Use Cases Page](https://github.com/SOFE2720/Ballout2-Group30-/tree/main/Use%20Cases)
   2. [Use Cases and CRC Cards](/Use%20Cases/Use-Cases-and-CRC-Cards.pdf)
   3. [Jam Board](/Use%20Cases/JamBoard.pdf)
   4. [Use Case Diagram](/Use%20Cases/UseCase-Diagram.jpg)
   5. [User Story](/Use%20Cases/User-story%20.pdf)
    
4. [**Design**](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#design)
   1. [Design Page](https://github.com/SOFE2720/Ballout2-Group30-/tree/main/Design)
   2. [Class Diagram](/Design/Class%20Diagram.jpg)
   3. [State Diagram](/Design/State%20Based%20Design%20Diagram%20.jpg)
   4. [System Level Sequence Diagram](/Design/System%20Level%20Sequence%20Diagram.jpg)
   5. [Class Level Sequence Diagram](/Design/Class%20Level%20Sequence%20Diagram.jpg)
   6. [Ball Out-2 Prototype](/Design/Prototype.pdf)
   7. [Defining Labs](/Design/Defining%20Labs)
  
5. [**Code**](https://github.com/SOFE2720/Ballout2-Group30-/blob/main/README.md#code)

   1. [Code Page](/Code/)

## **Project Information:**

### **Vision Statement:**

To make our product users have as much fun as possible while also making sure they develop certain skills playing our game. We aim to build a fun and competitive environment for our gamers and get positive feedback while doing so.

### **Major Features:**

* A) A Login/Signup page for users
* B) A developer’s page that has credentials of everyone involved in the project.
* C) An instruction page with all the detailed instructions on how to play the game.
* D) The actual Ball out game page which has:\
-Difficulty buttons (easy, medium, hard) \
-A score board that keeps track of our score\
-A life counter that shows how many lives are left\
-The users high score displayed on the top of the screen\
-A reset high score button\
-2-D game window

* E) A Feedback page that allows users to give feedback on our game and give our game a rating.

### **Scope:** 

 The deliverables of our project should provide improvements and modifications to adequately meet the needs of web pc gamers. This includes a sign up page for our users to create an account with, an instruction page that helps them understand how to play and a feedback page that they can leave any suggestions in. 

### **Target Markets:**

The primary target audience for our project are mainly kids around the age of 8-13. Although it targets younger users, we have enabled parental control by adding a login page, this way parents will have control over the amount of time their child spends on our game. Even though our main targets are younger children we have seen that the competitive nature of our game has drawn the attention of some older kids too.

### **Product Assumptions and Constraints:**

### **Assumptions:**

* The user's email, username and password meets the requirements to sign up
* Signing up will not require any payment information or subscriptions, the 2-D game is free to play  
* The user has carefully read the instructions on how to play the game and has a general understanding of the controls
* The user has adequate internet connection to run the game effectively on the web server and has wamp installed 

###  **Constraints:**

* The user will not be able to play the game unless they sign up and login first
* The user must complete the exit survey and provide feedback after they complete the game

## **Requirements:**

Requirements are used to model and evaluate all project componenents and design. The requirements have been effectively anaylzed and reviwed to meet the needs of all stakeholders. The requirements folder contains a tabular list of all the requirements formatted and categorized, a review report of the requirements and a requirements diagram. 
These requirements establish a foundation for solving the project problem. 

## **Use Cases:**

Use cases provide a detailed desciption on how the system behaves and helps to capture the purpose of the system and describes the goals of the users, as well as refining the requirements to meet stakeholder needs. 

Use cases provided a basis for this project, to capture the user requrirments. Through lab 1 this was done through creating a jam board to discuss ideas, use cases and the creation of CRC cards. This folder contains these contents as well as a use case diagram that illustrates how the system interacts with the stakeholders and a user story that provides a detailed scenario wrriten in the perspective of the end user. 

## **Design:**

Design is important for the structure and the functionality of the project. The design aspects of this project was defined in Lab #3 and Lab #4. 

In Lab 3, Software Architecture and Conceptual Model the team implemented the requirements and use cases through use case diagrams, requirements diagram and details about the specifications of each requirement. 

In Lab 4, Requirement Analysis and Behaviour models the team refined the requirements through constructring conceptual models like, state diagrams and sequence diagrams. The interactions that occur in the system and state models are used to capture the dynmaic behavior of the software system. 

## Code:

2-D game web-based application that allows users to sign up and create an account and than login with the correct user credentials in order to gain access to the game. 



To run website: 
```PHP signup.php```


### Step 1
> Make sure WAMP is installed
> 
> Copy and paste the link below into your browser to download WAMP if not already installed. 
> ```
> https://www.w3resource.com/php/installation/install-wamp.php
> ```

### Step 2
> Once WAMP is installed run it 

### Step 3
> After you run WAMP, you must create the first database on PhpMyAdmin, name the database "game", this database will be used to store the user credentials.
> 
> Copy and paste the link below into your browser, this is where you will be creating your database, make sure you enter any user name and password you created for PhpMyAdmin, if you did not create a username or password, by default the username will be "root" and the password will be nothing "". 
> 
> ```
> http://localhost/phpmyadmin/
> ```

### Step 4
> After you create the first database, than create a table within this database call it "game_info", this table will contain four rows an Id of type int, name of type varchar, user_name of type varchar and password of type varchar. 

### Step 5
> After you create the table for the first database now you will create the second database call it "exits", this database will be used to store the users survey anwsers.
> 
### Step 6
> After you create the second database now you will create the table within this database, call this table "survey_answers", this table will contain three rows all of type varchar. The first row is called "question1", the second row is called "question2", and the third row is called "question3". 
>
### Step 7
> After you sucessfully create the databases and tables now make sure you place the folder with all the code in the "www" directory under the wamp directory. Now take note of the path of your folder. 
> 
### Step 8 
> You can now run Ball Out-2 to do so go into your browser and copy the link below and add on to the link the appropriate path your folder is in, it should match the link below: 
> ```
> http://localhost/SOFE-2720-GROUP-30-CODE/signup.php
> ```
> 
### Step 9 
> Make sure you are on the signup.php page this is where all users will begin. 
