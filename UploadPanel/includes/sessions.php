<?php
session_start();

function success() {
    if (isset($_SESSION["success"])) {
        $message = "<div class=\"alert alert-success\" role=\"alert\">
                        <h4 class=\"alert-heading\">Success</h4>
                        <p>";
        $message .= htmlentities($_SESSION["success"]);
        $message .= "</p>
                        <hr>
                        <p class=\"mb-0\">Check Home Page For Result(s)</p>
                    </div>";
        $_SESSION["success"] = null;
        return  $message;
    }
}
function error() {
    if (isset($_SESSION["error"])) {
        $message = "<div class=\"alert alert-danger\" role=\"alert\">
                        <h4 class=\"alert-heading\">Error</h4>
                        <p>";
        $message .= htmlentities($_SESSION["error"]);
        $message .= "</p>
                    </div>";
        $_SESSION["error"] = null;
        return  $message;
    }
}