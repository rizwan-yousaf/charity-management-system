<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smile Charities | Successful Donation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


    <div class="container mx-auto text-center mt-5 pt-5">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgyobPWtA8sK4FUdJ7v2mVN1k1XYUwsy1q8A&usqp=CAU" class="img-fluid">

        <h1 class="modal-title w-100">Thank You!</h>

        <h2>Dear <i style="color: red;">{{ Auth::user()->name }}</i>, Your Donation Has Been Processed</h2>

        <a class="btn btn-success" href="/">Back To Home</a>
            <p style="font-size: 20px; margin-top: 10px;"> OR </p>
        <a class="btn btn-success" href="/home">Back To Dashboard</a> 
    </div>
</body>

</html>