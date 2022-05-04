<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'chez_diallo');

// Obtenez le nombre total d'enregistrements de notre table "étudiants".
$total_pages = $mysqli->query('SELECT * FROM produit')->num_rows;

// Vérifiez si le numéro de page est spécifié et vérifiez s'il s'agit d'un numéro, sinon retournez le numéro de page par défaut qui est 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

//Nombre de résultats à afficher sur chaque page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM produit ORDER BY titre LIMIT ?,?')) {
	// Calculez la page pour obtenir les résultats dont nous avons besoin à partir de notre tableau
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Obtenez les résultats...
	$result = $stmt->get_result();
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>PHP & MySQL Pagination by CodeShack</title>
			<meta charset="utf-8">
             <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/upgrade.png" type="">
      <title>Chez-Diallo</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
	  <link href="css/responsive.css" rel="stylesheet" />
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<style>
			html {
				font-family: Tahoma, Geneva, sans-serif;
				padding: 20px;
				background-color: #F8F9F9;
			}
			/*table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #f7444e;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
		*/	
			.pagination2 {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
			}
			.pagination2 li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination2 li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination2 li a:hover {
				background-color: #d4dada;
			}
			.pagination2 .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination2 .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination2 .currentpage a:hover {
				background-color: #518acb;
			}
            img{
                height:50px;
                width:50px;
            }
			</style> 
		</head>
		<body>
        
        <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Liste des produits</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

            <div class="card border-danger">
          <div class="card-body">
              <div class="row">
                  
              </div>
              <table class="table table-striped">
                  <thead>
				<tr>
					<th>image</th>
					<th>titre</th>
                    <th>prix</th>
                    <th>description</th>
                    <th>Actions</th>
				</tr>
                </thead>
                <tbody>
				<?php foreach ($result as $row ){ ?>
				<tr>
					<td><img src="images/<?php echo $row['image'];?> " alt=""></td>
					<td><?php echo $row['titre']; ?></td>
					<td><?php echo $row['prix']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                <td>
                          <a  href="detail.php?id=<?= $row['id_produit'];?>" class="btn btn-sm btn-info"   href="show.php?id="><i class="fa fa-eye"></i></a>
                          
                              <a onclick="return confirm('Voulez-vous vraiment supprimer cet enrégistrement?')" href="supprimer.php?id=<?= $mess['id_contact'];?>" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i></a>
                              
                          </td>
      </tr>
      <?php } ?>
                          
                  </tbody>
              </table>
          </div>
            
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<ul class="pagination2">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="pagination2.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="pagination2.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="pagination2.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="pagination.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="pagination2.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pagination2.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pagination2.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="pagination2.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="pagination2.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			<?php endif; ?>
		</body>
	</html>
	<?php
	$stmt->close();
}
?>
