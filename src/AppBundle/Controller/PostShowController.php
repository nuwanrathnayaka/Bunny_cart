<?php
/**
 * Created by PhpStorm.
 * User: Nuwan Rathnayaka
 * Date: 6/15/2016
 * Time: 6:09 PM
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Post;
use AppBundle\Form\PostType;
use AppBundle\Form\User;
use Symfony\Component\HttpFoundation\Response;

class PostShowController extends Controller
{
    /**
     * @Route("/food",name="foods")
     */
    public function foodAction(Request $request){
        $productId=mt_rand(7,11);
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Post')
            ->find($productId);
        $html='<div class="col-md-4 about-left"><figure class="effect-bubba">
						<img class="img-responsive" src="/uploads/images/'.$product->getImage().'" alt="this is a test!"/>
						<figcaption>
							<h2>'.$product->getTitle().'</h2>
							<p>'.$product->getDescription().'</p>
						</figcaption>
					</figure></div>';
        //$name=<<<HTML  HTML;
        $response = new Response(json_encode(array('html' => $html)));
        return $response;
    }

}