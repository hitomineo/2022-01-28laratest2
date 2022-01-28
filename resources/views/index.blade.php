@extends('layouts.default')

@section('form')
<form action="course.php" method="POST">
  <label>氏名<input type="text" name="name"></label>

  <label>メールアドレス<input type="text" mail="mail"></label>
  <br />

  <input type="submit" name="submit" value="送信する" />
</form>

@endsection