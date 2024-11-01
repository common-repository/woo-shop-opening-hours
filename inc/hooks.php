<?php
function KWoo_Shop_Opening_Hours_Style() {
	?>
	<style type="text/css">
	  .KWooOverlay {
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.7);
			transition: opacity 500ms;
			z-index: 100000;
		}
		.KWooOverlay:target {
			visibility: visible;
			opacity: 1;
		}
		.KWooPopup {
			margin: 70px auto;
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			width: 30%;
			transition: all .5s ease-in-out;
		}
		.KWooPopup h2 {
			margin-top: 0;
			color: #333;
			font-family: Tahoma, Arial, sans-serif;
		}
		.KWooPopup .KWooClose {
			transition: all 200ms;
			font-size: 30px;
			font-weight: bold;
			text-decoration: none;
			color: #333;
			display: block;
			text-align: right;
		}
		.KWooPopup .KWooClose time:hover {
			color: #06D85F;
		}
		.KWooPopup .KWooContent {
			max-height: 30%;
			overflow: auto;
		}
	</style>
	<?php
}

function KWoo_Shop_Opening_Hours_Script() {
	?>
	<script type="text/javascript">
		function close_KWoo_popup() {
			document.getElementById('KWooPopup').style.display='none';
		}
	</script>
	<?php
}
?>