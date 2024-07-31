$(document).ready(function(){
    $("#search-icon").click(function(){
        $("#profile-form").hide();
        $("#search-form").show();
    })
    $("#exit-search").click(function(){
        // $("#search-form").hide();
        // $("#profile-form").show();
        alert("hello")
    })
    
$.ajax({
url:"ajax.php",
type:"get",
success:function(){
$("#productData").load("ajax.php");
}
})
    
})