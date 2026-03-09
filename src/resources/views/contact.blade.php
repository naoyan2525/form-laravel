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

  <h2 class="contact_2_title">お問い合わせ</h2>

  @if ($errors->any())
<div>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

  <form action="/contact/confirm" method="post" class="contact_home">
    @csrf
    <div class="contact_form">
      <label for="name">お名前 <span class="required">必須</span></label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="contact_form_email">
      <label for="email">メールアドレス <span class="required">必須</span></label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="contact_form_tel">
      <label for="tel">電話番号 <span class="required">必須</span></label>
      <input type="tel" id ="tel" name ="tel" required>
</div>
    <div class="contact_form_message">
      <label for="message">お問い合わせ内容 <span class="required">必須</span></label>
      <textarea id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit">送信</button>
  </form>
</body>

</html>