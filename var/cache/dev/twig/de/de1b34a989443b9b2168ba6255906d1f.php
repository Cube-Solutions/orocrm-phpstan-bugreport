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

/* @OroEntityExtend/Datagrid/Property/multiEnum.html.twig */
class __TwigTemplate_aa86f80901066749120f8658249089f2 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityExtend/Datagrid/Property/multiEnum.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityExtend/Datagrid/Property/multiEnum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityExtend/Datagrid/Property/multiEnum.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "<ul class=\"unstyled options\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Oro\Bundle\EntityExtendBundle\Twig\EnumExtension']->sortEnum((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 3, $this->source); })()), (isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 3, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 4
                echo "    <li>";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityExtendBundle\Twig\EnumExtension']->transEnum($context["id"], (isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 4, $this->source); })())), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</ul>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntityExtend/Datagrid/Property/multiEnum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  55 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if value is not empty %}
<ul class=\"unstyled options\">
    {% for id in value|sort_enum(entity_class) %}
    <li>{{ id|trans_enum(entity_class) }}</li>
    {% endfor %}
</ul>
{% endif %}
", "@OroEntityExtend/Datagrid/Property/multiEnum.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityExtendBundle/Resources/views/Datagrid/Property/multiEnum.html.twig");
    }
}
