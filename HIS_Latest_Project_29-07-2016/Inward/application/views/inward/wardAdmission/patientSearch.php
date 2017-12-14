<?php
function findage($dob) {
    $localtime = getdate();
    $today = $localtime['mday'] . "-" . $localtime['mon'] . "-" . $localtime['year'];
    $dob_a = explode("-", $dob);
    $today_a = explode("-", $today);
    $dob_d = $dob_a[0];
    $dob_m = $dob_a[1];
    $dob_y = $dob_a[2];
    $today_d = $today_a[0];
    $today_m = $today_a[1];
    $today_y = $today_a[2];
    $years = $today_y - $dob_y;
    $months = $today_m - $dob_m;
    if ($today_m . $today_d < $dob_m . $dob_d) {
        $years--;
        $months = 12 + $today_m - $dob_m;
    }

    if ($today_d < $dob_d) {
        $months--;
    }

    $firstMonths = array(1, 3, 5, 7, 8, 10, 12);
    $secondMonths = array(4, 6, 9, 11);
    $thirdMonths = array(2);

    if ($today_m - $dob_m == 1) {
        if (in_array($dob_m, $firstMonths)) {
            array_push($firstMonths, 0);
        } elseif (in_array($dob_m, $secondMonths)) {
            array_push($secondMonths, 0);
        } elseif (in_array($dob_m, $thirdMonths)) {
            array_push($thirdMonths, 0);
        }
    }
    echo "~$years years $months months";
}
?>
<br/>

            <div class="panel panel-primary">
                <div class="panel-heading" style="height: 50px;">
                    <h4>
                        <b>
                            <?php
                            $oridate = date("d-m-Y ", $patients->patientDateOfBirth / 1000);
                            echo "$patients->patientTitle $patients->patientFullName / $patients->patientGender / $patients->patientCivilStatus /";
                            findage(date("d-m-Y", strtotime($oridate)));
                            ?><span style="padding:0 80px; " ></span>
                            <?php echo "Patient ID : $patients->patientID "; ?><span style="padding:0 20px; " ></span>
                            <?php echo "DOB : $oridate "; ?>
                        </b>
                    </h4>
                </div>
            </div>


            

      


 