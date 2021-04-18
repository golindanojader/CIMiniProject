<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<div class="container">

<div class="row justify-content-center ">

<div class="col-xl-4 no-float card card_border py-5 mb-4">

<div class="panel panel-default ">

<div class="panel-body">


<h3>Registro de usuario</h3>
<hr>

<form action="<?=base_url('register');?>" method="post">


<div class="form-group">
    <label for="user_email">Email</label>
    <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="user_pass">Contraseña</label>
    <input type="password" name="user_pass" class="form-control" id="user_pass">
  </div>
  <div class="form-group">
    <label for="user_passr">Repita su Contraseña</label>
    <input type="password" name="user_passr" class="form-control" id="user_passr">
  </div>

  <button type="submit" class="btn btn-primary btn-block">Registrarse</button>

</form>
</div>
</div>


</div>
</div>
</div>
