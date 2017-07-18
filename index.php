<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
    <title>AJAX</title>
</head>
<br>
<h1>AJAX EXAMPLE</h1>

<p>Your name:</p>

<input type="text" id="input"/>

<br/>
<br/>

<p id="hello"></p>

<br/>

<button id="send">SEND AJAX</button>
<script>
    $("#send").click(
        function () {
            var params = {
                text : $("#input").val(),
            }

            $.post("ajax.php", params, function (data) {
                $("#hello").html(data);
            });
        }
    );
</script>
</body>
</html>