<?php

if (isset($_GET['section'])) {
    $section = $_GET['section'];
    global $fluent_crm_contents;

    switch ($section) {
        case 'fluent_crm_op':
            include "../components/fluent-crm-components.php";
            break;
        case 'fluent_form_op':
            echo '
                <h3>Quick Dashboard for <span id="dn_fa"> ... </span></h3>
            ';
            break;
        case 'fluent_booking_op':
            echo '
                <h3>Quick Dashboard for <span id="dn_fa"> ... </span></h3>
            ';
            break;
        case 'fluent_support_op':
            echo '
                <h3>Quick Dashboard for <span id="dn_fa"> ... </span></h3>
            ';
            break;
        default:
            echo 'Unknown section';
    }
}