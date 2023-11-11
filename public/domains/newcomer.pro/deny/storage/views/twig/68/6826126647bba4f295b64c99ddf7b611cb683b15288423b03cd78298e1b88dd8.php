<?php

/* layouts.lk_messages */
class __TwigTemplate_a4d706ed4dfe5053818156428e3594ca19698546f30d493b19298f68426969aa extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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
        $this->loadTemplate("header_lk", "layouts.lk_messages", 1)->display($context);
        // line 2
        echo "
<div class=\"lk\" data-user-id=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\">
\t<div class=\"lk__layout\">
\t\t<div class=\"lk-menu\">
\t\t\t";
        // line 6
        $this->loadTemplate("menu_lk", "layouts.lk_messages", 6)->display(array_merge($context, array("rolename" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "name", array()))));
        // line 7
        echo "\t\t</div>
\t\t<div class=\"lk-content\">
\t\t\t<div class=\"lk-content-header\">
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<h1>Сообщения</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t<div class=\"lk-content-header__block\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Поиск\" v-model=\"search\" class=\"q-input\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"lk-qlist\">
\t\t\t\t<div class=\"lk-qlist-item lk-qlist-item--room\" v-for=\"room in rooms\" :key=\"room.id\" @click.stop=\"setSelectedRoom(room)\">
\t\t\t\t\t<div class=\"lk-qlist-item__block\">
\t\t\t\t\t\t<div class=\"lk-qlist-item__title\">
\t\t\t\t\t\t\t{{room.from_name}}
\t\t\t\t\t\t\t<span class=\"pin\" v-if=\"roomUnreadMessages(room).length\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lk-qlist-item__block\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal modal--chat modal--vue\" v-show=\"selectedRoom\" v-cloak>
\t\t\t\t<div class=\"cont\">
\t\t\t\t\t<div class=\"modal__wrapper\">
\t\t\t\t\t\t<div class=\"modal__inner modal__inner--content\">
\t\t\t\t\t\t\t<button class=\"modal__closer\" @click=\"selectedRoom = false\">×</button>
\t\t\t\t\t\t\t<div class=\"modal__content\">
\t\t\t\t\t\t\t\t<div class=\"lk-chat\">
\t\t\t\t\t\t\t\t\t<div class=\"lk-chat__title\">{{selectedRoom.from_name}}</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-chat__messages\">
\t\t\t\t\t\t\t\t\t\t<div 
\t\t\t\t\t\t\t\t\t\t\t class=\"lk-chat-msg\" 
\t\t\t\t\t\t\t\t\t\t\t v-for=\"msg in selectedRoom.items\" 
\t\t\t\t\t\t\t\t\t\t\t :key=\"msg.id\"
\t\t\t\t\t\t\t\t\t\t\t :class=\"{'lk-chat-msg--own': msg.from_id == USER.id}\"
\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-chat-msg__body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-chat-msg__title\" v-if=\"msg.page\">
\t\t\t\t\t\t\t\t\t\t\t\t\tТема: <a :href=\"msg.page.path\" target=\"_blank\">{{msg.page.field_header}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"lk-chat-msg__content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{msg.text}}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pin\" v-if=\"!Number(msg.is_read) && msg.from_id != USER.id\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lk-chat__input\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"q-input\" v-model=\"newMessage\">
\t\t\t\t\t\t\t\t\t\t<button class=\"mbtn mbtn--color-orange\" type=\"button\" @click.stop=\"send\">Отправить</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</div>

";
        // line 74
        $this->loadTemplate("footer_lk", "layouts.lk_messages", 74)->display($context);
        // line 75
        echo "<script src=\"/site/theme/js/lk_messages.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lk_messages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 75,  125 => 74,  56 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header_lk' %}*/
/* */
/* <div class="lk" data-user-id="{$ user.id $}">*/
/* 	<div class="lk__layout">*/
/* 		<div class="lk-menu">*/
/* 			{% include 'menu_lk' with {rolename: user.role.name} %}*/
/* 		</div>*/
/* 		<div class="lk-content">*/
/* 			<div class="lk-content-header">*/
/* 				<div class="lk-content-header__block">*/
/* 					<h1>Сообщения</h1>*/
/* 				</div>*/
/* 				<div class="divider"></div>*/
/* 				<div class="lk-content-header__block">*/
/* 					<input type="text" placeholder="Поиск" v-model="search" class="q-input">*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="lk-qlist">*/
/* 				<div class="lk-qlist-item lk-qlist-item--room" v-for="room in rooms" :key="room.id" @click.stop="setSelectedRoom(room)">*/
/* 					<div class="lk-qlist-item__block">*/
/* 						<div class="lk-qlist-item__title">*/
/* 							{{room.from_name}}*/
/* 							<span class="pin" v-if="roomUnreadMessages(room).length"></span>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="lk-qlist-item__block">*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="modal modal--chat modal--vue" v-show="selectedRoom" v-cloak>*/
/* 				<div class="cont">*/
/* 					<div class="modal__wrapper">*/
/* 						<div class="modal__inner modal__inner--content">*/
/* 							<button class="modal__closer" @click="selectedRoom = false">×</button>*/
/* 							<div class="modal__content">*/
/* 								<div class="lk-chat">*/
/* 									<div class="lk-chat__title">{{selectedRoom.from_name}}</div>*/
/* 									<div class="lk-chat__messages">*/
/* 										<div */
/* 											 class="lk-chat-msg" */
/* 											 v-for="msg in selectedRoom.items" */
/* 											 :key="msg.id"*/
/* 											 :class="{'lk-chat-msg--own': msg.from_id == USER.id}"*/
/* 											 >*/
/* 											<div class="lk-chat-msg__body">*/
/* 												<div class="lk-chat-msg__title" v-if="msg.page">*/
/* 													Тема: <a :href="msg.page.path" target="_blank">{{msg.page.field_header}}</a>*/
/* 												</div>*/
/* 												<div class="lk-chat-msg__content">*/
/* 													{{msg.text}}*/
/* 													<span class="pin" v-if="!Number(msg.is_read) && msg.from_id != USER.id"></span>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="lk-chat__input">*/
/* 										<input type="text" class="q-input" v-model="newMessage">*/
/* 										<button class="mbtn mbtn--color-orange" type="button" @click.stop="send">Отправить</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer_lk' %}*/
/* <script src="/site/theme/js/lk_messages.js" type="module"></script>*/
