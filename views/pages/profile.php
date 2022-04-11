<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /views/pages/home.php');
}

require_once '../../config/connect.php';
?>
<?php require_once '../templates/header.php'?>
<?php require_once '../templates/head.php'; ?>
<body>
<?php

?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>Профиль пользователя</h2>
            <form>
                <h3><?= $_SESSION['user']['login'] ?> </h3>
                <p><?= $_SESSION['user']['email'] ?></p>
                <p><?= $_SESSION['user']['full_name'] ?> <a href="update_full_name.php">Изменить</a></p>
                <p><a href="update_password.php">Изменить пароль</a> </p>
                <a href="../../controllers/logout.php" class="logout">Выход</a>
            </form>
            <hr>

            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
            ?>

        </div>
    </div>
</div>
</body>
</html>