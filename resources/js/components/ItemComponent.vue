<template>
<div class="container my-4">
    <div class="row mb-3 justify-content-end">
        <div class="col-md-2">
            <button class="btn btn-primary">Create</button>
        </div>
        <div class="col-md-6">
          <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        </div>
    </div>
      <div class="row">
          <div class="col-md-4">
              <div class="card">
               <div class="card-header">Create</div>
                <div class="card-body">
                   <form action="">
                         <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="price">
                            </div>
                        </div>
                          <a href="#" class="btn btn-primary"><i class="fas fa-save"></i> Save</a>
                   </form>
               </div>
                </div>
          </div>
           <div class="col-md-8">
               <table class="table table-striped">
                   <thead>
                       <tr>
                           
                           <th>ID</th>
                           <th>Name</th>
                              <th>Price</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td>1</td>
                           <td>Post</td>
                           <td>500</td>
                           <td>
                              <a href="">
                                   <i class="fas fa-edit"></i>
                               </a>/
                               <a href="">
                                   <i class="fas fa-trash-alt"></i>
                               </a>
                           </td>
                       </tr>
                   </tbody>
  
                  </table>


           </div>
      </div>
</div>
  
</template>


<script>
export default {

}
</script>


<style>

</style>