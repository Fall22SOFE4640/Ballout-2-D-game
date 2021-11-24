<?php


if (isset($_POST['submit'])){
     $hostname = "localhost";
     $username = "root";
     $password = "";
     $databaseName = "ExitS";

     $question1 = $_POST['question1'];
     $question2 = $_POST['question2'];
     $question3 = $_POST['question3'];

     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
     $query = "INSERT INTO `survey_answers` (`question1`, `question2`, `question3`) VALUES ('".mysqli_real_escape_string($connect, $question1)."', '".mysqli_real_escape_string($connect,$question2)."' , $question3)";

     $result = mysqli_query($connect,$query);
     
     if($result && $question1 && $question2 && $question3)
     {
          echo '<script type = "text/javascript">alert("Thank you for your feedback")</script>';
     }
     else {
          echo '<script type = "text/javascript">alert("Please fill out required fields")</script>';
     }



     //mysqli_free_result($result);
     mysqli_close($connect);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">

     <style>

          #nav {
  /* Adds a black background color to the top navigation */
         background-color: #333;
         overflow: hidden;
         position: absolute;
         top: 0;
        
        }
   
 /* Styles the links inside the navigation bar */
     #nav a{
 
         float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 16px 18px;
        text-decoration: none;
        font-size: 17px;
        text-indent: 179px;
     
 
     }
  /* Changes the color of links on hover */
     #nav a:hover {
         background-color: white;
         color: black;
     }
body {
        background-color: peachpuff;
      }          
      * {
        padding: 0;
        margin: 0;
      }          
      canvas {
        background:skyblue;
        display: block;
        margin: 100px;
      }          
      #startBtn {
        border: none;
        background: none;
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
      }          
      #container {
        display: inline-block;
        position: relative;
      }  
      
     
      #myCanvas {
        position: relative;
      }

      #btn {

           text-decoration: underline;
          
      }



     </style>
</head>

<body>


     <div id=nav>
        <a href="Intropg.html" id="Intropg" class="Welcome">Welcome</a>
        <a href="Instructions.html" id="Instruction" class="Instructions">Game Instructions</a>
        <a href="2-D-ball-layout.html" id="2-D-game" class="2-D-game-tab">2-D-game-tab</a>
        <a href="survey.php" id="survey" class="survey">Exit Survey</a>
        <a href="logout.php" id="btn">Log-out</a>



   
   </div>
   
    
   </div>
   <br><br><br> <br><br><br><br>
     <form action="survey.php" method="post">
     	<h2>SURVEY</h2>

     

          <label>What do you like most about our game?</label>
               <input type="text" name="question1"><br>


          <label>What do you think we could improve?</label>
               <input type="text" name="question2"><br>



          <label>How did we do?</label>
          <select name = "question3" required>

            <option>---Rating---</option>
            <option value = "1">1</option>
            <option value = "2">2</option>
            <option value = "3">3</option>
            <option value = "4">4</option>
            <option value = "5">5</option>
            <option value = "6">6</option>
            <option value = "7">7</option>
            <option value = "8">8</option>
            <option value = "9">9</option>
            <option value = "10">10</option>


          </select>
        <button type="submit" name="submit" value="submit">Submit</button>
      
		
     </form>

</body>
</html>