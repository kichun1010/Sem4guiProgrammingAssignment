<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Management</title>
    <!--  bootstrap css  -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
        <script src="jslib/jquery-3.3.1.js"></script> 
    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <!--//web-fonts-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="jslib/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
            $("#table").hide(0).delay(500).fadeIn(3000);
            $("#up").hide(0).delay(500).fadeIn(3000);
            $("#add").hide(0).delay(500).fadeIn(3000);
            
//            $.getJSON('menu.json',function(jd){
//                       <td><input type="text" value="Fish" readonly></td>
//       <td><input type="text" value="76" readonly></td>
//       <td><input type="radio" name="date" checked disabled>EveryDay <br><input type="radio" name="date" disabled>Specify Day</td>
//       <td><button id="modify0">Modify</button></td>
//       <td><button id="hide0">Hide Dish</button></td>
//       <td><button id="delete0">Delete Dish</button></td>
//              $("#table").html('<table border="1">');
//              $("#table").append('<tr><th>Dishes</th><th>Price($)</th><th>Date</th><th>Modify</th><th>Hide</th><th>Delete</th><th style="visibility:hidden;" id="fh">From</th><th style="visibility:hidden;" id="ft">To</th><th style="display=none;visibility:hidden;"></th></tr>');
//              for(var i = 0; i<jd.normal["dishes"].length;i++){
//                $("#table").append('<tr><td><input type="text" id="dish'+i+'" value="'+jd.normal["dishes"][i]+'" readonly></td><td><input type="text" id="price'+i+'" value="'+jd.normal["price"][i]+'"readonly></td><td><input type="radio" id="every'+i+'" value="every" name="date'+i+'" checked disabled>EveryDay <br><input type="radio" id="specify'+i+'" value="specify" name="date'+i+'" disabled>Specific Day</td><td><button class="modify">Modify</button></td><td><button class="hide">Hide Dish</button></td><td><button class="delete">Delete Dish</button></td><td style="visibility:hidden;" id="f'+i+'"><input type="date" id="from'+i+'"></td><td style="visibility:hidden;" id="t'+i+'"><input type="date" id="to'+i+'"></td><td  style="display=none;visibility:hidden;"><input type="text" value="'+i+'"></td></tr>');
//                localStorage.setItem("dish"+i,$("#dish"+i).val());
//                localStorage.setItem("price"+i,$("#price"+i).val());
//            localStorage.setItem("date"+i,$("input[type=radio]:checked").val());
//                }
//                $("#table").append('</table>');
//                $("#table").append('<button id="add">Add Dishes</button>');
//                });
//            
//                $(".modify").click(function(){
//                var tr = $(this).closest('tr');
//                var dish = tr.find('td:eq(0)').find('input').val();
//                var price = tr.find('td:eq(1)').find('input').val();
//                var num = tr.find('td:eq(8)').find('input').val();
//                var date = tr.find('td:eq(2)').find("input:radio:checked").val();
//                $("#dishes").val(dish);
//                $("#price").val(price);
//                $("#num").val(num);
//                $('#'+date).prop("checked",true);
//                $("#updateForm").fadeIn("slow");
//                    alert(date+num);
//                });
//            
//            
                $(".modify").click(function(){
                var tr = $(this).closest('tr');
                var dish = tr.find('td:eq(0)').find('input').val();
                var price = tr.find('td:eq(1)').find('input').val();
                var date = tr.find('td:eq(2)').find('input').val();
                var id = tr.find('td:eq(9)').find('input').val();
//                var num = tr.find('td:eq(8)').find('input').val();
//                var date = tr.find('td:eq(2)').find("input:radio:checked").val();
                $("#dishes").val(dish);
                $("#price").val(price);
                $("#date").val(date);
                $("#id").val(id);
//                $("#num").val(num);
//                $('#'+date).prop("checked",true);
                $("#modifyForm").show();
                    
//                    alert(date+num);
            });
//            $("#specify").click(function(){
//                $("#from").show();
//                $("#to").show();
//            });
//            
//            $("#every").click(function(){
//                $("#from").hide();
//                $("#to").hide();
//            });
//            
            $("#update").click(function(){
//                $("#updateForm").fadeOut("slow");
                document.getElementById("updateForm").submit();
                alert("Your dish No."+$("#id").val()+" has been updated");
            });
            
