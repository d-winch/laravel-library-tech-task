<html>
   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
      <form action = "/insert-book" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>ISBN</td>
               <td><input type='text' name='isbn' /></td>
            </tr>
            <tr>
               <td>Title</td>
               <td><input type='text' name='title' /></td>
            </tr>
            <tr>
               <td>Category ID</td>
               <td><input type='number' name='category_id' /></td>
            </tr>
            <tr>
               <td>Published Date (YYYY-MM-DD)</td>
               <td><input type='date' name='published_date' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Book"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>