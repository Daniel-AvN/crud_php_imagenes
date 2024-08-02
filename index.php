<!-- Daniel-AvN -->

<?php 
    include_once 'includes/header.php';
    include_once 'php/conexion.php';
    
    session_start();

    if( !isset($_SESSION['user']) ){
        header('location:login.php');
    }

?>

<main>

<section class="container">
    
<table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Cell</th>
            <th>photo</th>
            <th>action</th>
        </tr>

        <?php
        $sql= "SELECT * FROM empleados";
        $sentencia=$conexion->prepare($sql);
        $sentencia->execute();
        $res= $sentencia->fetchAll();
        foreach ($res as $e) {
         ?>
        <tr>
            <td> <?php echo $e['id']; ?> </td>
            <td> <?php echo $e['name']; ?> </td>
            <td> <?php echo $e['email']; ?> </td>
            <td> <?php echo $e['cell']; ?> </td>
            <td> <img src="imagenes/<?php echo $e['photo']; ?> " class="photo"> </td>
            <td>
                <section  class="opc">
                    <form action="php/eliminar.php" method="post">
                        <input type="hidden" name="borrar" value="<?php echo $e['id']; ?> ">
                        <button onclick="return confirm('estas seguro de eliminarlo?, esta accion no se puede deshacer')"><i class="fa-solid fa-trash" style="color: red;"></i></button>
                    </form>
                    <form action="php/actualizar.php" method="post">
                        <input type="hidden" name="actualizar" value="<?php echo $e['id']; ?> ">
                        <button > <i class="fa-regular fa-pen-to-square"></i></button>
                    </form>
                </section>
            </td>
        </tr>

        <?php } ?>


    </table>

    <!-- <form method="post" action="php/añadir.php" enctype="multipart/form-data" class="agregar">
            <h1>agregar empleado</h1>
                <label for="nombre"> nombre: <br>
                <input type="text" autofocus required  name="nombre">
            </label>
            <label for="email"> email: <br>
                <input type="email" required  name="email">
            </label>
            <label for="cell"> cell: <br>
                <input type="number" max="9999999999" min="0" required  name="cell">
            </label>
            <label for="photo"> photo: <br>
                <input type="file" required  name="photo">
            </label>
            <input class="btn" type="submit"></input>
    </form> -->

    
  <div class="panel agregar cwhite">
    <div class="panel__form-wrapper">
      
      <h1 style="text-transform:uppercase;">agregar empleado</h1>
      <div class="panel__forms " id="">
        
        <form class="form panel__login-form has-validation-callback" method="post" action="php/añadir.php" enctype="multipart/form-data">
          <div class="form__row has-error">
            <input type="text" id="" class="regist form__input error" name="nombre" required style="border-color: rgb(185, 74, 72);">
            <span class="form__bar"></span>
            <label for="email" class="form__label">nombre</label>
          </div>

          <div class="form__row has-error">
            <input type="email"  class="regist form__input error" name="email"   required style="border-color: rgb(185, 74, 72);">
            <span class="form__bar"></span>
            <label for="email" class="form__label">email</label>
         </div>

         <div class="form__row has-error">
            <input type="cell"  class="regist form__input error" name="cell"  max="9999999999" min="0" required style="border-color: rgb(185, 74, 72);">
            <span class="form__bar"></span>
            <label for="cell" class="form__label">cell</label>
         </div>

         <div class="form__row has-error">
            <label for="photo" class="m30" style>photo:</label>
            <span class="form__bar"></span>
            <input type="file"  class="regist form__input error" name="photo"   required style="border-color: rgb(185, 74, 72);">
         </div>

          <div class="form__row">
            <input type="submit" class="form__submit" value="Enviar">
          </div>
          
        </form>
      </div>

    </div>


  </div>


</section>

</main>

<?php 
    include_once 'includes/footer.php';
?>

<style>
    .panel {
  position: relative;
  z-index: 1;
}
.panel__register-form, .panel__password-form {
  display: none;
}
.panel__register-form .form__submit {
  margin-top: 5px !important;
}
.panel__form-wrapper {
  width: 100%;
  height: 100%;
  padding: 10%;
  background-color: rgba(0, 0, 0, 0.5);
  overflow-y: auto;
}

.panel__prev-btn {
  width: 24px;
  height: 24px;
  background: none;
  padding: 0;
}
.panel__prev-btn svg {
  transition: fill 0.3s;
}
.panel__prev-btn:hover > svg {
  fill: rgb(255, 37, 21);
}
.panel__headers {
  padding: 10px 0;
  text-align: center;
}
.panel__header {
  font-size: 1.375rem;
}
.panel__header:first-child {
  padding-bottom: 5px;
}
.panel__header.active > .panel__link {
  color: rgb(255, 37, 21);
  font-size: 3rem;
}
.panel__link {
  color: inherit;
  transition: all 0.3s;
  font-weight: 600;
}

    /**
    * Styles for <form>
    */
    .form__row {
    position: relative;
    padding-top: 40px;
    }
    .form__row.has-error > .form__error:after {
    display: block;
    }
    .form__input {
    width: 100px;
    padding: 5px 0;
    border: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    background: none;
    }
    .form__input:focus, .form__input:active {
    outline: 0;
    }
    .form__input:focus ~ .form__label, .form__input:active ~ .form__label, .form__input:valid ~ .form__label {
    bottom: 30px;
    font-size: 0.75rem;
    }
    .form__input:focus ~ .form__bar, .form__input:active ~ .form__bar {
    left: 0;
    right: 0;
    width: 100px;
    }
    .form__bar {
    position: absolute;
    bottom: 0;
    left: 50%;
    right: 50%;
    display: block;
    width: 0;
    height: 2px;
    background-color: rgb(255, 37, 21);
    transition: all 0.3s;
    }
    .form__label {
    position: absolute;
    bottom: 5px;
    left: 0;
    width: 100%;
    transition: all 0.3s;
    pointer-events: none;
    }
    .form__submit {
    width: 100px;
    padding: 10px 0;
    margin-top: 30px;
    border: none;
    border-radius: 10px;
    font-weight: 600;
    background-color: rgb(253, 17, 0);
    cursor: pointer;
    color: #fff;
    }
    .form__retrieve-pass {
    display: block;
    padding: 15px 0;
    text-align: center;
    color: rgba(255, 255, 255, 0.5);
    transition: all 0.3s;
    }
    .form__retrieve-pass:hover {
    color: #fff;
    }
    .form__error {
    position: absolute;
    bottom: -20px;
    display: block;
    width: 100%;
    height: 20px;
    color: rgb(255, 37, 21);
    font-size: 0.75rem;
    line-height: 20px;
    }
    .form__error:after {
    content: "x";
    position: absolute;
    bottom: 20px;
    right: -20px;
    display: none;
    width: 20px;
    height: 25px;
    font-size: 1.125rem;
    line-height: 25px;
    text-align: center;
    color: rgb(255, 37, 21);
    }
    .form__info {
    text-align: center;
    }
</style>