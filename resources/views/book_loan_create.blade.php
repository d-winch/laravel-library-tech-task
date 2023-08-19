<html>
   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
      <form action = "/insert-book-loan" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Member ID</td>
               <td><input type='number' name='member_id' /></td>
            </tr>
            <tr>
               <td>Stock ID</td>
               <td><input type='number' name='stock_id' /></td>
            </tr>
            <tr>
               <td>Loan Date</td>
               <td><input type='date' name='loan_date' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Loan Book"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>