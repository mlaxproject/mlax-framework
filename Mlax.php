<?php  
class Mlax
{
	public function __construct()
	{
		echo 'Mlax Framework';
	}
}

spl_autoload_register(['Mlax', 'autoload'], true, true);
?>