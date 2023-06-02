

<section class="pb-5 pt-5 bg-dark-secondary text-white text-center">
    <h2 class="text-uppercase display-6">IJN Foundation Hi-Tea 2023</h2>
    <h2 class="text-uppercase display-10">02 June 2023</h2>
    <hr class="hr-red" style="width:100%">
</section>
<div class="container">
    <div class="row">
        <div class="col-12">
            <center>
              <figure class="snip0056 yellow">
                <figcaption>
                    <div class="card mt-4">
                        <div class="card-body">
                            
                            <ul class="list-group" >
                              <li class="list-group-item" style="background: #964B00 !important;font-family: 'Tangerine', serif;"><h1 class="font-weight-bold text-white">You Attendance have being recorded</h1></li>
                            </ul>
                            
                        </div>
                    </div>
                </figcaption>
              </figure>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="listsearching">
                        <tr>
                            <th>Full Name</th>
                            <th>Company</th>
                            <th>Table</th>
                        </tr>
                        <tbody id="tabledata">                            
                        <?php foreach ($res2 as $item): ?>
                        <tr>
                            <td><?=$item['fullname']?></td>
                            <td><?=$item['company']?></td>
                            <td><?=$item['table']?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->start('script'); ?>
<script type="text/javascript">
    
    $(document).ready(function() {
    });
</script>
<?php $this->end(); ?> 