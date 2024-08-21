
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
        let expires = "expires=" + d;
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(";");
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == " ") {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    function delete_cookie(name) {
        document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    function setUtmInCookie() {
        const params = new URLSearchParams(window.location.search);
        let utmInUrl = [];
    
        // Check if there are any UTM params in the URL and store them
        for (let pair of params.entries()) {
          if (pair[0].startsWith('utm_')) {
            utmInUrl.push(pair[0]);
          }
        }
    
        // If any UTM param is present in the URL, delete all UTM cookies and set new ones.
        if (utmInUrl.length > 0) {
          // Get all cookie names starting with 'utm_'
          let utmInCookie = document.cookie.split(';')
            .map(cookie => cookie.split('=')[0].trim())
            .filter(cookieName => cookieName.startsWith('utm_'));
    
          // Delete all UTM cookies
          utmInCookie.forEach((utmInUrl) => {
            delete_cookie(utmInUrl);
          });
    
          // Set new UTM cookies
          utmInUrl.forEach((utmInUrl) => {
            setCookie(utmInUrl, params.get(utmInUrl), 1);
          });
        }
    }
    setUtmInCookie();    

    var getAllCookies = function () {
        var pairs = document.cookie.split(";");
        var cookies = {};
        for (var i = 0; i < pairs.length; i++) {
        var pair = pairs[i].split("=");
        cookies[(pair[0] + '').trim()] = unescape(pair.slice(1).join('='));
        }
        return cookies;
    }

    function getAllUtms() {
        const params = new URLSearchParams(window.location.search);
        let utms = {}

        params.forEach((value, name) => {
            if (name.startsWith('utm_')) {
                utms[name] = value;
            }
        });

        let allCookies = getAllCookies();
        if (Object.keys(allCookies).length > 0 && Object.keys(utms).length == 0) {
            Object.keys(allCookies).forEach((item, index) => {
                if (item.startsWith('utm_')) {
                    if (!utms[item]) {
                        utms[item] = allCookies[item];
                    }
                }
            });
        }
        return utms;
    }

    function setUtmInHubSpotInput() {
        let utms = getAllUtms();
        if (Object.keys(utms).length > 0) {
            Object.keys(utms).forEach((item, index) => {
                if (jQuery(`input[name=${item}]`).length > 0) {
                    jQuery(`input[name=${item}]`).val(utms[item]).change();
                }
            });
        }
    }
