<?php

    include('phpqrcode/qrlib.php');
    

    // how to save PNG file to server
    
    $qrDir = 'qrcodes/';

    //contents can be texts or websites
    $codeContents = 'Gamestop.com';
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = '005_file_'.md5($codeContents).'.png';
    
    $pngAbsoluteFilePath = $qrDir.$fileName;
    $urlRelativeFilePath = $qrDir.$fileName;
    
    // generating qr code
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath);
        echo 'File generated!';
        echo '<hr />';
    } else {
        echo 'File already generated!';
        echo '<hr />';
    }
    
    echo 'Server PNG File: '.$pngAbsoluteFilePath;
    echo '<hr />';
    
    // displaying qr code
    echo '<img src="'.$urlRelativeFilePath.'" />';
?>