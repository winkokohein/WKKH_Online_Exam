<div class="container-fluid">
	<?php include('partials/header.php'); ?>
	<div class="row">
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<a href="#">hello</a>
						<span class="pull-right">hello</span>
					</div>
					<p class="card-text">
						Hello .... my name is Win Ko Ko Hein.Who are you?cvjhkm;ljkvc;., olkzclv,l;kvovljocvk;'plvp[lkoxl'p;b[cxlbo[b[plbv[; ,';., c[v[pflpvc0ovpkovkolxkoobp[opzlizo0-']]]]
					</p>
					<ul class="list-unstyled">
						<li><a href="#">N</a></li>
						<li><a href="#">Ro</a></li>
						<li><a href="#">rn</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
				<h4 class="card-title">
					categories
				</h4>
					<ul class="list-unstyled">
						<?php include('config/conf.php');
						$result = "SELECT * FROM categories";
						$categories = mysqli_query($con,$result);
						
						while($row = mysqli_fetch_assoc($categories)):
						 ?>
						<li><a href="#"><?php echo $row['name']; ?></a></li>
					<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>