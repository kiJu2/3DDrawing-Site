<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).on('click', '.button', function(){
  var isCheck;
  isCheck = fn_pw_check();
});
$(document).on('click', '.Mwitdrawal', function(){
  var isCheck;
  isCheck = fn_pw_check();
});

var pw_passed = true;
function fn_pw_check() {
  var pw = $('#password').val();
  var pw2 = $('#passwordCheck').val();

  pw_passed = true;
  var pattern1 = /[0-9]/;
  var pattern2 = /[a-zA-Z]/;
  var pattern3 = /[~!@\#$%<>^&*]/;     // 원하는 특수문자 추가 제거
  var pw_msg = "";

  if(pw.length == 0) {
    alert("Please enter your password");
    return false;
  } else {
    if( pw  !=  pw2) {
      alert("Password doesn't match.");
      return false;
    }
  }

  if(!pattern1.test(pw)||!pattern2.test(pw)||!pattern3.test(pw)||pw.length<8||pw.length>50){
    alert("Must consist of at least 8 digits of English + Numeric + Special Symbols");
    return false;
  }

  alert("It has been verified.");
  return true;
}
</script>
<form action = '#' method="post" class = "form">
  <table>
    <tr>
      <td style = 'width : 200px;'>
        <p style = 'display:inline;'>Password</p><br>
        <p style = 'display:inline;'>Password Check</p><br>
        <p style = 'display:inline;'>H.P</p><br>
      </td>
      <td>
        <input type = 'password' name = 'password' placeholder="Password" class = 'input' id = 'password'><br>
        <input type = 'password' name = 'passwordCheck' placeholder="Password Check" class = 'input' id = 'passwordCheck'><br>
        <input type = 'tel' name = 'HP' placeholder="010-0000-0000" class = 'input'><br>
      </td>
    </tr>
  </table>
  <br>
  <div class = 'checkPW'></div>
  <input type = 'button' class = 'button' value="Modify">
  <input type = 'button' class = 'Mwitdrawal' value="membership withdrawal">
</form>
