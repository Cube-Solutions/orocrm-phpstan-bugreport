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

/* @OroHangoutsCall/js_modules_config.html.twig */
class __TwigTemplate_97da2edfa925dc791905663f17757158 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroHangoutsCall/js_modules_config.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/js_modules_config.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/js_modules_config.html.twig"));

        // line 1
        $macros["Asset"] = $this->macros["Asset"] = $this->loadTemplate("@OroAsset/Asset.html.twig", "@OroHangoutsCall/js_modules_config.html.twig", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["Asset"], "macro_js_modules_config", [["orohangoutscall/js/app/views/start-button-view" => ["initialApps" => $this->extensions['Oro\Bundle\HangoutsCallBundle\Twig\OroHangoutsCallExtension']->getInitialApps(), "appHost" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "host", [], "any", false, false, false, 5)]]], 2, $context, $this->getSourceContext());
        // line 7
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroHangoutsCall/js_modules_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  49 => 5,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroAsset/Asset.html.twig' as Asset %}
{{ Asset.js_modules_config({
    'orohangoutscall/js/app/views/start-button-view': {
        initialApps: get_hangoutscall_initail_apps(),
        appHost: app.request.host
    }
}) }}
", "@OroHangoutsCall/js_modules_config.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-hangouts-call-bundle/Resources/views/js_modules_config.html.twig");
    }
}
