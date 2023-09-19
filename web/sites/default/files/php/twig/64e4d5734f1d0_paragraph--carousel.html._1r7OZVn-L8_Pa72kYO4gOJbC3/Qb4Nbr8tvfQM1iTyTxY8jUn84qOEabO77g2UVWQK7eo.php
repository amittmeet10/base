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

/* themes/custom/base/templates/paragraphs/paragraph--carousel.html.twig */
class __TwigTemplate_2eaeb9a12c779484041eda5edd3b9faa252aacb128ae6f1e9abc7dae5ae4b96e extends \Twig\Template
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
        if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null) == "Full-Width")) {
            // line 2
            echo "    ";
            $context["width"] = "full-width";
        }
        // line 4
        echo "
<div class=\"banner-section ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 5, $this->source), "html", null, true);
        echo "\">
<h1>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_section_heading", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h1>

<div id=\"myCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

  <ol class=\"carousel-indicators\">
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_slides", [], "any", false, false, true, 11), "getIterator", [], "method", false, false, true, 11));
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
        foreach ($context['_seq'] as $context["_key"] => $context["carousel_item"]) {
            // line 12
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 12)) {
                // line 13
                echo "          <li data-target=\"#myCarousel\" data-slide-to=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 13) - 1), "html", null, true);
                echo " class=\"active\"\"></li>
        ";
            } else {
                // line 15
                echo "          <li data-target=\"#myCarousel\" data-slide-to=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 15) - 1), "html", null, true);
                echo "\"></li>
        ";
            }
            // line 17
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
  </ol>


    <div class=\"carousel-inner\">

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_slides", [], "any", false, false, true, 23), "getIterator", [], "method", false, false, true, 23));
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
            // line 24
            echo "
            ";
            // line 26
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 26)) {
                // line 27
                echo "                <div class=\"carousel-item active\">
                  <img class=\"first-slide\" src=\"";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 28), "field_banner_image", [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28), "field_media_image", [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28), "fileuri", [], "any", false, false, true, 28), 28, $this->source), "banner"), "html", null, true);
                echo "\" alt=\"Second slide\">
                  <div class=\"container\">
                    <div class=\"carousel-caption\">
                      <h1>";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 31), "field_heading", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "</h1>
                      <p><a class=\"btn btn-lg btn-primary\" href=\"";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 32), "field_link", [], "any", false, false, true, 32), 0, [], "any", false, false, true, 32), "url", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\" role=\"button\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 32), "field_link", [], "any", false, false, true, 32), 0, [], "any", false, false, true, 32), "title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</a></p>
                    </div>
                  </div>
                </div>

            ";
            } else {
                // line 38
                echo "
              <div class=\"carousel-item\">
                  <img src=\"";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 40), "field_banner_image", [], "any", false, false, true, 40), "entity", [], "any", false, false, true, 40), "field_media_image", [], "any", false, false, true, 40), "entity", [], "any", false, false, true, 40), "fileuri", [], "any", false, false, true, 40), 40, $this->source), "banner"), "html", null, true);
                echo "\" alt=\"img\"> 
                    
                  <div class=\"carousel-caption\">
                    <h1>";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 43), "field_heading", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</h1>
                    <p><a class=\"btn btn-lg btn-primary\" href=\"";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 44), "field_link", [], "any", false, false, true, 44), 0, [], "any", false, false, true, 44), "url", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\" role=\"button\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 44), "field_link", [], "any", false, false, true, 44), 0, [], "any", false, false, true, 44), "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "</a></p>
                  
                  </div>
              </div>
            ";
            }
            // line 49
            echo "
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
        // line 50
        echo " 

    </div>


  <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>

</div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/base/templates/paragraphs/paragraph--carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 50,  184 => 49,  174 => 44,  170 => 43,  164 => 40,  160 => 38,  149 => 32,  145 => 31,  139 => 28,  136 => 27,  133 => 26,  130 => 24,  113 => 23,  92 => 17,  86 => 15,  80 => 13,  77 => 12,  60 => 11,  52 => 6,  48 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if content.field_banner.0['#markup'] == 'Full-Width' %}
    {% set width = 'full-width' %}
{% endif %}

<div class=\"banner-section {{ width }}\">
<h1>{{ content.field_section_heading.0 }}</h1>

<div id=\"myCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

  <ol class=\"carousel-indicators\">
  {% for carousel_item in paragraph.field_slides.getIterator() %}
        {% if loop.first %}
          <li data-target=\"#myCarousel\" data-slide-to=\"{{loop.index - 1}} class=\"active\"\"></li>
        {% else %}
          <li data-target=\"#myCarousel\" data-slide-to=\"{{loop.index - 1}}\"></li>
        {% endif %}
  {% endfor %}  
  </ol>


    <div class=\"carousel-inner\">

        {% for item in paragraph.field_slides.getIterator()  %}

            {# {{ kint(item.entity.field_banner_image.entity.field_media_image.entity.getFileUri()) }} #}
            {% if loop.first %}
                <div class=\"carousel-item active\">
                  <img class=\"first-slide\" src=\"{{ item.entity.field_banner_image.entity.field_media_image.entity.fileuri|image_style('banner') }}\" alt=\"Second slide\">
                  <div class=\"container\">
                    <div class=\"carousel-caption\">
                      <h1>{{item.entity.field_heading.value}}</h1>
                      <p><a class=\"btn btn-lg btn-primary\" href=\"{{item.entity.field_link.0.url}}\" role=\"button\">{{item.entity.field_link.0.title}}</a></p>
                    </div>
                  </div>
                </div>

            {% else %}

              <div class=\"carousel-item\">
                  <img src=\"{{ item.entity.field_banner_image.entity.field_media_image.entity.fileuri|image_style('banner') }}\" alt=\"img\"> 
                    
                  <div class=\"carousel-caption\">
                    <h1>{{ item.entity.field_heading.value }}</h1>
                    <p><a class=\"btn btn-lg btn-primary\" href=\"{{item.entity.field_link.0.url}}\" role=\"button\">{{item.entity.field_link.0.title}}</a></p>
                  
                  </div>
              </div>
            {% endif %}

        {% endfor %} 

    </div>


  <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>

</div>

</div>", "themes/custom/base/templates/paragraphs/paragraph--carousel.html.twig", "/var/www/html/web/themes/custom/base/templates/paragraphs/paragraph--carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "for" => 11);
        static $filters = array("escape" => 5, "image_style" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'image_style'],
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
