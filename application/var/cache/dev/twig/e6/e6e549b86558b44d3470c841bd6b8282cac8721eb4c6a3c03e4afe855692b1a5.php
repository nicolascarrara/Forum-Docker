<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7cbe89159141b689613ae473f588cd986ce4a9e8530d58a0bdc81dc9fc7896d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d96f73579476f6bf1d71d33c1c8b86579cc2df7dffb60e8cdbbf829782d6a6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96f73579476f6bf1d71d33c1c8b86579cc2df7dffb60e8cdbbf829782d6a6b2->enter($__internal_d96f73579476f6bf1d71d33c1c8b86579cc2df7dffb60e8cdbbf829782d6a6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_19b20ff7d0972645ddb90ab5dea50175b83a943d109e6ecce6e979298ff9e4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b20ff7d0972645ddb90ab5dea50175b83a943d109e6ecce6e979298ff9e4c2->enter($__internal_19b20ff7d0972645ddb90ab5dea50175b83a943d109e6ecce6e979298ff9e4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96f73579476f6bf1d71d33c1c8b86579cc2df7dffb60e8cdbbf829782d6a6b2->leave($__internal_d96f73579476f6bf1d71d33c1c8b86579cc2df7dffb60e8cdbbf829782d6a6b2_prof);

        
        $__internal_19b20ff7d0972645ddb90ab5dea50175b83a943d109e6ecce6e979298ff9e4c2->leave($__internal_19b20ff7d0972645ddb90ab5dea50175b83a943d109e6ecce6e979298ff9e4c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e782f4eceb0ebe94dc58a2b022cb7247238ec4617c4818afb76fbe90c985e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e782f4eceb0ebe94dc58a2b022cb7247238ec4617c4818afb76fbe90c985e88->enter($__internal_1e782f4eceb0ebe94dc58a2b022cb7247238ec4617c4818afb76fbe90c985e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e116d85cd78d581b316ba23e45d03f2842b44a93d9874334973b61742e49bad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e116d85cd78d581b316ba23e45d03f2842b44a93d9874334973b61742e49bad9->enter($__internal_e116d85cd78d581b316ba23e45d03f2842b44a93d9874334973b61742e49bad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e116d85cd78d581b316ba23e45d03f2842b44a93d9874334973b61742e49bad9->leave($__internal_e116d85cd78d581b316ba23e45d03f2842b44a93d9874334973b61742e49bad9_prof);

        
        $__internal_1e782f4eceb0ebe94dc58a2b022cb7247238ec4617c4818afb76fbe90c985e88->leave($__internal_1e782f4eceb0ebe94dc58a2b022cb7247238ec4617c4818afb76fbe90c985e88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/nicolascarrara/Documents/Projetdev/docker/forum-php/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
