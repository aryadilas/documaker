<?php 
$token = bin2hex(random_bytes(5));

require 'vendor/autoload.php';
$template = $_FILES['template']['name'];
$temp = $_FILES['template']['tmp_name'];

$datalist = $_FILES['datalist']['name'];
$data = $_FILES['datalist']['tmp_name'];
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use DocxMerge\DocxMerge;




$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");

$spreadsheet = $reader->load($data);

$i = 0;
$colName = [];
$merge = [];
$sheetData = $spreadsheet->getActiveSheet()->toArray();


function makeDir($path){
    if(!is_dir($path)){
        mkdir('process/'.$path);
        return 'process/'.$path.'/';
    } else {
        makeDir(bin2hex(random_bytes(5)));
    }    
}

function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            $this->deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}

$dir = makeDir($token);

foreach($sheetData as $col){
    if($i == 0){
        $colName = $col;
    } else {
        $value = [];
        for ($j=0; $j < count($colName); $j++) { 
            $value[$colName[$j]] = $col[$j];
        }
        //----
        /*$template = new \PhpOffice\PhpWord\TemplateProcessor('Template.docx');; 
        $template->setValues($value);
        $template->saveAs('process/'.$i.'.docx');*/

        $dm = new DocxMerge();
        $dm->setValues($temp,
                $dir.$i.'.docx',
                $value);
        array_push($merge, $dir.$i.'.docx');
        //----
        //echo var_dump($value).'<br>';    
    }
    
    $i++;
}

$dm->merge( $merge, $dir.$template );

$file_path=$dir.$template;

if(!empty($file_path) && file_exists($file_path)){ /*check keberadaan file*/
   /*
   
   */
   /* header("Expired:0");
   header("Cache-Control:must-revalidate");
   header("Content-Control:public");*/
    header("Content-Description: File Transfer");
    header("Content-Type: application/octet-stream");
    header("Content-Disposition:attachment; filename=\"".basename($file_path)."\"");
    header("Content-Transfer-Encoding:binary");
    header("Content-Length:".filesize($file_path));
    ob_clean();
    flush();
    readfile($file_path);
    
    deleteDir($dir);
    //header('location:index.php');
    //exit();
}else{
   //echo "The File does not exist.";
}
?>