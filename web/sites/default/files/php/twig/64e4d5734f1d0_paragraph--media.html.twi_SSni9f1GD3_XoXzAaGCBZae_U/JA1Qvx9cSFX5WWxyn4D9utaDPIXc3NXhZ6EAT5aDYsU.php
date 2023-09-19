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

/* themes/custom/base/templates/paragraphs/paragraph--media.html.twig */
class __TwigTemplate_99ff9e604bf3b0552b8e68e01567bfa0c5266005b57950eabb7010855bee3053 extends \Twig\Template
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
        echo "<div class=\"media-grid\">
  <h1>";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_section_heading", [], "any", false, false, true, 2), 0, [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "</h1>
    <div class=\"row\">
    ";
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_media", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "      <div class=\"col mt-4 mb-4\">
                <img class=\"first-slide\" style=\"width: 344px; height: 270px;\" src=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 7), "field_media_image", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "getFileUri", [], "method", false, false, true, 7), 7, $this->source)), "html", null, true);
            echo "\" alt=\"Second slide\">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/base/templates/paragraphs/paragraph--media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  55 => 7,  52 => 6,  47 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"media-grid\">
  <h1>{{ content.field_section_heading.0 }}</h1>
    <div class=\"row\">
    {# {{ kint(paragraph.field_media.entity.field_media_image.entity.getFileUri()) }} #}
    {% for item in paragraph.field_media %}
      <div class=\"col mt-4 mb-4\">
                <img class=\"first-slide\" style=\"width: 344px; height: 270px;\" src=\"{{ file_url(item.entity.field_media_image.entity.getFileUri()) }}\" alt=\"Second slide\">
      </div>
    {% endfor %}
    </div>
</div>", "themes/custom/base/templates/paragraphs/paragraph--media.html.twig", "/var/www/html/web/themes/custom/base/templates/paragraphs/paragraph--media.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5);
        static $filters = array("escape" => 2);
        static $functions = array("file_url" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['file_url']
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
