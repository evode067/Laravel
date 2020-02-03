<html>
   <head>
      <title>View All Histories</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>historydate</td>
         
            <td>user_id</td>

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->historydate }}</td>

            <td>{{ $user->user_id }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>