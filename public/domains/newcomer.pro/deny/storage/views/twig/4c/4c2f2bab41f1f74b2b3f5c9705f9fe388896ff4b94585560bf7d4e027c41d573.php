<?php

/* header_lk */
class __TwigTemplate_1c4e358bd8706faa23b071c5a58e83bceb5229a94ab89bff4c21773ffff268c4 extends TwigBridge\Twig\Template
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
        $tags = array("set" => 1, "if" => 15, "for" => 81);
        $filters = array("escape" => 5, "json_encode" => 5, "merge" => 83);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('escape', 'json_encode', 'merge'),
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
        $context["requestGroups"] = array("btrip" => $this->getAttribute(        // line 2
(isset($context["site"]) ? $context["site"] : null), "field_request_btrip_group", array()));
        // line 4
        echo "
<header class=\"header\" id=\"lk-header\" data-user-id=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\" data-requests-groups=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["requestGroups"]) ? $context["requestGroups"] : null)), "html", null, true));
        echo "\">
    <div class=\"header__top\">
        <div class=\"container\">
            <div class=\"header__top-box\">
                <p class=\"header__adress header__icon\">
                    г. Москва, Волгоградский пр-кт, 2
                </p>
                <a class=\"header__mail header__icon\" href=\"mailto:info@v-es.ru\"> info@v-es.ru </a>
                <a class=\"header__phone header__icon\" href=\"tel:74956376109\"> 8 (495) 637-61-09 </a>
\t\t\t\t<div class=\"header-lk\">
\t\t\t\t\t";
        // line 15
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 16
            echo "\t\t\t\t\t<a class=\"header-lk__link\" href=\"/lk\">
\t\t\t\t\t\t<div class=\"header-lk__icon\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-lk__name\">";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "login", array()), "html", null, true));
            echo "</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"header-lk__menu\">
\t\t\t\t\t\t<div class=\"header-lk__menu-wrapper\">
\t\t\t\t\t\t\t<a class=\"header-lk__menu-link\" href=\"/auth/logout\">Выйти</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t<a class=\"header-lk__link js-login\" data-path=\"login\" data-animation=\"fadeInUp\" data-speed=\"200\" href=\"#\">
\t\t\t\t\t\t<div class=\"header-lk__icon\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-lk__name\">Вход в ЛК</div>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t</div>
\t\t\t</div>
        </div>
    </div>
    <div class=\"header__bottom main-nav\">
        <div class=\"container\">
            <div class=\"main-nav__icon\"><span></span></div>
            <div class=\"main-nav__box\">
                <a class=\"logo header__logo\" href=\"/\">
                    <img class=\"logo-img\" src=\"/site/theme/images/logo.png\" alt=\"Логотип\" />
                </a>
\t\t\t\t";
        // line 47
        $context["menu"] = array(0 => array("title" => "ГИС", "url" => "http://gis.v-es.ru:8080/"), 1 => array("title" => "Новости", "checkemployee" => true, "url" => "/lk/news"), 2 => array("title" => "Сотрудники", "checkemployee" => true, "url" => "/lk/employee"), 3 => array("title" => "Заявки на согласование", "checkemployee" => true, "url" => "/lk/requests", "statusDot" => "requests"), 4 => array("title" => "Обучение", "checkemployee" => true, "url" => "/lk/education"), 5 => array("title" => "Мониторинг строительства", "url" => "/lk/catalog"));
        // line 78
        echo "\t\t\t\t
\t\t\t\t";
        // line 79
        $context["filteredmenu"] = array();
        // line 80
        echo "\t\t\t\t";
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_employee", array())) {
            // line 81
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 82
                echo "\t\t\t\t\t";
                if ( !$this->getAttribute($context["item"], "checkemployee", array())) {
                    // line 83
                    echo "\t\t\t\t\t\t";
                    $context["filteredmenu"] = twig_array_merge((isset($context["filteredmenu"]) ? $context["filteredmenu"] : null), array(0 => $context["item"]));
                    // line 84
                    echo "\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t\t ";
            $context["menu"] = (isset($context["filteredmenu"]) ? $context["filteredmenu"] : null);
            // line 87
            echo "\t\t\t\t";
        }
        // line 88
        echo "                <nav class=\"main-nav\">
                    <div class=\"main-nav__wrapper\">
                        <ul class=\"main-nav__list site-list list-reset\">
