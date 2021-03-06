(function () {
    var date = new Date(), cookiePre = "__tsa_", w = window, d = document, m = Math;
    var now = date.getTime(), dm = w.location.host, n = w.navigator, f = function () {
        this.params = {}
    };
    f.prototype = {init: function () {
        var segment = -1;
        while (!this.getCookie("__sid")) {
            var _dm = dm.split(".").slice(segment--).join("."), t = parseInt((now / 1000)).toString(), rm = this.F(m.random().toString()) + this.F(dm);
            this.setCookie("__sid", t + rm, _dm, 31536000000)
        }
        this.initParams()
    }, initParams: function () {
        var cnd = this.getCookie("_safe_nd"), nd = 0;
        if (!cnd) {
            nd = 1
        } else {
            var dd = new Date();
            dd.setTime(cnd);
            nd = dd.toLocaleDateString() == date.toLocaleDateString() ? 0 : 1
        }
        this.params = {ce: n && n.cookieEnabled ? 1 : 0, id: _tsa.id,
            rf: encodeURIComponent(d.referrer ? d.referrer : ""),
            sid: this.getCookie("__sid") ? this.getCookie("__sid") : "", nd: nd}
    }, sendRequest: function () {
        if (w.name == "_safe_checkcode_iframe_") {
            w.name = w.name + "_safe_success_";
            return false
        }
		//客户端检测安装代码
        if (window.location.href.indexOf("_safe_checkcode_test_") > -1) {
            window.document.title = "_safe_checkcode_success_";
            return false
        }
        if (false == this.isSend()) {
            return
        }
        var arr = [];
        this.addParam("rnd", m.round(m.random() * 2147483647));
        for (var i in this.params) {
            arr.push(i + "=" + this.params[i])
        }
        var obj = document.createElement("script");
        obj.src = _tsa.protocol + "s.topsem.com/safe.php?" + arr.join("&");  
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(obj, s);
        this.setCookie("_safe_nd", now, dm, 86400000)
    }, isSend: function () {
        var ids = [7043, 9888, 9036, 7241, 10191];
        var flag = false;
        for (var i = 0, len = ids.length; i < len; i++) {
            if (_tsa.id === ids[i]) {
                flag = true;
                break
            }
        }
        if (flag) {
            return true
        }
        return d.referrer && d.referrer.indexOf("://" + w.location.hostname) == -1
    }, addParam: function (name, value) {
        this.params[name] = value
    }, setCookie: function (name, value, domain, time) {
        var life = new Date(), key = this.F(dm) + ".";
        life.setTime(life.getTime() + time);
        name = cookiePre + name;
        d.cookie = name + "=" + key + value + ((time == null) ? "" : "; expires=" + life.toGMTString()) + "; path=/; domain=" + domain + ";"
    }, getCookie: function (name) {
        for (var b = [], c = d.cookie.split(";"), a = RegExp("^\\s*" + cookiePre + name + "=\\s*(.*?)\\s*$"), i = 0; i < c.length; i++) {
            var e = c[i].match(a);
            e && b.push(e[1])
        }
        var key = this.F(dm) + ".";
        for (i = 0; i < b.length; i++) {
            if (b[i].indexOf(key) == 0) {
                return b[i].split(key)[1]
            }
        }
        return b.length ? b[0] : ""
    }, F: function (a) {
        var b = 0, c = 0, d;
        for (d = a.length - 1; 0 <= d; d--) {
            c = a.charCodeAt(d);
            b = (b << 6 & 268435455) + c + (c << 14);
            c = b & 266338304;
            b = 0 != c ? b ^ c >> 21 : b
        }
        return b
    }, parseUrl: function (a) {
        var b, c, d = {protocol: "http", host: "", port: "", path: "", query: "", hash: ""};
        if (!a) {
            return d
        }
        c = a.indexOf("://");
        c >= 0 && (d.protocol = a.substring(0, c), a = a.substring(c + 3));
        c = a.search("/|\\?|#");
        b = a.substring(0, c >= 0 ? c : a.length).toLowerCase().split(":");
        d.host = b[0];
        b[1] && (d.port = b[1]);
        c >= 0 && (a = a.substring(c));
        c = a.indexOf("#");
        c >= 0 && (d.hash = a.substring(c + 1), a = a.substring(0, c));
        c = a.indexOf("?");
        c >= 0 && (d.query = a.substring(c + 1), a = a.substring(0, c));
        d.path = a;
        return d
    }};
    var a = new f();
    a.init();
    a.sendRequest()
})();
