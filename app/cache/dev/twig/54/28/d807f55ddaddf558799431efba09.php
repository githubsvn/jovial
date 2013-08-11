<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_5428d807f55ddaddf558799431efba09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getContext($context, "include_jquery")) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        }
        // line 4
        if ($this->getContext($context, "tinymce_jquery")) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/vendor/tiny_mce/jquery.tinymce.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/init.jquery.js"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/vendor/tiny_mce/tiny_mce.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/ready.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/init.standard.js"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    initTinyMCE(";
        // line 14
        echo $this->getContext($context, "tinymce_config");
        echo ");
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 130,  333 => 126,  322 => 123,  237 => 84,  231 => 82,  188 => 65,  20 => 1,  311 => 118,  277 => 104,  140 => 53,  243 => 86,  214 => 73,  285 => 103,  345 => 127,  256 => 95,  224 => 85,  161 => 63,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 98,  236 => 92,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 121,  308 => 118,  291 => 105,  286 => 140,  192 => 63,  77 => 24,  87 => 28,  164 => 60,  124 => 51,  97 => 43,  40 => 7,  23 => 2,  158 => 58,  283 => 103,  271 => 103,  242 => 92,  228 => 78,  206 => 78,  187 => 74,  181 => 65,  49 => 19,  134 => 46,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 77,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 130,  241 => 91,  234 => 80,  176 => 71,  148 => 53,  86 => 25,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 120,  306 => 118,  298 => 112,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 56,  113 => 57,  300 => 116,  288 => 106,  274 => 147,  266 => 96,  259 => 97,  255 => 89,  251 => 88,  247 => 93,  239 => 81,  218 => 77,  208 => 70,  167 => 94,  137 => 47,  221 => 84,  209 => 71,  174 => 61,  169 => 66,  142 => 55,  117 => 45,  62 => 27,  299 => 154,  281 => 102,  265 => 106,  262 => 93,  250 => 94,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 69,  199 => 81,  197 => 67,  193 => 65,  179 => 66,  166 => 59,  129 => 46,  90 => 20,  56 => 21,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 63,  168 => 56,  150 => 53,  110 => 37,  107 => 36,  128 => 45,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 129,  344 => 129,  341 => 128,  335 => 156,  325 => 124,  318 => 122,  309 => 115,  305 => 111,  302 => 112,  293 => 112,  290 => 107,  284 => 104,  280 => 138,  272 => 98,  258 => 96,  254 => 88,  240 => 82,  235 => 89,  232 => 80,  226 => 77,  217 => 74,  200 => 66,  175 => 65,  173 => 63,  170 => 62,  156 => 56,  125 => 43,  99 => 34,  301 => 110,  295 => 142,  292 => 114,  289 => 104,  287 => 99,  282 => 106,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 88,  245 => 85,  230 => 91,  222 => 76,  220 => 76,  215 => 115,  211 => 70,  204 => 83,  198 => 76,  185 => 64,  183 => 67,  177 => 64,  160 => 59,  112 => 38,  82 => 24,  65 => 32,  38 => 6,  144 => 52,  141 => 50,  135 => 47,  126 => 44,  109 => 36,  103 => 35,  67 => 20,  61 => 17,  47 => 12,  105 => 41,  93 => 29,  76 => 35,  72 => 20,  68 => 18,  27 => 5,  91 => 29,  84 => 25,  94 => 27,  88 => 27,  79 => 32,  59 => 15,  21 => 2,  44 => 18,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 72,  205 => 68,  201 => 69,  196 => 66,  194 => 66,  191 => 76,  189 => 65,  186 => 61,  180 => 66,  172 => 67,  159 => 55,  154 => 55,  147 => 59,  132 => 46,  127 => 48,  121 => 45,  118 => 39,  114 => 38,  104 => 30,  100 => 32,  78 => 42,  75 => 31,  71 => 21,  58 => 31,  34 => 6,  26 => 3,  24 => 1,  25 => 4,  19 => 1,  70 => 18,  63 => 30,  46 => 10,  22 => 2,  163 => 61,  155 => 57,  152 => 61,  149 => 52,  145 => 51,  139 => 50,  131 => 48,  123 => 45,  120 => 44,  115 => 43,  106 => 36,  101 => 51,  96 => 31,  83 => 33,  80 => 24,  74 => 23,  66 => 17,  55 => 14,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  37 => 8,  35 => 5,  32 => 6,  29 => 4,  184 => 63,  178 => 61,  171 => 64,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 54,  143 => 52,  138 => 54,  136 => 54,  133 => 52,  130 => 45,  122 => 45,  119 => 44,  116 => 39,  111 => 42,  108 => 39,  102 => 32,  98 => 31,  95 => 30,  92 => 40,  89 => 28,  85 => 37,  81 => 25,  73 => 40,  64 => 17,  60 => 28,  57 => 16,  54 => 11,  51 => 12,  48 => 10,  45 => 8,  42 => 9,  39 => 14,  36 => 12,  33 => 4,  30 => 5,);
    }
}
