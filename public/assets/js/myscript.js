// function myFunction() {
//   Swal.fire({
//     title: 'Apakah anda yakin',
//     text: "ingin menghapus foto?",
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonColor: '#3085d6',
//     cancelButtonColor: '#d33',
//     confirmButtonText: 'Ya, Hapus!'
//   }).then((result) => {
//     if (result.isConfirmed){
//       Swal.fire('Saved!', '', 'success')
//     }else{
//       Swal.fire('Changes are not saved', '', 'info')
//     }
//   })
// }
// $('#save').on('click', function() {
//     Swal.fire({
//         title: 'Data Porfotoflio',
//         text: 'Berhasil ! ',
//         icon: 'info'
//       });
// });

//Flash Data
const swal = $('.porto').data('porto'); //Ambil Data FlashDatanya
if ( swal ){
    //Kalau Ada isinya jalankan sweetalert
    Swal.fire({
        title: 'Data Portfolio ',
        text: 'Berhasil ' + swal,
        icon: 'success'
    })
}

$('.tombol-hapus').on('click',function(e){
    //Matikan fungsi A href nya
    e.preventDefault();
    //Ambil Isi Hrefnya
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data Akan Dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya, Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          //Tampilkan Href
          document.location.href = href;
        }
      })
});
