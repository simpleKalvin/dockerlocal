--TEST--
Test * operator : 64bit long tests
--SKIPIF--
<?php
if (PHP_INT_SIZE != 8) die("skip this test is for 64bit platform only");
?>
--FILE--
<?php
 
define("MAX_64Bit", 9223372036854775807);
define("MAX_32Bit", 2147483647);
define("MIN_64Bit", -9223372036854775807 - 1);
define("MIN_32Bit", -2147483647 - 1);

$longVals = array(
    MAX_64Bit, MIN_64Bit, MAX_32Bit, MIN_32Bit, MAX_64Bit - MAX_32Bit, MIN_64Bit - MIN_32Bit,
    MAX_32Bit + 1, MIN_32Bit - 1, MAX_32Bit * 2, (MAX_32Bit * 2) + 1, (MAX_32Bit * 2) - 1, 
    MAX_64Bit -1, MAX_64Bit + 1, MIN_64Bit + 1, MIN_64Bit - 1
);

$otherVals = array(0, 1, -1, 7, 9, 65, -44, MAX_32Bit, MAX_64Bit);

error_reporting(E_ERROR);

foreach ($longVals as $longVal) {
   foreach($otherVals as $otherVal) {
	   echo "--- testing: $longVal * $otherVal ---\n";   
      var_dump($longVal*$otherVal);
   }
}

foreach ($otherVals as $otherVal) {
   foreach($longVals as $longVal) {
	   echo "--- testing: $otherVal * $longVal ---\n";   
      var_dump($otherVal*$longVal);
   }
}
   
