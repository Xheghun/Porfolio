<?php 
    include_once '../UploadPanel/includes/sessions.php';
    $submit = filter_input(INPUT_POST, "submit");
    
    if(isset($submit)) {
        $name = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "email");
        $subject = filter_input(INPUT_POST, "subject");
        $message = filter_input(INPUT_POST, "message");
        
        $string = "Location: ../index.php";
        if(empty($name)) {
            $_SESSION["error"] = "name required";
            header($string);
            exit();
        }elseif (empty($email)) {
            $_SESSION["error"] = "email required";
            header($string);
            exit();
        }elseif (empty($subject)) {
            $_SESSION["error"] = "subject required";
            header($string);
            exit();
        }elseif (empty($message)) {
            $_SESSION["error"] = "message required";
            header($string);
            exit();
        } else {
            $time = time();
          
            $f_time = strftime("%B-%d-%Y %H:%M:%S",$time);
            $con = mysqli_connect("localhost", "root", "", "portfolio");
            $sql = "INSERT INTO contacts(name,email,subject,message,time_added)"
                    . "VALUES('$name','$email','$subject','$message','$f_time')";
            $query = mysqli_query($con, $sql);
            if ($query) {
                $_SESSION["success"] = "message sent";
                header($string);
                exit();
            } else {
                $_SESSION["error"] = "Oops, Something went wrong"
                        . "try again later";
                header($string);
                exit();
            }
        }
    }