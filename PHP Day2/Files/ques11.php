<?php
// Print info using print //

print('Hello world using print');

// Showing all possible format values with printf //

echo '<br><h3>Showing all possible format values with printf</h3><br>';

$num1 = 123456789;
$num2 = -123456789;
$char = 65;

printf("%%b = %b <br>",$num1); // Binary number
printf("%%c = %c <br>",$char); // The ASCII Character
printf("%%d = %d <br>",$num1); // Signed decimal number
printf("%%d = %d <br>",$num2); // Signed decimal number
printf("%%e = %e <br>",$num1); // Scientific notation (lowercase)
printf("%%E = %E <br>",$num1); // Scientific notation (uppercase)
printf("%%u = %u <br>",$num1); // Unsigned decimal number (positive)
printf("%%u = %u <br>",$num2); // Unsigned decimal number (negative)
printf("%%f = %f <br>",$num1); // Floating-point number (local settings aware)
printf("%%F = %F <br>",$num1); // Floating-point number (not local sett aware)
printf("%%g = %g <br>",$num1); // Shorter of %e and %f
printf("%%G = %G <br>",$num1); // Shorter of %E and %f
printf("%%o = %o <br>",$num1); // Octal number
printf("%%s = %s <br>",$num1); // String
printf("%%x = %x <br>",$num1); // Hexadecimal number (lowercase)
printf("%%X = %X <br>",$num1); // Hexadecimal number (uppercase)
printf("%%+d = %+d <br>",$num1); // Sign specifier (positive)
printf("%%+d = %+d <br>",$num2); // Sign specifier (negative)

echo '<br><h3>Showing all possible format values with sprintf</h3><br>';
//the fllowing line will not be displayed
sprintf("%%b = %b",$num1)."<br>"; // Binary number
echo sprintf("%%c = %c",$char)."<br>"; // The ASCII Character
echo sprintf("%%d = %d",$num1)."<br>"; // Signed decimal number
echo sprintf("%%d = %d",$num2)."<br>"; // Signed decimal number
print sprintf("%%e = %e",$num1)."<br>"; // Scientific notation (lowercase)
echo sprintf("%%E = %E",$num1)."<br>"; // Scientific notation (uppercase)
print sprintf("%%u = %u",$num1)."<br>"; // Unsigned decimal number (positive)
echo sprintf("%%u = %u",$num2)."<br>"; // Unsigned decimal number (negative)
echo sprintf("%%f = %f",$num1)."<br>";
?>


