<?php

/* TranslationBundle:SymfonyProfiler:translation.html.twig */
class __TwigTemplate_e809309d8ea8ae2872696dca1ec9ac82b35722dc72a03f7b114dddab798a0fb3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Collector/translation.html.twig", "TranslationBundle:SymfonyProfiler:translation.html.twig", 1);
        $this->blocks = [
            'panelContent' => [$this, 'block_panelContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:SymfonyProfiler:translation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TranslationBundle:SymfonyProfiler:translation.html.twig"));

        // line 7
        $context["translation_helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_panelContent($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 10
        echo "    <h2>Translation Metrics</h2>

    <div>
        <a class=\"btn\" href=\"javascript:void(0);\" onclick='syncAll()'>Synchronize all translations</a><br />
        <div id=\"top-result-area\"></div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->source); })()), "countdefines", []), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->source); })()), "countFallbacks", []), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->source); })()), "countMissings", []), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 37
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         [[], [], []];
        // line 38
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->source); })()), "messages", []));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 39
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "state", []) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 40
                echo "            ";
                $context["messages_defined"] = twig_array_merge((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new Twig_Error_Runtime('Variable "messages_defined" does not exist.', 40, $this->source); })()), [$context["key"] => $context["message"]]);
                // line 41
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["message"], "state", []) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 42
                echo "            ";
                $context["messages_missing"] = twig_array_merge((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new Twig_Error_Runtime('Variable "messages_missing" does not exist.', 42, $this->source); })()), [$context["key"] => $context["message"]]);
                // line 43
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["message"], "state", []) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 44
                echo "            ";
                $context["messages_fallback"] = twig_array_merge((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new Twig_Error_Runtime('Variable "messages_fallback" does not exist.', 44, $this->source); })()), [$context["key"] => $context["message"]]);
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
<form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("php_translation_profiler_translation_create_assets", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\"
      id=\"translations-list\" onSubmit=\"return saveTranslations(this);\" >
    <span class=\"hidden\">
        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/translation/css/images/loader.svg"), "html", null, true);
        echo "\" width=\"60\" id=\"svg-loader\">
    </span>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new Twig_Error_Runtime('Variable "messages_defined" does not exist.', 56, $this->source); })())), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 63
        if (twig_test_empty((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new Twig_Error_Runtime('Variable "messages_defined" does not exist.', 63, $this->source); })()))) {
            // line 64
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 68
            echo "                    ";
            echo $context["translation_helper"]->macro_render_table((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new Twig_Error_Runtime('Variable "messages_defined" does not exist.', 68, $this->source); })()));
            echo "
                ";
        }
        // line 70
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">";
        // line 74
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new Twig_Error_Runtime('Variable "messages_fallback" does not exist.', 74, $this->source); })())), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 82
        if (twig_test_empty((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new Twig_Error_Runtime('Variable "messages_fallback" does not exist.', 82, $this->source); })()))) {
            // line 83
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 87
            echo "                    ";
            echo $context["translation_helper"]->macro_render_table((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new Twig_Error_Runtime('Variable "messages_fallback" does not exist.', 87, $this->source); })()));
            echo "
                ";
        }
        // line 89
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">";
        // line 93
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new Twig_Error_Runtime('Variable "messages_missing" does not exist.', 93, $this->source); })())), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 102
        if (twig_test_empty((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new Twig_Error_Runtime('Variable "messages_missing" does not exist.', 102, $this->source); })()))) {
            // line 103
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 107
            echo "                    ";
            echo $context["translation_helper"]->macro_render_table((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new Twig_Error_Runtime('Variable "messages_missing" does not exist.', 107, $this->source); })()), true);
            echo "
                ";
        }
        // line 109
        echo "            </div>
        </div>
    </div>

    <p class=\"full-width\" id=\"translationResult\"></p>

    <button type=\"submit\" class=\"btn\">
        Add selected messages
    </button>

