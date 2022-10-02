<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name ="viewport" content  = "width = device-width , initial-scale =1.0">
    <title>Joke Generator</title>
    <link rel="stylesheet" href = "style.css">
    <script type="text/javascript" src="Jquery-3.2.1.min.js" ></script>
    <script type="text/javascript" src="site.js" ></script>
    <link rel="stylesheet"href="https://cdn.deliver.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>

<div class="main_container">

    <h1>Try Not To Laugh 	&#128514;	&#128586;</h1>
    <div class="joke" id = "joke">
        Here Goes The Joke!
    </div>

    <span id="divJokeSetup" style="margin-bottom: 20px;display: block; font-size: 20px; color: #0e44e7; " >
    </span>

    <span id="divPunchline" style="display:none;margin-bottom: 10px;display: block;">
    </span>

    <form method="GET" action="test.php">
        <input type="button" class="btn" id="btnShowPunchline" onclick="ShowPunchline()" name="getjoke" value="Show Punchline" value="Show Punchline"/>
        <input type="button" id="btnNextJoke" class="btn" onclick="NextJoke()" name="getjoke" value="Next Joke" value="Next Joke" style="display: none;"/>
    </form>


</div>
</body>

<script>
    $(document).ready(function(){
        NextJoke();
    })
</script>

