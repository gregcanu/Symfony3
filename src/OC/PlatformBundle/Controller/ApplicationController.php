<?php


namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationController extends Controller {
    
    public function indexAction() {
        $repository = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Application');
        
        $listApplications = $repository->getApplicationsWithAdvert(5);
        
        return $this->render('OCPlatformBundle:Application:index.html.twig', array(
                    'listApplications' => $listApplications
        ));
    }
}
