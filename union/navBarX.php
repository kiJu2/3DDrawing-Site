<style>
@import url("/TermProject/union/unionCss.css?ver=3");
#navBar{
  height:80px;
  width: 100%;

  position: fixed;
  top: 0;
  left: 0;

  padding-left: 150px;
  padding-right: 150px;
  border-bottom: 1px solid #eee;

  overflow: hidden;
  background-color: white;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.50);

  z-index: 2;
}

#navBar #navLogo{
  height : 80%;

  margin-top: 8px;
}

#navBar .navRight{
  float: right;
  vertical-align: middle;
  line-height: 80px;
}

#navBar .navRight li{
  display: inline-block;
  float: left;
  padding: 0 15px;
  height: 80px;

  font-family: 'Crete Round', serif;
}

#navBar .navRight li:hover{
  display: inline-block;
  float: left;
  padding: 0 15px;
  height: 80px;

  background-color: #E6E6E6;
}

#space{
  height: 80px;
  width: 100%;
}

</style>
<link href="https://fonts.googleapis.com/css?family=Actor|Crete+Round&display=swap" rel="stylesheet">
<div id = "navBar">
  <a href = '/TermProject/door/door.php'>
   <img id="navLogo" src="/TermProject/imgs/HongchongIcon.png">
  </a>
  <ul class = "navRight">
    <a href = "/TermProject/login/index.php"><li>Login</li></a>
    <a href = "/TermProject/login/Signup.php"><li>Sign Up</li></a>
    <a href = '#'><li>Category</li></a>
    <a href = '#'><li>CS center</li></a>
  </ul>
</div>
<div id = "space">
</div>
