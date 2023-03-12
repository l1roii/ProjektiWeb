<?php
require('autoloader.php');

use App\Lib\Post;

$post = new Post;

?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/programs.css">
	<link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
	<title>Cyber Security</title>
</head>
<?php
if (isset($_POST['add'])) {
	$post_picture = $_FILES['post_picture']['name'];
	$post_name = $_POST['post_name'];
	$post_description = $_POST['post_description'];
	$post->addPost($post_picture, $post_name, $post_description);
	move_uploaded_file($_FILES['post_picture']['tmp_name'], "images/$post_picture");
}
?>

<body>
	<div class="container">
		<?php include("includes/header.php") ?>
		<!-- Main -->
		<div id="main">
			<div class="inner">

				<!-- Boxes -->
				<div class="thumbnails">
					<?php foreach ($post->getPost() as $post) : ?>
						<div class="box">
							<a href="" class="image fit"><img src="images/<?php echo $post['post_picture']; ?>" alt="" /></a>
							<div class="inner">
								<h3><?php echo $post['post_name']; ?></h3>
								<p><?php echo $post['post_description']; ?></p>
								<a href="" class="button fit" data-poptrox="youtube,800x400">Modify</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div>
					<button id="myBtn">Post Something!!</button>
					<div id="myModal" class="modal">

						<!-- Modal content -->
						<div class="modal-content">
							<span class="close">&times;</span>
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="form-item">
								<input class="" type="file" id="myfile" name="post_picture">
								<label class="" for="myfile">Choose image</label>
							</div>
							<div class="form-item">
								<label for="name">Post title</label>
								<input type="text" name="post_name" class="form-control">
							</div>
							<div class="form-item">
								<label for="name">Description</label>
								<textarea name="post_description" id="" class="form-control" cols="30" rows="3"></textarea>
							</div>

							<div class="post">
								<button type="submit" name="add" class="button">Post</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<?php include("includes/footer.php") ?>
	</section>

	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on the button, open the modal
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>