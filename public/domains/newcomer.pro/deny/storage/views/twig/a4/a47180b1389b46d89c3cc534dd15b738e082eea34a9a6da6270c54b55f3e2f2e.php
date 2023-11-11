<?php

/* layouts.cases */
class __TwigTemplate_34d006b7fe35dde71f4566eb1f91ed24a0acd1b96ee380bd4a801fd62b0cd0c0 extends TwigBridge\Twig\Template
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
        $this->loadTemplate("header", "layouts.cases", 1)->display($context);
        // line 2
        echo "<main>
    <div class=\"container\">
        <ol class=\"breadcrumbs list-reset\" itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\">
            <li itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
                <a class=\"breadcrumbs__link\" itemprop=\"item\" href=\"/\"> <span itemprop=\"name\">Главная</span></a>
                <meta itemprop=\"position\" content=\"1\" />
            </li>
            <li class=\"\" itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
                <a class=\"breadcrumbs__current\" itemprop=\"item\" href=\"#\"> <span itemprop=\"name\">Наши работы</span></a>
                <meta itemprop=\"position\" content=\"2\" />
            </li>
        </ol>
    </div>
\t
\t<section class=\"project\">
        <div class=\"container\">
            <div class=\"service__number-box\">
                <h1 class=\"projects__title title\">
                    Проекты, для которых мы выполняли изыскания
                </h1>
                <span class=\"service__number\">9 </span>
            </div>
            <div class=\"projects__list\">
                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/main4.png\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2022\">2022</time>
                        <h3>
                            Жилые дома по программе реновации, проезд завода Серп и Молот
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства&nbsp;</p>
                        <p></p>
                    </div>
                </div>

               
\t\t\t\t
\t\t\t\t <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/main9.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                       Пешеходный мост в Московском зоопарке.
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: геотехнический мониторинг, геодезическое сопровождение строительства, аэрофотосъемка</p>
                        <p></p>
                    </div>
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/207233.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Павильон \"Ластоногие\" в Московском зоопарке
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, инженерно-геологические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

                <!--div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/main1.png\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Жилой дом по программе реновации, Волгоградский проспект, д.163
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div-->
\t\t\t\t<div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/main77.png\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2023\">2023</time>
                        <h3>
                           Комплекс жилых домов по адресу: Перовское шоссе, стр. 23С4
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-экологические изыскания, геодезическое сопровождение строительства, гидрогеологическое моделирование, инженерно-геологические изыскания, оценка влияния строительства</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/1823415.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Детская поликлиника на 320 посещений в смену, ул. Академика Павлова, вл. 40
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: геодезическое сопровождение строительства, вынос осей</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/1713619.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Средняя общеобразовательная школа №1 в г. Фрязино
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/main2.png\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2021\">2021</time>
                        <h3>
                            Жилой дом по программе реновации, ул. Люблинская, д.111
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

\t\t\t\t <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/main3.png\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2021</time>
                        <h3>
                            Жилые дома по программе реновации, ул. Кантемировская, д.27
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>
\t\t\t\t
\t\t\t\t
               

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/main10.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                          
\t\t\t\t\t\t\tЖилая застройка в квартале улиц 1-ый Иртышский проезд, д.3 -ул.Тагильская.

                        </h3>
                        <p></p>
                        <p>Выполнялись работы: аэрофотосъемка, геодезические работы по созданию опорно-геодезической сети</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
