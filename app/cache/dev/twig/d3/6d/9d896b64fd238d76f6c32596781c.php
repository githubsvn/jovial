<?php

/* SMAdminBundle:Media:index.html.twig */
class __TwigTemplate_d36d9d896b64fd238d76f6c32596781c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#sortTable').dataTable({
            \"bPaginate\": false,
            \"bLengthChange\": false,
            \"bFilter\": false,
            \"bSort\": true,
            \"bInfo\": false,
            \"bAutoWidth\": true,
            \"aaSorting\": [ [2,'asc'], [3,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 0, 1, 4, 5 ] }
            ],
        });
    } );
</script>

<h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>

    <a id=\"btn-del\" class=\"btn btn-primary\" rel=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_delete_all"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete all", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
</div>

<form method=\"post\" name=\"frmList\" id=\"frmList\" action=\"#\">
    <table class=\"table table-bordered table-striped\" id=\"sortTable\">
        <thead>
            <tr>
                <th style=\"text-align: center;\"><input type=\"checkbox\" name=\"checkAll\" id=\"checkAll\"/></th>
                <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "            <tr>
                <td style=\"text-align: center;\"><input type=\"checkbox\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\" name=\"checklist[]\" class=\"chkItem\"/> </td>
                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>
                    <image src=\"";
            // line 46
            echo twig_escape_filter($this->env, ($this->getContext($context, "imgPath") . $this->getAttribute($this->getContext($context, "entity"), "name")), "html", null, true);
            echo "\" width=\"100px\" height=\"100px\"/>
                </td>
                <td>";
            // line 48
            if ($this->getAttribute($this->getContext($context, "entity"), "createdat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 50
            if (($this->getAttribute($this->getContext($context, "entity"), "active") == 1)) {
                // line 51
                echo "                        <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            } else {
                // line 53
                echo "                        <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            }
            // line 55
            echo "                </td>
                <td>
                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                    &nbsp; | &nbsp;
                    <a class=\"delete\" rel=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>
</form>

";
        // line 68
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 69
            echo "<div class=\"pagination\" style=\"text-align: right;\">
    <ul>
        <li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => 1)), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 74
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 75
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 77
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 79
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "lastPage"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 85
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Media:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  164 => 64,  124 => 49,  97 => 33,  40 => 12,  23 => 3,  158 => 47,  283 => 104,  271 => 99,  242 => 92,  228 => 87,  206 => 76,  187 => 59,  181 => 55,  49 => 19,  134 => 49,  69 => 19,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  303 => 113,  297 => 111,  260 => 99,  257 => 96,  210 => 76,  202 => 83,  376 => 140,  364 => 135,  342 => 130,  331 => 127,  327 => 126,  323 => 124,  321 => 121,  315 => 117,  294 => 110,  267 => 100,  264 => 99,  252 => 95,  241 => 94,  234 => 90,  176 => 68,  148 => 55,  86 => 36,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 129,  330 => 124,  324 => 123,  312 => 119,  310 => 118,  306 => 114,  298 => 114,  296 => 111,  278 => 104,  269 => 101,  248 => 99,  195 => 73,  146 => 55,  113 => 57,  300 => 105,  288 => 109,  274 => 102,  266 => 104,  259 => 93,  255 => 101,  251 => 91,  247 => 89,  239 => 93,  218 => 87,  208 => 72,  167 => 50,  137 => 52,  221 => 74,  209 => 68,  174 => 71,  169 => 51,  142 => 54,  117 => 46,  62 => 16,  299 => 112,  281 => 108,  265 => 98,  262 => 93,  250 => 94,  246 => 93,  244 => 97,  238 => 91,  229 => 90,  203 => 75,  199 => 74,  197 => 77,  193 => 62,  179 => 56,  166 => 49,  129 => 50,  90 => 37,  56 => 23,  227 => 85,  223 => 85,  219 => 83,  213 => 69,  207 => 66,  190 => 78,  182 => 73,  168 => 68,  150 => 59,  110 => 44,  107 => 32,  128 => 37,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 136,  366 => 138,  363 => 140,  357 => 72,  353 => 135,  350 => 132,  347 => 133,  344 => 129,  341 => 131,  335 => 128,  325 => 61,  318 => 121,  309 => 115,  305 => 55,  302 => 54,  293 => 112,  290 => 51,  284 => 106,  280 => 105,  272 => 102,  258 => 97,  254 => 97,  240 => 13,  235 => 91,  232 => 11,  226 => 89,  217 => 80,  200 => 82,  175 => 53,  173 => 53,  170 => 69,  156 => 49,  125 => 46,  99 => 41,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 107,  282 => 99,  276 => 100,  273 => 96,  270 => 84,  268 => 32,  263 => 100,  249 => 94,  245 => 92,  230 => 88,  222 => 82,  220 => 76,  215 => 82,  211 => 80,  204 => 70,  198 => 67,  185 => 57,  183 => 70,  177 => 58,  160 => 49,  112 => 39,  82 => 27,  65 => 30,  38 => 7,  144 => 42,  141 => 53,  135 => 53,  126 => 37,  109 => 56,  103 => 42,  67 => 20,  61 => 15,  47 => 12,  105 => 35,  93 => 38,  76 => 33,  72 => 22,  68 => 20,  27 => 7,  91 => 29,  84 => 35,  94 => 27,  88 => 36,  79 => 24,  59 => 12,  21 => 2,  44 => 7,  31 => 3,  28 => 2,  225 => 75,  216 => 81,  212 => 74,  205 => 79,  201 => 74,  196 => 61,  194 => 75,  191 => 72,  189 => 75,  186 => 74,  180 => 69,  172 => 67,  159 => 59,  154 => 45,  147 => 55,  132 => 40,  127 => 51,  121 => 38,  118 => 45,  114 => 45,  104 => 30,  100 => 28,  78 => 25,  75 => 31,  71 => 19,  58 => 18,  34 => 11,  26 => 3,  24 => 1,  25 => 3,  19 => 1,  70 => 18,  63 => 25,  46 => 10,  22 => 2,  163 => 49,  155 => 46,  152 => 56,  149 => 56,  145 => 54,  139 => 55,  131 => 51,  123 => 36,  120 => 47,  115 => 34,  106 => 43,  101 => 34,  96 => 32,  83 => 24,  80 => 34,  74 => 23,  66 => 17,  55 => 22,  52 => 17,  50 => 20,  43 => 7,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 72,  171 => 63,  165 => 61,  162 => 63,  157 => 59,  153 => 45,  151 => 57,  143 => 57,  138 => 53,  136 => 42,  133 => 52,  130 => 48,  122 => 48,  119 => 43,  116 => 35,  111 => 32,  108 => 38,  102 => 33,  98 => 41,  95 => 33,  92 => 37,  89 => 28,  85 => 27,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 16,  54 => 11,  51 => 13,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
