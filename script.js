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


$('#searchId').on('input', function() {
    let searchValue = $(this).val();

    // Send AJAX request to the server
    $.ajax({
        url: 'query.php', // Server script to process data
        type: 'POST',
        data: { search: searchValue },
        success: function(response) {
            // Parse the JSON response
            let data = JSON.parse(response);
console.log(response);
            // Update form inputs with the response data
            $('input[name="party-name"]').val(data.partyName);
            $('input[name="party-date"]').val(data.date);
            $('select[name="party-gold-type"]').val(data.goldType);
            $('input[name="part-gold-recieve-type"]').val(data.goldRecieve);
            $('span[name="total-gold"]').html(data.totalGold);
            $('span[name="pay-cash"]').html(data.payCash);
            $('input[name="pure-gold"]').val(data.pureGold);
            $('input[name="ratti"]').val(data.ratti);
            $('input[name="casting"]').val(data.goldRecieve);
            $('input[name="ghati"]').val(data.ghati);
            $('input[name="casting-return"]').val(data.castingReturn);
            $('input[name="total"]').val(data.total);
            // $('input[id="btn-teezabi-value"]').val(data.teezabi);
            // $('input[id="btn-piece-value"]').val(data.piece);
           

            // console.log(data.payCash);
           

            if (data.goldType === 'Teezabi') {
                $('#btn-teezabi').prop('disabled', true);
                $('#btn-piece').prop('disabled', false);
                // convertToPiece()
                
                
            } 
            else if (data.goldType === 'Piece') {
                $('#btn-teezabi').prop('disabled', false);
                $('#btn-piece').prop('disabled', true); 
                // convertToTeezabi();
            } else {
                // If no valid type, enable both buttons
                $('#btn-teezabi').prop('disabled', false);
                $('#btn-piece').prop('disabled', false);
            }
            // function convertToTeezabi(){
            //     goldrecive = $("#gold-receive").text();
               
            //   }
            //   function convertToPiece(){
            //     goldrecive = $("#gold-receive").text();
                
            //   }
            // Optionally set button values if needed
            $('#btn-teezabi').val(data.goldType);
            $('#btn-piece').val(data.goldType);
        },
        
    });
    
});

// add gold


});



