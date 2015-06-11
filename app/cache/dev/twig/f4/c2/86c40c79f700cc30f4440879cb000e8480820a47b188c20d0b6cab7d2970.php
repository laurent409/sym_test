<?php

/* BlogBundle:Public:page.html.twig */
class __TwigTemplate_f4c286c40c79f700cc30f4440879cb000e8480820a47b188c20d0b6cab7d2970 extends Twig_Template
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
        echo "<!DOCTYPE html>

<html>
\t<head>

\t\t<meta charset=\"UTF-8\" />
\t\t<title>Welcome on Blog</title>

\t</head>

\t<body>
\t\t
\t\t<header>

\t\t</header>

\t\t<h1>Blog, page: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "</h1>
\t
\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  19 => 1,);
    }
}
