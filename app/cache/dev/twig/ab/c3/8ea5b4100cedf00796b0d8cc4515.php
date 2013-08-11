<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_abc38ea5b4100cedf00796b0d8cc4515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 163,  340 => 158,  352 => 130,  333 => 156,  322 => 123,  237 => 84,  231 => 82,  188 => 69,  20 => 1,  311 => 118,  277 => 104,  140 => 49,  243 => 86,  214 => 82,  285 => 103,  345 => 127,  256 => 95,  224 => 85,  161 => 63,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 98,  236 => 92,  361 => 128,  343 => 159,  320 => 121,  316 => 145,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 121,  308 => 118,  291 => 105,  286 => 140,  192 => 72,  77 => 24,  87 => 34,  164 => 63,  124 => 51,  97 => 43,  40 => 7,  23 => 2,  158 => 56,  283 => 103,  271 => 103,  242 => 92,  228 => 89,  206 => 78,  187 => 74,  181 => 65,  49 => 13,  134 => 54,  69 => 20,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 77,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 149,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 105,  241 => 91,  234 => 80,  176 => 71,  148 => 52,  86 => 29,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 120,  306 => 118,  298 => 112,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 56,  113 => 40,  300 => 116,  288 => 129,  274 => 121,  266 => 96,  259 => 109,  255 => 89,  251 => 88,  247 => 93,  239 => 81,  218 => 77,  208 => 70,  167 => 64,  137 => 47,  221 => 84,  209 => 71,  174 => 67,  169 => 66,  142 => 55,  117 => 45,  62 => 16,  299 => 154,  281 => 125,  265 => 106,  262 => 93,  250 => 94,  246 => 86,  244 => 87,  238 => 97,  229 => 78,  203 => 77,  199 => 81,  197 => 67,  193 => 65,  179 => 66,  166 => 59,  129 => 46,  90 => 20,  56 => 13,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 69,  168 => 56,  150 => 53,  110 => 42,  107 => 36,  128 => 45,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 160,  344 => 129,  341 => 128,  335 => 157,  325 => 150,  318 => 122,  309 => 141,  305 => 111,  302 => 137,  293 => 112,  290 => 107,  284 => 104,  280 => 138,  272 => 98,  258 => 96,  254 => 88,  240 => 82,  235 => 89,  232 => 80,  226 => 77,  217 => 83,  200 => 66,  175 => 65,  173 => 63,  170 => 62,  156 => 56,  125 => 44,  99 => 52,  301 => 110,  295 => 133,  292 => 114,  289 => 104,  287 => 99,  282 => 106,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 88,  245 => 101,  230 => 91,  222 => 76,  220 => 76,  215 => 115,  211 => 81,  204 => 71,  198 => 74,  185 => 68,  183 => 67,  177 => 64,  160 => 59,  112 => 38,  82 => 24,  65 => 32,  38 => 5,  144 => 52,  141 => 50,  135 => 47,  126 => 44,  109 => 36,  103 => 53,  67 => 23,  61 => 17,  47 => 9,  105 => 41,  93 => 31,  76 => 35,  72 => 22,  68 => 20,  27 => 3,  91 => 35,  84 => 33,  94 => 27,  88 => 17,  79 => 32,  59 => 15,  21 => 2,  44 => 8,  31 => 3,  28 => 2,  225 => 88,  216 => 84,  212 => 72,  205 => 68,  201 => 69,  196 => 66,  194 => 66,  191 => 70,  189 => 65,  186 => 61,  180 => 66,  172 => 64,  159 => 55,  154 => 54,  147 => 58,  132 => 46,  127 => 52,  121 => 45,  118 => 39,  114 => 38,  104 => 39,  100 => 35,  78 => 42,  75 => 23,  71 => 21,  58 => 14,  34 => 14,  26 => 2,  24 => 1,  25 => 4,  19 => 1,  70 => 24,  63 => 30,  46 => 12,  22 => 2,  163 => 61,  155 => 57,  152 => 61,  149 => 52,  145 => 51,  139 => 50,  131 => 46,  123 => 45,  120 => 50,  115 => 43,  106 => 36,  101 => 51,  96 => 31,  83 => 28,  80 => 32,  74 => 23,  66 => 19,  55 => 8,  52 => 14,  50 => 10,  43 => 17,  41 => 9,  37 => 6,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 61,  171 => 66,  165 => 60,  162 => 54,  157 => 53,  153 => 62,  151 => 53,  143 => 52,  138 => 55,  136 => 54,  133 => 52,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 42,  108 => 41,  102 => 32,  98 => 31,  95 => 36,  92 => 40,  89 => 29,  85 => 16,  81 => 14,  73 => 40,  64 => 17,  60 => 16,  57 => 16,  54 => 13,  51 => 12,  48 => 11,  45 => 8,  42 => 8,  39 => 16,  36 => 12,  33 => 4,  30 => 3,);
    }
}
