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

/* @OroChart/Chart/flow.html.twig */
class __TwigTemplate_f1c5dba5981e515827b07d8db64c01ed extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroChart/Chart/flow.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChart/Chart/flow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChart/Chart/flow.html.twig"));

        // line 1
        $macros["chart"] = $this->macros["chart"] = $this->loadTemplate("@OroChart/macros.html.twig", "@OroChart/Chart/flow.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            echo "    ";
            echo twig_call_macro($macros["chart"], "macro_renderChart", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })()), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()], 4, $context, $this->getSourceContext());
            echo "
";
        } else {
            // line 6
            echo "    <div class=\"no-data\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.no_data_found"), "html", null, true);
            echo "
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroChart/Chart/flow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  59 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroChart/macros.html.twig' as chart %}

{% if data|length>0  %}
    {{ chart.renderChart(data, options, config, isMobileVersion()) }}
{% else %}
    <div class=\"no-data\">
        {{ 'oro.dashboard.no_data_found'|trans }}
    </div>
{% endif %}
", "@OroChart/Chart/flow.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ChartBundle/Resources/views/Chart/flow.html.twig");
    }
}
