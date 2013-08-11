<?php

/* SMFrontBundle:Default:support.html.twig */
class __TwigTemplate_69151099df21fad4b8c1055f24d2a486 extends Twig_Template
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
        echo "<div class=\"block support\">
    <h2>Hỗ trợ trực tuyến</h2>
    <ul>
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "skypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["nick"]) {
            // line 5
            echo "            <li><a href=\"#\" title=\"Skype\" class=\"skype\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "nick"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "yahoos"));
        foreach ($context['_seq'] as $context["_key"] => $context["nick"]) {
            // line 9
            echo "            <li><a href=\"#\" title=\"Yahoo\" class=\"yahoo\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "nick"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  44 => 9,  40 => 8,  37 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
