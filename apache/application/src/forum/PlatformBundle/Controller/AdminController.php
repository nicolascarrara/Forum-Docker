<?php
namespace forum\PlatformBundle\Controller;

use forum\PlatformBundle\Entity\membre;
use forum\PlatformBundle\Form\MembreType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/addmembre/", name="addmembre")
     */
    public function addMembreAction(Request $request)
    {
      $user= $this->getUser();
      if (isset($user)&&$user->getRole()=='ROLE_ADMIN') {
        $membre = new membre();
        $form = $this->createForm(MembreType::class, $membre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($membre, $membre->getPassword());
            $membre->setPassword($password);
            $membre->setRole('ROLE_USER');
            $avatar = $membre->getAvatar();
            $fileName = md5(uniqid()).'.'.$avatar->guessExtension();
            $avatar->move(
                $this->getParameter('avatars_directory'),
                $fileName
            );
            $membre->setAvatar($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();

            return $this->redirectToRoute('listemembre');
        }

        return $this->render('forumPlatformBundle::addmembre.html.twig', ['form' => $form->createView()]);
      }
      return $this->redirect("/");
    }

    /**
     * @Route("/listemembre/", name="listemembre")
     */
    public function listeMembreAction(Request $request)
    {
      $user= $this->getUser();
      if (isset($user)&&$user->getRole()=='ROLE_ADMIN') {
      $listemembre = $this->getDoctrine()->getRepository('forumPlatformBundle:membre')->findAll();;
      return $this->render('forumPlatformBundle::listemembre.html.twig', array(
      'membres' => $listemembre));
    }
    return $this->redirect("/");
  }
}
