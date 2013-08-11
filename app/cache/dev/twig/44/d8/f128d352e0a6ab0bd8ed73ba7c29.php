<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_44d8f128d352e0a6ab0bd8ed73ba7c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 30
        if ($this->getContext($context, "required")) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  388 => 160,  385 => 159,  370 => 156,  362 => 153,  356 => 163,  340 => 158,  352 => 149,  333 => 141,  322 => 123,  237 => 84,  231 => 88,  188 => 66,  20 => 1,  311 => 130,  277 => 104,  140 => 42,  243 => 86,  214 => 82,  285 => 103,  345 => 127,  256 => 95,  224 => 85,  161 => 80,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 111,  236 => 92,  361 => 128,  343 => 159,  320 => 135,  316 => 145,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 157,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 131,  308 => 129,  291 => 105,  286 => 140,  192 => 72,  77 => 25,  87 => 26,  164 => 63,  124 => 51,  97 => 23,  40 => 11,  23 => 3,  158 => 56,  283 => 103,  271 => 103,  242 => 92,  228 => 87,  206 => 78,  187 => 74,  181 => 87,  49 => 15,  134 => 54,  69 => 18,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 152,  354 => 150,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 235,  257 => 234,  210 => 79,  202 => 73,  376 => 140,  364 => 135,  342 => 146,  331 => 124,  327 => 139,  323 => 149,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 105,  252 => 138,  241 => 91,  234 => 89,  176 => 61,  148 => 74,  86 => 29,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 145,  330 => 140,  324 => 117,  312 => 119,  310 => 120,  306 => 128,  298 => 112,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 56,  113 => 40,  300 => 116,  288 => 129,  274 => 121,  266 => 96,  259 => 109,  255 => 89,  251 => 88,  247 => 97,  239 => 81,  218 => 77,  208 => 70,  167 => 64,  137 => 47,  221 => 83,  209 => 77,  174 => 58,  169 => 56,  142 => 55,  117 => 45,  62 => 14,  299 => 154,  281 => 125,  265 => 106,  262 => 236,  250 => 94,  246 => 86,  244 => 87,  238 => 218,  229 => 78,  203 => 77,  199 => 81,  197 => 67,  193 => 68,  179 => 66,  166 => 82,  129 => 46,  90 => 27,  56 => 12,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 95,  190 => 89,  182 => 64,  168 => 56,  150 => 75,  110 => 38,  107 => 37,  128 => 45,  53 => 17,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 158,  375 => 144,  369 => 171,  366 => 155,  363 => 140,  357 => 151,  353 => 165,  350 => 128,  347 => 160,  344 => 147,  341 => 128,  335 => 157,  325 => 138,  318 => 122,  309 => 141,  305 => 111,  302 => 137,  293 => 112,  290 => 107,  284 => 104,  280 => 114,  272 => 98,  258 => 103,  254 => 101,  240 => 219,  235 => 89,  232 => 80,  226 => 86,  217 => 83,  200 => 66,  175 => 65,  173 => 85,  170 => 60,  156 => 77,  125 => 44,  99 => 52,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 102,  268 => 107,  263 => 94,  249 => 88,  245 => 96,  230 => 91,  222 => 76,  220 => 76,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 39,  82 => 26,  65 => 17,  38 => 5,  144 => 73,  141 => 50,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 16,  61 => 18,  47 => 9,  105 => 41,  93 => 28,  76 => 34,  72 => 18,  68 => 30,  27 => 5,  91 => 34,  84 => 25,  94 => 27,  88 => 30,  79 => 23,  59 => 13,  21 => 1,  44 => 11,  31 => 6,  28 => 3,  225 => 88,  216 => 84,  212 => 78,  205 => 71,  201 => 69,  196 => 92,  194 => 66,  191 => 70,  189 => 65,  186 => 61,  180 => 66,  172 => 64,  159 => 55,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 39,  114 => 38,  104 => 31,  100 => 36,  78 => 24,  75 => 24,  71 => 23,  58 => 14,  34 => 5,  26 => 3,  24 => 2,  25 => 4,  19 => 1,  70 => 13,  63 => 16,  46 => 14,  22 => 2,  163 => 81,  155 => 57,  152 => 61,  149 => 52,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 40,  106 => 36,  101 => 33,  96 => 35,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 13,  52 => 18,  50 => 16,  43 => 7,  41 => 7,  37 => 7,  35 => 4,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 53,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 54,  133 => 52,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 42,  108 => 33,  102 => 30,  98 => 29,  95 => 34,  92 => 31,  89 => 28,  85 => 16,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 14,  54 => 17,  51 => 11,  48 => 11,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
