<?php

/* SMAdminBundle::admin.html.twig */
class __TwigTemplate_01098688d2000a4c6f7bcbfbac2be513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'logo' => array($this, 'block_logo'),
            'profile' => array($this, 'block_profile'),
            'topbar_before_nav' => array($this, 'block_topbar_before_nav'),
            'topbar_nav' => array($this, 'block_topbar_nav'),
            'topbar_after_nav' => array($this, 'block_topbar_after_nav'),
            'grouplabel' => array($this, 'block_grouplabel'),
            'notice' => array($this, 'block_notice'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Le styles -->
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>

        </head>
    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    ";
        // line 51
        $this->displayBlock('logo', $context, $blocks);
        // line 54
        echo "                    ";
        $this->displayBlock('profile', $context, $blocks);
        // line 65
        echo "                    <ul class=\"nav\">
                        ";
        // line 66
        $this->displayBlock('topbar_before_nav', $context, $blocks);
        // line 67
        echo "                        ";
        $this->displayBlock('topbar_nav', $context, $blocks);
        // line 72
        echo "                        ";
        $this->displayBlock('topbar_after_nav', $context, $blocks);
        // line 73
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
        // line 80
        $this->displayBlock('grouplabel', $context, $blocks);
        // line 85
        echo "                    ";
        if (((array_key_exists("_breadcrumb", $context) && (!twig_test_empty($this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 86
            echo "                        <ul class=\"breadcrumb\">
                            ";
            // line 87
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 88
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 89
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                        // line 90
                        echo "                                        ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 91
                            echo "                                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "uri"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</a><span class=\"divider\">/</span></li>
                                        ";
                        } else {
                            // line 93
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 95
                        echo "                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                                ";
                }
                // line 97
                echo "                            ";
            } else {
                // line 98
                echo "                                ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                            ";
            }
            // line 100
            echo "                        </ul>
                        <hr/>
                    ";
        }
        // line 103
        echo "
                    ";
        // line 104
        $this->displayBlock('notice', $context, $blocks);
        // line 117
        echo "
                    ";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "                </div>
            </div>
            ";
        // line 121
        $this->displayBlock('footer', $context, $blocks);
        // line 127
        echo "        </div>
        <!-- Loading image will be show when ajax called. -->
        <div class=\"modal hide\" id=\"ajaxModal\" style=\"text-align: center;\">
            <img alt=\"Loading, please wait..\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/img/loading.gif"), "html", null, true);
        echo "\" />
        </div>


        <!-- This block is contain language for JS-->
        <script type=\"text/javascript\">
            var js_lang_do_you_want_to_delete = '";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Do you want to delete", array(), "SMAdminBundle"), "html", null, true);
        echo "';
            var js_lang_please_choose_at_least_one_item = '";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Please choose at least one item", array(), "SMAdminBundle"), "html", null, true);
        echo "';
        </script>

        <!-- -->

        <!-- Le javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        ";
        // line 145
        $this->displayBlock('javascripts', $context, $blocks);
        // line 152
        echo "        ";
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administrator";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/DataTables/media/css/demo_table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <style type=\"text/css\">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <!--<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js') }}\"></script>-->
            <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        ";
    }

    // line 51
    public function block_logo($context, array $blocks = array())
    {
        // line 52
        echo "                    <a style=\"padding-top: 12px;\" class=\"brand\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_admin_home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Welcome", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
                    ";
    }

    // line 54
    public function block_profile($context, array $blocks = array())
    {
        // line 55
        echo "                    <div class=\"btn-group pull-right\">
                        <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:void(0)\">
                            <i class=\"icon-user icon-white\"></i>";
        // line 57
        if ($this->getAttribute($this->getContext($context, "app", true), "user", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "fullname"), "html", null, true);
            echo " ";
        }
        echo "<span class=\"caret\"></span> </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile", array(), "SMAdminBundle"), "html", null, true);
        echo "</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_admin_logout"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sign Out", array(), "SMAdminBundle"), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div>
                    ";
    }

    // line 66
    public function block_topbar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 67
    public function block_topbar_nav($context, array $blocks = array())
    {
        // line 68
        echo "                            ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 69
            echo "                                ";
            echo $this->env->getExtension('actions')->renderAction("SMAdminBundle:Default:menu", array(), array());
            // line 70
            echo "                            ";
        }
        // line 71
        echo "                        ";
    }

    // line 72
    public function block_topbar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 80
    public function block_grouplabel($context, array $blocks = array())
    {
        // line 81
        echo "                        ";
        if (array_key_exists("_grouplabel", $context)) {
            // line 82
            echo "                        <h1>";
            echo twig_escape_filter($this->env, $this->getContext($context, "_grouplabel"), "html", null, true);
            echo "</h1>
                        ";
        }
        // line 84
        echo "                    ";
    }

    // line 104
    public function block_notice($context, array $blocks = array())
    {
        // line 105
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 106
            echo "                            ";
            $context["session_var"] = ("sm_flash_" . $this->getContext($context, "notice_level"));
            // line 107
            echo "                            ";
            $context["session_flashbag"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => $this->getContext($context, "session_var")), "method");
            // line 108
            echo "                            ";
            if ($this->getContext($context, "session_flashbag")) {
                // line 109
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "session_flashbag"));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 110
                    echo "                                <div class=\"alert ";
                    echo twig_escape_filter($this->env, ("alert-" . $this->getContext($context, "notice_level")), "html", null, true);
                    echo "\">
                                    ";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "flash"), array(), "SMAdminBundle"), "html", null, true);
                    echo "
                                </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                            ";
            }
            // line 115
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                    ";
    }

    // line 118
    public function block_body($context, array $blocks = array())
    {
    }

    // line 121
    public function block_footer($context, array $blocks = array())
    {
        // line 122
        echo "            <hr/>
            <footer>
                <p>&copy; Admin Panel 2013</p>
            </footer>
            ";
    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        // line 146
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/prettify.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/static/admin/js/twig.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/DataTables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 51,  284 => 36,  280 => 35,  272 => 33,  258 => 25,  254 => 24,  240 => 13,  235 => 12,  232 => 11,  226 => 5,  217 => 152,  200 => 136,  175 => 117,  173 => 104,  170 => 103,  156 => 97,  125 => 91,  99 => 87,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 34,  273 => 85,  270 => 84,  268 => 32,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 145,  211 => 69,  204 => 137,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 73,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 85,  76 => 67,  72 => 14,  68 => 54,  27 => 4,  91 => 80,  84 => 28,  94 => 39,  88 => 27,  79 => 72,  59 => 22,  21 => 2,  44 => 12,  31 => 1,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 130,  189 => 77,  186 => 127,  180 => 119,  172 => 67,  159 => 98,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 89,  100 => 33,  78 => 24,  75 => 23,  71 => 65,  58 => 12,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 95,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 88,  96 => 86,  83 => 18,  80 => 24,  74 => 66,  66 => 51,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 3,  184 => 121,  178 => 118,  171 => 62,  165 => 100,  162 => 57,  157 => 56,  153 => 96,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 93,  130 => 47,  122 => 90,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 39,  48 => 38,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
