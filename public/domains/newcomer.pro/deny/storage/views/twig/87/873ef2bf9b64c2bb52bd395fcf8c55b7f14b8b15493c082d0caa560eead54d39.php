<?php

/* layouts.test */
class __TwigTemplate_7a3943877a3ad911231708c76e1a1826eda4bd7c73db845d9325acc170fcf8ba extends TwigBridge\Twig\Template
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
        echo "<iframe src=\"https://disk.v-es.ru/fsdownload/GzPaigl1S/02.%20%D0%9C%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3%20%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D1%81%D1%82%D0%B2%D0%B0\" width=\"100%\" height=\"2000\" align=\"left\">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>


";
    }

    public function getTemplateName()
    {
        return "layouts.test";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <iframe src="https://disk.v-es.ru/fsdownload/GzPaigl1S/02.%20%D0%9C%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3%20%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D1%81%D1%82%D0%B2%D0%B0" width="100%" height="2000" align="left">*/
/*     Ваш браузер не поддерживает плавающие фреймы!*/
/*  </iframe>*/
/* */
/* */
/* */
