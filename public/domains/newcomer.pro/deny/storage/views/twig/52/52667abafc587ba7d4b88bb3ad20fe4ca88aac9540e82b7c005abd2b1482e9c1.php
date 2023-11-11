<?php

/* layouts.lesson */
class __TwigTemplate_8bead57b8bc174fe055ffcac8b2130181859ec92a4ec10a6cf69a5f48362d426 extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 6, "raw" => 273);
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
        $this->loadTemplate("header_lk", "layouts.lesson", 1)->display($context);
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
        $this->loadTemplate("menu_lk", "layouts.lesson", 9)->display(array_merge($context, array("rolename" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()))));
        // line 10
        echo "\t\t</div>
\t\t<div class=\"lk-content\" v-if=\"page\">
\t\t\t";
        // line 12
        if ((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "edit", array()) == "1") && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()) != "student"))) {
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
\t\t\t\t
\t\t\t\t<div class=\"page-edit-block page-edit-block--grid2\">
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Порядковый номер</label>
\t\t\t\t\t\t<input type=\"number\" v-model.number=\"page.field_order_number\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Продолжительность, мин</label>
\t\t\t\t\t\t<input type=\"text\" v-model=\"page.field_duration\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
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
\t\t\t\t\t<div class=\"page-edit-tags\">
\t\t\t\t\t\t<label class=\"page-edit-tags__label\">Преподаватели</label>
\t\t\t\t\t\t<div class=\"page-edit-tags__input\">
\t\t\t\t\t\t\t<vue-tags-input
\t\t\t\t\t\t\t\tv-model=\"newTeacher\"
\t\t\t\t\t\t\t\t:tags=\"teachersTags\"
\t\t\t\t\t\t\t\t:autocomplete-items=\"teachersAutocompleteTags\"
\t\t\t\t\t\t\t\t@tags-changed=\"setNewTeachers\"
\t\t\t\t\t\t\t\tplaceholder=\"\"
\t\t\t\t\t\t\t></vue-tags-input>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"page-edit-block page-edit-block--grid2\">
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
\t\t\t\t\t<div class=\"page-edit-files page-edit-files--long\">
\t\t\t\t\t\t<label class=\"page-edit-files__label\">Код видео YouTube</label>
\t\t\t\t\t\t<div class=\"page-edit-files__list\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"page.field_yt_link\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"page-edit-block page-edit-block--hw\">
\t\t\t\t\t<div class=\"page-edit-hwtypes\">
\t\t\t\t\t\t<label class=\"page-edit-hwtypes__label\">Домашняя работа</label>
\t\t\t\t\t\t<div class=\"page-edit-hwtypes__list\">
\t\t\t\t\t\t\t<div class=\"page-edit-hwtypes__list-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"page-edit-hwtype\" value=\"text\" id=\"page-edit-hwtype-1\" v-model=\"page.field_homework_type\">
\t\t\t\t\t\t\t\t<label class=\"page-edit-hwtypes__list-item__label\" for=\"page-edit-hwtype-1\">Текст</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"page-edit-hwtypes__list-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"page-edit-hwtype\" value=\"file\" id=\"page-edit-hwtype-2\" v-model=\"page.field_homework_type\">
\t\t\t\t\t\t\t\t<label class=\"page-edit-hwtypes__list-item__label\" for=\"page-edit-hwtype-2\">Файл</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-edit-select\">
\t\t\t\t\t\t<label class=\"page-edit-select__label\">Система оценивания</label>
\t\t\t\t\t\t<div class=\"edit-select\">
\t\t\t\t\t\t\t<select v-model=\"page.field_homework_rating_system\">
\t\t\t\t\t\t\t\t<option value=\"2\">зачет/незачет</option>
\t\t\t\t\t\t\t\t<option value=\"5\">пятибальная</option>
\t\t\t\t\t\t\t\t<option value=\"100\">стобальная</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t<label class=\"page-edit-input__label\">Описание домашней работы</label>
\t\t\t\t\t\t<textarea rows=\"8\" v-model=\"page.field_homework_desc\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t<div class=\"page-edit-connections\">
\t\t\t\t\t\t<div class=\"page-edit-connections__block\">
\t\t\t\t\t\t\t<div class=\"page-edit-connections__block-title\">Курсы</div>
\t\t\t\t\t\t\t<div class=\"page-edit-connections__list\">
\t\t\t\t\t\t\t\t<div class=\"page-edit-connections__list-item\"
\t\t\t\t\t\t\t\t\t v-for=\"item in page.courses_by_lesson_id\"
\t\t\t\t\t\t\t\t\t :key=\"item.id\"
\t\t\t\t\t\t\t\t\t @click.stop=\"removeCourse(item.id)\"
\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t<div>{{item.field_header}}</div>
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 28 28\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z\" fill=\"#CDCDCD\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-connections__block\">
\t\t\t\t\t\t\t<div class=\"page-edit-connections__block-title\">Все курсы</div>
\t\t\t\t\t\t\t<div class=\"page-edit-connections__list\">
\t\t\t\t\t\t\t\t<div class=\"page-edit-connections__list-item\"
\t\t\t\t\t\t\t\t\t v-for=\"item in filteredCourses\"
\t\t\t\t\t\t\t\t\t :key=\"item.id\"
\t\t\t\t\t\t\t\t\t @click.stop=\"addCourse(item)\"
\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t<div>{{item.field_header}}</div>
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 33 33\" fill=\"none\"><path d=\"M27.5875 5.19586C21.4297 -0.961865 11.3535 -0.961865 5.19575 5.19586C-0.961977 11.3536 -0.961976 21.4298 5.19575 27.5876C11.3535 33.7453 21.4297 33.7453 27.5875 27.5876C33.7452 21.4298 33.7452 11.3536 27.5875 5.19586ZM17.959 23.1092C17.959 24.0049 17.2873 24.6766 16.3916 24.6766C15.4959 24.6766 14.8242 24.0049 14.8242 23.1092V17.9591H9.67409C8.77842 17.9591 8.10667 17.2874 8.10667 16.3917C8.10667 15.496 8.77842 14.8243 9.67409 14.8243L14.8242 14.8243L14.8242 9.6742C14.8242 8.77853 15.4959 8.10678 16.3916 8.10678C17.2873 8.10678 17.959 8.77853 17.959 9.6742L17.959 14.8243L23.1091 14.8243C24.0048 14.8243 24.6765 15.496 24.6765 16.3917C24.6765 17.2874 24.0048 17.9591 23.1091 17.9591H17.959V23.1092Z\" fill=\"#CDCDCD\"></path></svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"page-edit-block\">
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
            // line 228
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
            echo "\" class=\"js-edit-form hidden\" method=\"post\" ref=\"js-opage-form\" method=\"post\" @submit.prevent=\"saveChanges\">
\t\t\t\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">
\t\t\t\t\t<input class=\"hidden\" id=\"user_id\" name=\"user_id\" placeholder=\"User ID\" type=\"text\" value=\"";
            // line 230
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\">
\t\t\t\t\t<textarea name=\"field_summary\">{{page.field_summary}}</textarea>
\t\t\t\t\t<textarea name=\"field_content\">{{page.field_content}}</textarea>
\t\t\t\t\t<textarea name=\"field_homework_desc\">{{page.field_homework_desc}}</textarea>
\t\t\t\t\t<textarea name=\"field_faq\">{{JSON.stringify(page.field_faq)}}</textarea>
\t\t\t\t\t<input type=\"text\" name=\"field_header\" :value=\"page.field_header\">
\t\t\t\t\t<input type=\"text\" name=\"field_duration\" :value=\"page.field_duration\">
\t\t\t\t\t<input type=\"text\" name=\"field_order_number\" :value=\"page.field_order_number\">
\t\t\t\t\t<input type=\"text\" name=\"active\" :value=\"Number(page.active)\">
\t\t\t\t\t<input type=\"text\" name=\"field_image\" :value=\"page.field_image\">
\t\t\t\t\t<input type=\"text\" name=\"field_homework_rating_system\" :value=\"page.field_homework_rating_system\">
\t\t\t\t\t<input type=\"text\" name=\"field_yt_link\" :value=\"page.field_yt_link\">
\t\t\t\t\t<input type=\"text\" name=\"field_homework_type\" :value=\"homeworkTypeFormValue\">
\t\t\t\t\t<input type=\"text\" name=\"field_tags\" :value=\"tagsFormValue\">
\t\t\t\t\t<input type=\"text\" name=\"field_teachers\" :value=\"teachersFormValue\">
\t\t\t\t\t<input type=\"text\" name=\"field_files\" :value=\"filesFormValue\">
\t\t\t\t\t<select name=\"field_courses_lessons[]\" class=\"hidden\" multiple v-model=\"lessonCoursesFormValue\">
\t\t\t\t\t\t<option v-for=\"course in courses\" :value=\"course.id\">{{course.field_header}}</option>
\t\t\t\t\t</select>
\t\t\t\t\t<button ref=\"save-changes-form-button\">save</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t
\t\t\t";
        } else {
            // line 254
            echo "\t\t\t
\t\t\t<div class=\"lk-content-header\">
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<h1>Урок - {{ page.field_header }}</h1>
\t\t\t\t</div>
\t\t\t\t";
            // line 259
            if ((isset($context["isUserCanEdit"]) ? $context["isUserCanEdit"] : null)) {
                // line 260
                echo "\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<div class=\"lk-content-actions\">
\t\t\t\t\t\t<a class=\"mbtn mbtn--color-orange\" href=\"?edit=1\">Редактировать</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 267
            echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-block\">
\t\t\t\t<div class=\"lk-block__title\">Описание</div>
\t\t\t\t<div class=\"lk-block__content\">
\t\t\t\t\t";
            // line 272
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_summary", array())) {
                // line 273
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_summary", array()));
                echo "
\t\t\t\t\t\t<br>
\t\t\t\t\t";
            }
            // line 276
            echo "\t\t\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_yt_link", array())) {
                // line 277
                echo "\t\t\t\t\t\t<div class=\"lk-video\">
\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"420\" src=\"https://www.youtube.com/embed/";
                // line 278
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_yt_link", array()), "html", null, true));
                echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 281
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-block\" v-if=\"checkHomeworkType('file') || checkHomeworkType('text')\">
\t\t\t\t<div class=\"lk-block__content\">
\t\t\t\t\t<div class=\"lk-block__wrapper\">
\t\t\t\t\t\t<div class=\"lk-block__subblock\">
\t\t\t\t\t\t\t<div class=\"lk-block__title\">Самостоятельная работа</div>
\t\t\t\t\t\t\t<div class=\"lk-block__subblock-content\">
\t\t\t\t\t\t\t\t";
            // line 291
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_homework_desc", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-block__subblock\">
\t\t\t\t\t\t\t<div class=\"lk-hw-created\" v-if=\"studentHomework\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\tРабота отправлена<br>
\t\t\t\t\t\t\t\t\t<a href=\"/lk/homeworks\">Посмотреть</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lk-hw\" v-else>
\t\t\t\t\t\t\t\t<div class=\"lk-hw-file\" v-if=\"checkHomeworkType('file')\">
\t\t\t\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange\" :class=\"{'mbtn--color-grey': homework.file}\" @click.stop=\"onHomeworkFileUploadButtonClick\">Выбрать</button>
\t\t\t\t\t\t\t\t\t<div v-if=\"homework.file\" class=\"lk-hw-file__title\">
\t\t\t\t\t\t\t\t\t\t{{homework.file}}
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<g clip-path=\"url(#clip0_67_205)\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.084 0C7.24798 0 0.0839844 7.164 0.0839844 16C0.0839844 24.836 7.24798 32 16.084 32C24.92 32 32.084 24.836 32.084 16C32.084 7.164 24.92 0 16.084 0ZM23.496 11.574L15.832 23.288C15.83 23.29 15.826 23.292 15.826 23.294C15.786 23.354 15.764 23.422 15.714 23.478C15.644 23.554 15.554 23.594 15.474 23.652C15.454 23.666 15.434 23.682 15.412 23.696C15.288 23.774 15.16 23.826 15.02 23.86C14.974 23.872 14.932 23.884 14.884 23.892C14.7726 23.9073 14.6597 23.9087 14.548 23.896C14.4691 23.891 14.3908 23.879 14.314 23.86C14.2348 23.8361 14.1578 23.8053 14.084 23.768C14.02 23.738 13.952 23.73 13.892 23.692C13.848 23.664 13.824 23.62 13.786 23.586C13.77 23.572 13.75 23.568 13.734 23.554L9.27199 19.428C9.0075 19.174 8.85321 18.8265 8.84226 18.46C8.83132 18.0934 8.96459 17.7373 9.21345 17.468C9.46231 17.1987 9.80688 17.0378 10.1731 17.0198C10.5393 17.0019 10.898 17.1283 11.172 17.372L14.402 20.36L21.152 10.042C21.3551 9.73117 21.6735 9.51377 22.0369 9.43763C22.4003 9.36149 22.7792 9.43284 23.09 9.636C23.4008 9.83916 23.6182 10.1575 23.6944 10.5209C23.7705 10.8844 23.6991 11.2632 23.496 11.574Z\" fill=\"#E59B00\"/>
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t\t\t\t<clipPath id=\"clip0_67_205\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect width=\"32\" height=\"32\" fill=\"white\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<template v-else>прикрепить файл</template>
\t\t\t\t\t\t\t\t\t<input type=\"file\" ref=\"hw-file\" class=\"hidden\" @change.stop=\"onHomeworkFileUpload\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-hw-text\" v-if=\"checkHomeworkType('text')\">
\t\t\t\t\t\t\t\t\t<textarea class=\"\" rows=\"5\" v-model=\"homework.text\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange mbtn--size-l\" @click.stop=\"onHomeworkSend\">Отправить</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-block\" v-if=\"page.field_faq.length > 0\">
\t\t\t\t<div class=\"lk-block__header\">
\t\t\t\t\t<div class=\"lk-block__title\">Популярные вопросы по уроку</div>
\t\t\t\t\t<div class=\"lk-block__search\">
\t\t\t\t\t\t<div class=\"bsearch\">
\t\t\t\t\t\t\t<input class=\"bsearch__input\" type=\"text\" v-model=\"faqSearch\">
\t\t\t\t\t\t\t<svg class=\"bsearch__icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M17.71 16.29L14.31 12.9C15.407 11.5025 16.0022 9.77666 16 8C16 6.41775 15.5308 4.87103 14.6518 3.55544C13.7727 2.23985 12.5233 1.21447 11.0615 0.608967C9.59966 0.00346625 7.99113 -0.15496 6.43928 0.153721C4.88743 0.462403 3.46197 1.22433 2.34315 2.34315C1.22433 3.46197 0.462403 4.88743 0.153721 6.43928C-0.15496 7.99113 0.00346625 9.59966 0.608967 11.0615C1.21447 12.5233 2.23985 13.7727 3.55544 14.6518C4.87103 15.5308 6.41775 16 8 16C9.77666 16.0022 11.5025 15.407 12.9 14.31L16.29 17.71C16.383 17.8037 16.4936 17.8781 16.6154 17.9289C16.7373 17.9797 16.868 18.0058 17 18.0058C17.132 18.0058 17.2627 17.9797 17.3846 17.9289C17.5064 17.8781 17.617 17.8037 17.71 17.71C17.8037 17.617 17.8781 17.5064 17.9289 17.3846C17.9797 17.2627 18.0058 17.132 18.0058 17C18.0058 16.868 17.9797 16.7373 17.9289 16.6154C17.8781 16.4936 17.8037 16.383 17.71 16.29ZM2 8C2 6.81332 2.3519 5.65328 3.01119 4.66658C3.67047 3.67989 4.60755 2.91085 5.7039 2.45673C6.80026 2.0026 8.00666 1.88378 9.17055 2.11529C10.3344 2.3468 11.4035 2.91825 12.2426 3.75736C13.0818 4.59648 13.6532 5.66558 13.8847 6.82946C14.1162 7.99335 13.9974 9.19975 13.5433 10.2961C13.0892 11.3925 12.3201 12.3295 11.3334 12.9888C10.3467 13.6481 9.18669 14 8 14C6.4087 14 4.88258 13.3679 3.75736 12.2426C2.63214 11.1174 2 9.5913 2 8Z\" fill=\"black\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"lk-block__content\">
\t\t\t\t\t<div class=\"lk-block__wrapper\">
\t\t\t\t\t\t<faq-item v-for=\"(item, itemIndex) in filteredFaqItems\" :item=\"item\" :key=\"itemIndex\"></faq-item>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-block__bottom\">
\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange\" @click.stop=\"isNewQuestionModalShow = true\">Задать вопрос преподавателю</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal modal--vue\" v-show=\"isNewQuestionModalShow\" v-cloak>
\t\t\t\t<div class=\"cont\">
\t\t\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t\t\t<div class=\"modal__inner modal__inner--content\">
\t\t\t\t\t\t\t<button class=\"modal__closer\" @click=\"isNewQuestionModalShow = false\">×</button>
\t\t\t\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t\t\t\t<form id=\"js-create-item-form\" class=\"form\" @submit.prevent=\"onNewQusetionFormSubmit\">
\t\t\t\t\t\t\t\t\t<h2 class=\"form__title title-medium\">Задать вопрос по уроку</h2>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form__wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Вопрос</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form__data form-control q-input\" rows=\"4\" name=\"text\" v-model=\"newQuestion.text\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-group--tac\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange\" type=\"submit\">Отправить</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        }
        // line 384
        echo "\t\t</div>
\t</div>
</div>

";
        // line 388
        $this->loadTemplate("footer_lk", "layouts.lesson", 388)->display($context);
        // line 389
        echo "<script src=\"/site/theme/js/lk_lesson.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lesson";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 389,  480 => 388,  474 => 384,  378 => 291,  364 => 281,  358 => 278,  355 => 277,  352 => 276,  345 => 273,  343 => 272,  336 => 267,  327 => 260,  325 => 259,  318 => 254,  291 => 230,  286 => 228,  69 => 13,  67 => 12,  63 => 10,  61 => 9,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
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
/* 			{% if request.input.edit == '1' and user.role.name != 'student' %}*/
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
/* 				*/
/* 				<div class="page-edit-block page-edit-block--grid2">*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Порядковый номер</label>*/
/* 						<input type="number" v-model.number="page.field_order_number">*/
/* 					</div>*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Продолжительность, мин</label>*/
/* 						<input type="text" v-model="page.field_duration">*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
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
/* 					<div class="page-edit-tags">*/
/* 						<label class="page-edit-tags__label">Преподаватели</label>*/
/* 						<div class="page-edit-tags__input">*/
/* 							<vue-tags-input*/
/* 								v-model="newTeacher"*/
/* 								:tags="teachersTags"*/
/* 								:autocomplete-items="teachersAutocompleteTags"*/
/* 								@tags-changed="setNewTeachers"*/
/* 								placeholder=""*/
/* 							></vue-tags-input>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="page-edit-block page-edit-block--grid2">*/
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
/* 					<div class="page-edit-files page-edit-files--long">*/
/* 						<label class="page-edit-files__label">Код видео YouTube</label>*/
/* 						<div class="page-edit-files__list">*/
/* 							<div class="page-edit-input">*/
/* 								<input type="text" v-model="page.field_yt_link">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="page-edit-block page-edit-block--hw">*/
/* 					<div class="page-edit-hwtypes">*/
/* 						<label class="page-edit-hwtypes__label">Домашняя работа</label>*/
/* 						<div class="page-edit-hwtypes__list">*/
/* 							<div class="page-edit-hwtypes__list-item">*/
/* 								<input type="checkbox" name="page-edit-hwtype" value="text" id="page-edit-hwtype-1" v-model="page.field_homework_type">*/
/* 								<label class="page-edit-hwtypes__list-item__label" for="page-edit-hwtype-1">Текст</label>*/
/* 							</div>*/
/* 							<div class="page-edit-hwtypes__list-item">*/
/* 								<input type="checkbox" name="page-edit-hwtype" value="file" id="page-edit-hwtype-2" v-model="page.field_homework_type">*/
/* 								<label class="page-edit-hwtypes__list-item__label" for="page-edit-hwtype-2">Файл</label>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="page-edit-select">*/
/* 						<label class="page-edit-select__label">Система оценивания</label>*/
/* 						<div class="edit-select">*/
/* 							<select v-model="page.field_homework_rating_system">*/
/* 								<option value="2">зачет/незачет</option>*/
/* 								<option value="5">пятибальная</option>*/
/* 								<option value="100">стобальная</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-input">*/
/* 						<label class="page-edit-input__label">Описание домашней работы</label>*/
/* 						<textarea rows="8" v-model="page.field_homework_desc"></textarea>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="page-edit-block">*/
/* 					<div class="page-edit-connections">*/
/* 						<div class="page-edit-connections__block">*/
/* 							<div class="page-edit-connections__block-title">Курсы</div>*/
/* 							<div class="page-edit-connections__list">*/
/* 								<div class="page-edit-connections__list-item"*/
/* 									 v-for="item in page.courses_by_lesson_id"*/
/* 									 :key="item.id"*/
/* 									 @click.stop="removeCourse(item.id)"*/
/* 									 >*/
/* 									<div>{{item.field_header}}</div>*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">*/
/* 										<path d="M14 0C6.3 0 0 6.3 0 14C0 21.7 6.3 28 14 28C21.7 28 28 21.7 28 14C28 6.3 21.7 0 14 0ZM19.18 17.22C19.74 17.78 19.74 18.62 19.18 19.18C18.62 19.74 17.78 19.74 17.22 19.18L14 15.96L10.78 19.18C10.22 19.74 9.38 19.74 8.82 19.18C8.26 18.62 8.26 17.78 8.82 17.22L12.04 14L8.82 10.78C8.26 10.22 8.26 9.38 8.82 8.82C9.38 8.26 10.22 8.26 10.78 8.82L14 12.04L17.22 8.82C17.78 8.26 18.62 8.26 19.18 8.82C19.74 9.38 19.74 10.22 19.18 10.78L15.96 14L19.18 17.22Z" fill="#CDCDCD"/>*/
/* 									</svg>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-connections__block">*/
/* 							<div class="page-edit-connections__block-title">Все курсы</div>*/
/* 							<div class="page-edit-connections__list">*/
/* 								<div class="page-edit-connections__list-item"*/
/* 									 v-for="item in filteredCourses"*/
/* 									 :key="item.id"*/
/* 									 @click.stop="addCourse(item)"*/
/* 									 >*/
/* 									<div>{{item.field_header}}</div>*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 33 33" fill="none"><path d="M27.5875 5.19586C21.4297 -0.961865 11.3535 -0.961865 5.19575 5.19586C-0.961977 11.3536 -0.961976 21.4298 5.19575 27.5876C11.3535 33.7453 21.4297 33.7453 27.5875 27.5876C33.7452 21.4298 33.7452 11.3536 27.5875 5.19586ZM17.959 23.1092C17.959 24.0049 17.2873 24.6766 16.3916 24.6766C15.4959 24.6766 14.8242 24.0049 14.8242 23.1092V17.9591H9.67409C8.77842 17.9591 8.10667 17.2874 8.10667 16.3917C8.10667 15.496 8.77842 14.8243 9.67409 14.8243L14.8242 14.8243L14.8242 9.6742C14.8242 8.77853 15.4959 8.10678 16.3916 8.10678C17.2873 8.10678 17.959 8.77853 17.959 9.6742L17.959 14.8243L23.1091 14.8243C24.0048 14.8243 24.6765 15.496 24.6765 16.3917C24.6765 17.2874 24.0048 17.9591 23.1091 17.9591H17.959V23.1092Z" fill="#CDCDCD"></path></svg>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
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
/* 					<textarea name="field_homework_desc">{{page.field_homework_desc}}</textarea>*/
/* 					<textarea name="field_faq">{{JSON.stringify(page.field_faq)}}</textarea>*/
/* 					<input type="text" name="field_header" :value="page.field_header">*/
/* 					<input type="text" name="field_duration" :value="page.field_duration">*/
/* 					<input type="text" name="field_order_number" :value="page.field_order_number">*/
/* 					<input type="text" name="active" :value="Number(page.active)">*/
/* 					<input type="text" name="field_image" :value="page.field_image">*/
/* 					<input type="text" name="field_homework_rating_system" :value="page.field_homework_rating_system">*/
/* 					<input type="text" name="field_yt_link" :value="page.field_yt_link">*/
/* 					<input type="text" name="field_homework_type" :value="homeworkTypeFormValue">*/
/* 					<input type="text" name="field_tags" :value="tagsFormValue">*/
/* 					<input type="text" name="field_teachers" :value="teachersFormValue">*/
/* 					<input type="text" name="field_files" :value="filesFormValue">*/
/* 					<select name="field_courses_lessons[]" class="hidden" multiple v-model="lessonCoursesFormValue">*/
/* 						<option v-for="course in courses" :value="course.id">{{course.field_header}}</option>*/
/* 					</select>*/
/* 					<button ref="save-changes-form-button">save</button>*/
/* 				</form>*/
/* 			</div>*/
/* 			*/
/* 			{% else %}*/
/* 			*/
/* 			<div class="lk-content-header">*/
/* 				<div class="lk-content-header__block">*/
/* 					<h1>Урок - {{ page.field_header }}</h1>*/
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
/* 			<div class="lk-block">*/
/* 				<div class="lk-block__title">Описание</div>*/
/* 				<div class="lk-block__content">*/
/* 					{% if page.field_summary %}*/
/* 						{$ page.field_summary|raw $}*/
/* 						<br>*/
/* 					{% endif %}*/
/* 					{% if page.field_yt_link %}*/
/* 						<div class="lk-video">*/
/* 							<iframe width="100%" height="420" src="https://www.youtube.com/embed/{$ page.field_yt_link $}" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					{$ page.field_content|raw $}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-block" v-if="checkHomeworkType('file') || checkHomeworkType('text')">*/
/* 				<div class="lk-block__content">*/
/* 					<div class="lk-block__wrapper">*/
/* 						<div class="lk-block__subblock">*/
/* 							<div class="lk-block__title">Самостоятельная работа</div>*/
/* 							<div class="lk-block__subblock-content">*/
/* 								{$ page.field_homework_desc $}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="lk-block__subblock">*/
/* 							<div class="lk-hw-created" v-if="studentHomework">*/
/* 								<div>*/
/* 									Работа отправлена<br>*/
/* 									<a href="/lk/homeworks">Посмотреть</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="lk-hw" v-else>*/
/* 								<div class="lk-hw-file" v-if="checkHomeworkType('file')">*/
/* 									<button class="mbtn mbtn--color-orange" :class="{'mbtn--color-grey': homework.file}" @click.stop="onHomeworkFileUploadButtonClick">Выбрать</button>*/
/* 									<div v-if="homework.file" class="lk-hw-file__title">*/
/* 										{{homework.file}}*/
/* 										<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">*/
/* 											<g clip-path="url(#clip0_67_205)">*/
/* 												<path d="M16.084 0C7.24798 0 0.0839844 7.164 0.0839844 16C0.0839844 24.836 7.24798 32 16.084 32C24.92 32 32.084 24.836 32.084 16C32.084 7.164 24.92 0 16.084 0ZM23.496 11.574L15.832 23.288C15.83 23.29 15.826 23.292 15.826 23.294C15.786 23.354 15.764 23.422 15.714 23.478C15.644 23.554 15.554 23.594 15.474 23.652C15.454 23.666 15.434 23.682 15.412 23.696C15.288 23.774 15.16 23.826 15.02 23.86C14.974 23.872 14.932 23.884 14.884 23.892C14.7726 23.9073 14.6597 23.9087 14.548 23.896C14.4691 23.891 14.3908 23.879 14.314 23.86C14.2348 23.8361 14.1578 23.8053 14.084 23.768C14.02 23.738 13.952 23.73 13.892 23.692C13.848 23.664 13.824 23.62 13.786 23.586C13.77 23.572 13.75 23.568 13.734 23.554L9.27199 19.428C9.0075 19.174 8.85321 18.8265 8.84226 18.46C8.83132 18.0934 8.96459 17.7373 9.21345 17.468C9.46231 17.1987 9.80688 17.0378 10.1731 17.0198C10.5393 17.0019 10.898 17.1283 11.172 17.372L14.402 20.36L21.152 10.042C21.3551 9.73117 21.6735 9.51377 22.0369 9.43763C22.4003 9.36149 22.7792 9.43284 23.09 9.636C23.4008 9.83916 23.6182 10.1575 23.6944 10.5209C23.7705 10.8844 23.6991 11.2632 23.496 11.574Z" fill="#E59B00"/>*/
/* 											</g>*/
/* 											<defs>*/
/* 												<clipPath id="clip0_67_205">*/
/* 													<rect width="32" height="32" fill="white"/>*/
/* 												</clipPath>*/
/* 											</defs>*/
/* 										</svg>*/
/* 									</div>*/
/* 									<template v-else>прикрепить файл</template>*/
/* 									<input type="file" ref="hw-file" class="hidden" @change.stop="onHomeworkFileUpload">*/
/* 								</div>*/
/* 								<div class="lk-hw-text" v-if="checkHomeworkType('text')">*/
/* 									<textarea class="" rows="5" v-model="homework.text"></textarea>*/
/* 								</div>*/
/* 								<button class="mbtn mbtn--color-orange mbtn--size-l" @click.stop="onHomeworkSend">Отправить</button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-block" v-if="page.field_faq.length > 0">*/
/* 				<div class="lk-block__header">*/
/* 					<div class="lk-block__title">Популярные вопросы по уроку</div>*/
/* 					<div class="lk-block__search">*/
/* 						<div class="bsearch">*/
/* 							<input class="bsearch__input" type="text" v-model="faqSearch">*/
/* 							<svg class="bsearch__icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">*/
/* 								<path d="M17.71 16.29L14.31 12.9C15.407 11.5025 16.0022 9.77666 16 8C16 6.41775 15.5308 4.87103 14.6518 3.55544C13.7727 2.23985 12.5233 1.21447 11.0615 0.608967C9.59966 0.00346625 7.99113 -0.15496 6.43928 0.153721C4.88743 0.462403 3.46197 1.22433 2.34315 2.34315C1.22433 3.46197 0.462403 4.88743 0.153721 6.43928C-0.15496 7.99113 0.00346625 9.59966 0.608967 11.0615C1.21447 12.5233 2.23985 13.7727 3.55544 14.6518C4.87103 15.5308 6.41775 16 8 16C9.77666 16.0022 11.5025 15.407 12.9 14.31L16.29 17.71C16.383 17.8037 16.4936 17.8781 16.6154 17.9289C16.7373 17.9797 16.868 18.0058 17 18.0058C17.132 18.0058 17.2627 17.9797 17.3846 17.9289C17.5064 17.8781 17.617 17.8037 17.71 17.71C17.8037 17.617 17.8781 17.5064 17.9289 17.3846C17.9797 17.2627 18.0058 17.132 18.0058 17C18.0058 16.868 17.9797 16.7373 17.9289 16.6154C17.8781 16.4936 17.8037 16.383 17.71 16.29ZM2 8C2 6.81332 2.3519 5.65328 3.01119 4.66658C3.67047 3.67989 4.60755 2.91085 5.7039 2.45673C6.80026 2.0026 8.00666 1.88378 9.17055 2.11529C10.3344 2.3468 11.4035 2.91825 12.2426 3.75736C13.0818 4.59648 13.6532 5.66558 13.8847 6.82946C14.1162 7.99335 13.9974 9.19975 13.5433 10.2961C13.0892 11.3925 12.3201 12.3295 11.3334 12.9888C10.3467 13.6481 9.18669 14 8 14C6.4087 14 4.88258 13.3679 3.75736 12.2426C2.63214 11.1174 2 9.5913 2 8Z" fill="black"/>*/
/* 							</svg>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="lk-block__content">*/
/* 					<div class="lk-block__wrapper">*/
/* 						<faq-item v-for="(item, itemIndex) in filteredFaqItems" :item="item" :key="itemIndex"></faq-item>*/
/* 					</div>*/
/* 					<div class="lk-block__bottom">*/
/* 						<button class="mbtn mbtn--color-orange" @click.stop="isNewQuestionModalShow = true">Задать вопрос преподавателю</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="modal modal--vue" v-show="isNewQuestionModalShow" v-cloak>*/
/* 				<div class="cont">*/
/* 					<div class="modal__wrapper">*/
/* 						<div class="modal__inner modal__inner--content">*/
/* 							<button class="modal__closer" @click="isNewQuestionModalShow = false">×</button>*/
/* 							<div class="modal__content">*/
/* 								<form id="js-create-item-form" class="form" @submit.prevent="onNewQusetionFormSubmit">*/
/* 									<h2 class="form__title title-medium">Задать вопрос по уроку</h2>*/
/* 									*/
/* 									<div class="form__wrapper">*/
/* 										<div class="form-group">*/
/* 											<div class="form-group-input">*/
/* 												<label class="form-label">Вопрос</label>*/
/* 												<textarea class="form__data form-control q-input" rows="4" name="text" v-model="newQuestion.text"></textarea>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											*/
/* 										</div>*/
/* 										<div class="form-group form-group--tac">*/
/* 											<button class="mbtn mbtn--color-orange" type="submit">Отправить</button>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</form>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* <script src="/site/theme/js/lk_lesson.js" type="module"></script>*/
