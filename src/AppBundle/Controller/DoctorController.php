<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DoctorController extends Controller
{
    /**
     * @Route("/patient/add")
     */
    public function addPatientAction(Request $request)
    {
		$doctorId = $request->get('doctorId');
		
		$doctorReporitory = new \AppBundle\Repository\DoctorRepository();
		$doctor = $doctorReporitory->selectById($doctorId);
		
		$patient = new \AppBundle\Entity\Patient();
		$patient->setName($request->get('name'));
		/* ... set other attributes ... */
		
		$patient->setDoctor($doctor);
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($patient);
		$em->flush();

		return new JsonResponse([
			'doctor' => $doctor,
			'patients' => $doctor->getPatients(),
			'msg' => 'Patient added to doctor',
		]);
    }
}