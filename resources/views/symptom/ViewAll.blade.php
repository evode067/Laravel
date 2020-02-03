<html>
   <head>
      <title>View All Symptoms</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>description</td>
            <td>link</td>
            

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->description }}</td>
            <td>{{ $user->link }}</td>
           
         </tr>
         @endforeach
      </table>
   </body>
</html>