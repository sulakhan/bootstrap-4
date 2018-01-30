<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demo page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/open-iconic-bootstrap.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<style>
		@media (max-width: 1199px) {
			.media-section .media-img img {
				width: 287px;
			}
		}
		@media (max-width: 990px) {
			.media-section .media-img img {
				width: 213px;
			}
		}
		@media (max-width: 767px) {
			.media-section .media-img img {
				width: 335px;
			}
		}
	</style>
</head>
<body>
	<div class="container-fluid" style="padding-right: 0; padding-left: 0;">
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</header>
		<section>
			<div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide" height="460px">
						<div class="carousel-caption d-md-block text-left mt-12">
							<h2>Example headline.</h2>
							<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<button type="button" class="btn btn-primary btn-lg mb-5">Sign up today</button>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide" height="460px">
						<div class="carousel-caption d-md-block text-center">
							<h2>Another example headline.</h2>
							<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<button type="button" class="btn btn-primary btn-lg mb-5">Learn more</button>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide" height="460px">
						<div class="carousel-caption d-md-block text-right">
							<h2>One more for good measure.</h2>
							<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<button type="button" class="btn btn-primary btn-lg mb-5">Browse gallery</button>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="container">
				<div class="row mt-5">
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<div class="text-center">
							<img src="images/slack.jpg" class="rounded-circle" width="140px" height="140px" alt="Generic placeholder image">
							<h2 class="text-muted">Heading</h2>
							<p>
								Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
							</p>
							<button type="button" class="btn btn-secondary mb-5">View More<span class="oi oi-pulse"></span></button>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<div class="text-center">
							<img src="images/slack.jpg" class="rounded-circle" width="140px" height="140px" alt="Generic placeholder image">
							<h2 class="text-muted">Heading</h2>
							<p>
								Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
							</p>
							<button type="button" class="btn btn-secondary mb-5">View More<span class="oi oi-chevron-right"></span></button>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<div class="text-center">
							<img src="images/slack.jpg" class="rounded-circle" width="140px" height="140px" alt="Generic placeholder image">
							<h2 class="text-muted">Heading</h2>
							<p>
								Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
							</p>
							<button type="button" class="btn btn-secondary mb-5">View More<span class="oi oi-chevron-right"></span></button>
						</div>
					</div>
				</div>
				<hr class="mb-5">
				<div class="row media media-section">
					<div class="col-12 col-sm-12 col-md-8 col-lg-8 align-self-center">
						<div class="media-body">
							<h2 class="mt-0 mb-1 display-4">First featurette heading.<span class="mt-0 mb-1 display-4 text-muted">It'll blow your mind.</span></h2>
							<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4 media-img">
						<img class="mr-3" src="images/slack.jpg" alt="Generic placeholder image" width="335px" height="335px">
					</div>
				</div>
				<hr class="mb-5 mt-5">
				<div class="row media media-section">
					<div class="col-12 col-sm-12 col-md-4 media-img">
						<img class="mr-3" src="images/slack.jpg" alt="Generic placeholder image" width="335px" height="335px">
					</div>
					<div class="col-12 col-sm-12 col-md-8 align-self-center">
						<div class="media-body">
							<h2 class="mt-0 mb-1 display-4">First featurette heading.<span class="mt-0 mb-1 display-4 text-muted">It'll blow your mind.</span></h2>
							<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
						</div>
					</div>
				</div>
				<hr class="mb-5 mt-5">
				<div class="row media media-section">
					<div class="col-12 col-sm-12 col-md-8 align-self-center">
						<div class="media-body">
							<h2 class="mt-0 mb-1 display-4">First featurette heading.<span class="mt-0 mb-1 display-4 text-muted">It'll blow your mind.</span></h2>
							<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4 media-img">
						<img class="mr-3" src="images/slack.jpg" alt="Generic placeholder image" width="335px" height="335px">
					</div>
				</div>
				<hr class="mb-5 mt-5">
				<div class="row mt-5 mb-4 align-items-start">
					<div class="col-8 col-sm-6 col-md-6 col-lg-6">
						<p>
							© 2017-2018 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a>
						</p>
					</div>
					<div class="col-4 col-sm-6 col-md-6 col-lg-6 text-right">
						<a href="#">Back to top</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
</body>
</html>