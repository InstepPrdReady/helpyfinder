<script src="{{ asset('js/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    var editor_config = {
        path_absolute : "/",
        selector: "textarea",
        plugins: [
            "advlist autolink lists link charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code",
        relative_urls: false,
        setup: function (editor) {
            editor.on('init', function () {
                // Optionally initialize the editor with default content
            });
        }
    };

    tinymce.init(editor_config);
</script>