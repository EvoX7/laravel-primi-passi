<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel Preview</title>
</head>

<body>
    <header>
        <nav>
            <div id="logo"><i class="fa-brands fa-laravel"></i>
                <h2 id="logo-text">Laravel</h2>
            </div>

            <div>
                <ul id="links">
                    <li><a href="https://forge.laravel.com/">Forge</a></li>
                    <li><a href="https://vapor.laravel.com/">Vapor</a></li>
                    <li><a href="#">Ecosystem</a></li>
                    <li><a href="https://laravel-news.com/">News</a></li>
                    <li><a href="https://partners.laravel.com/">Partners</a></li>
                </ul>
            </div>
            <div id="search"><i class="fa-solid fa-magnifying-glass"></i><button id="doc_button"> DOCUMENTATION</button></div>
            
        </nav>
    </header>

    <main>

        <div id="hero-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="logo"></div>

        <h1>Welcome to <br><span id="brand_color">Laravel</span></h1>

        <div id="sub_text">
            <h3>" Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things. "</h3>
        </div>
    </main>


    <!-- Styles -->
    <style>
        body {
            background-color: black;
            font-family: 'Questrial', sans-serif;
        }

        #logo {
            display: flex;
            align-items: center;

        }

        #logo-text {
            color: white;
            font-size: 2em;
            margin-left: 1rem;
        }

        .fa-laravel {
            color: #ff2819;
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        #search {
            vertical-align: center;
        }

        .fa-magnifying-glass {
            color: #ff2819;
            font-size: 1.5rem;
            margin-right: 4rem;
            margin-left: -6rem;
            
        }

        #doc_button {
            font-weight: bold;
            font-size: 0.9em;
            background-color: red;
            color: white;
            width: 10rem;
            height: 2.5rem;
            border: none;
            margin-left: -1rem;
        }

        #doc_button:hover {
            background-color: white;
            color: red;
            cursor: pointer;
            box-shadow: 5px 5px #888888;
        }

        #links {
            display: flex;
            margin-right: 7rem;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0rem 20rem;
        }

        li {
            list-style: none;
            color: white;
            padding: 1.5rem;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: red;
        }


        h1,
        h3 {
            text-align: center;
            color: white;
        }

        h1 {
            margin-top: 5rem;
            font-size: 6em;
        }

        #brand_color {
            color: #ff2819;
        }

        div img {
            width: 17rem;
            height: 17rem;
        }

    
        #hero-logo {
            margin-top: 4rem;
            display: flex;
            justify-content: center;
        }

        #sub_text {
            margin: 0 auto;
            width: 40rem;
            height: 10rem;
            line-height: 2rem;
        }
    </style>

</body>

</html>