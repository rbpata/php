<!-- Create a form contaning a combobox with some product names as items. Whenever a user selects a particular product from the combox, it shuold be sent to the server asynchronously (i.e. without pressing submit button). Implement using AJAX. -->

<!DOCTYPE html>
<html>

<head>
    <title>Unit-3_Program-4</title>

    <script type="text/javascript" language="javascript">

        function prodisplay() {
            var xmlhttp;

            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }

            var cat = document.getElementById('cat').value;
            xmlhttp.open('GET', 'U3P4_code.php?x=' + cat, true);

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

    <select name="cat" id="cat" onchange="prodisplay()">
        <option value="">Please Select :</option>
        <option value="camera">Camera</option>
        <option value="mobile">Mobile</option>
        <option value="computer">Computer</option>
        <option value="keyboard">Keyboard</option>
    </select>

    <h1><div id="info"></div></h1>

</body>

</html>