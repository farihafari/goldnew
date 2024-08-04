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
        },
        // error: function(jqXHR, textStatus, errorThrown) {
        //     console.log(textStatus, errorThrown);
        // }
    });
});
})