<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Account;
use AppBundle\Form\AccountType;
use Symfony\Component\Security\Acl\Exception\Exception;

/**
 * Account controller.
 *
 * @Route("/account")
 */
class AccountController extends Controller
{
    /**
     * Lists all Account entities.
     *
     * @Route("/", name="account_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accounts = $em->getRepository('AppBundle:Account')->findAll();

        return $this->render('account/index.html.twig', array(
            'accounts' => $accounts,
        ));
    }

    /**
     * Creates a new Account entity.
     *
     * @Route("/new", name="account_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        //get the id of current user
        $userId=$this->getUser()->getId();


        $account = new Account();
        $form = $this->createForm('AppBundle\Form\AccountType', $account);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            //get the current user account
            $userAccount=$em->getRepository('AppBundle:Account')->find($userId);
            if(!$userAccount){
                //get image path and save them-profile picture
                $profile_picture=$account->getProfilePic();
                $fileName = md5(uniqid()).'.'.$profile_picture->guessExtension();
                $destination = $this->container->getParameter('kernel.root_dir').'/../web/uploads/profile_pics';
                $profile_picture->move($destination, $fileName);
                //end here
                $cover_picture=$account->getCoverPic();
                $fileName1 = md5(uniqid()).'.'.$cover_picture->guessExtension();
                $destination1 = $this->container->getParameter('kernel.root_dir').'/../web/uploads/cover_pics';
                $cover_picture->move($destination1, $fileName1);
                //save the cover photo
                $account->setUserId($userId);
                $account->setProfilePic($fileName);
                $account->setCoverPic($fileName1);

                //end here
                $em->persist($account);
                $em->flush();
            }
            else{
                //get image path and save them-profile picture
                $profile_picture=$account->getProfilePic();
                $fileName = md5(uniqid()).'.'.$profile_picture->guessExtension();
                $destination = $this->container->getParameter('kernel.root_dir').'/../web/uploads/profile_pics';
                $profile_picture->move($destination, $fileName);
                //end here
                $cover_picture=$account->getCoverPic();
                $fileName1 = md5(uniqid()).'.'.$cover_picture->guessExtension();
                $fileName1=$fileName1."cvr";
                $destination1 = $this->container->getParameter('kernel.root_dir').'/../web/uploads/cover_pics';
                $cover_picture->move($destination1, $fileName1);

                $userAccount->setProfilePic($fileName);
                $userAccount->setCoverPic($fileName1);
                $em->flush();
            }


            return $this->redirectToRoute('account_show', array('id' => $account->getUserId()));
        }

        return $this->render('account/new.html.twig', array(
            'account' => $account,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/myAccount",name="my_account")
     */

    public function myAccountAction(){
        //get the current user's id
        $businessName="SORRY! No Business Name available!!";
        $description="SORRY! No Description available!!";
        $profilePic="SORRY! No profile Picture available!!";
        $coverPic="SORRY! No Cover Photo available!!";


        $user = $this->getUser();
        $currentUserId=$user->getId();
        try{
            $account = $this->getDoctrine()
                ->getRepository('AppBundle:Account')
                ->find($currentUserId);
            $businessName=$account->getBusinessName();
            $description=$account->getDescription();
            $profilePic=$account->getProfilePic();
            $coverPic=$account->getCoverPic();
        }catch(Exception $e){

        }

        return $this->render('default/myAccount.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'), 'data'=>array('business_name'=>$businessName,'description'=>$description,'profile_picture'=>$profilePic,'cover_picture'=>$coverPic),
        ));


    }

    /**
     * Finds and displays a Account entity.
     *
     * @Route("/{id}", name="account_show")
     * @Method("GET")
     */
    public function showAction(Account $account)
    {
        $deleteForm = $this->createDeleteForm($account);

        return $this->render('account/show.html.twig', array(
            'account' => $account,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Account entity.
     *
     * @Route("/{id}/edit", name="account_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Account $account)
    {
        $deleteForm = $this->createDeleteForm($account);
        $editForm = $this->createForm('AppBundle\Form\AccountType', $account);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($account);
            $em->flush();

            return $this->redirectToRoute('account_edit', array('id' => $account->getUserId()));
        }

        return $this->render('account/edit.html.twig', array(
            'account' => $account,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Account entity.
     *
     * @Route("/{id}", name="account_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Account $account)
    {
        $form = $this->createDeleteForm($account);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($account);
            $em->flush();
        }

        return $this->redirectToRoute('account_index');
    }

    /**
     * Creates a form to delete a Account entity.
     *
     * @param Account $account The Account entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Account $account)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('account_delete', array('id' => $account->getUserId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
