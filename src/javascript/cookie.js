<script>
function setCookie()
      {
        alert("in function setCookie");
        var gmailId=document.getElementById('inputEmail').value;
        alert("gamil id entered ---> "+gmailId);
        document.cookie ="ProjectCookie=" + gmailId + ";" + ";path=/";

      }
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

function checkCookie() {
    var user = getCookie("ProjectCookie");
    alert("cookie value ====>"+user);
    if (user != "") {
        alert("Welcome again " + user);
        document.getElementById('userloginId').innerHTML=user;
    } else {
        alert("you have already loged out, please login again");
        document.getElementById('logout').style.display = "none";
        window.location.href = 'index.html';
        
    }
}

function deleteCookie(name) {
    alert("in function setCookie");       
        document.cookie ="ProjectCookie=;" + ";path=/";
};
</script>