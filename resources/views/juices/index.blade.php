@extends('manageLayouts.app')

@section('content')
{{-- AddModal --}}

<?php __DIR__;?>

<div class="modal fade" id="addJuiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Juice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul id="saveform_errList"></ul>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input required type="text" name="juicename" class="juicename form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number:</strong>
                    <input required type="number" class="number form-control"  name="number"
                        placeholder="Number"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Image:</strong>
                <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Image
                      </a>
                    </span>
                    <input id="image" class="form-control" type="text" name="filepath" value="{{ old('thumbnail') }}">
                  </div>
                  <div id="holder" style="margin-top:15px;max-height:100px;"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nicotin:</strong>
                    <input required type="number" name="nicotin" class="nicotin form-control" placeholder="Nicotin">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Flavor:</strong>
                    <input required type="text" name="flavor" class="flavor form-control" placeholder="Flavor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Brand:</strong>
                    <input required type="text" name="brand" class="brand form-control" placeholder="Brand">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input required type="number" name="price" class="price form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Selling Price:</strong>
                    <input required type="number" name="sellingprice" class="sellingprice form-control" placeholder="Selling-Price">
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_juice">Create</button>
        </div>
      </div>
    </div>
  </div>
{{-- End Add modal --}}

{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Juice</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul id="update_msgList"></ul>
            <input type="hidden" id="juice_id">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input  type="text" name="juicename" id="juicename" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number:</strong>
                    <input  type="number" class=" form-control"  name="number" id="number"
                        placeholder="Number"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Image:</strong>
                <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm1" data-input="image1" data-preview="holder1" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Image
                      </a>
                    </span>
                    <input id="image1" class="form-control" type="text" name="filepath" value="{{ old('thumbnail') }}">
                  </div>
                  <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nicotin:</strong>
                    <input  type="number" name="nicotin" id="nicotin" class=" form-control" placeholder="Nicotin">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Flavor:</strong>
                    <input  type="text" name="flavor" id="flavor" class=" form-control" placeholder="Flavor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Brand:</strong>
                    <input  type="text" name="brand" id="brand" class=" form-control" placeholder="Brand">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input  type="number" name="price" id="price" class=" form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Selling Price:</strong>
                    <input  type="number" name="sellingprice" id="sellingprice" class=" form-control" placeholder="Selling-Price">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary update_juice">Update</button>
        </div>
      </div>
    </div>
  </div>
{{-- End Edit Modal --}}

{{-- Delete Modal --}}
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Juice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                @isATC
                    <div id="warning" class="modal-body">
                        <h4>U sure 'bout that bro ??</h4>
                        <input type="hidden" id="deleteing_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary delete_juice">Yes!</button>
                    </div>
                
                @else  
                    <div id="warning" class="modal-body">
                        <h4>Bạn làm j có quyền ? ơ </h4>
                    </div>
                @endisATC
        </div>
    </div>
</div>

{{-- End - Delete Modal --}}
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Juices
                        <a href="#" data-toggle="modal" data-target="#addJuiceModal" class="btn btn-primary float-right btn-sm">Add Juice</a>
                    </h4>
                </div>
                <div class="card-body container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Juicename</th>
                                <th>Number</th>
                                <th>Image</th>
                                <th>Nicotin</th>
                                <th>Flavor</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>SellingPrice</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $(document).ready(function(){
        fetchjuice();
        function fetchjuice(){
            $.ajax({
                type: "GET",
                url : "/fetch-juices",
                dataType: "json",
                success: function(response){
                    $('tbody').html("");
                    $.each(response.juices,function(key,item){
                        var img
                        $('tbody').append('<tr>\
                                <td>' +item.id + '</td>\
                                <td>' +item.juicename + '</td>\
                                <td>' +item.number + '</td>\
                                <td>\
                                    <img src="' +item.image+ '" width="150px">\
                                </td>\
                                <td>' +item.nicotin + '</td>\
                                <td>' +item.flavor + '</td>\
                                <td>' +item.brand + '</td>\
                                <td>' +item.price + '</td>\
                                <td>' +item.sellingprice + '</td>\
                                <td>\
                                    <button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button>\
                                    <button  type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm" >Delete</button>\
                                </td>\
                            \</tr>');
                    });
                }
                
            })
        }
        
        $(document).on('click','.add_juice',function(e){
            e.preventDefault();
            var data = {
                juicename : $('.juicename').val(),
                number : $('.number').val(),
                image : $('#image').val(),
                nicotin : $('.nicotin').val(),
                flavor : $('.flavor').val(),
                brand : $('.brand').val(),
                price : $('.price').val(),
                sellingprice : $('.sellingprice').val(),
            }
            $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/juices",
                type: "POST",
                data: data,
                dataType : 'json',
                success: function(response) {
                    if(response.status == 400) {
                        $('#saveform_errList').html("");
                        $('#saveform_errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key,err_value){
                            $('#saveform_errList').append('<li>'+err_value+'</li>');
                        });
                        $('.add_juice').text('Save');
                    }
                    else{
                        $('#saveform_errList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#addJuiceModal').modal('hide');
                        $('#addJuiceModal').find('input').val("");
                        $('.add_juice').text('Save');
                        $('#addJuiceModal').modal('hide');
                        fetchjuice();
                    }
                }
                
            });
        });
        $(document).on('click','.editbtn',function(e){
            e.preventDefault();
            var juice_id = $(this).val();
            $('#editModal').modal('show');
            $.ajax({
                type : "GET",
                url : '/edit-juice/' + juice_id,
                success: function(response){
                    if(response.status == 404){
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text('response.message');
                        $('#editModal').modal('hide');
                    }
                    else{
                        $('#juice_id').val(response.juice.id);
                        $('#juicename').val(response.juice.juicename);
                        $('#number').val(response.juice.number);
                        $('#image1').val(response.juice.image);
                        $('#nicotin').val(response.juice.nicotin);
                        $('#flavor').val(response.juice.flavor);
                        $('#brand').val(response.juice.brand);
                        $('#price').val(response.juice.price);
                        $('#sellingprice').val(response.juice.sellingprice);
                    }
                }
            });
        })
        $(document).on('click','.update_juice',function(e){
            e.preventDefault();

            $(this).text('Updated');
            var id = $('#juice_id').val();

            var data = {
                juicename : $('#juicename').val(),
                number : $('#number').val(),
                image : $('#image1').val(),
                nicotin : $('#nicotin').val(),
                flavor : $('#flavor').val(),
                brand : $('#brand').val(),
                price : $('#price').val(),
                sellingprice : $('#sellingprice').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/update-juice/" + id,
                data: data,
                dataType: "json",
                success: function (response) {
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_juice').text('Update');
                    } else {
                        $('#update_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').find('input').val('');
                        $('.update_juice').text('Update');
                        $('#editModal').modal('hide');
                        fetchjuice();
                    }
                }
            });

        })
        $(document).on('click', '.deletebtn', function () {
            var juice_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(juice_id);
        });

        $(document).on('click', '.delete_juice', function (e) {
            e.preventDefault();

            $(this).text('Deleting..');
            var id = $('#deleteing_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/delete-juice/" + id,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_juice').text('Yes');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_juice').text('Yes');
                        $('#DeleteModal').modal('hide');
                        fetchjuice();
                    }
                }
            });
        });
    });
</script>
<script>
    $('#lfm').filemanager('image');
</script>
<script>
    $('#lfm1').filemanager('image');
</script>
<script>
    var route_prefix = "laravel-filemanager";
    $('#lfm').filemanager('image', {prefix: route_prefix});
</script>
@endsection