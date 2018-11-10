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

  public function __construct($idUsuariox, $fullnamex, $nicknamex, $countryx, $emailx, $passwordx, $avatarx, $activox)
  {
    $this->$idUsuario=$idUsuariox;
    $this->$fullname=$fullnamex;
    $this->$nickname=$nicknamex;
    $this->$country=$countryx;
    $this->$email=$emailx;
    $this->$password=$passwordx;
    $this->$avatar=$avatarx;
    $this->$activo=$activox;
  }

  public function getNombre()
  {
    return $this->$fullname;
  }
  public function getNickname()
  {
    return $this->$nickname;
  }
  public function getCountry()
  {
    return $this->$country;
  }
  public function getEmail()
  {
    return $this->$email;
  }
  public function getPassword()
  {
    return $this->$password;
  }
  public function getAvatar()
  {
    return $this->$avatar;
  }

}
