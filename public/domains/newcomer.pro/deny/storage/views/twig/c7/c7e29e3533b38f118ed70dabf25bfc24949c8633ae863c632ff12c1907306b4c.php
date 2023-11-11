<?php

/* layouts.lk_homeworks */
class __TwigTemplate_970c3468dc2d9476f930b0ff8c7348d0cc05ae5429fad3aa51ffdd742d2b229c extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "if" => 48);
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
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
        $this->loadTemplate("header_lk", "layouts.lk_homeworks", 1)->display($context);
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
        $this->loadTemplate("menu_lk", "layouts.lk_homeworks", 6)->display(array_merge($context, array("rolename" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()))));
        // line 7
        echo "\t\t</div>
\t\t<div class=\"lk-content\">
\t\t\t<div class=\"lk-content-header\">
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<h1>Проверочные работы</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<div class=\"lk-content-search\">
\t\t\t\t\t\t";
        // line 34
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"hw-filters\">
\t\t\t\t
\t\t\t\t<div class=\"hw-filter\" style=\"flex: 0 0 225px;\">
\t\t\t\t\t<div class=\"hw-filter__title\"></div>
\t\t\t\t\t<div class=\"checkbox-filter\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"hw-filter-status\" name=\"hw-filter-status\" v-model=\"filters.status\">
\t\t\t\t\t\t<label for=\"hw-filter-status\">Непровереные работы</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 48
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()) == "admin")) {
            // line 49
            echo "\t\t\t\t<div class=\"hw-filter\">
\t\t\t\t\t<div class=\"hw-filter__title\">Преподаватели {{filters.teachers}}</div>
\t\t\t\t\t<select-filter
\t\t\t\t\t\t:items=\"teachers\"
\t\t\t\t\t\t:selected-items=\"filters.teachers\"
\t\t\t\t\t\t:text-field=\"'field_fullname'\"
\t\t\t\t\t\t:title=\"'Преподаватели'\"
\t\t\t\t\t\t@set-item=\"payload => setFilter(filters.teachers, payload)\"
\t\t\t\t\t></select-filter>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t
\t\t\t\t";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()) != "student")) {
            // line 62
            echo "\t\t\t\t<div class=\"hw-filter\">
\t\t\t\t\t<div class=\"hw-filter__title\">Сотрудник {{filters.students}}</div>
\t\t\t\t\t<select-filter
\t\t\t\t\t\t:items=\"students\"
\t\t\t\t\t\t:selected-items=\"filters.students\"
\t\t\t\t\t\t:text-field=\"'field_fullname'\"
\t\t\t\t\t\t:title=\"'Сотрудник'\"
\t\t\t\t\t\t@set-item=\"payload => setFilter(filters.students, payload)\"
\t\t\t\t\t></select-filter>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t
\t\t\t\t<div class=\"hw-filter\">
\t\t\t\t\t<div class=\"hw-filter__title\">Задачи {{filters.lessons}}</div>
\t\t\t\t\t<select-filter
\t\t\t\t\t\t:items=\"lessonsFilterItems\"
\t\t\t\t\t\t:selected-items=\"filters.lessons\"
\t\t\t\t\t\t:text-field=\"'field_header'\"
\t\t\t\t\t\t:title=\"'Задачи'\"
\t\t\t\t\t\t@set-item=\"payload => setFilter(filters.lessons, payload)\"
\t\t\t\t\t></select-filter>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"hw-filter\">
\t\t\t\t\t<div class=\"hw-filter__title\">Курсы {{filters.courses}}</div>
\t\t\t\t\t<select-filter
\t\t\t\t\t\t:items=\"coursesFilterItems\"
\t\t\t\t\t\t:selected-items=\"filters.courses\"
\t\t\t\t\t\t:text-field=\"'field_header'\"
\t\t\t\t\t\t:title=\"'Курсы'\"
\t\t\t\t\t\t@set-item=\"payload => setFilter(filters.courses, payload)\"
\t\t\t\t\t></select-filter>
\t\t\t\t</div>
\t\t\t\t";
        // line 145
        echo "\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"hw-list\">
\t\t\t\t<hw-item 
\t\t\t\t\tv-for=\"item in filteredItems\" 
\t\t\t\t\t:item=\"item\" 
\t\t\t\t\t:rating-systems=\"RATING_SYSTEMS\"
\t\t\t\t\t:user=\"USER\"
\t\t\t\t\t:key=\"item.id\"
\t\t\t\t\t@delete-item=\"deleteItem\"\t
\t\t\t\t\t@update-item=\"updateItem\"\t 
\t\t\t\t></hw-item>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 163
        $this->loadTemplate("footer_lk", "layouts.lk_homeworks", 163)->display($context);
        // line 164
        echo "<script src=\"/site/theme/js/lk_homeworks.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lk_homeworks";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 164,  160 => 163,  140 => 145,  116 => 73,  103 => 62,  101 => 61,  98 => 60,  85 => 49,  83 => 48,  67 => 34,  56 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
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
/* 					<h1>Проверочные работы</h1>*/
/* 				</div>*/
/* 				<div class="divider"></div>*/
/* 				<div class="lk-content-header__block">*/
/* 					<div class="lk-content-search">*/
/* 						{#*/
/* 						<vue-tags-input*/
/* 							v-model="tag"*/
/* 							:tags="search.tags"*/
/* 							:autocomplete-items="filteredTags"*/
/* 							@tags-changed="newTags => search.tags = newTags"*/
/* 							placeholder="Поиск"*/
/* 						>*/
/* 							<div*/
/* 								slot="autocomplete-item"*/
/* 								slot-scope="props"*/
/* 								class="my-item"*/
/* 								@click="props.performAdd(props.item)"*/
/* 							>*/
/* 								<template v-if="props.item.type == 'tag'">#</template>{{ props.item.text }}*/
/* 							</div>*/
/* 						</vue-tags-input>*/
/* 						#}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="hw-filters">*/
/* 				*/
/* 				<div class="hw-filter" style="flex: 0 0 225px;">*/
/* 					<div class="hw-filter__title"></div>*/
/* 					<div class="checkbox-filter">*/
/* 						<input type="checkbox" id="hw-filter-status" name="hw-filter-status" v-model="filters.status">*/
/* 						<label for="hw-filter-status">Непровереные работы</label>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				{% if user.role.name == 'admin' %}*/
/* 				<div class="hw-filter">*/
/* 					<div class="hw-filter__title">Преподаватели {{filters.teachers}}</div>*/
/* 					<select-filter*/
/* 						:items="teachers"*/
/* 						:selected-items="filters.teachers"*/
/* 						:text-field="'field_fullname'"*/
/* 						:title="'Преподаватели'"*/
/* 						@set-item="payload => setFilter(filters.teachers, payload)"*/
/* 					></select-filter>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				{% if user.role.name != 'student' %}*/
/* 				<div class="hw-filter">*/
/* 					<div class="hw-filter__title">Сотрудник {{filters.students}}</div>*/
/* 					<select-filter*/
/* 						:items="students"*/
/* 						:selected-items="filters.students"*/
/* 						:text-field="'field_fullname'"*/
/* 						:title="'Сотрудник'"*/
/* 						@set-item="payload => setFilter(filters.students, payload)"*/
/* 					></select-filter>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				<div class="hw-filter">*/
/* 					<div class="hw-filter__title">Задачи {{filters.lessons}}</div>*/
/* 					<select-filter*/
/* 						:items="lessonsFilterItems"*/
/* 						:selected-items="filters.lessons"*/
/* 						:text-field="'field_header'"*/
/* 						:title="'Задачи'"*/
/* 						@set-item="payload => setFilter(filters.lessons, payload)"*/
/* 					></select-filter>*/
/* 				</div>*/
/* 				*/
/* 				<div class="hw-filter">*/
/* 					<div class="hw-filter__title">Курсы {{filters.courses}}</div>*/
/* 					<select-filter*/
/* 						:items="coursesFilterItems"*/
/* 						:selected-items="filters.courses"*/
/* 						:text-field="'field_header'"*/
/* 						:title="'Курсы'"*/
/* 						@set-item="payload => setFilter(filters.courses, payload)"*/
/* 					></select-filter>*/
/* 				</div>*/
/* 				{#*/
/* 				<div class="hw-filter">*/
/* 					<div class="hw-filter__title">Преподаватели {{filters.teachers}}</div>*/
/* 					<div class="filter-select">*/
/* 						<div class="filter-select__trigger"></div>*/
/* 						<div class="filter-select__items">*/
/* 							<div class="filter-select__item" @click.stop="setFilter(filters.teachers, item.id)" v-for="item in teachers" :key="item.id">*/
/* 								{{item.field_fullname}}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="hw-filter">*/
/* 					<div class="hw-filter__title">Ученики {{filters.students}}</div>*/
/* 					<div class="filter-select">*/
/* 						<div class="filter-select__trigger"></div>*/
/* 						<div class="filter-select__items">*/
/* 							<div class="filter-select__item" @click.stop="setFilter(filters.students, item.id)" v-for="item in students" :key="item.id">*/
/* 								{{item.field_fullname}}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="hw-filter">*/
/* 					<div class="hw-filter__title">Уроки {{filters.lessons}}</div>*/
/* 					<div class="filter-select">*/
/* 						<div class="filter-select__trigger"></div>*/
/* 						<div class="filter-select__items">*/
/* 							<div class="filter-select__item" @click.stop="setFilter(filters.lessons, item.id)" v-for="item in lessonsFilterItems" :key="item.id">*/
/* 								{{item.field_header}}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="hw-filter">*/
/* 					<div class="hw-filter__title">Курсы {{filters.courses}}</div>*/
/* 					<div class="filter-select">*/
/* 						<div class="filter-select__trigger"></div>*/
/* 						<div class="filter-select__items">*/
/* 							<div class="filter-select__item" @click.stop="setFilter(filters.courses, item.id)" v-for="item in coursesFilterItems" :key="item.id">*/
/* 								{{item.field_header}}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				#}*/
/* 				*/
/* 			</div>*/
/* 			*/
/* 			<div class="hw-list">*/
/* 				<hw-item */
/* 					v-for="item in filteredItems" */
/* 					:item="item" */
/* 					:rating-systems="RATING_SYSTEMS"*/
/* 					:user="USER"*/
/* 					:key="item.id"*/
/* 					@delete-item="deleteItem"	*/
/* 					@update-item="updateItem"	 */
/* 				></hw-item>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* <script src="/site/theme/js/lk_homeworks.js" type="module"></script>*/
