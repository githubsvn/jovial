<?php

/* SMAdminBundle:Products:edit.html.twig */
class __TwigTemplate_c5a26305219003411714424403a96c69 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Product Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form id=\"frmProduct\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Branch", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "branch"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "branch"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thumbnail", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "thumb"), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "thumb"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\"></label>
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('mtx.twig.show_image_extension')->showImages($this->getContext($context, "arrImgs"), $this->getContext($context, "imgPath"));
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'errors');
        echo "
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
                    ";
        // line 44
        $context["selectName"] = $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "media_id"), "get", array(0 => "full_name"), "method");
        // line 45
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
        // line 53
        $context["isActive"] = 1;
        // line 54
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 55
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 56
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 58
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 60
            echo "                      ";
            $context["isActive"] = 2;
            // line 61
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 64
        $context["isActive"] = 1;
        // line 65
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 66
            echo "                    ";
            $context["currentAL"] = null;
            // line 67
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "product_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["productsLanguage"]) {
                // line 68
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "productsLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 69
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "productsLanguage");
                    // line 70
                    echo "                        ";
                }
                // line 71
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productsLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 73
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 75
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 77
            echo "                            <fieldset>
                                ";
            // line 78
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 79
                echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 82
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                            ";
                // line 83
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 84
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 86
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                            ";
                }
                // line 88
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 94
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'errors');
                echo "
                                            ";
                // line 95
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 96
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 98
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                    echo "
                                            ";
                }
                // line 100
                echo "                                        </div>
                                    </div>

                                ";
            }
            // line 104
            echo "                            </fieldset>
                        </div>
                    ";
            // line 106
            $context["isActive"] = 2;
            // line 107
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Products:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 84,  231 => 82,  188 => 68,  20 => 1,  311 => 118,  277 => 110,  140 => 53,  243 => 86,  214 => 74,  285 => 103,  345 => 127,  256 => 95,  224 => 80,  161 => 65,  373 => 172,  359 => 166,  351 => 164,  313 => 148,  304 => 116,  275 => 98,  236 => 92,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 101,  261 => 95,  233 => 79,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 158,  308 => 118,  291 => 105,  286 => 140,  192 => 63,  77 => 22,  87 => 38,  164 => 62,  124 => 47,  97 => 43,  40 => 16,  23 => 3,  158 => 57,  283 => 103,  271 => 96,  242 => 92,  228 => 124,  206 => 73,  187 => 74,  181 => 62,  49 => 19,  134 => 53,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 100,  210 => 76,  202 => 68,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 130,  241 => 94,  234 => 80,  176 => 71,  148 => 56,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 114,  306 => 113,  298 => 110,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 53,  113 => 43,  300 => 116,  288 => 106,  274 => 147,  266 => 96,  259 => 90,  255 => 92,  251 => 88,  247 => 87,  239 => 81,  218 => 77,  208 => 70,  167 => 94,  137 => 47,  221 => 78,  209 => 69,  174 => 61,  169 => 62,  142 => 51,  117 => 45,  62 => 16,  299 => 154,  281 => 102,  265 => 106,  262 => 93,  250 => 87,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 72,  199 => 108,  197 => 71,  193 => 65,  179 => 100,  166 => 59,  129 => 39,  90 => 20,  56 => 21,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 59,  168 => 56,  150 => 53,  110 => 40,  107 => 40,  128 => 40,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 162,  344 => 129,  341 => 158,  335 => 156,  325 => 61,  318 => 122,  309 => 115,  305 => 111,  302 => 112,  293 => 112,  290 => 107,  284 => 104,  280 => 138,  272 => 98,  258 => 96,  254 => 88,  240 => 90,  235 => 83,  232 => 80,  226 => 80,  217 => 72,  200 => 66,  175 => 65,  173 => 64,  170 => 59,  156 => 56,  125 => 38,  99 => 35,  301 => 110,  295 => 142,  292 => 114,  289 => 104,  287 => 99,  282 => 104,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 88,  245 => 85,  230 => 91,  222 => 87,  220 => 76,  215 => 115,  211 => 70,  204 => 70,  198 => 72,  185 => 109,  183 => 67,  177 => 58,  160 => 60,  112 => 42,  82 => 36,  65 => 30,  38 => 6,  144 => 56,  141 => 55,  135 => 50,  126 => 44,  109 => 36,  103 => 36,  67 => 18,  61 => 17,  47 => 12,  105 => 45,  93 => 42,  76 => 33,  72 => 20,  68 => 19,  27 => 7,  91 => 39,  84 => 26,  94 => 27,  88 => 27,  79 => 24,  59 => 12,  21 => 2,  44 => 17,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 75,  205 => 68,  201 => 69,  196 => 66,  194 => 70,  191 => 69,  189 => 65,  186 => 61,  180 => 66,  172 => 62,  159 => 55,  154 => 52,  147 => 50,  132 => 51,  127 => 48,  121 => 45,  118 => 42,  114 => 37,  104 => 30,  100 => 29,  78 => 35,  75 => 30,  71 => 19,  58 => 25,  34 => 11,  26 => 5,  24 => 1,  25 => 3,  19 => 1,  70 => 28,  63 => 30,  46 => 9,  22 => 2,  163 => 61,  155 => 51,  152 => 58,  149 => 51,  145 => 55,  139 => 41,  131 => 48,  123 => 50,  120 => 44,  115 => 41,  106 => 39,  101 => 44,  96 => 32,  83 => 25,  80 => 25,  74 => 23,  66 => 27,  55 => 23,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 57,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 87,  143 => 48,  138 => 42,  136 => 54,  133 => 52,  130 => 40,  122 => 45,  119 => 46,  116 => 43,  111 => 37,  108 => 39,  102 => 43,  98 => 34,  95 => 30,  92 => 40,  89 => 28,  85 => 37,  81 => 40,  73 => 35,  64 => 31,  60 => 22,  57 => 27,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
