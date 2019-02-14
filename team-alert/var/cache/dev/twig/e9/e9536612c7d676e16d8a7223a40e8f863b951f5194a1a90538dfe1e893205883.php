<?php

/* TranslationBundle:WebUI:show.html.twig */
class __TwigTemplate_3fba939023e5d4914f4c1fab88d978ac5001cfdc391375a408250f69c547a7cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@Translation/WebUI/base.html.twig", "TranslationBundle:WebUI:show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:WebUI:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:WebUI:show.html.twig"));

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
        echo "    <nav class=\"navbar navbar-light bg-faded\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\"><span class=\"nav-text\">Locales:</span></li>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 9
            echo "                <li class=\"nav-item";
            if (((isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new Twig_Error_Runtime('Variable "currentLocale" does not exist.', 9, $this->source); })()) == $context["locale"])) {
                echo " active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_show", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new Twig_Error_Runtime('Variable "configName" does not exist.', 10, $this->source); })()), "domain" => (isset($context["currentDomain"]) || array_key_exists("currentDomain", $context) ? $context["currentDomain"] : (function () { throw new Twig_Error_Runtime('Variable "currentDomain" does not exist.', 10, $this->source); })()), "locale" => $context["locale"]]), "html", null, true);
            echo "\">
                        ";
            // line 11
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </ul>
    </nav>
    <nav class=\"navbar navbar-light bg-faded\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\"><span class=\"nav-text\">Domains:</span></li>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new Twig_Error_Runtime('Variable "domains" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 21
            echo "                <li class=\"nav-item";
            if (((isset($context["currentDomain"]) || array_key_exists("currentDomain", $context) ? $context["currentDomain"] : (function () { throw new Twig_Error_Runtime('Variable "currentDomain" does not exist.', 21, $this->source); })()) == $context["domain"])) {
                echo " active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_show", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new Twig_Error_Runtime('Variable "configName" does not exist.', 22, $this->source); })()), "domain" => $context["domain"], "locale" => (isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new Twig_Error_Runtime('Variable "currentLocale" does not exist.', 22, $this->source); })())]), "html", null, true);
            echo "\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
        <br />
    </nav>


    <div class=\"container-fluid message-list\">

        <h1>Translations
            ";
        // line 35
        if ((isset($context["allow_create"]) || array_key_exists("allow_create", $context) ? $context["allow_create"] : (function () { throw new Twig_Error_Runtime('Variable "allow_create" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "            <a href=\"javascript:void(0);\"
                class=\"btn btn-secondary\"
                onclick='toggleElement(\"create-translation\")'
                aria-controls=\"create-translation\">Add new</a>
            ";
        }
        // line 41
        echo "        </h1>

        ";
        // line 43
        if ((isset($context["allow_create"]) || array_key_exists("allow_create", $context) ? $context["allow_create"] : (function () { throw new Twig_Error_Runtime('Variable "allow_create" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "        <div class=\"collapse\" id=\"create-translation\">
            <form class=\"form\" onsubmit=\"return createTranslation(this, '";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_create", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new Twig_Error_Runtime('Variable "configName" does not exist.', 45, $this->source); })()), "locale" => (isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new Twig_Error_Runtime('Variable "currentLocale" does not exist.', 45, $this->source); })()), "domain" => (isset($context["currentDomain"]) || array_key_exists("currentDomain", $context) ? $context["currentDomain"] : (function () { throw new Twig_Error_Runtime('Variable "currentDomain" does not exist.', 45, $this->source); })())]), "html", null, true);
            echo "')\">
                <div class=\"form-group\">
                    <label for=\"create-key\">Key</label>
                    <input type=\"text\" class=\"form-control\" id=\"create-key\" placeholder=\"foo.label\">
                </div>
                <div class=\"form-group\">
                    <label for=\"create-message\">Translation</label>
                    <input type=\"text\" class=\"form-control\" id=\"create-message\" placeholder=\"Lorem Ipsum\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                <div class=\"ajax-result\"></div>
            </form>
        </div>
        ";
        }
        // line 59
        echo "
        <div id=\"new-translations\"></div>
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["message"]) {
            if (twig_get_attribute($this->env, $this->source, $context["message"], "new", [])) {
                // line 62
                echo "            ";
                echo $context["macro"]->macro_printMessage(($context["idx"] + 1), $context["message"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 62, $this->source); })()), (isset($context["file_base_path"]) || array_key_exists("file_base_path", $context) ? $context["file_base_path"] : (function () { throw new Twig_Error_Runtime('Variable "file_base_path" does not exist.', 62, $this->source); })()));
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
        ";
        // line 65
        $context["idxStart"] = twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 65, $this->source); })()));
        // line 66
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["message"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["message"], "new", [])) {
                // line 67
                echo "            ";
                echo $context["macro"]->macro_printMessage(($context["idx"] + (isset($context["idxStart"]) || array_key_exists("idxStart", $context) ? $context["idxStart"] : (function () { throw new Twig_Error_Runtime('Variable "idxStart" does not exist.', 67, $this->source); })())), $context["message"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 67, $this->source); })()), (isset($context["file_base_path"]) || array_key_exists("file_base_path", $context) ? $context["file_base_path"] : (function () { throw new Twig_Error_Runtime('Variable "file_base_path" does not exist.', 67, $this->source); })()));
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </div>

    <script type=\"text/javascript\">
        var editUrl=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_edit", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new Twig_Error_Runtime('Variable "configName" does not exist.', 72, $this->source); })()), "locale" => (isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new Twig_Error_Runtime('Variable "currentLocale" does not exist.', 72, $this->source); })()), "domain" => (isset($context["currentDomain"]) || array_key_exists("currentDomain", $context) ? $context["currentDomain"] : (function () { throw new Twig_Error_Runtime('Variable "currentDomain" does not exist.', 72, $this->source); })())]), "html", null, true);
        echo "\";
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function macro_printMessage($__idx__ = null, $__message__ = null, $__allow_delete__ = null, $__base_path__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "idx" => $__idx__,
            "message" => $__message__,
            "allow_delete" => $__allow_delete__,
            "base_path" => $__base_path__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printMessage"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printMessage"));

            // line 77
            echo "    <div class=\"message row\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 77, $this->source); })()), "key", []), "html", null, true);
            echo "\">
        <div class=\"col-md-6 col-xs-12\">
            ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 79, $this->source); })()), "new", [])) {
                // line 80
                echo "                <span class=\"text-primary\" title=\"New\">&#x25CF;</span>
            ";
            }
            // line 82
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 82, $this->source); })()), "obsolete", [])) {
                // line 83
                echo "                <span class=\"text-warning\" title=\"Obsolete\">&#x26A0;</span>
            ";
            }
            // line 85
            echo "            <a class=\"message-key\" href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 85, $this->source); })()), "key", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 85, $this->source); })()), "key", []), "html", null, true);
            echo "</a>
            ";
            // line 86
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 86, $this->source); })())) {
                // line 87
                echo "            <a class=\"message-delete\" href=\"javascript:void(0)\" data-key=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 87, $this->source); })()), "key", []), "html", null, true);
                echo "\" title=\"Delete translation\" onclick='confirm(\"Are you sure?\")?deleteTranslation(this):false;'>&#x274C;</a>
            ";
            }
            // line 89
            echo "            <textarea
                class=\"message-textarea\"
                data-key=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 91, $this->source); })()), "key", []), "html", null, true);
            echo "\"
                onchange=\"editTranslation(this)\"
                tabindex=\"";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new Twig_Error_Runtime('Variable "idx" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "\"
            >";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 94, $this->source); })()), "message", []), "html", null, true);
            echo "</textarea>
            <div class=\"ajax-result\"></div>

        </div>

        <div class=\"col-md-6 col-xs-12\">
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 100, $this->source); })()), "otherTranslations", []));
            foreach ($context['_seq'] as $context["locale"] => $context["trans"]) {
                if ( !twig_test_empty($context["trans"])) {
                    // line 101
                    echo "                <b>";
                    echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                    echo "</b>: ";
                    echo twig_escape_filter($this->env, $context["trans"], "html", null, true);
                    echo "<br>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['trans'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "
        </div>

        <div class=\"col-xs-12\">
            ";
            // line 107
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 107, $this->source); })()), "sourceLocations", [])) > 0)) {
                // line 108
                echo "                <ul class=\"location-list\">
                    ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 109, $this->source); })()), "sourceLocations", []));
                foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                    // line 110
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(((isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new Twig_Error_Runtime('Variable "base_path" does not exist.', 110, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["location"], "path", [], "array")), twig_get_attribute($this->env, $this->source, $context["location"], "line", [], "array")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "path", [], "array"), "html", null, true);
                    echo " at line ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "line", [], "array"), "html", null, true);
                    echo " </a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                </ul>
            ";
            }
            // line 114
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
        return "TranslationBundle:WebUI:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 114,  343 => 112,  330 => 110,  326 => 109,  323 => 108,  321 => 107,  315 => 103,  303 => 101,  298 => 100,  289 => 94,  285 => 93,  280 => 91,  276 => 89,  270 => 87,  268 => 86,  261 => 85,  257 => 83,  254 => 82,  250 => 80,  248 => 79,  242 => 77,  221 => 76,  208 => 72,  203 => 69,  193 => 67,  187 => 66,  185 => 65,  182 => 64,  172 => 62,  167 => 61,  163 => 59,  146 => 45,  143 => 44,  141 => 43,  137 => 41,  130 => 36,  128 => 35,  118 => 27,  108 => 23,  104 => 22,  97 => 21,  93 => 20,  86 => 15,  76 => 11,  72 => 10,  65 => 9,  61 => 8,  56 => 5,  47 => 4,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@Translation/WebUI/base.html.twig\" %}
{% import _self as macro %}

