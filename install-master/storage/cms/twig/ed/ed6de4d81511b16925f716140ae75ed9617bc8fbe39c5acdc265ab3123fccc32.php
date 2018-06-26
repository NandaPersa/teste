<?php

/* C:\xampp\htdocs\teste\install-master/themes/demo/pages/nucleo-pesquisa.htm */
class __TwigTemplate_668437cd74d90848443eff40d0f8f117033bfdf59a2f634a807f418fdc0e0a90 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("carousel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "

<div class=\"container\">
\t<h1> Núcleo de Pesquisa </h1>
\t<div class=\"row mb-5 mt-5\" >
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/web.png");
        echo "\">
\t\t\t\t\t\t\t<center><h3>E2C</h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/App.png");
        echo "\">
\t\t\t\t\t\t\t<center><h3>RemotLab</h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Erp.png");
        echo "\">
\t\t\t\t\t\t\t<center><h3>Pesquisa</h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Designer.png");
        echo "\">
\t\t\t\t\t\t\t<center><h3>Robótica</h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\teste\\install-master/themes/demo/pages/nucleo-pesquisa.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  54 => 21,  45 => 15,  36 => 9,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'carousel' %}


<div class=\"container\">
\t<h1> Núcleo de Pesquisa </h1>
\t<div class=\"row mb-5 mt-5\" >
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"{{ 'assets/images/web.png'|theme }}\">
\t\t\t\t\t\t\t<center><h3>E2C</h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"{{ 'assets/images/App.png'|theme }}\">
\t\t\t\t\t\t\t<center><h3>RemotLab</h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"{{ 'assets/images/Erp.png'|theme }}\">
\t\t\t\t\t\t\t<center><h3>Pesquisa</h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"{{ 'assets/images/Designer.png'|theme }}\">
\t\t\t\t\t\t\t<center><h3>Robótica</h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t
</div>", "C:\\xampp\\htdocs\\teste\\install-master/themes/demo/pages/nucleo-pesquisa.htm", "");
    }
}
