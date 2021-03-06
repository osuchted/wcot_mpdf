<?php
        //==============================================================
        $html = '
        <h1>We Code On Tuesday</h1>
        <p>Using mPDF to create PDF from HTML Content</p>
        
        <h2>mPDF Software</h2>
        <p>mPDF is a PHP library for generating PDF documents. It can be downloaded at: https://github.com/mpdf/mpdf</p>
        
        <h2>mPDF Documentation</h2>
        <p>Extensive documentation can be viewed at: https://mpdf.github.io/ and example files at : https://github.com/mpdf/mpdf-examples</p>
        
        <h3>Contact Details</h3>
        
        <p>e: ted@osuch.com</p> 
        ';
        
        //==============================================================
        require_once __DIR__ . '/../mpdf/vendor/autoload.php';
        
        $mpdf = new \Mpdf\Mpdf();
         
        $mpdf->WriteHTML($html);
        
        $mpdf->Output();
        
        exit;
        //==============================================================
        
?>