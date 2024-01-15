 <?php include './include/header.php' ?>
 <?php include './include/connection.php' ?>

<!-- Register -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    // Retrieve user input from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retype_password = $_POST['retype_password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Check if password and retype password match
    if ($password !== $retype_password) {
        // Passwords do not match, handle the error as per your requirement
        die("Passwords do not match");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $query = "INSERT INTO users (name, email, password, address, phone, role) VALUES ('$name', '$email', '$hashed_password', '$address', '$phone', 'user')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Registration successful, display registration complete pop-up
        echo "<script>alert('Registration complete!');</script>";
        echo "<script>window.location.href = 'sign-up.php';</script>";

    } else {
        // Error occurred during registration, handle the error as per your requirement
        die("Registration failed: " . mysqli_error($conn));
    }
}
?>

<!-- Login -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Retrieve user input from the form
    $userEmail = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $query = "SELECT * FROM users WHERE email = '$userEmail'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, perform the login process (e.g., set session variables)
            // ...

            $userName = $row['name'];
            $userRole = $row['role'];
            $userId = $row['id'];
            
            $_SESSION['userName'] = $userName;
            $_SESSION['user'] = $userEmail;
            $_SESSION['userRoll'] = $userRole;

            // Check if "Remember Me" checkbox is checked
            if (isset($_POST['remember_me'])) {
                // Set a long-lived cookie to remember the user (e.g., for 30 days)
                $expiry = time() + 30 * 24 * 60 * 60; // 30 days
                setcookie('remember_user', $userEmail, $expiry);
            }

            // Check the user's role and redirect accordingly
            if ($userRole === 'admin') {
                // Redirect admins to the admin dashboard
                echo "<script>window.location.href = 'admin/';</script>";
                exit();
            } else {
                // Redirect other users to the index.php or any other page as per your requirement
                echo "<script>window.location.href = 'index.php?userId=$userId';</script>";
                exit();
            }
        } else {
            // Invalid password, handle the error as per your requirement
            echo "Invalid password.";
        }
    } else {
        // User does not exist or invalid credentials, handle the error as per your requirement
        echo "Invalid username or password.";
    }
}

?>


<!-- Login -->





    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Login</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Login</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer-login">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                        <h3>login</h3>
                        <form action="#" method="POST">
                            <div class="default-form-box">
                                <label>Email <span>*</span></label>
                                <input type="email" name="email">
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password">
                            </div>
                            <div class="login_submit">
                            <button class="btn btn-md btn-black-default-hover mb-4" type="submit" name="login">Login</button>
                                <label class="checkbox-default mb-4" for="remember_me">
                                    <input type="checkbox" id="remember_me" name="remember_me">
                                    <span>Remember me</span>
                                </label>
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                        <h3>Register</h3>
                        <form action="#"  id="registration-form" method="POST">
                            <div class="default-form-box">
                                <label>Name <span>*</span></label>
                                <input type="text" name="name">
                            </div>
                            <div class="default-form-box">
                                <label>Email address <span>*</span></label>
                                <input type="text" name="email">
                            </div>
                            <div class="default-form-box">
                                <label>Password <span>*</span></label>
                                <input type="password" name="password">
                            </div>
                            <div class="default-form-box">
                                <label>Retype Password <span>*</span></label>
                                <input type="password" name="retype_password">
                            </div>
                            <div class="default-form-box">
                                <label>Address <span>*</span></label>
                                <input type="text" name="address">
                            </div>
                            <div class="default-form-box">
                                <label>Phone <span>*</span></label>
                                <input type="text" name="phone">
                            </div>
                            <div class="login_submit">
                            <button class="btn btn-md btn-black-default-hover" type="submit" name="register">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->

    <script>
        var form = document.getElementById('registration-form');
        form.addEventListener('submit', function(event) {
            var password = form.elements['password'].value;
            var retypePassword = form.elements['retype_password'].value;
            var email = form.elements['email'].value;

            if (password !== retypePassword) {
                event.preventDefault(); // Prevent form submission
                alert("The 'Password' and 'Retype Password' fields do not match.");
            }

            if (!isValidEmail(email)) {
                event.preventDefault(); // Prevent form submission
                alert("Please enter a valid email address.");
            }
        });

        function isValidEmail(email) {
            // Regular expression for email validation
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
    </script>

  <?php include './include/footer.php' ?>