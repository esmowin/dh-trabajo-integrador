<?php


class Usuario
{
  protected $idUsuario;
  protected $fullname;
  protected $nickname;
  protected $country;
  protected $email;
  protected $password;
  protected $avatar;
  protected $activo;

  function __construct($idUsuariox, $fullnamex, $nicknamex, $countryx, $emailx, $passwordx, $avatarx, $activox)
  {
    $this->$idUsuario=$idUsuario;
    $this->$fullname=$fullname;
    $this->$nickname=$nickname;
    $this->$country=$country;
    $this->$email=$email;
    $this->$password=$password;
    $this->$avatar=$avatar;
    $this->$activo=$activo;

  }
}