{% block body %}
    <nav class=\"navbar navbar-light bg-faded\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\"><span class=\"nav-text\">Locales:</span></li>
            {% for locale in locales %}
                <li class=\"nav-item{% if currentLocale == locale %} active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('translation_show', {configName: configName, domain:currentDomain, locale:locale}) }}\">
                        {{ locale }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </nav>
    <nav class=\"navbar navbar-light bg-faded\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\"><span class=\"nav-text\">Domains:</span></li>
            {% for domain in domains %}
                <li class=\"nav-item{% if currentDomain == domain %} active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('translation_show', {configName: configName, domain:domain, locale:currentLocale}) }}\">
                        {{ domain }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        <br />
    </nav>


    <div class=\"container-fluid message-list\">

        <h1>Translations
            {% if allow_create %}
            <a href=\"javascript:void(0);\"
                class=\"btn btn-secondary\"
                onclick='toggleElement(\"create-translation\")'
                aria-controls=\"create-translation\">Add new</a>
            {% endif %}
        </h1>

        {% if allow_create %}
        <div class=\"collapse\" id=\"create-translation\">
            <form class=\"form\" onsubmit=\"return createTranslation(this, '{{ path('translation_create', {configName: configName, locale:currentLocale,domain:currentDomain}) }}')\">
                <div class=\"form-group\">
                    <label for=\"create-key\">Key</label>
                    <input type=\"text\" class=\"form-control\" id=\"create-key\" placeholder=\"foo.label\">
                </div>
                <div class=\"form-group\">
                    <label for=\"create-message\">Translation</label>
                    <input type=\"text\" class=\"form-control\" id=\"create-message\" placeholder=\"Lorem Ipsum\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                <div class=\"ajax-result\"></div>
            </form>
        </div>
        {% endif %}

        <div id=\"new-translations\"></div>
        {% for idx, message in messages if message.new %}
            {{ macro.printMessage(idx + 1, message, allow_delete, file_base_path) }}
        {% endfor %}

        {% set idxStart = messages|length %}
        {% for idx, message in messages if not message.new %}
            {{ macro.printMessage(idx + idxStart, message, allow_delete, file_base_path) }}
        {% endfor %}
    </div>

    <script type=\"text/javascript\">
        var editUrl=\"{{ path('translation_edit', {configName: configName, locale:currentLocale,domain:currentDomain}) }}\";
    </script>
{% endblock %}

{% macro printMessage(idx, message, allow_delete, base_path) %}
    <div class=\"message row\" id=\"{{ message.key }}\">
        <div class=\"col-md-6 col-xs-12\">
            {% if message.new %}
                <span class=\"text-primary\" title=\"New\">&#x25CF;</span>
            {% endif %}
            {% if message.obsolete %}
                <span class=\"text-warning\" title=\"Obsolete\">&#x26A0;</span>
            {% endif %}
            <a class=\"message-key\" href=\"#{{ message.key }}\">{{ message.key }}</a>
            {% if allow_delete %}
            <a class=\"message-delete\" href=\"javascript:void(0)\" data-key=\"{{ message.key }}\" title=\"Delete translation\" onclick='confirm(\"Are you sure?\")?deleteTranslation(this):false;'>&#x274C;</a>
            {% endif %}
            <textarea
                class=\"message-textarea\"
                data-key=\"{{ message.key }}\"
                onchange=\"editTranslation(this)\"
                tabindex=\"{{ idx }}\"
            >{{ message.message }}</textarea>
            <div class=\"ajax-result\"></div>

        </div>

        <div class=\"col-md-6 col-xs-12\">
            {% for locale,trans in message.otherTranslations if not trans is empty%}
                <b>{{ locale }}</b>: {{ trans }}<br>
            {% endfor %}

        </div>

        <div class=\"col-xs-12\">
            {% if message.sourceLocations|length > 0 %}
                <ul class=\"location-list\">
                    {% for location in message.sourceLocations %}
                        <li><a href=\"{{ (base_path ~ location['path'])|file_link(location['line']) }}\">{{ location['path'] }} at line {{ location['line'] }} </a></li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    </div>
{% endmacro %}
", "TranslationBundle:WebUI:show.html.twig", "/Users/louise/Documents/School/team-alert/vendor/php-translation/symfony-bundle/Resources/views/WebUI/show.html.twig");
    }
}
