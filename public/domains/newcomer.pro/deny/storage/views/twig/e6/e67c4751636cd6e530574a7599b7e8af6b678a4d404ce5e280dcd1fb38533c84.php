<?php

/* layouts.about */
class __TwigTemplate_2cee145bdd82395c38abe382793b077d6f6e1a64916db79b9af85c3074288a16 extends TwigBridge\Twig\Template
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
        $this->loadTemplate("header", "layouts.about", 1)->display($context);
        // line 2
        echo "
<main>
\t<section class=\"about-hero\">
\t\t<div class=\"container\">
\t\t\t<div class=\"about-hero__box\">
\t\t\t\t<ol class=\"breadcrumbs list-reset\" itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t\t\t<li itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
\t\t\t\t\t\t<a class=\"breadcrumbs__link\" itemprop=\"item\" href=\"/\">
\t\t\t\t\t\t\t<span itemprop=\"name\">Главная</span></a>
\t\t\t\t\t\t<meta itemprop=\"position\" content=\"1\">
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"\" itemprop=\"itemListElement\" itemscope=\"\" itemtype=\"http://schema.org/ListItem\">
\t\t\t\t\t\t<a class=\"breadcrumbs__current\" itemprop=\"item\" href=\"#\">
\t\t\t\t\t\t\t<span itemprop=\"name\">О&nbsp;компании</span></a>
\t\t\t\t\t\t<meta itemprop=\"position\" content=\"2\">
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t\t<h1 class=\"about-hero__title\">
\t\t\t\t\tООО «Вершина-Инженерные изыскания»
\t\t\t\t</h1>




\t\t\t\t<div class=\"about-hero__content\">
\t\t\t\t\t<p>ООО \"Вершина-Инженерные изыскания\" выполняет все виды инженерных изысканий для обеспечения исходными данными проектных работ и&nbsp;работы по&nbsp;сопровождению строительства. Мы&nbsp;имеем все необходимые СРО, оборудование и&nbsp;специалистов для реализации задач любой сложности в поставленные сроки. Будем рады видеть Вас среди наших клиентов!</p>\t\t\t\t\t</div>
\t\t\t\t<p class=\"about-hero__special\">
\t\t\t\t\tДостигайте вершин вместе с нами!\t\t\t\t\t</p>




\t\t\t</div>
\t\t</div>
\t\t<div class=\"about-hero__img-box\">
\t\t\t<img class=\"about-hero__img\" src=\"/site/theme/images/about_hero_bg.jpg\" alt=\"\">
\t\t</div>

\t</section>
\t<div class=\"regalia\">
\t\t<div class=\"container\">
\t\t\t<div class=\"regalia__wrapper\">
\t\t\t\t<ul class=\"about__list regalia-list list-reset\">
\t\t\t\t\t<li class=\"regalia__item\">
\t\t\t\t\t\t<div class=\"regalia__title\">
\t\t\t\t\t\t\t200+
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"regalia__text\">
\t\t\t\t\t\t\tреализованных <br>
\t\t\t\t\t\t\tпроектов в&nbsp;2021-2022
\t\t\t\t\t\t</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"regalia__item\">
\t\t\t\t\t\t<div class=\"regalia__title\">
\t\t\t\t\t\t\t50+
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"regalia__text\">
\t\t\t\t\t\t\tобъектов введено <br>
\t\t\t\t\t\t\tв&nbsp;эксплуатацию
\t\t\t\t\t\t</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"regalia__item\">
\t\t\t\t\t\t<div class=\"regalia__title\">
\t\t\t\t\t\t\t40+
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"regalia__text\">
\t\t\t\t\t\t\tобъектов в&nbsp;работе
\t\t\t\t\t\t</p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<section class=\"team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"team__top-box\">
\t\t\t\t<h2 class=\"team__title title\">
\t\t\t\t\tНаша команда
\t\t\t\t</h2>
\t\t\t\t<div class=\"team__btn-box\">
\t\t\t\t\t<div class=\"swiper-button-prev team-prev swiper-button-disabled\" tabindex=\"-1\" role=\"button\" aria-label=\"Previous slide\" aria-controls=\"swiper-wrapper-ff279a3703efe989\" aria-disabled=\"true\"></div>
\t\t\t\t\t<div class=\"swiper-button-next team-next\" tabindex=\"0\" role=\"button\" aria-label=\"Next slide\" aria-controls=\"swiper-wrapper-ff279a3703efe989\" aria-disabled=\"false\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"swiper swiper-container team-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden\">
\t\t\t\t<div class=\"swiper-wrapper\" id=\"swiper-wrapper-ff279a3703efe989\" aria-live=\"polite\" style=\"transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);\">



