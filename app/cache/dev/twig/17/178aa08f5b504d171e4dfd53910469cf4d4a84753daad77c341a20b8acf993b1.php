<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c645dfe4264ecf16c0b2caead23eb74743df02f7f0a92ad617acf072d90f2566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4cd6d659794603dc58a92de1b2faf134872a535fcd952e229c6b32d31317783 = $this->env->getExtension("native_profiler");
        $__internal_f4cd6d659794603dc58a92de1b2faf134872a535fcd952e229c6b32d31317783->enter($__internal_f4cd6d659794603dc58a92de1b2faf134872a535fcd952e229c6b32d31317783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cd6d659794603dc58a92de1b2faf134872a535fcd952e229c6b32d31317783->leave($__internal_f4cd6d659794603dc58a92de1b2faf134872a535fcd952e229c6b32d31317783_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e16cc51f4a812f87f7bf6514c61e7879035e65d4cdcb918449ff528c88886d6 = $this->env->getExtension("native_profiler");
        $__internal_9e16cc51f4a812f87f7bf6514c61e7879035e65d4cdcb918449ff528c88886d6->enter($__internal_9e16cc51f4a812f87f7bf6514c61e7879035e65d4cdcb918449ff528c88886d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9e16cc51f4a812f87f7bf6514c61e7879035e65d4cdcb918449ff528c88886d6->leave($__internal_9e16cc51f4a812f87f7bf6514c61e7879035e65d4cdcb918449ff528c88886d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4045d23e4e2dc698b3c980da5ac6610ed67bc98d5aa79188c1fa0b79a8be63c5 = $this->env->getExtension("native_profiler");
        $__internal_4045d23e4e2dc698b3c980da5ac6610ed67bc98d5aa79188c1fa0b79a8be63c5->enter($__internal_4045d23e4e2dc698b3c980da5ac6610ed67bc98d5aa79188c1fa0b79a8be63c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4045d23e4e2dc698b3c980da5ac6610ed67bc98d5aa79188c1fa0b79a8be63c5->leave($__internal_4045d23e4e2dc698b3c980da5ac6610ed67bc98d5aa79188c1fa0b79a8be63c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f5b6ed22fe141b1debbb8aa8b6c9962cd2ca5306195df9c24fbd3eda8eeb3d5 = $this->env->getExtension("native_profiler");
        $__internal_5f5b6ed22fe141b1debbb8aa8b6c9962cd2ca5306195df9c24fbd3eda8eeb3d5->enter($__internal_5f5b6ed22fe141b1debbb8aa8b6c9962cd2ca5306195df9c24fbd3eda8eeb3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f5b6ed22fe141b1debbb8aa8b6c9962cd2ca5306195df9c24fbd3eda8eeb3d5->leave($__internal_5f5b6ed22fe141b1debbb8aa8b6c9962cd2ca5306195df9c24fbd3eda8eeb3d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
