
<div class="search">

	<div class="search-sidebar">
		<ul>
			<li><a href="<?php echo base_url(); ?>index.php/recipe/top_rated">Top Rated</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/recipe/recent_upload">Newly Added</a></li>
			<li><div class="horizontal-seperator"></div></li>
			<ul>
				<li><a href="<?php echo base_url(); ?>index.php/recipe/meal_time/breakfast">Breakfast</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/recipe/meal_time/lunch">Lunch</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/recipe/meal_time/dinner">Dinner</a></li>
			</ul>

			<li><div class="horizontal-seperator"></div></li>

			<li><div class="horizontal-seperator"></div></li>
			<div style="margin-top:20px;width:170px; height:170px; border:2px dashed gray; text-align:center;  display:table-cell; vertical-align: middle;">Ads</div>
		</ul>
	</div>

	<div class="search-area">
		<div style="width:100%; float:left;">
			<form class="form-wrapper cf" action="<?php echo base_url(); ?>index.php/recipe/search_recipe" method="post" accept-charset="utf-8" autocomplete="off">
				<input type="text" placeholder="Search here..." required onkeyup="getStates(thisValue)" autofocus="autofocus" name="query" value="<?php if(isset($cur_search_str)) echo $cur_search_str;?>" spellcheck="false">
				<button type="submit">Search</button>
			</form>
		</div>
		<div class="search-result">
			<?php
				if($records->num_rows == 0)
					echo "<div style='width:100%; text-align:center; font-size:1.3em; margin-top:130px'>Sorry, there is no recipe that matches your search..</div>";
				else
				{
				// loop through the result table
					foreach($records->result() as $row)
					{
						$img_url = base_url()."media/recipe_imgs/thumbs/".$row->recipe_id.".jpg";
						$recipe_description = $row->description;
						$recipe_name = $title_name = $row->recipe_name;
						$num_of_likes = $row->num_of_likes;
						$calories = $row->calories;

						if (strlen($recipe_description) > 100)
						{
							$recipe_description = substr($recipe_description, 0, 100)."...";
						}
						if (strlen($recipe_name) > 30)
						{
							$recipe_name = substr($recipe_name, 0, 29)."...";
						}
						echo "<a href='".base_url()."index.php/recipe/view_recipe/".$row->recipe_id."' title='".$title_name."' />\r\n";
						echo "<div class='collage'>\r\n";
						echo "<img src='".$img_url."' alt='' width='200' height='140'>\r\n";
						echo "<div class='collage-text'>\r\n";
						echo "<div class='collage-title'>".$recipe_name."</div>\r\n";
						echo "<div class='rating'>Likes: ".$num_of_likes." | <span style='color:orange;'>".$calories."Cal</span></div>\r\n";
						echo "<div class='collage-description'>".$recipe_description."</div>\r\n";
						echo "</div>\r\n";
						echo "</div>\r\n";
						echo "</a>\r\n";
					}
					echo $this->pagination->create_links();
				}
			?>
		</div>

		<div style="width:100%; float:left;">
			<form class="form-wrapper cf" action="<?php echo base_url(); ?>index.php/recipe/search_recipe" method="post" accept-charset="utf-8"  spellcheck="false" autocomplete="off">
				<input type="text" placeholder="Search here..." required name="query">
				<button type="submit">Search</button>
			</form>
		</div>

	</div>

</div>

