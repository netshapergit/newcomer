<?php

/* layouts.contacts */
class __TwigTemplate_e62a5cf46680c5d77fac4adfce27f54cc06ea445c249faba47f2d1ccfa054e5f extends TwigBridge\Twig\Template
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
        $this->loadTemplate("header", "layouts.contacts", 1)->display($context);
        // line 2
        echo "
<main>
\t\t<div class=\"container\">
\t\t\t<ol class=\"breadcrumbs list-reset\" itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t\t<li itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
\t\t\t\t\t<a class=\"breadcrumbs__link\" itemprop=\"item\" href=\"/\">
\t\t\t\t\t\t<span itemprop=\"name\">Главная</span></a>
\t\t\t\t\t<meta itemprop=\"position\" content=\"1\">
\t\t\t\t</li>
\t\t\t\t<li class=\"\" itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
\t\t\t\t\t<a class=\"breadcrumbs__current\" itemprop=\"item\" href=\"#\">
\t\t\t\t\t\t<span itemprop=\"name\">Контакты</span></a>
\t\t\t\t\t<meta itemprop=\"position\" content=\"2\">
\t\t\t\t</li>
\t\t\t</ol>
\t\t</div>
\t\t<section class=\"contact\">
\t\t\t<div class=\"container\">
\t\t\t\t<h1 class=\"contact__title title\">
\t\t\t\t\tКонтакты компании
\t\t\t\t</h1>
\t\t\t\t<ul class=\"contact__list list-reset\">
\t\t\t\t\t<li class=\"contact__item\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<p class=\"contact__adress contact__icon\">
\t\t\t\t\t\t\t109316, г. Москва, Волгоградский пр-кт, 2\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"contact__item\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<a class=\"contact__mail contact__icon\" href=\"mailto:info@v-es.ru\">
\t\t\t\t\t\t\tinfo@v-es.ru\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"contact__item\">
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<a class=\"contact__phone contact__icon\" href=\"tel:74956376109\">
\t\t\t\t\t\t\t8 (495) 637-61-09\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"wrapMap\">
\t\t\t\t\t<div class=\"footer__map\">
\t\t\t\t\t\t<iframe src=\"https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;um=constructor%3Ac672d2161cb5833624902689373be9fd1864c205e219afaba6ec3b8b245426db\" frameborder=\"0\" allowfullscreen=\"true\" width=\"100%\" height=\"100%\" style=\"display: block;\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>

";
        // line 63
        $this->loadTemplate("footer", "layouts.contacts", 63)->display(array_merge($context, array("noMap" => true)));
    }

    public function getTemplateName()
    {
        return "layouts.contacts";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 63,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <main>*/
/* 		<div class="container">*/
/* 			<ol class="breadcrumbs list-reset" itemscope="" itemtype="http://schema.org/BreadcrumbList">*/
/* 				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/* 					<a class="breadcrumbs__link" itemprop="item" href="/">*/
/* 						<span itemprop="name">Главная</span></a>*/
/* 					<meta itemprop="position" content="1">*/
/* 				</li>*/
/* 				<li class="" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/* 					<a class="breadcrumbs__current" itemprop="item" href="#">*/
/* 						<span itemprop="name">Контакты</span></a>*/
/* 					<meta itemprop="position" content="2">*/
/* 				</li>*/
/* 			</ol>*/
/* 		</div>*/
/* 		<section class="contact">*/
/* 			<div class="container">*/
/* 				<h1 class="contact__title title">*/
/* 					Контакты компании*/
/* 				</h1>*/
/* 				<ul class="contact__list list-reset">*/
/* 					<li class="contact__item">*/
/* 					*/
/* 					*/
/* 											<p class="contact__adress contact__icon">*/
/* 							109316, г. Москва, Волгоградский пр-кт, 2						</p>*/
/* 						*/
/* 							*/
/* 						*/
/* 					</li>*/
/* 					<li class="contact__item">*/
/* 					*/
/* 					*/
/* 						*/
/* 						<a class="contact__mail contact__icon" href="mailto:info@v-es.ru">*/
/* 							info@v-es.ru						</a>*/
/* 							*/
/* 						*/
/* 						*/
/* 					</li>*/
/* 					<li class="contact__item">*/
/* 					*/
/* 						*/
/* 					*/
/* 						<a class="contact__phone contact__icon" href="tel:74956376109">*/
/* 							8 (495) 637-61-09						</a>*/
/* 						*/
/* 							*/
/* 						*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div id="wrapMap">*/
/* 					<div class="footer__map">*/
/* 						<iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;um=constructor%3Ac672d2161cb5833624902689373be9fd1864c205e219afaba6ec3b8b245426db" frameborder="0" allowfullscreen="true" width="100%" height="100%" style="display: block;"></iframe>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</section>*/
/* 	</main>*/
/* */
/* {% include 'footer' with { 'noMap': true } %}*/
