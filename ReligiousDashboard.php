<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Tourism</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.css" rel="stylesheet">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/Dashboard-pages-css/ReligiousDashboard.css">
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="container conta">    
      <div class="Dash-div container">
       <div class="header-div"><h3 class="dash-header">Religious Dashboard</h3></div>
       <div class="card text-center">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Religious</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dash-link" href="#">Cultural</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dash-link" href="#">Leisure</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dash-link">Medical</a>
          </li>
        </ul>
        <div class="table-div">
          <form method="POST" class="search-form">
            <input type="search" name="Research" class="form-control search-input" placeholder="Enter item name"/>
            <input type="submit" class="btn search-submit" value="Search" name="sib"/>
          </form>
          <div class="add-new-div">
            <button onclick="newPlaceForm()" class="btn btn-success me-1" ><i class="fa-regular fa-square-plus"></i></button>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Cost</th>
              <th scope="col">Location</th>
              <th scope="col">start time</th>
              <th scope="col">closing  time</th>
              <th scope="col">description</th>
              <th scope="col">Image</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <!--php for loop-->
            <tr>
              <td scope="col">1</td>
              <td scope="col">Name</td>
              <td scope="col">Cost</td>
              <td scope="col">Location</td>
              <td scope="col">Start time</td>
              <td scope="col">close time</td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
              <!--for backend dev:-> on click for add ,edit ,description and image buttons you can show all inputs in (ReligiousDashboard.js) file-->
            </tr>
            <tr>
              <td scope="col">1</td>
              <td scope="col">Name</td>
              <td scope="col">Cost</td>
              <td scope="col">Location</td>
              <td scope="col">Start time</td>
              <td scope="col">close time</td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
              <!--for backend dev:-> on click for add ,edit ,description and image buttons you can show all inputs in (ReligiousDashboard.js) file-->
            </tr>
            <tr>
              <td scope="col">1</td>
              <td scope="col">Name</td>
              <td scope="col">Cost</td>
              <td scope="col">Location</td>
              <td scope="col">Start time</td>
              <td scope="col">close time</td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
              <!--for backend dev:-> on click for add ,edit ,description and image buttons you can show all inputs in (ReligiousDashboard.js) file-->
            </tr>
            <tr>
              <td scope="col">1</td>
              <td scope="col">Name</td>
              <td scope="col">Cost</td>
              <td scope="col">Location</td>
              <td scope="col">Start time</td>
              <td scope="col">close time</td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
              <!--for backend dev:-> on click for add ,edit ,description and image buttons you can show all inputs in (ReligiousDashboard.js) file-->
            </tr>
            <tr>
              <td scope="col">1</td>
              <td scope="col">Name</td>
              <td scope="col">Cost</td>
              <td scope="col">Location</td>
              <td scope="col">Start time</td>
              <td scope="col">close time</td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
              <!--for backend dev:-> on click for add ,edit ,description and image buttons you can show all inputs in (ReligiousDashboard.js) file-->
            </tr>
            <tr>
              <td scope="col">1</td>
              <td scope="col">Name</td>
              <td scope="col">Cost</td>
              <td scope="col">Location</td>
              <td scope="col">Start time</td>
              <td scope="col">close time</td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
              <!--for backend dev:-> on click for add ,edit ,description and image buttons you can show all inputs in (ReligiousDashboard.js) file-->
            </tr>
            <tr>
              <td scope="col">1</td>
              <td scope="col">Name</td>
              <td scope="col">Cost</td>
              <td scope="col">Location</td>
              <td scope="col">Start time</td>
              <td scope="col">close time</td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
              <!--for backend dev:-> on click for add ,edit ,description and image buttons you can show all inputs in (ReligiousDashboard.js) file-->
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <?php include "footer.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js" integrity="sha512-F3F53+tMh/CBxMQ60GN5R4EiFW7PcuND+9IDC3Qpkwc7SfxgzHigRdUO3+2+mNal2ot3Wp6KR0zx8r8BbsW+Bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="javascript/jquery-3.6.0.min.js"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/Dashboard-Pages-js/ReligiousDashboard.js"></script>
</body>
</html>