<?php
/***
 * Used in combination with .htaccess rules to redirect
 * slurpathon.com/incentives and /donate to the correct destinations.
 */
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

if(isset($_GET['id'])) {
    $dest = "";

    switch ($_GET['id']) {
        case "incentives":
            $dest = "https://docs.google.com/spreadsheets/d/1pDJTyiVmbFP2KtP4wZsLYeGht_Z1KMf3klj_wfiBu8k/edit?usp=sharing";
        break;

        case "donate":
        default:
            $dest = "https://www.extra-life.org/index.cfm?fuseaction=donorDrive.team&teamID=56839";
        break;
    }

    Redirect($dest);
}
?>