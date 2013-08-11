<?php

/* SMAdminBundle:User:edit.html.twig */
class __TwigTemplate_a61ebf4be3e0f72d6de2fd40871601bf extends Twig_Template
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
        echo "<h2>User edit</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "username"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "username"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fullname", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "fullname"), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "fullname"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Current Password", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "currentPassword"), 'errors');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "currentPassword"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "edit_form"), "password"), "password"), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "edit_form"), "password"), "password"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Repeat Password", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "edit_form"), "password"), "confirm"), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "edit_form"), "password"), "confirm"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Roles", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "role_collection"), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "role_collection"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Group", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "group"), 'errors');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "group"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-actions\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a class=\"btn\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
        </div>

    </fieldset>

</form>


";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 130,  333 => 126,  322 => 123,  237 => 84,  231 => 82,  188 => 65,  20 => 1,  311 => 118,  277 => 104,  140 => 53,  243 => 86,  214 => 73,  285 => 103,  345 => 127,  256 => 95,  224 => 85,  161 => 63,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 98,  236 => 92,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 121,  308 => 118,  291 => 105,  286 => 140,  192 => 63,  77 => 33,  87 => 39,  164 => 60,  124 => 51,  97 => 43,  40 => 7,  23 => 2,  158 => 58,  283 => 103,  271 => 103,  242 => 92,  228 => 78,  206 => 78,  187 => 74,  181 => 65,  49 => 11,  134 => 53,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 77,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 130,  241 => 91,  234 => 80,  176 => 71,  148 => 53,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 120,  306 => 118,  298 => 112,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 56,  113 => 57,  300 => 116,  288 => 106,  274 => 147,  266 => 96,  259 => 97,  255 => 89,  251 => 88,  247 => 93,  239 => 81,  218 => 77,  208 => 70,  167 => 94,  137 => 47,  221 => 84,  209 => 71,  174 => 61,  169 => 66,  142 => 55,  117 => 45,  62 => 27,  299 => 154,  281 => 102,  265 => 106,  262 => 93,  250 => 94,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 69,  199 => 81,  197 => 67,  193 => 65,  179 => 66,  166 => 59,  129 => 39,  90 => 20,  56 => 21,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 63,  168 => 56,  150 => 53,  110 => 37,  107 => 36,  128 => 45,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 129,  344 => 129,  341 => 128,  335 => 156,  325 => 124,  318 => 122,  309 => 115,  305 => 111,  302 => 112,  293 => 112,  290 => 107,  284 => 104,  280 => 138,  272 => 98,  258 => 96,  254 => 88,  240 => 82,  235 => 89,  232 => 80,  226 => 77,  217 => 74,  200 => 66,  175 => 65,  173 => 63,  170 => 62,  156 => 56,  125 => 47,  99 => 42,  301 => 110,  295 => 142,  292 => 114,  289 => 104,  287 => 99,  282 => 106,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 88,  245 => 85,  230 => 91,  222 => 76,  220 => 76,  215 => 115,  211 => 70,  204 => 83,  198 => 76,  185 => 64,  183 => 67,  177 => 64,  160 => 59,  112 => 38,  82 => 43,  65 => 32,  38 => 6,  144 => 52,  141 => 55,  135 => 50,  126 => 44,  109 => 56,  103 => 44,  67 => 18,  61 => 17,  47 => 12,  105 => 45,  93 => 45,  76 => 35,  72 => 20,  68 => 18,  27 => 6,  91 => 29,  84 => 25,  94 => 27,  88 => 27,  79 => 24,  59 => 15,  21 => 2,  44 => 18,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 72,  205 => 68,  201 => 69,  196 => 66,  194 => 66,  191 => 76,  189 => 65,  186 => 61,  180 => 66,  172 => 67,  159 => 55,  154 => 55,  147 => 59,  132 => 46,  127 => 48,  121 => 45,  118 => 47,  114 => 37,  104 => 30,  100 => 32,  78 => 42,  75 => 22,  71 => 19,  58 => 31,  34 => 6,  26 => 3,  24 => 1,  25 => 3,  19 => 1,  70 => 28,  63 => 30,  46 => 9,  22 => 2,  163 => 61,  155 => 57,  152 => 61,  149 => 60,  145 => 55,  139 => 50,  131 => 48,  123 => 43,  120 => 44,  115 => 41,  106 => 36,  101 => 51,  96 => 31,  83 => 39,  80 => 24,  74 => 23,  66 => 36,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 12,  29 => 4,  184 => 63,  178 => 61,  171 => 64,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 54,  143 => 52,  138 => 54,  136 => 54,  133 => 52,  130 => 40,  122 => 45,  119 => 46,  116 => 39,  111 => 37,  108 => 39,  102 => 49,  98 => 48,  95 => 30,  92 => 40,  89 => 28,  85 => 37,  81 => 40,  73 => 40,  64 => 17,  60 => 28,  57 => 17,  54 => 11,  51 => 11,  48 => 10,  45 => 15,  42 => 12,  39 => 14,  36 => 12,  33 => 4,  30 => 5,);
    }
}
