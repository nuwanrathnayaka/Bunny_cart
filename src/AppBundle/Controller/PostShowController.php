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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostShowController extends Controller
{
    /**
     * @Route("/food",name="foods")
     */
    public function foodAction(Request $request){
        $em=$this->getDoctrine()->getEntityManager();
        $connection=$em->getConnection();
        $statement = $connection->prepare("SELECT id FROM posts WHERE category = :id");
        $statement->bindValue('id', "foods");
        $statement->execute();
        $results = $statement->fetchAll();
        var_dump($results);
        $output=array();
        foreach ($results as $value) {
            $post=$this->getDoctrine()
                ->getRepository('AppBundle:Post')
                ->find($value);
            $html='<div class="col-md-4 about-left"><figure class="effect-bubba">
						<img class="img-responsive" src="/uploads/images/'.$post->getImage().'" alt="this is a test!"/>
						<figcaption>
							<h2>'.$post->getTitle().'</h2>
							<p>'.$post->getDescription().'</p>
						</figcaption>
					</figure></div>';
            array_push($output,$html);
        }
        /*
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
        */
        return $this->render('default/makePost.html.twig',array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'), 'data'=>$output
        )
        );
    }

}