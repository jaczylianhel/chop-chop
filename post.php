<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
    
 
    
    
    
if(empty($_POST['name'])&&empty($_POST['email'])&&empty($_POST['phone'])){

 print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
} 
    else{   
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.html\">";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
} 
    
  
unset($_POST['name']);
unset($_POST['email']);
unset($_POST['phone']);
      ?>
</body>

</html>
