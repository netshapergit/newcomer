<?php

/* layouts.lk */
class __TwigTemplate_36ad16eb262bbe7e127313af9d2c9a75765f6e57dcfa29b18ffec5304262ed5a extends TwigBridge\Twig\Template
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
            $this->loadTemplate("header_lk", "layouts.lk", 3)->display($context);
            // line 4
            echo "<div class=\"lk\" data-user-id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\">
\t
\t<section class=\"lk-main\" id=\"lk-main\" data-user-id=\"";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\" v-if=\"currentUser\">
\t\t<div class=\"container\">
\t\t\t<div class=\"lk-main__wrapper\">
\t\t\t\t<div class=\"lk-main-block lk-main-block--info\">
\t\t\t\t\t<div class=\"lk-info\" >
\t\t\t\t\t\t<div class=\"lk-info__avatar\" @click.stop=\"onAvatarClick\">
\t\t\t\t\t\t\t<img v-if=\"selectedEmpl.field_image\" :src=\"'/site/data/images/large/' + currentUser.field_image\">
\t\t\t\t\t\t\t<div v-else class=\"lk-info__noava\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101 101\"><path d=\"M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z\"/></svg>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lk-info__avatar-change\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><g data-name=\"Layer 2\"><path d=\"M19.4 7.34 16.66 4.6A2 2 0 0 0 14 4.53l-9 9a2 2 0 0 0-.57 1.21L4 18.91a1 1 0 0 0 .29.8A1 1 0 0 0 5 20h.09l4.17-.38a2 2 0 0 0 1.21-.57l9-9a1.92 1.92 0 0 0-.07-2.71zM9.08 17.62l-3 .28.27-3L12 9.32l2.7 2.7zM16 10.68 13.32 8l1.95-2L18 8.73z\" data-name=\"edit\"/></g></svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"file\" id=\"lk-avatar\" class=\"hidden\" @change.stop=\"onAvatarChange(\$event)\">
\t\t\t\t\t\t<div class=\"lk-info__main\">
\t\t\t\t\t\t\t<div class=\"lk-info__main-block\">
\t\t\t\t\t\t\t\t<div class=\"lk-main-block__title\">";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_fullname", array()), "html", null, true));
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-block__line\">";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_position", array()), "html", null, true));
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lk-info__main-block\">
\t\t\t\t\t\t\t\t<div class=\"lk-main-block__line lk-main-block__line--bday\">День рождения: ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_bday", array()), "html", null, true));
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"lk-main-block__line lk-main-block__line--wexp\">Стаж: {{ calcExp() }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-info-edit\">
\t\t\t\t\t\t<div class=\"lk-info-edit__blocks\">
\t\t\t\t\t\t\t<div class=\"lk-main-block__title\">О себе</div>
\t\t\t\t\t\t\t<textarea v-model=\"currentUser.field_bio\" class=\"lk-edit-input lk-edit-input--area\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-info-edit__actions\">
\t\t\t\t\t\t\t<button class=\"lk-btn lk-btn--color-blue\" @click.stop=\"saveUser\">Сохранить</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"lk-main-block lk-main-block--contacts\">
\t\t\t\t\t<div class=\"lk-contacts\">
\t\t\t\t\t\t<div class=\"lk-main-block__title\">Контактная информация</div>
\t\t\t\t\t\t<!--div class=\"lk-main-block__line\">Мобильный:</div-->
\t\t\t\t\t\t<div class=\"lk-main-block__line\">E-mail: {{ currentUser.email }}</div>
\t\t\t\t\t\t<div class=\"lk-main-block__contacts-list\">
\t\t\t\t\t\t\t<div class=\"lk-main-block__contact\" v-for=\"item in currentUser.field_contacts_data\">
\t\t\t\t\t\t\t\t<input class=\"lk-edit-input\" type=\"text\" v-model=\"item.title\" @input=\"onChangeDebounced\">
\t\t\t\t\t\t\t\t<input class=\"lk-edit-input\" type=\"text\" v-model=\"item.value\" @input=\"onChangeDebounced\">
\t\t\t\t\t\t\t\t<button class=\"lk-btn lk-btn--color-red lk-btn--wicon\" @click.stop=\"currentUserRemoveContact(item)\">
\t\t\t\t\t\t\t\t\t<svg class=\"nofill\" fill=\"#fff\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\"><path d=\"M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z\"/></svg>\t
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--div class=\"lk-contacts__actions\">
\t\t\t\t\t\t\t<button class=\"lk-btn lk-btn--color-blue\" @click.stop=\"currentUserAddContact\">Добавить контакт</button>
\t\t\t\t\t\t</div-->
\t\t\t\t\t\t<div class=\"lk-main-block__subtitle\">Добавить способ связи</div>
\t\t\t\t\t\t<div class=\"lk-contacts__add\">
\t\t\t\t\t\t\t<input class=\"lk-edit-input\" type=\"text\" v-model=\"currentUserNewContact.title\" placeholder=\"Название (Skype, Telegram...)\">
\t\t\t\t\t\t\t<input class=\"lk-edit-input\" type=\"text\" v-model=\"currentUserNewContact.value\" placeholder=\"Значение (Номер телефона, никнейм...)\">
\t\t\t\t\t\t\t<button class=\"lk-btn lk-btn--color-blue lk-btn--wicon\" @click.stop=\"currentUserAddContact\">
\t\t\t\t\t\t\t\t<svg class=\"nofill\" fill=\"#ffffff\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z\"/></svg>\t
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"lk-main-block lk-main-block--requests\">
\t\t\t\t\t<div class=\"lk-requests\">
\t\t\t\t\t\t<div class=\"lk-main-block__header\">
\t\t\t\t\t\t\t<div class=\"lk-main-block__title\">Мои заявки</div>
\t\t\t\t\t\t\t<button @click.stop=\"isShowArchived = !isShowArchived\" class=\"lk-btn\" :class=\"{'lk-btn--color-blue': isShowArchived}\">{{ showArchivedRequestsButtonText }}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-main-request-list-items\">
\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item\" :class=\"{'lk-main-request-list-item--accepted': item.hr_accepted == 1, 'lk-main-request-list-item--denied': item.hr_denied == 1, 'lk-main-request-list-item--archived': item.is_archived == 1}\" v-for=\"item in currentUserFilteredRequests\" :key=\"item.id\">
\t\t\t\t\t\t\t\t<template v-if=\"item.type == 'vacation'\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__title\">{{ getRequestTitle(item.type) }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__type\">{{ getVacationType(item.vacation_type) }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__dates\">{{ item.dates.start + ' - ' + item.dates.end }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__stage\">Статус: {{ requestStatusText(item) }}</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__title\">Замещающий <span class=\"lk-main-request-list-item__status\" :class=\"{'lk-main-request-list-item__status--accepted': item.substitutor_accepted == 1, 'lk-main-request-list-item__status--denied': item.substitutor_denied == 1}\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__name\">{{ getUserNameById(item.substitutor) }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__title\">Согласующий <span class=\"lk-main-request-list-item__status\" :class=\"{'lk-main-request-list-item__status--accepted': item.coordinator_accepted == 1, 'lk-main-request-list-item__status--denied': item.coordinator_denied == 1}\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__name\">{{ getUserNameById(item.coordinator) }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t<template v-if=\"item.type == 'business_trip'\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__title\">{{ getRequestTitle(item.type) }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__type\">{{ getVacationType(item.vacation_type) }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__dates\">{{ item.dates.start + ' - ' + item.dates.end }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__stage\">Статус: {{ requestStatusText(item) }}</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__title\">Замещающий <span class=\"lk-main-request-list-item__status\" :class=\"{'lk-main-request-list-item__status--accepted': item.substitutor_accepted == 1, 'lk-main-request-list-item__status--denied': item.substitutor_denied == 1}\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__name\">{{ getUserNameById(item.substitutor) }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__title\">Согласующий <span class=\"lk-main-request-list-item__status\" :class=\"{'lk-main-request-list-item__status--accepted': item.coordinator_accepted == 1, 'lk-main-request-list-item__status--denied': item.coordinator_denied == 1}\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__name\">{{ getUserNameById(item.coordinator) }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block lk-main-request-list-item__block--desc\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__desc\">
\t\t\t\t\t\t\t\t\t\t\t{{ item.description }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t<template v-if=\"item.type == 'equipment'\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__title\">{{ getRequestTitle(item.type) }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__type\">{{ getVacationType(item.vacation_type) }}</div>
\t\t\t\t\t\t\t\t\t\t<!--div class=\"lk-main-request-list-item__dates\">{{ item.dates.start + ' - ' + item.dates.end }}</div-->
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__stage\">Статус: {{ requestStatusText(item) }}</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__title\">Согласующий <span class=\"lk-main-request-list-item__status\" :class=\"{'lk-main-request-list-item__status--accepted': item.hr_accepted == 1, 'lk-main-request-list-item__status--denied': item.hr_denied == 1}\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__empl__name\">{{ getUserNameById(item.acceptor) }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__block lk-main-request-list-item__block--desc\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__desc\">
\t\t\t\t\t\t\t\t\t\t\t{{ item.description }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t<div class=\"lk-main-request-list-item__archive\">
\t\t\t\t\t\t\t\t\t<button class=\"lk-btn lk-btn--onlyicon\" v-if=\"isCanArchiveRequest(item)\" @click.stop=\"archiveRequest(item.id)\" :title=\"archiveRequestsButtonText(item.is_archived == 1)\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"nofill\" :class=\"{'rotated': item.is_archived == 1}\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 24 24\"><path fill=\"none\" d=\"M0 0h24v24H0V0z\"/><path d=\"M20.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM5 19V8h14v11H5zm8.45-9h-2.9v3H8l4 4 4-4h-2.55z\"/></svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"lk-btn lk-btn--onlyicon\" v-if=\"isCanDeleteRequest(item)\" @click.stop=\"deleteRequest(item.id)\" title=\"Удалить\">
\t\t\t\t\t\t\t\t\t\t<svg fill=\"#000\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 32 32\" class=\"nofill\"><path d=\"M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z\"></path></svg>\t
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 173
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-main-block__actions\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"lk-btn lk-btn--icon\" @click.prevent=\"isShowVacancyRequestModal = true\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"20\" viewBox=\"0 0 18 20\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M17.06 5.855L11.645 0.44C11.364 0.158615 10.9827 0.000350104 10.585 0H2C1.60218 0 1.22064 0.158035 0.93934 0.43934C0.658035 0.720644 0.5 1.10218 0.5 1.5V4C0.5 4.13261 0.552679 4.25979 0.646447 4.35355C0.740215 4.44732 0.867392 4.5 1 4.5C1.13261 4.5 1.25979 4.44732 1.35355 4.35355C1.44732 4.25979 1.5 4.13261 1.5 4V1.5C1.5 1.36739 1.55268 1.24021 1.64645 1.14645C1.74021 1.05268 1.86739 1 2 1H10.5V5.5C10.5 5.89782 10.658 6.27936 10.9393 6.56066C11.2206 6.84196 11.6022 7 12 7H16.5V18.5C16.5 18.6326 16.4473 18.7598 16.3536 18.8536C16.2598 18.9473 16.1326 19 16 19H2C1.86739 19 1.74021 18.9473 1.64645 18.8536C1.55268 18.7598 1.5 18.6326 1.5 18.5V6C1.5 5.86739 1.44732 5.74021 1.35355 5.64645C1.25979 5.55268 1.13261 5.5 1 5.5C0.867392 5.5 0.740215 5.55268 0.646447 5.64645C0.552679 5.74021 0.5 5.86739 0.5 6V18.5C0.5 18.8978 0.658035 19.2794 0.93934 19.5607C1.22064 19.842 1.60218 20 2 20H16C16.3978 20 16.7794 19.842 17.0607 19.5607C17.342 19.2794 17.5 18.8978 17.5 18.5V6.915C17.4996 6.51731 17.3414 6.13603 17.06 5.855ZM11.5 5.5V1.705L15.795 6H12C11.8674 6 11.7402 5.94732 11.6464 5.85355C11.5527 5.75979 11.5 5.63261 11.5 5.5ZM4 9.5C4 9.36739 4.05268 9.24021 4.14645 9.14645C4.24021 9.05268 4.36739 9 4.5 9H9C9.13261 9 9.25979 9.05268 9.35355 9.14645C9.44732 9.24021 9.5 9.36739 9.5 9.5C9.5 9.63261 9.44732 9.75979 9.35355 9.85355C9.25979 9.94732 9.13261 10 9 10H4.5C4.36739 10 4.24021 9.94732 4.14645 9.85355C4.05268 9.75979 4 9.63261 4 9.5ZM4.5 12H13.5C13.6326 12 13.7598 12.0527 13.8536 12.1464C13.9473 12.2402 14 12.3674 14 12.5C14 12.6326 13.9473 12.7598 13.8536 12.8536C13.7598 12.9473 13.6326 13 13.5 13H4.5C4.36739 13 4.24021 12.9473 4.14645 12.8536C4.05268 12.7598 4 12.6326 4 12.5C4 12.3674 4.05268 12.2402 4.14645 12.1464C4.24021 12.0527 4.36739 12 4.5 12ZM14 15.5C14 15.6326 13.9473 15.7598 13.8536 15.8536C13.7598 15.9473 13.6326 16 13.5 16H4.5C4.36739 16 4.24021 15.9473 4.14645 15.8536C4.05268 15.7598 4 15.6326 4 15.5C4 15.3674 4.05268 15.2402 4.14645 15.1464C4.24021 15.0527 4.36739 15 4.5 15H13.5C13.6326 15 13.7598 15.0527 13.8536 15.1464C13.9473 15.2402 14 15.3674 14 15.5Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\tВзять отпуск
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"lk-btn lk-btn--icon\" @click.prevent=\"isShowBTripRequestModal = true\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"20\" viewBox=\"0 0 18 20\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M17.06 5.855L11.645 0.44C11.364 0.158615 10.9827 0.000350104 10.585 0H2C1.60218 0 1.22064 0.158035 0.93934 0.43934C0.658035 0.720644 0.5 1.10218 0.5 1.5V4C0.5 4.13261 0.552679 4.25979 0.646447 4.35355C0.740215 4.44732 0.867392 4.5 1 4.5C1.13261 4.5 1.25979 4.44732 1.35355 4.35355C1.44732 4.25979 1.5 4.13261 1.5 4V1.5C1.5 1.36739 1.55268 1.24021 1.64645 1.14645C1.74021 1.05268 1.86739 1 2 1H10.5V5.5C10.5 5.89782 10.658 6.27936 10.9393 6.56066C11.2206 6.84196 11.6022 7 12 7H16.5V18.5C16.5 18.6326 16.4473 18.7598 16.3536 18.8536C16.2598 18.9473 16.1326 19 16 19H2C1.86739 19 1.74021 18.9473 1.64645 18.8536C1.55268 18.7598 1.5 18.6326 1.5 18.5V6C1.5 5.86739 1.44732 5.74021 1.35355 5.64645C1.25979 5.55268 1.13261 5.5 1 5.5C0.867392 5.5 0.740215 5.55268 0.646447 5.64645C0.552679 5.74021 0.5 5.86739 0.5 6V18.5C0.5 18.8978 0.658035 19.2794 0.93934 19.5607C1.22064 19.842 1.60218 20 2 20H16C16.3978 20 16.7794 19.842 17.0607 19.5607C17.342 19.2794 17.5 18.8978 17.5 18.5V6.915C17.4996 6.51731 17.3414 6.13603 17.06 5.855ZM11.5 5.5V1.705L15.795 6H12C11.8674 6 11.7402 5.94732 11.6464 5.85355C11.5527 5.75979 11.5 5.63261 11.5 5.5ZM4 9.5C4 9.36739 4.05268 9.24021 4.14645 9.14645C4.24021 9.05268 4.36739 9 4.5 9H9C9.13261 9 9.25979 9.05268 9.35355 9.14645C9.44732 9.24021 9.5 9.36739 9.5 9.5C9.5 9.63261 9.44732 9.75979 9.35355 9.85355C9.25979 9.94732 9.13261 10 9 10H4.5C4.36739 10 4.24021 9.94732 4.14645 9.85355C4.05268 9.75979 4 9.63261 4 9.5ZM4.5 12H13.5C13.6326 12 13.7598 12.0527 13.8536 12.1464C13.9473 12.2402 14 12.3674 14 12.5C14 12.6326 13.9473 12.7598 13.8536 12.8536C13.7598 12.9473 13.6326 13 13.5 13H4.5C4.36739 13 4.24021 12.9473 4.14645 12.8536C4.05268 12.7598 4 12.6326 4 12.5C4 12.3674 4.05268 12.2402 4.14645 12.1464C4.24021 12.0527 4.36739 12 4.5 12ZM14 15.5C14 15.6326 13.9473 15.7598 13.8536 15.8536C13.7598 15.9473 13.6326 16 13.5 16H4.5C4.36739 16 4.24021 15.9473 4.14645 15.8536C4.05268 15.7598 4 15.6326 4 15.5C4 15.3674 4.05268 15.2402 4.14645 15.1464C4.24021 15.0527 4.36739 15 4.5 15H13.5C13.6326 15 13.7598 15.0527 13.8536 15.1464C13.9473 15.2402 14 15.3674 14 15.5Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\tКомандировка
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"lk-btn lk-btn--icon\" @click.prevent=\"isShowEquipRequestModal = true\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"20\" viewBox=\"0 0 18 20\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M17.06 5.855L11.645 0.44C11.364 0.158615 10.9827 0.000350104 10.585 0H2C1.60218 0 1.22064 0.158035 0.93934 0.43934C0.658035 0.720644 0.5 1.10218 0.5 1.5V4C0.5 4.13261 0.552679 4.25979 0.646447 4.35355C0.740215 4.44732 0.867392 4.5 1 4.5C1.13261 4.5 1.25979 4.44732 1.35355 4.35355C1.44732 4.25979 1.5 4.13261 1.5 4V1.5C1.5 1.36739 1.55268 1.24021 1.64645 1.14645C1.74021 1.05268 1.86739 1 2 1H10.5V5.5C10.5 5.89782 10.658 6.27936 10.9393 6.56066C11.2206 6.84196 11.6022 7 12 7H16.5V18.5C16.5 18.6326 16.4473 18.7598 16.3536 18.8536C16.2598 18.9473 16.1326 19 16 19H2C1.86739 19 1.74021 18.9473 1.64645 18.8536C1.55268 18.7598 1.5 18.6326 1.5 18.5V6C1.5 5.86739 1.44732 5.74021 1.35355 5.64645C1.25979 5.55268 1.13261 5.5 1 5.5C0.867392 5.5 0.740215 5.55268 0.646447 5.64645C0.552679 5.74021 0.5 5.86739 0.5 6V18.5C0.5 18.8978 0.658035 19.2794 0.93934 19.5607C1.22064 19.842 1.60218 20 2 20H16C16.3978 20 16.7794 19.842 17.0607 19.5607C17.342 19.2794 17.5 18.8978 17.5 18.5V6.915C17.4996 6.51731 17.3414 6.13603 17.06 5.855ZM11.5 5.5V1.705L15.795 6H12C11.8674 6 11.7402 5.94732 11.6464 5.85355C11.5527 5.75979 11.5 5.63261 11.5 5.5ZM4 9.5C4 9.36739 4.05268 9.24021 4.14645 9.14645C4.24021 9.05268 4.36739 9 4.5 9H9C9.13261 9 9.25979 9.05268 9.35355 9.14645C9.44732 9.24021 9.5 9.36739 9.5 9.5C9.5 9.63261 9.44732 9.75979 9.35355 9.85355C9.25979 9.94732 9.13261 10 9 10H4.5C4.36739 10 4.24021 9.94732 4.14645 9.85355C4.05268 9.75979 4 9.63261 4 9.5ZM4.5 12H13.5C13.6326 12 13.7598 12.0527 13.8536 12.1464C13.9473 12.2402 14 12.3674 14 12.5C14 12.6326 13.9473 12.7598 13.8536 12.8536C13.7598 12.9473 13.6326 13 13.5 13H4.5C4.36739 13 4.24021 12.9473 4.14645 12.8536C4.05268 12.7598 4 12.6326 4 12.5C4 12.3674 4.05268 12.2402 4.14645 12.1464C4.24021 12.0527 4.36739 12 4.5 12ZM14 15.5C14 15.6326 13.9473 15.7598 13.8536 15.8536C13.7598 15.9473 13.6326 16 13.5 16H4.5C4.36739 16 4.24021 15.9473 4.14645 15.8536C4.05268 15.7598 4 15.6326 4 15.5C4 15.3674 4.05268 15.2402 4.14645 15.1464C4.24021 15.0527 4.36739 15 4.5 15H13.5C13.6326 15 13.7598 15.0527 13.8536 15.1464C13.9473 15.2402 14 15.3674 14 15.5Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\tЗаявка на материалы
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"lk-modal\" v-show=\"isShowVacancyRequestModal\" v-cloak>
\t\t\t<div class=\"lk-modal__wrapper\">
\t\t\t\t<div class=\"lk-modal__inner\">
\t\t\t\t\t<div class=\"lk-modal__closer\" @click.stop=\"isShowVacancyRequestModal = false\"></div>
\t\t\t\t\t<div class=\"lk-modal__top\">
\t\t\t\t\t\t<div class=\"lk-modal__title\">
\t\t\t\t\t\t\tЗаявка на отпуск
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-modal__content\">
\t\t\t\t\t\t\t<div class=\"vacancy-request\">
\t\t\t\t\t\t\t\t<div class=\"lk-input__group\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Тип отпуска</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select\" v-on-click-away=\"hideVacancyTypesSelectItemsList\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__header\" @click.stop=\"vacancyRequestFields.vacancyTypes.isShowItemsList = !vacancyRequestFields.vacancyTypes.isShowItemsList\">{{ vacancyRequestFields.vacancyTypes.selectedItem.title || 'Тип отпуска' }}</div>
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"select\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list\" v-show=\"vacancyRequestFields.vacancyTypes.isShowItemsList\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t v-for=\"opt in vacancyRequestFields.vacancyTypes.items\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t :key=\"opt.value\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t @click.stop=\"selectSetItem(vacancyRequestFields.vacancyTypes, opt)\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ opt.title }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Даты отпуска</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select\">
\t\t\t\t\t\t\t\t\t\t\t<v-date-picker :min-date='new Date()' :columns=\"2\" is-range v-model='vacancyRequestFields.vacancyDates.selectedItem'>
\t\t\t\t\t\t\t\t\t\t\t\t<template v-slot=\"{ inputValue, togglePopover }\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div @click=\"togglePopover()\" class=\"lk-select__header\">{{ inputValue.start ? inputValue.start + ' - ' + inputValue.end : 'Выберите даты' }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t\t\t\t</v-date-picker>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-input__group\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Согласующий</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select\" v-on-click-away=\"hideVacancyCoordinatorSelectItemsList\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__header\" @click.stop=\"vacancyRequestFields.vacancyCoordinator.isShowItemsList = !vacancyRequestFields.vacancyCoordinator.isShowItemsList\">{{ vacancyRequestFields.vacancyCoordinator.selectedItem ? vacancyRequestFields.vacancyCoordinator.selectedItem.field_fullname : 'Согласующий' }}</div>
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"select\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list lk-select__list--wheader\" v-show=\"vacancyRequestFields.vacancyCoordinator.isShowItemsList\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-filter__input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   v-model=\"vacancyRequestFields.vacancyCoordinator.departmentFilter\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   :value=\"true\" type=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   name=\"vacancyCoordinatorFilter\" id=\"vacancyCoordinatorFilter1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"lk-select__list-filter__label\" for=\"vacancyCoordinatorFilter1\">Мой отдел</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-filter__input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   v-model=\"vacancyRequestFields.vacancyCoordinator.departmentFilter\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   :value=\"false\" type=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   name=\"vacancyCoordinatorFilter\" id=\"vacancyCoordinatorFilter2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"lk-select__list-filter__label\" for=\"vacancyCoordinatorFilter2\">Все</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-search__input\" type=\"text\" placeholder=\"Поиск\" v-model=\"vacancyRequestFields.vacancyCoordinator.search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-main\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t v-for=\"opt in vacancyRequestFieldCoordinatorEmplsList\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t :key=\"opt.id\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t @click.stop=\"selectSetItem(vacancyRequestFields.vacancyCoordinator, opt)\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ opt.field_fullname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item__subline\">{{ opt.field_position }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Замещающий</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select\" v-on-click-away=\"hideVacancySubstitutorSelectItemsList\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__header\" @click.stop=\"vacancyRequestFields.vacancySubstitutor.isShowItemsList = !vacancyRequestFields.vacancySubstitutor.isShowItemsList\">{{ vacancyRequestFields.vacancySubstitutor.selectedItem ? vacancyRequestFields.vacancySubstitutor.selectedItem.field_fullname : 'Замещающий' }}</div>
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"select\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list lk-select__list--wheader\" v-show=\"vacancyRequestFields.vacancySubstitutor.isShowItemsList\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-filter__input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   v-model=\"vacancyRequestFields.vacancySubstitutor.departmentFilter\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   :value=\"true\" type=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   name=\"vacancySubstitutorFilter\" id=\"vacancySubstitutorFilter1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"lk-select__list-filter__label\" for=\"vacancySubstitutorFilter1\">Мой отдел</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-filter__input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   v-model=\"vacancyRequestFields.vacancySubstitutor.departmentFilter\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   :value=\"false\" type=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   name=\"vacancySubstitutorFilter\" id=\"vacancySubstitutorFilter2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"lk-select__list-filter__label\" for=\"vacancySubstitutorFilter2\">Все</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-search__input\" type=\"text\" placeholder=\"Поиск\" v-model=\"vacancyRequestFields.vacancySubstitutor.search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-main\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t v-for=\"opt in vacancyRequestFieldSubstitutorEmplsList\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t :key=\"opt.id\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t @click.stop=\"selectSetItem(vacancyRequestFields.vacancySubstitutor, opt)\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ opt.field_fullname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item__subline\">{{ opt.field_position }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-modal__bottom\">
\t\t\t\t\t\t<button class=\"lk-btn lk-btn--color-blue\" :disabled=\"!vacancyRequestSendFormIsEnabled\" @click.stop=\"createVacationRequest\">Отправить заявку</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"lk-modal\" v-show=\"isShowBTripRequestModal\" v-cloak>
\t\t\t<div class=\"lk-modal__wrapper\">
\t\t\t\t<div class=\"lk-modal__inner\">
\t\t\t\t\t<div class=\"lk-modal__closer\" @click.stop=\"isShowBTripRequestModal = false\"></div>
\t\t\t\t\t<div class=\"lk-modal__top\">
\t\t\t\t\t\t<div class=\"lk-modal__title\">
\t\t\t\t\t\t\tЗаявка на командировку
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-modal__content\">
\t\t\t\t\t\t\t<div class=\"vacancy-request\">
\t\t\t\t\t\t\t\t<div class=\"lk-input__group\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Тип поездки</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select\" v-on-click-away=\"hideBTripTypesSelectItemsList\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__header\" @click.stop=\"bTripRequestFields.bTripTypes.isShowItemsList = !bTripRequestFields.bTripTypes.isShowItemsList\">{{ bTripRequestFields.bTripTypes.selectedItem.title || 'Цель поездки' }}</div>
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"select\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list\" v-show=\"bTripRequestFields.bTripTypes.isShowItemsList\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t v-for=\"opt in bTripRequestFields.bTripTypes.items\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t :key=\"opt.value\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t @click.stop=\"selectSetItem(bTripRequestFields.bTripTypes, opt)\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ opt.title }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Даты командировки</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select\">
\t\t\t\t\t\t\t\t\t\t\t<v-date-picker :min-date='new Date()' :columns=\"2\" is-range v-model='bTripRequestFields.bTripDates.selectedItem'>
\t\t\t\t\t\t\t\t\t\t\t\t<template v-slot=\"{ inputValue, togglePopover }\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div @click=\"togglePopover()\" class=\"lk-select__header\">{{ inputValue.start ? inputValue.start + ' - ' + inputValue.end : 'Выберите даты' }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t\t\t\t</v-date-picker>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-input__group\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Город</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"lk-input__input\" v-model=\"bTripRequestFields.bTripCity.selectedItem\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-input__group lk-input__group--fw\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Описание поездки</div>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"lk-input__input\" v-model=\"bTripRequestFields.bTripDescription.selectedItem\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-modal__bottom\">
\t\t\t\t\t\t<button class=\"lk-btn lk-btn--color-blue\" :disabled=\"!bTripRequestSendFormIsEnabled\" @click.stop=\"createBTripRequest\">Отправить заявку</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"lk-modal\" v-show=\"isShowEquipRequestModal\" v-cloak>
\t\t\t<div class=\"lk-modal__wrapper\">
\t\t\t\t<div class=\"lk-modal__inner\">
\t\t\t\t\t<div class=\"lk-modal__closer\" @click.stop=\"isShowEquipRequestModal = false\"></div>
\t\t\t\t\t<div class=\"lk-modal__top\">
\t\t\t\t\t\t<div class=\"lk-modal__title\">
\t\t\t\t\t\t\tЗаявка на материалы
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-modal__content\">
\t\t\t\t\t\t\t<div class=\"vacancy-request\">
\t\t\t\t\t\t\t\t<div class=\"lk-input__group\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Тип заявки</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select\" v-on-click-away=\"hideEquipTypesSelectItemsList\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__header\" @click.stop=\"equipRequestFields.equipTypes.isShowItemsList = !equipRequestFields.equipTypes.isShowItemsList\">{{ equipRequestFields.equipTypes.selectedItem.title || 'Тип заявки' }}</div>
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"select\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list\" v-show=\"equipRequestFields.equipTypes.isShowItemsList\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t v-for=\"opt in equipRequestFields.equipTypes.items\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t :key=\"opt.value\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t @click.stop=\"selectSetItem(equipRequestFields.equipTypes, opt)\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ opt.title }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Согласующий</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select\" v-on-click-away=\"hideEquipCoordinatorSelectItemsList\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__header\" @click.stop=\"equipRequestFields.equipCoordinator.isShowItemsList = !equipRequestFields.equipCoordinator.isShowItemsList\">{{ equipRequestFields.equipCoordinator.selectedItem ? equipRequestFields.equipCoordinator.selectedItem.field_fullname : 'Согласующий' }}</div>
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"select\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list lk-select__list--wheader\" v-show=\"equipRequestFields.equipCoordinator.isShowItemsList\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-filter__input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   v-model=\"vacancyRequestFields.vacancyCoordinator.departmentFilter\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   :value=\"true\" type=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   name=\"equipCoordinatorFilter\" id=\"equipCoordinatorFilter1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"lk-select__list-filter__label\" for=\"equipCoordinatorFilter1\">Мой отдел</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-filter__input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   v-model=\"vacancyRequestFields.vacancyCoordinator.departmentFilter\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   :value=\"false\" type=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   name=\"equipCoordinatorFilter\" id=\"equipCoordinatorFilter2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"lk-select__list-filter__label\" for=\"equipCoordinatorFilter2\">Все</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"lk-select__list-search__input\" type=\"text\" placeholder=\"Поиск\" v-model=\"vacancyRequestFields.vacancyCoordinator.search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-main\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t v-for=\"opt in vacancyRequestFieldCoordinatorEmplsList\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t :key=\"opt.id\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t @click.stop=\"selectSetItem(equipRequestFields.equipCoordinator, opt)\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ opt.field_fullname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-select__list-item__subline\">{{ opt.field_position }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 478
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 488
            echo "\t\t\t\t\t\t\t\t<div class=\"lk-input__group lk-input__group--fw\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Описание заявки</div>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"lk-input__input\" v-model=\"equipRequestFields.equipDescription.selectedItem\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-modal__bottom\">
\t\t\t\t\t\t<button class=\"lk-btn lk-btn--color-blue\" :disabled=\"!equipRequestSendFormIsEnabled\" @click.stop=\"createEquipRequest\">Отправить заявку</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<form class=\"hidden\"
\t\t\t  data-action=\"/user/users/";
            // line 505
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\" 
\t\t\t  id=\"uef\" class=\"js-user-edit-form\" 
\t\t\t  method=\"post\" autocomplete=\"off\" 
\t\t\t  ref=\"userform\"
\t\t\t  @submit.prevent=\"onUEFSubmit(\$event)\"> 
\t\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">
\t\t\t<input class=\"form-control\" autocomplete=\"false\" id=\"password\" name=\"password\" placeholder=\"Пароль\" type=\"password\" value=\"\">
\t\t\t<input class=\"form-control\" autocomplete=\"false\" id=\"password_confirmation\" name=\"password_confirmation\"  placeholder=\"Подтверждение\" type=\"password\" value=\"\">
\t\t\t<!--input name=\"field_name\" autocomplete=\"false\" type=\"text\" value=\"";
            // line 513
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_name", array()), "html", null, true));
            echo "\"-->
\t\t\t<input name=\"field_fullname\" autocomplete=\"false\" type=\"text\" value=\"";
            // line 514
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_fullname", array()), "html", null, true));
            echo "\">
\t\t\t<!--input name=\"field_position\" autocomplete=\"false\" type=\"text\" value=\"";
            // line 515
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_position", array()), "html", null, true));
            echo "\"-->
\t\t\t<input name=\"field_image\" type=\"text\" v-model=\"currentUser.field_image\">
\t\t\t<textarea name=\"field_bio\" v-model=\"currentUser.field_bio\"></textarea>
\t\t\t<textarea name=\"field_contacts_data\">{{JSON.stringify(currentUser.field_contacts_data)}}</textarea>
\t\t\t<button type=\"submit\" ref=\"submituserform\">submit</button>
\t\t</form>
\t\t
\t</section>

</div>
";
            // line 525
            $this->loadTemplate("footer_lk", "layouts.lk", 525)->display($context);
        } else {
            // line 527
            echo "\t<script>
\t\tlocation.href = location.origin + '/?login=yes'
\t</script>
";
        }
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
        return array (  558 => 527,  555 => 525,  542 => 515,  538 => 514,  534 => 513,  523 => 505,  504 => 488,  501 => 478,  208 => 173,  86 => 27,  80 => 24,  76 => 23,  56 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if user %}*/
/* */
/* {% include 'header_lk' %}*/
/* <div class="lk" data-user-id="{$ user.id $}">*/
/* 	*/
/* 	<section class="lk-main" id="lk-main" data-user-id="{$ user.id $}" v-if="currentUser">*/
/* 		<div class="container">*/
/* 			<div class="lk-main__wrapper">*/
/* 				<div class="lk-main-block lk-main-block--info">*/
/* 					<div class="lk-info" >*/
/* 						<div class="lk-info__avatar" @click.stop="onAvatarClick">*/
/* 							<img v-if="selectedEmpl.field_image" :src="'/site/data/images/large/' + currentUser.field_image">*/
/* 							<div v-else class="lk-info__noava">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/></svg>	*/
/* 							</div>*/
/* 							<div class="lk-info__avatar-change">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M19.4 7.34 16.66 4.6A2 2 0 0 0 14 4.53l-9 9a2 2 0 0 0-.57 1.21L4 18.91a1 1 0 0 0 .29.8A1 1 0 0 0 5 20h.09l4.17-.38a2 2 0 0 0 1.21-.57l9-9a1.92 1.92 0 0 0-.07-2.71zM9.08 17.62l-3 .28.27-3L12 9.32l2.7 2.7zM16 10.68 13.32 8l1.95-2L18 8.73z" data-name="edit"/></g></svg>*/
/* 							</div>*/
/* 						</div>*/
/* 						<input type="file" id="lk-avatar" class="hidden" @change.stop="onAvatarChange($event)">*/
/* 						<div class="lk-info__main">*/
/* 							<div class="lk-info__main-block">*/
/* 								<div class="lk-main-block__title">{$ user.field_fullname $}</div>*/
/* 								<div class="lk-main-block__line">{$ user.field_position $}</div>*/
/* 							</div>*/
/* 							<div class="lk-info__main-block">*/
/* 								<div class="lk-main-block__line lk-main-block__line--bday">День рождения: {$ user.field_bday $}</div>*/
/* 								<div class="lk-main-block__line lk-main-block__line--wexp">Стаж: {{ calcExp() }}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="lk-info-edit">*/
/* 						<div class="lk-info-edit__blocks">*/
/* 							<div class="lk-main-block__title">О себе</div>*/
/* 							<textarea v-model="currentUser.field_bio" class="lk-edit-input lk-edit-input--area"></textarea>*/
/* 						</div>*/
/* 						<div class="lk-info-edit__actions">*/
/* 							<button class="lk-btn lk-btn--color-blue" @click.stop="saveUser">Сохранить</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="lk-main-block lk-main-block--contacts">*/
/* 					<div class="lk-contacts">*/
/* 						<div class="lk-main-block__title">Контактная информация</div>*/
/* 						<!--div class="lk-main-block__line">Мобильный:</div-->*/
/* 						<div class="lk-main-block__line">E-mail: {{ currentUser.email }}</div>*/
/* 						<div class="lk-main-block__contacts-list">*/
/* 							<div class="lk-main-block__contact" v-for="item in currentUser.field_contacts_data">*/
/* 								<input class="lk-edit-input" type="text" v-model="item.title" @input="onChangeDebounced">*/
/* 								<input class="lk-edit-input" type="text" v-model="item.value" @input="onChangeDebounced">*/
/* 								<button class="lk-btn lk-btn--color-red lk-btn--wicon" @click.stop="currentUserRemoveContact(item)">*/
/* 									<svg class="nofill" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z"/></svg>	*/
/* 								</button>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!--div class="lk-contacts__actions">*/
/* 							<button class="lk-btn lk-btn--color-blue" @click.stop="currentUserAddContact">Добавить контакт</button>*/
/* 						</div-->*/
/* 						<div class="lk-main-block__subtitle">Добавить способ связи</div>*/
/* 						<div class="lk-contacts__add">*/
/* 							<input class="lk-edit-input" type="text" v-model="currentUserNewContact.title" placeholder="Название (Skype, Telegram...)">*/
/* 							<input class="lk-edit-input" type="text" v-model="currentUserNewContact.value" placeholder="Значение (Номер телефона, никнейм...)">*/
/* 							<button class="lk-btn lk-btn--color-blue lk-btn--wicon" @click.stop="currentUserAddContact">*/
/* 								<svg class="nofill" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg>	*/
/* 							</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="lk-main-block lk-main-block--requests">*/
/* 					<div class="lk-requests">*/
/* 						<div class="lk-main-block__header">*/
/* 							<div class="lk-main-block__title">Мои заявки</div>*/
/* 							<button @click.stop="isShowArchived = !isShowArchived" class="lk-btn" :class="{'lk-btn--color-blue': isShowArchived}">{{ showArchivedRequestsButtonText }}</button>*/
/* 						</div>*/
/* 						<div class="lk-main-request-list-items">*/
/* 							<div class="lk-main-request-list-item" :class="{'lk-main-request-list-item--accepted': item.hr_accepted == 1, 'lk-main-request-list-item--denied': item.hr_denied == 1, 'lk-main-request-list-item--archived': item.is_archived == 1}" v-for="item in currentUserFilteredRequests" :key="item.id">*/
/* 								<template v-if="item.type == 'vacation'">*/
/* 									<div class="lk-main-request-list-item__block">*/
/* 										<div class="lk-main-request-list-item__title">{{ getRequestTitle(item.type) }}</div>*/
/* 										<div class="lk-main-request-list-item__type">{{ getVacationType(item.vacation_type) }}</div>*/
/* 										<div class="lk-main-request-list-item__dates">{{ item.dates.start + ' - ' + item.dates.end }}</div>*/
/* 										<div class="lk-main-request-list-item__stage">Статус: {{ requestStatusText(item) }}</div>*/
/* 									</div>*/
/* 									<div class="lk-main-request-list-item__block">*/
/* 										<div class="lk-main-request-list-item__empl">*/
/* 											<div class="lk-main-request-list-item__empl__title">Замещающий <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.substitutor_accepted == 1, 'lk-main-request-list-item__status--denied': item.substitutor_denied == 1}"></span></div>*/
/* 											<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.substitutor) }}</div>*/
/* 										</div>*/
/* 										<div class="lk-main-request-list-item__empl">*/
/* 											<div class="lk-main-request-list-item__empl__title">Согласующий <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.coordinator_accepted == 1, 'lk-main-request-list-item__status--denied': item.coordinator_denied == 1}"></span></div>*/
/* 											<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.coordinator) }}</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</template>*/
/* 								<template v-if="item.type == 'business_trip'">*/
/* 									<div class="lk-main-request-list-item__block">*/
/* 										<div class="lk-main-request-list-item__title">{{ getRequestTitle(item.type) }}</div>*/
/* 										<div class="lk-main-request-list-item__type">{{ getVacationType(item.vacation_type) }}</div>*/
/* 										<div class="lk-main-request-list-item__dates">{{ item.dates.start + ' - ' + item.dates.end }}</div>*/
/* 										<div class="lk-main-request-list-item__stage">Статус: {{ requestStatusText(item) }}</div>*/
/* 									</div>*/
/* 									<div class="lk-main-request-list-item__block">*/
/* 										<div class="lk-main-request-list-item__empl">*/
/* 											<div class="lk-main-request-list-item__empl__title">Замещающий <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.substitutor_accepted == 1, 'lk-main-request-list-item__status--denied': item.substitutor_denied == 1}"></span></div>*/
/* 											<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.substitutor) }}</div>*/
/* 										</div>*/
/* 										<div class="lk-main-request-list-item__empl">*/
/* 											<div class="lk-main-request-list-item__empl__title">Согласующий <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.coordinator_accepted == 1, 'lk-main-request-list-item__status--denied': item.coordinator_denied == 1}"></span></div>*/
/* 											<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.coordinator) }}</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="lk-main-request-list-item__block lk-main-request-list-item__block--desc">*/
/* 										<div class="lk-main-request-list-item__desc">*/
/* 											{{ item.description }}*/
/* 										</div>*/
/* 									</div>*/
/* 								</template>*/
/* 								<template v-if="item.type == 'equipment'">*/
/* 									<div class="lk-main-request-list-item__block">*/
/* 										<div class="lk-main-request-list-item__title">{{ getRequestTitle(item.type) }}</div>*/
/* 										<div class="lk-main-request-list-item__type">{{ getVacationType(item.vacation_type) }}</div>*/
/* 										<!--div class="lk-main-request-list-item__dates">{{ item.dates.start + ' - ' + item.dates.end }}</div-->*/
/* 										<div class="lk-main-request-list-item__stage">Статус: {{ requestStatusText(item) }}</div>*/
/* 									</div>*/
/* 									<div class="lk-main-request-list-item__block">*/
/* 										<div class="lk-main-request-list-item__empl">*/
/* 											<div class="lk-main-request-list-item__empl__title">Согласующий <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.hr_accepted == 1, 'lk-main-request-list-item__status--denied': item.hr_denied == 1}"></span></div>*/
/* 											<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.acceptor) }}</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="lk-main-request-list-item__block lk-main-request-list-item__block--desc">*/
/* 										<div class="lk-main-request-list-item__desc">*/
/* 											{{ item.description }}*/
/* 										</div>*/
/* 									</div>*/
/* 								</template>*/
/* 								<div class="lk-main-request-list-item__archive">*/
/* 									<button class="lk-btn lk-btn--onlyicon" v-if="isCanArchiveRequest(item)" @click.stop="archiveRequest(item.id)" :title="archiveRequestsButtonText(item.is_archived == 1)">*/
/* 										<svg class="nofill" :class="{'rotated': item.is_archived == 1}" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M20.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM5 19V8h14v11H5zm8.45-9h-2.9v3H8l4 4 4-4h-2.55z"/></svg>*/
/* 									</button>*/
/* 									<button class="lk-btn lk-btn--onlyicon" v-if="isCanDeleteRequest(item)" @click.stop="deleteRequest(item.id)" title="Удалить">*/
/* 										<svg fill="#000" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32" class="nofill"><path d="M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z"></path></svg>	*/
/* 									</button>*/
/* 								</div>*/
/* 							</div>*/
/* 							{#*/
/* 							<template v-if="item.type == 'business_trip'">*/
/* 								<div class="lk-main-request-list-item" :class="{'lk-main-request-list-item--accepted': item.hr_accepted == 1, 'lk-main-request-list-item--denied': item.hr_denied == 1}" v-for="item in currentUserFilteredRequests" :key="item.id">*/
/* 									<div class="lk-main-request-list-item__block">*/
/* 										<div class="lk-main-request-list-item__title">{{ getRequestTitle(item.type) }}</div>*/
/* 										<div class="lk-main-request-list-item__type">{{ getVacationType(item.vacation_type) }}</div>*/
/* 										<div class="lk-main-request-list-item__dates">{{ item.dates.start + ' - ' + item.dates.end }}</div>*/
/* 										<div class="lk-main-request-list-item__stage">Статус: {{ requestStatusText(item) }}</div>*/
/* 									</div>*/
/* 									<div class="lk-main-request-list-item__block">*/
/* 										<div class="lk-main-request-list-item__empl">*/
/* 											<div class="lk-main-request-list-item__empl__title">Согласующий <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.substitutor_accepted == 1, 'lk-main-request-list-item__status--denied': item.substitutor_denied == 1}"></span></div>*/
/* 											<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.substitutor) }}</div>*/
/* 										</div>*/
/* 										<div class="lk-main-request-list-item__empl">*/
/* 											<div class="lk-main-request-list-item__empl__title">Согласующий <span class="lk-main-request-list-item__status" :class="{'lk-main-request-list-item__status--accepted': item.coordinator_accepted == 1, 'lk-main-request-list-item__status--denied': item.coordinator_denied == 1}"></span></div>*/
/* 											<div class="lk-main-request-list-item__empl__name">{{ getUserNameById(item.coordinator) }}</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="lk-main-request-list-item__archive">*/
/* 										<button class="lk-btn lk-btn--onlyicon" @click.stop="archiveRequest(item.id)" title="Отправить в архив">*/
/* 											<svg class="nofill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M20.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM5 19V8h14v11H5zm8.45-9h-2.9v3H8l4 4 4-4h-2.55z"/></svg>*/
/* 										</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</template>*/
/* 							#}*/
/* 						</div>*/
/* 						<div class="lk-main-block__actions">*/
/* 							<a href="#" class="lk-btn lk-btn--icon" @click.prevent="isShowVacancyRequestModal = true">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">*/
/* 									<path d="M17.06 5.855L11.645 0.44C11.364 0.158615 10.9827 0.000350104 10.585 0H2C1.60218 0 1.22064 0.158035 0.93934 0.43934C0.658035 0.720644 0.5 1.10218 0.5 1.5V4C0.5 4.13261 0.552679 4.25979 0.646447 4.35355C0.740215 4.44732 0.867392 4.5 1 4.5C1.13261 4.5 1.25979 4.44732 1.35355 4.35355C1.44732 4.25979 1.5 4.13261 1.5 4V1.5C1.5 1.36739 1.55268 1.24021 1.64645 1.14645C1.74021 1.05268 1.86739 1 2 1H10.5V5.5C10.5 5.89782 10.658 6.27936 10.9393 6.56066C11.2206 6.84196 11.6022 7 12 7H16.5V18.5C16.5 18.6326 16.4473 18.7598 16.3536 18.8536C16.2598 18.9473 16.1326 19 16 19H2C1.86739 19 1.74021 18.9473 1.64645 18.8536C1.55268 18.7598 1.5 18.6326 1.5 18.5V6C1.5 5.86739 1.44732 5.74021 1.35355 5.64645C1.25979 5.55268 1.13261 5.5 1 5.5C0.867392 5.5 0.740215 5.55268 0.646447 5.64645C0.552679 5.74021 0.5 5.86739 0.5 6V18.5C0.5 18.8978 0.658035 19.2794 0.93934 19.5607C1.22064 19.842 1.60218 20 2 20H16C16.3978 20 16.7794 19.842 17.0607 19.5607C17.342 19.2794 17.5 18.8978 17.5 18.5V6.915C17.4996 6.51731 17.3414 6.13603 17.06 5.855ZM11.5 5.5V1.705L15.795 6H12C11.8674 6 11.7402 5.94732 11.6464 5.85355C11.5527 5.75979 11.5 5.63261 11.5 5.5ZM4 9.5C4 9.36739 4.05268 9.24021 4.14645 9.14645C4.24021 9.05268 4.36739 9 4.5 9H9C9.13261 9 9.25979 9.05268 9.35355 9.14645C9.44732 9.24021 9.5 9.36739 9.5 9.5C9.5 9.63261 9.44732 9.75979 9.35355 9.85355C9.25979 9.94732 9.13261 10 9 10H4.5C4.36739 10 4.24021 9.94732 4.14645 9.85355C4.05268 9.75979 4 9.63261 4 9.5ZM4.5 12H13.5C13.6326 12 13.7598 12.0527 13.8536 12.1464C13.9473 12.2402 14 12.3674 14 12.5C14 12.6326 13.9473 12.7598 13.8536 12.8536C13.7598 12.9473 13.6326 13 13.5 13H4.5C4.36739 13 4.24021 12.9473 4.14645 12.8536C4.05268 12.7598 4 12.6326 4 12.5C4 12.3674 4.05268 12.2402 4.14645 12.1464C4.24021 12.0527 4.36739 12 4.5 12ZM14 15.5C14 15.6326 13.9473 15.7598 13.8536 15.8536C13.7598 15.9473 13.6326 16 13.5 16H4.5C4.36739 16 4.24021 15.9473 4.14645 15.8536C4.05268 15.7598 4 15.6326 4 15.5C4 15.3674 4.05268 15.2402 4.14645 15.1464C4.24021 15.0527 4.36739 15 4.5 15H13.5C13.6326 15 13.7598 15.0527 13.8536 15.1464C13.9473 15.2402 14 15.3674 14 15.5Z" fill="black"/>*/
/* 								</svg>*/
/* 								Взять отпуск*/
/* 							</a>*/
/* 							<a href="#" class="lk-btn lk-btn--icon" @click.prevent="isShowBTripRequestModal = true">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">*/
/* 									<path d="M17.06 5.855L11.645 0.44C11.364 0.158615 10.9827 0.000350104 10.585 0H2C1.60218 0 1.22064 0.158035 0.93934 0.43934C0.658035 0.720644 0.5 1.10218 0.5 1.5V4C0.5 4.13261 0.552679 4.25979 0.646447 4.35355C0.740215 4.44732 0.867392 4.5 1 4.5C1.13261 4.5 1.25979 4.44732 1.35355 4.35355C1.44732 4.25979 1.5 4.13261 1.5 4V1.5C1.5 1.36739 1.55268 1.24021 1.64645 1.14645C1.74021 1.05268 1.86739 1 2 1H10.5V5.5C10.5 5.89782 10.658 6.27936 10.9393 6.56066C11.2206 6.84196 11.6022 7 12 7H16.5V18.5C16.5 18.6326 16.4473 18.7598 16.3536 18.8536C16.2598 18.9473 16.1326 19 16 19H2C1.86739 19 1.74021 18.9473 1.64645 18.8536C1.55268 18.7598 1.5 18.6326 1.5 18.5V6C1.5 5.86739 1.44732 5.74021 1.35355 5.64645C1.25979 5.55268 1.13261 5.5 1 5.5C0.867392 5.5 0.740215 5.55268 0.646447 5.64645C0.552679 5.74021 0.5 5.86739 0.5 6V18.5C0.5 18.8978 0.658035 19.2794 0.93934 19.5607C1.22064 19.842 1.60218 20 2 20H16C16.3978 20 16.7794 19.842 17.0607 19.5607C17.342 19.2794 17.5 18.8978 17.5 18.5V6.915C17.4996 6.51731 17.3414 6.13603 17.06 5.855ZM11.5 5.5V1.705L15.795 6H12C11.8674 6 11.7402 5.94732 11.6464 5.85355C11.5527 5.75979 11.5 5.63261 11.5 5.5ZM4 9.5C4 9.36739 4.05268 9.24021 4.14645 9.14645C4.24021 9.05268 4.36739 9 4.5 9H9C9.13261 9 9.25979 9.05268 9.35355 9.14645C9.44732 9.24021 9.5 9.36739 9.5 9.5C9.5 9.63261 9.44732 9.75979 9.35355 9.85355C9.25979 9.94732 9.13261 10 9 10H4.5C4.36739 10 4.24021 9.94732 4.14645 9.85355C4.05268 9.75979 4 9.63261 4 9.5ZM4.5 12H13.5C13.6326 12 13.7598 12.0527 13.8536 12.1464C13.9473 12.2402 14 12.3674 14 12.5C14 12.6326 13.9473 12.7598 13.8536 12.8536C13.7598 12.9473 13.6326 13 13.5 13H4.5C4.36739 13 4.24021 12.9473 4.14645 12.8536C4.05268 12.7598 4 12.6326 4 12.5C4 12.3674 4.05268 12.2402 4.14645 12.1464C4.24021 12.0527 4.36739 12 4.5 12ZM14 15.5C14 15.6326 13.9473 15.7598 13.8536 15.8536C13.7598 15.9473 13.6326 16 13.5 16H4.5C4.36739 16 4.24021 15.9473 4.14645 15.8536C4.05268 15.7598 4 15.6326 4 15.5C4 15.3674 4.05268 15.2402 4.14645 15.1464C4.24021 15.0527 4.36739 15 4.5 15H13.5C13.6326 15 13.7598 15.0527 13.8536 15.1464C13.9473 15.2402 14 15.3674 14 15.5Z" fill="black"/>*/
/* 								</svg>*/
/* 								Командировка*/
/* 							</a>*/
/* 							<a href="#" class="lk-btn lk-btn--icon" @click.prevent="isShowEquipRequestModal = true">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">*/
/* 									<path d="M17.06 5.855L11.645 0.44C11.364 0.158615 10.9827 0.000350104 10.585 0H2C1.60218 0 1.22064 0.158035 0.93934 0.43934C0.658035 0.720644 0.5 1.10218 0.5 1.5V4C0.5 4.13261 0.552679 4.25979 0.646447 4.35355C0.740215 4.44732 0.867392 4.5 1 4.5C1.13261 4.5 1.25979 4.44732 1.35355 4.35355C1.44732 4.25979 1.5 4.13261 1.5 4V1.5C1.5 1.36739 1.55268 1.24021 1.64645 1.14645C1.74021 1.05268 1.86739 1 2 1H10.5V5.5C10.5 5.89782 10.658 6.27936 10.9393 6.56066C11.2206 6.84196 11.6022 7 12 7H16.5V18.5C16.5 18.6326 16.4473 18.7598 16.3536 18.8536C16.2598 18.9473 16.1326 19 16 19H2C1.86739 19 1.74021 18.9473 1.64645 18.8536C1.55268 18.7598 1.5 18.6326 1.5 18.5V6C1.5 5.86739 1.44732 5.74021 1.35355 5.64645C1.25979 5.55268 1.13261 5.5 1 5.5C0.867392 5.5 0.740215 5.55268 0.646447 5.64645C0.552679 5.74021 0.5 5.86739 0.5 6V18.5C0.5 18.8978 0.658035 19.2794 0.93934 19.5607C1.22064 19.842 1.60218 20 2 20H16C16.3978 20 16.7794 19.842 17.0607 19.5607C17.342 19.2794 17.5 18.8978 17.5 18.5V6.915C17.4996 6.51731 17.3414 6.13603 17.06 5.855ZM11.5 5.5V1.705L15.795 6H12C11.8674 6 11.7402 5.94732 11.6464 5.85355C11.5527 5.75979 11.5 5.63261 11.5 5.5ZM4 9.5C4 9.36739 4.05268 9.24021 4.14645 9.14645C4.24021 9.05268 4.36739 9 4.5 9H9C9.13261 9 9.25979 9.05268 9.35355 9.14645C9.44732 9.24021 9.5 9.36739 9.5 9.5C9.5 9.63261 9.44732 9.75979 9.35355 9.85355C9.25979 9.94732 9.13261 10 9 10H4.5C4.36739 10 4.24021 9.94732 4.14645 9.85355C4.05268 9.75979 4 9.63261 4 9.5ZM4.5 12H13.5C13.6326 12 13.7598 12.0527 13.8536 12.1464C13.9473 12.2402 14 12.3674 14 12.5C14 12.6326 13.9473 12.7598 13.8536 12.8536C13.7598 12.9473 13.6326 13 13.5 13H4.5C4.36739 13 4.24021 12.9473 4.14645 12.8536C4.05268 12.7598 4 12.6326 4 12.5C4 12.3674 4.05268 12.2402 4.14645 12.1464C4.24021 12.0527 4.36739 12 4.5 12ZM14 15.5C14 15.6326 13.9473 15.7598 13.8536 15.8536C13.7598 15.9473 13.6326 16 13.5 16H4.5C4.36739 16 4.24021 15.9473 4.14645 15.8536C4.05268 15.7598 4 15.6326 4 15.5C4 15.3674 4.05268 15.2402 4.14645 15.1464C4.24021 15.0527 4.36739 15 4.5 15H13.5C13.6326 15 13.7598 15.0527 13.8536 15.1464C13.9473 15.2402 14 15.3674 14 15.5Z" fill="black"/>*/
/* 								</svg>*/
/* 								Заявка на материалы*/
/* 							</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="lk-modal" v-show="isShowVacancyRequestModal" v-cloak>*/
/* 			<div class="lk-modal__wrapper">*/
/* 				<div class="lk-modal__inner">*/
/* 					<div class="lk-modal__closer" @click.stop="isShowVacancyRequestModal = false"></div>*/
/* 					<div class="lk-modal__top">*/
/* 						<div class="lk-modal__title">*/
/* 							Заявка на отпуск*/
/* 						</div>*/
/* 						<div class="lk-modal__content">*/
/* 							<div class="vacancy-request">*/
/* 								<div class="lk-input__group">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Тип отпуска</div>*/
/* 										<div class="lk-select" v-on-click-away="hideVacancyTypesSelectItemsList">*/
/* 											<div class="lk-select__header" @click.stop="vacancyRequestFields.vacancyTypes.isShowItemsList = !vacancyRequestFields.vacancyTypes.isShowItemsList">{{ vacancyRequestFields.vacancyTypes.selectedItem.title || 'Тип отпуска' }}</div>*/
/* 											<transition name="select">*/
/* 												<div class="lk-select__list" v-show="vacancyRequestFields.vacancyTypes.isShowItemsList">*/
/* 													<div class="lk-select__list-item" */
/* 														 v-for="opt in vacancyRequestFields.vacancyTypes.items" */
/* 														 :key="opt.value"*/
/* 														 @click.stop="selectSetItem(vacancyRequestFields.vacancyTypes, opt)"*/
/* 														 >*/
/* 														{{ opt.title }}</div>*/
/* 												</div>*/
/* 											</transition>*/
/* 										</div>*/
/* 									</div>	*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Даты отпуска</div>*/
/* 										<div class="lk-select">*/
/* 											<v-date-picker :min-date='new Date()' :columns="2" is-range v-model='vacancyRequestFields.vacancyDates.selectedItem'>*/
/* 												<template v-slot="{ inputValue, togglePopover }">*/
/* 													<div @click="togglePopover()" class="lk-select__header">{{ inputValue.start ? inputValue.start + ' - ' + inputValue.end : 'Выберите даты' }}</div>*/
/* 													<!--  -->*/
/* 												</template>*/
/* 											</v-date-picker>*/
/* */
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="lk-input__group">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Согласующий</div>*/
/* 										<div class="lk-select" v-on-click-away="hideVacancyCoordinatorSelectItemsList">*/
/* 											<div class="lk-select__header" @click.stop="vacancyRequestFields.vacancyCoordinator.isShowItemsList = !vacancyRequestFields.vacancyCoordinator.isShowItemsList">{{ vacancyRequestFields.vacancyCoordinator.selectedItem ? vacancyRequestFields.vacancyCoordinator.selectedItem.field_fullname : 'Согласующий' }}</div>*/
/* 											<transition name="select">*/
/* 												<div class="lk-select__list lk-select__list--wheader" v-show="vacancyRequestFields.vacancyCoordinator.isShowItemsList">*/
/* 													<div class="lk-select__list-header">*/
/* 														<div class="lk-select__list-filters">*/
/* 															<div class="lk-select__list-filter">*/
/* 																<input class="lk-select__list-filter__input" */
/* 																	   v-model="vacancyRequestFields.vacancyCoordinator.departmentFilter"*/
/* 																	   :value="true" type="radio" */
/* 																	   name="vacancyCoordinatorFilter" id="vacancyCoordinatorFilter1">*/
/* 																<label class="lk-select__list-filter__label" for="vacancyCoordinatorFilter1">Мой отдел</label>*/
/* 															</div>*/
/* 															<div class="lk-select__list-filter">*/
/* 																<input class="lk-select__list-filter__input" */
/* 																	   v-model="vacancyRequestFields.vacancyCoordinator.departmentFilter"*/
/* 																	   :value="false" type="radio" */
/* 																	   name="vacancyCoordinatorFilter" id="vacancyCoordinatorFilter2">*/
/* 																<label class="lk-select__list-filter__label" for="vacancyCoordinatorFilter2">Все</label>*/
/* 															</div>*/
/* 														</div>*/
/* 														<div class="lk-select__list-search">*/
/* 															<input class="lk-select__list-search__input" type="text" placeholder="Поиск" v-model="vacancyRequestFields.vacancyCoordinator.search">*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="lk-select__list-main">*/
/* 														<div class="lk-select__list-item" */
/* 															 v-for="opt in vacancyRequestFieldCoordinatorEmplsList" */
/* 															 :key="opt.id"*/
/* 															 @click.stop="selectSetItem(vacancyRequestFields.vacancyCoordinator, opt)"*/
/* 															 >*/
/* 															{{ opt.field_fullname }}*/
/* 															<div class="lk-select__list-item__subline">{{ opt.field_position }}</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</transition>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Замещающий</div>*/
/* 										<div class="lk-select" v-on-click-away="hideVacancySubstitutorSelectItemsList">*/
/* 											<div class="lk-select__header" @click.stop="vacancyRequestFields.vacancySubstitutor.isShowItemsList = !vacancyRequestFields.vacancySubstitutor.isShowItemsList">{{ vacancyRequestFields.vacancySubstitutor.selectedItem ? vacancyRequestFields.vacancySubstitutor.selectedItem.field_fullname : 'Замещающий' }}</div>*/
/* 											<transition name="select">*/
/* 												<div class="lk-select__list lk-select__list--wheader" v-show="vacancyRequestFields.vacancySubstitutor.isShowItemsList">*/
/* 													<div class="lk-select__list-header">*/
/* 														<div class="lk-select__list-filters">*/
/* 															<div class="lk-select__list-filter">*/
/* 																<input class="lk-select__list-filter__input" */
/* 																	   v-model="vacancyRequestFields.vacancySubstitutor.departmentFilter"*/
/* 																	   :value="true" type="radio" */
/* 																	   name="vacancySubstitutorFilter" id="vacancySubstitutorFilter1">*/
/* 																<label class="lk-select__list-filter__label" for="vacancySubstitutorFilter1">Мой отдел</label>*/
/* 															</div>*/
/* 															<div class="lk-select__list-filter">*/
/* 																<input class="lk-select__list-filter__input" */
/* 																	   v-model="vacancyRequestFields.vacancySubstitutor.departmentFilter"*/
/* 																	   :value="false" type="radio" */
/* 																	   name="vacancySubstitutorFilter" id="vacancySubstitutorFilter2">*/
/* 																<label class="lk-select__list-filter__label" for="vacancySubstitutorFilter2">Все</label>*/
/* 															</div>*/
/* 														</div>*/
/* 														<div class="lk-select__list-search">*/
/* 															<input class="lk-select__list-search__input" type="text" placeholder="Поиск" v-model="vacancyRequestFields.vacancySubstitutor.search">*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="lk-select__list-main">*/
/* 														<div class="lk-select__list-item" */
/* 															 v-for="opt in vacancyRequestFieldSubstitutorEmplsList" */
/* 															 :key="opt.id"*/
/* 															 @click.stop="selectSetItem(vacancyRequestFields.vacancySubstitutor, opt)"*/
/* 															 >*/
/* 															{{ opt.field_fullname }}*/
/* 															<div class="lk-select__list-item__subline">{{ opt.field_position }}</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</transition>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="lk-modal__bottom">*/
/* 						<button class="lk-btn lk-btn--color-blue" :disabled="!vacancyRequestSendFormIsEnabled" @click.stop="createVacationRequest">Отправить заявку</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="lk-modal" v-show="isShowBTripRequestModal" v-cloak>*/
/* 			<div class="lk-modal__wrapper">*/
/* 				<div class="lk-modal__inner">*/
/* 					<div class="lk-modal__closer" @click.stop="isShowBTripRequestModal = false"></div>*/
/* 					<div class="lk-modal__top">*/
/* 						<div class="lk-modal__title">*/
/* 							Заявка на командировку*/
/* 						</div>*/
/* 						<div class="lk-modal__content">*/
/* 							<div class="vacancy-request">*/
/* 								<div class="lk-input__group">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Тип поездки</div>*/
/* 										<div class="lk-select" v-on-click-away="hideBTripTypesSelectItemsList">*/
/* 											<div class="lk-select__header" @click.stop="bTripRequestFields.bTripTypes.isShowItemsList = !bTripRequestFields.bTripTypes.isShowItemsList">{{ bTripRequestFields.bTripTypes.selectedItem.title || 'Цель поездки' }}</div>*/
/* 											<transition name="select">*/
/* 												<div class="lk-select__list" v-show="bTripRequestFields.bTripTypes.isShowItemsList">*/
/* 													<div class="lk-select__list-item" */
/* 														 v-for="opt in bTripRequestFields.bTripTypes.items" */
/* 														 :key="opt.value"*/
/* 														 @click.stop="selectSetItem(bTripRequestFields.bTripTypes, opt)"*/
/* 														 >*/
/* 														{{ opt.title }}</div>*/
/* 												</div>*/
/* 											</transition>*/
/* 										</div>*/
/* 									</div>	*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Даты командировки</div>*/
/* 										<div class="lk-select">*/
/* 											<v-date-picker :min-date='new Date()' :columns="2" is-range v-model='bTripRequestFields.bTripDates.selectedItem'>*/
/* 												<template v-slot="{ inputValue, togglePopover }">*/
/* 													<div @click="togglePopover()" class="lk-select__header">{{ inputValue.start ? inputValue.start + ' - ' + inputValue.end : 'Выберите даты' }}</div>*/
/* 													<!--  -->*/
/* 												</template>*/
/* 											</v-date-picker>*/
/* */
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="lk-input__group">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Город</div>*/
/* 										<input type="text" class="lk-input__input" v-model="bTripRequestFields.bTripCity.selectedItem">*/
/* 									</div>*/
/* 									<div class="lk-input"></div>*/
/* 								</div>*/
/* 								<div class="lk-input__group lk-input__group--fw">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Описание поездки</div>*/
/* 										<textarea class="lk-input__input" v-model="bTripRequestFields.bTripDescription.selectedItem"></textarea>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="lk-modal__bottom">*/
/* 						<button class="lk-btn lk-btn--color-blue" :disabled="!bTripRequestSendFormIsEnabled" @click.stop="createBTripRequest">Отправить заявку</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="lk-modal" v-show="isShowEquipRequestModal" v-cloak>*/
/* 			<div class="lk-modal__wrapper">*/
/* 				<div class="lk-modal__inner">*/
/* 					<div class="lk-modal__closer" @click.stop="isShowEquipRequestModal = false"></div>*/
/* 					<div class="lk-modal__top">*/
/* 						<div class="lk-modal__title">*/
/* 							Заявка на материалы*/
/* 						</div>*/
/* 						<div class="lk-modal__content">*/
/* 							<div class="vacancy-request">*/
/* 								<div class="lk-input__group">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Тип заявки</div>*/
/* 										<div class="lk-select" v-on-click-away="hideEquipTypesSelectItemsList">*/
/* 											<div class="lk-select__header" @click.stop="equipRequestFields.equipTypes.isShowItemsList = !equipRequestFields.equipTypes.isShowItemsList">{{ equipRequestFields.equipTypes.selectedItem.title || 'Тип заявки' }}</div>*/
/* 											<transition name="select">*/
/* 												<div class="lk-select__list" v-show="equipRequestFields.equipTypes.isShowItemsList">*/
/* 													<div class="lk-select__list-item" */
/* 														 v-for="opt in equipRequestFields.equipTypes.items" */
/* 														 :key="opt.value"*/
/* 														 @click.stop="selectSetItem(equipRequestFields.equipTypes, opt)"*/
/* 														 >*/
/* 														{{ opt.title }}</div>*/
/* 												</div>*/
/* 											</transition>*/
/* 										</div>*/
/* 									</div>	*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Согласующий</div>*/
/* 										<div class="lk-select" v-on-click-away="hideEquipCoordinatorSelectItemsList">*/
/* 											<div class="lk-select__header" @click.stop="equipRequestFields.equipCoordinator.isShowItemsList = !equipRequestFields.equipCoordinator.isShowItemsList">{{ equipRequestFields.equipCoordinator.selectedItem ? equipRequestFields.equipCoordinator.selectedItem.field_fullname : 'Согласующий' }}</div>*/
/* 											<transition name="select">*/
/* 												<div class="lk-select__list lk-select__list--wheader" v-show="equipRequestFields.equipCoordinator.isShowItemsList">*/
/* 													<div class="lk-select__list-header">*/
/* 														<div class="lk-select__list-filters">*/
/* 															<div class="lk-select__list-filter">*/
/* 																<input class="lk-select__list-filter__input" */
/* 																	   v-model="vacancyRequestFields.vacancyCoordinator.departmentFilter"*/
/* 																	   :value="true" type="radio" */
/* 																	   name="equipCoordinatorFilter" id="equipCoordinatorFilter1">*/
/* 																<label class="lk-select__list-filter__label" for="equipCoordinatorFilter1">Мой отдел</label>*/
/* 															</div>*/
/* 															<div class="lk-select__list-filter">*/
/* 																<input class="lk-select__list-filter__input" */
/* 																	   v-model="vacancyRequestFields.vacancyCoordinator.departmentFilter"*/
/* 																	   :value="false" type="radio" */
/* 																	   name="equipCoordinatorFilter" id="equipCoordinatorFilter2">*/
/* 																<label class="lk-select__list-filter__label" for="equipCoordinatorFilter2">Все</label>*/
/* 															</div>*/
/* 														</div>*/
/* 														<div class="lk-select__list-search">*/
/* 															<input class="lk-select__list-search__input" type="text" placeholder="Поиск" v-model="vacancyRequestFields.vacancyCoordinator.search">*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="lk-select__list-main">*/
/* 														<div class="lk-select__list-item" */
/* 															 v-for="opt in vacancyRequestFieldCoordinatorEmplsList" */
/* 															 :key="opt.id"*/
/* 															 @click.stop="selectSetItem(equipRequestFields.equipCoordinator, opt)"*/
/* 															 >*/
/* 															{{ opt.field_fullname }}*/
/* 															<div class="lk-select__list-item__subline">{{ opt.field_position }}</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</transition>*/
/* 										</div>*/
/* 									</div>*/
/* 									{#*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Даты командировки</div>*/
/* 										<div class="lk-select">*/
/* 											<v-date-picker :min-date='new Date()' :columns="2" is-range v-model='bTripRequestFields.bTripDates.selectedItem'>*/
/* 												<template v-slot="{ inputValue, togglePopover }">*/
/* 													<div @click="togglePopover()" class="lk-select__header">{{ inputValue.start ? inputValue.start + ' - ' + inputValue.end : 'Выберите даты' }}</div>*/
/* 													<!--  -->*/
/* 												</template>*/
/* 											</v-date-picker>*/
/* */
/* 										</div>*/
/* 									</div>*/
/* 									#}*/
/* 								</div>*/
/* 								{#*/
/* 								<div class="lk-input__group">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Город</div>*/
/* 										<input type="text" class="lk-input__input" v-model="bTripRequestFields.bTripCity.selectedItem">*/
/* 									</div>*/
/* 									<div class="lk-input"></div>*/
/* 								</div>*/
/* 								#}*/
/* 								<div class="lk-input__group lk-input__group--fw">*/
/* 									<div class="lk-input">*/
/* 										<div class="lk-input__label">Описание заявки</div>*/
/* 										<textarea class="lk-input__input" v-model="equipRequestFields.equipDescription.selectedItem"></textarea>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="lk-modal__bottom">*/
/* 						<button class="lk-btn lk-btn--color-blue" :disabled="!equipRequestSendFormIsEnabled" @click.stop="createEquipRequest">Отправить заявку</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<form class="hidden"*/
/* 			  data-action="/user/users/{$ user.id $}" */
/* 			  id="uef" class="js-user-edit-form" */
/* 			  method="post" autocomplete="off" */
/* 			  ref="userform"*/
/* 			  @submit.prevent="onUEFSubmit($event)"> */
/* 			<input name="_method" type="hidden" value="put">*/
/* 			<input class="form-control" autocomplete="false" id="password" name="password" placeholder="Пароль" type="password" value="">*/
/* 			<input class="form-control" autocomplete="false" id="password_confirmation" name="password_confirmation"  placeholder="Подтверждение" type="password" value="">*/
/* 			<!--input name="field_name" autocomplete="false" type="text" value="{$ user.field_name $}"-->*/
/* 			<input name="field_fullname" autocomplete="false" type="text" value="{$ user.field_fullname $}">*/
/* 			<!--input name="field_position" autocomplete="false" type="text" value="{$ user.field_position $}"-->*/
/* 			<input name="field_image" type="text" v-model="currentUser.field_image">*/
/* 			<textarea name="field_bio" v-model="currentUser.field_bio"></textarea>*/
/* 			<textarea name="field_contacts_data">{{JSON.stringify(currentUser.field_contacts_data)}}</textarea>*/
/* 			<button type="submit" ref="submituserform">submit</button>*/
/* 		</form>*/
/* 		*/
/* 	</section>*/
/* */
/* </div>*/
/* {% include 'footer_lk' %}*/
/* {% else %}*/
/* 	<script>*/
/* 		location.href = location.origin + '/?login=yes'*/
/* 	</script>*/
/* {% endif %}*/
