
$(document).on('change', '#course', function () {
    let course_id = $(this).val();
    let button = $('#submit');

    if(course_id !== ''){
        let new_href = config.course_link + '/' + course_id;
        button.attr('href', new_href);
        button.removeClass('disabled');
    }
});