<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palak Mobile Shop</title>
    <link rel="icon" href="./images/icon.png">
    <meta name="theme-color" content="rgb(100, 192, 253)" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
        
        body{
            display: flex;
            overflow-x: hidden;
            flex-direction: column;
        }
        .flex
        {
            display: flex;
        }
        header img{
            margin-left: 10px;
            width: 80px;
            height: 80px;
        }
        .head-main
        {
            justify-content: space-around;
            align-items: center;
        }
        header{
            position: sticky;
            z-index: 100;
            top: 0;
            width: 100vw;
            padding: 5px 5px;
            background: rgb(100, 192, 253);
            justify-content: space-between;
            align-items: center;

        }
        nav{
            width: 30%;
            display: flex;
        }
        .menu{
            font-family: 'Work Sans', sans-serif;
            font-weight: 700;
            font-size: 1.3rem;
            color: white;
            user-select: none;
            cursor: pointer;
        }
        nav a{
            text-decoration: none;
            color: white;
        }
        .menu:hover, .active, a:hover
        {
            color: red;
        }
        .src
        {
            width: 40%;
            display: flex;
            top: 10px;
            position: relative;
            border: 2px solid white;
            border-radius: 25px;
            padding: 0px 10px;
            background-color: rgba(0, 162, 255, 0.609);
            height: 50px;
            justify-content: center;
            align-items: center;
        }
        .search
        {
            font-size: 1.4rem;
            padding: 0px 10px;
            color: white;
            outline: none;
            border: none;
            background: transparent;
            height: 40px;
            width: 100%;
        }
        .sc-icon
        {
            text-align: end;
            color: white;
            font-size: 1.5rem;
            position: relative;
        }
        .carasole-cont
        {
            width: 100vw;
            height: 500px;
            margin: 0px auto;
            overflow: hidden;
        }
        .carasole-box
        {
            width: 400vw;
            height: 100%;
            position: relative;
            animation-name: carasol;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }
        @keyframes carasol {
            0%{
                left: 0;
            }
            25%{
                left: 0;
            }
            50%{
                left: -100vw;
            }
            75%{
                left: -100vw;
            }
            100%{
                left: -200vw;
            }
            
            
        }
        
        .carasole-box img{
            width: 100vw;
            height: 100%;
        }
        .cont{
            width: 97vw;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card
        {
            margin: 5px auto;
            width: 300px;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            border-radius: 20px;
            background-color: rgba(148, 225, 255, 0.774);
        }
        .card img
        {
            background-color: white;
            width: 90%;
            transition: 0.6s;
            border-radius: 20px;
        }
        .card:hover img
        {
            width: 95%;
        }
        .card .cont-desc
        {
            display: flex;
            justify-content: space-around;
            width: 100%;
            font-size: 1.2rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: rgb(248, 42, 6);
        }
        .card-offer
        {
            color: green;
            font-size: 1.2rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        form{
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        textarea
        {
            resize: none;
            height: 100px;
        }
        .box-input input,textarea
        {
            outline: none;
            border-radius: 10px;
            border: 1px solid white;
            width: 68%;
            font-size: 1.2rem;
            color: blue;
            padding: 2px 10px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        .box-input label
        {
            width: 30%;
            text-align: end;
            color: rgba(255, 255, 255,1);
            font-size: 1.5rem;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        .box-input
        {
            margin: 5px auto;
            display: flex;
            width: 100%;
            justify-content: space-around;
            flex-direction: row;
        }
        .cont-form{
            width: 100vw;
            background-color: rgba(17, 0, 255, 0.849);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px 10px;
        }
        .form-box{
            width: 100%;
        }
        input[type="submit"]:hover
        {
            animation-name: but_anim;
            animation-duration: 1s;
            animation-direction: alternate;
            animation-iteration-count: infinite;
        }
        @keyframes but_anim {
            0%{
                filter: hue-rotate(0deg);
            }
            100%{
                filter: hue-rotate(360deg);
            }
            
        }
        ::-webkit-scrollbar {
            width: 10px;
            }
        ::-webkit-scrollbar-track {
        background: #000000;
        }

        
        ::-webkit-scrollbar-thumb {
        background: linear-gradient(black,blue,skyblue);
        border-radius: 4px;
        } 
        input[type="submit"]
        {
            outline: none;
            border: 5px solid white;
            border-radius: 30px;
            width: 20%;
            background: linear-gradient(90deg,rgb(255, 194, 81),rgb(161, 250, 18),rgb(200, 81, 255),rgb(81, 255, 197));
            font-size: 1.5rem;
            padding: 10px 20px;
            color: white;
        }
        footer
        {
            width: 100vw;
            padding: 10px 10px;
            display: flex;
            flex-direction: column;
            margin-top: 5px;
            background: rgb(0, 226, 132);
        }
        .sec h2{
            
            font-family: sans-serif;
        }
        
        .sec
        {
            display: flex;
            width: 100%;
            height: 80%;
            justify-content: space-around;
            align-items: center;
        }
        .sec ul li
        {
            list-style:none;
            margin-top: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            color: rgb(71, 0, 10);
            font-family: sans-serif;
        }
        .bottom
        {
            height: 20%;
            border-top: 2px solid gray;
            padding-top: 10px;
            align-items: baseline;
            flex-wrap: wrap;
            display: flex;
            flex-direction: row;
            font-family: sans-serif;
            width: 100%;
            justify-content: space-around;
        }
        .ham{
            width: 40px;
            height: 30px;
            cursor: pointer;
            margin-right: 15px;
            display: none;
            align-items: center;
            flex-direction: column;
            justify-content: space-around;

        }
        .ham .line{
            width: 90%;
            transition: 0.5s;
            height: 3px;
            background-color: #fff;
        }
        
        @media only screen and (max-width: 600px)
        {
            .ham
            {
                display: flex;
            }
            nav div{
                font-size: 1rem;
                padding: 20px 180px;
            }
            nav{
                right: 200%;
                transition: 0.5s;
                position: absolute;
                top: 100px;
                height: 80vh;
                background-color: rgb(148, 225, 255);
                width: 100%;
                flex-direction: column;
            }
            .carasole-cont{
                height: 250px;
            }
            .src{
                display: none;
            }
            .box-input{
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .box-input label{
                font-size: 1rem;
                width: 100%;
                text-align: start;
            }
            .box-input input{
                width: 90%;
            }
            .box-input textarea{
                width: 90%;
            }
            input[type="submit"]
            {
                font-size: 1rem;
                width: 50%;
                font-weight: 700;

            }
            .sec{
                flex-direction: column;
            }
        }
        
    </style>
</head>
<body id="home">
    <header class="flex">
        <img src="./images/icon.png">
        <div class="src">
            <input type="text" class="search">
        <i class="fas fa-search sc-icon"></i>
        </div>
        
        <nav class="head-main" id="nav">
            <a href="#home"><div class="menu active">Home</div></a>
            <a href="#gallery"><div class="menu">Gallery</div></a>
            <div class="menu">About</div>
            <a href="#contact"><div class="menu">Contact Us</div></a>
        </nav>
        <div class="ham tran" id="ham">
            <div class="line" id="l1"></div>
            <div class="line" id="l2"></div>
            <div class="line" id="l3"></div>
        </div>
    </header>
    <main >
        <div class="carasole-cont">
            <div class="carasole-box">
                <img src="./images/banner/banner1.jpg">
                <img src="./images/banner/banner2.jpg">
                <img src="./images/banner/banner3.png">
            </div>
        </div>
        <div class="cont" >
            <div class="card" id="gallery">
                <img src="./images/ph2.webp">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph1.jpeg">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph6.webp">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph3.jpeg">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph4.png">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph2.webp">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph1.jpeg">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph6.webp">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph3.jpeg">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph4.png">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph2.webp">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph3.jpeg">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph4.png">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
            <div class="card">
                <img src="./images/ph2.webp">
                <div class="cont-desc">
                    <div class="card-title">Samsung F42 5G</div>
                    <div class="card-mrp">??? 15,000</div>
                </div>                
                <div class="card-offer">50% diwali off</div>
            </div>
        </div>
        <div class="cont-form" id="contact">
            <div class="form-box">
                <form method="get">
                    <div class="box-input">
                        <label>Name</label><input type="text" required="" name="client_name">
                    </div>
                    <div class="box-input">
                        <label>Email</label><input type="email" required="" name="client_email">
                        </div>
                        <div class="box-input">
                            <label>Phone Number</label><input type="text" required="" name="client_phone" pattern="[0-9]{10,}">
                            </div>
                            <div class="box-input">
                                <label>Your Message</label><textarea name="client_message" ></textarea>
                                </div>
                <input type="submit">
            </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="sec">
            <section class="left">
                <div class="cont-left">
                   <h2>Get to Know Us</h2>
                    <ul>
                        <li>About Us</li>
                        <li>Careers</li>
                        <li>Press Releases</li>
                        <li>Gift a Smile</li>
                    </ul>
                </div>
            </section>
            <section class="right">
                <h2>Get to Know Us</h2>
                    <ul>
                        <li>About Us</li>
                        <li>Careers</li>
                        <li>Press Releases</li>
                        <li>Gift a Smile</li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="bottom">
            <div class="data">Sell on My website</div>
            <div class="data">Contact Us</div>
            <div class="data">Become an assosiate</div>
            <img src="./images/card_acp.svg">
        </div>
        
    </footer>
    <script>
        // .ham .line:nth-child(1)
        // {
        //     transform: rotate(45deg);
        // }
        // .ham .line:nth-child(3)
        // {
        //     transform: rotate(135deg);
        // }
        // .ham .line:nth-child(2)
        // {
        //     display: none;
        // }
        var open=0;
        var nav = document.getElementById('nav');
        var ham = document.getElementById('ham');
        var l1 = document.getElementById('l1');
        var l2 = document.getElementById('l2');
        var l3 = document.getElementById('l3');
        function op()
        {
            ham.style.justifyContent = "center";
                l1.style.transform= "rotate(50deg)";
                l3.style.transform= "rotate(135deg)";
                l2.style.display ="none";
                nav.style.right = 0;
                open=1;
        }
        function close()
        {
            ham.style.justifyContent = "space-around";
                l1.style.transform= "rotate(0deg)";
                l3.style.transform= "rotate(0deg)";
                l2.style.display ="block";
                nav.style.right = "200%";
                open=0;
        }
        
            
            nav.addEventListener("click",function()
            {
                close();
            });
        ham.addEventListener("click",function(){
            if(open==0)
            {
               op();
            }else{
                close();
            }
        })
        </script>
</body>
</html>
