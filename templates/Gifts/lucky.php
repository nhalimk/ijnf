<style>
.ribbon {
  position: absolute;
  right: -5px;
  top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 93px;
  height: 93px;
  text-align: right;
}
.ribbon span {
  font-size: 0.8rem;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  font-weight: bold;
  line-height: 32px;
  transform: rotate(45deg);
  width: 125px;
  display: block;
  background: #79a70a;
  background: red;
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 17px; // change this, if no border
  right: -29px; // change this, if no border
}

.ribbon span::before {
   content: '';
   position: absolute; 
   left: 0px; top: 100%;
   z-index: -1;
   border-left: 3px solid red;
   border-right: 3px solid transparent;
   border-bottom: 3px solid transparent;
   border-top: 3px solid red;
}
.ribbon span::after {
   content: '';
   position: absolute; 
   right: 0%; top: 100%;
   z-index: -1;
   border-right: 3px solid red;
   border-left: 3px solid transparent;
   border-bottom: 3px solid transparent;
   border-top: 3px solid red;
} 
</style>

<section class="pb-5 pt-5  text-white text-center">
    <h2 class="text-uppercase display-6">IJN Terpaling Raya</h2>
    <hr class="hr-red" style="width:80%">
    <div class="container">
		<div class="row">
			<div class="col-12 text-center">
				 <input class="pr-5 pl-5 pt-2 pb-2 text-white btn text-uppercase font-weight-bold btn-gradient mt-4 mb-4" type="button" name="submit" id="cari" value="Cari">
			</div>
		</div>
	</div>
    <div id="result" style="display:none">
    <center>
	  <figure class="snip0056 yellow">
		<figcaption>
			<div class="card">
				<div class="card-header bg-dark text-white text-center">
				</div>
				<div class="card-body">
					
					<ul class="list-group">
					  <li class="list-group-item" style="background: #bf6516 !important;font-family: 'Tangerine', serif;"><h1 class="font-weight-bold text-white text-uppercase">Tahniah!!!!!</h1></li>
					  <li class="list-group-item" style="background: #bf6516 !important;font-family: 'Tangerine', serif;"><h1 class="font-weight-bold text-white text-uppercase" id="staffno"></h1></li>
					  <li class="list-group-item" style="background: #bf6516 !important;font-family: 'Tangerine', serif;"><h1 class="font-weight-bold text-white text-uppercase" id="fullname"></h1></li>
					  
					  
					</ul>
					
				</div>
			</div>
		</figcaption>
					<img id="avatarstaff"
						 />
		 <?= $this->Form->create($present,['class'=>'text-left container mt-5','id'=>'kt_form']) ?>
    
			<input class="form-outline-gray" name="staffno" id="staff" type="hidden" required>
			<input class="form-outline-gray" name="fullname" id="staffname" type="hidden" required>
			<div class="row">
				<div class="col-12 text-center">
					 <input class="pr-5 pl-5 pt-2 pb-2 text-white btn text-uppercase font-weight-bold btn-gradient mt-4 mb-4" type="submit" name="submit" id="submit" value="Seterusnya">
				</div>
			</div>
        </div>
    <?= $this->Form->end() ?>
	  </figure>
	</center>
	
    
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="table-responsive">
				<div class="card">
					<div class="card-header bg-primary text-center text-white font-weight-bold">
						Senarai Insan Terpilih
                        <input type="hidden" id = "total" value = <?=count($list)?> />
					</div>
					<div class="card-body">
						<table class="table table-light" id="tabledt">
							<thead>
								<tr>
									<th><?= $this->Paginator->sort('id') ?></th>
									<th><?= $this->Paginator->sort('staffno') ?></th>
									<th><?= $this->Paginator->sort('fullname') ?></th>
									<th><?= $this->Paginator->sort('department') ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($gifts as $present): ?>
								<tr>
									<td><?= $this->Number->format($present->id) ?></td>
									<td><?= h($present->staffno) ?></td>
									<td><?= h($present->fullname) ?></td>
									<td><?= h($present->department) ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php $this->start('script'); ?>
<script type="text/javascript">
       
    
	$("#cari").click(function () {
        $total = $('#total').val();
		$x = Math.floor((Math.random() * $total) + 1);
        alert($total);
		$.ajax({
            type: "GET",
            url: "./search?sid="+$x,
            dataType: "json",
            success: function (dt) {
                data = dt[0];
                if(data != null){
					$('#result').show(500);
                    $('#staffno').html(data['staffno']);
                    $('#staff').val(data['staff']);
                    $('#staffname').val(data['fullname']);
                    $('#fullname').html(data['fullname']);
                    $('#avatarstaff').attr('src',data['photo']);
					$('#kt_form').submit();
					$( "form" ).first().submit();
                }else{
                     // $('#alert_error').modal('show');
                    //alert('Staff not found. Please proceed to AJK registration counter to resolved your attendance');
                }
            },
			error: function(){
                     // $('#alert_error').modal('show');
            }
        });
	});
	
    
    $(document).ready(function() {
    });
</script>
<?php $this->end(); ?> 