<html>
<body>
 
The answer is: 
<?php if($_GET["operation"] == "+") echo $_GET["number1"] + $_GET["number2"]; ?> 
<?php if($_GET["operation"] == "-") echo $_GET["number1"] - $_GET["number2"]; ?> 
<?php if($_GET["operation"] == "/") echo $_GET["number1"] / $_GET["number2"]; ?> 
<?php if($_GET["operation"] == "*") echo $_GET["number1"] * $_GET["number2"]; ?> 

</body>
</html>
