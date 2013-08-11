<?php

/* SMAdminBundle:Menu:new.html.twig */
class __TwigTemplate_ef6ae2541b8909c1c92c25e6aab704d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#url\").hide();
        \$(\"#sm_bundle_adminbundle_menutype_type\").bind(\"change\", function(){
            var mnuTypeText = ";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "mnuTypeText"), "html", null, true);
        echo ";
            var mnuTypeLink = ";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "mnuTypeLink"), "html", null, true);
        echo ";
            var typeMenu = \$(this).attr('value');

            if (typeMenu == mnuTypeText || typeMenu == mnuTypeLink) {
                \$(\"#url\").show();
                \$(\"#param\").hide();
                \$('#sm_bundle_adminbundle_menutype_param').removeAttr(\"required\");
            } else {
                \$(\"#url\").hide();
                \$(\"#param\").show();
                \$(\"#sm_bundle_adminbundle_menutype_param\").attr(\"required\", \"true\");
            }


            var urlMenu = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_get_param"), "html", null, true);
        echo "\" + '/' + typeMenu;
            \$.ajax({url:urlMenu, success:function(data){
                //remove all option of the select
                \$('#sm_bundle_adminbundle_menutype_param').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    \$(\"#sm_bundle_adminbundle_menutype_param\").append(\"<option value=\" + item.id + \">\" + item.name + \"</option>\");
                });
            }});

            //Call ajax
            \$('#ajaxModal').modal();
            \$('#ajaxModal').ajaxStart(function() {
                \$(this).show();
            })
            .ajaxStop(function() {
                \$('#ajaxModal').modal('hide')
            });
        });
        
        /**
         * Get menu parent for each menu position
         */
        \$(\"#sm_bundle_adminbundle_menutype_position\").bind(\"change\", function(){
            var position = \$(this).attr('value');

            var urlGetParent = \"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_get_menuparent"), "html", null, true);
        echo "\" + '/' + position;
            \$.ajax({url:urlGetParent, success:function(data){
                //remove all option of the select
                \$('#sm_bundle_adminbundle_menutype_parent').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    \$(\"#sm_bundle_adminbundle_menutype_parent\").append(\"<option value=\" + item.id + \">\" + item.name + \"</option>\");
                });
            }});

            //Call ajax
            \$('#ajaxModal').modal();
            \$('#ajaxModal').ajaxStart(function() {
                \$(this).show();
            })
            .ajaxStop(function() {
                \$('#ajaxModal').modal('hide')
            });
        });
    });
</script>

<form action=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Position", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "position"), 'errors');
        echo "
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "position"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'errors');
        echo "
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"url\">
            <label class=\"control-label\" for=\"input01\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'errors');
        echo "
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"param\">
            <label class=\"control-label\" for=\"input01\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "param"), 'errors');
        echo "
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "param"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 122
        $context["isActive"] = 1;
        // line 123
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 124
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 125
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 127
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 129
            echo "                      ";
            $context["isActive"] = 2;
            // line 130
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 133
        $context["isActive"] = 1;
        // line 134
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 135
            echo "                    ";
            $context["currentAL"] = null;
            // line 136
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "menu_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["menuLanguage"]) {
                // line 137
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "menuLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 138
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "menuLanguage");
                    // line 139
                    echo "                        ";
                }
                // line 140
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 142
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 144
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 146
            echo "                            <fieldset>
                                ";
            // line 147
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 148
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 151
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 152
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 153
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 155
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 157
                echo "                                    </div>
                                </div>

                                ";
            }
            // line 161
            echo "                            </fieldset>
                        </div>
                    ";
            // line 163
            $context["isActive"] = 2;
            // line 164
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Menu:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 171,  368 => 170,  364 => 169,  358 => 165,  352 => 164,  350 => 163,  346 => 161,  340 => 157,  334 => 155,  328 => 153,  326 => 152,  322 => 151,  317 => 149,  314 => 148,  312 => 147,  309 => 146,  303 => 144,  297 => 142,  294 => 141,  288 => 140,  285 => 139,  282 => 138,  279 => 137,  274 => 136,  271 => 135,  266 => 134,  264 => 133,  260 => 131,  254 => 130,  251 => 129,  243 => 127,  235 => 125,  232 => 124,  227 => 123,  225 => 122,  214 => 114,  210 => 113,  205 => 111,  198 => 107,  194 => 106,  189 => 104,  182 => 100,  178 => 99,  173 => 97,  166 => 93,  162 => 92,  157 => 90,  150 => 86,  146 => 85,  141 => 83,  134 => 79,  130 => 78,  125 => 76,  117 => 73,  91 => 50,  61 => 23,  44 => 9,  40 => 8,  31 => 3,  28 => 2,);
    }
}
