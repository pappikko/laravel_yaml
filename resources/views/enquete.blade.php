<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アンケート</title>
</head>
<body>
    @include('form.radio', [
        'items' => $enqueteItems['family'],
        'name' => 'family',
        'checked' => '1'
    ])
    {{dd($enqueteItems)}}
</body>
</html>