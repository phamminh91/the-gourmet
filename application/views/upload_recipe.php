<script type="text/javascript" src="<?php echo base_url();?>style/js/placeholder.js"></script>

<div class="upload-wrapper">

	<div class="upload-description">
		<img src="<?php echo base_url(); ?>style/img/sharing.jpg" alt="sharing is good" width="330px" height ="262px">
		<p style="padding:10px 10px;">Sharing is good Karma. Keep on the good spirit of sharing your own sets of recipes for the world to appriciate.</p>
	</div>

	<div class="box11">

		<div style="width:400px;margin:0 auto; margin-bottom:60px; margin-top:-65px; <!-- -webkit-transform:rotate(-4deg) -->">
			<img src="<?php echo base_url(); ?>style/img/upload_ribbon.png" width="400" height="69" alt="">
		</div>

		<div id="rec-desc">
			<form action="<?php echo base_url(); ?>index.php/user/create_recipe" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">

				<label>Recipe Name:</label>
				<input type="text" id="rec_name" name="name" value="<?php echo set_value('name'); ?>" size="85" placeholder="E.g. Chocolate &amp; raspberry pots"/>
				<span style="color:red;"><?php echo form_error('name'); ?></span>
				<br>

				<label>Short Description (&lt; 300 character):</label>
				<textarea rows="3" name="description" placeholder="E.g. These individual fluffy chocolate mousses are a great way to get kids into the kitchen to build their skills"><?php echo set_value('description'); ?></textarea>
				<span style="color:red;"><?php echo form_error('description'); ?></span>
				<br>

				<span style="margin-bottom:20px;"><label>Calories</label><input type="number" name="num_cal" min="0" value="0" style="width:50px;"> Cals</span><br/><br/>

				<div>
					<span style="float:left;">
						<input type="radio" name="meal_time" value="0" /> Breakfast
						<input type="radio" name="meal_time" value="1" /> Lunch
						<input type="radio" name="meal_time" value="2" /> Dinner
					</span>

					<span style="float:right;">
						<input type="checkbox" name="vegetarian" value="vegeterian" />Vegetarian Food
						<!-- <input type="checkbox" name="halal" value="halal" />Halal -->
					</span>
				</div>

				<br/><br/>

				<span style="display:block;">
					<label>Upload a picture:</label>
					<input type="file" name="userfile" accept="gif|jpg|png|tiff|tif|jpeg">
				</span>

				<br/><br/>

				<label>Ingredients (Please seperate each ingredient by pressing 'Enter')</label>
				<textarea rows="7" name="ingredients" placeholder="E.g. 7 oz plain chocolate"><?php echo set_value('ingredients'); ?></textarea>
				<span style="color:red;"><?php echo form_error('ingredients'); ?></span>
				<br>

				<label>Steps(Please seperate each step by pressing 'Enter')</label><br>
				<textarea rows="10" name="steps" value="<?php echo set_value('steps'); ?>" placeholder="E.g. Remove the chocolate from the heat and leave to cool for 10 mins. Meanwhile, divide the raspberries between 6 small ramekins or glasses."><?php echo set_value('steps'); ?></textarea>
				<span style="color:red;"><?php echo form_error('steps'); ?></span>
				<br>

				<button class="cupid-green">Submit</button>

			</form>

	</div><!-- end of upload form -->

	<div style="clear:both;"></div>

</div><!-- end of upload wrapper -->