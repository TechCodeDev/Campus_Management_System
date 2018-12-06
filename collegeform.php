<script>

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    
    var usergmailId = getCookie("ProjectCookie");
    alert("the cookie value is --------> "+usergmailId);
    document.getElementById('form18').value = usergmailId;
     
    </script>

    <?php






$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('wta') or die(mysql_error());

$gmail=$_REQUEST['gmail'];
$College_Name=$_REQUEST['College_Name'];
$College_offical_website=$_REQUEST['College_offical_website'];

//$College_code=$_REQUEST['College_code'];
$Description_of_college=$_REQUEST['Description_of_college'];
$Phone_Number=$_REQUEST['Phone-Number'];



  

$query="UPDATE clregistration  SET College_offical_website='$College_offical_website', Phone_Number='$Phone_Number', Description_of_college='$Description_of_college' WHERE gmail='$gmail'";
$result=mysql_query($query) or die(mysql_error());
include 'sucessforprofileS1.php'










?> 