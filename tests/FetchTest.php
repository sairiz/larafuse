<?php

use Saiffil\Larafuse\Data\Fetch;

class FetchTest extends TestCase {

	public function testGetTablesReturnArray()
	{
		$data = Fetch::getTables();

		$this->assertInternalType('array', $data);
		$this->assertEquals(57, count($data));
	}

	public function testGetColumnsReturnArray()
	{
		$data = Fetch::getColumns();

		$this->assertInternalType('array', $data);
		$this->assertEquals(814, count($data));
	}

	public function testGetColumnsWithCustomReturnArray()
	{
		$data = Fetch::getColumnsWithCustom();

		$this->assertInternalType('array', $data);
		$this->assertGreaterThan(count($data), Fetch::getColumns());
	}
/*
	public function testReturnFieldForQuery()
	{
		$inst = new Fetch;

		$data = $inst->returnFields('Contact');

		$this->assertInternalType('array',$data);
	} */
}