

@foreach ($juices as $juice)
    

<div class="col-md-4 card" style="width: 18rem;">
    <img class="card-img-top" src="<?php echo $juice['image']?>" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title"><?php echo $juice['juicename']?></h5>
      <p class="card-text"><?php echo $juice['sellingprice']?></p>
      <a href="#" class="btn btn-primary">Mua</a>
    </div> 
</div>

 
@endforeach