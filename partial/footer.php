<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        footer {
            background-color: #f2f2f2;
            color: black;
        }
        .footer-content{
            padding: 80px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .social-media {
            list-style: none;
            display: flex;
            gap: 15px;
        }
        .social-media li {
            display: inline;
        }
        .social-media a {
            color: black;
            text-decoration: none;
        }
        .social-media a:hover {
            color: gray;
        }
    </style>
</head>
<body>
    <footer>
        <div class="container">
            <div class="line"></div>
            <div class="footer-content">
                <p>&copy; 2024 Your Company. All rights reserved.</p>
                <ul class="social-media">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>