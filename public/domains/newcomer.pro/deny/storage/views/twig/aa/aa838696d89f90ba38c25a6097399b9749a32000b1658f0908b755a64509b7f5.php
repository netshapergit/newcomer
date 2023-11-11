<?php

/* layouts.homepage */
class __TwigTemplate_59a9c99a46759058101533b52af79355bca1bcf3a0aab3180586ac0df0c284f7 extends TwigBridge\Twig\Template
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
        $this->loadTemplate("header", "layouts.homepage", 1)->display($context);
        // line 2
        echo "
<main>
\t<section class=\"hero\">
\t\t<div class=\"hero__container container\">
\t\t\t<div class=\"hero__content\">
\t\t\t\t<h1 class=\"hero__title\">
\t\t\t\t\tИНЖЕНЕРНЫЕ ИЗЫСКАНИЯ\t\t\t\t\t</h1>
\t\t\t\t<div class=\"hero__descr\">
\t\t\t\t\t<p>
\t\t\t\t\t\tВсе виды инженерных изысканий для обеспечения исходными данными проектных работ и работы по сопровождению строительства\t\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"about__wrapper\">
\t\t\t\t<div class=\"about__img-box\">
\t\t\t\t\t<img class=\"about__img\" src=\"/site/theme/images/about_img.jpg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"about__box\">
\t\t\t\t\t<h2 class=\"about__title title\">
\t\t\t\t\t\tО&nbsp;нашей компании
\t\t\t\t\t</h2>


\t\t\t\t\t<div class=\"about__content\">
\t\t\t\t\t\t<p class=\"about__text\">

\t\t\t\t\t\t\t</p><p>ООО \"Вершина-Инженерные изыскания\" выполняет все виды инженерных изысканий для обеспечения исходными данными проектных работ и&nbsp;работы по&nbsp;сопровождению строительства. Мы&nbsp;имеем все необходимые СРО, оборудование и&nbsp;специалистов для реализации задач любой сложности в&nbsp;поставленные сроки. Будем рады видеть Вас среди наших клиентов!</p>\t\t\t\t\t\t\t\t

\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"about__note\">Достигайте вершин вместе с нами!</p>



\t\t\t\t\t<ul class=\"about__list about-list list-reset\">
\t\t\t\t\t\t<li class=\"about-list__item\">
\t\t\t\t\t\t\t<div class=\"about-list__title\">
\t\t\t\t\t\t\t\t200+
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"about-list__text\">
\t\t\t\t\t\t\t\tреализованных <br>
\t\t\t\t\t\t\t\tпроектов в&nbsp;2021-2022
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"about-list__item\">
\t\t\t\t\t\t\t<div class=\"about-list__title\">
\t\t\t\t\t\t\t\t50+
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"about-list__text\">
\t\t\t\t\t\t\t\tобъектов введено в&nbsp;эксплуатацию
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"about-list__item\">
\t\t\t\t\t\t\t<div class=\"about-list__title\">
\t\t\t\t\t\t\t\t40+
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"about-list__text\">
\t\t\t\t\t\t\t\tобъектов в&nbsp;работе
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"directions\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"directions__title title\">
\t\t\t\tОсновные направления нашей деятельности
\t\t\t</h2>
\t\t\t<ul class=\"directions__list list-reset\">
\t\t\t\t<li class=\"directions__item\">
\t\t\t\t\t<div class=\"directions__body directions__body--gray\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tИнженерные изыскания для проектирования и&nbsp;строительства
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tОбеспечение исходными
\t\t\t\t\t\t\tданными проектных работ для последующего
\t\t\t\t\t\t\tпроектирования и&nbsp;строительства
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"directions__item\">
\t\t\t\t\t<div class=\"directions__body directions__body--blue\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tСопровождение строительства на&nbsp;всех этапах работ
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tКомплекс работ по&nbsp;инженерному сопровождению всех этапов строительства
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</section>
\t<section class=\"partners\">
\t\t<div class=\"container\">
\t\t\t<div class=\"team__top-box\">
\t\t\t\t<h2 class=\"partners__title title\">
\t\t\t\t\tПартнеры компании
\t\t\t\t</h2>
\t\t\t\t<div class=\"team__btn-box\">
\t\t\t\t\t<div class=\"swiper-button-prev team-prev swiper-button-disabled swiper-button-lock\" tabindex=\"-1\" role=\"button\" aria-label=\"Previous slide\" aria-controls=\"swiper-wrapper-b20452772afad728\" aria-disabled=\"true\"></div>
\t\t\t\t\t<div class=\"swiper-button-next team-next swiper-button-disabled swiper-button-lock\" tabindex=\"-1\" role=\"button\" aria-label=\"Next slide\" aria-controls=\"swiper-wrapper-b20452772afad728\" aria-disabled=\"true\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"swiper swiper-container partners-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden\">
\t\t\t\t<div class=\"swiper-wrapper partners-wrapper\" id=\"swiper-wrapper-b20452772afad728\" aria-live=\"polite\">




