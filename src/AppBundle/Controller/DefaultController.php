<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Number;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Pages:index.html.twig', []);
    }


    /**
     * @Route("/create/number", name="add_number")
     */
    public function addNumberAction()
    {
        $em = $this->getDoctrine()->getManager();

        foreach (range(0, 100) as $range) {
            $number = new Number();
            $number->setValue($range)->setVisible(true);
            $em->persist($number);
            if ($range % 10 == 0) $em->flush();
        }
        
        dump("Fini");
        die;

    }


}
