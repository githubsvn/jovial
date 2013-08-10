<?php

/* SMAdminBundle:Twig:showimg.html.twig */
class __TwigTemplate_003b60a249a15f497ccf02d3977c0372 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "arrImgs"));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 2
            echo "    ";
            if (($this->getContext($context, "img") != "")) {
                // line 3
                echo "        <div style=\"width: 100px; height: 100px; float: bottom\">
            <img width=\"100px;\" height=\"100px;\" src=\"";
                // line 4
                echo twig_escape_filter($this->env, (($this->getContext($context, "imgPath") . "/") . $this->getContext($context, "img")), "html", null, true);
                echo "\" />
            <div style=\"width: 300px;\">
                <input type=\"checkbox\" value=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getContext($context, "img"), "html", null, true);
                echo "\" name=\"delImgs[]\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Checked if you want to delete this image", array(), "SMAdminBundle"), "html", null, true);
                echo "
            </div>
        </div>
        <div style=\"clear: both;\"></div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Twig:showimg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  310 => 114,  306 => 113,  302 => 112,  296 => 108,  290 => 107,  288 => 106,  284 => 104,  278 => 100,  272 => 98,  266 => 96,  264 => 95,  260 => 94,  255 => 92,  249 => 88,  243 => 86,  237 => 84,  235 => 83,  231 => 82,  226 => 80,  223 => 79,  221 => 78,  218 => 77,  212 => 75,  206 => 73,  203 => 72,  197 => 71,  194 => 70,  191 => 69,  188 => 68,  183 => 67,  180 => 66,  175 => 65,  173 => 64,  169 => 62,  163 => 61,  160 => 60,  152 => 58,  144 => 56,  141 => 55,  136 => 54,  134 => 53,  122 => 45,  120 => 44,  116 => 43,  112 => 42,  106 => 39,  98 => 34,  88 => 27,  84 => 26,  79 => 24,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