\t
\t
    <!--section class=\"project\">
        <div class=\"container\">
            <div class=\"service__number-box\">
                <h1 class=\"projects__title title\">
                   Проекты, над которыми мы работали
                </h1>
                <span class=\"service__number\">9 </span>
            </div>
            <div class=\"projects__list\">
                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/2218747.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2022\">2022</time>
                        <h3>
                            Жилые дома по программе реновации, проезд завода Серп и Молот
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства&nbsp;</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/2117632.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Жилые дома по программе реновации, Измайловский бульвар, д.5
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/207233.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Павильон \"Ластоногие\" в Московском зоопарке
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, инженерно-геологические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/1916374.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Жилой дом по программе реновации, Волгоградский проспект, д.163
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/1823415.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Детская поликлиника на 320 посещений в смену, ул. Академика Павлова, вл. 40
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: геодезическое сопровождение строительства, вынос осей</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/1713619.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Средняя общеобразовательная школа №1 в г. Фрязино
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/1616829.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2021\">2021</time>
                        <h3>
                            Жилой дом по программе реновации, ул. Люблинская, д.111
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/1517089.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Жилой дом по программе реновации, ул. Юных Ленинцев, д.42
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>
                        <p></p>
                    </div>
                </div>

                <div class=\"projects__item\">
                    <div class=\"projects__img-box\">
                        <img src=\"/site/theme/images/1415346.jpg\" alt=\"\" />
                    </div>
                    <div class=\"projects__content\">
                        <time datetime=\"2020\">2020</time>
                        <h3>
                            Жилые дома по программе реновации, Жигулевская, д.3
                        </h3>
                        <p></p>
                        <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section-->
    <section class=\"question\">
        <div class=\"container\">
            <div class=\"question__img-box\">
                <img class=\"question__img\" src=\"/site/theme/images/question_img.jpg\" alt=\"\" />
            </div>
            <form action=\"../mail.php\" enctype=\"multipart/form-data\" class=\"question__form\" method=\"POST\">
                <input type=\"hidden\" name=\"form_subject\" value=\"Заявка\" />
                <input type=\"hidden\" name=\"admin_email[]\" value=\"info@v-es.ru\" />
                <div class=\"question__content\">
                    <h2 class=\"question__title title\">Остались вопросы?</h2>
                    <p class=\"question__descr\">
                        Заполните форму обратной связи, и&nbsp;мы&nbsp;свяжемся с&nbsp;Вами, чтобы ответить на&nbsp;все вопросы
                    </p>
                </div>
                <div class=\"question__boby\">
                    <label class=\"\">
                        <span class=\"visually-hidden\">Введите свое имя</span>
                        <input class=\"question__data\" type=\"text\" name=\"Имя\" placeholder=\"Введите свое имя\" />
                    </label>
                    <label class=\"\">
                        <span class=\"visually-hidden\">Введите свой e-mail</span>
                        <input class=\"question__data\" type=\"email\" name=\"Емейл\" placeholder=\"Введите свой e-mail\" required=\"\" />
                    </label>
                    <label class=\"\">
                        <span class=\"visually-hidden\">Введите свой телефон</span>
                        <input class=\"question__data\" type=\"tel\" name=\"Телефон\" placeholder=\"Введите свой телефон\" required=\"\" inputmode=\"text\" />
                    </label>
                    <div class=\"select-wrapper\">
                        <label class=\"select-label\">
                            <span class=\"visually-hidden\">Выбрать услугу</span>
                            <select class=\"question__data\" name=\"Услуга\">
                                <option value=\"любая\">Любая услуга</option>
                                <option value=\"Инженерно-геологические изыскания\">Инженерно-геологические изыскания </option>
                                <option value=\"Инженерно-геодезические изыскания\">Инженерно-геодезические изыскания </option>
                                <option value=\"Геотехнические изыскания\">Геотехнические изыскания</option>
                                <option value=\"Геодезическое сопровождение строительства\">Геодезическое сопровождение строительства</option>
                                <option value=\"Аэрофотосъемка местности\">Аэрофотосъемка местности</option>
                                <option value=\"Обследование зданий и сооружений\">Обследование зданий и&nbsp;сооружений </option>
                                <option value=\"Работа с ГБУ «Мосгоргеотрест»\">Работа с&nbsp;ГБУ «Мосгоргеотрест»</option>
                                <option value=\"Работа с «МосгорБТИ»\">Работа с&nbsp;«МосгорБТИ»</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class=\"question__btn-box\">
                    <button class=\"question__btn btn-main btn btn-reset\" type=\"submit\">Отправить</button>
                </div>
                <p class=\"form-text\">Нажимая кнопку «Отправить», Вы&nbsp;даете согласие на&nbsp;<a class=\"form__personal-link\" href=\"#\">обработку персональных данных</a></p>
            </form>
        </div>
    </section>
