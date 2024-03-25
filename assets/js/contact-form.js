$(document).on("submit", "#Contact-Form", function(e){
    e.preventDefault();
    var sourcemail = "selesfarma@yahoo.com";
    var link = "";

    var name = $("#input-name").val();
    var email = $("#input-email").val();
    var subject = $("#input-email-subject").val();
    var message = $("#input-message").val();

    if (name != "" && subject != "" && email != "" && message != ""){
        let isMobile = window.matchMedia("only screen and (max-width: 767px)").matches;
        if (isMobile){
            link = "mailto:" + sourcemail + "?subject=" + subject + "&body=" + name + "%0D%0A" + email + "%0D%0A%0D%0A" + message;
            window.open(link, '_blank'); 
        } else {
            link = "https://mail.google.com/mail/?view=cm&fs=1&to=" + sourcemail + "&su=" + subject + "&body=" + name + "%0D%0A" + email + "%0D%0A%0D%0A" + message;
            $("#form-submitter").attr("href", link);
            $("#form-submitter")[0].click();
        }
    }    
});