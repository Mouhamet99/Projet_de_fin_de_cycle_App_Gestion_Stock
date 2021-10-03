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

/* base.html.twig */
class __TwigTemplate_0606f639c65bb34b3e948905f3a3917c9f15055db37c88c0ca09dfbc3f6c9360 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_css' => [$this, 'block_head_css'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  ";
        // line 5
        $this->displayBlock('head_css', $context, $blocks);
        // line 32
        echo "</head>
<body class=\"hold-transition sidebar-mini layout-fixed\" data-panel-auto-height-mode=\"height\">
  <div class=\"SpinnerLoader\">
    <img src=\"../../img/SpinnerLoader.gif\" class=\"img-responsive\" alt=\"imgage de chargement\"/>
  </div>
  <!-- Image gif chargement -->
  <div class=\"wrapper\">
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
      <!-- Left navbar links -->
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
            <i class=\"fas fa-bars\"></i>
          </a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class=\"navbar-nav ml-auto\">
        <!-- Messages Dropdown Menu -->
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-comments\"></i>
           <!--  <span class=\"badge badge-danger navbar-badge\">3</span>
          </a> -->
          <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"../../img/testimonials/t1.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\" />
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    Brad Diesel
                    <span class=\"float-right text-sm text-danger\">
                      <i class=\"fas fa-star\"></i>
                    </span>
                  </h3>
                  <p class=\"text-sm\">
                    Call me whenever you can...
                  </p>
                  <p class=\"text-sm text-muted\">
                    <i class=\"far fa-clock mr-1\"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"../../img/testimonials/t1.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\" />
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    John Pierce
                    <span class=\"float-right text-sm text-muted\">
                      <i class=\"fas fa-star\"></i>
                    </span>
                  </h3>
                  <p class=\"text-sm\">
                    I got your message bro
                  </p>
                  <p class=\"text-sm text-muted\">
                    <i class=\"far fa-clock mr-1\"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"../../img/testimonials/t1.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\" />
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    Nora Silvester
                    <span class=\"float-right text-sm text-warning\">
                      <i class=\"fas fa-star\"></i>
                    </span>
                  </h3>
                  <p class=\"text-sm\">
                    The subject goes here
                  </p>
                  <p class=\"text-sm text-muted\">
                    <i class=\"far fa-clock mr-1\"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">
              See All Messages
            </a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-bell\"></i>
           <!--  <span class=\"badge badge-warning navbar-badge\">15</span> -->
          </a>
          <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <span class=\"dropdown-item dropdown-header\">
              15 Notifications
            </span>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
              <span class=\"float-right text-muted text-sm\">3 mins</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-users mr-2\"></i> 8 friend requests
              <span class=\"float-right text-muted text-sm\">12 hours</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-file mr-2\"></i> 3 new reports
              <span class=\"float-right text-muted text-sm\">2 days</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">
              See All Notifications
            </a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"fas fa-expand-arrows-alt\"></i>
          </a>
        </li>

      </ul>
      ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "flashes", [], "any", false, false, false, 167));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 168
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 169
                echo "      <div class=\"alert alert-warning flash-warning\" style=\"position: absolute;right: 10px;top: 7px;\">
        ";
                // line 170
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "    </nav>
    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
      <!-- Brand Logo -->
      <a href=\"\" class=\"brand-link\">
        <img src=\"../../img/logocym.png\" alt=\"Yaye MArie Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\" />
        <span class=\"brand-text font-weight-light\">Clinique YAYE MARIE</span>
      </a>

      <!-- Sidebar -->
      <div class=\"sidebar\">
        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel mt-3 pb-2 mb-2 d-flex\">
          <div class=\"image\">
            ";
        // line 188
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            // line 189
            echo "             <img src=\"../../Adminlite/dist/img/avatar.png\" class=\"img-circle elevation-2\" alt=\"User Image\" />
            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DG")) {
            // line 191
            echo "             <img src=\"../../Adminlite/dist/img/avatar5.png\" class=\"img-circle elevation-2\" alt=\"DG Image\" />
            ";
        } else {
            // line 193
            echo "             <img src=\"../../Adminlite/dist/img/avatar4.png\" class=\"img-circle elevation-2\" alt=\"Admin Image\" />
            ";
        }
        // line 195
        echo "          </div>
          <div class=\"info\">
            <a href=\"#\" class=\"d-block\">";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197), "username", [], "any", false, false, false, 197), "html", null, true);
        echo "</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class=\"mt-3 pt-3 \"> 
          <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
            <!--      Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library      -->
            <!-- Gestion liens actives   -->
            ";
        // line 207
        $context["activeStock"] = "";
        // line 208
        echo "            ";
        $context["activeBon"] = "";
        // line 209
        echo "            ";
        $context["activeAutorisation"] = "";
        // line 210
        echo "            ";
        $context["activeDashboard"] = "";
        // line 211
        echo "            ";
        $context["activeFacture"] = "";
        // line 212
        echo "            ";
        $context["activeFournisseur"] = "";
        // line 213
        echo "            ";
        $context["activeMouvement"] = "";
        // line 214
        echo "   
            ";
        // line 215
        if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 215, $this->source); })()) === "StockController")) {
            echo " 
              ";
            // line 216
            $context["activeStock"] = "active";
            // line 217
            echo "            ";
        } elseif (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 217, $this->source); })()) === "BonController")) {
            echo " 
              ";
            // line 218
            $context["activeBon"] = "active";
            // line 219
            echo "            ";
        } elseif (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 219, $this->source); })()) === "AutorisationController")) {
            echo " 
              ";
            // line 220
            $context["activeAutorisation"] = "active";
            // line 221
            echo "            ";
        } elseif (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 221, $this->source); })()) === "DashBoardController")) {
            echo " 
              ";
            // line 222
            $context["activeDashboard"] = "active";
            // line 223
            echo "            ";
        } elseif (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 223, $this->source); })()) === "FactureController")) {
            echo " 
              ";
            // line 224
            $context["activeFacture"] = "active";
            // line 225
            echo "            ";
        } elseif (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 225, $this->source); })()) === "FournisseurController")) {
            echo " 
              ";
            // line 226
            $context["activeFournisseur"] = "active";
            // line 227
            echo "            ";
        } elseif (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 227, $this->source); })()) === "MouvementStockController")) {
            echo " 
              ";
            // line 228
            $context["activeMouvement"] = "active";
            // line 229
            echo "            ";
        }
        echo " 

            ";
        // line 231
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
            echo " 
              <li class=\"nav-item\">
              <a href=\"";
            // line 233
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock0");
            echo "\" class=\"nav-link ";
            echo twig_escape_filter($this->env, (isset($context["activeStock"]) || array_key_exists("activeStock", $context) ? $context["activeStock"] : (function () { throw new RuntimeError('Variable "activeStock" does not exist.', 233, $this->source); })()), "html", null, true);
            echo "\">
                <i class=\"nav-icon fas fa-th \"></i>
                <p>
                  Gestion médicamennts
                </p>
              </a>
              </li>
              <li class=\"nav-item menu-open\">
                <a href=\"#\" class=\"nav-link  ";
            // line 241
            echo twig_escape_filter($this->env, (isset($context["activeMouvement"]) || array_key_exists("activeMouvement", $context) ? $context["activeMouvement"] : (function () { throw new RuntimeError('Variable "activeMouvement" does not exist.', 241, $this->source); })()), "html", null, true);
            echo " \">
                  <i class=\"nav-icon fas fa-table\"></i>
                  <p>
                    Mouvement de stock
                    <i class=\"fas fa-angle-left right\"></i>
                  </p>
                </a>
                <ul class=\"nav nav-treeview\" style=\"display: block;\">
                  <li class=\"nav-item\">
                    <a href=\"";
            // line 250
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_removals");
            echo "\" class=\"nav-link ";
            echo twig_escape_filter($this->env, (isset($context["activeMouvement"]) || array_key_exists("activeMouvement", $context) ? $context["activeMouvement"] : (function () { throw new RuntimeError('Variable "activeMouvement" does not exist.', 250, $this->source); })()), "html", null, true);
            echo " \">
                      <i class=\"far fa-circle nav-icon\"></i>
                      <p>Sortie de stock</p>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a href=\"";
            // line 256
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_removals");
            echo "\" class=\"nav-link\">
                      <i class=\"far fa-circle nav-icon\"></i>
                      <p>Entree de stock</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"nav-item\">
                  <a href=\"";
            // line 264
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fournisseurs");
            echo "\" class=\"nav-link ";
            echo twig_escape_filter($this->env, (isset($context["activeFournisseur"]) || array_key_exists("activeFournisseur", $context) ? $context["activeFournisseur"] : (function () { throw new RuntimeError('Variable "activeFournisseur" does not exist.', 264, $this->source); })()), "html", null, true);
            echo "\">
                    <i class=\"nav-icon fas fa-prescription-bottle-alt \"></i>
                    <p>
                       Fournisseurs
                    </p>
                  </a>
              </li>
              <li class=\"nav-item menu-open\">
                <a href=\"#\" class=\"nav-link ";
            // line 272
            echo twig_escape_filter($this->env, (isset($context["activeBon"]) || array_key_exists("activeBon", $context) ? $context["activeBon"] : (function () { throw new RuntimeError('Variable "activeBon" does not exist.', 272, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeFacture"]) || array_key_exists("activeFacture", $context) ? $context["activeFacture"] : (function () { throw new RuntimeError('Variable "activeFacture" does not exist.', 272, $this->source); })()), "html", null, true);
            echo "\">
                  <i class=\"nav-icon fas  fa-money-bill-wave\"></i>
                  <p>
                   Factures & Commandes
                    <i class=\"fas fa-angle-left right\"></i>
                  </p>
                </a>
                <ul class=\"nav nav-treeview\" style=\"display: block;\">
                  <li class=\"nav-item\">
                    <a href=\"";
            // line 281
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon");
            echo "\" class=\"nav-link ";
            echo twig_escape_filter($this->env, (isset($context["activeBon"]) || array_key_exists("activeBon", $context) ? $context["activeBon"] : (function () { throw new RuntimeError('Variable "activeBon" does not exist.', 281, $this->source); })()), "html", null, true);
            echo " \">
                      <i class=\"far fa-circle nav-icon\"></i>
                      <p>Commandes</p>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a href=\"";
            // line 287
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture");
            echo "\" class=\"nav-link ";
            echo twig_escape_filter($this->env, (isset($context["activeFacture"]) || array_key_exists("activeFacture", $context) ? $context["activeFacture"] : (function () { throw new RuntimeError('Variable "activeFacture" does not exist.', 287, $this->source); })()), "html", null, true);
            echo "\">
                      <i class=\"far fa-circle nav-icon\"></i>
                      <p>Factures</p>
                    </a>
                  </li>
                </ul>
            </li>
            ";
        }
        // line 295
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DG")) {
            // line 296
            echo "              <li class=\"nav-item\">
                <a href=\"";
            // line 297
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("autorisation");
            echo "\" class=\"nav-link ";
            echo twig_escape_filter($this->env, (isset($context["activeAutorisation"]) || array_key_exists("activeAutorisation", $context) ? $context["activeAutorisation"] : (function () { throw new RuntimeError('Variable "activeAutorisation" does not exist.', 297, $this->source); })()), "html", null, true);
            echo "\">
                  <i class=\"nav-icon fas  fa-key\"></i>
                  <p>
                     Autorisation Commandes
                  </p>
                </a>
              </li>
            ";
        }
        // line 305
        echo "            ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DG"))) {
            // line 306
            echo "              <li class=\"nav-item\">
                <a href=\"";
            // line 307
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\" class=\"nav-link ";
            echo twig_escape_filter($this->env, (isset($context["activeDashboard"]) || array_key_exists("activeDashboard", $context) ? $context["activeDashboard"] : (function () { throw new RuntimeError('Variable "activeDashboard" does not exist.', 307, $this->source); })()), "html", null, true);
            echo "\">
                  <i class=\"nav-icon fas  fa-tachometer-alt \"></i>
                  <p>
                    Tableau de bord
                  </p>
                </a>
              </li>
            ";
        }
        // line 315
        echo "            <li>
              <div class=\"user-panel   mb-1 d-flex align-items-center\">
                <div class=\"image\">
                  <a href=\"";
        // line 318
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                    <i class=\"fas fa-sign-out-alt\"></i>
                  </a>
                </div>
                <div class=\"info\">
                  <a href=\"";
        // line 323
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"d-block nav-link\">Deconnexion</a>
                </div>
              </div>
            </li> 
          </ul>
        </nav>
      <!-- /.sidebar -->
      </div>
    </aside>
    <div class=\"content-wrapper iframe-mode\">
      <div class=\"tab-content\">
        <div class=\"container-fluid\">
          <div class=\"row-fluid\">
            <section class=\"content\">
              ";
        // line 337
        $this->displayBlock('body', $context, $blocks);
        // line 340
        echo "            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 347
        $this->displayBlock('javascripts', $context, $blocks);
        // line 441
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        // line 6
        echo "  <meta charset=\"UTF-8\" />
  <title>
    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\" />
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"../../Adminlite/plugins/fontawesome-free/css/all.min.css\" />
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../Adminlite/dist/css/adminlte.min.css\" />
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"../../Adminlite/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\" />

  <!-- Bootstrap css file -->
  <link reel=\"../../css/bootstrap.min.css\">
  </link>
  <!-- custum css -->
  <link rel=\"stylesheet\" href=\"../../css/style.css\"/>
  <!-- datatable css & js -->
  <script src=\"../../Datatables/datatables.js\"></script>
  <link rel=\"stylesheet\" href=\"../../Datatables/datatables.css\"/>
    ";
        // line 30
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    Welcome!
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 337
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 338
        echo "
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 347
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 348
        echo "
    ";
        // line 349
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
  <!-- Jquery js file -->
  <script src=\"../../js/jquery.3.4.1.js\"></script>

  <!-- chart js file -->
  <!--
  <script src=\"https://cdnjs.com/libraries/Chart.js\"></script>
    -->

  <!-- My costum js file -->
  <script src=\"../../js/mynewjs.js\"></script>

  <!-- Bootstrap js file -->
  <!--
    <script src=\"../../js/bootstrap.min.js\"></script>
  -->
  <!-- Print js file -->

  <script src=\"https://printjs-4de6.kxcdn.com/print.min.js\"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src=\"../../Adminlite/plugins/jquery-ui/jquery-ui.min.js\"></script>

  <!-- Bootstrap 4 -->
  <script src=\"../../Adminlite/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <!-- overlayScrollbars -->
  <script src=\"../../Adminlite/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
  <!-- AdminLTE App -->
  <script src=\"../../Adminlite/dist/js/AdminLTE.js\"></script>
  <!-- AdminLTE for demo purposes -->
  <script src=\"../../Adminlite/dist/js/demo.js\"></script>

 
  <script>
    \$(document).ready(function(){ 

  //     \$('modal-content').on('click','#btn_edit_med', function(e) {
  //     e.preventDefault(); 
  // var \$id = \$(this).attr('id');
  //  Console.log(id );
  //     var formulaire = \$('form[name=\"medic\"]'); 
  // var modalcontent = \$('.modal-content'); modalcontent.html('');
  //     modalcontent.append(formulaire);

  //     });

      \$('#table_id,#table-removal').DataTable({
          // \"lengthChange\": false,
          // // \"processing\":true,
          // // \"serverSide\":true,
          // // 'processing': true,
          // // 'serverSide': true,
          // // 'serverMethod': 'post',   
          // // \"order\":[],
          // // \"ajax\":{
          // //   url:\"ajax_action.php\",
          // //   type:\"POST\",
          // //   data:{action:'listRecords'},
          // //   dataType:\"json\"
          // // },
          // \"columnDefs\":[
          //   {
          //     \"targets\":[0, 6, 7],
          //     \"orderable\":false,
          //   },
          // ],
          // \"pageLength\": 10
          \"ordering\": false,
          \"processing\": true,
          \"order\": [],
          \"oLanguage\": {
            \"oPaginate\": {
              \"sPrevious\": \"<<<<<<\",
              \"sNext\": \">>>>>>\", 
              \"sEmptyTable\": \"Pas de medicament trouvé\",
            },
            \"sSearch\": \"Rechercher :\",
            \"sInfo\": \"Total de _TOTAL_ à afficher(_START_ à _END_)\",
            \"sZeroRecords\": \"Pas de resultats trouves\",
            \"aLengthMenu\": [ 10, 25, 50, 100 ],
            \"sInfoEmpty\": \"Affichage de 0 à 0 of 0 \",
            \"sInfoFiltered\": \"(sur un total de _MAX_)\",
            \"sLengthMenu\": \"Afficher par _MENU_\",
            \"sSearchPlaceholder\": \"rechercher\",
          }
        })


    }); 
  
  </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 349,  640 => 348,  630 => 347,  619 => 338,  609 => 337,  598 => 9,  588 => 8,  576 => 30,  555 => 11,  553 => 8,  549 => 6,  539 => 5,  527 => 441,  525 => 347,  516 => 340,  514 => 337,  497 => 323,  489 => 318,  484 => 315,  471 => 307,  468 => 306,  465 => 305,  452 => 297,  449 => 296,  446 => 295,  433 => 287,  422 => 281,  408 => 272,  395 => 264,  384 => 256,  373 => 250,  361 => 241,  348 => 233,  343 => 231,  337 => 229,  335 => 228,  330 => 227,  328 => 226,  323 => 225,  321 => 224,  316 => 223,  314 => 222,  309 => 221,  307 => 220,  302 => 219,  300 => 218,  295 => 217,  293 => 216,  289 => 215,  286 => 214,  283 => 213,  280 => 212,  277 => 211,  274 => 210,  271 => 209,  268 => 208,  266 => 207,  253 => 197,  249 => 195,  245 => 193,  241 => 191,  237 => 189,  235 => 188,  219 => 174,  213 => 173,  204 => 170,  201 => 169,  196 => 168,  192 => 167,  55 => 32,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  {% block head_css %}
  <meta charset=\"UTF-8\" />
  <title>
    {% block title %}
    Welcome!
    {% endblock %}
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\" />
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"../../Adminlite/plugins/fontawesome-free/css/all.min.css\" />
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../Adminlite/dist/css/adminlte.min.css\" />
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"../../Adminlite/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\" />

  <!-- Bootstrap css file -->
  <link reel=\"../../css/bootstrap.min.css\">
  </link>
  <!-- custum css -->
  <link rel=\"stylesheet\" href=\"../../css/style.css\"/>
  <!-- datatable css & js -->
  <script src=\"../../Datatables/datatables.js\"></script>
  <link rel=\"stylesheet\" href=\"../../Datatables/datatables.css\"/>
    {{ encore_entry_link_tags('app') }}
  {% endblock %}
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\" data-panel-auto-height-mode=\"height\">
  <div class=\"SpinnerLoader\">
    <img src=\"../../img/SpinnerLoader.gif\" class=\"img-responsive\" alt=\"imgage de chargement\"/>
  </div>
  <!-- Image gif chargement -->
  <div class=\"wrapper\">
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
      <!-- Left navbar links -->
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
            <i class=\"fas fa-bars\"></i>
          </a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class=\"navbar-nav ml-auto\">
        <!-- Messages Dropdown Menu -->
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-comments\"></i>
           <!--  <span class=\"badge badge-danger navbar-badge\">3</span>
          </a> -->
          <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"../../img/testimonials/t1.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\" />
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    Brad Diesel
                    <span class=\"float-right text-sm text-danger\">
                      <i class=\"fas fa-star\"></i>
                    </span>
                  </h3>
                  <p class=\"text-sm\">
                    Call me whenever you can...
                  </p>
                  <p class=\"text-sm text-muted\">
                    <i class=\"far fa-clock mr-1\"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"../../img/testimonials/t1.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\" />
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    John Pierce
                    <span class=\"float-right text-sm text-muted\">
                      <i class=\"fas fa-star\"></i>
                    </span>
                  </h3>
                  <p class=\"text-sm\">
                    I got your message bro
                  </p>
                  <p class=\"text-sm text-muted\">
                    <i class=\"far fa-clock mr-1\"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"../../img/testimonials/t1.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\" />
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    Nora Silvester
                    <span class=\"float-right text-sm text-warning\">
                      <i class=\"fas fa-star\"></i>
                    </span>
                  </h3>
                  <p class=\"text-sm\">
                    The subject goes here
                  </p>
                  <p class=\"text-sm text-muted\">
                    <i class=\"far fa-clock mr-1\"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">
              See All Messages
            </a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-bell\"></i>
           <!--  <span class=\"badge badge-warning navbar-badge\">15</span> -->
          </a>
          <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <span class=\"dropdown-item dropdown-header\">
              15 Notifications
            </span>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
              <span class=\"float-right text-muted text-sm\">3 mins</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-users mr-2\"></i> 8 friend requests
              <span class=\"float-right text-muted text-sm\">12 hours</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-file mr-2\"></i> 3 new reports
              <span class=\"float-right text-muted text-sm\">2 days</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">
              See All Notifications
            </a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"fas fa-expand-arrows-alt\"></i>
          </a>
        </li>

      </ul>
      {% for  messages in app.flashes %}
      {% for message in messages %}
      <div class=\"alert alert-warning flash-warning\" style=\"position: absolute;right: 10px;top: 7px;\">
        {{ message }}
      </div>
      {% endfor %}
      {% endfor %}
    </nav>
    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
      <!-- Brand Logo -->
      <a href=\"\" class=\"brand-link\">
        <img src=\"../../img/logocym.png\" alt=\"Yaye MArie Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\" />
        <span class=\"brand-text font-weight-light\">Clinique YAYE MARIE</span>
      </a>

      <!-- Sidebar -->
      <div class=\"sidebar\">
        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel mt-3 pb-2 mb-2 d-flex\">
          <div class=\"image\">
            {% if is_granted('ROLE_MANAGER') %}
             <img src=\"../../Adminlite/dist/img/avatar.png\" class=\"img-circle elevation-2\" alt=\"User Image\" />
            {% elseif is_granted('ROLE_DG') %}
             <img src=\"../../Adminlite/dist/img/avatar5.png\" class=\"img-circle elevation-2\" alt=\"DG Image\" />
            {% else %}
             <img src=\"../../Adminlite/dist/img/avatar4.png\" class=\"img-circle elevation-2\" alt=\"Admin Image\" />
            {% endif %}
          </div>
          <div class=\"info\">
            <a href=\"#\" class=\"d-block\">{{ app.user.username}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class=\"mt-3 pt-3 \"> 
          <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
            <!--      Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library      -->
            <!-- Gestion liens actives   -->
            {% set activeStock = \"\" %}
            {% set activeBon = \"\" %}
            {% set activeAutorisation = \"\" %}
            {% set activeDashboard = \"\" %}
            {% set activeFacture = \"\" %}
            {% set activeFournisseur = \"\" %}
            {% set activeMouvement = \"\" %}
   
            {% if controller_name is same as \"StockController\" %} 
              {% set activeStock = \"active\" %}
            {% elseif controller_name is same as \"BonController\" %} 
              {% set activeBon = \"active\" %}
            {% elseif controller_name is same as \"AutorisationController\" %} 
              {% set activeAutorisation = \"active\" %}
            {% elseif controller_name is same as \"DashBoardController\" %} 
              {% set activeDashboard = \"active\" %}
            {% elseif controller_name is same as \"FactureController\" %} 
              {% set activeFacture = \"active\" %}
            {% elseif controller_name is same as \"FournisseurController\" %} 
              {% set activeFournisseur = \"active\" %}
            {% elseif controller_name is same as \"MouvementStockController\" %} 
              {% set activeMouvement = \"active\" %}
            {% endif %} 

            {% if is_granted('ROLE_MANAGER') %} 
              <li class=\"nav-item\">
              <a href=\"{{path('stock0')}}\" class=\"nav-link {{activeStock}}\">
                <i class=\"nav-icon fas fa-th \"></i>
                <p>
                  Gestion médicamennts
                </p>
              </a>
              </li>
              <li class=\"nav-item menu-open\">
                <a href=\"#\" class=\"nav-link  {{activeMouvement}} \">
                  <i class=\"nav-icon fas fa-table\"></i>
                  <p>
                    Mouvement de stock
                    <i class=\"fas fa-angle-left right\"></i>
                  </p>
                </a>
                <ul class=\"nav nav-treeview\" style=\"display: block;\">
                  <li class=\"nav-item\">
                    <a href=\"{{ path('stock_removals')}}\" class=\"nav-link {{activeMouvement}} \">
                      <i class=\"far fa-circle nav-icon\"></i>
                      <p>Sortie de stock</p>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a href=\"{{ path('stock_removals')}}\" class=\"nav-link\">
                      <i class=\"far fa-circle nav-icon\"></i>
                      <p>Entree de stock</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"nav-item\">
                  <a href=\"{{path('fournisseurs')}}\" class=\"nav-link {{activeFournisseur}}\">
                    <i class=\"nav-icon fas fa-prescription-bottle-alt \"></i>
                    <p>
                       Fournisseurs
                    </p>
                  </a>
              </li>
              <li class=\"nav-item menu-open\">
                <a href=\"#\" class=\"nav-link {{activeBon}} {{activeFacture}}\">
                  <i class=\"nav-icon fas  fa-money-bill-wave\"></i>
                  <p>
                   Factures & Commandes
                    <i class=\"fas fa-angle-left right\"></i>
                  </p>
                </a>
                <ul class=\"nav nav-treeview\" style=\"display: block;\">
                  <li class=\"nav-item\">
                    <a href=\"{{ path('bon')}}\" class=\"nav-link {{activeBon}} \">
                      <i class=\"far fa-circle nav-icon\"></i>
                      <p>Commandes</p>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a href=\"{{ path('facture')}}\" class=\"nav-link {{activeFacture}}\">
                      <i class=\"far fa-circle nav-icon\"></i>
                      <p>Factures</p>
                    </a>
                  </li>
                </ul>
            </li>
            {% endif %}
            {% if is_granted('ROLE_DG') %}
              <li class=\"nav-item\">
                <a href=\"{{path('autorisation')}}\" class=\"nav-link {{activeAutorisation}}\">
                  <i class=\"nav-icon fas  fa-key\"></i>
                  <p>
                     Autorisation Commandes
                  </p>
                </a>
              </li>
            {% endif %}
            {% if is_granted('ROLE_MANAGER') or is_granted('ROLE_DG') %}
              <li class=\"nav-item\">
                <a href=\"{{path('dashboard')}}\" class=\"nav-link {{activeDashboard}}\">
                  <i class=\"nav-icon fas  fa-tachometer-alt \"></i>
                  <p>
                    Tableau de bord
                  </p>
                </a>
              </li>
            {% endif %}
            <li>
              <div class=\"user-panel   mb-1 d-flex align-items-center\">
                <div class=\"image\">
                  <a href=\"{{ path('app_logout')}}\">
                    <i class=\"fas fa-sign-out-alt\"></i>
                  </a>
                </div>
                <div class=\"info\">
                  <a href=\"{{ path('app_logout')}}\" class=\"d-block nav-link\">Deconnexion</a>
                </div>
              </div>
            </li> 
          </ul>
        </nav>
      <!-- /.sidebar -->
      </div>
    </aside>
    <div class=\"content-wrapper iframe-mode\">
      <div class=\"tab-content\">
        <div class=\"container-fluid\">
          <div class=\"row-fluid\">
            <section class=\"content\">
              {% block body %}

              {% endblock %}
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

  {% block javascripts %}

    {{ encore_entry_script_tags('app') }}
  <!-- Jquery js file -->
  <script src=\"../../js/jquery.3.4.1.js\"></script>

  <!-- chart js file -->
  <!--
  <script src=\"https://cdnjs.com/libraries/Chart.js\"></script>
    -->

  <!-- My costum js file -->
  <script src=\"../../js/mynewjs.js\"></script>

  <!-- Bootstrap js file -->
  <!--
    <script src=\"../../js/bootstrap.min.js\"></script>
  -->
  <!-- Print js file -->

  <script src=\"https://printjs-4de6.kxcdn.com/print.min.js\"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src=\"../../Adminlite/plugins/jquery-ui/jquery-ui.min.js\"></script>

  <!-- Bootstrap 4 -->
  <script src=\"../../Adminlite/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <!-- overlayScrollbars -->
  <script src=\"../../Adminlite/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
  <!-- AdminLTE App -->
  <script src=\"../../Adminlite/dist/js/AdminLTE.js\"></script>
  <!-- AdminLTE for demo purposes -->
  <script src=\"../../Adminlite/dist/js/demo.js\"></script>

 
  <script>
    \$(document).ready(function(){ 

  //     \$('modal-content').on('click','#btn_edit_med', function(e) {
  //     e.preventDefault(); 
  // var \$id = \$(this).attr('id');
  //  Console.log(id );
  //     var formulaire = \$('form[name=\"medic\"]'); 
  // var modalcontent = \$('.modal-content'); modalcontent.html('');
  //     modalcontent.append(formulaire);

  //     });

      \$('#table_id,#table-removal').DataTable({
          // \"lengthChange\": false,
          // // \"processing\":true,
          // // \"serverSide\":true,
          // // 'processing': true,
          // // 'serverSide': true,
          // // 'serverMethod': 'post',   
          // // \"order\":[],
          // // \"ajax\":{
          // //   url:\"ajax_action.php\",
          // //   type:\"POST\",
          // //   data:{action:'listRecords'},
          // //   dataType:\"json\"
          // // },
          // \"columnDefs\":[
          //   {
          //     \"targets\":[0, 6, 7],
          //     \"orderable\":false,
          //   },
          // ],
          // \"pageLength\": 10
          \"ordering\": false,
          \"processing\": true,
          \"order\": [],
          \"oLanguage\": {
            \"oPaginate\": {
              \"sPrevious\": \"<<<<<<\",
              \"sNext\": \">>>>>>\", 
              \"sEmptyTable\": \"Pas de medicament trouvé\",
            },
            \"sSearch\": \"Rechercher :\",
            \"sInfo\": \"Total de _TOTAL_ à afficher(_START_ à _END_)\",
            \"sZeroRecords\": \"Pas de resultats trouves\",
            \"aLengthMenu\": [ 10, 25, 50, 100 ],
            \"sInfoEmpty\": \"Affichage de 0 à 0 of 0 \",
            \"sInfoFiltered\": \"(sur un total de _MAX_)\",
            \"sLengthMenu\": \"Afficher par _MENU_\",
            \"sSearchPlaceholder\": \"rechercher\",
          }
        })


    }); 
  
  </script>
  {% endblock %}
</body>

</html>", "base.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\base.html.twig");
    }
}
