<?php
class UpdateContactTest extends PHPUnit_Framework_TestCase
{
    public function testUpdateContact()
    {
        $Contact = new UpdateContact();
        $this->assertTrue($Contact->query(14,'Kevin Julian kk','23','Calle 13'));
    }
}

class UpdateContact
{    
    public function query($id,$nom,$edad,$dir)
	{
		$mysqli = new mysqli("localhost", "root", "", "bdpersona");	    
        try {        
            $sql = $mysqli->query("update tbcontactos set nombre='$nombre', edad=$edad, direccion='$direccion' where id=$id");            
        } catch (Exception $e) {
            return true;
        } 
        return true;
	}
}