<html>
<head>
    <title>Wessfun</title>
    <link href="{{asset('css/error.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <meta http-equiv="refresh" content="5;url=http://127.0.0.1:8000"/>
</head>
<body>
<div class="error-page">
    <h1 data-h1="401">401</h1>
    <p data-p="UNAUTHORIZED">UNAUTHORIZED</p>

</div>
<div class="error-page2">
    <h2 data-h2="Redirecting in 5 seconds...">Redirecting in 5 seconds...</h2>
    <progress max="5" value="0" id="progressBar"></progress>
</div>

<script>
    var timeleft = 5;
    var downloadTimer = setInterval(function () {
        document.getElementById("progressBar").value = 5 - --timeleft;
        if (timeleft <= 0)
            clearInterval(downloadTimer);
    }, 1000);
</script>

</body>
</html>
