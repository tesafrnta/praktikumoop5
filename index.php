<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Demo Segitiga PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #001f3f, #003366); /* Navy blue gradient */
            color: #fff;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }
        .container {
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.4);
            width: 320px;
            text-align: center;
            padding: 35px 25px;
        }
        h1 {
            margin-bottom: 35px;
            font-weight: 700;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.6);
        }
        a.button {
            display: block;
            background-color: #001f3f; /* Navy blue */
            color: #fff;
            text-decoration: none;
            padding: 16px 0;
            margin: 18px auto;
            font-weight: 700;
            font-size: 1.2rem;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(0, 31, 63, 0.7);
            transition: background-color 0.3s ease, transform 0.15s ease;
            width: 85%;
        }
        a.button:hover {
            background-color: #003366; /* Slightly lighter navy */
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Praktikum OOP 5</h1>
        <a href="classobjek.php" class="button"> Objek Segitiga</a>
        <a href="enkapsulasi.php" class="button"> Objek Segitiga</a>
    </div>
</body>
</html>
