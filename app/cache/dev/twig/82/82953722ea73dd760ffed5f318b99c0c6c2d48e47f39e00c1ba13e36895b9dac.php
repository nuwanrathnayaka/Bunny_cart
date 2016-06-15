<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7934b5cc76c2d492032167d390dd71af5493b4828c710652d2a4189a21d75227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed565e873617b917739029e0072129dc0134553aaebb5e20a2b09165260fa9d8 = $this->env->getExtension("native_profiler");
        $__internal_ed565e873617b917739029e0072129dc0134553aaebb5e20a2b09165260fa9d8->enter($__internal_ed565e873617b917739029e0072129dc0134553aaebb5e20a2b09165260fa9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed565e873617b917739029e0072129dc0134553aaebb5e20a2b09165260fa9d8->leave($__internal_ed565e873617b917739029e0072129dc0134553aaebb5e20a2b09165260fa9d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52cd0f47226744f6950c4e574dd144fe737c5d5054b7b566aee4d54842589387 = $this->env->getExtension("native_profiler");
        $__internal_52cd0f47226744f6950c4e574dd144fe737c5d5054b7b566aee4d54842589387->enter($__internal_52cd0f47226744f6950c4e574dd144fe737c5d5054b7b566aee4d54842589387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_52cd0f47226744f6950c4e574dd144fe737c5d5054b7b566aee4d54842589387->leave($__internal_52cd0f47226744f6950c4e574dd144fe737c5d5054b7b566aee4d54842589387_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_217397fc9ad851daae920d3153588188c017cf84069b55b9b09f080e995d75b0 = $this->env->getExtension("native_profiler");
        $__internal_217397fc9ad851daae920d3153588188c017cf84069b55b9b09f080e995d75b0->enter($__internal_217397fc9ad851daae920d3153588188c017cf84069b55b9b09f080e995d75b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_217397fc9ad851daae920d3153588188c017cf84069b55b9b09f080e995d75b0->leave($__internal_217397fc9ad851daae920d3153588188c017cf84069b55b9b09f080e995d75b0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_03f5bdea7b4a2371ebfa72549a4123c87f638dae261781775fafe5f479982f32 = $this->env->getExtension("native_profiler");
        $__internal_03f5bdea7b4a2371ebfa72549a4123c87f638dae261781775fafe5f479982f32->enter($__internal_03f5bdea7b4a2371ebfa72549a4123c87f638dae261781775fafe5f479982f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_03f5bdea7b4a2371ebfa72549a4123c87f638dae261781775fafe5f479982f32->leave($__internal_03f5bdea7b4a2371ebfa72549a4123c87f638dae261781775fafe5f479982f32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
