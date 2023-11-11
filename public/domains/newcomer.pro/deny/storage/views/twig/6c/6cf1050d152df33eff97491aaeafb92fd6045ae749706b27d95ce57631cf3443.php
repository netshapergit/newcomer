<?php

/* layouts.lk_catalog_element */
class __TwigTemplate_c988521f0304ce362a166b55325d4f356685a5072fd8697e219784216ce0d049 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "set" => 3, "include" => 12);
        $filters = array("escape" => 14, "json_encode" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'include'),
                array('escape', 'json_encode'),
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
            $context["pageObj"] = array("id" => $this->getAttribute(            // line 4
(isset($context["page"]) ? $context["page"] : null), "id", array()), "field_image" => $this->getAttribute(            // line 5
(isset($context["page"]) ? $context["page"] : null), "field_image", array()), "field_header" => $this->getAttribute(            // line 6
(isset($context["page"]) ? $context["page"] : null), "field_header", array()), "field_synology" => $this->getAttribute(            // line 7
(isset($context["page"]) ? $context["page"] : null), "field_synology", array()), "field_is_synology" => $this->getAttribute(            // line 8
(isset($context["page"]) ? $context["page"] : null), "field_is_synology", array()), "field_calendar_gallery" => $this->getAttribute(            // line 9
(isset($context["page"]) ? $context["page"] : null), "field_calendar_gallery", array()));
            // line 11
            echo "
";
            // line 12
            $this->loadTemplate("header_lk", "layouts.lk_catalog_element", 12)->display($context);
            // line 13
            echo "<div class=\"lk\" id=\"lk\">
\t<section class=\"lk-opage\" id=\"lk-object-page\" data-json=\"";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["pageObj"]) ? $context["pageObj"] : null)), "html", null, true));
            echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"lk-opage__wrapper\">
\t\t\t\t<div class=\"lk-opage__header\">
\t\t\t\t\t<h1 class=\"lk-opage__title\">{{ objectPageData.field_header }}</h1>
\t\t\t\t\t";
            // line 19
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_employee", array())) {
                // line 20
                echo "\t\t\t\t\t";
                if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_not_editor", array())) {
                    // line 21
                    echo "\t\t\t\t\t<div class=\"lk-opage__header-actions\">
\t\t\t\t\t\t<button @click.stop=\"isEditMode = !isEditMode\" :class=\"{'lk-btn--color-blue': isEditMode}\" class=\"lk-btn\">Редактировать</button>
\t\t\t\t\t\t<form v-show=\"isEditMode\" data-action=\"/user/pages/";
                    // line 23
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
                    echo "\" id=\"js-opage-form\" ref=\"js-opage-form\" method=\"post\" @submit.prevent=\"saveChanges\">
\t\t\t\t\t\t\t<input name=\"_method\" class=\"hidden\" type=\"hidden\" value=\"put\">
\t\t\t\t\t\t\t<input class=\"hidden\" id=\"user_id\" name=\"user_id\" placeholder=\"User ID\" type=\"text\" value=\"";
                    // line 25
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
                    echo "\">
\t\t\t\t\t\t\t<input class=\"hidden form-control field--border\" name=\"field_header\" type=\"text\" :value=\"objectPageData.field_header\" placeholder=\"Название\">
\t\t\t\t\t\t\t<input class=\"hidden form-control field--border\" name=\"field_image\" type=\"text\" :value=\"objectPageData.field_image\" placeholder=\"Изображение\">
\t\t\t\t\t\t\t<input class=\"hidden form-control field--border\" name=\"field_synology\" type=\"text\" :value=\"objectPageData.field_synology\" placeholder=\"Название\">
\t\t\t\t\t\t\t<input class=\"hidden form-control field--border\" name=\"field_is_synology\" type=\"text\" :value=\"String(Number(objectPageData.field_is_synology))\" placeholder=\"Название\">
\t\t\t\t\t\t\t<textarea class=\"hidden\" name=\"field_calendar_gallery\">{{ JSON.stringify(objectPageData.field_calendar_gallery) }}</textarea>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"lk-btn lk-btn--color-blue\">Сохранить</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t</div>

\t\t\t\t<div class=\"lk-opage-gallery-edit\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 40
            if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_not_editor", array())) {
                // line 41
                echo "\t\t\t\t\t<div class=\"lk-opage-gallery-edit\" v-show=\"isEditMode\">
