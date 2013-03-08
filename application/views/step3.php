        <div class="span4 thumbnail" style="padding:12px;">
    <?php echo form_open('calc/step1'); ?>
		<fieldset>
		<legend>Step 3: Your results</legend>
		<?php if($result=='0' || empty($result)){?>
		<p>Something is broken!!!!</p>
		<?php }else {?>
		<p>You have calculated the area of a <?php print $shape_name ?>
 with given values(<?php print $given_values ?>). Below is your result:.</p>
<p> The Area is <?php print $result ?> </p>
<?php } ?>
		<button type="submit" class="btn">Start Over &raquo;</button>
    </form>
       </div>
        <div class="span2" style="background-color: gray; height: 240px;">
          <p>120 X 240</p>
        </div>
      </div>