
<form action="film" method="GET">
How do you want to find film: by name or star?:
<select name="filter_style">
    <option value="by_title">Title</option>
    <option value="by_star">Star</option>
</select><br>

<input type="text" name="filter_text" required ><br>
<input type="submit" value="Search">
</form>