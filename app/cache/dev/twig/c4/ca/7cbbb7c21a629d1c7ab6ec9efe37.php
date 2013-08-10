<?php

/* SMAdminBundle:Default:index.html.twig */
class __TwigTemplate_c4ca7cbbb7c21a629d1c7ab6ec9efe37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span6\" style=\"margin: 0 auto; float: none\">
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["gkey"] => $context["group"]) {
            // line 6
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "group")) > 0)) {
                // line 7
                echo "    <table class=\"table table-bordered table-striped sonata-ba-list\">
        <thead>
            <tr>
                <th colspan=\"3\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getContext($context, "gkey"), "html", null, true);
                echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "group"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 15
                    echo "            <tr>
                <td>";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "item"), "label"), array(), "SMAdminBundle"), "html", null, true);
                    echo "</td>
                <td style=\"width: 25%; text-align: center;\">
                    <a class=\"btn\" href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "action"), 0, array(), "array")), "html", null, true);
                    echo "\">
                        <i class=\"icon-plus\"></i> ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add new", array(), "SMAdminBundle"), "html", null, true);
                    echo "
                    </a>
                </td>
                <td style=\"width: 20%; text-align: center;\">
                    <a class=\"btn\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "action"), 1, array(), "array")), "html", null, true);
                    echo "\">
                        <i class=\"icon-list\"></i> ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("List", array(), "SMAdminBundle"), "html", null, true);
                    echo "
                    </a>
                </td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "        </tbody>
    </table>
        ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['gkey'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 47,  283 => 104,  271 => 99,  242 => 92,  228 => 87,  206 => 76,  187 => 59,  181 => 55,  49 => 19,  134 => 49,  69 => 19,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  303 => 113,  297 => 111,  260 => 99,  257 => 96,  210 => 85,  202 => 83,  376 => 140,  364 => 135,  342 => 130,  331 => 127,  327 => 126,  323 => 124,  321 => 121,  315 => 117,  294 => 110,  267 => 100,  264 => 99,  252 => 95,  241 => 94,  234 => 90,  176 => 63,  148 => 55,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 129,  330 => 124,  324 => 123,  312 => 119,  310 => 118,  306 => 114,  298 => 114,  296 => 111,  278 => 104,  269 => 101,  248 => 99,  195 => 73,  146 => 55,  113 => 57,  300 => 105,  288 => 109,  274 => 102,  266 => 104,  259 => 93,  255 => 101,  251 => 91,  247 => 89,  239 => 93,  218 => 87,  208 => 72,  167 => 50,  137 => 39,  221 => 74,  209 => 68,  174 => 64,  169 => 51,  142 => 44,  117 => 46,  62 => 27,  299 => 112,  281 => 108,  265 => 98,  262 => 93,  250 => 94,  246 => 93,  244 => 97,  238 => 91,  229 => 90,  203 => 75,  199 => 63,  197 => 61,  193 => 62,  179 => 56,  166 => 49,  129 => 38,  90 => 20,  56 => 11,  227 => 85,  223 => 84,  219 => 83,  213 => 69,  207 => 66,  190 => 78,  182 => 73,  168 => 50,  150 => 44,  110 => 32,  107 => 32,  128 => 37,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 136,  366 => 138,  363 => 140,  357 => 72,  353 => 135,  350 => 132,  347 => 133,  344 => 129,  341 => 131,  335 => 128,  325 => 61,  318 => 121,  309 => 115,  305 => 55,  302 => 54,  293 => 112,  290 => 51,  284 => 106,  280 => 105,  272 => 102,  258 => 97,  254 => 97,  240 => 13,  235 => 91,  232 => 11,  226 => 89,  217 => 74,  200 => 82,  175 => 53,  173 => 53,  170 => 52,  156 => 49,  125 => 36,  99 => 31,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 107,  282 => 99,  276 => 100,  273 => 96,  270 => 84,  268 => 32,  263 => 100,  249 => 94,  245 => 92,  230 => 88,  222 => 82,  220 => 76,  215 => 82,  211 => 67,  204 => 70,  198 => 67,  185 => 57,  183 => 67,  177 => 58,  160 => 49,  112 => 33,  82 => 30,  65 => 18,  38 => 6,  144 => 42,  141 => 53,  135 => 39,  126 => 37,  109 => 56,  103 => 34,  67 => 20,  61 => 23,  47 => 30,  105 => 31,  93 => 46,  76 => 23,  72 => 21,  68 => 21,  27 => 7,  91 => 29,  84 => 25,  94 => 27,  88 => 31,  79 => 24,  59 => 12,  21 => 2,  44 => 7,  31 => 4,  28 => 3,  225 => 75,  216 => 90,  212 => 74,  205 => 67,  201 => 74,  196 => 61,  194 => 75,  191 => 61,  189 => 59,  186 => 127,  180 => 54,  172 => 66,  159 => 59,  154 => 45,  147 => 55,  132 => 40,  127 => 51,  121 => 38,  118 => 45,  114 => 33,  104 => 30,  100 => 28,  78 => 37,  75 => 22,  71 => 19,  58 => 26,  34 => 5,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 32,  63 => 24,  46 => 10,  22 => 2,  163 => 49,  155 => 46,  152 => 56,  149 => 43,  145 => 54,  139 => 51,  131 => 41,  123 => 36,  120 => 35,  115 => 34,  106 => 31,  101 => 29,  96 => 32,  83 => 24,  80 => 24,  74 => 36,  66 => 31,  55 => 12,  52 => 10,  50 => 10,  43 => 7,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 3,  184 => 57,  178 => 55,  171 => 63,  165 => 61,  162 => 48,  157 => 58,  153 => 45,  151 => 57,  143 => 41,  138 => 40,  136 => 42,  133 => 52,  130 => 48,  122 => 46,  119 => 34,  116 => 35,  111 => 32,  108 => 34,  102 => 33,  98 => 41,  95 => 28,  92 => 27,  89 => 29,  85 => 24,  81 => 26,  73 => 22,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
