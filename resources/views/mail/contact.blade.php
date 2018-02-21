<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
 <div style="display: table; width: 100%; text-align: center; height: 40px; background: #FF6A4A; color: #fff; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold;">
        <div style="display: table-cell; vertical-align: middle;"> New message from {{ $contact->name }}!</div>
    </div>

    <div>
        <div style="width: 50%; padding: 40px 25%; text-align: center;">{{ $contact->notice }}</div>
    </div>

    <div style="display: table; width: 100%; text-align: center; height: 40px; background: #FF6A4A; color: #fff; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold;">
        <div style="display: table-cell; vertical-align: middle;">E-mail: {{ $contact->email }}</div>
        <div style="display: table-cell; vertical-align: middle;">Phone: {{ $contact->phone }}</div>
    </div>
</body>
</html>