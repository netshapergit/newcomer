<?php

/* _.module_types.registration.main */
class __TwigTemplate_829b915482774fd89ef027e0351d739182284993f2dd7ef32af62a8758e4e8c8 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "block" => 2, "for" => 71, "include" => 73);
        $filters = array("escape" => 15, "default" => 15);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block', 'for', 'include'),
                array('escape', 'default'),
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
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "\t";
            $this->displayBlock('form', $context, $blocks);
        }
    }

    public function block_form($context, array $blocks = array())
    {
        // line 3
        echo "\t\t<form action=\"/register\" class=\"form-horizontal\" method=\"post\">
\t\t\t<div class=\"form-group ";
        // line 4
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "has", array(0 => "login"), "method")) {
            echo "has-error";
        }
        echo "\">
\t\t\t\t<label class=\"col-sm-4 control-label\">
\t\t\t\t\tЛогин
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"login\"
\t\t\t\t\t\tplaceholder=\"Логин\"
\t\t\t\t\t\trequired
\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tvalue=\"";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), "login", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), "login", array()), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t>
\t\t\t\t\t";
        // line 17
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "has", array(0 => "login"), "method")) {
            // line 18
            echo "\t\t\t\t\t\t<p class=\"help-block\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "first", array(0 => "login"), "method"), "html", null, true));
            echo "</p>
\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group ";
        // line 22
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "has", array(0 => "email"), "method")) {
            echo "has-error";
        }
        echo "\">
\t\t\t\t<label class=\"col-sm-4 control-label\">
\t\t\t\t\tE-mail
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"email\"
\t\t\t\t\t\tplaceholder=\"E-mail\"
\t\t\t\t\t\trequired
\t\t\t\t\t\ttype=\"email\"
\t\t\t\t\t\tvalue=\"";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), "email", array()), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t>
\t\t\t\t\t";
        // line 35
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "has", array(0 => "email"), "method")) {
            // line 36
            echo "\t\t\t\t\t\t<p class=\"help-block\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "first", array(0 => "email"), "method"), "html", null, true));
            echo "</p>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group ";
        // line 40
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "has", array(0 => "password"), "method")) {
            echo "has-error";
        }
        echo "\">
\t\t\t\t<label class=\"col-sm-4 control-label\">
\t\t\t\t\tПароль
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"password\"
\t\t\t\t\t\tplaceholder=\"Пароль\"
\t\t\t\t\t\trequired
\t\t\t\t\t\ttype=\"password\"
\t\t\t\t\t>
\t\t\t\t\t";
        // line 52
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "has", array(0 => "password"), "method")) {
            // line 53
            echo "\t\t\t\t\t\t<p class=\"help-block\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "first", array(0 => "password"), "method"), "html", null, true));
            echo "</p>
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-4 control-label\">
\t\t\t\t\tПодтверждение
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"password_confirmation\"
\t\t\t\t\t\tplaceholder=\"Подтверждение\"
\t\t\t\t\t\trequired
\t\t\t\t\t\ttype=\"password\"
\t\t\t\t\t>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if ( !$this->getAttribute($context["field"], "hidden", array())) {
                // line 72
                echo "\t\t\t\t";
                // line 73
                $this->loadTemplate("_.field", "_.module_types.registration.main", 73)->display(array_merge($context, array("horizontal" => true, "required" => $this->getAttribute(                // line 75
$context["field"], "required", array()), "size" => 8)));
                // line 79
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\">
\t\t\t\t\t\tЗарегистрироваться
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t";
    }

    public function getTemplateName()
    {
        return "_.module_types.registration.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 80,  182 => 79,  180 => 75,  179 => 73,  177 => 72,  166 => 71,  148 => 55,  142 => 53,  140 => 52,  123 => 40,  119 => 38,  113 => 36,  111 => 35,  106 => 33,  90 => 22,  86 => 20,  80 => 18,  78 => 17,  73 => 15,  57 => 4,  54 => 3,  46 => 2,  44 => 1,);
    }
}
/* {% if not user %}*/
/* 	{% block form %}*/
/* 		<form action="/register" class="form-horizontal" method="post">*/
/* 			<div class="form-group {% if errors.has('login') %}has-error{% endif %}">*/
/* 				<label class="col-sm-4 control-label">*/
/* 					Логин*/
/* 				</label>*/
/* 				<div class="col-sm-8">*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="login"*/
/* 						placeholder="Логин"*/
/* 						required*/
/* 						type="text"*/
/* 						value="{$ request.inputPrev.login|default('') $}"*/
/* 					>*/
/* 					{% if errors.has('login') %}*/
/* 						<p class="help-block">{$ errors.first('login') $}</p>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="form-group {% if errors.has('email') %}has-error{% endif %}">*/
/* 				<label class="col-sm-4 control-label">*/
/* 					E-mail*/
/* 				</label>*/
/* 				<div class="col-sm-8">*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="email"*/
/* 						placeholder="E-mail"*/
/* 						required*/
/* 						type="email"*/
/* 						value="{$ request.inputPrev.email|default('') $}"*/
/* 					>*/
/* 					{% if errors.has('email') %}*/
/* 						<p class="help-block">{$ errors.first('email') $}</p>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="form-group {% if errors.has('password') %}has-error{% endif %}">*/
/* 				<label class="col-sm-4 control-label">*/
/* 					Пароль*/
/* 				</label>*/
/* 				<div class="col-sm-8">*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="password"*/
/* 						placeholder="Пароль"*/
/* 						required*/
/* 						type="password"*/
/* 					>*/
/* 					{% if errors.has('password') %}*/
/* 						<p class="help-block">{$ errors.first('password') $}</p>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-4 control-label">*/
/* 					Подтверждение*/
/* 				</label>*/
/* 				<div class="col-sm-8">*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="password_confirmation"*/
/* 						placeholder="Подтверждение"*/
/* 						required*/
/* 						type="password"*/
/* 					>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% for field in config.fields if not field.hidden %}*/
/* 				{%*/
/* 					include '_.field' with {*/
/* 						'horizontal': true,*/
/* 						'required': field.required,*/
/* 						'size': 8*/
/* 					}*/
/* 				%}*/
/* 			{% endfor %}*/
/* 			<div class="form-group">*/
/* 				<div class="col-sm-offset-4 col-sm-8">*/
/* 					<button class="btn btn-default" type="submit">*/
/* 						Зарегистрироваться*/
/* 					</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	{% endblock %}*/
/* {% endif %}*/
/* */
