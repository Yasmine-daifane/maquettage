<!-- Button to Open the Modal -->
<button type="button" class="btn btn-info  btn-sm" data-toggle="modal" data-target="#addBalanceModal">
    <i class="fas fa-plus"></i> Add Balance
</button>

<!-- Modal -->
<div class="modal fade" id="addBalanceModal" tabindex="-1" role="dialog" aria-labelledby="addBalanceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBalanceModalLabel">Add Balance & Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="paymentForm" enctype="multipart/form-data" class="p-4">
                    <div class="form-group">
                        <label for="walletBalance"><i class="fas fa-wallet"></i> Current Balance</label>
                        <input type="text" class="form-control" id="walletBalance" value="$100.00" readonly>
                    </div>
                    <div class="form-group">
                        <label for="balanceAmount"><i class="fas fa-money-bill-wave"></i> Amount to Add</label>
                        <input type="number" class="form-control" id="balanceAmount" placeholder="Enter amount" required>
                    </div>
                    <div class="form-group">
                        <label for="paymentMethod"><i class="fas fa-credit-card"></i> Payment Method</label>
                        <select class="form-control" id="paymentMethod" required>
                            <option value="">Select Payment Method</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="paymentReceipt"><i class="fas fa-cloud-upload-alt"></i> Upload Receipt</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="paymentReceipt" accept=".jpg,.jpeg,.png,.pdf">
                            <label class="custom-file-label" for="paymentReceipt">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="referenceId"><i class="fas fa-id-card"></i> Reference ID</label>
                        <input type="text" class="form-control" id="referenceId" placeholder="Enter Reference ID" required>
                    </div>
                    <div class="form-group">
                        <label for="comment"><i class="fas fa-comment-dots"></i> Comment/Message</label>
                        <textarea class="form-control" id="comment" rows="3" placeholder="Enter your comment"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termsConditions" required>
                            <label class="form-check-label" for="termsConditions">I agree to the<a href="#"> terms and conditions</a>.</label>
                        </div>
                    </div>
                    <div class="text-center modal-buttons">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Add Balance</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts to handle file input display -->
<script>
    $(document).ready(function() {
        $('#paymentReceipt').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    });
</script>


<!-- Scripts to handle file input display -->



<!-- Scripts to handle file input display -->




<style>
#addBalanceModal .custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 38px;
}

#addBalanceModal .custom-file-input {
    position: absolute;
    z-index: 2;
    opacity: 0;
}

#addBalanceModal .custom-file-label {
    position: relative;
    display: block;
    height: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    background-color: #f8f9fa;
    color: #495057;
    cursor: pointer;
    text-align: center;
}

#addBalanceModal .custom-file-label::after {
    content: "Browse";
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    padding: 0.375rem 0.75rem;
    background-color: #007bff;
    color: white;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    cursor: pointer;
}

#addBalanceModal .custom-file-input:focus + .custom-file-label {
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

#addBalanceModal .modal-header {
    background-color: #007bff;
    color: white;
    border-bottom: 1px solid #007bff;
}

#addBalanceModal .modal-title {
    margin: 0 auto;
}

#addBalanceModal .modal-body {
    background-color: #f8f9fa;
    padding: 20px;
}

#addBalanceModal .modal-content {
    border-radius: 10px;
}

#addBalanceModal .form-group label {
    display: flex;
    align-items: center;
    font-weight: bold;
}

#addBalanceModal .form-group label i {
    margin-right: 10px;
}

#addBalanceModal .modal-buttons {
    display: flex;
    justify-content: space-between;
}

#addBalanceModal .btn-secondary, #addBalanceModal .btn-primary {
    width: 48%;
}

#addBalanceModal .custom-file-label::before {
    content: "\f0ee";
    font-family: "Font Awesome 5 Free"; 
    font-weight: 900; 
    padding-right: 10px;
}


</style>