<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_b6c17add61990727b5ce7d7075d0d10f extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "request"), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "request"), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute($this->getContext($context, "router"), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getContext($context, "router"), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "traces"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("almost") : ((((2 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "pattern"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  388 => 160,  385 => 159,  362 => 153,  319 => 120,  253 => 96,  333 => 141,  322 => 123,  374 => 145,  370 => 156,  356 => 163,  352 => 149,  340 => 158,  328 => 126,  237 => 94,  231 => 88,  188 => 66,  20 => 1,  311 => 130,  277 => 103,  140 => 42,  243 => 97,  214 => 82,  285 => 106,  345 => 127,  256 => 97,  224 => 85,  161 => 80,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 111,  236 => 92,  361 => 128,  343 => 159,  320 => 135,  316 => 145,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 157,  371 => 180,  365 => 170,  348 => 170,  346 => 132,  337 => 129,  334 => 128,  329 => 154,  317 => 120,  314 => 131,  308 => 129,  291 => 111,  286 => 109,  192 => 72,  77 => 25,  87 => 33,  164 => 63,  124 => 51,  97 => 23,  40 => 11,  23 => 3,  158 => 56,  283 => 103,  271 => 101,  242 => 93,  228 => 87,  206 => 78,  187 => 74,  181 => 87,  49 => 17,  134 => 54,  69 => 20,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 146,  372 => 140,  360 => 152,  354 => 150,  349 => 134,  338 => 127,  332 => 127,  326 => 123,  303 => 115,  297 => 109,  260 => 235,  257 => 234,  210 => 79,  202 => 73,  376 => 140,  364 => 140,  342 => 146,  331 => 126,  327 => 139,  323 => 149,  321 => 121,  315 => 149,  294 => 109,  267 => 101,  264 => 105,  252 => 138,  241 => 91,  234 => 89,  176 => 61,  148 => 74,  86 => 29,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 139,  339 => 145,  330 => 140,  324 => 117,  312 => 119,  310 => 120,  306 => 128,  298 => 112,  296 => 110,  278 => 103,  269 => 97,  248 => 98,  195 => 80,  146 => 56,  113 => 40,  300 => 116,  288 => 129,  274 => 121,  266 => 100,  259 => 109,  255 => 89,  251 => 99,  247 => 97,  239 => 92,  218 => 85,  208 => 70,  167 => 64,  137 => 47,  221 => 83,  209 => 77,  174 => 58,  169 => 56,  142 => 55,  117 => 45,  62 => 21,  299 => 114,  281 => 125,  265 => 99,  262 => 236,  250 => 95,  246 => 86,  244 => 87,  238 => 218,  229 => 78,  203 => 77,  199 => 81,  197 => 65,  193 => 68,  179 => 66,  166 => 82,  129 => 46,  90 => 41,  56 => 15,  227 => 77,  223 => 74,  219 => 86,  213 => 72,  207 => 95,  190 => 89,  182 => 64,  168 => 56,  150 => 75,  110 => 42,  107 => 27,  128 => 45,  53 => 17,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 158,  375 => 144,  369 => 171,  366 => 155,  363 => 140,  357 => 151,  353 => 135,  350 => 128,  347 => 160,  344 => 147,  341 => 128,  335 => 157,  325 => 138,  318 => 122,  309 => 141,  305 => 116,  302 => 137,  293 => 112,  290 => 108,  284 => 112,  280 => 114,  272 => 100,  258 => 103,  254 => 101,  240 => 219,  235 => 89,  232 => 90,  226 => 86,  217 => 83,  200 => 81,  175 => 65,  173 => 85,  170 => 60,  156 => 77,  125 => 44,  99 => 34,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 102,  268 => 107,  263 => 99,  249 => 93,  245 => 96,  230 => 91,  222 => 87,  220 => 90,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 6,  144 => 73,  141 => 50,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 21,  61 => 18,  47 => 15,  105 => 41,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  27 => 4,  91 => 34,  84 => 27,  94 => 27,  88 => 20,  79 => 35,  59 => 21,  21 => 2,  44 => 11,  31 => 6,  28 => 6,  225 => 88,  216 => 84,  212 => 78,  205 => 71,  201 => 69,  196 => 92,  194 => 75,  191 => 70,  189 => 65,  186 => 61,  180 => 70,  172 => 64,  159 => 55,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 39,  114 => 38,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  58 => 25,  34 => 8,  26 => 3,  24 => 2,  25 => 4,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 81,  155 => 57,  152 => 61,  149 => 52,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 44,  101 => 33,  96 => 35,  83 => 28,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 16,  43 => 8,  41 => 12,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 53,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 52,  133 => 52,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 42,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 21,  89 => 28,  85 => 16,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 11,  45 => 14,  42 => 8,  39 => 9,  36 => 9,  33 => 6,  30 => 7,);
    }
}