\t\t\t\t\t<div class=\"swiper-slide swiper-slide-visible swiper-slide-active\" style=\"width: 187.5px; margin-right: 150px;\" role=\"group\" aria-label=\"1 / 4\">
\t\t\t\t\t\t<div class=\"partners__img-box\">
\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/site/theme/images/810156.svg\" alt=\"Брусника\">
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"swiper-slide swiper-slide-visible swiper-slide-next\" style=\"width: 187.5px; margin-right: 150px;\" role=\"group\" aria-label=\"2 / 4\">
\t\t\t\t\t\t<div class=\"partners__img-box\">
\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/site/theme/images/7589.svg\" alt=\"Москапстрой\">
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"swiper-slide swiper-slide-visible\" style=\"width: 187.5px; margin-right: 150px;\" role=\"group\" aria-label=\"3 / 4\">
\t\t\t\t\t\t<div class=\"partners__img-box\">
\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/site/theme/images/66073.svg\" alt=\"Фонд реновации\">
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"swiper-slide swiper-slide-visible\" style=\"width: 187.5px; margin-right: 150px;\" role=\"group\" aria-label=\"4 / 4\">
\t\t\t\t\t\t<div class=\"partners__img-box\">
\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/site/theme/images/524250.svg\" alt=\"ПИК\">
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>




\t\t\t\t</div>
\t\t\t<span class=\"swiper-notification\" aria-live=\"assertive\" aria-atomic=\"true\"></span></div>
\t\t</div>
\t</section>
\t<section class=\"benefits\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"benefits__title title\">
\t\t\t\tПреимущества сотрудничества с&nbsp;нами
\t\t\t</h2>
\t\t\t<div class=\"benefits__list\">
\t\t\t\t<div class=\"benefits__item\">
\t\t\t\t\t<div class=\"benefits__content\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tРаботаем по основной системе налогообложения
\t\t\t\t\t\t</h3>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"benefits__item\">
\t\t\t\t\t<div class=\"benefits__content\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tВыполняем госзаказы
\t\t\t\t\t\t</h3>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"benefits__item benefits--special\">
\t\t\t\t\t<div class=\"benefits__content\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tСоблюдаем сроки исполнения
\t\t\t\t\t\t</h3>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"benefits__item\">
\t\t\t\t\t<div class=\"benefits__content\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tБыстро согласовываем проект
\t\t\t\t\t\t</h3>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"benefits__item benefits__item--img\">
\t\t\t\t\t<img class=\"benefits__img\" src=\"/site/theme/images/benefits_img.jpg\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"services\">
\t\t<div class=\"container\">
\t\t\t<div class=\"services__img-box\">
\t\t\t\t<img class=\"services__img\" src=\"/site/theme/images/services_img.jpg\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"services__box\">
\t\t\t\t<h2 class=\"services__title title\">
\t\t\t\t\tНаши услуги
\t\t\t\t</h2>
\t\t\t\t<ul class=\"services__list services-list list-reset\">




\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tИнженерно-геологические изыскания\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Обеспечение исходными данными о грунтах, их свойствах и разновидностях, а также об уровне грунтовых вод для последующего проектирования и строительства</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>



\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tИнженерно-геодезические изыскания\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Комплекс работ по составлению топографического плана разных масштабов для проектирования зданий и сооружений</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>



\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tГеотехнический мониторинг\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Комплекс наблюдений за состоянием окружающих и строящихся зданий и сооружений для обеспечения безопасности строительства</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>



\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tГеотехнические изыскания\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Мероприятия по изучению свойств грунтовых массивов, оценка влияния строительства, оценка устойчивости</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>



