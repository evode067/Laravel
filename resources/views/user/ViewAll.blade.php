<html>
   <head>
      <title>View All Users</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>email</td>
            <td>firstname</td>
            <td>lastname</td>
            <td>usertype</td>

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->usertype }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>