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

<script async>
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

<script async>
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

<script async>
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

                        '<div>' +
                        '<h4 data-taskTitle="' + $_task + '">' + $_task + '</h4>' +
                        '</div>' +

                        '<div>' +
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

                        '<div>' +
                        '<h4 data-taskTitle="' + $_task + '">' + $_task + '</h4>' +
                        '</div>' +

                        '<div>' +
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 s-task-edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>' +
                        '</div>' +

                        '</div>' +

                        '<div class="task-body">' +

                        '<div class="task-content">' +
                        '<p data-taskText="' + $_taskText + '">' + $_taskText + '</p>' +
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

<script async>
    /*!
 * perfect-scrollbar v1.4.0
 * (c) 2018 Hyunje Jun
 * @license MIT
 */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.PerfectScrollbar=e()}(this,function(){"use strict";function t(t){return getComputedStyle(t)}function e(t,e){for(var i in e){var r=e[i];"number"==typeof r&&(r+="px"),t.style[i]=r}return t}function i(t){var e=document.createElement("div");return e.className=t,e}function r(t,e){if(!v)throw new Error("No element matching method supported");return v.call(t,e)}function l(t){t.remove?t.remove():t.parentNode&&t.parentNode.removeChild(t)}function n(t,e){return Array.prototype.filter.call(t.children,function(t){return r(t,e)})}function o(t,e){var i=t.element.classList,r=m.state.scrolling(e);i.contains(r)?clearTimeout(Y[e]):i.add(r)}function s(t,e){Y[e]=setTimeout(function(){return t.isAlive&&t.element.classList.remove(m.state.scrolling(e))},t.settings.scrollingThreshold)}function a(t,e){o(t,e),s(t,e)}function c(t){if("function"==typeof window.CustomEvent)return new CustomEvent(t);var e=document.createEvent("CustomEvent");return e.initCustomEvent(t,!1,!1,void 0),e}function h(t,e,i,r,l){var n=i[0],o=i[1],s=i[2],h=i[3],u=i[4],d=i[5];void 0===r&&(r=!0),void 0===l&&(l=!1);var f=t.element;t.reach[h]=null,f[s]<1&&(t.reach[h]="start"),f[s]>t[n]-t[o]-1&&(t.reach[h]="end"),e&&(f.dispatchEvent(c("ps-scroll-"+h)),e<0?f.dispatchEvent(c("ps-scroll-"+u)):e>0&&f.dispatchEvent(c("ps-scroll-"+d)),r&&a(t,h)),t.reach[h]&&(e||l)&&f.dispatchEvent(c("ps-"+h+"-reach-"+t.reach[h]))}function u(t){return parseInt(t,10)||0}function d(t){return r(t,"input,[contenteditable]")||r(t,"select,[contenteditable]")||r(t,"textarea,[contenteditable]")||r(t,"button,[contenteditable]")}function f(e){var i=t(e);return u(i.width)+u(i.paddingLeft)+u(i.paddingRight)+u(i.borderLeftWidth)+u(i.borderRightWidth)}function p(t,e){return t.settings.minScrollbarLength&&(e=Math.max(e,t.settings.minScrollbarLength)),t.settings.maxScrollbarLength&&(e=Math.min(e,t.settings.maxScrollbarLength)),e}function b(t,i){var r={width:i.railXWidth},l=Math.floor(t.scrollTop);i.isRtl?r.left=i.negativeScrollAdjustment+t.scrollLeft+i.containerWidth-i.contentWidth:r.left=t.scrollLeft,i.isScrollbarXUsingBottom?r.bottom=i.scrollbarXBottom-l:r.top=i.scrollbarXTop+l,e(i.scrollbarXRail,r);var n={top:l,height:i.railYHeight};i.isScrollbarYUsingRight?i.isRtl?n.right=i.contentWidth-(i.negativeScrollAdjustment+t.scrollLeft)-i.scrollbarYRight-i.scrollbarYOuterWidth:n.right=i.scrollbarYRight-t.scrollLeft:i.isRtl?n.left=i.negativeScrollAdjustment+t.scrollLeft+2*i.containerWidth-i.contentWidth-i.scrollbarYLeft-i.scrollbarYOuterWidth:n.left=i.scrollbarYLeft+t.scrollLeft,e(i.scrollbarYRail,n),e(i.scrollbarX,{left:i.scrollbarXLeft,width:i.scrollbarXWidth-i.railBorderXWidth}),e(i.scrollbarY,{top:i.scrollbarYTop,height:i.scrollbarYHeight-i.railBorderYWidth})}function g(t,e){function i(e){b[d]=g+Y*(e[a]-v),o(t,f),R(t),e.stopPropagation(),e.preventDefault()}function r(){s(t,f),t[p].classList.remove(m.state.clicking),t.event.unbind(t.ownerDocument,"mousemove",i)}var l=e[0],n=e[1],a=e[2],c=e[3],h=e[4],u=e[5],d=e[6],f=e[7],p=e[8],b=t.element,g=null,v=null,Y=null;t.event.bind(t[h],"mousedown",function(e){g=b[d],v=e[a],Y=(t[n]-t[l])/(t[c]-t[u]),t.event.bind(t.ownerDocument,"mousemove",i),t.event.once(t.ownerDocument,"mouseup",r),t[p].classList.add(m.state.clicking),e.stopPropagation(),e.preventDefault()})}var v="undefined"!=typeof Element&&(Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector),m={main:"ps",element:{thumb:function(t){return"ps__thumb-"+t},rail:function(t){return"ps__rail-"+t},consuming:"ps__child--consume"},state:{focus:"ps--focus",clicking:"ps--clicking",active:function(t){return"ps--active-"+t},scrolling:function(t){return"ps--scrolling-"+t}}},Y={x:null,y:null},X=function(t){this.element=t,this.handlers={}},w={isEmpty:{configurable:!0}};X.prototype.bind=function(t,e){void 0===this.handlers[t]&&(this.handlers[t]=[]),this.handlers[t].push(e),this.element.addEventListener(t,e,!1)},X.prototype.unbind=function(t,e){var i=this;this.handlers[t]=this.handlers[t].filter(function(r){return!(!e||r===e)||(i.element.removeEventListener(t,r,!1),!1)})},X.prototype.unbindAll=function(){var t=this;for(var e in t.handlers)t.unbind(e)},w.isEmpty.get=function(){var t=this;return Object.keys(this.handlers).every(function(e){return 0===t.handlers[e].length})},Object.defineProperties(X.prototype,w);var y=function(){this.eventElements=[]};y.prototype.eventElement=function(t){var e=this.eventElements.filter(function(e){return e.element===t})[0];return e||(e=new X(t),this.eventElements.push(e)),e},y.prototype.bind=function(t,e,i){this.eventElement(t).bind(e,i)},y.prototype.unbind=function(t,e,i){var r=this.eventElement(t);r.unbind(e,i),r.isEmpty&&this.eventElements.splice(this.eventElements.indexOf(r),1)},y.prototype.unbindAll=function(){this.eventElements.forEach(function(t){return t.unbindAll()}),this.eventElements=[]},y.prototype.once=function(t,e,i){var r=this.eventElement(t),l=function(t){r.unbind(e,l),i(t)};r.bind(e,l)};var W=function(t,e,i,r,l){void 0===r&&(r=!0),void 0===l&&(l=!1);var n;if("top"===e)n=["contentHeight","containerHeight","scrollTop","y","up","down"];else{if("left"!==e)throw new Error("A proper axis should be provided");n=["contentWidth","containerWidth","scrollLeft","x","left","right"]}h(t,i,n,r,l)},L={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof navigator&&navigator.msMaxTouchPoints,isChrome:"undefined"!=typeof navigator&&/Chrome/i.test(navigator&&navigator.userAgent)},R=function(t){var e=t.element,i=Math.floor(e.scrollTop);t.containerWidth=e.clientWidth,t.containerHeight=e.clientHeight,t.contentWidth=e.scrollWidth,t.contentHeight=e.scrollHeight,e.contains(t.scrollbarXRail)||(n(e,m.element.rail("x")).forEach(function(t){return l(t)}),e.appendChild(t.scrollbarXRail)),e.contains(t.scrollbarYRail)||(n(e,m.element.rail("y")).forEach(function(t){return l(t)}),e.appendChild(t.scrollbarYRail)),!t.settings.suppressScrollX&&t.containerWidth+t.settings.scrollXMarginOffset<t.contentWidth?(t.scrollbarXActive=!0,t.railXWidth=t.containerWidth-t.railXMarginWidth,t.railXRatio=t.containerWidth/t.railXWidth,t.scrollbarXWidth=p(t,u(t.railXWidth*t.containerWidth/t.contentWidth)),t.scrollbarXLeft=u((t.negativeScrollAdjustment+e.scrollLeft)*(t.railXWidth-t.scrollbarXWidth)/(t.contentWidth-t.containerWidth))):t.scrollbarXActive=!1,!t.settings.suppressScrollY&&t.containerHeight+t.settings.scrollYMarginOffset<t.contentHeight?(t.scrollbarYActive=!0,t.railYHeight=t.containerHeight-t.railYMarginHeight,t.railYRatio=t.containerHeight/t.railYHeight,t.scrollbarYHeight=p(t,u(t.railYHeight*t.containerHeight/t.contentHeight)),t.scrollbarYTop=u(i*(t.railYHeight-t.scrollbarYHeight)/(t.contentHeight-t.containerHeight))):t.scrollbarYActive=!1,t.scrollbarXLeft>=t.railXWidth-t.scrollbarXWidth&&(t.scrollbarXLeft=t.railXWidth-t.scrollbarXWidth),t.scrollbarYTop>=t.railYHeight-t.scrollbarYHeight&&(t.scrollbarYTop=t.railYHeight-t.scrollbarYHeight),b(e,t),t.scrollbarXActive?e.classList.add(m.state.active("x")):(e.classList.remove(m.state.active("x")),t.scrollbarXWidth=0,t.scrollbarXLeft=0,e.scrollLeft=0),t.scrollbarYActive?e.classList.add(m.state.active("y")):(e.classList.remove(m.state.active("y")),t.scrollbarYHeight=0,t.scrollbarYTop=0,e.scrollTop=0)},T={"click-rail":function(t){t.event.bind(t.scrollbarY,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarYRail,"mousedown",function(e){var i=e.pageY-window.pageYOffset-t.scrollbarYRail.getBoundingClientRect().top>t.scrollbarYTop?1:-1;t.element.scrollTop+=i*t.containerHeight,R(t),e.stopPropagation()}),t.event.bind(t.scrollbarX,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarXRail,"mousedown",function(e){var i=e.pageX-window.pageXOffset-t.scrollbarXRail.getBoundingClientRect().left>t.scrollbarXLeft?1:-1;t.element.scrollLeft+=i*t.containerWidth,R(t),e.stopPropagation()})},"drag-thumb":function(t){g(t,["containerWidth","contentWidth","pageX","railXWidth","scrollbarX","scrollbarXWidth","scrollLeft","x","scrollbarXRail"]),g(t,["containerHeight","contentHeight","pageY","railYHeight","scrollbarY","scrollbarYHeight","scrollTop","y","scrollbarYRail"])},keyboard:function(t){function e(e,r){var l=Math.floor(i.scrollTop);if(0===e){if(!t.scrollbarYActive)return!1;if(0===l&&r>0||l>=t.contentHeight-t.containerHeight&&r<0)return!t.settings.wheelPropagation}var n=i.scrollLeft;if(0===r){if(!t.scrollbarXActive)return!1;if(0===n&&e<0||n>=t.contentWidth-t.containerWidth&&e>0)return!t.settings.wheelPropagation}return!0}var i=t.element,l=function(){return r(i,":hover")},n=function(){return r(t.scrollbarX,":focus")||r(t.scrollbarY,":focus")};t.event.bind(t.ownerDocument,"keydown",function(r){if(!(r.isDefaultPrevented&&r.isDefaultPrevented()||r.defaultPrevented)&&(l()||n())){var o=document.activeElement?document.activeElement:t.ownerDocument.activeElement;if(o){if("IFRAME"===o.tagName)o=o.contentDocument.activeElement;else for(;o.shadowRoot;)o=o.shadowRoot.activeElement;if(d(o))return}var s=0,a=0;switch(r.which){case 37:s=r.metaKey?-t.contentWidth:r.altKey?-t.containerWidth:-30;break;case 38:a=r.metaKey?t.contentHeight:r.altKey?t.containerHeight:30;break;case 39:s=r.metaKey?t.contentWidth:r.altKey?t.containerWidth:30;break;case 40:a=r.metaKey?-t.contentHeight:r.altKey?-t.containerHeight:-30;break;case 32:a=r.shiftKey?t.containerHeight:-t.containerHeight;break;case 33:a=t.containerHeight;break;case 34:a=-t.containerHeight;break;case 36:a=t.contentHeight;break;case 35:a=-t.contentHeight;break;default:return}t.settings.suppressScrollX&&0!==s||t.settings.suppressScrollY&&0!==a||(i.scrollTop-=a,i.scrollLeft+=s,R(t),e(s,a)&&r.preventDefault())}})},wheel:function(e){function i(t,i){var r=Math.floor(o.scrollTop),l=0===o.scrollTop,n=r+o.offsetHeight===o.scrollHeight,s=0===o.scrollLeft,a=o.scrollLeft+o.offsetWidth===o.scrollWidth;return!(Math.abs(i)>Math.abs(t)?l||n:s||a)||!e.settings.wheelPropagation}function r(t){var e=t.deltaX,i=-1*t.deltaY;return void 0!==e&&void 0!==i||(e=-1*t.wheelDeltaX/6,i=t.wheelDeltaY/6),t.deltaMode&&1===t.deltaMode&&(e*=10,i*=10),e!==e&&i!==i&&(e=0,i=t.wheelDelta),t.shiftKey?[-i,-e]:[e,i]}function l(e,i,r){if(!L.isWebKit&&o.querySelector("select:focus"))return!0;if(!o.contains(e))return!1;for(var l=e;l&&l!==o;){if(l.classList.contains(m.element.consuming))return!0;var n=t(l);if([n.overflow,n.overflowX,n.overflowY].join("").match(/(scroll|auto)/)){var s=l.scrollHeight-l.clientHeight;if(s>0&&!(0===l.scrollTop&&r>0||l.scrollTop===s&&r<0))return!0;var a=l.scrollWidth-l.clientWidth;if(a>0&&!(0===l.scrollLeft&&i<0||l.scrollLeft===a&&i>0))return!0}l=l.parentNode}return!1}function n(t){var n=r(t),s=n[0],a=n[1];if(!l(t.target,s,a)){var c=!1;e.settings.useBothWheelAxes?e.scrollbarYActive&&!e.scrollbarXActive?(a?o.scrollTop-=a*e.settings.wheelSpeed:o.scrollTop+=s*e.settings.wheelSpeed,c=!0):e.scrollbarXActive&&!e.scrollbarYActive&&(s?o.scrollLeft+=s*e.settings.wheelSpeed:o.scrollLeft-=a*e.settings.wheelSpeed,c=!0):(o.scrollTop-=a*e.settings.wheelSpeed,o.scrollLeft+=s*e.settings.wheelSpeed),R(e),(c=c||i(s,a))&&!t.ctrlKey&&(t.stopPropagation(),t.preventDefault())}}var o=e.element;void 0!==window.onwheel?e.event.bind(o,"wheel",n):void 0!==window.onmousewheel&&e.event.bind(o,"mousewheel",n)},touch:function(e){function i(t,i){var r=Math.floor(h.scrollTop),l=h.scrollLeft,n=Math.abs(t),o=Math.abs(i);if(o>n){if(i<0&&r===e.contentHeight-e.containerHeight||i>0&&0===r)return 0===window.scrollY&&i>0&&L.isChrome}else if(n>o&&(t<0&&l===e.contentWidth-e.containerWidth||t>0&&0===l))return!0;return!0}function r(t,i){h.scrollTop-=i,h.scrollLeft-=t,R(e)}function l(t){return t.targetTouches?t.targetTouches[0]:t}function n(t){return!(t.pointerType&&"pen"===t.pointerType&&0===t.buttons||(!t.targetTouches||1!==t.targetTouches.length)&&(!t.pointerType||"mouse"===t.pointerType||t.pointerType===t.MSPOINTER_TYPE_MOUSE))}function o(t){if(n(t)){var e=l(t);u.pageX=e.pageX,u.pageY=e.pageY,d=(new Date).getTime(),null!==p&&clearInterval(p)}}function s(e,i,r){if(!h.contains(e))return!1;for(var l=e;l&&l!==h;){if(l.classList.contains(m.element.consuming))return!0;var n=t(l);if([n.overflow,n.overflowX,n.overflowY].join("").match(/(scroll|auto)/)){var o=l.scrollHeight-l.clientHeight;if(o>0&&!(0===l.scrollTop&&r>0||l.scrollTop===o&&r<0))return!0;var s=l.scrollLeft-l.clientWidth;if(s>0&&!(0===l.scrollLeft&&i<0||l.scrollLeft===s&&i>0))return!0}l=l.parentNode}return!1}function a(t){if(n(t)){var e=l(t),o={pageX:e.pageX,pageY:e.pageY},a=o.pageX-u.pageX,c=o.pageY-u.pageY;if(s(t.target,a,c))return;r(a,c),u=o;var h=(new Date).getTime(),p=h-d;p>0&&(f.x=a/p,f.y=c/p,d=h),i(a,c)&&t.preventDefault()}}function c(){e.settings.swipeEasing&&(clearInterval(p),p=setInterval(function(){e.isInitialized?clearInterval(p):f.x||f.y?Math.abs(f.x)<.01&&Math.abs(f.y)<.01?clearInterval(p):(r(30*f.x,30*f.y),f.x*=.8,f.y*=.8):clearInterval(p)},10))}if(L.supportsTouch||L.supportsIePointer){var h=e.element,u={},d=0,f={},p=null;L.supportsTouch?(e.event.bind(h,"touchstart",o),e.event.bind(h,"touchmove",a),e.event.bind(h,"touchend",c)):L.supportsIePointer&&(window.PointerEvent?(e.event.bind(h,"pointerdown",o),e.event.bind(h,"pointermove",a),e.event.bind(h,"pointerup",c)):window.MSPointerEvent&&(e.event.bind(h,"MSPointerDown",o),e.event.bind(h,"MSPointerMove",a),e.event.bind(h,"MSPointerUp",c)))}}},H=function(r,l){var n=this;if(void 0===l&&(l={}),"string"==typeof r&&(r=document.querySelector(r)),!r||!r.nodeName)throw new Error("no element is specified to initialize PerfectScrollbar");this.element=r,r.classList.add(m.main),this.settings={handlers:["click-rail","drag-thumb","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollingThreshold:1e3,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!0,wheelSpeed:1};for(var o in l)n.settings[o]=l[o];this.containerWidth=null,this.containerHeight=null,this.contentWidth=null,this.contentHeight=null;var s=function(){return r.classList.add(m.state.focus)},a=function(){return r.classList.remove(m.state.focus)};this.isRtl="rtl"===t(r).direction,this.isNegativeScroll=function(){var t=r.scrollLeft,e=null;return r.scrollLeft=-1,e=r.scrollLeft<0,r.scrollLeft=t,e}(),this.negativeScrollAdjustment=this.isNegativeScroll?r.scrollWidth-r.clientWidth:0,this.event=new y,this.ownerDocument=r.ownerDocument||document,this.scrollbarXRail=i(m.element.rail("x")),r.appendChild(this.scrollbarXRail),this.scrollbarX=i(m.element.thumb("x")),this.scrollbarXRail.appendChild(this.scrollbarX),this.scrollbarX.setAttribute("tabindex",0),this.event.bind(this.scrollbarX,"focus",s),this.event.bind(this.scrollbarX,"blur",a),this.scrollbarXActive=null,this.scrollbarXWidth=null,this.scrollbarXLeft=null;var c=t(this.scrollbarXRail);this.scrollbarXBottom=parseInt(c.bottom,10),isNaN(this.scrollbarXBottom)?(this.isScrollbarXUsingBottom=!1,this.scrollbarXTop=u(c.top)):this.isScrollbarXUsingBottom=!0,this.railBorderXWidth=u(c.borderLeftWidth)+u(c.borderRightWidth),e(this.scrollbarXRail,{display:"block"}),this.railXMarginWidth=u(c.marginLeft)+u(c.marginRight),e(this.scrollbarXRail,{display:""}),this.railXWidth=null,this.railXRatio=null,this.scrollbarYRail=i(m.element.rail("y")),r.appendChild(this.scrollbarYRail),this.scrollbarY=i(m.element.thumb("y")),this.scrollbarYRail.appendChild(this.scrollbarY),this.scrollbarY.setAttribute("tabindex",0),this.event.bind(this.scrollbarY,"focus",s),this.event.bind(this.scrollbarY,"blur",a),this.scrollbarYActive=null,this.scrollbarYHeight=null,this.scrollbarYTop=null;var h=t(this.scrollbarYRail);this.scrollbarYRight=parseInt(h.right,10),isNaN(this.scrollbarYRight)?(this.isScrollbarYUsingRight=!1,this.scrollbarYLeft=u(h.left)):this.isScrollbarYUsingRight=!0,this.scrollbarYOuterWidth=this.isRtl?f(this.scrollbarY):null,this.railBorderYWidth=u(h.borderTopWidth)+u(h.borderBottomWidth),e(this.scrollbarYRail,{display:"block"}),this.railYMarginHeight=u(h.marginTop)+u(h.marginBottom),e(this.scrollbarYRail,{display:""}),this.railYHeight=null,this.railYRatio=null,this.reach={x:r.scrollLeft<=0?"start":r.scrollLeft>=this.contentWidth-this.containerWidth?"end":null,y:r.scrollTop<=0?"start":r.scrollTop>=this.contentHeight-this.containerHeight?"end":null},this.isAlive=!0,this.settings.handlers.forEach(function(t){return T[t](n)}),this.lastScrollTop=Math.floor(r.scrollTop),this.lastScrollLeft=r.scrollLeft,this.event.bind(this.element,"scroll",function(t){return n.onScroll(t)}),R(this)};return H.prototype.update=function(){this.isAlive&&(this.negativeScrollAdjustment=this.isNegativeScroll?this.element.scrollWidth-this.element.clientWidth:0,e(this.scrollbarXRail,{display:"block"}),e(this.scrollbarYRail,{display:"block"}),this.railXMarginWidth=u(t(this.scrollbarXRail).marginLeft)+u(t(this.scrollbarXRail).marginRight),this.railYMarginHeight=u(t(this.scrollbarYRail).marginTop)+u(t(this.scrollbarYRail).marginBottom),e(this.scrollbarXRail,{display:"none"}),e(this.scrollbarYRail,{display:"none"}),R(this),W(this,"top",0,!1,!0),W(this,"left",0,!1,!0),e(this.scrollbarXRail,{display:""}),e(this.scrollbarYRail,{display:""}))},H.prototype.onScroll=function(t){this.isAlive&&(R(this),W(this,"top",this.element.scrollTop-this.lastScrollTop),W(this,"left",this.element.scrollLeft-this.lastScrollLeft),this.lastScrollTop=Math.floor(this.element.scrollTop),this.lastScrollLeft=this.element.scrollLeft)},H.prototype.destroy=function(){this.isAlive&&(this.event.unbindAll(),l(this.scrollbarX),l(this.scrollbarY),l(this.scrollbarXRail),l(this.scrollbarYRail),this.removePsClasses(),this.element=null,this.scrollbarX=null,this.scrollbarY=null,this.scrollbarXRail=null,this.scrollbarYRail=null,this.isAlive=!1)},H.prototype.removePsClasses=function(){this.element.className=this.element.className.split(" ").filter(function(t){return!t.match(/^ps([-_].+|)$/)}).join(" ")},H});
</script>

<script async>$(document).ready(async function(){App.init()}());
</script>