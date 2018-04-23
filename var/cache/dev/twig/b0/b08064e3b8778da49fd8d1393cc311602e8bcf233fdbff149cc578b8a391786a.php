<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_277aecd158a405c4a3f8cfb927ff9d0a822ea0881fe014541bac05f817dd10e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277aecd158a405c4a3f8cfb927ff9d0a822ea0881fe014541bac05f817dd10e7->enter($__internal_277aecd158a405c4a3f8cfb927ff9d0a822ea0881fe014541bac05f817dd10e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_add022eceb2d6d0fe4754515c71f06942060a624da12e7e64b9f9ed341353d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add022eceb2d6d0fe4754515c71f06942060a624da12e7e64b9f9ed341353d2d->enter($__internal_add022eceb2d6d0fe4754515c71f06942060a624da12e7e64b9f9ed341353d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_277aecd158a405c4a3f8cfb927ff9d0a822ea0881fe014541bac05f817dd10e7->leave($__internal_277aecd158a405c4a3f8cfb927ff9d0a822ea0881fe014541bac05f817dd10e7_prof);

        
        $__internal_add022eceb2d6d0fe4754515c71f06942060a624da12e7e64b9f9ed341353d2d->leave($__internal_add022eceb2d6d0fe4754515c71f06942060a624da12e7e64b9f9ed341353d2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1b14b01dc022d55bd96009eb1c05aadc582d4473775146707a71419a95928ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b14b01dc022d55bd96009eb1c05aadc582d4473775146707a71419a95928ab->enter($__internal_e1b14b01dc022d55bd96009eb1c05aadc582d4473775146707a71419a95928ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f75636c7c4bc02d871395826910fa25b02de608ceda924420d873dcb5e625e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75636c7c4bc02d871395826910fa25b02de608ceda924420d873dcb5e625e9d->enter($__internal_f75636c7c4bc02d871395826910fa25b02de608ceda924420d873dcb5e625e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f75636c7c4bc02d871395826910fa25b02de608ceda924420d873dcb5e625e9d->leave($__internal_f75636c7c4bc02d871395826910fa25b02de608ceda924420d873dcb5e625e9d_prof);

        
        $__internal_e1b14b01dc022d55bd96009eb1c05aadc582d4473775146707a71419a95928ab->leave($__internal_e1b14b01dc022d55bd96009eb1c05aadc582d4473775146707a71419a95928ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_158169d8a781f2f569d333a10b9fa1eb6bbf9c70ce9f14aaea400b593d9ab57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158169d8a781f2f569d333a10b9fa1eb6bbf9c70ce9f14aaea400b593d9ab57e->enter($__internal_158169d8a781f2f569d333a10b9fa1eb6bbf9c70ce9f14aaea400b593d9ab57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_409d4711479d4ed15f5a3ee3cec59477b9c1b76389a9a33d8dbdb62121dc2b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409d4711479d4ed15f5a3ee3cec59477b9c1b76389a9a33d8dbdb62121dc2b39->enter($__internal_409d4711479d4ed15f5a3ee3cec59477b9c1b76389a9a33d8dbdb62121dc2b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_409d4711479d4ed15f5a3ee3cec59477b9c1b76389a9a33d8dbdb62121dc2b39->leave($__internal_409d4711479d4ed15f5a3ee3cec59477b9c1b76389a9a33d8dbdb62121dc2b39_prof);

        
        $__internal_158169d8a781f2f569d333a10b9fa1eb6bbf9c70ce9f14aaea400b593d9ab57e->leave($__internal_158169d8a781f2f569d333a10b9fa1eb6bbf9c70ce9f14aaea400b593d9ab57e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e32dabb4ae94d034accb45a95189ae869a8016bfb93e8f4c527fa2890c0f6405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32dabb4ae94d034accb45a95189ae869a8016bfb93e8f4c527fa2890c0f6405->enter($__internal_e32dabb4ae94d034accb45a95189ae869a8016bfb93e8f4c527fa2890c0f6405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c7785195215a7cbe2ff11144033d3d5055c2a60033c5e94c45a60f1afca1abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7785195215a7cbe2ff11144033d3d5055c2a60033c5e94c45a60f1afca1abf->enter($__internal_5c7785195215a7cbe2ff11144033d3d5055c2a60033c5e94c45a60f1afca1abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c7785195215a7cbe2ff11144033d3d5055c2a60033c5e94c45a60f1afca1abf->leave($__internal_5c7785195215a7cbe2ff11144033d3d5055c2a60033c5e94c45a60f1afca1abf_prof);

        
        $__internal_e32dabb4ae94d034accb45a95189ae869a8016bfb93e8f4c527fa2890c0f6405->leave($__internal_e32dabb4ae94d034accb45a95189ae869a8016bfb93e8f4c527fa2890c0f6405_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "G:\\wamp\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
