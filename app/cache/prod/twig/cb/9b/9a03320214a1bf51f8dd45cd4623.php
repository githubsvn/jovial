<?php

/* SMFrontBundle:Page:detail.html.twig */
class __TwigTemplate_cb9b9a03320214a1bf51f8dd45cd4623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMFrontBundle::layout.news.detail.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMFrontBundle::layout.news.detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1 class=\"title\">Chi Tiết Tin tức</h1>
<div class=\"inner clearfix\">  
    <div class=\"news-detail-block fck\">                     
        <h2 class=\"title-1\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "slug"), "html", null, true);
        echo "</h2> 
    </div>            
</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Page:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,);
    }
}
