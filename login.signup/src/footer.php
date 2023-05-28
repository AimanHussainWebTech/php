<!DOCTYPE html>
<html lang="en">
<head>
    <title>footer</title>
    <style>
        *{
            margin:0;
            padding:0;
            font:'poppins' sans-serif;
            box-sizing: border-box;
        }
        body{
            background:#eef8ff;
        }
        footer{
            width:100%;
            position:absolute;
            bottom:0;
            background: #5DBFE6;
            color: #fff;
            padding:100px 0 30px;
            border-top-left-radius:125px;
            font-size: 13px;
            line-height: 20px;

        }
        .row{
            width:85%;
            margin:auto;
            display:flex;
            flex-wrap:wrap;
            align-items:flex-start;
            justify-content:space-between;
        }
        .col{
            flex-basis: 25%;
            padding: 10px;
        }
        .logo{
            width: 70px;
            margin-bottom: 10px;
        }
        .col{
            width:fit-content;
            margin-bottom: 10px;
            position:relative;
        }
        .email-id{
            width: fit-content;
            border-bottom: 1px solid #ccc;
            margin: 20px 0;
        }
        ul li{
            list-style:none;
            margin:
        }
        ul li a{
            text-decoration: none;
            color: #fff;
        }



    </style>






</head>
<body>
   <footer>
    <div class="row">
        <div class="col">
            <img src="flogo2.jpg" class="logo">
            <p>Vaccines protect us from serious diseases and some can also help contain the spread
            of disease,saving around 2-3 million lives every year. Many of us receive these vaccines,
             for diseases such as measles, meningitis and pneumonia, as routine childhood immunisations.
             <p> 
    </div>
    <div class="col">
        <h3>Hospitals<h3>
        <p>Safi</p>
        <p>Imam Clinic</p>
        <p> Haleem</p>
        <p> Ziadudin</p>
        <p class="email-id"> hospital123@gmail.com</p>
        <h4>+92 - 0120987276</h4>
    </div>
    <div class="col">
        <h3>Links</h3>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Login</a></li>
    </div>
    <div class="col">
        <h3>Newsletter</h3>
        <from>
            <input type="email" placeholder="Enter your email id"required>
    </div>
   </footer> 
    
</body>
</html>