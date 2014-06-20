function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return unescape(dc.substring(begin + prefix.length, end));
}

(function() {
    
	var saml = document.createElement('script');
	saml.type = 'text/javascript';
	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(saml);
})();

function deleteCookie(name, path, domain) 
{
    path = (path ? ";path=" + path : "");
    domain = (domain ? ";domain=" + domain : "");
    var expiration = "Thu, 01-Jan-1970 00:00:01 GMT";

    document.cookie = name + "=" + path + domain + ";expires=" + expiration;
}

$(document).ready(function(){

    if ($('#login-saml').val() == "") {
        return null;
    }

	//var loginMsg = t('user_saml', 'Login with WAYF');
	//var loginMsg = t('user_saml', 'Single sign-on with Kalmar2');
	var loginMsg = t('user_saml', 'Login through your home institution');

    $('<div id="login-saml"></div>').css({
		'text-align': 'center',
        'font-size' : '110%',
    }).prependTo('form');

   /* $('<br /><br /><div><b>Nordic academic users</b>: Click below to log in with your home institution credentials</div>').css({ */
  /* $('<br /><br /><div>Log in through your university (Nordic academic users)</div>').css({
        'text-align': 'center',
        'font-size' : '17px',
        'color': 'gray',
    }).appendTo('header'); */

	/*$('<p>&nbsp;</p>').css(
	{
		'text-align': 'center',
        'font-weight': 'bolder',
        'font-size' : '110%'
	}).appendTo('#login-saml');

    if ($('#user').val() == "") {
        $('#password').parent().hide();
        $('#remember_login').hide();
        $('#remember_login+label').hide();
        $('#submit').hide();
    }

    $('#user').change( function() {
        if ($(this).val() !== "") {
            $('#password').parent().show();
            $('#remember_login').show();
            $('#remember_login+label').show();
            $('#submit').show();
        }
        else {
            $('#password').parent().hide();
            $('#remember_login').hide();
            $('#remember_login+label').hide();
            $('#submit').hide();
        }
    });*/


    var getargs = window.location.search.replace( "?", "" );

    $('<a id="login-saml-action" href="?app=user_saml&'+getargs+'" ></a>').css(
    {
        'text-decoration': 'none'
    }).appendTo('#login-saml');


	/*$('<img class="kalmar2login" id="login-saml-img" src="https://data.deic.dk/themes/deic/core/img/kalmar2.png" title="'+ loginMsg +'" alt="'+ loginMsg +'" />').css( */
	$('<img class="kalmar2login" id="login-saml-img" src="https://data.deic.dk/themes/deic/core/img/Login_Via_Institution_midLarge.png" title="'+ loginMsg +'" alt="'+ loginMsg +'" />').css(
	{
		'padding': '0',
        	'margin': '64px 0 20px 0',
		cursor : 'pointer',
                border : '0px solid #777'
	}).appendTo('#login-saml-action');

 /*$('<br /><br /><br /><div><b> Or </b>').css( 
    {
        'text-align': 'center',
        'font-size' : '17px',
        'padding': '-10px',
	'margin': '0px',
	//'border': '1px';
        'color': 'gray',
    }).appendTo('#login-saml'); */

/*    $('<br /><br /><br /><div><b>Others</b>: Click below to log in with username/password</div>').css( */
/* $('<br /><br /><br /><div> Log in with your username/password</div>').css( 
    {
        'text-align': 'center',
        'font-size' : '17px',
        'padding': '0px',
	'margin': '0px',
        'color': 'gray',
    }).appendTo('#login-saml'); */
		
		$('<br /><img class="kalmar2login" id="login-guest-img" src="https://data.deic.dk/themes/deic/core/img/AlternativeLogin_midLarge.png" title="Manual login" alt="Manual login" /><br /><br /><br />').css(
			{
				'padding': '0',
        			'margin': '0 0 0 0',
				cursor : 'pointer',
				//border : '1px solid #777'
			}).appendTo('#login-saml');
			

 /* $('<div> This is a test service, we can not guaranties the safety of your data at this point. This is an university serves and restricted to research data storage and exchange. It cannot be used for sensitive or illegale files./n For a description of the end user agreement, please click <a href="http://data.deic.dk/useragreement/">here</a>  </div>').css( 
    {
        'text-align': 'center',
        'font-size' : '12px',
        'padding': '0px',
	'margin': '0px',
        'color': 'gray',
    }).appendTo('#login-saml'); */


			$('fieldset').hide();
			
			$('#login-guest-img').click(function(){
				if($('fieldset').is(":visible")){
					$('fieldset').hide("slow", "linear");
				}
				else{
					$('fieldset').show("slow", "linear");
				}
			});

    var cookieName = "saml_auth_fail";
    var myCookie = getCookie(cookieName);
    var message = "";
    if (myCookie == 'noauth') {
        message = "Sorry, could not log you in.";
    }
    if (myCookie == 'notallowed') {
        message = "<p>&nbsp;</p><p>Sorry, you're not authorized to use this service.</p>";
    }
    if (myCookie != '') {
      deleteCookie(cookieName, '/', '.compute.deic.dk');
      $(message).css(
        {
            'text-align': 'center',
            'font-weight': 'bolder',
            'color': 'gray',
            'font-size' : '110%'
        }).appendTo('#login-saml');
    }
});
