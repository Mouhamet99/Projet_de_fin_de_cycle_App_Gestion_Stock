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

/* security/login.html.twig */
class __TwigTemplate_7cbe5746e40efeea5cd5cfe9814c4783ff1c75fefa5bf9415942f363edccc51c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion</title>
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
   <link rel=\"stylesheet\" href=\"../../css/style.css\"/>
   <!-- Jquery js file -->
  <script src=\"../../js/jquery.3.4.1.js\"></script>
<!-- My costum js file -->
<script src=\"../../js/mynewjs.js\"></script>

</head>
<body class=\"login\">
    <div class=\"wrapper\">
      <div class=\"SpinnerLoader\" >
       <img src=\"../../img/SpinnerLoader.gif\" class=\"img-responsive\" />
      </div>     
      <div class=\"container-fluid\">
            <br><br>
            <br><br>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6  col-sm-8 col-xs-8 pt-5  offset-lg-2 offset-md-3 offset-sm-2 offset-xs-2\">
                    <form method=\"post\" id=\"login_form\">
                        ";
        // line 35
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "                            ";
            // line 37
            echo "                            <div class=\"alert alert-danger\">Nom d'utilisateur ou Mot de passe invalide</div>
                        ";
        }
        // line 39
        echo "
                        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) {
            // line 41
            echo "                            <div class=\"mb-3\">
                                You are logged in as ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                            </div>
                        ";
        }
        // line 45
        echo "
                        <h1 class=\"h3 mb-3 font-weight-normal text-center\">Connectez-vous</h1>
                        <label for=\"inputUsername\">Nom d'utilisateur</label>
                        <input type=\"text\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control border-primary\" required autofocus>
                        <label for=\"inputPassword\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control border-primary\" required>

                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                        >

                        ";
        // line 66
        echo "
                        <br><hr>
                        <a href=\"\" class=\"float-right\">mot de passe oublié?</a>
                        <button class=\"btn btn-lg btn-primary\" type=\"submit\" id=\"btn_auth\">
                            Se connecter
                        </button>
                    </form>
                </div>
            </div>
            <br>
    </div>

    
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 66,  116 => 53,  108 => 48,  103 => 45,  95 => 42,  92 => 41,  90 => 40,  87 => 39,  83 => 37,  81 => 36,  79 => 35,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion</title>
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
   <link rel=\"stylesheet\" href=\"../../css/style.css\"/>
   <!-- Jquery js file -->
  <script src=\"../../js/jquery.3.4.1.js\"></script>
<!-- My costum js file -->
<script src=\"../../js/mynewjs.js\"></script>

</head>
<body class=\"login\">
    <div class=\"wrapper\">
      <div class=\"SpinnerLoader\" >
       <img src=\"../../img/SpinnerLoader.gif\" class=\"img-responsive\" />
      </div>     
      <div class=\"container-fluid\">
            <br><br>
            <br><br>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6  col-sm-8 col-xs-8 pt-5  offset-lg-2 offset-md-3 offset-sm-2 offset-xs-2\">
                    <form method=\"post\" id=\"login_form\">
                        {% if error %}
                            {# <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div> #}
                            <div class=\"alert alert-danger\">Nom d'utilisateur ou Mot de passe invalide</div>
                        {% endif %}

                        {% if app.user %}
                            <div class=\"mb-3\">
                                You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                            </div>
                        {% endif %}

                        <h1 class=\"h3 mb-3 font-weight-normal text-center\">Connectez-vous</h1>
                        <label for=\"inputUsername\">Nom d'utilisateur</label>
                        <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control border-primary\" required autofocus>
                        <label for=\"inputPassword\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control border-primary\" required>

                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\"
                        >

                        {#
                            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                            See https://symfony.com/doc/current/security/remember_me.html

                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                </label>
                            </div>
                        #}

                        <br><hr>
                        <a href=\"\" class=\"float-right\">mot de passe oublié?</a>
                        <button class=\"btn btn-lg btn-primary\" type=\"submit\" id=\"btn_auth\">
                            Se connecter
                        </button>
                    </form>
                </div>
            </div>
            <br>
    </div>

    
</body>
</html>

", "security/login.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\security\\login.html.twig");
    }
}
