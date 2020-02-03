<html>
   <head>
      <title>View All Medicines</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>description</td>
            <td>link</td>
            <td>medicineprice</td>

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->description }}</td>
            <td>{{ $user->link }}</td>
            <td>{{ $user->medicineprice }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>