</form>
    ";
        // line 120
        $this->loadTemplate("@Translation/SymfonyProfiler/javascripts.html.twig", "TranslationBundle:SymfonyProfiler:translation.html.twig", 120)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function macro_render_table($__messages__ = null, $__checkedByDefault__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "checkedByDefault" => $__checkedByDefault__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 124
            echo "    <table>
        <thead>
        <tr>
            <th>
                <input type=\"checkbox\" id=\"check-all-control\" onchange=\"toggleCheckAll(this)\" ";
            // line 128
            if ((isset($context["checkedByDefault"]) || array_key_exists("checkedByDefault", $context) ? $context["checkedByDefault"] : (function () { throw new Twig_Error_Runtime('Variable "checkedByDefault" does not exist.', 128, $this->source); })())) {
                echo "checked=\"checked\"";
            }
            echo ">
            </th>
            <th>Locale</th>
            <th>Domain</th>
            <th>Times used</th>
            <th>Message ID</th>
            <th>Message Preview</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 139, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 140
                echo "            <tr id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                <td>
                    ";
                // line 142
                if ((twig_get_attribute($this->env, $this->source, $context["message"], "state", []) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                    // line 143
                    echo "                        <input type=\"checkbox\" name=\"translationKey\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" checked=\"checked\" class=\"translation-key-checkbox\">
                    ";
                } else {
                    // line 145
                    echo "                        <input type=\"checkbox\" disabled=\"disabled\">
                    ";
                }
                // line 147
                echo "                </td>
                <td class=\"font-normal text-small\">";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "locale", []), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold nowrap\">";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "domain", []), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "count", []), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", []), "html", null, true);
                echo "

                    ";
                // line 154
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["message"], "transChoiceNumber", []))) {
                    // line 155
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 157
                echo "
                    ";
                // line 158
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "parameters", [])) > 0)) {
                    // line 159
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "parameters", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 163
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), [$this->env, $context["parameters"]]);
                        echo "
                                ";
                        // line 164
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                            echo "<br />";
                        }
                        // line 165
                        echo "                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                        </div>
                    ";
                }
                // line 168
                echo "                </td>
                <td class=\"translation\">
                    ";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "translation", []), "html", null, true);
                echo "
                </td>
                <td width=\"155px\">
                    ";
                // line 173
                ob_start();
                // line 174
                echo "                    <a class=\"edit btn btn-sm\" href=\"javascript:void(0);\" onclick='getEditForm(\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\")'>Edit</a>
                        |
                    <a class=\"sync btn btn-sm\" href=\"javascript:void(0);\" onclick='syncMessage(\"";
                // line 176
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\")'>Sync</a>
                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 178
                echo "                </td>
            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "        </tbody>
    </table>
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
        return "TranslationBundle:SymfonyProfiler:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 181,  440 => 178,  435 => 176,  429 => 174,  427 => 173,  421 => 170,  417 => 168,  413 => 166,  399 => 165,  395 => 164,  390 => 163,  373 => 162,  369 => 161,  363 => 159,  361 => 158,  358 => 157,  354 => 155,  352 => 154,  347 => 152,  342 => 150,  338 => 149,  334 => 148,  331 => 147,  327 => 145,  321 => 143,  319 => 142,  313 => 140,  296 => 139,  280 => 128,  274 => 124,  255 => 123,  245 => 120,  232 => 109,  226 => 107,  220 => 103,  218 => 102,  206 => 93,  200 => 89,  194 => 87,  188 => 83,  186 => 82,  175 => 74,  169 => 70,  163 => 68,  157 => 64,  155 => 63,  145 => 56,  137 => 51,  131 => 48,  128 => 47,  122 => 46,  119 => 45,  116 => 44,  113 => 43,  110 => 42,  107 => 41,  104 => 40,  101 => 39,  96 => 38,  93 => 37,  83 => 29,  75 => 24,  67 => 19,  56 => 10,  47 => 9,  37 => 1,  35 => 7,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Collector/translation.html.twig' %}

