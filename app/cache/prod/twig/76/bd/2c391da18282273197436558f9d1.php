<?php

/* SMFrontBundle:Default:menu.html.twig */
class __TwigTemplate_76bd2c391da18282273197436558f9d1 extends Twig_Template
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
        echo "<div class=\"logo-block\"><a href=\"index.html\" title=\"Jovial\" class=\"logo\">Jovial</a></div>
<ul class=\"block nav\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menuLeftTop"));
        foreach ($context['_seq'] as $context["_key"] => $context["mnu"]) {
            // line 4
            echo "        ";
            $context["active"] = "";
            // line 5
            echo "        ";
            if ((trim($this->getAttribute($this->getContext($context, "mnu"), "url")) == trim($this->getContext($context, "currentUrl")))) {
                // line 6
                echo "            ";
                $context["active"] = "active";
                // line 7
                echo "        ";
            }
            // line 8
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "active"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "name"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mnu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>

<ul class=\"block nav padd-1\">
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menuLeftBottom"));
        foreach ($context['_seq'] as $context["_key"] => $context["mnu"]) {
            // line 14
            echo "        ";
            $context["active"] = "";
            // line 15
            echo "        ";
            if ((trim($this->getAttribute($this->getContext($context, "mnu"), "url")) == trim($this->getContext($context, "currentUrl")))) {
                // line 16
                echo "            ";
                $context["active"] = "active";
                // line 17
                echo "        ";
            }
            // line 18
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "active"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "name"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mnu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  59 => 13,  54 => 10,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
