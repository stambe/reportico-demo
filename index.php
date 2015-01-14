<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Reportico Demo</title>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .9em;
        color: #000000;
        background-color: #FFFFFF;
        margin: 0;
        padding: 10px 20px 20px 20px;
    }
</style>
<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<script type="text/javascript">var BASE_ROOT = 'http://localhost/reportico-demo/reportico'; </script>
</head>

<body>
    <p><img src="../MAMP-PRO-Logo.png" id="logo" alt="MAMP PRO Logo" width="250" height="49" /></p>
    <?php
        
        require_once($_SERVER["DOCUMENT_ROOT"].'/reportico-demo/reportico/reportico.php');
        $a = new reportico();
        $a->embedded_report = true;
        $a->forward_url_get_parameters = "x1=y1&x2=y2"; 
        $a->execute();
    ?>

    <script type="text/javascript">
        var query = "reportico_session_name=bd896b3cb5fcb74ad7386c04eb1ef661_&admin_password=123&login=1&reportico_ajax_called=1";
        $.ajax({
                type: "POST",
                url: BASE_ROOT + "/run.php",
                data: query,
                success: function(response){
                    $("#reportico_container").html(response);
                }
            });
    </script>
</body>
</html>