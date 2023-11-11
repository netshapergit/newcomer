<?php

/* layouts.homepage */
class __TwigTemplate_302670fcbbdb4d9690f6a9c70667afaef2e3588b52ce80592837cf934113efb2 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array(),
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
        $this->loadTemplate("header_lk", "layouts.homepage", 1)->display($context);
        // line 2
        echo "
<main>
\t<section class=\"hero\">
\t\t<div class=\"cont\">
\t\t\t<div class=\"hero__container container\">
\t\t\t\t<div class=\"hero__content\">
\t\t\t\t\t<div class=\"hero__subtitle\">ЦИФРОВАЯ ПЛАТФОРМА ЗНАНИЙ</div>
\t\t\t\t\t<h1 class=\"hero__title\">АгроЭкоМиссия</h1>
\t\t\t\t\t<div class=\"hero__descr\">
\t\t\t\t\t\tОтраслевая система подготовки и обучения
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</main>

";
        // line 19
        $this->loadTemplate("footer_lk", "layouts.homepage", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.homepage";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header_lk' %}*/
/* */
/* <main>*/
/* 	<section class="hero">*/
/* 		<div class="cont">*/
/* 			<div class="hero__container container">*/
/* 				<div class="hero__content">*/
/* 					<div class="hero__subtitle">ЦИФРОВАЯ ПЛАТФОРМА ЗНАНИЙ</div>*/
/* 					<h1 class="hero__title">АгроЭкоМиссия</h1>*/
/* 					<div class="hero__descr">*/
/* 						Отраслевая система подготовки и обучения*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* </main>*/
/* */
/* {% include 'footer_lk' %}*/
