<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_1b311016828cbd0639e4c83ae7bf476e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ($this->getContext($context, "image_path")) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ($this->getContext($context, "link_url")) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (($this->getContext($context, "link_filter")) ? ($this->env->getExtension('liip_imagine')->filter($this->getContext($context, "link_url"), $this->getContext($context, "link_filter"))) : ($this->getContext($context, "link_url"))), "html", null, true);
                echo "\" ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "link_attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getContext($context, "image_path"), $this->getContext($context, "image_filter")), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "image_attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ($this->getContext($context, "link_url")) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  319 => 120,  253 => 96,  333 => 126,  322 => 123,  374 => 145,  370 => 144,  356 => 138,  352 => 130,  340 => 130,  328 => 126,  237 => 94,  231 => 93,  188 => 76,  20 => 1,  311 => 118,  277 => 103,  140 => 53,  243 => 97,  214 => 74,  285 => 106,  345 => 127,  256 => 97,  224 => 85,  161 => 63,  373 => 172,  359 => 134,  351 => 164,  313 => 148,  304 => 117,  275 => 98,  236 => 92,  361 => 128,  343 => 130,  320 => 121,  316 => 120,  279 => 105,  261 => 95,  233 => 88,  391 => 187,  377 => 181,  371 => 180,  365 => 170,  348 => 170,  346 => 132,  337 => 129,  334 => 128,  329 => 154,  317 => 120,  314 => 118,  308 => 114,  291 => 111,  286 => 109,  192 => 63,  77 => 12,  87 => 28,  164 => 60,  124 => 51,  97 => 43,  40 => 7,  23 => 2,  158 => 58,  283 => 103,  271 => 101,  242 => 93,  228 => 88,  206 => 78,  187 => 74,  181 => 65,  49 => 19,  134 => 46,  69 => 31,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 185,  378 => 146,  372 => 140,  360 => 174,  354 => 124,  349 => 134,  338 => 127,  332 => 127,  326 => 123,  303 => 115,  297 => 109,  260 => 94,  257 => 96,  210 => 79,  202 => 77,  376 => 140,  364 => 140,  342 => 168,  331 => 126,  327 => 153,  323 => 121,  321 => 121,  315 => 149,  294 => 109,  267 => 101,  264 => 95,  252 => 130,  241 => 91,  234 => 91,  176 => 71,  148 => 53,  86 => 25,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 139,  339 => 126,  330 => 124,  324 => 117,  312 => 119,  310 => 120,  306 => 118,  298 => 112,  296 => 110,  278 => 103,  269 => 97,  248 => 98,  195 => 80,  146 => 56,  113 => 57,  300 => 116,  288 => 107,  274 => 105,  266 => 100,  259 => 97,  255 => 89,  251 => 99,  247 => 94,  239 => 92,  218 => 85,  208 => 70,  167 => 94,  137 => 47,  221 => 84,  209 => 87,  174 => 68,  169 => 66,  142 => 55,  117 => 45,  62 => 27,  299 => 114,  281 => 102,  265 => 99,  262 => 98,  250 => 95,  246 => 86,  244 => 87,  238 => 81,  229 => 78,  203 => 82,  199 => 81,  197 => 65,  193 => 79,  179 => 66,  166 => 66,  129 => 46,  90 => 20,  56 => 21,  227 => 77,  223 => 74,  219 => 86,  213 => 72,  207 => 74,  190 => 77,  182 => 59,  168 => 56,  150 => 53,  110 => 40,  107 => 36,  128 => 45,  53 => 14,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 186,  382 => 105,  379 => 104,  375 => 144,  369 => 171,  366 => 138,  363 => 140,  357 => 136,  353 => 135,  350 => 128,  347 => 129,  344 => 129,  341 => 128,  335 => 128,  325 => 124,  318 => 122,  309 => 115,  305 => 116,  302 => 112,  293 => 112,  290 => 108,  284 => 112,  280 => 104,  272 => 100,  258 => 96,  254 => 88,  240 => 90,  235 => 89,  232 => 90,  226 => 89,  217 => 83,  200 => 81,  175 => 65,  173 => 63,  170 => 67,  156 => 56,  125 => 43,  99 => 34,  301 => 110,  295 => 142,  292 => 114,  289 => 108,  287 => 99,  282 => 105,  276 => 102,  273 => 109,  270 => 102,  268 => 32,  263 => 99,  249 => 93,  245 => 85,  230 => 91,  222 => 87,  220 => 90,  215 => 115,  211 => 84,  204 => 83,  198 => 76,  185 => 109,  183 => 73,  177 => 64,  160 => 59,  112 => 38,  82 => 24,  65 => 32,  38 => 6,  144 => 52,  141 => 50,  135 => 47,  126 => 44,  109 => 36,  103 => 35,  67 => 20,  61 => 17,  47 => 12,  105 => 41,  93 => 29,  76 => 35,  72 => 20,  68 => 18,  27 => 5,  91 => 29,  84 => 25,  94 => 27,  88 => 17,  79 => 32,  59 => 15,  21 => 2,  44 => 18,  31 => 3,  28 => 2,  225 => 76,  216 => 84,  212 => 88,  205 => 68,  201 => 69,  196 => 66,  194 => 75,  191 => 76,  189 => 65,  186 => 61,  180 => 70,  172 => 67,  159 => 55,  154 => 52,  147 => 59,  132 => 46,  127 => 48,  121 => 45,  118 => 39,  114 => 38,  104 => 30,  100 => 32,  78 => 42,  75 => 11,  71 => 21,  58 => 9,  34 => 6,  26 => 2,  24 => 1,  25 => 4,  19 => 1,  70 => 18,  63 => 30,  46 => 10,  22 => 2,  163 => 58,  155 => 57,  152 => 61,  149 => 52,  145 => 51,  139 => 50,  131 => 48,  123 => 45,  120 => 37,  115 => 43,  106 => 44,  101 => 51,  96 => 31,  83 => 33,  80 => 24,  74 => 23,  66 => 17,  55 => 8,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 75,  178 => 69,  171 => 64,  165 => 55,  162 => 54,  157 => 53,  153 => 63,  151 => 87,  143 => 48,  138 => 54,  136 => 52,  133 => 52,  130 => 45,  122 => 43,  119 => 44,  116 => 39,  111 => 42,  108 => 39,  102 => 32,  98 => 31,  95 => 30,  92 => 40,  89 => 28,  85 => 16,  81 => 14,  73 => 40,  64 => 17,  60 => 28,  57 => 16,  54 => 11,  51 => 12,  48 => 10,  45 => 8,  42 => 9,  39 => 14,  36 => 12,  33 => 4,  30 => 5,);
    }
}
