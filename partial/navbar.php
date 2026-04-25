<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Orbitron', sans-serif;
        }

        nav{
            position: fixed;
            width: 100%;
        }

        .main-nav {
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 20px 50px;
            border-radius: 30px;
            border: white solid 2px;
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }

        .main-nav p {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .main-nav ul {
            display: flex;
            list-style: none;
        }

        .main-nav ul li {
            margin: 0 10px;
            color: white;
        }

        .main-nav ul li a {
            text-decoration: none;
            color: white;
        }

        .main-nav ul li a:hover {
            color: gray;
        }

        .main-nav ul .active {
            color: white;
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <div class="main-nav">
                <!-- nav bar kiri -->
                <ul>
                    <li <?php if (isset($_page) && $_page == 'home') { ?>class="active" <?php } ?>><a href="#intro">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#tech">Tech</a></li>
                    <li><a href="#value">Values</a></li>
                </ul>
                <p>Ahmad AS</p>
                <!-- nav bar kanan -->
                <ul>
                    <li <?php if (isset($_page) && $_page == 'project') { ?>class="active" <?php } ?>><a href="#project">Project</a></li>
                    <li><a href="#qna">QnA</a></li>
                    <li><a href="#people-say">People Say</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li <?php if (isset($_page) && $_page == 'login') { ?>class="active" <?php } ?>></li><a href="../login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>