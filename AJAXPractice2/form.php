<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jabo.js"></script>
</head>
<body>
    <input type="hidden" name="id" id="id">
    <input type="text" name="name" id="name" placeholder="name"> <br>
    <input type="text" name="email" id="email" placeholder="email"> <br>
    <input type="text" name="search" id="search" placeholder="search"> <br>
    <button id="insertbaby">INSERT</button> <br>
    <button id="updatebaby">UPDATE</button> <br>
    <button id="fadeNegger">FADE THIS NIGGA</button> <br>


    <div id="displaybaby"></div>

    <script>
        loadData();

        $("#fadeNegger").click(function(){
            $("#displaybaby").fadeOut("slow");
        });

        $("#search").keyup(function(){
            let name = $("#search").val().trim();
            $.ajax({
                url: "search.php",
                type: "POST",
                data: {
                    name: name
                },
                success:function(data){
                    $("#displaybaby").html(data);
                }
            });
        });


        function loadData(){
            $.ajax({
                url: "retrieve.php",
                type: "POST",
                success:function(data){
                    $("#displaybaby").html(data);
                }
            });
        }

        function deleteData(id){
            if(confirm("are you sure you want to delete this nigga?")){
            $.ajax({
                url: "delete.php",
                type: "POST",
                data:{ id:id },
                success:function(data){
                    alert(data);
                    $("#row"+id).fadeOut(500,function(){
                        $(this).remove();
                    });
                }
            });
            }
        }


        $("#insertbaby").click(function(){
            let name = $("#name").val();
            let email = $("#email").val();
            $.ajax({
                url: "insert.php",
                type: "POST",
                data: {
                    name: name,
                    email: email
                },
                success:function(data){
                    alert(data);
                    loadData();
                }
            });
        });

        function editData(id,name,email){
            $("#id").val(id);
            $("#name").val(name);
            $("#email").val(email);
        }

        $("#updatebaby").click(function(){ 
            let id = $("#id").val();
            let name = $("#name").val();
            let email = $("#email").val();

            $.ajax({
                url: "update.php",
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    email: email
                },
                success:function(data){
                    alert(data);
                    loadData();
                }
            });
        });
           
        
    </script>
</body>
</html>