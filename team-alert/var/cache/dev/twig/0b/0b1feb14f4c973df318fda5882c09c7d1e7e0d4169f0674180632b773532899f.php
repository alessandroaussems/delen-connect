<?php

/* TranslationBundle:WebUI:index.html.twig */
class __TwigTemplate_0cfd748ef49ddd6a2a23b5ac560a64546107baa6e1b4a546d6e8ab5f6002938c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@Translation/WebUI/base.html.twig", "TranslationBundle:WebUI:index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Translation/WebUI/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:WebUI:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:WebUI:index.html.twig"));

        // line 2
        $context["macro"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"catalogue-list\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogues"]) || array_key_exists("catalogues", $context) ? $context["catalogues"] : (function () { throw new Twig_Error_Runtime('Variable "catalogues" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cataloge"]) {
            // line 8
            echo "        <div class=\"catalouge\">
            <h3>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localeMap"]) || array_key_exists("localeMap", $context) ? $context["localeMap"] : (function () { throw new Twig_Error_Runtime('Variable "localeMap" does not exist.', 9, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["cataloge"], "locale", []), [], "array"), "html", null, true);
            echo "</h3>
            <table class=\"domain-table\">
            ";
            // line 11
            $context["totalMessages"] = 0;
            // line 12
            echo "            ";
            $context["translatedMessages"] = 0;
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, $context["cataloge"], "all", [])));
            foreach ($context['_seq'] as $context["domain"] => $context["messages"]) {
                // line 14
                echo "                ";
                $context["pg"] = 0;
                // line 15
                echo "                ";
                $context["translated"] = 0;
                // line 16
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 17
                    echo "                    ";
                    if (($context["message"] != "")) {
                        // line 18
                        echo "                        ";
                        $context["translated"] = ((isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new Twig_Error_Runtime('Variable "translated" does not exist.', 18, $this->source); })()) + 1);
                        // line 19
                        echo "                    ";
                    }
                    // line 20
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "                ";
                if (((isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new Twig_Error_Runtime('Variable "translated" does not exist.', 21, $this->source); })()) > 0)) {
                    // line 22
                    echo "                    ";
                    $context["pg"] = twig_round((((isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new Twig_Error_Runtime('Variable "translated" does not exist.', 22, $this->source); })()) / twig_length_filter($this->env, $context["messages"])) * 100), 2);
                    // line 23
                    echo "                ";
                }
                // line 24
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_show", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new Twig_Error_Runtime('Variable "configName" does not exist.', 26, $this->source); })()), "domain" => $context["domain"], "locale" => twig_get_attribute($this->env, $this->source, $context["cataloge"], "locale", [])]), "html", null, true);
                echo "\">
                            ";
                // line 27
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "
                        </a>
                    </td>
                    <td class=\"progressbar-cell\">
                        ";
                // line 31
                echo $context["macro"]->macro_progress((isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new Twig_Error_Runtime('Variable "pg" does not exist.', 31, $this->source); })()), "");
                echo "
                    </td>
                    <td>
                        <small>(";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new Twig_Error_Runtime('Variable "translated" does not exist.', 34, $this->source); })()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["messages"]), "html", null, true);
                echo ")</small>
                        <b>";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new Twig_Error_Runtime('Variable "pg" does not exist.', 35, $this->source); })()), "html", null, true);
                echo " %</b>
                    </td>
                </tr>
                ";
                // line 38
                $context["totalMessages"] = ((isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new Twig_Error_Runtime('Variable "totalMessages" does not exist.', 38, $this->source); })()) + twig_length_filter($this->env, $context["messages"]));
                // line 39
                echo "                ";
                $context["translatedMessages"] = ((isset($context["translatedMessages"]) || array_key_exists("translatedMessages", $context) ? $context["translatedMessages"] : (function () { throw new Twig_Error_Runtime('Variable "translatedMessages" does not exist.', 39, $this->source); })()) + (isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new Twig_Error_Runtime('Variable "translated" does not exist.', 39, $this->source); })()));
                // line 40
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['domain'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </table>
            ";
            // line 42
            if (((isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new Twig_Error_Runtime('Variable "totalMessages" does not exist.', 42, $this->source); })()) == 0)) {
                // line 43
                echo "                ";
                $context["pg"] = 100;
                // line 44
                echo "            ";
            } elseif ((((isset($context["translatedMessages"]) || array_key_exists("translatedMessages", $context) ? $context["translatedMessages"] : (function () { throw new Twig_Error_Runtime('Variable "translatedMessages" does not exist.', 44, $this->source); })()) > 0) && ((isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new Twig_Error_Runtime('Variable "totalMessages" does not exist.', 44, $this->source); })()) > 0))) {
                // line 45
                echo "                ";
                $context["pg"] = twig_round((((isset($context["translatedMessages"]) || array_key_exists("translatedMessages", $context) ? $context["translatedMessages"] : (function () { throw new Twig_Error_Runtime('Variable "translatedMessages" does not exist.', 45, $this->source); })()) / (isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new Twig_Error_Runtime('Variable "totalMessages" does not exist.', 45, $this->source); })())) * 100), 2);
                // line 46
                echo "            ";
            } else {
                // line 47
                echo "                ";
                $context["pg"] = 0;
                // line 48
                echo "            ";
            }
            // line 49
            echo "
            <div class=\"text-xs-center\">
                Total progress for this language:
                <small>(";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["translatedMessages"]) || array_key_exists("translatedMessages", $context) ? $context["translatedMessages"] : (function () { throw new Twig_Error_Runtime('Variable "translatedMessages" does not exist.', 52, $this->source); })()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new Twig_Error_Runtime('Variable "totalMessages" does not exist.', 52, $this->source); })()), "html", null, true);
            echo ")</small>
                <b>";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new Twig_Error_Runtime('Variable "pg" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "%</b>
            </div>
            ";
            // line 55
            echo $context["macro"]->macro_progress((isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new Twig_Error_Runtime('Variable "pg" does not exist.', 55, $this->source); })()), "total-progressbar");
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cataloge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function macro_progress($__pg__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "pg" => $__pg__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "progress"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "progress"));

            // line 63
            echo "    ";
            if (((isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new Twig_Error_Runtime('Variable "pg" does not exist.', 63, $this->source); })()) < 60)) {
                // line 64
                echo "        ";
                $context["type"] = "danger";
                // line 65
                echo "    ";
            } elseif (((isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new Twig_Error_Runtime('Variable "pg" does not exist.', 65, $this->source); })()) < 80)) {
                // line 66
                echo "        ";
                $context["type"] = "warning";
                // line 67
                echo "    ";
            } else {
                // line 68
                echo "        ";
                $context["type"] = "success";
                // line 69
                echo "    ";
            }
            // line 70
            echo "    <progress class=\"progress progress-striped progress-";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 70, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new Twig_Error_Runtime('Variable "pg" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\" max=\"100\"></progress>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "TranslationBundle:WebUI:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 70,  258 => 69,  255 => 68,  252 => 67,  249 => 66,  246 => 65,  243 => 64,  240 => 63,  221 => 62,  209 => 58,  200 => 55,  195 => 53,  189 => 52,  184 => 49,  181 => 48,  178 => 47,  175 => 46,  172 => 45,  169 => 44,  166 => 43,  164 => 42,  161 => 41,  155 => 40,  152 => 39,  150 => 38,  144 => 35,  138 => 34,  132 => 31,  125 => 27,  121 => 26,  117 => 24,  114 => 23,  111 => 22,  108 => 21,  102 => 20,  99 => 19,  96 => 18,  93 => 17,  88 => 16,  85 => 15,  82 => 14,  77 => 13,  74 => 12,  72 => 11,  67 => 9,  64 => 8,  60 => 7,  56 => 5,  47 => 4,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@Translation/WebUI/base.html.twig\" %}
{% import _self as macro %}

{% block body %}
<div class=\"container\">
    <div class=\"catalogue-list\">
    {% for cataloge in catalogues %}
        <div class=\"catalouge\">
            <h3>{{ localeMap[cataloge.locale] }}</h3>
            <table class=\"domain-table\">
            {% set totalMessages = 0 %}
            {% set translatedMessages = 0 %}
            {% for domain,messages in cataloge.all|sort %}
                {% set pg = 0 %}
                {% set translated = 0 %}
                {% for message in messages %}
                    {% if message != '' %}
                        {% set translated = translated + 1 %}
                    {% endif %}
                {% endfor %}
                {% if translated > 0 %}
                    {% set pg = (translated/messages|length*100)|round(2) %}
                {% endif %}
                <tr>
                    <td>
                        <a href=\"{{ path(\"translation_show\", {configName: configName, domain:domain, locale:cataloge.locale}) }}\">
                            {{ domain }}
                        </a>
                    </td>
                    <td class=\"progressbar-cell\">
                        {{ macro.progress(pg, \"\") }}
                    </td>
                    <td>
                        <small>({{ translated }} / {{ messages|length }})</small>
                        <b>{{ pg }} %</b>
                    </td>
                </tr>
                {% set totalMessages = totalMessages + messages|length %}
                {% set translatedMessages = translatedMessages + translated %}
            {% endfor %}
            </table>
            {% if totalMessages == 0 %}
                {% set pg = 100 %}
            {% elseif translatedMessages > 0 and totalMessages > 0 %}
                {% set pg = (translatedMessages/totalMessages*100)|round(2) %}
            {% else %}
                {% set pg = 0 %}
            {% endif %}

            <div class=\"text-xs-center\">
                Total progress for this language:
                <small>({{ translatedMessages }} / {{ totalMessages }})</small>
                <b>{{ pg }}%</b>
            </div>
            {{ macro.progress(pg, \"total-progressbar\") }}
        </div>
    {% endfor %}
    </div>
</div>
{% endblock %}

{% macro progress(pg, class) %}
    {% if pg < 60 %}
        {% set type=\"danger\" %}
    {% elseif pg < 80 %}
        {% set type=\"warning\" %}
    {% else %}
        {% set type=\"success\" %}
    {% endif %}
    <progress class=\"progress progress-striped progress-{{ type }} {{ class }}\" value=\"{{ pg }}\" max=\"100\"></progress>
{% endmacro %}
", "TranslationBundle:WebUI:index.html.twig", "/Users/louise/Documents/School/team-alert/vendor/php-translation/symfony-bundle/Resources/views/WebUI/index.html.twig");
    }
}
