<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         
        <form method="post" enctype="multipart/form-data">
           <input type="hidden" name="_id" id="id">
        <label for="" class="mb-2">Name</label>
        <input type="text" name="_name" class="form-control" placeholder="Product's name">
        <input type="file" name="_file" class="mt-3 form-control" placeholder = "image">
        <label for="price" class="mb-2">Price</label>
        <input type="text" class="form-control" name="_price" placeholder="Price">
        <label for="Quanity" class="mb-2">Quanity</label>
        <input type="text" class="form-control" name="_quanity" placeholder="Quantity">
       <label for="category" class="mb-2">Category</label>
        <select class="form-select" name="_category">
        <option>Mobile Phone</option>
        <option>Laptop</option>
        <option>Monitor</option>
        <option>Mouse</option>
        <option>HeadPhone</option>
        <option>VGA</option>
        <option>KeyBoard</option>
        <option>Microphone</option>
        <option>Console</option>
        </select>
        <label for="Brand" class="mb-2">Brand</label>
      <select class="form-select " name="_brand">
        <option>Apple</option>
        <option>MSI</option>
        <option>Samsung</option>
        <option>ASUS</option>
        <option>ALIEN-WARE</option>
        <option>OKNIKUMA</option>
        <option>RODE</option>
        <option>PlayStation</option>
      </select>
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa-solid fa-x me-2"></i>Close</button>
         <button id="btn_edit" type="submit" name="btn-edit" class="btn btn-outline-primary"><i class="fa-solid fa-pen me-2"></i>Edit</i></button>
        <button id="btn_add" type="submit" name="btn-submit" class="btn btn-outline-success"><i class="fa-solid fa-plus me-2"></i>Add Product</button>
       
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>