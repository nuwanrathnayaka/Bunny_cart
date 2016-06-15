<?php
/**
 * Created by PhpStorm.
 * User: Nuwan Rathnayaka
 * Date: 5/24/2016
 * Time: 8:32 AM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\PostType;

class PostController extends Controller
{
    /**
     * @Route("/post/", name="Create_post")
     */
    public function createPost(Request $request){
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $post->getImage();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/images';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $post->setImage($fileName);

            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('app_product_list'));
        }
        return $this->render('default/makePost.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}