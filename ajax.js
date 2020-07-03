
$( document ).ready(function() {
    $("#btn").click(function(){
            sendAjaxForm('result_form', 'ajax_form', 'incs/save_data.php');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    jQuery.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: jQuery("#"+ajax_form).serialize(),
        success: function(response) {
            console.log(response);
            result = jQuery.parseJSON(response);
            document.getElementById(result_form).innerHTML = "<p style='color:red; text-align: center;'>"+result+"</p>";
        },
        error: function(response) {
            document.getElementById(result_form).innerHTML = "Error. Data not sent.";
        }
    });
}