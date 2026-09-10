<?php

/*
 // Detect Mobile Device
function isMobile() {
    return preg_match(
        "/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos|iphone|ipad|ipod)/i",
        $_SERVER['HTTP_USER_AGENT']
    );
}

// PC / Laptop = Show 403 Forbidden
if (!isMobile()) {
    http_response_code(403);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>403 Forbidden</title>
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
                font-family:Arial, Helvetica, sans-serif;
            }
            body{
                display:flex;
                justify-content:center;
                align-items:center;
                height:100vh;
                background:#fff;
                color:#333;
            }
            .box{
                text-align:center;
            }
            h1{
                font-size:140px;
                font-weight:bold;
            }
            h2{
                font-size:60px;
                margin:10px 0;
            }
            p{
                font-size:24px;
                color:#666;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1>403</h1>
            <h2>Forbidden</h2>
            <p>Access to this resource on the server is denied!</p>
        </div>
    </body>
    </html>
    <?php
    exit();
}
*/

// Continue normally for ALL devices
$redirect = "shop.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Welcome</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}
body{
    background:#ececec;
    display:flex;
    justify-content:center;
    align-items:flex-start;
    min-height:100vh;
    padding:15px;
}
.container{
    width:100%;
    max-width:430px;
    background:#fff;
    border-radius:25px;
    padding:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.1);
}
h1{
    text-align:center;
    font-size:32px;
    font-weight:800;
    margin-bottom:15px;
}
.card{
    background:#fff;
    border-radius:20px;
    padding:15px;
    box-shadow:0 4px 10px rgba(0,0,0,.05);
    border:1px solid #f0f0f0;
}
.image-box{
    background:#f8f8f8;
    padding:15px;
    border-radius:15px;
    text-align:center;
}
.image-box img{
    width:100%;
    max-width:200px;
}
.title{
    font-size:18px;
    font-weight:600;
    margin-top:15px;
    color:#333;
    line-height:1.4;
}
.rating{
    margin-top:10px;
    display:flex;
    align-items:center;
}
.badge{
    background:#388e3c;
    color:#fff;
    padding:2px 8px;
    border-radius:4px;
    font-size:12px;
}
.review{
    margin-left:8px;
    color:#777;
}
.price{
    margin-top:12px;
    display:flex;
    align-items:center;
}
.new{
    font-size:28px;
    font-weight:700;
}
.old{
    margin-left:10px;
    text-decoration:line-through;
    color:#888;
}
.off{
    margin-left:10px;
    color:green;
    font-weight:700;
}
.btn{
    display:block;
    margin-top:20px;
    background:#ff6400;
    color:#fff;
    text-decoration:none;
    text-align:center;
    padding:15px;
    border-radius:10px;
    font-size:18px;
    font-weight:700;
}
.footer{
    margin-top:20px;
    text-align:center;
}
.footer img{
    height:20px;
    vertical-align:middle;
}
</style>

</head>

<body>

<div class="container">

<h1>WELCOME</h1>

<div class="card">

<div class="image-box">
<img src="product.jpg" alt="Product">
</div>

<div class="title">
Premium 4KG Mix Dry Fruits Combo – Almonds, Cashews, Pistachios & Kishmish (1kg Each)
</div>

<div class="rating">
<span class="badge">4.4 ★</span>
<span class="review">(4320 Ratings)</span>
</div>

<div class="price">
<span class="new">₹199</span>
<span class="old">₹5,999</span>
<span class="off">97% OFF</span>
</div>

</div>

<a class="btn" href="<?php echo $redirect; ?>">
🛒 Continue to Shopping
</a>

<div class="footer">
🔒 Secure Payment |
<img src="razorpay.png" alt="Razorpay">
</div>

</div>

</body>
</html>
