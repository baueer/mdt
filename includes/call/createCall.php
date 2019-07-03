<?php
    session_start();
    $_SESSION['activeCall'] = 1;

    $c_type = $_GET['call_type'];
    $c_sus = $_GET['call_suspect'];
    $c_veh = $_GET['call_veh'];
    $c_loc = $_GET['call_location'];
    $c_tit = $_GET['call_title'];
    $c_desc = $_GET['call_descr'];
    $c_rDate = date('Y-m-d G:i:s');
    $resp_ofc = 1;

    $_SESSION['c_type'] = $c_type;
    $_SESSION['c_sus'] = $c_sus;
    $_SESSION['c_veh'] = $c_veh;
    $_SESSION['c_loc'] = $c_loc;
    $_SESSION['c_tit'] = $c_tit;
    $_SESSION['c_desc'] = $c_desc;
    $_SESSION['writtenReport'] = 0;

    include_once '../db/db.php';

    $sql_stmt = "INSERT INTO calls (roll_time, type,      suspect,  vehicle,  location, title,     descr,    resp_ofc,    active)
                VALUES (           '$c_rDate', '$c_type', '$c_sus', '$c_veh', '$c_loc', '$c_tit', '$c_desc', '$resp_ofc', '1');";

    if ($conn->query($sql_stmt) === TRUE) {
        $_SESSION['activeCall'] = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $active_call = $_SESSION['activeCall'];
    
    $sql_stmt2 = "INSERT INTO persons (name, rep_history, active_call_id)
                    VALUES ('$c_sus', '', '$active_call')
                    ON DUPLICATE KEY UPDATE active_call_id = '$active_call'";

    if ($conn->query($sql_stmt2) === TRUE) {
        //cacat
    } else {
        die('err');
    }
    $conn->close();

    header('location: http://localhost/mobile-data-terminal/dashboard');