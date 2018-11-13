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

  public function __construct($idUsuariox= null, $fullnamex, $nicknamex, $countryx, $emailx, $passwordx, $avatarx, $activox=null)
  {
    if ($idUsuariox==null) {
      $this->password= password_hash($passwordx, PASSWORD_DEFAULT);
    }else {
      $this->password=$passwordx;
    }

    $this->idUsuario=$idUsuariox;
    $this->fullname=$fullnamex;
    $this->nickname=$nicknamex;
    $this->country=$countryx;
    $this->email=$emailx;
    $this->avatar=$avatarx;
    $this->activo=$activox;
  }

  public function getNombre()
  {
    return $this->fullname;
  }
  public function getNickname()
  {
    return $this->nickname;
  }
  public function getCountry()
  {
    return $this->country;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function getPassword()
  {
    return $this->password;
  }
  public function getAvatar()
  {
    return $this->avatar;
  }

}
