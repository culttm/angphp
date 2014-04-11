<!DOCTYPE html>
<html lang="ru" >
	<head>
		<title>Title Page</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">


		<script src="/bower_components/angular/angular.min.js"></script>
		<script src="/bower_components/angular/angular-route.js"></script>
		<script src="app/app.js"></script>


		<style>
			h2.col-title{margin: 0;}
			.v{display: inline-block; width: 30px; vertical-align: middle; text-align: center;}
		</style>
	</head>
	<body ng-app="postApp" ng-controller="postsController as postApp ">
		<h1 class="text-center">Блог</h1>
		<div class="container">
			<div ng-repeat="post in posts">
				<div class="row">
					<div class="col-sm-2">
						<a href="#" ng-click="upVote(post);" class="btn btn-xs btn-primary up">+</a>
						<span class="v">{{post.votes}}</span>
						<a href="#" ng-click="downVote(post);" class="btn btn-xs btn-primary  down">-</a>
					</div>					
					<div class="col-sm-1">
 						{{post.created}}
					</div>
					<div class="col-sm-8">
						<a href="post/{{post.id}}">{{post.title}}</a>
					</div>
					<div class="col-sm-1">
						<a href="#" ng-click="deletePost(post);" class="">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</div>
				</div>					
				<hr>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<a href="#" data-toggle="modal" data-target="#addPostModal" class="btn btn-primary">Add Post</a>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

 		<?php include('includes/addPostModal.php');?>


	</body>
</html> 