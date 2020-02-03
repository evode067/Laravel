<html>
   <head>
      <title>View Hib sequence</title>
   </head>
   <body>
      <table border = 1>
         <tr>
            <td>next_val</td>


         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->next_val }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>