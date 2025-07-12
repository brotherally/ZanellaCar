<?php
// Incluir a conexão com o banco de dados
include('db.php');

// Pegar o ID do carro da URL
$id = $_GET['id'];  // Pega o ID do carro da URL

// Consultar os detalhes do carro
$sql = "SELECT * FROM carros WHERE id = $id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Carro - Zanella Car</title>
    <link rel="shortcut icon" href="imagens/icone.png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&display=swap" rel="stylesheet">

    <!-- CSS Local -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Cabeçalho -->
  <header>
    <a href="index.html" title="Home">
      <img src="imagens/logo.png" alt="Zanella Car" title="Zanella Car">
    </a>
    <a href="javascript:mostrarmenu()" class="menu">
      <i class="fas fa-bars"></i>
    </a>
    <nav>
      <ul>
        <li><a href="index.html" title="Início"><i class="fas fa-home"></i> Início</a></li>
        <li><a href="carros.php" title="Carros Disponíveis"><i class="fas fa-car"></i> Carros Disponíveis</a></li>
        <li><a href="sobre.html" title="Sobre Nós"><i class="fas fa-envelope"></i> Sobre Nós</a></li>
        <li><a href="contato.html" title="Contato"><i class="fas fa-envelope"></i> Contato</a></li>
      </ul>
    </nav>
  </header>

  <?php
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo '<div class="detalhes-carro">';
      echo '<img src="imagens/' . $row['imagem'] . '" alt="' . $row['nome'] . '" style="width:300px;height:200px;">';
      echo '<h2>' . $row['nome'] . '</h2>';
      echo '<p>' . $row['descricao'] . '</p>';
      echo '<p><strong>Preço:</strong> R$ ' . number_format($row['preco'], 2, ',', '.') . '</p>';
      echo '</div>';
  } else {
      echo "Carro não encontrado.";
  }

  $conn->close();
  ?>

  <footer style="background: linear-gradient(to bottom, #FF0000, #000000);">
    <div class="container text-white text-center py-4">
      <h4>Contato</h4>
      <p>Telefone: (44) 99772-1255</p>
      <p>Email: 01zanellacar@gmail.com</p>
      <p>Endereço: Avenida Goioere, 2556, Campo Mourão - PR</p>

      <div>
        <a href="https://www.facebook.com/zanella.veiculos.376" class="text-white mx-2" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/zanellacar1/" class="text-white mx-2" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>

      <p>&copy; 2025 Zanella Car - Todos os direitos reservados</p>
    </div>
  </footer>

  <script src="JavaScript/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
