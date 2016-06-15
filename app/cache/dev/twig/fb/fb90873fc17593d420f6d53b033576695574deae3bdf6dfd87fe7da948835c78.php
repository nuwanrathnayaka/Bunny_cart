<?php

/* account/show.html.twig */
class __TwigTemplate_9d48f69485245ea8f25a754be0e68bcc7c86cd61abceefe8396a8d9295f9d747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/show.html.twig", 1);
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
        $__internal_09e8ee5499815837d677a67d88af5332575a7ac523e23fef4a040152f96b979a = $this->env->getExtension("native_profiler");
        $__internal_09e8ee5499815837d677a67d88af5332575a7ac523e23fef4a040152f96b979a->enter($__internal_09e8ee5499815837d677a67d88af5332575a7ac523e23fef4a040152f96b979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e8ee5499815837d677a67d88af5332575a7ac523e23fef4a040152f96b979a->leave($__internal_09e8ee5499815837d677a67d88af5332575a7ac523e23fef4a040152f96b979a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d887c51bb98ac3a75913321fe941b526fe99ac5969b6b4d82a2af93b0ee49f6 = $this->env->getExtension("native_profiler");
        $__internal_0d887c51bb98ac3a75913321fe941b526fe99ac5969b6b4d82a2af93b0ee49f6->enter($__internal_0d887c51bb98ac3a75913321fe941b526fe99ac5969b6b4d82a2af93b0ee49f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Account</h1>

    <table>
        <tbody>
            <tr>
                <th>Userid</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profilepic</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "profilePic", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coverpic</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "coverPic", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "category", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Businessname</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "businessName", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("account_edit", array("id" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "userId", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0d887c51bb98ac3a75913321fe941b526fe99ac5969b6b4d82a2af93b0ee49f6->leave($__internal_0d887c51bb98ac3a75913321fe941b526fe99ac5969b6b4d82a2af93b0ee49f6_prof);

    }

    public function getTemplateName()
    {
        return "account/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  105 => 43,  99 => 40,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Account</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Userid</th>*/
/*                 <td>{{ account.userId }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ account.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Profilepic</th>*/
/*                 <td>{{ account.profilePic }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Coverpic</th>*/
/*                 <td>{{ account.coverPic }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Category</th>*/
/*                 <td>{{ account.category }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Businessname</th>*/
/*                 <td>{{ account.businessName }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('account_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('account_edit', { 'id': account.userId }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
