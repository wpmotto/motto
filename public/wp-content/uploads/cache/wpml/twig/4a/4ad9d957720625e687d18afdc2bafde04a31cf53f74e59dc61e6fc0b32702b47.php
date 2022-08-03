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

/* radio-position-menu.twig */
class __TwigTemplate_e19a80e71c15d1ebfa027a14d66f770a6c628899d4e01f53cb5f1ff408b317d7 extends \WPML\Core\Twig\Template
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
        if ( !$this->getAttribute(($context["slot_settings"] ?? null), "position_in_menu", [])) {
            // line 2
            echo "    ";
            $context["menu_position"] = "after";
        } else {
            // line 4
            echo "    ";
            $context["menu_position"] = $this->getAttribute(($context["slot_settings"] ?? null), "position_in_menu", []);
        }
        // line 6
        echo "
<h4><label>";
        // line 7
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "position_label", []), "html", null, true);
        echo "</label>  ";
        $this->loadTemplate("tooltip.twig", "radio-position-menu.twig", 7)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "menu_position", [])]));
        echo "</h4>
<ul>
    <li>
        <label>
            <input type=\"radio\" name=\"";
        // line 11
        if (($context["name_base"] ?? null)) {
            echo \WPML\Core\twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[position_in_menu]";
        } else {
            echo "position_in_menu";
        }
        echo "\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"before\"";
        // line 13
        if ((($context["menu_position"] ?? null) == "before")) {
            echo " checked=\"checked\"";
        }
        echo ">";
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "position_first_item", []), "html", null, true);
        echo "
        </label>
    </li>
    <li>
        <label>
            <input type=\"radio\" name=\"";
        // line 18
        if (($context["name_base"] ?? null)) {
            echo \WPML\Core\twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[position_in_menu]";
        } else {
            echo "position_in_menu";
        }
        echo "\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"after\"";
        // line 20
        if ((($context["menu_position"] ?? null) == "after")) {
            echo " checked=\"checked\"";
        }
        echo ">";
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "position_last_item", []), "html", null, true);
        echo "
        </label>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "radio-position-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  76 => 18,  64 => 13,  54 => 11,  45 => 7,  42 => 6,  38 => 4,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not slot_settings.position_in_menu %}
    {% set menu_position = 'after' %}
{% else %}
    {% set menu_position = slot_settings.position_in_menu %}
{% endif %}

<h4><label>{{ strings.menus.position_label }}</label>  {% include 'tooltip.twig' with { \"content\": strings.tooltips.menu_position } %}</h4>
<ul>
    <li>
        <label>
            <input type=\"radio\" name=\"{% if name_base %}{{ name_base }}[position_in_menu]{% else %}position_in_menu{% endif %}\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"before\"{% if menu_position == 'before' %} checked=\"checked\"{% endif %}>{{ strings.menus.position_first_item }}
        </label>
    </li>
    <li>
        <label>
            <input type=\"radio\" name=\"{% if name_base %}{{ name_base }}[position_in_menu]{% else %}position_in_menu{% endif %}\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"after\"{% if menu_position == 'after' %} checked=\"checked\"{% endif %}>{{ strings.menus.position_last_item }}
        </label>
    </li>
</ul>", "radio-position-menu.twig", "/www/motto_495/public/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/radio-position-menu.twig");
    }
}
