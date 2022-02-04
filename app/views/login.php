<?php $this->view("header", $data); ?>
<div class="login-page">
<p><?php check_message() ?></p>
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
    </form>
  </div>
</div>
<?php $this->view("footer",$data);?>
