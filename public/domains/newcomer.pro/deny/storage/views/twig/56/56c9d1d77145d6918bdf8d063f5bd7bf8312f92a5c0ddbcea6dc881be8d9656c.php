<?php

/* modal_reg */
class __TwigTemplate_c8eb5620660c3401f9cd2c7965ea1c45afa79d62d57437eaf726b8e3d61c825c extends TwigBridge\Twig\Template
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
        echo "<div class=\"modal\" data-modal=\"reg\">
\t<div class=\"cont\">
\t\t<div class=\"modal__wrapper\">
\t\t\t<div class=\"modal__inner\">
\t\t\t\t<button class=\"modal__closer\">×</button>
\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t<form action=\"/register\" class=\"auth js-reg-form\" method=\"post\">
\t\t\t\t\t\t<h2 class=\"form__title title-medium\">Регистрация</h2>
\t\t\t\t\t\t<div class=\"form__wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Логин (лат. буквы и цифры)</label>
\t\t\t\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"login\" type=\"text\" pattern=\"[a-zA-Z0-9]+\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">E-mail</label>
\t\t\t\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"email\" required=\"\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">ФИО</label>
\t\t\t\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"field_fullname\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Пароль</label>
\t\t\t\t\t\t\t\t\t<input class=\"form__data form-control\" minlength=\"8\" name=\"password\" placeholder=\"\" type=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Подтверждение</label>
\t\t\t\t\t\t\t\t\t<input class=\"form__data form-control\" minlength=\"8\" name=\"password_confirmation\" placeholder=\"\" type=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group form-group--tac\">
\t\t\t\t\t\t\t\t<button class=\"mbtn\" type=\"submit\">Регистрация</button>
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
        return "modal_reg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <div class="modal" data-modal="reg">*/
/* 	<div class="cont">*/
/* 		<div class="modal__wrapper">*/
/* 			<div class="modal__inner">*/
/* 				<button class="modal__closer">×</button>*/
/* 				<div class="modal__content">*/
/* 					<form action="/register" class="auth js-reg-form" method="post">*/
/* 						<h2 class="form__title title-medium">Регистрация</h2>*/
/* 						<div class="form__wrapper">*/
/* 							<div class="form-group">*/
/* 								<div class="form-group-input">*/
/* 									<label class="form-label">Логин (лат. буквы и цифры)</label>*/
/* 									<input class="form__data form-control" name="login" type="text" pattern="[a-zA-Z0-9]+" required>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<div class="form-group-input">*/
/* 									<label class="form-label">E-mail</label>*/
/* 									<input class="form__data form-control" name="email" required="" type="email" value="">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<div class="form-group-input">*/
/* 									<label class="form-label">ФИО</label>*/
/* 									<input class="form__data form-control" name="field_fullname" required="" type="text" value="">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<div class="form-group-input">*/
/* 									<label class="form-label">Пароль</label>*/
/* 									<input class="form__data form-control" minlength="8" name="password" placeholder="" type="password">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<div class="form-group-input">*/
/* 									<label class="form-label">Подтверждение</label>*/
/* 									<input class="form__data form-control" minlength="8" name="password_confirmation" placeholder="" type="password">*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="form-group form-group--tac">*/
/* 								<button class="mbtn" type="submit">Регистрация</button>*/
/* 							</div>*/
/* */
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
