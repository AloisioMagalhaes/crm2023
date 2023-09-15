<script async>
    //------padStart
    if (!String.prototype.padStart) {
        String.prototype.padStart = function (targetLength, padString) {
            targetLength = Math.trunc(targetLength); //truncate if number or convert non-number to 0;
            padString = padString || ' ';
            if (this.length >= targetLength) {
                return this;
            }
            const paddingLength = targetLength - this.length;
            if (paddingLength > padString.length) {
                padString = Array(paddingLength / padString.length + 1).join(padString);
            }
            return padString.slice(0, paddingLength) + this;
        };
    }
</script>

<script async>
    //----------------Scroll To Top
    const scrollTopButton = document.querySelector('.scrollTop');
    const notificationDropdownMenu = document.querySelector(
        '.navbar .dropdown.notification-dropdown > .dropdown-menu'
    );
    const messageDropdownMenu = document.querySelector(
        '.navbar .dropdown.message-dropdown > .dropdown-menu'
    );
    async function scrollTopAnimate() {
        document.documentElement.scrollTop = 0;
        document.body.scrollTop = 0;
    }
    scrollTopButton.addEventListener('click', scrollTopAnimate);
    async function dropdownMenuEventListener(e) {
        await e.stopPropagation();
    }
    notificationDropdownMenu.addEventListener('click', dropdownMenuEventListener);
    messageDropdownMenu.addEventListener('click', dropdownMenuEventListener);
    //------------------multi-check checkbox
    function checkAll(clickCheck, relCheckbox) {
        const checker = document.querySelector('#' + clickCheck);
        const multiCheckbox = document.querySelectorAll('.' + relCheckbox);
        async function multiCheckboxEventListener() {
            await multiCheckbox.forEach((checkbox) => {
                checkbox.checked = checker.checked;
            });
        }
        checker.addEventListener('click', multiCheckboxEventListener);
    }
    //---------------multicheck database
    function multiCheck(table) {
        const chkParent = table.querySelectorAll('.chk-parent');
        const childChk = table.querySelectorAll('td:first-child .child-chk');
        chkParent.forEach((parent) => {
            parent.addEventListener('change', () => {
                const isChecked = parent.checked;
                childChk.forEach((child) => {
                    child.checked = isChecked;
                    child.closest('tr').classList.toggle('active', isChecked);
                });
            });
        });
        table.querySelectorAll('tbody tr .new-control').forEach((control) => {
            control.addEventListener('change', () => {
                control.closest('tr').classList.toggle('active');
            });
        });
    }
    //-------------checkAll
    function checkAll(clickCheck, relCheckbox) {
        const checker = document.getElementById(clickCheck);
        const multiCheckbox = document.querySelectorAll('.' + relCheckbox);
        checker.addEventListener('click', () => {
            multiCheckbox.forEach((checkbox) => {
                checkbox.checked = checker.checked;
            });
        });
    }
    //-------------Tooltips
    const bsTooltipElements = document.querySelectorAll('.bs-tooltip');
    bsTooltipElements.forEach((element) => {
        element.addEventListener('mouseenter', () => {
            element.tooltip('show');
        });
        element.addEventListener('mouseleave', () => {
            element.tooltip('hide');
        });
    });
    //-------------Popovers
    const bsPopoverElements = document.querySelectorAll('.bs-popover');
    bsPopoverElements.forEach((element) => {
        element.addEventListener('mouseenter', () => {
            element.popover('show');
        });
        element.addEventListener('mouseleave', () => {
            element.popover('hide');
        });
    });
    //----------toolTip
    const tDotElements = document.querySelectorAll('.t-dot');
    tDotElements.forEach((element) => {
        const tooltip = document.createElement('div');
        tooltip.classList.add('tooltip', 'status', 'rounded-tooltip');
        tooltip.setAttribute('role', 'tooltip');
        const arrow = document.createElement('div');
        arrow.classList.add('arrow');
        tooltip.appendChild(arrow);
        const tooltipInner = document.createElement('div');
        tooltipInner.classList.add('tooltip-inner');
        tooltip.appendChild(tooltipInner);
        element.setAttribute('data-bs-tooltip', tooltip.outerHTML);
    });
    //----------IE VERSION Dector
    function getIEVersion() {
        const userAgent = window.navigator.userAgent;
        const indexOfMSIE = userAgent.indexOf('MSIE');
        if (indexOfMSIE > 0) {
            return parseInt(userAgent.substring(indexOfMSIE + 5, userAgent.indexOf('.', indexOfMSIE)));
        } else if (userAgent.match(/Trident\/7\./)) {
            return 11;
        } else {
            return 0;
        }
    }
</script>

