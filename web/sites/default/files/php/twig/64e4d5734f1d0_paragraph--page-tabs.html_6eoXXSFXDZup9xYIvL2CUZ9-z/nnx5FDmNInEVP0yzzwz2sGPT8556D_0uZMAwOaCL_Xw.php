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

/* themes/custom/base/templates/paragraphs/paragraph--page-tabs.html.twig */
class __TwigTemplate_f557880d33fcbb62e9af50b10db7b5ac00d490b00f5a74d8e16597aa1973f5d2 extends \Twig\Template
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
<!--paragraph one field -->

<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
<!--paragraph First field-refrence -->
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tab", [], "any", false, false, true, 7), "getIterator", [], "method", false, false, true, 7));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab_item"]) {
            // line 8
            echo "
        ";
            // line 9
            $context["active"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 9)) ? ("active") : (""));
            // line 10
            echo "        ";
            $context["selected"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 10)) ? ("true") : ("false"));
            // line 11
            echo "  
      <li class=\"nav-item\">
        <a class=\"nav-link ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 13, $this->source), "html", null, true);
            echo "\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "-tab\" data-toggle=\"tab\" href=\"#nav-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"tab-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" aria-selected=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(true);
            echo "\">
            <strong> ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab_item"], "entity", [], "any", false, false, true, 14), "field_tab_name", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo " </strong>
        </a>
      </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  
  
</ul>


<div class=\"tab-content\" id=\"myTabContent\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_tab", [], "any", false, false, true, 23), "getIterator", [], "method", false, false, true, 23));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab_data"]) {
            // line 24
            echo "    
        ";
            // line 25
            $context["active_show"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 25)) ? ("show active") : (""));
            echo " 

      <div class=\"tab-pane fade ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_show"] ?? null), 27, $this->source), "html", null, true);
            echo "\" id=\"nav-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "-tab\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab_data"], "entity", [], "any", false, false, true, 28), "field_tab_body", [], "any", false, false, true, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "        <!--paragraph second field-refrence -->
        <div class=\"content-area\">
            <h3>";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 31), "field_heading", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo " </h3>
            <p>";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 32), "field_description", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source));
                echo " </p> 
        </div>    
            <!--paragraph third fields -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </div>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "   
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/base/templates/paragraphs/paragraph--page-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 38,  172 => 36,  162 => 32,  158 => 31,  154 => 29,  150 => 28,  142 => 27,  137 => 25,  134 => 24,  117 => 23,  109 => 17,  91 => 14,  79 => 13,  75 => 11,  72 => 10,  70 => 9,  67 => 8,  50 => 7,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col mt-4 mb-4\">
<h1>{{ content.field_section_heading.0 }}</h1>
<!--paragraph one field -->

<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
<!--paragraph First field-refrence -->
    {% for tab_item in paragraph.field_tab.getIterator() %}

        {% set active = (loop.first) ? 'active' : ''  %}
        {% set selected = (loop.first) ? 'true' : 'false'  %}
  
      <li class=\"nav-item\">
        <a class=\"nav-link {{ active }}\" id=\"{{loop.index}}-tab\" data-toggle=\"tab\" href=\"#nav-{{loop.index}}\" role=\"tab\" aria-controls=\"tab-{{loop.index}}\" aria-selected=\"{{ true }}\">
            <strong> {{ tab_item.entity.field_tab_name.value }} </strong>
        </a>
      </li>
    {% endfor %}  
  
</ul>


<div class=\"tab-content\" id=\"myTabContent\">
    {% for tab_data in paragraph.field_tab.getIterator()  %}
    
        {% set active_show = (loop.first) ? 'show active' : ''  %} 

      <div class=\"tab-pane fade {{active_show}}\" id=\"nav-{{loop.index}}\" role=\"tabpanel\" aria-labelledby=\"{{loop.index}}-tab\">
        {% for item in tab_data.entity.field_tab_body %}
        <!--paragraph second field-refrence -->
        <div class=\"content-area\">
            <h3>{{ item.entity.field_heading.value }} </h3>
            <p>{{ item.entity.field_description.value|raw}} </p> 
        </div>    
            <!--paragraph third fields -->
        {% endfor %}
      </div>

    {% endfor %}   
</div>

</div>", "themes/custom/base/templates/paragraphs/paragraph--page-tabs.html.twig", "/var/www/html/web/themes/custom/base/templates/paragraphs/paragraph--page-tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "set" => 9);
        static $filters = array("escape" => 2, "raw" => 32);
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
