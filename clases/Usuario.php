<?php

class Usuario
{
  protected $idUsuario;
  protected $name;
  protected $nickname;
  protected $country;
  protected $email;
  protected $password;
  protected $avatar;
  protected $active;

  public function __construct($idUsuariox= null, $namex, $nicknamex, $countryx, $emailx, $passwordx, $avatarx, $activex=null)
  {
    if ($idUsuariox==null) {
      $this->password= password_hash($passwordx, PASSWORD_DEFAULT);
    }else {
      $this->password=$passwordx;
    }

    $this->idUsuario=$idUsuariox;
    $this->name=$namex;
    $this->nickname=$nicknamex;
    $this->country=$countryx;
    $this->email=$emailx;
    $this->avatar=$avatarx;
    $this->active=$activex;
  }

  public function getNombre()
  {
    return $this->name;
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
