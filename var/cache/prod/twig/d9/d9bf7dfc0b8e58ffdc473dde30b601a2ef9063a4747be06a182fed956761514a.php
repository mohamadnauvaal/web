<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Actions/Grid/submit.html.twig */
class __TwigTemplate_0425b91c1e55ef3fd8799f0f15fb746eb192639b7c2fc958d8e81533500c88fb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Common/Grid/Actions/Grid/submit.html.twig", 26);
        // line 27
        echo "
<button type=\"button\"
        id=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "id", []), "html", null, true);
        echo "_grid_action_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "id", []), "html", null, true);
        echo "\"
        class=\"dropdown-item js-grid-action-submit-btn\"
        data-confirm-message=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", []), "confirm_message", []), "html", null, true);
        echo "\"
        data-url=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", []), "submit_route", []));
        echo "\"
        data-method=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", []), "submit_method", []), "html", null, true);
        echo "\"
        data-csrf=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "id", [])), "html", null, true);
        echo "\"
>
  ";
        // line 36
        if ( !twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", []))) {
            // line 37
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 39
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "name", []), "html", null, true);
        echo "
</button>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Grid/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 39,  65 => 37,  63 => 36,  58 => 34,  54 => 33,  50 => 32,  46 => 31,  39 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Grid/submit.html.twig", "/home/hammerstoutdenim/public_html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Grid/submit.html.twig");
    }
}
