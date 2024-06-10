<?php
$tipe = ['Standard Double Bed','Single Bed', 'King Sized Bed', 'Single Semi Double Bed'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Global styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    /* Main container */
    .container {
      max-width: 1100px;
      padding: 20px;
      margin: 100px auto;
      text-align: center; /* Center content */
    }

    /* Header section */
    .header {
      color: #007bff;
      margin-bottom: 20px; /* Add space below header */
    }

    .header-title {
      font-weight: bold;
      margin-bottom: 20px; /* Add space below header title */
    }

    /* Button styles */
    button {
      padding: 10px 20px; 
      font-size: 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="https://picsum.photos/406/203" alt="">
    <h1 class="header">{{$index[0]}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sequi assumenda quisquam quia voluptatem? Atque, officia nemo rem obcaecati qui impedit, deserunt sunt odio quae distinctio quaerat in modi. Nisi.</p>
  </div>
</body>
</html>
