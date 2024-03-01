<!-- Create a form containing two input fields (Name, Email_ID) and a submit button. When the user clicks on submit button, the form data should be sent for processing to PHP file ,which should display the welcome message with the email_id on the PHP page. Form data should be sent by HTTP GET/POST method. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-3_Program_1</title>

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
    xmlhttp.open('POST', 'U3P1_code.php?uname='+unm, true);

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
    
    Enter Name : <input type="text" id="name" name="name" onkeyup="showData();" /><br>
    <h1><div id="info"></div></h1>
    
</body>
</html>