\t\t\t\t\t<div class=\"swiper-slide swiper-slide-visible swiper-slide-active\" style=\"width: 273px; margin-right: 24px;\" role=\"group\" aria-label=\"1 / 6\">
\t\t\t\t\t\t<div class=\"team-slider__img-box\">
\t\t\t\t\t\t\t<img class=\"team-slider__img\" src=\"/site/theme/images/2519189.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-slider__content\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tАлексей Быкадоров\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tГенеральный директор\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Руководитель компании. Отвечает за организацию работы команды, достижение kpi, взаимодействие с органами власти и заказчиками. Контролирует согласовательные процессы, соблюдение сроков и экономическую эффективность. Курирует создание собственной ГИС системы.&nbsp;<br>&nbsp;</p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"swiper-slide swiper-slide-visible swiper-slide-next\" style=\"width: 273px; margin-right: 24px;\" role=\"group\" aria-label=\"2 / 6\">
\t\t\t\t\t\t<div class=\"team-slider__img-box\">
\t\t\t\t\t\t\t<img class=\"team-slider__img\" src=\"/site/theme/images/2426099.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-slider__content\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tМаксим Овсянников\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tГлавный инженер\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Занимается организацией инженерных изысканий, отвечает за взаимодействие с заказчиком и экспертизой, контролирует качество и эффективность деятельности команды.&nbsp;<br>&nbsp;</p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"swiper-slide swiper-slide-visible\" style=\"width: 273px; margin-right: 24px;\" role=\"group\" aria-label=\"3 / 6\">
\t\t\t\t\t\t<div class=\"team-slider__img-box\">
\t\t\t\t\t\t\t<img class=\"team-slider__img\" src=\"/site/theme/images/2322360.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-slider__content\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tИван Сас\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tНачальник отдела\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Руководит выполнением обследований зданий и сооружений, геотехнических расчетов, организует слаженную и эффективную работу отдела.&nbsp;<br>&nbsp;</p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"swiper-slide swiper-slide-visible\" style=\"width: 273px; margin-right: 24px;\" role=\"group\" aria-label=\"4 / 6\">
\t\t\t\t\t\t<div class=\"team-slider__img-box\">
\t\t\t\t\t\t\t<img class=\"team-slider__img\" src=\"/site/theme/images/2217482.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-slider__content\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tАнна Кузьмина\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tВедущий инженер по обследованиям\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Выполняет обследования зданий и сооружений, отвечает за подготовку отчетов, поверочные расчеты, подсчет объемов и защиту в Мосгосэкспертизе.&nbsp;<br>&nbsp;</p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"swiper-slide\" style=\"width: 273px; margin-right: 24px;\" role=\"group\" aria-label=\"5 / 6\">
\t\t\t\t\t\t<div class=\"team-slider__img-box\">
\t\t\t\t\t\t\t<img class=\"team-slider__img\" src=\"/site/theme/images/217388.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-slider__content\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tАлександра Ковалева\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tИнженер-геолог\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Занимается организацией геологических работ, гидрографическими расчетами, составляет отчеты по инженерно-геологическим изысканиям, защищает материалы в Мосгосэкспертизе.&nbsp;<br>&nbsp;</p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"swiper-slide\" style=\"width: 273px; margin-right: 24px;\" role=\"group\" aria-label=\"6 / 6\">
\t\t\t\t\t\t<div class=\"team-slider__img-box\">
\t\t\t\t\t\t\t<img class=\"team-slider__img\" src=\"/site/theme/images/2015205.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-slider__content\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tДмитрий Толмачев\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tСтарший инженер-геодезист\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Отвечает за организацию полевых геодезических работ, работ по сопровождению строительства и аэрофотосъемке.</p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>





\t\t\t\t</div>
\t\t\t<span class=\"swiper-notification\" aria-live=\"assertive\" aria-atomic=\"true\"></span></div>
\t\t</div>
\t</section>
\t<section class=\"history\">
\t\t<div class=\"container\">
\t\t\t<div class=\"history__box\">
\t\t\t\t<h2 class=\"history__title title\">
\t\t\t\t\tНаша философия
\t\t\t\t</h2>
\t\t\t\t<div class=\"history__date-box\">

