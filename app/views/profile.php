<?php $this->view("header", $data); ?>
<main>
    <div class="login-page">
        <p>Hi <?= $_SESSION['user_name'] ?></p>
        <a href="<?= ROOT ?>logout">Logout</a>
    </div>
</main>
<?php $this->view("footer", $data); ?>