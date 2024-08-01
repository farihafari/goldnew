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
    // search data
    $("#searchId").on('keyup',function(){
        let searchData = $("#searchId").val();
        $.ajax({
            url:"query.php",
            type:"post",
            data:{
                "partyId":searchData
            },
            success:function(response){
        //    console.log(response);
           alert(response);
        // $("#productData").html(response);
            }
        })
    })
    
})