
<style>
/*Bottom Bar*/
.bottomBar{
  width: 100%;
  height: 100px;

  padding: 10px 200px;
  background-color: #E6E6E6;
}

.bottomBar .barLeft{
  width: 400px;
  height: 100%;

  float: left;
  /*background-color: red;*/
}

.barLeft .snsIcon:first-child{
  margin-left: 0;
}

.bottomBar .barRight{
  margin-top: 60px;
  float: right;
}

.bottomBar .snsIcon{
  width: 10%;
}

.bottomBar .copyRight{
  display: block;
  margin-top: 14px;
}

.barRightText{
  display: inline;
}
</style>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script>
var height = $(document).height() - $('body').height();
$(function(){
      if(height > 0){
        $(".bottomBar").before("<div style = 'display:block;height:"+ String(height) +"px; width:50%;'></div>");}
  });
</script>
<div class = "bottomBar">
  <div class = "barLeft">
    <a href = "https://www.facebook.com/%EC%BB%B4%EA%B3%B517%EC%9E%90%EC%8A%A4%ED%83%80-421572741561771/" target="_blank"><img src = "/TermProject/imgs/sns icon/facebook.png" class = "snsIcon"></a>
    <a href = "https://github.com/kiJu2" target="_blank"><img src = "/TermProject/imgs/sns icon/git.jpg" class = "snsIcon"></a>
    <b class = "copyRight">
      COPYRIGHT (C) Think-Things ALL RIGHTS
    </b>
  </div>
  <div class = "barRight">
    <b class = "barRightText">BY HONGCHONG</b>
    <a href = "/TermProject/aboutHongChong/hongchong_introduction.php" class = "barRightText">About HongChong</a>
  </div>
</div>
