<style>
    /* General Body Settings */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Header */
.signin-header {
    background-color: #ffffff;
    padding: 20px 0;
    border-bottom: 1px solid #eee;
}

.site-logo img {
    max-height: 50px; /* Adjust based on your logo's original size */
}

.singin-header-btn {
    text-align: right;
    padding-right: 30px;
}

.singin-header-btn p {
    margin: 0;
    display: inline-block;
    padding-right: 10px;
}

.sign-up-btn {
    background-color: #e91e63;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
}

/* Signin Banner */
.axil-signin-banner {
    background-color: #fff0f3;
    padding: 50px 30px;
    text-align: center;
}

.bg_image--10 {
    background-image: url('path/to/your/background-image.jpg');
    background-size: cover;
    background-position: center;
}

/* Form styling */
.axil-signin-form-wrap {
    padding: 50px;
    background-color: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.axil-signin-form h3 {
    color: #333;
}

.b2 {
    font-size: 14px;
    color: #666;
}

.form-group label {
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-btn {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #45a049;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .singin-header-btn {
        text-align: center;
        padding: 20px 0;
    }

    .axil-signin-banner, .axil-signin-form-wrap {
        margin-bottom: 20px;
    }
}
/* Banner Section with Image */
.axil-signin-banner {
    background-color: #fff0f3;
    padding: 30px;
    text-align: center;
    margin-bottom: 20px; /* Adds space between the banner and the image */
    border-radius: 8px; /* Optional: Rounds the corners of the banner */
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Adds a subtle shadow */
}

.bg_image--9 {
    background-image: url('path/to/your/other-background-image.jpg');
    background-size: cover;
    background-position: center;
    height: 200px; /* Set a fixed height, or adjust as needed */
}

/* Image below banner */
.col-xl-4 img {
    width: 100%; /* Makes the image take up the full width of its container */
    display: block; /* Removes any inline characteristics */
    margin-top: 20px; /* Adds space above the image */
    border-radius: 8px; /* Rounds the corners of the image */
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Adds a subtle shadow to lift the image off the page */
    height: 700px;
}

/* Banner Section with Image */
.axil-signin-banner {
    background-color: #fff0f3;
    padding: 30px;
    text-align: center;
    margin-bottom: 20px; /* Adds space between the banner and the image */
    border-radius: 8px; /* Optional: Rounds the corners of the banner */
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Adds a subtle shadow */
}

.bg_image--9 {
    background-image: url('path/to/your/other-background-image.jpg');
    background-size: cover;
    background-position: center;
    height: 200px; /* Set a fixed height, or adjust as needed */
}

/* Image below banner */
.col-xl-4 img {
    width: 100%; /* Makes the image take up the full width of its container */
    display: block; /* Removes any inline characteristics */
    margin-top: 20px; /* Adds space above the image */
    border-radius: 8px; /* Rounds the corners of the image */
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Adds a subtle shadow to lift the image off the page */
    height: 700px;
}

</style>
<body>
    <!-- Start Header -->
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <a href="index.php" class="site-logo"><img src="img/logo/logo2.png" alt="logo"></a>
            </div>
            <div class="col-md-6">
                <div class="singin-header-btn">
                    <p>Already a member?</p>
                    <a href="index.php?act=dangnhap1" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--10">
                <h3 class="title">We Offer the Best Products</h3>
                <img src="img/logodangnhap.jpg" alt="" >
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">I'm New Here</h3>
                    <p class="b2 mb--55">Enter your detail below</p>
                    <form class="singin-form" action="index.php?act=dangky" method="POST">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Pass Word</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="hoten">
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input type="date" class="form-control" name="ngaysinh">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" >
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="diachi">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="axil-btn btn-bg-primary submit-btn" name="submit" value="Create Account">
                            <input type="reset" class="axil-btn btn-bg-primary submit-btn" name="submit" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>