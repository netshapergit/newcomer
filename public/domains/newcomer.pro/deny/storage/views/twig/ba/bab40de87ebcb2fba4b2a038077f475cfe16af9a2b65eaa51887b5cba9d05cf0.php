<?php

/* layouts.program */
class __TwigTemplate_ed82506a9cbdf4f532695c4eb5e6ae684d4ced2ea3ef634069dc87a7fb4173b8 extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 6, "raw" => 173);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'set', 'if'),
                array('escape', 'raw'),
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
        $this->loadTemplate("header_lk", "layouts.program", 1)->display($context);
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
        $this->loadTemplate("menu_lk", "layouts.program", 9)->display(array_merge($context, array("rolename" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()))));
        // line 10
        echo "\t\t</div>
\t\t<div class=\"lk-content\" v-if=\"page\">
\t\t\t";
        // line 12
        if (((isset($context["isEditMode"]) ? $context["isEditMode"] : null) && (isset($context["isUserCanEdit"]) ? $context["isUserCanEdit"] : null))) {
            // line 13
            echo "\t\t\t<div class=\"lk-content-header\">
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
\t\t\t\t<div class=\"page-edit-block page-edit-block--top\">
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Название</label>
\t\t\t\t\t\t<input type=\"text\" v-model=\"page.field_header\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-edit-img\">
\t\t\t\t\t\t<div class=\"page-edit-img__button\" @click.stop=\"onAddFileClick('page-edit-image')\">
\t\t\t\t\t\t\t{{ page.field_image ? page.field_image : 'Изображение' }}
\t\t\t\t\t\t\t<div class=\"page-edit-img__button-add\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 33 33\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M27.5875 5.19586C21.4297 -0.961865 11.3535 -0.961865 5.19575 5.19586C-0.961977 11.3536 -0.961976 21.4298 5.19575 27.5876C11.3535 33.7453 21.4297 33.7453 27.5875 27.5876C33.7452 21.4298 33.7452 11.3536 27.5875 5.19586ZM17.959 23.1092C17.959 24.0049 17.2873 24.6766 16.3916 24.6766C15.4959 24.6766 14.8242 24.0049 14.8242 23.1092V17.9591H9.67409C8.77842 17.9591 8.10667 17.2874 8.10667 16.3917C8.10667 15.496 8.77842 14.8243 9.67409 14.8243L14.8242 14.8243L14.8242 9.6742C14.8242 8.77853 15.4959 8.10678 16.3916 8.10678C17.2873 8.10678 17.959 8.77853 17.959 9.6742L17.959 14.8243L23.1091 14.8243C24.0048 14.8243 24.6765 15.496 24.6765 16.3917C24.6765 17.2874 24.0048 17.9591 23.1091 17.9591H17.959V23.1092Z\" fill=\"#CDCDCD\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"page-edit-img__preview\" v-if=\"page.field_image\">
\t\t\t\t\t\t\t\t<img :src=\"'/site/data/images/large/' + page.field_image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"file\" class=\"hidden\" ref=\"page-edit-image\" id=\"page-edit-image\" @change.stop=\"onImageUpload(\$event)\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-edit-block__subblock page-edit-block__subblock--pageactive\">
\t\t\t\t\t\t<div class=\"page-edit-switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" v-model=\"page.active\" id=\"page-active\">
\t\t\t\t\t\t\t<label class=\"page-edit-switch__label\" for=\"page-active\">
\t\t\t\t\t\t\t\tСкрыто
\t\t\t\t\t\t\t\t<div class=\"page-edit-switch__switcher\"></div>
\t\t\t\t\t\t\t\tОпубликовано
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Краткое описание</label>
\t\t\t\t\t\t<textarea rows=\"4\" v-model=\"page.field_summary\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Полное описание</label>
\t\t\t\t\t\t<textarea rows=\"8\" v-model=\"page.field_content\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-tags\">
\t\t\t\t\t\t<label class=\"page-edit-tags__label\">Теги</label>
\t\t\t\t\t\t<div class=\"page-edit-tags__input\">
\t\t\t\t\t\t\t<vue-tags-input
\t\t\t\t\t\t\t\tv-model=\"tags.newTag\"
\t\t\t\t\t\t\t\t:tags=\"page.field_tags\"
\t\t\t\t\t\t\t\t@tags-changed=\"newTags => page.field_tags = newTags\"
\t\t\t\t\t\t\t\tplaceholder=\"\"
\t\t\t\t\t\t\t></vue-tags-input>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-files\">
\t\t\t\t\t\t<label class=\"page-edit-files__label\">Файлы</label>
\t\t\t\t\t\t<div class=\"page-edit-files__list\">
\t\t\t\t\t\t\t<div class=\"page-edit-files__item\" v-for=\"file in page.field_files\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" :href=\"'/site/data/documents_user/' + file\">{{file}}</a>
\t\t\t\t\t\t\t\t<button class=\"page-edit-files__item-delete\" @click.stop=\"deleteFile(file)\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 28 28\" fill=\"none\"><path d=\"M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z\" fill=\"#CDCDCD\"></path></svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"page-edit-files__item page-edit-files__item--add\" @click.stop=\"onAddFileClick('page-edit-files')\">
\t\t\t\t\t\t\t\tФайл
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 33 33\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M27.5875 5.19586C21.4297 -0.961865 11.3535 -0.961865 5.19575 5.19586C-0.961977 11.3536 -0.961976 21.4298 5.19575 27.5876C11.3535 33.7453 21.4297 33.7453 27.5875 27.5876C33.7452 21.4298 33.7452 11.3536 27.5875 5.19586ZM17.959 23.1092C17.959 24.0049 17.2873 24.6766 16.3916 24.6766C15.4959 24.6766 14.8242 24.0049 14.8242 23.1092V17.9591H9.67409C8.77842 17.9591 8.10667 17.2874 8.10667 16.3917C8.10667 15.496 8.77842 14.8243 9.67409 14.8243L14.8242 14.8243L14.8242 9.6742C14.8242 8.77853 15.4959 8.10678 16.3916 8.10678C17.2873 8.10678 17.959 8.77853 17.959 9.6742L17.959 14.8243L23.1091 14.8243C24.0048 14.8243 24.6765 15.496 24.6765 16.3917C24.6765 17.2874 24.0048 17.9591 23.1091 17.9591H17.959V23.1092Z\" fill=\"#CDCDCD\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"file\" class=\"hidden\" ref=\"page-edit-files\" id=\"page-edit-files\" @change.stop=\"onFileUpload(\$event)\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 113
            echo "\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-faq\">
\t\t\t\t\t\t<label class=\"page-edit-faq__label\">Вопрос - ответ</label>
\t\t\t\t\t\t<div class=\"page-edit-faq__list\">
\t\t\t\t\t\t\t<div class=\"page-edit-faq-item__add\" @click.stop=\"addFAQItem\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"33\" height=\"33\" viewBox=\"0 0 33 33\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M27.5875 5.19586C21.4297 -0.961865 11.3535 -0.961865 5.19575 5.19586C-0.961977 11.3536 -0.961976 21.4298 5.19575 27.5876C11.3535 33.7453 21.4297 33.7453 27.5875 27.5876C33.7452 21.4298 33.7452 11.3536 27.5875 5.19586ZM17.959 23.1092C17.959 24.0049 17.2873 24.6766 16.3916 24.6766C15.4959 24.6766 14.8242 24.0049 14.8242 23.1092V17.9591H9.67409C8.77842 17.9591 8.10667 17.2874 8.10667 16.3917C8.10667 15.496 8.77842 14.8243 9.67409 14.8243L14.8242 14.8243L14.8242 9.6742C14.8242 8.77853 15.4959 8.10678 16.3916 8.10678C17.2873 8.10678 17.959 8.77853 17.959 9.6742L17.959 14.8243L23.1091 14.8243C24.0048 14.8243 24.6765 15.496 24.6765 16.3917C24.6765 17.2874 24.0048 17.9591 23.1091 17.9591H17.959V23.1092Z\" fill=\"#CDCDCD\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"page-edit-faq-item\" v-for=\"(item, itemIndex) in page.field_faq\">
\t\t\t\t\t\t\t\t<div class=\"page-edit-faq-item__question\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"item.question\" class=\"page-edit-faq-item__question-input\" placeholder=\"Вопрос\">
\t\t\t\t\t\t\t\t\t<button class=\"page-edit-faq-item__question-delete\" @click.stop=\"deleteFAQItem(itemIndex)\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 28 28\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z\" fill=\"#CDCDCD\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"page-edit-faq-item__answer\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"item.answer\" placeholder=\"Ответ\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<form data-action=\"/user/pages/";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
            echo "\" class=\"js-edit-form hidden\" method=\"post\" ref=\"js-opage-form\" method=\"post\" @submit.prevent=\"saveChanges\">
\t\t\t\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">
\t\t\t\t\t<input class=\"hidden\" id=\"user_id\" name=\"user_id\" placeholder=\"User ID\" type=\"text\" value=\"";
            // line 140
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\">
\t\t\t\t\t<textarea name=\"field_summary\">{{page.field_summary}}</textarea>
\t\t\t\t\t<textarea name=\"field_content\">{{page.field_content}}</textarea>
\t\t\t\t\t<textarea name=\"field_faq\">{{JSON.stringify(page.field_faq)}}</textarea>
\t\t\t\t\t<input type=\"text\" name=\"field_header\" :value=\"page.field_header\">
\t\t\t\t\t<input type=\"text\" name=\"active\" :value=\"Number(page.active)\">
\t\t\t\t\t<input type=\"text\" name=\"field_image\" :value=\"page.field_image\">
\t\t\t\t\t<input type=\"text\" name=\"field_tags\" :value=\"tagsFormValue\">
\t\t\t\t\t<input type=\"text\" name=\"field_files\" :value=\"filesFormValue\">
\t\t\t\t\t<button ref=\"save-changes-form-button\">save</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        } else {
            // line 153
            echo "\t\t\t
\t\t\t<div class=\"lk-content-header\">
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<h1>{{ page.field_header }}</h1>
\t\t\t\t</div>
\t\t\t\t";
            // line 158
            if ((isset($context["isUserCanEdit"]) ? $context["isUserCanEdit"] : null)) {
                // line 159
                echo "\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<div class=\"lk-content-actions\">
\t\t\t\t\t\t<a class=\"mbtn mbtn--color-orange\" href=\"?edit=1\">Редактировать</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 166
            echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-block-tags\" v-if=\"page.field_tags.length\">
\t\t\t\t<div class=\"ttag\" v-for=\"tag in page.field_tags\">{{tag.text}}</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-block-desc\">
\t\t\t\t";
            // line 173
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_summary", array()));
            echo "
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-block-actions\">
\t\t\t\t<button class=\"mbtn mbtn--color-orange mbtn--size-l\" type=\"button\" @click.stop=\"isFullContentShowed = true\">Подробнее</button>
\t\t\t\t";
            // line 184
            echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-tabs\">
\t\t\t\t<div class=\"lk-tabs-header\">
\t\t\t\t\t<div class=\"tab-trigger\" 
\t\t\t\t\t\t v-for=\"tab in tabs\" 
\t\t\t\t\t\t :key=\"tab.id\"
\t\t\t\t\t\t:class=\"{'tab-trigger--active': tab.id == activeTab}\"\t 
\t\t\t\t\t\t @click.stop=\"activeTab = tab.id\"
\t\t\t\t\t>{{tab.title}}</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"lk-tabs-main\">
\t\t\t\t\t<div class=\"lk-tab\" v-if=\"activeTab == 1\">
\t\t\t\t\t\t<div class=\"lk-tab__content\">
\t\t\t\t\t\t\t<div class=\"lk-qlist\">
\t\t\t\t\t\t\t\t<div class=\"lk-qlist-item\" v-for=\"item in page.courses_by_program_id\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-qlist-item__block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-qlist-item__title\">
\t\t\t\t\t\t\t\t\t\t\t<a :href=\"item.path\">{{item.field_header}}</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-qlist-item__block lk-qlist-item__block--items\">
\t\t\t\t\t\t\t\t\t\t<template v-if=\"item.field_duration\">
\t\t\t\t\t\t\t\t\t\t\t{{item.field_duration}} минут
\t\t\t\t\t\t\t\t\t\t</template> 
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-qlist-item__sub lk-qlist-item__sub--price\">
\t\t\t\t\t\t\t\t\t\t\t<template v-if=\"item.field_price\">
\t\t\t\t\t\t\t\t\t\t\t\t{{item.field_price}}₽
\t\t\t\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t\t\t\t<template v-else>
\t\t\t\t\t\t\t\t\t\t\t\tБесплатно
\t\t\t\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-tab\" v-if=\"activeTab == 4\">
\t\t\t\t\t\t<div class=\"lk-tab__content\">
\t\t\t\t\t\t\t<div class=\"lk-qlist\">
\t\t\t\t\t\t\t\t<faq-item v-for=\"(item, itemIndex) in page.field_faq\" :item=\"item\" :key=\"itemIndex\"></faq-item>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal modal--vue\" v-show=\"isFullContentShowed\" v-cloak>
\t\t\t\t<div class=\"cont\">
\t\t\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t\t\t<div class=\"modal__inner modal__inner--content\">
\t\t\t\t\t\t\t<button class=\"modal__closer\" @click=\"isFullContentShowed = false\">×</button>
\t\t\t\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t\t\t\t<div v-html=\"page.field_content\" style=\"white-space: break-spaces;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        }
        // line 248
        echo "\t\t\t
\t\t</div>
\t</div>
</div>

";
        // line 253
        $this->loadTemplate("footer_lk", "layouts.program", 253)->display($context);
        // line 254
        echo "<script src=\"/site/theme/js/lk_program.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.program";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 254,  315 => 253,  308 => 248,  242 => 184,  234 => 173,  225 => 166,  216 => 159,  214 => 158,  207 => 153,  191 => 140,  186 => 138,  159 => 113,  69 => 13,  67 => 12,  63 => 10,  61 => 9,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
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
/* 				<div class="page-edit-block page-edit-block--top">*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Название</label>*/
/* 						<input type="text" v-model="page.field_header">*/
/* 					</div>*/
/* 					<div class="page-edit-img">*/
/* 						<div class="page-edit-img__button" @click.stop="onAddFileClick('page-edit-image')">*/
/* 							{{ page.field_image ? page.field_image : 'Изображение' }}*/
/* 							<div class="page-edit-img__button-add">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 33 33" fill="none">*/
/* 									<path d="M27.5875 5.19586C21.4297 -0.961865 11.3535 -0.961865 5.19575 5.19586C-0.961977 11.3536 -0.961976 21.4298 5.19575 27.5876C11.3535 33.7453 21.4297 33.7453 27.5875 27.5876C33.7452 21.4298 33.7452 11.3536 27.5875 5.19586ZM17.959 23.1092C17.959 24.0049 17.2873 24.6766 16.3916 24.6766C15.4959 24.6766 14.8242 24.0049 14.8242 23.1092V17.9591H9.67409C8.77842 17.9591 8.10667 17.2874 8.10667 16.3917C8.10667 15.496 8.77842 14.8243 9.67409 14.8243L14.8242 14.8243L14.8242 9.6742C14.8242 8.77853 15.4959 8.10678 16.3916 8.10678C17.2873 8.10678 17.959 8.77853 17.959 9.6742L17.959 14.8243L23.1091 14.8243C24.0048 14.8243 24.6765 15.496 24.6765 16.3917C24.6765 17.2874 24.0048 17.9591 23.1091 17.9591H17.959V23.1092Z" fill="#CDCDCD"/>*/
/* 								</svg>*/
/* 							</div>*/
/* 							<div class="page-edit-img__preview" v-if="page.field_image">*/
/* 								<img :src="'/site/data/images/large/' + page.field_image">*/
/* 							</div>*/
/* 						</div>*/
/* 						<input type="file" class="hidden" ref="page-edit-image" id="page-edit-image" @change.stop="onImageUpload($event)">*/
/* 					</div>*/
/* 					<div class="page-edit-block__subblock page-edit-block__subblock--pageactive">*/
/* 						<div class="page-edit-switch">*/
/* 							<input type="checkbox" v-model="page.active" id="page-active">*/
/* 							<label class="page-edit-switch__label" for="page-active">*/
/* 								Скрыто*/
/* 								<div class="page-edit-switch__switcher"></div>*/
/* 								Опубликовано*/
/* 							</label>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Краткое описание</label>*/
/* 						<textarea rows="4" v-model="page.field_summary"></textarea>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Полное описание</label>*/
/* 						<textarea rows="8" v-model="page.field_content"></textarea>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-tags">*/
/* 						<label class="page-edit-tags__label">Теги</label>*/
/* 						<div class="page-edit-tags__input">*/
/* 							<vue-tags-input*/
/* 								v-model="tags.newTag"*/
/* 								:tags="page.field_tags"*/
/* 								@tags-changed="newTags => page.field_tags = newTags"*/
/* 								placeholder=""*/
/* 							></vue-tags-input>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-files">*/
/* 						<label class="page-edit-files__label">Файлы</label>*/
/* 						<div class="page-edit-files__list">*/
/* 							<div class="page-edit-files__item" v-for="file in page.field_files">*/
/* 								<a target="_blank" :href="'/site/data/documents_user/' + file">{{file}}</a>*/
/* 								<button class="page-edit-files__item-delete" @click.stop="deleteFile(file)">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><path d="M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z" fill="#CDCDCD"></path></svg>*/
/* 								</button>*/
/* 							</div>*/
/* 							<div class="page-edit-files__item page-edit-files__item--add" @click.stop="onAddFileClick('page-edit-files')">*/
/* 								Файл*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 33 33" fill="none">*/
/* 									<path d="M27.5875 5.19586C21.4297 -0.961865 11.3535 -0.961865 5.19575 5.19586C-0.961977 11.3536 -0.961976 21.4298 5.19575 27.5876C11.3535 33.7453 21.4297 33.7453 27.5875 27.5876C33.7452 21.4298 33.7452 11.3536 27.5875 5.19586ZM17.959 23.1092C17.959 24.0049 17.2873 24.6766 16.3916 24.6766C15.4959 24.6766 14.8242 24.0049 14.8242 23.1092V17.9591H9.67409C8.77842 17.9591 8.10667 17.2874 8.10667 16.3917C8.10667 15.496 8.77842 14.8243 9.67409 14.8243L14.8242 14.8243L14.8242 9.6742C14.8242 8.77853 15.4959 8.10678 16.3916 8.10678C17.2873 8.10678 17.959 8.77853 17.959 9.6742L17.959 14.8243L23.1091 14.8243C24.0048 14.8243 24.6765 15.496 24.6765 16.3917C24.6765 17.2874 24.0048 17.9591 23.1091 17.9591H17.959V23.1092Z" fill="#CDCDCD"/>*/
/* 								</svg>*/
/* 							</div>*/
/* 						</div>*/
/* 						<input type="file" class="hidden" ref="page-edit-files" id="page-edit-files" @change.stop="onFileUpload($event)">*/
/* 					</div>*/
/* 				</div>*/
/* 				{#*/
/* 				<div class="page-edit-block">*/
/* 					Курсы в программе<br>*/
/* 					<div v-for="item in page.courses_by_program_id" :key="item.id">*/
/* 						<a :href="item.path">{{item.field_header}}</a>*/
/* 					</div><br>*/
/* 					Курсы<br>*/
/* 					<div v-for="item in filteredCourses" :key="item.id">*/
/* 						<a :href="item.path">{{item.field_header}}</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				#}*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-faq">*/
/* 						<label class="page-edit-faq__label">Вопрос - ответ</label>*/
/* 						<div class="page-edit-faq__list">*/
/* 							<div class="page-edit-faq-item__add" @click.stop="addFAQItem">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">*/
/* 									<path d="M27.5875 5.19586C21.4297 -0.961865 11.3535 -0.961865 5.19575 5.19586C-0.961977 11.3536 -0.961976 21.4298 5.19575 27.5876C11.3535 33.7453 21.4297 33.7453 27.5875 27.5876C33.7452 21.4298 33.7452 11.3536 27.5875 5.19586ZM17.959 23.1092C17.959 24.0049 17.2873 24.6766 16.3916 24.6766C15.4959 24.6766 14.8242 24.0049 14.8242 23.1092V17.9591H9.67409C8.77842 17.9591 8.10667 17.2874 8.10667 16.3917C8.10667 15.496 8.77842 14.8243 9.67409 14.8243L14.8242 14.8243L14.8242 9.6742C14.8242 8.77853 15.4959 8.10678 16.3916 8.10678C17.2873 8.10678 17.959 8.77853 17.959 9.6742L17.959 14.8243L23.1091 14.8243C24.0048 14.8243 24.6765 15.496 24.6765 16.3917C24.6765 17.2874 24.0048 17.9591 23.1091 17.9591H17.959V23.1092Z" fill="#CDCDCD"/>*/
/* 								</svg>*/
/* 							</div>*/
/* 							<div class="page-edit-faq-item" v-for="(item, itemIndex) in page.field_faq">*/
/* 								<div class="page-edit-faq-item__question">*/
/* 									<input type="text" v-model="item.question" class="page-edit-faq-item__question-input" placeholder="Вопрос">*/
/* 									<button class="page-edit-faq-item__question-delete" @click.stop="deleteFAQItem(itemIndex)">*/
/* 										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">*/
/* 											<path d="M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z" fill="#CDCDCD"/>*/
/* 										</svg>*/
/* 									</button>*/
/* 								</div>*/
/* 								<div class="page-edit-faq-item__answer">*/
/* 									<input type="text" v-model="item.answer" placeholder="Ответ">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<form data-action="/user/pages/{$ page.id $}" class="js-edit-form hidden" method="post" ref="js-opage-form" method="post" @submit.prevent="saveChanges">*/
/* 					<input name="_method" type="hidden" value="put">*/
/* 					<input class="hidden" id="user_id" name="user_id" placeholder="User ID" type="text" value="{$ user.id $}">*/
/* 					<textarea name="field_summary">{{page.field_summary}}</textarea>*/
/* 					<textarea name="field_content">{{page.field_content}}</textarea>*/
/* 					<textarea name="field_faq">{{JSON.stringify(page.field_faq)}}</textarea>*/
/* 					<input type="text" name="field_header" :value="page.field_header">*/
/* 					<input type="text" name="active" :value="Number(page.active)">*/
/* 					<input type="text" name="field_image" :value="page.field_image">*/
/* 					<input type="text" name="field_tags" :value="tagsFormValue">*/
/* 					<input type="text" name="field_files" :value="filesFormValue">*/
/* 					<button ref="save-changes-form-button">save</button>*/
/* 				</form>*/
/* 			</div>*/
/* 			{% else %}*/
/* 			*/
/* 			<div class="lk-content-header">*/
/* 				<div class="lk-content-header__block">*/
/* 					<h1>{{ page.field_header }}</h1>*/
/* 				</div>*/
/* 				{% if isUserCanEdit %}*/
/* 				<div class="divider"></div>*/
/* 				<div class="lk-content-header__block">*/
/* 					<div class="lk-content-actions">*/
/* 						<a class="mbtn mbtn--color-orange" href="?edit=1">Редактировать</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-block-tags" v-if="page.field_tags.length">*/
/* 				<div class="ttag" v-for="tag in page.field_tags">{{tag.text}}</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-block-desc">*/
/* 				{$ page.field_summary|raw $}*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-block-actions">*/
/* 				<button class="mbtn mbtn--color-orange mbtn--size-l" type="button" @click.stop="isFullContentShowed = true">Подробнее</button>*/
/* 				{#*/
/* 				<div class="lk-card__counter lk-card__counter--page">*/
/* 					<div class="lk-card__counter-title">Уроков</div> */
/* 					<div class="lk-card__counter-value">24</div>*/
/* 				</div>*/
/* 				#}*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-tabs">*/
/* 				<div class="lk-tabs-header">*/
/* 					<div class="tab-trigger" */
/* 						 v-for="tab in tabs" */
/* 						 :key="tab.id"*/
/* 						:class="{'tab-trigger--active': tab.id == activeTab}"	 */
/* 						 @click.stop="activeTab = tab.id"*/
/* 					>{{tab.title}}</div>*/
/* 				</div>*/
/* 				<div class="lk-tabs-main">*/
/* 					<div class="lk-tab" v-if="activeTab == 1">*/
/* 						<div class="lk-tab__content">*/
/* 							<div class="lk-qlist">*/
/* 								<div class="lk-qlist-item" v-for="item in page.courses_by_program_id">*/
/* 									<div class="lk-qlist-item__block">*/
/* 										<div class="lk-qlist-item__title">*/
/* 											<a :href="item.path">{{item.field_header}}</a>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="lk-qlist-item__block lk-qlist-item__block--items">*/
/* 										<template v-if="item.field_duration">*/
/* 											{{item.field_duration}} минут*/
/* 										</template> */
/* 										<div class="lk-qlist-item__sub lk-qlist-item__sub--price">*/
/* 											<template v-if="item.field_price">*/
/* 												{{item.field_price}}₽*/
/* 											</template>*/
/* 											<template v-else>*/
/* 												Бесплатно*/
/* 											</template>*/
/* 										</div> */
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="lk-tab" v-if="activeTab == 4">*/
/* 						<div class="lk-tab__content">*/
/* 							<div class="lk-qlist">*/
/* 								<faq-item v-for="(item, itemIndex) in page.field_faq" :item="item" :key="itemIndex"></faq-item>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="modal modal--vue" v-show="isFullContentShowed" v-cloak>*/
/* 				<div class="cont">*/
/* 					<div class="modal__wrapper">*/
/* 						<div class="modal__inner modal__inner--content">*/
/* 							<button class="modal__closer" @click="isFullContentShowed = false">×</button>*/
/* 							<div class="modal__content">*/
/* 								<div v-html="page.field_content" style="white-space: break-spaces;">*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			{% endif %}*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* <script src="/site/theme/js/lk_program.js" type="module"></script>*/
