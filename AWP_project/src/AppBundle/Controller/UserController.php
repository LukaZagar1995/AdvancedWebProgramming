<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class UserController
 * @package AppBundle\Controller
 * @Route("/user", name="user_")
 */
class UserController extends Controller
{
    /**
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/list", name="list")
     */
    public function listAction(EntityManagerInterface $entityManager)
    {
        $users = $entityManager->getRepository('AppBundle:User')->findAll();
        $currentUser = $this->getUser();

        return $this->render('user/list.html.twig', [
            'users' => $users,
            'currentUser' => $currentUser
        ]);
    }

    /**
     * @Route("/create", name="create")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user, array(
            'requiredPassword' => true,
            'user' => $user
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $user->getPassword();
            $encodedPassword = $encoder->encodePassword($user, $plainPassword);
            $user->setPassword($encodedPassword);
            $user->setEnabled(true);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/create.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param UserPasswordEncoderInterface $encoder
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/edit/{id}", name="edit")
     */

    public function editAction(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder, User $user)
    {
        $oldPassword = $user->getPassword();
        $form = $this->createForm(UserType::class, $user, array(
            'requiredPassword' => false,
            'user' => $user
        ));

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $form["password"]->getData();
            if ($plainPassword != null) {
                $encodedPassword = $encoder->encodePassword($user, $plainPassword);
                $user->setPassword($encodedPassword);
            }
            else{
                $user->setPassword($oldPassword);
            }
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/create.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }

    /**
     * @param EntityManagerInterface $entityManager
     * @param User $user
     * @Route ("/delete/{id}", name="delete")
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function deleteAction(User $user, EntityManagerInterface $entityManager)
    {
        if($user === $this->getUser())
        {
            return $this->redirectToRoute('user_list');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_list');
    }

    /**
     * @param EntityManagerInterface $entityManager
     * @param User $user
     * @Route ("/change/{id}", name="change")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function changeStateAction(EntityManagerInterface $entityManager, User $user)
    {
        $user->setEnabled(!$user->isEnabled());

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_list');
    }
}
