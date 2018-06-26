<?php

/* C:\xampp\htdocs\teste\install-master/themes/demo/pages/bate-papo-tecnologico.htm */
class __TwigTemplate_a9ae72f4a354a0fa9ac469e400cd896a5ad2d638d7536a5981fdf2e6ca8445a1 extends Twig_Template
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
    <center><h1><img class=\"rounded-circle categoria-img\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/maior.png");
        echo "\"> Bate Papo Tecnológico </h1></center>
   
    <hr>
    
    <div class=\"row mb-5 mt-5\" >
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/missao.png");
        echo "\">
\t\t\t\t\t\t\t<center><h3><a href=\"#missao\"> Missão </a></h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/visao.png");
        echo "\">
\t\t\t\t\t\t\t<center><h3><a href=\"#visao\">Visão</a></h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/valores.png");
        echo "\">
\t\t\t\t\t\t\t<center><h3><a href=\"#Valores\">Valores</a></h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr> 
\t\t\t\t
\t\t\t<div id=\"missao\">
\t\t\t    <h1> Missão</h1>
\t\t\t    <p> A missão de uma empresa é o seu propósito fundamental, sua razão de ser, sua finalidade e o porquê de sua criação. Ela tem relação direta com a identidade da organização e, por esse motivo, geralmente não sofre alterações com o passar dos anos.

                    A missão deve ser formulada na forma de uma frase clara e concisa, que responda a questões como:

                    Para que a empresa existe?
                    O que a empresa faz?
                    Para quem a empresa trabalha?
                    Exemplo de missão: Natura
                    Nossa razão de ser é criar e comercializar produtos e serviços que promovam o bem-estar/estar bem.</p>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t\t<div id=\"visao\">
\t\t\t    <h1> Visão </h1>
\t\t\t    <p> A missão de uma empresa é o seu propósito fundamental, sua razão de ser, sua finalidade e o porquê de sua criação. Ela tem relação direta com a identidade da organização e, por esse motivo, geralmente não sofre alterações com o passar dos anos.

                    A missão deve ser formulada na forma de uma frase clara e concisa, que responda a questões como:

                    Para que a empresa existe?
                    O que a empresa faz?
                    Para quem a empresa trabalha?
                    Exemplo de missão: Natura
                    Nossa razão de ser é criar e comercializar produtos e serviços que promovam o bem-estar/estar bem.</p>
\t\t\t
\t\t\t</div>
\t\t\t\t<div id=\"Valores\">
\t\t\t    <h1> Valores</h1>
\t\t\t    <p> A missão de uma empresa é o seu propósito fundamental, sua razão de ser, sua finalidade e o porquê de sua criação. Ela tem relação direta com a identidade da organização e, por esse motivo, geralmente não sofre alterações com o passar dos anos.

                    A missão deve ser formulada na forma de uma frase clara e concisa, que responda a questões como:

                    Para que a empresa existe?
                    O que a empresa faz?
                    Para quem a empresa trabalha?
                    Exemplo de missão: Natura
                    Nossa razão de ser é criar e comercializar produtos e serviços que promovam o bem-estar/estar bem.</p>
\t\t\t
\t\t\t</div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\teste\\install-master/themes/demo/pages/bate-papo-tecnologico.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 24,  51 => 18,  42 => 12,  31 => 4,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'carousel' %}

<div class=\"container\"> 
    <center><h1><img class=\"rounded-circle categoria-img\" src=\"{{ 'assets/images/maior.png'|theme }}\"> Bate Papo Tecnológico </h1></center>
   
    <hr>
    
    <div class=\"row mb-5 mt-5\" >
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"{{ 'assets/images/missao.png'|theme }}\">
\t\t\t\t\t\t\t<center><h3><a href=\"#missao\"> Missão </a></h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"{{ 'assets/images/visao.png'|theme }}\">
\t\t\t\t\t\t\t<center><h3><a href=\"#visao\">Visão</a></h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"categoria\">
\t\t\t\t\t\t\t<img class=\"rounded-circle categoria-img\" src=\"{{ 'assets/images/valores.png'|theme }}\">
\t\t\t\t\t\t\t<center><h3><a href=\"#Valores\">Valores</a></h3></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr> 
\t\t\t\t
\t\t\t<div id=\"missao\">
\t\t\t    <h1> Missão</h1>
\t\t\t    <p> A missão de uma empresa é o seu propósito fundamental, sua razão de ser, sua finalidade e o porquê de sua criação. Ela tem relação direta com a identidade da organização e, por esse motivo, geralmente não sofre alterações com o passar dos anos.

                    A missão deve ser formulada na forma de uma frase clara e concisa, que responda a questões como:

                    Para que a empresa existe?
                    O que a empresa faz?
                    Para quem a empresa trabalha?
                    Exemplo de missão: Natura
                    Nossa razão de ser é criar e comercializar produtos e serviços que promovam o bem-estar/estar bem.</p>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t\t<div id=\"visao\">
\t\t\t    <h1> Visão </h1>
\t\t\t    <p> A missão de uma empresa é o seu propósito fundamental, sua razão de ser, sua finalidade e o porquê de sua criação. Ela tem relação direta com a identidade da organização e, por esse motivo, geralmente não sofre alterações com o passar dos anos.

                    A missão deve ser formulada na forma de uma frase clara e concisa, que responda a questões como:

                    Para que a empresa existe?
                    O que a empresa faz?
                    Para quem a empresa trabalha?
                    Exemplo de missão: Natura
                    Nossa razão de ser é criar e comercializar produtos e serviços que promovam o bem-estar/estar bem.</p>
\t\t\t
\t\t\t</div>
\t\t\t\t<div id=\"Valores\">
\t\t\t    <h1> Valores</h1>
\t\t\t    <p> A missão de uma empresa é o seu propósito fundamental, sua razão de ser, sua finalidade e o porquê de sua criação. Ela tem relação direta com a identidade da organização e, por esse motivo, geralmente não sofre alterações com o passar dos anos.

                    A missão deve ser formulada na forma de uma frase clara e concisa, que responda a questões como:

                    Para que a empresa existe?
                    O que a empresa faz?
                    Para quem a empresa trabalha?
                    Exemplo de missão: Natura
                    Nossa razão de ser é criar e comercializar produtos e serviços que promovam o bem-estar/estar bem.</p>
\t\t\t
\t\t\t</div>
    
</div>", "C:\\xampp\\htdocs\\teste\\install-master/themes/demo/pages/bate-papo-tecnologico.htm", "");
    }
}
