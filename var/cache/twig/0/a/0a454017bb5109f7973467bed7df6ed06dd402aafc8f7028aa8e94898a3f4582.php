<?php

/* main/register.html.twig */
class __TwigTemplate_0a454017bb5109f7973467bed7df6ed06dd402aafc8f7028aa8e94898a3f4582 extends Twig_Template
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
        $__internal_e53aee07551a3c02f02362016bb4d98e8502ac5e030775c8d391c72d08ab5b37 = $this->env->getExtension("native_profiler");
        $__internal_e53aee07551a3c02f02362016bb4d98e8502ac5e030775c8d391c72d08ab5b37->enter($__internal_e53aee07551a3c02f02362016bb4d98e8502ac5e030775c8d391c72d08ab5b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/register.html.twig"));

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
        
        $__internal_e53aee07551a3c02f02362016bb4d98e8502ac5e030775c8d391c72d08ab5b37->leave($__internal_e53aee07551a3c02f02362016bb4d98e8502ac5e030775c8d391c72d08ab5b37_prof);

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
        return array (  58 => 16,  50 => 15,  46 => 14,  36 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }
}
