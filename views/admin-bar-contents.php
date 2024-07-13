<?php
$image_url = plugins_url('../assets/images/faddon.jpg', __FILE__);
?>

<div class="fluent-plus-addon-container">

    <div class="fluent-plus-addon-wrapper">

        <div class="fluent-plus-addon-title">
            <h3> Quick Dashboard for Fluent Plugins </h3>
        </div>

        <div class="fluent-plus-addon-content-wrapper">

            <div class="fluent-plus-left-sidebar">
                <ul>
                    <li id="fluent_crm_op"> FluentCRM </li>
                    <li id="fluent_form_op"> Fluent Forms </li>
                    <li id="fluent_booking_op"> Fluent Booking </li>
                    <li id="fluent_support_op"> Fluent Support </li>
                </ul>
            </div>

            <div class="fluent-plus-right-sidebar">

            </div>

        </div>

        <div class="fluent-plus-addon-footer">
            <img src="<?php echo esc_url($image_url) ?>" alt="Fluent + Addon">
        </div>

    </div>

</div>