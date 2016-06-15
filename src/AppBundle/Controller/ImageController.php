<?php
/**
 * Created by PhpStorm.
 * User: Nuwan Rathnayaka
 * Date: 5/20/2016
 * Time: 9:10 AM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ImageController extends Controller
{

    /**
     * @Route("/post", name="ImageInput")
     */
    public function postAction(Request $request)
    {
        return $this->render('default/post.html.twig',
            array('table'=>false,'title'=>"nuwan" , 'profile'=>false)
        );
    }

    /**
     * @Route("/cropResult",name="crop_result")
     */
    public function crop_save(Request $request)
    {
        if($request->request->get('crop_image'))
        {
            $y1=$request->request->get('top');
            $x1=$request->request->get('left');
            $w=$request->request->get('right');
            $h=$request->request->get('bottom');
            $image="bundles/images/ID.jpg";

            list( $width,$height ) = getimagesize( $image );
            $newwidth = 600;
            $newheight = 600;

            $thumb = imagecreatetruecolor( $newwidth, $newheight );
            $source = imagecreatefromjpeg($image);

            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb,$image,100);


            $im = imagecreatefromjpeg($image);
            $dest = imagecreatetruecolor($w,$h);

            imagecopyresampled($dest,$im,0,0,$x1,$y1,$w,$h,$w,$h);
            imagejpeg($dest,"crop_image1.jpg", 100);
        }
    }

    /**
     * @Route("/upload", name="uploadImage")
     */
    public function uploadImageAction(Request $request)
    {
        $tem=$request->files->get('fileToUpload');
        if(isset($tem)){
        //if(isset($_FILES['fileToUpload'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

            $expensions= array("jpeg","jpg","png");

            if(in_array($file_ext,$expensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            if($file_size > 2097152){
                $errors[]='File size must be excately 2 MB';
            }

            if(empty($errors)==true){
                move_uploaded_file($file_tmp,"images/".$file_name);
                echo "Success";
            }else{
                print_r($errors);
            }
        }
        else{
            echo "null";
        }
        return $this->render('default/post.html.twig',
            array('table'=>false,'title'=>"nuwan" , 'profile'=>false)
        );
    }



}