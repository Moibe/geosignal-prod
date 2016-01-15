<?php

/* main/pay_pal.html.twig */
class __TwigTemplate_34c1c72890ab9faa0839015b499d7f94c37a8ebb3d254a93cf307fa553f4a12a extends Twig_Template
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
        $__internal_77e2aa6e18b7b571ce0ee896598398d80c9e586b55a978e6a374f451a02f2ae7 = $this->env->getExtension("native_profiler");
        $__internal_77e2aa6e18b7b571ce0ee896598398d80c9e586b55a978e6a374f451a02f2ae7->enter($__internal_77e2aa6e18b7b571ce0ee896598398d80c9e586b55a978e6a374f451a02f2ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/pay_pal.html.twig"));

        // line 1
        echo "<div class=\"hidden\">
    <div id=\"paypalContent\">
        <div id='paypalContentInner'>
            <h1>";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tu ubicación.", array(), "messages");
        echo "</h1>
            <p>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ésta es tu posición, ahora ingresa el número que deseas buscar.", array(), "messages");
        echo "</p>

            <form class='register validate' >
                <input type=\"text\" class=\"required internationalPhone\" minlength=\"8\" maxlength=\"13\" name=\"telefono\" />
                <input type=\"submit\" value=\"";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Buscar", array(), "messages");
        echo "\" />
            </form>
        </div>
        <form class='hidden paypalForm' action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
           <p>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("El servicio tiene un costo que se puede pagar a través de Paypal.", array(), "messages");
        echo "</p>}
            <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
            <input type=\"hidden\" name=\"hosted_button_id\" value=\"";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("CHTLV9JJKV75S", array(), "messages");
        echo "\">
            <input type=\"submit\" class=\"btn-locate\"  value=\"";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Obtener Ubicación", array(), "messages");
        echo "\">
            <img alt=\"";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Obtener Ubicación", array(), "messages");
        echo "\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
            <p>";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Da click en el botón para obtener más información.", array(), "messages");
        echo "</p>
            ";
        // line 20
        echo "        </form>
    </div>
</div>

<script type='text/javascript'>
    labels3 = labels2.slice();
    labels3.push(\"";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dispositivo localizado.", array(), "messages");
        echo "\");
</script>";
        
        $__internal_77e2aa6e18b7b571ce0ee896598398d80c9e586b55a978e6a374f451a02f2ae7->leave($__internal_77e2aa6e18b7b571ce0ee896598398d80c9e586b55a978e6a374f451a02f2ae7_prof);

    }

    public function getTemplateName()
    {
        return "main/pay_pal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  66 => 20,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  45 => 13,  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
