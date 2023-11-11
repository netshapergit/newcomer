<?php

/* _.admin.user_fields.form */
class __TwigTemplate_a294921bdcd53fe7e9cc004c7c661dacbbd88c5ffa3975be74ee12114a6c1af6 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.alter_fields.form", "_.admin.user_fields.form", 1);
        $this->blocks = array(
            'fields_left' => array($this, 'block_fields_left'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.alter_fields.form";
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
    public function block_fields_left($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        $this->displayParentBlock("fields_left", $context, $blocks);
        echo "

\t<div class=\"row\">
\t\t<div class=\"col-sm-6\">
\t\t\t<ns-checkbox alias=\"hidden\" item=\"item\" label=\"Скрытое\" size=\"8\"></ns-checkbox>
\t\t</div>
\t\t<div class=\"col-sm-6\">
\t\t\t<ns-checkbox alias=\"required\" item=\"item\" label=\"Обязательное\" size=\"8\"></ns-checkbox>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.user_fields.form";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.alter_fields.form' %}*/
/* */
/* {% block fields_left %}*/
/* */
/* 	{$ parent() $}*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-sm-6">*/
/* 			<ns-checkbox alias="hidden" item="item" label="Скрытое" size="8"></ns-checkbox>*/
/* 		</div>*/
/* 		<div class="col-sm-6">*/
/* 			<ns-checkbox alias="required" item="item" label="Обязательное" size="8"></ns-checkbox>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */