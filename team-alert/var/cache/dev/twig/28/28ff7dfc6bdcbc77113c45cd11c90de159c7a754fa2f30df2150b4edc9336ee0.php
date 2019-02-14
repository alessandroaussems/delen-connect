<?php

/* FMElfinderBundle:Elfinder:summernote.html.twig */
class __TwigTemplate_fafb54f9558a0e086299617ce74b15aa7b8e953f062d0aa5d61c3b4d19737b9a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:summernote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:summernote.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_css.html.twig");
            echo "
    ";
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_js.html.twig");
            echo "
";
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            url : '";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 15, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new Twig_Error_Runtime('Variable "homeFolder" does not exist.', 15, $this->source); })())]), "html", null, true);
        echo "',  // connector URL
            lang : '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 17
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new Twig_Error_Runtime('Variable "onlyMimes" does not exist.', 17, $this->source); })());
        echo ",
            destroyOnClose : true,
            getFileCallback : function(files, fm) {
                window.opener.\$('.summernote').summernote('editor.insertImage',files.url);
                window.close();
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:summernote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  63 => 16,  59 => 15,  54 => 12,  48 => 10,  46 => 9,  42 => 7,  36 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    {% if includeAssets %}
        {{ include(\"@FMElfinder/Elfinder/helper/assets_css.html.twig\") }}
    {% endif %}
</head>
<body>
{% if includeAssets %}
    {{ include(\"@FMElfinder/Elfinder/helper/assets_js.html.twig\") }}
{% endif %}
<script type=\"text/javascript\" charset=\"utf-8\">
    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            url : '{{ path('ef_connect', {'instance': instance, 'homeFolder': homeFolder }) }}',  // connector URL
            lang : '{{locale}}',
            onlyMimes: {{ onlyMimes|raw }},
            destroyOnClose : true,
            getFileCallback : function(files, fm) {
                window.opener.\$('.summernote').summernote('editor.insertImage',files.url);
                window.close();
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
", "FMElfinderBundle:Elfinder:summernote.html.twig", "/Users/louise/Documents/School/team-alert/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/summernote.html.twig");
    }
}
