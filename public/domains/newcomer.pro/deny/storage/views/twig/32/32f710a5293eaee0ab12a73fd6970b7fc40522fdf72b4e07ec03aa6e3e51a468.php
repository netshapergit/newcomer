<?php

/* modal_login */
class __TwigTemplate_8df893a943b4e0f1496f01837c35080eff3acafb531160138f17f1a973de33f9 extends TwigBridge\Twig\Template
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
        echo "<div class=\"modal\" data-modal=\"login\">
\t<div class=\"cont\">
\t\t<div class=\"modal__wrapper\">
\t\t\t<div class=\"modal__inner\">
\t\t\t\t<button class=\"modal__closer\">×</button>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<form action=\"/auth/login\" class=\"auth js-auth-form\" method=\"post\">
\t\t\t\t\t\t<h2 class=\"form__title title-medium\">Авторизация</h2>
\t\t\t\t\t\t<!--div style=\"margin-bottom: 20px;\">
\t\t\t\t\t\t\t<button class=\"js-test-auth\" type=\"button\" data-login=\"admin\" data-password=\"12345678\">admin</button>
\t\t\t\t\t\t\t<button class=\"js-test-auth\" type=\"button\" data-login=\"teacher\" data-password=\"12345678\">teacher</button>
\t\t\t\t\t\t\t<button class=\"js-test-auth\" type=\"button\" data-login=\"student\" data-password=\"12345678\">student</button>
\t\t\t\t\t\t</div-->
\t\t\t\t\t\t<div class=\"form__wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Логин</label>
\t\t\t\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"login\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Пароль</label>
\t\t\t\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"password\" type=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group form-group--tac\">
\t\t\t\t\t\t\t\t<button class=\"mbtn\" type=\"submit\">Войти</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group form-group--tac\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"link\" data-modal-trigger=\"reg\">Зарегистрироваться</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group hidden\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mbtn mbtn--flat js-pas\">Забыли пароль?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modal_login";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <div class="modal" data-modal="login">*/
/* 	<div class="cont">*/
/* 		<div class="modal__wrapper">*/
/* 			<div class="modal__inner">*/
/* 				<button class="modal__closer">×</button>*/
/* 				<div class="modal__content">*/
/* 					<form action="/auth/login" class="auth js-auth-form" method="post">*/
/* 						<h2 class="form__title title-medium">Авторизация</h2>*/
/* 						<!--div style="margin-bottom: 20px;">*/
/* 							<button class="js-test-auth" type="button" data-login="admin" data-password="12345678">admin</button>*/
/* 							<button class="js-test-auth" type="button" data-login="teacher" data-password="12345678">teacher</button>*/
/* 							<button class="js-test-auth" type="button" data-login="student" data-password="12345678">student</button>*/
/* 						</div-->*/
/* 						<div class="form__wrapper">*/
/* 							<div class="form-group">*/
/* 								<div class="form-group-input">*/
/* 									<label class="form-label">Логин</label>*/
/* 									<input class="form__data form-control" name="login" type="text">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<div class="form-group-input">*/
/* 									<label class="form-label">Пароль</label>*/
/* 									<input class="form__data form-control" name="password" type="password">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group form-group--tac">*/
/* 								<button class="mbtn" type="submit">Войти</button>*/
/* 							</div>*/
/* */
/* 							<div class="form-group form-group--tac">*/
/* 								<a href="#" class="link" data-modal-trigger="reg">Зарегистрироваться</a>*/
/* 							</div>*/
/* 							<div class="form-group hidden">*/
/* 								<a href="#" class="mbtn mbtn--flat js-pas">Забыли пароль?</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
