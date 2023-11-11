<?php

/* layouts.lk_profile */
class __TwigTemplate_8d690267d5483226fbb9cfe7e0633056d53b8db3aa0dbb899532fad659c8f59e extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "include" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
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
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "
";
            // line 3
            $this->loadTemplate("header_lk", "layouts.lk_profile", 3)->display($context);
            // line 4
            echo "<div class=\"lk\">
\t
\t<section class=\"lk-main\">
\t\t<div class=\"container\">
\t\t\t<div class=\"lk-main__wrapper\">
\t\t\t\t<div class=\"lk-main-block lk-main-block--info\">
\t\t\t\t\t<div class=\"lk-info\">
\t\t\t\t\t\t<div class=\"lk-info__avatar\">
\t\t\t\t\t\t\t<img src=\"/site/theme/images/2519189.jpg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-info__main\">
\t\t\t\t\t\t\t<div class=\"lk-info__main-block\">
\t\t\t\t\t\t\t\t<div class=\"lk-main-block__title\">Фамилия Имя Отчество</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-block__line\">должность</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lk-info__main-block\">
\t\t\t\t\t\t\t\t<div class=\"lk-main-block__line lk-main-block__line--bday\">День рождения: 00.00.0000</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-block__line lk-main-block__line--wexp\">Стаж: 8 лет, 6 дней</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"lk-main-block lk-main-block--contacts\">
\t\t\t\t\t<div class=\"lk-contacts\">
\t\t\t\t\t\t<div class=\"lk-main-block__title\">Контактная информация</div>
\t\t\t\t\t\t<div class=\"lk-main-block__line\">Рабочий телефон: +7 (495) 000-00-00 доб. 2842</div>
\t\t\t\t\t\t<div class=\"lk-main-block__line\">Внутренний телефон:</div>
\t\t\t\t\t\t<div class=\"lk-main-block__line\">Мобильный:</div>
\t\t\t\t\t\t<div class=\"lk-main-block__line\">E-mail: nsme@name.ru</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"lk-main-block lk-main-block--requests\">
\t\t\t\t\t<div class=\"lk-requests\">
\t\t\t\t\t\t<div class=\"lk-main-block__title\">Заявки</div>
\t\t\t\t\t\t<div class=\"lk-main-block__actions\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"lk-btn lk-btn--icon\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"20\" viewBox=\"0 0 18 20\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M17.06 5.855L11.645 0.44C11.364 0.158615 10.9827 0.000350104 10.585 0H2C1.60218 0 1.22064 0.158035 0.93934 0.43934C0.658035 0.720644 0.5 1.10218 0.5 1.5V4C0.5 4.13261 0.552679 4.25979 0.646447 4.35355C0.740215 4.44732 0.867392 4.5 1 4.5C1.13261 4.5 1.25979 4.44732 1.35355 4.35355C1.44732 4.25979 1.5 4.13261 1.5 4V1.5C1.5 1.36739 1.55268 1.24021 1.64645 1.14645C1.74021 1.05268 1.86739 1 2 1H10.5V5.5C10.5 5.89782 10.658 6.27936 10.9393 6.56066C11.2206 6.84196 11.6022 7 12 7H16.5V18.5C16.5 18.6326 16.4473 18.7598 16.3536 18.8536C16.2598 18.9473 16.1326 19 16 19H2C1.86739 19 1.74021 18.9473 1.64645 18.8536C1.55268 18.7598 1.5 18.6326 1.5 18.5V6C1.5 5.86739 1.44732 5.74021 1.35355 5.64645C1.25979 5.55268 1.13261 5.5 1 5.5C0.867392 5.5 0.740215 5.55268 0.646447 5.64645C0.552679 5.74021 0.5 5.86739 0.5 6V18.5C0.5 18.8978 0.658035 19.2794 0.93934 19.5607C1.22064 19.842 1.60218 20 2 20H16C16.3978 20 16.7794 19.842 17.0607 19.5607C17.342 19.2794 17.5 18.8978 17.5 18.5V6.915C17.4996 6.51731 17.3414 6.13603 17.06 5.855ZM11.5 5.5V1.705L15.795 6H12C11.8674 6 11.7402 5.94732 11.6464 5.85355C11.5527 5.75979 11.5 5.63261 11.5 5.5ZM4 9.5C4 9.36739 4.05268 9.24021 4.14645 9.14645C4.24021 9.05268 4.36739 9 4.5 9H9C9.13261 9 9.25979 9.05268 9.35355 9.14645C9.44732 9.24021 9.5 9.36739 9.5 9.5C9.5 9.63261 9.44732 9.75979 9.35355 9.85355C9.25979 9.94732 9.13261 10 9 10H4.5C4.36739 10 4.24021 9.94732 4.14645 9.85355C4.05268 9.75979 4 9.63261 4 9.5ZM4.5 12H13.5C13.6326 12 13.7598 12.0527 13.8536 12.1464C13.9473 12.2402 14 12.3674 14 12.5C14 12.6326 13.9473 12.7598 13.8536 12.8536C13.7598 12.9473 13.6326 13 13.5 13H4.5C4.36739 13 4.24021 12.9473 4.14645 12.8536C4.05268 12.7598 4 12.6326 4 12.5C4 12.3674 4.05268 12.2402 4.14645 12.1464C4.24021 12.0527 4.36739 12 4.5 12ZM14 15.5C14 15.6326 13.9473 15.7598 13.8536 15.8536C13.7598 15.9473 13.6326 16 13.5 16H4.5C4.36739 16 4.24021 15.9473 4.14645 15.8536C4.05268 15.7598 4 15.6326 4 15.5C4 15.3674 4.05268 15.2402 4.14645 15.1464C4.24021 15.0527 4.36739 15 4.5 15H13.5C13.6326 15 13.7598 15.0527 13.8536 15.1464C13.9473 15.2402 14 15.3674 14 15.5Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\tВзять отпуск
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

