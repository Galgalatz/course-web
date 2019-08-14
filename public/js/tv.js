
$(document).on('click', '.delete_add', function () {
  let tv_id = $(this).data('tv');
  console.log(tv_id);
  let action = config.base + 'emails-tivi/' + 'destroy/' + tv_id;

  $('#delete_form_modal_tv').attr('action', action);

  $('#delete_alert_tv').modal('show');
});