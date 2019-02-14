<?php

/* TranslationBundle:WebUI:create.html.twig */
class __TwigTemplate_b66544392b918a70087097512f1ecf15d6d569622be9face4624f54c22bd965e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:WebUI:create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:WebUI:create.html.twig"));

        // line 1
        echo "<div class=\"message row\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 1, $this->source); })()), "key", []), "html", null, true);
        echo "\">
    <div class=\"col-md-6 col-xs-12\">
        <a class=\"message-key\" href=\"#";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 3, $this->source); })()), "key", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 3, $this->source); })()), "key", []), "html", null, true);
        echo "</a>
        <textarea
            class=\"message-textarea\"
            data-key=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 6, $this->source); })()), "key", []), "html", null, true);
        echo "\"
            onchange=\"editTranslation(this)\"
        >";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 8, $this->source); })()), "translation", []), "html", null, true);
        echo "</textarea>
        <div class=\"ajax-result\"></div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TranslationBundle:WebUI:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  43 => 6,  35 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"message row\" id=\"{{ message.key }}\">
    <div class=\"col-md-6 col-xs-12\">
        <a class=\"message-key\" href=\"#{{ message.key }}\">{{ message.key }}</a>
        <textarea
            class=\"message-textarea\"
            data-key=\"{{ message.key }}\"
            onchange=\"editTranslation(this)\"
        >{{ message.translation }}</textarea>
        <div class=\"ajax-result\"></div>
    </div>
</div>
", "TranslationBundle:WebUI:create.html.twig", "/Users/louise/Documents/School/team-alert/vendor/php-translation/symfony-bundle/Resources/views/WebUI/create.html.twig");
    }
}
