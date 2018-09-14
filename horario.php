<?php 
	class Horario{
		
		private $id;
		private $dia;
		private $horaInicio;
		private $horaFin;


	/**
	 * Class Constructor
	 * @param    $id   
	 * @param    $dia   
	 * @param    $horaInicio   
	 * @param    $horaFin   
	 */
	public function __construct($id, $dia, $horaInicio, $horaFin)
	{
		$this->id = $id;
		$this->dia = $dia;
		$this->horaInicio = $horaInicio;
		$this->horaFin = $horaFin;
	}
    
	
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getDia()
    {
        return $this->dia;
    }
    
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    public function getHoraFin()
    {
        return $this->horaFin;
    }

    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }
}
 ?>