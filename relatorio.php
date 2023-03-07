<?php 
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$conteudo ="";
$conteudo .= "<table border = '2' style = 'background:red'>";
$conteudo .= "<tr>";
$conteudo .= "<td>Nome</td>";
$conteudo .= "<td>E-mail</td>";
$conteudo .= "<td>Cidade</td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "<td>Millena</td>";
$conteudo .= "<td>milenajesus@gmail.com";
$conteudo .= "<td>SBO</td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "<td>Guto</td>";
$conteudo .= "<td>gutooffline@gmail.com</td>";
$conteudo .= "<td>SBO</td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "</table>";
$dompdf->loadHtml($conteudo);
$dompdf->setPaper('A4','landscape');


?>