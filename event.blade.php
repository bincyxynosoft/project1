<html>
   <head>
      <title>View event recordss</title>
   </head>
   
   <body>
    <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
      
      <table border = "1">
         <tr>
            <td></td>
            <td>eventname</td>
            <td>eventcategory </td>
            <td>eventdescription</td>
            <td> latitude </td>
            <td>longitude</td>
            <td>images </td>
            <td>address </td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->eventname }}</td>
            <td>{{ $user->eventcategory}}</td>
            <td>{{ $user->eventdescription}}</td>
            <td>{{ $user->latitude}}</td>
            <td>{{ $user->longitude}}</td>
            <td>{{ $user->images }}</td>
            <td>{{ $user->address}}</td>
            <td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>




{{-- <html>
   
   <head>
      <title>Student Management | Edit</title>
   </head>
   
   <body>
      <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'stud_name' 
                     value = '<?php echo$users[0]->name; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update student" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html> --}}