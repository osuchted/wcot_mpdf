<?php
  require_once __DIR__ . '/../mpdf/vendor/autoload.php';
  $mpdf = new \Mpdf\Mpdf();
    //Define a PHP variable with mPDF page number, date and some text
        $footertext='Page - {PAGENO} - {DATE j-m-Y} - Wamazoola Forms';
    //Get the location of the external style sheet
        $stylesheet = file_get_contents('styles.css');
    //Get the location of the HTML file
       $html = file_get_contents('page.php');
    //Set the Title, Author and Subject properties
       $mpdf->SetTitle('mPDF 3 Doc Example');
       $mpdf->SetAuthor('GL');
       $mpdf->SetSubject('Starter mPDF Example');
	$mpdf->SetKeywords('mpdf, html, css');
    //Set the display magnification
       $mpdf->SetDisplayMode(75);
    //Apply a Watermark
       $mpdf->SetWatermarkText('PREVIEW ONLY');
       $mpdf->showWatermarkText = true;
    //Create bookmarks from the HTML tags and apply a hierarchy
       $mpdf->h2bookmarks = array('H1'=>0, 'H2'=>1, 'H3'=>2);
    //Apply the footer
        $mpdf->SetFooter($footertext);
        $mpdf->WriteHTML($stylesheet,1);
        $mpdf->WriteHTML($html);
    //$mpdf->WriteHTML('<h1>Hello world!</h1>');
       $mpdf->Output(); 
        exit;

