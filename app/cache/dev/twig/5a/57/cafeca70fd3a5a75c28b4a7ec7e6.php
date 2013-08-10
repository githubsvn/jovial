<?php

/* SMAdminBundle:News:new.html.twig */
class __TwigTemplate_5a57cafeca70fd3a5a75c28b4a7ec7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News Category", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'errors');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
                    ";
        // line 36
        $context["selectName"] = $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "media_id"), "get", array(0 => "full_name"), "method");
        // line 37
        echo "                    ";
        echo $this->env->getExtension('sm.twig.media_extension')->selectMedia($this->getContext($context, "optMedias"), $this->getContext($context, "optMediaTypes"), $this->getContext($context, "selectName"), $this->getContext($context, "mediaPath"), array("multiple" => true));
        echo "
              </label>
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 46
        $context["isActive"] = 1;
        // line 47
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 48
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 49
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 51
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 53
            echo "                      ";
            $context["isActive"] = 2;
            // line 54
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 57
        $context["isActive"] = 1;
        // line 58
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 59
            echo "                    ";
            $context["currentAL"] = null;
            // line 60
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "news_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["newsLanguage"]) {
                // line 61
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "newsLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 62
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "newsLanguage");
                    // line 63
                    echo "                        ";
                }
                // line 64
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 66
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 68
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 70
            echo "                            <fieldset>
                                ";
            // line 71
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 72
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 75
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 76
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 77
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 79
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 81
                echo "                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Intro", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 87
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "intro"), 'errors');
                echo "
                                        ";
                // line 88
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "intro"), 'widget');
                echo "
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 95
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'errors');
                echo "
                                        ";
                // line 96
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                echo "
                                    </div>
                                </div>

                                ";
            }
            // line 101
            echo "                            </fieldset>
                        </div>
                    ";
            // line 103
            $context["isActive"] = 2;
            // line 104
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:News:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 104,  345 => 127,  256 => 95,  224 => 80,  161 => 61,  373 => 172,  359 => 166,  351 => 164,  313 => 148,  304 => 116,  275 => 137,  236 => 84,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 101,  261 => 95,  233 => 79,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 158,  308 => 118,  291 => 105,  286 => 140,  192 => 70,  77 => 22,  87 => 26,  164 => 62,  124 => 46,  97 => 33,  40 => 8,  23 => 3,  158 => 91,  283 => 103,  271 => 96,  242 => 92,  228 => 124,  206 => 112,  187 => 64,  181 => 62,  49 => 19,  134 => 49,  69 => 21,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 99,  257 => 96,  210 => 76,  202 => 68,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 111,  267 => 95,  264 => 99,  252 => 130,  241 => 82,  234 => 88,  176 => 63,  148 => 56,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 147,  306 => 111,  298 => 143,  296 => 112,  278 => 104,  269 => 95,  248 => 99,  195 => 71,  146 => 55,  113 => 43,  300 => 106,  288 => 107,  274 => 147,  266 => 100,  259 => 90,  255 => 131,  251 => 91,  247 => 140,  239 => 81,  218 => 87,  208 => 70,  167 => 94,  137 => 53,  221 => 75,  209 => 78,  174 => 65,  169 => 61,  142 => 51,  117 => 46,  62 => 16,  299 => 154,  281 => 105,  265 => 96,  262 => 93,  250 => 87,  246 => 92,  244 => 87,  238 => 85,  229 => 76,  203 => 66,  199 => 108,  197 => 75,  193 => 65,  179 => 100,  166 => 51,  129 => 39,  90 => 20,  56 => 21,  227 => 77,  223 => 84,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 59,  168 => 53,  150 => 53,  110 => 34,  107 => 40,  128 => 40,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 162,  344 => 129,  341 => 158,  335 => 156,  325 => 61,  318 => 150,  309 => 115,  305 => 111,  302 => 115,  293 => 112,  290 => 109,  284 => 100,  280 => 138,  272 => 136,  258 => 96,  254 => 88,  240 => 90,  235 => 91,  232 => 87,  226 => 123,  217 => 73,  200 => 82,  175 => 53,  173 => 60,  170 => 59,  156 => 49,  125 => 38,  99 => 35,  301 => 110,  295 => 142,  292 => 100,  289 => 141,  287 => 99,  282 => 104,  276 => 103,  273 => 101,  270 => 102,  268 => 32,  263 => 144,  249 => 93,  245 => 85,  230 => 77,  222 => 79,  220 => 83,  215 => 115,  211 => 71,  204 => 73,  198 => 72,  185 => 109,  183 => 101,  177 => 58,  160 => 99,  112 => 39,  82 => 27,  65 => 27,  38 => 6,  144 => 44,  141 => 54,  135 => 54,  126 => 47,  109 => 36,  103 => 42,  67 => 18,  61 => 17,  47 => 12,  105 => 35,  93 => 29,  76 => 33,  72 => 20,  68 => 19,  27 => 7,  91 => 29,  84 => 28,  94 => 27,  88 => 44,  79 => 36,  59 => 12,  21 => 2,  44 => 9,  31 => 3,  28 => 2,  225 => 76,  216 => 73,  212 => 74,  205 => 77,  201 => 76,  196 => 66,  194 => 64,  191 => 60,  189 => 69,  186 => 74,  180 => 64,  172 => 62,  159 => 55,  154 => 47,  147 => 86,  132 => 40,  127 => 51,  121 => 45,  118 => 74,  114 => 35,  104 => 30,  100 => 29,  78 => 23,  75 => 23,  71 => 19,  58 => 28,  34 => 11,  26 => 3,  24 => 1,  25 => 3,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 57,  155 => 51,  152 => 94,  149 => 46,  145 => 55,  139 => 41,  131 => 48,  123 => 50,  120 => 37,  115 => 39,  106 => 44,  101 => 34,  96 => 32,  83 => 25,  80 => 25,  74 => 23,  66 => 20,  55 => 12,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 53,  165 => 58,  162 => 63,  157 => 57,  153 => 54,  151 => 87,  143 => 42,  138 => 42,  136 => 40,  133 => 52,  130 => 40,  122 => 38,  119 => 41,  116 => 35,  111 => 37,  108 => 34,  102 => 43,  98 => 41,  95 => 31,  92 => 40,  89 => 28,  85 => 27,  81 => 24,  73 => 21,  64 => 31,  60 => 22,  57 => 16,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
