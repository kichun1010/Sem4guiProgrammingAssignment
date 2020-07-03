  <?php
      $today = date("N",strtotime("now"));
      $hide = "UPDATE menu SET status = 'hide';";
      if($today==1)
          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'monday' OR SpecificDay = 'everyday' ;";
      if($today==2)
          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'tuesday' OR SpecificDay = 'everyday';";
      if($today==3)
          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'wednesday' OR SpecificDay = 'everyday';";
      if($today==4)
          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'thursday' OR SpecificDay = 'everyday';";
      if($today==5)
          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'friday' OR SpecificDay = 'everyday';";
      if($today==6)
          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'saturday' OR SpecificDay = 'everyday' ;";
      if($today==7)
          $update = "UPDATE menu SET status = 'show' WHERE SpecificDay = 'sunday' OR SpecificDay = 'everyday';";
      $conn = mysqli_connect("127.0.0.1", "root", "", "ITP4506")
or die(mysqli_connect_error());
      $ra = mysqli_query($conn,$hide) or die(mysqli_error($conn));
      $rb = mysqli_query($conn,$update) or die(mysqli_error($conn));
   mysqli_close($conn);
    header("Location:menuManagement1.php");
?>