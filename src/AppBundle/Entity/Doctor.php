<?php

namespace AppBundle\Entity;


class Doctor
{
	private $id;

	private $name;
	
    /**
     * @ORM\OneToMany(targetEntity="Patient", mappedBy="doctor")
	 * @var Patients[]
     */
    private $patients;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 * @return Hospital
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 * @return Hospital
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

}