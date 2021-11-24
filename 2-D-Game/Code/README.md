# Ball Out-2 Instructions 

Ball Out-2 is a 2-D game web-based application that allows users to sign up and create an account and than login with the correct user credentials in order to gain access to the game and provide feedback after playing. 


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
> You can now run Ball Out-2 to do so go into your browser and copy the link below, this link should match the appropriate path your folder is in. 
> ```
> http://localhost/SOFE-2720-GROUP-30-CODE/signup.php
> ```
> 
### Step 9 
> Make sure you are on the signup.php page this is where all users will begin. 
