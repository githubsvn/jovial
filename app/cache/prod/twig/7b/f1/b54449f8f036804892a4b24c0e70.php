<?php

/* SMFrontBundle:News:detail.html.twig */
class __TwigTemplate_7bf1b54449f8f036804892a4b24c0e70 extends Twig_Template
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
        echo "<h1 class=\"title\">Tin tức</h1>
<div class=\"inner clearfix\">  
    <div class=\"news-detail-block fck\">                     
        <h2 class=\"title-1\">Contrary to popular Lorem Ipsum</h2> 
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been industry's unknown printer standard dummy text ever since the 1500s when an unknown printer took a galley of type</p>
        <p style=\"text-align:center\"><img src=\"/web/images/upload/product-3.jpg\" alt=\"\" width=\"367\"></p>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        <ul>
            <li>It is a long established fact that a reader</li>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
        </ul>
    </div>            
</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:News:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
