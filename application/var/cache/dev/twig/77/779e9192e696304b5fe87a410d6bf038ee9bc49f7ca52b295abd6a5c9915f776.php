<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f680ee6ea4e66336aef94ee7a0c74cb2d9c22302366ef42a1b567818f3f0fb4b extends Twig_Template
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
        $__internal_54232fe9c1a16371692cfdce2f577fcf43ce01b5a398a56fa1b2dbb99c8c80c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54232fe9c1a16371692cfdce2f577fcf43ce01b5a398a56fa1b2dbb99c8c80c6->enter($__internal_54232fe9c1a16371692cfdce2f577fcf43ce01b5a398a56fa1b2dbb99c8c80c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1e35baa364e4bbfa58566a6fa0728b5975a7e40c52971901b507ccafda6c9250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e35baa364e4bbfa58566a6fa0728b5975a7e40c52971901b507ccafda6c9250->enter($__internal_1e35baa364e4bbfa58566a6fa0728b5975a7e40c52971901b507ccafda6c9250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54232fe9c1a16371692cfdce2f577fcf43ce01b5a398a56fa1b2dbb99c8c80c6->leave($__internal_54232fe9c1a16371692cfdce2f577fcf43ce01b5a398a56fa1b2dbb99c8c80c6_prof);

        
        $__internal_1e35baa364e4bbfa58566a6fa0728b5975a7e40c52971901b507ccafda6c9250->leave($__internal_1e35baa364e4bbfa58566a6fa0728b5975a7e40c52971901b507ccafda6c9250_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_879a9abe063e7b629df470a24c9163773fc6ff2965799398dd39fc9700cccf68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879a9abe063e7b629df470a24c9163773fc6ff2965799398dd39fc9700cccf68->enter($__internal_879a9abe063e7b629df470a24c9163773fc6ff2965799398dd39fc9700cccf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0eed3f8361cec29789fa96425a3a988cff540f6b7f89e7972f4008effd55a158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eed3f8361cec29789fa96425a3a988cff540f6b7f89e7972f4008effd55a158->enter($__internal_0eed3f8361cec29789fa96425a3a988cff540f6b7f89e7972f4008effd55a158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0eed3f8361cec29789fa96425a3a988cff540f6b7f89e7972f4008effd55a158->leave($__internal_0eed3f8361cec29789fa96425a3a988cff540f6b7f89e7972f4008effd55a158_prof);

        
        $__internal_879a9abe063e7b629df470a24c9163773fc6ff2965799398dd39fc9700cccf68->leave($__internal_879a9abe063e7b629df470a24c9163773fc6ff2965799398dd39fc9700cccf68_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a9b556e792d2a3061751bf8c2311db092cda6b8a4010dd92e6b26ebffec4aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9b556e792d2a3061751bf8c2311db092cda6b8a4010dd92e6b26ebffec4aa9->enter($__internal_4a9b556e792d2a3061751bf8c2311db092cda6b8a4010dd92e6b26ebffec4aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9a6b2f8c5d4cf07cbefd18f184dd8ef31e85a364b96e986400bbaadf9664a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a6b2f8c5d4cf07cbefd18f184dd8ef31e85a364b96e986400bbaadf9664a8b->enter($__internal_e9a6b2f8c5d4cf07cbefd18f184dd8ef31e85a364b96e986400bbaadf9664a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9a6b2f8c5d4cf07cbefd18f184dd8ef31e85a364b96e986400bbaadf9664a8b->leave($__internal_e9a6b2f8c5d4cf07cbefd18f184dd8ef31e85a364b96e986400bbaadf9664a8b_prof);

        
        $__internal_4a9b556e792d2a3061751bf8c2311db092cda6b8a4010dd92e6b26ebffec4aa9->leave($__internal_4a9b556e792d2a3061751bf8c2311db092cda6b8a4010dd92e6b26ebffec4aa9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2c8a1980030e2e37cf4770e267d4170ac1c92de92925c6c3096be958b22740d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c8a1980030e2e37cf4770e267d4170ac1c92de92925c6c3096be958b22740d->enter($__internal_b2c8a1980030e2e37cf4770e267d4170ac1c92de92925c6c3096be958b22740d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2fe10e6db5eee5a9b07cb0f94e67daafb17696e3428e6e07fa6b3183dffd8b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe10e6db5eee5a9b07cb0f94e67daafb17696e3428e6e07fa6b3183dffd8b19->enter($__internal_2fe10e6db5eee5a9b07cb0f94e67daafb17696e3428e6e07fa6b3183dffd8b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2fe10e6db5eee5a9b07cb0f94e67daafb17696e3428e6e07fa6b3183dffd8b19->leave($__internal_2fe10e6db5eee5a9b07cb0f94e67daafb17696e3428e6e07fa6b3183dffd8b19_prof);

        
        $__internal_b2c8a1980030e2e37cf4770e267d4170ac1c92de92925c6c3096be958b22740d->leave($__internal_b2c8a1980030e2e37cf4770e267d4170ac1c92de92925c6c3096be958b22740d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/nicolascarrara/Documents/Projetdev/docker/forum-php/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
