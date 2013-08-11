<?php

/* SMAdminBundle:Menu:edit.html.twig */
class __TwigTemplate_f4ee9a36c919b839ec59871c89261f57 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var type = \$('#sm_bundle_adminbundle_menutype_type').attr('value');
        var link = ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "mnuTypeLink"), "html", null, true);
        echo ";

        if (type != link) {
            \$(\"#url\").hide();
            \$(\"#param\").show();
            \$(\"input[id=sm_bundle_adminbundle_menutype_url]\").attr('value','');
        } else {
            \$(\"#url\").show();
            \$(\"#param\").hide();
        }



        \$(\"#sm_bundle_adminbundle_menutype_type\").bind(\"change\", function(){
            var mnuTypeText = ";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "mnuTypeText"), "html", null, true);
        echo ";
            var mnuTypeLink = ";
        // line 22
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
        // line 35
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

        \$(\"#sm_bundle_adminbundle_menutype_position\").bind(\"change\", function(){
            var position = \$(this).attr('value');

            var urlGetParent = \"";
        // line 59
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
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Position", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "position"), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "position"), 'widget');
        echo "
            </div>
        </div>
            
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'errors');
        echo "
                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'errors');
        echo "
                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"url\">
            <label class=\"control-label\" for=\"input01\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'errors');
        echo "
                ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"param\">
            <label class=\"control-label\" for=\"input01\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "param"), 'errors');
        echo "
                ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "param"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 135
        $context["isActive"] = 1;
        // line 136
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 137
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 138
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 140
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 142
            echo "                      ";
            $context["isActive"] = 2;
            // line 143
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 146
        $context["isActive"] = 1;
        // line 147
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 148
            echo "                    ";
            $context["currentAL"] = null;
            // line 149
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "menu_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 150
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ctLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 151
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "ctLanguage");
                    // line 152
                    echo "                        ";
                }
                // line 153
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 155
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 157
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 159
            echo "                            <fieldset>
                                ";
            // line 160
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 161
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 164
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 165
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 166
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 168
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 170
                echo "                                    </div>
                                </div>
                                ";
            }
            // line 173
            echo "                            </fieldset>
                        </div>
                    ";
            // line 175
            $context["isActive"] = 2;
            // line 176
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 183
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
        return "SMAdminBundle:Menu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 183,  383 => 182,  379 => 181,  373 => 177,  367 => 176,  365 => 175,  361 => 173,  356 => 170,  350 => 168,  344 => 166,  342 => 165,  338 => 164,  333 => 162,  330 => 161,  328 => 160,  325 => 159,  319 => 157,  313 => 155,  310 => 154,  304 => 153,  301 => 152,  298 => 151,  295 => 150,  290 => 149,  287 => 148,  282 => 147,  280 => 146,  276 => 144,  270 => 143,  267 => 142,  259 => 140,  251 => 138,  248 => 137,  243 => 136,  241 => 135,  230 => 127,  226 => 126,  221 => 124,  213 => 119,  209 => 118,  204 => 116,  197 => 112,  193 => 111,  188 => 109,  181 => 105,  177 => 104,  172 => 102,  165 => 98,  161 => 97,  156 => 95,  148 => 90,  144 => 89,  139 => 87,  131 => 84,  103 => 59,  76 => 35,  60 => 22,  56 => 21,  39 => 7,  31 => 3,  28 => 2,);
    }
}
