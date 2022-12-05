<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

<svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
    <defs>
        <linearGradient id="grad1_0" x1="33.3%" y1="100%" x2="100%" y2="0%">
            <stop offset="20%" stop-color="#000000" stop-opacity="1"></stop>
            <stop offset="80%" stop-color="#000000" stop-opacity="1"></stop>
        </linearGradient>
    </defs>
    <defs>
        <linearGradient id="grad2_0" x1="0%" y1="100%" x2="66.7%" y2="0%">
            <stop offset="20%" stop-color="#000000" stop-opacity="1"></stop>
            <stop offset="80%" stop-color="#000000" stop-opacity="1"></stop>
        </linearGradient>
    </defs>
    <g transform="translate(0, 0)">
        <path id="blob1"
              d="M243.4 0C234.5 29.5 225.5 58.9 215.3 89.2C205 119.4 193.4 150.5 172.1 172.1C150.8 193.7 119.8 205.9 89.5 216.2C59.3 226.5 29.6 234.9 0 243.4L0 0Z"
              fill="#ff9900"></path>
    </g>
    <g transform="translate(0, 0)" style="visibility: hidden">
        <path id="blob2"
              d="M243.4 0C220.9 23.4 198.4 46.8 190.3 78.8C182.3 110.9 188.7 151.6 172.1 172.1C155.5 192.6 115.9 192.9 83.4 201.4C50.9 209.9 25.5 226.6 0 243.4L0 0Z"
              fill="#ff9900"></path>
    </g>
</svg>

</body>
<script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>
<script>
    const tween = KUTE.fromTo(
        '#blob1',
        {path: '#blob1'},
        {path: '#blob2'},
        {repeat: 99999, duration: 2000, yoyo: true},
    )

    tween.start()</script>
<style>
    .blob-motion {
        position: absolute;
        transform: translateY(-20%);
    }
</style>
</html>
