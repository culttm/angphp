<div id="addPostModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add Post</h4>
      </div>
      <div class="modal-body">
		<form class="form-horizontal" role="form">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		    <div class="col-sm-10">
		      <input  ng-model="post.postTitle" type="text" class="form-control" id="postTitle" name="postTitle" placeholder="Title">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
		    <div class="col-sm-10">
		      <textarea ng-model="post.postDescription" class="form-control" id="postDescription" placeholder="Description"></textarea>
		    </div>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" data-dismiss="modal"  ng-click="addPost(post)" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New Task</button>
      </div>
    </div>
  </div>
</div>