<html>
<head>
    <title>Insert Form Data</title>
    <style>
        #login{
            width:300px;
            border-radius: 10px;
            border: 2px solid #ccc;
            padding: 10px 40px 25px;
            margin-top: 15%;
            margin-left: 35%;
        }
        input[type=text],input[type=email],input[type=number]{
            width: 99.5%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
            font-family: raleway;
            background-color: #042339;
            border-radius: 8px;
            border: 2px solid #042339;
            color: white;
        }
        input[type=submit]{
            width: 100%;
            background-color: #0A3450;
            color: white;
            border: 2px solid #0A3450;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 8px;
            margin-bottom: -12px;
        }
        input[type="submit"]:hover{
            border-color: #071164;
            background-color: #071164;
        } 
    </style> 
    <script type="text/javascript">
        function validateEmail(emailField){
            var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

            if (reg.test(emailField.value) == false){
                alert('Invalid Email');
                return false;
            }
            return true;
        }
        function validatePhone(phoneField){
            var reg=/^([1-9]{1}[0-9]{9})$/;

            
                if((reg.test(phoneField.value)==false) && strlen($phone) !=10){
                alert("Invalid Phone Number");
                return false;
            }
            return true;
        }
        function checkForm(){
            var e = document.getElementById('email');
            var p = document.getElementById('phone');
            var ea = validateEmail(e);
            var pa = validatePhone(p);
            return ea && pa;
        }
    </script>
</head>
<body style="background-color: #061D2D">
    <div id="login">
    <form action="./php_day4_b.php" method="POST" onsubmit="return checkform()">
    <input type="text" name="first_name" id="first_name" placeholder="First name" required autocomplete="off">
    <input type="text" name="last_name" id="last_name" placeholder="Last name" required autocomplete="off">
    <input type="email" name="email" id="email" placeholder="Email" required>
    <input type="number" name="phone" id="phone" placeholder="Phone number" required autocomplete="off">
    <input type="submit" value="Submit" name="submit">
</div>
</form>
</body>
</html>
