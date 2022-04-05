
QUIKIpools02072020



<option value="early kick">Early Kick</option>

       <option value="friday match">Friday Match</option>

       <option value="postponed">Postponed</option>





swal("Two Direct!", "Two Direct Field is Required", "info");








 swal({
      title: "Are you sure?",
      text:"you wants to register "+sub_admin_name+" as Sub Admin?",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {

         



      
      } else {
        swal("Cancelled", "No data was sent to database" ,"info");
      }
    })




 $.each(data, function(i, value){


 
});








         $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('admin.addsubadmin')}}",
        method:"POST",
        data:{,_tokens:_tokens},
        success:function(data){

    //console.log(data);

  				}
        
         })










    $('#register_sub_admin_button').hide();
$('.loader').show();











    swal({
    title: "Success!",
    text: "successfully registered",
    icon: "success",
    timer: 3000,
    showConfirmButton: false
  })













                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap"  id="ghana_lotto_datatable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Ball</th>
                                                        <th>Winning Result</th>
                                                        <th>Machine Result</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="list_ghana_lotto">
                                                    
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td><button class="btn btn-success btn-icon" style="border-radius: 30px;"><i class="bx bxs-check-circle" style="font-size: 17px;"></i></button></td>
                                                    <td><button class="btn btn-danger btn-icon" style="border-radius: 30px;"><i class="bx bxs-x-circle" style="font-size: 17px;"></i></button></td>
                                                    <td>
                                                        <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="#" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success mr-1"></i> Edit</a></li>
                                                                    <li><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger mr-1"></i> Delete</a></li>
                                                                </ul>
                                                            </div>

                                                    </td>
                                                    
                                                </tbody>
                                            </table>
                                        </div>














                                         <div class="play-card-body" style="margin-top: 30px;">


                      <ul class="number-list wave" id="get_balls" style="background: lightgray;">
                      
                        
                      </ul>
                      <span class="add-more-text">All Selected</span>
                      <ul class="number-list" id="list_all_selected">
                    
                      </ul>
                    </div>




                    <div>
                          



































                            <div class="col-xl-6">
<div class="mt-4 mt-xl-3">
                                                    
     <h4 class="mt-1 mb-3">How to Play Ghana Lotto 5/90</h4>
    
                                                    
<p class="text-muted mb-2">To play Ghana Lotto (Powered by Lottomania Nigeria), you'll need to do the following:</p>
    
                                                 
<p class="text-muted mb-1">1. Choose a game among the available options: Monday Special, Lucky Tuesday, Midweek, Fortune Thursday, Friday Bonanza, and National Weekly.</p>

<p class="text-muted mb-1">2. Choose bet type: First Number Drop (Direct 1), Direct 2, Direct 3, Direct 4, Direct 5, Perm 2, Perm 3, Perm 4, Perm 5.</p>

<p class="text-muted mb-1">3. Decide if you want to use the «Double Chance» option. This option doubles your chances and allows you to cover either draw or machine numbers. For example, if you select 12, 14, 15, and match these numbers with the machine numbers, you're a winner. Also,  if the chosen numbers (12, 14, 15) match the draw numbers, you're a winner.</p>

<p class="text-muted mb-1">4. Choose the line cost between $0.05 and $20.</p>
 <p class="text-muted mb-2">5. Select the numbers (according to the game type you previously chose) from the pool of 90 numbers.</p>

  <p class="text-muted mb-2">Keep in mind that each game type has a different jackpot size. After selecting all the above, you may win a potential jackpot.</p>
                                                      
                                           

<h4 class="mt-1 mb-3">Ghana Lotto 5/90 - Prize Breakdown</h4>
<div class="table-responsive">
<table class="table table-centered table-striped table-hover table-nowrap">
    <thead align="center" >
        <tr>
            <th style="background: lightblue;">Bet Type</th>
            <th style="background: lightblue;">Numbers Matched</th>
            <th style="background: lightblue;">Multiplier</th>
        </tr>
    </thead>

    <tbody>
        <tr align="center">
            <td style="font-weight: 700;">Direct 1</td>
            <td style="font-weight: 700;">One (1)</td>
            <td style="font-weight: 700;">x 40</td>
        </tr>

           <tr align="center">
            <td style="font-weight: 700;">Direct 2</td>
            <td style="font-weight: 700;">Two (2)</td>
            <td style="font-weight: 700;">x 240</td>
        </tr>

           <tr align="center">
            <td style="font-weight: 700;">Direct 3</td>
            <td style="font-weight: 700;">Three (3)</td>
            <td style="font-weight: 700;">x 2,100</td>
        </tr>

            <tr align="center">
            <td style="font-weight: 700;">Direct 4</td>
            <td style="font-weight: 700;"> Four (4)</td>
            <td style="font-weight: 700;"> x 6,000</td>
        </tr>

           <tr align="center">
            <td style="font-weight: 700;">Direct 5</td>
            <td style="font-weight: 700;"> Five (5)</td>
            <td style="font-weight: 700;"> x 44,000</td>
        </tr>

    </tbody>
</table> 
</div>      



<div class="table-responsive">
<table class="table table-centered table-striped table-hover table-nowrap">
    <thead align="center" >
        <tr>
            <th style="background: lightblue;">Bet Type (Perm) </th>
            <th style="background: lightblue;">Numbers Matched <br>In One Line Only</th>
            <th style="background: lightblue;"> Multiplier</th>
        </tr>
    </thead>

    <tbody>
        <tr align="center">
            <td style="font-weight: 700;">Perm 2</td>
            <td style="font-weight: 700;">Two (2)</td>
            <td style="font-weight: 700;">x 240</td>
        </tr>

           <tr align="center">
            <td style="font-weight: 700;">Perm 3 </td>
            <td style="font-weight: 700;">Three (3)</td>
            <td style="font-weight: 700;">x 2,100</td>
        </tr>

           <tr align="center">
            <td style="font-weight: 700;">Perm 4 </td>
            <td style="font-weight: 700;"> Four (4)</td>
            <td style="font-weight: 700;">x 6,000</td>
        </tr>

            <tr align="center">
            <td style="font-weight: 700;">Perm 5</td>
            <td style="font-weight: 700;"> Five (5) </td>
            <td style="font-weight: 700;"> x 44,000 </td>
        </tr>

           
    
    
          

    </tbody>
</table>           
  </div>     



                                                </div>
                                            </div>























 <div class="card">
                                    <div class="card-body">
        
                                        <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                 <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                             <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Record</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Summary</span>    
                                                </a>
                                            </li>
                                       
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content p-3">
                                            <div class="tab-pane active" id="home" role="tabpanel">
                                         <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus.
                                                </p>
                                  



                                            </div>
                                            <div class="tab-pane" id="profile" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus.
                                                </p>
                                            </div>
                                            
                                        </div>
        
                                    </div>



                            </div>









































<div class="row mb-2">
                                            <div class="col-sm-4">
                                                <div class="search-box mr-2 mb-2 d-inline-block">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search..." id="search_deposit">
                                                        <i class="bx bx-search-alt search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                       
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap" id="deposit_datatable">
                                                <thead>
                                              <tr style="background: lightblue;">
                                                     
                                                        <th>#</th>
                                                        <th>Shop ID</th>
                                                     <th>Amount</th>
                                                         <th>By</th>
                                                         <th>Type</th>
                                                         
                                                         <th>On </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="list_deposit">
                                       
                                                </tbody>
                                            </table>
                                        </div>
                                  













                                            