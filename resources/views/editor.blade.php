<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CKEditor</title>
    {{-- jQuery --}}
    <script src="{{ asset('/js/jquery.js') }}" type="text/javascript" charset="utf-8" ></script>

    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"
            type="text/javascript" charset="utf-8" ></script>
</head>
<body>
<div class="container">
    <h1>Добавляем поддержку CKEditor</h1>
    <div class="row">
        <div class="col-md-12">
                           <textarea name="editor1" id="editor1">
                           </textarea>
        </div>
    </div>
</div>
<script>
    var editor = CKEDITOR.replace( 'editor1',{
        filebrowserBrowseUrl : '/elfinder/ckeditor'
    } );
</script>
</body>
</html>