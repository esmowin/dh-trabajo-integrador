<?php

  class Auth
  {

  function login($username, $password){
    if () {
      // el usuario existe
      return true;
    }
    return false;//el usuario no existe o la contrasena es incorrecta
  }
    function recuerdame(){
      $_COOKIE
      $_SESSION

    public function __construct()// -crear constructor con session_start() y chequear que si esta la cookie de logueado, usarla como session
    {
      if (isset($_COOKIE["email"])) {
        session_start();
        $_SESSION["email"] = $_COOKIE["email"];
      }

    }
    public function loguear($email)// variable session con el email del parametro
    {
      session_start();
      $_SESSION["email"] = $email;

    }
    public function estaLogueado()// fijarse si esta seteado  la variable de sesion
    {
      return isset($_SESSION["email"]);


    }
    public function usuarioLogueado($db=new BD)// que recibe una db. Preguntar si estaLogueado y devolver el objeto usuario con el traerPorEmail del db usando el email de sesion, sino devolver NULL
    {
      if ($this->estaLogueado()) {
        return $db->traerPorEmail($_SESSION["email"]);
      }else {
        return NULL;
      }
    }
    public function logout()// para session y cookies
    {
      setcookie("email", null, time()-1);
      session_destroy();
    }
    public function recordarme($email)// que recibe un email y setea la cookie
    {
      setcookie("email", $email);
    }

  }
