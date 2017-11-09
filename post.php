<?php
 
    
if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['phone'])){
    echo false;
} 
    else{   
 echo true;
        showFormData();
$newName=$_POST['name'];
$newSurname=$_POST['email'];
$newGender=$_POST['phone'];
} 

      ?>
