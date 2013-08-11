<?php

/* ::base.html.twig */
class __TwigTemplate_c7bb1747bc5fdf21156dc9ec6d5fdadb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1106 => 316,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1038 => 303,  1033 => 302,  1031 => 301,  1028 => 300,  1019 => 294,  1013 => 292,  1010 => 291,  1005 => 290,  1003 => 289,  1000 => 288,  993 => 283,  986 => 281,  983 => 277,  979 => 276,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  926 => 252,  924 => 251,  921 => 250,  913 => 246,  911 => 242,  909 => 241,  906 => 240,  885 => 234,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  837 => 214,  829 => 210,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  808 => 201,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  749 => 175,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  720 => 162,  717 => 161,  715 => 160,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  687 => 150,  681 => 148,  676 => 146,  673 => 145,  665 => 139,  662 => 137,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  521 => 92,  516 => 91,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  450 => 72,  448 => 71,  440 => 70,  435 => 68,  421 => 62,  412 => 60,  405 => 58,  402 => 57,  384 => 49,  790 => 469,  787 => 468,  776 => 187,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 151,  686 => 451,  682 => 450,  678 => 147,  674 => 448,  670 => 447,  666 => 446,  663 => 138,  661 => 136,  644 => 130,  633 => 442,  618 => 437,  613 => 435,  609 => 117,  606 => 116,  604 => 115,  590 => 431,  558 => 401,  540 => 398,  523 => 93,  520 => 396,  518 => 395,  513 => 90,  508 => 391,  388 => 160,  385 => 159,  370 => 156,  362 => 153,  356 => 37,  340 => 158,  352 => 149,  333 => 141,  322 => 123,  237 => 84,  231 => 308,  188 => 66,  20 => 1,  311 => 20,  277 => 104,  140 => 42,  243 => 86,  214 => 82,  285 => 103,  345 => 33,  256 => 330,  224 => 85,  161 => 199,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 111,  236 => 315,  361 => 128,  343 => 159,  320 => 135,  316 => 22,  279 => 105,  261 => 95,  233 => 314,  391 => 187,  377 => 157,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 27,  329 => 26,  317 => 159,  314 => 21,  308 => 129,  291 => 105,  286 => 140,  192 => 249,  77 => 21,  87 => 26,  164 => 200,  124 => 129,  97 => 23,  40 => 11,  23 => 1,  158 => 56,  283 => 103,  271 => 103,  242 => 92,  228 => 307,  206 => 78,  187 => 239,  181 => 87,  49 => 15,  134 => 158,  69 => 11,  429 => 64,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 59,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 152,  354 => 150,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 332,  257 => 234,  210 => 271,  202 => 263,  376 => 140,  364 => 41,  342 => 32,  331 => 124,  327 => 139,  323 => 24,  321 => 23,  315 => 149,  294 => 109,  267 => 4,  264 => 3,  252 => 328,  241 => 323,  234 => 89,  176 => 220,  148 => 74,  86 => 46,  442 => 172,  438 => 69,  434 => 170,  422 => 165,  420 => 164,  416 => 61,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 42,  358 => 135,  339 => 145,  330 => 140,  324 => 117,  312 => 119,  310 => 120,  306 => 128,  298 => 112,  296 => 108,  278 => 8,  269 => 5,  248 => 326,  195 => 250,  146 => 178,  113 => 40,  300 => 116,  288 => 129,  274 => 121,  266 => 96,  259 => 109,  255 => 89,  251 => 88,  247 => 97,  239 => 81,  218 => 288,  208 => 266,  167 => 64,  137 => 47,  221 => 83,  209 => 77,  174 => 214,  169 => 207,  142 => 55,  117 => 45,  62 => 14,  299 => 154,  281 => 125,  265 => 106,  262 => 236,  250 => 327,  246 => 325,  244 => 324,  238 => 321,  229 => 78,  203 => 77,  199 => 81,  197 => 259,  193 => 68,  179 => 222,  166 => 206,  129 => 145,  90 => 27,  56 => 12,  227 => 77,  223 => 299,  219 => 78,  213 => 272,  207 => 95,  190 => 240,  182 => 223,  168 => 56,  150 => 75,  110 => 38,  107 => 37,  128 => 45,  53 => 5,  464 => 150,  460 => 149,  456 => 74,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 52,  390 => 107,  387 => 50,  382 => 48,  379 => 47,  375 => 144,  369 => 43,  366 => 155,  363 => 140,  357 => 151,  353 => 36,  350 => 35,  347 => 34,  344 => 147,  341 => 128,  335 => 157,  325 => 138,  318 => 122,  309 => 141,  305 => 111,  302 => 137,  293 => 112,  290 => 14,  284 => 104,  280 => 114,  272 => 6,  258 => 331,  254 => 329,  240 => 219,  235 => 89,  232 => 80,  226 => 300,  217 => 83,  200 => 260,  175 => 65,  173 => 85,  170 => 60,  156 => 192,  125 => 44,  99 => 68,  301 => 125,  295 => 16,  292 => 15,  289 => 119,  287 => 13,  282 => 115,  276 => 248,  273 => 110,  270 => 102,  268 => 107,  263 => 94,  249 => 88,  245 => 96,  230 => 91,  222 => 76,  220 => 297,  215 => 287,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 39,  82 => 26,  65 => 17,  38 => 6,  144 => 173,  141 => 172,  135 => 47,  126 => 144,  109 => 102,  103 => 25,  67 => 17,  61 => 2,  47 => 12,  105 => 41,  93 => 28,  76 => 31,  72 => 18,  68 => 30,  27 => 5,  91 => 56,  84 => 41,  94 => 57,  88 => 30,  79 => 32,  59 => 6,  21 => 1,  44 => 11,  31 => 5,  28 => 3,  225 => 88,  216 => 84,  212 => 78,  205 => 265,  201 => 69,  196 => 92,  194 => 66,  191 => 70,  189 => 65,  186 => 61,  180 => 66,  172 => 64,  159 => 193,  154 => 186,  147 => 58,  132 => 47,  127 => 52,  121 => 128,  118 => 39,  114 => 108,  104 => 87,  100 => 36,  78 => 25,  75 => 24,  71 => 19,  58 => 14,  34 => 5,  26 => 3,  24 => 2,  25 => 4,  19 => 1,  70 => 20,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 57,  152 => 61,  149 => 179,  145 => 57,  139 => 166,  131 => 157,  123 => 35,  120 => 50,  115 => 40,  106 => 101,  101 => 86,  96 => 67,  83 => 24,  80 => 32,  74 => 20,  66 => 12,  55 => 13,  52 => 13,  50 => 12,  43 => 9,  41 => 7,  37 => 7,  35 => 7,  32 => 6,  29 => 5,  184 => 237,  178 => 86,  171 => 213,  165 => 54,  162 => 53,  157 => 53,  153 => 62,  151 => 185,  143 => 43,  138 => 55,  136 => 165,  133 => 52,  130 => 39,  122 => 51,  119 => 114,  116 => 113,  111 => 107,  108 => 33,  102 => 30,  98 => 29,  95 => 34,  92 => 31,  89 => 47,  85 => 16,  81 => 40,  73 => 20,  64 => 10,  60 => 20,  57 => 14,  54 => 13,  51 => 11,  48 => 11,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
