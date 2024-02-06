<?php
ob_start();
 
include '../partials/header.php';
include '../config/pdo.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['E-mail'];
    $password = $_POST['Password'];
 
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM eshop_signup WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
 
        $result = $stmt->fetch();
    }
    if ($result) {
        $hash = $result['password'];
       if (password_verify($password, $hash)) {
            session_start();
            $_SESSION['user'] = $result;
            $_SESSION['user']['logged'] = true;
            header('Location: profile.view.php');
            ob_end_flush();
        } else {
            $error = "Le mot de passe est incorrect";
        }
    }
 
}
 
?>
 
<div class="wrapper">
    <h1>LOG IN</h1>
    <form class="signup-form" method="POST">
        <input type="email" name="E-mail" placeholder="E-mail">
        <input type="password" name="Password" placeholder="Password">
        <input type="submit" name="submit">
    </form>
</div>
 
<?php include '../partials/footer.php'; ?>