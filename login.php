<!-- Daniel-AvN -->
<!DOCTYPE html>
<!-- saved from url=(0064)https://cdpn.io/crocoder/fullpage/MGPeYw?anon=true&view=fullpage -->
<html lang="es">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  

    <!-- <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png"> -->

    <meta name="apple-mobile-web-app-title" content="ldan">

    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">



  
    <script src="./stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js.descarga"></script>


  <title>Registrarse</title>

    <link rel="canonical" href="">
  
  <!-- <link rel="stylesheet" href="./normalize.min.css"> -->

  <!-- <link rel="stylesheet" href="./css"> -->
  
  <link rel="shortcut icon" href="d" type="image/x-icon">

<style>
html {
  font-size: 100%;
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html, body {
  width: 100%;
  height: 100%;
}

body,
a,
button,
input {
  font-family: "Montserrat", sans-serif;
  color: #fff;
  font-weight: 400;
  font-size: 0.938rem;
  line-height: 1.15;
}

body {
  position: relative;
  background: url("https://img.freepik.com/fotos-premium/foto-gratis-espacio-abstracto-fondo-pantalla-diseno-humo-oscuro_512300-1926.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699315200&semt=ais") no-repeat center fixed;
  background-size: 100% 100%;
  overflow-y: auto;
}
@media screen and (min-width: 768px) {
  body {
    min-height: 100%;
    height: auto;
    max-height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow-y: visible;
  }
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

button {
  padding: 0;
  border: none;
  background: none;
  cursor: pointer;
}
button:active, button:hover {
  outline: 0;
}

a {
  text-decoration: none;
  cursor: pointer;
}
a:active, a:hover {
  outline: 0;
}

.panel_blur,
.panel {
  width: 100%;
  height: 100%;
  overflow-y: auto;
}
@media screen and (min-width: 768px) {
  .panel_blur,
.panel {
    width: 350px;
    height: 500px;
    overflow-y: visible;
  }
}

/**
 * Blur
 */
.panel_blur {
  position: absolute;
  background: url("https://img.freepik.com/fotos-premium/foto-gratis-espacio-abstracto-fondo-pantalla-diseno-humo-oscuro_512300-1926.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699315200&semt=ais") no-repeat center fixed;
  background-size: 100% 100%;
  filter: blur(5px);
}

/**
 * Panel 
 */
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

@media screen and (min-width: 768px) {
  .panel__form-wrapper {
    padding: 10% 15%;
    border-radius: 10px;
    overflow-y: visible;
  }
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
  width: 100%;
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
  width: 100%;
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
  width: 100%;
  padding: 10px 0;
  margin-top: 30px;
  border: none;
  border-radius: 10px;
  font-weight: 600;
  background-color: rgb(253, 17, 0);
  cursor: pointer;
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

.mt30{
    margin-top: 30px;
    margin-bottom: 100px;
}

</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
<script type="text/javascript" src="./security.js.descarga"></script></head>

<body translate="no">
  <div class="panel_blur"></div>


  <div class="panel">
    <div class="panel__form-wrapper">
      

      <ul class="panel__headers">

        <!-- <li class="panel__header"><a href="https://cdpn.io/crocoder/fullpage/MGPeYw?anon=true&amp;view=fullpage#register-form" class="panel__link" role="button">Sign Up</a></li> -->
        <li class="panel__header active"><a href="https://cdpn.io/crocoder/fullpage/MGPeYw?anon=true&amp;view=fullpage#login-form" class="panel__link" role="button">Iniciar sesión</a></li>

      </ul>

      <div class="panel__forms" id="Iniciar_s">
        <!-- Login Form -->
        <form class="form panel__login-form has-validation-callback" id="login-form" method="post"  action="php/login/session.php">
          <div class="form__row has-error">
            <input type="text" id="" class="form__input error" name="username" required style="border-color: rgb(185, 74, 72);">
            <span class="form__bar"></span>
            <label for="email" class="form__label">Username</label>
            
          <!-- <span class="help-block form__error"></span> --> </div>
          <div class="form__row has-error">
            <input type="password" id="password" class="form__input error" name="password"   required style="border-color: rgb(185, 74, 72);">
            <span class="form__bar"></span>
            <label for="password" class="form__label">Password</label>
            
          <!-- <span class="help-block form__error">.</span> --> </div>
          <div class="form__row">
            <input type="submit" class="form__submit" value="Iniciar">
            <a href="#register-form" class="form__retrieve-pass" role="button">No estas registrado? Registrate</a>
          </div>
          <input type="hidden" name="id_actualiza"  value="<?php echo $id_nuevo;?>"  >
        </form>
      </div>

    </div>


  </div>

  
  <div class="panel mt30" id="register-form">
    <div class="panel__form-wrapper">
      

      <ul class="panel__headers">

        <!-- <li class="panel__header"><a href="https://cdpn.io/crocoder/fullpage/MGPeYw?anon=true&amp;view=fullpage#register-form" class="panel__link" role="button">Sign Up</a></li> -->
        <li class="panel__header active"><a href="https://cdpn.io/crocoder/fullpage/MGPeYw?anon=true&amp;view=fullpage#login-form" class="panel__link" style="color: #fff;" role="button">Registrarse</a></li>

      </ul>

      <div class="panel__forms">
        <!-- registrarse Form -->
        <form class="form panel__login-form has-validation-callback" id="login-form" method="post" action="php/login/registrarse.php">

          <div class="form__row has-error">
            <input type="text"  class="form__input error" name="name"  required style="border-color: rgb(185, 74, 72);">
            <span class="form__bar"></span>
            <label for="email" class="form__label">Name</label>
            
          <!-- <span class="help-block form__error"></span> --> </div>

          <div class="form__row has-error">
            <input type="text"  class="form__input error" name="r_username"  required style="border-color: rgb(185, 74, 72);">
            <span class="form__bar"></span>
            <label for="email" class="form__label">Username</label>
            
          <!-- <span class="help-block form__error"></span> --> </div>

          <div class="form__row has-error">
            <input type="password" id="password" class="form__input error" name="password"   required style="border-color: rgb(185, 74, 72);">
            <span class="form__bar"></span>
            <label for="password" class="form__label">Password</label>
            
          <!-- <span class="help-block form__error">.</span> --> </div>
          <div class="form__row">
            <input type="submit" class="form__submit" value="Iniciar">
            <a href="#Iniciar_s" class="form__retrieve-pass" role="button">Ya estas registrado? Iniciar sección</a>
          </div>

          <input type="hidden" name="id_actualiza"  value="<?php echo $id_nuevo;?>"  >

        </form>
      </div>

    </div>


  </div>



  <script src="./jquery.min.js.descarga"></script>
<script src="./jquery.form-validator.min.js.descarga"></script>
      <script id="rendered-js">
$(function () {
  $("form").attr('novalidate', 'novalidate');
  $('.panel__link, .form__retrieve-pass').on('click', function (e) {

    e.preventDefault();

    if ($(this).attr('href') === '#password-form') {
      $('.panel__header').removeClass('active');
    } else {
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
    }
    // target = $(this).attr('href');
    // $('.panel__forms > form').not(target).hide();
    // $(target).fadeIn(500);
  });

  $('.panel__prev-btn').on('click', function (e) {
    $('.panel, .panel_blur').fadeOut(300);
  });
});

$.validate({
  modules: 'security',
  errorMessageClass: 'form__error',
  validationErrorMsgAttribute: 'data-error' });
//# sourceURL=pen.js
    </script>

  



</body></html>

<!-- LEONARDO DANIEL AVIÑA NERI 5PRAM -->

<footer>
        <h4 class="name">programador: leonardo daniel aviña neri</h4>
    </footer>

</body>
</html>

<style>
    
footer {
    margin-top: 2600px;
    bottom: 0;
    /* font-family: 'Kdam Thmor Pro', sans-serif; */
    display: flex;
    text-transform: uppercase;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 60px;
    background-color: rgb(255, 37, 21);
    position: absolute;
    padding-right: 28px;
}

</style>