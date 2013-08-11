<?php

/* SMAdminBundle:Products:show.html.twig */
class __TwigTemplate_769c1f744883ea81efd03a4d3ae27ba2 extends Twig_Template
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
        echo "<h1>Products</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "price"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Unit</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "unit"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Discount</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "discount"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Thumb</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "thumb"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Amount</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "amount"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Products:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 130,  333 => 126,  322 => 123,  237 => 84,  231 => 82,  188 => 65,  20 => 1,  311 => 118,  277 => 104,  140 => 53,  243 => 86,  214 => 73,  285 => 103,  345 => 127,  256 => 95,  224 => 85,  161 => 65,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 98,  236 => 92,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 121,  308 => 118,  291 => 105,  286 => 140,  192 => 63,  77 => 22,  87 => 39,  164 => 58,  124 => 51,  97 => 43,  40 => 16,  23 => 3,  158 => 58,  283 => 103,  271 => 103,  242 => 92,  228 => 78,  206 => 78,  187 => 74,  181 => 65,  49 => 19,  134 => 53,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 77,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 130,  241 => 91,  234 => 80,  176 => 71,  148 => 56,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 120,  306 => 118,  298 => 112,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 56,  113 => 57,  300 => 116,  288 => 106,  274 => 147,  266 => 96,  259 => 97,  255 => 89,  251 => 88,  247 => 93,  239 => 81,  218 => 77,  208 => 70,  167 => 94,  137 => 47,  221 => 84,  209 => 71,  174 => 61,  169 => 62,  142 => 55,  117 => 45,  62 => 27,  299 => 154,  281 => 102,  265 => 106,  262 => 93,  250 => 94,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 69,  199 => 108,  197 => 67,  193 => 65,  179 => 62,  166 => 59,  129 => 39,  90 => 20,  56 => 21,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 63,  168 => 56,  150 => 53,  110 => 37,  107 => 45,  128 => 52,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 129,  344 => 129,  341 => 128,  335 => 156,  325 => 124,  318 => 122,  309 => 115,  305 => 111,  302 => 112,  293 => 112,  290 => 107,  284 => 104,  280 => 138,  272 => 98,  258 => 96,  254 => 88,  240 => 82,  235 => 89,  232 => 80,  226 => 77,  217 => 74,  200 => 66,  175 => 65,  173 => 63,  170 => 62,  156 => 56,  125 => 47,  99 => 42,  301 => 110,  295 => 142,  292 => 114,  289 => 104,  287 => 99,  282 => 106,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 88,  245 => 85,  230 => 91,  222 => 76,  220 => 76,  215 => 115,  211 => 70,  204 => 70,  198 => 76,  185 => 64,  183 => 67,  177 => 64,  160 => 56,  112 => 38,  82 => 36,  65 => 32,  38 => 6,  144 => 56,  141 => 55,  135 => 50,  126 => 44,  109 => 56,  103 => 44,  67 => 18,  61 => 17,  47 => 12,  105 => 45,  93 => 46,  76 => 35,  72 => 20,  68 => 19,  27 => 7,  91 => 39,  84 => 26,  94 => 27,  88 => 27,  79 => 24,  59 => 29,  21 => 2,  44 => 17,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 72,  205 => 68,  201 => 69,  196 => 66,  194 => 66,  191 => 69,  189 => 65,  186 => 61,  180 => 66,  172 => 62,  159 => 55,  154 => 55,  147 => 50,  132 => 49,  127 => 48,  121 => 45,  118 => 47,  114 => 37,  104 => 30,  100 => 29,  78 => 35,  75 => 30,  71 => 19,  58 => 25,  34 => 11,  26 => 5,  24 => 1,  25 => 3,  19 => 1,  70 => 28,  63 => 30,  46 => 9,  22 => 2,  163 => 61,  155 => 51,  152 => 58,  149 => 57,  145 => 55,  139 => 41,  131 => 48,  123 => 50,  120 => 44,  115 => 41,  106 => 36,  101 => 51,  96 => 32,  83 => 39,  80 => 37,  74 => 23,  66 => 27,  55 => 23,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 60,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 54,  143 => 52,  138 => 54,  136 => 54,  133 => 52,  130 => 40,  122 => 45,  119 => 46,  116 => 43,  111 => 37,  108 => 39,  102 => 35,  98 => 34,  95 => 30,  92 => 40,  89 => 28,  85 => 37,  81 => 40,  73 => 35,  64 => 31,  60 => 22,  57 => 27,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
