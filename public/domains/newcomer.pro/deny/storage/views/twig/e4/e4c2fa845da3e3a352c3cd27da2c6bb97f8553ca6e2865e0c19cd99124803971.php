<?php

/* layouts.test */
class __TwigTemplate_d26e913bf0874b0051c7ce238ef3f9fd52c5c49aa4251ffdb53d67538f3ffcfd extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "set" => 3, "if" => 12);
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'set', 'if'),
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
        $this->loadTemplate("header_lk", "layouts.test", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $context["isEditMode"] = ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "edit", array()) == "1");
        // line 4
        $context["isUserCanEdit"] = ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()) != "student");
        // line 5
        echo "
<div class=\"lk\" data-user-id=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\">
\t<div class=\"lk__layout\">
\t\t<div class=\"lk-menu\">
\t\t\t";
        // line 9
        $this->loadTemplate("menu_lk", "layouts.test", 9)->display(array_merge($context, array("rolename" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()))));
        // line 10
        echo "\t\t</div>
\t\t<div class=\"lk-content\" v-if=\"page\">
\t\t\t";
        // line 12
        if (((isset($context["isEditMode"]) ? $context["isEditMode"] : null) && (isset($context["isUserCanEdit"]) ? $context["isUserCanEdit"] : null))) {
            // line 13
            echo "\t\t\t
\t\t\t<div class=\"lk-content-header\">
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<h1>{{ page.field_header }}</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<div class=\"lk-content-actions\">
\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange\" @click.stop=\"onSaveChangesButtonClick\">Сохранить</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"page-edit\">
\t\t\t\t<div class=\"page-edit-block page-edit-block--grid2\">
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Название</label>
\t\t\t\t\t\t<input type=\"text\" v-model=\"page.field_header\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-edit-tb\">
\t\t\t\t\t\tМаксимальный балл за тест - {{testMaxRate}}
\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t<label class=\"page-edit-input__label\">Проходной балл</label>
\t\t\t\t\t\t\t<input type=\"number\" v-model.number=\"page.field_passing_score\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-test\">
\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange\" @click.stop=\"addNewTestItem\">Создать новое задание</button>
\t\t\t\t\t\t<div class=\"page-edit-test__list\">
\t\t\t\t\t\t\t<test-item
\t\t\t\t\t\t\t\tv-for=\"q in page.field_test_questions\"
\t\t\t\t\t\t\t\t:key=\"q.id\"
\t\t\t\t\t\t\t\t:item=\"q\"
\t\t\t\t\t\t\t\t@delete-item=\"deleteTestItem\"
\t\t\t\t\t\t\t></test-item>
\t\t\t\t\t\t\t";
            // line 84
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<form data-action=\"/user/pages/";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
            echo "\" class=\"js-edit-form hidden\" method=\"post\" ref=\"js-opage-form\" method=\"post\" @submit.prevent=\"saveChanges\">
\t\t\t\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">
\t\t\t\t\t<input class=\"hidden\" id=\"user_id\" name=\"user_id\" placeholder=\"User ID\" type=\"text\" value=\"";
            // line 92
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\">
\t\t\t\t\t
\t\t\t\t\t<textarea name=\"field_test_questions\">{{JSON.stringify(page.field_test_questions)}}</textarea>
\t\t\t\t\t<input type=\"text\" name=\"field_header\" :value=\"page.field_header\">
\t\t\t\t\t<input type=\"text\" name=\"active\" :value=\"Number(page.active)\">
\t\t\t\t\t<input type=\"text\" name=\"field_passing_score\" :value=\"page.field_passing_score\">
\t\t\t\t\t
\t\t\t\t\t<button ref=\"save-changes-form-button\">save</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t
\t\t\t";
        } else {
            // line 104
            echo "\t\t\t
\t\t\t";
        }
        // line 106
        echo "\t\t</div>
\t</div>
</div>

";
        // line 110
        $this->loadTemplate("footer_lk", "layouts.test", 110)->display($context);
        // line 111
        echo "<script src=\"/site/theme/js/lk_test.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.test";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 111,  146 => 110,  140 => 106,  136 => 104,  121 => 92,  116 => 90,  108 => 84,  69 => 13,  67 => 12,  63 => 10,  61 => 9,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header_lk' %}*/
