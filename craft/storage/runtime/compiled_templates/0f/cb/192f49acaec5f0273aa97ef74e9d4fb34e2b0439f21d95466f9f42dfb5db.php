<?php

/* index */
class __TwigTemplate_0fcb192f49acaec5f0273aa97ef74e9d4fb34e2b0439f21d95466f9f42dfb5db extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo " 
<!-- /* Home Slider -->
<div class=\"row\">
  <div class=\"xlarge-12 columns\">
  \t<section class=\"carousel\">\t\t\t
\t\t\t<div id=\"home-carousel\" class=\"owl-carousel corben-carousel\"> 
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "simpleSlides"));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 11
            echo "\t\t\t\t\t<div class=\"carousel-item home-carousel-item\">
\t\t\t\t\t\t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "filename"), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "width"), "html", null, true);
            echo "\"  height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "height"), "html", null, true);
            echo "\" />
\t\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</div>\t
\t\t\t";
        // line 26
        echo "\t\t\t\t\t
\t\t</section>
  </div>
</div><!-- Home Slider */ -->

";
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 26,  61 => 15,  46 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
