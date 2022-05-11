// import swal
import Swal from "sweetalert2";
$(".btn-hapus").click(function (e) {
    e.preventDefault();
    let href = $(this).attr("href");
    Swal.fire({
        title: "Yakin Menghapus Data Ini?",
        text: "Data Akan Terhapus Permanen!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yakin",
        cancelButtonText: "Tidak",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire("Terhapus!", "Data Berhasil Dihapus.", "success");
            document.getElementById("formHapus").action = href;
            document.getElementById("formHapus").submit();
        }
    });
});
