<?php

/* header_lk */
class __TwigTemplate_251b24230f7266a44a81d03193d48896777ee9611fe5813ad3b62e92ad031085 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 33);
        $filters = array("escape" => 1, "json_encode" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('escape', 'json_encode'),
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
        echo "<header class=\"header\" id=\"lk-header\" data-page-id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
        echo "\" data-user-id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\" data-user=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["user"]) ? $context["user"] : null)), "html", null, true));
        echo "\">
\t<div class=\"cont\">
\t\t<div class=\"header__wrapper\">
\t\t\t<div class=\"header__block\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"header__block\">
\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t<div class=\"header-logo__icon\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"46\" height=\"48\" viewBox=\"0 0 46 48\" fill=\"none\">
\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_55_3)\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 26H11.3529C17.7854 26 23 31.2146 23 37.6471H11.6471C5.21457 37.6471 0 32.4325 0 26ZM24.9166 37.6471H34.3529C40.7854 37.6471 46 32.4325 46 26H34.6471C28.2146 26 23 31.2146 23 37.6471H21.0833V48H24.9166V37.6471Z\" fill=\"#62E460\"/>
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23 2.52055C11.6895 2.52055 2.52055 11.6895 2.52055 23H0C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23H43.4795C43.4795 11.6895 34.3105 2.52055 23 2.52055ZM23 8.50685C14.9957 8.50685 8.50685 14.9957 8.50685 23H5.9863C5.9863 13.6036 13.6036 5.9863 23 5.9863C32.3964 5.9863 40.0137 13.6036 40.0137 23H37.4931C37.4931 14.9957 31.0043 8.50685 23 8.50685ZM14.4932 23C14.4932 18.3018 18.3018 14.4932 23 14.4932C27.6982 14.4932 31.5068 18.3018 31.5068 23H34.0274C34.0274 16.9097 29.0903 11.9726 23 11.9726C16.9097 11.9726 11.9726 16.9097 11.9726 23H14.4932Z\" fill=\"#D5F560\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t<clipPath id=\"clip0_55_3\">
\t\t\t\t\t\t\t\t\t<rect width=\"46\" height=\"48\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-logo__text\">
\t\t\t\t\t\t<div class=\"header-logo__text-title\">
\t\t\t\t\t\t\tСистема обучения
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-logo__text-name\">
\t\t\t\t\t\t\tАГРОЭКОМИССИЯ
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header__block header__block--lk\">
\t\t\t\t";
        // line 33
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 34
            echo "\t\t\t\t<div class=\"header-msgs\">
\t\t\t\t\t<a href=\"/lk/messages\">
\t\t\t\t\t\t
\t\t\t\t\t\tСообщения
\t\t\t\t\t\t<div class=\"header-msgs__icon\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"20\" viewBox=\"0 0 21 20\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M15.0282 7H5.02819C4.76297 7 4.50862 7.10536 4.32108 7.29289C4.13354 7.48043 4.02819 7.73478 4.02819 8C4.02819 8.26522 4.13354 8.51957 4.32108 8.70711C4.50862 8.89464 4.76297 9 5.02819 9H15.0282C15.2934 9 15.5478 8.89464 15.7353 8.70711C15.9228 8.51957 16.0282 8.26522 16.0282 8C16.0282 7.73478 15.9228 7.48043 15.7353 7.29289C15.5478 7.10536 15.2934 7 15.0282 7ZM11.0282 11H5.02819C4.76297 11 4.50862 11.1054 4.32108 11.2929C4.13354 11.4804 4.02819 11.7348 4.02819 12C4.02819 12.2652 4.13354 12.5196 4.32108 12.7071C4.50862 12.8946 4.76297 13 5.02819 13H11.0282C11.2934 13 11.5478 12.8946 11.7353 12.7071C11.9228 12.5196 12.0282 12.2652 12.0282 12C12.0282 11.7348 11.9228 11.4804 11.7353 11.2929C11.5478 11.1054 11.2934 11 11.0282 11ZM10.0282 0C8.71497 0 7.41461 0.258658 6.20135 0.761205C4.9881 1.26375 3.8857 2.00035 2.95712 2.92893C1.08175 4.8043 0.0281864 7.34784 0.0281864 10C0.0194442 12.3091 0.818979 14.5485 2.28819 16.33L0.288186 18.33C0.149429 18.4706 0.0554325 18.6492 0.0180584 18.8432C-0.0193158 19.0372 0.0016069 19.2379 0.0781863 19.42C0.161244 19.5999 0.29589 19.7511 0.465033 19.8544C0.634176 19.9577 0.830187 20.0083 1.02819 20H10.0282C12.6804 20 15.2239 18.9464 17.0993 17.0711C18.9746 15.1957 20.0282 12.6522 20.0282 10C20.0282 7.34784 18.9746 4.8043 17.0993 2.92893C15.2239 1.05357 12.6804 0 10.0282 0ZM10.0282 18H3.43819L4.36819 17.07C4.55444 16.8826 4.65898 16.6292 4.65898 16.365C4.65898 16.1008 4.55444 15.8474 4.36819 15.66C3.05877 14.352 2.24336 12.6305 2.06088 10.7888C1.87839 8.94705 2.34013 7.09901 3.36741 5.55952C4.3947 4.02004 5.92398 2.88436 7.6947 2.34597C9.46543 1.80759 11.368 1.8998 13.0784 2.60691C14.7888 3.31402 16.201 4.59227 17.0746 6.22389C17.9482 7.85551 18.2291 9.73954 17.8693 11.555C17.5096 13.3705 16.5315 15.005 15.1017 16.1802C13.672 17.3554 11.8789 17.9985 10.0282 18Z\" fill=\"white\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t";
            // line 42
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "unread_messages", array()) > 0)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t<span class=\"pin\"></span>
\t\t\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t<div class=\"header-lk\">
\t\t\t\t";
        // line 50
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 51
            echo "\t\t\t\t\t<a class=\"header-lk__link btn btn__header\" href=\"/lk\">
