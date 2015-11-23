<?php

/* partials/navigation.html.twig */
class __TwigTemplate_8b4fceeaf31703cccaafb2b0c9c0399d67b0cdb4332ec2ffa350b3395ce62ccb extends Twig_Template
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
        echo "
<nav id=\"nav-wrap\">
    <a class=\"mobile-btn\" href=\"#nav-wrap\" title=\"Show navigation\">Show navigation</a>
    <a class=\"mobile-btn\" href=\"#\" title=\"Hide navigation\">Hide navigation</a>

    ";
        // line 6
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 7
        echo "    ";
        // line 8
        echo "
    <ul id=\"nav\" class=\"nav\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 11
            echo "            ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 12
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 13
                echo "                ";
                if (twig_in_filter("home", $this->getAttribute($context["page"], "menu", array()))) {
                    // line 14
                    echo "                <li class=\"current\">
                    <a class=\"smoothscroll\" href=\"#home\">
                        ";
                    // line 16
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                    </a>
                </li>
                ";
                } else {
                    // line 20
                    echo "                <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                    <a href=\"";
                    // line 21
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">
                        ";
                    // line 22
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                    </a>
                </li>
                ";
                }
                // line 26
                echo "            ";
            }
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 29
            echo "            <li>
                <a href=\"";
            // line 30
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo "            ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 35
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                // line 36
                echo "                <li class=\"";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\">
                    <a class=\"smoothscroll\" href=\"#";
                // line 37
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                </li>
            ";
            }
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </ul>
</nav>
";
    }

    // line 7
    public function getpageLinkName($__text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 7,  132 => 41,  126 => 40,  118 => 37,  113 => 36,  110 => 35,  107 => 34,  102 => 33,  91 => 30,  88 => 29,  83 => 28,  77 => 27,  74 => 26,  67 => 22,  63 => 21,  58 => 20,  51 => 16,  47 => 14,  44 => 13,  41 => 12,  38 => 11,  34 => 10,  30 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* <nav id="nav-wrap">*/
/*     <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>*/
/*     <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>*/
/* */
/*     {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}*/
/*     {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}*/
/* */
/*     <ul id="nav" class="nav">*/
/*         {% for page in pages.children %}*/
/*             {% if page.visible %}*/
/*                 {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}*/
/*                 {% if 'home' in page.menu %}*/
/*                 <li class="current">*/
/*                     <a class="smoothscroll" href="#home">*/
/*                         {{ page.menu }}*/
/*                     </a>*/
/*                 </li>*/
/*                 {% else %}*/
/*                 <li class="{{ current_page }}">*/
/*                     <a href="{{ page.url }}">*/
/*                         {{ page.menu }}*/
/*                     </a>*/
/*                 </li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {% for mitem in site.menu %}*/
/*             <li>*/
/*                 <a href="{{ mitem.link }}">{{ mitem.text }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/*         {% for module in page.collection() %}*/
/*             {% if not module.header.hidemenu %}*/
/*                 {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}*/
/*                 <li class="{{ current_module }}">*/
/*                     <a class="smoothscroll" href="#{{ _self.pageLinkName(module.menu) }}">{{ module.menu }}</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/* </nav>*/
/* */
