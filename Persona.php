<?php 

	class Persona{

		private $id;
		private $nombre; 
		private $apeliido; 
		private $fechaNac; 
		private $edad; 
		private $sexo, 
		private $dni, 
		private $telPrim;

		
	}

	public function __construct($id, $nombre, $apellido, $fechaNac, $edad, $sexo, $dni, $telPrim){

		$this->id = $id;
		$this->nombre = $nombre; 
		$this->apeliido = $apeliido; 
		$this->fechaNac = $fechaNac;
		$this->edad = $edad;
		$this->sexo = $sexo;
		$this->dni = $dni; 
		$this->telPrim = $telPrim;
	}
    
	
    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApeliido()
    {
        return $this->apeliido;
    }

    public function setApeliido($apeliido)
    {
        $this->apeliido = $apeliido;

        return $this;
    }

    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getSexo,()
    {
        return $this->sexo,;
    }

    public function setSexo,($sexo,)
    {
        $this->sexo, = $sexo,;

        return $this;
    }

    public function getDni,()
    {
        return $this->dni,;
    }

    public function setDni,($dni,)
    {
        $this->dni, = $dni,;

        return $this;
    }

    public function getTelPrim()
    {
        return $this->telPrim;
    }

    public function setTelPrim($telPrim)
    {
        $this->telPrim = $telPrim;

        return $this;
    }


}


 ?>