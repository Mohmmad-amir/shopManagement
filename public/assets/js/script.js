// {{-- for bootstrap tooltips --}}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

// table row add script

// $(document).ready(function () {
//     $("#addCF").click(function () {
//         $("#customFields").append(
//             ''
//         );
//     });
//     $("#customFields").on('click', 'remCF', function () {
//         $(this).parent().parent().remove();
//     });
// });




