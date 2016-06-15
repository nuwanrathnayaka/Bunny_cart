<?php

/* default/myAccount.html.twig */
class __TwigTemplate_4651b7b5ec4344459a209954944376fd04d79fc50dcb8a3bcb05e7c1213e38fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/myAccount.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cc4682fdd3ec11ee5eedb45641a05883a23fe721df3a41b64e78e9e85ab3573 = $this->env->getExtension("native_profiler");
        $__internal_7cc4682fdd3ec11ee5eedb45641a05883a23fe721df3a41b64e78e9e85ab3573->enter($__internal_7cc4682fdd3ec11ee5eedb45641a05883a23fe721df3a41b64e78e9e85ab3573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/myAccount.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc4682fdd3ec11ee5eedb45641a05883a23fe721df3a41b64e78e9e85ab3573->leave($__internal_7cc4682fdd3ec11ee5eedb45641a05883a23fe721df3a41b64e78e9e85ab3573_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae7313f7388ae1a751b24d9731e3e65a772842daee604b40f5fcedf79012eba7 = $this->env->getExtension("native_profiler");
        $__internal_ae7313f7388ae1a751b24d9731e3e65a772842daee604b40f5fcedf79012eba7->enter($__internal_ae7313f7388ae1a751b24d9731e3e65a772842daee604b40f5fcedf79012eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <body>
    <!--[if lt IE 7]>
    <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id=\"home\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"item-1\"></div>
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"col-md-offset-2 col-md-8 col-sm-12\">
                            <h2>STREAM</h2>
                            <p><strong><span class=\"green\">template</span><span class=\"yellow\">mo</span></strong>.com website provides a lot of free responsive templates for everyone. You can download, edit and apply this layout for any purpose. Please tell your friends about our website. Thank you.</p>
                            <a href=\"#\" class=\"button default\">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"item-2\"></div>
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"col-md-offset-2 col-md-8 col-sm-12\">
                            <h2>Responsive Design</h2>
                            <p>Credit goes to <a rel=\"nofollow\" href=\"http://unsplash.com\"><span class=\"yellow\">Unsplash</span></a> for images used in this template. Vivamus sed mauris ut libero tristique ultricies. Suspendisse sagittis eget augue vel condimentum. Sed malesuada tortor venenatis enim blandit interdum.</p>
                            <a href=\"#\" class=\"button default\">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"item-3\"></div>
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"col-md-offset-2 col-md-8 col-sm-12\">
                            <h2>Mobile Ready</h2>
                            <p>Donec malesuada pellentesque cursus. In vestibulum metus sit amet est elementum, et malesuada mi consequat. Sed ultricies lectus sit amet venenatis condimentum. Morbi hendrerit posuere enim at aliquet.</p>
                            <a href=\"#\" class=\"button default\">Let's talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDER OPTIONS -->
        <div class=\"slider-options\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-4 slider-nav\">
                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#home\" role=\"button\" data-slide=\"prev\">
                            <span class=\"fa fa-angle-left\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#home\" role=\"button\" data-slide=\"next\">
                            <span class=\"fa fa-angle-right\"></span>
                        </a>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-4\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#home\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#home\" data-slide-to=\"1\"></li>
                            <li data-target=\"#home\" data-slide-to=\"2\"></li>
                        </ol>
                    </div>

                    <div class=\"col-md-4 col-sm-4 text-right col-xs-4\">
                        <a href=\"#\" id=\"scroll-to-content\" class=\"go-down\"><i class=\"fa fa-angle-down\"></i></a>
                    </div>

                </div>
            </div>
        </div>

    </div> <!-- Carousel -->


    <nav id=\"navigation\">
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">Stream</a>
                </div>
                <div class=\"navbar-collapse collapse\">

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#home\" class=\"current\">Home</a></li>
                        <li><a href=\"#about\">About</a></li>
                        <li><a href=\"#gallery\">Gallery</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </div><!--navbar-default-->
    </nav><!--navigation section end here-->


    <section id=\"about\" class=\"page-section first-section\">
        <div class=\"container\">
            <div class=\"row page-heading\">
                <div class=\"col-md-8 col-sm-8\">
                    <h3 class=\"page-title\">About Me</h3>
                    <p class=\"page-subtitle\">";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "vision", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-4 col-sm-4 hidden-xs page-icon-holder\">
                    <p class=\"page-icon\"><i class=\"fa fa-user\"></i></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"profile-image\">
                        <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profile_pics/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "profile_picture", array()), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"profile-content\">
                        <h4>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "business_name", array()), "html", null, true);
        echo "</h4>
                        <span>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "category", array()), "html", null, true);
        echo "</span>
                        <p>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "description", array()), "html", null, true);
        echo ".</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                    <div class=\"my-skills\">
                        <h4>Contact us</h4>
                        <p> ";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "address", array()), "html", null, true);
        echo "</p>
                        <p>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contact", array()), "html", null, true);
        echo "</p>
                        <ul class=\"progess-bars\">
                            <li>
                                <span>ANIMATIONS 85%</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%;\"></div>
                                </div>
                            </li>
                            <li>
                                <span>PHOTOSHOP 95%</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%;\"></div>
                                </div>
                            </li>
                            <li>
                                <span>MARKETING 40%</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%;\"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id=\"gallery\" class=\"page-section\">
        <div class=\"container\">
            <div class=\"row page-heading\">
                <div class=\"col-md-8 col-sm-8\">
                    <h3 class=\"page-title\">My Gallery</h3>
                    <p class=\"page-subtitle\">CHECK SOME OF MY LAST PROJECTS</p>
                </div>
                <div class=\"col-md-4 col-sm-4 hidden-xs text-right\">
                    <p class=\"page-icon\"><i class=\"fa fa-camera\"></i></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"gallery-holder\">
                    <div class=\"col-md-3 col-sm-6 col-xs-12 gallery-item\">
                        <div class=\"gallery-thumb\">
                            <img src=\"img/1.jpg\" alt=\"\">
                            <div class=\"hover\">
                                <a href=\"#\" class=\"fa fa-plus\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 gallery-item\">
                        <div class=\"gallery-thumb\">
                            <img src=\"img/2.jpg\" alt=\"\">
                            <div class=\"hover\">
                                <a href=\"#\" class=\"fa fa-plus\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 gallery-item\">
                        <div class=\"gallery-thumb\">
                            <img src=\"img/3.jpg\" alt=\"\">
                            <div class=\"hover\">
                                <a href=\"#\" class=\"fa fa-plus\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 gallery-item\">
                        <div class=\"gallery-thumb\">
                            <img src=\"img/4.jpg\" alt=\"\">
                            <div class=\"hover\">
                                <a href=\"#\" class=\"fa fa-plus\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 gallery-item\">
                        <div class=\"gallery-thumb\">
                            <img src=\"img/5.jpg\" alt=\"\">
                            <div class=\"hover\">
                                <a href=\"#\" class=\"fa fa-plus\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 gallery-item\">
                        <div class=\"gallery-thumb\">
                            <img src=\"img/6.jpg\" alt=\"\">
                            <div class=\"hover\">
                                <a href=\"#\" class=\"fa fa-plus\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 gallery-item\">
                        <div class=\"gallery-thumb\">
                            <img src=\"img/7.jpg\" alt=\"\">
                            <div class=\"hover\">
                                <a href=\"#\" class=\"fa fa-plus\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 gallery-item\">
                        <div class=\"gallery-thumb\">
                            <img src=\"img/8.jpg\" alt=\"\">
                            <div class=\"hover\">
                                <a href=\"#\" class=\"fa fa-plus\"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id=\"contact\" class=\"page-section\">
        <div class=\"container\">
            <div class=\"row page-heading\">
                <div class=\"col-md-8 col-sm-8\">
                    <h3 class=\"page-title\">Contact Me</h3>
                    <p class=\"page-subtitle\">FEEL FREE TO SEND A MESSAGE</p>
                </div>
                <div class=\"col-md-4 col-sm-4 hidden-xs text-right\">
                    <p class=\"page-icon\"><i class=\"fa fa-envelope\"></i></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"row\">
                        <form action=\"#\" method=\"post\" class=\"contact-form\">
                            <fieldset class=\"col-md-4 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"name\" placeholder=\"Name...\">
                            </fieldset>
                            <fieldset class=\"col-md-4 col-sm-6 col-xs-12\">
                                <input type=\"email\" id=\"email\" placeholder=\"Email...\">
                            </fieldset>
                            <fieldset class=\"col-md-4 col-sm-12 col-xs-12\">
                                <input type=\"text\" id=\"subject\" placeholder=\"Subject...\">
                            </fieldset>
                            <fieldset class=\"col-md-12 col-sm-12 col-xs-12\">
                                <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"6\" placeholder=\"Message...\"></textarea>
                            </fieldset>
                            <fieldset class=\"col-md-12 col-sm-12 col-xs-12\">
                                <input type=\"submit\" class=\"button default\" value=\"Send Message\">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12\">
                    <div class=\"contact-info\">
                        <h4>Contact Information</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius aliquam diam, ac cursus enim. Ut interdum leo mattis varius pulvinar.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"text-center\">
                <a href=\"#\" class=\"go-top\"><i class=\"fa fa-angle-up\"></i></a>
                <p class=\"copyright-text\">Copyright &copy; 2084 Company Name</p>
            </div>
        </div>
    </footer>


    </body>
