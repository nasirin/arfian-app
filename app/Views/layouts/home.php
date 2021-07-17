<!DOCTYPE html>

<html>
<!-- Head -->

<?= $this->include('components/meta') ?>
<!-- /Head -->
<!-- Body -->

<body>

	<!-- <div class="loading-container">
		<div class="loader"></div>
	</div> -->
	<?= $this->include('components/navbar') ?>
	<div class="main-container container-fluid">
		<div class="page-container">
			<?= $this->include('components/menu') ?>
			<?= $this->renderSection('content') ?>
		</div>

	</div>

	<?= $this->include('components/js') ?>



</body>
<!--  /Body -->

</html>