<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Utama</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f9f9f9;
      color: #333;
    }
    header {
      background-color: #4285f4;
      color: white;
      padding: 20px;
      text-align: center;
      border-radius: 8px;
    }
    main {
      margin-top: 20px;
    }
    section {
      background-color: white;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 15px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    h1, h2 {
      margin: 0 0 10px 0;
    }
    ul {
      padding-left: 0; /* hilangkan padding default ul */
      list-style: none; /* hilangkan bullet default */
    }
    ul li {
      background-color: #e3f2fd;
      border: 1px solid #90caf9;
      padding: 10px 15px;
      margin-bottom: 10px;
      border-radius: 6px;
      transition: background-color 0.3s;
    }
    ul li:hover {
      background-color: #bbdefb;
    }
    a {
      color: #4285f4;
      text-decoration: none;
      display: block; /* agar link memenuhi kotak */
    }
    a:hover {
      text-decoration: underline;
    }
    footer {
      text-align: center;
      padding: 15px;
      background-color: #e8e8e8;
      position: fixed;
      bottom: 0;
      width: 100%;
      border-top: 1px solid #ccc;
      font-size: 0.9em;
      color: #666;
    }
  </style>
</head>
<body>
  <header>
    <h1>Praktikum OOP Ke - 5</h1>
  </header>
  <main>
    <section>
      <h2>Praktikum 5</h2>
      <ul>
        <a href="classobjek.php">Modul 1: Object Class</a>
        <a href="enkapsulasi.php">Modul 2: Enkapsulasi</a>
      </ul>
    </section>
  </main>
  <footer>
    <p>© 2025 Terima Kasih.</p>
  </footer>
</body>
</html>
