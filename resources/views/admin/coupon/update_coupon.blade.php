@csrf
<div class="modal-body row">
    <div class="form-group col-md-6">
        <label for="">Gift Card Name</label>
        <input type="text"  name="name" placeholder="Enter name"
        class="form-control name" required max="50">
    </div>

    <!-- email -->
    <div class="form-group col-md-6">
        <label for="">Price</label>
        <select name="price" id="" class="form-control price">
            <option disabled selected>Select Price</option>
            <option value="5">$5</option>
            <option value="25">$25</option>
            <option value="100">$100</option>
        </select>

    </div>

</div>

