<!-- Repeat the above question to demonstrate the use of keydown and keypress events. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-3_Program_2</title>

<script type="text/javascript" language="javascript">

function showData()
{
    var xmlhttp;

    if(window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        XMLHttpRequest = new ActiveXObject('Microsoft.XMLHTTP');
    }

    var unm = document.getElementById('name').value;
    xmlhttp.open('POST', 'U3P2_code.php?uname='+unm, true);

    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("info").innerHTML=xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}

</script>
</head>

<body>
    
    Enter Name : <input type="text" id="name" name="name" onkeypress="showData();" /><br>
    <h1><div id="info"></div></h1>
    
</body>
</html>