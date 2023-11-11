<?php

/* footer */
class __TwigTemplate_76b6287ef9174413b9cc6cbcd236221b90d285939b609d2dfd6411ed19bd011c extends TwigBridge\Twig\Template
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
        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<footer class=\"footer\">
    <div class=\"container\">
\t\t";
        // line 3
        if ( !(isset($context["noMap"]) ? $context["noMap"] : null)) {
            // line 4
            echo "        <div class=\"footer__map-container\">
            <div class=\"footer__map\">
                <iframe
                    src=\"https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;um=constructor%3Ac672d2161cb5833624902689373be9fd1864c205e219afaba6ec3b8b245426db\"
                    frameborder=\"0\"
                    allowfullscreen=\"true\"
                    width=\"100%\"
                    height=\"100%\"
                    style=\"display: block;\"
                ></iframe>
            </div>
            <div class=\"footer__content\">
                <div class=\"footer__body\">
                    <h2 class=\"footer__title\">
                        Контактные данные
                    </h2>
                    <p class=\"footer__sub-title\">
                        ООО «Вершина-инженерные изыскания»
                    </p>
                    <p class=\"footer__adress\">
                        109316, г. Москва, Волгоградский пр-кт, 2
                    </p>

                    <a class=\"footer__mail\" href=\"mailto:info@v-es.ru\"> info@v-es.ru </a>

                    <a class=\"footer__number\" href=\"tel:74956376109\"> 8 (495) 637-61-09 </a>
                </div>
            </div>
        </div>
\t\t";
        }
        // line 34
        echo "        <div class=\"footer__box\">
            <p class=\"footer__copywriting\">
                ©&nbsp;Все права защищены, Вершина-Инженерные изыскания, 2022.
            </p>
            <a class=\"footer__link\" href=\"#\">
                Обработка персональных данных
            </a>
        </div>
    </div>
</footer>

<div class=\"modal\" style=\"--transition-time: 0.2s;\">
    <div class=\"modal__container\" data-target=\"callback\">
        <button class=\"modal-close\">×</button>
        <div class=\"modal__content\">
            <form action=\"../mail.php\" enctype=\"multipart/form-data\" class=\"\" method=\"POST\">
                <input type=\"hidden\" name=\"form_subject\" value=\"Заявка\" />
                <input type=\"hidden\" name=\"admin_email[]\" value=\"info@v-es.ru\" />
                <h2 class=\"form__title title-medium\">Оставить заявку</h2>
                <p class=\"form__text\">
                    Заполните форму, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.
                </p>
                <label class=\"form-label\">
                    <span class=\"visually-hidden\">Введите имя</span>
                    <input class=\"form__data\" type=\"text\" name=\"Имя\" placeholder=\"Ваше имя\" />
                </label>
                <label class=\"form-label\">
                    <span class=\"visually-hidden\">Введите телефон</span>
                    <input class=\"form__data\" type=\"tel\" name=\"Телефон\" placeholder=\"Ваш телефон\" required=\"\" inputmode=\"text\" />
                </label>
                <label class=\"form-label\">
                    <span class=\"visually-hidden\">Введите емейл</span>
                    <input class=\"form__data\" type=\"email\" name=\"Емейл\" placeholder=\"Ваш e-mail\" required=\"\" />
                </label>
                <label class=\"form-label\">
                    <span class=\"visually-hidden\">Введите комменатрий</span>
                    <textarea class=\"form__entry form__data\" name=\"Комментарий\" placeholder=\"Комментарий к заявке (необязательно)\"></textarea>
                </label>

                <button class=\"form__button btn btn-main btn-reset\" type=\"submit\">Отправить</button>
                <p class=\"form__agreement\">
                    Нажимая на&nbsp;кнопку «Отправить», вы&nbsp;даёте согласие на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь с&nbsp;политикой конфиденциальности
                </p>
            </form>
        </div>
    </div>
\t<div class=\"modal__container\" data-target=\"login\">
        <button class=\"modal-close\">×</button>
        <div class=\"modal__content\">
            <form action=\"/auth/login\" class=\"auth js-auth-form\" method=\"post\">
