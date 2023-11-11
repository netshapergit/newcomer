<?php

/* layouts.lk_catalog */
class __TwigTemplate_0b3ba381f99e8a185dbd8e7f838217c6175f52c0012941dd52ddd3e37040fe0a extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "set" => 3, "for" => 5, "include" => 16);
        $filters = array("reverse" => 5, "merge" => 13, "escape" => 17, "json_encode" => 18);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for', 'include'),
                array('reverse', 'merge', 'escape', 'json_encode'),
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
            $context["objects"] = array();
            // line 4
            echo "
";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array()), "sortBy", array(0 => "created_at"), "method")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "\t";
                $context["obj"] = array("id" => $this->getAttribute(                // line 7
$context["item"], "id", array()), "field_header" => $this->getAttribute(                // line 8
$context["item"], "field_header", array()), "field_synology" => $this->getAttribute(                // line 9
$context["item"], "field_synology", array()), "path" => $this->getAttribute(                // line 10
$context["item"], "path", array()), "field_image" => $this->getAttribute(                // line 11
$context["item"], "field_image", array()));
                // line 13
                echo "\t";
                $context["objects"] = twig_array_merge((isset($context["objects"]) ? $context["objects"] : null), array(0 => (isset($context["obj"]) ? $context["obj"] : null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
";
            // line 16
            $this->loadTemplate("header_lk", "layouts.lk_catalog", 16)->display($context);
            // line 17
            echo "<div class=\"lk\" id=\"lk\" data-user-id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\">
\t<section class=\"lk-objects\" id=\"lk-objects\" data-json=\"";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["objects"]) ? $context["objects"] : null)), "html", null, true));
            echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"lk-objects-search\">
\t\t\t\t<input type=\"text\" class=\"lk-objects-search__input lk-edit-input\" v-model=\"searchQuery\" placeholder=\"Поиск по названию объекта\">
\t\t\t</div>
\t\t\t<div class=\"lk-objects-list\">
\t\t\t\t";
            // line 24
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_employee", array())) {
                // line 25
                echo "\t\t\t\t";
                if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_not_editor", array())) {
                    // line 26
                    echo "\t\t\t\t<div class=\"lk-objects-list-item lk-objects-list-item--add\" @click.stop=\"isNewItemFormShowed = true\">
\t\t\t\t\t<svg fill=\"#ffffff\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"nofill\"><path d=\"M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z\"></path></svg>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t<lk-object v-for=\"item in filteredObjects\" :item=\"item\" :key=\"item.id\"></lk-object>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"lk-modal\" v-show=\"isNewItemFormShowed\" v-cloak>
\t\t\t<div class=\"lk-modal__wrapper\">
\t\t\t\t<div class=\"lk-modal__inner\">
\t\t\t\t\t<div class=\"lk-modal__closer\" @click.stop=\"isNewItemFormShowed = false\"></div>
\t\t\t\t\t<div class=\"lk-modal__top\">
\t\t\t\t\t\t<div class=\"lk-modal__title\">
\t\t\t\t\t\t\tСоздать новый объект
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-modal__content\">
\t\t\t\t\t\t\t<form id=\"js-create-item-form\" ref=\"new-item-form\" class=\"form hidden\" data-action=\"/user/pages\" method=\"post\" @submit.prevent=\"onNewObjectFormSubmit\">
\t\t\t\t\t\t\t\t<input class=\"form-control field--under\" name=\"user_id\" style=\"display:none;\" placeholder=\"Пользователь\" type=\"text\" value=\"";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t\t\t<input class=\"form-control field--border\" name=\"layout_id\" style=\"display:none;\" placeholder=\"Макет\" type=\"text\" value=\"14\">
\t\t\t\t\t\t\t\t<input class=\"form-control field--border\" name=\"parent_page_id\" style=\"display:none;\" placeholder=\"Верхняя страница\" type=\"text\" value=\"";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input class=\"form-control field--under\" name=\"alias\" placeholder=\"Алиас\" type=\"text\" :value=\"newObjectAlias\" id=\"alias\">
\t\t\t\t\t\t\t\t<input class=\"form-control field--border\" name=\"title\" placeholder=\"Заголовок окна\" type=\"text\" :value=\"newObject.title\" id=\"title\">
\t\t\t\t\t\t\t\t<input class=\"form-control field--border\" name=\"field_header\" type=\"text\" :value=\"newObject.title\" placeholder=\"Название\">
\t\t\t\t\t\t\t\t<input class=\"form-control field--border\" name=\"field_image\" type=\"text\" :value=\"newObject.image\" placeholder=\"Изображение\">
\t\t\t\t\t\t\t\t<input class=\"form-control field--border\" name=\"field_synology\" type=\"text\" :value=\"newObject.field_synology\" placeholder=\"Название\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button type=\"submit\" ref=\"new-item-form-submit-btn\">save</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"new-object\">
\t\t\t\t\t\t\t\t<div class=\"lk-input__group\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Название</div> 
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"newObject.title\" class=\"lk-input__input\">
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Изображение</div> 
\t\t\t\t\t\t\t\t\t\t<input v-if=\"!newObject.image\" value=\"Загрузить\" type=\"button\" @click.stop=\"onNewObjectFormImageButtonClick\" class=\"lk-input__input lk-btn--color-blue\">
\t\t\t\t\t\t\t\t\t\t<img v-else :src=\"'/site/data/images/medium/' + newObject.image\" @click.stop=\"onNewObjectFormImageButtonClick\">
\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"hidden\" ref=\"lk-object-new\" id=\"lk-object-new\" @change.stop=\"\$event => onImageUpload(\$event)\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Ссылка на Synology</div> 
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"newObject.field_synology\" class=\"lk-input__input\">
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-modal__bottom\">
\t\t\t\t\t\t<button :disabled=\"!newObjectAlias.length\" @click.stop=\"onNewObjectFormSubmitButtonClick\" class=\"lk-btn lk-btn--color-blue\">Создать</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</section>
</div>


