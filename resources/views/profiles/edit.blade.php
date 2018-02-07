@extends('layouts.main')

@section('content')




    <div class="col-lg-14">
        <div class="panel panel-default">

            @if(count($errors))

                <ul class="alert alert-danger">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            @endif

            <div class="panel-heading"><h1>Profile setup</h1></div>


            <div class="panel-body">



                <form method="POST" action="/profiles" enctype="multipart/form-data" >

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label for="profile_pic">profile photo:</label>

                        <input type="file" name="profile_pic">

                    </div>



                    <div class="form-group">

                        <label for="email">Email:</label>

                        <input type="email" class="form-control" id="email" placeholder="email" name="email" value="{{ old('email') }}">

                    </div>



                    <div class="form-group">

                        <label for="about">About:</label>

                        <textarea name="about"  id="about" class="form-control" rows="18">{{ old('about') }}</textarea>

                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Done</button>
                    </div>



                </form>



            </div>

        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.6/tinymce.min.js"></script>

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type === 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>



@endsection