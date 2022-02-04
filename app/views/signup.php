<?php $this->view("header", $data); ?>
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post">
      <input type="text" name="username" placeholder="name"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="text" name="email" placeholder="email address"/>
      <button>create</button>
    </form>
  </div>
</div>
<?php $this->view("footer",$data);?>
