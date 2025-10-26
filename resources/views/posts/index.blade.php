<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
</head>

<body>
    <table>
       @foreach($posts as $post)
           <tr>
               <td>{{ $post->id }}</td>
               <td>{{ $post->title }}</td>
               <td>{{ $post->content }}</td>
               <td>{{ $post->created_at }}</td>
               <td>{{ $post->updated_at }}</td>
           </tr>            
       @endforeach 
    </table>    

</body>

</html>