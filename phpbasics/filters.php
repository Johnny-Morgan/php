<?php 
    Check for posted data
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found';
    } else{
        echo 'No Data';
    }

    // FILTER_VALIDATE_EMAIL
    if(filter_has_var(INPUT_POST, 'data')){
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    }

    // FILTER_SANITIZE_EMAIL
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];
        // Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    }

    // FILTER_VALIDATE_INT
    $var = 42;
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var.' is a number';
    } else {
        echo $var.' is not a number';
    }
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>