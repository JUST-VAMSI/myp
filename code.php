<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['excel']))
{
    $file_name=$_FILES['import']['name'];
    $file_exe=pathinfo($file_name,PATHINFO_EXTENSION);

    $allowed_ext=['xls','csv','xlsx'];
    if(in_array($file_exe,$allowed_exe))
    {
        $inputFileNamePath = $_FILES['import']['name'];;
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row)
        {
            echo $row['0'];
        }
    }
    else{
        $_SESSION["message"]="invalid";
        header('Location: excelimport.php');
        exit(0);
    }

}
?>
