<!-- Write a program to demostrate the example of sending items selected from radio button to server asynchronously. -->

<!DOCTYPE html>
<html>

<head>
    <title>Unit-3_Program-5.2</title>

    <script type="text/javascript" language="javascript">

        function selection()
        {
            var xmlhttp;

            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }

            var r = document.getElementsByTagName('input');
            var game;

            for (var i=0; i<r.length; i++)
            {
                if (r[i].type == "radio" && r[i].checked)
                {
                    game = r[i].value;
                }
            }

            xmlhttp.open('GET', 'U3P5.2_code.php?radioselect=' + game, true);

            xmlhttp.onreadystatechange = function ()
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                    document.getElementById("info").innerHTML = xmlhttp.responseText;
                }
            }

            xmlhttp.send();
        }

    </script>
</head>

<body>

    <input type="radio" name="game" value="Cricket" onclick="selection()"> Cricket <br />
    <input type="radio" name="game" value="Football" onclick="selection()"> Football <br />
    <input type="radio" name="game" value="Tennis" onclick="selection()"> Tennis <br />

    <h1 id="info"></h1>

</body>

</html>