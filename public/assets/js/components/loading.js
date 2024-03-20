function loading(isLoading = false, blockUI = "#content") {
    if (isLoading) {
        $(blockUI).block({
            message:
                '<div class="sk-wave mx-auto"><div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div></div>',
            css: {
                backgroundColor: "transparent",
                border: "0",
            },
            overlayCSS: {
                opacity: 0.5,
            },
        });
    } else {
        $(blockUI).unblock();
    }
}
