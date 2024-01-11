
<!doctype html>
<html lang="en">
    <head>
        <title>Model Management</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        
    </head>

    <body>
        <style>
            @import url("https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular");
.m {
  font-family: "BMWTypeNext Pro Regular";
}
body {
  font-family: "BMWTypeNext Pro Regular";
}
        </style>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <?php 
        session_start();
        if (!isset($_SESSION["username"])) {
            header("Location: login.php");
            exit();
        }
        include('connection.php');
        $sql="SELECT * FROM `bmw_models11`";
        $result=mysqli_query($conn,$sql);
       

        if(mysqli_num_rows($result)> 0){

        echo"            <div class='container'>

        <div
            class='table-responsive'
        >
            <table
                class='table'
            >
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Image</th>
                        <th scope='col'>Model </th>
                        <th scope='col'>Price </th>
                        <th scope='col'>Action </th>
                    </tr>
                </thead>";


                while($row=mysqli_fetch_assoc($result)){
                    echo"                    <tbody>
                    <tr class=''>
                        <td scope='row'><h4>{$row['ID']}</h4></td>
                        <td>
                        <img
                        src='COVERIMAGE/{$row['image']}'
                        class=' rounded-top  img-fluid'
                        alt=''
                    />
                    </td>
                        <td scope='row'><h1>{$row['Model Name']}</h1>   </td>
                        <td scope='row'><h3>{$row['Price']}</h3></td>
                        <td>

                   <a href='test.php?id={$row['ID']}' <button type='button' class='btn btn-warning'>Edit</button></a>
                  <a href=''  <button type='button' class='btn btn-danger mt-3'>Delete</button></a>
                    </td>
                    </tr>
                </tbody>";




                }

                echo"      </table>
                </div>
            </div>";





        }

        ?>


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
