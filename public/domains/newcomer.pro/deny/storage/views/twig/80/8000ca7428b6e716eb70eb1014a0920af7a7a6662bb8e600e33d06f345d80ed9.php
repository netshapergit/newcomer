<?php

/* layouts.lk_requests */
class __TwigTemplate_d369012b599412fac16f5198b6f766e6b4d660f6cba99e12d4fd2ad065ac776b extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 4);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
                array('escape'),
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
            $this->loadTemplate("header_lk", "layouts.lk_requests", 3)->display($context);
            // line 4
            echo "<div class=\"lk\" id=\"lk\" data-user-id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\">
\t
\t<section class=\"lk-requests\" id=\"lk-requests\" >
\t\t<div class=\"container\">
\t\t\t<div class=\"lk-requests__wrapper\">
\t\t\t\t<div class=\"lk-requests-block\">
\t\t\t\t\t<div class=\"lk-requests-list\">
\t\t\t\t\t\t<div class=\"lk-main-request-list-item\" :class=\"{'lk-main-request-list-item--accepted': item.hr_accepted == 1, 'lk-main-request-list-item--denied': item.hr_denied == 1}\" v-for=\"item in requests\" :key=\"item.id\">
\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block\">
\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__title\">{{ getRequestTitle(item.type) }}</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__from\">{{ getUserNameById(item.user_id) }}</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__type\">{{ getVacationType(item.vacation_type) }}</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__dates\">{{ item.dates.start + ' - ' + item.dates.end }}</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__stage\">Статус: {{ requestStatusText(item) }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block\">
\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__title\">{{ getAcceptorTitle(item.type) }} <span class=\"lk-main-request-list-item__status\" :class=\"{'lk-main-request-list-item__status--accepted': item.substitutor_accepted == 1, 'lk-main-request-list-item__status--denied': item.substitutor_denied == 1}\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__name\">{{ getUserNameById(item.substitutor) }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__title\">Согласующий <span class=\"lk-main-request-list-item__status\" :class=\"{'lk-main-request-list-item__status--accepted': item.coordinator_accepted == 1, 'lk-main-request-list-item__status--denied': item.coordinator_denied == 1}\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__name\">{{ getUserNameById(item.coordinator) }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<template v-if=\"currentUser\">
\t\t\t\t\t\t\t\t<template v-if=\"currentUser.id == item.acceptor\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block lk-main-request-list-item__block--footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__action\" >
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"lk-btn lk-btn--color-red\" v-show=\"!isAccepted(item)\" @click.stop=\"deniedRequest(item.id, isDenied(item))\">{{ denyRequestBtnText(isDenied(item)) }}</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"lk-btn lk-btn--color-blue\" v-show=\"!isDenied(item)\" @click.stop=\"acceptRequest(item.id, isAccepted(item))\" >{{ acceptRequestBtnText(isAccepted(item)) }}</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t<template v-else>
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block lk-main-request-list-item__block--footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__action\" >
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"lk-btn lk-btn--color-red\" :disabled=\"item.hr_accepted == 1 || item.hr_denied == 1\" v-show=\"!isAccepted(item)\" @click.stop=\"deniedRequest(item.id, isDenied(item))\">{{ denyRequestBtnText(isDenied(item)) }}</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"lk-btn lk-btn--color-blue\" :disabled=\"item.hr_accepted == 1 || item.hr_denied == 1\" v-show=\"!isDenied(item)\" @click.stop=\"acceptRequest(item.id, isAccepted(item))\" >{{ acceptRequestBtnText(isAccepted(item)) }}</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--div class=\"lk-main-request-list-item__action\" >
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"lk-btn lk-btn--color-green\" @click.stop=\"unDeniedRequest(item.id)\">Отклонено</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"lk-btn lk-btn--color-green\" :disabled=\"item.hr_accepted == 1\" @click.stop=\"denyRequest(item.id)\">Согласовано</button>
\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"lk-requests-block\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

</div>

";
            // line 63
            $this->loadTemplate("footer_lk", "layouts.lk_requests", 63)->display($context);
            // line 64
            echo "
