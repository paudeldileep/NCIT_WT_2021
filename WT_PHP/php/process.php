<?php

// //check request method is post or not
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     //validate form data
//     $errors=array();
//     if(empty($_POST['username'])){
//         $errors['name']="Name is required";
//     }
//     if(empty($_POST['useremail'])){
//         $errors['email']="Email is required";
//     }

//     //if errors array is not empty redirect
//     if(!empty($errors)){
//         // $_SESSION['errors']=$errors;
//         // $_SESSION['inputs']=$_POST;
//         header('Location: ../html/form.php?errors='.serialize($errors));
//     }else{
//         echo "Form is valid";
//     }
// }
// else{
//     echo "form not submitted";
//     header('location:../html/form.php');
// }
?>