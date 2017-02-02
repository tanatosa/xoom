<?php

namespace AppBundle\Tests\Utility;


class PatientTest extends \PHPUnit_Framework_TestCase
{
    public function testPatient()
    {
		$patient = new \AppBundle\Entity\Patient;
		
		$value = '1';
		$patient->setId($value);
		$this->assertEquals($patient->getId(), $value);
		
		$value = 'test';
		$patient->setName($value);
		$this->assertEquals($patient->getName(), $value);
		
		/* ... */
    }
}