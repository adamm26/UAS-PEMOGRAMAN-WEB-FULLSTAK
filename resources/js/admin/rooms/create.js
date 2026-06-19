const imageInput = document.getElementById("imageInput");
const imagePreview = document.getElementById("imagePreview");

imageInput.addEventListener("change", function () {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        // Saat file selesai dibaca
        reader.onload = function (e) {
            imagePreview.setAttribute("src", e.target.result);
            imagePreview.style.display = "block"; // Menampilkan elemen gambar
        };

        // Membaca file sebagai Data URL
        reader.readAsDataURL(file);
    } else {
        // Sembunyikan jika tidak ada file yang dipilih
        imagePreview.style.display = "none";
    }
});
