<?php

/* SMAdminBundle:News:show.html.twig */
class __TwigTemplate_49733143c78ab1cc20364cc425c37e72 extends Twig_Template
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
        echo "<h1>News</h1>

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
            <th>Status</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "image"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 41
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
        return "SMAdminBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 104,  345 => 127,  256 => 95,  224 => 80,  161 => 61,  373 => 172,  359 => 166,  351 => 164,  313 => 148,  304 => 116,  275 => 137,  236 => 84,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 101,  261 => 95,  233 => 79,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 158,  308 => 118,  291 => 105,  286 => 140,  192 => 70,  77 => 22,  87 => 26,  164 => 62,  124 => 46,  97 => 33,  40 => 8,  23 => 3,  158 => 91,  283 => 103,  271 => 96,  242 => 92,  228 => 124,  206 => 112,  187 => 64,  181 => 62,  49 => 19,  134 => 49,  69 => 21,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 99,  257 => 96,  210 => 76,  202 => 68,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 111,  267 => 95,  264 => 99,  252 => 130,  241 => 82,  234 => 88,  176 => 63,  148 => 56,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 147,  306 => 111,  298 => 143,  296 => 112,  278 => 104,  269 => 95,  248 => 99,  195 => 71,  146 => 55,  113 => 43,  300 => 106,  288 => 107,  274 => 147,  266 => 100,  259 => 90,  255 => 131,  251 => 91,  247 => 140,  239 => 81,  218 => 87,  208 => 70,  167 => 94,  137 => 53,  221 => 75,  209 => 78,  174 => 65,  169 => 61,  142 => 51,  117 => 46,  62 => 16,  299 => 154,  281 => 105,  265 => 96,  262 => 93,  250 => 87,  246 => 92,  244 => 87,  238 => 85,  229 => 76,  203 => 66,  199 => 108,  197 => 75,  193 => 65,  179 => 100,  166 => 51,  129 => 39,  90 => 20,  56 => 21,  227 => 77,  223 => 84,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 59,  168 => 53,  150 => 53,  110 => 34,  107 => 40,  128 => 40,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 162,  344 => 129,  341 => 158,  335 => 156,  325 => 61,  318 => 150,  309 => 115,  305 => 111,  302 => 115,  293 => 112,  290 => 109,  284 => 100,  280 => 138,  272 => 136,  258 => 96,  254 => 88,  240 => 90,  235 => 91,  232 => 87,  226 => 123,  217 => 73,  200 => 82,  175 => 53,  173 => 60,  170 => 59,  156 => 49,  125 => 38,  99 => 35,  301 => 110,  295 => 142,  292 => 100,  289 => 141,  287 => 99,  282 => 104,  276 => 103,  273 => 101,  270 => 102,  268 => 32,  263 => 144,  249 => 93,  245 => 85,  230 => 77,  222 => 79,  220 => 83,  215 => 115,  211 => 71,  204 => 73,  198 => 72,  185 => 109,  183 => 101,  177 => 58,  160 => 99,  112 => 39,  82 => 27,  65 => 30,  38 => 6,  144 => 44,  141 => 54,  135 => 54,  126 => 47,  109 => 36,  103 => 42,  67 => 18,  61 => 17,  47 => 12,  105 => 35,  93 => 29,  76 => 33,  72 => 20,  68 => 19,  27 => 7,  91 => 29,  84 => 28,  94 => 27,  88 => 44,  79 => 36,  59 => 12,  21 => 2,  44 => 9,  31 => 3,  28 => 2,  225 => 76,  216 => 73,  212 => 74,  205 => 77,  201 => 76,  196 => 66,  194 => 64,  191 => 60,  189 => 69,  186 => 74,  180 => 64,  172 => 62,  159 => 55,  154 => 47,  147 => 86,  132 => 40,  127 => 51,  121 => 45,  118 => 74,  114 => 35,  104 => 30,  100 => 29,  78 => 23,  75 => 23,  71 => 19,  58 => 28,  34 => 11,  26 => 3,  24 => 1,  25 => 3,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 57,  155 => 51,  152 => 94,  149 => 46,  145 => 55,  139 => 41,  131 => 48,  123 => 50,  120 => 37,  115 => 39,  106 => 44,  101 => 34,  96 => 32,  83 => 25,  80 => 25,  74 => 23,  66 => 20,  55 => 23,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 53,  165 => 58,  162 => 63,  157 => 57,  153 => 54,  151 => 87,  143 => 42,  138 => 42,  136 => 40,  133 => 52,  130 => 40,  122 => 38,  119 => 41,  116 => 35,  111 => 37,  108 => 34,  102 => 43,  98 => 41,  95 => 31,  92 => 40,  89 => 28,  85 => 41,  81 => 40,  73 => 35,  64 => 31,  60 => 22,  57 => 16,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
