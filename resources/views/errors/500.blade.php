<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>500</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Abril+Fatface|Lato");
        body {
            background: #D3DEEA;
        }
        .top {
            margin-top: 30px;
        }
        .container {
            margin: 0 auto;
            position: relative;
            width: 250px;
            height: 250px;
            margin-top: -40px;
        }
        .ghost {
            width: 50%;
            height: 53%;
            left: 25%;
            top: 10%;
            position: absolute;
            border-radius: 50% 50% 0 0;
            background: #EDEDED;
            border: 1px solid #BFC0C0;
            border-bottom: none;
            animation: float 2s ease-out infinite;
        }
        .ghost-copy {
            width: 50%;
            height: 53%;
            left: 25%;
            top: 10%;
            position: absolute;
            border-radius: 50% 50% 0 0;
            background: #EDEDED;
            border: 1px solid #BFC0C0;
            border-bottom: none;
            animation: float 2s ease-out infinite;
            z-index: 0;
        }
        .face {
            position: absolute;
            width: 100%;
            height: 60%;
            top: 20%;
        }
        .eye,
        .eye-right {
            position: absolute;
            background: #585959;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            top: 40%;
        }
        .eye {
            left: 25%;
        }
        .eye-right {
            right: 25%;
        }
        .mouth {
            position: absolute;
            top: 50%;
            left: 45%;
            width: 10px;
            height: 10px;
            border: 3px solid;
            border-radius: 50%;
            border-color: transparent #585959 #585959 transparent;
            transform: rotate(45deg);
        }
        .one,
        .two,
        .three,
        .four {
            position: absolute;
            background: #EDEDED;
            top: 85%;
            width: 25%;
            height: 23%;
            border: 1px solid #BFC0C0;
            z-index: 0;
        }
        .one {
            border-radius: 0 0 100% 30%;
            left: -1px;
        }
        .two {
            left: 23%;
            border-radius: 0 0 50% 50%;
        }
        .three {
            left: 50%;
            border-radius: 0 0 50% 50%;
        }
        .four {
            left: 74.5%;
            border-radius: 0 0 30% 100%;
        }
        .shadow {
            position: absolute;
            width: 30%;
            height: 7%;
            background: #BFC0C0;
            left: 35%;
            top: 80%;
            border-radius: 50%;
            animation: scale 2s infinite;
        }
        @keyframes scale {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
        @keyframes float {
            50% {
                transform: translateY(15px);
            }
        }
        .bottom {
            margin-top: 10px;
        }
        /*text styling*/
        h1 {
            font-family: "Abril Fatface", serif;
            color: #EDEDED;
            text-align: center;
            font-size: 9em;
            margin: 0;
            text-shadow: -1px 0 #BFC0C0, 0 1px #BFC0C0, 1px 0 #BFC0C0, 0 -1px #BFC0C0;
        }
        h3 {
            font-family: "Lato", sans-serif;
            font-size: 2em;
            text-transform: uppercase;
            text-align: center;
            color: #BFC0C0;
            margin-top: -20px;
            font-weight: 900;
        }
        p {
            text-align: center;
            font-family: "Lato", sans-serif;
            color: #585959;
            font-size: 0.6em;
            margin-top: -20px;
            text-transform: uppercase;
        }
        .search {
            text-align: center;
        }
        .buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        /*search style*/
        .search-bar {
            border: 1px solid #BFC0C0;
            padding: 5px;
            height: 20px;
            margin-left: -30px;
            width: 200px;
            outline: none;
        }
        .search-bar:focus {
            border: 1px solid #D3DEEA;
        }
        .search-btn {
            position: absolute;
            width: 30px;
            height: 32px;
            border: 1px solid #BFC0C0;
            background: #BFC0C0;
            text-align: center;
            color: #EDEDED;
            cursor: pointer;
            font-size: 1em;
            outline: none;
        }
        .search-btn:hover {
            background: #EDEDED;
            border: 1px solid #EDEDED;
            color: #BFC0C0;
            transition: all 0.2s ease;
        }
        .btn {
            background: #EDEDED;
            padding: 15px 20px;
            margin: 5px;
            color: #585959;
            font-family: "Lato", sans-serif;
            text-transform: uppercase;
            font-size: 0.6em;
            letter-spacing: 1px;
            border: 0;
        }
        .btn:hover {
            background: #BFC0C0;
            transition: all 0.4s ease-out;
        }
        footer {
            position: absolute;
            bottom: 0;
            right: 0;
            text-align: center;
            font-size: 0.8em;
            text-transform: uppercase;
            padding: 10px;
            color: #EA7996;
            letter-spacing: 3px;
            font-family: "Lato", sans-serif;
        }
        footer a {
            color: #ffffff;
            text-decoration: none;
        }
        footer a:hover {
            color: #7d7d7d;
        }
    </style>
</head>
<body>
    <div id="background"></div>
    <div class="top">
        <h1>500</h1>
        <h3>@lang('trans.contactProvider')</h3>
    </div>
    <div class="container">
        <div class="ghost-copy">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
        </div>
        <div class="ghost">
            <div class="face">
                <div class="eye"></div>
                <div class="eye-right"></div>
                <div class="mouth"></div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
</body>
</html>