\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tГеодезическое сопровождение строительства\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Комплекс измерений, вычислений и&nbsp;построений в&nbsp;чертежах и&nbsp;натуре обеспечивающий правильное и точное размещение зданий</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>



\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tАэрофотосъемка местности\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Фото территории или объекта при помощи беспилотного летательного аппарата для получения ортофотоплана или мониторинга за ходом СМР</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>



\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tОбследование зданий и сооружений\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Комплекс работ по оценке технического состояния строительных конструкций для реконструкции, демонтажа, оценки влияния нового строительства</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>



\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tРабота с ГБУ «Мосгоргеотрест»\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Организация сотрудничества \"под ключ\": заключение договоров, документооборот, осуществление вызовов, сопровождение исполнительной документации, загрузки, получение согласований</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>



\t\t\t\t\t<li class=\"services-list__item\">
\t\t\t\t\t\t<h3 class=\"services-list__title\">
\t\t\t\t\t\t\tРабота с «МосгорБТИ»\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"services-list__descr\">
\t\t\t\t\t\t\t</p><p>Организация сотрудничества \"под ключ\": заключение договора, документооборот, организация работ на объекте, корректировка проектной документации, контроль технической инвентаризации, контроль кадастровых работ</p>\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t</li>




\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"project\">
        <div class=\"container\">
            <div class=\"service__number-box\">
                <h1 class=\"projects__title title\">
                    Наши проекты
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
    </section>
\t<section class=\"question\">
\t\t<div class=\"container\">
\t\t\t<div class=\"question__img-box\">
\t\t\t\t<img class=\"question__img\" src=\"/site/theme/images/question_img.jpg\" alt=\"\">
\t\t\t</div>
\t\t\t<form action=\"mail.php\" class=\"question__form\" method=\"POST\">
\t\t\t\t<input type=\"hidden\" name=\"form_subject\" value=\"Заявка\">
\t\t\t\t<input type=\"hidden\" name=\"admin_email[]\" value=\"info@v-es.ru\">
\t\t\t\t<div class=\"question__content\">
\t\t\t\t\t<h2 class=\"question__title title\">Остались вопросы?</h2>
\t\t\t\t\t<p class=\"question__descr\">
\t\t\t\t\t\tЗаполните форму обратной связи, и&nbsp;мы&nbsp;свяжемся с&nbsp;Вами, чтобы ответить
\t\t\t\t\t\tна&nbsp;все вопросы
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"question__boby\">
\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Введите свое имя</span>
\t\t\t\t\t\t<input class=\"question__data\" type=\"text\" name=\"Имя\" placeholder=\"Введите свое имя\">
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Введите свой e-mail</span>
\t\t\t\t\t\t<input class=\"question__data\" type=\"email\" data-validate-field=\"e-mail\" name=\"Емейл\" placeholder=\"Введите свой e-mail\" required=\"\">
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Введите свой телефон</span>
\t\t\t\t\t\t<input class=\"question__data\" type=\"tel\" data-validate-field=\"tel\" name=\"Телефон\" placeholder=\"Введите свой телефон\" required=\"\" inputmode=\"text\">
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"select-wrapper\">
\t\t\t\t\t\t<label class=\"select-label\">
\t\t\t\t\t\t\t<span class=\"visually-hidden\">Выбрать услугу</span>
\t\t\t\t\t\t\t<select class=\"question__data\" name=\"Услуга\">
\t\t\t\t\t\t\t\t<option value=\"любая\">Любая услуга</option>
\t\t\t\t\t\t\t\t<option value=\"Инженерно-геологические изыскания\">Инженерно-геологические изыскания
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t<option value=\"Инженерно-геодезические изыскания\">Инженерно-геодезические изыскания
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t<option value=\"Геотехнические изыскания\">Геотехнические изыскания</option>
\t\t\t\t\t\t\t\t<option value=\"Геодезическое сопровождение строительства\">Геодезическое
\t\t\t\t\t\t\t\t\tсопровождение строительства</option>
\t\t\t\t\t\t\t\t<option value=\"Аэрофотосъемка местности\">Аэрофотосъемка местности</option>
\t\t\t\t\t\t\t\t<option value=\"Обследование зданий и сооружений\">Обследование зданий
\t\t\t\t\t\t\t\t\tи&nbsp;сооружений</option>
\t\t\t\t\t\t\t\t<option value=\"Работа с ГБУ «Мосгоргеотрест»\">Работа с&nbsp;ГБУ
\t\t\t\t\t\t\t\t\t«Мосгоргеотрест»</option>
\t\t\t\t\t\t\t\t<option value=\"Работа с «МосгорБТИ»\">Работа с&nbsp;«МосгорБТИ»</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"question__btn-box\">
\t\t\t\t\t<button class=\"question__btn btn-main btn btn-reset\" type=\"submit\">Отправить</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</section>
</main>

