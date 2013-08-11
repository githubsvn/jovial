<?php

/* SMFrontBundle:Product:detail.html.twig */
class __TwigTemplate_ef72d96b503b15919066ee2e77e91709 extends Twig_Template
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
        echo "<h1 class=\"title\">Áo ngực</h1>
<div class=\"inner clearfix\">
    <div class=\"product-detail-block clearfix\">
        <div class=\"frame-4\">
            <div class=\"inner\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/product-3.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/product-3-large.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"367\" />
            </div>
            <!--<span>&nbsp;</span>-->
        </div>
        <div class=\"content\">
            <div class=\"header\">
                <h2>Jovial Sexy</h2>
                <p class=\"price\">Giá: 195,000 VND</p>
            </div>
            <ul>
                <li><em>Mã SP:</em> JV00898</li>
                <li><em>Chất liệu:</em> 75% Nylon,20% Rayon, 5% spandex</li>
                <li>
                    <em>Chi tiết sản phẩm: </em><br>
                    Quần bikini, chất liệu micro phối ren kín đáo nhưng duyên dáng, bạn có thể kết hợp với áo ngực đồng bộ. Sản phẩm mang đến nét đẹp dịu dàng của cô gái thanh xuân
                </li>
                <li><em>Kích thước:</em>  Size M; Size L; Size 2L </li>
                <li>
                    <em>Màu sắc:</em><br>
                    <div class=\"lst-color\">
                        <span class=\"color-1\">&nbsp;</span>
                        <span class=\"color-2\">&nbsp;</span>
                        <span class=\"color-3\">&nbsp;</span>
                        <span class=\"color-4\">&nbsp;</span>
                        <span class=\"color-5\">&nbsp;</span>
                        <span class=\"color-6\">&nbsp;</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"other-product\">
        <h2 class=\"title\">Sản phẩm cùng loại</h2>
        <div class=\"gallery-1\">
            <a href=\"javascript:void(0);\" title=\"Previous\" class=\"ico-pre\">Previous</a>
            <div class=\"inner\">
                <ul>
                    <li>
                        <a data-url=\"product-ajax.html\" href=\"#\" title=\"Jovial Sexy\">
                            <span class=\"frame-1\">
                                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"177\" />
                                <span>&nbsp;</span>
                            </span>
                            <span class=\"name\">Jovial Sexy</span>
                        </a>
                    </li>
                    <li>
                        <a data-url=\"product-ajax.html\" href=\"#\" title=\"Jovial Sexy\">
                            <span class=\"frame-1\">
                                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"177\" />
                                <span>&nbsp;</span>
                            </span>
                            <span class=\"name\">Jovial Sexy</span>
                        </a>
                    </li>
                    <li>
                        <a data-url=\"product-ajax.html\" href=\"#\" title=\"Jovial Sexy\">
                            <span class=\"frame-1\">
                                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"177\" />
                                <span>&nbsp;</span>
                            </span>
                            <span class=\"name\">Jovial Sexy</span>
                        </a>
                    </li>
                    <li>
                        <a data-url=\"product-ajax.html\" href=\"#\" title=\"Jovial Sexy\">
                            <span class=\"frame-1\">
                                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"177\" />
                                <span>&nbsp;</span>
                            </span>
                            <span class=\"name\">Jovial Sexy</span>
                        </a>
                    </li>
                    <li>
                        <a data-url=\"product-ajax.html\" href=\"#\" title=\"Jovial Sexy\">
                            <span class=\"frame-1\">
                                <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/upload/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"177\" />
                                <span>&nbsp;</span>
                            </span>
                            <span class=\"name\">Jovial Sexy</span>
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"javascript:void(0);\" title=\"Next\" class=\"ico-next\">Next</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Product:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 84,  119 => 75,  107 => 66,  95 => 57,  83 => 48,  38 => 8,  31 => 3,  28 => 2,);
    }
}