\t\t\t\t\t<button class=\"history__btn btn-reset active\" data-tab=\"#tab_1\">1</button>

\t\t\t\t\t\t\t<button class=\"history__btn btn-reset\" data-tab=\"#tab_2\">2</button>

\t\t\t\t\t\t\t<button class=\"history__btn btn-reset\" data-tab=\"#tab_3\">3</button>



\t\t\t\t</div>





\t\t\t\t<div class=\"history__list active\" id=\"tab_1\">
\t\t\t\t\t<div class=\"history__wrapper\">
\t\t\t\t\t\t<div class=\"history__img-box\">
\t\t\t\t\t\t\t<img class=\"history__img\" src=\"/site/theme/images/143547.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"history__content\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tЧестность и качество\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tЧтобы быть на вершине - необходимо быть лучшим. Именно поэтому наши основные принципы - это профессионализм, качество работ, ответственность и честность. \t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Мы соотносим наши действия с нашими словами и честно выполняем свои обещания. Нам крайне важна качественная реализация заказанных нам работ, поэтому весь процесс вплоть до мельчайших деталей курируется непосредственно руководством компании. &nbsp;</p><p>Мы строим репутацию нашей компании через доверие!</p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>



\t\t\t\t<div class=\"history__list\" id=\"tab_2\">
\t\t\t\t\t<div class=\"history__wrapper\">
\t\t\t\t\t\t<div class=\"history__img-box\">
\t\t\t\t\t\t\t<img class=\"history__img\" src=\"/site/theme/images/1712955.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"history__content\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tИндивидуальная проработка каждого объекта \t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tКаждый проект - уникален, по этому мы индивидуально прорабатываем и предлагаем подходящее решение именно для этого объекта.\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Нам доверяют крупные государственные заказчики, и мы всегда оправдываем оказанное доверие.</p><p>&nbsp;</p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>



\t\t\t\t<div class=\"history__list\" id=\"tab_3\">
\t\t\t\t\t<div class=\"history__wrapper\">
\t\t\t\t\t\t<div class=\"history__img-box\">
\t\t\t\t\t\t\t<img class=\"history__img\" src=\"/site/theme/images/1821044.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"history__content\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tДолгосрочное сотрудничество и партнерство\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tУчаствуя в реализации проекта, мы становимся частью команды заказчика, а не просто подрядчиком.  И основная цель команды - обеспечение успеха наших партнёров. \t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t</p><p>Наша цель - долгосрочное сотрудничество на взаимовыгодных условиях, а не разовое получение прибыли.</p><p>Наша команда специалистов готова выполнить все виды инженерных изысканий и работ по сопровождению строительства.</p><p>&nbsp;</p><p><i><strong>Обращаясь к нам, вы получаете уверенность в результате и надёжного партнёра, которому можно доверять!</strong></i></p>\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>




\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"question\">
\t\t<div class=\"container\">
\t\t\t<div class=\"question__img-box\">
\t\t\t\t<img class=\"question__img\" src=\"/site/theme/images/question_img.jpg\" alt=\"\">
\t\t\t</div>
\t\t\t<form action=\"../mail.php\" enctype=\"multipart/form-data\" class=\"question__form\" method=\"POST\">
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
\t\t\t\t\t\t<input class=\"question__data\" type=\"e-mail\" name=\"Емейл\" placeholder=\"Введите свой e-mail\" required=\"\">
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Введите свой телефон</span>
\t\t\t\t\t\t<input class=\"question__data\" type=\"tel\" name=\"Телефон\" placeholder=\"Введите свой телефон\" required=\"\" inputmode=\"text\">
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"select-wrapper\">
\t\t\t\t\t\t<label class=\"select-label\">
\t\t\t\t\t\t\t<span class=\"visually-hidden\">Выбрать услугу</span>
\t\t\t\t\t\t\t<select class=\"question__data \">
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
\t\t\t\t\t\t\t\t\tи&nbsp;сооружений
\t\t\t\t\t\t\t\t</option>
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
\t\t\t\t<p class=\"form-text\">
\t\t\t\t\tНажимая кнопку «Отправить», Вы&nbsp;даете согласие на&nbsp;<a class=\"form__personal-link\" href=\"#\">обработку персональных данных</a>
\t\t\t\t</p>
\t\t\t</form>
\t\t</div>
\t</section>
</main>