//                var num = $("#num").val();
//                var check = $("#updateForm").find("input:radio:checked").val();
//                if(check.includes("specify")){
//                    localStorage.setItem("from"+num,$("#from").val());
//                    localStorage.setItem("to"+num,$("#to").val());
//                    $("#from"+num).val(localStorage.getItem("from"+num));
//                    $("#to"+num).val(localStorage.getItem("to"+num));
//                    $("#f"+num).show();
//                    $("#t"+num).show();
//                    $("#fh"+num).show();
//                    $("#th"+num).show();
//                }
//                localStorage.setItem("dish"+num,$("#dishes").val());
//                localStorage.setItem("price"+num,$("#price").val());
//                localStorage.setItem("date"+num,check);
//                $("#dish"+num).val(localStorage.getItem("dish"+num));
//                $("#price"+num).val(localStorage.getItem("price"+num));
//                var date = localStorage.getItem("date"+num);
//                $("#"+date+num).prop("checked",true);
//                alert("The dish has been updated");
//                alert(check+num);
//            });
//            
            $(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
            
            $("#change").on("click",function(){
                $("#modal").fadeIn(1000);
            }); 
            $("#close").click(function(){
                $("#modal").fadeOut(1000);
            });
            
            $("#go").click(function(){
                if(confirm("Are you sure you want to change your password?")){
                    alert("Your password has been changed!");
                    location.reload();
                }
            });
            $("#cancel").click(function(){
                $("#updateForm").fadeOut("slow");
            });
            
            $("img").mouseenter(function(){
                $(this).toggle("scale", {percent: 200}, 2000 );
            },function(){
                $(this).toggle("scale", {percent: 100}, 2000);
            });
//            
//            $(document).on("click",".delete",function(){
//                var tr = $(this).closest('tr');
//                var num = tr.find('td:eq(8)').find('input').val();
//                var json;
//                $.getJSON('menu.json',function(jd){
//                    json = jd;
//                });
//                alert(json["normal"]["dishes"][num]+" has been deleted");
//                delete json["normal"]["dishes"][num];
//                delete json["normal"]["price"][num];
//            
//            }); 
        });
        function del(id){
            delID = document.getElementById("delID");
            delID.value = id;
                document.getElementById("form").submit();
                alert("Your menu has been delete"+$("#id").val());
            }
        
        function hide(id){
            delID = document.getElementById("delID");
            delID.value = id;
            form=document.getElementById('form');
            form.target='_blank';
            form.action='hide.php';
            form.submit();
            form.action='delete.php';
            form.target='';
//            alert(id);
        }
        
        function show(id){
            delID = document.getElementById("delID");
            delID.value = id;
            form=document.getElementById('form');
            form.target='_blank';
            form.action='show.php';
            form.submit();
            form.action='delete.php';
            form.target='';
        }
        
    </script>
</head>
<body> 
      <div class="modal-open" id="modal" style="position: absolute;z-index:2;top: 20%;left: 30%;" role="dialog" hidden>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ff9022">
               <button type="button" class="close" data-dismiss="modal" id="close">&times;</button>
                <h2 class="modal-title" id="modalTitle">Change Password</h2>
            </div>
            <div class="modal-body">
                <form id="changePw">
                   <div class="form-group">
                   <label for="">Old Password</label>
                    <input type="password" name="" id="oldPw" class="form-control" >
                    </div>
                    <div class="form-group">
                   <label for="">New Password</label>
                    <input type="password" id="newPw" name="" class="form-control" >
                    </div>
                    
                    <div class="form-group">
                   <label for="">Confirm Password</label>
                    <input type="password" id="" name="" class="form-control" >
                    </div>
                    
<!--                    <a href="" class="btn btn-primary btn-block" id="go">Login</a>-->
                    <input type="button" class="btn btn-primary btn-block" id="go" value="Chagne" >
                    <input type="reset" class="btn btn-primary btn-block" value="Reset" style="background-color: crimson">
                </form>
            </div>
        </div>
    </div>
