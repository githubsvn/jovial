<?php

/* SMAdminBundle:Menu:show.html.twig */
class __TwigTemplate_cf00014fbf047fdd98569e5d28cee6e1 extends Twig_Template
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
        echo "<h1>Menu</h1>

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
            <th>Lft</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lft"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Rgt</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "rgt"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 45
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
        return "SMAdminBundle:Menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 172,  359 => 166,  351 => 164,  313 => 148,  304 => 145,  275 => 137,  236 => 126,  361 => 128,  343 => 122,  320 => 116,  316 => 115,  279 => 98,  261 => 132,  233 => 125,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 158,  308 => 112,  291 => 102,  286 => 140,  192 => 113,  77 => 22,  87 => 29,  164 => 64,  124 => 49,  97 => 33,  40 => 8,  23 => 3,  158 => 91,  283 => 139,  271 => 146,  242 => 92,  228 => 124,  206 => 112,  187 => 62,  181 => 108,  49 => 19,  134 => 49,  69 => 21,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 111,  260 => 99,  257 => 96,  210 => 76,  202 => 83,  376 => 140,  364 => 135,  342 => 168,  331 => 127,  327 => 153,  323 => 152,  321 => 121,  315 => 149,  294 => 153,  267 => 135,  264 => 99,  252 => 130,  241 => 82,  234 => 131,  176 => 57,  148 => 93,  86 => 25,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 129,  330 => 124,  324 => 117,  312 => 114,  310 => 147,  306 => 111,  298 => 143,  296 => 111,  278 => 104,  269 => 95,  248 => 99,  195 => 107,  146 => 55,  113 => 38,  300 => 106,  288 => 109,  274 => 147,  266 => 104,  259 => 90,  255 => 131,  251 => 91,  247 => 140,  239 => 93,  218 => 87,  208 => 120,  167 => 94,  137 => 52,  221 => 74,  209 => 69,  174 => 98,  169 => 102,  142 => 84,  117 => 36,  62 => 27,  299 => 154,  281 => 99,  265 => 134,  262 => 93,  250 => 90,  246 => 88,  244 => 128,  238 => 82,  229 => 76,  203 => 66,  199 => 108,  197 => 115,  193 => 64,  179 => 100,  166 => 51,  129 => 39,  90 => 20,  56 => 21,  227 => 74,  223 => 73,  219 => 75,  213 => 71,  207 => 69,  190 => 105,  182 => 59,  168 => 53,  150 => 45,  110 => 34,  107 => 63,  128 => 40,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 72,  353 => 165,  350 => 132,  347 => 162,  344 => 129,  341 => 158,  335 => 156,  325 => 61,  318 => 150,  309 => 115,  305 => 156,  302 => 155,  293 => 112,  290 => 51,  284 => 100,  280 => 138,  272 => 136,  258 => 92,  254 => 91,  240 => 13,  235 => 91,  232 => 11,  226 => 123,  217 => 73,  200 => 82,  175 => 53,  173 => 53,  170 => 52,  156 => 49,  125 => 38,  99 => 31,  301 => 112,  295 => 142,  292 => 100,  289 => 141,  287 => 99,  282 => 99,  276 => 100,  273 => 97,  270 => 84,  268 => 32,  263 => 144,  249 => 94,  245 => 139,  230 => 77,  222 => 76,  220 => 76,  215 => 115,  211 => 114,  204 => 70,  198 => 67,  185 => 109,  183 => 101,  177 => 58,  160 => 99,  112 => 39,  82 => 27,  65 => 27,  38 => 6,  144 => 44,  141 => 43,  135 => 80,  126 => 77,  109 => 31,  103 => 42,  67 => 18,  61 => 17,  47 => 12,  105 => 30,  93 => 29,  76 => 33,  72 => 34,  68 => 21,  27 => 7,  91 => 29,  84 => 28,  94 => 27,  88 => 44,  79 => 18,  59 => 12,  21 => 2,  44 => 9,  31 => 3,  28 => 2,  225 => 128,  216 => 81,  212 => 74,  205 => 66,  201 => 67,  196 => 61,  194 => 64,  191 => 60,  189 => 75,  186 => 74,  180 => 69,  172 => 56,  159 => 52,  154 => 47,  147 => 86,  132 => 40,  127 => 37,  121 => 38,  118 => 74,  114 => 35,  104 => 30,  100 => 29,  78 => 24,  75 => 23,  71 => 19,  58 => 18,  34 => 11,  26 => 3,  24 => 1,  25 => 3,  19 => 1,  70 => 18,  63 => 25,  46 => 9,  22 => 2,  163 => 93,  155 => 51,  152 => 94,  149 => 46,  145 => 45,  139 => 41,  131 => 79,  123 => 39,  120 => 37,  115 => 39,  106 => 33,  101 => 29,  96 => 32,  83 => 27,  80 => 39,  74 => 23,  66 => 20,  55 => 23,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 55,  171 => 53,  165 => 101,  162 => 63,  157 => 59,  153 => 46,  151 => 87,  143 => 42,  138 => 42,  136 => 40,  133 => 52,  130 => 40,  122 => 38,  119 => 41,  116 => 35,  111 => 35,  108 => 34,  102 => 33,  98 => 32,  95 => 33,  92 => 45,  89 => 27,  85 => 26,  81 => 24,  73 => 21,  64 => 31,  60 => 22,  57 => 16,  54 => 16,  51 => 13,  48 => 19,  45 => 8,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
