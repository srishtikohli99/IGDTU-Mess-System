<!doctype html>
<?php
    session_start();
    if($_SESSION['username']==null)
    {
        header("Location: ../mess/login.php");
    }
else
{
    $connection = mysqli_connect('localhost','root','','users');
    $query = "SELECT * FROM FOOD";
}


?>
<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="menu.css"  rel="stylesheet">

    <!-- menu -->
    
    
    
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="page-section">
                        <h1 class="page-title">Food Menu</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- starter -->
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                    <div class="menu-block">
                        <h3 class="menu-title">Starter</h3>
                        <?php
                        $i=0;
                        $result = mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($result))  
                        {
                            if($row['type']=="starter")
                            {
                            $item = $row['item'];
                            //$meta = $row['meta'];
                            $url = $row['image'];
                            $dish_id =$row['dish_id'];
                             $starter_id[$i++]=$dish_id;
                            
                            
                        echo "<div class='menu-content'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                                    <div class='dish-img'><a href='#'><img src='$url' height='70' width='70 alt='hello' class='img-circle'></a></div>
                                </div>
                                <div class='col-lg-9 col-md-9 col-sm-9 col-xs-12'>
                                    <div class='dish-content'>
                                    
                                        <h5 class='dish-title'><a href='#''> $item </a></h5>
                                         <span class='dish-meta'> Dish ID:$dish_id</span>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        
                        "    ;                            
                                
                            }} ?> 
         </div>
                </div>
          
                
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                    <div class="menu-block">
                        <h3 class="menu-title">Soup</h3>
                        <?php
                        $i=0;
                        $result = mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($result))  
                        {
                            if($row['type']=="soup")
                            {
                            $item = $row['item'];
                            //$meta = $row['meta'];
                            $url = $row['image'];
                            $dish_id =$row['dish_id'];
                            $soup_id[$i++]=$dish_id;
                        
                            
                            
                        echo "<div class='menu-content'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                                    <div class='dish-img'><a href='#'><img src='$url' height='70' width='70 alt='hello' class='img-circle'></a></div>
                                </div>
                                <div class='col-lg-9 col-md-9 col-sm-9 col-xs-12'>
                                    <div class='dish-content'>
                                    
                                        <h5 class='dish-title'><a href='#''> $item </a></h5>
                                        <span class='dish-meta'> Dish ID:$dish_id</span>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        "    ;            
                                
                                
                                
                            }}?>
                        
                   

                    </div>
                </div>
                
                
                 
                
                
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                    <div class="menu-block">
                        <h3 class="menu-title">Main Course</h3>
                        <?php
                        $i =0;
                        $result = mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($result))  
                        {
                            if($row['type']=="main course")
                            {
                            $item = $row['item'];
                            //$meta = $row['meta'];
                            $url = $row['image'];
                            $dish_id =$row['dish_id'];
                            $main_id[$i++]=$dish_id;
                        
                            
                            
                        echo "<div class='menu-content'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                                    <div class='dish-img'><a href='#'><img src='$url' height='70' width='70 alt='hello' class='img-circle'></a></div>
                                </div>
                                <div class='col-lg-9 col-md-9 col-sm-9 col-xs-12'>
                                    <div class='dish-content'>
                                    
                                        <h5 class='dish-title'><a href='#''> $item </a></h5>
                                         <span class='dish-meta'> Dish ID:$dish_id</span>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        "    ;                            
                                
                            }} ?>     
                    </div>
                </div>
                    
                
                   <form action="menu.php" method="post" >
                       
                       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                    <div class="menu-block">
                  <input list="starter" name="starter" required>
                  <datalist id="starter">
                      <?php 
                      foreach($starter_id as $did)
                      {
                      echo "<option value = '$did'>";
                      }
                        ?>
                  </datalist>
                           </div>
                       </div>
                    
                       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                    <div class="menu-block">
                  <input list="soup" name="soup" required>
                  <datalist id="soup">
                      <?php 
                      foreach($soup_id as $did)
                      {
                      echo "<option value = '$did'>";
                      }
                        ?>
                  </datalist>
                  
               
                    </div>
                </div>
                    
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                    <div class="menu-block">
                  <input list="main" name="main" required>
                  <datalist id="main">
                      <?php 
                      foreach($main_id as $did)
                      {
                      echo "<option value = '$did'>";
                      }
                        ?>
                  </datalist>
                       
                       
                <input type="submit" name = "submit">
                       </div>
                </form>
            </div>

                    
                    <?php
                    
                    if(isset($_POST['submit']))
                    {
                        
                        $username=$_SESSION['username'];
                        $query = "SELECT starter, soup, main_course from login where username='$username'";
                        $result=  mysqli_query($connection,$query);
                        $row=mysqli_fetch_assoc($result);
                        if($row['starter']==0)
                        {
                            $starter=$_POST['starter'];
                            $soup=$_POST['soup'];
                            $main=$_POST['main'];
                            $query = "UPDATE login set starter=$starter, soup =$soup, main_course=$main where username = '$username'";
                            mysqli_query($connection,$query);
                            echo "<b>Your vote is now registered!</b>";
                        }
                        else
                            echo "<b>Your vote is already registered!</b>";
                    }
                    
                    
                    ?>
                    
            </div>
    </div>
        
    </div>
        <style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
        <a href="welcome.php"><button class="button">Dashboard</button></a>

        
        
</html>

   