?>
===DONE===
--EXPECT--
--- testing: 9223372036854775807 * 0 ---
int(0)
--- testing: 9223372036854775807 * 1 ---
int(9223372036854775807)
--- testing: 9223372036854775807 * -1 ---
int(-9223372036854775807)
--- testing: 9223372036854775807 * 7 ---
float(6.4563604257983E+19)
--- testing: 9223372036854775807 * 9 ---
float(8.3010348331693E+19)
--- testing: 9223372036854775807 * 65 ---
float(5.9951918239556E+20)
--- testing: 9223372036854775807 * -44 ---
float(-4.0582836962161E+20)
--- testing: 9223372036854775807 * 2147483647 ---
float(1.9807040619343E+28)
--- testing: 9223372036854775807 * 9223372036854775807 ---
float(8.5070591730235E+37)
--- testing: -9223372036854775808 * 0 ---
int(0)
--- testing: -9223372036854775808 * 1 ---
int(-9223372036854775808)
--- testing: -9223372036854775808 * -1 ---
float(9.2233720368548E+18)
--- testing: -9223372036854775808 * 7 ---
float(-6.4563604257983E+19)
--- testing: -9223372036854775808 * 9 ---
float(-8.3010348331693E+19)
--- testing: -9223372036854775808 * 65 ---
float(-5.9951918239556E+20)
--- testing: -9223372036854775808 * -44 ---
float(4.0582836962161E+20)
--- testing: -9223372036854775808 * 2147483647 ---
float(-1.9807040619343E+28)
--- testing: -9223372036854775808 * 9223372036854775807 ---
float(-8.5070591730235E+37)
--- testing: 2147483647 * 0 ---
int(0)
--- testing: 2147483647 * 1 ---
int(2147483647)
--- testing: 2147483647 * -1 ---
int(-2147483647)
--- testing: 2147483647 * 7 ---
int(15032385529)
--- testing: 2147483647 * 9 ---
int(19327352823)
--- testing: 2147483647 * 65 ---
int(139586437055)
--- testing: 2147483647 * -44 ---
int(-94489280468)
--- testing: 2147483647 * 2147483647 ---
int(4611686014132420609)
--- testing: 2147483647 * 9223372036854775807 ---
float(1.9807040619343E+28)
--- testing: -2147483648 * 0 ---
int(0)
--- testing: -2147483648 * 1 ---
int(-2147483648)
--- testing: -2147483648 * -1 ---
int(2147483648)
--- testing: -2147483648 * 7 ---
int(-15032385536)
--- testing: -2147483648 * 9 ---
int(-19327352832)
--- testing: -2147483648 * 65 ---
int(-139586437120)
--- testing: -2147483648 * -44 ---
int(94489280512)
--- testing: -2147483648 * 2147483647 ---
int(-4611686016279904256)
--- testing: -2147483648 * 9223372036854775807 ---
float(-1.9807040628566E+28)
--- testing: 9223372034707292160 * 0 ---
int(0)
--- testing: 9223372034707292160 * 1 ---
int(9223372034707292160)
--- testing: 9223372034707292160 * -1 ---
int(-9223372034707292160)
--- testing: 9223372034707292160 * 7 ---
float(6.4563604242951E+19)
--- testing: 9223372034707292160 * 9 ---
float(8.3010348312366E+19)
--- testing: 9223372034707292160 * 65 ---
float(5.9951918225597E+20)
--- testing: 9223372034707292160 * -44 ---
float(-4.0582836952712E+20)
--- testing: 9223372034707292160 * 2147483647 ---
float(1.9807040614731E+28)
--- testing: 9223372034707292160 * 9223372036854775807 ---
float(8.5070591710428E+37)
--- testing: -9223372034707292160 * 0 ---
int(0)
--- testing: -9223372034707292160 * 1 ---
int(-9223372034707292160)
--- testing: -9223372034707292160 * -1 ---
int(9223372034707292160)
--- testing: -9223372034707292160 * 7 ---
float(-6.4563604242951E+19)
--- testing: -9223372034707292160 * 9 ---
float(-8.3010348312366E+19)
--- testing: -9223372034707292160 * 65 ---
float(-5.9951918225597E+20)
--- testing: -9223372034707292160 * -44 ---
float(4.0582836952712E+20)
--- testing: -9223372034707292160 * 2147483647 ---
float(-1.9807040614731E+28)
--- testing: -9223372034707292160 * 9223372036854775807 ---
float(-8.5070591710428E+37)
--- testing: 2147483648 * 0 ---
int(0)
--- testing: 2147483648 * 1 ---
int(2147483648)
--- testing: 2147483648 * -1 ---
int(-2147483648)
--- testing: 2147483648 * 7 ---
int(15032385536)
--- testing: 2147483648 * 9 ---
int(19327352832)
--- testing: 2147483648 * 65 ---
int(139586437120)
--- testing: 2147483648 * -44 ---
int(-94489280512)
--- testing: 2147483648 * 2147483647 ---
int(4611686016279904256)
--- testing: 2147483648 * 9223372036854775807 ---
float(1.9807040628566E+28)
--- testing: -2147483649 * 0 ---
int(0)
--- testing: -2147483649 * 1 ---
int(-2147483649)
--- testing: -2147483649 * -1 ---
int(2147483649)
--- testing: -2147483649 * 7 ---
int(-15032385543)
--- testing: -2147483649 * 9 ---
int(-19327352841)
--- testing: -2147483649 * 65 ---
int(-139586437185)
--- testing: -2147483649 * -44 ---
int(94489280556)
--- testing: -2147483649 * 2147483647 ---
int(-4611686018427387903)
--- testing: -2147483649 * 9223372036854775807 ---
float(-1.9807040637789E+28)
--- testing: 4294967294 * 0 ---
int(0)
--- testing: 4294967294 * 1 ---
int(4294967294)
--- testing: 4294967294 * -1 ---
int(-4294967294)
--- testing: 4294967294 * 7 ---
int(30064771058)
--- testing: 4294967294 * 9 ---
int(38654705646)
--- testing: 4294967294 * 65 ---
int(279172874110)
--- testing: 4294967294 * -44 ---
int(-188978560936)
--- testing: 4294967294 * 2147483647 ---
int(9223372028264841218)
--- testing: 4294967294 * 9223372036854775807 ---
float(3.9614081238685E+28)
--- testing: 4294967295 * 0 ---
int(0)
--- testing: 4294967295 * 1 ---
int(4294967295)
--- testing: 4294967295 * -1 ---
int(-4294967295)
--- testing: 4294967295 * 7 ---
int(30064771065)
--- testing: 4294967295 * 9 ---
int(38654705655)
--- testing: 4294967295 * 65 ---
int(279172874175)
--- testing: 4294967295 * -44 ---
int(-188978560980)
--- testing: 4294967295 * 2147483647 ---
int(9223372030412324865)
--- testing: 4294967295 * 9223372036854775807 ---
float(3.9614081247909E+28)
--- testing: 4294967293 * 0 ---
int(0)
--- testing: 4294967293 * 1 ---
int(4294967293)
--- testing: 4294967293 * -1 ---
int(-4294967293)
--- testing: 4294967293 * 7 ---
int(30064771051)
--- testing: 4294967293 * 9 ---
int(38654705637)
--- testing: 4294967293 * 65 ---
int(279172874045)
--- testing: 4294967293 * -44 ---
int(-188978560892)
--- testing: 4294967293 * 2147483647 ---
int(9223372026117357571)
--- testing: 4294967293 * 9223372036854775807 ---
float(3.9614081229462E+28)
--- testing: 9223372036854775806 * 0 ---
int(0)
--- testing: 9223372036854775806 * 1 ---
int(9223372036854775806)
--- testing: 9223372036854775806 * -1 ---
int(-9223372036854775806)
--- testing: 9223372036854775806 * 7 ---
float(6.4563604257983E+19)
--- testing: 9223372036854775806 * 9 ---
float(8.3010348331693E+19)
--- testing: 9223372036854775806 * 65 ---
float(5.9951918239556E+20)
--- testing: 9223372036854775806 * -44 ---
float(-4.0582836962161E+20)
--- testing: 9223372036854775806 * 2147483647 ---
float(1.9807040619343E+28)
--- testing: 9223372036854775806 * 9223372036854775807 ---
float(8.5070591730235E+37)
--- testing: 9.2233720368548E+18 * 0 ---
float(0)
--- testing: 9.2233720368548E+18 * 1 ---
float(9.2233720368548E+18)
--- testing: 9.2233720368548E+18 * -1 ---
float(-9.2233720368548E+18)
--- testing: 9.2233720368548E+18 * 7 ---
float(6.4563604257983E+19)
--- testing: 9.2233720368548E+18 * 9 ---
float(8.3010348331693E+19)
--- testing: 9.2233720368548E+18 * 65 ---
float(5.9951918239556E+20)
--- testing: 9.2233720368548E+18 * -44 ---
float(-4.0582836962161E+20)
--- testing: 9.2233720368548E+18 * 2147483647 ---
float(1.9807040619343E+28)
--- testing: 9.2233720368548E+18 * 9223372036854775807 ---
float(8.5070591730235E+37)
--- testing: -9223372036854775807 * 0 ---
int(0)
--- testing: -9223372036854775807 * 1 ---
int(-9223372036854775807)
--- testing: -9223372036854775807 * -1 ---
int(9223372036854775807)
--- testing: -9223372036854775807 * 7 ---
float(-6.4563604257983E+19)
--- testing: -9223372036854775807 * 9 ---
float(-8.3010348331693E+19)
--- testing: -9223372036854775807 * 65 ---
float(-5.9951918239556E+20)
--- testing: -9223372036854775807 * -44 ---
float(4.0582836962161E+20)
--- testing: -9223372036854775807 * 2147483647 ---
float(-1.9807040619343E+28)
--- testing: -9223372036854775807 * 9223372036854775807 ---
float(-8.5070591730235E+37)
--- testing: -9.2233720368548E+18 * 0 ---
float(-0)
--- testing: -9.2233720368548E+18 * 1 ---
float(-9.2233720368548E+18)
--- testing: -9.2233720368548E+18 * -1 ---
float(9.2233720368548E+18)
--- testing: -9.2233720368548E+18 * 7 ---
float(-6.4563604257983E+19)
--- testing: -9.2233720368548E+18 * 9 ---
float(-8.3010348331693E+19)
--- testing: -9.2233720368548E+18 * 65 ---
float(-5.9951918239556E+20)
--- testing: -9.2233720368548E+18 * -44 ---
float(4.0582836962161E+20)
--- testing: -9.2233720368548E+18 * 2147483647 ---
float(-1.9807040619343E+28)
--- testing: -9.2233720368548E+18 * 9223372036854775807 ---
float(-8.5070591730235E+37)
--- testing: 0 * 9223372036854775807 ---
int(0)
--- testing: 0 * -9223372036854775808 ---
int(0)
--- testing: 0 * 2147483647 ---
int(0)
--- testing: 0 * -2147483648 ---
int(0)
--- testing: 0 * 9223372034707292160 ---
int(0)
--- testing: 0 * -9223372034707292160 ---
int(0)
--- testing: 0 * 2147483648 ---
int(0)
--- testing: 0 * -2147483649 ---
int(0)
--- testing: 0 * 4294967294 ---
int(0)
--- testing: 0 * 4294967295 ---
int(0)
--- testing: 0 * 4294967293 ---
int(0)
--- testing: 0 * 9223372036854775806 ---
int(0)
--- testing: 0 * 9.2233720368548E+18 ---
float(0)
--- testing: 0 * -9223372036854775807 ---
int(0)
--- testing: 0 * -9.2233720368548E+18 ---
float(-0)
--- testing: 1 * 9223372036854775807 ---
int(9223372036854775807)
--- testing: 1 * -9223372036854775808 ---
int(-9223372036854775808)
--- testing: 1 * 2147483647 ---
int(2147483647)
--- testing: 1 * -2147483648 ---
int(-2147483648)
--- testing: 1 * 9223372034707292160 ---
int(9223372034707292160)
--- testing: 1 * -9223372034707292160 ---
int(-9223372034707292160)
--- testing: 1 * 2147483648 ---
int(2147483648)
--- testing: 1 * -2147483649 ---
int(-2147483649)
--- testing: 1 * 4294967294 ---
int(4294967294)
--- testing: 1 * 4294967295 ---
int(4294967295)
--- testing: 1 * 4294967293 ---
int(4294967293)
--- testing: 1 * 9223372036854775806 ---
int(9223372036854775806)
--- testing: 1 * 9.2233720368548E+18 ---
float(9.2233720368548E+18)
--- testing: 1 * -9223372036854775807 ---
int(-9223372036854775807)
--- testing: 1 * -9.2233720368548E+18 ---
float(-9.2233720368548E+18)
--- testing: -1 * 9223372036854775807 ---
int(-9223372036854775807)
--- testing: -1 * -9223372036854775808 ---
float(9.2233720368548E+18)
--- testing: -1 * 2147483647 ---
int(-2147483647)
--- testing: -1 * -2147483648 ---
int(2147483648)
--- testing: -1 * 9223372034707292160 ---
int(-9223372034707292160)
--- testing: -1 * -9223372034707292160 ---
int(9223372034707292160)
--- testing: -1 * 2147483648 ---
int(-2147483648)
--- testing: -1 * -2147483649 ---
int(2147483649)
--- testing: -1 * 4294967294 ---
int(-4294967294)
--- testing: -1 * 4294967295 ---
int(-4294967295)
--- testing: -1 * 4294967293 ---
int(-4294967293)
--- testing: -1 * 9223372036854775806 ---
int(-9223372036854775806)
--- testing: -1 * 9.2233720368548E+18 ---
float(-9.2233720368548E+18)
--- testing: -1 * -9223372036854775807 ---
int(9223372036854775807)
--- testing: -1 * -9.2233720368548E+18 ---
float(9.2233720368548E+18)
--- testing: 7 * 9223372036854775807 ---
float(6.4563604257983E+19)
--- testing: 7 * -9223372036854775808 ---
float(-6.4563604257983E+19)
--- testing: 7 * 2147483647 ---
int(15032385529)
--- testing: 7 * -2147483648 ---
int(-15032385536)
--- testing: 7 * 9223372034707292160 ---
float(6.4563604242951E+19)
--- testing: 7 * -9223372034707292160 ---
float(-6.4563604242951E+19)
--- testing: 7 * 2147483648 ---
int(15032385536)
--- testing: 7 * -2147483649 ---
int(-15032385543)
--- testing: 7 * 4294967294 ---
int(30064771058)
--- testing: 7 * 4294967295 ---
int(30064771065)
--- testing: 7 * 4294967293 ---
int(30064771051)
--- testing: 7 * 9223372036854775806 ---
float(6.4563604257983E+19)
--- testing: 7 * 9.2233720368548E+18 ---
float(6.4563604257983E+19)
--- testing: 7 * -9223372036854775807 ---
float(-6.4563604257983E+19)
--- testing: 7 * -9.2233720368548E+18 ---
float(-6.4563604257983E+19)
--- testing: 9 * 9223372036854775807 ---
float(8.3010348331693E+19)
--- testing: 9 * -9223372036854775808 ---
float(-8.3010348331693E+19)
--- testing: 9 * 2147483647 ---
int(19327352823)
--- testing: 9 * -2147483648 ---
int(-19327352832)
--- testing: 9 * 9223372034707292160 ---
float(8.3010348312366E+19)
--- testing: 9 * -9223372034707292160 ---
float(-8.3010348312366E+19)
--- testing: 9 * 2147483648 ---
int(19327352832)
--- testing: 9 * -2147483649 ---
int(-19327352841)
--- testing: 9 * 4294967294 ---
int(38654705646)
--- testing: 9 * 4294967295 ---
int(38654705655)
--- testing: 9 * 4294967293 ---
int(38654705637)
--- testing: 9 * 9223372036854775806 ---
float(8.3010348331693E+19)
--- testing: 9 * 9.2233720368548E+18 ---
float(8.3010348331693E+19)
--- testing: 9 * -9223372036854775807 ---
float(-8.3010348331693E+19)
--- testing: 9 * -9.2233720368548E+18 ---
float(-8.3010348331693E+19)
--- testing: 65 * 9223372036854775807 ---
float(5.9951918239556E+20)
--- testing: 65 * -9223372036854775808 ---
float(-5.9951918239556E+20)
--- testing: 65 * 2147483647 ---
int(139586437055)
--- testing: 65 * -2147483648 ---
int(-139586437120)
--- testing: 65 * 9223372034707292160 ---
float(5.9951918225597E+20)
--- testing: 65 * -9223372034707292160 ---
float(-5.9951918225597E+20)
--- testing: 65 * 2147483648 ---
int(139586437120)
--- testing: 65 * -2147483649 ---
int(-139586437185)
--- testing: 65 * 4294967294 ---
int(279172874110)
--- testing: 65 * 4294967295 ---
int(279172874175)
--- testing: 65 * 4294967293 ---
int(279172874045)
--- testing: 65 * 9223372036854775806 ---
float(5.9951918239556E+20)
--- testing: 65 * 9.2233720368548E+18 ---
float(5.9951918239556E+20)
--- testing: 65 * -9223372036854775807 ---
float(-5.9951918239556E+20)
--- testing: 65 * -9.2233720368548E+18 ---
float(-5.9951918239556E+20)
--- testing: -44 * 9223372036854775807 ---
float(-4.0582836962161E+20)
--- testing: -44 * -9223372036854775808 ---
float(4.0582836962161E+20)
--- testing: -44 * 2147483647 ---
int(-94489280468)
--- testing: -44 * -2147483648 ---
int(94489280512)
--- testing: -44 * 9223372034707292160 ---
float(-4.0582836952712E+20)
--- testing: -44 * -9223372034707292160 ---
float(4.0582836952712E+20)
--- testing: -44 * 2147483648 ---
int(-94489280512)
--- testing: -44 * -2147483649 ---
int(94489280556)
--- testing: -44 * 4294967294 ---
int(-188978560936)
--- testing: -44 * 4294967295 ---
int(-188978560980)
--- testing: -44 * 4294967293 ---
int(-188978560892)
--- testing: -44 * 9223372036854775806 ---
float(-4.0582836962161E+20)
--- testing: -44 * 9.2233720368548E+18 ---
float(-4.0582836962161E+20)
--- testing: -44 * -9223372036854775807 ---
float(4.0582836962161E+20)
--- testing: -44 * -9.2233720368548E+18 ---
float(4.0582836962161E+20)
--- testing: 2147483647 * 9223372036854775807 ---
float(1.9807040619343E+28)
--- testing: 2147483647 * -9223372036854775808 ---
float(-1.9807040619343E+28)
--- testing: 2147483647 * 2147483647 ---
int(4611686014132420609)
--- testing: 2147483647 * -2147483648 ---
int(-4611686016279904256)
--- testing: 2147483647 * 9223372034707292160 ---
float(1.9807040614731E+28)
--- testing: 2147483647 * -9223372034707292160 ---
float(-1.9807040614731E+28)
--- testing: 2147483647 * 2147483648 ---
int(4611686016279904256)
--- testing: 2147483647 * -2147483649 ---
int(-4611686018427387903)
--- testing: 2147483647 * 4294967294 ---
int(9223372028264841218)
--- testing: 2147483647 * 4294967295 ---
int(9223372030412324865)
--- testing: 2147483647 * 4294967293 ---
int(9223372026117357571)
--- testing: 2147483647 * 9223372036854775806 ---
float(1.9807040619343E+28)
--- testing: 2147483647 * 9.2233720368548E+18 ---
float(1.9807040619343E+28)
--- testing: 2147483647 * -9223372036854775807 ---
float(-1.9807040619343E+28)
--- testing: 2147483647 * -9.2233720368548E+18 ---
float(-1.9807040619343E+28)
--- testing: 9223372036854775807 * 9223372036854775807 ---
float(8.5070591730235E+37)
--- testing: 9223372036854775807 * -9223372036854775808 ---
float(-8.5070591730235E+37)
--- testing: 9223372036854775807 * 2147483647 ---
float(1.9807040619343E+28)
--- testing: 9223372036854775807 * -2147483648 ---
float(-1.9807040628566E+28)
--- testing: 9223372036854775807 * 9223372034707292160 ---
float(8.5070591710428E+37)
--- testing: 9223372036854775807 * -9223372034707292160 ---
float(-8.5070591710428E+37)
--- testing: 9223372036854775807 * 2147483648 ---
float(1.9807040628566E+28)
--- testing: 9223372036854775807 * -2147483649 ---
float(-1.9807040637789E+28)
--- testing: 9223372036854775807 * 4294967294 ---
float(3.9614081238685E+28)
--- testing: 9223372036854775807 * 4294967295 ---
float(3.9614081247909E+28)
--- testing: 9223372036854775807 * 4294967293 ---
float(3.9614081229462E+28)
--- testing: 9223372036854775807 * 9223372036854775806 ---
float(8.5070591730235E+37)
--- testing: 9223372036854775807 * 9.2233720368548E+18 ---
float(8.5070591730235E+37)
--- testing: 9223372036854775807 * -9223372036854775807 ---
float(-8.5070591730235E+37)
--- testing: 9223372036854775807 * -9.2233720368548E+18 ---
float(-8.5070591730235E+37)
===DONE===
