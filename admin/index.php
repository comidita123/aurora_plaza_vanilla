<?php
//Connection to DB
include('../database/dbconn.php');

//Verify if user is logged
if (isset($_SESSION['user_session'])){
  try{
    //Capture user email
    $email = $_SESSION['user_session'];
    //Query access level for user, bind params and execute query
    $isAdmin = $pdo->prepare("SELECT admin FROM user WHERE email=:email");
    $isAdmin->bindParam(':email', $email);
    $isAdmin->execute();
    //Save results in a variable user
    $user = $isAdmin->fetch(PDO::FETCH_ASSOC);
    
    //Validate if email have value 1 in admin field
    if($user){
      if($user['admin'] == 1){
        include("includes/header.php");
        include("includes/main.php");
        include("includes/footer.php");
      } else {
        header('Location: ../database/logout.php');
        exit();
      }
    } else {
      header('Location: ../database/logout.php');
      exit();
    }

  } catch(PDOException $e){
    header('Location: ../database/logout.php');
    echo "Error en la base de datos: " . $e->getMessage();
  }

} else {
  header('Location: ../database/logout.php');
  exit();
}


?>

