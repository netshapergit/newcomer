<?php

/* layouts.services */
class __TwigTemplate_e8f97688a848163ee4720d1f0dd7ca39b1b06db4b75896a56c73141942373c26 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "set" => 17, "for" => 37, "if" => 50);
        $filters = array("escape" => 27, "length" => 27);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'set', 'for', 'if'),
                array('escape', 'length'),
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
        $this->loadTemplate("header", "layouts.services", 1)->display($context);
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
\t\t\t\t<a class=\"breadcrumbs__current\" itemprop=\"item\" href=\"#\">
\t\t\t\t\t<span itemprop=\"name\">Наши услуги</span></a>
\t\t\t\t<meta itemprop=\"position\" content=\"2\">
\t\t\t</li>
\t\t</ol>
\t</div>
\t";
        // line 17
        $context["items"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array());
        // line 18
        echo "\t
\t<section class=\"service\">
\t\t<div class=\"container\">
\t\t\t<div class=\"service__number-box\">
\t\t\t\t<h1 class=\"service__title title\">
\t\t\t\t\tНаши услуги
\t\t\t\t</h1>
\t\t\t\t<span class=\"service__number\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)), "html", null, true));
        echo "
\t\t\t\t\t
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<p class=\"service__descr\">
\t\t\t\tПрофессиональные сотрудники с
\t\t\t\tопытом выполняют задачи точно, качественно и&nbsp;в&nbsp;срок
\t\t\t</p>
\t\t\t<ul class=\"service__list list-reset\">
\t\t\t
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t<div class=\"service__body\">
\t\t\t\t\t\t<div class=\"service__img-box\">
\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t\t\t<img class=\"service__img\" src=\"/site/data/images/large/";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_image", array()), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_header", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"service__content\">
\t\t\t\t\t\t\t<h2><a href=\"";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_header", array()), "html", null, true));
            echo "</a></h2>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_summary", array()), "html", null, true));
            echo "</p><Br>
\t\t\t\t\t\t\t<div style=\"display:flex; align-items:center;justify-content:space-between;\">
\t\t\t\t\t\t\t\t";
            // line 50
            if ($this->getAttribute($context["item"], "field_price", array())) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<p style=\"font-size:20px;\"><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_price", array()), "html", null, true));
                echo " ₽</b></p>
\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\" class=\"btn__header btn-reset pc-btn\">Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t";
        // line 180
        echo "\t\t\t\t
\t\t\t</ul>
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
\t\t\t\t\t\tЗаполните форму обратной связи, и&nbsp;мы&nbsp;свяжемся с&nbsp;Вами, чтобы ответить на&nbsp;все вопросы
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"question__boby\">
\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Введите свое имя</span>
\t\t\t\t\t\t<input class=\"question__data\" type=\"text\" name=\"Имя\" placeholder=\"Введите свое имя\">
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Введите свой e-mail</span>
\t\t\t\t\t\t<input class=\"question__data\" type=\"email\" name=\"Емейл\" placeholder=\"Введите свой e-mail\" required=\"\">
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
\t\t\t\t\t\t\t\t<option value=\"Обследование зданий и сооружений\">Обследование зданий и&nbsp;сооружений
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t<option value=\"Работа с ГБУ «Мосгоргеотрест»\">Работа с&nbsp;ГБУ «Мосгоргеотрест»</option>
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

