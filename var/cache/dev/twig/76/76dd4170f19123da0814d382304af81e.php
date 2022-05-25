<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @OroNavigation/menuUpdate/savedSuccessMessage.html.twig */
class __TwigTemplate_522644f0617f4033658dc30f0adb43c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/menuUpdate/savedSuccessMessage.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/savedSuccessMessage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/savedSuccessMessage.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"#\" onclick=\"window.location.reload(false);return false;\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.reload_link.label"), "html", null, true);
        // line 4
        echo "</a>";
        $context["reloadLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.saved_message", ["%reload_link%" => (isset($context["reloadLink"]) || array_key_exists("reloadLink", $context) ? $context["reloadLink"] : (function () { throw new RuntimeError('Variable "reloadLink" does not exist.', 6, $this->source); })())]);
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/menuUpdate/savedSuccessMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set reloadLink -%}
    <a href=\"#\" onclick=\"window.location.reload(false);return false;\">
        {{- 'oro.navigation.menuupdate.reload_link.label'|trans -}}
    </a>
{%- endset %}
{{ 'oro.navigation.menuupdate.saved_message'|trans({'%reload_link%': reloadLink})|raw }}
", "@OroNavigation/menuUpdate/savedSuccessMessage.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/menuUpdate/savedSuccessMessage.html.twig");
    }
}