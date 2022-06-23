function myFunction() {
  Swal.fire({
    title: 'Apakah anda yakin',
    text: "ingin menghapus foto?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Hapus!'
  }).then((result) => {
    if (result.isConfirmed){
      Swal.fire('Saved!', '', 'success')
    }else{
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
}