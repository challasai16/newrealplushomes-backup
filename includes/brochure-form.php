<style>
    
    .modal-body.enquiry-modal-body.p-4 .nice-select {
    border: 1px solid #ced4da!important;
    border-radius: 4px;
    width: 40%;
    color: #212529!important;
}
.modal-body.enquiry-modal-body.p-4 input#mobileNo {
    width: 60%;
}
    
</style>


<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog brochure-modal-dialog" role="document">
            <div class="modal-content">
				<!-- Add image inside the body of modal -->
                <div class="modal-body enquiry-modal-body p-4">
                    
                    <div class="modal-footer brochure-modal-footer brochure-popup">
                    <button type="button" class="btn btn-secondary brochure-close-btn" data-dismiss="modal"> <i class="fas fa-times"></i> </button>
                </div>
                <div class="brochure-form-content">
                    <h3 class="text-center brochure-heading">Download Brochure</h3>
                    <p class="text-center">Fill out this form to download the brochure.</p>
                </div>
                    
<form action="thankyou.php" method="POST" id="ModalForm" class="SampleForm" accept-charset="UTF-8">
        <div class="form-group row">
           <!-- <div class="col-12">
				<input type="text" name="first_name" id="first_name" class="form-control mb-3" placeholder="First Name" autocomplete="off">
            </div>-->
            <div class="col-12">
                
                <input type="text" name="name" required id="name" class="form-control mb-3" placeholder="Name" autocomplete="off">
            </div>
            <div class="col-12">
                
                 <select id="countryCode" name="countryCode" required>
  <option value="91" selected>+91 (India)</option>
  <option value="1">+1 (USA)</option>
  <option value="44">+44 (UK)</option>
  <option value="81">+81 (Japan)</option>
  <option value="86">+86 (China)</option>
  <option value="33">+33 (France)</option>
  <option value="49">+49 (Germany)</option>
  <option value="7">+7 (Russia)</option>
  <option value="61">+61 (Australia)</option>
  <option value="55">+55 (Brazil)</option>
  <option value="91">+91 (Canada)</option>
  <option value="82">+82 (South Korea)</option>
  <option value="39">+39 (Italy)</option>
  <option value="34">+34 (Spain)</option>
  <option value="81">+81 (Japan)</option>
  <option value="65">+65 (Singapore)</option>
  <option value="41">+41 (Switzerland)</option>
  <option value="31">+31 (Netherlands)</option>
  <option value="46">+46 (Sweden)</option>
  <option value="52">+52 (Mexico)</option>
  <option value="971">+971 (UAE)</option>
  <option value="91">+91 (India)</option>
  <option value="92">+92 (Pakistan)</option>
  <option value="60">+60 (Malaysia)</option>
  <option value="63">+63 (Philippines)</option>
  <option value="64">+64 (New Zealand)</option>
  <option value="55">+55 (Argentina)</option>
  <option value="234">+234 (Nigeria)</option>
  <option value="27">+27 (South Africa)</option>
  <option value="20">+20 (Egypt)</option>
<option value="27">+27 (South Africa)</option>
<option value="31">+31 (Netherlands)</option>
<option value="32">+32 (Belgium)</option>
<option value="33">+33 (France)</option>
<option value="34">+34 (Spain)</option>
<option value="36">+36 (Hungary)</option>
<option value="39">+39 (Italy)</option>
<option value="41">+41 (Switzerland)</option>
<option value="43">+43 (Austria)</option>
<option value="45">+45 (Denmark)</option>
<option value="46">+46 (Sweden)</option>
<option value="47">+47 (Norway)</option>
<option value="48">+48 (Poland)</option>
<option value="51">+51 (Peru)</option>
<option value="52">+52 (Mexico)</option>
<option value="54">+54 (Argentina)</option>
<option value="55">+55 (Brazil)</option>
<option value="56">+56 (Chile)</option>
<option value="57">+57 (Colombia)</option>
<option value="58">+58 (Venezuela)</option>
<option value="60">+60 (Malaysia)</option>
<option value="61">+61 (Australia)</option>
<option value="62">+62 (Indonesia)</option>
<option value="63">+63 (Philippines)</option>
<option value="64">+64 (New Zealand)</option>
<option value="65">+65 (Singapore)</option>
<option value="66">+66 (Thailand)</option>
<option value="82">+82 (South Korea)</option>

  <!-- Add more options for other countries as needed -->
</select>

                <input type="tel" name="number" required  id="mobileNo" class="form-control number mb-3" placeholder="Mobile No." autocomplete="off">
            </div>
            <div class="col-12">
                <input type="email" required name="email" id="emailId" class="form-control mb-3" placeholder="Email" autocomplete="off">
                <input type="hidden" name="brochure" >
            </div>            
            <div class="col-12 d-flex mb-3">
            <input type="checkbox" id="termsChkbx"/><p style="font-size: 0.85rem;padding: 0 0 0 5px;">I consent to processing my personal data according to Privacy policy<!--<a href="privacy-policy.php" class="privacy-policy" style="color:#ac8748;text-decoration:underline;">Privacy policy</a>--></p>
            </div>
            <div class="col-md-12 text-left">
                <input class="btn btn-link mb-3 brochure-submit-btn" type="submit" value="Submit" id="sub1" disabled="disabled">
            </div>
        </div>
</form>
                </div>
				
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function() {
    $('#termsChkbx').click(function() {
        if ($(this).is(':checked')) {
            $('#sub1').removeAttr('disabled');
        } else {
            $('#sub1').attr('disabled', 'disabled');
        }
    });
});
</script>

<script>
    document.getElementById("mobileNo").addEventListener("input", function () {
        var numberInput = document.getElementById("mobileNo");
        var number = numberInput.value.replace(/\D/g, ''); // Remove non-numeric characters
        var isValid = number.length === 10; // Check if the number has exactly 10 digits
        numberInput.setCustomValidity(isValid ? "" : "Please enter a 10-digit phone number");
    });
</script>
<script>
    document.getElementById("emailId").addEventListener("input", function () {
        var emailInput = document.getElementById("emailId");
        var email = emailInput.value;        
        var atPos = email.indexOf("@");
        var dotPos = email.lastIndexOf(".");
        if(atPos > 0 && dotPos > atPos + 1 && dotPos < email.length - 1) {
         var isValidDomain = true;
        }
        else {
          var isValidDomain = false;
        }
        emailInput.setCustomValidity(isValidDomain ? "" : "Please enter a valid email address with a standard domain extension (.com, .in, .co, etc.)");
    });
</script>
<script>
  var nameInput1 = document.getElementById("name");
  console.log(nameInput1);
    nameInput1.addEventListener("input", function() {
        var value = nameInput1.value;
        var minLength = 2; // Minimum number of characters required

        if (value.length < minLength) {
            nameInput1.setCustomValidity("Please enter at least " + minLength + " characters.");
        } else {
            nameInput1.setCustomValidity("");
        }
    });
</script>