<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8c7798432cd58ac316e6d5ff2ecfa45467e2409eb0674c38130eebe3e581d13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11b164b9d162c7118649d0ff2b3f61282154a64a627065645350195f91daa51e = $this->env->getExtension("native_profiler");
        $__internal_11b164b9d162c7118649d0ff2b3f61282154a64a627065645350195f91daa51e->enter($__internal_11b164b9d162c7118649d0ff2b3f61282154a64a627065645350195f91daa51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11b164b9d162c7118649d0ff2b3f61282154a64a627065645350195f91daa51e->leave($__internal_11b164b9d162c7118649d0ff2b3f61282154a64a627065645350195f91daa51e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ebd3af5218b615827ab2b39e3326249f1825132ffef93a55e949878e5412769 = $this->env->getExtension("native_profiler");
        $__internal_5ebd3af5218b615827ab2b39e3326249f1825132ffef93a55e949878e5412769->enter($__internal_5ebd3af5218b615827ab2b39e3326249f1825132ffef93a55e949878e5412769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "


    <div class=\"account\">
        <div class=\"container\">
            <div class=\"account-top heading\">
                <h2>ACCOUNT</h2>
            </div>
            <div class=\"account-main\">
                <div class=\"col-md-6 account-left\">
                    <h3>Existing User</h3>
                    <div class=\"account-bottom\">
                        <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input id=\"username\" name=\"_username\" placeholder=\"Email\" type=\"text\" tabindex=\"3\" required=\"required\">
                        <input id=\"password\" name=\"_password\" placeholder=\"Password\" type=\"password\" tabindex=\"4\" required=\"required\">
                        <div class=\"address\">
                            <a class=\"forgot\" href=\"#\">Forgot Your Password?</a>
                            <input type=\"submit\" value=\"Login\" id=\"_submit\" name=\"_submit\">
                        </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6 account-right account-left\">
                    <h3>New User? Create an Account</h3>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" >Create an Account</a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_5ebd3af5218b615827ab2b39e3326249f1825132ffef93a55e949878e5412769->leave($__internal_5ebd3af5218b615827ab2b39e3326249f1825132ffef93a55e949878e5412769_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 34,  62 => 21,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* */
/*     <div class="account">*/
/*         <div class="container">*/
/*             <div class="account-top heading">*/
/*                 <h2>ACCOUNT</h2>*/
/*             </div>*/
/*             <div class="account-main">*/
/*                 <div class="col-md-6 account-left">*/
/*                     <h3>Existing User</h3>*/
/*                     <div class="account-bottom">*/
/*                         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input id="username" name="_username" placeholder="Email" type="text" tabindex="3" required="required">*/
/*                         <input id="password" name="_password" placeholder="Password" type="password" tabindex="4" required="required">*/
/*                         <div class="address">*/
/*                             <a class="forgot" href="#">Forgot Your Password?</a>*/
/*                             <input type="submit" value="Login" id="_submit" name="_submit">*/
/*                         </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6 account-right account-left">*/
/*                     <h3>New User? Create an Account</h3>*/
/*                     <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>*/
/*                     <a href="{{ path("fos_user_registration_register") }}" >Create an Account</a>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
