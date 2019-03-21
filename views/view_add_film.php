
<form action="action_add_film" method="post"
      enctype="multipart/form-data">
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


