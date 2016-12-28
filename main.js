
$(document).ready(function(){
    "use strict";
    

        
    $("#about").on("click", function() {
        $("#aboutdrop").toggle();
        $("#recdrop").hide();
        $("#invdrop").hide();
    });
    
    $("#rec").on("click", function() {
        $("#recdrop").toggle();
        $("#aboutdrop").hide();
        $("#invdrop").hide();
    });
    
    $("#involvement").on("click", function() {
        $("#invdrop").toggle();
        $("#aboutdrop").hide();
        $("#recdrop").hide();
    });
    
});