window.onload = function () {
    let button = document.getElementById("clickMe");

    if (button) {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            document.execCommand(
                "copy",
                false,
                document.getElementById("select-this").select()
            );
        });
    }
};
