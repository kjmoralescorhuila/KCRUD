<?php
class InsertContactTest extends PHPUnit_Framework_TestCase
{
    public function testInsertContact()
    {
        $Contact = new InsertContact();
        $this->assertTrue($Contact->query('Kevin Julian','22','Calle 13'));
    }
}

class InsertContact
{    
    public function query($nom,$edad,$dir)
	{
		$mysqli = new mysqli("localhost", "root", "", "bdpersona");	    
        try {
            $sql = $mysqli->query(
                "insert into tbcontactos (nombre, edad, direccion) 
                values ('$nom', $edad, '$dir') "
            );		
        } catch (Exception $e) {
            return false;
        } 
        return true;
	}
}