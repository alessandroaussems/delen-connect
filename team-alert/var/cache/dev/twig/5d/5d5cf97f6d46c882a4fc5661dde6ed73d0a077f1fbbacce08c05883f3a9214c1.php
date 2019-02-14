<?php

/* TranslationBundle:WebUI:base.html.twig */
class __TwigTemplate_44b4d0ebada356993ffff4698f8ff10bc4ff7de9ac35d8e8b8ae0bf204a0d2fb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:WebUI:base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:WebUI:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags always come first -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>PHP Translation</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/translation/css/bootstrap4-alpha5.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/translation/css/webui.css"), "html", null, true);
        echo "\">
</head>
<body>

<nav class=\"navbar navbar-light bg-faded\">
    <ul class=\"nav navbar-nav\">
        <li class=\"nav-item\"><span class=\"nav-text\">Configs:</span></li>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configNames"]) || array_key_exists("configNames", $context) ? $context["configNames"] : (function () { throw new Twig_Error_Runtime('Variable "configNames" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 18
            echo "            <li class=\"nav-item";
            if (((isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new Twig_Error_Runtime('Variable "configName" does not exist.', 18, $this->source); })()) == $context["c"])) {
                echo " active";
            }
            echo "\">
                <a class=\"nav-link\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_index", ["configName" => $context["c"]]), "html", null, true);
            echo "\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
</nav>

";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/translation/js/webui.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TranslationBundle:WebUI:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  89 => 29,  86 => 28,  84 => 27,  79 => 24,  69 => 20,  65 => 19,  58 => 18,  54 => 17,  44 => 10,  40 => 9,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags always come first -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>PHP Translation</title>
    <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/translation/css/bootstrap4-alpha5.min.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/translation/css/webui.css\") }}\">
</head>
<body>

<nav class=\"navbar navbar-light bg-faded\">
    <ul class=\"nav navbar-nav\">
        <li class=\"nav-item\"><span class=\"nav-text\">Configs:</span></li>
        {% for c in configNames %}
            <li class=\"nav-item{% if configName == c %} active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('translation_index', {configName: c}) }}\">
                    {{ c }}
                </a>
            </li>
        {% endfor %}
    </ul>
</nav>

{% block body %}{% endblock %}

<script type=\"text/javascript\" src=\"{{ asset(\"bundles/translation/js/webui.js\") }}\"></script>
</body>
</html>
", "TranslationBundle:WebUI:base.html.twig", "/Users/louise/Documents/School/team-alert/vendor/php-translation/symfony-bundle/Resources/views/WebUI/base.html.twig");
    }
}
