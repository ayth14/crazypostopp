<h1 class="text-xl text-center font-semibold mb-5">Verification Code</h1>
<div class="alert alert-dismissible fade hide" role="alert" id="dismiss-alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong id="error-title"></strong> <span id="error-msg"></span>
</div>
<form id="otp-form" class="Verification-code" method="GET">
    @csrf
    <div class="form-group mb-4 flex items-center justify-center gap-4" id="digit-group">
        <input type="text" id="first" class="otpdigit form-control text-xl" aria-describedby="digitHelp" placeholder="0" maxlength="1">
        <input type="text" id="second" class="otpdigit form-control text-xl" aria-describedby="digitHelp" placeholder="0" maxlength="1">
        <input type="text" id="third" class="otpdigit form-control text-xl" aria-describedby="digitHelp" placeholder="0" maxlength="1">
        <input type="text" id="fourth" class="otpdigit form-control text-xl" aria-describedby="digitHelp" placeholder="0" maxlength="1">
    </div>
    <span class="text-danger text-xs" id="error-Otpmsg"></span>
    <input class="d-none" id="otp-comb" value=""/>

    <button type="submit" id="otp-submit " class="bg-black login-btn verifyOtp">verify</button>
    <p class="form-text text-muted text-center mt-4">Didn’t receive the code? <span id="otp-resend" class="font-semibold text-color4b5 hover:text-color939 cursor-pointer">Resend</span></p>
</form>
