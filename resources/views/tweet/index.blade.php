<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>つぶやきアプリ</title>
</head>

<body>
  <h1>つぶやきアプリ</h1>
  <p>投稿ホーム</p>
  <form action="{{ route('tweet.create') }}" method="post">
    @csrf
    <label for="tweet-content">つぶやき</label>
    <span>140文字まで</span>
    <textarea id="tweet-content" name="tweet" type="text" placeholder="つぶやきを入力"></textarea>
    @error('tweet')
      <p style="color:red;">{{ $message }}</p>
    @enderror
    <button type="submit">投稿</button>
  </form>
</body>

</html>
