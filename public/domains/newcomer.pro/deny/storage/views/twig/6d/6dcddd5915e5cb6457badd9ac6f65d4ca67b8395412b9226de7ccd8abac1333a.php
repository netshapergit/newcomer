<?php

/* _.user.pages.form */
class __TwigTemplate_90ee8f528c2e271774471047785d6fefbe86870bfc857da215740a09c7a827f8 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.user.form", "_.user.pages.form", 1);
        $this->blocks = array(
            'buttons' => array($this, 'block_buttons'),
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.user.form";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("escape" => 33);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_buttons($context, array $blocks = array())
    {
        // line 4
        echo "
\t<a class=\"btn btn-default btn-sm\" ng-href=\"{{ item.path }}\" ng-show=\"{{ item.id }}\" target=\"_blank\">
\t\t<span class=\"fa fa-eye\"></span>
\t\tПросмотр
\t</a>

";
    }

    // line 12
    public function block_fields($context, array $blocks = array())
    {
        // line 13
        echo "
\t<div ng-controller=\"NetShaperAdminFormPagesController\">

\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-6\">

\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ns-checkbox alias=\"active\" default=\"1\" item=\"item\" label=\"Страница активна\" size=\"8\"></ns-checkbox>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<ns-integer alias=\"id\" disabled item=\"item\" label=\"ID\" ng-show=\"item.id\" size=\"6\"></ns-integer>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ns-integer alias=\"user_id\"  default=\"";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\" item=\"item\" label=\"Пользователь\" ng-show=\"ng-hide\" size=\"6\"></ns-integer>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ns-option alias=\"access_level\" default=\"any\" item=\"item\" label=\"Доступ\" ng-show=\"ng-hide\" options=\"list.accessLevels\" size=\"8\"></ns-option>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ns-string alias=\"alias\" item=\"item\" label=\"Алиас\" size=\"8\"></ns-string>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ns-option alias=\"layout_id\" item=\"item\" label=\"Макет\" options=\"list.layouts\" size=\"8\"></ns-option>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ns-page alias=\"parent_page_id\" default=\"1\" item=\"item\" label=\"Верхняя страница\" ng-show=\"ng-hide\" layouts=\"list.pages\" size=\"8\"></ns-page>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<ns-integer alias=\"order\" default=\"0\" item=\"item\" label=\"Порядок\" ng-show=\"ng-hide\" size=\"6\"></ns-integer>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ns-string alias=\"title\" item=\"item\" label=\"Заголовок окна\"></ns-string>
<!--
\t\t\t\t<ns-text alias=\"keywords\" item=\"item\" label=\"Ключевые слова\"></ns-text>

\t\t\t\t<ns-text alias=\"description\" item=\"item\" label=\"Описание\"></ns-text>
-->
\t\t\t</div>

\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<ns-incognito
\t\t\t\t\talias=\"field_{{ field.alias }}\"
\t\t\t\t\tfield-type=\"{{ field.field_type.alias.replace('pages', 'options') }}\"
\t\t\t\t\titem=\"item\"
\t\t\t\t\tlabel=\"{{ field.name }}\"
\t\t\t\t\tlayouts=\"field.layouts\"
\t\t\t\t\tng-repeat=\"field in list.fields\"
\t\t\t\t\tng-show=\"isFieldShown(field)\"
\t\t\t\t\tselects=\"field.selects\"
\t\t\t\t></ns-incognito>
\t\t\t</div>

\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.user.pages.form";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  69 => 13,  66 => 12,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.user.form' %}*/
/* */
/* {% block buttons %}*/
/* */
/* 	<a class="btn btn-default btn-sm" ng-href="{{ item.path }}" ng-show="{{ item.id }}" target="_blank">*/
/* 		<span class="fa fa-eye"></span>*/
/* 		Просмотр*/
/* 	</a>*/
/* */
/* {% endblock %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div ng-controller="NetShaperAdminFormPagesController">*/
/* */
/* 		<div class="row">*/
/* */
/* 			<div class="col-sm-6">*/
/* */
/* 				<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 						<ns-checkbox alias="active" default="1" item="item" label="Страница активна" size="8"></ns-checkbox>*/
/* 					</div>*/
/* 					<div class="col-sm-4">*/
/* 						<ns-integer alias="id" disabled item="item" label="ID" ng-show="item.id" size="6"></ns-integer>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 				*/
/* 					<div class="col-sm-6">*/
/* 						<ns-integer alias="user_id"  default="{$ user.id $}" item="item" label="Пользователь" ng-show="ng-hide" size="6"></ns-integer>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-sm-6">*/
/* 						<ns-option alias="access_level" default="any" item="item" label="Доступ" ng-show="ng-hide" options="list.accessLevels" size="8"></ns-option>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-sm-6">*/
/* 						<ns-string alias="alias" item="item" label="Алиас" size="8"></ns-string>*/
/* 					</div>*/
/* 					<div class="col-sm-6">*/
/* 						<ns-option alias="layout_id" item="item" label="Макет" options="list.layouts" size="8"></ns-option>*/
/* 					</div>*/
/* 					<div class="col-sm-6">*/
/* 						<ns-page alias="parent_page_id" default="1" item="item" label="Верхняя страница" ng-show="ng-hide" layouts="list.pages" size="8"></ns-page>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					*/
/* 					<div class="col-sm-4">*/
/* 						<ns-integer alias="order" default="0" item="item" label="Порядок" ng-show="ng-hide" size="6"></ns-integer>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<ns-string alias="title" item="item" label="Заголовок окна"></ns-string>*/
/* <!--*/
/* 				<ns-text alias="keywords" item="item" label="Ключевые слова"></ns-text>*/
/* */
/* 				<ns-text alias="description" item="item" label="Описание"></ns-text>*/
/* -->*/
/* 			</div>*/
/* */
/* 			<div class="col-sm-6">*/
/* 				<ns-incognito*/
/* 					alias="field_{{ field.alias }}"*/
/* 					field-type="{{ field.field_type.alias.replace('pages', 'options') }}"*/
/* 					item="item"*/
/* 					label="{{ field.name }}"*/
/* 					layouts="field.layouts"*/
/* 					ng-repeat="field in list.fields"*/
/* 					ng-show="isFieldShown(field)"*/
/* 					selects="field.selects"*/
/* 				></ns-incognito>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
