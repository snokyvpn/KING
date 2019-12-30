function desativado1(){ocultatudo(); document.getElementById("desativado").style.display = "block"; travarrolagem();};

function liberarrolagem(){$("html, body").css({'overflow' : 'visible' });};
function travarrolagem(){$("html, body").css({'overflow' : 'hidden' });};

function ocultatudo(){
  if($(".page-wrapper").hasClass("toggled")){ $(".page-wrapper").removeClass("toggled");}
}

function caracteres(evt) {
 var theEvent = evt || window.event;
 var key = theEvent.keyCode || theEvent.which;
 key = String.fromCharCode( key );
 var regex = /^[0-9,a-z,A-Z]+$/;
 if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
 }
}

(function ($) { "use strict";
    var input = $('.validate-input .input100');
    $('.validate-form').on('submit',function(){
        var check = true;
        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false; } }
        return check; });
    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this); }); });
    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false; } } else {
            if($(input).val().trim() == ''){
                return false; } } }
    function showValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).addClass('alert-validate'); }
    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate'); }
})(jQuery);
