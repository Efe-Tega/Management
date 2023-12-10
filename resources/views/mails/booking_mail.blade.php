<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking mails</title>
</head>

<body>

    <p style="background: green; color: #fff;">Name: {{ $data->client_name }}</p>

    <p>Email: {{ $data->email }}</p>

    <p>Phone: {{ $data->phone }}</p>

    <p>Subject: {{ $data->event_message }}</p>

    <p>Address: {{ $data->address }}</p>

    <p>Occupation: {{ $data->job_title }}</p>


</body>

</html>
