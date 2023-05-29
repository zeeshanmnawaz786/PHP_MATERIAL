<!DOCTYPE html>
<html lang="en">
<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){
    
        })
    </script>


</head>
<body>
    Name:<input type="text" id="username" placeholder="Enter name"> <br/><br/>
    Email:<input type="text" id="useremail" placeholder="Enter email"> <br/><br/>

    <button id="submit">Submit</button>

    <button id="update" style="display:none;">Update</button>

    <center>
        <div id="table"></div>
    </center>





    <script>
        $(document).ready(function(){

            // AJAX POST

            $("#submit").on('click', function(){
               var name = $("#username").val();
               var email = $("#useremail").val();

               $.post("insert_data.php", {"name":name,"email":email}, function(data){
                loadData();
               });
            })

            // AJAX GET


            function loadData(){
            $.get("get_data.php", function (data){
                $("#table").html(data);
            })
            }
            loadData();

            // AJAX DELETE

            $(document).on("click", ".deleteButton", function(e){
                var id = $(this).attr("id");
                $.post("delete_data.php", {id:id}, function (data){
                    loadData();
                })
            })

            // AJAX UPDATE

            $(document).on("click", ".updateButton", function(e) {
            var id = $(this).attr("id");
            var name = $(this).closest("tr").find("td:eq(1)").text();
            var email = $(this).closest("tr").find("td:eq(2)").text();

            var upd_name = $("#username").val(name);
            var upd_email = $("#useremail").val(email);
                
            $("#submit").hide();
            $("#update").show();

            $("#update").click(function(){
                $.post("update_data.php", { id: id, name: upd_name.val(), email: upd_email.val() }, function(data) {
                   loadData();
                $("#submit").show();
                $("#update").hide();
                $("#username").val("");
                $("#useremail").val("");
                });
            })
});
})
    </script>
</body>
</html>