<? 

$mshost = "localhost"; 
$msuser = "df"; 
$msname = "user2098153_1c_group"; 
$mspassword = "dncorn12345";
$msconnect = mysqli_connect($mshost, $msuser, $mspassword);
mysqli_select_db($msconnect,$msname);
mysqli_query ($msconnect,"SET NAMES utf8");


# запрос для коннекта с базой из любого файла :
# $var['home'] = $_SERVER['DOCUMENT_ROOT']; include ($var['home']."/sozdanie-bazi-roznica/connect_to_baza.php");
#
?>
