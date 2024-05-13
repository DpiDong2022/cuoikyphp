<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Techolic - Best High-Tech Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL('images\public\icons\apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL('images/public\icons/logo-icon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL('images/public\icons/logo-icon.png')}}">
    <link rel="manifest" href="{{URL('images/public\icons/site.html')}}">
    <link rel="mask-icon" href="{{URL('images/public\icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{URL('images/public\icons/logo-icon.png')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{URL('images/public\icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"
        integrity="sha512-RWhcC19d8A3vE7kpXq6Ze4GcPfGe3DQWuenhXAbcGiZOaqGojLtWwit1eeM9jLGHFv8hnwpX3blJKGjTsf2HxQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
        integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.1.0/css/jquery.countdown.min.css"
        integrity="sha512-3TZ6IiaoL7KEeLwJgOfw+/dEOxOUpb9YhmUokvcFOvNuFJ7t9kvilMNAMqeJ8neRT4iBnCe35TZsPwD2Y1Gl6g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @include('components.public.style');
    </style>
</head>

<body>
    <div class="page-wrapper">
        <main class="main">
            @include('components.public.header')
            {{ $slot }}
            @include('components.public.footer')
        </main>
    </div><!-- End .page-wrapper -->

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.10.2/jquery.hoverIntent.min.js"
        integrity="sha512-sw+oNcbTS/A0W2RCoTKChyNVw/OClp76mxn3yaOZiDaxpGMXFIWrZC6BlgtieaWp2oh2asgj44TJd1f4Lz2C8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js"
        integrity="sha512-gdhtclwUZCkHSSb/Q79++RssWL4eDLKHO15TC7kR/XnvlNyzcvZDRLn4BIuxadMWGIxPuj/IbFBInMpYockVCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="
                                        https://cdn.jsdelivr.net/npm/bootstrap-input-spinner@4.0.1/es5-deprecated/src/bootstrap-input-spinner.min.js
                                        "></script>
    <script>
        /*! Simple JavaScript Inheritance
         * By John Resig http://ejohn.org/
         * MIT Licensed.
         */
        ! function() {
            "use strict";
            var a = !1;
            window.JQClass = function() {}, JQClass.classes = {}, JQClass.extend = function b(c) {
                function d() {
                    !a && this._init && this._init.apply(this, arguments)
                }
                var e = this.prototype;
                a = !0;
                var f = new this;
                a = !1;
                for (var g in c)
                    if ("function" == typeof c[g] && "function" == typeof e[g]) f[g] = function(a, b) {
                        return function() {
                            var c = this._super;
                            this._super = function(b) {
                                return e[a].apply(this, b || [])
                            };
                            var d = b.apply(this, arguments);
                            return this._super = c, d
                        }
                    }(g, c[g]);
                    else if ("object" == typeof c[g] && "object" == typeof e[g] && "defaultOptions" === g) {
                    var h, i = e[g],
                        j = c[g],
                        k = {};
                    for (h in i) k[h] = i[h];
                    for (h in j) k[h] = j[h];
                    f[g] = k
                } else f[g] = c[g];
                return d.prototype = f, d.prototype.constructor = d, d.extend = b, d
            }
        }(),
        /*! Abstract base class for collection plugins v1.0.2.
                    Written by Keith Wood (wood.keith{at}optusnet.com.au) December 2013.
                    Licensed under the MIT license (http://keith-wood.name/licence.html). */
        function($) {
            "use strict";

            function camelCase(a) {
                return a.replace(/-([a-z])/g, function(a, b) {
                    return b.toUpperCase()
                })
            }
            JQClass.classes.JQPlugin = JQClass.extend({
                name: "plugin",
                defaultOptions: {},
                regionalOptions: {},
                deepMerge: !0,
                _getMarker: function() {
                    return "is-" + this.name
                },
                _init: function() {
                    $.extend(this.defaultOptions, this.regionalOptions && this.regionalOptions[""] || {});
                    var a = camelCase(this.name);
                    $[a] = this, $.fn[a] = function(b) {
                        var c = Array.prototype.slice.call(arguments, 1),
                            d = this,
                            e = this;
                        return this.each(function() {
                            if ("string" == typeof b) {
                                if ("_" === b[0] || !$[a][b]) throw "Unknown method: " + b;
                                var f = $[a][b].apply($[a], [this].concat(c));
                                if (f !== d && void 0 !== f) return e = f, !1
                            } else $[a]._attach(this, b)
                        }), e
                    }
                },
                setDefaults: function(a) {
                    $.extend(this.defaultOptions, a || {})
                },
                _attach: function(a, b) {
                    if (a = $(a), !a.hasClass(this._getMarker())) {
                        a.addClass(this._getMarker()), b = $.extend(this.deepMerge, {}, this.defaultOptions,
                            this._getMetadata(a), b || {});
                        var c = $.extend({
                            name: this.name,
                            elem: a,
                            options: b
                        }, this._instSettings(a, b));
                        a.data(this.name, c), this._postAttach(a, c), this.option(a, b)
                    }
                },
                _instSettings: function(a, b) {
                    return {}
                },
                _postAttach: function(a, b) {},
                _getMetadata: function(elem) {
                    try {
                        var data = elem.data(this.name.toLowerCase()) || "";
                        data = data.replace(/(\\?)'/g, function(a, b) {
                            return b ? "'" : '"'
                        }).replace(/([a-zA-Z0-9]+):/g, function(a, b, c) {
                            var d = data.substring(0, c).match(/"/g);
                            return d && d.length % 2 !== 0 ? b + ":" : '"' + b + '":'
                        }).replace(/\\:/g, ":"), data = $.parseJSON("{" + data + "}");
                        for (var key in data)
                            if (data.hasOwnProperty(key)) {
                                var value = data[key];
                                "string" == typeof value && value.match(/^new Date\(([-0-9,\s]*)\)$/) && (data[
                                    key] = eval(value))
                            } return data
                    } catch (a) {
                        return {}
                    }
                },
                _getInst: function(a) {
                    return $(a).data(this.name) || {}
                },
                option: function(a, b, c) {
                    a = $(a);
                    var d = a.data(this.name),
                        e = b || {};
                    return !b || "string" == typeof b && "undefined" == typeof c ? (e = (d || {}).options, e &&
                        b ? e[b] : e) : void(a.hasClass(this._getMarker()) && ("string" == typeof b && (
                        e = {}, e[b] = c), this._optionsChanged(a, d, e), $.extend(d.options, e)))
                },
                _optionsChanged: function(a, b, c) {},
                destroy: function(a) {
                    a = $(a), a.hasClass(this._getMarker()) && (this._preDestroy(a, this._getInst(a)), a
                        .removeData(this.name).removeClass(this._getMarker()))
                },
                _preDestroy: function(a, b) {}
            }), $.JQPlugin = {
                createPlugin: function(a, b) {
                    "object" == typeof a && (b = a, a = "JQPlugin"), a = camelCase(a);
                    var c = camelCase(b.name);
                    JQClass.classes[c] = JQClass.classes[a].extend(b), new JQClass.classes[c]
                }
            }
        }(jQuery);
        //# sourceMappingURL=jquery.plugin.min.map
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"
        integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Main JS File -->
    <script>
        @include('components.public.script')
    </script>
</body>

</html>