<script src=\"/site/theme/js/tabs.js\"></script>

";
        // line 337
        $this->loadTemplate("footer", "layouts.about", 337)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.about";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 337,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <main>*/
/* 	<section class="about-hero">*/
/* 		<div class="container">*/
/* 			<div class="about-hero__box">*/
/* 				<ol class="breadcrumbs list-reset" itemscope="" itemtype="http://schema.org/BreadcrumbList">*/
/* 					<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/* 						<a class="breadcrumbs__link" itemprop="item" href="/">*/
/* 							<span itemprop="name">Главная</span></a>*/
/* 						<meta itemprop="position" content="1">*/
/* 					</li>*/
/* 					<li class="" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">*/
/* 						<a class="breadcrumbs__current" itemprop="item" href="#">*/
/* 							<span itemprop="name">О&nbsp;компании</span></a>*/
/* 						<meta itemprop="position" content="2">*/
/* 					</li>*/
/* 				</ol>*/
/* 				<h1 class="about-hero__title">*/
/* 					ООО «Вершина-Инженерные изыскания»*/
/* 				</h1>*/
/* */
/* */
/* */
/* */
/* 				<div class="about-hero__content">*/
/* 					<p>ООО "Вершина-Инженерные изыскания" выполняет все виды инженерных изысканий для обеспечения исходными данными проектных работ и&nbsp;работы по&nbsp;сопровождению строительства. Мы&nbsp;имеем все необходимые СРО, оборудование и&nbsp;специалистов для реализации задач любой сложности в поставленные сроки. Будем рады видеть Вас среди наших клиентов!</p>					</div>*/
/* 				<p class="about-hero__special">*/
/* 					Достигайте вершин вместе с нами!					</p>*/
/* */
/* */
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<div class="about-hero__img-box">*/
/* 			<img class="about-hero__img" src="/site/theme/images/about_hero_bg.jpg" alt="">*/
/* 		</div>*/
/* */
/* 	</section>*/
/* 	<div class="regalia">*/
/* 		<div class="container">*/
/* 			<div class="regalia__wrapper">*/
/* 				<ul class="about__list regalia-list list-reset">*/
/* 					<li class="regalia__item">*/
/* 						<div class="regalia__title">*/
/* 							200+*/
/* 						</div>*/
/* 						<p class="regalia__text">*/
/* 							реализованных <br>*/
/* 							проектов в&nbsp;2021-2022*/
/* 						</p>*/
/* 					</li>*/
/* 					<li class="regalia__item">*/
/* 						<div class="regalia__title">*/
/* 							50+*/
/* 						</div>*/
/* 						<p class="regalia__text">*/
/* 							объектов введено <br>*/
/* 							в&nbsp;эксплуатацию*/
/* 						</p>*/
/* 					</li>*/
/* 					<li class="regalia__item">*/
/* 						<div class="regalia__title">*/
/* 							40+*/
/* 						</div>*/
/* 						<p class="regalia__text">*/
/* 							объектов в&nbsp;работе*/
/* 						</p>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<section class="team">*/
/* 		<div class="container">*/
/* 			<div class="team__top-box">*/
/* 				<h2 class="team__title title">*/
/* 					Наша команда*/
/* 				</h2>*/
/* 				<div class="team__btn-box">*/
/* 					<div class="swiper-button-prev team-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ff279a3703efe989" aria-disabled="true"></div>*/
/* 					<div class="swiper-button-next team-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ff279a3703efe989" aria-disabled="false"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="swiper swiper-container team-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">*/
/* 				<div class="swiper-wrapper" id="swiper-wrapper-ff279a3703efe989" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">*/
/* */
/* */
/* */
/* 					<div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 273px; margin-right: 24px;" role="group" aria-label="1 / 6">*/
/* 						<div class="team-slider__img-box">*/
/* 							<img class="team-slider__img" src="/site/theme/images/2519189.jpg" alt="">*/
/* 						</div>*/
/* 						<div class="team-slider__content">*/
/* 							<h3>*/
/* 								Алексей Быкадоров								</h3>*/
/* 							<div>*/
/* 								Генеральный директор								</div>*/
/* 							<p>*/
/* 								</p><p>Руководитель компании. Отвечает за организацию работы команды, достижение kpi, взаимодействие с органами власти и заказчиками. Контролирует согласовательные процессы, соблюдение сроков и экономическую эффективность. Курирует создание собственной ГИС системы.&nbsp;<br>&nbsp;</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* */
/* */
/* 					<div class="swiper-slide swiper-slide-visible swiper-slide-next" style="width: 273px; margin-right: 24px;" role="group" aria-label="2 / 6">*/
/* 						<div class="team-slider__img-box">*/
/* 							<img class="team-slider__img" src="/site/theme/images/2426099.jpg" alt="">*/
/* 						</div>*/
/* 						<div class="team-slider__content">*/
/* 							<h3>*/
/* 								Максим Овсянников								</h3>*/
/* 							<div>*/
/* 								Главный инженер								</div>*/
/* 							<p>*/
/* 								</p><p>Занимается организацией инженерных изысканий, отвечает за взаимодействие с заказчиком и экспертизой, контролирует качество и эффективность деятельности команды.&nbsp;<br>&nbsp;</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* */
/* */
/* 					<div class="swiper-slide swiper-slide-visible" style="width: 273px; margin-right: 24px;" role="group" aria-label="3 / 6">*/
/* 						<div class="team-slider__img-box">*/
/* 							<img class="team-slider__img" src="/site/theme/images/2322360.jpg" alt="">*/
/* 						</div>*/
/* 						<div class="team-slider__content">*/
/* 							<h3>*/
/* 								Иван Сас								</h3>*/
/* 							<div>*/
/* 								Начальник отдела								</div>*/
/* 							<p>*/
/* 								</p><p>Руководит выполнением обследований зданий и сооружений, геотехнических расчетов, организует слаженную и эффективную работу отдела.&nbsp;<br>&nbsp;</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* */
/* */
/* 					<div class="swiper-slide swiper-slide-visible" style="width: 273px; margin-right: 24px;" role="group" aria-label="4 / 6">*/
/* 						<div class="team-slider__img-box">*/
/* 							<img class="team-slider__img" src="/site/theme/images/2217482.jpg" alt="">*/
/* 						</div>*/
/* 						<div class="team-slider__content">*/
/* 							<h3>*/
/* 								Анна Кузьмина								</h3>*/
/* 							<div>*/
/* 								Ведущий инженер по обследованиям								</div>*/
/* 							<p>*/
/* 								</p><p>Выполняет обследования зданий и сооружений, отвечает за подготовку отчетов, поверочные расчеты, подсчет объемов и защиту в Мосгосэкспертизе.&nbsp;<br>&nbsp;</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* */
/* */
/* 					<div class="swiper-slide" style="width: 273px; margin-right: 24px;" role="group" aria-label="5 / 6">*/
/* 						<div class="team-slider__img-box">*/
/* 							<img class="team-slider__img" src="/site/theme/images/217388.jpg" alt="">*/
/* 						</div>*/
/* 						<div class="team-slider__content">*/
/* 							<h3>*/
/* 								Александра Ковалева								</h3>*/
/* 							<div>*/
/* 								Инженер-геолог								</div>*/
/* 							<p>*/
/* 								</p><p>Занимается организацией геологических работ, гидрографическими расчетами, составляет отчеты по инженерно-геологическим изысканиям, защищает материалы в Мосгосэкспертизе.&nbsp;<br>&nbsp;</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* */
/* */
/* 					<div class="swiper-slide" style="width: 273px; margin-right: 24px;" role="group" aria-label="6 / 6">*/
/* 						<div class="team-slider__img-box">*/
/* 							<img class="team-slider__img" src="/site/theme/images/2015205.jpg" alt="">*/
/* 						</div>*/
/* 						<div class="team-slider__content">*/
/* 							<h3>*/
/* 								Дмитрий Толмачев								</h3>*/
/* 							<div>*/
/* 								Старший инженер-геодезист								</div>*/
/* 							<p>*/
/* 								</p><p>Отвечает за организацию полевых геодезических работ, работ по сопровождению строительства и аэрофотосъемке.</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* */
/* */
/* */
/* */
/* 				</div>*/
/* 			<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<section class="history">*/
/* 		<div class="container">*/
/* 			<div class="history__box">*/
/* 				<h2 class="history__title title">*/
/* 					Наша философия*/
/* 				</h2>*/
/* 				<div class="history__date-box">*/
/* */
/* 					<button class="history__btn btn-reset active" data-tab="#tab_1">1</button>*/
/* */
/* 							<button class="history__btn btn-reset" data-tab="#tab_2">2</button>*/
/* */
/* 							<button class="history__btn btn-reset" data-tab="#tab_3">3</button>*/
/* */
/* */
/* */
/* 				</div>*/
/* */
/* */
/* */
/* */
/* */
/* 				<div class="history__list active" id="tab_1">*/
/* 					<div class="history__wrapper">*/
/* 						<div class="history__img-box">*/
/* 							<img class="history__img" src="/site/theme/images/143547.jpg" alt="">*/
/* 						</div>*/
/* 						<div class="history__content">*/
/* 							<div>*/
/* 								Честность и качество								</div>*/
/* 							<h3>*/
/* 								Чтобы быть на вершине - необходимо быть лучшим. Именно поэтому наши основные принципы - это профессионализм, качество работ, ответственность и честность. 								</h3>*/
/* 							<p>*/
/* 								</p><p>Мы соотносим наши действия с нашими словами и честно выполняем свои обещания. Нам крайне важна качественная реализация заказанных нам работ, поэтому весь процесс вплоть до мельчайших деталей курируется непосредственно руководством компании. &nbsp;</p><p>Мы строим репутацию нашей компании через доверие!</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* */
/* */
/* 				<div class="history__list" id="tab_2">*/
/* 					<div class="history__wrapper">*/
/* 						<div class="history__img-box">*/
/* 							<img class="history__img" src="/site/theme/images/1712955.png" alt="">*/
/* 						</div>*/
/* 						<div class="history__content">*/
/* 							<div>*/
/* 								Индивидуальная проработка каждого объекта 								</div>*/
/* 							<h3>*/
/* 								Каждый проект - уникален, по этому мы индивидуально прорабатываем и предлагаем подходящее решение именно для этого объекта.								</h3>*/
/* 							<p>*/
/* 								</p><p>Нам доверяют крупные государственные заказчики, и мы всегда оправдываем оказанное доверие.</p><p>&nbsp;</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* */
/* */
/* 				<div class="history__list" id="tab_3">*/
/* 					<div class="history__wrapper">*/
/* 						<div class="history__img-box">*/
/* 							<img class="history__img" src="/site/theme/images/1821044.jpg" alt="">*/
/* 						</div>*/
/* 						<div class="history__content">*/
/* 							<div>*/
/* 								Долгосрочное сотрудничество и партнерство								</div>*/
/* 							<h3>*/
/* 								Участвуя в реализации проекта, мы становимся частью команды заказчика, а не просто подрядчиком.  И основная цель команды - обеспечение успеха наших партнёров. 								</h3>*/
/* 							<p>*/
/* 								</p><p>Наша цель - долгосрочное сотрудничество на взаимовыгодных условиях, а не разовое получение прибыли.</p><p>Наша команда специалистов готова выполнить все виды инженерных изысканий и работ по сопровождению строительства.</p><p>&nbsp;</p><p><i><strong>Обращаясь к нам, вы получаете уверенность в результате и надёжного партнёра, которому можно доверять!</strong></i></p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* */
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<section class="question">*/
/* 		<div class="container">*/
/* 			<div class="question__img-box">*/
/* 				<img class="question__img" src="/site/theme/images/question_img.jpg" alt="">*/
/* 			</div>*/
/* 			<form action="../mail.php" enctype="multipart/form-data" class="question__form" method="POST">*/
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
/* 						<input class="question__data" type="e-mail" name="Емейл" placeholder="Введите свой e-mail" required="">*/
/* 					</label>*/
/* 					<label class="">*/
/* 						<span class="visually-hidden">Введите свой телефон</span>*/
/* 						<input class="question__data" type="tel" name="Телефон" placeholder="Введите свой телефон" required="" inputmode="text">*/
/* 					</label>*/
/* 					<div class="select-wrapper">*/
/* 						<label class="select-label">*/
/* 							<span class="visually-hidden">Выбрать услугу</span>*/
/* 							<select class="question__data ">*/
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
/* 									и&nbsp;сооружений*/
/* 								</option>*/
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
/* 				<p class="form-text">*/
/* 					Нажимая кнопку «Отправить», Вы&nbsp;даете согласие на&nbsp;<a class="form__personal-link" href="#">обработку персональных данных</a>*/
/* 				</p>*/
/* 			</form>*/
/* 		</div>*/
/* 	</section>*/
/* </main>*/
/* */
/* <script src="/site/theme/js/tabs.js"></script>*/
/* */
/* {% include 'footer' %}*/
