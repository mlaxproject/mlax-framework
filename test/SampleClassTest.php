<?php  
class SampleClassTest extends PHPUnit_Framework_TestCase
{
	public function testIsThereAnySyntaxError()
	{
		$var = new mlax\SampleClass;
		$this->assertTrue(is_object($var));
		unset($var);
	}

	public function testMethod()
	{
		$var = new mlax\SampleClass;
		$this->assertTrue($var->method('sample') == 'sample');
		unset($var);
	}
}
?>