";
        // line 244
        $this->loadTemplate("footer", "layouts.services", 244)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.services";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 244,  145 => 180,  143 => 59,  130 => 53,  124 => 51,  122 => 50,  117 => 48,  110 => 46,  101 => 42,  97 => 41,  92 => 38,  88 => 37,  75 => 27,  64 => 18,  62 => 17,  45 => 2,  43 => 1,);
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
/* 				<a class="breadcrumbs__current" itemprop="item" href="#">*/
/* 					<span itemprop="name">Наши услуги</span></a>*/
/* 				<meta itemprop="position" content="2">*/
/* 			</li>*/
/* 		</ol>*/
/* 	</div>*/
/* 	{% set items = page.active_sub_pages %}*/
/* 	*/
/* 	<section class="service">*/
/* 		<div class="container">*/
/* 			<div class="service__number-box">*/
/* 				<h1 class="service__title title">*/
/* 					Наши услуги*/
/* 				</h1>*/
/* 				<span class="service__number">*/
/* 					*/
/* 					{$ items|length $}*/
/* 					*/
/* 				</span>*/
/* 			</div>*/
/* 			<p class="service__descr">*/
/* 				Профессиональные сотрудники с*/
/* 				опытом выполняют задачи точно, качественно и&nbsp;в&nbsp;срок*/
/* 			</p>*/
/* 			<ul class="service__list list-reset">*/
/* 			*/
/* 				{% for item in items %}*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<a href="{$ item.path $}">*/
/* 								<img class="service__img" src="/site/data/images/large/{$ item.field_image $}" alt="{$ item.field_header $}">*/
/* 							</a>*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2><a href="{$ item.path $}">{$ item.field_header $}</a></h2>*/
/* 							*/
/* 							<p>{$ item.field_summary $}</p><Br>*/
/* 							<div style="display:flex; align-items:center;justify-content:space-between;">*/
/* 								{% if item.field_price %}*/
/* 								<p style="font-size:20px;"><b>{$ item.field_price $} ₽</b></p>*/
/* 								{% endif %}*/
/* 								<a href="{$ item.path $}" class="btn__header btn-reset pc-btn">Подробнее</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				{% endfor %}*/
/* 				{#*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<img class="service__img" src="/site/theme/images/2013598.jpg" alt="Инженерно-геодезические изыскания">*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2>*/
/* 								Инженерно-геодезические изыскания								</h2>*/
/* 							<p>*/
/* 								</p><p>Комплекс работ по составлению топографического плана разных масштабов для проектирования зданий и сооружений</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				*/
/* 					*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<img class="service__img" src="/site/theme/images/1916050.jpg" alt="Геотехнический мониторинг">*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2>*/
/* 								Геотехнический мониторинг								</h2>*/
/* 							<p>*/
/* 								</p><p>Комплекс наблюдений за состоянием окружающих и строящихся зданий и сооружений для обеспечения безопасности строительства</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				*/
/* 					*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<img class="service__img" src="/site/theme/images/187624.jpg" alt="Геотехнические изыскания">*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2>*/
/* 								Геотехнические изыскания								</h2>*/
/* 							<p>*/
/* 								</p><p>Мероприятия по изучению свойств грунтовых массивов, оценка влияния строительства, оценка устойчивости</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				*/
/* 					*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<img class="service__img" src="/site/theme/images/1717371.jpg" alt="Геодезическое сопровождение строительства">*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2>*/
/* 								Геодезическое сопровождение строительства								</h2>*/
/* 							<p>*/
/* 								</p><p>Комплекс измерений, вычислений и&nbsp;построений в&nbsp;чертежах и&nbsp;натуре обеспечивающий правильное и точное размещение зданий</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				*/
/* 					*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<img class="service__img" src="/site/theme/images/1627320.jpg" alt="Аэрофотосъемка местности">*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2>*/
/* 								Аэрофотосъемка местности								</h2>*/
/* 							<p>*/
/* 								</p><p>Фото территории или объекта при помощи беспилотного летательного аппарата для получения ортофотоплана или мониторинга за ходом СМР</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				*/
/* 					*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<img class="service__img" src="/site/theme/images/1515163.jpg" alt="Обследование зданий и сооружений">*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2>*/
/* 								Обследование зданий и сооружений								</h2>*/
/* 							<p>*/
/* 								</p><p>Комплекс работ по оценке технического состояния строительных конструкций для реконструкции, демонтажа, оценки влияния нового строительства</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				*/
/* 					*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<img class="service__img" src="/site/theme/images/145788.jpg" alt="Работа с ГБУ «Мосгоргеотрест»">*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2>*/
/* 								Работа с ГБУ «Мосгоргеотрест»								</h2>*/
/* 							<p>*/
/* 								</p><p>Организация сотрудничества "под ключ": заключение договоров, документооборот, осуществление вызовов, сопровождение исполнительной документации, загрузки, получение согласований</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				*/
/* 					*/
/* 				<li class="service__item">*/
/* 					<div class="service__body">*/
/* 						<div class="service__img-box">*/
/* 							<img class="service__img" src="/site/theme/images/1314832.jpg" alt="Работа с «МосгорБТИ»">*/
/* 						</div>*/
/* 						<div class="service__content">*/
/* 							<h2>*/
/* 								Работа с «МосгорБТИ»								</h2>*/
/* 							<p>*/
/* 								</p><p>Организация сотрудничества "под ключ": заключение договора, документооборот, организация работ на объекте, корректировка проектной документации, контроль технической инвентаризации, контроль кадастровых работ</p>								<p></p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 				*/
/* 				#}*/
/* 				*/
/* 			</ul>*/
/* 		</div>*/
/* 	</section>*/
/* */
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
/* 						Заполните форму обратной связи, и&nbsp;мы&nbsp;свяжемся с&nbsp;Вами, чтобы ответить на&nbsp;все вопросы*/
/* 					</p>*/
/* 				</div>*/
/* 				<div class="question__boby">*/
/* 					<label class="">*/
/* 						<span class="visually-hidden">Введите свое имя</span>*/
/* 						<input class="question__data" type="text" name="Имя" placeholder="Введите свое имя">*/
/* 					</label>*/
/* 					<label class="">*/
/* 						<span class="visually-hidden">Введите свой e-mail</span>*/
/* 						<input class="question__data" type="email" name="Емейл" placeholder="Введите свой e-mail" required="">*/
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
/* 								<option value="Обследование зданий и сооружений">Обследование зданий и&nbsp;сооружений*/
/* 								</option>*/
/* 								<option value="Работа с ГБУ «Мосгоргеотрест»">Работа с&nbsp;ГБУ «Мосгоргеотрест»</option>*/
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
/* {% include 'footer' %}*/
