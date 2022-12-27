<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tinymce 6</title>
    <script src="{{ asset('js/tinymce6/tinymce.min.js') }}" referrerpolicy="origin"></script>
</head>
<body>
    <h1>Tinymce 6</h1>
    <textarea class="tinymce-editor"></textarea>
</body>
<script type="text/javascript">
    const editor = tinymce.init({
    selector: '.tinymce-editor',
    height: 180,
    menubar: false,
    toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help'
});
</script>
</html>
