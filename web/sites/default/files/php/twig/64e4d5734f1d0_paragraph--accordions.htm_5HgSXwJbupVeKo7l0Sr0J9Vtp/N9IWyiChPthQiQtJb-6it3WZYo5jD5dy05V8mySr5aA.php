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

/* themes/custom/base/templates/paragraphs/paragraph--accordions.html.twig */
class __TwigTemplate_78de0ca26ebe90e4aa2f28d2a4e9c69e623fa2f6b635b2e4d3b4191c519ff6d0 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"col mt-4 mb-4\">
<h1>";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_section_heading", [], "any", false, false, true, 2), 0, [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "</h1>
<div id=\"accordion\">

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_accordion_section", [], "any", false, false, true, 5), "getIterator", [], "method", false, false, true, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        ";
            $context["active"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 6)) ? ("active") : (""));
            // line 7
            echo "        ";
            $context["show"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 7)) ? ("show") : (""));
            // line 8
            echo "        ";
            $context["collapsed"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 8)) ? ("collapsed") : (""));
            // line 9
            echo "        
  <div class=\"card\">
    <div class=\"card-header\" id=\"heading-";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapse-";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" aria-expanded=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["selected"] ?? null), 13, $this->source), "html", null, true);
            echo "\" aria-controls=\"collapseOne\">
          ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 14), "field_heading", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
        </button>
      </h5>
    </div>

    <div id=\"collapse-";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\" class=\"collapse ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["show"] ?? null), 19, $this->source), "html", null, true);
            echo "\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
      <div class=\"card-body\">
        ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 21), "field_description", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source));
            echo "
      </div>
    </div>
  </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " 

</div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/base/templates/paragraphs/paragraph--accordions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 25,  104 => 21,  97 => 19,  89 => 14,  83 => 13,  78 => 11,  74 => 9,  71 => 8,  68 => 7,  65 => 6,  48 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col mt-4 mb-4\">
<h1>{{ content.field_section_heading.0 }}</h1>
<div id=\"accordion\">

{% for item in paragraph.field_accordion_section.getIterator() %}
        {% set active = (loop.first) ? 'active' : ''  %}
        {% set show = (loop.first) ? 'show' : ''  %}
        {% set collapsed = (loop.first) ? 'collapsed' : ''  %}
        
  <div class=\"card\">
    <div class=\"card-header\" id=\"heading-{{loop.index}}\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapse-{{loop.index}}\" aria-expanded=\"{{ selected }}\" aria-controls=\"collapseOne\">
          {{ item.entity.field_heading.value }}
        </button>
      </h5>
    </div>

    <div id=\"collapse-{{loop.index}}\" class=\"collapse {{ show }}\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
      <div class=\"card-body\">
        {{item.entity.field_description.value|raw}}
      </div>
    </div>
  </div>
{% endfor %} 

</div>

</div>", "themes/custom/base/templates/paragraphs/paragraph--accordions.html.twig", "/var/www/html/web/themes/custom/base/templates/paragraphs/paragraph--accordions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "set" => 6);
        static $filters = array("escape" => 2, "raw" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
