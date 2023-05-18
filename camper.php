
<?php
class Camper
{
    //1. Atributos con modificadores de acceso
    // private, public and protected
     private $nombre ;
     private $email ;
     private $celular ;

    //2. constructor (método magico )
/*     public function __construct($nombre,$email,$celular) //ideal para inicializar valores de propiedades 
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->celular = $celular;
    } */
    //3.  metodos (Getters and setter)
    //Metodo Getter 
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCelular()
    {
        return $this->celular;
    }

    // get--> obtener valores de atributos
    // get--> modificar valores de atributos

    //Metodos Setters

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }


}
//Instancia de la clase (objeto) --> variable ed instancia
//"Edwing","edwingstiven20@gmail.com",3167069665
$camper = new Camper();
$camper-> setNombre("Negro");
$camper-> setEmail("negro@gmail.com");
$camper-> setCelular("32046651420");

echo $camper-> getNombre() . "<br>";
echo $camper-> getEmail() . "<br>";
echo $camper-> getCelular();

?>