<?php

/* base */
class __TwigTemplate_b0cc19a5e24e6014390f6ebbdc19e0b55cd2378ced28e9564fc065d02c030b02 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.new", "base", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.new";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 5);
        $filters = array("escape" => 6, "default" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('escape', 'default'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
        // line 5
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "field_name", array())) {
            // line 6
            echo "\t\t| ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "field_name", array()), "html", null, true));
            echo "
\t";
        }
    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        // line 12
        echo "\t<meta name=\"keywords\" content=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "keywords", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "keywords", array()), "")) : ("")), "html", null, true));
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array()), "")) : ("")), "html", null, true));
        echo "\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=0\">
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link href=\"https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap\" rel=\"stylesheet\">
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"/site/theme/images/favicon_32x32.png\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/swiper.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/style.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/nc.css\">
\t";
        // line 22
        if (twig_in_filter("/lk", $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "path", array()))) {
            // line 23
            echo "\t\t<link rel=\"stylesheet\" href=\"/site/theme/css/lk1.css\">
\t\t<link rel=\"stylesheet\" href=\"/site/theme/css/nc_lk.css\">
\t";
        }
    }

    public function getTemplateName()
    {
        return "base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  93 => 22,  81 => 13,  76 => 12,  74 => 11,  71 => 10,  63 => 6,  61 => 5,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.new' %}*/
/* */
/* {% block title %}*/
/* 	{$ parent() $}*/
/* 	{% if site.field_name %}*/
/* 		| {$ site.field_name $}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block head %}*/
/* 	{# parent() #}*/
/* 	<meta name="keywords" content="{$ page.keywords|default("") $}">*/
/* 	<meta name="description" content="{$ page.description|default("") $}">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">*/
/* 	<link rel="preconnect" href="https://fonts.googleapis.com">*/
/* 	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>*/
/* 	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">*/
/* 	<link rel="icon" type="image/x-icon" href="/site/theme/images/favicon_32x32.png">*/
/* 	<link rel="stylesheet" href="/site/theme/css/swiper.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/style.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/nc.css">*/
/* 	{% if '/lk' in request.path %}*/
/* 		<link rel="stylesheet" href="/site/theme/css/lk1.css">*/
/* 		<link rel="stylesheet" href="/site/theme/css/nc_lk.css">*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
