<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*$expression = $this->hash->encrypt('123456Aa');
print_r($expression);*/

?>

<div class="container mt-1">
    <div class="row justify-content-center">

        <div class="col-5 ">



   
<?php if (validation_errors()){echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';} ?>


<?php echo form_open('signin'); ?>


<h1><?= $panel_title; ?></h1>



  <div class="form-group">
    <label for="exampleInputEmail1">Correo Electronico</label>
    <input type="email" name="correo" id="correo" value="<?php echo set_value('correo'); ?>" class="form-control" aria-describedby="emailHelp" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" name ="pass" id="pass" class="form-control" >
  </div>

  <button type="submit" class="btn btn-primary">Entrar</button>


</div>

</div>
    </div>