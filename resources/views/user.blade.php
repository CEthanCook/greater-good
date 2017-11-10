<!DOCTYPE html>
<html>
<head>
    <title>Insert Student</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
  <script type="text/javascript">
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
</script>
  <center>
    <form action="/insert" method="post">
      <table>
        <tr>
          <td>First Name : </td>
          <td><input type="text" name="firstName"></td>
        </tr>
        <tr>
          <td>Last Name : </td>
          <td><input type="text" name="lastName"></td>
        </tr>
        <tr>
          <td>Username : </td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password : </td>
          <td><input type="text" name="password"></td>
        </tr>
        <tr>
          <td>Grad Year : </td>
          <td><input type="text" name="gradYear"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Add"></td>
        </tr>
      </table>
    </form>
  </center>
</body>
</html>
