/**
 * Created by yjwee on 2016-07-27.
 */
$(document).ready(function () {
    var $facebookLoginBtn = $('.js_btn_facebook_login');
    var $facebookReAuthenticationBtn = $('.js_btn_facebook_re_auth');

    if ($facebookLoginBtn.length > 0) {
        $facebookLoginBtn.click(function () {
            var url = $(this).data('facebook-url');
            if (typeof url !== 'undefined') {
                var saveAutoLogin = $('input[name="saveAutoLogin"]').is(':checked') ? 'y' : 'n';
                var path = location.host.substring(1).split(':');
                if (saveAutoLogin === 'y') {
                    $.cookie('saveAutoLogin', saveAutoLogin, {path: '/', expires: 1, domain: path[0]});
                } else {
                    if (typeof $.cookie('saveAutoLogin') !== 'undefined') {
                        $.removeCookie('saveAutoLogin', {path: '/', expires: 1, domain: path[0]});
                    }
                }
                location.href = url;
            }
        });
    }
    if ($facebookReAuthenticationBtn.length > 0) {
        var url = $facebookReAuthenticationBtn.data('re-authentication-url');
        if (typeof url !== 'undefined') {
            $facebookReAuthenticationBtn.click(function () {
                location.href = url;
            });
        }
    }

    var $snsConnectBtn = $('.js_btn_sns_connect');

    if ($snsConnectBtn.length > 0) {
        $snsConnectBtn.click(function () {
            var url, win;
            if ($(this).data('sns') == 'facebook') {
                url = $(this).data('facebook-url');
                if (typeof url !== 'undefined') {
                    location.href = url;
                }
            }
        });
    }

    if (typeof snsConnection !== 'undefined') {
        var $disconnectBtn = $('.js_btn_sns_disconnect');

        if ($disconnectBtn.length > 0) {
            $disconnectBtn.click(function () {
                var $ajax;
                if ($(this).data('sns') == 'facebook') {
                    if (confirm(__('계정 연결을 해제하시겠습니까?'))) {
                        url = $(this).data('facebook-url');
                        $ajax = $.ajax(url);
                        $ajax.done(function (response) {
                            alert(response.message);
                            if (response.url) {
                                window.location.href = response.url;
                            }
                        });
                    }
                }
            });
        }
    }

    if (typeof thirdPartyProfile !== 'undefined') {
        if (thirdPartyProfile.email) {
            $('#memId').val(thirdPartyProfile.email);
            var $email = $('#email');
            if ($email.length > 0) {
                $email.val(thirdPartyProfile.email);
            }
        }
        if (thirdPartyProfile.name) {
            $('input[name="memNm"]').val(thirdPartyProfile.name);
        }
        if (thirdPartyProfile.gender) {
            var $sexFl = $(':radio[name="sexFl"]');
            if ($sexFl.length > 0) {
                var $checkedSexFl = $sexFl.filter('*[value="' + thirdPartyProfile.gender + '"]');
                $checkedSexFl.prop('checked', true);
                $checkedSexFl.next('label').addClass('on');
            }
        }
        var $memPw = $('input[name="memPw"]');
        if ($memPw.length > 0) {
            $memPw.addClass('ignore');
        }
        var $memPwRe = $('input[name="memPwRe"]');
        if ($memPwRe.length > 0) {
            $memPwRe.addClass('ignore');
        }
    }
});

function confirmJoin(message, location) {
    if (confirm(message)) {
        window.location.href = location;
    }
}
