<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_68af9a3755f6e81b10feefb80b687bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 160,  385 => 159,  370 => 156,  362 => 153,  356 => 163,  340 => 158,  352 => 149,  333 => 141,  322 => 123,  237 => 84,  231 => 88,  188 => 66,  20 => 1,  311 => 130,  277 => 104,  140 => 42,  243 => 86,  214 => 82,  285 => 103,  345 => 127,  256 => 95,  224 => 85,  161 => 63,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 111,  236 => 92,  361 => 128,  343 => 159,  320 => 135,  316 => 145,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 157,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 131,  308 => 129,  291 => 105,  286 => 140,  192 => 72,  77 => 24,  87 => 34,  164 => 63,  124 => 51,  97 => 23,  40 => 7,  23 => 2,  158 => 56,  283 => 103,  271 => 103,  242 => 92,  228 => 87,  206 => 78,  187 => 74,  181 => 65,  49 => 13,  134 => 54,  69 => 20,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 152,  354 => 150,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 73,  376 => 140,  364 => 135,  342 => 146,  331 => 124,  327 => 139,  323 => 149,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 105,  252 => 100,  241 => 91,  234 => 89,  176 => 61,  148 => 46,  86 => 29,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 145,  330 => 140,  324 => 117,  312 => 119,  310 => 120,  306 => 128,  298 => 112,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 56,  113 => 40,  300 => 116,  288 => 129,  274 => 121,  266 => 96,  259 => 109,  255 => 89,  251 => 88,  247 => 97,  239 => 81,  218 => 77,  208 => 70,  167 => 64,  137 => 47,  221 => 83,  209 => 77,  174 => 58,  169 => 56,  142 => 55,  117 => 45,  62 => 16,  299 => 154,  281 => 125,  265 => 106,  262 => 93,  250 => 94,  246 => 86,  244 => 87,  238 => 97,  229 => 78,  203 => 77,  199 => 81,  197 => 67,  193 => 68,  179 => 66,  166 => 59,  129 => 46,  90 => 28,  56 => 13,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 76,  190 => 67,  182 => 64,  168 => 56,  150 => 53,  110 => 42,  107 => 27,  128 => 45,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 158,  375 => 144,  369 => 171,  366 => 155,  363 => 140,  357 => 151,  353 => 165,  350 => 128,  347 => 160,  344 => 147,  341 => 128,  335 => 157,  325 => 138,  318 => 122,  309 => 141,  305 => 111,  302 => 137,  293 => 112,  290 => 107,  284 => 104,  280 => 114,  272 => 98,  258 => 103,  254 => 101,  240 => 93,  235 => 89,  232 => 80,  226 => 86,  217 => 83,  200 => 66,  175 => 65,  173 => 63,  170 => 60,  156 => 56,  125 => 44,  99 => 52,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 102,  273 => 110,  270 => 102,  268 => 107,  263 => 94,  249 => 88,  245 => 96,  230 => 91,  222 => 76,  220 => 76,  215 => 79,  211 => 81,  204 => 71,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 38,  82 => 19,  65 => 32,  38 => 7,  144 => 52,  141 => 50,  135 => 47,  126 => 44,  109 => 36,  103 => 25,  67 => 14,  61 => 12,  47 => 8,  105 => 41,  93 => 31,  76 => 17,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 27,  88 => 20,  79 => 18,  59 => 15,  21 => 2,  44 => 10,  31 => 4,  28 => 3,  225 => 88,  216 => 84,  212 => 78,  205 => 71,  201 => 69,  196 => 69,  194 => 66,  191 => 70,  189 => 65,  186 => 61,  180 => 66,  172 => 64,  159 => 55,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 39,  114 => 38,  104 => 35,  100 => 24,  78 => 42,  75 => 23,  71 => 20,  58 => 14,  34 => 5,  26 => 2,  24 => 1,  25 => 4,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 2,  163 => 61,  155 => 57,  152 => 61,  149 => 52,  145 => 57,  139 => 50,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 36,  101 => 51,  96 => 31,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 9,  52 => 14,  50 => 10,  43 => 17,  41 => 8,  37 => 6,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 53,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 54,  133 => 52,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 42,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 29,  85 => 16,  81 => 24,  73 => 16,  64 => 17,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
