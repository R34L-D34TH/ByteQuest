<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Challenges</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Each column takes up equal width */
            grid-template-rows: repeat(4, 1fr); /* Each row takes up equal height */
            width: 100vw; /* Full width of viewport */
            height: 100vh; /* Full height of viewport */
        }

        .box {
            /* background-color: lightblue; */
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <div class="box"><a href="easy/easy1.html">Challenge 1</a></div>
        <div class="box"><a href="easy/easy1.html">Challenge 2</a></div>
        <div class="box"><a href="easy/easy1.html">Challenge 3</a></div>
        <div class="box"><a href="easy/easy1.html">Challenge 4</a></div>
        <div class="box"><a href="easy/easy1.html">Challenge 5</a></div>
        <div class="box"><a href="easy/easy1.html">Challenge 6</a></div>
        <div class="box"><a href="easy/easy1.html">Challenge 7</a></div>
        <div class="box"><a href="easy/easy1.html">Challenge 8</a></div>
        
    </div>
</body>
</html>
