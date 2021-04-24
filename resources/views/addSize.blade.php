<?php 
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;
use App\Models\size;
$sizes =size::all();

?>

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
<!--style css-->

<style>
    .formWidth{

     padding-right:100px
}

table tbody tr {

border:2px solid black;
}
table tbody tr:hover{
border:5px solid green;
}
</style>

    <title>Hello, world!</title>
  </head>
  <body>
      <br>
      <br>

  <div class="container row">


    <div class="container formWidth col-sm-4" >

          <form onsubmit="return false">
          @csrf
              <div class="form-group">
                <label for="sizeNum" class="">رقم الحجم</label>
                <input type="text" name="sizeNum" class="form-control"   placeholder="">
                <p id="errorNum" style="color:red"></p>
                <label for="sizeName" class="text-right">اسم الحجم</label>
                <input type="" name ="sizeName"class="form-control"   placeholder=""> 
                <p id="errorName" style="color:red"></p>  
        
                </div>
              
                  <fieldset>
                    <div class="form-group">
                      <label for="selectSizeType" class="text-right">وحدة الحجم</label>
                      <select name="sizeType"  class="form-control">
                        <option>بالكيلوا</option>
                        <option>بالجرام</option>
                      </select>
                       
                       <p id="errorType" style="color:red"></p>
                    
                    </div>
                  
                  </fieldset>

                            
          <br>
              <button  id="add"class="btn btn-success">اضافة</button>
              <button  id="new"class="btn btn-primary">جديد</button>
              <button  id ="save"class="btn btn-warning">حفظ</button>
              <button  id="delete" class="btn btn-danger">حذف</button>


              </div>
            </form>
      <br>
    <div class="container formWidth col-sm-4" >
            <table class="table">
                    <thead>
                      <tr>
                        <th>رقم الحجم</th>
                        <th>اسم الحجم</th>
                        <th>وحدة الحجم </th>
                      </tr>
                    </thead >
                    <tbody >
             @foreach($sizes as $size)
              <tr id="size_id_{{ $size->Size_ID}}" onclick="getSize({{ $size->Size_ID  }},'{{ $size->Size_Name }}','{{ $size->Unit_ID }}' )">
                 <td scope="row">{{ $size->Size_ID  }}</td>
                 <td>{{ $size->Size_Name }}</td>
                 <td>{{ $size->Unit_ID }}</td>
              </tr>
              @endforeach
                    </tbody>


                    
                  </table>
       

             </div>

      <div class="container formWidth col-sm-4" >
               <!--search one -->   
               <p> search in database</p>  

            <div class="input-group">
            <button class="btn btn-success " id="search" type="button">Search</button>
                <input type="text" name ="search" class="form-control" placeholder="بحث برقم الحجم">
                <p id="searchType" style="color:red"></p>

              </div>
              <br>
              <p>search in html page<p>
         
               <!--search two -->     
               <div class="input-group">
            <button class="btn btn-success " id="search2" type="button">Search</button>
                <input type="text" name ="search2" class="form-control" placeholder="بحث برقم الحجم">
                <p id="search2Type" style="color:red"></p>

              </div>



         <br>
         <br>
         <p class="text-right"> تحميل صورة  </p>
              <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
   
            </div>
                  </form>


       @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

           </div>


















      </div>


<script>

$('#search2').on('click', function() { 

  var searchValue=$("input[name=search2]").val(); 
  var columns = [];
$(`#size_id_${searchValue}`).find('td').each(function(){
    columns.push($(this).text());
});
$('#search2Type').html("");
  if(columns.length!=0)
  {
     $("input[name=sizeNum]").val(columns[0]);
     $("input[name=sizeName]").val(columns[1]);
    $("select[name=sizeType").val(columns[2]);
  }
 
  
  else 
  {
    $('#search2Type').html("Not Found :( ~ try again ;)");
  }
 



})

</script>