</main>

";
        // line 388
        $this->loadTemplate("footer", "layouts.cases", 388)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.cases";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 388,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* <main>*/
/*     <div class="container">*/
/*         <ol class="breadcrumbs list-reset" itemscope="" itemtype="http://schema.org/BreadcrumbList">*/
/*             <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/*                 <a class="breadcrumbs__link" itemprop="item" href="/"> <span itemprop="name">Главная</span></a>*/
/*                 <meta itemprop="position" content="1" />*/
/*             </li>*/
/*             <li class="" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/*                 <a class="breadcrumbs__current" itemprop="item" href="#"> <span itemprop="name">Наши работы</span></a>*/
/*                 <meta itemprop="position" content="2" />*/
/*             </li>*/
/*         </ol>*/
/*     </div>*/
/* 	*/
/* 	<section class="project">*/
/*         <div class="container">*/
/*             <div class="service__number-box">*/
/*                 <h1 class="projects__title title">*/
/*                     Проекты, для которых мы выполняли изыскания*/
/*                 </h1>*/
/*                 <span class="service__number">9 </span>*/
/*             </div>*/
/*             <div class="projects__list">*/
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/main4.png" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2022">2022</time>*/
/*                         <h3>*/
/*                             Жилые дома по программе реновации, проезд завода Серп и Молот*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства&nbsp;</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                */
/* 				*/
/* 				 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/main9.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                        Пешеходный мост в Московском зоопарке.*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: геотехнический мониторинг, геодезическое сопровождение строительства, аэрофотосъемка</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* 				*/
/* 				*/
/* 				*/
/* 				*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/207233.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Павильон "Ластоногие" в Московском зоопарке*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, инженерно-геологические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!--div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/main1.png" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Жилой дом по программе реновации, Волгоградский проспект, д.163*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div-->*/
/* 				<div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/main77.png" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2023">2023</time>*/
/*                         <h3>*/
/*                            Комплекс жилых домов по адресу: Перовское шоссе, стр. 23С4*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-экологические изыскания, геодезическое сопровождение строительства, гидрогеологическое моделирование, инженерно-геологические изыскания, оценка влияния строительства</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/1823415.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Детская поликлиника на 320 посещений в смену, ул. Академика Павлова, вл. 40*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: геодезическое сопровождение строительства, вынос осей</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/1713619.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Средняя общеобразовательная школа №1 в г. Фрязино*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/main2.png" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2021">2021</time>*/
/*                         <h3>*/
/*                             Жилой дом по программе реновации, ул. Люблинская, д.111*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* 				 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/main3.png" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2021</time>*/
/*                         <h3>*/
/*                             Жилые дома по программе реновации, ул. Кантемировская, д.27*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* 				*/
/* 				*/
/*                */
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/main10.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                           */
/* 							Жилая застройка в квартале улиц 1-ый Иртышский проезд, д.3 -ул.Тагильская.*/
/* */
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: аэрофотосъемка, геодезические работы по созданию опорно-геодезической сети</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* 	*/
/* 	*/
/*     <!--section class="project">*/
/*         <div class="container">*/
/*             <div class="service__number-box">*/
/*                 <h1 class="projects__title title">*/
/*                    Проекты, над которыми мы работали*/
/*                 </h1>*/
/*                 <span class="service__number">9 </span>*/
/*             </div>*/
/*             <div class="projects__list">*/
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/2218747.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2022">2022</time>*/
/*                         <h3>*/
/*                             Жилые дома по программе реновации, проезд завода Серп и Молот*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства&nbsp;</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/2117632.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Жилые дома по программе реновации, Измайловский бульвар, д.5*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/207233.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Павильон "Ластоногие" в Московском зоопарке*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, инженерно-геологические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/1916374.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Жилой дом по программе реновации, Волгоградский проспект, д.163*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/1823415.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Детская поликлиника на 320 посещений в смену, ул. Академика Павлова, вл. 40*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: геодезическое сопровождение строительства, вынос осей</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/1713619.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Средняя общеобразовательная школа №1 в г. Фрязино*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/1616829.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2021">2021</time>*/
/*                         <h3>*/
/*                             Жилой дом по программе реновации, ул. Люблинская, д.111*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/1517089.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Жилой дом по программе реновации, ул. Юных Ленинцев, д.42*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства, вынос осей в натуру</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="projects__item">*/
/*                     <div class="projects__img-box">*/
/*                         <img src="/site/theme/images/1415346.jpg" alt="" />*/
/*                     </div>*/
/*                     <div class="projects__content">*/
/*                         <time datetime="2020">2020</time>*/
/*                         <h3>*/
/*                             Жилые дома по программе реновации, Жигулевская, д.3*/
/*                         </h3>*/
/*                         <p></p>*/
/*                         <p>Выполнялись работы: инженерно-геодезические изыскания, геотехнический мониторинг, геодезическое сопровождение строительства</p>*/
/*                         <p></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section-->*/
/*     <section class="question">*/
/*         <div class="container">*/
/*             <div class="question__img-box">*/
/*                 <img class="question__img" src="/site/theme/images/question_img.jpg" alt="" />*/
/*             </div>*/
/*             <form action="../mail.php" enctype="multipart/form-data" class="question__form" method="POST">*/
/*                 <input type="hidden" name="form_subject" value="Заявка" />*/
/*                 <input type="hidden" name="admin_email[]" value="info@v-es.ru" />*/
/*                 <div class="question__content">*/
/*                     <h2 class="question__title title">Остались вопросы?</h2>*/
/*                     <p class="question__descr">*/
/*                         Заполните форму обратной связи, и&nbsp;мы&nbsp;свяжемся с&nbsp;Вами, чтобы ответить на&nbsp;все вопросы*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="question__boby">*/
/*                     <label class="">*/
/*                         <span class="visually-hidden">Введите свое имя</span>*/
/*                         <input class="question__data" type="text" name="Имя" placeholder="Введите свое имя" />*/
/*                     </label>*/
/*                     <label class="">*/
/*                         <span class="visually-hidden">Введите свой e-mail</span>*/
/*                         <input class="question__data" type="email" name="Емейл" placeholder="Введите свой e-mail" required="" />*/
/*                     </label>*/
/*                     <label class="">*/
/*                         <span class="visually-hidden">Введите свой телефон</span>*/
/*                         <input class="question__data" type="tel" name="Телефон" placeholder="Введите свой телефон" required="" inputmode="text" />*/
/*                     </label>*/
/*                     <div class="select-wrapper">*/
/*                         <label class="select-label">*/
/*                             <span class="visually-hidden">Выбрать услугу</span>*/
/*                             <select class="question__data" name="Услуга">*/
/*                                 <option value="любая">Любая услуга</option>*/
/*                                 <option value="Инженерно-геологические изыскания">Инженерно-геологические изыскания </option>*/
/*                                 <option value="Инженерно-геодезические изыскания">Инженерно-геодезические изыскания </option>*/
/*                                 <option value="Геотехнические изыскания">Геотехнические изыскания</option>*/
/*                                 <option value="Геодезическое сопровождение строительства">Геодезическое сопровождение строительства</option>*/
/*                                 <option value="Аэрофотосъемка местности">Аэрофотосъемка местности</option>*/
/*                                 <option value="Обследование зданий и сооружений">Обследование зданий и&nbsp;сооружений </option>*/
/*                                 <option value="Работа с ГБУ «Мосгоргеотрест»">Работа с&nbsp;ГБУ «Мосгоргеотрест»</option>*/
/*                                 <option value="Работа с «МосгорБТИ»">Работа с&nbsp;«МосгорБТИ»</option>*/
/*                             </select>*/
/*                         </label>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="question__btn-box">*/
/*                     <button class="question__btn btn-main btn btn-reset" type="submit">Отправить</button>*/
/*                 </div>*/
/*                 <p class="form-text">Нажимая кнопку «Отправить», Вы&nbsp;даете согласие на&nbsp;<a class="form__personal-link" href="#">обработку персональных данных</a></p>*/
/*             </form>*/
/*         </div>*/
/*     </section>*/
/* </main>*/
/* */
/* {% include 'footer' %}*/
/* */