<script async>
    //------perfect-scrollbar
    ! function (t, e) {
        "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.PerfectScrollbar = e()
    }(this, function () {
        "use strict";

        function t(t) {
            return getComputedStyle(t)
        }

        function e(t, e) {
            for (var i in e) {
                var r = e[i];
                "number" == typeof r && (r += "px"), t.style[i] = r
            }
            return t
        }

        function i(t) {
            var e = document.createElement("div");
            return e.className = t, e
        }

        function r(t, e) {
            if (!v) throw new Error("No element matching method supported");
            return v.call(t, e)
        }

        function l(t) {
            t.remove ? t.remove() : t.parentNode && t.parentNode.removeChild(t)
        }

        function n(t, e) {
            return Array.prototype.filter.call(t.children, function (t) {
                return r(t, e)
            })
        }

        function o(t, e) {
            var i = t.element.classList,
                r = m.state.scrolling(e);
            i.contains(r) ? clearTimeout(Y[e]) : i.add(r)
        }

        function s(t, e) {
            Y[e] = setTimeout(function () {
                return t.isAlive && t.element.classList.remove(m.state.scrolling(e))
            }, t.settings.scrollingThreshold)
        }

        function a(t, e) {
            o(t, e), s(t, e)
        }

        function c(t) {
            if ("function" == typeof window.CustomEvent) return new CustomEvent(t);
            var e = document.createEvent("CustomEvent");
            return e.initCustomEvent(t, !1, !1, void 0), e
        }

        function h(t, e, i, r, l) {
            var n = i[0],
                o = i[1],
                s = i[2],
                h = i[3],
                u = i[4],
                d = i[5];
            void 0 === r && (r = !0), void 0 === l && (l = !1);
            var f = t.element;
            t.reach[h] = null, f[s] < 1 && (t.reach[h] = "start"), f[s] > t[n] - t[o] - 1 && (t.reach[h] = "end"), e && (f.dispatchEvent(c("ps-scroll-" + h)), e < 0 ? f.dispatchEvent(c("ps-scroll-" + u)) : e > 0 && f.dispatchEvent(c("ps-scroll-" + d)), r && a(t, h)), t.reach[h] && (e || l) && f.dispatchEvent(c("ps-" + h + "-reach-" + t.reach[h]))
        }

        function u(t) {
            return parseInt(t, 10) || 0
        }

        function d(t) {
            return r(t, "input,[contenteditable]") || r(t, "select,[contenteditable]") || r(t, "textarea,[contenteditable]") || r(t, "button,[contenteditable]")
        }

        function f(e) {
            var i = t(e);
            return u(i.width) + u(i.paddingLeft) + u(i.paddingRight) + u(i.borderLeftWidth) + u(i.borderRightWidth)
        }

        function p(t, e) {
            return t.settings.minScrollbarLength && (e = Math.max(e, t.settings.minScrollbarLength)), t.settings.maxScrollbarLength && (e = Math.min(e, t.settings.maxScrollbarLength)), e
        }

        function b(t, i) {
            var r = {
                width: i.railXWidth
            },
                l = Math.floor(t.scrollTop);
            i.isRtl ? r.left = i.negativeScrollAdjustment + t.scrollLeft + i.containerWidth - i.contentWidth : r.left = t.scrollLeft, i.isScrollbarXUsingBottom ? r.bottom = i.scrollbarXBottom - l : r.top = i.scrollbarXTop + l, e(i.scrollbarXRail, r);
            var n = {
                top: l,
                height: i.railYHeight
            };
            i.isScrollbarYUsingRight ? i.isRtl ? n.right = i.contentWidth - (i.negativeScrollAdjustment + t.scrollLeft) - i.scrollbarYRight - i.scrollbarYOuterWidth : n.right = i.scrollbarYRight - t.scrollLeft : i.isRtl ? n.left = i.negativeScrollAdjustment + t.scrollLeft + 2 * i.containerWidth - i.contentWidth - i.scrollbarYLeft - i.scrollbarYOuterWidth : n.left = i.scrollbarYLeft + t.scrollLeft, e(i.scrollbarYRail, n), e(i.scrollbarX, {
                left: i.scrollbarXLeft,
                width: i.scrollbarXWidth - i.railBorderXWidth
            }), e(i.scrollbarY, {
                top: i.scrollbarYTop,
                height: i.scrollbarYHeight - i.railBorderYWidth
            })
        }

        function g(t, e) {
            function i(e) {
                b[d] = g + Y * (e[a] - v), o(t, f), R(t), e.stopPropagation(), e.preventDefault()
            }

            function r() {
                s(t, f), t[p].classList.remove(m.state.clicking), t.event.unbind(t.ownerDocument, "mousemove", i)
            }
            var l = e[0],
                n = e[1],
                a = e[2],
                c = e[3],
                h = e[4],
                u = e[5],
                d = e[6],
                f = e[7],
                p = e[8],
                b = t.element,
                g = null,
                v = null,
                Y = null;
            t.event.bind(t[h], "mousedown", function (e) {
                g = b[d], v = e[a], Y = (t[n] - t[l]) / (t[c] - t[u]), t.event.bind(t.ownerDocument, "mousemove", i), t.event.once(t.ownerDocument, "mouseup", r), t[p].classList.add(m.state.clicking), e.stopPropagation(), e.preventDefault()
            })
        }
        var v = "undefined" != typeof Element && (Element.prototype.matches || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector),
            m = {
                main: "ps",
                element: {
                    thumb: function (t) {
                        return "ps__thumb-" + t
                    },
                    rail: function (t) {
                        return "ps__rail-" + t
                    },
                    consuming: "ps__child--consume"
                },
                state: {
                    focus: "ps--focus",
                    clicking: "ps--clicking",
                    active: function (t) {
                        return "ps--active-" + t
                    },
                    scrolling: function (t) {
                        return "ps--scrolling-" + t
                    }
                }
            },
            Y = {
                x: null,
                y: null
            },
            X = function (t) {
                this.element = t, this.handlers = {}
            },
            w = {
                isEmpty: {
                    configurable: !0
                }
            };
        X.prototype.bind = function (t, e) {
            void 0 === this.handlers[t] && (this.handlers[t] = []), this.handlers[t].push(e), this.element.addEventListener(t, e, !1)
        }, X.prototype.unbind = function (t, e) {
            var i = this;
            this.handlers[t] = this.handlers[t].filter(function (r) {
                return !(!e || r === e) || (i.element.removeEventListener(t, r, !1), !1)
            })
        }, X.prototype.unbindAll = function () {
            var t = this;
            for (var e in t.handlers) t.unbind(e)
        }, w.isEmpty.get = function () {
            var t = this;
            return Object.keys(this.handlers).every(function (e) {
                return 0 === t.handlers[e].length
            })
        }, Object.defineProperties(X.prototype, w);
        var y = function () {
            this.eventElements = []
        };
        y.prototype.eventElement = function (t) {
            var e = this.eventElements.filter(function (e) {
                return e.element === t
            })[0];
            return e || (e = new X(t), this.eventElements.push(e)), e
        }, y.prototype.bind = function (t, e, i) {
            this.eventElement(t).bind(e, i)
        }, y.prototype.unbind = function (t, e, i) {
            var r = this.eventElement(t);
            r.unbind(e, i), r.isEmpty && this.eventElements.splice(this.eventElements.indexOf(r), 1)
        }, y.prototype.unbindAll = function () {
            this.eventElements.forEach(function (t) {
                return t.unbindAll()
            }), this.eventElements = []
        }, y.prototype.once = function (t, e, i) {
            var r = this.eventElement(t),
                l = function (t) {
                    r.unbind(e, l), i(t)
                };
            r.bind(e, l)
        };
        var W = function (t, e, i, r, l) {
            void 0 === r && (r = !0), void 0 === l && (l = !1);
            var n;
            if ("top" === e) n = ["contentHeight", "containerHeight", "scrollTop", "y", "up", "down"];
            else {
                if ("left" !== e) throw new Error("A proper axis should be provided");
                n = ["contentWidth", "containerWidth", "scrollLeft", "x", "left", "right"]
            }
            h(t, i, n, r, l)
        },
            L = {
                isWebKit: "undefined" != typeof document && "WebkitAppearance" in document.documentElement.style,
                supportsTouch: "undefined" != typeof window && ("ontouchstart" in window || window.DocumentTouch && document instanceof window.DocumentTouch),
                supportsIePointer: "undefined" != typeof navigator && navigator.msMaxTouchPoints,
                isChrome: "undefined" != typeof navigator && /Chrome/i.test(navigator && navigator.userAgent)
            },
            R = function (t) {
                var e = t.element,
                    i = Math.floor(e.scrollTop);
                t.containerWidth = e.clientWidth, t.containerHeight = e.clientHeight, t.contentWidth = e.scrollWidth, t.contentHeight = e.scrollHeight, e.contains(t.scrollbarXRail) || (n(e, m.element.rail("x")).forEach(function (t) {
                    return l(t)
                }), e.appendChild(t.scrollbarXRail)), e.contains(t.scrollbarYRail) || (n(e, m.element.rail("y")).forEach(function (t) {
                    return l(t)
                }), e.appendChild(t.scrollbarYRail)), !t.settings.suppressScrollX && t.containerWidth + t.settings.scrollXMarginOffset < t.contentWidth ? (t.scrollbarXActive = !0, t.railXWidth = t.containerWidth - t.railXMarginWidth, t.railXRatio = t.containerWidth / t.railXWidth, t.scrollbarXWidth = p(t, u(t.railXWidth * t.containerWidth / t.contentWidth)), t.scrollbarXLeft = u((t.negativeScrollAdjustment + e.scrollLeft) * (t.railXWidth - t.scrollbarXWidth) / (t.contentWidth - t.containerWidth))) : t.scrollbarXActive = !1, !t.settings.suppressScrollY && t.containerHeight + t.settings.scrollYMarginOffset < t.contentHeight ? (t.scrollbarYActive = !0, t.railYHeight = t.containerHeight - t.railYMarginHeight, t.railYRatio = t.containerHeight / t.railYHeight, t.scrollbarYHeight = p(t, u(t.railYHeight * t.containerHeight / t.contentHeight)), t.scrollbarYTop = u(i * (t.railYHeight - t.scrollbarYHeight) / (t.contentHeight - t.containerHeight))) : t.scrollbarYActive = !1, t.scrollbarXLeft >= t.railXWidth - t.scrollbarXWidth && (t.scrollbarXLeft = t.railXWidth - t.scrollbarXWidth), t.scrollbarYTop >= t.railYHeight - t.scrollbarYHeight && (t.scrollbarYTop = t.railYHeight - t.scrollbarYHeight), b(e, t), t.scrollbarXActive ? e.classList.add(m.state.active("x")) : (e.classList.remove(m.state.active("x")), t.scrollbarXWidth = 0, t.scrollbarXLeft = 0, e.scrollLeft = 0), t.scrollbarYActive ? e.classList.add(m.state.active("y")) : (e.classList.remove(m.state.active("y")), t.scrollbarYHeight = 0, t.scrollbarYTop = 0, e.scrollTop = 0)
            },
            T = {
                "click-rail": function (t) {
                    t.event.bind(t.scrollbarY, "mousedown", function (t) {
                        return t.stopPropagation()
                    }), t.event.bind(t.scrollbarYRail, "mousedown", function (e) {
                        var i = e.pageY - window.pageYOffset - t.scrollbarYRail.getBoundingClientRect().top > t.scrollbarYTop ? 1 : -1;
                        t.element.scrollTop += i * t.containerHeight, R(t), e.stopPropagation()
                    }), t.event.bind(t.scrollbarX, "mousedown", function (t) {
                        return t.stopPropagation()
                    }), t.event.bind(t.scrollbarXRail, "mousedown", function (e) {
                        var i = e.pageX - window.pageXOffset - t.scrollbarXRail.getBoundingClientRect().left > t.scrollbarXLeft ? 1 : -1;
                        t.element.scrollLeft += i * t.containerWidth, R(t), e.stopPropagation()
                    })
                },
                "drag-thumb": function (t) {
                    g(t, ["containerWidth", "contentWidth", "pageX", "railXWidth", "scrollbarX", "scrollbarXWidth", "scrollLeft", "x", "scrollbarXRail"]), g(t, ["containerHeight", "contentHeight", "pageY", "railYHeight", "scrollbarY", "scrollbarYHeight", "scrollTop", "y", "scrollbarYRail"])
                },
                keyboard: function (t) {
                    function e(e, r) {
                        var l = Math.floor(i.scrollTop);
                        if (0 === e) {
                            if (!t.scrollbarYActive) return !1;
                            if (0 === l && r > 0 || l >= t.contentHeight - t.containerHeight && r < 0) return !t.settings.wheelPropagation
                        }
                        var n = i.scrollLeft;
                        if (0 === r) {
                            if (!t.scrollbarXActive) return !1;
                            if (0 === n && e < 0 || n >= t.contentWidth - t.containerWidth && e > 0) return !t.settings.wheelPropagation
                        }
                        return !0
                    }
                    var i = t.element,
                        l = function () {
                            return r(i, ":hover")
                        },
                        n = function () {
                            return r(t.scrollbarX, ":focus") || r(t.scrollbarY, ":focus")
                        };
                    t.event.bind(t.ownerDocument, "keydown", function (r) {
                        if (!(r.isDefaultPrevented && r.isDefaultPrevented() || r.defaultPrevented) && (l() || n())) {
                            var o = document.activeElement ? document.activeElement : t.ownerDocument.activeElement;
                            if (o) {
                                if ("IFRAME" === o.tagName) o = o.contentDocument.activeElement;
                                else
                                    for (; o.shadowRoot;) o = o.shadowRoot.activeElement;
                                if (d(o)) return
                            }
                            var s = 0,
                                a = 0;
                            switch (r.which) {
                                case 37:
                                    s = r.metaKey ? -t.contentWidth : r.altKey ? -t.containerWidth : -30;
                                    break;
                                case 38:
                                    a = r.metaKey ? t.contentHeight : r.altKey ? t.containerHeight : 30;
                                    break;
                                case 39:
                                    s = r.metaKey ? t.contentWidth : r.altKey ? t.containerWidth : 30;
                                    break;
                                case 40:
                                    a = r.metaKey ? -t.contentHeight : r.altKey ? -t.containerHeight : -30;
                                    break;
                                case 32:
                                    a = r.shiftKey ? t.containerHeight : -t.containerHeight;
                                    break;
                                case 33:
                                    a = t.containerHeight;
                                    break;
                                case 34:
                                    a = -t.containerHeight;
                                    break;
                                case 36:
                                    a = t.contentHeight;
                                    break;
                                case 35:
                                    a = -t.contentHeight;
                                    break;
                                default:
                                    return
                            }
                            t.settings.suppressScrollX && 0 !== s || t.settings.suppressScrollY && 0 !== a || (i.scrollTop -= a, i.scrollLeft += s, R(t), e(s, a) && r.preventDefault())
                        }
                    })
                },
                wheel: function (e) {
                    function i(t, i) {
                        var r = Math.floor(o.scrollTop),
                            l = 0 === o.scrollTop,
                            n = r + o.offsetHeight === o.scrollHeight,
                            s = 0 === o.scrollLeft,
                            a = o.scrollLeft + o.offsetWidth === o.scrollWidth;
                        return !(Math.abs(i) > Math.abs(t) ? l || n : s || a) || !e.settings.wheelPropagation
                    }

                    function r(t) {
                        var e = t.deltaX,
                            i = -1 * t.deltaY;
                        return void 0 !== e && void 0 !== i || (e = -1 * t.wheelDeltaX / 6, i = t.wheelDeltaY / 6), t.deltaMode && 1 === t.deltaMode && (e *= 10, i *= 10), e !== e && i !== i && (e = 0, i = t.wheelDelta), t.shiftKey ? [-i, -e] : [e, i]
                    }

                    function l(e, i, r) {
                        if (!L.isWebKit && o.querySelector("select:focus")) return !0;
                        if (!o.contains(e)) return !1;
                        for (var l = e; l && l !== o;) {
                            if (l.classList.contains(m.element.consuming)) return !0;
                            var n = t(l);
                            if ([n.overflow, n.overflowX, n.overflowY].join("").match(/(scroll|auto)/)) {
                                var s = l.scrollHeight - l.clientHeight;
                                if (s > 0 && !(0 === l.scrollTop && r > 0 || l.scrollTop === s && r < 0)) return !0;
                                var a = l.scrollWidth - l.clientWidth;
                                if (a > 0 && !(0 === l.scrollLeft && i < 0 || l.scrollLeft === a && i > 0)) return !0
                            }
                            l = l.parentNode
                        }
                        return !1
                    }

                    function n(t) {
                        var n = r(t),
                            s = n[0],
                            a = n[1];
                        if (!l(t.target, s, a)) {
                            var c = !1;
                            e.settings.useBothWheelAxes ? e.scrollbarYActive && !e.scrollbarXActive ? (a ? o.scrollTop -= a * e.settings.wheelSpeed : o.scrollTop += s * e.settings.wheelSpeed, c = !0) : e.scrollbarXActive && !e.scrollbarYActive && (s ? o.scrollLeft += s * e.settings.wheelSpeed : o.scrollLeft -= a * e.settings.wheelSpeed, c = !0) : (o.scrollTop -= a * e.settings.wheelSpeed, o.scrollLeft += s * e.settings.wheelSpeed), R(e), (c = c || i(s, a)) && !t.ctrlKey && (t.stopPropagation(), t.preventDefault())
                        }
                    }
                    var o = e.element;
                    void 0 !== window.onwheel ? e.event.bind(o, "wheel", n) : void 0 !== window.onmousewheel && e.event.bind(o, "mousewheel", n)
                },
                touch: function (e) {
                    function i(t, i) {
                        var r = Math.floor(h.scrollTop),
                            l = h.scrollLeft,
                            n = Math.abs(t),
                            o = Math.abs(i);
                        if (o > n) {
                            if (i < 0 && r === e.contentHeight - e.containerHeight || i > 0 && 0 === r) return 0 === window.scrollY && i > 0 && L.isChrome
                        } else if (n > o && (t < 0 && l === e.contentWidth - e.containerWidth || t > 0 && 0 === l)) return !0;
                        return !0
                    }

                    function r(t, i) {
                        h.scrollTop -= i, h.scrollLeft -= t, R(e)
                    }

                    function l(t) {
                        return t.targetTouches ? t.targetTouches[0] : t
                    }

                    function n(t) {
                        return !(t.pointerType && "pen" === t.pointerType && 0 === t.buttons || (!t.targetTouches || 1 !== t.targetTouches.length) && (!t.pointerType || "mouse" === t.pointerType || t.pointerType === t.MSPOINTER_TYPE_MOUSE))
                    }

                    function o(t) {
                        if (n(t)) {
                            var e = l(t);
                            u.pageX = e.pageX, u.pageY = e.pageY, d = (new Date).getTime(), null !== p && clearInterval(p)
                        }
                    }

                    function s(e, i, r) {
                        if (!h.contains(e)) return !1;
                        for (var l = e; l && l !== h;) {
                            if (l.classList.contains(m.element.consuming)) return !0;
                            var n = t(l);
                            if ([n.overflow, n.overflowX, n.overflowY].join("").match(/(scroll|auto)/)) {
                                var o = l.scrollHeight - l.clientHeight;
                                if (o > 0 && !(0 === l.scrollTop && r > 0 || l.scrollTop === o && r < 0)) return !0;
                                var s = l.scrollLeft - l.clientWidth;
                                if (s > 0 && !(0 === l.scrollLeft && i < 0 || l.scrollLeft === s && i > 0)) return !0
                            }
                            l = l.parentNode
                        }
                        return !1
                    }

                    function a(t) {
                        if (n(t)) {
                            var e = l(t),
                                o = {
                                    pageX: e.pageX,
                                    pageY: e.pageY
                                },
                                a = o.pageX - u.pageX,
                                c = o.pageY - u.pageY;
                            if (s(t.target, a, c)) return;
                            r(a, c), u = o;
                            var h = (new Date).getTime(),
                                p = h - d;
                            p > 0 && (f.x = a / p, f.y = c / p, d = h), i(a, c) && t.preventDefault()
                        }
                    }

                    function c() {
                        e.settings.swipeEasing && (clearInterval(p), p = setInterval(function () {
                            e.isInitialized ? clearInterval(p) : f.x || f.y ? Math.abs(f.x) < .01 && Math.abs(f.y) < .01 ? clearInterval(p) : (r(30 * f.x, 30 * f.y), f.x *= .8, f.y *= .8) : clearInterval(p)
                        }, 10))
                    }
                    if (L.supportsTouch || L.supportsIePointer) {
                        var h = e.element,
                            u = {},
                            d = 0,
                            f = {},
                            p = null;
                        L.supportsTouch ? (e.event.bind(h, "touchstart", o), e.event.bind(h, "touchmove", a), e.event.bind(h, "touchend", c)) : L.supportsIePointer && (window.PointerEvent ? (e.event.bind(h, "pointerdown", o), e.event.bind(h, "pointermove", a), e.event.bind(h, "pointerup", c)) : window.MSPointerEvent && (e.event.bind(h, "MSPointerDown", o), e.event.bind(h, "MSPointerMove", a), e.event.bind(h, "MSPointerUp", c)))
                    }
                }
            },
            H = function (r, l) {
                var n = this;
                if (void 0 === l && (l = {}), "string" == typeof r && (r = document.querySelector(r)), !r || !r.nodeName) throw new Error("no element is specified to initialize PerfectScrollbar");
                this.element = r, r.classList.add(m.main), this.settings = {
                    handlers: ["click-rail", "drag-thumb", "keyboard", "wheel", "touch"],
                    maxScrollbarLength: null,
                    minScrollbarLength: null,
                    scrollingThreshold: 1e3,
                    scrollXMarginOffset: 0,
                    scrollYMarginOffset: 0,
                    suppressScrollX: !1,
                    suppressScrollY: !1,
                    swipeEasing: !0,
                    useBothWheelAxes: !1,
                    wheelPropagation: !0,
                    wheelSpeed: 1
                };
                for (var o in l) n.settings[o] = l[o];
                this.containerWidth = null, this.containerHeight = null, this.contentWidth = null, this.contentHeight = null;
                var s = function () {
                    return r.classList.add(m.state.focus)
                },
                    a = function () {
                        return r.classList.remove(m.state.focus)
                    };
                this.isRtl = "rtl" === t(r).direction, this.isNegativeScroll = function () {
                    var t = r.scrollLeft,
                        e = null;
                    return r.scrollLeft = -1, e = r.scrollLeft < 0, r.scrollLeft = t, e
                }(), this.negativeScrollAdjustment = this.isNegativeScroll ? r.scrollWidth - r.clientWidth : 0, this.event = new y, this.ownerDocument = r.ownerDocument || document, this.scrollbarXRail = i(m.element.rail("x")), r.appendChild(this.scrollbarXRail), this.scrollbarX = i(m.element.thumb("x")), this.scrollbarXRail.appendChild(this.scrollbarX), this.scrollbarX.setAttribute("tabindex", 0), this.event.bind(this.scrollbarX, "focus", s), this.event.bind(this.scrollbarX, "blur", a), this.scrollbarXActive = null, this.scrollbarXWidth = null, this.scrollbarXLeft = null;
                var c = t(this.scrollbarXRail);
                this.scrollbarXBottom = parseInt(c.bottom, 10), isNaN(this.scrollbarXBottom) ? (this.isScrollbarXUsingBottom = !1, this.scrollbarXTop = u(c.top)) : this.isScrollbarXUsingBottom = !0, this.railBorderXWidth = u(c.borderLeftWidth) + u(c.borderRightWidth), e(this.scrollbarXRail, {
                    display: "block"
                }), this.railXMarginWidth = u(c.marginLeft) + u(c.marginRight), e(this.scrollbarXRail, {
                    display: ""
                }), this.railXWidth = null, this.railXRatio = null, this.scrollbarYRail = i(m.element.rail("y")), r.appendChild(this.scrollbarYRail), this.scrollbarY = i(m.element.thumb("y")), this.scrollbarYRail.appendChild(this.scrollbarY), this.scrollbarY.setAttribute("tabindex", 0), this.event.bind(this.scrollbarY, "focus", s), this.event.bind(this.scrollbarY, "blur", a), this.scrollbarYActive = null, this.scrollbarYHeight = null, this.scrollbarYTop = null;
                var h = t(this.scrollbarYRail);
                this.scrollbarYRight = parseInt(h.right, 10), isNaN(this.scrollbarYRight) ? (this.isScrollbarYUsingRight = !1, this.scrollbarYLeft = u(h.left)) : this.isScrollbarYUsingRight = !0, this.scrollbarYOuterWidth = this.isRtl ? f(this.scrollbarY) : null, this.railBorderYWidth = u(h.borderTopWidth) + u(h.borderBottomWidth), e(this.scrollbarYRail, {
                    display: "block"
                }), this.railYMarginHeight = u(h.marginTop) + u(h.marginBottom), e(this.scrollbarYRail, {
                    display: ""
                }), this.railYHeight = null, this.railYRatio = null, this.reach = {
                    x: r.scrollLeft <= 0 ? "start" : r.scrollLeft >= this.contentWidth - this.containerWidth ? "end" : null,
                    y: r.scrollTop <= 0 ? "start" : r.scrollTop >= this.contentHeight - this.containerHeight ? "end" : null
                }, this.isAlive = !0, this.settings.handlers.forEach(function (t) {
                    return T[t](n)
                }), this.lastScrollTop = Math.floor(r.scrollTop), this.lastScrollLeft = r.scrollLeft, this.event.bind(this.element, "scroll", function (t) {
                    return n.onScroll(t)
                }), R(this)
            };
        return H.prototype.update = function () {
            this.isAlive && (this.negativeScrollAdjustment = this.isNegativeScroll ? this.element.scrollWidth - this.element.clientWidth : 0, e(this.scrollbarXRail, {
                display: "block"
            }), e(this.scrollbarYRail, {
                display: "block"
            }), this.railXMarginWidth = u(t(this.scrollbarXRail).marginLeft) + u(t(this.scrollbarXRail).marginRight), this.railYMarginHeight = u(t(this.scrollbarYRail).marginTop) + u(t(this.scrollbarYRail).marginBottom), e(this.scrollbarXRail, {
                display: "none"
            }), e(this.scrollbarYRail, {
                display: "none"
            }), R(this), W(this, "top", 0, !1, !0), W(this, "left", 0, !1, !0), e(this.scrollbarXRail, {
                display: ""
            }), e(this.scrollbarYRail, {
                display: ""
            }))
        }, H.prototype.onScroll = function (t) {
            this.isAlive && (R(this), W(this, "top", this.element.scrollTop - this.lastScrollTop), W(this, "left", this.element.scrollLeft - this.lastScrollLeft), this.lastScrollTop = Math.floor(this.element.scrollTop), this.lastScrollLeft = this.element.scrollLeft)
        }, H.prototype.destroy = function () {
            this.isAlive && (this.event.unbindAll(), l(this.scrollbarX), l(this.scrollbarY), l(this.scrollbarXRail), l(this.scrollbarYRail), this.removePsClasses(), this.element = null, this.scrollbarX = null, this.scrollbarY = null, this.scrollbarXRail = null, this.scrollbarYRail = null, this.isAlive = !1)
        }, H.prototype.removePsClasses = function () {
            this.element.className = this.element.className.split(" ").filter(function (t) {
                return !t.match(/^ps([-_].+|)$/)
            }).join(" ")
        }, H
    });