\t\t\t\t<h2 class=\"form__title title-medium\">Вход в ЛК</h2>
\t\t\t\t<div class=\"form__wrapper\">
\t\t\t\t\t<label class=\"form-label\">\t
\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"login\" placeholder=\"Логин\" type=\"text\" value=\"\">
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"password\" placeholder=\"Пароль\" type=\"password\">
\t\t\t\t\t</label>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button class=\"form__button btn btn-main btn-reset\" type=\"submit\">Войти</button>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group hidden\">
\t\t\t\t\t\t<a href=\"#\" class=\"mbtn mbtn--flat js-reg\">Зарегистрироваться</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group hidden\">
\t\t\t\t\t\t<a href=\"#\" class=\"mbtn mbtn--flat js-pas\">Забыли пароль?</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
        </div>
    </div>
\t<div class=\"modal__container\" data-target=\"reg\">
        <button class=\"modal-close\">×</button>
        <div class=\"modal__content\">
            <form action=\"/register\" class=\"auth js-reg-form\" method=\"post\">
\t\t\t\t<h2 class=\"form__title title-medium\">Регистрация</h2>
\t\t\t\t<div class=\"form__wrapper\">
\t\t\t\t\t<label class=\"form-label\">\t
\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"login\" placeholder=\"Логин\" type=\"text\" value=\"\">
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"email\" placeholder=\"E-mail\" required=\"\" type=\"email\" value=\"\">
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"password\" placeholder=\"Пароль\" type=\"password\">
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"password_confirmation\" placeholder=\"Подтверждение\" type=\"password\">
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button class=\"form__button btn btn-main btn-reset\" type=\"submit\">Зарегистрироваться</button>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group hidden\">
\t\t\t\t\t\t<a href=\"#\" class=\"mbtn mbtn--flat js-pas\">Забыли пароль?</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
        </div>
    </div>
</div>

<!--div class=\"modal\" style=\"--transition-time: 0.2s;\">
    
