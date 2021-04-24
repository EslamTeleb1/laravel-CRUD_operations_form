
<!doctype html>
<html lang="ar" dir="rtl" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--ajax-->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
   <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> -->
   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!--css-->
   
    <link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/sidebarStyle.css" rel="stylesheet" type="text/css">
    <!--fontawsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>Hello</title>


  </head>
  <body>

<div class="container-fluid">

  <div class="row" >

  <div class="col-sm-12"  >
  
                  
  <nav class="navbar navbar-expand navbar-dark "> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="container"> 
              <ul>
              <li style="margin-left:250px;border:none">مكتب محمد زين للمحاماه</li>
                  <li><a><button class="button">مراقبة المستخدم</button></a></li>
                  <li class="fas fa-search button" ></li>
                  <li><a><button class="button">عن البرنامج </button></a></li>
                  <li><a><button class="button">عن الشركة المنتجة</button></a></li>
              </ul>

            </div>
         </nav>
  
       
  </div>




  <div class="col-sm-12 bg" id ="mainComtent" style="background-image:url('img/bg.jpg');  background-position: bottom;">

  <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="#"> Start Bootstrap </a> </li>
                    <li> <a href="#">Dashboard</a> </li>
                    <li> <a href="#">Shortcuts</a> </li>
                    <li> <a href="#">Overview</a> </li>
                    <li> <a href="#">Events</a> </li>
                    <li> <a href="#">About</a> </li>
                    <li> <a href="#">Services</a> </li>
                    <li> <a href="#">Contact</a> </li>
                </ul>
            </div>
</div>


</div>
  

      <div class="col-sm-12" style="background-color:yellow;">

      <footer>
        <div class="container text-center" >
         
            <p >نظام لوير لادراة المكاتب والمحاماه</p>

        </div>
       </footer>
       </div>



  
    </div>




 </div>
                

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
  <script>
                      $(function(){
                        $("#menu-toggle").click(function(e) {
                            e.preventDefault();
                            $("#wrapper").toggleClass("toggled");
                        });

                        $(window).resize(function(e) {
                          if($(window).width()<=768){
                            $("#wrapper").removeClass("toggled");
                          }else{
                            $("#wrapper").addClass("toggled");
                          }
                        });
                      });
                      
                    </script>
</html>