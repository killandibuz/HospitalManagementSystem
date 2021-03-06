@extends('maintenance')
@section('article')
<article class="white main z-depth-1">
		<div class="row indigo darken-2" style="margin-left: -30px; border-top-right-radius: 10px;">
				<div class="col s6">
					<h4 class="thin white-text">Cashier</h4>
				</div>
				<div class="col s6">
					<a href="#billOut" class="modal-trigger btn btn-floating green darken-3">Bill OUt</a>
				</div>
			</div>	
		<div class="container" style="margin-left: -30px;">
		<br>
    	<table id="billTbl" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Patient Number</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact NO.</th>
                    <th>Room No.</th>
                    <th>Actions</th>
                </tr>
            </thead>  	
    </table>
    </div>
    <script type="text/javascript">
    	$(document).ready(function() {
    	    $('#billTbl').DataTable( {
    	        dom: 'Bfrtip',
    	        buttons: [
    	            'copyHtml5',
    	            'excelHtml5',
    	            'csvHtml5',
    	            'pdfHtml5'
    	        ]
    	    } );
    	} );
    </script>

		<!-- Bill OUt Modal -->
	   <div id="billOut" class="modal modal-fixed-footer" style="width: 1300px !important; height: 1000px !important;">
	    <form class="col s12 form" method="post" id="createEmpForm" action="createEmployee" enctype="multipart/form-data">
	      <div class="modal-content" >
	        <!-- <div class="container"> -->
	      <div class="wrapper">
	        <div class="input-field col s12">
	              <h4 class="grey-text text-darken-1 center	">Bill OUt</h4>
	        </div>
	              <div class="aside aside1 z-depth-0">
	              <!-- first -->
	                <div class="row">
	                	<h5 class="thin">Expenses</h5>
	                </div>
	                	<div class="divider"></div>
	                	<br>
	                <div class="row container">
	                	<table id="totalExpenses" class="display" cellspacing="0" width="100%">
	                	        <thead>
	                	            <tr>
	                	                <th>Fee Code</th>
	                	                <th>Fee Name</th>
	                	                <th>Fee Description</th>
	                	                <th>Price</th>
	                	                <th>Status</th>
	                	                <th>Actions</th>
	                	            </tr>
	                	        </thead>
	                	        	
	                	    </table>

	                	    <h5 class="thin right">Summary: <span class="green-text text-darken-2">Php 500,000.00</span> </h5>
	                </div>
	                <script type="text/javascript">
	                	$(document).ready(function() {
	                	    $('#totalExpenses').DataTable( {
	                	        dom: 'Bfrtip',
	                	        buttons: [
	                	            'copyHtml5',
	                	            'excelHtml5',
	                	            'csvHtml5',
	                	            'pdfHtml5'
	                	        ]
	                	    } );
	                	} );
	                </script>

	              </div>
	              <!-- END ASIDE 1 -->


	                <div class="aside aside2 z-depth-0">
	                <!-- second -->
	                <div class="row">
	                	<h5 class="thin">Discount</h5>
	                </div>
	                	<div class="divider"></div>
	                	<br>
	                  <div class="row">
	                    <div class="col s12" style="margin-bottom: 5px;">
	                         <label class="red-text left">(*) Indicates required field</label>
	                    </div>
        	         	 <div class="input-field col s12">
                            <select multiple name="discount[]" id="discountSelect">
                              <option value="" disabled selected>Choose your option</option>
                    
        						<option value="Discount1">Discount1</option>
                       
                            </select>
                            
                            <label>Select Discount</label>
                         </div>
	                  	<div align="right">
	                  		<h2>Total Amount: <span class="thin green-text text-darken-2" id="totalAmount"></span></h2>
	                  		<h2>Discount Value: <span class="thin red-text" id="totalDiscount"></span></h2>
	                  		<h2>Amount To Pay: <span class="thin green-text text-darken-2" id="amountToPay"></span></h2>
	                  	</div>
	                </div>
	              </div>
	              <!-- END ASIDE 2 -->
	            </div>
	        </div>
	      <div class="modal-footer">
	          <button type="reset" value="Reset" class=" modal-action modal-close waves-effect waves-purple transparent btn-flat">CANCEL</button>
	          <button class="waves-effect waves-light indigo darken-3 white-text btn-flat" type="submit" value="Submit">BILL OUT</button>
	      </div>
	      </form>
	</div>
</article>
@endsection