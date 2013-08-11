<?php

/* SMFrontBundle::layout.home.html.twig */
class __TwigTemplate_4d875433d889881b5df0b3349e389bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if IE 7]><html class=\"ie7\" lang=\"en\"><![endif]-->
<!--[if IE 8]><html class=\"ie8\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9\" lang=\"en\"><![endif]-->
<!--[if gt IE 9]><!--><html lang=\"en\"><!--<![endif]-->
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"robots\" content=\"index, follow\" />
        <meta name=\"author\" content=\"\" />\t
        <meta name=\"viewport\" content=\"width=1020\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/css/screen.css"), "html", null, true);
        echo "\" media=\"screen\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/css/print.css"), "html", null, true);
        echo "\" media=\"print\" />
        <!--[if lt IE 9]><script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/html5.js"), "html", null, true);
        echo "\"></script><![endif]-->
    </head>
    <body>
        <div id=\"container\" data-role=\"main\">\t\t
            <div id=\"main\">
                <div class=\"sidebar-l\">
                    <div class=\"inner\">
                        <!-- Menu -->
                        ";
        // line 26
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:menu", array(), array());
        // line 27
        echo "                        <!-- end menu -->
                        <div class=\"stat\">
                            ";
        // line 29
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:counter", array(), array());
        // line 30
        echo "                        </div>
                    </div>
                </div>
            </div>
            <ul class=\"supersized home-page\">
                ";
        // line 35
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:slideImage", array(), array());
        // line 36
        echo "            </ul>\t\t
        </div>
        
        <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/lib.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/l10n.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/plugin.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/start.js"), "html", null, true);
        echo "\"></script> 
    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Jovial | Intro";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle::layout.home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 8,  96 => 42,  92 => 41,  88 => 40,  84 => 39,  79 => 36,  77 => 35,  70 => 30,  68 => 29,  64 => 27,  62 => 26,  51 => 18,  47 => 17,  43 => 16,  38 => 14,  29 => 8,  20 => 1,  28 => 2,);
    }
}
