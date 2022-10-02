function ShowPunchline(){
    $("#divPunchline").show();
    $("#btnNextJoke").show();
    $("#btnShowPunchline").hide();
}

function NextJoke(){
    $.ajax(
        'joke.php',
        {
            success: function(data) {
                var joke = JSON.parse(data);
                $("#divJokeSetup").text(joke.setup);
                $("#divPunchline").text(joke.punchline);
                $("#divPunchline").hide();

                $("#btnShowPunchline").show();
                $("#btnNextJoke").hide();
            },
            error: function() {
                alert('There was some error performing the AJAX call!');
            }
        }
    );
}