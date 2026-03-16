<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <input type="hidden" name="id" id="id">
    <input type="text" name="name" id="name" placeholder="name"><br>
    <input type="email" name="email" id="email" placeholder="email"><br>
    <button id="insertA">Insert</button>
    <button id="updateA">Update</button>

    <div id="result"></div>  

    <script>
        loadData();

        function loadData(){
            $.ajax({
                url: "retrieve.php",
                type: "GET",  
                success: function(data){
                    $("#result").html(data); 
                }
            });
        }

        $("#insertA").click(function(){
            let name1 = $("#name").val();
            let email1 = $("#email").val();
            $.ajax({
                url: "insert.php",
                type: "POST",
                data: { name: name1, email: email1 },
                success: function(data){
                    alert(data);
                    loadData();
                }
            });
        });

        $("#updateA").click(function(){  
            let id = $("#id").val();
            let name = $("#name").val();
            let email = $("#email").val();
            $.ajax({
                url: "update.php",
                type: "POST",
                data: { id: id, name: name, email: email },
                success: function(data){ 
                    alert(data);
                    loadData();
                }
            });
        });

        function deleteData(id){
            if(confirm("Are you sure you want to delete?")){ 
                $.ajax({
                    url: "delete.php",
                    type: "POST",
                    data: { id: id },
                    success: function(data){
                        alert(data);
                        loadData();
                    }
                });
            }
        }

        function editData(id, name, email){
            $("#id").val(id);
            $("#name").val(name);
            $("#email").val(email);
        }
    </script>
</body>
</html>