</script>
<script async>
    //-----------ScrumBoard
    const Container = {
        scrumboard: document.querySelector('.scrumboard'),
        card: document.querySelectorAll('.scrumboard .card')
    };
    //----------Containers
    const scrumboard = Container.scrumboard;
    const card = Container.card;
    //----------Tornar a tarefa classificável
    function makeTaskSortable() {
        const sortableElements = document.querySelectorAll('[data-sortable="true"]');
        sortableElements.forEach((element) => {
            element.sortable({
                connectWith: '.connect-sorting-content',
                items: '.card',
                cursor: 'move',
                placeholder: 'ui-state-highlight',
                refreshPosition: true,
                stop: (event, ui) => {
                    const parentUi = ui.item.parent().getAttribute('data-section');
                },
                update: (event, ui) => {
                    console.log(ui);
                    console.log(ui.item);
                }
            });
        });
    }
    //--------------Clique no botão Adicionar tarefa para abrir o modal e muito mais..
    function addTask() {
        const parentElement = document.querySelector('.addTask').parentElement;
        const dataSection = parentElement.getAttribute('data-section');
        document.querySelector('.edit-task-title').style.display = 'none';
        document.querySelector('.add-task-title').style.display = 'block';
        document.querySelector('[data-btnfn="addTask"]').style.display = 'block';
        document.querySelector('[data-btnfn="editTask"]').style.display = 'none';
        // document.querySelector('.addTaskAccordion .collapse').collapse('hide');
        document.getElementById('addTaskModal').modal('show');
        $_taskAdd(dataSection);
    }
    //-------------Obter o valor de contagem de intervalo
    const progressRangeCounter = document.getElementById('progress-range-counter');
    progressRangeCounter.addEventListener('input', (event) => {
        event.preventDefault();
        const getRangeValue = event.target.value;
        const rangeCountNumber = document.querySelector('.range-count-number');
        rangeCountNumber.innerHTML = getRangeValue;
        rangeCountNumber.setAttribute('data-rangeCountNumber', getRangeValue);
    });
    //-----------resetar valores de entrada
    const addTaskModal = document.getElementById('addTaskModal');
    const addListModal = document.getElementById('addListModal');
    addTaskModal.addEventListener('hidden.bs.modal', (e) => {
        const inputElements = document.querySelectorAll('input,textarea');
        const rangeElements = document.querySelectorAll('input[type="range"]');
        inputElements.forEach((element) => {
            element.value = '';
        });
        rangeElements.forEach((element) => {
            element.value = 0;
        });
        const rangeCountNumbers = document.querySelectorAll('.range-count-number');
        rangeCountNumbers.forEach((element) => {
            element.setAttribute('data-rangecountnumber', 0);
            element.innerHTML = 0;
        });
    });
    //
    const addTaskButton = document.querySelector('[data-btnfn="addTask"]');
    addTaskButton.addEventListener('click', (event) => {
        const getAddBtnClass = addTaskButton.getAttribute('class').split(' ')[1];
        const today = new Date();
        const dd = String(today.getDate()).padStart(2, '0');
        const mm = String(today.getMonth()); //January is 0!
        const yyyy = today.getFullYear();
        const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        today = dd + ' ' + monthNames[mm] + ', ' + yyyy;
        const getParent = document.querySelector('.addTask').parentElement;
        const task = document.getElementById('s-task').value;
        const taskText = document.getElementById('s-text').value;
        const taskProgress = document.querySelector('.range-count-number').getAttribute('data-rangeCountNumber');
        const html = `
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">${task}</h3>
            </div>
            <div class="card-body">
                <p class="card-text">${taskText}</p>
            </div>
            <div class="card-footer">
                <span class="text-muted">${today}</span>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: ${taskProgress}%" aria-valuenow="${taskProgress}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
        `;
        document.querySelector(`[data-section='` + getParent + `'] .connect-sorting-content`).append(html);
        event.preventDefault();
        document.getElementById('addTaskModal').modal('hide');
        $_taskEdit();
        $_taskDelete();
    });
    //
    const addListButton = document.getElementById('add-list');
    addListButton.addEventListener('click', (event) => {
        event.preventDefault();
        document.querySelector('.add-list').style.display = 'block';
        document.querySelector('.edit-list').style.display = 'none';
        document.querySelector('.edit-list-title').style.display = 'none';
        document.querySelector('.add-list-title').style.display = 'block';
        document.getElementById('addListModal').modal('show');
    });
    //
    function deleteList() {
        const listDeleteButtons = document.querySelectorAll('.list-delete');
        listDeleteButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                button.parentElement.parentElement.remove();
            });
        });
    }
    //
    function clearList() {
        const listClearAllButtons = document.querySelectorAll('.list-clear-all');
        listClearAllButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                button.parentElement.parentElement
                    .querySelector('[data-connect="sorting"]')
                    .querySelectorAll('.connect-sorting-content .card')
                    .remove();
            });
        });
    }
    //
    function editList() {
        const listEditButtons = document.querySelectorAll('.list-edit');
        listEditButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                const outerThis = button.parentElement;
                document.querySelector('.add-list').style.display = 'none';
                document.querySelector('.edit-list').style.display = 'block';
                document.querySelector('.add-list-title').style.display = 'none';
                document.querySelector('.edit-list-title').style.display = 'block';
                const listTitle = outerThis.parentElement
                    .querySelector('[data-connect="sorting"]')
                    .querySelector('.s-heading')
                    .getAttribute('data-listTitle');
                document.getElementById('s-list-name').value = listTitle;
                document.querySelector('.edit-list').addEventListener('click', (event) => {
                    const innerThis = event.target;
                    const getListTitle = document.getElementById('s-list-name').value;
                    const editedListTitle = outerThis.parentElement
                        .querySelector('[data-connect="sorting"]')
                        .querySelector('.s-heading')
                        .innerHTML = getListTitle;
                    const editedListTitleDataAttr = outerThis.parentElement
                        .querySelector('[data-connect="sorting"]')
                        .querySelector('.s-heading')
                        .setAttribute('data-listTitle', getListTitle);
                    document.getElementById('addListModal').modal('hide');
                    document.getElementById('s-list-name').value = '';
                });
                document.getElementById('addListModal').modal('show');
                document.getElementById('addListModal').addEventListener('hidden.bs.modal', (e) => {
                    document.getElementById('s-list-name').value = '';
                });
            });
        });
    }
