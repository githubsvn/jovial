<?php

/* SMFrontBundle:News:view-cat.html.twig */
class __TwigTemplate_936f7952c670f5d7f7ab8930a1531546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMFrontBundle::layout.news.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMFrontBundle::layout.news.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1 class=\"title\">Tin tức</h1>
<div class=\"inner clearfix\">
    <ul class=\"lst-news-1\">                        
        <li>
            <div class=\"frame-5\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/news-2.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"159\" />
                <span>&nbsp;</span>
            </div>
            <div class=\"content\">
                <h2><a href=\"/news/detail/news-detail.html\" title=\"Contrary to popular Lorem Ipsum\">Contrary to popular Lorem Ipsum</a></h2>
                <p class=\"time\">08:20 | 14/05 </p>
                <div class=\"desc\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been industry's unknown printer standard dummy text ever since the 1500s when an unknown printer took a galley of type...</p>
                </div>
            </div>
        </li>
        <li>
            <div class=\"frame-5\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/news-5.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"159\" />
                <span>&nbsp;</span>
            </div>
            <div class=\"content\">
                <h2><a href=\"/news/detail/news-detail.html\" title=\"Contrary to popular Lorem Ipsum\">Contrary to popular Lorem Ipsum</a></h2>
                <p class=\"time\">08:20 | 14/05 </p>
                <div class=\"desc\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been industry's unknown printer standard dummy text ever since the 1500s when an unknown printer took a galley of type...</p>
                </div>
            </div>
        </li>
        <li>
            <div class=\"frame-5\">
                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/news-6.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"159\" />
                <span>&nbsp;</span>
            </div>
            <div class=\"content\">
                <h2><a href=\"/news/detail/news-detail.html\" title=\"Contrary to popular Lorem Ipsum\">Contrary to popular Lorem Ipsum</a></h2>
                <p class=\"time\">08:20 | 14/05 </p>
                <div class=\"desc\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been industry's unknown printer standard dummy text ever since the 1500s when an unknown printer took a galley of type...</p>
                </div>
            </div>
        </li>
        <li>
            <div class=\"frame-5\">
                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/news-7.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"159\" />
                <span>&nbsp;</span>
            </div>
            <div class=\"content\">
                <h2><a href=\"/news/detail/news-detail.html\" title=\"Contrary to popular Lorem Ipsum\">Contrary to popular Lorem Ipsum</a></h2>
                <p class=\"time\">08:20 | 14/05 </p>
                <div class=\"desc\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been industry's unknown printer standard dummy text ever since the 1500s when an unknown printer took a galley of type...</p>
                </div>
            </div>
        </li>
        <li>
            <div class=\"frame-5\">
                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/news-8.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"159\" />
                <span>&nbsp;</span>
            </div>
            <div class=\"content\">
                <h2><a href=\"/news/detail/news-detail.html\" title=\"Contrary to popular Lorem Ipsum\">Contrary to popular Lorem Ipsum</a></h2>
                <p class=\"time\">08:20 | 14/05 </p>
                <div class=\"desc\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been industry's unknown printer standard dummy text ever since the 1500s when an unknown printer took a galley of type...</p>
                </div>
            </div>
        </li>
        <li>
            <div class=\"frame-5\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/news-9.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"159\" />
                <span>&nbsp;</span>
            </div>
            <div class=\"content\">
                <h2><a href=\"/news/detail/news-detail.html\" title=\"Contrary to popular Lorem Ipsum\">Contrary to popular Lorem Ipsum</a></h2>
                <p class=\"time\">08:20 | 14/05 </p>
                <div class=\"desc\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been industry's unknown printer standard dummy text ever since the 1500s when an unknown printer took a galley of type...</p>
                </div>
            </div>
        </li>
    </ul>   
    <ul class=\"paging\">
        <li class=\"ico-pre\"><a href=\"#\" title=\"Previous\">Previous</a></li>
        <li><a href=\"#\" title=\"1\">1</a></li>
        <li><a href=\"#\" title=\"2\">2</a></li>
        <li><a href=\"#\" title=\"3\">3</a></li>
        <li><a href=\"#\" title=\"4\">4</a></li>
        <li><a href=\"#\" title=\"5\">5</a></li>
        <li class=\"ico-next\"><a href=\"#\" title=\"Next\">Next</a></li>
    </ul>                 
</div>
<span class=\"line-bottom\">&nbsp;</span>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:News:view-cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 73,  102 => 60,  86 => 47,  70 => 34,  54 => 21,  38 => 8,  31 => 3,  28 => 2,);
    }
}
