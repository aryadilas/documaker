<?php 

/*$template = new \PhpOffice\PhpWord\TemplateProcessor('Template.docx');; 
$template->setValues([
    'nomor' => '2022',
    'nama' => 'Arya Dila Citra Permata',
    'tanggal' => '08/01/2022'
]);
$template->saveAs('process/mydocUP1.docx');

$template = new \PhpOffice\PhpWord\TemplateProcessor('Template.docx');; 
$template->setValues([
    'nomor' => '2023',
    'nama' => 'Nama Baru',
    'tanggal' => '08/01/2023'
]);
$template->saveAs('process/mydocUP2.docx');*/









//echo var_dump($value);
/*$template->setValues([
    'nomor' => '2023',
    'nama' => 'Arya Dila Citra Permata',
    'tanggal' => '08/01/2023'
]);*/
//$template->saveAs('process/mydocUP2.docx');
//$template = new \PhpOffice\PhpWord\PhpWord();
//$template->setValue('[nama]', 'John Doe');


/*'tglLahir' => 'BARU',
    'Alamat' => 'BARU',
    'br' => '<w:p><w:r><w:br w:type="page"/></w:r></w:p>' */
//$replacements = array(
//    'nama' => 'BARU'
//);
//$template->addPageBreak();
//$template->cloneBlock('clone', 0, true, false, $replacements);

//$template->setValues($replacements);
/*$template->cloneBlock('clone', 2);
$template->setValues([
    'nomor' => 'BARU',
    'nama' => 'BARU',
    'tanggal' => 'BARU'
],1);
$template->setValues([
    'nomor' => 'BARU1',
    'nama' => 'BARU1',
    'tanggal' => 'BARU1'
],1);*/
//$template->cloneBlock('', 2);
//$phpWord = new \PhpOffice\PhpWord\PhpWord();
//$section = $phpWord->addSection();
//$section->addText(
    //"Helooooo"
//);

//$template->setComplexBlock('nama', $phpWord);
//$section = $template->addSection();
//$section->addText('${clone}');


//header("Content-Disposition: attachment; filename=template.docx");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Documaker.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
    html, body{
        margin: 0;
        width: 100%;
        font-family: 'Poppins', sans-serif;
    }
    .pattern{
        background-color: #fff;
        opacity: 0.3;
        background-image:  radial-gradient(#8B268D 1.05px, transparent 1.05px), radial-gradient(#8B268D 1.05px, #fff 1.05px);
        background-size: 42px 42px;
        background-position: 0 0,21px 21px;
        position: fixed;
        width: 100vw;
        height: 100vh;
        top: 0;
        z-index: -1;
    }
    .container{
        margin: 50px auto;
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    .example-section{
        display: flex;
        justify-content: center;
        max-width: 400px;
        margin: 40px auto;
        flex-wrap: wrap;
    }
    .btn-purple-border{
        border: 1px solid #8B268D;
        color: #8B268D;
        padding: 2px 5px;
        text-decoration: none;
        cursor: pointer;
        margin: 2px 2px;
    }
    .btn-purple-border:hover{
        font-weight: 500;
    }
    .btn-purple-full{
        color: white;
        border-radius: 5px;
        background-color: #8B268D;
        padding: 8px 20px;
        text-decoration: none;
        cursor: pointer;
        border: none;
        font-size: 20px;
    }
    .input-section{
        display: flex;
        margin: 50px auto;
        justify-content: space-evenly;
        max-width: 80%;
        flex-wrap: wrap;
    }
    .input-section div{
        text-align: center;
    }
    .input-section div input{
        width: 90px;
    }
    .input-section div p{
        margin: 2px 0;
    }
    footer{
        background-color: #D5B1D6;
        height: fit-content;
        position: fixed;
        width: 100%;
        bottom: 0;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
    }




</style>
<body>
    <div class='pattern'></div>
    <div class="container">
        <h1>Documaker<span style="color: #8B268D;">.</span></h1>
        <div>
            <p>Membantu anda dalam membuat sertifikat dengan praktis dan instan.<br>Template berupa doc dan datalist berupa xlsx, keduanya harus memiliki variabel yang cocok</p>
        </div>
        <div class="example-section">
            <a href="" class="btn-purple-border">Tutorial</a>
            <a href="assets/document/Template.docx" class="btn-purple-border">Contoh Template</a>
            <a href="assets/document/Datalist.xlsx" class="btn-purple-border">Contoh Datalist</a>
            <!-- <a href="" class="btn-purple-border">Contoh Template 2</a>
            <a href="" class="btn-purple-border">Contoh Datalist 2</a> -->
        </div>
        <form action="function.php" method="POST" enctype="multipart/form-data">
            <div class="input-section">
                <div><p>Upload Template Anda</p><input type="file" name="template"></div>
                <div><p>Upload Datalist Anda</p><input type="file" name="datalist"></div>
            </div>
            <div>
                <input type="submit" name="submit" value="Submit" class="btn-purple-full">
            </div>
        </form>
    </div>
    <footer>
        <span>Copyright © <?= date("Y"); ?> Arya Dila.</span>
    </footer>
</body>
</html>