<?php

global $wpdb;

$table_name = $wpdb->prefix . 'fc_subscribers';
$query = $wpdb->prepare(
    "SELECT COUNT(*) FROM " . $table_name . " WHERE status=%s",
    "subscribed"
);
$totalActiveSubscriber = $wpdb->get_var($query);
echo $totalActiveSubscriber;


?>

<h3>Quick Dashboard for <span id="dn_fa"> ... </span></h3>
<div class="fluent-plus-crm-contents">
    <div class="fluent-crm-cards">
        <span> Active Contacts </span>
        <span class="dn-fa-count">  <?php echo $totalActiveSubscriber ?> </span>
    </div>
    <div class="fluent-crm-cards">
        <span> Active Companies </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> Active Lists </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> Active Tags </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> Active Dynamic Segments </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> All Campaigns </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> All Recurring Campaign </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> All Email Sequences </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> All Email Templates </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> All Email Sent </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> Active Fluent Forms </span>
        <span class="dn-fa-count"> 3</span>
    </div>
    <div class="fluent-crm-cards">
        <span> All Automation </span>
        <span class="dn-fa-count"> 3</span>
    </div>
</div>