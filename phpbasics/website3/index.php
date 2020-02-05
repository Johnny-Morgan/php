<?php
    // Message vars
    $msg = '';
    $msgClass = '';
    
    // Check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Check required fileds
        if(!empty($name) && !empty($email) && !empty($message)){
            // Passed
            // Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // Failed
                $msg = 'Please use a valid email address';
                $msgClass = 'alert-danger';
            } else {
                // Passed
                echo 'PASSED';
            }
        } else {
            // Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" 
                value="<?php echo isset($_POST['name']) ? $name : '' ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" 
                value="<?php echo isset($_POST['email']) ? $email : '' ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control">
                    <?php echo isset($_POST['message']) ? $message : ''; ?>    
                </textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>