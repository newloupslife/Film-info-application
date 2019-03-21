
<a href="add_film">Add film</a> <br><br><br>

<div class='film_list_caption row'>
    <div class='film_name col' >
        Name
    </div>
    <div class='film_year col'>
        Year
    </div>
    <div class='film_format col'>
        Format
    </div>
    <div class='film_actors col'>
        Actors
    </div>
    <div class='film_more col'>

    </div>
</div>

<?php
foreach ($iterator as $s){ ?>
	<div class='film_list_row row'>
		<div class='film_name col' >
            <?= $s->getName(); ?>
		</div>
		<div class='film_year col'>
            <?= $s->getYear(); ?>
		</div>
		<div class='film_format col'>
            <?= $s->getFormat(); ?>
		</div>
		<div class='film_actors col'>
            <?= $s->getActors(); ?>
		</div>
        <div class='film_more col'>
            <a href='about_film?id=<?= $s->getId(); ?>'>About</a> <br>
            <a href='delete_film?id=<?= $s->getId(); ?>'>Delete</a>
        </div>
	</div>
<? } ?>