/* */
/* {% set isEditMode = request.input.edit == '1' %}*/
/* {% set isUserCanEdit = user.role.name != 'student' %}*/
/* */
/* <div class="lk" data-user-id="{$ user.id $}">*/
/* 	<div class="lk__layout">*/
/* 		<div class="lk-menu">*/
/* 			{% include 'menu_lk' with {rolename: user.role.name} %}*/
/* 		</div>*/
/* 		<div class="lk-content" v-if="page">*/
/* 			{% if isEditMode and isUserCanEdit %}*/
/* 			*/
/* 			<div class="lk-content-header">*/
/* 				<div class="lk-content-header__block">*/
/* 					<h1>{{ page.field_header }}</h1>*/
/* 				</div>*/
/* 				<div class="divider"></div>*/
/* 				<div class="lk-content-header__block">*/
/* 					<div class="lk-content-actions">*/
/* 						<button class="mbtn mbtn--color-orange" @click.stop="onSaveChangesButtonClick">Сохранить</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="page-edit">*/
/* 				<div class="page-edit-block page-edit-block--grid2">*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Название</label>*/
/* 						<input type="text" v-model="page.field_header">*/
/* 					</div>*/
/* 					<div class="page-edit-tb">*/
/* 						Максимальный балл за тест - {{testMaxRate}}*/
/* 						<div class="page-edit-input">*/
/* 							<label class="page-edit-input__label">Проходной балл</label>*/
/* 							<input type="number" v-model.number="page.field_passing_score">*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-test">*/
/* 						<button class="mbtn mbtn--color-orange" @click.stop="addNewTestItem">Создать новое задание</button>*/
/* 						<div class="page-edit-test__list">*/
/* 							<test-item*/
/* 								v-for="q in page.field_test_questions"*/
/* 								:key="q.id"*/
/* 								:item="q"*/
/* 								@delete-item="deleteTestItem"*/
/* 							></test-item>*/
/* 							{#*/
/* 							<div class="page-edit-test-item" v-for="q in page.field_test_questions">*/
/* 								<div class="page-edit-test-item__title">*/
/* 									<div class="page-edit-input">*/
/* 										<label class="page-edit-input__label">Задание</label>*/
/* 										<input type="text" v-model="q.question.title">*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="page-edit-test-item__questions">*/
/* 									<div class="page-edit-test-item__question" v-for="question in q.question.items">*/
/* 										<div class="page-edit-input">*/
/* 											<label class="page-edit-input__label">Вопрос</label>*/
/* 											<input type="text" v-model="question.text">*/
/* 										</div>*/
/* 									</div>*/
/* 									<button class="mbtn mbtn--color-orange" @click.stop="addNewQuestionVariantToTestItem(q)">Добавить вопрос</button>*/
/* 								</div>*/
/* 								<div class="page-edit-test-item__variants">*/
/* 									<div class="page-edit-test-item__variants-list">*/
/* 										<div class="page-edit-test-item__variant" v-for="v in q.variants">*/
/* 											<input type="checkbox" v-model="v.isCorrect" :id="'question-' + q.id + '-variant-' + v.id">*/
/* 											<label :for="'question-' + q.id + '-variant-' + v.id">*/
/* 												Верный ответ*/
/* 											</label>*/
/* 											<input type="text" class="q-input" v-model="v.text" placeholder="Текст">*/
/* 											<input type="number" v-model.number="v.rate" placeholder="Баллы" min="0">*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="page-edit-test-item__variants-new">*/
/* 										<button class="mbtn mbtn--color-orange" @click.stop="addNewVariantToQuestion(q)">Добавить вариант ответа</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							#}*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				<form data-action="/user/pages/{$ page.id $}" class="js-edit-form hidden" method="post" ref="js-opage-form" method="post" @submit.prevent="saveChanges">*/
/* 					<input name="_method" type="hidden" value="put">*/
/* 					<input class="hidden" id="user_id" name="user_id" placeholder="User ID" type="text" value="{$ user.id $}">*/
/* 					*/
/* 					<textarea name="field_test_questions">{{JSON.stringify(page.field_test_questions)}}</textarea>*/
/* 					<input type="text" name="field_header" :value="page.field_header">*/
/* 					<input type="text" name="active" :value="Number(page.active)">*/
/* 					<input type="text" name="field_passing_score" :value="page.field_passing_score">*/
/* 					*/
/* 					<button ref="save-changes-form-button">save</button>*/
/* 				</form>*/
/* 			</div>*/
/* 			*/
/* 			{% else %}*/
/* 			*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* <script src="/site/theme/js/lk_test.js" type="module"></script>*/