</div>
       <div class="banner inner-bg-w3" id="home">
        <!-- header -->
        <div class="banner-top">
            <div class="contact-bnr-w3-agile">
                <ul>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">yummy _everywhere@gmail.com</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+852 2345-6789</li>
                    <li class="dropdown menu__item"><i class="fa fa-user" aria-hidden="true"></i>
						<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">operator<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background-color:darkgray;">
							<li><a href="operatorProfile.html">Profile</a></li>
							<li><a href="javascript:void(0)" id="change">Change Password</a></li>
						</ul>
					</li>
                    <li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="index.html">Log Out</a></li>
                    <li>
                        <div class="search">
                            <input class="search_box" type="checkbox" id="search_box">
                            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                            <div class="search_form">
                                <form action="#" method="post">
                                    <input type="search" name="Search" placeholder="Search..." required="" />
                                    <input type="submit" value="Send" />
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <header>
            <div class="container">

                <!-- navigation -->
                <div class="w3_navigation">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header navbar-left">
                            <!--
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
-->
                            <div class="w3_navigation_pos" style="text-align: center;">
                                <h1><a href="index.html"><span>Y</span>ummy <br><span>E</span>verywhere</a></h1>
                            </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <nav class="menu menu--miranda">
                                <ul class="nav navbar-nav menu__list">
                                    <li class="menu__item"><a href="index.html" class="menu__link">Home</a></li>
                                    <li class="menu__item"><a href="#" class=" menu__link">About</a></li>
                                    <li class="menu__item"><a href="contact.html" class=" menu__link">Contact</a></li>
                                    <li class="menu__item"><a href="menuManagement1.php" class=" menu__link">Menu Manage</a></li>
                                    <li class="menu__item"><a href="shopInformation.html" class=" menu__link">Shop Information</a></li>
                                </ul>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"></div>
                <!-- //navigation -->
            </div>
        </header>
        <!-- //header -->
    </div>
    <h2 class="tittle-w3">Menu<span>Management</span></h2>
      <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--        <fieldset>      -->
<!--
        <legend>Menu</legend>      
        <input type="checkbox" name="favorite_pet" value="Cats">Cats<br>      
        <input type="checkbox" name="favorite_pet" value="Dogs">Dogs<br>      
        <input type="checkbox" name="favorite_pet" value="Birds">Birds<br>      
        <br>      
        <input type="submit" value="Submit now" />      
    </fieldset>
-->
<form action="addDishes.html" method="get" id="add" style="margin-left:50px;display: inline-block;"><input type="submit" value="Add New Menu" class="btn btn-primary"></form>
<form style="display: inline-block; " id="up" action="pre-date.php" method="post">
<input class="btn btn-primary" type="submit" value="Update Today Menu"></form>
 <form id="form" action="delete.php" method="post">
 <input type="hidden" id="delID" name="delID">
  <div id="table" style="margin:0px 0px 100px 50px ">
  <table border="1" class="table">
       <tr>
       <th>Dishes</th>
       <th>Price($)</th>
       <th>Date</th>
       <th>Status</th>
       <th>Modify</th>
       <th>Show</th>
       <th>Hide</th>
       <th>Delete</th>
       <th>Photo</th>
       </tr>
  <?php
//      $today = date("N",strtotime("now"));
//      $hide = "UPDATE menu SET status = 'hide';";
//      if($today==1)
//          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'monday' OR SpecificDay = 'everyday' ;";
//      if($today==2)
//          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'tuesday' OR SpecificDay = 'everyday';";
//      if($today==3)
//          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'wednesday' OR SpecificDay = 'everyday';";
//      if($today==4)
//          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'thursday' OR SpecificDay = 'everyday';";
//      if($today==5)
//          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'friday' OR SpecificDay = 'everyday';";
//      if($today==6)
//          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'saturday' OR SpecificDay = 'everyday' ;";
//      if($today==7)
//          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'sunday' OR SpecificDay = 'everyday';";
      $conn = mysqli_connect("127.0.0.1", "root", "", "ITP4506")
