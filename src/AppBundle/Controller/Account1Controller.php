<?php
/**
 * Created by PhpStorm.
 * User: Nuwan Rathnayaka
 * Date: 6/11/2016
 * Time: 11:32 AM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountController extends Controller
{
    /**
     * @Route("/account" , name="account")
     */
    public function accountAction(Request $request){
        //get the current user's id
        $user = $this->getUser();
        $currentUserId=$user->getId();

        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Post')
            ->find();
    }

}