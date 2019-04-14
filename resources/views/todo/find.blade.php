<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/todo/find" method="post">
    {{ csrf_field() }}
    <input type="text" name="input" value="{{$input}}">
    <button type="submit">find</button>
  </form>
  @if (isset($item))
    <table>
      <tr><th>Data</th></tr>
      <tr>
        <td>{{$item->getDetail()}}</td>
      </tr>
    </table>
  @endif
</body>
</html>