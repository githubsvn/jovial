<?php

/* SMAdminBundle:Category:new.html.twig */
class __TwigTemplate_ff33e845091ad6174fad7d756ccdf3f1 extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Category Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 27
        $context["isActive"] = 1;
        // line 28
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 29
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 30
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 32
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 34
            echo "                      ";
            $context["isActive"] = 2;
            // line 35
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 38
        $context["isActive"] = 1;
        // line 39
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 40
            echo "                    ";
            $context["currentAL"] = null;
            // line 41
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "category_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["categoryLanguage"]) {
                // line 42
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "categoryLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 43
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "categoryLanguage");
                    // line 44
                    echo "                        ";
                }
                // line 45
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 47
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 49
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 51
            echo "                            <fieldset>
                                ";
            // line 52
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 53
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 56
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 57
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 58
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 60
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 62
                echo "                                    </div>
                                </div>

                                ";
            }
            // line 66
            echo "                            </fieldset>
                        </div>
                    ";
            // line 68
            $context["isActive"] = 2;
            // line 69
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 105,  288 => 100,  274 => 97,  266 => 95,  259 => 93,  255 => 92,  251 => 91,  247 => 89,  239 => 83,  218 => 75,  208 => 72,  167 => 53,  137 => 42,  221 => 74,  209 => 69,  174 => 54,  169 => 52,  142 => 44,  117 => 36,  62 => 16,  299 => 104,  281 => 98,  265 => 94,  262 => 93,  250 => 90,  246 => 88,  244 => 87,  238 => 82,  229 => 76,  203 => 66,  199 => 67,  197 => 62,  193 => 64,  179 => 56,  166 => 51,  129 => 39,  90 => 20,  56 => 11,  227 => 74,  223 => 77,  219 => 72,  213 => 68,  207 => 68,  190 => 59,  182 => 56,  168 => 51,  150 => 47,  110 => 32,  107 => 33,  128 => 40,  53 => 11,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 101,  290 => 51,  284 => 36,  280 => 35,  272 => 33,  258 => 92,  254 => 91,  240 => 13,  235 => 12,  232 => 11,  226 => 5,  217 => 74,  200 => 68,  175 => 117,  173 => 53,  170 => 52,  156 => 49,  125 => 38,  99 => 31,  301 => 100,  295 => 96,  292 => 100,  289 => 94,  287 => 99,  282 => 99,  276 => 34,  273 => 96,  270 => 84,  268 => 32,  263 => 94,  249 => 79,  245 => 88,  230 => 79,  222 => 76,  220 => 76,  215 => 70,  211 => 73,  204 => 70,  198 => 67,  185 => 58,  183 => 57,  177 => 58,  160 => 49,  112 => 42,  82 => 27,  65 => 14,  38 => 6,  144 => 45,  141 => 43,  135 => 41,  126 => 39,  109 => 31,  103 => 34,  67 => 18,  61 => 15,  47 => 30,  105 => 30,  93 => 85,  76 => 18,  72 => 16,  68 => 12,  27 => 7,  91 => 21,  84 => 28,  94 => 39,  88 => 28,  79 => 18,  59 => 12,  21 => 2,  44 => 7,  31 => 3,  28 => 2,  225 => 75,  216 => 90,  212 => 74,  205 => 66,  201 => 64,  196 => 61,  194 => 65,  191 => 60,  189 => 77,  186 => 127,  180 => 59,  172 => 55,  159 => 48,  154 => 47,  147 => 55,  132 => 40,  127 => 39,  121 => 38,  118 => 34,  114 => 33,  104 => 89,  100 => 32,  78 => 37,  75 => 17,  71 => 19,  58 => 26,  34 => 11,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 18,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 48,  152 => 49,  149 => 46,  145 => 45,  139 => 43,  131 => 41,  123 => 39,  120 => 37,  115 => 34,  106 => 31,  101 => 29,  96 => 24,  83 => 27,  80 => 19,  74 => 36,  66 => 15,  55 => 12,  52 => 10,  50 => 10,  43 => 7,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 3,  184 => 57,  178 => 55,  171 => 53,  165 => 50,  162 => 57,  157 => 56,  153 => 46,  151 => 46,  143 => 44,  138 => 42,  136 => 42,  133 => 41,  130 => 40,  122 => 38,  119 => 35,  116 => 35,  111 => 35,  108 => 34,  102 => 30,  98 => 22,  95 => 34,  92 => 30,  89 => 29,  85 => 24,  81 => 26,  73 => 13,  64 => 17,  60 => 13,  57 => 12,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
