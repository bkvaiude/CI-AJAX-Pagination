        <div class="span4 thumbnail" style="padding:12px;">
    <?php echo form_open('calc/step2'); ?>
		<fieldset>
		<legend>Step 1: Select your shape</legend>
		<?php foreach($types as $index=>$value){ ?>
		<label class="radio">
		<input type="radio" name="shape" id="shap<?php print $index ?>" value="<?php print $index ?>" checked>
		<?php print ucfirst( $value) ?>
		</label>
		<?php } ?>
		<button type="submit" class="btn">Step 2 &raquo;</button> Or <a href =""> Cancel</a>
	    </fieldset>
    </form>
       </div>
        <div class="span2" style="background-color: gray; height: 240px;">
          <p>120 X 240</p>
        </div>
      </div>