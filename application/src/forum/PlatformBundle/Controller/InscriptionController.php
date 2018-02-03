<?php
namespace forum\PlatformBundle\Controller;

use forum\PlatformBundle\Entity\membre;
use forum\PlatformBundle\Form\MembreType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InscriptionController extends Controller
{
    /**
     * @Route("/inscription/", name="inscription")
     */
    public function inscriptionAction(Request $request)
    {
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

            return $this->redirectToRoute('login');
        }

        return $this->render('forumPlatformBundle::inscription.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}
