<html>
   <head>
      <title>View All Addresses</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>cell</td>
            <td>country</td>
            <td>district</td>
            <td>province</td>
            <td>Sector</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->cell }}</td>
            <td>{{ $user->country }}</td>
            <td>{{ $user->district }}</td>
            <td>{{ $user->province }}</td>
            <td>{{ $user->sector }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>