</div-->


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js\" integrity=\"sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"/site/theme/js/swiper.js\"></script>
<script src=\"/site/theme/js/validate.js\"></script>
<script src=\"/site/theme/js/inputmask.js\"></script>
<script src=\"/site/theme/js/swipercontrol.js\"></script>
<script src=\"/site/theme/js/base1.js\"></script>
<script src=\"/site/theme/js/main1.js\"></script>";
    }

    public function getTemplateName()
    {
        return "footer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <footer class="footer">*/
/*     <div class="container">*/
/* 		{% if not noMap %}*/
/*         <div class="footer__map-container">*/
/*             <div class="footer__map">*/
/*                 <iframe*/
/*                     src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;um=constructor%3Ac672d2161cb5833624902689373be9fd1864c205e219afaba6ec3b8b245426db"*/
/*                     frameborder="0"*/
/*                     allowfullscreen="true"*/
/*                     width="100%"*/
/*                     height="100%"*/
/*                     style="display: block;"*/
/*                 ></iframe>*/
/*             </div>*/
/*             <div class="footer__content">*/
/*                 <div class="footer__body">*/
/*                     <h2 class="footer__title">*/
/*                         Контактные данные*/
/*                     </h2>*/
/*                     <p class="footer__sub-title">*/
/*                         ООО «Вершина-инженерные изыскания»*/
/*                     </p>*/
/*                     <p class="footer__adress">*/
/*                         109316, г. Москва, Волгоградский пр-кт, 2*/
/*                     </p>*/
/* */
/*                     <a class="footer__mail" href="mailto:info@v-es.ru"> info@v-es.ru </a>*/
/* */
/*                     <a class="footer__number" href="tel:74956376109"> 8 (495) 637-61-09 </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* 		{% endif %}*/
/*         <div class="footer__box">*/
/*             <p class="footer__copywriting">*/
/*                 ©&nbsp;Все права защищены, Вершина-Инженерные изыскания, 2022.*/
/*             </p>*/
/*             <a class="footer__link" href="#">*/
/*                 Обработка персональных данных*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <div class="modal" style="--transition-time: 0.2s;">*/
/*     <div class="modal__container" data-target="callback">*/
/*         <button class="modal-close">×</button>*/
/*         <div class="modal__content">*/
/*             <form action="../mail.php" enctype="multipart/form-data" class="" method="POST">*/
/*                 <input type="hidden" name="form_subject" value="Заявка" />*/
/*                 <input type="hidden" name="admin_email[]" value="info@v-es.ru" />*/
/*                 <h2 class="form__title title-medium">Оставить заявку</h2>*/
/*                 <p class="form__text">*/
/*                     Заполните форму, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.*/
/*                 </p>*/
/*                 <label class="form-label">*/
/*                     <span class="visually-hidden">Введите имя</span>*/
/*                     <input class="form__data" type="text" name="Имя" placeholder="Ваше имя" />*/
/*                 </label>*/
/*                 <label class="form-label">*/
/*                     <span class="visually-hidden">Введите телефон</span>*/
/*                     <input class="form__data" type="tel" name="Телефон" placeholder="Ваш телефон" required="" inputmode="text" />*/
/*                 </label>*/
/*                 <label class="form-label">*/
/*                     <span class="visually-hidden">Введите емейл</span>*/
/*                     <input class="form__data" type="email" name="Емейл" placeholder="Ваш e-mail" required="" />*/
/*                 </label>*/
/*                 <label class="form-label">*/
/*                     <span class="visually-hidden">Введите комменатрий</span>*/
/*                     <textarea class="form__entry form__data" name="Комментарий" placeholder="Комментарий к заявке (необязательно)"></textarea>*/
/*                 </label>*/
/* */
/*                 <button class="form__button btn btn-main btn-reset" type="submit">Отправить</button>*/
/*                 <p class="form__agreement">*/
/*                     Нажимая на&nbsp;кнопку «Отправить», вы&nbsp;даёте согласие на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь с&nbsp;политикой конфиденциальности*/
/*                 </p>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* 	<div class="modal__container" data-target="login">*/
/*         <button class="modal-close">×</button>*/
/*         <div class="modal__content">*/
/*             <form action="/auth/login" class="auth js-auth-form" method="post">*/
/* 				<h2 class="form__title title-medium">Вход в ЛК</h2>*/
/* 				<div class="form__wrapper">*/
/* 					<label class="form-label">	*/
/* 						<input class="form__data form-control" name="login" placeholder="Логин" type="text" value="">*/
/* 					</label>*/
/* 					<label class="form-label">*/
/* 						<input class="form__data form-control" name="password" placeholder="Пароль" type="password">*/
/* 					</label>*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<button class="form__button btn btn-main btn-reset" type="submit">Войти</button>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group hidden">*/
/* 						<a href="#" class="mbtn mbtn--flat js-reg">Зарегистрироваться</a>*/
/* 					</div>*/
/* 					<div class="form-group hidden">*/
/* 						<a href="#" class="mbtn mbtn--flat js-pas">Забыли пароль?</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/*         </div>*/
/*     </div>*/
/* 	<div class="modal__container" data-target="reg">*/
/*         <button class="modal-close">×</button>*/
/*         <div class="modal__content">*/
/*             <form action="/register" class="auth js-reg-form" method="post">*/
/* 				<h2 class="form__title title-medium">Регистрация</h2>*/
/* 				<div class="form__wrapper">*/
/* 					<label class="form-label">	*/
/* 						<input class="form__data form-control" name="login" placeholder="Логин" type="text" value="">*/
/* 					</label>*/
/* 					<label class="form-label">*/
/* 						<input class="form__data form-control" name="email" placeholder="E-mail" required="" type="email" value="">*/
/* 					</label>*/
/* 					<label class="form-label">*/
/* 						<input class="form__data form-control" name="password" placeholder="Пароль" type="password">*/
/* 					</label>*/
/* 					<label class="form-label">*/
/* 						<input class="form__data form-control" name="password_confirmation" placeholder="Подтверждение" type="password">*/
/* 					</label>*/
/* 					<div class="form-group">*/
/* 						<button class="form__button btn btn-main btn-reset" type="submit">Зарегистрироваться</button>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group hidden">*/
/* 						<a href="#" class="mbtn mbtn--flat js-pas">Забыли пароль?</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!--div class="modal" style="--transition-time: 0.2s;">*/
/*     */
/* </div-->*/
/* */
/* */
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>*/
/* <script src="/site/theme/js/swiper.js"></script>*/
/* <script src="/site/theme/js/validate.js"></script>*/
/* <script src="/site/theme/js/inputmask.js"></script>*/
/* <script src="/site/theme/js/swipercontrol.js"></script>*/
/* <script src="/site/theme/js/base1.js"></script>*/
/* <script src="/site/theme/js/main1.js"></script>*/
