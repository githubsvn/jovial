<?php

/* SMAdminBundle:Twig:media.html.twig */
class __TwigTemplate_643f6fb6088486142d3e1b92a7b45558 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
            \$(\"#typeImg\").bind(\"change\", function(){
            var type = \$(this).attr('value');
            var url = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_get_media"), "html", null, true);
        echo "\" + '/' + type;
            \$.ajax({url:url, success:function(data){
                \$('.thumbnail, .popup').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    var str = '<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaPath"), "html", null, true);
        echo "' + item.name +'\" width=\"100px\" height=\"100px;\"/>';
                    var id = '#label_' + item.id;
                    \$(id).append(str);
                });
            }});

            //Call ajax
            \$('#ajaxModal').modal();
            \$('#ajaxModal').ajaxStart(function() {
                \$(this).show();
            })
            .ajaxStop(function() {
                \$('#ajaxModal').modal('hide')
            });
        });

    });
</script>

<a href=\"#backgroundModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
<!-- Modal -->
<div id=\"backgroundModal\" class=\"modal hide fade\" style=\"width: 580px;\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h3 id=\"backgroundModalLabel\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image", array(), "SMAdminBundle"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"modal-body\">
        <div style=\"text-align: center;\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type of media", array(), "SMAdminBundle"), "html", null, true);
        echo " :
            <select name=\"typeImg\" id=\"typeImg\">
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optMediaTypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 43
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "opt"), "getCurrentLanguage"), "getTreeName"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>
        </div>
        <ul class=\"thumbnails\">
            ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optMedias"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 49
            echo "                <li class=\"thumbImg\" style=\"text-align: center;\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "opt"), "category"), "id"), "html", null, true);
            echo "\">
                    <label id=\"label_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" class=\"thumbnail popup\" for=\"bg_";
            echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" style=\"border: 0px;\">
                    </label>
                    <input id=\"bg_";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" name=\"bg_";
            echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
            echo "\" imagepath=\"";
            echo twig_escape_filter($this->env, ($this->getContext($context, "mediaPath") . $this->getAttribute($this->getContext($context, "opt"), "name")), "html", null, true);
            echo "\" type=\"";
            if ($this->getAttribute($this->getContext($context, "options", true), "multiple", array(), "any", true, true)) {
                if ($this->getAttribute($this->getContext($context, "options"), "multiple")) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
            } else {
                echo "radio";
            }
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" style=\"margin-left: 40px;\"/>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </ul>
    </div>
    <div class=\"modal-footer\">
        <div class=\"row\">
            ";
        // line 59
        if ($this->getAttribute($this->getContext($context, "options", true), "multiple", array(), "any", true, true)) {
            // line 60
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "options"), "multiple")) {
                // line 61
                echo "                <div class=\"span2\" style=\"width: 200px;\">
                        <a class=\"btn\" onclick=\"checkAll('";
                // line 62
                echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
                echo "');\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select All", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                        <a class=\"btn\" onclick=\"clearAll('";
                // line 63
                echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
                echo "');\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Clear All", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 66
            echo "            ";
        }
        // line 67
        echo "            <div class=\"pull-right\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"applySelect('";
        // line 69
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
        echo "')\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>

<div>
    <ul class=\"thumbnails\" id=\"preview_";
        // line 76
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
        echo "\">
    </ul>
</div>

<script type=\"text/javascript\" >
    var mediaPath = \"";
        // line 81
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaPath"), "html", null, true);
        echo "\";
    \$(function() {
        initSelect('";
        // line 83
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
        echo "');
        \$('#backgroundModal').on('hidden', function () {
        });
    });
</script>


<script type=\"text/javascript\">
    \$(document).ready(function() {
        var imgType = 0;

        //get imgType
        \$(\"li.thumbImg\").each(function(){
            var currentLi = \$(this);
            var input = \$(this).find(\"input\");
            if (\$(\"#\"+input.attr('id')).is(':checked')) {
                imgType = currentLi.attr(\"data-type\");
            }
        });

        if (!imgType) {
            imgType = \$(\"#typeImg\").val();
        } else {
            \$(\"#typeImg\").val(imgType);
        }

        \$(\"li.thumbImg\").each(function(){
            var currentLi = \$(this);
            var liType;
            liType = currentLi.attr(\"data-type\");

            if (liType == imgType) {
                currentLi.css('display', 'inline');
            } else {
                currentLi.css('display', 'none');
            }
        });

        \$(\"#typeImg\").bind(\"change\", function(e) {
            var imgType = \$(this).val();
            \$(\"li.thumbImg\").each(function(){
                var currentLi = \$(this);
                var liType = currentLi.attr(\"data-type\");
                if (liType == imgType) {
                    currentLi.css('display', 'inline');
                } else {
                    currentLi.css('display', 'none');
                }
            });
        });
    } );
</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Twig:media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 130,  333 => 126,  322 => 123,  237 => 84,  231 => 82,  188 => 65,  20 => 1,  311 => 118,  277 => 104,  140 => 53,  243 => 86,  214 => 73,  285 => 103,  345 => 127,  256 => 95,  224 => 85,  161 => 63,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 98,  236 => 92,  361 => 128,  343 => 122,  320 => 121,  316 => 120,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 121,  308 => 118,  291 => 105,  286 => 140,  192 => 63,  77 => 33,  87 => 39,  164 => 58,  124 => 51,  97 => 43,  40 => 7,  23 => 3,  158 => 58,  283 => 103,  271 => 103,  242 => 92,  228 => 78,  206 => 78,  187 => 74,  181 => 65,  49 => 11,  134 => 53,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 77,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 122,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 130,  241 => 91,  234 => 80,  176 => 71,  148 => 56,  86 => 38,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 120,  306 => 118,  298 => 112,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 56,  113 => 57,  300 => 116,  288 => 106,  274 => 147,  266 => 96,  259 => 97,  255 => 89,  251 => 88,  247 => 93,  239 => 81,  218 => 77,  208 => 70,  167 => 94,  137 => 47,  221 => 84,  209 => 71,  174 => 61,  169 => 66,  142 => 55,  117 => 45,  62 => 27,  299 => 154,  281 => 102,  265 => 106,  262 => 93,  250 => 94,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 69,  199 => 81,  197 => 67,  193 => 65,  179 => 69,  166 => 59,  129 => 39,  90 => 20,  56 => 21,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 63,  168 => 56,  150 => 53,  110 => 37,  107 => 50,  128 => 52,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 129,  344 => 129,  341 => 128,  335 => 156,  325 => 124,  318 => 122,  309 => 115,  305 => 111,  302 => 112,  293 => 112,  290 => 107,  284 => 104,  280 => 138,  272 => 98,  258 => 96,  254 => 88,  240 => 82,  235 => 89,  232 => 80,  226 => 77,  217 => 74,  200 => 66,  175 => 68,  173 => 63,  170 => 62,  156 => 56,  125 => 47,  99 => 42,  301 => 110,  295 => 142,  292 => 114,  289 => 104,  287 => 99,  282 => 106,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 88,  245 => 85,  230 => 91,  222 => 76,  220 => 76,  215 => 115,  211 => 70,  204 => 83,  198 => 76,  185 => 64,  183 => 67,  177 => 64,  160 => 56,  112 => 38,  82 => 43,  65 => 32,  38 => 6,  144 => 56,  141 => 55,  135 => 50,  126 => 44,  109 => 56,  103 => 44,  67 => 18,  61 => 17,  47 => 12,  105 => 45,  93 => 45,  76 => 35,  72 => 20,  68 => 19,  27 => 6,  91 => 39,  84 => 26,  94 => 27,  88 => 27,  79 => 24,  59 => 29,  21 => 2,  44 => 18,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 72,  205 => 68,  201 => 69,  196 => 66,  194 => 66,  191 => 76,  189 => 65,  186 => 61,  180 => 66,  172 => 67,  159 => 55,  154 => 55,  147 => 59,  132 => 49,  127 => 48,  121 => 45,  118 => 47,  114 => 37,  104 => 30,  100 => 29,  78 => 42,  75 => 30,  71 => 19,  58 => 31,  34 => 11,  26 => 5,  24 => 1,  25 => 3,  19 => 1,  70 => 28,  63 => 30,  46 => 9,  22 => 2,  163 => 61,  155 => 62,  152 => 61,  149 => 60,  145 => 55,  139 => 41,  131 => 48,  123 => 50,  120 => 44,  115 => 41,  106 => 36,  101 => 51,  96 => 32,  83 => 39,  80 => 37,  74 => 23,  66 => 36,  55 => 23,  52 => 23,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 12,  29 => 4,  184 => 63,  178 => 61,  171 => 60,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 54,  143 => 52,  138 => 54,  136 => 54,  133 => 52,  130 => 40,  122 => 45,  119 => 46,  116 => 52,  111 => 37,  108 => 39,  102 => 49,  98 => 48,  95 => 30,  92 => 40,  89 => 28,  85 => 37,  81 => 40,  73 => 40,  64 => 29,  60 => 28,  57 => 17,  54 => 11,  51 => 11,  48 => 17,  45 => 15,  42 => 12,  39 => 14,  36 => 12,  33 => 4,  30 => 5,);
    }
}
