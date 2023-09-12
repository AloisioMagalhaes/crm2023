<script async defer>
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

<script async defer>
    /*
    =========================================
    |                                       |
    |           Scroll To Top               |
    |                                       |
    =========================================
    */
    $('.scrollTop').click(function () {
        $("html, body").animate({ scrollTop: 0 });
    });


    $('.navbar .dropdown.notification-dropdown > .dropdown-menu, .navbar .dropdown.message-dropdown > .dropdown-menu ').click(function (e) {
        e.stopPropagation();
    });

    /*
    =========================================
    |                                       |
    |       Multi-Check checkbox            |
    |                                       |
    =========================================
    */

    function checkall(clickchk, relChkbox) {

        var checker = $('#' + clickchk);
        var multichk = $('.' + relChkbox);


        checker.click(function () {
            multichk.prop('checked', $(this).prop('checked'));
        });
    }


    /*
    =========================================
    |                                       |
    |           MultiCheck                  |
    |                                       |
    =========================================
    */

    /*
        This MultiCheck Function is recommanded for datatable
    */

    function multiCheck(tb_var) {
        tb_var.on("change", ".chk-parent", function () {
            var e = $(this).closest("table").find("td:first-child .child-chk"), a = $(this).is(":checked");
            $(e).each(function () {
                a ? ($(this).prop("checked", !0), $(this).closest("tr").addClass("active")) : ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
            })
        }),
            tb_var.on("change", "tbody tr .new-control", function () {
                $(this).parents("tr").toggleClass("active")
            })
    }

    /*
    =========================================
    |                                       |
    |           MultiCheck                  |
    |                                       |
    =========================================
    */

    function checkall(clickchk, relChkbox) {

        var checker = $('#' + clickchk);
        var multichk = $('.' + relChkbox);


        checker.click(function () {
            multichk.prop('checked', $(this).prop('checked'));
        });
    }

    /*
    =========================================
    |                                       |
    |               Tooltips                |
    |                                       |
    =========================================
    */

    $('.bs-tooltip').tooltip();

    /*
    =========================================
    |                                       |
    |               Popovers                |
    |                                       |
    =========================================
    */

    $('.bs-popover').popover();


    /*
    ================================================
    |                                              |
    |               Rounded Tooltip                |
    |                                              |
    ================================================
    */

    $('.t-dot').tooltip({
        template: '<div class="tooltip status rounded-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })


    /*
    ================================================
    |            IE VERSION Dector                 |
    ================================================
    */

    function GetIEVersion() {
        var sAgent = window.navigator.userAgent;
        var Idx = sAgent.indexOf("MSIE");

        // If IE, return version number.
        if (Idx > 0)
            return parseInt(sAgent.substring(Idx + 5, sAgent.indexOf(".", Idx)));

        // If IE 11 then look for Updated user agent string.
        else if (!!navigator.userAgent.match(/Trident\/7\./))
            return 11;

        else
            return 0; //It is not IE
    }
</script>

<script type="text/javascript">
    // https://github.com/uxitten/polyfill/blob/master/string.polyfill.js
    // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/padStart
    if (!String.prototype.padStart) {
        String.prototype.padStart = function padStart(targetLength, padString) {
            targetLength = targetLength >> 0; //truncate if number or convert non-number to 0;
            padString = String((typeof padString !== 'undefined' ? padString : ' '));
            if (this.length > targetLength) {
                return String(this);
            }
            else {
                targetLength = targetLength - this.length;
                if (targetLength > padString.length) {
                    padString += padString.repeat(targetLength / padString.length); //append to original to ensure we are longer than needed
                }
                return padString.slice(0, targetLength) + String(this);
            }
        };
    }
</script>

<script async defer type="module">
    $(function () {

        /*
        =========================================
        |                                       |
        |          Variables Definations        |
        |                                       |
        =========================================
        */

        var Container = {
            scrumboard: $('.scrumboard'),
            card: $('.scrumboard .card')
        }

        // Containers
        var scrumboard = Container.scrumboard;
        var card = Container.card;


        // Make Task Sortable

        function $_taskSortable() {
            $('[data-sortable="true"]').sortable({
                connectWith: '.connect-sorting-content',
                items: ".card",
                cursor: 'move',
                placeholder: "ui-state-highlight",
                refreshPosition: true,
                stop: function (event, ui) {
                    var parent_ui = ui.item.parent().attr('data-section');

                },
                update: function (event, ui) {
                    console.log(ui);
                    console.log(ui.item);
                }
            });
        }

        // Click on Add Task button to open the modal and more..

        function addTask() {
            $('.addTask').on('click', function (event) {
                event.preventDefault();
                getParentElement = $(this).parents('[data-connect="sorting"]').attr('data-section');
                $('.edit-task-title').hide();
                $('.add-task-title').show();
                $('[data-btnfn="addTask"]').show();
                $('[data-btnfn="editTask"]').hide();
                // $('.addTaskAccordion .collapse').collapse('hide');
                $('#addTaskModal').modal('show');
                $_taskAdd(getParentElement);
            });
        }

        // Get the range count value

        $('#progress-range-counter').on('input', function (event) {
            event.preventDefault();
            /* Act on the event */
            getRangeValue = $(this).val();
            $('.range-count-number').html(getRangeValue);
            $('.range-count-number').attr('data-rangeCountNumber', getRangeValue);
        });

        // Reset the input Values

        $('#addTaskModal, #addListModal').on('hidden.bs.modal', function (e) {
            $('input,textarea').val('');
            $('input[type="range"]').val(0);
            $('.range-count-number').attr('data-rangecountnumber', 0);
            $('.range-count-number').html(0);
        })


        function $_taskAdd(getParent) {

            $('[data-btnfn="addTask"]').off('click').on('click', function (event) {

                getAddBtnClass = $(this).attr('class').split(' ')[1];

                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth()); //January is 0!
                var yyyy = today.getFullYear();

                var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

                today = dd + ' ' + monthNames[mm] + ', ' + yyyy;

                var $_getParent = getParent;


                var $_task = document.getElementById('s-task').value;
                var $_taskText = document.getElementById('s-text').value;

                var $_taskProgress = $('.range-count-number').attr('data-rangeCountNumber');

                if ($_taskText == '') {

                    $html = '<div data-draggable="true" class="card task-text-progress" style="">' +
                        '<div class="card-body">' +

                        '<div class="task-header">' +

                        '<div class="">' +
                        '<h4 class="" data-taskTitle="' + $_task + '">' + $_task + '</h4>' +
                        '</div>' +

                        '<div class="">' +
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 s-task-edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>' +
                        '</div>' +

                        '</div>' +


                        '<div class="task-body">' +

                        '<div class="task-bottom">' +
                        '<div class="tb-section-1">' +
                        '<span data-taskDate="' + today + '"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> ' + today + '</span>' +
                        '</div>' +
                        '<div class="tb-section-2">' +
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>' +
                        '</div>' +
                        '</div>' +

                        '</div>' +

                        '</div>' +
                        '</div>';

                } else {
                    $html = '<div data-draggable="true" class="card task-text-progress" style="">' +
                        '<div class="card-body">' +

                        '<div class="task-header">' +

                        '<div class="">' +
                        '<h4 class="" data-taskTitle="' + $_task + '">' + $_task + '</h4>' +
                        '</div>' +

                        '<div class="">' +
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 s-task-edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>' +
                        '</div>' +

                        '</div>' +

                        '<div class="task-body">' +

                        '<div class="task-content">' +
                        '<p class="" data-taskText="' + $_taskText + '">' + $_taskText + '</p>' +
                        '</div>' +

                        '<div class="task-bottom">' +
                        '<div class="tb-section-1">' +
                        '<span data-taskDate="' + today + '"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> ' + today + '</span>' +
                        '</div>' +
                        '<div class="tb-section-2">' +
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>' +
                        '</div>' +
                        '</div>' +

                        '</div>' +

                        '</div>' +
                        '</div>';

                }

                $("[data-section='" + $_getParent + "'] .connect-sorting-content").append($html);


                $('#addTaskModal').modal('hide');

                $_taskEdit();
                $_taskDelete();
            });
        }

        $("#add-list").off('click').on('click', function (event) {
            event.preventDefault();

            $('.add-list').show();
            $('.edit-list').hide();
            $('.edit-list-title').hide();
            $('.add-list-title').show();
            $('#addListModal').modal('show');
        });

        $(".add-list").off('click').on('click', function (event) {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = mm + '.' + dd + '.' + yyyy;

            var $_listTitle = document.getElementById('s-list-name').value;

            var $_listTitleLower = $_listTitle.toLowerCase();
            var $_listTitleRemoveWhiteSpaces = $_listTitleLower.split(' ').join('_');
            var $_listSectionDataAttr = $_listTitleRemoveWhiteSpaces;


            $html = '<div data-section="s-' + $_listSectionDataAttr + '" class="task-list-container  mb-4 " data-connect="sorting">' +
                '<div class="connect-sorting">' +
                '<div class="task-container-header">' +
                '<h6 class="s-heading" data-listTitle="' + $_listTitle + '">' + $_listTitle + '</h6>' +
                '<div class="dropdown">' +
                '<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>' +
                '</a>' +
                '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-4">' +
                '<a class="dropdown-item list-edit" href="javascript:void(0);">Edit</a>' +
                '<a class="dropdown-item list-delete" href="javascript:void(0);">Delete</a>' +
                '<a class="dropdown-item list-clear-all" href="javascript:void(0);">Clear All</a>' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="connect-sorting-content" data-sortable="true">' +


                '</div>' +

                '<div class="add-s-task">' +
                '<a class="addTask"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Task</a>' +
                '</div>' +

                '</div>' +
                '</div>';

            $(".task-list-section").append($html);
            $('#addListModal').modal('hide');
            $('#s-list-name').val('');
            $_taskSortable();
            $_editList()
            $_deleteList();
            $_clearList();
            addTask();
            $_taskEdit();
            $_taskDelete();
        })

        // Delete the whole list including tasks at on click

        function $_deleteList() {
            $('.list-delete').off('click').on('click', function (event) {
                event.preventDefault();
                $(this).parents('[data-connect]').remove();
            })
        }
        function $_editList() {
            $('.list-edit').off('click').on('click', function (event) {

                event.preventDefault();

                var $_outerThis = $(this);

                $('.add-list').hide();
                $('.edit-list').show();

                $('.add-list-title').hide();
                $('.edit-list-title').show();

                var $_listTitle = $_outerThis.parents('[data-connect="sorting"]').find('.s-heading').attr('data-listTitle');
                $('#s-list-name').val($_listTitle);

                $('.edit-list').off('click').on('click', function (event) {
                    var $_innerThis = $(this);
                    var $_getListTitle = document.getElementById('s-list-name').value;

                    var $_editedListTitle = $_outerThis.parents('[data-connect="sorting"]').find('.s-heading').html($_getListTitle);
                    var $_editedListTitleDataAttr = $_outerThis.parents('[data-connect="sorting"]').find('.s-heading').attr('data-listTitle', $_getListTitle);

                    $('#addListModal').modal('hide');
                    $('#s-list-name').val('');
                })
                $('#addListModal').modal('show');
                $('#addListModal').on('hidden.bs.modal', function (e) {
                    $('#s-list-name').val('');
                })
            })
        }

        // Clear all task at on click

        function $_clearList() {
            $('.list-clear-all').off('click').on('click', function (event) {
                event.preventDefault();
                $(this).parents('[data-connect="sorting"]').find('.connect-sorting-content .card').remove();
            })
        }

        // Delete the task on click 

        function $_taskDelete() {
            $('.card .s-task-delete').off('click').on('click', function (event) {
                event.preventDefault();

                get_card_parent = $(this).parents('.card');

                $('#deleteConformation').modal('show');

                $('[data-remove="task"]').on('click', function (event) {
                    event.preventDefault();
                    /* Act on the event */
                    get_card_parent.remove();
                    $('#deleteConformation').modal('hide');
                });

            })
        }

        function $_taskEdit() {
            $('.card .s-task-edit').off('click').on('click', function (event) {

                event.preventDefault();

                var $_outerThis = $(this);

                $('.add-task-title').hide();
                $('.edit-task-title').show();

                $('[data-btnfn="addTask"]').hide();
                $('[data-btnfn="editTask"]').show();

                var $_taskTitle = $_outerThis.parents('.card').find('h4').attr('data-taskTitle');
                var get_value_title = $('.task-text-progress #s-task').val($_taskTitle);

                var $_taskText = $_outerThis.parents('.card').find('p:not(".progress-count")').attr('data-taskText');
                var get_value_text = $('.task-text-progress #s-text').val($_taskText);

                var $_taskProgress = $_outerThis.parents('.card').find('div.progress-bar').attr('data-progressState');
                var get_value_progress = $('#progress-range-counter').val($_taskProgress);
                var get_value_progressHtml = $('.range-count-number').html($_taskProgress);
                var get_value_progressDataAttr = $('.range-count-number').attr('data-rangecountnumber', $_taskProgress);

                $('[data-btnfn="editTask"]').off('click').on('click', function (event) {
                    var $_innerThis = $(this);

                    var $_taskValue = document.getElementById('s-task').value;
                    var $_taskTextValue = document.getElementById('s-text').value;
                    var $_taskProgressValue = $('.range-count-number').attr('data-rangeCountNumber');

                    var $_taskDataAttr = $_outerThis.parents('.card').find('h4').attr('data-taskTitle', $_taskValue);
                    var $_taskTitle = $_outerThis.parents('.card').find('h4').html($_taskValue);
                    var $_taskTextDataAttr = $_outerThis.parents('.card').find('p:not(".progress-count")').attr('data-tasktext', $_taskTextValue);
                    var $_taskText = $_outerThis.parents('.card').find('p:not(".progress-count")').html($_taskTextValue);

                    var $_taskProgressStyle = $_outerThis.parents('.card').find('div.progress-bar').attr('style', "width: " + $_taskProgressValue + "%");
                    var $_taskProgressDataAttr = $_outerThis.parents('.card').find('div.progress-bar').attr('data-progressState', $_taskProgressValue);
                    var $_taskProgressAriaAttr = $_outerThis.parents('.card').find('div.progress-bar').attr('aria-valuenow', $_taskProgressValue);
                    var $_taskProgressProgressCount = $_outerThis.parents('.card').find('.progress-count').html($_taskProgressValue + "%");

                    $('#addTaskModal').modal('hide');
                    var setDate = $('.taskDate').html('');
                    $('.taskDate').hide();
                })
                $('#addTaskModal').modal('show');
            })
        }

        $_editList();
        $_deleteList();
        $_clearList();
        addTask();
        $_taskEdit();
        $_taskDelete();
        $_taskSortable();

    });
</script>

<script defer>
    $(document).ready(function () {
        App.init();
    });
</script>