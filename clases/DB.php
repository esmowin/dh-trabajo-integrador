<?php

class DB
{
  private $dsn = "mysql:host=localhost; dbname=smartpet; charset=utf8mb4; port=3306";
  private $usuario = "root";
  private $pass = "";
  private $opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
  private $conn;

  function __construct()
  {
    try {
      $this->conn=new PDO($this->dsn, $this->usuario, $this->pass,$this->opt);
    } catch (Exception $e) {
      echo "Error en la conexion a la base de datos.";
    }
  }

  public function guardarUsuario(Usuario $usuario){

    //$stmt = $this->conn->prepare("INSERT INTO usuarios (fullname, nickname, country, email, password, avatar, activo) VALUES (:fullname, :nickname, :country, :email, :password, :avatar, 1)");
    $stmt = $this->conn->prepare("Insert into usuarios values(default, :fullname, :nickname, :country, :email, :password, :avatar, 1)");

    $stmt->bindValue(":fullname",$usuario->getNombre());
    $stmt->bindValue(":nickname",$usuario->getNickname());
    $stmt->bindValue(":country",$usuario->getCountry());
    $stmt->bindValue(":email",$usuario->getEmail());
    $stmt->bindValue(":password",$usuario->getPassword());
    $stmt->bindValue(":avatar",$usuario->getAvatar());

    $stmt->execute();

  //  $idUsuario = $this->conn->lastInsertId();
  //  $usuario->setId($idUsuario);


    return $usuario;
  }

  public function traerTodo(){
    $stmt = $this->conn->prepare("SELECT * FROM usuarios");

    $stmt->execute();

    $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($resultados as $cadaUsuario) {
      $usuarios[] = new Usuario(
        $cadaUsuario->idUsuario,
        $cadaUsuario->fullname,
        $cadaUsuario->nickname,
        $cadaUsuario->country,
        $cadaUsuario->email,
        $cadaUsuario->password,
        $cadaUsuario->avatar,
        $cadaUsuario->activo);
    }
    return $usuarios;
  }

  public function traerPorEmail($email) {
    $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = :email" );

    $stmt->bindValue(":email",$email);

    $stmt-> execute();

    $resultados = $stmt->fetch(PDO::FETCH_ASSOC);
  
    if ($resultados){
      return new Usuario(
        $resultados['idUsuario'],
        $resultados['fullname'],
        $resultados['nickname'],
        $resultados['country'],
        $resultados['email'],
        $resultados['password'],
        $resultados['avatar'],
        $resultados['activo']);

    }else{
      return null;
    }
  }

  public function traerUsuario($user, $pass)
  {
    $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE user = :user AND password = :pass" );

    $stmt->bindValue(":email", $email, PDO::PARAM_STR);
    $stmt->bindValue(":pass", $pass, PDO::PARAM_STR);

    $stmt-> execute();

    $resultados = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($resultados){
      return new Usuario(
        $resultados['idUsuario'],
        $resultados['fullname'],
        $resultados['nickname'],
        $resultados['country'],
        $resultados['email'],
        $resultados['password'],
        $resultados['avatar'],
        $resultados['activo']);

    }else{
      return false;
    }
  }
}
