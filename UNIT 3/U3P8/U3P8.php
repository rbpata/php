<!-- Write a program that checks a particular stuId already exits in the student(stuId,stu_name,mob,country) table or not. If stuId exists then display a message "User Already Exit. Try another stuId". If it does not exits then add the data in the student table.Implement using AJAX. -->

<!DOCTYPE html>
<html>

<head>
    <title>Unit-3_Program-8</title>

    <script type="text/javascript" language="javascript">

        function searchstud()
        {
            var xmlhttp;

            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }

            var r = document.getElementById('search').value; // Corrected the typo here
            
            xmlhttp.open('GET', 'U3P8_code.php?sr=' + r, true);

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

    Product ID : <input type="text" name="search" id="search"/>
    <input type="button" name="submit" value="Search" onClick="searchstud()" />
    <h1 id="info"></h1>

</body>

</html>