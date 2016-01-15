<?php

/* alterno.html.twig */
class __TwigTemplate_70e77b448fec6dae623f8d99b5db60c2ea6b2aa451dd1b4662fe4961ffb4b724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "alterno.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'url_home' => array($this, 'block_url_home'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1e8e7bb0cbbcaf41de670986fa42951d1b529e4eebe5224545ca75154f14302 = $this->env->getExtension("native_profiler");
        $__internal_d1e8e7bb0cbbcaf41de670986fa42951d1b529e4eebe5224545ca75154f14302->enter($__internal_d1e8e7bb0cbbcaf41de670986fa42951d1b529e4eebe5224545ca75154f14302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alterno.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e8e7bb0cbbcaf41de670986fa42951d1b529e4eebe5224545ca75154f14302->leave($__internal_d1e8e7bb0cbbcaf41de670986fa42951d1b529e4eebe5224545ca75154f14302_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_32c08f7b56588eff7a5226839f3371d11ac9d2402eef60754f1bbcafe1620b3c = $this->env->getExtension("native_profiler");
        $__internal_32c08f7b56588eff7a5226839f3371d11ac9d2402eef60754f1bbcafe1620b3c->enter($__internal_32c08f7b56588eff7a5226839f3371d11ac9d2402eef60754f1bbcafe1620b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div id=\"map-canvas\"></div>
    ";
        // line 4
        $this->loadTemplate("main/videos.html.twig", "alterno.html.twig", 4)->display($context);
        
        $__internal_32c08f7b56588eff7a5226839f3371d11ac9d2402eef60754f1bbcafe1620b3c->leave($__internal_32c08f7b56588eff7a5226839f3371d11ac9d2402eef60754f1bbcafe1620b3c_prof);

    }

    // line 6
    public function block_footer($context, array $blocks = array())
    {
        $__internal_62d745bce1f311cb1c7e5be194bebe19072dbff2ee540b090e13233b23b5b48e = $this->env->getExtension("native_profiler");
        $__internal_62d745bce1f311cb1c7e5be194bebe19072dbff2ee540b090e13233b23b5b48e->enter($__internal_62d745bce1f311cb1c7e5be194bebe19072dbff2ee540b090e13233b23b5b48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_62d745bce1f311cb1c7e5be194bebe19072dbff2ee540b090e13233b23b5b48e->leave($__internal_62d745bce1f311cb1c7e5be194bebe19072dbff2ee540b090e13233b23b5b48e_prof);

    }

    // line 9
    public function block_url_home($context, array $blocks = array())
    {
        $__internal_ec3a29dcfb6f432e73bb092f48f48be70b5b3363c83583877a70a28aa719c25d = $this->env->getExtension("native_profiler");
        $__internal_ec3a29dcfb6f432e73bb092f48f48be70b5b3363c83583877a70a28aa719c25d->enter($__internal_ec3a29dcfb6f432e73bb092f48f48be70b5b3363c83583877a70a28aa719c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_home"));

        // line 10
        echo "    ";
        echo $this->env->getExtension('routing')->getPath("alt");
        echo "
";
        
        $__internal_ec3a29dcfb6f432e73bb092f48f48be70b5b3363c83583877a70a28aa719c25d->leave($__internal_ec3a29dcfb6f432e73bb092f48f48be70b5b3363c83583877a70a28aa719c25d_prof);

    }

    public function getTemplateName()
    {
        return "alterno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  63 => 9,  52 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
