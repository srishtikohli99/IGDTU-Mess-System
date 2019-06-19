<!doctype html>
<?php
    session_start();
    if($_SESSION['admin_username']==null)
    {
        header("Location: ../mess/login.php");
    }

    $connection = mysqli_connect('localhost','root','','users');
    $query = "SELECT * FROM FOOD";



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
                            $q = "SELECT COUNT(*) abc FROM login WHERE starter=$dish_id";
                            $res = mysqli_query($connection,$q);
                                if(!$res)
                                    echo "hello";
                            $row =mysqli_fetch_assoc($res);
                            $count=$row['abc'];
                        echo "<div class='menu-content'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                                    <div class='dish-img'><a href='#'><img src='$url' height='70' width='70 alt='hello' class='img-circle'></a></div>
                                </div>
                                <div class='col-lg-9 col-md-9 col-sm-9 col-xs-12'>
                                    <div class='dish-content'>
                                    
                                        <h5 class='dish-title'><a href='#''> $item </a></h5>
                                         <span class='dish-meta'> Dish ID:$dish_id VOTES :$count</span>
                                         
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
                            $q = "SELECT COUNT(*) abc FROM login WHERE soup=$dish_id";
                            $res = mysqli_query($connection,$q);
                                if(!$res)
                                    echo "hello";
                            $row =mysqli_fetch_assoc($res);
                            $count=$row['abc'];
                        
                            
                            
                        echo "<div class='menu-content'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                                    <div class='dish-img'><a href='#'><img src='$url' height='70' width='70 alt='hello' class='img-circle'></a></div>
                                </div>
                                <div class='col-lg-9 col-md-9 col-sm-9 col-xs-12'>
                                    <div class='dish-content'>
                                    
                                        <h5 class='dish-title'><a href='#''> $item </a></h5>
                                        <span class='dish-meta'> Dish ID:$dish_id Votes:$count</span>
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
                                $q = "SELECT COUNT(*) abc FROM login WHERE main_course=$dish_id";
                            $res = mysqli_query($connection,$q);
                                if(!$res)
                                    echo "hello";
                            $row =mysqli_fetch_assoc($res);
                            $count=$row['abc'];
                        
                            
                            
                        echo "<div class='menu-content'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                                    <div class='dish-img'><a href='#'><img src='$url' height='70' width='70 alt='hello' class='img-circle'></a></div>
                                </div>
                                <div class='col-lg-9 col-md-9 col-sm-9 col-xs-12'>
                                    <div class='dish-content'>
                                    
                                        <h5 class='dish-title'><a href='#''> $item </a></h5>
                                         <span class='dish-meta'> Dish ID:$dish_id Votes:$count</span>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        "    ;                            
                                
                            }} ?>     
                    </div>
                </div>
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
        <a href="welcomeadmin.php"><button class="button">Dashboard</button></a>

        
        
</html>

   