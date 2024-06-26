(function() {
    var i = {
        $loginUserName: $("#loginUserName"),
        $curLanCode: $("#curLanCode")
    };
    var n = function n(e, t) {
        this.config = $.extend({}, i, t);
        this.$el = e || $(".J-mlan-config");
        this.lang = {};
        this.xhrFields = false;
        this.lanParam = "";
        this.currLocal = "en";
        this.init()
    };
    n.prototype = {
        constructor: n,
        init: function n() {
            this.$el.length > 0 && this.$el.attr("data-lang") && (this.currLocal = this.$el.attr("data-lang"));
            this.isCross = this.currLocal !== "en" && this.config.$loginUserName.length > 0;
            this.lanParam = this.config.$curLanCode.length > 0 ? "?lanCode=" + this.config.$curLanCode.val() : "";
            this.xhrFields = this.currLocal !== "en";
            if (this.getremoteData()) {
                this.lang = this.getremoteData()
            }
        },
        _: function n(e) {
            if (typeof this.lang[e] == "undefined") {
                return e
            } else {
                return this.lang[e]
            }
        },
        getremoteData: function n() {
            if (this.$el.length === 0) {
                return false
            }
            $el = this.$el;
            var e = "";
            if ($el.length > 0) {
                $el.each(function() {
                    var n = e || {};
                    e = $.extend({}, n, JSON.parse($(this).html()))
                })
            }
            return e
        },
        getHostName: function n() {
            var e = this.config.$loginUserName;
            var t = "";
            if (this.isCross) {
                var i = e.val();
                var t = "//" + i + ".en.made-in-china.com"
            }
            return t
        },
        getCrossUrl: function n() {
            var e = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "";
            var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
            var i = t ? this.lanParam : "";
            return this.getHostName() + e + i
        }
    };
    window.I18n = window.I18n || n
})();
(function() {
    var n = $(".J-mlan-config");
    if (window["I18n"]) {
        window.i18n = window.i18n || new I18n(n);
        var e = function n(e) {
            var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
            var i = {
                url: e,
                xhrFields: false
            };
            var r = typeof i18n !== "undefined";
            var a = r ? i18n.getCrossUrl(e, t) : e;
            var s = r ? i18n.xhrFields : false;
            i.url = a;
            i.xhrFields = s;
            return i
        };
        window.croAjax = e
    }
})();
//# sourceMappingURL=../../../../__sources__/athena/js/business/lang/athena18n_be17f7ee.js.map