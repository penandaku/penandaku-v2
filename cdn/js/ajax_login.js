
"console" in window && console.log("%cHi Developer\nIf you find an error please report  on this page %chttps://penandaku.com/bug/\n%cGive your feedback on this page %chttps://penandaku.com/feedback/",
	"color: #000000; font-size: 17px; line-height: 2",
	"color: #2bbbad; font-size: 17px; line-height: 2; font-style: normal",
	"color: #000000; font-size: 17px; line-height: 2",
	"color: #2bbbad; font-size: 17px; line-height: 2; font-style: normal");

function PesanNotif(tipe, judul, pesan)
{
  	    var shortCutFunction = tipe;
  	    var msg = pesan;
  	    var title = judul || '';
  	    var showDuration = "1000";
  	    var hideDuration = "1000";
  	    var timeOut = "2000";
  	    var extendedTimeOut = "1000";
  	    var showEasing = "swing";
  	    var hideEasing = "linear";
  	    var showMethod = "slideDown";
  	    var hideMethod = "slideUp";

  	    toastr.options = {
  	        closeButton: false,
  	        debug: false,
  	        positionClass: 'toast-bottom-right' || 'toast-top-right',
  	        onclick: null
  	    };

  	    if (showDuration.length) {
  	        toastr.options.showDuration = showDuration;
  	    }

  	    if (hideDuration.length) {
  	        toastr.options.hideDuration = hideDuration;
  	    }

  	    if (timeOut.length) {
  	        toastr.options.timeOut = timeOut;
  	    }

  	    if (extendedTimeOut.length) {
  	        toastr.options.extendedTimeOut = extendedTimeOut;
  	    }

  	    if (showEasing.length) {
  	        toastr.options.showEasing = showEasing;
  	    }

  	    if (hideEasing.length) {
  	        toastr.options.hideEasing = hideEasing;
  	    }

  	    if (showMethod.length) {
  	        toastr.options.showMethod = showMethod;
  	    }

  	    if (hideMethod.length) {
  	        toastr.options.hideMethod = hideMethod;
  	    }

  	    if (!msg) {
  	        msg = getMessage();
  	    }

  	    $("#toastrOptions").text("Command: toastr[" + shortCutFunction + "](\"" + msg + (title ? "\", \"" + title : '') + "\")\n\ntoastr.options = " + JSON.stringify(toastr.options, null, 2));

  	    var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
  	    $toastlast = $toast;
};

$(document).ready(function(){
    $(".form-login-username form").submit(function() {
        var email = $("[name='username']").val();
        if(email.length == 0){
            setTimeout(function() {
                /*toastr.error('Email is still empty');*/
                var opts = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "2000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("Masukkan Username Anda.", "ERROR !", opts);
            }, 1000);
        }
        else{
            return true;
        }
        return false;
    })
});

$(document).ready(function(){
    $(".form-login-password form").submit(function() {
        var password = $("[name='password']").val();
        if(password.length == 0){
            setTimeout(function() {
                /*toastr.error('Email is still empty');*/
                var opts = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "2000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("Masukkan Password Anda.", "ERROR !", opts);
            }, 1000);
        }
        else{
            return true;
        }
        return false;
    })
});
