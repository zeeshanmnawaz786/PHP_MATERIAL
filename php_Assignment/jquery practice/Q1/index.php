<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function () {
        $("button").click(function () {
          $.post(
            "demo_test_post.php",
            { name: "John", age: 25 },
       function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });
        });
      });
    </script>
  </head>
  <body>
    <button>Button</button>
    
  </body>
</html>
