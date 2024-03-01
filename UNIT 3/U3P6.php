<!-- Write a program to validate a blank field and also validate the length of the data entered(i.e. minimum lenght of 5). -->

<!DOCTYPE html>
<html>

<head>
    <title>Unit-3_Program-6</title>

    <script type="text/javascript" language="javascript">

        function validateForm() {
            var inputField = document.getElementById('dataField');
            var inputValue = inputField.value.trim();

            // Check if the field is blank
            if (inputValue === "") {
                alert("Please enter data in the field...!!");
                return false;
            }

            // Check if the length is at least 5 characters
            if (inputValue.length < 5) {
                alert("Please enter at least 5 characters...!!");
                return false;
            }

            // Form is valid, continue with submission or further processing
            return true;
        }

    </script>
</head>

<body>

    <form onsubmit="return validateForm()">
        Enter Data : <input type="text" id="dataField" name="dataField">
        <input type="submit" value="Submit">
    </form>

</body>

</html>