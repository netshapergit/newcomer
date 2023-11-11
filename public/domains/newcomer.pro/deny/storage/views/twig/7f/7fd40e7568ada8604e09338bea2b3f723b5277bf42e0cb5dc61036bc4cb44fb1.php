<?php

/* layouts.lk_programs */
class __TwigTemplate_ecce81892a09b0b2521e9b5c3d7df9e9ec99b2d276a81ab0136609bd5c1d0f68 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "if" => 37);
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
        $this->loadTemplate("header_lk", "layouts.lk_programs", 1)->display($context);
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
        $this->loadTemplate("menu_lk", "layouts.lk_programs", 6)->display(array_merge($context, array("rolename" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()))));
        // line 7
        echo "\t\t</div>
\t\t<div class=\"lk-content\">
\t\t\t<div class=\"lk-content-header\">
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<h1>Программы обучения</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<div class=\"lk-content-search\">
\t\t\t\t\t\t<vue-tags-input
\t\t\t\t\t\t\tv-model=\"tag\"
\t\t\t\t\t\t\t:tags=\"search.tags\"
\t\t\t\t\t\t\t:autocomplete-items=\"filteredTags\"
\t\t\t\t\t\t\t@tags-changed=\"newTags => search.tags = newTags\"
\t\t\t\t\t\t\tplaceholder=\"Поиск\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tslot=\"autocomplete-item\"
\t\t\t\t\t\t\t\tslot-scope=\"props\"
\t\t\t\t\t\t\t\tclass=\"my-item\"
\t\t\t\t\t\t\t\t@click=\"props.performAdd(props.item)\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<template v-if=\"props.item.type == 'tag'\">#</template>{{ props.item.text }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</vue-tags-input>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-cards\">
\t\t\t\t";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()) != "student")) {
            // line 38
            echo "\t\t\t\t<div class=\"lk-card lk-card--new\" @click.stop=\"isNewEntityCreateModalShowed = true\">
