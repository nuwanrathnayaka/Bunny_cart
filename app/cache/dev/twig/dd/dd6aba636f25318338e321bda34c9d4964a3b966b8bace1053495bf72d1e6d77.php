<?php

/* base.html.twig */
class __TwigTemplate_2f62ea0dfecabb0d2953ec81c1d75c272ef390fab7648d2834832e8ff3054b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea9bc8a13fc93c5627da436d99b1e0fc8d13903ac9f6091cf8e8de20ce4e832e = $this->env->getExtension("native_profiler");
        $__internal_ea9bc8a13fc93c5627da436d99b1e0fc8d13903ac9f6091cf8e8de20ce4e832e->enter($__internal_ea9bc8a13fc93c5627da436d99b1e0fc8d13903ac9f6091cf8e8de20ce4e832e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

            <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/css/memenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/css/templatemo-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script type = \"text/javascript\"
                src = \"http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />

        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
    </head>

    <body>
    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "

    </body>






</html>


";
        
        $__internal_ea9bc8a13fc93c5627da436d99b1e0fc8d13903ac9f6091cf8e8de20ce4e832e->leave($__internal_ea9bc8a13fc93c5627da436d99b1e0fc8d13903ac9f6091cf8e8de20ce4e832e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3a18b290fb92b759b7bf4c2b0d3f9ba0042833b7417f7c7c5282a12fda54cb0 = $this->env->getExtension("native_profiler");
        $__internal_a3a18b290fb92b759b7bf4c2b0d3f9ba0042833b7417f7c7c5282a12fda54cb0->enter($__internal_a3a18b290fb92b759b7bf4c2b0d3f9ba0042833b7417f7c7c5282a12fda54cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3a18b290fb92b759b7bf4c2b0d3f9ba0042833b7417f7c7c5282a12fda54cb0->leave($__internal_a3a18b290fb92b759b7bf4c2b0d3f9ba0042833b7417f7c7c5282a12fda54cb0_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_464815f1e1ef57f6eb808d3027c721c377209e02a05e594db077c1a64cb4bd6d = $this->env->getExtension("native_profiler");
        $__internal_464815f1e1ef57f6eb808d3027c721c377209e02a05e594db077c1a64cb4bd6d->enter($__internal_464815f1e1ef57f6eb808d3027c721c377209e02a05e594db077c1a64cb4bd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/js/simpleCart.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/js/memenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
            <script>\$(document).ready(function(){\$(\".memenu\").memenu();});</script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/js/vendor/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/js/vendor/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/js/min/plugins.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/account/js/min/main.min.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_464815f1e1ef57f6eb808d3027c721c377209e02a05e594db077c1a64cb4bd6d->leave($__internal_464815f1e1ef57f6eb808d3027c721c377209e02a05e594db077c1a64cb4bd6d_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd41a5d00e5e17a233a047073282727cdb78ca6f73bd760cb2859b30b44caf5 = $this->env->getExtension("native_profiler");
        $__internal_edd41a5d00e5e17a233a047073282727cdb78ca6f73bd760cb2859b30b44caf5->enter($__internal_edd41a5d00e5e17a233a047073282727cdb78ca6f73bd760cb2859b30b44caf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "


    ";
        
        $__internal_edd41a5d00e5e17a233a047073282727cdb78ca6f73bd760cb2859b30b44caf5->leave($__internal_edd41a5d00e5e17a233a047073282727cdb78ca6f73bd760cb2859b30b44caf5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 46,  175 => 45,  164 => 37,  160 => 36,  156 => 35,  152 => 34,  148 => 33,  143 => 31,  137 => 28,  133 => 27,  128 => 26,  122 => 25,  110 => 5,  91 => 50,  89 => 45,  83 => 41,  81 => 25,  71 => 18,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*             <link href="{{ asset('bundles/dist/css/bootstrap.css')  }}" rel="stylesheet" type="text/css" media="all" />*/
/*             <link href="{{ asset('bundles/dist/css/memenu.css')  }}" rel="stylesheet" type="text/css" media="all" />*/
/*             <link href="{{ asset('bundles/dist/css/style.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*             <link href="{{ asset('bundles/dist/css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all">*/
/* */
/*         <link href="{{ asset('bundles/account/css/normalize.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/account/css/font-awesome.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/account/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/account/css/templatemo-style.css') }}" rel="stylesheet">*/
/*         <script type = "text/javascript"*/
/*                 src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,*/
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/dist/js/jquery-1.11.0.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/dist/js/simpleCart.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/dist/js/memenu.js') }}" type="text/javascript"></script>*/
/*             <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/*             <script>$(document).ready(function(){$(".memenu").memenu();});</script>*/
/*             <script src="{{ asset('bundles/dist/js/jquery.easydropdown.js') }}"></script>*/
/* */
/*             <script src="{{ asset('bundles/account/js/vendor/modernizr-2.6.2.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/account/js/vendor/jquery-1.10.2.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/account/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/account/js/min/plugins.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/account/js/min/main.min.js') }}"></script>*/
/* */
/* */
/*         {% endblock %}*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/*     {% block body %}*/
/* */
/* */
/* */
/*     {% endblock %}*/
/* */
/* */
/*     </body>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* </html>*/
/* */
/* */
/* */
