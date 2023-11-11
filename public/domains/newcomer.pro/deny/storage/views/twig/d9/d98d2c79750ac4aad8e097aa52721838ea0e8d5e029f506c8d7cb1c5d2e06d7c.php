<?php

/* footer */
class __TwigTemplate_a450f592d9b77739b8695906748abbfa67e5747a0dbbc0e7881b9ca1072bdcad extends TwigBridge\Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
\t\t
        <div class=\"footer__box\">
            <p class=\"footer__copywriting\">
                
            </p>
            <a class=\"footer__link\" href=\"#\">
\t\t\t\t
            </a>
        </div>
    </div>
</footer>

<div class=\"modal\" data-modal=\"login\">
\t<div class=\"modal__container\">
        <button class=\"modal-close\">×</button>
        <div class=\"modal__content\">
            <form action=\"/auth/login\" class=\"auth js-auth-form\" method=\"post\">
\t\t\t\t<h2 class=\"form__title title-medium\">Вход в ЛК</h2>
\t\t\t\t<div>
\t\t\t\t\t<button class=\"js-test-auth\" type=\"button\" data-login=\"admin\" data-password=\"12345678\">admin</button>
\t\t\t\t\t<button class=\"js-test-auth\" type=\"button\" data-login=\"teacher\" data-password=\"12345678\">teacher</button>
\t\t\t\t\t<button class=\"js-test-auth\" type=\"button\" data-login=\"student\" data-password=\"12345678\">student</button>
\t\t\t\t</div>
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
\t\t\t\t\t<div class=\"form-group\">
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

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <footer class="footer">*/
/*     <div class="container">*/
/* 		*/
/*         <div class="footer__box">*/
/*             <p class="footer__copywriting">*/
/*                 */
/*             </p>*/
/*             <a class="footer__link" href="#">*/
/* 				*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <div class="modal" data-modal="login">*/
/* 	<div class="modal__container">*/
/*         <button class="modal-close">×</button>*/
/*         <div class="modal__content">*/
/*             <form action="/auth/login" class="auth js-auth-form" method="post">*/
/* 				<h2 class="form__title title-medium">Вход в ЛК</h2>*/
/* 				<div>*/
/* 					<button class="js-test-auth" type="button" data-login="admin" data-password="12345678">admin</button>*/
/* 					<button class="js-test-auth" type="button" data-login="teacher" data-password="12345678">teacher</button>*/
/* 					<button class="js-test-auth" type="button" data-login="student" data-password="12345678">student</button>*/
/* 				</div>*/
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
/* 					<div class="form-group">*/
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