<script>
 
    let container = document.querySelector('table tbody') 
    //docume $(".sizesContainer");
   // console.log(container);

   $('#search').on('click', function() { 


      $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

          let sizeNum = $("input[name=search]").val(); 
         

            $.ajax({
           url: `search/${sizeNum}`,
          type:"POST",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data:{
          _token : $('meta[name="csrf-token"]').attr('content')
           }
            ,
        success:function(data){

          $('#searchType').html("")
               if(data)
               {
                getSize( data.Size_ID , data.Size_Name ,data.Unit_ID )

                  alert('success!');
                  return
               }
              
               $('#searchType').html("Not Found :( ~ try again ;)");


                  
                  },

        error: function (){ alert('error');}
            
            }); 

 
      })

         $('#add').on('click', function() {
          //  console.log('hjD')
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

          let sizeNum = $("input[name=sizeNum]").val();
          let sizeName = $("input[name=sizeName]").val();
          let sizeType= $("select[name=sizeType").val();

            $.ajax({
          url: "sizeData",
          type:"POST",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data:{
          _token : $('meta[name="csrf-token"]').attr('content'), 
          sizeNum:sizeNum,
          sizeName:sizeName,
          sizeType:sizeType
           }
            ,
        success:function(data){

        //  console.log(data);
        // $('#errorNum').html(data.error.sizeNum);

            
        if(!$.isEmptyObject(data.error)){

          
          $('#errorNum').html("");
          $('#errorName').html("");
          if(data.error.sizeName)
            {
              $('#errorName').html(data.error.sizeName);
            } 
            if(data.error.sizeNum)
            {
              $('#errorNum').html(data.error.sizeNum);

            }

        }
              else{
                console.log('datasucess');

                $('#errorNum').html("");
                $('#errorName').html("");

                $("input[name=sizeNum]").val("");
          $("input[name=sizeName]").val("");
        $("input[name=sizeType").val("");

         let Html=`<tr id="size_id_${sizeNum}" onclick="getSize(${sizeNum},'${sizeName}','${sizeType}' )"><th scope="row">%num%</th><td>%sizeName%</td><td>%sizeUnit%</td></tr>`

             
             Html=Html.replace('%num%',sizeNum);
             Html=Html.replace('%sizeName%',sizeName);
             Html=Html.replace('%sizeUnit%',sizeType);

             container.innerHTML+=Html;

                  alert('success!');
                  
                  
                  }
              }
      ,

        error : function (data){ 
          
          if($.isEmptyObject(data.error)){

            console.log(data.error);

          }

          alert('error');}
            
            });

          });

//for the delete button 


$('#delete').on('click', function() {
          //  console.log('hjD')
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

          let sizeNum = $("input[name=sizeNum]").val();
          let sizeName = $("input[name=sizeName]").val();
          let sizeType= $("select[name=sizeType").val();

            $.ajax({
           url: `deletSize/${sizeNum}`,
          type:"POST",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data:{
          _token : $('meta[name="csrf-token"]').attr('content'), 
          sizeNum:sizeNum,
          sizeName:sizeName,
          sizeType:sizeType
           }
            ,
        success:function(data){
                  console.log(data);
                 let id= $("input[name=sizeNum]").val();
        $("input[name=sizeNum]").val("");
        $("input[name=sizeName]").val("");
        $("input[name=sizeType").val("");

        $(`#size_id_${sizeNum}`).remove();

                  alert('success!');
                  
                  },

        error: function (){ alert('error');}
            
            });

          });

//new

$('#new').on('click', function() {

  $("input[name=sizeNum]").val("");
          $("input[name=sizeName]").val("");
        $("input[name=sizeType").val("");
}

);

//save

$('#save').on('click', function() {
          //  console.log('hjD')
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

          let sizeNum = $("input[name=sizeNum]").val();
          let sizeName = $("input[name=sizeName]").val();
          let sizeType= $("select[name=sizeType").val();

            $.ajax({
           url: "saveData",
          type:"POST",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data:{
          _token : $('meta[name="csrf-token"]').attr('content'), 
          sizeNum:sizeNum,
          sizeName:sizeName,
          sizeType:sizeType
           }
            ,
        success:function(data){
                  console.log(data);
                  $("input[name=sizeNum]").val("");
          $("input[name=sizeName]").val("");
        $("input[name=sizeType").val("");

        $(`#size_id_${sizeNum}`).remove();


      let Html=`<tr id="size_id_${sizeNum}" onclick="getSize(${sizeNum},'${sizeName}','${sizeType}' )"><th scope="row">%num%</th><td>%sizeName%</td><td>%sizeUnit%</td></tr>`

                    
        Html=Html.replace('%num%',sizeNum);
        Html=Html.replace('%sizeName%',sizeName);
        Html=Html.replace('%sizeUnit%',sizeType);

        container.innerHTML+=Html;

                  alert('success!');},

        error: function (){ alert('error');}
            
            });

          });

   function getSize(id,name,unitId)
   {
      $("input[name=sizeNum]").val(id);
       $("input[name=sizeName]").val(name);
       $("select[name=sizeType").val(unitId);
   }


</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
</html>