\t\t\t\t\t\t<div class=\"lk-opage-gallery-edit__fields\">
\t\t\t\t\t\t\t<div class=\"lk-input__group\">
\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Название</div> 
\t\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"objectPageData.field_header\" class=\"lk-input__input\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Ссылка на Synology</div> 
\t\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"objectPageData.field_synology\" class=\"lk-input__input\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-input lk-input--img\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Изображение</div> 
\t\t\t\t\t\t\t\t\t<input v-if=\"!objectPageData.field_image\" value=\"Загрузить\" type=\"button\" @click.stop=\"onNewObjectFormImageButtonClick\" class=\"lk-input__input lk-btn--color-blue\">
\t\t\t\t\t\t\t\t\t<img v-else :src=\"'/site/data/images/medium/' + objectPageData.field_image\" @click.stop=\"onNewObjectFormImageButtonClick\">
\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"hidden\" ref=\"lk-object-new\" id=\"lk-object-new\" @change.stop=\"\$event => onImageUpload2(\$event)\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"lk-input\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-input__label\">Использовать ссылку на Synology</div> 
\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox--sided\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"is-use-synology\" v-model=\"objectPageData.field_is_synology\" class=\"\">
\t\t\t\t\t\t\t\t\t\t<label for=\"is-use-synology\">
\t\t\t\t\t\t\t\t\t\t\tНет
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-switcher\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-switcher__inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\tДа
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-opage-gallery-header\">
\t\t\t\t\t\t\t";
                // line 74
                if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_not_editor", array())) {
                    echo "<div class=\"lk-input__label\">Фотогалерея</div> ";
                }
                // line 75
                echo "\t\t\t\t\t\t\t<div class=\"lk-opage-gallery-header__tabs\" :class=\"{'lk-opage-gallery-header__tabs--center': !isEditMode}\">
\t\t\t\t\t\t\t\t<div class=\"lk-opage-gallery-header__tab lk-btn\" 
\t\t\t\t\t\t\t\t\t :class=\"{'lk-btn--color-blue': selectedGalleryDay == item}\"
\t\t\t\t\t\t\t\t\t @click.stop=\"selectedGalleryDay = item\" 
\t\t\t\t\t\t\t\t\t :key=\"item.date\" 
\t\t\t\t\t\t\t\t\t v-for=\"item in galleryItems\">
\t\t\t\t\t\t\t\t\t{{ formatDate(item.date) }}
\t\t\t\t\t\t\t\t\t";
                // line 82
                if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_not_editor", array())) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"lk-opage-gallery-header__tab-delete\" @click.stop=\"deleteGalleryDay(item.date)\" v-show=\"isEditMode\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" id=\"close\"><path d=\"M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z\"></path></svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 88
                if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "field_is_not_editor", array())) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t<div v-show=\"isEditMode\">
\t\t\t\t\t\t\t\t\t<v-date-picker 
\t\t\t\t\t\t\t\t\t   :disabled-dates=\"disabledDates\"
\t\t\t\t\t\t\t\t\t   :value=\"objectNewDay\" 
\t\t\t\t\t\t\t\t\t   @input=\"setObjectDay\"
\t\t\t\t\t\t\t\t\t   >
\t\t\t\t\t\t\t\t\t\t<template v-slot=\"{ inputValue, togglePopover }\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"lk-opage-add-day lk-btn lk-btn--wicon\" @click=\"togglePopover()\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg fill=\"#ffffff\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"nofill\"><path d=\"M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z\"></path></svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t\t</v-date-picker>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 104
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-opage-gallery-edit__images\" v-if=\"selectedGalleryDay\">
\t\t\t\t\t\t\t<div class=\"lk-opage-gallery-edit__image lk-opage-gallery-edit__image--add\" @click.stop=\"onAddImageClick('lk-object-image-input-' + selectedGalleryDay.date)\">
\t\t\t\t\t\t\t\t<svg fill=\"#ffffff\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"nofill\"><path d=\"M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z\"></path></svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lk-opage-gallery-edit__image\" v-for=\"image in selectedGalleryDay.images\">
\t\t\t\t\t\t\t\t<img :src=\"'/site/data/images/medium/' + image\">
\t\t\t\t\t\t\t\t<div class=\"lk-opage-gallery-edit__image-delete\" @click.stop=\"deleteGalleryDayImage(image)\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" id=\"close\"><path d=\"M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z\"></path></svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"file\" class=\"hidden\" :ref=\"'lk-object-image-input-' + selectedGalleryDay.date\" :id=\"'lk-object-image-input-' + selectedGalleryDay.date\" @change.stop=\"\$event => onImageUpload(selectedGalleryDay, \$event)\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 120
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<template v-if=\"objectPageData.field_is_synology\">
\t\t\t\t\t<div style=\"overflow: hidden;\">
\t\t\t\t\t<iframe src=\"";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_synology", array()), "html", null, true));
            echo "\" width=\"100%\" height=\"600\" style=\"border: 0;margin-top: -63px;\" align=\"left\">