<script src=\"/site/theme/js/translit.js\"></script>
";
            // line 88
            $this->loadTemplate("footer_lk", "layouts.lk_catalog", 88)->display($context);
            // line 89
            echo "
";
        } else {
            // line 91
            echo "\t<script>
\t\tlocation.href = location.origin + '/?login=yes'
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.lk_catalog";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 91,  172 => 89,  170 => 88,  125 => 46,  120 => 44,  105 => 31,  102 => 30,  96 => 26,  93 => 25,  91 => 24,  82 => 18,  77 => 17,  75 => 16,  72 => 15,  65 => 13,  63 => 11,  62 => 10,  61 => 9,  60 => 8,  59 => 7,  57 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if user %}*/
/* */
/* {% set objects = [] %}*/
/* */
/* {% for item in page.active_sub_pages.sortBy('created_at')|reverse %}*/
/* 	{% set obj = {*/
/* 		id: item.id,*/
/* 		field_header: item.field_header,*/
/* 		field_synology: item.field_synology,*/
/* 		path: item.path,*/
/* 		field_image: item.field_image*/
/* 	} %}*/
/* 	{% set objects = objects|merge([obj]) %}*/
/* {% endfor %}*/
/* */
/* {% include 'header_lk' %}*/
/* <div class="lk" id="lk" data-user-id="{$ user.id $}">*/
/* 	<section class="lk-objects" id="lk-objects" data-json="{$ objects|json_encode() $}">*/
/* 		<div class="container">*/
/* 			<div class="lk-objects-search">*/
/* 				<input type="text" class="lk-objects-search__input lk-edit-input" v-model="searchQuery" placeholder="Поиск по названию объекта">*/
/* 			</div>*/
/* 			<div class="lk-objects-list">*/
/* 				{% if user.field_is_employee %}*/
/* 				{% if not user.field_is_not_editor %}*/
/* 				<div class="lk-objects-list-item lk-objects-list-item--add" @click.stop="isNewItemFormShowed = true">*/
/* 					<svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nofill"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"></path></svg>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* 				<lk-object v-for="item in filteredObjects" :item="item" :key="item.id"></lk-object>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="lk-modal" v-show="isNewItemFormShowed" v-cloak>*/
/* 			<div class="lk-modal__wrapper">*/
/* 				<div class="lk-modal__inner">*/
/* 					<div class="lk-modal__closer" @click.stop="isNewItemFormShowed = false"></div>*/
/* 					<div class="lk-modal__top">*/
/* 						<div class="lk-modal__title">*/
/* 							Создать новый объект*/
/* 						</div>*/
/* 						<div class="lk-modal__content">*/
/* 							<form id="js-create-item-form" ref="new-item-form" class="form hidden" data-action="/user/pages" method="post" @submit.prevent="onNewObjectFormSubmit">*/
/* 								<input class="form-control field--under" name="user_id" style="display:none;" placeholder="Пользователь" type="text" value="{$ user.id $}">*/
/* 								<input class="form-control field--border" name="layout_id" style="display:none;" placeholder="Макет" type="text" value="14">*/
/* 								<input class="form-control field--border" name="parent_page_id" style="display:none;" placeholder="Верхняя страница" type="text" value="{$ page.id $}">*/
/* 								*/
/* 								<input class="form-control field--under" name="alias" placeholder="Алиас" type="text" :value="newObjectAlias" id="alias">*/
/* 								<input class="form-control field--border" name="title" placeholder="Заголовок окна" type="text" :value="newObject.title" id="title">*/
/* 								<input class="form-control field--border" name="field_header" type="text" :value="newObject.title" placeholder="Название">*/
/* 								<input class="form-control field--border" name="field_image" type="text" :value="newObject.image" placeholder="Изображение">*/
/* 								<input class="form-control field--border" name="field_synology" type="text" :value="newObject.field_synology" placeholder="Название">*/
/* 								*/
/* 								<button type="submit" ref="new-item-form-submit-btn">save</button>*/
/* 							</form>*/
/* 							<div class="new-object">*/
/* 								<div class="lk-input__group">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Название</div> */
/* 										<input type="text" v-model="newObject.title" class="lk-input__input">*/
/* 									</div> */
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Изображение</div> */
/* 										<input v-if="!newObject.image" value="Загрузить" type="button" @click.stop="onNewObjectFormImageButtonClick" class="lk-input__input lk-btn--color-blue">*/
/* 										<img v-else :src="'/site/data/images/medium/' + newObject.image" @click.stop="onNewObjectFormImageButtonClick">*/
/* 										<input type="file" class="hidden" ref="lk-object-new" id="lk-object-new" @change.stop="$event => onImageUpload($event)">*/
/* 									</div>*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Ссылка на Synology</div> */
/* 										<input type="text" v-model="newObject.field_synology" class="lk-input__input">*/
/* 									</div> */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="lk-modal__bottom">*/
/* 						<button :disabled="!newObjectAlias.length" @click.stop="onNewObjectFormSubmitButtonClick" class="lk-btn lk-btn--color-blue">Создать</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 	</section>*/
/* </div>*/
/* */
/* */
/* <script src="/site/theme/js/translit.js"></script>*/
/* {% include 'footer_lk' %}*/
/* */
/* {% else %}*/
/* 	<script>*/
/* 		location.href = location.origin + '/?login=yes'*/
/* 	</script>*/
/* {% endif %}*/
