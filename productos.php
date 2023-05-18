<?php

class Productos
{
    private $televisor ;
    private $mouse ;
    private $pc ;
    private $teclado;
    private $nevera;
    private $olla ;
    private $pantalla ;


public function getTelevisor()
{
    return $this->televisor;
}
public function getMouse()
{
    return $this->mouse;
}
public function getPc()
{
    return $this->pc;
}
public function getTeclado()
{
    return $this->teclado;
}
public function getNevera()
{
    return $this->nevera;
    
}
public function getOLla()
{
    return $this->olla;
}
public function getPantalla()
{
    return $this->pantalla;
}

//set

    public function setTelevisor($televisor){
        $this->televisor = $televisor;
    }
    public function setMouse($mouse){
        $this->mouse = $mouse;
    }
    public function setPc($pc){
        $this->pc = $pc;
    }

    public function setTeclado($teclado){
        $this->teclado = $teclado;
    }
    public function setNevera($nevera){
        $this->nevera = $nevera;
    }
    public function setOlla($olla){
        $this->olla = $olla;
    }
    public function setPantalla($pantalla){
        $this->pantalla = $pantalla;
    }
  
}

$productos = new Productos();
$productos-> setTelevisor("LG");
$productos-> setMouse("Compumax");
$productos-> setPc("Compumax");
$productos-> setNevera("Mercado");
$productos-> setOlla("Imusa");
$productos-> setPantalla("Compumax");


echo $productos-> getTelevisor() . "<br>";
echo $productos-> getMouse() . "<br>";
echo $productos-> getPc() . "<br>";
echo $productos-> getTeclado() ;
echo $productos-> getNevera() . "<br>";
echo $productos-> getOLla(). "<br>";
echo $productos-> getPantalla() . "<br>";

$productos = new Productos();
$productos-> setTelevisor("LU");
$productos-> setMouse("Samsung");
$productos-> setPc("Samsung");
$productos-> setNevera("Mercado");
$productos-> setOlla("Imusa");
$productos-> setPantalla("Compumax");


echo $productos-> getTelevisor() . "<br>";
echo $productos-> getMouse() . "<br>";
echo $productos-> getPc() . "<br>";
echo $productos-> getTeclado() ;
echo $productos-> getNevera() . "<br>";
echo $productos-> getOLla(). "<br>";
echo $productos-> getPantalla() . "<br>";

$productos = new Productos();
$productos-> setTelevisor("LG");
$productos-> setMouse("Compumax");
$productos-> setPc("Compumax");
$productos-> setNevera("Mercado");
$productos-> setOlla("Imusa");
$productos-> setPantalla("Compumax");


echo $productos-> getTelevisor() . "<br>";
echo $productos-> getMouse() . "<br>";
echo $productos-> getPc() . "<br>";
echo $productos-> getTeclado() ;
echo $productos-> getNevera() . "<br>";
echo $productos-> getOLla(). "<br>";
echo $productos-> getPantalla() . "<br>";


$productos = new Productos();
$productos-> setTelevisor("LG");
$productos-> setMouse("Compumax");
$productos-> setPc("Compumax");
$productos-> setNevera("Mercado");
$productos-> setOlla("Imusa");
$productos-> setPantalla("Compumax");


echo $productos-> getTelevisor() . "<br>";
echo $productos-> getMouse() . "<br>";
echo $productos-> getPc() . "<br>";
echo $productos-> getTeclado() ;
echo $productos-> getNevera() . "<br>";
echo $productos-> getOLla(). "<br>";
echo $productos-> getPantalla() . "<br>";




?>