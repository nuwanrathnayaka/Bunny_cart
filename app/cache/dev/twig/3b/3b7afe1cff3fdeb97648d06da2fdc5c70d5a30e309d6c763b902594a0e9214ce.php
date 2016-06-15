<?php

/* account/new.html.twig */
class __TwigTemplate_595ede255431520a642365ca487c586082aa1ace219fd1446a24eb5ddd0c9e23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/new.html.twig", 1);
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
        $__internal_9a6030ead27b38795afba746d81e7bb3759a70d217d7f8bc24595535f0d41bc4 = $this->env->getExtension("native_profiler");
        $__internal_9a6030ead27b38795afba746d81e7bb3759a70d217d7f8bc24595535f0d41bc4->enter($__internal_9a6030ead27b38795afba746d81e7bb3759a70d217d7f8bc24595535f0d41bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6030ead27b38795afba746d81e7bb3759a70d217d7f8bc24595535f0d41bc4->leave($__internal_9a6030ead27b38795afba746d81e7bb3759a70d217d7f8bc24595535f0d41bc4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebd2dce948d85f56bee5b73ec2d7e3579f5e49e7194cdfeb3980d1f5838e6d3c = $this->env->getExtension("native_profiler");
        $__internal_ebd2dce948d85f56bee5b73ec2d7e3579f5e49e7194cdfeb3980d1f5838e6d3c->enter($__internal_ebd2dce948d85f56bee5b73ec2d7e3579f5e49e7194cdfeb3980d1f5838e6d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Account creation</h1>
    <div style=\"width: 50%; position: absolute;right: 40%\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br>
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ebd2dce948d85f56bee5b73ec2d7e3579f5e49e7194cdfeb3980d1f5838e6d3c->leave($__internal_ebd2dce948d85f56bee5b73ec2d7e3579f5e49e7194cdfeb3980d1f5838e6d3c_prof);

    }

    public function getTemplateName()
    {
        return "account/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Account creation</h1>*/
/*     <div style="width: 50%; position: absolute;right: 40%">*/
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br>*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/*     </div>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('account_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