\t\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 92
            echo "                            <li class=\"site-list__item\" v-cloak >
                                <a class=\"site-list__link ";
            // line 93
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "path", array()) == $this->getAttribute($context["item"], "url", array()))) {
                echo "site-list__link--active";
            }
            echo "\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
            echo "\">
                                    ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 95
            if (($this->getAttribute($context["item"], "statusDot", array()) == "requests")) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"site-list__item-status\" v-show=\"notAcceptedRequests.length\"></span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 98
            echo "                                </a>
                            </li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t<li class=\"site-list__item show-m\">
                                <a class=\"site-list__link\" href=\"/auth/logout\">
                                    Выйти
                                </a>
                            </li>
                        </ul>
                        <button class=\"btn__header site-list__btn btn btn-reset\" data-path=\"callback\" data-animation=\"fadeInUp\" data-speed=\"200\">Обратная связь</button>
                    </div>
                </nav>
                <div class=\"header-profile\" style=\"text-align:right;\">
\t\t\t\t\t<a href=\"/lk\">Мой профиль<br><span style=\"font-size:12px;\">";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_fullname", array()), "html", null, true));
        echo "</span></a>
\t\t\t\t\t<div class=\"header-profile__avatar\">
\t\t\t\t\t\t";
        // line 113
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "fiels_image", array())) {
            // line 114
            echo "\t\t\t\t\t\t<img src=\"/site/data/images/large/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_image", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t\t\t<div class=\"header-profile__avatar-noava\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "header_lk";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 120,  205 => 116,  199 => 114,  197 => 113,  192 => 111,  180 => 101,  172 => 98,  168 => 96,  166 => 95,  162 => 94,  154 => 93,  151 => 92,  147 => 91,  142 => 88,  139 => 87,  136 => 86,  130 => 85,  127 => 84,  124 => 83,  121 => 82,  116 => 81,  113 => 80,  111 => 79,  108 => 78,  106 => 47,  93 => 36,  84 => 29,  72 => 20,  66 => 16,  64 => 15,  49 => 5,  46 => 4,  44 => 2,  43 => 1,);
    }
}
/* {% set requestGroups = {*/
/* 	btrip: site.field_request_btrip_group*/
/* } %}*/
/* */
/* <header class="header" id="lk-header" data-user-id="{$ user.id $}" data-requests-groups="{$ requestGroups|json_encode() $}">*/
/*     <div class="header__top">*/
/*         <div class="container">*/
/*             <div class="header__top-box">*/
/*                 <p class="header__adress header__icon">*/
/*                     г. Москва, Волгоградский пр-кт, 2*/
/*                 </p>*/
/*                 <a class="header__mail header__icon" href="mailto:info@v-es.ru"> info@v-es.ru </a>*/
/*                 <a class="header__phone header__icon" href="tel:74956376109"> 8 (495) 637-61-09 </a>*/
/* 				<div class="header-lk">*/
/* 					{% if user %}*/
/* 					<a class="header-lk__link" href="/lk">*/
/* 						<div class="header-lk__icon">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/></svg>*/
/* 						</div>*/
/* 						<div class="header-lk__name">{$ user.login $}</div>*/
/* 					</a>*/
/* 					<div class="header-lk__menu">*/
/* 						<div class="header-lk__menu-wrapper">*/
/* 							<a class="header-lk__menu-link" href="/auth/logout">Выйти</a>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					{% else %}*/
/* 					<a class="header-lk__link js-login" data-path="login" data-animation="fadeInUp" data-speed="200" href="#">*/
/* 						<div class="header-lk__icon">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/></svg>*/
/* 						</div>*/
/* 						<div class="header-lk__name">Вход в ЛК</div>*/
/* 					</a>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="header__bottom main-nav">*/
/*         <div class="container">*/
/*             <div class="main-nav__icon"><span></span></div>*/
/*             <div class="main-nav__box">*/
/*                 <a class="logo header__logo" href="/">*/
/*                     <img class="logo-img" src="/site/theme/images/logo.png" alt="Логотип" />*/
/*                 </a>*/
/* 				{% set menu = [*/
/* 					{*/
/* 						title: 'ГИС',*/
/* 						url: 'http://gis.v-es.ru:8080/'*/
/* 					},*/
/* 					{*/
/* 						title: 'Новости',*/
/* 				checkemployee : true,*/
/* 						url: '/lk/news'*/
/* 					},*/
/* 					{*/
/* 						title: 'Сотрудники',*/
/* 				checkemployee : true,*/
/* 						url: '/lk/employee'*/
/* 					},*/
/* 					{*/
/* 						title: 'Заявки на согласование',*/
/* 				checkemployee : true,*/
/* 						url: '/lk/requests',*/
/* 						statusDot: 'requests'*/
/* 					},*/
/* 					{*/
/* 						title: 'Обучение',*/
/* 				checkemployee : true,*/
/* 						url: '/lk/education'*/
/* 					},*/
/* 					{*/
/* 						title: 'Мониторинг строительства',*/
/* 						url: '/lk/catalog'*/
/* 					}*/
/* 				] %}*/
/* 				*/
/* 				{% set filteredmenu = [] %}*/
/* 				{% if not user.field_is_employee %}*/
/* 				{% for item in menu %}*/
/* 					{% if not item.checkemployee %}*/
/* 						{% set filteredmenu =  filteredmenu|merge([item])  %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 				 {% set menu = filteredmenu %}*/
/* 				{% endif %}*/
/*                 <nav class="main-nav">*/
/*                     <div class="main-nav__wrapper">*/
/*                         <ul class="main-nav__list site-list list-reset">*/
/* 							{% for item in menu %}*/
/*                             <li class="site-list__item" v-cloak >*/
/*                                 <a class="site-list__link {% if request.path == item.url %}site-list__link--active{% endif %}" href="{$ item.url $}">*/
/*                                     {$ item.title $}*/
/* 									{% if item.statusDot == 'requests' %}*/
/* 										<span class="site-list__item-status" v-show="notAcceptedRequests.length"></span>*/
/* 									{% endif %}*/
/*                                 </a>*/
/*                             </li>*/
/* 							{% endfor %}*/
/* 							<li class="site-list__item show-m">*/
/*                                 <a class="site-list__link" href="/auth/logout">*/
/*                                     Выйти*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <button class="btn__header site-list__btn btn btn-reset" data-path="callback" data-animation="fadeInUp" data-speed="200">Обратная связь</button>*/
/*                     </div>*/
/*                 </nav>*/
/*                 <div class="header-profile" style="text-align:right;">*/
/* 					<a href="/lk">Мой профиль<br><span style="font-size:12px;">{$ user.field_fullname $}</span></a>*/
/* 					<div class="header-profile__avatar">*/
/* 						{% if user.fiels_image %}*/
/* 						<img src="/site/data/images/large/{$ user.field_image $}">*/
/* 						{% else %}*/
/* 						<div class="header-profile__avatar-noava">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/></svg>	*/
/* 						</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* {#*/
/* <div class="lk-mobile-nav">*/
/* 	<div class="container">*/
/* 		<ul class="lk-mobile-nav__list">*/
/* 			{% for item in menu %}*/
/* 			<li class="lk-mobile-nav__item">*/
/* 				<a class="lk-mobile-nav__link {% if request.path == item.url %}lk-mobile-nav__link--active{% endif %}" href="{$ item.url $}">*/
/* 					{$ item.title $}*/
/* 					{% if item.statusDot == 'requests' %}*/
/* 						<!--span class="site-list__item-status" v-show="notAcceptedRequests.length"></span-->*/
/* 					{% endif %}*/
/* 				</a>*/
/* 			</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* #}*/
/* */
