<?php

/* pages/_entry */
class __TwigTemplate_005d9a511f93e6dc3d4f1c5c5d3e3dc6ba1dec1a45bfad1b80b74784c75dc434 extends Craft\BaseTemplate
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
        // line 3
        $context["entrySlug"] = "";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "getFirstSegment", array(), "method") == "practice")) {
            // line 7
            $context["entrySlug"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "getSegment", array(0 => 2), "method");
            // line 8
            $context["entry"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries"), "slug", array(0 => (isset($context["entrySlug"]) ? $context["entrySlug"] : $this->getContext($context, "entrySlug"))), "method"), "first", array(), "method");
            // line 9
            $context["title"] = ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title") . " | Practice");
        } else {
            // line 11
            $context["title"] = $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title");
        }
        // line 14
        $context["asset"] = $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "pageImage"), "first", array(), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
<article class=\"page-general\">
\t<div class=\"row\">
\t\t";
        // line 20
        if ((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset"))) {
            // line 21
            echo "\t\t<div class=\"xlarge-4 large-6 columns\">
\t\t\t<section class=\"page-content\">
\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "body"), "html", null, true);
            echo "
\t\t\t</section>
\t\t</div>
\t\t<div class=\"xlarge-8 large-6 columns\">\t\t\t
\t\t\t<section class=\"page-img show-for-large-up\">
\t\t\t\t<img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "url"), "html", null, true);
            echo "\" class=\"general-image\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "altText"), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "height"), "html", null, true);
            echo "\" />
\t\t\t</section>
\t\t</div>
\t\t";
        } else {
            // line 32
            echo "\t\t<div class=\"xlarge-12 large-12 columns\">
\t\t\t<section class=\"page-content\">
\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "body"), "html", null, true);
            echo "
\t\t\t</section>
\t\t</div>
\t\t";
        }
        // line 37
        echo "\t
\t</div>
</article>

";
    }

    public function getTemplateName()
    {
        return "pages/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  83 => 34,  79 => 32,  66 => 28,  58 => 23,  54 => 21,  52 => 20,  47 => 17,  44 => 16,  39 => 14,  36 => 11,  33 => 9,  31 => 8,  29 => 7,  27 => 6,  25 => 3,);
    }
}
