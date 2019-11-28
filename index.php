<!DOCTYPE html>

<html>

<head>

    <title>Capture webcam image with php and jquery </title>
    
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
      
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
-->
		<script src="webcam.min.js"></script>
		<script src="jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css" />

    <style type="text/css">

        #results { padding:15px; border:1px solid; background:#ccc; }

    </style>

</head>

<body>


<div class="container">

    <form method="POST" action="storeImage.php">

        <div class="row">

            <div class="col-md-6">

                <div id="my_camera"></div>

                <br/>


                <input type="hidden" name="image" class="image-tag">
                
	<br>

            <center><input type="button" class="btn btn-success" value="Take Snapshot" onClick="take_snapshot()"><center>
            <br>
            </div>

            <div class="col-md-6">

                <div id="results">Your captured image will appear here...</div>

            </div>

            <div class="col-md-12 text-center">

                <br/>

                <button class="btn btn-info">Submit</button>

            </div>

        </div>

    </form>

</div>

  

<!-- Configure a few settings and attach camera -->

<script language="JavaScript">

    Webcam.set({

        width: 520,

        height: 390,

        image_format: 'jpeg',

        jpeg_quality: 90

    });

  

    Webcam.attach( '#my_camera' );

  

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }

</script>

 

</body>

</html>