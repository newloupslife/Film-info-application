


<form action='action_add_film' method='post'
      enctype="multipart/form-data">
    Film name:
    <input type="text" name="username" required="required"><br>
    Year:
    <input type='text' name='year' required="required"><br>
    Format:
    <select name="format">
        <option value="VHS">VHS</option>
        <option value="DVD">DVD</option>
        <option value="Blu-Ray">Blu-Ray</option>
    </select><br>
    Stars
    <textarea name='stars'></textarea><br>
    <input type='submit' value='Add'>




</form>
