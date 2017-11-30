<?php
class DeleteContactTest extends PHPUnit_Framework_TestCase
{
    public function testDeleteContact()
    {
        $Contact = new DeleteContact();
        $this->assertTrue($Contact->query(13));
    }
}

class DeleteContact
{    
    public function query($id)
	{
		$mysqli = new mysqli("localhost", "root", "", "bdpersona");	    
        try {
            $sql = $mysqli->query("delete from tbcontactos where id='$id'");		
        } catch (Exception $e) {
            return false;
        } 
        return true;
	}
}