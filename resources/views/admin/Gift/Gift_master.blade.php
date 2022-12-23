@csrf
<div class="modal-body row">
    <div class="col-md-12">
    <!-- Name -->
    <div class="form-group col-md-4">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter name"
        class="form-control name" required max="50">
    </div>
    <!-- Image -->
    <div class="form-group col-md-4">
        <img class="img-thumbnail" src="{{ (!empty($user->image))?url('public/uploads/gifts/'.$user->image):
            url('public/uploads/gifts/no_image.jpg') }}"style="width:100px; height:100px;"><br>
        <label for="">Image</label>
        <input type="file" name="image" placeholder="Upload Main Logo" class="form-control image_input">
    </div>
    <!-- price -->
    <div class="form-group col-md-4">
        <label for="">Price</label>
        <input type="number" name="price"  placeholder="Enter price"
        class="form-control email">
    </div>
    </div>
</div>
