$(document).ready(function() {
    //ajax_xác nhận
    $('.dxnhan').click(function() {
        var id = $(this).val();

        _token = $("input[name='_token']").val();

        if ($("input[value='" + id + "']").is(':checked')) {
            var stt = 'on';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "xacnhanhoadontour",
                type: 'POST',
                data: { token: _token, id: id, stt: stt },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('đã xác nhận');
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        } else {
            stt = 'off';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "xacnhanhoadontour",
                type: 'POST',
                data: { token: _token, id: id, stt: stt },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('bỏ xác nhận')
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        }
    });

    //da xac nhan phong------------------------------
    //----------------------------------------------dxnhanphong
    $('.dxnhanphong').click(function() {
        var id = $(this).val();

        _token = $("input[name='_token']").val();

        if ($("input[value='" + id + "']").is(':checked')) {
            var stt = 'on';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "xacnhanhoadonphong",
                type: 'POST',
                data: { token: _token, id: id, stt: stt },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('đã xác nhận');
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        } else {
            stt = 'off';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "xacnhanhoadonphong",
                type: 'POST',
                data: { token: _token, id: id, stt: stt },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('bỏ xác nhận')
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        }
    });

    // Hide submenus
    $('#body-row .collapse').collapse('hide');

    // Collapse/Expand icon
    $('#collapse-icon').addClass('fa-angle-double-left');

    // Collapse click
    $('[data-toggle=sidebar-colapse]').click(function() {
        SidebarCollapse();
    });

    function SidebarCollapse() {
        $('.menu-collapsed').toggleClass('d-none');
        $('.sidebar-submenu').toggleClass('d-none');
        $('.submenu-icon').toggleClass('d-none');
        $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

        // Treating d-flex/d-none on separators with title
        var SeparatorTitle = $('.sidebar-separator-title');
        if (SeparatorTitle.hasClass('d-flex')) {
            SeparatorTitle.removeClass('d-flex');
        } else {
            SeparatorTitle.addClass('d-flex');
        }

        // Collapse/Expand icon
        $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
    }
})