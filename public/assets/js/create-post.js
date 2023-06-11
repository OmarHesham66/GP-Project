document.getElementById("fileButton").addEventListener("click", function () {
    document.getElementById("fileInput").click();
});

document.getElementById("fileInput").addEventListener("change", function () {
    var fileName = this.value.split("\\").pop();
    if (fileName) {
        // Display the selected file name or perform any other desired action
        console.log("Selected file:", fileName);
    }
});