\t\t\t\t\tДобавить программу
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<div class=\"lk-card\" :key=\"item.id\" v-for=\"item in filteredData\">
\t\t\t\t\t";
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()) != "student")) {
            // line 44
            echo "\t\t\t\t\t<div class=\"lk-list-item-actions\">
\t\t\t\t\t\t<a class=\"lk-list-item-action\" :href=\"item.path + '?edit=1'\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"20\" viewBox=\"0 0 21 20\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M19.2692 4.10577L15.8417 0.678292C15.3944 0.258107 14.8082 0.0170117 14.1947 0.000866574C13.5812 -0.0152786 12.9831 0.194654 12.5143 0.590729L1.25616 11.8489C0.851827 12.2566 0.600069 12.7911 0.543147 13.3625L0.00525749 18.5787C-0.0115935 18.762 0.0121804 18.9466 0.0748844 19.1196C0.137588 19.2926 0.237678 19.4496 0.36802 19.5795C0.484905 19.6954 0.623525 19.7871 0.775932 19.8494C0.92834 19.9116 1.09154 19.9432 1.25616 19.9422H1.36874L6.58502 19.4669C7.15643 19.41 7.69087 19.1582 8.09862 18.7539L19.3568 7.49573C19.7937 7.0341 20.0299 6.41808 20.0135 5.78266C19.997 5.14723 19.7294 4.54422 19.2692 4.10577ZM6.35986 16.9651L2.60714 17.3153L2.94489 13.5626L10.0125 6.58257L13.3899 9.96001L6.35986 16.9651ZM15.0161 8.2838L11.6637 4.93137L14.103 2.42956L17.5179 5.84453L15.0161 8.2838Z\" fill=\"black\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button class=\"lk-list-item-action\" style=\"transition-delay: .1s;\" @click.stop=\"deletePage(item.id)\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"22\" viewBox=\"0 0 17 22\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M15.8191 7.85834L15.462 18.5833C15.4316 19.5018 15.0417 20.3724 14.3751 21.0103C13.7084 21.6482 12.8176 22.0032 11.8915 22H5.10759C4.18214 22.0033 3.29177 21.6488 2.62524 21.0116C1.95871 20.3744 1.56842 19.5047 1.5371 18.5868L1.18005 7.85834C1.17223 7.6234 1.25879 7.395 1.42066 7.22339C1.58254 7.05178 1.80648 6.95102 2.04321 6.94326C2.27995 6.93551 2.5101 7.02141 2.68302 7.18205C2.85594 7.3427 2.95748 7.56494 2.96529 7.79988L3.32234 18.5275C3.34012 18.9854 3.53603 19.4187 3.86892 19.7364C4.20181 20.054 4.64578 20.2313 5.10759 20.2309H11.8915C12.3539 20.2313 12.7984 20.0535 13.1314 19.7351C13.4644 19.4167 13.6599 18.9825 13.6768 18.5239L14.0338 7.79988C14.0416 7.56494 14.1432 7.3427 14.3161 7.18205C14.489 7.02141 14.7192 6.93551 14.9559 6.94326C15.1926 6.95102 15.4166 7.05178 15.5784 7.22339C15.7403 7.395 15.8269 7.6234 15.8191 7.85834ZM17 4.28927C17 4.52421 16.906 4.74953 16.7386 4.91566C16.5712 5.08179 16.3441 5.17512 16.1074 5.17512H0.892623C0.655884 5.17512 0.428842 5.08179 0.261443 4.91566C0.0940437 4.74953 0 4.52421 0 4.28927C0 4.05433 0.0940437 3.82901 0.261443 3.66288C0.428842 3.49676 0.655884 3.40343 0.892623 3.40343H3.65975C3.94258 3.40418 4.21557 3.30048 4.42561 3.11251C4.63564 2.92454 4.76769 2.66574 4.79606 2.38648C4.86193 1.73138 5.1712 1.12409 5.6636 0.682914C6.156 0.241742 6.79626 -0.00170376 7.45965 8.97617e-06H9.53946C10.2028 -0.00170376 10.8431 0.241742 11.3355 0.682914C11.8279 1.12409 12.1372 1.73138 12.203 2.38648C12.2314 2.66574 12.3635 2.92454 12.5735 3.11251C12.7835 3.30048 13.0565 3.40418 13.3394 3.40343H16.1065C16.3432 3.40343 16.5703 3.49676 16.7377 3.66288C16.9051 3.82901 16.9991 4.05433 16.9991 4.28927H17ZM6.34565 3.40343H10.6552C10.5379 3.13744 10.4612 2.85561 10.4276 2.56719C10.4055 2.34883 10.3025 2.1464 10.1386 1.99911C9.97466 1.85181 9.76148 1.77014 9.54035 1.76993H7.46054C7.23941 1.77014 7.02623 1.85181 6.86231 1.99911C6.69838 2.1464 6.59539 2.34883 6.57327 2.56719C6.53938 2.85565 6.46326 3.13749 6.34565 3.40343ZM7.24453 16.8249V9.2819C7.24453 9.04696 7.15048 8.82164 6.98308 8.65551C6.81568 8.48938 6.58864 8.39605 6.3519 8.39605C6.11516 8.39605 5.88812 8.48938 5.72072 8.65551C5.55332 8.82164 5.45928 9.04696 5.45928 9.2819V16.8284C5.45928 17.0634 5.55332 17.2887 5.72072 17.4548C5.88812 17.6209 6.11516 17.7143 6.3519 17.7143C6.58864 17.7143 6.81568 17.6209 6.98308 17.4548C7.15048 17.2887 7.24453 17.0634 7.24453 16.8284V16.8249ZM11.5416 16.8249V9.2819C11.5416 9.04696 11.4476 8.82164 11.2802 8.65551C11.1128 8.48938 10.8857 8.39605 10.649 8.39605C10.4123 8.39605 10.1852 8.48938 10.0178 8.65551C9.85041 8.82164 9.75637 9.04696 9.75637 9.2819V16.8284C9.75637 17.0634 9.85041 17.2887 10.0178 17.4548C10.1852 17.6209 10.4123 17.7143 10.649 17.7143C10.8857 17.7143 11.1128 17.6209 11.2802 17.4548C11.4476 17.2887 11.5416 17.0634 11.5416 16.8284V16.8249Z\" fill=\"black\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t<div class=\"lk-card__img\">
\t\t\t\t\t\t<a :href=\"item.path\">
\t\t\t\t\t\t\t<img :src=\"'/site/data/images/large/' + item.field_image\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-card__main\">
\t\t\t\t\t\t<div class=\"lk-card__main-block\">
\t\t\t\t\t\t\t<div class=\"lk-card__title\"><a :href=\"item.path\">{{ item.field_header }}</a></div>
\t\t\t\t\t\t\t<div class=\"lk-card__counters\">
\t\t\t\t\t\t\t\t<div class=\"lk-card__counter\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-card__counter-title\">Курсов</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-card__counter-value\">{{ item.courses_count }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-card__counter\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-card__counter-title\">Уроков</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-card__counter-value\">{{ item.lessons_count }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lk-card__desc\">{{ item.field_summary }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-card__tags\">
\t\t\t\t\t\t\t<div class=\"lk-card__tags-tag\" v-for=\"tag in item.field_tags\">{{tag}}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal modal--vue\" v-show=\"isNewEntityCreateModalShowed\" v-cloak>
\t\t\t\t<div class=\"cont\">
\t\t\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t\t\t<div class=\"modal__inner\">
\t\t\t\t\t\t\t<button class=\"modal__closer\" @click=\"isNewEntityCreateModalShowed = false\">×</button>
\t\t\t\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t\t\t\t<form id=\"js-create-item-form\" ref=\"new-item-form\" class=\"form\" data-action=\"/user/pages\" method=\"post\" @submit.prevent=\"onNewObjectFormSubmit\">
\t\t\t\t\t\t\t\t\t<h2 class=\"form__title title-medium\">Новая программа</h2>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form__wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Название</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form__data form-control\" name=\"field_header\" v-model=\"newObject.title\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-group--tac\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"mbtn\" type=\"submit\">Создать</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input class=\"form-control field--under hidden\" name=\"user_id\" style=\"display:none;\" placeholder=\"Пользователь\" type=\"text\" value=\"";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control field--border hidden\" name=\"layout_id\" style=\"display:none;\" placeholder=\"Макет\" type=\"text\" value=\"17\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control field--border hidden\" name=\"parent_page_id\" style=\"display:none;\" placeholder=\"Верхняя страница\" type=\"text\" value=\"";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
        echo "\">

\t\t\t\t\t\t\t\t\t<input class=\"form-control field--under hidden\" name=\"alias\" placeholder=\"Алиас\" type=\"text\" :value=\"newObjectTransiltedHeader\" id=\"alias\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control field--border hidden\" name=\"title\" placeholder=\"Заголовок окна\" type=\"text\" :value=\"newObject.title\" id=\"title\">
\t\t\t\t\t\t\t\t\t";
        // line 115
        echo "\t\t\t\t\t\t\t\t\t<input class=\"form-control field--border hidden\" name=\"field_image\" type=\"text\" :value=\"newObject.image\" placeholder=\"Изображение\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 119
        echo "\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</div>

";
        // line 130
        $this->loadTemplate("footer_lk", "layouts.lk_programs", 130)->display($context);
        // line 131
        echo "<script src=\"/site/theme/js/lk_programs.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lk_programs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 131,  199 => 130,  186 => 119,  181 => 115,  174 => 110,  169 => 108,  116 => 57,  101 => 44,  99 => 43,  96 => 42,  90 => 38,  88 => 37,  56 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
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
/* 					<h1>Программы обучения</h1>*/
/* 				</div>*/
/* 				<div class="divider"></div>*/
/* 				<div class="lk-content-header__block">*/
/* 					<div class="lk-content-search">*/
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
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-cards">*/
/* 				{% if user.role.name != 'student' %}*/
/* 				<div class="lk-card lk-card--new" @click.stop="isNewEntityCreateModalShowed = true">*/
/* 					Добавить программу*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				<div class="lk-card" :key="item.id" v-for="item in filteredData">*/
/* 					{% if user.role.name != 'student' %}*/
/* 					<div class="lk-list-item-actions">*/
/* 						<a class="lk-list-item-action" :href="item.path + '?edit=1'">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">*/
/* 								<path d="M19.2692 4.10577L15.8417 0.678292C15.3944 0.258107 14.8082 0.0170117 14.1947 0.000866574C13.5812 -0.0152786 12.9831 0.194654 12.5143 0.590729L1.25616 11.8489C0.851827 12.2566 0.600069 12.7911 0.543147 13.3625L0.00525749 18.5787C-0.0115935 18.762 0.0121804 18.9466 0.0748844 19.1196C0.137588 19.2926 0.237678 19.4496 0.36802 19.5795C0.484905 19.6954 0.623525 19.7871 0.775932 19.8494C0.92834 19.9116 1.09154 19.9432 1.25616 19.9422H1.36874L6.58502 19.4669C7.15643 19.41 7.69087 19.1582 8.09862 18.7539L19.3568 7.49573C19.7937 7.0341 20.0299 6.41808 20.0135 5.78266C19.997 5.14723 19.7294 4.54422 19.2692 4.10577ZM6.35986 16.9651L2.60714 17.3153L2.94489 13.5626L10.0125 6.58257L13.3899 9.96001L6.35986 16.9651ZM15.0161 8.2838L11.6637 4.93137L14.103 2.42956L17.5179 5.84453L15.0161 8.2838Z" fill="black"/>*/
/* 							</svg>*/
/* 						</a>*/
/* 						<button class="lk-list-item-action" style="transition-delay: .1s;" @click.stop="deletePage(item.id)">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" width="17" height="22" viewBox="0 0 17 22" fill="none">*/
/* 								<path d="M15.8191 7.85834L15.462 18.5833C15.4316 19.5018 15.0417 20.3724 14.3751 21.0103C13.7084 21.6482 12.8176 22.0032 11.8915 22H5.10759C4.18214 22.0033 3.29177 21.6488 2.62524 21.0116C1.95871 20.3744 1.56842 19.5047 1.5371 18.5868L1.18005 7.85834C1.17223 7.6234 1.25879 7.395 1.42066 7.22339C1.58254 7.05178 1.80648 6.95102 2.04321 6.94326C2.27995 6.93551 2.5101 7.02141 2.68302 7.18205C2.85594 7.3427 2.95748 7.56494 2.96529 7.79988L3.32234 18.5275C3.34012 18.9854 3.53603 19.4187 3.86892 19.7364C4.20181 20.054 4.64578 20.2313 5.10759 20.2309H11.8915C12.3539 20.2313 12.7984 20.0535 13.1314 19.7351C13.4644 19.4167 13.6599 18.9825 13.6768 18.5239L14.0338 7.79988C14.0416 7.56494 14.1432 7.3427 14.3161 7.18205C14.489 7.02141 14.7192 6.93551 14.9559 6.94326C15.1926 6.95102 15.4166 7.05178 15.5784 7.22339C15.7403 7.395 15.8269 7.6234 15.8191 7.85834ZM17 4.28927C17 4.52421 16.906 4.74953 16.7386 4.91566C16.5712 5.08179 16.3441 5.17512 16.1074 5.17512H0.892623C0.655884 5.17512 0.428842 5.08179 0.261443 4.91566C0.0940437 4.74953 0 4.52421 0 4.28927C0 4.05433 0.0940437 3.82901 0.261443 3.66288C0.428842 3.49676 0.655884 3.40343 0.892623 3.40343H3.65975C3.94258 3.40418 4.21557 3.30048 4.42561 3.11251C4.63564 2.92454 4.76769 2.66574 4.79606 2.38648C4.86193 1.73138 5.1712 1.12409 5.6636 0.682914C6.156 0.241742 6.79626 -0.00170376 7.45965 8.97617e-06H9.53946C10.2028 -0.00170376 10.8431 0.241742 11.3355 0.682914C11.8279 1.12409 12.1372 1.73138 12.203 2.38648C12.2314 2.66574 12.3635 2.92454 12.5735 3.11251C12.7835 3.30048 13.0565 3.40418 13.3394 3.40343H16.1065C16.3432 3.40343 16.5703 3.49676 16.7377 3.66288C16.9051 3.82901 16.9991 4.05433 16.9991 4.28927H17ZM6.34565 3.40343H10.6552C10.5379 3.13744 10.4612 2.85561 10.4276 2.56719C10.4055 2.34883 10.3025 2.1464 10.1386 1.99911C9.97466 1.85181 9.76148 1.77014 9.54035 1.76993H7.46054C7.23941 1.77014 7.02623 1.85181 6.86231 1.99911C6.69838 2.1464 6.59539 2.34883 6.57327 2.56719C6.53938 2.85565 6.46326 3.13749 6.34565 3.40343ZM7.24453 16.8249V9.2819C7.24453 9.04696 7.15048 8.82164 6.98308 8.65551C6.81568 8.48938 6.58864 8.39605 6.3519 8.39605C6.11516 8.39605 5.88812 8.48938 5.72072 8.65551C5.55332 8.82164 5.45928 9.04696 5.45928 9.2819V16.8284C5.45928 17.0634 5.55332 17.2887 5.72072 17.4548C5.88812 17.6209 6.11516 17.7143 6.3519 17.7143C6.58864 17.7143 6.81568 17.6209 6.98308 17.4548C7.15048 17.2887 7.24453 17.0634 7.24453 16.8284V16.8249ZM11.5416 16.8249V9.2819C11.5416 9.04696 11.4476 8.82164 11.2802 8.65551C11.1128 8.48938 10.8857 8.39605 10.649 8.39605C10.4123 8.39605 10.1852 8.48938 10.0178 8.65551C9.85041 8.82164 9.75637 9.04696 9.75637 9.2819V16.8284C9.75637 17.0634 9.85041 17.2887 10.0178 17.4548C10.1852 17.6209 10.4123 17.7143 10.649 17.7143C10.8857 17.7143 11.1128 17.6209 11.2802 17.4548C11.4476 17.2887 11.5416 17.0634 11.5416 16.8284V16.8249Z" fill="black"/>*/
/* 							</svg>*/
/* 						</button>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					<div class="lk-card__img">*/
/* 						<a :href="item.path">*/
/* 							<img :src="'/site/data/images/large/' + item.field_image">*/
/* 						</a>*/
/* 					</div>*/
/* 					<div class="lk-card__main">*/
/* 						<div class="lk-card__main-block">*/
/* 							<div class="lk-card__title"><a :href="item.path">{{ item.field_header }}</a></div>*/
/* 							<div class="lk-card__counters">*/
/* 								<div class="lk-card__counter">*/
/* 									<div class="lk-card__counter-title">Курсов</div>*/
/* 									<div class="lk-card__counter-value">{{ item.courses_count }}</div>*/
/* 								</div>*/
/* 								<div class="lk-card__counter">*/
/* 									<div class="lk-card__counter-title">Уроков</div>*/
/* 									<div class="lk-card__counter-value">{{ item.lessons_count }}</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="lk-card__desc">{{ item.field_summary }}</div>*/
/* 						</div>*/
/* 						<div class="lk-card__tags">*/
/* 							<div class="lk-card__tags-tag" v-for="tag in item.field_tags">{{tag}}</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="modal modal--vue" v-show="isNewEntityCreateModalShowed" v-cloak>*/
/* 				<div class="cont">*/
/* 					<div class="modal__wrapper">*/
/* 						<div class="modal__inner">*/
/* 							<button class="modal__closer" @click="isNewEntityCreateModalShowed = false">×</button>*/
/* 							<div class="modal__content">*/
/* 								<form id="js-create-item-form" ref="new-item-form" class="form" data-action="/user/pages" method="post" @submit.prevent="onNewObjectFormSubmit">*/
/* 									<h2 class="form__title title-medium">Новая программа</h2>*/
/* 									*/
/* 									<div class="form__wrapper">*/
/* 										<div class="form-group">*/
/* 											<div class="form-group-input">*/
/* 												<label class="form-label">Название</label>*/
/* 												<input class="form__data form-control" name="field_header" v-model="newObject.title" type="text">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											*/
/* 										</div>*/
/* 										<div class="form-group form-group--tac">*/
/* 											<button class="mbtn" type="submit">Создать</button>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									<input class="form-control field--under hidden" name="user_id" style="display:none;" placeholder="Пользователь" type="text" value="{$ user.id $}">*/
/* 									<input class="form-control field--border hidden" name="layout_id" style="display:none;" placeholder="Макет" type="text" value="17">*/
/* 									<input class="form-control field--border hidden" name="parent_page_id" style="display:none;" placeholder="Верхняя страница" type="text" value="{$ page.id $}">*/
/* */
/* 									<input class="form-control field--under hidden" name="alias" placeholder="Алиас" type="text" :value="newObjectTransiltedHeader" id="alias">*/
/* 									<input class="form-control field--border hidden" name="title" placeholder="Заголовок окна" type="text" :value="newObject.title" id="title">*/
/* 									{#<input class="form-control field--border hidden" name="field_header" type="text" :value="newObject.title" placeholder="Название">#}*/
/* 									<input class="form-control field--border hidden" name="field_image" type="text" :value="newObject.image" placeholder="Изображение">*/
/* 									*/
/* 									*/
/* 									{#<button type="submit" ref="new-item-form-submit-btn" class="mbtn">Создать</button>#}*/
/* 								</form>*/
/* 							</div>*/
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
/* <script src="/site/theme/js/lk_programs.js" type="module"></script>*/
