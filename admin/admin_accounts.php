<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];

    // Evitar que se elimine el admin_id=1 por cualquier otro admin
    if ($delete_id == 1) {
        echo "No puedes eliminar al administrador principal.";
    } else {
        // Verificar si el admin actual es el admin_id=1
        $admin_id_actual = 1; // Esto debe obtenerse de tu sistema de autenticación

        if ($admin_id_actual == 1) {
            // Si el admin actual es el admin_id=1, permite la eliminación del admin con el id proporcionado
            $delete_admins = $conn->prepare("DELETE FROM `admins` WHERE id = ?");
            $delete_admins->execute([$delete_id]);
            header('location:admin_accounts.php');
        } else {
            // Si el admin actual no es el admin_id=1, mostrar mensaje de no autorizado
            echo "No tienes permiso para eliminar administradores.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin accounts</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="accounts">

   <h1 class="heading">Cuentas de Administradores</h1>

   <div class="box-container">

   <div class="box">
      <p>Agregar nuevo administrador</p>
      <a href="register_admin.php" class="option-btn">Registrar</a>
   </div>

   <?php
      $select_accounts = $conn->prepare("SELECT * FROM `admins`");
      $select_accounts->execute();
      if($select_accounts->rowCount() > 0){
         while($fetch_accounts = $select_accounts->fetch(PDO::FETCH_ASSOC)){   
   ?>
   <div class="box">
      <p> Admin id : <span><?= $fetch_accounts['id']; ?></span> </p>
      <p> Nombre : <span><?= $fetch_accounts['name']; ?></span> </p>
      <div class="flex-btn">
         <a href="admin_accounts.php?delete=<?= $fetch_accounts['id']; ?>" onclick="return confirm('Eliminar esta cuenta?')" class="delete-btn">Eliminar</a>
         <?php
            if($fetch_accounts['id'] == $admin_id){
               echo '<a href="update_profile.php" class="option-btn">Actualizar</a>';
            }
         ?>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no hay cuentas disponibles!</p>';
      }
   ?>

   </div>

</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>