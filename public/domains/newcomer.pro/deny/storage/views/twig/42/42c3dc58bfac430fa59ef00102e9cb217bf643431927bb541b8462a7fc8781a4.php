<?php

/* layouts.lk_employee */
class __TwigTemplate_44c6476b0df740791e2bafaa8b35d0c5e92aea0f5a61d30fbbdbe0517d925ad2 extends TwigBridge\Twig\Template
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
            $this->loadTemplate("header_lk", "layouts.lk_employee", 3)->display($context);
            // line 4
            echo "<div class=\"lk\">
\t
\t<section class=\"lk-empls\" id=\"lk-empls\">
\t\t<div class=\"container\">
\t\t\t<div class=\"lk-empls__wrapper\">
\t\t\t\t<div class=\"lk-empls-block lk-empls-block--list\">
\t\t\t\t\t<div class=\"empls-list-search\">
\t\t\t\t\t\t<input type=\"text\" class=\"empls-list-search__input\" placeholder=\"Поиск\" v-model=\"search\">
\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t<div class=\"lk-select\" v-on-click-away=\"hideDepartmentFilterSelectItemsList\">
\t\t\t\t\t\t\t\t<div class=\"lk-select__header lk-select__header--fw\" @click.stop=\"departmentFilter.isShowItemsList = !departmentFilter.isShowItemsList\">{{ departmentSelectText }}</div>
\t\t\t\t\t\t\t\t<transition name=\"select\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list\" v-show=\"departmentFilter.isShowItemsList\">
\t\t\t\t\t\t\t\t\t\t<div v-for=\"opt in departmentFilter.items\" :key=\"opt.value\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item\" 
\t\t\t\t\t\t\t\t\t\t\t\t @click.stop=\"selectSetItem(departmentFilter, opt)\"
\t\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t\t{{ opt.title }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<template v-if=\"opt.items && opt.items.length\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item lk-select__list-item--subitem\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t v-for=\"subopt in opt.items\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t :key=\"subopt.value\"
\t\t\t\t\t\t\t\t\t\t\t\t\t @click.stop=\"selectSetItem(departmentFilter, subopt)\"
\t\t\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ subopt.title }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"empls-list\">
\t\t\t\t\t\t<div class=\"empls-list-item\" :class=\"{'empls-list-item--active': selectedEmpl == item}\" v-for=\"(item, i) in filteredEmpls\" :key=\"item.id\" @click.stop=\"selectedEmpl = item\">
\t\t\t\t\t\t\t<div class=\"empls-list-item__block empls-list-item__block--ava\">
\t\t\t\t\t\t\t\t<img v-if=\"item.field_image\" class=\"empls-list-item__ava\" :src=\"'/site/data/images/large/' + item.field_image\">
\t\t\t\t\t\t\t\t<div v-else class=\"empls-list-item__noava\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"empls-list-item__block empls-list-item__block--main\">
\t\t\t\t\t\t\t\t<div class=\"empls-list-item__title\">{{ item.field_fullname }}</div>
\t\t\t\t\t\t\t\t<div class=\"empls-list-item__subtitle\">{{ item.field_position }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"lk-empls-block lk-empls-block--single\" v-show=\"selectedEmpl\">
\t\t\t\t\t<div class=\"lk-modal__closer\" @click.stop=\"selectedEmpl = null\"></div>
\t\t\t\t\t<div class=\"empls-single\" v-if=\"selectedEmpl\">
\t\t\t\t\t\t<div class=\"empls-single__block empls-single__block--ava\">
\t\t\t\t\t\t\t<img v-if=\"selectedEmpl.field_image\" class=\"empls-single__ava\" :src=\"'/site/data/images/large/' + selectedEmpl.field_image\">
\t\t\t\t\t\t\t<div v-else class=\"empls-single__noava\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"empls-single__block empls-single__block--main\">
\t\t\t\t\t\t\t<div class=\"empls-single__main\">
\t\t\t\t\t\t\t\t<div class=\"empls-single__title\">{{ selectedEmpl.field_fullname }}</div>
\t\t\t\t\t\t\t\t<div class=\"empls-single__pos\">{{ selectedEmpl.field_position }}</div>
\t\t\t\t\t\t\t\t<div class=\"empls-single__lines\">
\t\t\t\t\t\t\t\t\t<div class=\"empls-single__line\">День рождения: {{ getBDay(selectedEmpl.field_bday) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"empls-single__line\">Стаж:{{ calcExp() }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"empls-single__grid\">
\t\t\t\t\t\t\t\t\t<div class=\"empls-single__subtitle\">Контакты</div>
\t\t\t\t\t\t\t\t\t<div class=\"empls-single__grid-wrap\">
\t\t\t\t\t\t\t\t\t\t<!--div class=\"empls-single__card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"empls-single__card-title\">Мобильный:</div> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"empls-single__card-value\">{{ selectedEmpl.field_phone_personal }}</div>
\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t<div class=\"empls-single__card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"empls-single__card-title\">E-mail: </div> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"empls-single__card-value\"><a :href=\"selectedEmpl.email\">{{ selectedEmpl.email }}</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"empls-single__card\" v-for=\"item in selectedEmpl.field_contacts_data\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"empls-single__card-title\">{{ item.title }}:</div> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"empls-single__card-value\">{{ item.value }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