\t\t\t\t\t Ваш браузер не поддерживает плавающие фреймы!
\t\t\t\t\t</iframe></div>
\t\t\t\t</template>
\t\t\t\t
\t\t\t\t<template v-else>
\t\t\t\t\t<div class=\"lk-opage-gallery\" v-if=\"selectedGalleryDay\">
\t\t\t\t\t\t<div class=\"lk-opage-gallery-header\" v-show=\"!isEditMode\">
\t\t\t\t\t\t\t<div class=\"lk-opage-gallery-header__tabs\" :class=\"{'lk-opage-gallery-header__tabs--center': !isEditMode}\">
\t\t\t\t\t\t\t\t<div class=\"lk-opage-gallery-header__tab lk-btn\" 
\t\t\t\t\t\t\t\t\t :class=\"{'lk-btn--color-blue': selectedGalleryDay == item}\"
\t\t\t\t\t\t\t\t\t @click.stop=\"selectedGalleryDay = item\" 
\t\t\t\t\t\t\t\t\t :key=\"item.date\" 
\t\t\t\t\t\t\t\t\t v-for=\"item in galleryItems\">
\t\t\t\t\t\t\t\t\t{{ formatDate(item.date) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-opage-gallery-slider splide\">
\t\t\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t\t\t<div class=\"splide__list\">
\t\t\t\t\t\t\t\t\t<a :href=\"'/site/data/images/large/' + image\" data-fancybox=\"gallery\" class=\"splide__slide lk-opage-gallery-slide\" v-for=\"image in selectedGalleryDay.images\">
\t\t\t\t\t\t\t\t\t\t<img :src=\"'/site/data/images/large/' + image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lk-opage-gallery-slider-nav splide\">
\t\t\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t\t\t<div class=\"splide__list\">
\t\t\t\t\t\t\t\t\t<img 
\t\t\t\t\t\t\t\t\t\t class=\"splide__slide lk-opage-gallery-slide-nav\" 
\t\t\t\t\t\t\t\t\t\t v-for=\"image in selectedGalleryDay.images\"
\t\t\t\t\t\t\t\t\t\t :src=\"'/site/data/images/large/' + image\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</template>
\t\t\t</div>
\t\t</div>
\t</section>

</div>

<script src=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js\"></script>
<link
  rel=\"stylesheet\"
  href=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css\"
/>
<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"></script>
<link href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css\" rel=\"stylesheet\">
";
            // line 178
            $this->loadTemplate("footer_lk", "layouts.lk_catalog_element", 178)->display($context);
            // line 179
            echo "<script src='https://unpkg.com/v-calendar'></script>


";
        } else {
            // line 183
            echo "\t<script>
\t\tlocation.href = location.origin + '/?login=yes'
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.lk_catalog_element";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 183,  271 => 179,  269 => 178,  213 => 125,  206 => 120,  188 => 104,  171 => 89,  169 => 88,  166 => 87,  160 => 83,  158 => 82,  149 => 75,  145 => 74,  110 => 41,  108 => 40,  102 => 36,  99 => 35,  86 => 25,  81 => 23,  77 => 21,  74 => 20,  72 => 19,  64 => 14,  61 => 13,  59 => 12,  56 => 11,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if user %}*/
/* */
/* {% set pageObj = {*/
/* 	id: page.id,*/
/* 	field_image: page.field_image,*/
/* 	field_header: page.field_header,*/
/* 	field_synology: page.field_synology,*/
/* 	field_is_synology: page.field_is_synology,*/
/* 	field_calendar_gallery: page.field_calendar_gallery*/
/* } %}*/
/* */
/* {% include 'header_lk' %}*/
/* <div class="lk" id="lk">*/
/* 	<section class="lk-opage" id="lk-object-page" data-json="{$ pageObj|json_encode() $}">*/
/* 		<div class="container">*/
/* 			<div class="lk-opage__wrapper">*/
/* 				<div class="lk-opage__header">*/
/* 					<h1 class="lk-opage__title">{{ objectPageData.field_header }}</h1>*/
/* 					{% if user.field_is_employee %}*/
/* 					{% if not user.field_is_not_editor %}*/
/* 					<div class="lk-opage__header-actions">*/
/* 						<button @click.stop="isEditMode = !isEditMode" :class="{'lk-btn--color-blue': isEditMode}" class="lk-btn">Редактировать</button>*/
/* 						<form v-show="isEditMode" data-action="/user/pages/{$ page.id $}" id="js-opage-form" ref="js-opage-form" method="post" @submit.prevent="saveChanges">*/
/* 							<input name="_method" class="hidden" type="hidden" value="put">*/
/* 							<input class="hidden" id="user_id" name="user_id" placeholder="User ID" type="text" value="{$ user.id $}">*/
/* 							<input class="hidden form-control field--border" name="field_header" type="text" :value="objectPageData.field_header" placeholder="Название">*/
/* 							<input class="hidden form-control field--border" name="field_image" type="text" :value="objectPageData.field_image" placeholder="Изображение">*/
/* 							<input class="hidden form-control field--border" name="field_synology" type="text" :value="objectPageData.field_synology" placeholder="Название">*/
/* 							<input class="hidden form-control field--border" name="field_is_synology" type="text" :value="String(Number(objectPageData.field_is_synology))" placeholder="Название">*/
/* 							<textarea class="hidden" name="field_calendar_gallery">{{ JSON.stringify(objectPageData.field_calendar_gallery) }}</textarea>*/
/* 							<button type="submit" class="lk-btn lk-btn--color-blue">Сохранить</button>*/
/* 						</form>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					{% endif %}*/
/* 				</div>*/
/* */
/* 				<div class="lk-opage-gallery-edit">*/
/* 					*/
/* 					{% if not user.field_is_not_editor %}*/
/* 					<div class="lk-opage-gallery-edit" v-show="isEditMode">*/
/* 						<div class="lk-opage-gallery-edit__fields">*/
/* 							<div class="lk-input__group">*/
/* 								<div class="lk-input">*/
/* 									<div class="lk-input__label">Название</div> */
/* 									<input type="text" v-model="objectPageData.field_header" class="lk-input__input">*/
/* 								</div>*/
/* 								<div class="lk-input">*/
/* 									<div class="lk-input__label">Ссылка на Synology</div> */
/* 									<input type="text" v-model="objectPageData.field_synology" class="lk-input__input">*/
/* 								</div>*/
/* 								<div class="lk-input lk-input--img">*/
/* 									<div class="lk-input__label">Изображение</div> */
/* 									<input v-if="!objectPageData.field_image" value="Загрузить" type="button" @click.stop="onNewObjectFormImageButtonClick" class="lk-input__input lk-btn--color-blue">*/
/* 									<img v-else :src="'/site/data/images/medium/' + objectPageData.field_image" @click.stop="onNewObjectFormImageButtonClick">*/
/* 									<input type="file" class="hidden" ref="lk-object-new" id="lk-object-new" @change.stop="$event => onImageUpload2($event)">*/
/* 								</div>*/
/* 								<div class="lk-input">*/
/* 									<div class="lk-input__label">Использовать ссылку на Synology</div> */
/* 									<div class="checkbox checkbox--sided">*/
/* 										<input type="checkbox" id="is-use-synology" v-model="objectPageData.field_is_synology" class="">*/
/* 										<label for="is-use-synology">*/
/* 											Нет*/
/* 											<div class="checkbox-switcher">*/
/* 												<div class="checkbox-switcher__inner"></div>*/
/* 											</div>*/
/* 											Да*/
/* 										</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="lk-opage-gallery-header">*/
/* 							{% if not user.field_is_not_editor %}<div class="lk-input__label">Фотогалерея</div> {% endif %}*/
/* 							<div class="lk-opage-gallery-header__tabs" :class="{'lk-opage-gallery-header__tabs--center': !isEditMode}">*/
/* 								<div class="lk-opage-gallery-header__tab lk-btn" */
/* 									 :class="{'lk-btn--color-blue': selectedGalleryDay == item}"*/
/* 									 @click.stop="selectedGalleryDay = item" */
/* 									 :key="item.date" */
/* 									 v-for="item in galleryItems">*/
/* 									{{ formatDate(item.date) }}*/
/* 									{% if not user.field_is_not_editor %}*/
/* 									<div class="lk-opage-gallery-header__tab-delete" @click.stop="deleteGalleryDay(item.date)" v-show="isEditMode">*/
/* 										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="close"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								{% if not user.field_is_not_editor %}*/
/* 								<div v-show="isEditMode">*/
/* 									<v-date-picker */
/* 									   :disabled-dates="disabledDates"*/
/* 									   :value="objectNewDay" */
/* 									   @input="setObjectDay"*/
/* 									   >*/
/* 										<template v-slot="{ inputValue, togglePopover }">*/
/* 											<button class="lk-opage-add-day lk-btn lk-btn--wicon" @click="togglePopover()">*/
/* 												<svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nofill"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"></path></svg>*/
/* 											</button>*/
/* 										</template>*/
/* 									</v-date-picker>*/
/* 								</div>*/
/* 								*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="lk-opage-gallery-edit__images" v-if="selectedGalleryDay">*/
/* 							<div class="lk-opage-gallery-edit__image lk-opage-gallery-edit__image--add" @click.stop="onAddImageClick('lk-object-image-input-' + selectedGalleryDay.date)">*/
/* 								<svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nofill"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"></path></svg>*/
/* 							</div>*/
/* 							<div class="lk-opage-gallery-edit__image" v-for="image in selectedGalleryDay.images">*/
/* 								<img :src="'/site/data/images/medium/' + image">*/
/* 								<div class="lk-opage-gallery-edit__image-delete" @click.stop="deleteGalleryDayImage(image)">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="close"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>*/
/* 								</div>*/
/* 							</div>*/
/* 							<input type="file" class="hidden" :ref="'lk-object-image-input-' + selectedGalleryDay.date" :id="'lk-object-image-input-' + selectedGalleryDay.date" @change.stop="$event => onImageUpload(selectedGalleryDay, $event)">*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				<template v-if="objectPageData.field_is_synology">*/
/* 					<div style="overflow: hidden;">*/
/* 					<iframe src="{$ page.field_synology $}" width="100%" height="600" style="border: 0;margin-top: -63px;" align="left">*/
/* 					 Ваш браузер не поддерживает плавающие фреймы!*/
/* 					</iframe></div>*/
/* 				</template>*/
/* 				*/
/* 				<template v-else>*/
/* 					<div class="lk-opage-gallery" v-if="selectedGalleryDay">*/
/* 						<div class="lk-opage-gallery-header" v-show="!isEditMode">*/
/* 							<div class="lk-opage-gallery-header__tabs" :class="{'lk-opage-gallery-header__tabs--center': !isEditMode}">*/
/* 								<div class="lk-opage-gallery-header__tab lk-btn" */
/* 									 :class="{'lk-btn--color-blue': selectedGalleryDay == item}"*/
/* 									 @click.stop="selectedGalleryDay = item" */
/* 									 :key="item.date" */
/* 									 v-for="item in galleryItems">*/
/* 									{{ formatDate(item.date) }}*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="lk-opage-gallery-slider splide">*/
/* 							<div class="splide__track">*/
/* 								<div class="splide__list">*/
/* 									<a :href="'/site/data/images/large/' + image" data-fancybox="gallery" class="splide__slide lk-opage-gallery-slide" v-for="image in selectedGalleryDay.images">*/
/* 										<img :src="'/site/data/images/large/' + image">*/
/* 									</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="lk-opage-gallery-slider-nav splide">*/
/* 							<div class="splide__track">*/
/* 								<div class="splide__list">*/
/* 									<img */
/* 										 class="splide__slide lk-opage-gallery-slide-nav" */
/* 										 v-for="image in selectedGalleryDay.images"*/
/* 										 :src="'/site/data/images/large/' + image">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</template>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* </div>*/
/* */
/* <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>*/
/* <link*/
/*   rel="stylesheet"*/
/*   href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"*/
/* />*/
/* <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>*/
/* <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">*/
/* {% include 'footer_lk' %}*/
/* <script src='https://unpkg.com/v-calendar'></script>*/
/* */
/* */
/* {% else %}*/
/* 	<script>*/
/* 		location.href = location.origin + '/?login=yes'*/
/* 	</script>*/
/* {% endif %}*/
