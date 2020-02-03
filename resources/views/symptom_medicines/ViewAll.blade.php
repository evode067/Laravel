<html>
   <head>
      <title>View All Symptom Medicines</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>symptom_id</td>
            <td>medicines_id</td>
      

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->symptom_id }}</td>
            <td>{{ $user->medicines_id }}</td>
        
         </tr>
         @endforeach
      </table>
   </body>
</html>