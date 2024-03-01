<!-- Write a programto validate and Email ID using regular expression and by using DOM. -->

<!DOCTYPE html>
<html>

<head>
    <title>Unit-3_Program-7</title>

    <script type="text/javascript" language="javascript">

        function validateEmail() {
            var emailField = document.getElementById('emailField');
            var emailValue = emailField.value.trim();

            // Regular expression for a simple email validation
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            // Check if the email format is valid
            if (!emailRegex.test(emailValue)) {
                alert("Please enter a valid email address...!!");
                return false;
            }

            // Email is valid, continue with further processing or submission
            alert("Email address is valid...!!");
            return true;
        }

    </script>
</head>

<body>

    <label for="emailField">Enter Email : </label>
    <input type="text" id="emailField" name="emailField">
    <button onclick="validateEmail()">Validate Email</button>

</body>

</html>