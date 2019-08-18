$( function() {
    let sortable = $( "#courses-table tbody" );
    sortable.sortable({
        opacity: 0.5,
        tolerance: 'pointer',
        cursor: 'move',
        update: function(event, ui) {

            $(this).children().each(function (index) {
                if($(this).attr('data-position') !== (index+1)){
                    $(this).attr('data-position', (index+1)).addClass('updated');
                }
            });

            save_new_positions();
        }
    });

    sortable.disableSelection();

    function save_new_positions() {
        let positions = [];
        let page_id = $('.page_id_for_js').val();

        $('.updated').each(function () {
            positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
            $(this).removeClass('updated');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: config.base + 'courses/' + page_id + '/update_position',
            data: {positions: positions},
            dataType: 'text',
            success: function(output) {
            },
            error: function(output) {
            }
        });
    }
} );

$(document).on('click', '.delete_course', function () {
    let page_id = $(this).data('page');
    let course_id = $(this).data('course');

    let action = config.base + 'courses/' + page_id + '/' + 'destroy/' + course_id;

    $('#delete_form_modal').attr('action', action);

    $('#delete_alert').modal('show');
});

