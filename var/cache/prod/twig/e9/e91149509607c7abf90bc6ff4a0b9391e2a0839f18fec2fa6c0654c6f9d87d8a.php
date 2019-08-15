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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/badge.html.twig */
class __TwigTemplate_e698af488382f952359a08a3f816a97ab74c9789f726d81fca865a638e678657 extends \Twig\Template
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
<div class=\"text-right\">
";
        // line 27
        if ( !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", []), "field", []), [], "array"))) {
            // line 28
            echo "  <span class=\"badge rounded badge-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", []), "badge_type", []), "html", null, true);
            echo "\">
    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", []), "field", []), [], "array"), "html", null, true);
            echo "
  </span>
";
        } else {
            // line 32
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", []), "empty_value", []), "html", null, true);
            echo "
";
        }
        // line 34
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/badge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 34,  47 => 32,  41 => 29,  36 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/badge.html.twig", "/home/hammerstoutdenim/public_html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/badge.html.twig");
    }
}
