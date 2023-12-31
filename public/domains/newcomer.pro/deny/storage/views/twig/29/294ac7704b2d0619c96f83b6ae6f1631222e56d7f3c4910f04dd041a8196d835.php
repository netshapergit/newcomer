<?php

/* _.admin.fields.form */
class __TwigTemplate_fad10cb2f127c4c9c33c32e3c283d4f6132ecddebf8a86e12d9645e27087d6a3 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.form", "_.admin.fields.form", 1);
        $this->blocks = array(
            'fields' => array($this, 'block_fields'),
            'fields_left' => array($this, 'block_fields_left'),
            'fields_right' => array($this, 'block_fields_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.form";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block'),
                array(),
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
    public function block_fields($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"row\" ng-controller=\"NetShaperAdminFormFieldsController\">

\t\t<div class=\"col-sm-6\">

\t\t\t";
        // line 9
        $this->displayBlock('fields_left', $context, $blocks);
        // line 25
        echo "
\t\t</div>

\t\t<div class=\"col-sm-6\">

\t\t\t";
        // line 30
        $this->displayBlock('fields_right', $context, $blocks);
        // line 31
        echo "
\t\t</div>

\t</div>

";
    }

    // line 9
    public function block_fields_left($context, array $blocks = array())
    {
        // line 10
        echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<ns-integer alias=\"id\" disabled item=\"item\" label=\"ID\" ng-show=\"item.id\" size=\"6\"></ns-integer>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<ns-option alias=\"field_type_id\" item=\"item\" label=\"Тип поля\" options=\"list.fieldTypes\" size=\"9\"></ns-option>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ns-string alias=\"alias\" item=\"item\" label=\"Алиас\"></ns-string>

\t\t\t\t<ns-string alias=\"name\" item=\"item\" label=\"Название\"></ns-string>

\t\t\t";
    }

    // line 30
    public function block_fields_right($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_.admin.fields.form";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  87 => 10,  84 => 9,  75 => 31,  73 => 30,  66 => 25,  64 => 9,  57 => 4,  54 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.form' %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div class="row" ng-controller="NetShaperAdminFormFieldsController">*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			{% block fields_left %}*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-sm-4">*/
/* 						<ns-integer alias="id" disabled item="item" label="ID" ng-show="item.id" size="6"></ns-integer>*/
/* 					</div>*/
/* 					<div class="col-sm-8">*/
/* 						<ns-option alias="field_type_id" item="item" label="Тип поля" options="list.fieldTypes" size="9"></ns-option>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<ns-string alias="alias" item="item" label="Алиас"></ns-string>*/
/* */
/* 				<ns-string alias="name" item="item" label="Название"></ns-string>*/
/* */
/* 			{% endblock %}*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			{% block fields_right %}{% endblock %}*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
