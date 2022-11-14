<?php include'compress-code.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-1 pattern">
				</div>
				<div class="col-md-10 mt-3">
					<div class="card-body bg-light">
						<form class="mt-5" method="post" enctype="multipart/form-data">
							<div class="mb-3">
								<h4>Select Image to Compress</h2>
								<input type="file" name="image" class="form-control" required />
							</div>
							<!-- range define -->
							<div class="range-wrap">
								<h4>Compress Size</h4>							
							    <div class="range-value" id="rangeV"></div>
    							<input id="range" type="range" min="1" max="100" value="<?php echo $range ?>" step="1" name="range" />
							</div>
							<p class="text-center"><font class="text-center text-success mt-2" size="5"><?php echo $smg ?></font></p>
							<div>
								<input class="btn btn-success" type="submit" name="submit" />
							</div>
						</form>
					</div>
					<div class="row mt-5">
						<div class="col-md-12 col-lg-6 col-xl-4 mb-2">
						<?php if($compress!=0){?>
							<div class="card-body bg-light">
								<h4 class="text-center text-white bg-info">Before</h4>
								<p><b>Name : </b><?php echo $b_name ?></p>
								<p><b>Size : </b><?php echo b_formatBytes($b_size); ?></p>
								<p><b>Type : </b><?php echo substr($b_type, -4); ?></p>
								<p><b>Width : </b><?php echo $b_width . " Pixel"; ?></p>
								<p><b>Height : </b><?php echo $b_height." Pixel"; ?></p>
							</div>
						<?php }?>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-4 mb-2">
							<?php if($compress!=0){?>
							<div class="card-body bg-light">
								<h4 class="text-center text-white bg-info">Image</h4>
								<img class="w-100" src="<?php echo $pr_img ?>" alt="<?php echo substr($pr_img, 8) ?>">
							</div>
							<?php }?>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-4 mb-2">
						<?php if($compress!=0){?>
							<div class="card-body bg-light">
								<h4 class="text-center text-white bg-info">After</h4>
								<p><b>Name : </b><?php echo substr($pr_img, 8) ?></p>
								<p><b>Size : </b><?php echo formatBytes($filesize); ?></p>
								<p><b>Type : </b><?php echo substr($type, -4); ?></p>
								<p><b>Width : </b><?php echo $width . " Pixel"; ?></p>
								<p><b>Height : </b><?php echo $height." Pixel"; ?></p>
								<a class="btn btn-primary" href="<?php echo $output_image ?>" download="">Download JPG</a>
							</div>
						<?php }?>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<script type="text/javascript" src="javascript.js"></script>
	</body>
</html>