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

/* mouvement_stock/sorties/index.html.twig */
class __TwigTemplate_d9fb6aa2f151af8921b23094b3119d76cbd3a2e11f3050c770e13e3e55d2ba24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_stock/sorties/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_stock/sorties/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_stock/sorties/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mouvement de stock";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<hr>
<br>
    <div class=\"row\">
        <div class=\"col-11 \">
            <h4 class=\"text-centered\">
                 Sorties efféctuées
            </h4>
            <div class=\"col-12\">
                <div class=\"card card-primary card-outline\">
                    <div class=\"card-tools py-2 bg-light \">                        
                        <button class=\"btn btn-tool float-right\" data-card-widget=\"collapse\" type=\"button\">
                            <i class=\"fas fa-minus \">
                            </i>
                        </button>
                        <a class=\"btn btn-success text-decoration-none float-right\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_removals_new");
        echo "\">
                            <i class=\"fas fa-plus mx-2\">
                            </i>
                            Nouvelle Sortie
                        </a>
                    </div>
                    <!-- /.card-tools -->
                    <div class=\"card-body p-0\">
                        <div class=\" table-responsive mailbox-messages\" style=\"max-height: 700px;\">
                            <table class=\"table table-sm table-hover table-bordered table-striped \" id=\"table-removal\">
                                <thead>
                                    <tr>
                                        <th  scope=\"col\" >
                                            #
                                        </th>
                                        <th scope=\"col\">
                                            medicament
                                        </th>
                                        <th scope=\"col\">
                                            quantité
                                        </th>
                                        <th scope=\"col\">
                                            service
                                        </th>
                                        <th scope=\"col\">
                                            demandeur
                                        </th>
                                        <th scope=\"col\" style=\"padding: 4px;\">
                                            date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["removal_list"]) || array_key_exists("removal_list", $context) ? $context["removal_list"] : (function () { throw new RuntimeError('Variable "removal_list" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 54
            echo "                                    <tr>
                                        <td>
                                            <div class=\"icheck-primary\">
                                                <input type=\"checkbox\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
                                                    <label for=\"check1\">
                                                    </label>
                                                </input>
                                            </div>
                                        </td>
                                        <td>
                                            ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list"], "medicament", [], "any", false, false, false, 64), "dci", [], "any", false, false, false, 64), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "quantite", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "service", [], "any", false, false, false, 70), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "demandeur", [], "any", false, false, false, 73), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "dateSortie", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "dateSortie", [], "any", false, false, false, 76), "H:i"), "html", null, true);
            echo "
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                    ";
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["removal_list"]) || array_key_exists("removal_list", $context) ? $context["removal_list"] : (function () { throw new RuntimeError('Variable "removal_list" does not exist.', 80, $this->source); })())), 0))) {
            // line 81
            echo "                                        <h2 class=\"text-center\">Aucune sortie effectues</h2>
                                    ";
        }
        // line 83
        echo "
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer p-0\">
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mouvement_stock/sorties/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 83,  198 => 81,  195 => 80,  183 => 76,  177 => 73,  171 => 70,  165 => 67,  159 => 64,  149 => 57,  144 => 54,  140 => 53,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mouvement de stock{% endblock %}

{% block body %}
<hr>
<br>
    <div class=\"row\">
        <div class=\"col-11 \">
            <h4 class=\"text-centered\">
                 Sorties efféctuées
            </h4>
            <div class=\"col-12\">
                <div class=\"card card-primary card-outline\">
                    <div class=\"card-tools py-2 bg-light \">                        
                        <button class=\"btn btn-tool float-right\" data-card-widget=\"collapse\" type=\"button\">
                            <i class=\"fas fa-minus \">
                            </i>
                        </button>
                        <a class=\"btn btn-success text-decoration-none float-right\" href=\"{{ path('stock_removals_new')}}\">
                            <i class=\"fas fa-plus mx-2\">
                            </i>
                            Nouvelle Sortie
                        </a>
                    </div>
                    <!-- /.card-tools -->
                    <div class=\"card-body p-0\">
                        <div class=\" table-responsive mailbox-messages\" style=\"max-height: 700px;\">
                            <table class=\"table table-sm table-hover table-bordered table-striped \" id=\"table-removal\">
                                <thead>
                                    <tr>
                                        <th  scope=\"col\" >
                                            #
                                        </th>
                                        <th scope=\"col\">
                                            medicament
                                        </th>
                                        <th scope=\"col\">
                                            quantité
                                        </th>
                                        <th scope=\"col\">
                                            service
                                        </th>
                                        <th scope=\"col\">
                                            demandeur
                                        </th>
                                        <th scope=\"col\" style=\"padding: 4px;\">
                                            date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for list in removal_list %}
                                    <tr>
                                        <td>
                                            <div class=\"icheck-primary\">
                                                <input type=\"checkbox\" value=\"{{list.id}}\">
                                                    <label for=\"check1\">
                                                    </label>
                                                </input>
                                            </div>
                                        </td>
                                        <td>
                                            {{list.medicament.dci}}
                                        </td>
                                        <td>
                                            {{list.quantite}}
                                        </td>
                                        <td>
                                            {{list.service}}
                                        </td>
                                        <td>
                                            {{list.demandeur}}
                                        </td>
                                        <td>
                                            {{list.dateSortie | date('d/m/Y')}} à {{list.dateSortie | date('H:i')}}
                                        </td>
                                    </tr>
                                    {% endfor %}
                                    {% if removal_list|length == 0 %}
                                        <h2 class=\"text-center\">Aucune sortie effectues</h2>
                                    {% endif %}

                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer p-0\">
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
{% endblock %}", "mouvement_stock/sorties/index.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\mouvement_stock\\sorties\\index.html.twig");
    }
}
