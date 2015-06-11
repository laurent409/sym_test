<?php

/* BlogBundle:Public:article.html.twig */
class __TwigTemplate_c27eb6bd5fbe53f418a003e6621814c1c1c45ef026ee3c34e3073704b6662f8f extends Twig_Template
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
\t\t<title>Welcome on our Blog</title>

\t</head>

\t<body>
\t\t
\t\t<header>

\t\t</header>
\t\t<h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
        echo "</h1>

\t\t<p>Titre de l'article : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
        echo " </p><br>
\t
\t\t<p>Contenu : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
        echo "</p><br>

\t\t<p>Ecrit par : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
        echo "</p><br>

\t\t<p>Publié le ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "Y-m-d"), "html", null, true);
        echo "</p>
\t\t
\t\t<p>Token : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "token"), "html", null, true);
        echo "</p>

\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 26,  56 => 24,  51 => 22,  46 => 20,  41 => 18,  36 => 16,  19 => 1,);
    }
}
