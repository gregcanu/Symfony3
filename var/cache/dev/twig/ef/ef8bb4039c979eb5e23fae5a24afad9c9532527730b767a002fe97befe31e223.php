<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_0d3c3c330d5b3f1c98694b8737b1ae142600fa832521aa6953265dc33937df0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dbade40f8802f44a49fd04df833e96e279b2591ba1468f525b6523de999b092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbade40f8802f44a49fd04df833e96e279b2591ba1468f525b6523de999b092->enter($__internal_9dbade40f8802f44a49fd04df833e96e279b2591ba1468f525b6523de999b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8d296d58acfb7889684a786875a1634235aa19d7ce2ca999c134b35ba37c3db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d296d58acfb7889684a786875a1634235aa19d7ce2ca999c134b35ba37c3db6->enter($__internal_8d296d58acfb7889684a786875a1634235aa19d7ce2ca999c134b35ba37c3db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dbade40f8802f44a49fd04df833e96e279b2591ba1468f525b6523de999b092->leave($__internal_9dbade40f8802f44a49fd04df833e96e279b2591ba1468f525b6523de999b092_prof);

        
        $__internal_8d296d58acfb7889684a786875a1634235aa19d7ce2ca999c134b35ba37c3db6->leave($__internal_8d296d58acfb7889684a786875a1634235aa19d7ce2ca999c134b35ba37c3db6_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e543608da354e945d1c79b026d1f31441fb61320b01f412f9cc7ab629a8c55e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e543608da354e945d1c79b026d1f31441fb61320b01f412f9cc7ab629a8c55e9->enter($__internal_e543608da354e945d1c79b026d1f31441fb61320b01f412f9cc7ab629a8c55e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_272be71a196d921c559c6bb4462831e191dc95ada5df3bd534d8c89663567100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272be71a196d921c559c6bb4462831e191dc95ada5df3bd534d8c89663567100->enter($__internal_272be71a196d921c559c6bb4462831e191dc95ada5df3bd534d8c89663567100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_272be71a196d921c559c6bb4462831e191dc95ada5df3bd534d8c89663567100->leave($__internal_272be71a196d921c559c6bb4462831e191dc95ada5df3bd534d8c89663567100_prof);

        
        $__internal_e543608da354e945d1c79b026d1f31441fb61320b01f412f9cc7ab629a8c55e9->leave($__internal_e543608da354e945d1c79b026d1f31441fb61320b01f412f9cc7ab629a8c55e9_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e09d38325a6b9d4e7eb14bccdd1f55200a13706b76e9e9858b051e784ffff7d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09d38325a6b9d4e7eb14bccdd1f55200a13706b76e9e9858b051e784ffff7d2->enter($__internal_e09d38325a6b9d4e7eb14bccdd1f55200a13706b76e9e9858b051e784ffff7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e594b29e84d40dbb0c5df5f3b42cc6ae1163dfac14fc1ff930cc9a5e2eb1cd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e594b29e84d40dbb0c5df5f3b42cc6ae1163dfac14fc1ff930cc9a5e2eb1cd14->enter($__internal_e594b29e84d40dbb0c5df5f3b42cc6ae1163dfac14fc1ff930cc9a5e2eb1cd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e594b29e84d40dbb0c5df5f3b42cc6ae1163dfac14fc1ff930cc9a5e2eb1cd14->leave($__internal_e594b29e84d40dbb0c5df5f3b42cc6ae1163dfac14fc1ff930cc9a5e2eb1cd14_prof);

        
        $__internal_e09d38325a6b9d4e7eb14bccdd1f55200a13706b76e9e9858b051e784ffff7d2->leave($__internal_e09d38325a6b9d4e7eb14bccdd1f55200a13706b76e9e9858b051e784ffff7d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "G:\\wamp\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
