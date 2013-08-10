<?php

/* SMAdminBundle:Page:new.html.twig */
class __TwigTemplate_e1b0f6134ba0c17bd9c57fe2a93cd42b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'errors');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
                    ";
        // line 29
        $context["selectName"] = $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "media_id"), "get", array(0 => "full_name"), "method");
        // line 30
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
        // line 39
        $context["isActive"] = 1;
        // line 40
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 41
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 42
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 44
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 46
            echo "                      ";
            $context["isActive"] = 2;
            // line 47
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 50
        $context["isActive"] = 1;
        // line 51
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 52
            echo "                    ";
            $context["currentAL"] = null;
            // line 53
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "page_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["pageLanguage"]) {
                // line 54
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "pageLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 55
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "pageLanguage");
                    // line 56
                    echo "                        ";
                }
                // line 57
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 59
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 61
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 63
            echo "                            <fieldset>
                                ";
            // line 64
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 65
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 68
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 69
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 70
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 72
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 74
                echo "                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Intro", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 80
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "intro"), 'errors');
                echo "
                                        ";
                // line 81
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "intro"), 'widget');
                echo "
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 88
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'errors');
                echo "
                                        ";
                // line 89
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                echo "
                                    </div>
                                </div>

                                ";
            }
            // line 94
            echo "                            </fieldset>
                        </div>
                    ";
            // line 96
            $context["isActive"] = 2;
            // line 97
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Page:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 118,  277 => 110,  140 => 53,  243 => 86,  214 => 74,  285 => 103,  345 => 127,  256 => 95,  224 => 80,  161 => 65,  373 => 172,  359 => 166,  351 => 164,  313 => 148,  304 => 116,  275 => 98,  236 => 92,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 101,  261 => 95,  233 => 79,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 158,  308 => 118,  291 => 105,  286 => 140,  192 => 63,  77 => 22,  87 => 26,  164 => 62,  124 => 47,  97 => 40,  40 => 8,  23 => 3,  158 => 57,  283 => 103,  271 => 96,  242 => 92,  228 => 124,  206 => 81,  187 => 74,  181 => 62,  49 => 19,  134 => 46,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 100,  210 => 76,  202 => 68,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 130,  241 => 94,  234 => 80,  176 => 71,  148 => 56,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 147,  306 => 117,  298 => 110,  296 => 112,  278 => 103,  269 => 97,  248 => 96,  195 => 64,  146 => 53,  113 => 43,  300 => 116,  288 => 107,  274 => 147,  266 => 100,  259 => 90,  255 => 89,  251 => 88,  247 => 87,  239 => 81,  218 => 85,  208 => 70,  167 => 94,  137 => 47,  221 => 75,  209 => 69,  174 => 61,  169 => 67,  142 => 51,  117 => 45,  62 => 16,  299 => 154,  281 => 102,  265 => 106,  262 => 93,  250 => 87,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 66,  199 => 108,  197 => 65,  193 => 65,  179 => 100,  166 => 59,  129 => 39,  90 => 20,  56 => 21,  227 => 77,  223 => 74,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 59,  168 => 56,  150 => 53,  110 => 40,  107 => 40,  128 => 40,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 162,  344 => 129,  341 => 158,  335 => 156,  325 => 61,  318 => 122,  309 => 115,  305 => 111,  302 => 115,  293 => 112,  290 => 108,  284 => 112,  280 => 138,  272 => 100,  258 => 96,  254 => 88,  240 => 90,  235 => 91,  232 => 80,  226 => 89,  217 => 72,  200 => 66,  175 => 53,  173 => 60,  170 => 59,  156 => 56,  125 => 38,  99 => 35,  301 => 110,  295 => 142,  292 => 114,  289 => 104,  287 => 99,  282 => 104,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 93,  245 => 85,  230 => 91,  222 => 87,  220 => 76,  215 => 115,  211 => 70,  204 => 70,  198 => 72,  185 => 109,  183 => 73,  177 => 58,  160 => 99,  112 => 39,  82 => 36,  65 => 30,  38 => 6,  144 => 44,  141 => 54,  135 => 50,  126 => 44,  109 => 36,  103 => 36,  67 => 18,  61 => 17,  47 => 12,  105 => 43,  93 => 29,  76 => 33,  72 => 20,  68 => 19,  27 => 7,  91 => 39,  84 => 28,  94 => 27,  88 => 44,  79 => 24,  59 => 12,  21 => 2,  44 => 9,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 74,  205 => 68,  201 => 69,  196 => 66,  194 => 77,  191 => 60,  189 => 65,  186 => 61,  180 => 59,  172 => 62,  159 => 55,  154 => 52,  147 => 50,  132 => 51,  127 => 48,  121 => 45,  118 => 42,  114 => 35,  104 => 30,  100 => 29,  78 => 35,  75 => 23,  71 => 19,  58 => 28,  34 => 11,  26 => 3,  24 => 1,  25 => 3,  19 => 1,  70 => 32,  63 => 30,  46 => 9,  22 => 2,  163 => 58,  155 => 51,  152 => 54,  149 => 51,  145 => 55,  139 => 41,  131 => 48,  123 => 50,  120 => 37,  115 => 41,  106 => 44,  101 => 42,  96 => 32,  83 => 25,  80 => 25,  74 => 23,  66 => 20,  55 => 12,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 57,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 87,  143 => 48,  138 => 42,  136 => 52,  133 => 52,  130 => 40,  122 => 49,  119 => 46,  116 => 45,  111 => 37,  108 => 39,  102 => 43,  98 => 41,  95 => 30,  92 => 40,  89 => 28,  85 => 27,  81 => 26,  73 => 35,  64 => 31,  60 => 22,  57 => 27,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
