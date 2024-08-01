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
        //    alert(response['']);[]
        let data = JSON.parse(response);
        console.log(data)
        // let x = ``;
        // x = `
        //     <div class="col-lg-4 mt-2">
        //         <label for="inputPassword6" class="col-form-label form-label">To :</label>
        //     </div>
        //     <div class="col-lg-8 mt-2">
        //         <input type="text"  class="form-input" id="searchId" value="${data.acc_id}" name="partyId">
        //     </div>

        //     <div class="col-lg-4 mt-2">
        //         <label for="inputPassword6" class="col-form-label form-label">Party Name :</label>
        //     </div>
        //     <div class="col-lg-8 mt-2">
        //         <input type="text"  class="form-input" value="${data.party_name}" name="partyName">
        //     </div>

        //     <div class="col-lg-4 mt-2">
        //         <label for="inputPassword6" class="col-form-label form-label">Date :</label>
        //     </div>
        //     <div class="col-lg-8 mt-2">
        //         <input type="date"  class="form-input" name="partyDate" value="${data.datetime}">
        //     </div>

        //     <div class="col-lg-4 mt-2">
        //         <label for="inputPassword6" class="col-form-label form-label">Gold Type:</label>
        //     </div>
        //     <div class="col-lg-8 mt-2">
        //         <select name="recGoldType" name="partyGoldType">
        //             <option value="${data.recivable_Type}">${data.recivable_Type}</option>
        //         </select>
        //     </div>

        //     <div class="col-lg-4 mt-2">
        //         <label for="inputPassword6" class="col-form-label form-label">Gold Recieve :</label>
        //     </div>
        //     <div class="col-lg-8 mt-2">
        //         <input type="text"  class="form-input" name="partyGoldRecieveType" value="${data.recivable_gold}">
        //     </div>
        // `;
        // $("#formData").html(x);
    }
})
})
})