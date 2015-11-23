<?php

/* modular/about.html.twig */
class __TwigTemplate_32163eacdf777e055918e2df6be99747742d65bb6b886bfe1f6c1985035e97a8 extends Twig_Template
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
        echo "<section id=\"about\">
    <div class=\"row\">
        <div class=\"three columns\">
            <img class=\"profile-pic\"  src=\"";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), "profilepic.jpg", array(), "array"), "url", array());
        echo "\" alt=\"\" />
        </div>

        <div class=\"nine columns main-col\">
            ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            <div class=\"row\">
                <div class=\"columns contact-details\">
                    ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "address", array())) {
            // line 12
            echo "                    <h2>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title2", array());
            echo "</h2>
                    ";
        }
        // line 14
        echo "                    <p class=\"address\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "address", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "                        ";
            echo $this->getAttribute($context["item"], "line", array());
            echo " <br />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </p>
                </div>
                ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array())) {
            // line 21
            echo "                <div class=\"columns download\">
                    <p>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 24
                echo "                            <a href=\"";
                echo $this->getAttribute($context["button"], "url", array());
                echo "\" class=\"button\"><i class=\"fa fa-";
                echo $this->getAttribute($context["button"], "icon", array());
                echo "\"></i>";
                echo $this->getAttribute($context["button"], "text", array());
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    </p>
                </div>
                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  88 => 26,  75 => 24,  71 => 23,  67 => 21,  65 => 20,  61 => 18,  52 => 16,  48 => 15,  45 => 14,  39 => 12,  37 => 11,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <section id="about">*/
/*     <div class="row">*/
/*         <div class="three columns">*/
/*             <img class="profile-pic"  src="{{ page.media.images['profilepic.jpg'].url }}" alt="" />*/
/*         </div>*/
/* */
/*         <div class="nine columns main-col">*/
/*             {{ page.content }}*/
/*             <div class="row">*/
/*                 <div class="columns contact-details">*/
/*                     {% if page.header.address %}*/
/*                     <h2>{{ page.header.title2 }}</h2>*/
/*                     {% endif %}*/
/*                     <p class="address">*/
/*                         {% for item in page.header.address %}*/
/*                         {{ item.line }} <br />*/
/*                         {% endfor %}*/
/*                     </p>*/
/*                 </div>*/
/*                 {% if page.header.buttons %}*/
/*                 <div class="columns download">*/
/*                     <p>*/
/*                         {% for button in page.header.buttons %}*/
/*                             <a href="{{ button.url }}" class="button"><i class="fa fa-{{ button.icon }}"></i>{{ button.text }}</a>*/
/*                         {% endfor %}*/
/*                     </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
