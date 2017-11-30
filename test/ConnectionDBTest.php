<?php

class ConnetionDBTest extends PHPUnit_Framework_TestCase
{
    public function testConnection()
    {
        $con = new Connection;
        $this->assertInstanceOf('MySQLi', $con->connection());
    }
}

class Connection
{
    public function connection()
	{
		$mysqli = new mysqli("localhost", "root", "", "bdpersona") or die ("Error de conexion porque: ".$mysqli->connect_errno);
		
		if (mysqli_connect_errno()) 
		{
	    	printf("Falló la conexión: %s\n", mysqli_connect_error());
	   		exit();
		}
		return $mysqli;
	}
}