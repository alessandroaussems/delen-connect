<?php

/* A2lixTranslationFormBundle::macros.html.twig */
class __TwigTemplate_5cddf57df761f5194344bcef6e5430a3aa615530b1da410c9fae4f64475cd9bc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A2lixTranslationFormBundle::macros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A2lixTranslationFormBundle::macros.html.twig"));

        // line 9
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function macro_partialTranslations($__form__ = null, $__fieldsNames__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "fieldsNames" => $__fieldsNames__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "partialTranslations"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "partialTranslations"));

            // line 11
            echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 14
                echo "            ";
                $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "name", []);
                // line 15
                echo "
            <li ";
                // line 16
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "request", []), "locale", []) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 16, $this->source); })()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"#";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "_a2lix_translations-fields\" data-toggle=\"tab\">
                    ";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 18, $this->source); })())), "html", null, true);
                echo "
                    ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "vars", []), "default_locale", []) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 19, $this->source); })()))) {
                    echo "[Default]";
                }
                // line 20
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "required", [])) {
                    echo "*";
                }
                // line 21
                echo "                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 28
                echo "            ";
                $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "name", []);
                // line 29
                echo "
            <div id=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "_a2lix_translations-fields\" class=\"tab-pane ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", []), "locale", []) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 30, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsFields"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsField"], "vars", []), "name", []), (isset($context["fieldsNames"]) || array_key_exists("fieldsNames", $context) ? $context["fieldsNames"] : (function () { throw new Twig_Error_Runtime('Variable "fieldsNames" does not exist.', 31, $this->source); })()))) {
                        // line 32
                        echo "                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsField"], 'row');
                        echo "
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </div>
    </div>
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
        return "A2lixTranslationFormBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 36,  142 => 34,  132 => 32,  127 => 31,  119 => 30,  116 => 29,  113 => 28,  109 => 27,  104 => 24,  96 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  73 => 16,  70 => 15,  67 => 14,  63 => 13,  59 => 11,  40 => 10,  29 => 9,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Example:

{% import \"A2lixTranslationFormBundle::macros.html.twig\" as a2lixTranslations %}

{{ a2lixTranslations.partialTranslations(editForm.translations, ['title','description']) }}
{{ a2lixTranslations.partialTranslations(editForm.translations, ['url']) }}
#}

{% macro partialTranslations(form, fieldsNames) %}
    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <li {% if app.request.locale == locale %}class=\"active\"{% endif %}>
                <a href=\"#{{ translationsFields.vars.id }}_a2lix_translations-fields\" data-toggle=\"tab\">
                    {{ locale|capitalize }}
                    {% if form.vars.default_locale == locale %}[Default]{% endif %}
                    {% if translationsFields.vars.required %}*{% endif %}
                </a>
            </li>
        {% endfor %}
        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <div id=\"{{ translationsFields.vars.id }}_a2lix_translations-fields\" class=\"tab-pane {% if app.request.locale == locale %}active{% endif %}\">
            {% for translationsField in translationsFields if translationsField.vars.name in fieldsNames %}
                {{ form_row(translationsField) }}
            {% endfor %}
            </div>
        {% endfor %}
        </div>
    </div>
{% endmacro %}
", "A2lixTranslationFormBundle::macros.html.twig", "/Users/louise/Documents/School/team-alert/vendor/a2lix/translation-form-bundle/Resources/views/macros.html.twig");
    }
}
