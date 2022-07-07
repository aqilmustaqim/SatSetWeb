document.getElementsByName(button).addEventListener("click", function() {
  swal({
    title: "Alert Set on Timer",
    text: "This alert will disappear after 3 seconds.",
    position: "bottom",
    backdrop: "linear-gradient(yellow, orange)",
    background: "white",
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false,
    showConfirmButton: false,
    showCancelButton: false,
    timer: 3000
  });
});