<?php
 
    
if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['phone'])){

// print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
    echo false;
  
} 
    else{   
 // print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.html\">";
 echo true;
} 
    
      ?>
