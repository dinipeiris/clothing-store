<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bloom &amp; Blossom</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="Resources\logo.jpg" />

</head>

<body class="main-body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <div class="col-12">
                <div class="row">
                    <h1 class="display-1 text-center logo">Bloom &amp; Blossom</h1> <hr>
                </div>
                <!-- <div class="row">
                    <span class="text-center welcome">Welcome Back!!!</span>
                </div> -->
            </div>

            <div class="card col-10 col-md-8 col-lg-6 mx-auto shadow-lg" id="logInBox">
                <div class="card-body">
                    <div class="card-title text-center log">Log In</div>
                    <div class="card-text">
                        <div class="col-12 form-floating my-3">
                            <input type="text" class="form-control" placeholder="E-mail Address">
                            <label for="email" class="form-label text">E-mail Address</label>
                        </div>
                        <div class="col-12 form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Password">
                            <label for="pw" class="form-label text">Password</label>
                        </div>

                        <div class="row my-3">

                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="link-primary">Forgot Password?</a>
                            </div>
                        </div>

                        <div class="col-12 d-grid my-2">
                            <button class="btn button1">Log In</button>
                        </div>
                        <div class="col-12 d-grid my-3">
                            <button class="btn button2" onclick="changeView();">New here? Register</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card col-11 col-md-10 mx-auto shadow-lg d-none" id="signUpBox">
                <div class="card-body">
                    <div class="card-title text-center log">Log In</div>
                    <div class="card-text">

                        <div class="row">
                            <div class="col-12 col-lg-6 form-floating my-3">
                                <input type="text" class="form-control" placeholder="First Name">
                                <label for="fname" class="form-label px-4">First Name</label>
                            </div>

                            <div class="col-12 col-lg-6 form-floating my-3">
                                <input type="text" class="form-control" placeholder="Last Name">
                                <label for="lname" class="form-label px-4">Last Name</label>
                            </div>
                        </div>

                        <div class="col-12 form-floating mb-3">
                            <input type="text" class="form-control" placeholder="E-mail Address">
                            <label for="email" class="form-label">E-mail Address</label>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6 form-floating mb-3">
                                <input type="password" class="form-control" placeholder="Password">
                                <label for="pw" class="form-label px-4">Password</label>
                            </div>

                            <div class="col-12 col-lg-6 form-floating mb-3">
                                <input type="password" class="form-control" placeholder="Re-type Password">
                                <label for="rpw" class="form-label px-4">Re-type Password</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6 form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Mobile Number">
                                <label for="mobile" class="form-label px-4">Mobile Number</label>
                            </div>

                            <div class="col-12 col-lg-6 form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Province">
                                <label for="province" class="form-label px-4">Province</label>
                            </div>
                        </div>

                        <div class="col-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rules">
                                <label class="form-check-label">I have read and understand the <a href="#"> privacy and cookies policy.</a></label>
                            </div>
                        </div>

                        <div class="col-10 d-grid my-3 mx-auto">
                            <button class="btn button3">Register</button>
                        </div>

                        <div class="col-10 d-grid my-3 mx-auto">
                            <button class="btn button2" onclick="changeView();">Already have an acount? Log In</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>



    
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    
</body>