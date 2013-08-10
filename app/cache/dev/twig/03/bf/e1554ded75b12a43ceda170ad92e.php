<?php

/* SMAdminBundle:User:show.html.twig */
class __TwigTemplate_03bfe1554ded75b12a43ceda170ad92e extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User detail", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<table class=\"table table-bordered table-striped\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fullname", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fullname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created_at", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "active"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"well form-inline\">
    <a class=\"btn\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user"), "html", null, true);
        echo "\">
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "
    </a>
    <a class=\"btn\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "
    </a>
</form>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 120,  253 => 96,  333 => 126,  322 => 123,  374 => 145,  370 => 144,  356 => 138,  352 => 130,  340 => 130,  328 => 126,  237 => 94,  231 => 93,  188 => 76,  20 => 1,  311 => 118,  277 => 103,  140 => 53,  243 => 97,  214 => 74,  285 => 106,  345 => 127,  256 => 97,  224 => 85,  161 => 63,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 98,  236 => 92,  361 => 128,  343 => 130,  320 => 121,  316 => 120,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 132,  337 => 129,  334 => 128,  329 => 154,  317 => 120,  314 => 118,  308 => 114,  291 => 111,  286 => 109,  192 => 63,  77 => 24,  87 => 28,  164 => 60,  124 => 51,  97 => 43,  40 => 7,  23 => 2,  158 => 58,  283 => 103,  271 => 101,  242 => 93,  228 => 88,  206 => 78,  187 => 74,  181 => 65,  49 => 19,  134 => 46,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 146,  372 => 140,  360 => 174,  354 => 124,  349 => 134,  338 => 127,  332 => 127,  326 => 123,  303 => 115,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 77,  376 => 140,  364 => 140,  342 => 168,  331 => 126,  327 => 153,  323 => 121,  321 => 121,  315 => 149,  294 => 109,  267 => 101,  264 => 95,  252 => 130,  241 => 91,  234 => 91,  176 => 71,  148 => 53,  86 => 25,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 139,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 120,  306 => 118,  298 => 112,  296 => 110,  278 => 103,  269 => 97,  248 => 98,  195 => 80,  146 => 56,  113 => 57,  300 => 116,  288 => 107,  274 => 105,  266 => 100,  259 => 97,  255 => 89,  251 => 99,  247 => 94,  239 => 92,  218 => 85,  208 => 70,  167 => 94,  137 => 47,  221 => 84,  209 => 87,  174 => 68,  169 => 66,  142 => 55,  117 => 45,  62 => 27,  299 => 114,  281 => 102,  265 => 99,  262 => 98,  250 => 95,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 82,  199 => 81,  197 => 65,  193 => 79,  179 => 66,  166 => 66,  129 => 46,  90 => 20,  56 => 21,  227 => 77,  223 => 74,  219 => 86,  213 => 72,  207 => 74,  190 => 77,  182 => 59,  168 => 56,  150 => 53,  110 => 40,  107 => 36,  128 => 45,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 136,  353 => 135,  350 => 128,  347 => 129,  344 => 129,  341 => 128,  335 => 128,  325 => 124,  318 => 122,  309 => 115,  305 => 116,  302 => 112,  293 => 112,  290 => 108,  284 => 112,  280 => 104,  272 => 100,  258 => 96,  254 => 88,  240 => 90,  235 => 89,  232 => 90,  226 => 89,  217 => 83,  200 => 81,  175 => 65,  173 => 63,  170 => 67,  156 => 56,  125 => 43,  99 => 34,  301 => 110,  295 => 142,  292 => 114,  289 => 108,  287 => 99,  282 => 105,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 99,  249 => 93,  245 => 85,  230 => 91,  222 => 87,  220 => 90,  215 => 115,  211 => 84,  204 => 83,  198 => 76,  185 => 109,  183 => 73,  177 => 64,  160 => 59,  112 => 38,  82 => 24,  65 => 32,  38 => 6,  144 => 52,  141 => 50,  135 => 47,  126 => 44,  109 => 36,  103 => 35,  67 => 20,  61 => 17,  47 => 12,  105 => 41,  93 => 29,  76 => 35,  72 => 20,  68 => 18,  27 => 6,  91 => 29,  84 => 25,  94 => 27,  88 => 27,  79 => 32,  59 => 15,  21 => 2,  44 => 18,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 88,  205 => 68,  201 => 69,  196 => 66,  194 => 75,  191 => 76,  189 => 65,  186 => 61,  180 => 70,  172 => 67,  159 => 55,  154 => 52,  147 => 59,  132 => 46,  127 => 48,  121 => 45,  118 => 39,  114 => 38,  104 => 30,  100 => 32,  78 => 42,  75 => 31,  71 => 21,  58 => 31,  34 => 6,  26 => 3,  24 => 1,  25 => 3,  19 => 1,  70 => 18,  63 => 30,  46 => 9,  22 => 2,  163 => 58,  155 => 57,  152 => 61,  149 => 52,  145 => 51,  139 => 50,  131 => 48,  123 => 45,  120 => 37,  115 => 43,  106 => 44,  101 => 51,  96 => 31,  83 => 33,  80 => 24,  74 => 23,  66 => 17,  55 => 22,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 12,  29 => 4,  184 => 75,  178 => 69,  171 => 64,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 87,  143 => 48,  138 => 54,  136 => 52,  133 => 52,  130 => 45,  122 => 43,  119 => 44,  116 => 39,  111 => 42,  108 => 39,  102 => 32,  98 => 31,  95 => 30,  92 => 40,  89 => 28,  85 => 37,  81 => 25,  73 => 40,  64 => 17,  60 => 28,  57 => 16,  54 => 11,  51 => 13,  48 => 10,  45 => 8,  42 => 12,  39 => 14,  36 => 12,  33 => 4,  30 => 5,);
    }
}