</div>

";
            // line 97
            $this->loadTemplate("footer_lk", "layouts.lk_employee", 97)->display($context);
            // line 98
            echo "
";
        } else {
            // line 100
            echo "\t<script>
\t\tlocation.href = location.origin + '/?login=yes'
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.lk_employee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 100,  147 => 98,  145 => 97,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if user %}*/
/* */
/* {% include 'header_lk' %}*/
/* <div class="lk">*/
/* 	*/
/* 	<section class="lk-empls" id="lk-empls">*/
/* 		<div class="container">*/
/* 			<div class="lk-empls__wrapper">*/
/* 				<div class="lk-empls-block lk-empls-block--list">*/
/* 					<div class="empls-list-search">*/
/* 						<input type="text" class="empls-list-search__input" placeholder="Поиск" v-model="search">*/
/* 						<div class="lk-input">*/
/* 							<div class="lk-select" v-on-click-away="hideDepartmentFilterSelectItemsList">*/
/* 								<div class="lk-select__header lk-select__header--fw" @click.stop="departmentFilter.isShowItemsList = !departmentFilter.isShowItemsList">{{ departmentSelectText }}</div>*/
/* 								<transition name="select">*/
/* 									<div class="lk-select__list" v-show="departmentFilter.isShowItemsList">*/
/* 										<div v-for="opt in departmentFilter.items" :key="opt.value">*/
/* 											<div class="lk-select__list-item" */
/* 												 @click.stop="selectSetItem(departmentFilter, opt)"*/
/* 												 >*/
/* 												{{ opt.title }}*/
/* 											</div>*/
/* 											<template v-if="opt.items && opt.items.length">*/
/* 												<div class="lk-select__list-item lk-select__list-item--subitem" */
/* 													 v-for="subopt in opt.items" */
/* 													 :key="subopt.value"*/
/* 													 @click.stop="selectSetItem(departmentFilter, subopt)"*/
/* 													 >*/
/* 													{{ subopt.title }}*/
/* 												</div>*/
/* 											</template>*/
/* 										</div>*/
/* 									</div>*/
/* 								</transition>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="empls-list">*/
/* 						<div class="empls-list-item" :class="{'empls-list-item--active': selectedEmpl == item}" v-for="(item, i) in filteredEmpls" :key="item.id" @click.stop="selectedEmpl = item">*/
/* 							<div class="empls-list-item__block empls-list-item__block--ava">*/
/* 								<img v-if="item.field_image" class="empls-list-item__ava" :src="'/site/data/images/large/' + item.field_image">*/
/* 								<div v-else class="empls-list-item__noava">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/></svg>	*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="empls-list-item__block empls-list-item__block--main">*/
/* 								<div class="empls-list-item__title">{{ item.field_fullname }}</div>*/
/* 								<div class="empls-list-item__subtitle">{{ item.field_position }}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="lk-empls-block lk-empls-block--single" v-show="selectedEmpl">*/
/* 					<div class="lk-modal__closer" @click.stop="selectedEmpl = null"></div>*/
/* 					<div class="empls-single" v-if="selectedEmpl">*/
/* 						<div class="empls-single__block empls-single__block--ava">*/
/* 							<img v-if="selectedEmpl.field_image" class="empls-single__ava" :src="'/site/data/images/large/' + selectedEmpl.field_image">*/
/* 							<div v-else class="empls-single__noava">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/></svg>	*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="empls-single__block empls-single__block--main">*/
/* 							<div class="empls-single__main">*/
/* 								<div class="empls-single__title">{{ selectedEmpl.field_fullname }}</div>*/
/* 								<div class="empls-single__pos">{{ selectedEmpl.field_position }}</div>*/
/* 								<div class="empls-single__lines">*/
/* 									<div class="empls-single__line">День рождения: {{ getBDay(selectedEmpl.field_bday) }}</div>*/
/* 									<div class="empls-single__line">Стаж:{{ calcExp() }}</div>*/
/* 								</div>*/
/* 								<div class="empls-single__grid">*/
/* 									<div class="empls-single__subtitle">Контакты</div>*/
/* 									<div class="empls-single__grid-wrap">*/
/* 										<!--div class="empls-single__card">*/
/* 											<div class="empls-single__card-title">Мобильный:</div> */
/* 											<div class="empls-single__card-value">{{ selectedEmpl.field_phone_personal }}</div>*/
/* 										</div-->*/
/* 										<div class="empls-single__card">*/
/* 											<div class="empls-single__card-title">E-mail: </div> */
/* 											<div class="empls-single__card-value"><a :href="selectedEmpl.email">{{ selectedEmpl.email }}</a></div>*/
/* 										</div>*/
/* 										<div class="empls-single__card" v-for="item in selectedEmpl.field_contacts_data">*/
/* 											<div class="empls-single__card-title">{{ item.title }}:</div> */
/* 											<div class="empls-single__card-value">{{ item.value }}</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
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
