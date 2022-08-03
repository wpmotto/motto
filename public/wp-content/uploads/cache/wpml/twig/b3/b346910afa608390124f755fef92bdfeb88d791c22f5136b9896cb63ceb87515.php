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

/* slot-subform-statics-shortcode_actions.twig */
class __TwigTemplate_d2f7e537f78ad4ccef77d972bdb4d2ab1d88386515a588a0834e3caaf10542b2 extends \WPML\Core\Twig\Template
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
        $this->loadTemplate("preview.twig", "slot-subform-statics-shortcode_actions.twig", 1)->display(twig_array_merge($context, ["preview" => $this->getAttribute($this->getAttribute(($context["previews"] ?? null), "statics", []), "shortcode_actions", [])]));
        // line 2
        echo "
<div class=\"wpml-ls-subform-options\">

\t";
        // line 5
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-statics-shortcode_actions.twig", 5)->display(twig_array_merge($context, ["id" => "in-shortcode-action", "name" => "statics[shortcode_actions][template]", "value" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
($context["settings"] ?? null), "statics", []), "shortcode_actions", []), "template", []), "slot_type" => "shortcode_actions"]));
        // line 13
        echo "
\t";
        // line 14
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-statics-shortcode_actions.twig", 14)->display(twig_array_merge($context, ["id" => "in-shortcode-actions", "name_base" => "statics[shortcode_actions]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 18
($context["settings"] ?? null), "statics", []), "shortcode_actions", []), "template_slug" => $this->getAttribute(        // line 19
($context["slot_settings"] ?? null), "template", [])]));
        // line 22
        echo "
\t";
        // line 23
        $this->loadTemplate("panel-colors.twig", "slot-subform-statics-shortcode_actions.twig", 23)->display(twig_array_merge($context, ["id" => "in-shortcode-actions", "name_base" => "statics[shortcode_actions]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 27
($context["settings"] ?? null), "statics", []), "shortcode_actions", [])]));
        // line 30
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-statics-shortcode_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 30,  53 => 27,  52 => 23,  49 => 22,  47 => 19,  46 => 18,  45 => 14,  42 => 13,  40 => 9,  39 => 5,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include 'preview.twig' with {\"preview\": previews.statics.shortcode_actions } %}

<div class=\"wpml-ls-subform-options\">

\t{% include 'dropdown-templates.twig'
\t\twith {
\t\t\t\"id\": \"in-shortcode-action\",
\t\t\t\"name\": \"statics[shortcode_actions][template]\",
\t\t\t\"value\":     settings.statics.shortcode_actions.template,
\t\t\t\"slot_type\": \"shortcode_actions\",
\t\t}
\t%}

\t{% include 'checkboxes-includes.twig'
\t\twith {
\t\t\t\"id\": \"in-shortcode-actions\",
\t\t\t\"name_base\": \"statics[shortcode_actions]\",
\t\t\t\"slot_settings\": settings.statics.shortcode_actions,
\t\t\t\"template_slug\": slot_settings.template,
\t\t}
\t%}

\t{% include 'panel-colors.twig'
\t\twith {
\t\t\t\"id\": \"in-shortcode-actions\",
\t\t\t\"name_base\": \"statics[shortcode_actions]\",
\t\t\t\"slot_settings\": settings.statics.shortcode_actions,
\t\t}
\t%}

</div>", "slot-subform-statics-shortcode_actions.twig", "/www/motto_495/public/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-statics-shortcode_actions.twig");
    }
}
