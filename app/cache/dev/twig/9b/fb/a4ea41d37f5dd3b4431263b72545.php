<?php

/* SMAdminBundle::popup.html.twig */
class __TwigTemplate_9bfba4ea41d37f5dd3b4431263b72545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Le styles -->
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/css/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js') }}\"></script>
            <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>

        </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "                </div>
            </div>
        </div>

        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/prettify.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/static/admin/js/twig.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  311 => 118,  277 => 110,  140 => 53,  243 => 86,  214 => 74,  285 => 103,  345 => 127,  256 => 95,  224 => 80,  161 => 65,  373 => 172,  359 => 166,  351 => 164,  313 => 148,  304 => 116,  275 => 98,  236 => 92,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 101,  261 => 95,  233 => 79,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 158,  308 => 118,  291 => 105,  286 => 140,  192 => 63,  77 => 22,  87 => 38,  164 => 62,  124 => 47,  97 => 43,  40 => 16,  23 => 3,  158 => 57,  283 => 103,  271 => 96,  242 => 92,  228 => 124,  206 => 81,  187 => 74,  181 => 62,  49 => 19,  134 => 46,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 100,  210 => 76,  202 => 68,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 130,  241 => 94,  234 => 80,  176 => 71,  148 => 56,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 147,  306 => 117,  298 => 110,  296 => 112,  278 => 103,  269 => 97,  248 => 96,  195 => 64,  146 => 53,  113 => 43,  300 => 116,  288 => 107,  274 => 147,  266 => 100,  259 => 90,  255 => 89,  251 => 88,  247 => 87,  239 => 81,  218 => 85,  208 => 70,  167 => 94,  137 => 47,  221 => 75,  209 => 69,  174 => 61,  169 => 67,  142 => 51,  117 => 45,  62 => 26,  299 => 154,  281 => 102,  265 => 106,  262 => 93,  250 => 87,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 66,  199 => 108,  197 => 65,  193 => 65,  179 => 100,  166 => 59,  129 => 39,  90 => 20,  56 => 21,  227 => 77,  223 => 74,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 59,  168 => 56,  150 => 53,  110 => 40,  107 => 40,  128 => 40,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 162,  344 => 129,  341 => 158,  335 => 156,  325 => 61,  318 => 122,  309 => 115,  305 => 111,  302 => 115,  293 => 112,  290 => 108,  284 => 112,  280 => 138,  272 => 100,  258 => 96,  254 => 88,  240 => 90,  235 => 91,  232 => 80,  226 => 89,  217 => 72,  200 => 66,  175 => 53,  173 => 60,  170 => 59,  156 => 56,  125 => 38,  99 => 35,  301 => 110,  295 => 142,  292 => 114,  289 => 104,  287 => 99,  282 => 104,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 93,  245 => 85,  230 => 91,  222 => 87,  220 => 76,  215 => 115,  211 => 70,  204 => 70,  198 => 72,  185 => 109,  183 => 73,  177 => 58,  160 => 99,  112 => 39,  82 => 36,  65 => 30,  38 => 6,  144 => 44,  141 => 54,  135 => 50,  126 => 44,  109 => 36,  103 => 36,  67 => 18,  61 => 17,  47 => 12,  105 => 45,  93 => 42,  76 => 33,  72 => 20,  68 => 19,  27 => 7,  91 => 39,  84 => 28,  94 => 27,  88 => 44,  79 => 24,  59 => 12,  21 => 2,  44 => 17,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 74,  205 => 68,  201 => 69,  196 => 66,  194 => 77,  191 => 60,  189 => 65,  186 => 61,  180 => 59,  172 => 62,  159 => 55,  154 => 52,  147 => 50,  132 => 51,  127 => 48,  121 => 45,  118 => 42,  114 => 37,  104 => 30,  100 => 29,  78 => 35,  75 => 30,  71 => 19,  58 => 25,  34 => 11,  26 => 5,  24 => 1,  25 => 3,  19 => 1,  70 => 28,  63 => 30,  46 => 9,  22 => 2,  163 => 58,  155 => 51,  152 => 54,  149 => 51,  145 => 55,  139 => 41,  131 => 48,  123 => 50,  120 => 37,  115 => 41,  106 => 44,  101 => 44,  96 => 32,  83 => 25,  80 => 25,  74 => 23,  66 => 27,  55 => 23,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 57,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 87,  143 => 48,  138 => 42,  136 => 52,  133 => 52,  130 => 40,  122 => 49,  119 => 46,  116 => 45,  111 => 37,  108 => 39,  102 => 43,  98 => 41,  95 => 30,  92 => 40,  89 => 28,  85 => 37,  81 => 40,  73 => 35,  64 => 31,  60 => 22,  57 => 27,  54 => 24,  51 => 11,  48 => 19,  45 => 8,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
