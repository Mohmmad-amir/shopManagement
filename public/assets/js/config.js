function ErrorToast(msg) {
    toastr.options.positionClass = 'toast-top-right';
    toastr.options.showEasing = 'swing';
    toastr.options.timeOut = 1000;
    toastr.error(msg);



}

// Function Success Toast Message
function SuccessToast(msg) {
    toastr.options.positionClass = 'toast-top-right';
    toastr.options.showEasing = 'swing';
    toastr.options.timeOut = 1000;
    toastr.success(msg);

}



//Global Variable
var EmailRegx = /\S+@\S+\.\S+/;
var MobileRegx = /^(?:\+?88|0088)?01[15-9]\d{8}$/;