import "./bootstrap";

// Fungsi Print Struk
function cetakStruk(url) {
    const showPrint = window.open(url, "_blank", "height=600,width=400");

    showPrint.onload = () => {
        showPrint.print();
        showPrint.onafterprint = () => {
            showPrint.close();
        };
    };
    return false;
}
window.cetakStruk = cetakStruk;
//
