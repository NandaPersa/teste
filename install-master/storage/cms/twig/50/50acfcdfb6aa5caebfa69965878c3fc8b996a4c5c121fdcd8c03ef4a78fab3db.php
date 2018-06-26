<?php

/* C:\xampp\htdocs\teste\install-master/themes/demo/partials/site/header.htm */
class __TwigTemplate_d86a50a617ca6360ebbb6ebff062cf15483c0428c4ab407cdce7031d1241e073 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nucleo-pesquisa");
        echo "\">NDIAP</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nucleo-pesquisa");
        echo "\">Inicio</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "sobre")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sobre");
        echo "\">Sobre</a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">Portifólio</a></li>
                <li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "fale-conosco")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fale-conosco");
        echo "\">Fale Conosco</a></li>
                <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "bate-papo-tecnologico")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("bate-papo-tecnologico");
        echo "\">Bate Papo Tecnológico <img  src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bate.png");
        echo "\"></a></li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\teste\\install-master/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  67 => 19,  59 => 18,  51 => 17,  43 => 16,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'nucleo-pesquisa'|page }}\">NDIAP</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'nucleo-pesquisa'|page }}\">Inicio</a></li>
                <li class=\"{% if this.page.id == 'sobre' %}active{% endif %}\"><a href=\"{{ 'sobre'|page }}\">Sobre</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">Portifólio</a></li>
                <li class=\"{% if this.page.id == 'fale-conosco' %}active{% endif %}\"><a href=\"{{ 'fale-conosco'|page }}\">Fale Conosco</a></li>
                <li class=\"{% if this.page.id == 'bate-papo-tecnologico' %}active{% endif %}\"><a href=\"{{ 'bate-papo-tecnologico'|page }}\">Bate Papo Tecnológico <img  src=\"{{ 'assets/images/bate.png'|theme }}\"></a></li>
            </ul>
        </div>
    </div>
</nav>", "C:\\xampp\\htdocs\\teste\\install-master/themes/demo/partials/site/header.htm", "");
    }
}