";
        
        $__internal_ae7313f7388ae1a751b24d9731e3e65a772842daee604b40f5fcedf79012eba7->leave($__internal_ae7313f7388ae1a751b24d9731e3e65a772842daee604b40f5fcedf79012eba7_prof);

    }

    public function getTemplateName()
    {
        return "default/myAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 143,  197 => 142,  182 => 130,  178 => 129,  174 => 128,  165 => 123,  153 => 114,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <body>*/
/*     <!--[if lt IE 7]>*/
/*     <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>*/
/*     <![endif]-->*/
/* */
/*     <div id="home" class="carousel slide carousel-fade" data-ride="carousel">*/
/* */
/*         <!-- Wrapper for slides -->*/
/*         <div class="carousel-inner">*/
/*             <div class="item active">*/
/*                 <div class="item-1"></div>*/
/*                 <div class="carousel-caption">*/
/*                     <div class="container">*/
/*                         <div class="col-md-offset-2 col-md-8 col-sm-12">*/
/*                             <h2>STREAM</h2>*/
/*                             <p><strong><span class="green">template</span><span class="yellow">mo</span></strong>.com website provides a lot of free responsive templates for everyone. You can download, edit and apply this layout for any purpose. Please tell your friends about our website. Thank you.</p>*/
/*                             <a href="#" class="button default">Details</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <div class="item-2"></div>*/
/*                 <div class="carousel-caption">*/
/*                     <div class="container">*/
/*                         <div class="col-md-offset-2 col-md-8 col-sm-12">*/
/*                             <h2>Responsive Design</h2>*/
/*                             <p>Credit goes to <a rel="nofollow" href="http://unsplash.com"><span class="yellow">Unsplash</span></a> for images used in this template. Vivamus sed mauris ut libero tristique ultricies. Suspendisse sagittis eget augue vel condimentum. Sed malesuada tortor venenatis enim blandit interdum.</p>*/
/*                             <a href="#" class="button default">Read More</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <div class="item-3"></div>*/
/*                 <div class="carousel-caption">*/
/*                     <div class="container">*/
/*                         <div class="col-md-offset-2 col-md-8 col-sm-12">*/
/*                             <h2>Mobile Ready</h2>*/
/*                             <p>Donec malesuada pellentesque cursus. In vestibulum metus sit amet est elementum, et malesuada mi consequat. Sed ultricies lectus sit amet venenatis condimentum. Morbi hendrerit posuere enim at aliquet.</p>*/
/*                             <a href="#" class="button default">Let's talk</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- SLIDER OPTIONS -->*/
/*         <div class="slider-options">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-4 col-sm-4 col-xs-4 slider-nav">*/
/*                         <!-- Controls -->*/
/*                         <a class="left carousel-control" href="#home" role="button" data-slide="prev">*/
/*                             <span class="fa fa-angle-left"></span>*/
/*                         </a>*/
/*                         <a class="right carousel-control" href="#home" role="button" data-slide="next">*/
/*                             <span class="fa fa-angle-right"></span>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-4 col-sm-4 col-xs-4">*/
/*                         <!-- Indicators -->*/
/*                         <ol class="carousel-indicators">*/
/*                             <li data-target="#home" data-slide-to="0" class="active"></li>*/
/*                             <li data-target="#home" data-slide-to="1"></li>*/
/*                             <li data-target="#home" data-slide-to="2"></li>*/
/*                         </ol>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-4 col-sm-4 text-right col-xs-4">*/
/*                         <a href="#" id="scroll-to-content" class="go-down"><i class="fa fa-angle-down"></i></a>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div> <!-- Carousel -->*/
/* */
/* */
/*     <nav id="navigation">*/
/*         <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <i class="fa fa-bars"></i>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="index.html">Stream</a>*/
/*                 </div>*/
/*                 <div class="navbar-collapse collapse">*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="#home" class="current">Home</a></li>*/
/*                         <li><a href="#about">About</a></li>*/
/*                         <li><a href="#gallery">Gallery</a></li>*/
/*                         <li><a href="#contact">Contact</a></li>*/
/*                     </ul>*/
/* */
/*                 </div><!--/.nav-collapse -->*/
/*             </div><!--/.container -->*/
/*         </div><!--navbar-default-->*/
/*     </nav><!--navigation section end here-->*/
/* */
/* */
/*     <section id="about" class="page-section first-section">*/
/*         <div class="container">*/
/*             <div class="row page-heading">*/
/*                 <div class="col-md-8 col-sm-8">*/
/*                     <h3 class="page-title">About Me</h3>*/
/*                     <p class="page-subtitle">{{ data.vision }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-4 col-sm-4 hidden-xs page-icon-holder">*/
/*                     <p class="page-icon"><i class="fa fa-user"></i></p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                     <div class="profile-image">*/
/*                         <img src="{{ asset( 'uploads/profile_pics/' ) }}{{ data.profile_picture }}" alt="">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                     <div class="profile-content">*/
/*                         <h4>{{ data.business_name }}</h4>*/
/*                         <span>{{ data.category }}</span>*/
/*                         <p>{{ data.description }}.</p>*/
/*                         <ul class="social-icons">*/
/*                             <li><a href="#" class="fa fa-facebook"></a></li>*/
/*                             <li><a href="#" class="fa fa-twitter"></a></li>*/
/*                             <li><a href="#" class="fa fa-linkedin"></a></li>*/
/*                             <li><a href="#" class="fa fa-rss"></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-4 col-sm-12 col-xs-12">*/
/*                     <div class="my-skills">*/
/*                         <h4>Contact us</h4>*/
/*                         <p> {{ data.address }}</p>*/
/*                         <p>{{ data.contact }}</p>*/
/*                         <ul class="progess-bars">*/
/*                             <li>*/
/*                                 <span>ANIMATIONS 85%</span>*/
/*                                 <div class="progress">*/
/*                                     <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span>PHOTOSHOP 95%</span>*/
/*                                 <div class="progress">*/
/*                                     <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span>MARKETING 40%</span>*/
/*                                 <div class="progress">*/
/*                                     <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* */
/*     <section id="gallery" class="page-section">*/
/*         <div class="container">*/
/*             <div class="row page-heading">*/
/*                 <div class="col-md-8 col-sm-8">*/
/*                     <h3 class="page-title">My Gallery</h3>*/
/*                     <p class="page-subtitle">CHECK SOME OF MY LAST PROJECTS</p>*/
/*                 </div>*/
/*                 <div class="col-md-4 col-sm-4 hidden-xs text-right">*/
/*                     <p class="page-icon"><i class="fa fa-camera"></i></p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="gallery-holder">*/
/*                     <div class="col-md-3 col-sm-6 col-xs-12 gallery-item">*/
/*                         <div class="gallery-thumb">*/
/*                             <img src="img/1.jpg" alt="">*/
/*                             <div class="hover">*/
/*                                 <a href="#" class="fa fa-plus"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6 col-xs-12 gallery-item">*/
/*                         <div class="gallery-thumb">*/
/*                             <img src="img/2.jpg" alt="">*/
/*                             <div class="hover">*/
/*                                 <a href="#" class="fa fa-plus"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6 col-xs-12 gallery-item">*/
/*                         <div class="gallery-thumb">*/
/*                             <img src="img/3.jpg" alt="">*/
/*                             <div class="hover">*/
/*                                 <a href="#" class="fa fa-plus"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6 col-xs-12 gallery-item">*/
/*                         <div class="gallery-thumb">*/
/*                             <img src="img/4.jpg" alt="">*/
/*                             <div class="hover">*/
/*                                 <a href="#" class="fa fa-plus"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6 col-xs-12 gallery-item">*/
/*                         <div class="gallery-thumb">*/
/*                             <img src="img/5.jpg" alt="">*/
/*                             <div class="hover">*/
/*                                 <a href="#" class="fa fa-plus"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6 col-xs-12 gallery-item">*/
/*                         <div class="gallery-thumb">*/
/*                             <img src="img/6.jpg" alt="">*/
/*                             <div class="hover">*/
/*                                 <a href="#" class="fa fa-plus"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6 col-xs-12 gallery-item">*/
/*                         <div class="gallery-thumb">*/
/*                             <img src="img/7.jpg" alt="">*/
/*                             <div class="hover">*/
/*                                 <a href="#" class="fa fa-plus"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6 col-xs-12 gallery-item">*/
/*                         <div class="gallery-thumb">*/
/*                             <img src="img/8.jpg" alt="">*/
/*                             <div class="hover">*/
/*                                 <a href="#" class="fa fa-plus"></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* */
/*     <section id="contact" class="page-section">*/
/*         <div class="container">*/
/*             <div class="row page-heading">*/
/*                 <div class="col-md-8 col-sm-8">*/
/*                     <h3 class="page-title">Contact Me</h3>*/
/*                     <p class="page-subtitle">FEEL FREE TO SEND A MESSAGE</p>*/
/*                 </div>*/
/*                 <div class="col-md-4 col-sm-4 hidden-xs text-right">*/
/*                     <p class="page-icon"><i class="fa fa-envelope"></i></p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-9 col-sm-12">*/
/*                     <div class="row">*/
/*                         <form action="#" method="post" class="contact-form">*/
/*                             <fieldset class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <input type="text" id="name" placeholder="Name...">*/
/*                             </fieldset>*/
/*                             <fieldset class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <input type="email" id="email" placeholder="Email...">*/
/*                             </fieldset>*/
/*                             <fieldset class="col-md-4 col-sm-12 col-xs-12">*/
/*                                 <input type="text" id="subject" placeholder="Subject...">*/
/*                             </fieldset>*/
/*                             <fieldset class="col-md-12 col-sm-12 col-xs-12">*/
/*                                 <textarea name="message" id="message" cols="30" rows="6" placeholder="Message..."></textarea>*/
/*                             </fieldset>*/
/*                             <fieldset class="col-md-12 col-sm-12 col-xs-12">*/
/*                                 <input type="submit" class="button default" value="Send Message">*/
/*                             </fieldset>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-12">*/
/*                     <div class="contact-info">*/
/*                         <h4>Contact Information</h4>*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius aliquam diam, ac cursus enim. Ut interdum leo mattis varius pulvinar.</p>*/
/*                         <ul class="social-icons">*/
/*                             <li><a href="#" class="fa fa-facebook"></a></li>*/
/*                             <li><a href="#" class="fa fa-twitter"></a></li>*/
/*                             <li><a href="#" class="fa fa-linkedin"></a></li>*/
/*                             <li><a href="#" class="fa fa-rss"></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* */
/*     <footer class="site-footer">*/
/*         <div class="container">*/
/*             <div class="text-center">*/
/*                 <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>*/
/*                 <p class="copyright-text">Copyright &copy; 2084 Company Name</p>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/* */
/*     </body>*/
/* {% endblock %}*/
