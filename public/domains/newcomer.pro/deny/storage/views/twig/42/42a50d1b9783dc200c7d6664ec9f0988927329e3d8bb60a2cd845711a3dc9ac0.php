<?php

/* _.admin.admins.form */
class __TwigTemplate_4dfd80c4af4164e9838b719bfc41271fb493deb77c7d2ca9b2b4fb1be9f428ca extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.form", "_.admin.admins.form", 1);
        $this->blocks = array(
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.form";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
\t<div class=\"row\">

\t\t<div class=\"col-sm-6\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<ns-integer alias=\"id\" disabled item=\"item\" label=\"ID\" ng-show=\"item.id\" size=\"6\"></ns-integer>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\"></div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<ns-checkbox alias=\"active\" default=\"1\" item=\"item\" label=\"Админ активен\" size=\"12\"></ns-checkbox>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-string alias=\"login\" item=\"item\" label=\"Логин\" size=\"8\"></ns-string>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-option alias=\"role\" default=\"manager\" item=\"item\" label=\"Роль\" options=\"list.roles\" size=\"8\"></ns-option>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ns-email alias=\"email\" item=\"item\" label=\"E-mail\"></ns-email>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-password alias=\"password\" item=\"item\" label=\"Пароль\" size=\"8\"></ns-password>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-password alias=\"password_confirmation\" item=\"item\" label=\"Подтверждение\" size=\"8\"></ns-password>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"col-sm-6\">
\t\t\t<ns-options alias=\"domains\" item=\"item\" label=\"Домены\" options=\"list.domains\"></ns-options>
\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.admins.form";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.form' %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-4">*/
/* 					<ns-integer alias="id" disabled item="item" label="ID" ng-show="item.id" size="6"></ns-integer>*/
/* 				</div>*/
/* 				<div class="col-sm-4"></div>*/
/* 				<div class="col-sm-4">*/
/* 					<ns-checkbox alias="active" default="1" item="item" label="Админ активен" size="12"></ns-checkbox>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<ns-string alias="login" item="item" label="Логин" size="8"></ns-string>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<ns-option alias="role" default="manager" item="item" label="Роль" options="list.roles" size="8"></ns-option>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<ns-email alias="email" item="item" label="E-mail"></ns-email>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<ns-password alias="password" item="item" label="Пароль" size="8"></ns-password>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<ns-password alias="password_confirmation" item="item" label="Подтверждение" size="8"></ns-password>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-6">*/
/* 			<ns-options alias="domains" item="item" label="Домены" options="list.domains"></ns-options>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
