<?php

namespace WPML\Core;

use \WPML\Core\Twig\Environment;
use \WPML\Core\Twig\Error\LoaderError;
use \WPML\Core\Twig\Error\RuntimeError;
use \WPML\Core\Twig\Markup;
use \WPML\Core\Twig\Sandbox\SecurityError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedTagError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFilterError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFunctionError;
use \WPML\Core\Twig\Source;
use \WPML\Core\Twig\Template;

/* slot-subform-sidebars.twig */
class __TwigTemplate_16e6160e9257f13763d2ae9a28fbe902db686539d65117637e86a3973de49759 extends \WPML\Core\Twig\Template
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
        // line 1
        if ( !(isset($context["slot_settings"]) || array_key_exists("slot_settings", $context))) {
            // line 2
            echo "    ";
            $context["slot_settings"] = ($context["default_sidebars_slot"] ?? null);
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("preview.twig", "slot-subform-sidebars.twig", 5)->display(twig_array_merge($context, ["preview" => ($context["preview"] ?? null)]));
        // line 6
        echo "
<div class=\"wpml-ls-subform-options\">

    ";
        // line 9
        $this->loadTemplate("dropdown-sidebars.twig", "slot-subform-sidebars.twig", 9)->display(twig_array_merge($context, ["slug" =>         // line 11
($context["slug"] ?? null), "settings" =>         // line 12
($context["settings"] ?? null), "sidebars" =>         // line 13
($context["slots"] ?? null), "strings" =>         // line 14
($context["strings"] ?? null)]));
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-sidebars.twig", 18)->display(twig_array_merge($context, ["id" => ("in-sidebars-" .         // line 20
($context["slug"] ?? null)), "name" => (("sidebars[" .         // line 21
($context["slug"] ?? null)) . "][template]"), "value" => $this->getAttribute(        // line 22
($context["slot_settings"] ?? null), "template", []), "slot_type" => "sidebars"]));
        // line 26
        echo "
    ";
        // line 27
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-sidebars.twig", 27)->display(twig_array_merge($context, ["name_base" => (("sidebars[" .         // line 29
($context["slug"] ?? null)) . "]"), "slot_settings" =>         // line 30
($context["slot_settings"] ?? null), "strings" =>         // line 31
($context["strings"] ?? null), "template_slug" => $this->getAttribute(        // line 32
($context["slot_settings"] ?? null), "template", [])]));
        // line 35
        echo "
    <h4><label for=\"widget-title-in-";
        // line 36
        echo \WPML\Core\twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 37
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "sidebars", []), "label_widget_title", []), "html", null, true);
        echo "  ";
        $this->loadTemplate("tooltip.twig", "slot-subform-sidebars.twig", 37)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "widget_title", [])]));
        echo "</label></h4>

    <input type=\"text\" id=\"widget-title-in-";
        // line 39
        echo \WPML\Core\twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\"
           name=\"sidebars[";
        // line 40
        echo \WPML\Core\twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "][widget_title]\" value=\"";
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["slot_settings"] ?? null), "widget_title", []), "html", null, true);
        echo "\" size=\"40\">


    ";
        // line 43
        $this->loadTemplate("panel-colors.twig", "slot-subform-sidebars.twig", 43)->display(twig_array_merge($context, ["strings" =>         // line 45
($context["strings"] ?? null), "id" => ("in-sidebars-" .         // line 46
($context["slug"] ?? null)), "name_base" => (("sidebars[" .         // line 47
($context["slug"] ?? null)) . "]"), "slot_settings" =>         // line 48
($context["slot_settings"] ?? null), "color_schemes" =>         // line 49
($context["color_schemes"] ?? null)]));
        // line 52
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-sidebars.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 52,  102 => 49,  101 => 48,  100 => 47,  99 => 46,  98 => 45,  97 => 43,  89 => 40,  85 => 39,  78 => 37,  74 => 36,  71 => 35,  69 => 32,  68 => 31,  67 => 30,  66 => 29,  65 => 27,  62 => 26,  60 => 22,  59 => 21,  58 => 20,  57 => 18,  54 => 17,  52 => 14,  51 => 13,  50 => 12,  49 => 11,  48 => 9,  43 => 6,  41 => 5,  38 => 4,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not slot_settings is defined %}
    {% set slot_settings = default_sidebars_slot %}
{% endif %}

{% include 'preview.twig' with {\"preview\": preview } %}

<div class=\"wpml-ls-subform-options\">

    {% include 'dropdown-sidebars.twig'
        with {
            \"slug\":     slug,
            \"settings\": settings,
            \"sidebars\": slots,
            \"strings\": strings,
        }
    %}

    {% include 'dropdown-templates.twig'
        with {
            \"id\": \"in-sidebars-\" ~ slug,
            \"name\": \"sidebars[\" ~ slug ~ \"][template]\",
            \"value\": slot_settings.template,
            \"slot_type\": \"sidebars\",
        }
    %}

    {% include 'checkboxes-includes.twig'
        with {
            \"name_base\": \"sidebars[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings,
            \"strings\": strings,
            \"template_slug\": slot_settings.template,
        }
    %}

    <h4><label for=\"widget-title-in-{{ slug }}\">
            {{ strings.sidebars.label_widget_title }}  {% include 'tooltip.twig' with { \"content\": strings.tooltips.widget_title } %}</label></h4>

    <input type=\"text\" id=\"widget-title-in-{{ slug }}\"
           name=\"sidebars[{{ slug }}][widget_title]\" value=\"{{ slot_settings.widget_title }}\" size=\"40\">


    {% include 'panel-colors.twig'
        with {
            \"strings\": strings,
            \"id\": \"in-sidebars-\" ~ slug,
            \"name_base\": \"sidebars[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings,
            \"color_schemes\": color_schemes,
        }
    %}

</div>", "slot-subform-sidebars.twig", "/www/motto_495/public/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-sidebars.twig");
    }
}