";
        // line 507
        $this->loadTemplate("footer", "layouts.homepage", 507)->display($context);
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
        return array (  552 => 507,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <main>*/
/* 	<section class="hero">*/
/* 		<div class="hero__container container">*/
/* 			<div class="hero__content">*/
/* 				<h1 class="hero__title">*/
/* 					ИНЖЕНЕРНЫЕ ИЗЫСКАНИЯ					</h1>*/
/* 				<div class="hero__descr">*/
/* 					<p>*/
/* 						Все виды инженерных изысканий для обеспечения исходными данными проектных работ и работы по сопровождению строительства						</p>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<section class="about">*/
/* 		<div class="container">*/
/* 			<div class="about__wrapper">*/
/* 				<div class="about__img-box">*/
/* 					<img class="about__img" src="/site/theme/images/about_img.jpg" alt="">*/
/* 				</div>*/
/* 				<div class="about__box">*/
/* 					<h2 class="about__title title">*/
/* 						О&nbsp;нашей компании*/
/* 					</h2>*/
/* */
/* */
/* 					<div class="about__content">*/
/* 						<p class="about__text">*/
/* */
/* 							</p><p>ООО "Вершина-Инженерные изыскания" выполняет все виды инженерных изысканий для обеспечения исходными данными проектных работ и&nbsp;работы по&nbsp;сопровождению строительства. Мы&nbsp;имеем все необходимые СРО, оборудование и&nbsp;специалистов для реализации задач любой сложности в&nbsp;поставленные сроки. Будем рады видеть Вас среди наших клиентов!</p>								*/
/* */
/* 						<p></p>*/
/* 					</div>*/
/* 					<p class="about__note">Достигайте вершин вместе с нами!</p>*/
/* */
/* */
/* */
/* 					<ul class="about__list about-list list-reset">*/
/* 						<li class="about-list__item">*/
/* 							<div class="about-list__title">*/
/* 								200+*/
/* 							</div>*/
/* 							<p class="about-list__text">*/
/* 								реализованных <br>*/
/* 								проектов в&nbsp;2021-2022*/
/* 							</p>*/
/* 						</li>*/
/* 						<li class="about-list__item">*/
/* 							<div class="about-list__title">*/
/* 								50+*/
/* 							</div>*/
/* 							<p class="about-list__text">*/
/* 								объектов введено в&nbsp;эксплуатацию*/
/* 							</p>*/
/* 						</li>*/
/* 						<li class="about-list__item">*/
/* 							<div class="about-list__title">*/
/* 								40+*/
/* 							</div>*/
/* 							<p class="about-list__text">*/
/* 								объектов в&nbsp;работе*/
/* 							</p>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<section class="directions">*/
/* 		<div class="container">*/
/* 			<h2 class="directions__title title">*/
/* 				Основные направления нашей деятельности*/
/* 			</h2>*/
/* 			<ul class="directions__list list-reset">*/
/* 				<li class="directions__item">*/
/* 					<div class="directions__body directions__body--gray">*/
/* 						<h3>*/
/* 							Инженерные изыскания для проектирования и&nbsp;строительства*/
/* 						</h3>*/
/* 						<p>*/
/* 							Обеспечение исходными*/
/* 							данными проектных работ для последующего*/
/* 							проектирования и&nbsp;строительства*/
/* 						</p>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="directions__item">*/
/* 					<div class="directions__body directions__body--blue">*/
/* 						<h3>*/
/* 							Сопровождение строительства на&nbsp;всех этапах работ*/
/* 						</h3>*/
/* 						<p>*/
/* 							Комплекс работ по&nbsp;инженерному сопровождению всех этапов строительства*/
/* 						</p>*/
/* 					</div>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</section>*/
/* 	<section class="partners">*/
/* 		<div class="container">*/
/* 			<div class="team__top-box">*/
/* 				<h2 class="partners__title title">*/
/* 					Партнеры компании*/
/* 				</h2>*/
/* 				<div class="team__btn-box">*/
/* 					<div class="swiper-button-prev team-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b20452772afad728" aria-disabled="true"></div>*/
/* 					<div class="swiper-button-next team-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b20452772afad728" aria-disabled="true"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="swiper swiper-container partners-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">*/
/* 				<div class="swiper-wrapper partners-wrapper" id="swiper-wrapper-b20452772afad728" aria-live="polite">*/
/* */
/* */
/* */
/* */
/* 					<div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 187.5px; margin-right: 150px;" role="group" aria-label="1 / 4">*/
/* 						<div class="partners__img-box">*/
/* 							<img class="partners__img" src="/site/theme/images/810156.svg" alt="Брусника">*/
/* 						</div>*/
/* */
/* 					</div>*/
/* */
/* */
/* */
/* 					<div class="swiper-slide swiper-slide-visible swiper-slide-next" style="width: 187.5px; margin-right: 150px;" role="group" aria-label="2 / 4">*/
/* 						<div class="partners__img-box">*/
/* 							<img class="partners__img" src="/site/theme/images/7589.svg" alt="Москапстрой">*/
/* 						</div>*/
/* */
/* 					</div>*/
/* */
/* */
/* */
/* 					<div class="swiper-slide swiper-slide-visible" style="width: 187.5px; margin-right: 150px;" role="group" aria-label="3 / 4">*/
/* 						<div class="partners__img-box">*/
/* 							<img class="partners__img" src="/site/theme/images/66073.svg" alt="Фонд реновации">*/
/* 						</div>*/
/* */
/* 					</div>*/
/* */
/* */
/* */
/* 					<div class="swiper-slide swiper-slide-visible" style="width: 187.5px; margin-right: 150px;" role="group" aria-label="4 / 4">*/
/* 						<div class="partners__img-box">*/
/* 							<img class="partners__img" src="/site/theme/images/524250.svg" alt="ПИК">*/
/* 						</div>*/
/* */
/* 					</div>*/
/* */
/* */
/* */
/* */
/* 				</div>*/
/* 			<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<section class="benefits">*/
/* 		<div class="container">*/
/* 			<h2 class="benefits__title title">*/
/* 				Преимущества сотрудничества с&nbsp;нами*/
/* 			</h2>*/
/* 			<div class="benefits__list">*/
/* 				<div class="benefits__item">*/
/* 					<div class="benefits__content">*/
/* 						<h3>*/
/* 							Работаем по основной системе налогообложения*/
/* 						</h3>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="benefits__item">*/
/* 					<div class="benefits__content">*/
/* 						<h3>*/
/* 							Выполняем госзаказы*/
/* 						</h3>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="benefits__item benefits--special">*/
/* 					<div class="benefits__content">*/
/* 						<h3>*/
/* 							Соблюдаем сроки исполнения*/
/* 						</h3>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="benefits__item">*/
/* 					<div class="benefits__content">*/
/* 						<h3>*/
/* 							Быстро согласовываем проект*/
/* 						</h3>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="benefits__item benefits__item--img">*/
/* 					<img class="benefits__img" src="/site/theme/images/benefits_img.jpg" alt="">*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<section class="services">*/
/* 		<div class="container">*/
/* 			<div class="services__img-box">*/
/* 				<img class="services__img" src="/site/theme/images/services_img.jpg" alt="">*/
/* 			</div>*/
/* 			<div class="services__box">*/
/* 				<h2 class="services__title title">*/
/* 					Наши услуги*/
/* 				</h2>*/
/* 				<ul class="services__list services-list list-reset">*/
/* */
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Инженерно-геологические изыскания							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Обеспечение исходными данными о грунтах, их свойствах и разновидностях, а также об уровне грунтовых вод для последующего проектирования и строительства</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Инженерно-геодезические изыскания							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Комплекс работ по составлению топографического плана разных масштабов для проектирования зданий и сооружений</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Геотехнический мониторинг							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Комплекс наблюдений за состоянием окружающих и строящихся зданий и сооружений для обеспечения безопасности строительства</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Геотехнические изыскания							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Мероприятия по изучению свойств грунтовых массивов, оценка влияния строительства, оценка устойчивости</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Геодезическое сопровождение строительства							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Комплекс измерений, вычислений и&nbsp;построений в&nbsp;чертежах и&nbsp;натуре обеспечивающий правильное и точное размещение зданий</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Аэрофотосъемка местности							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Фото территории или объекта при помощи беспилотного летательного аппарата для получения ортофотоплана или мониторинга за ходом СМР</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Обследование зданий и сооружений							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Комплекс работ по оценке технического состояния строительных конструкций для реконструкции, демонтажа, оценки влияния нового строительства</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Работа с ГБУ «Мосгоргеотрест»							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Организация сотрудничества "под ключ": заключение договоров, документооборот, осуществление вызовов, сопровождение исполнительной документации, загрузки, получение согласований</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* 					<li class="services-list__item">*/
/* 						<h3 class="services-list__title">*/
/* 							Работа с «МосгорБТИ»							</h3>*/
/* 						<p class="services-list__descr">*/
/* 							</p><p>Организация сотрудничества "под ключ": заключение договора, документооборот, организация работ на объекте, корректировка проектной документации, контроль технической инвентаризации, контроль кадастровых работ</p>							<p></p>*/
/* 					</li>*/
/* */
/* */
/* */
/* */
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<section class="project">*/
/*         <div class="container">*/
/*             <div class="service__number-box">*/
/*                 <h1 class="projects__title title">*/
/*                     Наши проекты*/
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
/*     </section>*/
/* 	<section class="question">*/
/* 		<div class="container">*/
/* 			<div class="question__img-box">*/
/* 				<img class="question__img" src="/site/theme/images/question_img.jpg" alt="">*/
/* 			</div>*/
/* 			<form action="mail.php" class="question__form" method="POST">*/
/* 				<input type="hidden" name="form_subject" value="Заявка">*/
/* 				<input type="hidden" name="admin_email[]" value="info@v-es.ru">*/
/* 				<div class="question__content">*/
/* 					<h2 class="question__title title">Остались вопросы?</h2>*/
/* 					<p class="question__descr">*/
/* 						Заполните форму обратной связи, и&nbsp;мы&nbsp;свяжемся с&nbsp;Вами, чтобы ответить*/
/* 						на&nbsp;все вопросы*/
/* 					</p>*/
/* 				</div>*/
/* 				<div class="question__boby">*/
/* 					<label class="">*/
/* 						<span class="visually-hidden">Введите свое имя</span>*/
/* 						<input class="question__data" type="text" name="Имя" placeholder="Введите свое имя">*/
/* 					</label>*/
/* 					<label class="">*/
/* 						<span class="visually-hidden">Введите свой e-mail</span>*/
/* 						<input class="question__data" type="email" data-validate-field="e-mail" name="Емейл" placeholder="Введите свой e-mail" required="">*/
/* 					</label>*/
/* 					<label class="">*/
/* 						<span class="visually-hidden">Введите свой телефон</span>*/
/* 						<input class="question__data" type="tel" data-validate-field="tel" name="Телефон" placeholder="Введите свой телефон" required="" inputmode="text">*/
/* 					</label>*/
/* 					<div class="select-wrapper">*/
/* 						<label class="select-label">*/
/* 							<span class="visually-hidden">Выбрать услугу</span>*/
/* 							<select class="question__data" name="Услуга">*/
/* 								<option value="любая">Любая услуга</option>*/
/* 								<option value="Инженерно-геологические изыскания">Инженерно-геологические изыскания*/
/* 								</option>*/
/* 								<option value="Инженерно-геодезические изыскания">Инженерно-геодезические изыскания*/
/* 								</option>*/
/* 								<option value="Геотехнические изыскания">Геотехнические изыскания</option>*/
/* 								<option value="Геодезическое сопровождение строительства">Геодезическое*/
/* 									сопровождение строительства</option>*/
/* 								<option value="Аэрофотосъемка местности">Аэрофотосъемка местности</option>*/
/* 								<option value="Обследование зданий и сооружений">Обследование зданий*/
/* 									и&nbsp;сооружений</option>*/
/* 								<option value="Работа с ГБУ «Мосгоргеотрест»">Работа с&nbsp;ГБУ*/
/* 									«Мосгоргеотрест»</option>*/
/* 								<option value="Работа с «МосгорБТИ»">Работа с&nbsp;«МосгорБТИ»</option>*/
/* 							</select>*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="question__btn-box">*/
/* 					<button class="question__btn btn-main btn btn-reset" type="submit">Отправить</button>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</section>*/
/* </main>*/
/* */
/* {% include 'footer' %}*/
