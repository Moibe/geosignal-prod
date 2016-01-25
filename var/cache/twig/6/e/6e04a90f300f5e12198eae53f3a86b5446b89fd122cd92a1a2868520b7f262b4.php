<?php

/* main/register.html.twig */
class __TwigTemplate_6e04a90f300f5e12198eae53f3a86b5446b89fd122cd92a1a2868520b7f262b4 extends Twig_Template
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
        echo "<div class=\"hidden\">
    <div id=\"mainContent\" class=\"content text-center\">
        <h1>";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("Localizador de Móviles", array(), "messages");
        echo "</h1>
        <div class=\"fancy1\"> 
            <form class=\"register validate\">
                <input type=\"text\" name=\"telefono\" class=\"required internationalPhone\" minlength=\"8\" maxlength=\"15\" placeholder=\"";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Escribe tu número para localizarte.", array(), "messages");
        echo "\" autocomplete=\"off\" />
                <input type=\"submit\" value=\"";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Iniciar", array(), "messages");
        echo "\" />
            </form>
        </div>
    </div>
</div>

<script type='text/javascript'>
    label_submit = \"";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Buscar", array(), "messages");
        echo "\";
    labels = [\"";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Evaluación de dispositivo y navegador.", array(), "messages");
        echo "\", \"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Revisando el dispositivo.", array(), "messages");
        echo "\", \"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Su dispositivo y navegador cumplen con los requerimientos necesarios.", array(), "messages");
        echo "\"];
    labels2 = [\"";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Leyendo antenas.", array(), "messages");
        echo "\", \"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Leyendo frecuencia.", array(), "messages");
        echo "\", \"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calculando posición.", array(), "messages");
        echo "\", \"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Creando mapa.", array(), "messages");
        echo "\"];
</script>";
    }

    public function getTemplateName()
    {
        return "main/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  47 => 15,  43 => 14,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
