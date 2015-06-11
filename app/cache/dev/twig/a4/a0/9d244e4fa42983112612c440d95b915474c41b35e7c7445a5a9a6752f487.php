<?php

/* HelloBundle:Default:index.html.twig */
class __TwigTemplate_a4a09d244e4fa42983112612c440d95b915474c41b35e7c7445a5a9a6752f487 extends Twig_Template
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
        // line 1
        echo "<html>
\t<body>
\t\t\tHello ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
\t<body>
</html>";
    }

    public function getTemplateName()
    {
        return "HelloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