{#
 # Authors Tobias Nyholm, Damien Alexandre (damienalexandre), Damien Harper
 #}

{% import _self as translation_helper %}

{% block panelContent %}
    <h2>Translation Metrics</h2>

    <div>
        <a class=\"btn\" href=\"javascript:void(0);\" onclick='syncAll()'>Synchronize all translations</a><br />
        <div id=\"top-result-area\"></div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.countdefines }}</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countFallbacks }}</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countMissings }}</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    {# sort translation messages in groups #}
    {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
    {% for key, message in collector.messages %}
        {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
            {% set messages_defined = messages_defined|merge({(key): message}) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
            {% set messages_missing = messages_missing|merge({(key): message}) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
            {% set messages_fallback = messages_fallback|merge({(key): message}) %}
        {% endif %}
    {% endfor %}

<form action=\"{{ path('php_translation_profiler_translation_create_assets', {'token': token}) }}\" method=\"post\"
      id=\"translations-list\" onSubmit=\"return saveTranslations(this);\" >
    <span class=\"hidden\">
        <img src=\"{{ asset(\"bundles/translation/css/images/loader.svg\") }}\" width=\"60\" id=\"svg-loader\">
    </span>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ messages_defined|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                {% if messages_defined is empty %}
                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                {% else %}
                    {{ translation_helper.render_table(messages_defined) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">{{ messages_fallback|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                {% if messages_fallback is empty %}
                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                {% else %}
                    {{ translation_helper.render_table(messages_fallback) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">{{ messages_missing|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                {% if messages_missing is empty %}
                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                {% else %}
                    {{ translation_helper.render_table(messages_missing, true) }}
                {% endif %}
            </div>
        </div>
    </div>

    <p class=\"full-width\" id=\"translationResult\"></p>

    <button type=\"submit\" class=\"btn\">
        Add selected messages
    </button>

</form>
    {% include \"@Translation/SymfonyProfiler/javascripts.html.twig\" %}
{% endblock %}

{% macro render_table(messages, checkedByDefault = false) %}
    <table>
        <thead>
        <tr>
            <th>
                <input type=\"checkbox\" id=\"check-all-control\" onchange=\"toggleCheckAll(this)\" {% if checkedByDefault %}checked=\"checked\"{% endif %}>
            </th>
            <th>Locale</th>
            <th>Domain</th>
            <th>Times used</th>
            <th>Message ID</th>
            <th>Message Preview</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for key, message in messages %}
            <tr id=\"{{ key }}\">
                <td>
                    {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
                        <input type=\"checkbox\" name=\"translationKey\" value=\"{{ key }}\" checked=\"checked\" class=\"translation-key-checkbox\">
                    {% else %}
                        <input type=\"checkbox\" disabled=\"disabled\">
                    {% endif %}
                </td>
                <td class=\"font-normal text-small\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold nowrap\">{{ message.domain }}</td>
                <td class=\"font-normal text-small\">{{ message.count }}</td>
                <td>
                    {{ message.id }}

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters) }}
                                {% if not loop.last %}<br />{% endif %}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td class=\"translation\">
                    {{ message.translation }}
                </td>
                <td width=\"155px\">
                    {% spaceless %}
                    <a class=\"edit btn btn-sm\" href=\"javascript:void(0);\" onclick='getEditForm(\"{{ key }}\")'>Edit</a>
                        |
                    <a class=\"sync btn btn-sm\" href=\"javascript:void(0);\" onclick='syncMessage(\"{{ key }}\")'>Sync</a>
                    {% endspaceless %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "TranslationBundle:SymfonyProfiler:translation.html.twig", "/Users/louise/Documents/School/team-alert/vendor/php-translation/symfony-bundle/Resources/views/SymfonyProfiler/translation.html.twig");
    }
}
