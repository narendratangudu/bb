<!DOCTYPE html>
<html>
<head>
  <title>#mybankurblood-Feedback</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #five {
	border-bottom:3px solid #8B0000;
	}
  
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
   }
   
   input[type=text]{
   width:80%;
   border-radius: 4px;
   }
  </style>
</head>
<body>

<?php require_once("navmenu.php"); ?>
<?php require_once('dbconnect.php'); ?>
<?php
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (isset($_POST['submit'])) {
     $pname = mysqli_real_escape_string($dbc, trim($_POST['pname']));
     $suggest = mysqli_real_escape_string($dbc, trim($_POST['suggest']));

 $query = "INSERT INTO suggest (pname, feedback, joindate) VALUES ('$pname', '$suggest', NOW())";
 mysqli_query($dbc, $query);
 echo "<br>Thank you for your feedback!";
exit();
}
?>


  <p id="tweet2">"Please provide valuable feedback or any suggestions we need to follow!"</p> <br>

  <table height="90%" width="38%" align="center" background="../images/bg4.jpg" >
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td></td><td><h4><b><u>SUGGESTIONS</u></b></h4></td><td></td></tr>
  <tr><td><label for="pname">Name:</label></td>
  <td><input type="text" name="pname" id="pname"></td><td></td></tr>

  
  <tr><td><label for="suggest">Feedback/Suggestions:</label></td>
  <td><textarea id="suggest" name="suggest"></textarea></td><td></td></tr>

    <tr><td></td><td><input type="submit" id="submit" class="button" value="SUBMIT" name="submit"></td><td></td></tr></table>
  </form>

</body>
</html>
