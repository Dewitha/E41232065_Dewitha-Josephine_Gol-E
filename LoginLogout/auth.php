<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        body {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: #f8c9d4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            position: relative;
            animation: bounce 2s infinite;
        }

        h2 {
            color: #ff69b4;
            font-size: 28px;
        }

        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 12px;
            margin: 15px 0;
            border: 2px solid #ff69b4;
            border-radius: 10px;
            font-size: 16px;
        }

        button {
            background-color: #ff69b4;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background-color: #ff85b4;
            animation: bounce 0.5s;
        }

        button::before {
            content: '🎀';
            position: absolute;
            left: -30px;
            top: -30px;
            animation: bounce 2s infinite;
        }

        button::after {
            content: '✨';
            position: absolute;
            right: -30px;
            bottom: -30px;
            animation: bounce 2s infinite reverse;
        }

        .message {
            margin-top: 15px;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        .sticker {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 50px;
            animation: bounce 3s infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sticker">🎉</div>
        <h2><?php echo $title; ?></h2>
        <?php echo $content; ?>
        <div class="message"><?php echo $message; ?></div>
    </div>
</body>
</html>
