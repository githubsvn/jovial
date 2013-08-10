<?php

/* SMAdminBundle:Company:show.html.twig */
class __TwigTemplate_06222537a50fba94d5cdcce27fd93736 extends Twig_Template
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
        echo "<h1>Company</h1>

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
            <th>Charter_capital</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "chartercapital"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "phone"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fax</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fax"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mst</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mst"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        return "SMAdminBundle:Company:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  303 => 113,  297 => 111,  260 => 99,  257 => 98,  210 => 85,  202 => 83,  376 => 140,  364 => 135,  342 => 130,  331 => 127,  327 => 126,  323 => 124,  321 => 121,  315 => 117,  294 => 110,  267 => 100,  264 => 99,  252 => 95,  241 => 94,  234 => 89,  176 => 63,  148 => 56,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 129,  330 => 124,  324 => 123,  312 => 119,  310 => 118,  306 => 114,  298 => 114,  296 => 111,  278 => 104,  269 => 101,  248 => 99,  195 => 80,  146 => 55,  113 => 57,  300 => 105,  288 => 109,  274 => 102,  266 => 104,  259 => 93,  255 => 101,  251 => 91,  247 => 89,  239 => 93,  218 => 87,  208 => 72,  167 => 53,  137 => 53,  221 => 74,  209 => 88,  174 => 54,  169 => 61,  142 => 44,  117 => 46,  62 => 27,  299 => 112,  281 => 108,  265 => 94,  262 => 93,  250 => 94,  246 => 95,  244 => 97,  238 => 90,  229 => 90,  203 => 66,  199 => 81,  197 => 62,  193 => 64,  179 => 56,  166 => 51,  129 => 39,  90 => 20,  56 => 11,  227 => 85,  223 => 84,  219 => 83,  213 => 68,  207 => 84,  190 => 78,  182 => 73,  168 => 65,  150 => 47,  110 => 32,  107 => 33,  128 => 40,  53 => 11,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 136,  366 => 138,  363 => 140,  357 => 72,  353 => 135,  350 => 132,  347 => 133,  344 => 129,  341 => 131,  335 => 128,  325 => 61,  318 => 121,  309 => 115,  305 => 55,  302 => 54,  293 => 112,  290 => 51,  284 => 106,  280 => 105,  272 => 102,  258 => 97,  254 => 97,  240 => 13,  235 => 91,  232 => 11,  226 => 89,  217 => 74,  200 => 82,  175 => 117,  173 => 53,  170 => 52,  156 => 49,  125 => 38,  99 => 31,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 107,  282 => 99,  276 => 103,  273 => 96,  270 => 84,  268 => 32,  263 => 100,  249 => 96,  245 => 92,  230 => 79,  222 => 76,  220 => 76,  215 => 82,  211 => 81,  204 => 70,  198 => 67,  185 => 73,  183 => 57,  177 => 58,  160 => 49,  112 => 42,  82 => 27,  65 => 14,  38 => 6,  144 => 45,  141 => 54,  135 => 50,  126 => 39,  109 => 56,  103 => 34,  67 => 18,  61 => 15,  47 => 30,  105 => 35,  93 => 46,  76 => 35,  72 => 16,  68 => 12,  27 => 7,  91 => 21,  84 => 26,  94 => 39,  88 => 27,  79 => 24,  59 => 12,  21 => 2,  44 => 7,  31 => 3,  28 => 2,  225 => 75,  216 => 90,  212 => 74,  205 => 66,  201 => 64,  196 => 61,  194 => 75,  191 => 60,  189 => 74,  186 => 127,  180 => 71,  172 => 66,  159 => 48,  154 => 47,  147 => 55,  132 => 40,  127 => 51,  121 => 38,  118 => 42,  114 => 33,  104 => 89,  100 => 32,  78 => 37,  75 => 17,  71 => 19,  58 => 28,  34 => 11,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 32,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 46,  145 => 55,  139 => 51,  131 => 41,  123 => 50,  120 => 37,  115 => 34,  106 => 44,  101 => 51,  96 => 32,  83 => 39,  80 => 19,  74 => 36,  66 => 31,  55 => 23,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 3,  184 => 57,  178 => 55,  171 => 53,  165 => 50,  162 => 57,  157 => 57,  153 => 46,  151 => 57,  143 => 44,  138 => 42,  136 => 42,  133 => 52,  130 => 48,  122 => 43,  119 => 35,  116 => 35,  111 => 35,  108 => 34,  102 => 43,  98 => 41,  95 => 34,  92 => 40,  89 => 29,  85 => 24,  81 => 26,  73 => 13,  64 => 31,  60 => 13,  57 => 12,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