";
        } else {
            // line 66
            echo "\t<script>
\t\tlocation.href = location.origin + '/?login=yes'
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.lk_requests";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 66,  115 => 64,  113 => 63,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if user %}*/
/* */
/* {% include 'header_lk' %}*/
/* <div class="lk" id="lk" data-user-id="{$ user.id $}">*/
/* 	*/
/* 	<section class="lk-requests" id="lk-requests" >*/
/* 		<div class="container">*/
/* 			<div class="lk-requests__wrapper">*/
/* 				<div class="lk-requests-block">*/
/* 					<div class="lk-requests-list">*/
/* 						<div class="lk-main-request-list-item" :class="{'lk-main-request-list-item--accepted': item.hr_accepted == 1, 'lk-main-request-list-item--denied': item.hr_denied == 1}" v-for="item in requests" :key="item.id">*/
/* 							<div class="lk-main-request-list-item__block">*/
/* 								<div class="lk-main-request-list-item__title">{{ getRequestTitle(item.type) }}</div>*/
/* 								<div class="lk-main-request-list-item__from">{{ getUserNameById(item.user_id) }}</div>*/
/* 								<div class="lk-main-request-list-item__type">{{ getVacationType(item.vacation_type) }}</div>*/
/* 								<div class="lk-main-request-list-item__dates">{{ item.dates.start + ' - ' + item.dates.end }}</div>*/
/* 								<div class="lk-main-request-list-item__stage">Статус: {{ requestStatusText(item) }}</div>*/
/* 							</div>*/
/* 							<div class="lk-main-request-list-item__block">*/
/* 								<div class="lk-main-request-list-item__empl">*/
/* 									<div class="lk-main-request-list-item__empl__title">{{ getAcceptorTitle(item.type) }} <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.substitutor_accepted == 1, 'lk-main-request-list-item__status--denied': item.substitutor_denied == 1}"></span></div>*/
/* 									<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.substitutor) }}</div>*/
/* 								</div>*/
/* 								<div class="lk-main-request-list-item__empl">*/
/* 									<div class="lk-main-request-list-item__empl__title">Согласующий <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.coordinator_accepted == 1, 'lk-main-request-list-item__status--denied': item.coordinator_denied == 1}"></span></div>*/
/* 									<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.coordinator) }}</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<template v-if="currentUser">*/
/* 								<template v-if="currentUser.id == item.acceptor">*/
/* 									<div class="lk-main-request-list-item__block lk-main-request-list-item__block--footer">*/
/* 										<div class="lk-main-request-list-item__action" >*/
/* 											<button type="button" class="lk-btn lk-btn--color-red" v-show="!isAccepted(item)" @click.stop="deniedRequest(item.id, isDenied(item))">{{ denyRequestBtnText(isDenied(item)) }}</button>*/
/* 											<button type="button" class="lk-btn lk-btn--color-blue" v-show="!isDenied(item)" @click.stop="acceptRequest(item.id, isAccepted(item))" >{{ acceptRequestBtnText(isAccepted(item)) }}</button>*/
/* 										</div>*/
/* 									</div>*/
/* 								</template>*/
/* 								<template v-else>*/
/* 									<div class="lk-main-request-list-item__block lk-main-request-list-item__block--footer">*/
/* 										<div class="lk-main-request-list-item__action" >*/
/* 											<button type="button" class="lk-btn lk-btn--color-red" :disabled="item.hr_accepted == 1 || item.hr_denied == 1" v-show="!isAccepted(item)" @click.stop="deniedRequest(item.id, isDenied(item))">{{ denyRequestBtnText(isDenied(item)) }}</button>*/
/* 											<button type="button" class="lk-btn lk-btn--color-blue" :disabled="item.hr_accepted == 1 || item.hr_denied == 1" v-show="!isDenied(item)" @click.stop="acceptRequest(item.id, isAccepted(item))" >{{ acceptRequestBtnText(isAccepted(item)) }}</button>*/
/* 										</div>*/
/* 										<!--div class="lk-main-request-list-item__action" >*/
/* 											<button type="button" class="lk-btn lk-btn--color-green" @click.stop="unDeniedRequest(item.id)">Отклонено</button>*/
/* 											<button type="button" class="lk-btn lk-btn--color-green" :disabled="item.hr_accepted == 1" @click.stop="denyRequest(item.id)">Согласовано</button>*/
/* 										</div-->*/
/* 									</div>*/
/* 								</template>*/
/* 							</template>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="lk-requests-block">*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* */
/* {% else %}*/
/* 	<script>*/
/* 		location.href = location.origin + '/?login=yes'*/
/* 	</script>*/
/* {% endif %}*/
