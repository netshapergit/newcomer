<?php

/* layouts.lk */
class __TwigTemplate_bebd9a855721dfe086dca4701eceef70f35eb4536d0405c03c6c9c8e1ea2cada extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1);
        $filters = array("escape" => 2);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
            echo "\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "login", array()), "html", null, true));
            echo "
";
        } else {
            // line 4
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
        return array (  51 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if user %}*/
/* 	{$ user.login $}*/
/* {% else %}*/
/* 	<script>*/
/* 		location.href = location.origin + '/?login=yes'*/
/* 	</script>*/
/* {% endif %}*/
