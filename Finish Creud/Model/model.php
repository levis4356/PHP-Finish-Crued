
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <input type="hidden" name="_id" id="id">
        <label for="name" class="mb-2">Name</label>
        <input type="text" class="form-control" id="name" name="_name">
        <label for="category" class="mt-1">Category</label>
        <select class="form-control" name="_category">
        <option>Accessories</option>
        <option>Drink</option>
        <option>Clothes</option>
        <option>Alchol</option>
        <option>Energy Drink</option>
        <option>Pure Water</option>
        </select>
        <label for="price" class="mt-1">Price</label>
        <input type="text" class="form-control" id="price" name="_price">
         <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark p-1"></i>Cancel</button>
        <button  id="btn_update" type="submit" name="btn_product" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa-solid fa-pen me-2"></i></i>Edit</button>
        <button id="btn_add" type="submit" name="btn-submit" class="btn btn-outline-success"><i class="fa-solid fa-pen p-1"></i>Confirm</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>