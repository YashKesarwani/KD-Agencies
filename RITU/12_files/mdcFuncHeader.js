function userDataCookie() {
    this.get = function(e) {
        e = e || "ImeshVisitor";
        var i, n = new Array;
        n = document.cookie.split(";");
        for (var t = 0; t < n.length; t++) {
            var o = n[t];
            if (o.replace(/^\s+|\s+$/g, "").split("=")[0] == e) {
                var r = (o = unescape(o)).indexOf(e + "=");
                i = o.substring(r + e.length + 1)
            }
        }
        return i ? strToObj(i) : ""
    }
    ,
    this.set = function(e, i) {
        var n, t;
        if ("xnHist" == (i = i || "ImeshVisitor")) {
            n = {
                pv: "1",
                city: "1",
                cvstate: "1",
                popupshown: "1",
                install: "1",
                ss: "1"
            },
            t = (new userDataCookie).get(i);
            for (var r in n)
                n[r] && "" != e[r] && 0 != e[r] ? n[r] = e[r] || t[r] : n[r] = e[r]
        } else if ("ImeshVisitor" == i) {
            n = {
                fn: "1",
                ln: "1",
                em: "1",
                ph1: "1",
                ph2: "1",
                phcc: "1",
                phac: "1",
                co: "1",
                url: "1",
                cn: "1",
                iso: "1",
                mb1: "1",
                mb2: "1",
                ad: "1",
                ct: "1",
                ctid: "1",
                st: "1",
                stid: "1",
                zp: "1",
                glid: "1",
                nm: "1",
                int: "1",
                cd: "1",
                utyp: "1",
                imurl: "1",
                ev: "1",
                uv: "1"
            },
            t = (new userDataCookie).get();
            for (var r in n)
                n[r] && (n[r] = e[r] || t[r] || "");
            if (n.nm) {
                var a = new Array
                  , s = new Array;
                s = n.nm.split(/\s+/),
                a.push(s.shift()),
                a.push(s.join(" ")),
                n.fn || (n.fn = a[0]),
                n.ln || (n.ln = a[1])
            } else
                n.fn && n.ln ? n.nm = n.fn + " " + n.ln : n.ln ? n.nm = n.ln : n.nm = n.fn;
            var p = (new Date).toString();
            n.cd = p.substr(8, 2) + "/" + p.substr(4, 3).toUpperCase() + "/" + p.substr(11, 4)
        } else if ("v4iilex" == i) {
            n = {
                admln: "1",
                admsales: "1",
                au: "1",
                id: "1",
                mail: "1",
                mob: "1",
                name: "1",
                utyp: "1",
                vcd: "1"
            },
            o = (new userDataCookie).get(i);
            for (var f in n)
                n[f] && "" != e[f] && 0 != e[f] ? n[f] = e[f] || o[f] : n[f] = e[f]
        }
        newCookie = objToStr(n),
        expires = new Date,
        expires.setTime(expires.getTime() + 15552e6),
        document.cookie = i + "=" + escape(newCookie) + ";expires=" + expires.toGMTString() + ";domain=.indiamart.com;path=/;"
    }
    ,
    this.remove = function() {
        document.cookie = "ImeshVisitor=;expires=;domain=.indiamart.com;path=/;",
        document.cookie = "v4iilex=;expires=;domain=.indiamart.com;path=/;"
    }
}
function strToObj(e) {
    var n = new Array;
    n = e.split("|");
    var t = {};
    for (i = 0; i < n.length; i++) {
        var o = n[i];
        t[o.split("=")[0]] = o.split("=")[1]
    }
    return t
}
function objToStr(e) {
    var i = new Array;
    for (var n in e)
        i.push(n + "=" + e[n]);
    return i.join("|")
}
function readCookie(e) {
    var i = e + "=";
    return document.cookie.length > 0 && (offset = document.cookie.indexOf(i),
    -1 != offset) ? (offset += i.length,
    end = document.cookie.indexOf(";", offset),
    -1 == end && (end = document.cookie.length),
    unescape(document.cookie.substring(offset, end))) : "v4iilex" == e ? readCookie("v4iil") : ""
}
page.notMeQ = new Array,
page.Identified = function() {
    for (var e = 0; e < page.IdentifiedQ.length; e++)
        "function" == typeof page.IdentifiedQ[e] && page.IdentifiedQ[e].apply()
}
,
page.IdentifiedQ = new Array,
page.Identified = function() {
    for (var e = 0; e < page.IdentifiedQ.length; e++)
        "function" == typeof page.IdentifiedQ[e] && page.IdentifiedQ[e].apply()
}
,
page.notMe = function() {
    for (var e = 0; e < page.notMeQ.length; e++)
        page.notMeQ[e].apply()
}
;
var imesh_obj = new userDataCookie;
