<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    
    <ul class="thumbnails">
    <li class="">
    <a href="#"><img src="images/register1.jpeg" height="400" width="400"></a>
    </li>
    <div id="small_images">
    <div class="left_arrow"><i class="fa fa-angle-left"></i></div>
    <li class="horizontal">
    <a href="javascript:void(0)" class="active"><img src="images/registration.jpg" height="40" width="40"></a>
    </li>
    <li class="horizontal">
    <a href="javascript:void(0)"><img src="images/signup.jpg" height="40" width="40"></a>
    </li>
    <li class="horizontal">
    <a href="javascript:void(0)"><img src="images/Start-online-business.jpg" height="40" width="40"></a>
    </li>
    <li class="horizontal">
    <a href="javascript:void(0)"><img src="images/UserLogIn.jpg" height="40" width="40"></a>
    </li>
    <div class="right_arrow"><i class="fa fa-angle-right"></i></div>
    </div>
    </ul>
    
    

</body>
</html>
<style>
.horizontal{
    display:inline-block;
}
</style>

<script>
$("a").click(function(){
var imgsrc=$(this).children('img').attr('src');
$("a").removeClass("active");
$(this).addClass("active");
$(this).parents('ul:first-child').find("img:first").prop('src',imgsrc);
});
$(".left_arrow").click(function(){
var total_images=$("#small_images li").length;   
var li_index=$(this).parent().parent().find('a.active').parent().index();
li_index=li_index-1;
if(li_index>0){
    $("a").removeClass("active");
   var changesrc= $( "li" ).eq( li_index ).find('img:first').attr('src');
   $(this).parents('ul:first-child').find("img:first").prop('src',changesrc);
   $( "li" ).eq( li_index ).find('a:first').removeClass('active').addClass('active');
}
});

$(".right_arrow").click(function(){
var total_images=$("#small_images li").length;   
var li_index=$(this).parent().parent().find('a.active').parent().index();
li_index=li_index+1;
if(li_index<=total_images){
    $("a").removeClass("active");
   var changesrc= $( "li" ).eq( li_index ).find('img:first').attr('src');
   $(this).parents('ul:first-child').find("img:first").prop('src',changesrc);
   $( "li" ).eq( li_index ).find('a:first').removeClass('active').addClass('active');
}
});


</script>
