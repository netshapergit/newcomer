<?php

/* layouts.lk */
class __TwigTemplate_9d3dbac3cd99e3c2c11a573789f6794db8ce188721e9ed50cbfc5ae34199ff83 extends TwigBridge\Twig\Template
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
        $this->loadTemplate("header_lk", "layouts.lk", 1)->display($context);
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
        $this->loadTemplate("menu_lk", "layouts.lk", 6)->display(array_merge($context, array("rolename" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()))));
        // line 7
        echo "\t\t</div>
\t\t<div class=\"lk-content\">
\t\t\t<div class=\"lk-content-header\">
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<h1>Персональные данные</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<div class=\"lk-content-actions\">
\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange\" @click.stop=\"onSaveChangesButtonClick\">Сохранить</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"page-edit\">
\t\t\t\t<div class=\"page-edit-block page-edit-block--ava\">
\t\t\t\t\t<div class=\"page-edit-block__sub\">
\t\t\t\t\t\t<div class=\"lk-ava\" @click.stop=\"onAddFileClick('page-edit-image')\">
\t\t\t\t\t\t\t<img :src=\"'/site/data/images/large/' + user.field_image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"file\" class=\"hidden\" ref=\"page-edit-image\" id=\"page-edit-image\" @change.stop=\"onImageUpload(\$event)\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-edit-block__sub\">
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<label class=\"page-edit-input__label\">ФИО</label>
\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"user.field_fullname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block page-edit-block--grid2\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<label class=\"page-edit-input__label\">Роль</label>
\t\t\t\t\t\t\t\t<div class=\"q-input\">{{userRoleName}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<label class=\"page-edit-input__label\">Логин</label>
\t\t\t\t\t\t\t\t<div class=\"q-input\">{{user.login}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<label class=\"page-edit-input__label\">Email</label>
\t\t\t\t\t\t\t\t<div class=\"q-input\">{{user.email}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Новый пароль</label>
\t\t\t\t\t\t<input type=\"password\" v-model=\"user.password\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Подтверждение пароля</label>
\t\t\t\t\t\t<input type=\"password\" v-model=\"user.password_confirmation\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<form data-action=\"/user/users/";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\" class=\"js-user-edit-form hidden\" ref=\"js-opage-form\" autocomplete=\"off\" @submit.prevent=\"saveChanges\"> 
\t\t\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">
\t\t\t\t
\t\t\t\t<input class=\"form-control\" autocomplete=\"false\" id=\"password\" name=\"password\" placeholder=\"Пароль\" type=\"password\" :value=\"user.password\">
\t\t\t\t<input class=\"form-control\" autocomplete=\"false\" id=\"password_confirmation\" name=\"password_confirmation\" placeholder=\"Подтверждение\" type=\"password\" :value=\"user.password_confirmation\">
\t\t\t\t
\t\t\t\t<input name=\"field_fullname\" autocomplete=\"false\" type=\"text\" :value=\"user.field_fullname\">
\t\t\t\t<input name=\"field_image\" autocomplete=\"false\" type=\"text\" :value=\"user.field_image\">
\t\t\t\t
\t\t\t\t<button type=\"submit\" class=\"mbtn js-up-user-save\" ref=\"save-changes-form-button\">Сохранить</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
        // line 82
        $this->loadTemplate("footer_lk", "layouts.lk", 82)->display($context);
        // line 83
        echo "<script src=\"/site/theme/js/lk_personal.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lk";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 83,  136 => 82,  118 => 67,  56 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
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
/* 					<h1>Персональные данные</h1>*/
/* 				</div>*/
/* 				<div class="divider"></div>*/
/* 				<div class="lk-content-header__block">*/
/* 					<div class="lk-content-actions">*/
/* 						<button class="mbtn mbtn--color-orange" @click.stop="onSaveChangesButtonClick">Сохранить</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="page-edit">*/
/* 				<div class="page-edit-block page-edit-block--ava">*/
/* 					<div class="page-edit-block__sub">*/
/* 						<div class="lk-ava" @click.stop="onAddFileClick('page-edit-image')">*/
/* 							<img :src="'/site/data/images/large/' + user.field_image">*/
/* 						</div>*/
/* 						<input type="file" class="hidden" ref="page-edit-image" id="page-edit-image" @change.stop="onImageUpload($event)">*/
/* 					</div>*/
/* 					<div class="page-edit-block__sub">*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<label class="page-edit-input__label">ФИО</label>*/
/* 								<input type="text" v-model="user.field_fullname">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block page-edit-block--grid2">*/
/* 							<div class="page-edit-input">*/
/* 								<label class="page-edit-input__label">Роль</label>*/
/* 								<div class="q-input">{{userRoleName}}</div>*/
/* 							</div>*/
/* 							<div class="page-edit-input">*/
/* 								<label class="page-edit-input__label">Логин</label>*/
/* 								<div class="q-input">{{user.login}}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<label class="page-edit-input__label">Email</label>*/
/* 								<div class="q-input">{{user.email}}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Новый пароль</label>*/
/* 						<input type="password" v-model="user.password">*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Подтверждение пароля</label>*/
/* 						<input type="password" v-model="user.password_confirmation">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<form data-action="/user/users/{$ user.id $}" class="js-user-edit-form hidden" ref="js-opage-form" autocomplete="off" @submit.prevent="saveChanges"> */
/* 				<input name="_method" type="hidden" value="put">*/
/* 				*/
/* 				<input class="form-control" autocomplete="false" id="password" name="password" placeholder="Пароль" type="password" :value="user.password">*/
/* 				<input class="form-control" autocomplete="false" id="password_confirmation" name="password_confirmation" placeholder="Подтверждение" type="password" :value="user.password_confirmation">*/
/* 				*/
/* 				<input name="field_fullname" autocomplete="false" type="text" :value="user.field_fullname">*/
/* 				<input name="field_image" autocomplete="false" type="text" :value="user.field_image">*/
/* 				*/
/* 				<button type="submit" class="mbtn js-up-user-save" ref="save-changes-form-button">Сохранить</button>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* <script src="/site/theme/js/lk_personal.js" type="module"></script>*/
