<?php

/* SMAdminBundle:Branch:show.html.twig */
class __TwigTemplate_0dd2f669eadd0c260d74f1cae5a0cc5c extends Twig_Template
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
        echo "<h1>Branch</h1>

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
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 37
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
        return "SMAdminBundle:Branch:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 74,  209 => 69,  174 => 54,  169 => 52,  142 => 44,  117 => 36,  62 => 16,  299 => 104,  281 => 98,  265 => 94,  262 => 93,  250 => 90,  246 => 88,  244 => 87,  238 => 82,  229 => 76,  203 => 66,  199 => 67,  197 => 62,  193 => 64,  179 => 56,  166 => 51,  129 => 39,  90 => 20,  56 => 11,  227 => 74,  223 => 73,  219 => 75,  213 => 68,  207 => 68,  190 => 63,  182 => 59,  168 => 53,  150 => 45,  110 => 34,  107 => 33,  128 => 40,  53 => 55,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 51,  284 => 36,  280 => 35,  272 => 33,  258 => 92,  254 => 91,  240 => 13,  235 => 12,  232 => 11,  226 => 5,  217 => 74,  200 => 136,  175 => 117,  173 => 53,  170 => 52,  156 => 97,  125 => 38,  99 => 31,  301 => 100,  295 => 96,  292 => 100,  289 => 94,  287 => 99,  282 => 90,  276 => 34,  273 => 96,  270 => 84,  268 => 32,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 76,  220 => 72,  215 => 70,  211 => 73,  204 => 137,  198 => 63,  185 => 58,  183 => 57,  177 => 58,  160 => 49,  112 => 42,  82 => 27,  65 => 14,  38 => 6,  144 => 44,  141 => 43,  135 => 41,  126 => 45,  109 => 31,  103 => 34,  67 => 18,  61 => 15,  47 => 30,  105 => 30,  93 => 85,  76 => 67,  72 => 14,  68 => 12,  27 => 7,  91 => 29,  84 => 28,  94 => 39,  88 => 28,  79 => 18,  59 => 12,  21 => 2,  44 => 7,  31 => 3,  28 => 2,  225 => 75,  216 => 90,  212 => 88,  205 => 66,  201 => 64,  196 => 61,  194 => 62,  191 => 60,  189 => 77,  186 => 127,  180 => 119,  172 => 67,  159 => 50,  154 => 47,  147 => 55,  132 => 40,  127 => 39,  121 => 38,  118 => 34,  114 => 33,  104 => 89,  100 => 32,  78 => 37,  75 => 17,  71 => 19,  58 => 26,  34 => 11,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 18,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 48,  152 => 49,  149 => 46,  145 => 45,  139 => 43,  131 => 41,  123 => 39,  120 => 37,  115 => 39,  106 => 29,  101 => 29,  96 => 24,  83 => 27,  80 => 24,  74 => 36,  66 => 31,  55 => 12,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 3,  184 => 57,  178 => 55,  171 => 53,  165 => 50,  162 => 57,  157 => 56,  153 => 46,  151 => 46,  143 => 44,  138 => 42,  136 => 42,  133 => 93,  130 => 40,  122 => 38,  119 => 32,  116 => 35,  111 => 35,  108 => 34,  102 => 30,  98 => 22,  95 => 34,  92 => 30,  89 => 29,  85 => 24,  81 => 26,  73 => 13,  64 => 17,  60 => 23,  57 => 14,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
