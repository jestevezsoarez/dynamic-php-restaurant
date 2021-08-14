			<div id="footer" class="cf">
				
				<div class="column three">
					<strong>Phone</strong>
					808.529.3819
				</div> <!-- End column -->

				<div class="column three">
					<strong>Location</strong>
					123 Kapiolani Boulevard<br>
					Honolulu, HI
				</div><!-- End column -->

				<div class="column three last">

					<strong>Hours</strong>
					<em>Tuesday - Thursday</em><br>
					1:00pm - 9:00pm<br><br>

					<em>Friday - Saturday</em><br>
					4:00pm - 11:00pm<br><br>

					<em>Sunday - Monday</em><br>
					Closed<br><br>

					<?php include('store-hours.php'); ?>
					
				</div><!-- End column -->

			</div><!-- End footer -->

			<small>&copy;<?php echo date('Y'); ?> <?php echo $companyName; ?></small>

		</div><!-- End content -->

	</div><!-- End wrapper -->

	<div class="copyright-info">
		<?php include('../assets/includes/copyright.php'); ?>
	</div>
</body>
</html>