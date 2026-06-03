alert("Selamat datang di website Gaizka!");

const button = document.getElementById("contactBtn");

const description = document.getElementById("description");

button.onclick = function () {
    button.innerHTML = "Terkirim";
    description.innerHTML =
        "Terima kasih sudah mengunjungi website saya!";
    document.body.style.backgroundColor = "lightblue";
};

function showMessage() {
    console.log("Function berjalan!");
}

showMessage();

const form = document.getElementById("contactForm");

form.addEventListener("submit", function(event) {

    event.preventDefault();

    const nama = document.getElementById("nama").value;
    const email = document.getElementById("email").value;
    const pesan = document.getElementById("pesan").value;

    if (
        nama === "" ||
        email === "" ||
        pesan === ""
    ) {
        alert("Semua field wajib diisi!");
        return;
    }

    alert(
    `Halo ${nama}, pesan kamu berhasil dikirim!`);
});