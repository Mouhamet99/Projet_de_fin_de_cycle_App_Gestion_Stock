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

/* facture/index.html.php */
class __TwigTemplate_db7da6a1b38c93ece8f47131cbf29b9c2330c7f913046dd0e12e38aa5dfc5cfc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.php"));

        // line 1
        echo "<?php
use  App\\MesServices\\fpdf\\PDF_Invoice;
use Symfony\\Component\\HttpFoundation\\Response;

//require('../../src/MesServices/fpdf/PDF_Invoice.php');
echo \"bonsour\";
\$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
\$pdf->AddPage();
\$pdf->addSociete( \"MaSociete\",
                  \"MonAdresse\\n\" .
                  \"75000 PARIS\\n\".
                  \"R.C.S. PARIS B 000 000 007\\n\" .
                  \"Capital : 18000 \" . EURO );
\$pdf->fact_dev( \"Devis \", \"TEMPO\" );
\$pdf->temporaire( \"Devis temporaire\" );
\$pdf->addDate( \"03/12/2003\");
\$pdf->addClient(\"CL01\");
\$pdf->addPageNumber(\"1\");
\$pdf->addClientAdresse(\"Ste\\nM. XXXX\\n3ème étage\\n33, rue d'ailleurs\\n75000 PARIS\");
\$pdf->addReglement(\"Chèque à réception de facture\");
\$pdf->addEcheance(\"03/12/2003\");
\$pdf->addNumTVA(\"FR888777666\");
\$pdf->addReference(\"Devis ... du ....\");
\$cols=array( \"REFERENCE\"    => 23,
             \"DESIGNATION\"  => 78,
             \"QUANTITE\"     => 22,
             \"P.U. HT\"      => 26,
             \"MONTANT H.T.\" => 30,
             \"TVA\"          => 11 );
\$pdf->addCols( \$cols);
\$cols=array( \"REFERENCE\"    => \"L\",
             \"DESIGNATION\"  => \"L\",
             \"QUANTITE\"     => \"C\",
             \"P.U. HT\"      => \"R\",
             \"MONTANT H.T.\" => \"R\",
             \"TVA\"          => \"C\" );
\$pdf->addLineFormat( \$cols);
\$pdf->addLineFormat(\$cols);

\$y    = 109;
\$line = array( \"REFERENCE\"    => \"REF1\",
               \"DESIGNATION\"  => \"Carte Mère MSI 6378\\n\" .
                                 \"Processeur AMD 1Ghz\\n\" .
                                 \"128Mo SDRAM, 30 Go Disque, CD-ROM, Floppy, Carte vidéo\",
               \"QUANTITE\"     => \"1\",
               \"P.U. HT\"      => \"600.00\",
               \"MONTANT H.T.\" => \"600.00\",
               \"TVA\"          => \"1\" );
\$size = \$pdf->addLine( \$y, \$line );
\$y   += \$size + 2;

\$line = array( \"REFERENCE\"    => \"REF2\",
               \"DESIGNATION\"  => \"Câble RS232\",
               \"QUANTITE\"     => \"1\",
               \"P.U. HT\"      => \"10.00\",
               \"MONTANT H.T.\" => \"60.00\",
               \"TVA\"          => \"1\" );
\$size = \$pdf->addLine( \$y, \$line );
\$y   += \$size + 2;

\$pdf->addCadreTVAs();
        
// invoice = array( \"px_unit\" => value,
//                  \"qte\"     => qte,
//                  \"tva\"     => code_tva );
// tab_tva = array( \"1\"       => 19.6,
//                  \"2\"       => 5.5, ... );
// params  = array( \"RemiseGlobale\" => [0|1],
//                      \"remise_tva\"     => [1|2...],  // {la remise s'applique sur ce code TVA}
//                      \"remise\"         => value,     // {montant de la remise}
//                      \"remise_percent\" => percent,   // {pourcentage de remise sur ce montant de TVA}
//                  \"FraisPort\"     => [0|1],
//                      \"portTTC\"        => value,     // montant des frais de ports TTC
//                                                     // par defaut la TVA = 19.6 %
//                      \"portHT\"         => value,     // montant des frais de ports HT
//                      \"portTVA\"        => tva_value, // valeur de la TVA a appliquer sur le montant HT
//                  \"AccompteExige\" => [0|1],
//                      \"accompte\"         => value    // montant de l'acompte (TTC)
//                      \"accompte_percent\" => percent  // pourcentage d'acompte (TTC)
//                  \"Remarque\" => \"texte\"              // texte
\$tot_prods = array( array ( \"px_unit\" => 600, \"qte\" => 1, \"tva\" => 1 ),
                    array ( \"px_unit\" =>  10, \"qte\" => 1, \"tva\" => 1 ));
\$tab_tva = array( \"1\"       => 19.6,
                  \"2\"       => 5.5);
\$params  = array( \"RemiseGlobale\" => 1,
                      \"remise_tva\"     => 1,       // {la remise s'applique sur ce code TVA}
                      \"remise\"         => 0,       // {montant de la remise}
                      \"remise_percent\" => 10,      // {pourcentage de remise sur ce montant de TVA}
                  \"FraisPort\"     => 1,
                      \"portTTC\"        => 10,      // montant des frais de ports TTC
                                                   // par defaut la TVA = 19.6 %
                      \"portHT\"         => 0,       // montant des frais de ports HT
                      \"portTVA\"        => 19.6,    // valeur de la TVA a appliquer sur le montant HT
                  \"AccompteExige\" => 1,
                      \"accompte\"         => 0,     // montant de l'acompte (TTC)
                      \"accompte_percent\" => 15,    // pourcentage d'acompte (TTC)
                  \"Remarque\" => \"Avec un acompte, svp...\" );

\$pdf->addTVAs( \$params, \$tab_tva, \$tot_prods);
\$pdf->addCadreEurosFrancs();

// \$filesystem = new Filesystem();




//\$response->headers->set('Content-Type', 'application/json');
// \$pdf->Output('I','Facture.pdf');
// dd(\$pdf);
/* header('Content-type: application/pdf');
return new JsonResponse(
 ['file' => \$pdf->Output('I','Facture')]
);*/ 
\$filename = 'Facture';
/*
\$facture = fopen('Facture.pdf','w');
fwrite(\$facture,  \$pdf->Output('S','Facture.pdf'));
fclose(\$facture);
return(\$facture);
*/
/*

*/  \$response = new Response();
\$response->headers->set('Content-Type', 'application/json');
\$response->headers->set('Content-Disposition', 'inline; filename=facture.pdf');
\$response->setContent(\$pdf->Output('D', 'facture.pdf'));
//\$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
//\$pdf->Output('F', sys_get_temp_dir()+'\\facture.pdf');
//dd('ok');
// return \$this-render(\$response);
\$pdf->Output('I', 'facture.pdf');
dd(\$pdf);";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
use  App\\MesServices\\fpdf\\PDF_Invoice;
use Symfony\\Component\\HttpFoundation\\Response;

//require('../../src/MesServices/fpdf/PDF_Invoice.php');
echo \"bonsour\";
\$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
\$pdf->AddPage();
\$pdf->addSociete( \"MaSociete\",
                  \"MonAdresse\\n\" .
                  \"75000 PARIS\\n\".
                  \"R.C.S. PARIS B 000 000 007\\n\" .
                  \"Capital : 18000 \" . EURO );
\$pdf->fact_dev( \"Devis \", \"TEMPO\" );
\$pdf->temporaire( \"Devis temporaire\" );
\$pdf->addDate( \"03/12/2003\");
\$pdf->addClient(\"CL01\");
\$pdf->addPageNumber(\"1\");
\$pdf->addClientAdresse(\"Ste\\nM. XXXX\\n3ème étage\\n33, rue d'ailleurs\\n75000 PARIS\");
\$pdf->addReglement(\"Chèque à réception de facture\");
\$pdf->addEcheance(\"03/12/2003\");
\$pdf->addNumTVA(\"FR888777666\");
\$pdf->addReference(\"Devis ... du ....\");
\$cols=array( \"REFERENCE\"    => 23,
             \"DESIGNATION\"  => 78,
             \"QUANTITE\"     => 22,
             \"P.U. HT\"      => 26,
             \"MONTANT H.T.\" => 30,
             \"TVA\"          => 11 );
\$pdf->addCols( \$cols);
\$cols=array( \"REFERENCE\"    => \"L\",
             \"DESIGNATION\"  => \"L\",
             \"QUANTITE\"     => \"C\",
             \"P.U. HT\"      => \"R\",
             \"MONTANT H.T.\" => \"R\",
             \"TVA\"          => \"C\" );
\$pdf->addLineFormat( \$cols);
\$pdf->addLineFormat(\$cols);

\$y    = 109;
\$line = array( \"REFERENCE\"    => \"REF1\",
               \"DESIGNATION\"  => \"Carte Mère MSI 6378\\n\" .
                                 \"Processeur AMD 1Ghz\\n\" .
                                 \"128Mo SDRAM, 30 Go Disque, CD-ROM, Floppy, Carte vidéo\",
               \"QUANTITE\"     => \"1\",
               \"P.U. HT\"      => \"600.00\",
               \"MONTANT H.T.\" => \"600.00\",
               \"TVA\"          => \"1\" );
\$size = \$pdf->addLine( \$y, \$line );
\$y   += \$size + 2;

\$line = array( \"REFERENCE\"    => \"REF2\",
               \"DESIGNATION\"  => \"Câble RS232\",
               \"QUANTITE\"     => \"1\",
               \"P.U. HT\"      => \"10.00\",
               \"MONTANT H.T.\" => \"60.00\",
               \"TVA\"          => \"1\" );
\$size = \$pdf->addLine( \$y, \$line );
\$y   += \$size + 2;

\$pdf->addCadreTVAs();
        
// invoice = array( \"px_unit\" => value,
//                  \"qte\"     => qte,
//                  \"tva\"     => code_tva );
// tab_tva = array( \"1\"       => 19.6,
//                  \"2\"       => 5.5, ... );
// params  = array( \"RemiseGlobale\" => [0|1],
//                      \"remise_tva\"     => [1|2...],  // {la remise s'applique sur ce code TVA}
//                      \"remise\"         => value,     // {montant de la remise}
//                      \"remise_percent\" => percent,   // {pourcentage de remise sur ce montant de TVA}
//                  \"FraisPort\"     => [0|1],
//                      \"portTTC\"        => value,     // montant des frais de ports TTC
//                                                     // par defaut la TVA = 19.6 %
//                      \"portHT\"         => value,     // montant des frais de ports HT
//                      \"portTVA\"        => tva_value, // valeur de la TVA a appliquer sur le montant HT
//                  \"AccompteExige\" => [0|1],
//                      \"accompte\"         => value    // montant de l'acompte (TTC)
//                      \"accompte_percent\" => percent  // pourcentage d'acompte (TTC)
//                  \"Remarque\" => \"texte\"              // texte
\$tot_prods = array( array ( \"px_unit\" => 600, \"qte\" => 1, \"tva\" => 1 ),
                    array ( \"px_unit\" =>  10, \"qte\" => 1, \"tva\" => 1 ));
\$tab_tva = array( \"1\"       => 19.6,
                  \"2\"       => 5.5);
\$params  = array( \"RemiseGlobale\" => 1,
                      \"remise_tva\"     => 1,       // {la remise s'applique sur ce code TVA}
                      \"remise\"         => 0,       // {montant de la remise}
                      \"remise_percent\" => 10,      // {pourcentage de remise sur ce montant de TVA}
                  \"FraisPort\"     => 1,
                      \"portTTC\"        => 10,      // montant des frais de ports TTC
                                                   // par defaut la TVA = 19.6 %
                      \"portHT\"         => 0,       // montant des frais de ports HT
                      \"portTVA\"        => 19.6,    // valeur de la TVA a appliquer sur le montant HT
                  \"AccompteExige\" => 1,
                      \"accompte\"         => 0,     // montant de l'acompte (TTC)
                      \"accompte_percent\" => 15,    // pourcentage d'acompte (TTC)
                  \"Remarque\" => \"Avec un acompte, svp...\" );

\$pdf->addTVAs( \$params, \$tab_tva, \$tot_prods);
\$pdf->addCadreEurosFrancs();

// \$filesystem = new Filesystem();




//\$response->headers->set('Content-Type', 'application/json');
// \$pdf->Output('I','Facture.pdf');
// dd(\$pdf);
/* header('Content-type: application/pdf');
return new JsonResponse(
 ['file' => \$pdf->Output('I','Facture')]
);*/ 
\$filename = 'Facture';
/*
\$facture = fopen('Facture.pdf','w');
fwrite(\$facture,  \$pdf->Output('S','Facture.pdf'));
fclose(\$facture);
return(\$facture);
*/
/*

*/  \$response = new Response();
\$response->headers->set('Content-Type', 'application/json');
\$response->headers->set('Content-Disposition', 'inline; filename=facture.pdf');
\$response->setContent(\$pdf->Output('D', 'facture.pdf'));
//\$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
//\$pdf->Output('F', sys_get_temp_dir()+'\\facture.pdf');
//dd('ok');
// return \$this-render(\$response);
\$pdf->Output('I', 'facture.pdf');
dd(\$pdf);", "facture/index.html.php", "C:\\xampp\\htdocs\\CYM\\templates\\facture\\index.html.php");
    }
}
