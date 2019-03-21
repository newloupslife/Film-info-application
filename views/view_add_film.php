
<form action="action_add_film" method="post"
      enctype="multipart/form-data">
    <h3>Please add information about film by keyboard or add a file.<br>
    If "Add film by file?" will checked, another information in fields would't take into account,<br></h3>
    <h5>(you can add new film only by one way)<br></h5>

    <table border="1">
        <tr>
            <td>Film name: <input type="text" name="username" ></td>
            <td>Year:    <input type="text" name="year"></td>
        </tr>
        <tr>
            <td>
                Format:
                <select name="format">
                    <option value="VHS">VHS</option>
                    <option value="DVD">DVD</option>
                    <option value="Blu-Ray">Blu-Ray</option>
                </select><br>
            </td>
            <td>Stars:<textarea name="stars"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">About film:<textarea name="about"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"> Add fimls by file?
                <input type="checkbox" name="by_file" value="no"/>
                <input type="file" name="file" />
            </td>
        </tr>
        <tr>
            <td colspan="2"> <input type="submit" value="Add"> </td>
        </tr>

    </table>
</form>


