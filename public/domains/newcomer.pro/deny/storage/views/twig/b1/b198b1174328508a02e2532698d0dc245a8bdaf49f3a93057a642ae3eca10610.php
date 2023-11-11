<?php

/* layouts.lk_users */
class __TwigTemplate_aed5a98aae7713de3f9cb28a327dcf22ff825c20346894c8d777bade8591e37c extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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
        $this->loadTemplate("header_lk", "layouts.lk_users", 1)->display($context);
        // line 2
        echo "
<div class=\"lk\" data-user-id=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\">
\t<div class=\"lk__layout\">
\t\t<div class=\"lk-menu\">
\t\t\t";
        // line 6
        $this->loadTemplate("menu_lk", "layouts.lk_users", 6)->display(array_merge($context, array("rolename" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()))));
        // line 7
        echo "\t\t</div>
\t\t<div class=\"lk-content\">
\t\t\t<div class=\"lk-content-header\">
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<h1>Пользователи</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"hw-filters\">
\t\t\t\t<div class=\"hw-filter\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Поиск\" v-model=\"search\" class=\"q-input\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"hw-filter\">
\t\t\t\t\t<select-filter
\t\t\t\t\t\t:items=\"ROLES\"
\t\t\t\t\t\t:selected-items=\"filters.roles\"
\t\t\t\t\t\t:text-field=\"'name_ru'\"
\t\t\t\t\t\t:title=\"'Роли'\"
\t\t\t\t\t\t@set-item=\"payload => setFilter(filters.roles, payload)\"
\t\t\t\t\t></select-filter>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-qlist\">
\t\t\t\t<div class=\"lk-qlist-item\" v-for=\"item in filteredUsers\">
\t\t\t\t\t<div class=\"lk-qlist-item__block\">
\t\t\t\t\t\t<div class=\"lk-qlist-item__title\">
\t\t\t\t\t\t\t<template v-if=\"item.field_fullname\">
\t\t\t\t\t\t\t\t{{item.field_fullname}}
\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t<template v-else>
\t\t\t\t\t\t\t\tФИО
\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-qlist-item__block\">
\t\t\t\t\t\t<div class=\"lk-qlist-item__actions\" v-if=\"canEditUser(item)\">
\t\t\t\t\t\t\t<select class=\"q-select\" v-model=\"item.field_role_id\">
\t\t\t\t\t\t\t\t<option v-for=\"opt in filteredRoles\" :value=\"opt.id\">{{opt.name_ru}}</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" v-model=\"item.active\" :id=\"'user-active-' + item.id\" :name=\"'user-active-' + item.id\">
\t\t\t\t\t\t\t\t<label :for=\"'user-active-' + item.id\">Пользователь активен</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange mbtn--size-s\" @click.stop=\"saveUser(item)\">Сохранить</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div v-else>
\t\t\t\t\t\t\tАдминистратор
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</div>

";
        // line 66
        $this->loadTemplate("footer_lk", "layouts.lk_users", 66)->display($context);
        // line 67
        echo "<script src=\"/site/theme/js/lk_users.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lk_users";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 67,  117 => 66,  56 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header_lk' %}*/
/* */
/* <div class="lk" data-user-id="{$ user.id $}">*/
/* 	<div class="lk__layout">*/
/* 		<div class="lk-menu">*/
/* 			{% include 'menu_lk' with {rolename: user.role.name} %}*/
/* 		</div>*/
/* 		<div class="lk-content">*/
/* 			<div class="lk-content-header">*/
/* 				<div class="lk-content-header__block">*/
/* 					<h1>Пользователи</h1>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="hw-filters">*/
/* 				<div class="hw-filter">*/
/* 					<input type="text" placeholder="Поиск" v-model="search" class="q-input">*/
/* 				</div>*/
/* 				*/
/* 				<div class="hw-filter">*/
/* 					<select-filter*/
/* 						:items="ROLES"*/
/* 						:selected-items="filters.roles"*/
/* 						:text-field="'name_ru'"*/
/* 						:title="'Роли'"*/
/* 						@set-item="payload => setFilter(filters.roles, payload)"*/
/* 					></select-filter>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-qlist">*/
/* 				<div class="lk-qlist-item" v-for="item in filteredUsers">*/
/* 					<div class="lk-qlist-item__block">*/
/* 						<div class="lk-qlist-item__title">*/
/* 							<template v-if="item.field_fullname">*/
/* 								{{item.field_fullname}}*/
/* 							</template>*/
/* 							<template v-else>*/
/* 								ФИО*/
/* 							</template>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="lk-qlist-item__block">*/
/* 						<div class="lk-qlist-item__actions" v-if="canEditUser(item)">*/
/* 							<select class="q-select" v-model="item.field_role_id">*/
/* 								<option v-for="opt in filteredRoles" :value="opt.id">{{opt.name_ru}}</option>*/
/* 							</select>*/
/* 							*/
/* 							<div>*/
/* 								<input type="checkbox" v-model="item.active" :id="'user-active-' + item.id" :name="'user-active-' + item.id">*/
/* 								<label :for="'user-active-' + item.id">Пользователь активен</label>*/
/* 							</div>*/
/* 							<button class="mbtn mbtn--color-orange mbtn--size-s" @click.stop="saveUser(item)">Сохранить</button>*/
/* 						</div>*/
/* 						<div v-else>*/
/* 							Администратор*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* <script src="/site/theme/js/lk_users.js" type="module"></script>*/
