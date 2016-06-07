<?php

/* :user:show.html.twig */
class __TwigTemplate_3f6964f8dc290ab992b966da6a62a0cd98af246c726fb1a66a11f146df106b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_cafe4d106f5413d37d93bfd2be723733197fa9e958b1adcd3d4eced9d7ab4d66 = $this->env->getExtension("native_profiler");
        $__internal_cafe4d106f5413d37d93bfd2be723733197fa9e958b1adcd3d4eced9d7ab4d66->enter($__internal_cafe4d106f5413d37d93bfd2be723733197fa9e958b1adcd3d4eced9d7ab4d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cafe4d106f5413d37d93bfd2be723733197fa9e958b1adcd3d4eced9d7ab4d66->leave($__internal_cafe4d106f5413d37d93bfd2be723733197fa9e958b1adcd3d4eced9d7ab4d66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ca8aa4dae4863b88d22844725342eb7d84c98cada32949a80456232043e7f4b = $this->env->getExtension("native_profiler");
        $__internal_0ca8aa4dae4863b88d22844725342eb7d84c98cada32949a80456232043e7f4b->enter($__internal_0ca8aa4dae4863b88d22844725342eb7d84c98cada32949a80456232043e7f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0ca8aa4dae4863b88d22844725342eb7d84c98cada32949a80456232043e7f4b->leave($__internal_0ca8aa4dae4863b88d22844725342eb7d84c98cada32949a80456232043e7f4b_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ user.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <td>{{ user.username }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Password</th>*/
/*                 <td>{{ user.password }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
