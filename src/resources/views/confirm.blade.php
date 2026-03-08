<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formlaravel</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<h2>{{ $title }}</h2>

<p>名前：{{ $data['name'] }}</p>
<p>メール：{{ $data['email'] }}</p>
<p>電話番号：{{ $data['tel'] }}</p>
<p>内容：{{ $data['message'] }}</p>

<form action="/contact" method="post">
@csrf

<input type="hidden" name="name" value="{{ $data['name'] }}">
<input type="hidden" name="email" value="{{ $data['email'] }}">
<input type="hidden" name="tel" value="{{ $data['tel'] }}">
<input type="hidden" name="message" value="{{ $data['message'] }}">

<button type="submit">送信</button>

</form>

</body>