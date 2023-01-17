$(document).ready(function ($) {
    //----- Open modal CREATE -----//
    $('#modal-button').on('click', function () {
        $('#modal-content').trigger("reset");
        $('#modal-content').toggle();
    });
    // CREATE
    $("#add-button").on('click', function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            name: $('#name').val(),
        };
        $.ajax({
            type: "POST",
            url: "/categories",
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var category = '<tr id="categoryItem"><td>' + data.name + '</td></tr>';
                $('#tbody').append(category);
            },
            error: function (data) {
                console.log(data);
            }
        });
        $('#modal-content').hide();
    });
    $(".cancel-button").on('click', function () {
        $("#modal-content").hide();
    });

    //SHOW CATEGORIES
    $("#cbtn").on('click', function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var cbtn = $(this);
        var table = $("#tbody");
        console.log(table);
        if (cbtn.hasClass('show')) {
            cbtn.removeClass('show').addClass('hide').text('Hide');
            $.ajax({
                type: "GET",
                url: "/categories/load",
                cache: true,
                dataType: 'json',
                success: function (data) {
                    $(table).empty();
                    $.each(data, function (key, value) {
                        $(table).append(
                            '<tr id="categoryItem"><td>' + value.name + '</td></tr>'
                        );
                    });
                },
                error: function (data) {
                    console.log(data);
                }
            });
        } else {
            cbtn.removeClass('hide').addClass('show').text('Show all categories');
            $(table).empty();          
        }
    });
});
