<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Mahasiswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #6dd5ed, #2193b0);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .profile-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      text-align: center;
      width: 300px;
      padding: 30px 20px;
      transition: transform 0.3s;
    }

    .profile-card:hover {
      transform: scale(1.05);
    }

    .profile-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: #ddd;
      background-image: url("{{asset('images/foto.png')}}");
      background-size: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 40px;
      margin: 0 auto 20px;
      color: #666;
    }

    .profile-info {
      margin: 10px 0;
      padding: 12px;
      background: #f5f5f5;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      color: #333;
      box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
    }

    .profile-info:nth-child(1) { background: #e0f7fa; }
    .profile-info:nth-child(2) { background: #ffe0b2; }
    .profile-info:nth-child(3) { background: #c8e6c9; }
  </style>
</head>
<body>
  <div class="profile-card">
    <div class="profile-img"></div>
    <div class="profile-info">Nama: Adi Rahmad Safei</div>
    <div class="profile-info">Kelas: A</div>
    <div class="profile-info">NPM: 2357051014</div>
  </div>
</body>
</html>
