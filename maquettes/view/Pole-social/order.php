Button to Open the Order Modal
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderModal">
    Order now
</button>

<!-- Order Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Choose Your Option</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="orderForm" class="p-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="orderOptions" id="option1" value="3_videos">
                            <label class="form-check-label" for="option1">3 videos for 600 DH</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="orderOptions" id="option2" value="5_videos">
                            <label class="form-check-label" for="option2">5 videos for 850 DH</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="orderOptions" id="option3" value="15_videos">
                            <label class="form-check-label" for="option3">15 videos for 2400 DH</label>
                        </div>
                    </div>
                    <div class="text-center modal-buttons">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Styles for the modal -->
<style>
/* Styles for the modal */
#orderModal .custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 38px;
}

#orderModal .custom-file-input {
    position: absolute;
    z-index: 2;
    opacity: 0;
}

#orderModal .custom-file-label {
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

#orderModal .custom-file-label::after {
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

#orderModal .custom-file-input:focus + .custom-file-label {
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

#orderModal .modal-header {
    background-color: #007bff;
    color: white;
    border-bottom: 1px solid #007bff;
}

#orderModal .modal-title {
    margin: 0 auto;
}

#orderModal .modal-body {
    background-color: #f8f9fa;
    padding: 20px;
}

#orderModal .modal-content {
    border-radius: 10px;
}

#orderModal .form-group label {
    display: flex;
    align-items: center;
    font-weight: bold;
}

#orderModal .form-group label i {
    margin-right: 10px;
}

#orderModal .modal-buttons {
    display: flex;
    justify-content: space-between;
}

#orderModal .btn-secondary, #orderModal .btn-primary {
    width: 48%;
}

#orderModal .custom-file-label::before {
    content: "\f0ee";
    font-family: "Font Awesome 5 Free"; 
    font-weight: 900; 
    padding-right: 10px;
}

</style>

<!-- Scripts to handle form submission -->
<script>
    $(document).ready(function() {
        $('#orderForm').on('submit', function(event) {
            event.preventDefault();
            // Handle the form submission logic here
            const selectedOption = $('input[name="orderOptions"]:checked').val();
            if (selectedOption) {
                // Process the selected option
                console.log('Selected option:', selectedOption);
                // Add your AJAX or form submission code here
            } else {
                alert('Please select an option before submitting.');
            }
        });
    });
</script>



