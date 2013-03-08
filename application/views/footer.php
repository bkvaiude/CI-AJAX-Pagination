

      <hr>

      <div class="footer">
        <p class="footer-left-align">Bhushan Kishor Vaiude </p><p class="footer-right-align">Email: bkvaiude@gmail.com</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>media/vendors/assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url() ?>media/vendors/assets/js/bootstrap-typeahead.js"></script>
	<script src="<?php echo base_url() ?>media/vendors/assets/js/alertify.min.js"></script>
	<script src="<?php echo base_url() ?>media/app/js/scripts.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>media/vendors/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox({
				'onComplete' : function(){
					$("#select-brand").on("change",function(){
							//alert("Select value updated.");
					});
				},//onComplete callback is not working
				'afterLoad' : function() {
					$("#select-brand").on("change",function(){
							//alert("Select value updated.");
					});
				}
			});
			$("#delete-item").click(function(e){
				e.preventDefault();
				if(confirm("Are you sure?")){
					$.ajax({
						type: "POST",
						url: $(this).attr('href')
					}).done(function(data) {
						location.reload(true);
					});				
				}
			});
			$(".paginations > a").on("click",function(e){
				e.preventDefault();
				$.ajax({
					type: "GET",
					url:$(this).attr('href')
				}).done(function(data) {
					$(".grid-container-body").html(data.body);
					$(".grid-container-footer").html(data.pagination_link);					
				});				
			});
		});
	</script>  

  </body>
</html>
