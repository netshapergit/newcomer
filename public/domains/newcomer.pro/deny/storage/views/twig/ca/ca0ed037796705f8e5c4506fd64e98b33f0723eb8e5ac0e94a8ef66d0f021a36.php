<?php

/* footer_lk */
class __TwigTemplate_4acae214b2b7f358ebdb5068981d85e28d8b8e6f5eb3454cc7a6d31b93a24ed3 extends TwigBridge\Twig\Template
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

        // line 1
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js\" integrity=\"sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue-clickaway@2.2.2/dist/vue-clickaway.min.js\"></script>
<script src='https://unpkg.com/v-calendar'></script>
<script src=\"/site/theme/js/lk1.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "footer_lk";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/vue-clickaway@2.2.2/dist/vue-clickaway.min.js"></script>*/
/* <script src='https://unpkg.com/v-calendar'></script>*/
/* <script src="/site/theme/js/lk1.js" type="module"></script>*/
