<?php
require_once 'repositories/adminData.php';
session_start();
if(!isset($_SESSION["admin"])){
    header("Location: signin.php");
    return;
}
$adminDB=new adminData() ;
$admin=$adminDB->getAdmin($_SESSION['admin']['login']);
if($admin==null||$_SESSION['admin']['timeout']<time()){
    header("Location:signout.php");
    return;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <style>
       body{
           background-color: black;
       }
       main{
           margin-bottom: 10%;
       }
        .admin{
            background-color: green;
            color:white;
            border-radius: 10px;
            padding: 6px;
            margin-left:5% ;
        }
        .btn{
            background-color: green;
            color:white;
            border-radius: 10px;
            padding:6px;
            margin-left: 5%;
            text-align: center;
            text-decoration: none;
        }
        .btn:hover{
           background-color: white;
            color: green;
        }
        main{
            margin-top: 3%;
            margin-left: 3%;
        }
        .adminMenu{
            border-radius: 5px;
            border: orange 2px solid;
            width: 30%;
            margin-top: 5%;
        }
        .adminMenu>button{
            border-radius: 10px;
            background-color: green;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 15px;
            margin-left: 40%;
            text-transform: uppercase;
            width: 100px;
        }
        .options{
            width: 50%;
            border: orange 2px solid;
            margin-top: 5%;
            float: right;
            margin-right: 5%;
            height: 450px;
            background-image: url("book.png") ;
            background-repeat: no-repeat;
            background-size: 80% 100%;
            align-items: center;
        }
        .options label{
            font-size: 40px;
            font-family: Gabriola;
            color: green;
        }
        .options input, select, option{
            width: 300px;
            border-bottom: green 2px solid;
            border-top: none;
            border-right:none;
            border-left: none;
            background: none;
            text-align: center;
            outline:0;
            font-size: 30px;
            font-family: Gabriola;
            float: right;
            margin-right: 30%;
        }
        .adding{
            margin-left: 5%;
            margin-top: 15px;
        }
        .deleting, .updating, .setting{
            margin-top: 100px;
            margin-left: 5%;
        }
        #photo{
            width: 100px;
            border-radius: 50%;
        }
        footer p{
            font-size: 20px;
            text-align: center;
            color:orange;
            padding:3px;
            height: 15px;
        }
    </style>
    <script>
 $(document).ready(function () {
     $('#deleteOption, #addOption, #updateOption, #profileOption, #viewOption').hide();
     $("#addMenu").click(function()
     {
         event.preventDefault();
         $('#default, #deleteOption, #updateOption, #viewOption, #profileOption').hide();
         $('#addOption').show();
     });
     $("#delete").click(function()
     {
         event.preventDefault();
         $('#deleteOption').show();
         $('#default, #addOption, #updateOption, #viewOption, #profileOption').hide();
     });
     $("#update").click(function()
     {
         event.preventDefault();
         $('#updateOption').show();
         $('#default, #addOption, #deleteOption, #viewOption, #profileOption').hide();
     });
     $("#settings").click(function()
     {
         event.preventDefault();
         $('#profileOption').show();
         $('#default, #addOption, #deleteOption, #viewOption, #updateOption').hide();
     });
     $("#view").click(function()
     {
         event.preventDefault();
         $('#viewOption').show();
         $('#default, #addOption, #deleteOption, #updateOption, #profileOption').hide();
     });
     $("#insertion").click(function () {
         event.preventDefault();
         $.ajax('addControll.php',{
             type:'POST',
             data:({
                 type: $("#type").val(),
                 id:$("#addId").val(),
                 name:$("#addName").val(),
                 price:$("#addPrice").val(),
                 img:$("#addImg").val()
             }),
             accepts: 'application/json; charset=utf-8',
             success:function (data) {
               if(data.message=="success"){
                   $('#status').text('The menu succesfully added!');
                   $('#addingForm').trigger('reset');
               }
             }

         });
     });
     $("#updating").click(function () {
         event.preventDefault();
         $.ajax('updateControll.php',{
             type:'POST',
             data:({
                 type:$("#updateType").val(),
                 id:$("#updateId").val(),
                 price:$("#updatePrice").val()
             }),
             accepts: 'application/json; charset=utf-8',
             success:function (data) {
                 if(data.message=="success"){
                     $('#updateStatus').text('The menu succesfully updated!');
                     $('#updateForm').trigger('reset');
                 }
             }
         });
     });
     $("#deleting").click(function () {
         event.preventDefault();
         $.ajax('deleteControll.php',{
             type:'POST',
             data:({
                 type:$("#deleteType").val(),
                 id:$("#deleteId").val()
             }),
             accepts: 'application/json; charset=utf-8',
             success:function (data) {
                 if(data.message=="success"){
                     $('#deleteStatus').text('The menu successfully deleted!');
                     $('#deleteForm').trigger('reset');
                 }
             }
         });
     });
     $("#profileSet").click(function () {
         event.preventDefault();
         $.ajax('ProfileSettings.php', {
             type:'POST',
             data:({
                 login:$("#adminLog").val(),
                 password:$("#adminPass").val(),
                 avatar:$("#adminAvatar").val()
             }),
             accepts:'application/json; charset=utf-8',
             success:function (data) {
             if(data.message=="success"){
                 $('#adminStatus').text('Your data successfully updated!');
                 $('#settingForm').trigger('reset');
             }
             }
         });

     });
 });
    </script>

