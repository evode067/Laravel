<html>
   <head>
      <title>View All Credentials</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>password</td>
            <td>username</td>
            <td>user_id</td>

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->user_id }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>