<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X=UA-compatible" content="ie-edge">
        <title>Form</title>
    </head>
<body>
    <h1>Create New Account!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
    @csrf
        <label>First Name:</label><br>
        <input type="text" name="depan"><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="belakang"><br><br>

        <label>Gender:</label>
     <br>
     <input type="radio" name="gender" value="L"> Male
     <br>
     <input type="radio" name="gender" value="P"> Female
     <br>
     <input type="radio" name="gender" value="O"> Other
    <br>

       <label>Nationality:</label> <br>
       <p><select name="Nationality">
          <option value="">Indonesia</option>
          <option value="">Belanda</option>
          <option value="">Arab</option>
       </select> <br> <br> 
       </p>

       <label>Language Spoken:</label>
       <p><input type="checkbox" name="skill"> Bahasa Indonesia <br>
          <input type="checkbox" name="skill"> English <br>
          <input type="checkbox" name="skill"> Other <br>
       </p>

       <label>Bio:</label> <br>
       <textarea cols="30" rows="10"></textarea> <br><br>

       <input type="Submit" value="Sign Up">

    </form>
</head>
<body>

</body>
</html>