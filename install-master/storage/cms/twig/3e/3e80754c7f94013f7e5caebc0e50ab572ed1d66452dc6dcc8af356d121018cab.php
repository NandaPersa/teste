<?php

/* C:\xampp\htdocs\teste\install-master/themes/demo/pages/primeira.htm */
class __TwigTemplate_d4ffacf0bc06e0f88a79ea023b5e38fc7d038fd8e319f3be44ea5a4e481c2680 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Pagina Inicial</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\teste\\install-master/themes/demo/pages/primeira.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Pagina Inicial</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>", "C:\\xampp\\htdocs\\teste\\install-master/themes/demo/pages/primeira.htm", "");
    }
}
