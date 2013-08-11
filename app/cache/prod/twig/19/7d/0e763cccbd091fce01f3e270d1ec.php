<?php

/* SMFrontBundle::layout.news.html.twig */
class __TwigTemplate_197d0e763cccbd091fce01f3e270d1ec extends Twig_Template
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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/css/screen.css"), "html", null, true);
        echo "\" media=\"screen\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/css/print.css"), "html", null, true);
        echo "\" media=\"print\" />
        <!--[if lt IE 9]><script type=\"text/javascript\" src=\"";
        // line 19
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
        // line 28
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:menu", array(), array());
        // line 29
        echo "                        <!-- End Menu-->
                        
                        <!-- Support -->
                        ";
        // line 32
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:support", array(), array());
        // line 33
        echo "                        <!-- End Support-->
                        
                        
                        <div class=\"block image\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/vietnam-product.png"), "html", null, true);
        echo "\" alt=\"\" width=\"133\" />
                        </div>
                        
                        <div class=\"stat\">
                            ";
        // line 41
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:counter", array(), array());
        // line 42
        echo "                        </div>
                    </div>
                </div>
                <div id=\"main-content\" class=\"news-page\">
                    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "                </div>
            </div>
            <div id=\"footer\">
                ";
        // line 50
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footer", array(), array());
        // line 51
        echo "            </div>\t\t
        </div>

        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/lib.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/l10n.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/plugin.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/start.js"), "html", null, true);
        echo "\"></script> 
    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Jovial | News";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMFrontBundle::layout.news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  129 => 8,  121 => 57,  117 => 56,  113 => 55,  109 => 54,  104 => 51,  97 => 47,  95 => 46,  89 => 42,  87 => 41,  80 => 37,  74 => 33,  72 => 32,  67 => 29,  65 => 28,  53 => 19,  49 => 18,  45 => 17,  39 => 14,  30 => 8,  21 => 1,  118 => 73,  102 => 50,  86 => 47,  70 => 34,  54 => 21,  38 => 8,  31 => 3,  28 => 2,);
    }
}
