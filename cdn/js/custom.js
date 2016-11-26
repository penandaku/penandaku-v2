var base_url = 'http://localhost/penandaku-v2/';
//vue custom application
var vue = new Vue ({
	el : '#app',
	data : {
		//label sign in and sign up
		label_signin : 'Sign in',
		label_signup : 'Sign up',
		//url sign in and sign up homepage
		url_signin : base_url + 'login?source=header&utf8=✓',
		url_signup : base_url + 'join?source=header&utf8=✓',
		//url page statics pages
		url_about	 			: base_url + 'about/',
		url_feedback		: base_url + 'feedback/',
		url_bug					: base_url + 'bug/',
		url_terms				: base_url + 'terms/',
		url_policies		: base_url + 'policies/'
	}
});

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
	    var timeOut = "5000";
	    var extendedTimeOut = "1000";
	    var showEasing = "swing";
	    var hideEasing = "linear";
	    var showMethod = "slideDown";
	    var hideMethod = "slideUp";

	    toastr.options = {
	        closeButton: true,
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
}

function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

/*
function checking_username({
	username : {
			url 	: "localhost/penandaku-v2/api/check_username",
			type	: "POST",
			data	:
						{
							username: function()
							{
								return $('.sign-up-home :input[name="username"]').val();
							},
							id: function()
							{
								return $('.sign-up-home :input[name="id"]').val();
							}
						}
	}
});
*/

$(document).ready(function(){
    $(".sign-up-home form").submit(function() {
        var username  = $("[name='username']").val();
        var email   	= $("[name='email']").val();
        var password	= $("[name='password']").val();
        if(username.length == 0){
            setTimeout(function() {
                /*toastr.error('Name still empty');*/
                var opts = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("Username Tidak Boleh Kosong.", "ERROR !", opts);
            }, 1000);
        }else if(username.length < 3){
            setTimeout(function() {
                /*toastr.error('Write down your name is longer');*/
                var opts = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("Username Setidaknya 3 karakter.", "ERROR !", opts);
            }, 1000);
				}else if(username == checking_username){
					alert('error');
        }else if(email.length == 0){
            setTimeout(function(){
                /*toastr.error('Email is still empty');*/
                var opts = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("Alamat Email Tidak Boleh Kosong.", "ERROR !", opts);
            }, 1000);
        }else if(!validateEmail(email)){
            setTimeout(function(){
                /*toastr.error('The email address you entered is not correct');*/
                var opts = {
                "debug": false,
                "positionClass": "toast-top-righth",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("Email yang Anda Masukkan Tidak Valid.", "ERROR !", opts);
            }, 1000);
        }else if(password.length ==0){
            setTimeout(function() {
                /*toastr.error('Messages still empty');*/
                var opts = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("Password Tidak Boleh Kosong.", "ERROR !", opts);
            }, 1000);
        }else if(password.length < 5){
            setTimeout(function() {
                /*toastr.error('Your message is too short');*/
                var opts = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("Password Setidaknya 5 karakter.", "ERROR !", opts);
            }, 1000);
        }
        else{
            return true;
        }
        return false;
    })
});
