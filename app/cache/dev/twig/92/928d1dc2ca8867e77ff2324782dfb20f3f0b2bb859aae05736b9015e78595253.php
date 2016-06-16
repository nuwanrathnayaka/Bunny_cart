<?php

/* default/index.html.twig */
class __TwigTemplate_7ad4ffd4e545121bc6936aaafc1082e317b3ea48f8f4f9ded5973cf53e2cbefd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b4b7861aebc7616b2afdabf0e6d56edd58bad768485b1634745cad0858bee09 = $this->env->getExtension("native_profiler");
        $__internal_6b4b7861aebc7616b2afdabf0e6d56edd58bad768485b1634745cad0858bee09->enter($__internal_6b4b7861aebc7616b2afdabf0e6d56edd58bad768485b1634745cad0858bee09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b4b7861aebc7616b2afdabf0e6d56edd58bad768485b1634745cad0858bee09->leave($__internal_6b4b7861aebc7616b2afdabf0e6d56edd58bad768485b1634745cad0858bee09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f63d4bdf7ef2c0b8a257e8083bff0f02379ba0b83cd36a766808ae717a9ad3a2 = $this->env->getExtension("native_profiler");
        $__internal_f63d4bdf7ef2c0b8a257e8083bff0f02379ba0b83cd36a766808ae717a9ad3a2->enter($__internal_f63d4bdf7ef2c0b8a257e8083bff0f02379ba0b83cd36a766808ae717a9ad3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body>



    <script>
        window.onscroll = function() {myFunction()};

        function myFunction() {
            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 500) {
                //document.getElementById(\"myP\").className = \"teft\";
                var iDiv = document.createElement('div');
                iDiv.id = 'block';
                iDiv.className = 'block';
                //document.getElementsByTagName('body')[0].appendChild(iDiv);
                document.getElementById('adds').appendChild(iDiv);
// Now create and append to iDiv
                var innerDiv = document.createElement('div');
                innerDiv.className = 'block-2';

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        innerDiv.innerHTML = (JSON.parse(xmlhttp.responseText)).html;
                    }
                };
                xmlhttp.open(\"GET\", \"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("postlist");
        echo "\", true);
                xmlhttp.send();
                //innerDiv.innerHTML=innerDiv.innerHTML+\"nuwan\";
                //innerDiv.setAttribute(\"style\",\"height:500px\");

// The variable iDiv is still good... Just append to it.
                iDiv.appendChild(innerDiv);
            } else {
                document.getElementById(\"myP\").className = \"\";
            }
        }
    </script>


    <!--top-header-->
    <div class=\"top-header\">
        <div class=\"container\">
            <div class=\"top-header-main\">
                <div class=\"col-md-6 top-header-left\">
                    <div class=\"drop\">
                        <div class=\"box\">
                            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-default\">Login</a>
                        </div>
                        <div class=\"box1\">
                            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-default\">Register</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <div class=\"col-md-6 top-header-left\">
                    <div class=\"cart box_1\">
                        <a href=\"checkout.html\">
                            <div class=\"total\">
                                <span class=\"simpleCart_total\"></span></div>
                            <img src=\"images/cart-1.png\" alt=\"\" />
                        </a>
                        <p><a href=\"javascript:;\" class=\"simpleCart_empty\">Empty Cart</a></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    <!--top-header-->
    <!--start-logo-->
    <div class=\"logo\">
        <a href=\"index.html\"><h1>BUNNY CART</h1></a>
    </div>
    <!--start-logo-->
    <!--bottom-header-->
    <div class=\"header-bottom\">
        <div class=\"container\">
            <div class=\"header\">
                <div class=\"col-md-9 header-left\">
                    <div class=\"top-nav\">
                        <ul class=\"memenu skyblue\"><li class=\"active\"><a href=\"index.html\">Home</a></li>
                            <li class=\"grid\"><a href=\"#\">Life & Leisure</a>
                                <div class=\"mepanel\">
                                    <div class=\"row\">
                                        <div class=\"col1 me-one\">
                                            <h4>Fashion</h4>
                                            <ul>
                                                <li><a href=\"products.html\">Clothes</a></li>
                                                <li><a href=\"products.html\">Bags</a></li>
                                                <li><a href=\"products.html\">Watches</a></li>
                                                <li><a href=\"products.html\">Jewelleries</a></li>
                                                <li><a href=\"products.html\">Handbags</a></li>
                                                <li><a href=\"products.html\">cosmetics</a></li>
                                                <li><a href=\"products.html\">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col1 me-one\">
                                            <h4>Foods</h4>
                                            <ul>
                                                <li><a href=\"products.html\">Foods</a></li>
                                                <li><a href=\"products.html\">Drinks</a></li>
                                                <li><a href=\"products.html\">Restaurants</a></li>
                                                <li><a href=\"products.html\">Hotels</a></li>
                                                <li><a href=\"products.html\">Farms</a></li>
                                                <li><a href=\"products.html\">Fish/Meat</a></li>
                                                <li><a href=\"products.html\">vegis & Fruits</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col1 me-one\">
                                            <h4>Other</h4>
                                            <ul>
                                                <li><a href=\"products.html\">Fancy</a></li>
                                                <li><a href=\"products.html\">Gifts</a></li>
                                                <li><a href=\"products.html\">Sport</a></li>
                                                <li><a href=\"products.html\">Photography</a></li>
                                                <li><a href=\"products.html\">Crafts</a></li>
                                                <li><a href=\"products.html\">Flowers</a></li>
                                                <li><a href=\"products.html\">Decorations</a></li>
                                                <li><a href=\"products.html\">Travel & Vacation</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=\"grid\"><a href=\"#\">Technical & Construction</a>
                                <div class=\"mepanel\">
                                    <div class=\"row\">
                                        <div class=\"col1 me-one\">
                                            <h4>Mobile & Computers</h4>
                                            <ul>
                                                <li><a href=\"products.html\">Mobile Phones</a></li>
                                                <li><a href=\"products.html\">Phone Repair</a></li>
                                                <li><a href=\"products.html\">Computers and Repair</a></li>
                                                <li><a href=\"products.html\">Consumer Electronics</a></li>
                                                <li><a href=\"products.html\">Watches</a></li>
                                                <li><a href=\"products.html\">My Shopping Bag</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col1 me-one\">
                                            <h4>Construction</h4>
                                            <ul>
                                                <li><a href=\"products.html\">Lands</a></li>
                                                <li><a href=\"products.html\">Homes</a></li>
                                                <li><a href=\"products.html\">Constructions</a></li>
                                                <li><a href=\"products.html\">Furniture</a></li>
                                                <li><a href=\"products.html\">Household Items</a></li>
                                                <li><a href=\"products.html\">Row materials</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col1 me-one\">
                                            <h4>Automobile & Mechanical</h4>
                                            <ul>
                                                <li><a href=\"products.html\">Vehicles</a></li>
                                                <li><a href=\"products.html\">Garages & Service Centers</a></li>
                                                <li><a href=\"products.html\">Hardwares</a></li>
                                                <li><a href=\"products.html\">Fuel</a></li>
                                                <li><a href=\"products.html\">Machines</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=\"grid\"><a href=\"#\">Services</a>
                                <div class=\"mepanel\">
                                    <div class=\"row\">
                                        <div class=\"col1 me-one\">
                                            <h4>Services & Productions</h4>
                                            <ul>
                                                <li><a href=\"products.html\">Education</a></li>
                                                <li><a href=\"products.html\">Health</a></li>
                                                <li><a href=\"products.html\">Information & Communication</a></li>
                                                <li><a href=\"products.html\">Companies</a></li>
                                                <li><a href=\"products.html\">Banks</a></li>
                                                <li><a href=\"products.html\">Shopping Centers</a></li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class=\"grid\"><a href=\"typo.html\">Other</a>
                            </li>
                            <li class=\"grid\"><a href=\"contact.html\">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-3 header-right\">
                    <div class=\"search-bar\">
                        <input type=\"text\" value=\"Search\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search';}\">
                        <input type=\"submit\" value=\"\">
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
    <!--bottom-header-->
    <!--banner-starts-->
    <div class=\"bnr\" id=\"home\">
        <div  id=\"top\" class=\"callbacks_container\">
            <ul class=\"rslides\" id=\"slider4\">
                <li>
                    <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/images/bnr-1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                </li>
                <li>
                    <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/images/bnr-2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                </li>
                <li>
                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/images/bnr-3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                </li>
            </ul>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
    <!--banner-ends-->
    <!--Slider-Starts-Here-->
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        // You can also use \"\$(window).load(function() {\"
        \$(function () {
            // Slideshow 4
            \$(\"#slider4\").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: \"callbacks\",
                before: function () {
                    \$('.events').append(\"<li>before event fired.</li>\");
                },
                after: function () {
                    \$('.events').append(\"<li>after event fired.</li>\");
                }
            });

        });
    </script>
    <!--End-slider-script-->
    <!--about-starts-->
    <div class=\"about\">
        <div class=\"container\">
            <div class=\"about-top grid-1\" id=\"adds\" style=\"overflow: auto\">





                <div class=\"col-md-4 about-left\">
                    <figure class=\"effect-bubba\">
                        <img class=\"img-responsive\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/images/abt-1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                        <figcaption>
                            <h2>Nulla maximus nunc</h2>
                            <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 about-left\">
                    <figure class=\"effect-bubba\">
                        <img class=\"img-responsive\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/images/abt-2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                        <figcaption>
                            <h4>Mauris erat augue</h4>
                            <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 about-left\">
                    <figure class=\"effect-bubba\">
                        <img class=\"img-responsive\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/images/abt-3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                        <figcaption>
                            <h4>Cras elit mauris</h4>
                            <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    <!--about-end-->
    <!--product-starts-->
    <div class=\"product\">
        <div class=\"container\">
            <div class=\"product-top\">
                <div class=\"product-one\">
                    <div class=\"col-md-3 product-left\">
                        <div class=\"product-main simpleCart_shelfItem\">
                            <a href=\"single.html\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"images/p-1.png\" alt=\"\" /></a>
                            <div class=\"product-bottom\">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">\$ 329</span></h4>
                            </div>
                            <div class=\"srch\">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 product-left\">
                        <div class=\"product-main simpleCart_shelfItem\">
                            <a href=\"single.html\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"images/p-2.png\" alt=\"\" /></a>
                            <div class=\"product-bottom\">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">\$ 329</span></h4>
                            </div>
                            <div class=\"srch\">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 product-left\">
                        <div class=\"product-main simpleCart_shelfItem\">
                            <a href=\"single.html\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"images/p-3.png\"  alt=\"\" /></a>
                            <div class=\"product-bottom\">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">\$ 329</span></h4>
                            </div>
                            <div class=\"srch\">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 product-left\">
                        <div class=\"product-main simpleCart_shelfItem\">
                            <a href=\"single.html\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"images/p-4.png\" alt=\"\" /></a>
                            <div class=\"product-bottom\">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">\$ 329</span></h4>
                            </div>
                            <div class=\"srch\">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"product-one\">
                    <div class=\"col-md-3 product-left\">
                        <div class=\"product-main simpleCart_shelfItem\">
                            <a href=\"single.html\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"images/p-5.png\" alt=\"\" /></a>
                            <div class=\"product-bottom\">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">\$ 329</span></h4>
                            </div>
                            <div class=\"srch\">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 product-left\">
                        <div class=\"product-main simpleCart_shelfItem\">
                            <a href=\"single.html\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"images/p-6.png\" alt=\"\" /></a>
                            <div class=\"product-bottom\">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">\$ 329</span></h4>
                            </div>
                            <div class=\"srch\">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 product-left\">
                        <div class=\"product-main simpleCart_shelfItem\">
                            <a href=\"single.html\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"images/p-7.png\" alt=\"\" /></a>
                            <div class=\"product-bottom\">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">\$ 329</span></h4>
                            </div>
                            <div class=\"srch\">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 product-left\">
                        <div class=\"product-main simpleCart_shelfItem\">
                            <a href=\"single.html\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"images/p-8.png\" alt=\"\" /></a>
                            <div class=\"product-bottom\">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">\$ 329</span></h4>
                            </div>
                            <div class=\"srch\">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>





    <!--product-end-->
    <!--information-starts-->
    <div class=\"information\">
        <div class=\"container\">
            <div class=\"infor-top\">
                <div class=\"col-md-3 infor-left\">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href=\"#\"><span class=\"fb\"></span><h6>Facebook</h6></a></li>
                        <li><a href=\"#\"><span class=\"twit\"></span><h6>Twitter</h6></a></li>
                        <li><a href=\"#\"><span class=\"google\"></span><h6>Google+</h6></a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 infor-left\">
                    <h3>Information</h3>
                    <ul>
                        <li><a href=\"#\"><p>Specials</p></a></li>
                        <li><a href=\"#\"><p>New Products</p></a></li>
                        <li><a href=\"#\"><p>Our Stores</p></a></li>
                        <li><a href=\"contact.html\"><p>Contact Us</p></a></li>
                        <li><a href=\"#\"><p>Top Sellers</p></a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 infor-left\">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href=\"account.html\"><p>My Account</p></a></li>
                        <li><a href=\"#\"><p>My Credit slips</p></a></li>
                        <li><a href=\"#\"><p>My Merchandise returns</p></a></li>
                        <li><a href=\"#\"><p>My Personal info</p></a></li>
                        <li><a href=\"#\"><p>My Addresses</p></a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 infor-left\">
                    <h3>Store Information</h3>
                    <h4>Advanced Solutions,
                        <span>Sri Lankan Branch,</span>
                        Moratuwa.</h4>
                    <h5>+94712650505</h5>
                    <p><a href=\"nuwan.13@cse.mrt.ac.lk\">E-Mail me</a></p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    <!--information-end-->
    <!--footer-starts-->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <div class=\"col-md-6 footer-left\">
                    <form>
                        <input type=\"text\" value=\"Enter Your Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter Your Email';}\">
                        <input type=\"submit\" value=\"Subscribe\">
                    </form>
                </div>
                <div class=\"col-md-6 footer-right\">
                    <p>© 2016 Advanced Solutions. All Rights Reserved | Design by  Nuwan Rathnayaka </p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    <!--footer-end-->




    </body>
";
        
        $__internal_f63d4bdf7ef2c0b8a257e8083bff0f02379ba0b83cd36a766808ae717a9ad3a2->leave($__internal_f63d4bdf7ef2c0b8a257e8083bff0f02379ba0b83cd36a766808ae717a9ad3a2_prof);

    }

    // line 480
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8d30901ce6eab039b9f9481eefaf67a50766855b36575d4d08ba1201b098e4d = $this->env->getExtension("native_profiler");
        $__internal_e8d30901ce6eab039b9f9481eefaf67a50766855b36575d4d08ba1201b098e4d->enter($__internal_e8d30901ce6eab039b9f9481eefaf67a50766855b36575d4d08ba1201b098e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 481
        echo "
";
        
        $__internal_e8d30901ce6eab039b9f9481eefaf67a50766855b36575d4d08ba1201b098e4d->leave($__internal_e8d30901ce6eab039b9f9481eefaf67a50766855b36575d4d08ba1201b098e4d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 481,  552 => 480,  341 => 275,  329 => 266,  317 => 257,  281 => 224,  270 => 216,  264 => 213,  258 => 210,  98 => 53,  92 => 50,  68 => 29,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <body>*/
/* */
/* */
/* */
/*     <script>*/
/*         window.onscroll = function() {myFunction()};*/
/* */
/*         function myFunction() {*/
/*             if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 500) {*/
/*                 //document.getElementById("myP").className = "teft";*/
/*                 var iDiv = document.createElement('div');*/
/*                 iDiv.id = 'block';*/
/*                 iDiv.className = 'block';*/
/*                 //document.getElementsByTagName('body')[0].appendChild(iDiv);*/
/*                 document.getElementById('adds').appendChild(iDiv);*/
/* // Now create and append to iDiv*/
/*                 var innerDiv = document.createElement('div');*/
/*                 innerDiv.className = 'block-2';*/
/* */
/*                 var xmlhttp = new XMLHttpRequest();*/
/*                 xmlhttp.onreadystatechange = function() {*/
/*                     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {*/
/*                         innerDiv.innerHTML = (JSON.parse(xmlhttp.responseText)).html;*/
/*                     }*/
/*                 };*/
/*                 xmlhttp.open("GET", "{{ path('postlist') }}", true);*/
/*                 xmlhttp.send();*/
/*                 //innerDiv.innerHTML=innerDiv.innerHTML+"nuwan";*/
/*                 //innerDiv.setAttribute("style","height:500px");*/
/* */
/* // The variable iDiv is still good... Just append to it.*/
/*                 iDiv.appendChild(innerDiv);*/
/*             } else {*/
/*                 document.getElementById("myP").className = "";*/
/*             }*/
/*         }*/
/*     </script>*/
/* */
/* */
/*     <!--top-header-->*/
/*     <div class="top-header">*/
/*         <div class="container">*/
/*             <div class="top-header-main">*/
/*                 <div class="col-md-6 top-header-left">*/
/*                     <div class="drop">*/
/*                         <div class="box">*/
/*                             <a href="{{ path('fos_user_security_login') }}" class="btn btn-default">Login</a>*/
/*                         </div>*/
/*                         <div class="box1">*/
/*                             <a href="{{ path("fos_user_registration_register") }}" class="btn btn-default">Register</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6 top-header-left">*/
/*                     <div class="cart box_1">*/
/*                         <a href="checkout.html">*/
/*                             <div class="total">*/
/*                                 <span class="simpleCart_total"></span></div>*/
/*                             <img src="images/cart-1.png" alt="" />*/
/*                         </a>*/
/*                         <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>*/
/*                         <div class="clearfix"> </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--top-header-->*/
/*     <!--start-logo-->*/
/*     <div class="logo">*/
/*         <a href="index.html"><h1>BUNNY CART</h1></a>*/
/*     </div>*/
/*     <!--start-logo-->*/
/*     <!--bottom-header-->*/
/*     <div class="header-bottom">*/
/*         <div class="container">*/
/*             <div class="header">*/
/*                 <div class="col-md-9 header-left">*/
/*                     <div class="top-nav">*/
/*                         <ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>*/
/*                             <li class="grid"><a href="#">Life & Leisure</a>*/
/*                                 <div class="mepanel">*/
/*                                     <div class="row">*/
/*                                         <div class="col1 me-one">*/
/*                                             <h4>Fashion</h4>*/
/*                                             <ul>*/
/*                                                 <li><a href="products.html">Clothes</a></li>*/
/*                                                 <li><a href="products.html">Bags</a></li>*/
/*                                                 <li><a href="products.html">Watches</a></li>*/
/*                                                 <li><a href="products.html">Jewelleries</a></li>*/
/*                                                 <li><a href="products.html">Handbags</a></li>*/
/*                                                 <li><a href="products.html">cosmetics</a></li>*/
/*                                                 <li><a href="products.html">Shoes</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <div class="col1 me-one">*/
/*                                             <h4>Foods</h4>*/
/*                                             <ul>*/
/*                                                 <li><a href="products.html">Foods</a></li>*/
/*                                                 <li><a href="products.html">Drinks</a></li>*/
/*                                                 <li><a href="products.html">Restaurants</a></li>*/
/*                                                 <li><a href="products.html">Hotels</a></li>*/
/*                                                 <li><a href="products.html">Farms</a></li>*/
/*                                                 <li><a href="products.html">Fish/Meat</a></li>*/
/*                                                 <li><a href="products.html">vegis & Fruits</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <div class="col1 me-one">*/
/*                                             <h4>Other</h4>*/
/*                                             <ul>*/
/*                                                 <li><a href="products.html">Fancy</a></li>*/
/*                                                 <li><a href="products.html">Gifts</a></li>*/
/*                                                 <li><a href="products.html">Sport</a></li>*/
/*                                                 <li><a href="products.html">Photography</a></li>*/
/*                                                 <li><a href="products.html">Crafts</a></li>*/
/*                                                 <li><a href="products.html">Flowers</a></li>*/
/*                                                 <li><a href="products.html">Decorations</a></li>*/
/*                                                 <li><a href="products.html">Travel & Vacation</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="grid"><a href="#">Technical & Construction</a>*/
/*                                 <div class="mepanel">*/
/*                                     <div class="row">*/
/*                                         <div class="col1 me-one">*/
/*                                             <h4>Mobile & Computers</h4>*/
/*                                             <ul>*/
/*                                                 <li><a href="products.html">Mobile Phones</a></li>*/
/*                                                 <li><a href="products.html">Phone Repair</a></li>*/
/*                                                 <li><a href="products.html">Computers and Repair</a></li>*/
/*                                                 <li><a href="products.html">Consumer Electronics</a></li>*/
/*                                                 <li><a href="products.html">Watches</a></li>*/
/*                                                 <li><a href="products.html">My Shopping Bag</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <div class="col1 me-one">*/
/*                                             <h4>Construction</h4>*/
/*                                             <ul>*/
/*                                                 <li><a href="products.html">Lands</a></li>*/
/*                                                 <li><a href="products.html">Homes</a></li>*/
/*                                                 <li><a href="products.html">Constructions</a></li>*/
/*                                                 <li><a href="products.html">Furniture</a></li>*/
/*                                                 <li><a href="products.html">Household Items</a></li>*/
/*                                                 <li><a href="products.html">Row materials</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <div class="col1 me-one">*/
/*                                             <h4>Automobile & Mechanical</h4>*/
/*                                             <ul>*/
/*                                                 <li><a href="products.html">Vehicles</a></li>*/
/*                                                 <li><a href="products.html">Garages & Service Centers</a></li>*/
/*                                                 <li><a href="products.html">Hardwares</a></li>*/
/*                                                 <li><a href="products.html">Fuel</a></li>*/
/*                                                 <li><a href="products.html">Machines</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="grid"><a href="#">Services</a>*/
/*                                 <div class="mepanel">*/
/*                                     <div class="row">*/
/*                                         <div class="col1 me-one">*/
/*                                             <h4>Services & Productions</h4>*/
/*                                             <ul>*/
/*                                                 <li><a href="products.html">Education</a></li>*/
/*                                                 <li><a href="products.html">Health</a></li>*/
/*                                                 <li><a href="products.html">Information & Communication</a></li>*/
/*                                                 <li><a href="products.html">Companies</a></li>*/
/*                                                 <li><a href="products.html">Banks</a></li>*/
/*                                                 <li><a href="products.html">Shopping Centers</a></li>*/
/* */
/*                                             </ul>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="grid"><a href="typo.html">Other</a>*/
/*                             </li>*/
/*                             <li class="grid"><a href="contact.html">Contact</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="clearfix"> </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 header-right">*/
/*                     <div class="search-bar">*/
/*                         <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">*/
/*                         <input type="submit" value="">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="clearfix"> </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--bottom-header-->*/
/*     <!--banner-starts-->*/
/*     <div class="bnr" id="home">*/
/*         <div  id="top" class="callbacks_container">*/
/*             <ul class="rslides" id="slider4">*/
/*                 <li>*/
/*                     <img src="{{ asset('bundles/dist/images/bnr-1.jpg') }}" alt=""/>*/
/*                 </li>*/
/*                 <li>*/
/*                     <img src="{{ asset('bundles/dist/images/bnr-2.jpg') }}" alt=""/>*/
/*                 </li>*/
/*                 <li>*/
/*                     <img src="{{ asset('bundles/dist/images/bnr-3.jpg') }}" alt=""/>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="clearfix"> </div>*/
/*     </div>*/
/*     <!--banner-ends-->*/
/*     <!--Slider-Starts-Here-->*/
/*     <script src="{{ asset('bundles/dist/js/responsiveslides.min.js') }}"></script>*/
/*     <script>*/
/*         // You can also use "$(window).load(function() {"*/
/*         $(function () {*/
/*             // Slideshow 4*/
/*             $("#slider4").responsiveSlides({*/
/*                 auto: true,*/
/*                 pager: true,*/
/*                 nav: true,*/
/*                 speed: 500,*/
/*                 namespace: "callbacks",*/
/*                 before: function () {*/
/*                     $('.events').append("<li>before event fired.</li>");*/
/*                 },*/
/*                 after: function () {*/
/*                     $('.events').append("<li>after event fired.</li>");*/
/*                 }*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/*     <!--End-slider-script-->*/
/*     <!--about-starts-->*/
/*     <div class="about">*/
/*         <div class="container">*/
/*             <div class="about-top grid-1" id="adds" style="overflow: auto">*/
/* */
/* */
/* */
/* */
/* */
/*                 <div class="col-md-4 about-left">*/
/*                     <figure class="effect-bubba">*/
/*                         <img class="img-responsive" src="{{ asset('bundles/dist/images/abt-1.jpg') }}" alt=""/>*/
/*                         <figcaption>*/
/*                             <h2>Nulla maximus nunc</h2>*/
/*                             <p>In sit amet sapien eros Integer dolore magna aliqua</p>*/
/*                         </figcaption>*/
/*                     </figure>*/
/*                 </div>*/
/*                 <div class="col-md-4 about-left">*/
/*                     <figure class="effect-bubba">*/
/*                         <img class="img-responsive" src="{{ asset('bundles/dist/images/abt-2.jpg') }}" alt=""/>*/
/*                         <figcaption>*/
/*                             <h4>Mauris erat augue</h4>*/
/*                             <p>In sit amet sapien eros Integer dolore magna aliqua</p>*/
/*                         </figcaption>*/
/*                     </figure>*/
/*                 </div>*/
/*                 <div class="col-md-4 about-left">*/
/*                     <figure class="effect-bubba">*/
/*                         <img class="img-responsive" src="{{ asset('bundles/dist/images/abt-3.jpg') }}" alt=""/>*/
/*                         <figcaption>*/
/*                             <h4>Cras elit mauris</h4>*/
/*                             <p>In sit amet sapien eros Integer dolore magna aliqua</p>*/
/*                         </figcaption>*/
/*                     </figure>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--about-end-->*/
/*     <!--product-starts-->*/
/*     <div class="product">*/
/*         <div class="container">*/
/*             <div class="product-top">*/
/*                 <div class="product-one">*/
/*                     <div class="col-md-3 product-left">*/
/*                         <div class="product-main simpleCart_shelfItem">*/
/*                             <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>*/
/*                             <div class="product-bottom">*/
/*                                 <h3>Smart Watches</h3>*/
/*                                 <p>Explore Now</p>*/
/*                                 <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>*/
/*                             </div>*/
/*                             <div class="srch">*/
/*                                 <span>-50%</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 product-left">*/
/*                         <div class="product-main simpleCart_shelfItem">*/
/*                             <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-2.png" alt="" /></a>*/
/*                             <div class="product-bottom">*/
/*                                 <h3>Smart Watches</h3>*/
/*                                 <p>Explore Now</p>*/
/*                                 <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>*/
/*                             </div>*/
/*                             <div class="srch">*/
/*                                 <span>-50%</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 product-left">*/
/*                         <div class="product-main simpleCart_shelfItem">*/
/*                             <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png"  alt="" /></a>*/
/*                             <div class="product-bottom">*/
/*                                 <h3>Smart Watches</h3>*/
/*                                 <p>Explore Now</p>*/
/*                                 <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>*/
/*                             </div>*/
/*                             <div class="srch">*/
/*                                 <span>-50%</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 product-left">*/
/*                         <div class="product-main simpleCart_shelfItem">*/
/*                             <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-4.png" alt="" /></a>*/
/*                             <div class="product-bottom">*/
/*                                 <h3>Smart Watches</h3>*/
/*                                 <p>Explore Now</p>*/
/*                                 <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>*/
/*                             </div>*/
/*                             <div class="srch">*/
/*                                 <span>-50%</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="product-one">*/
/*                     <div class="col-md-3 product-left">*/
/*                         <div class="product-main simpleCart_shelfItem">*/
/*                             <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-5.png" alt="" /></a>*/
/*                             <div class="product-bottom">*/
/*                                 <h3>Smart Watches</h3>*/
/*                                 <p>Explore Now</p>*/
/*                                 <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>*/
/*                             </div>*/
/*                             <div class="srch">*/
/*                                 <span>-50%</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 product-left">*/
/*                         <div class="product-main simpleCart_shelfItem">*/
/*                             <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-6.png" alt="" /></a>*/
/*                             <div class="product-bottom">*/
/*                                 <h3>Smart Watches</h3>*/
/*                                 <p>Explore Now</p>*/
/*                                 <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>*/
/*                             </div>*/
/*                             <div class="srch">*/
/*                                 <span>-50%</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 product-left">*/
/*                         <div class="product-main simpleCart_shelfItem">*/
/*                             <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-7.png" alt="" /></a>*/
/*                             <div class="product-bottom">*/
/*                                 <h3>Smart Watches</h3>*/
/*                                 <p>Explore Now</p>*/
/*                                 <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>*/
/*                             </div>*/
/*                             <div class="srch">*/
/*                                 <span>-50%</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 product-left">*/
/*                         <div class="product-main simpleCart_shelfItem">*/
/*                             <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-8.png" alt="" /></a>*/
/*                             <div class="product-bottom">*/
/*                                 <h3>Smart Watches</h3>*/
/*                                 <p>Explore Now</p>*/
/*                                 <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>*/
/*                             </div>*/
/*                             <div class="srch">*/
/*                                 <span>-50%</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/*     <!--product-end-->*/
/*     <!--information-starts-->*/
/*     <div class="information">*/
/*         <div class="container">*/
/*             <div class="infor-top">*/
/*                 <div class="col-md-3 infor-left">*/
/*                     <h3>Follow Us</h3>*/
/*                     <ul>*/
/*                         <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>*/
/*                         <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>*/
/*                         <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-3 infor-left">*/
/*                     <h3>Information</h3>*/
/*                     <ul>*/
/*                         <li><a href="#"><p>Specials</p></a></li>*/
/*                         <li><a href="#"><p>New Products</p></a></li>*/
/*                         <li><a href="#"><p>Our Stores</p></a></li>*/
/*                         <li><a href="contact.html"><p>Contact Us</p></a></li>*/
/*                         <li><a href="#"><p>Top Sellers</p></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-3 infor-left">*/
/*                     <h3>My Account</h3>*/
/*                     <ul>*/
/*                         <li><a href="account.html"><p>My Account</p></a></li>*/
/*                         <li><a href="#"><p>My Credit slips</p></a></li>*/
/*                         <li><a href="#"><p>My Merchandise returns</p></a></li>*/
/*                         <li><a href="#"><p>My Personal info</p></a></li>*/
/*                         <li><a href="#"><p>My Addresses</p></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-3 infor-left">*/
/*                     <h3>Store Information</h3>*/
/*                     <h4>Advanced Solutions,*/
/*                         <span>Sri Lankan Branch,</span>*/
/*                         Moratuwa.</h4>*/
/*                     <h5>+94712650505</h5>*/
/*                     <p><a href="nuwan.13@cse.mrt.ac.lk">E-Mail me</a></p>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--information-end-->*/
/*     <!--footer-starts-->*/
/*     <div class="footer">*/
/*         <div class="container">*/
/*             <div class="footer-top">*/
/*                 <div class="col-md-6 footer-left">*/
/*                     <form>*/
/*                         <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">*/
/*                         <input type="submit" value="Subscribe">*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="col-md-6 footer-right">*/
/*                     <p>© 2016 Advanced Solutions. All Rights Reserved | Design by  Nuwan Rathnayaka </p>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--footer-end-->*/
/* */
/* */
/* */
/* */
/*     </body>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
