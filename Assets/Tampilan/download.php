<?php 
    if (isset($_GET['filename'])) {
    $rilis_kegiatan   = $_GET['filename'];

    $backdir    ="storage/";
    $file =$backdir.$_GET['filename'];
     
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            
            exit;
        } 
        else {
            $_SESSION['pesan'] = "Oops! File - $rilis_kegaitan - not found ...";
            header("location:../kegiatan.php");
        }
    }
?>