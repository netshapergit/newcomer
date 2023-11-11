<?php

/* header */
class __TwigTemplate_e68698c53c931d3aec52c5aedff2f802f0c96927be6b8aa7945b3539cedfa8b4 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 11);
        $filters = array("escape" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('escape'),
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
        echo "<header class=\"header\">
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
        // line 11
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 12
            echo "\t\t\t\t\t<a class=\"header-lk__link\" href=\"/lk\">
\t\t\t\t\t\t<div class=\"header-lk__icon\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-lk__name\">";
            // line 16
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
            // line 25
            echo "\t\t\t\t\t
\t\t\t\t\t<a class=\"header-lk__link js-reg\" data-path=\"reg\" data-animation=\"fadeInUp\" data-speed=\"200\" href=\"#\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"header-lk__name\">Регистрация</div>
\t\t\t\t\t</a>&nbsp;
\t\t\t\t\t<a class=\"header-lk__link js-login\" data-path=\"login\" data-animation=\"fadeInUp\" data-speed=\"200\" href=\"#\">
\t\t\t\t\t\t<div class=\"header-lk__icon\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-lk__name\">Вход в ЛК</div>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 37
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
                <nav class=\"main-nav\">
                    <div class=\"main-nav__wrapper\">
                        <ul class=\"main-nav__list site-list list-reset\">
                            <li class=\"site-list__item\">
                                <a class=\"site-list__link\" href=\"/\">
                                    Главная
                                </a>
                            </li>
                            <li class=\"site-list__item\">
                                <a class=\"site-list__link\" href=\"/o-nas/\">
                                    О&nbsp;компании
                                </a>
                            </li>
                            <li class=\"site-list__item\">
                                <a class=\"site-list__link\" href=\"/uslugi/\">
                                    Услуги
                                </a>
                            </li>
                            <li class=\"site-list__item\">
                                <a class=\"site-list__link\" href=\"/proekty/\">
                                    Наши работы
                                </a>
                            </li>
                            <li class=\"site-list__item\">
                                <a class=\"site-list__link\" href=\"/kontakty/\">
                                    Контакты
                                </a>
                            </li>
\t\t\t\t\t\t\t <li class=\"site-list__item\">
                                <a class=\"site-list__link\" href=\"/jobs/\">
                                    Вакансии
                                </a>
                            </li>
                        </ul>
\t\t\t\t\t\t
                        <button class=\"btn__header site-list__btn btn btn-reset\" data-path=\"callback\" data-animation=\"fadeInUp\" data-speed=\"200\">Обратная связь</button>
                    \t<div class=\"header-lk-mobile\">
\t\t\t\t\t\t\t";
        // line 93
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 94
            echo "\t\t\t\t\t\t\t<a class=\"header-lk__link btn btn__header\" href=\"/lk\">
\t\t\t\t\t\t\t\t<div class=\"header-lk__icon\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"header-lk__name\">ЛК: <b>";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "login", array()), "html", null, true));
            echo "</b></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"header-lk__menu\">
\t\t\t\t\t\t\t\t<div class=\"header-lk__menu-wrapper\">
\t\t\t\t\t\t\t\t\t<a class=\"header-lk__menu-link\" href=\"/auth/logout\">Выйти</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        } else {
            // line 107
            echo "\t\t\t\t\t\t\t<a class=\"header-lk__link js-login\" data-path=\"login\" data-animation=\"fadeInUp\" data-speed=\"200\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"header-lk__icon\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"header-lk__name\">Вход в ЛК</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </nav>
                <button class=\"btn__header btn-reset pc-btn\" data-path=\"callback\" data-animation=\"fadeInUp\" data-speed=\"200\">Обратная связь</button>
            </div>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 114,  160 => 107,  148 => 98,  142 => 94,  139 => 93,  89 => 37,  75 => 25,  63 => 16,  57 => 12,  55 => 11,  43 => 1,);
    }
}
/* <header class="header">*/
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
/* 					*/
/* 					<a class="header-lk__link js-reg" data-path="reg" data-animation="fadeInUp" data-speed="200" href="#">*/
/* 						*/
/* 						<div class="header-lk__name">Регистрация</div>*/
/* 					</a>&nbsp;*/
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
/*                 <nav class="main-nav">*/
/*                     <div class="main-nav__wrapper">*/
/*                         <ul class="main-nav__list site-list list-reset">*/
/*                             <li class="site-list__item">*/
/*                                 <a class="site-list__link" href="/">*/
/*                                     Главная*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="site-list__item">*/
/*                                 <a class="site-list__link" href="/o-nas/">*/
/*                                     О&nbsp;компании*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="site-list__item">*/
/*                                 <a class="site-list__link" href="/uslugi/">*/
/*                                     Услуги*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="site-list__item">*/
/*                                 <a class="site-list__link" href="/proekty/">*/
/*                                     Наши работы*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="site-list__item">*/
/*                                 <a class="site-list__link" href="/kontakty/">*/
/*                                     Контакты*/
/*                                 </a>*/
/*                             </li>*/
/* 							 <li class="site-list__item">*/
/*                                 <a class="site-list__link" href="/jobs/">*/
/*                                     Вакансии*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/* 						*/
/*                         <button class="btn__header site-list__btn btn btn-reset" data-path="callback" data-animation="fadeInUp" data-speed="200">Обратная связь</button>*/
/*                     	<div class="header-lk-mobile">*/
/* 							{#*/
/* 							<a class="header-lk__link js-login" data-path="login" data-animation="fadeInUp" data-speed="200" href="#">*/
/* 							<div class="header-lk__icon">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"></path></svg>*/
/* 							</div>*/
/* 							<div class="header-lk__name">Вход в ЛК</div>*/
/* 							</a>*/
/* 							#}*/
/* 							{% if user %}*/
/* 							<a class="header-lk__link btn btn__header" href="/lk">*/
/* 								<div class="header-lk__icon">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/></svg>*/
/* 								</div>*/
/* 								<div class="header-lk__name">ЛК: <b>{$ user.login $}</b></div>*/
/* 							</a>*/
/* 							<div class="header-lk__menu">*/
/* 								<div class="header-lk__menu-wrapper">*/
/* 									<a class="header-lk__menu-link" href="/auth/logout">Выйти</a>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							{% else %}*/
/* 							<a class="header-lk__link js-login" data-path="login" data-animation="fadeInUp" data-speed="200" href="#">*/
/* 								<div class="header-lk__icon">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/></svg>*/
/* 								</div>*/
/* 								<div class="header-lk__name">Вход в ЛК</div>*/
/* 							</a>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/*                 </nav>*/
/*                 <button class="btn__header btn-reset pc-btn" data-path="callback" data-animation="fadeInUp" data-speed="200">Обратная связь</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* */
