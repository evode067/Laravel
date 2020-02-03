<html>
   <head>
      <title>View All User Addresses</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>user_id</td>
            <td>address_id</td>
      

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->address_id }}</td>
        
         </tr>
         @endforeach
      </table>
   </body>
</html>