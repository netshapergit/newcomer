<?php

/* layouts.job */
class __TwigTemplate_3a873a7864f69dec0ccef5d8c058e1aa9035ae8dd4a17c32d41ec2473020623a extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "if" => 29);
        $filters = array("escape" => 17, "raw" => 36);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
                array('escape', 'raw'),
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

        // line 1
        $this->loadTemplate("header", "layouts.job", 1)->display($context);
        // line 2
        echo "<main>
\t<div class=\"container\">
\t\t<ol class=\"breadcrumbs list-reset\" itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t<li itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
\t\t\t\t<a class=\"breadcrumbs__link\" itemprop=\"item\" href=\"/\">
\t\t\t\t\t<span itemprop=\"name\">Главная</span></a>
\t\t\t\t<meta itemprop=\"position\" content=\"1\">
\t\t\t</li>
\t\t\t<li class=\"\" itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
\t\t\t\t<a class=\"breadcrumbs__link\" itemprop=\"item\" href=\"/uslugi\">
\t\t\t\t\t<span itemprop=\"name\">Наши услуги</span></a>
\t\t\t\t<meta itemprop=\"position\" content=\"2\">
\t\t\t</li>
\t\t\t<li class=\"\" itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
\t\t\t\t<a class=\"breadcrumbs__current\" itemprop=\"item\" href=\"#\">
\t\t\t\t\t<span itemprop=\"name\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "</span></a>
\t\t\t\t<meta itemprop=\"position\" content=\"3\">
\t\t\t</li>
\t\t</ol>
\t</div>
\t<section class=\"service\">
\t\t<div class=\"container\">
\t\t\t<div class=\"service__number-box\">
\t\t\t\t<div style=\"display:flex; align-items:center;justify-content:space-between;\">
\t\t\t\t<h1 class=\"service__title title\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "
\t\t\t\t</h1>
\t\t\t\t";
        // line 29
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_price", array())) {
            // line 30
            echo "\t\t\t\t\t<p style=\"font-size:20px;margin: 0;\"><b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_price", array()), "html", null, true));
            echo " ₽</b></p>
\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<p class=\"service__descr\">
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
        echo "
\t\t\t</p>
\t\t</div>
\t</section>

</main>

";
        // line 43
        $this->loadTemplate("footer", "layouts.job", 43)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.job";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  94 => 36,  88 => 32,  82 => 30,  80 => 29,  75 => 27,  62 => 17,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* <main>*/
/* 	<div class="container">*/
/* 		<ol class="breadcrumbs list-reset" itemscope="" itemtype="http://schema.org/BreadcrumbList">*/
/* 			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/* 				<a class="breadcrumbs__link" itemprop="item" href="/">*/
/* 					<span itemprop="name">Главная</span></a>*/
/* 				<meta itemprop="position" content="1">*/
/* 			</li>*/
/* 			<li class="" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/* 				<a class="breadcrumbs__link" itemprop="item" href="/uslugi">*/
/* 					<span itemprop="name">Наши услуги</span></a>*/
/* 				<meta itemprop="position" content="2">*/
/* 			</li>*/
/* 			<li class="" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/* 				<a class="breadcrumbs__current" itemprop="item" href="#">*/
/* 					<span itemprop="name">{$ page.field_header $}</span></a>*/
/* 				<meta itemprop="position" content="3">*/
/* 			</li>*/
/* 		</ol>*/
/* 	</div>*/
/* 	<section class="service">*/
/* 		<div class="container">*/
/* 			<div class="service__number-box">*/
/* 				<div style="display:flex; align-items:center;justify-content:space-between;">*/
/* 				<h1 class="service__title title">*/
/* 					{$ page.field_header $}*/
/* 				</h1>*/
/* 				{% if page.field_price %}*/
/* 					<p style="font-size:20px;margin: 0;"><b>{$ page.field_price $} ₽</b></p>*/
/* 				{% endif %}*/
/* 				*/
/* 					</div>*/
/* 			</div>*/
/* 			<p class="service__descr">*/
/* 				{$ page.field_content|raw $}*/
/* 			</p>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* </main>*/
/* */
/* {% include 'footer' %}*/
