<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Form\AdvertType;
use OC\PlatformBundle\Form\AdvertEditType;

class AdvertController extends Controller {

    public function indexAction($page) {
        if ($page < 1) {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas.");
        }

        $nbPerPage = 2;
        // On récupère le repository
        $listAdverts = $this->getDoctrine()
                ->getManager()
                ->getRepository('OCPlatformBundle:Advert')
                ->getAdverts($page, $nbPerPage)
        ;
        $nbPages = ceil(count($listAdverts) / $nbPerPage);

        if ($page > $nbPages) {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas.");
        }

        return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
                    'listAdverts' => $listAdverts,
                    'nbPages' => $nbPages,
                    'page' => $page
        ));
    }

    public function viewAction($id) {
        $em = $this->getDoctrine()->getManager();

        // On récupère le repository
        $advert = $em->getRepository('OCPlatformBundle:Advert')
                ->find($id)
        ;

        // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
        // ou null si l'id $id  n'existe pas, d'où ce if :
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

        // On récupère la liste des candidatures de cette annonce
        $listApplications = $em
                ->getRepository('OCPlatformBundle:Application')
                ->findBy(array('advert' => $advert))
        ;

        // On récupère la liste des AdvertSkill
        $listAdvertSkills = $em
                ->getRepository('OCPlatformBundle:AdvertSkill')
                ->findBy(array('advert' => $advert))
        ;

        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
                    'advert' => $advert,
                    'listApplications' => $listApplications,
                    'listAdvertSkills' => $listAdvertSkills
        ));
    }

    public function menuAction($limit) {
        // On récupère le repository
        $listAdverts = $this->getDoctrine()
                ->getManager()
                ->getRepository('OCPlatformBundle:Advert')
                ->findBy(
                array(), array('date' => 'desc'), $limit, 0)
        ;

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
                    'listAdverts' => $listAdverts
        ));
    }

    public function addAction(Request $request) {
        $advert = new Advert();
        $form = $this->createForm(AdvertType::class, $advert);

        // Si la requête est en POST
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            // On enregistre notre objet $advert dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($advert);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
        }

        return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        if ($advert === null) {
            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

        $form = $this->createForm(AdvertEditType::class, $advert);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => $id));
        }

        return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
                    'advert' => $advert,
                    'form' => $form->createView(),
        ));
    }

    public function deleteAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($advert);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

            return $this->redirectToRoute('oc_platform_home');
        }

        return $this->render('OCPlatformBundle:Advert:delete.html.twig', array(
                    'advert' => $advert,
                    'form' => $form->createView(),
        ));
    }

}
