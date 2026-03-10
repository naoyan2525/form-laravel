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


  <form action="/contact/confirm" method="post" class="contact_home">
    @csrf

    <div class="contact_form">
      <label for="name">お名前 <span class="required">必須</span></label>

      <div class="input_area">
      <input type="text" id="name" name="name" value="{{ old('name') }}">

    @error('name')
      <p class="error">{{ $message }}</p>
    @enderror
    </div>
    </div>

    <div class="contact_form_email">
      <label for="email">メールアドレス <span class="required">必須</span></label>

      <div class="input_area">
      <input type="email" id="email" name="email" value="{{ old('email') }}">

    @error('email')
      <p class="error">{{ $message }}</p>
    @enderror

    </div>
    </div>

    <div class="contact_form_tel">
      <label for="tel">電話番号 <span class="required">必須</span></label>

      <div class="input_area">
      <input type="tel" id ="tel" name ="tel" value="{{ old('tel') }}">
      
    @error('tel')
      <p class="error">{{ $message }}</p>
    @enderror
    </div>
    </div>

    <div class="contact_form_message">
      <label for="message">お問い合わせ内容 <span class="required">必須</span></label>

      <div class="input_area">
      <textarea name="message">{{ old('message') }}</textarea>

    @error('message')
      <p class="error">{{ $message }}</p>
    @enderror 

    </div>
    </div>

    <button type="submit">送信</button>

  </form>

</body>

</html>