</script>
<script async>
    var App = function () {
        var MediaSize = {
            xl: 1200,
            lg: 992,
            md: 991,
            sm: 576
        };
        var ToggleClasses = {
            headerhamburger: '.toggle-sidebar',
            inputFocused: 'input-focused',
        };

        var Selector = {
            mainHeader: '.header.navbar',
            headerhamburger: '.toggle-sidebar',
            fixed: '.fixed-top',
            mainContainer: '.main-container',
            sidebar: '#sidebar',
            sidebarContent: '#sidebar-content',
            sidebarStickyContent: '.sticky-sidebar-content',
            ariaExpandedTrue: '#sidebar [aria-expanded="true"]',
            ariaExpandedFalse: '#sidebar [aria-expanded="false"]',
            contentWrapper: '#content',
            contentWrapperContent: '.container',
            mainContentArea: '.main-content',
            searchFull: '.toggle-search',
            overlay: {
                sidebar: '.overlay',
                cs: '.cs-overlay',
                search: '.search-overlay'
            }
        };

        var categoryScroll = {
            scrollCat: function () {
                var sidebarWrapper = document.querySelectorAll('.sidebar-wrapper [aria-expanded="true"]')[0];
                var sidebarWrapperTop = sidebarWrapper.offsetTop - 20;
                setTimeout(function () { $('.menu-categories').animate({ scrollTop: sidebarWrapperTop }, 500); }, 500);
            }
        }

        var toggleFunction = {
            sidebar: function ($recentSubmenu) {
                $('.sidebarCollapse').on('click', function (sidebar) {
                    sidebar.preventDefault();
                    getSidebar = $('.sidebar-wrapper');
                    console.log('drill 1')
                    if ($recentSubmenu === true) {
                        console.log('drill 2')
                        if ($('.collapse.submenu').hasClass('show')) {
                            console.log('drill 3')
                            $('.submenu.show').addClass('mini-recent-submenu');
                            getSidebar.find('.collapse.submenu').removeClass('show');
                            getSidebar.find('.collapse.submenu').removeClass('show');
                            $('.collapse.submenu').parents('li.menu').find('.dropdown-toggle').attr('aria-expanded', 'false');
                        } else {
                            console.log('drill 4')
                            if ($(Selector.mainContainer).hasClass('sidebar-closed')) {
                                console.log('drill 5')
                                if ($('.collapse.submenu').hasClass('recent-submenu')) {
                                    getSidebar.find('.collapse.submenu.recent-submenu').addClass('show');
                                    $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'true');
                                    $('.submenu').removeClass('mini-recent-submenu');
                                    console.log('drill 6')

                                } else {
                                    $('li.active .submenu').addClass('recent-submenu');
                                    getSidebar.find('.collapse.submenu.recent-submenu').addClass('show');
                                    $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'true');
                                    $('.submenu').removeClass('mini-recent-submenu');
                                    console.log('drill 7')
                                }
                            }
                        }
                        console.log('drill 2 end')
                    }
                    console.log('end drill')
                    $(Selector.mainContainer).toggleClass("sidebar-closed");
                    $(Selector.mainHeader).toggleClass('expand-header');
                    $(Selector.mainContainer).toggleClass("sbar-open");
                    $('.overlay').toggleClass('show');
                    $('html,body').toggleClass('sidebar-noneoverflow');
                });
            },
            onToggleSidebarSubmenu: function () {
                $('.sidebar-wrapper').on('mouseenter mouseleave', function (event) {
                    event.preventDefault();
                    if ($('body').hasClass('alt-menu')) {
                        if ($('.main-container').hasClass('sidebar-closed')) {
                            if (event.type === 'mouseenter') {
                                $('li .submenu').removeClass('show');
                                $('li.active .submenu').addClass('recent-submenu');
                                $('li.active').find('.collapse.submenu.recent-submenu').addClass('show');
                                $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'true');
                            } else if (event.type === 'mouseleave') {
                                $('li').find('.collapse.submenu').removeClass('show');
                                $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'false');
                                $('.collapse.submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'false');
                            }
                        }
                    } else {
                        if ($('.main-container').hasClass('sidebar-closed')) {
                            if (event.type === 'mouseenter') {
                                $(this).find('.submenu.recent-submenu').addClass('show');
                                $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'true');
                            } else if (event.type === 'mouseleave') {
                                $(this).find('.submenu.recent-submenu').removeClass('show');
                                $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'false');
                            }
                        }

                    }
                })
            },
            offToggleSidebarSubmenu: function () {
                $('.sidebar-wrapper').off('mouseenter mouseleave');
            },
            overlay: function () {
                $('#dismiss, .overlay, cs-overlay').on('click', function () {
                    // hide sidebar
                    $(Selector.mainContainer).addClass('sidebar-closed');
                    $(Selector.mainContainer).removeClass('sbar-open');
                    // hide overlay
                    $('.overlay').removeClass('show');
                    $('html,body').removeClass('sidebar-noneoverflow');
                });
            },
            search: function () {
                $(Selector.searchFull).click(function (event) {
                    $(this).parents('.search-animated').find('.search-full').addClass(ToggleClasses.inputFocused);
                    $(this).parents('.search-animated').addClass('show-search');
                    $(Selector.overlay.search).addClass('show');
                    $(Selector.overlay.search).addClass('show');
                });

                $(Selector.overlay.search).click(function (event) {
                    $(this).removeClass('show');
                    $(Selector.searchFull).parents('.search-animated').find('.search-full').removeClass(ToggleClasses.inputFocused);
                    $(Selector.searchFull).parents('.search-animated').removeClass('show-search');
                });
            }
        }

        var inBuiltfunctionality = {
            mainCatActivateScroll: function () {
                const ps = new PerfectScrollbar('.menu-categories', {
                    wheelSpeed: .5,
                    swipeEasing: !0,
                    minScrollbarLength: 40,
                    maxScrollbarLength: 300
                });
            },
            preventScrollBody: function () {
                $('#sidebar').bind('mousewheel DOMMouseScroll', function (e) {
                    var scrollTo = null;

                    if (e.type == 'mousewheel') {
                        scrollTo = (e.originalEvent.wheelDelta * -1);
                    }
                    else if (e.type == 'DOMMouseScroll') {
                        scrollTo = 40 * e.originalEvent.detail;
                    }

                    if (scrollTo) {
                        e.preventDefault();
                        $(this).scrollTop(scrollTo + $(this).scrollTop());
                    }
                });
            },
            languageDropdown: function () {
                var getDropdownElement = document.querySelectorAll('.more-dropdown.language-dropdown .dropdown-item');
                for (var i = 0; i < getDropdownElement.length; i++) {
                    getDropdownElement[i].addEventListener('click', function () {
                        document.querySelectorAll('.more-dropdown.language-dropdown .dropdown-toggle > span')[0].innerText = this.getAttribute('data-value');
                        document.querySelectorAll('.more-dropdown .dropdown-toggle > img')[0].setAttribute('src', 'assets/img/' + this.getAttribute('data-img-value') + '.png');
                    })
                }
            },
            appsDropdown: function () {
                var getDropdownElement = document.querySelectorAll('.more-dropdown.apps-dropdown .dropdown-item');
                for (var i = 0; i < getDropdownElement.length; i++) {
                    getDropdownElement[i].addEventListener('click', function (e) {

                        if (this.parentNode.classList.contains('dropdown-item-collapsable')) {
                            console.log('comnsos')
                            e.stopPropagation();
                            $('.custom-dropdown-icon .collapse').collapse('toggle')
                            $('.custom-dropdown-icon .dropdown-item-collapsable').toggleClass('show')
                        }

                        document.querySelectorAll('.more-dropdown.apps-dropdown .dropdown-toggle > span')[0].innerText = this.getAttribute('data-value');
                    })
                }
            }
        }

        var _mobileResolution = {
            onRefresh: function () {
                var windowWidth = window.innerWidth;
                if (windowWidth <= MediaSize.md) {
                    categoryScroll.scrollCat();
                    toggleFunction.sidebar();
                }
            },

            onResize: function () {
                $(window).on('resize', function (event) {
                    event.preventDefault();
                    var windowWidth = window.innerWidth;
                    if (windowWidth <= MediaSize.md) {
                        toggleFunction.offToggleSidebarSubmenu();
                    }
                });
            }

        }

        var _desktopResolution = {
            onRefresh: function () {
                var windowWidth = window.innerWidth;
                if (windowWidth > MediaSize.md) {
                    categoryScroll.scrollCat();
                    toggleFunction.sidebar(true);
                    toggleFunction.onToggleSidebarSubmenu();
                }
            },

            onResize: function () {
                $(window).on('resize', function (event) {
                    event.preventDefault();
                    var windowWidth = window.innerWidth;
                    if (windowWidth > MediaSize.md) {
                        toggleFunction.onToggleSidebarSubmenu();
                    }
                });
            }

        }

        function sidebarFunctionality() {
            function sidebarCloser() {

                if (window.innerWidth <= 991) {


                    if (!$('body').hasClass('alt-menu')) {

                        $("#container").addClass("sidebar-closed");
                        $('.overlay').removeClass('show');
                    } else {
                        $(".navbar").removeClass("expand-header");
                        $('.overlay').removeClass('show');
                        $('#container').removeClass('sbar-open');
                        $('html, body').removeClass('sidebar-noneoverflow');
                    }

                } else if (window.innerWidth > 991) {

                    if (!$('body').hasClass('alt-menu')) {

                        $("#container").removeClass("sidebar-closed");
                        $(".navbar").removeClass("expand-header");
                        $('.overlay').removeClass('show');
                        $('#container').removeClass('sbar-open');
                        $('html, body').removeClass('sidebar-noneoverflow');
                    } else {
                        $('html, body').addClass('sidebar-noneoverflow');
                        $("#container").addClass("sidebar-closed");
                        $(".navbar").addClass("expand-header");
                        $('.overlay').addClass('show');
                        $('#container').addClass('sbar-open');
                        $('.sidebar-wrapper [aria-expanded="true"]').parents('li.menu').find('.collapse').removeClass('show');
                    }
                }

            }

            function sidebarMobCheck() {
                if (window.innerWidth <= 991) {

                    if ($('.main-container').hasClass('sbar-open')) {
                        return;
                    } else {
                        sidebarCloser()
                    }
                } else if (window.innerWidth > 991) {
                    sidebarCloser();
                }
            }

            sidebarCloser();

            $(window).resize(function (event) {
                sidebarMobCheck();
            });

        }

        return {
            init: function () {
                toggleFunction.overlay();
                toggleFunction.search();
                /*
                    Desktop Resoltion fn
                */
                _desktopResolution.onRefresh();
                _desktopResolution.onResize();

                /*
                    Mobile Resoltion fn
                */
                _mobileResolution.onRefresh();
                _mobileResolution.onResize();

                sidebarFunctionality();

                /*
                    In Built Functionality fn
                */
                inBuiltfunctionality.mainCatActivateScroll();
                inBuiltfunctionality.preventScrollBody();
                inBuiltfunctionality.languageDropdown();
                inBuiltfunctionality.appsDropdown();
            }
        }

    }();
</script>
<script async>$(document).ready(async function () { App.init() }());</script>