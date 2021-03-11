<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #particles-js{
            width: 100%;
            height: 100%;
            background-color: #5c8d89;
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>

    <script src="/assets/public/plugins/particlejs/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', '/assets/public/plugins/particlejs/particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
    </script>
</body>
</html>