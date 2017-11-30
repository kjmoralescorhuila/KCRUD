<?php
class ReadContactTest extends PHPUnit_Framework_TestCase
{
    public function testReadContact()
    {
        $Contact = new ReadContact();
        $this->assertTrue($Contact->query());
    }

    public function testIfExistContacts()
    {
        $Contact = new ReadContact();
        $this->assertNotEmpty($Contact->contacts());
    }
}

class ReadContact
{    
    public function query()
	{
		$mysqli = new mysqli("localhost", "root", "", "bdpersona");	    
        try {
            $consulta= "SELECT * FROM tbcontactos";
			if ($resultado = $mysqli->query($consulta)) return true;	
        } catch (Exception $e) {
            return false;
        } 
        return true;
    }
    
    public function contacts()
    {
        $mysqli = new mysqli("localhost", "root", "", "bdpersona");	    
        $consulta= "SELECT * FROM tbcontactos";
        $resultado = $mysqli->query($consulta);
        $fila = $resultado->fetch_row();
        return $fila;
    }
}