</head>
<body>
<main>
    <div style="display: flex">
        <img src="<?php echo $admin->getAvatar() ?>" id="photo">
        <h2 class="admin"><?php echo $admin->getName() . ' ' . $admin->getSurname() ?></h2>
        <a href="signout.php" class="btn"><h2>LOG OUT</h2></a>
    </div>
    <section class="options" id="default"></section>
    <section class="options" id="addOption">
        <div class ="adding">
            <form id="addingForm">
                <label for="type">Menu type</label>
                <select id="type">
                    <option value="hotfood">Hot Food</option>
                    <option value="deserts">Desert</option>
                    <option value="drinks">Drink</option>
                    <option value="sushi">Sushi</option>
                    <option value="salads">Salad</option>
                </select>
                <br>
                <label for="addId">Menu Id:</label>
                <input type="text" id="addId"><br>
                <label for="addName">Food Name:</label>
                <input type="text" id="addName"><br>
                <label for="addPrice">Food Price:</label>
                <input type="text" id="addPrice"><br>
                <label for="addImg">Img:</label>
                <input type="text" id="addImg"><br>
                <span id="status" style="margin-left: 5%; color: green; font-family: Gabriola; font-size: 25px"></span>
                <button type="submit" id="insertion" class="btn" style="float: right; margin-right: 5%; width: 200px; font-size: 40px">Add</button>
            </form>
        </div>
    </section>
    <section class="options" id="deleteOption">
        <div class ="deleting">
            <form id="deleteForm">
                <label for="deleteType">Menu type</label>
                <select id="deleteType">
                    <option value="hotfood">Hot Food</option>
                    <option value="deserts">Desert</option>
                    <option value="drinks">Drink</option>
                    <option value="sushi">Sushi</option>
                    <option value="salads">Salad</option>
                </select>
                <br>
                <label for="deleteId">Menu Id:</label>
                <input type="text" id="deleteId"><br>
                <span id="deleteStatus" style="margin-left: 5%; color: green; font-family: Gabriola; font-size: 25px"></span>
                <button type="submit" id="deleting" class="btn" style="float: right; margin-right: 5%; width: 200px; font-size: 40px">DELETE</button>
            </form>
        </div>
    </section>
    <section class="options" id="updateOption">
        <div class ="updating">
            <form id="updateForm">
                <label for="updateType">Menu type</label>
                <select id="updateType">
                    <option value="hotfood">Hot Food</option>
                    <option value="deserts">Desert</option>
                    <option value="drinks">Drink</option>
                    <option value="sushi">Sushi</option>
                    <option value="salads">Salad</option>
                </select>
                <br>
                <label for="updateId">Menu Id:</label>
                <input type="text" id="updateId"><br>
                <label for="updatePrice">New Price:</label>
                <input type="text" id="updatePrice"><br>
                <span id="updateStatus" style="margin-left: 5%; color: green; font-family: Gabriola; font-size: 25px"></span>
                <button type="submit" id="updating"class="btn" style="float: right; margin-right: 5%; width: 200px; font-size: 40px">UPDATE</button>
            </form>
        </div>
    </section>
    <section class="options" id="profileOption">
        <div class ="setting">
            <form id="settingForm">
                <label for="adminLog">Login:</label>
                <input type="text" id="adminLog"><br>
                <label for="adminPass">Password:</label>
                <input type="password" id="adminPass"><br>
                <label for="adminAvatar">Avatar:</label>
                <input type="text" id="adminAvatar"><br>
                <span id="adminStatus" style="margin-left: 5%; color: green; font-family: Gabriola; font-size: 25px"></span>
                <button type="submit" id="profileSet" class="btn" style="float: right; margin-right: 5%; width: 200px; font-size: 40px">UPDATE</button>
            </form>
        </div>
    </section>
    <section class="options" id="viewOption">
        <iframe src="menuBook.php" width="100%" height="450px"></iframe>
    </section>
    <section class="adminMenu">
       <button id="addMenu" type="button">Add menu</button>
        <button id="delete" type="button">Delete menu</button>
        <button id="update" type="button">Update menu</button>
        <button id="settings"type="button">Profile settings</button>
        <button id="view"type="button">View menu</button>
    </section>
</main>
<footer>

</footer>

</body>
</html>

