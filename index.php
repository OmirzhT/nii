<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>НИИ</title>

</head>
<body>
	<?php require "blocks/header.php"?>

<form name="search" method="post" action="search.php">
    <input type="search" name="query" placeholder="Поиск">
    <button type="submit">Найти</button> 
</form>
	<div class="container mt-5">
		<h3 class="mb-5">Новости</h3>

		<div class="d-flex flex-raw">

		<div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">НОВОСТИ ЦЕНТРА</h4>
      </div>
      <div class="card-body">
      	<img src="img/1.jpg" class="img-thumbnail" >

       	<ul class="list-unstyled mt-3 mb-4">
       		<nav class="my-2 my-md-0 mr-md-3">
          <a a class="text-muted" href="uckonkursa.php">УВАЖАЕМЫЕ УЧАСТНИКИ КОНКУРСА!</a><br/>
      </nav>
        </ul>
       

      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">СМИ О НАС</h4>
      </div>
      <div class="card-body">
        <img src="img/2.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
        	<nav class="my-2 my-md-0 mr-md-3">
          <a a class="text-muted" href="nauka.php">НАУКА КАЗАХСТАНА: В ОЖИДАНИИ ПРОРЫВА</a><br/>
          <br><br/>
          <a a class="text-muted" href="kaznauka.php">КАЗАХСТАНСКАЯ НАУКА: ДВА В ОДНОМ</a><br/>
    </nav>
        </ul>
        
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">ОБЬЯВЛЕНИЯ</h4>
      </div>
      <div class="card-body">
        <img src="img/3.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <a a class="text-muted" href="anouns.php">ОБЬЯВЛЕНИЯ НА ПРИВЛЕЧЕНИЕ АУТСОРСИНГОВОЙ КОМПАНИИ</a><br/>
          
        </ul>
        
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">НОВОСТИ МОН</h4>
      </div>
      <div class="card-body">
       <img src="img/4.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <a a class="text-muted" href="konkurs.php">О КОНКУРСЕ НА ГРАНТОВОЕ ФИНАНСИРОВАНИЕ 2021-2023 ГОДЫ</a><br/>
         
        </ul>
        
      </div>
    </div>
</div>
<?php require "blocks/footer.php"?>


</body>
</html>>