\t\t\t\t\t\t<div class=\"header-lk__name\">";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_fullname", array()), "html", null, true));
            echo "</div>
\t\t\t\t\t\t<div class=\"header-lk__avatar\">
\t\t\t\t\t\t\t<img src=\"/site/data/images/medium/";
            // line 54
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_image", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"header-lk__menu\">
\t\t\t\t\t\t<div class=\"header-lk__menu-wrapper\">
\t\t\t\t\t\t\t<a class=\"header-lk__menu-link\" href=\"/lk\">Аккаунт</a>
\t\t\t\t\t\t\t<a class=\"header-lk__menu-link\" href=\"/auth/logout\">Выйти</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t<a class=\"header-lk__link js-login\" data-modal-trigger=\"login\" href=\"#\">
\t\t\t\t\t\t<div class=\"header-lk__name\">Войти</div>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t&nbsp;|&nbsp;  <a href=\"#\" class=\"link\" data-modal-trigger=\"reg\">Регистрация</a>
\t\t\t\t\t\t\t
\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>";
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
        return array (  143 => 72,  134 => 65,  120 => 54,  115 => 52,  112 => 51,  110 => 50,  107 => 49,  101 => 45,  97 => 43,  95 => 42,  85 => 34,  83 => 33,  43 => 1,);
    }
}
/* <header class="header" id="lk-header" data-page-id="{$ page.id $}" data-user-id="{$ user.id $}" data-user="{$ user|json_encode() $}">*/
/* 	<div class="cont">*/
/* 		<div class="header__wrapper">*/
/* 			<div class="header__block">*/
/* 				*/
/* 			</div>*/
/* 			<div class="header__block">*/
/* 				<div class="header-logo">*/
/* 					<div class="header-logo__icon">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="46" height="48" viewBox="0 0 46 48" fill="none">*/
/* 							<g clip-path="url(#clip0_55_3)">*/
/* 								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 26H11.3529C17.7854 26 23 31.2146 23 37.6471H11.6471C5.21457 37.6471 0 32.4325 0 26ZM24.9166 37.6471H34.3529C40.7854 37.6471 46 32.4325 46 26H34.6471C28.2146 26 23 31.2146 23 37.6471H21.0833V48H24.9166V37.6471Z" fill="#62E460"/>*/
/* 								<path fill-rule="evenodd" clip-rule="evenodd" d="M23 2.52055C11.6895 2.52055 2.52055 11.6895 2.52055 23H0C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23H43.4795C43.4795 11.6895 34.3105 2.52055 23 2.52055ZM23 8.50685C14.9957 8.50685 8.50685 14.9957 8.50685 23H5.9863C5.9863 13.6036 13.6036 5.9863 23 5.9863C32.3964 5.9863 40.0137 13.6036 40.0137 23H37.4931C37.4931 14.9957 31.0043 8.50685 23 8.50685ZM14.4932 23C14.4932 18.3018 18.3018 14.4932 23 14.4932C27.6982 14.4932 31.5068 18.3018 31.5068 23H34.0274C34.0274 16.9097 29.0903 11.9726 23 11.9726C16.9097 11.9726 11.9726 16.9097 11.9726 23H14.4932Z" fill="#D5F560"/>*/
/* 							</g>*/
/* 							<defs>*/
/* 								<clipPath id="clip0_55_3">*/
/* 									<rect width="46" height="48" fill="white"/>*/
/* 								</clipPath>*/
/* 							</defs>*/
/* 						</svg>*/
/* 					</div>*/
/* 					<div class="header-logo__text">*/
/* 						<div class="header-logo__text-title">*/
/* 							Система обучения*/
/* 						</div>*/
/* 						<div class="header-logo__text-name">*/
/* 							АГРОЭКОМИССИЯ*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="header__block header__block--lk">*/
/* 				{% if user %}*/
/* 				<div class="header-msgs">*/
/* 					<a href="/lk/messages">*/
/* 						*/
/* 						Сообщения*/
/* 						<div class="header-msgs__icon">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">*/
/* 								<path d="M15.0282 7H5.02819C4.76297 7 4.50862 7.10536 4.32108 7.29289C4.13354 7.48043 4.02819 7.73478 4.02819 8C4.02819 8.26522 4.13354 8.51957 4.32108 8.70711C4.50862 8.89464 4.76297 9 5.02819 9H15.0282C15.2934 9 15.5478 8.89464 15.7353 8.70711C15.9228 8.51957 16.0282 8.26522 16.0282 8C16.0282 7.73478 15.9228 7.48043 15.7353 7.29289C15.5478 7.10536 15.2934 7 15.0282 7ZM11.0282 11H5.02819C4.76297 11 4.50862 11.1054 4.32108 11.2929C4.13354 11.4804 4.02819 11.7348 4.02819 12C4.02819 12.2652 4.13354 12.5196 4.32108 12.7071C4.50862 12.8946 4.76297 13 5.02819 13H11.0282C11.2934 13 11.5478 12.8946 11.7353 12.7071C11.9228 12.5196 12.0282 12.2652 12.0282 12C12.0282 11.7348 11.9228 11.4804 11.7353 11.2929C11.5478 11.1054 11.2934 11 11.0282 11ZM10.0282 0C8.71497 0 7.41461 0.258658 6.20135 0.761205C4.9881 1.26375 3.8857 2.00035 2.95712 2.92893C1.08175 4.8043 0.0281864 7.34784 0.0281864 10C0.0194442 12.3091 0.818979 14.5485 2.28819 16.33L0.288186 18.33C0.149429 18.4706 0.0554325 18.6492 0.0180584 18.8432C-0.0193158 19.0372 0.0016069 19.2379 0.0781863 19.42C0.161244 19.5999 0.29589 19.7511 0.465033 19.8544C0.634176 19.9577 0.830187 20.0083 1.02819 20H10.0282C12.6804 20 15.2239 18.9464 17.0993 17.0711C18.9746 15.1957 20.0282 12.6522 20.0282 10C20.0282 7.34784 18.9746 4.8043 17.0993 2.92893C15.2239 1.05357 12.6804 0 10.0282 0ZM10.0282 18H3.43819L4.36819 17.07C4.55444 16.8826 4.65898 16.6292 4.65898 16.365C4.65898 16.1008 4.55444 15.8474 4.36819 15.66C3.05877 14.352 2.24336 12.6305 2.06088 10.7888C1.87839 8.94705 2.34013 7.09901 3.36741 5.55952C4.3947 4.02004 5.92398 2.88436 7.6947 2.34597C9.46543 1.80759 11.368 1.8998 13.0784 2.60691C14.7888 3.31402 16.201 4.59227 17.0746 6.22389C17.9482 7.85551 18.2291 9.73954 17.8693 11.555C17.5096 13.3705 16.5315 15.005 15.1017 16.1802C13.672 17.3554 11.8789 17.9985 10.0282 18Z" fill="white"/>*/
/* 							</svg>*/
/* 							{% if user.unread_messages > 0 %}*/
/* 								<span class="pin"></span>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</a>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				<div class="header-lk">*/
/* 				{% if user %}*/
/* 					<a class="header-lk__link btn btn__header" href="/lk">*/
/* 						<div class="header-lk__name">{$ user.field_fullname $}</div>*/
/* 						<div class="header-lk__avatar">*/
/* 							<img src="/site/data/images/medium/{$ user.field_image $}">*/
/* 						</div>*/
/* 					</a>*/
/* 					<div class="header-lk__menu">*/
/* 						<div class="header-lk__menu-wrapper">*/
/* 							<a class="header-lk__menu-link" href="/lk">Аккаунт</a>*/
/* 							<a class="header-lk__menu-link" href="/auth/logout">Выйти</a>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				{% else %}*/
/* 					<a class="header-lk__link js-login" data-modal-trigger="login" href="#">*/
/* 						<div class="header-lk__name">Войти</div>*/
/* 					</a>*/
/* 					*/
/* 					&nbsp;|&nbsp;  <a href="#" class="link" data-modal-trigger="reg">Регистрация</a>*/
/* 							*/
/* 				{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </header>*/
