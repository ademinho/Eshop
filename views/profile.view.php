<?php 

include '../partials/header.php'; 
session_start();

?>

<div class="wrapper">

    <h1>Info Personnel</h1>

    <img id="profile-avatar" src="../uploads/avatar/avatar.png" alt="">

    <h2>Profil de <?= $_SESSION['user']['name'] ?></h2>
    <h3>Votre adresse mail : <?= $_SESSION['user']['email'] ?></h3>

    

    <br>
        <button class="ines">Changer d'avatar</button>
</div>



<?php include '../partials/footer.php' ?>

