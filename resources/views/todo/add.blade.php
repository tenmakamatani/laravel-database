<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if (count($errors) > 0)
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <table>
    <form action="/todo/add" method="post">
      {{ csrf_field() }}
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      <tr><th>content: </th><td><input type="text" name="content" value="{{old('content')}}"></td></tr>
      <tr><th></th><td><button type="submit">作成</button></td></tr>
    </form>
  </table>
</body>
</html>