<?php

/* SMFrontBundle::layout.product.html.twig */
class __TwigTemplate_912468fed08dd7157d199e872247df0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        <div id=\"container\" data-role=\"main\" class=\"page-1\">\t\t
            <div id=\"main\">
                <div class=\"sidebar-l\">
                    <div class=\"inner\">
                        <!-- Menu -->
                        ";
        // line 27
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:menu", array(), array());
        // line 28
        echo "                        <!-- End Menu-->
                        
                        <!-- Support -->
                        ";
        // line 31
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:support", array(), array());
        // line 32
        echo "                        <!-- End Support-->
                        
                        <div class=\"block image\">
                            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/vietnam-product.png"), "html", null, true);
        echo "\" alt=\"\" width=\"133\" />
                        </div>
                        
                        <div class=\"stat\">
                            ";
        // line 39
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:counter", array(), array());
        // line 40
        echo "                        </div>
                    </div>
                </div>
                <div id=\"main-content\" class=\"product-page\">
                    ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "                </div>
            </div>
            <div id=\"footer\">
                ";
        // line 48
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footer", array(), array());
        // line 49
        echo "            </div>\t\t
        </div>
        
        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/lib.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/l10n.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/plugin.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/start.js"), "html", null, true);
        echo "\"></script> 
    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Jovial | Product";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMFrontBundle::layout.product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  127 => 8,  119 => 55,  115 => 54,  111 => 53,  107 => 52,  102 => 49,  100 => 48,  95 => 45,  93 => 44,  87 => 40,  85 => 39,  78 => 35,  73 => 32,  71 => 31,  66 => 28,  64 => 27,  52 => 18,  48 => 17,  44 => 16,  39 => 14,  30 => 8,  21 => 1,);
    }
}
