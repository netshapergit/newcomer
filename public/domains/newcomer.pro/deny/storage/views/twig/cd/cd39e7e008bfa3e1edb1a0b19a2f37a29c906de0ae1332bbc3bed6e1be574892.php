<?php

/* layouts.lk_gis */
class __TwigTemplate_817245cc068ad1f0ffcd71826aa6bcf3b293b261af4560058a02d2ca72f360f1 extends TwigBridge\Twig\Template
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
            $this->loadTemplate("header_lk", "layouts.lk_gis", 3)->display($context);
            // line 4
            echo "<div class=\"lk\" id=\"lk\" data-user-id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
            echo "\">
\t
\t<section class=\"lk-empls\" id=\"lk-empls\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t\t<div style=\"width:100%;text-align:center;font-size:20px;\">Раздел в разработке</div>
\t\t\t <iframe src=\"http://80.246.209.166:8080\" sandbox=\"allow-forms allow-modals\" width=\"100%\" height=\"100%\"> </iframe>
\t\t</div>
\t</section>

</div>

";
            // line 16
            $this->loadTemplate("footer_lk", "layouts.lk_gis", 16)->display($context);
            // line 17
            echo "
";
        } else {
            // line 19
            echo "\t<script>
\t\tlocation.href = location.origin + '/?login=yes'
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.lk_gis";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  68 => 17,  66 => 16,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if user %}*/
/* */
/* {% include 'header_lk' %}*/
/* <div class="lk" id="lk" data-user-id="{$ user.id $}">*/
/* 	*/
/* 	<section class="lk-empls" id="lk-empls">*/
/* 		<div class="container">*/
/* 			*/
/* 				<div style="width:100%;text-align:center;font-size:20px;">Раздел в разработке</div>*/
/* 			 <iframe src="http://80.246.209.166:8080" sandbox="allow-forms allow-modals" width="100%" height="100%"> </iframe>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* */
/* {% else %}*/
/* 	<script>*/
/* 		location.href = location.origin + '/?login=yes'*/
/* 	</script>*/
/* {% endif %}*/
