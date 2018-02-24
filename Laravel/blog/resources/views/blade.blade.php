<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blade模板</title>
</head>
<body>
            <h1>
            name:{{$name}}
            </h1>
            <h1>age: {{$age}}</h1>
            <h1>
            <?php echo !empty($love) ? $love : 'noOne';
             ?>
            </h1>
            <h1>{{$love or 'noOne'}}</h1>
</body>
</html>