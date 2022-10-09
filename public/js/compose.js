$(function () {
    $('#select2-dropdown-type').select2({
      theme: "bootstrap-5",
      width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
      placeholder: $( this ).data( 'placeholder' ),
    });
    $('#select2-dropdown-users').select2({
      theme: "bootstrap-5",
      placeholder: $( this ).data( 'placeholder' ),
    });
    //Add text editor
    $('#compose-textarea').summernote({
      placeholder: 'Cuerpo del mensaje...',
      tabsize: 2,
      lang: "es-ES"/*,
      
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]*/
    });
  })