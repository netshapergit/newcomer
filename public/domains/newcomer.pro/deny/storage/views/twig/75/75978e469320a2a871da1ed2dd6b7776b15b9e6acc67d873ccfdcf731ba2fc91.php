<?php

/* footer_lk */
class __TwigTemplate_34b9679b107b105d098512cab41ac43d136c9327bc4d98e96f739f0666600e50 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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

        // line 1
        $this->loadTemplate("modal_login", "footer_lk", 1)->display($context);
        // line 2
        $this->loadTemplate("modal_reg", "footer_lk", 2)->display($context);
        // line 3
        echo "<script src=\"/site/theme/js/lib_jquery.js\"></script>

<script src=\"/site/theme/js/main1.js\"></script>
<script src=\"/site/theme/js/translit.js\"></script>

<script src=\"https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue-clickaway@2.2.2/dist/vue-clickaway.min.js\"></script>
<script src='https://unpkg.com/v-calendar'></script>
<script src=\"https://unpkg.com/@johmun/vue-tags-input/dist/vue-tags-input.js\"></script>
<script src=\"https://unpkg.com/vue-toasted\"></script>
";
    }

    public function getTemplateName()
    {
        return "footer_lk";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'modal_login' %}*/
/* {% include 'modal_reg' %}*/
/* <script src="/site/theme/js/lib_jquery.js"></script>*/
/* */
/* <script src="/site/theme/js/main1.js"></script>*/
/* <script src="/site/theme/js/translit.js"></script>*/
/* */
/* <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/vue-clickaway@2.2.2/dist/vue-clickaway.min.js"></script>*/
/* <script src='https://unpkg.com/v-calendar'></script>*/
/* <script src="https://unpkg.com/@johmun/vue-tags-input/dist/vue-tags-input.js"></script>*/
/* <script src="https://unpkg.com/vue-toasted"></script>*/
/* */
