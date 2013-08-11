<?php

/* WebProfilerBundle:Collector:config.html.twig */
class __TwigTemplate_20f3c5a369d9d8f52823243ce5850ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"http://symfony.com/\">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\"/>
            <span>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
        echo "</span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"http://symfony.com/doc/";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
        echo "/index.html\" rel=\"help\">Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 20
        echo "
    ";
        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_phpinfo"), "html", null, true);
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"PHP\" src=\"data:image/png;base64,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\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        ob_start();
        // line 29
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "phpversion"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 35
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasxdebug")) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 36
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasaccelerator")) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 39
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 41
        echo "
    ";
        // line 43
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute($this->getContext($context, "collector"), "debug")) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "    ";
        ob_start();
        // line 45
        echo "        <img width=\"21\" height=\"28\" alt=\"Environment\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-info-piece-additional-detail ";
        // line 46
        echo twig_escape_filter($this->env, $this->getContext($context, "debug_status_class"), "html", null, true);
        echo "\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">
            <span class=\"sf-toolbar-info-with-delimiter\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "appname"), "html", null, true);
        echo "</span><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "env"), "html", null, true);
        echo "</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "    ";
        ob_start();
        // line 53
        echo "        ";
        ob_start();
        // line 54
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Name</b>
                <span>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "appname"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Environment</b>
                <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "env"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Debug</b>
                <span class=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getContext($context, "debug_status_class"), "html", null, true);
        echo "\">";
        echo (($this->getAttribute($this->getContext($context, "collector"), "debug")) ? ("en") : ("dis"));
        echo "abled</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 69
        if ($this->getContext($context, "profiler_url")) {
            // line 70
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "profiler_url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "token"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 72
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "token"), "html", null, true);
            echo "
                    ";
        }
        // line 74
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 77
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 81
    public function block_menu($context, array $blocks = array())
    {
        // line 82
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/config.png"), "html", null, true);
        echo "\" alt=\"Configuration\" /></span>
    <strong>Config</strong>
</span>
";
    }

    // line 88
    public function block_panel($context, array $blocks = array())
    {
        // line 89
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>Symfony version</th>
            <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Application name</th>
            <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "appname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Environment</th>
            <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "env"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Debug</th>
            <td>";
        // line 109
        echo (($this->getAttribute($this->getContext($context, "collector"), "debug")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "phpversion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 125
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasxdebug")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 129
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 133
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasxcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 137
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasapc")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 141
        echo (($this->getAttribute($this->getContext($context, "collector"), "haseaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_phpinfo"), "html", null, true);
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 149
        if ($this->getAttribute($this->getContext($context, "collector"), "bundles")) {
            // line 150
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 156
            $context["bundles"] = $this->getAttribute($this->getContext($context, "collector"), "bundles");
            // line 157
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "bundles"))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 158
                echo "            <tr>
                <th>";
                // line 159
                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                echo "</th>
                <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "bundles"), $this->getContext($context, "name"), array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 163,  340 => 158,  352 => 130,  333 => 156,  322 => 123,  237 => 84,  231 => 82,  188 => 65,  20 => 1,  311 => 118,  277 => 104,  140 => 49,  243 => 86,  214 => 82,  285 => 103,  345 => 127,  256 => 95,  224 => 85,  161 => 63,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 98,  236 => 92,  361 => 128,  343 => 159,  320 => 121,  316 => 145,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 169,  337 => 166,  334 => 165,  329 => 154,  317 => 159,  314 => 121,  308 => 118,  291 => 105,  286 => 140,  192 => 72,  77 => 12,  87 => 28,  164 => 60,  124 => 51,  97 => 43,  40 => 7,  23 => 2,  158 => 56,  283 => 103,  271 => 103,  242 => 92,  228 => 89,  206 => 78,  187 => 74,  181 => 65,  49 => 19,  134 => 46,  69 => 20,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 144,  372 => 140,  360 => 174,  354 => 124,  349 => 123,  338 => 127,  332 => 164,  326 => 123,  303 => 113,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 77,  376 => 140,  364 => 135,  342 => 168,  331 => 124,  327 => 153,  323 => 149,  321 => 121,  315 => 149,  294 => 109,  267 => 96,  264 => 95,  252 => 105,  241 => 91,  234 => 80,  176 => 71,  148 => 52,  86 => 28,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 120,  306 => 118,  298 => 112,  296 => 108,  278 => 100,  269 => 97,  248 => 96,  195 => 64,  146 => 56,  113 => 40,  300 => 116,  288 => 129,  274 => 121,  266 => 96,  259 => 109,  255 => 89,  251 => 88,  247 => 93,  239 => 81,  218 => 77,  208 => 70,  167 => 94,  137 => 47,  221 => 84,  209 => 71,  174 => 61,  169 => 66,  142 => 55,  117 => 45,  62 => 27,  299 => 154,  281 => 125,  265 => 106,  262 => 93,  250 => 94,  246 => 86,  244 => 87,  238 => 97,  229 => 78,  203 => 77,  199 => 81,  197 => 67,  193 => 65,  179 => 66,  166 => 59,  129 => 46,  90 => 20,  56 => 21,  227 => 77,  223 => 79,  219 => 78,  213 => 72,  207 => 74,  190 => 105,  182 => 69,  168 => 56,  150 => 53,  110 => 39,  107 => 36,  128 => 45,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 132,  353 => 165,  350 => 128,  347 => 160,  344 => 129,  341 => 128,  335 => 157,  325 => 150,  318 => 122,  309 => 141,  305 => 111,  302 => 137,  293 => 112,  290 => 107,  284 => 104,  280 => 138,  272 => 98,  258 => 96,  254 => 88,  240 => 82,  235 => 89,  232 => 80,  226 => 77,  217 => 83,  200 => 66,  175 => 65,  173 => 63,  170 => 62,  156 => 56,  125 => 44,  99 => 52,  301 => 110,  295 => 133,  292 => 114,  289 => 104,  287 => 99,  282 => 106,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 94,  249 => 88,  245 => 101,  230 => 91,  222 => 76,  220 => 76,  215 => 115,  211 => 81,  204 => 83,  198 => 74,  185 => 64,  183 => 67,  177 => 64,  160 => 59,  112 => 38,  82 => 24,  65 => 32,  38 => 6,  144 => 52,  141 => 50,  135 => 47,  126 => 44,  109 => 36,  103 => 53,  67 => 20,  61 => 17,  47 => 18,  105 => 41,  93 => 31,  76 => 35,  72 => 22,  68 => 18,  27 => 5,  91 => 50,  84 => 46,  94 => 27,  88 => 17,  79 => 32,  59 => 15,  21 => 2,  44 => 18,  31 => 3,  28 => 2,  225 => 88,  216 => 84,  212 => 72,  205 => 68,  201 => 69,  196 => 66,  194 => 66,  191 => 76,  189 => 65,  186 => 61,  180 => 66,  172 => 64,  159 => 55,  154 => 54,  147 => 59,  132 => 46,  127 => 48,  121 => 45,  118 => 39,  114 => 38,  104 => 36,  100 => 35,  78 => 42,  75 => 23,  71 => 39,  58 => 9,  34 => 14,  26 => 2,  24 => 1,  25 => 4,  19 => 1,  70 => 18,  63 => 30,  46 => 10,  22 => 2,  163 => 61,  155 => 57,  152 => 61,  149 => 52,  145 => 51,  139 => 50,  131 => 46,  123 => 45,  120 => 44,  115 => 43,  106 => 36,  101 => 51,  96 => 31,  83 => 27,  80 => 45,  74 => 23,  66 => 19,  55 => 8,  52 => 11,  50 => 10,  43 => 17,  41 => 9,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 61,  171 => 64,  165 => 60,  162 => 54,  157 => 53,  153 => 63,  151 => 53,  143 => 52,  138 => 54,  136 => 54,  133 => 52,  130 => 45,  122 => 45,  119 => 43,  116 => 41,  111 => 42,  108 => 39,  102 => 32,  98 => 31,  95 => 51,  92 => 40,  89 => 29,  85 => 16,  81 => 14,  73 => 40,  64 => 17,  60 => 16,  57 => 16,  54 => 13,  51 => 12,  48 => 11,  45 => 8,  42 => 8,  39 => 16,  36 => 12,  33 => 4,  30 => 3,);
    }
}
