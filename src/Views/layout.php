<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            background:linear-gradient(to bottom left, rgba(213, 225, 235, 0.53),  rgba(223, 233, 234, 0.4));
        }
        .display-5{
            font-size: 1.3pc;
            font-weight: 200;
            color:grey;
        }

        .container{
            margin:2% 10%;
        }
        .container-fluid{
            margin: 2% 5%;
        }

        .lead{
            font-size: 20px;
            font-weight: 300;
            color:rgba(0, 0, 0, 0.45);
        }
        .navbar{
            width: 100%;
            padding:10px 30px;
            color:black;
            display: flex;
        }
        .justify-navbar{
            flex-grow: 2;
        }
        .navbar-brand{
            font-size: 2pc;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        .navbar nav{
            position: relative;
            flex-grow: 3;
        }
        .nav{
            list-style: none;
            flex-grow: 1;
            position: absolute;
            right:10px;
            display: flex;
        }
        .custom-bar{
            display: none;
            position: absolute;
            cursor: pointer;
            right:10px;
            font-size: 25px;
            text-align: center;
            width: 30px;
            height: 30px;
            z-index:10000;
            background-color: rgb(120, 210, 190);
            opacity: 0.8;
            font-weight: 200;
            color: white;
            border-radius: 50%;
            transition: all linear 0.1s;
        }
        .hidden-nav{
            display: none;
        }
        .res-nav{
            display: none;
            list-style: none;
            background-color: rgba(0, 0, 0, 0.05);
            padding: 11px;
            line-height: 2rem;
            position: absolute;
            top:10px;
            right: 14px;
            animation: drop 300ms ease-in-out 1;
        }
        .custom-bar:hover{
            background-color: rgb(120, 250, 190);
        }
        .custom-bar:active{
            background-color:rgb(120, 210, 190) ;
            animation:disappear 0.56s linear 1;
        }
        .t-center{
            text-align: center;
        }
        .form-control{
            width:70%;
            padding: 10px;
        }
        .form-group{
            margin:20px 0;
        }
        .form-body{
            
        }
        .bg-sweet{
            padding: 2rem;
            line-height: 3rem;
            text-align: end;
            box-shadow: 10px 10px 60px rgba(0, 0, 0, 0.35);
            background:linear-gradient(to left, rgb(202, 200, 100) 20%, rgb(212, 220, 100) 30%, rgb(221, 240, 100) 60%);
            opacity: 0.7;
        }
        .nav-item{
            font-family:Georgia, 'Times New Roman', Times, serif;
            font-size: 18px;
            font-weight: 500;
            margin: 0 22px;
        }
        .nav-item > a{
            text-decoration: none;
            color:rgba(0, 0, 0, 0.78);
        }
        .cs-1{
            font-family: sans-serif;
            font-size:3pc;
            font-weight: 100;
        }

        .form-box{
            padding: 20px;
            border: 3px solid rgb(221, 240, 150);
            box-shadow: 10px 10px 40px rgba(0,0,0,0.23);
        }

        .post-title{
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size:30px;
            font-weight: 200;
            margin: 2px;
        }
        .box{
            list-style: none;
            padding:15px;
            margin:50px;
            width:80%;
            box-shadow:10px 10px 40px rgba(0, 0, 0, 0.15);
        }
        .cs-2{
            font-size:17px;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 100;
            opacity: 0.9;
        }
        .text-s1{
            background: linear-gradient(to left, rgba(0,0,0,0.2), rgba(0,0,0,0.5), rgba(0,0,0,0.8));
            -webkit-background-clip:text;
            -webkit-text-fill-color: transparent;
        }
        .page-title{
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size:3pc;
            font-weight: 200;
            margin: 2px;   
        }
        .centered{
            min-height:80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cs-3{
            font-size:37px;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 100;
            opacity: 0.8;
        }
        .btn{
            padding: 10px;
            text-decoration: none;
            color: whitesmoke;
            border: none;
            cursor: pointer;

        }

        .btn-primary{
            background-color: rgba(221, 240, 120, 0.7);
            color:rgba(0,0,0,0.5);
            transition: all ease-in 0.3s;
        }

        .btn-primary:hover{
            background-color: rgba(221, 250, 80, 0.9);
        }
        .form-control{
            padding: 5px;
            background-color:rgba(0,0,0,0.3);
            font-size: 12px;
            border: none;
            z-index: -11111;
    
        }
        .form-control:focus{
           outline:none;
        }
        .custom-center-font{
            font-size: 30px;
            font-weight: 100;
            text-align: center;
            font-family:Arial, Helvetica, sans-serif;
        }
        .form-box{
            line-height: 3rem;
        }
        .tw{
            color:white;
        }
        .justify-flex{
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
        }
        .justify-flex > a {
            padding: 10px;
            color:white;
            border-radius: 3px;
            text-decoration: none;
            background-color: rgb(100, 210, 160);
            transition: all 0.3s linear;
        }
        .justify-flex > a:hover{
            background-color: rgb(100, 200, 150);
        }

        @media screen and (max-width:600px){
            .nav{
                display: none;
            }
            .res-nav{
                display: block;
            }
            .custom-bar{
                display: block;
            }
            .navbar{
                margin-bottom: 10%;
            }
        }

        @keyframes disappear{
            0%{ transform: scale(1);  opacity: 1;}
            20%{transform: scale(1.2); opacity: 0;}
            100%{transform: scale(1.5); opacity: 0;}
        }

        @keyframes drop{
            0%{ opacity:0; transform: scaleY(0);}
            70%{opacity: 0; transform: scaleY(0.6);}
            100%{opacity: 1; transform: scaleY(1);}
        }
    </style>
</head>
<body>
    <?php include_once __DIR__."/navbar.php"; ?>
    <div class="container">
        <?php echo $content; ?>
    </div>

    <script>
        let toggled = true;
        const nav_element = document.getElementById("bars-nav");
        document.querySelector(".custom-bar").addEventListener("click", (e) => {
            nav_element.className = toggled ?  "res-nav" : "hidden-nav";
            toggled = !toggled;
        })
    </script>
</body>
</html>