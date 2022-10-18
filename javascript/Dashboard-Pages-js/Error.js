function Error(Err)
{
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: Err,
        footer: '<a href="./ReligiousDashboard.php">Pleace try again</a>'
      })
}

function Done(Su)
{
    Swal.fire({
        icon: 'success',
        title: 'Done',
        text: Su,
      })
}
