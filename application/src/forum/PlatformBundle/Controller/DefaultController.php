<?php

namespace forum\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use forum\PlatformBundle\Entity\topic;
use forum\PlatformBundle\Entity\section;
use forum\PlatformBundle\Entity\membre;
use forum\PlatformBundle\Entity\message;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $categorie = $this->getDoctrine()->getRepository('forumPlatformBundle:categorie')->findAll();
        $listesection = $this->getDoctrine()->getRepository('forumPlatformBundle:section')->findAll();
        return $this->render('forumPlatformBundle:Default:index.html.twig', array(
        'sections' => $listesection,'categories'=>$categorie));
    }
    /**
     * @Route("/membre/{id}")
     */
    public function PageMembre($id)
    {
        $membre=$this->getDoctrine()->getRepository('forumPlatformBundle:membre')->find($id);
        return $this->render('forumPlatformBundle::membre.html.twig', array(
      'membre' => $membre));
    }
    /**
     * @Route("/section/{id}/")
     */
    public function ListeSection($id)
    {
        $section=$this->getDoctrine()->getRepository('forumPlatformBundle:section')->find($id);
        $sujets=$this->getDoctrine()->getRepository('forumPlatformBundle:topic')->findBy(array('section' => $id),array('creation' => 'desc'));
        return $this->render('forumPlatformBundle::listesujet.html.twig', array(
      'sujets' => $sujets,'section'=>$section));
    }
    /**
     * @Route("/section/{id}/newtopic")
     */
    public function NouveauSujet($id, Request $request)
    {
      $user= $this->getUser();
      if (isset($user)) {
      $sujet= new topic();
      $sujet->setMembre( $this->getUser());
      $sujet->setSection($id);
      $formBuilder = $this->createFormBuilder($sujet);
      $formBuilder
        ->add('titre',       TextType::class,array('label'=>'Titre du sujet'))
        ->add('section',      HiddenType::class)
        ->add('contenu', TextareaType::class,array('label'=>'Votre message'))
        ->add('save', SubmitType::class, array('label' => 'Créer sujet'))
        ;
        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $valid = $this->getDoctrine()->getManager();
            $valid->persist($sujet);
            $valid->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Sujet crée.');
            return $this->redirect("/section/$id");
          }

      return $this->render('forumPlatformBundle::newtopic.html.twig', array(
      'form' => $form->createView(),
    ));}
    return $this->redirect("/section/$id/");
    }
    /**
     * @Route("/newsection/{id}")
     */
    public function NouvelleSection($id,Request $request)
    {
      $user= $this->getUser();
      if (isset($user)&&$user->getRole()=='ROLE_ADMIN') {

      $section= new section();
      $section->setDroit(0);
      $cat=$this->getDoctrine()->getRepository('forumPlatformBundle:categorie')->find($id);
      $section->setCategorie($cat);
      $formBuilder = $this->createFormBuilder($section);
      $formBuilder
        ->add('nom',       TextType::class)
        ->add('save', SubmitType::class, array('label' => 'Créer sujet'))
        ;
        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $valid = $this->getDoctrine()->getManager();
            $valid->persist($section);
            $valid->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Section créée.');
            return $this->redirect("/");
          }
          return $this->render('forumPlatformBundle::newsection.html.twig', array('form' => $form->createView()));
        }
        return $this->redirect("/");
      }
    /**
     * @Route("/section/{id}/topic/{topic}/")
     */
    public function Sujet($id,$topic)
    {

        $sujet=$this->getDoctrine()->getRepository('forumPlatformBundle:topic')->find($topic);
        $messages=$this->getDoctrine()->getRepository('forumPlatformBundle:message')->findBy(array('topic' => $topic),array('creation' => 'asc'));
        return $this->render('forumPlatformBundle::topic.html.twig', array(
      'sujet' => $sujet,'messages'=>$messages));
    }
    /**
     * @Route("/section/{id}/topic/{topic}/newmessage")
     */
    public function Message($id,$topic, Request $request)
    {
      $user= $this->getUser();
      if (isset($user)) {
      $message= new message();
      $message->setMembre( $this->getUser());
      $message->setTopic($topic);
      $formBuilder = $this->createFormBuilder($message);
      $formBuilder
        ->add('topic',      HiddenType::class)
        ->add('contenu', TextareaType::class)
        ->add('save', SubmitType::class, array('label' => 'Répondre'))
        ;
        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $valid = $this->getDoctrine()->getManager();
            $valid->persist($message);
            $valid->flush();
            $request->getSession()->getFlashBag()->add('notice', 'réponse envoyée.');
            return $this->redirect("/section/$id/topic/$topic");
          }

      return $this->render('forumPlatformBundle::newmessage.html.twig', array(
      'form' => $form->createView(),
    ));}
    return $this->redirect("/section/$id/topic/$topic");
    }
    /**
     * @Route("/section/{id}/delete/{topic}/")
     */
    public function EffacerSujet($id,$topic)
    {

      $user= $this->getUser();
      if (isset($user)&&$user->getRole()=='ROLE_ADMIN') {

          $em = $this->getDoctrine()->getManager();
              $entity = $em->getRepository('forumPlatformBundle:topic')->findOneBy(array('id' => $topic));

              if ($entity != null){
                  $em->remove($entity);
              }
          $messages=$em->getRepository('forumPlatformBundle:message')->findBy(array('topic' => $topic));
          foreach ($messages as $message) {
            $em->remove($message);
          }
          if($entity!=null){
            $em->flush();
          }

        }
        return $this->redirect("/section/$id");

    }
    /**
     * @Route("/section/{id}/topic/{topic}/delete/{message}")
     */
    public function EffacerMessage($id,$topic,$message)
    {

      $user= $this->getUser();
      if (isset($user)&&$user->getRole()=='ROLE_ADMIN') {

        $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('forumPlatformBundle:message')->findOneBy(array('id' => $message));

            if ($entity != null){
                $em->remove($entity);
                $em->flush();

          }
        }
        return $this->redirect("/section/$id/topic/$topic");
    }
    /**
     * @Route("/section/{id}/export")
     */
    public function ExportSection($id)
    {
      $user= $this->getUser();
      if (isset($user)&&$user->getRole()=='ROLE_ADMIN') {
      $fields = array('d.id', 'd.name', 'o.id');
      $result = $this->getDoctrine()
               ->getRepository('forumPlatformBundle:topic')
               ->createQueryBuilder('e')
               ->select('e')
               ->getQuery()
               ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
      return new JsonResponse($result);

  }
  return $this->redirect("/section/$id");
}
}
