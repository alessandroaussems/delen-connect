<?php

/* A2lixTranslationFormBundle::default.html.twig */
class __TwigTemplate_0e6d2965f09771f83c29b94ebf170730a918b018b60b64093acc081536225dfd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'a2lix_translations_widget' => [$this, 'block_a2lix_translations_widget'],
            'a2lix_translationsForms_widget' => [$this, 'block_a2lix_translationsForms_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A2lixTranslationFormBundle::default.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A2lixTranslationFormBundle::default.html.twig"));

        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        // line 2
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), 'errors');
        echo "
    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 6
            echo "            ";
            $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "name", []);
            // line 7
            echo "
            <li ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "request", []), "locale", []) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 8, $this->source); })()))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"#";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo "_a2lix_translations-fields\" data-toggle=\"tab\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, true), "label", []), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 10, $this->source); })())))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 10, $this->source); })()))))), "html", null, true);
            echo "
                    ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "vars", []), "default_locale", []) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 11, $this->source); })()))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true), "default_label", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true), "default_label", []), "[Default]")) : ("[Default]"))), "html", null, true);
            }
            // line 12
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "required", [])) {
                echo "*";
            }
            // line 13
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 20
            echo "            ";
            $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "name", []);
            // line 21
            echo "
            <div id=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo "_a2lix_translations-fields\" class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "request", []), "locale", []) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 22, $this->source); })()))) {
                echo "active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "vars", []), "valid", [])) {
                echo "sonata-ba-field-error";
            }
            echo "\">
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_a2lix_translationsForms_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        // line 32
        echo "    ";
        $this->displayBlock("a2lix_translations_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 32,  155 => 31,  143 => 27,  134 => 24,  130 => 23,  118 => 22,  115 => 21,  112 => 20,  108 => 19,  103 => 16,  95 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  72 => 8,  69 => 7,  66 => 6,  62 => 5,  55 => 2,  46 => 1,  36 => 31,  33 => 30,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block a2lix_translations_widget %}
    {{ form_errors(form) }}
    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <li {% if app.request.locale == locale %}class=\"active\"{% endif %}>
                <a href=\"#{{ translationsFields.vars.id }}_a2lix_translations-fields\" data-toggle=\"tab\">
                    {{ translationsFields.vars.label|default(locale|humanize)|trans }}
                    {% if form.vars.default_locale == locale %}{{ form.vars.default_label|default('[Default]')|trans }}{% endif %}
                    {% if translationsFields.vars.required %}*{% endif %}
                </a>
            </li>
        {% endfor %}
        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <div id=\"{{ translationsFields.vars.id }}_a2lix_translations-fields\" class=\"tab-pane {% if app.request.locale == locale %}active{% endif %} {% if not form.vars.valid %}sonata-ba-field-error{% endif %}\">
                {{ form_errors(translationsFields) }}
                {{ form_widget(translationsFields) }}
            </div>
        {% endfor %}
        </div>
    </div>
{% endblock %}

{% block a2lix_translationsForms_widget %}
    {{ block('a2lix_translations_widget') }}
{% endblock %}
", "A2lixTranslationFormBundle::default.html.twig", "/Users/louise/Documents/School/team-alert/vendor/a2lix/translation-form-bundle/Resources/views/default.html.twig");
    }
}
