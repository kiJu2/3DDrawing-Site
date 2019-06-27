<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>CSS</title>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script>
     $(document).on('click', '#b', function(event) {
       console.log("click2");
     });
      $('#b').on('click', function(){
        console.log("click");
      });
    </script>
    <style>
      #b {
        width: 500px;
        height: 300px;
        border: 1px solid #444444;
      }
    </style>
  </head>
  <body>
    <div id="b">
      <!-- <h1>Lorem Ipsum Dolor<br>asd</h1> -->
    </div>
  </body>
</html>
