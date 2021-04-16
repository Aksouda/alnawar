<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/imgareaselect-default.css" />
    <script type="text/javascript" src="assets/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="assets/scripts/jquery.imgareaselect.pack.js"></script>
</head>
<body>
<form enctype="multipart/form-data" method="post" id="image_up">
    Photo
    <input name="fileinput" accept="image/*" id="fileinput" type="file" />
    <button id="upload" >Upload</button>
</form><br>
<img id="image" src="#" >
<img id="my_crop" src="#" >
<div id="data_a"></div>
</body>
<script>
    var name;
    var x;
    var y;
    var width;
    var height;
    document.getElementById("fileinput").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
        data = new FormData();
        data.append('fileinput', $('#fileinput')[0].files[0]);
        $.ajax({
            'url': "<?php echo base_url('Crop_my_image/do_upload/');?>", // Url to which the request is send
            'type': "POST",             // Type of request to be send, called as method
            'data': data,
            contentType: false,       // The content type used when sending data to the server.
            cache: false,
            processData:false,
            'success': function(data)   // A function to be called if request succeeds
            {
                name = data;
            }
        });
        $('#image').imgAreaSelect({
            x: 120, y: 90, x2: 280, y2: 210,
            /*maxHeight :675,
            maxWidth :580,
            minHeight:580,
            minWidth :580,*/
            onSelectEnd: function (img,selection) {
                x = selection.x1;
                y = selection.y1;
                width = selection.width;
                height = selection.height;
            }
        });
    };
    $('#upload').click(function () {
        $.ajax({
            'url': "<?php echo base_url('Crop_my_image/crop_and_move/cat');?>",
            'type': "POST",
            'data': {'x':x,'y':y,'w':width,'h':height,'name':name},
            'success': function(data){
                d = new Date();
                $('#my_crop').attr('src',data+'?'+d.getTime());
            }
        });
        return false;
    });

</script>
</html>
