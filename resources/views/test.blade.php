<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 7 Multiple File Upload with Progress bar using Ajax jQuery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{asset('AdminAssets/plugins/jQueryForm/jQueryForm.js')}}"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Upload Multiple Images in Laravel 7</h3>
        </div>
        <div class="card-body">
            <br />
            <form id="test" method="post" action="{{route('Upload')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3" align="right">
                        <h4>Select Multiple Files</h4>
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="file[]" id="file" accept="image/*" multiple />
                    </div>
                    <div class="col-md-3">
                        <input type="submit" name="upload" value="Upload" class="btn btn-success" />
                    </div>
                </div>
            </form>
            <br />
            <div class="progress">
                <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    0%
                </div>
            </div>
            <br />
            <div id="success" class="row">

            </div>
            <div id="ImageBox" class="row">

            </div>
            <br />
        </div>
    </div>
</div>

<script>
    function AddImages(Url){
        var img = $('<img id="andis" width="50" height="50">');
        img.attr('src', Url);
        img.appendTo('#ImageBox');
    }
    $(document).ready(function(){
        $('#test').ajaxForm({
            beforeSend:function(){
                $('#success').empty();
                $('#ImageBox').empty();
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
            },
            uploadProgress:function(event, position, total, percentComplete){
                $('.progress-bar').text(percentComplete + '0%');
                $('.progress-bar').css('width', percentComplete + '0%');
            },
            success:function(data)
            {
                if(data.success)
                {

                    var Images = JSON.parse(data['Images']);
                    Images.forEach(AddImages);
                    $('#success').html('<div class="text-success text-center"><b>'+data.success+'</b></div><br /><br />');
                    $('#success').append(data.image);
                    $("#attachments").val(Images);
                    $('.progress-bar').text('Uploaded');
                    $('.progress-bar').css('width', '100%');
                }
            }
        });
    });
</script>



<form method="post" action="{{route('Test')}}">
    @csrf
    <input type="hidden"  id="attachments" name="attachments">
    <input type="submit">
</form>

</body>
</html>
