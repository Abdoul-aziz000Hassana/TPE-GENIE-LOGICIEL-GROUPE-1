<?php

$connect = mysqli_connect("localhost", "root", "root", "biblio");
$output = '';
if(isset($_POST["import"]))
{

 $nfichier=$_FILES["excel"]["name"];
 $extension = explode('.', $nfichier); // For getting Extension of selected file
 $extension=end($extension);
 //echo $extension."--------".$extension;
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {

 $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
 include("Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
 $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<br><label class='text-success'>Liste des documents importée avec succès!</label><br />";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $titre = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $auteur = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $categorie = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $anneePublication = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $query = "INSERT INTO listeDocuments(titre, auteur, categorie, anneePublication) VALUES ('".$titre."', '".$auteur."', '".$categorie."', '".$anneePublication."')";
    mysqli_query($connect, $query);
   }
  } 
  
 }
  else{
  $output = '<label class="text-danger">Format de fichier invalide, veuillez choisir un fichier Excel</label>'; //if non excel file then
  }
}
header("location:listeDocuments.php?msg=".$output);
?>