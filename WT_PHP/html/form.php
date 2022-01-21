
<?php

//get errors from redirection
// if(isset($_GET['errors'])){
//   $errors = $_GET['errors'];
//   $errors = unserialize(urldecode($errors));
//   if(!empty($errors)){
//     echo "<div style='color:red'>";
//     foreach($errors as $error){
//       echo "<p>*".$error."</p>";
//     }
//     echo "</div>";
//   }
// }

  ?>
  
<html>
  <head></head>
  <body>
    <form method="post" action="../php/process.php">
      Name:<input type="text" name="username" /><br />
      E-mail:<input type="text" name="useremail" /><br />
      <input type="submit" value="Submit" />
    </form>
    
  </body>
</html>
