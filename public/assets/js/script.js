const logo = document.querySelector(".logo").cloneNode(true);

document.querySelector(".logo-container").appendChild(logo);

tinymce.init({
    selector: "#editor",
    plugins: "image code",
    toolbar: "undo redo | styleselect | bold italic | image | code",
    images_upload_url: "/dashboard/blog/image/upload", // Ganti dengan route upload yang sesuai
    automatic_uploads: true,
    file_picker_types: "image",
    file_picker_callback: function (callback, value, meta) {
        if (meta.filetype === "image") {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");
            input.onchange = function () {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function () {
                    callback(reader.result, {
                        alt: file.name,
                    });
                };
                reader.readAsDataURL(file);
            };
            input.click();
        }
    },
    setup: function (editor) {
        editor.on("change", function () {
            editor.save();
        });
    },
});
