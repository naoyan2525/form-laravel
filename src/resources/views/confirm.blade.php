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

  <header class="header">
    <h1 class="contact_title">Contact Form</h1>
  </header>

  

<h2 class="confirm_title">{{ $title }}</h2>

<form action="/contact/send" method="post" class="confirm_home">
    @csrf
<div class="confirm_home">

<table class="confirm_table">
<tr>

<th>名前</th>
<td>{{ $data['name'] }}</td>
</tr>

<tr>
<th>メール</th>
<td>{{ $data['email'] }}</td>
</tr>

<tr>
<th>電話番号</th>
<td>{{ $data['tel'] }}</td>
</tr>

<tr>
<th>内容</th>
<td>{{ $data['message'] }}</td>
</tr>

</table>

<input type="hidden" name="name" value="{{ $data['name'] }}">
<input type="hidden" name="email" value="{{ $data['email'] }}">
<input type="hidden" name="tel" value="{{ $data['tel'] }}">
<input type="hidden" name="message" value="{{ $data['message'] }}">

<button type="submit" class="confirm_button">送信</button>

</form>

</body>