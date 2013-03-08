        <div class="span4 thumbnail" style="padding:12px;">
    <?php $attributes = array( 'id' => 'f1');echo form_open('calc/step3', $attributes); ?>
		<fieldset>
		<legend>Step 2: Insert your values</legend>
		<p>You have selected a <?php $shape_name?>, please input
the required variables.</p>
		<?php foreach($fields as $value){ ?>
		<label class="text">
		<?php print ucfirst( $value) ?>
		</label>		<input type="text" name="<?php print $value ?>"  placeholder="Text">
		<?php } ?>
		<button type="submit" class="btn">Step 3 &raquo;</button> Or <a href =""> Cancel</a>
	    </fieldset>
    </form>
       </div>
        <div class="span2" style="background-color: gray; height: 240px;">
          <p>120 X 240</p>
        </div>
      </div>