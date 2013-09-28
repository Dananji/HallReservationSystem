<?php

include_once '../Lib/Database.php';

//    $dateString = $date['year'] . '-' . $date['month'] . '-' . $date['day'];
$date = date("Y-m-d");
$mod_date = strtotime($date . "+ 2days");
$newDate = date("m/d/Y", $mod_date);

$sql = "SELECT * FROM reservation WHERE date ='$newDate'";
$query = $this->db->prepare();
$query->execute();
$result = $query->fetchAll();
$this->set('results', $result);
$num_rows = mysql_num_rows($result);

if ($num_rows >= 1) {
    while ($row = mysql_fetch_array($query)) {
        $ID = $row["rID"];
        $uID = $row["uID"];
        $reserve_date = $row["date"];
        $begin_time = $row["begin_time"];
        $begin_meri = $row["begin_meridiem"];
        $end_time = $row["end_time"];
        $end_meri = $row["end_meridiem"];
        $hID = $row["hID"];
        $description = $row["description"];

        $mid = mysql_insert_id();
        $search_output .= "<ul>
                <li>
                    <h4>" . $schedule_title . "</h4>
                    <p><b>Time: " . $meeting_datetime . "</b></p>
                    <p>People/Persons involved: " . $contacts_involved . "</p>
                    <p>Meeting Occurred?: " . $meeting_occurred . "</p>
                    <a href='uniqueMeeting.php?ID=" . $ID . "'>View more details of this meeting</a>
                    <p><a href='editschedulePage.php?mid=$ID'>Edit This Meeting</a></p>
                    <p><a href='scheduleList.php?deleteid=$ID'>Delete this meeting</a></p>
                </li><br/>                  
            </ul>";

        $sendMail = true;
    }
}

if ($sendMail) {
    $admin = "SELECT * FROM admin";
    $queryAdmin = mysql_query($admin) or die(mysql_error());
    $adminCount = mysql_num_rows($queryAdmin);
    $recipients = array();
    if ($count >= 1) {
        while ($row = mysql_fetch_array($queryAdmin)) {

            $subject = 'A-CRM; UpComing Activities';
            $msg = $search_output;
            $to = $row['email_address'];
            mail($to, $subject, $msg);
        }
    }
}
?>