</div>

";
        } else {
            // line 55
            echo "\t<script>
\t\tlocation.href = location.origin + '/?login=yes'
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.lk_profile";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 55,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if user %}*/
/* */
/* {% include 'header_lk' %}*/
/* <div class="lk">*/
/* 	*/
/* 	<section class="lk-main">*/
/* 		<div class="container">*/
/* 			<div class="lk-main__wrapper">*/
/* 				<div class="lk-main-block lk-main-block--info">*/
/* 					<div class="lk-info">*/
/* 						<div class="lk-info__avatar">*/
/* 							<img src="/site/theme/images/2519189.jpg">*/
/* 						</div>*/
/* 						<div class="lk-info__main">*/
/* 							<div class="lk-info__main-block">*/
/* 								<div class="lk-main-block__title">Фамилия Имя Отчество</div>*/
/* 								<div class="lk-main-block__line">должность</div>*/
/* 							</div>*/
/* 							<div class="lk-info__main-block">*/
/* 								<div class="lk-main-block__line lk-main-block__line--bday">День рождения: 00.00.0000</div>*/
/* 								<div class="lk-main-block__line lk-main-block__line--wexp">Стаж: 8 лет, 6 дней</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="lk-main-block lk-main-block--contacts">*/
/* 					<div class="lk-contacts">*/
/* 						<div class="lk-main-block__title">Контактная информация</div>*/
/* 						<div class="lk-main-block__line">Рабочий телефон: +7 (495) 000-00-00 доб. 2842</div>*/
/* 						<div class="lk-main-block__line">Внутренний телефон:</div>*/
/* 						<div class="lk-main-block__line">Мобильный:</div>*/
/* 						<div class="lk-main-block__line">E-mail: nsme@name.ru</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="lk-main-block lk-main-block--requests">*/
/* 					<div class="lk-requests">*/
/* 						<div class="lk-main-block__title">Заявки</div>*/
/* 						<div class="lk-main-block__actions">*/
/* 							<a href="#" class="lk-btn lk-btn--icon">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">*/
/* 									<path d="M17.06 5.855L11.645 0.44C11.364 0.158615 10.9827 0.000350104 10.585 0H2C1.60218 0 1.22064 0.158035 0.93934 0.43934C0.658035 0.720644 0.5 1.10218 0.5 1.5V4C0.5 4.13261 0.552679 4.25979 0.646447 4.35355C0.740215 4.44732 0.867392 4.5 1 4.5C1.13261 4.5 1.25979 4.44732 1.35355 4.35355C1.44732 4.25979 1.5 4.13261 1.5 4V1.5C1.5 1.36739 1.55268 1.24021 1.64645 1.14645C1.74021 1.05268 1.86739 1 2 1H10.5V5.5C10.5 5.89782 10.658 6.27936 10.9393 6.56066C11.2206 6.84196 11.6022 7 12 7H16.5V18.5C16.5 18.6326 16.4473 18.7598 16.3536 18.8536C16.2598 18.9473 16.1326 19 16 19H2C1.86739 19 1.74021 18.9473 1.64645 18.8536C1.55268 18.7598 1.5 18.6326 1.5 18.5V6C1.5 5.86739 1.44732 5.74021 1.35355 5.64645C1.25979 5.55268 1.13261 5.5 1 5.5C0.867392 5.5 0.740215 5.55268 0.646447 5.64645C0.552679 5.74021 0.5 5.86739 0.5 6V18.5C0.5 18.8978 0.658035 19.2794 0.93934 19.5607C1.22064 19.842 1.60218 20 2 20H16C16.3978 20 16.7794 19.842 17.0607 19.5607C17.342 19.2794 17.5 18.8978 17.5 18.5V6.915C17.4996 6.51731 17.3414 6.13603 17.06 5.855ZM11.5 5.5V1.705L15.795 6H12C11.8674 6 11.7402 5.94732 11.6464 5.85355C11.5527 5.75979 11.5 5.63261 11.5 5.5ZM4 9.5C4 9.36739 4.05268 9.24021 4.14645 9.14645C4.24021 9.05268 4.36739 9 4.5 9H9C9.13261 9 9.25979 9.05268 9.35355 9.14645C9.44732 9.24021 9.5 9.36739 9.5 9.5C9.5 9.63261 9.44732 9.75979 9.35355 9.85355C9.25979 9.94732 9.13261 10 9 10H4.5C4.36739 10 4.24021 9.94732 4.14645 9.85355C4.05268 9.75979 4 9.63261 4 9.5ZM4.5 12H13.5C13.6326 12 13.7598 12.0527 13.8536 12.1464C13.9473 12.2402 14 12.3674 14 12.5C14 12.6326 13.9473 12.7598 13.8536 12.8536C13.7598 12.9473 13.6326 13 13.5 13H4.5C4.36739 13 4.24021 12.9473 4.14645 12.8536C4.05268 12.7598 4 12.6326 4 12.5C4 12.3674 4.05268 12.2402 4.14645 12.1464C4.24021 12.0527 4.36739 12 4.5 12ZM14 15.5C14 15.6326 13.9473 15.7598 13.8536 15.8536C13.7598 15.9473 13.6326 16 13.5 16H4.5C4.36739 16 4.24021 15.9473 4.14645 15.8536C4.05268 15.7598 4 15.6326 4 15.5C4 15.3674 4.05268 15.2402 4.14645 15.1464C4.24021 15.0527 4.36739 15 4.5 15H13.5C13.6326 15 13.7598 15.0527 13.8536 15.1464C13.9473 15.2402 14 15.3674 14 15.5Z" fill="black"/>*/
/* 								</svg>*/
/* 								Взять отпуск*/
/* 							</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* </div>*/
/* */
/* {% else %}*/
/* 	<script>*/
/* 		location.href = location.origin + '/?login=yes'*/
/* 	</script>*/
/* {% endif %}*/
