<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* registration/register.html.twig */
class __TwigTemplate_d08cac9b39067bca49d2daa39aa754b06a76fc3ba8ae1db1dc283ca988c54616 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Inscription</title>
     <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\"
    href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\" />
  <!-- Font Awesome -->
  <link rel=\"stylesheet\"
    href=\"../../Adminlite/plugins/fontawesome-free/css/all.min.css\" />
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../Adminlite/dist/css/adminlte.min.css\" />

  <!-- Bootstrap css file -->
   <link rel=\"stylesheet\" src=\"../../css/bootstrap.min.css\"/>
</head>
<body>
    <div class=\"wrapper\">
      <div class=\"SpinnerLoader\" style=\"display: none;\">
       <img src=\"../../img/SpinnerLoader.gif\" class=\"img-responsive\" />
      </div>     
      <div class=\"container-fluid\">
        <section class=\"content\">
        <br><br><br><br>
        <div class=\"row\">
            <div class=\"col-6 offset-3\">

                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 30
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                <h1>Register</h1>

                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'row');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'row', ["label" => "Password"]);
        // line 39
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "agreeTerms", [], "any", false, false, false, 40), 'row');
        echo "

                    <button type=\"submit\" class=\"btn\">Register</button>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <br>
        </section>
      </div>  
    </div>

    
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  104 => 40,  101 => 39,  99 => 37,  95 => 36,  91 => 35,  86 => 32,  77 => 30,  73 => 29,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Inscription</title>
     <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\"
    href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\" />
  <!-- Font Awesome -->
  <link rel=\"stylesheet\"
    href=\"../../Adminlite/plugins/fontawesome-free/css/all.min.css\" />
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../Adminlite/dist/css/adminlte.min.css\" />

  <!-- Bootstrap css file -->
   <link rel=\"stylesheet\" src=\"../../css/bootstrap.min.css\"/>
</head>
<body>
    <div class=\"wrapper\">
      <div class=\"SpinnerLoader\" style=\"display: none;\">
       <img src=\"../../img/SpinnerLoader.gif\" class=\"img-responsive\" />
      </div>     
      <div class=\"container-fluid\">
        <section class=\"content\">
        <br><br><br><br>
        <div class=\"row\">
            <div class=\"col-6 offset-3\">

                {% for flashError in app.flashes('verify_email_error') %}
                    <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
                {% endfor %}

                <h1>Register</h1>

                {{ form_start(registrationForm) }}
                    {{ form_row(registrationForm.username) }}
                    {{ form_row(registrationForm.plainPassword, {
                        label: 'Password'
                    }) }}
                    {{ form_row(registrationForm.agreeTerms) }}

                    <button type=\"submit\" class=\"btn\">Register</button>
                {{ form_end(registrationForm) }}
            </div>
        </div>
        <br>
        </section>
      </div>  
    </div>

    
</body>
</html>

", "registration/register.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\registration\\register.html.twig");
    }
}
