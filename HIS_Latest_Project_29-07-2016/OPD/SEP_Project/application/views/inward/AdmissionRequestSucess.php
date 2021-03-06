<?php
/*
------------------------------------------------------------------------------------------------------------------------
DiPMIMS - Digital Pulz Medical Information Management System
Copyright (c) 2017 Sri Lanka Institute of Information Technology
<http: http://his.sliit.lk />
------------------------------------------------------------------------------------------------------------------------
*/
?>
<?php if ($status == "sucess") {
    ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">
            &times;
        </a>

        <strong><span class="glyphicon glyphicon-ok"></span>   Patient Ward Admission Requested Successfully..! </strong>
    </div>
    <?php
} elseif ($status == "fail") {
    ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">
            &times;
        </a>

        <strong><span class="glyphicon glyphicon-ok"></span>   Patient Ward Admission Requested Not Successfully..! </strong>
    </div>
    <?php
}
?>