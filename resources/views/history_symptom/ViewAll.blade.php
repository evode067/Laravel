<html>
   <head>
      <title>View All History Symptoms</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>history_id</td>
            <td>symptom_id</td>
     

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->history_id }}</td>
            <td>{{ $user->symptom_id }}</td>

         </tr>
         @endforeach
      </table>
   </body>
</html>