or die(mysqli_connect_error());
//      $ra = mysqli_query($conn,$hide) or die(mysqli_error($conn));
//      $rb = mysqli_query($conn,$update) or die(mysqli_error($conn));
      $sql = "SELECT * FROM menu ;";
            $rs = mysqli_query($conn, $sql)
            or die(mysqli_error($conn));
       while ($rc = mysqli_fetch_assoc($rs)) {
?>
       <tr id="data">
       <td id="dishNametd"><input hidden class="dishName" type="text" value="<?php echo $rc['Dishes'] ?>" readonly><p><?php echo $rc['Dishes'] ?></p></td>
       <td><input type="text" hidden value="<?php echo $rc['Price'] ?>" readonly><p><?php echo $rc['Price'] ?></p></td>
       <td><input type="text" style="outline: none;" value="<?php echo $rc['SpecificDay'] ?> " hidden readonly><p><?php echo $rc['SpecificDay'] ?></p></td>
       <td><input type="text" style="outline: none;" value="<?php echo $rc['status'] ?> "hidden readonly> <p><?php echo $rc['status'] ?></p></td>
       <td><input type="button" value="Modify Dish" style="background-color: #337ab7;color:#FFFFFF" class="btn modify"></td>
       <td><input type="button" class="btn btn-primary" onClick="show(<?php echo $rc['ID'] ?>);" value="Show Dish"></td>
       <td><input type="button" class="btn btn-primary" onClick="hide(<?php echo $rc['ID'] ?>);" value="Hide Dish"></td>
       <td><input type="button" class="btn btn-primary" value="Delete Dish" onClick="del(<?php echo $rc['ID'] ?>);"></td>
       <td class="pic" id="img<?php echo $rc['ID'] ?>"><img src="food/<?php echo $rc['Dishes'] ?>.jpg" alt="img<?php echo $rc['ID'] ?>" style="width:300px;height:300px;"></td>
        <td style="visibility:hidden;"><input type="hidden" value="<?php echo $rc['ID'] ?> "readonly></td>
       </tr>
       <?php };?>
   </table>
   </div>
   </form>
<!--
   <form style="margin:0px 0px 100px 50px" id="updateForm" method="post" action="Data.php" hidden class="book-form">
       <fieldset>
       <legend><h1 style="color:#fff">Update Dishes</h1></legend><br>
       <p>Dishes : <input type="text" name="dishes" id="dishes"></p>
       <p>Price : <input type="text" name="price" id="price"></p>
           <p>Date : <input type="text" name="date" id="date" > </p>
           <input type="hidden" name="id" id="id" >
       <input type="hidden" id="num">
      <div style="margin:0px 0px 0px 35%">
       <input type="button" value="Update" class="button" id="update" style="background-color:orange;width:200px;height:50px;font-size:20px">
       <input type="button" value="Cancel" class="button" id="cancel" style="background-color:orange;width:200px;height:50px;font-size:20px">
       </div>
       </fieldset>
    </form>
-->
   <div class="modal-open" id="modifyForm" style="position: absolute;z-index:2;top: 20%;left: 30%;" role="dialog" hidden>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ff9022">
               <button type="button" class="close" data-dismiss="modal" id="close">&times;</button>
                <h2 class="modal-title" id="modalTitle">Modify Dish</h2>
            </div>
            <div class="modal-body">
                <form id="updateForm" method="post" action="Data.php">
                   <div class="form-group">
                   <label for="">Dishes</label>
                    <input type="text" name="dishes" class="form-control" id="dishes">
                    </div>
                    <div class="form-group">
                   <label for="">Price</label>
                    <input type="text" name="price" id="price" class="form-control">
                    </div>
                    
                    <div class="form-group">
                   <label for="">Date</label>
                    <input type="text" name="date" id="date" class="form-control">
                    </div>
                    <input type="hidden" name="id" id="id" >
<!--                    <a href="" class="btn btn-primary btn-block" id="go">Login</a>-->
                   <input type="button" value="Update" class="btn btn-primary btn-block" id="update">
       <input type="button" value="Cancel" style="background-color: crimson" class="btn btn-primary btn-block" id="cancel">
                </form>
            </div>
        </div>
    </div>
</div>
   
   
    <div style="position: fixed;bottom: 0;width: 100%;background:rgb(32, 32, 32);">
    <div class="col-md-4 mail-agileits-w3layouts">
								<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
								<div class="contact-right">
									<p style="color: #fff">Phone</p><span style="color: lightblue">+852 2345-6789</span>
								</div>
							</div>
							<div class="col-md-4 mail-agileits-w3layouts">
								<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
								<div class="contact-right">
									<p style="color: #fff">Email</p><a href="mailto:info@example.com" style="color: lightblue">yummy_everywhere@gmail.com</a>
								</div>
							</div>
							<div class="col-md-4 mail-agileits-w3layouts">
								<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p style="color: #fff">Address</p><span style="color: lightblue">7784 Diamonds street, California, HK.</span>
								</div>
							</div>
</div>
</body>
</html>