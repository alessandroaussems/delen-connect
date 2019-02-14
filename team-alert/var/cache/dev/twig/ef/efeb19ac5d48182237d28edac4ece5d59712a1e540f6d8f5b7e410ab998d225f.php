<?php

/* TranslationBundle:SymfonyProfiler:edit.html.twig */
class __TwigTemplate_6c5c9a8059474ef49f8b9f3c4ad277a0ba708ce83f6d326cd8178701e6bd8b9e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:SymfonyProfiler:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:SymfonyProfiler:edit.html.twig"));

        // line 1
        echo "<textarea style=\"width: 100%\" id=\"edit_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 1, $this->source); })()), "translation", []), "html", null, true);
        echo "</textarea>
<input type=\"button\" value=\"Save\" onclick='saveEditForm(\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\", document.getElementById(\"edit_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\").value)'>
<input type=\"button\" value=\"Cancel\" onclick='cancelEditForm(\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 3, $this->source); })()), "translation", []), "html", null, true);
        echo "\")'>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TranslationBundle:SymfonyProfiler:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  36 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea style=\"width: 100%\" id=\"edit_{{ key }}\">{{ message.translation }}</textarea>
<input type=\"button\" value=\"Save\" onclick='saveEditForm(\"{{ key }}\", document.getElementById(\"edit_{{ key }}\").value)'>
<input type=\"button\" value=\"Cancel\" onclick='cancelEditForm(\"{{ key }}\", \"{{ message.translation }}\")'>
", "TranslationBundle:SymfonyProfiler:edit.html.twig", "/Users/louise/Documents/School/team-alert/vendor/php-translation/symfony-bundle/Resources/views/SymfonyProfiler/edit.html.twig");
    }
}
