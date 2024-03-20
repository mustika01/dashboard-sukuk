function confirmAlert(params) {
    return Swal.fire({
        title: params?.title ?? "Are you sure ?",
        showCancelButton: true,
        cancelButtonColor: "#ea5455",
        cancelButtonText: "Cancel",
        confirmButtonColor: "#28c76f",
        confirmButtonText: params?.confirmMsg ?? "Save",
        reverseButtons: true,
    });
}

function popupAlert(type, message, showConfirmButton) {
    return Swal.fire({
        icon: type,
        title: message,
        showConfirmButton: showConfirmButton ? true : false,
        timer: (type = "success" ? 1500 : null),
    });
}
